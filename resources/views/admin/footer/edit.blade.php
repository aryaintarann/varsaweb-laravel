@extends('admin.layouts.app')
@section('title', 'Edit Footer')
@section('heading', 'Footer')
@section('subheading', 'Kelola informasi footer dan social media links')

@section('content')
    <form method="POST" action="{{ route('admin.footer.update') }}" class="max-w-3xl">
        @csrf
        @method('PUT')

        <div class="rounded-2xl border border-white/10 bg-white/5 p-6 space-y-6">
            <div>
                <label for="tagline" class="block text-sm font-medium text-slate-300 mb-2">Tagline</label>
                <textarea id="tagline" name="tagline" rows="3"
                    class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all">{{ old('tagline', $setting->tagline) }}</textarea>
            </div>

            <div>
                <label for="address" class="block text-sm font-medium text-slate-300 mb-2">Alamat</label>
                <input type="text" id="address" name="address" value="{{ old('address', $setting->address) }}"
                    class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all"
                    placeholder="123 Tech Lane, Innovation City">
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
                <label for="copyright_text" class="block text-sm font-medium text-slate-300 mb-2">Copyright Text</label>
                <input type="text" id="copyright_text" name="copyright_text"
                    value="{{ old('copyright_text', $setting->copyright_text) }}"
                    class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all">
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
                    <form method="POST" action="{{ route('admin.footer.social.update', $link) }}"
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
                    <form method="POST" action="{{ route('admin.footer.social.destroy', $link) }}"
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
            <form method="POST" action="{{ route('admin.footer.social.store') }}">
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