@extends('admin.layouts.app')
@section('title', 'Edit Contact')
@section('heading', 'Contact Page')
@section('subheading', 'Kelola konten halaman Contact')

@section('content')
    <form method="POST" action="{{ route('admin.contact.update') }}" class="max-w-3xl">
        @csrf
        @method('PUT')

        <div class="rounded-2xl border border-white/10 bg-white/5 p-6 space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="badge_text" class="block text-sm font-medium text-slate-300 mb-2">Badge Text</label>
                    <input type="text" id="badge_text" name="badge_text"
                        value="{{ old('badge_text', $setting->badge_text) }}"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all">
                </div>

                <div>
                    <label for="title" class="block text-sm font-medium text-slate-300 mb-2">Title</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $setting->title) }}"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all">
                </div>
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-slate-300 mb-2">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all">{{ old('description', $setting->description) }}</textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-300 mb-2">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $setting->email) }}"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all">
                </div>

                <div>
                    <label for="phone" class="block text-sm font-medium text-slate-300 mb-2">Phone</label>
                    <input type="text" id="phone" name="phone" value="{{ old('phone', $setting->phone) }}"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all">
                </div>
            </div>

            <div>
                <label for="operating_hours" class="block text-sm font-medium text-slate-300 mb-2">Jam Operasional</label>
                <input type="text" id="operating_hours" name="operating_hours"
                    value="{{ old('operating_hours', $setting->operating_hours) }}"
                    class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all"
                    placeholder="Senin - Jumat 09.00 - 18.00">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label for="badge_1" class="block text-sm font-medium text-slate-300 mb-2">Badge 1</label>
                    <input type="text" id="badge_1" name="badge_1" value="{{ old('badge_1', $setting->badge_1) }}"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all">
                </div>
                <div>
                    <label for="badge_2" class="block text-sm font-medium text-slate-300 mb-2">Badge 2</label>
                    <input type="text" id="badge_2" name="badge_2" value="{{ old('badge_2', $setting->badge_2) }}"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all">
                </div>
                <div>
                    <label for="badge_3" class="block text-sm font-medium text-slate-300 mb-2">Badge 3</label>
                    <input type="text" id="badge_3" name="badge_3" value="{{ old('badge_3', $setting->badge_3) }}"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all">
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center gap-3">
            <button type="submit"
                class="inline-flex items-center rounded-xl bg-brand-500 px-6 py-3 text-white font-semibold hover:bg-brand-600 transition-all duration-300 hover:shadow-lg hover:shadow-brand-500/25 active:scale-[0.98]">
                Simpan Perubahan
            </button>
        </div>
    </form>

    <div class="mt-8 rounded-2xl border border-white/10 bg-white/5 p-6 max-w-3xl">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-lg font-semibold text-white">Social Media Links</h2>
            <p class="text-xs text-slate-400">Tampil di Footer & Halaman Contact</p>
        </div>

        <div class="space-y-4 mb-6">
            @foreach($socialLinks as $link)
                <div class="rounded-xl border border-white/10 bg-white/5 p-4 flex gap-4 items-center">
                    <form method="POST" action="{{ route('admin.contact.social.update', $link) }}"
                        class="flex-1 flex flex-wrap items-end gap-3">
                        @csrf
                        @method('PUT')
                        <div class="flex-1 min-w-[150px]">
                            <label class="block text-xs text-slate-500 mb-1">Platform</label>
                            <select name="platform"
                                class="w-full rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                                @foreach(['Instagram', 'Facebook', 'Twitter', 'LinkedIn', 'YouTube', 'TikTok', 'WhatsApp', 'Dribbble', 'Behance', 'Github'] as $platform)
                                    <option value="{{ $platform }}" {{ $link->platform == $platform ? 'selected' : '' }}>
                                        {{ $platform }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex-[2] min-w-[200px]">
                            <label class="block text-xs text-slate-500 mb-1">URL / Link</label>
                            <input type="url" name="url" value="{{ $link->url }}" required
                                class="w-full rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                        </div>
                        <button type="submit"
                            class="rounded-lg bg-brand-500/20 text-brand-400 px-3 py-2 text-sm hover:bg-brand-500/30 transition-all">Update</button>
                    </form>
                    <form method="POST" action="{{ route('admin.contact.social.destroy', $link) }}"
                        onsubmit="return confirm('Hapus link sosial media ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-xs text-red-400 hover:text-red-300 transition-colors">Hapus</button>
                    </form>
                </div>
            @endforeach
        </div>

        <div class="rounded-xl border border-dashed border-white/20 p-4">
            <h3 class="text-sm font-medium text-slate-400 mb-3">Tambah Sosial Media Baru</h3>
            <form method="POST" action="{{ route('admin.contact.social.store') }}">
                @csrf
                <div class="flex flex-wrap items-end gap-3">
                    <div class="flex-1 min-w-[150px]">
                        <label class="block text-xs text-slate-500 mb-1">Platform</label>
                        <select name="platform"
                            class="w-full rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                            @foreach(['Instagram', 'Facebook', 'Twitter', 'LinkedIn', 'YouTube', 'TikTok', 'WhatsApp', 'Dribbble', 'Behance', 'Github'] as $platform)
                                <option value="{{ $platform }}">{{ $platform }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex-[2] min-w-[200px]">
                        <label class="block text-xs text-slate-500 mb-1">URL / Link</label>
                        <input type="url" name="url" required
                            class="w-full rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all"
                            placeholder="https://...">
                    </div>
                    <button type="submit"
                        class="rounded-lg bg-brand-500 text-white px-4 py-2 text-sm font-medium hover:bg-brand-600 transition-all">Tambah</button>
                </div>
            </form>
        </div>
    </div>
@endsection