@extends('admin.layouts.app')
@section('title', 'Edit About')
@section('heading', 'About Page')
@section('subheading', 'Kelola konten halaman About dan anggota tim')

@section('content')
    <div class="max-w-3xl space-y-8">
        <form method="POST" action="{{ route('admin.about.update') }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="rounded-2xl border border-white/10 bg-white/5 p-6 space-y-6">
                <h2 class="text-lg font-semibold text-white">About Content</h2>

                <div>
                    <label for="title" class="block text-sm font-medium text-slate-300 mb-2">Title</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $setting->title) }}"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all">
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-slate-300 mb-2">Deskripsi</label>
                    <textarea id="description" name="description" rows="6"
                        class="richtext w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all">{{ old('description', $setting->description) }}</textarea>
                </div>

                <div>
                    <label for="image" class="block text-sm font-medium text-slate-300 mb-2">Logo Image</label>
                    @if($setting->image_path)
                        <div class="mb-3">
                            @if(str_starts_with($setting->image_path, 'uploads/'))
                                <img src="{{ asset('storage/' . $setting->image_path) }}" alt="Current Logo"
                                    class="h-32 w-auto rounded-xl object-cover border border-white/10">
                            @else
                                <img src="{{ asset($setting->image_path) }}" alt="Current Logo"
                                    class="h-32 w-auto rounded-xl object-cover border border-white/10">
                            @endif
                            <p class="mt-1 text-xs text-slate-500">Gambar saat ini</p>
                        </div>
                    @endif
                    <input type="file" id="image" name="image" accept="image/jpeg,image/png,image/webp"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-slate-400 file:mr-4 file:py-1 file:px-3 file:rounded-lg file:border-0 file:bg-brand-500/20 file:text-brand-400 file:text-sm file:font-medium hover:file:bg-brand-500/30 file:cursor-pointer focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                    <p class="mt-1 text-xs text-slate-500">Format: JPG, PNG, WebP. Maks: 2MB</p>
                </div>

                <div>
                    <button type="submit"
                        class="inline-flex items-center rounded-xl bg-brand-500 px-6 py-3 text-white font-semibold hover:bg-brand-600 transition-all duration-300 hover:shadow-lg hover:shadow-brand-500/25 active:scale-[0.98]">
                        Simpan About
                    </button>
                </div>
            </div>
        </form>

        <div class="rounded-2xl border border-white/10 bg-white/5 p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-lg font-semibold text-white">Team Members</h2>
            </div>

            <div class="space-y-4 mb-6">
                @foreach($teamMembers as $member)
                    <div class="rounded-xl border border-white/10 bg-white/5 p-4">
                        <form method="POST" action="{{ route('admin.about.member.update', $member) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="flex flex-wrap items-end gap-3">
                                <div class="flex-1 min-w-[120px]">
                                    <label class="block text-xs text-slate-500 mb-1">Nama</label>
                                    <input type="text" name="name" value="{{ $member->name }}"
                                        class="w-full rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                                </div>
                                <div class="flex-1 min-w-[120px]">
                                    <label class="block text-xs text-slate-500 mb-1">Posisi</label>
                                    <input type="text" name="position" value="{{ $member->position }}"
                                        class="w-full rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                                </div>
                                <button type="submit"
                                    class="rounded-lg bg-brand-500/20 text-brand-400 px-3 py-2 text-sm hover:bg-brand-500/30 transition-all">Update</button>
                            </div>
                            <div class="mt-3 flex items-center gap-4">
                                @if($member->photo)
                                    <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}"
                                        class="w-12 h-12 rounded-lg object-cover border border-white/10">
                                @else
                                    <div
                                        class="w-12 h-12 rounded-lg border border-dashed border-white/20 bg-white/5 flex items-center justify-center text-xs text-slate-500">
                                        No foto</div>
                                @endif
                                <div class="flex-1">
                                    <input type="file" name="photo" accept="image/jpeg,image/png,image/webp"
                                        class="w-full rounded-lg border border-white/10 bg-white/5 px-3 py-1.5 text-xs text-slate-400 file:mr-2 file:py-0.5 file:px-2 file:rounded file:border-0 file:bg-brand-500/20 file:text-brand-400 file:text-xs hover:file:bg-brand-500/30 file:cursor-pointer focus:outline-none transition-all">
                                </div>
                            </div>
                        </form>
                        <form method="POST" action="{{ route('admin.about.member.destroy', $member) }}" class="mt-2"
                            onsubmit="return confirm('Hapus anggota ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-xs text-red-400 hover:text-red-300 transition-colors">Hapus</button>
                        </form>
                    </div>
                @endforeach
            </div>

            <div class="rounded-xl border border-dashed border-white/20 p-4">
                <h3 class="text-sm font-medium text-slate-400 mb-3">Tambah Anggota Baru</h3>
                <form method="POST" action="{{ route('admin.about.member.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-wrap items-end gap-3 mb-3">
                        <div class="flex-1 min-w-[120px]">
                            <label class="block text-xs text-slate-500 mb-1">Nama</label>
                            <input type="text" name="name" required
                                class="w-full rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all"
                                placeholder="Nama">
                        </div>
                        <div class="flex-1 min-w-[120px]">
                            <label class="block text-xs text-slate-500 mb-1">Posisi</label>
                            <input type="text" name="position" required
                                class="w-full rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all"
                                placeholder="Posisi">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="block text-xs text-slate-500 mb-1">Foto</label>
                        <input type="file" name="photo" accept="image/jpeg,image/png,image/webp"
                            class="w-full rounded-lg border border-white/10 bg-white/5 px-3 py-1.5 text-xs text-slate-400 file:mr-2 file:py-0.5 file:px-2 file:rounded file:border-0 file:bg-brand-500/20 file:text-brand-400 file:text-xs hover:file:bg-brand-500/30 file:cursor-pointer focus:outline-none transition-all">
                        <p class="mt-1 text-xs text-slate-600">Format: JPG, PNG, WebP. Maks: 2MB</p>
                    </div>
                    <button type="submit"
                        class="rounded-lg bg-brand-500 text-white px-4 py-2 text-sm font-medium hover:bg-brand-600 transition-all">Tambah</button>
                </form>
            </div>
        </div>


    </div>
@endsection