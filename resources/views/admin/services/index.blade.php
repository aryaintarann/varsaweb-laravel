@extends('admin.layouts.app')
@section('title', 'Services')
@section('heading', 'Services Page')
@section('subheading', 'Kelola seluruh konten halaman layanan')

@section('content')
    <div class="max-w-4xl space-y-8">

        {{-- ═══ Our Services Hero Section ═══ --}}
        <form method="POST" action="{{ route('admin.services.page-setting.update') }}">
            @csrf
            @method('PUT')
            <div class="rounded-2xl border border-white/10 bg-white/5 p-6 space-y-6">
                <h2 class="text-lg font-semibold text-white flex items-center gap-2">
                    <svg class="w-5 h-5 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                    Our Services — Header
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs text-slate-500 mb-1">Badge Text</label>
                        <input type="text" name="badge_text" value="{{ old('badge_text', $pageSetting->badge_text ?? '') }}"
                            class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                    </div>
                    <div>
                        <label class="block text-xs text-slate-500 mb-1">Title</label>
                        <input type="text" name="title" value="{{ old('title', $pageSetting->title ?? '') }}"
                            class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                    </div>
                </div>

                <div>
                    <label class="block text-xs text-slate-500 mb-1">Description</label>
                    <textarea name="description" rows="3"
                        class="richtext w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">{{ old('description', $pageSetting->description ?? '') }}</textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-xs text-slate-500 mb-1">Tag 1</label>
                        <input type="text" name="tag_1" value="{{ old('tag_1', $pageSetting->tag_1 ?? '') }}"
                            class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                    </div>
                    <div>
                        <label class="block text-xs text-slate-500 mb-1">Tag 2</label>
                        <input type="text" name="tag_2" value="{{ old('tag_2', $pageSetting->tag_2 ?? '') }}"
                            class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                    </div>
                    <div>
                        <label class="block text-xs text-slate-500 mb-1">Tag 3</label>
                        <input type="text" name="tag_3" value="{{ old('tag_3', $pageSetting->tag_3 ?? '') }}"
                            class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-xs text-slate-500 mb-1">Stat 1 Label</label>
                        <input type="text" name="stat_1_label"
                            value="{{ old('stat_1_label', $pageSetting->stat_1_label ?? '') }}"
                            class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all"
                            placeholder="Projects">
                    </div>
                    <div>
                        <label class="block text-xs text-slate-500 mb-1">Stat 1 Value</label>
                        <input type="text" name="stat_1_value"
                            value="{{ old('stat_1_value', $pageSetting->stat_1_value ?? '') }}"
                            class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all"
                            placeholder="120+">
                    </div>
                    <div>
                        <label class="block text-xs text-slate-500 mb-1">Stat 2 Label</label>
                        <input type="text" name="stat_2_label"
                            value="{{ old('stat_2_label', $pageSetting->stat_2_label ?? '') }}"
                            class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all"
                            placeholder="Avg Launch">
                    </div>
                    <div>
                        <label class="block text-xs text-slate-500 mb-1">Stat 2 Value</label>
                        <input type="text" name="stat_2_value"
                            value="{{ old('stat_2_value', $pageSetting->stat_2_value ?? '') }}"
                            class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all"
                            placeholder="21 Hari">
                    </div>
                </div>

                <div>
                    <label class="block text-xs text-slate-500 mb-1">Approach Text</label>
                    <textarea name="approach_text" rows="2"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">{{ old('approach_text', $pageSetting->approach_text ?? '') }}</textarea>
                </div>

                <button type="submit"
                    class="rounded-xl bg-brand-500 px-5 py-2.5 text-white font-semibold hover:bg-brand-600 transition-all duration-300 hover:shadow-lg hover:shadow-brand-500/25 active:scale-[0.98]">
                    Simpan Header
                </button>
            </div>
        </form>

        {{-- ═══ Layanan Utama (Services CRUD - Inline Edit) ═══ --}}
        <div class="rounded-2xl border border-white/10 bg-white/5 p-6">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-semibold text-white flex items-center gap-2">
                    <svg class="w-5 h-5 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Layanan Utama
                    <span
                        class="ml-2 text-xs bg-white/10 text-slate-400 px-2 py-0.5 rounded-full">{{ $services->count() }}</span>
                </h2>
            </div>

            <div class="space-y-4 mb-4">
                @forelse($services as $service)
                    <div class="rounded-xl border border-white/10 bg-white/5 p-4">
                        <form method="POST" action="{{ route('admin.services.update', $service) }}">
                            @csrf @method('PUT')
                            <div class="flex flex-wrap items-end gap-3">
                                <div class="flex-1 min-w-[120px]">
                                    <label class="block text-xs text-slate-500 mb-1">Judul</label>
                                    <input type="text" name="title" value="{{ $service->title }}"
                                        class="w-full rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                                </div>

                                <button type="submit"
                                    class="rounded-lg bg-brand-500/20 text-brand-400 px-3 py-2 text-sm hover:bg-brand-500/30 transition-all">Update</button>
                            </div>
                            <div class="mt-3">
                                <label class="block text-xs text-slate-500 mb-1">Deskripsi</label>
                                <textarea name="description" rows="2"
                                    class="richtext w-full rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">{{ $service->description }}</textarea>
                            </div>
                        </form>
                        <form method="POST" action="{{ route('admin.services.destroy', $service) }}" class="mt-2"
                            onsubmit="return confirm('Hapus layanan ini?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-xs text-red-400 hover:text-red-300">Hapus</button>
                        </form>
                    </div>
                @empty
                    <div class="rounded-xl border border-dashed border-white/20 p-6 text-center">
                        <p class="text-slate-500 text-sm">Belum ada layanan.</p>
                    </div>
                @endforelse
            </div>

            <div class="rounded-xl border border-dashed border-white/20 p-4">
                <h3 class="text-xs font-medium text-slate-400 mb-2">Tambah Layanan</h3>
                <form method="POST" action="{{ route('admin.services.store') }}">
                    @csrf
                    <div class="flex flex-wrap items-end gap-3 mb-3">
                        <div class="flex-1 min-w-[120px]">
                            <label class="block text-xs text-slate-500 mb-1">Judul</label>
                            <input type="text" name="title" required
                                class="w-full rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-brand-500"
                                placeholder="Nama layanan">
                        </div>

                    </div>
                    <div class="mb-3">
                        <label class="block text-xs text-slate-500 mb-1">Deskripsi</label>
                        <textarea name="description" rows="2" required
                            class="w-full rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-brand-500"
                            placeholder="Deskripsi layanan"></textarea>
                    </div>
                    <button type="submit"
                        class="rounded-lg bg-brand-500 text-white px-4 py-2 text-sm font-medium hover:bg-brand-600 transition-all">Tambah</button>
                </form>
            </div>
        </div>

        {{-- ═══ Proses Kerja ═══ --}}
        <div class="rounded-2xl border border-white/10 bg-white/5 p-6">
            <h2 class="text-lg font-semibold text-white flex items-center gap-2 mb-4">
                <svg class="w-5 h-5 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                </svg>
                Proses Kerja
            </h2>

            <div class="space-y-3 mb-4">
                @foreach($workProcesses as $process)
                    <div class="rounded-xl border border-white/10 bg-white/5 p-3">
                        <form method="POST" action="{{ route('admin.services.process.update', $process) }}"
                            class="flex flex-wrap items-end gap-3">
                            @csrf @method('PUT')
                            <div class="w-24">
                                <label class="block text-xs text-slate-500 mb-1">Label</label>
                                <input type="text" name="step_label" value="{{ $process->step_label }}"
                                    class="w-full rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                            </div>
                            <div class="flex-1 min-w-[120px]">
                                <label class="block text-xs text-slate-500 mb-1">Judul</label>
                                <input type="text" name="title" value="{{ $process->title }}"
                                    class="w-full rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                            </div>

                            <button type="submit"
                                class="rounded-lg bg-brand-500/20 text-brand-400 px-3 py-2 text-sm hover:bg-brand-500/30 transition-all">Update</button>
                        </form>
                        <form method="POST" action="{{ route('admin.services.process.destroy', $process) }}" class="mt-1"
                            onsubmit="return confirm('Hapus step ini?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-xs text-red-400 hover:text-red-300">Hapus</button>
                        </form>
                    </div>
                @endforeach
            </div>

            <div class="rounded-xl border border-dashed border-white/20 p-3">
                <h3 class="text-xs font-medium text-slate-400 mb-2">Tambah Step</h3>
                <form method="POST" action="{{ route('admin.services.process.store') }}"
                    class="flex flex-wrap items-end gap-3">
                    @csrf
                    <div class="w-24">
                        <label class="block text-xs text-slate-500 mb-1">Label</label>
                        <input type="text" name="step_label" required
                            class="w-full rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-brand-500"
                            placeholder="Step 5">
                    </div>
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-xs text-slate-500 mb-1">Judul</label>
                        <input type="text" name="title" required
                            class="w-full rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-brand-500"
                            placeholder="Judul step">
                    </div>

                    <button type="submit"
                        class="rounded-lg bg-brand-500 text-white px-3 py-2 text-sm font-medium hover:bg-brand-600 transition-all">Tambah</button>
                </form>
            </div>
        </div>

        {{-- ═══ Portfolio ═══ --}}
        <div class="rounded-2xl border border-white/10 bg-white/5 p-6">
            <h2 class="text-lg font-semibold text-white flex items-center gap-2 mb-4">
                <svg class="w-5 h-5 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                Portfolio
            </h2>

            <div class="space-y-4 mb-4">
                @foreach($portfolios as $portfolio)
                    <div class="rounded-xl border border-white/10 bg-white/5 p-4">
                        <form method="POST" action="{{ url('admin/services/portfolio/' . $portfolio->id) }}"
                            enctype="multipart/form-data">
                            @csrf @method('PUT')
                            <div class="flex flex-wrap items-end gap-3">
                                <div class="flex-1 min-w-[120px]">
                                    <label class="block text-xs text-slate-500 mb-1">Judul</label>
                                    <input type="text" name="title" value="{{ $portfolio->title }}"
                                        class="w-full rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                                </div>
                                <button type="submit"
                                    class="rounded-lg bg-brand-500/20 text-brand-400 px-3 py-2 text-sm hover:bg-brand-500/30 transition-all">Update</button>
                            </div>
                            <div class="mt-3">
                                <label class="block text-xs text-slate-500 mb-1">Deskripsi Singkat <span
                                        class="text-slate-600">(tampil di card)</span></label>
                                <input type="text" name="short_description" value="{{ $portfolio->short_description }}"
                                    class="w-full rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                            </div>
                            <div class="mt-3">
                                <label class="block text-xs text-slate-500 mb-1">Deskripsi Detail <span
                                        class="text-slate-600">(tampil di halaman detail)</span></label>
                                <textarea name="description" rows="3"
                                    class="richtext w-full rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">{{ $portfolio->description }}</textarea>
                            </div>
                            <div class="mt-3 flex items-center gap-4">
                                @if($portfolio->image)
                                    <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}"
                                        class="w-16 h-12 rounded-lg object-cover border border-white/10">
                                @else
                                    <div
                                        class="w-16 h-12 rounded-lg border border-dashed border-white/20 bg-white/5 flex items-center justify-center text-[10px] text-slate-500">
                                        No img</div>
                                @endif
                                <input type="file" name="image" accept="image/jpeg,image/png,image/webp"
                                    class="flex-1 rounded-lg border border-white/10 bg-white/5 px-3 py-1.5 text-xs text-slate-400 file:mr-2 file:py-0.5 file:px-2 file:rounded file:border-0 file:bg-brand-500/20 file:text-brand-400 file:text-xs hover:file:bg-brand-500/30 file:cursor-pointer focus:outline-none transition-all">
                            </div>
                        </form>
                        <div class="mt-2 flex items-center justify-between">
                            <form method="POST" action="{{ url('admin/services/portfolio/' . $portfolio->id) }}"
                                onsubmit="return confirm('Hapus portfolio ini?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-xs text-red-400 hover:text-red-300">Hapus</button>
                            </form>
                            <a href="{{ route('portfolio.show', $portfolio->slug) }}" target="_blank"
                                class="text-xs text-brand-400 hover:text-brand-300">Lihat halaman →</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="rounded-xl border border-dashed border-white/20 p-4">
                <h3 class="text-xs font-medium text-slate-400 mb-2">Tambah Portfolio</h3>
                <form method="POST" action="{{ route('admin.services.portfolio.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="block text-xs text-slate-500 mb-1">Judul</label>
                        <input type="text" name="title" required
                            class="w-full rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-brand-500"
                            placeholder="Project Name">
                    </div>
                    <div class="mb-3">
                        <label class="block text-xs text-slate-500 mb-1">Deskripsi Singkat <span
                                class="text-slate-600">(tampil di card)</span></label>
                        <input type="text" name="short_description" required
                            class="w-full rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-brand-500"
                            placeholder="Deskripsi singkat untuk tampilan card">
                    </div>
                    <div class="mb-3">
                        <label class="block text-xs text-slate-500 mb-1">Deskripsi Detail <span
                                class="text-slate-600">(tampil di halaman detail)</span></label>
                        <textarea name="description" rows="3"
                            class="w-full rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-brand-500"
                            placeholder="Deskripsi lengkap project"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="block text-xs text-slate-500 mb-1">Gambar</label>
                        <input type="file" name="image" accept="image/jpeg,image/png,image/webp"
                            class="w-full rounded-lg border border-white/10 bg-white/5 px-3 py-1.5 text-xs text-slate-400 file:mr-2 file:py-0.5 file:px-2 file:rounded file:border-0 file:bg-brand-500/20 file:text-brand-400 file:text-xs hover:file:bg-brand-500/30 file:cursor-pointer focus:outline-none transition-all">
                    </div>
                    <button type="submit"
                        class="rounded-lg bg-brand-500 text-white px-4 py-2 text-sm font-medium hover:bg-brand-600 transition-all">Tambah
                        Portfolio</button>
                </form>
            </div>
        </div>
    </div>
@endsection