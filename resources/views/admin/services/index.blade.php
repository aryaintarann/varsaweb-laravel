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

        {{-- ═══ Layanan Utama ═══ --}}
        <div class="rounded-2xl border border-white/10 bg-white/5 p-6">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-semibold text-white flex items-center gap-2">
                    <svg class="w-5 h-5 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Layanan Utama
                    <span class="ml-1 text-xs bg-white/10 text-slate-400 px-2 py-0.5 rounded-full">{{ $services->count() }}</span>
                </h2>
                <button onclick="openModal('modal-add-service')"
                    class="inline-flex items-center gap-2 rounded-xl bg-brand-500 px-4 py-2 text-sm text-white font-semibold hover:bg-brand-600 transition-all duration-300 hover:shadow-lg hover:shadow-brand-500/25 active:scale-[0.98]">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                    Add Layanan
                </button>
            </div>

            @forelse($services as $service)
                <div class="flex items-center gap-4 rounded-xl border border-white/10 bg-white/5 px-4 py-3 mb-3">
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-white truncate">{{ $service->title }}</p>
                        <p class="text-xs text-slate-400 truncate mt-0.5">{{ Str::limit(strip_tags($service->description), 80) }}</p>
                    </div>
                    <div class="flex items-center gap-2 shrink-0">
                        <button onclick="openEditService({{ $service->id }}, '{{ addslashes($service->title) }}', {{ json_encode(strip_tags($service->description)) }})"
                            class="inline-flex items-center gap-1 rounded-lg bg-brand-500/15 text-brand-400 px-3 py-1.5 text-xs font-medium hover:bg-brand-500/30 transition-all">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                            Edit
                        </button>
                        <form method="POST" action="{{ route('admin.services.destroy', $service) }}" onsubmit="return confirm('Hapus layanan {{ addslashes($service->title) }}?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="inline-flex items-center gap-1 rounded-lg bg-red-500/15 text-red-400 px-3 py-1.5 text-xs font-medium hover:bg-red-500/30 transition-all">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <p class="text-sm text-slate-500 text-center py-6">Belum ada layanan.</p>
            @endforelse
        </div>

        {{-- ═══ Proses Kerja ═══ --}}
        <div class="rounded-2xl border border-white/10 bg-white/5 p-6">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-semibold text-white flex items-center gap-2">
                    <svg class="w-5 h-5 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                    </svg>
                    Proses Kerja
                    <span class="ml-1 text-xs bg-white/10 text-slate-400 px-2 py-0.5 rounded-full">{{ $workProcesses->count() }}</span>
                </h2>
                <button onclick="openModal('modal-add-process')"
                    class="inline-flex items-center gap-2 rounded-xl bg-brand-500 px-4 py-2 text-sm text-white font-semibold hover:bg-brand-600 transition-all duration-300 hover:shadow-lg hover:shadow-brand-500/25 active:scale-[0.98]">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                    Add Step
                </button>
            </div>

            @forelse($workProcesses as $process)
                <div class="flex items-center gap-4 rounded-xl border border-white/10 bg-white/5 px-4 py-3 mb-3">
                    <span class="shrink-0 inline-flex items-center justify-center rounded-lg bg-brand-500/15 text-brand-400 text-xs font-bold px-2.5 py-1">{{ $process->step_label }}</span>
                    <p class="flex-1 text-sm font-medium text-white truncate">{{ $process->title }}</p>
                    <div class="flex items-center gap-2 shrink-0">
                        <button onclick="openEditProcess({{ $process->id }}, '{{ addslashes($process->step_label) }}', '{{ addslashes($process->title) }}')"
                            class="inline-flex items-center gap-1 rounded-lg bg-brand-500/15 text-brand-400 px-3 py-1.5 text-xs font-medium hover:bg-brand-500/30 transition-all">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                            Edit
                        </button>
                        <form method="POST" action="{{ route('admin.services.process.destroy', $process) }}" onsubmit="return confirm('Hapus step ini?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="inline-flex items-center gap-1 rounded-lg bg-red-500/15 text-red-400 px-3 py-1.5 text-xs font-medium hover:bg-red-500/30 transition-all">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <p class="text-sm text-slate-500 text-center py-6">Belum ada proses kerja.</p>
            @endforelse
        </div>

        {{-- ═══ Portfolio ═══ --}}
        <div class="rounded-2xl border border-white/10 bg-white/5 p-6">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-semibold text-white flex items-center gap-2">
                    <svg class="w-5 h-5 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Portfolio
                    <span class="ml-1 text-xs bg-white/10 text-slate-400 px-2 py-0.5 rounded-full">{{ $portfolios->count() }}</span>
                </h2>
                <button onclick="openModal('modal-add-portfolio')"
                    class="inline-flex items-center gap-2 rounded-xl bg-brand-500 px-4 py-2 text-sm text-white font-semibold hover:bg-brand-600 transition-all duration-300 hover:shadow-lg hover:shadow-brand-500/25 active:scale-[0.98]">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                    Add Portfolio
                </button>
            </div>

            @forelse($portfolios as $portfolio)
                <div class="flex items-center gap-4 rounded-xl border border-white/10 bg-white/5 px-4 py-3 mb-3">
                    @if($portfolio->image)
                        <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}"
                            class="w-12 h-10 rounded-lg object-cover border border-white/10 shrink-0">
                    @else
                        <div class="w-12 h-10 rounded-lg border border-dashed border-white/20 bg-white/5 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01" /></svg>
                        </div>
                    @endif
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-white truncate">{{ $portfolio->title }}</p>
                        <p class="text-xs text-slate-400 truncate mt-0.5">{{ Str::limit($portfolio->short_description, 70) }}</p>
                    </div>
                    <div class="flex items-center gap-2 shrink-0">
                        <a href="{{ route('portfolio.show', $portfolio->slug) }}" target="_blank"
                            class="inline-flex items-center gap-1 rounded-lg bg-white/10 text-slate-300 px-3 py-1.5 text-xs font-medium hover:bg-white/15 transition-all">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                            Lihat
                        </a>
                        <button onclick="openEditPortfolio({{ $portfolio->id }}, '{{ addslashes($portfolio->title) }}', {{ json_encode($portfolio->short_description) }}, {{ json_encode(strip_tags($portfolio->description)) }}, '{{ $portfolio->image ? asset('storage/' . $portfolio->image) : '' }}')"
                            class="inline-flex items-center gap-1 rounded-lg bg-brand-500/15 text-brand-400 px-3 py-1.5 text-xs font-medium hover:bg-brand-500/30 transition-all">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                            Edit
                        </button>
                        <form method="POST" action="{{ url('admin/services/portfolio/' . $portfolio->id) }}" onsubmit="return confirm('Hapus portfolio {{ addslashes($portfolio->title) }}?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="inline-flex items-center gap-1 rounded-lg bg-red-500/15 text-red-400 px-3 py-1.5 text-xs font-medium hover:bg-red-500/30 transition-all">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <p class="text-sm text-slate-500 text-center py-6">Belum ada portfolio.</p>
            @endforelse
        </div>
    </div>

    {{-- ══════════════ MODALS ══════════════ --}}

    {{-- Modal: Add Layanan --}}
    <div id="modal-add-service" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeModal('modal-add-service')"></div>
        <div class="relative w-full max-w-md rounded-2xl border border-white/10 bg-[#0f172a] p-6 shadow-2xl">
            <div class="flex items-center justify-between mb-5">
                <h3 class="text-base font-semibold text-white">Tambah Layanan</h3>
                <button onclick="closeModal('modal-add-service')" class="text-slate-400 hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
            <form method="POST" action="{{ route('admin.services.store') }}" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-medium text-slate-400 mb-1.5">Judul <span class="text-red-400">*</span></label>
                    <input type="text" name="title" required placeholder="Nama layanan"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                </div>
                <div>
                    <label class="block text-xs font-medium text-slate-400 mb-1.5">Deskripsi <span class="text-red-400">*</span></label>
                    <textarea name="description" rows="4" required placeholder="Deskripsi layanan"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all resize-none"></textarea>
                </div>
                <div class="flex gap-3 pt-1">
                    <button type="submit" class="flex-1 rounded-xl bg-brand-500 px-4 py-2.5 text-sm text-white font-semibold hover:bg-brand-600 transition-all active:scale-[0.98]">Tambah</button>
                    <button type="button" onclick="closeModal('modal-add-service')" class="flex-1 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-300 hover:bg-white/10 transition-all">Batal</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Modal: Edit Layanan --}}
    <div id="modal-edit-service" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeModal('modal-edit-service')"></div>
        <div class="relative w-full max-w-md rounded-2xl border border-white/10 bg-[#0f172a] p-6 shadow-2xl">
            <div class="flex items-center justify-between mb-5">
                <h3 class="text-base font-semibold text-white">Edit Layanan</h3>
                <button onclick="closeModal('modal-edit-service')" class="text-slate-400 hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
            <form id="form-edit-service" method="POST" action="" class="space-y-4">
                @csrf @method('PUT')
                <div>
                    <label class="block text-xs font-medium text-slate-400 mb-1.5">Judul <span class="text-red-400">*</span></label>
                    <input type="text" id="edit-service-title" name="title" required
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                </div>
                <div>
                    <label class="block text-xs font-medium text-slate-400 mb-1.5">Deskripsi <span class="text-red-400">*</span></label>
                    <textarea id="edit-service-desc" name="description" rows="4" required
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all resize-none"></textarea>
                </div>
                <div class="flex gap-3 pt-1">
                    <button type="submit" class="flex-1 rounded-xl bg-brand-500 px-4 py-2.5 text-sm text-white font-semibold hover:bg-brand-600 transition-all active:scale-[0.98]">Simpan</button>
                    <button type="button" onclick="closeModal('modal-edit-service')" class="flex-1 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-300 hover:bg-white/10 transition-all">Batal</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Modal: Add Proses Kerja --}}
    <div id="modal-add-process" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeModal('modal-add-process')"></div>
        <div class="relative w-full max-w-md rounded-2xl border border-white/10 bg-[#0f172a] p-6 shadow-2xl">
            <div class="flex items-center justify-between mb-5">
                <h3 class="text-base font-semibold text-white">Tambah Step</h3>
                <button onclick="closeModal('modal-add-process')" class="text-slate-400 hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
            <form method="POST" action="{{ route('admin.services.process.store') }}" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-medium text-slate-400 mb-1.5">Label Step <span class="text-red-400">*</span></label>
                    <input type="text" name="step_label" required placeholder="contoh: Step 1"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                </div>
                <div>
                    <label class="block text-xs font-medium text-slate-400 mb-1.5">Judul <span class="text-red-400">*</span></label>
                    <input type="text" name="title" required placeholder="Judul proses"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                </div>
                <div class="flex gap-3 pt-1">
                    <button type="submit" class="flex-1 rounded-xl bg-brand-500 px-4 py-2.5 text-sm text-white font-semibold hover:bg-brand-600 transition-all active:scale-[0.98]">Tambah</button>
                    <button type="button" onclick="closeModal('modal-add-process')" class="flex-1 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-300 hover:bg-white/10 transition-all">Batal</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Modal: Edit Proses Kerja --}}
    <div id="modal-edit-process" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeModal('modal-edit-process')"></div>
        <div class="relative w-full max-w-md rounded-2xl border border-white/10 bg-[#0f172a] p-6 shadow-2xl">
            <div class="flex items-center justify-between mb-5">
                <h3 class="text-base font-semibold text-white">Edit Step</h3>
                <button onclick="closeModal('modal-edit-process')" class="text-slate-400 hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
            <form id="form-edit-process" method="POST" action="" class="space-y-4">
                @csrf @method('PUT')
                <div>
                    <label class="block text-xs font-medium text-slate-400 mb-1.5">Label Step <span class="text-red-400">*</span></label>
                    <input type="text" id="edit-process-label" name="step_label" required
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                </div>
                <div>
                    <label class="block text-xs font-medium text-slate-400 mb-1.5">Judul <span class="text-red-400">*</span></label>
                    <input type="text" id="edit-process-title" name="title" required
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                </div>
                <div class="flex gap-3 pt-1">
                    <button type="submit" class="flex-1 rounded-xl bg-brand-500 px-4 py-2.5 text-sm text-white font-semibold hover:bg-brand-600 transition-all active:scale-[0.98]">Simpan</button>
                    <button type="button" onclick="closeModal('modal-edit-process')" class="flex-1 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-300 hover:bg-white/10 transition-all">Batal</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Modal: Add Portfolio --}}
    <div id="modal-add-portfolio" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeModal('modal-add-portfolio')"></div>
        <div class="relative w-full max-w-lg rounded-2xl border border-white/10 bg-[#0f172a] p-6 shadow-2xl max-h-[90vh] overflow-y-auto">
            <div class="flex items-center justify-between mb-5">
                <h3 class="text-base font-semibold text-white">Tambah Portfolio</h3>
                <button onclick="closeModal('modal-add-portfolio')" class="text-slate-400 hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
            <form method="POST" action="{{ route('admin.services.portfolio.store') }}" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-medium text-slate-400 mb-1.5">Judul <span class="text-red-400">*</span></label>
                    <input type="text" name="title" required placeholder="Nama project"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                </div>
                <div>
                    <label class="block text-xs font-medium text-slate-400 mb-1.5">Deskripsi Singkat <span class="text-red-400">*</span> <span class="text-slate-600">(tampil di card)</span></label>
                    <input type="text" name="short_description" required placeholder="Deskripsi singkat"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                </div>
                <div>
                    <label class="block text-xs font-medium text-slate-400 mb-1.5">Deskripsi Detail <span class="text-slate-600">(tampil di halaman detail)</span></label>
                    <textarea name="description" rows="4" placeholder="Deskripsi lengkap project"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all resize-none"></textarea>
                </div>
                <div>
                    <label class="block text-xs font-medium text-slate-400 mb-1.5">Gambar</label>
                    <input type="file" name="image" accept="image/jpeg,image/png,image/webp"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-xs text-slate-400 file:mr-3 file:py-1 file:px-3 file:rounded-lg file:border-0 file:bg-brand-500/20 file:text-brand-400 file:text-xs font-medium hover:file:bg-brand-500/30 file:cursor-pointer focus:outline-none transition-all">
                    <p class="mt-1 text-xs text-slate-600">JPG, PNG, WebP. Maks: 2MB</p>
                </div>
                <div class="flex gap-3 pt-1">
                    <button type="submit" class="flex-1 rounded-xl bg-brand-500 px-4 py-2.5 text-sm text-white font-semibold hover:bg-brand-600 transition-all active:scale-[0.98]">Tambah</button>
                    <button type="button" onclick="closeModal('modal-add-portfolio')" class="flex-1 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-300 hover:bg-white/10 transition-all">Batal</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Modal: Edit Portfolio --}}
    <div id="modal-edit-portfolio" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeModal('modal-edit-portfolio')"></div>
        <div class="relative w-full max-w-lg rounded-2xl border border-white/10 bg-[#0f172a] p-6 shadow-2xl max-h-[90vh] overflow-y-auto">
            <div class="flex items-center justify-between mb-5">
                <h3 class="text-base font-semibold text-white">Edit Portfolio</h3>
                <button onclick="closeModal('modal-edit-portfolio')" class="text-slate-400 hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
            <form id="form-edit-portfolio" method="POST" action="" enctype="multipart/form-data" class="space-y-4">
                @csrf @method('PUT')
                <div>
                    <label class="block text-xs font-medium text-slate-400 mb-1.5">Judul <span class="text-red-400">*</span></label>
                    <input type="text" id="edit-portfolio-title" name="title" required
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                </div>
                <div>
                    <label class="block text-xs font-medium text-slate-400 mb-1.5">Deskripsi Singkat <span class="text-red-400">*</span></label>
                    <input type="text" id="edit-portfolio-short" name="short_description" required
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                </div>
                <div>
                    <label class="block text-xs font-medium text-slate-400 mb-1.5">Deskripsi Detail</label>
                    <textarea id="edit-portfolio-desc" name="description" rows="4"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all resize-none"></textarea>
                </div>
                <div>
                    <label class="block text-xs font-medium text-slate-400 mb-1.5">Gambar Baru</label>
                    <div id="edit-portfolio-preview" class="mb-2 hidden">
                        <img id="edit-portfolio-img" src="" alt="" class="w-20 h-14 rounded-lg object-cover border border-white/10">
                        <p class="mt-1 text-xs text-slate-500">Gambar saat ini</p>
                    </div>
                    <input type="file" name="image" accept="image/jpeg,image/png,image/webp"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-xs text-slate-400 file:mr-3 file:py-1 file:px-3 file:rounded-lg file:border-0 file:bg-brand-500/20 file:text-brand-400 file:text-xs font-medium hover:file:bg-brand-500/30 file:cursor-pointer focus:outline-none transition-all">
                    <p class="mt-1 text-xs text-slate-600">Kosongkan jika tidak ingin mengubah gambar.</p>
                </div>
                <div class="flex gap-3 pt-1">
                    <button type="submit" class="flex-1 rounded-xl bg-brand-500 px-4 py-2.5 text-sm text-white font-semibold hover:bg-brand-600 transition-all active:scale-[0.98]">Simpan</button>
                    <button type="button" onclick="closeModal('modal-edit-portfolio')" class="flex-1 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-300 hover:bg-white/10 transition-all">Batal</button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
    <script>
        const serviceBaseUrl  = "{{ route('admin.services.index') }}";
        const processBaseUrl  = "{{ url('admin/services/process') }}";
        const portfolioBaseUrl = "{{ url('admin/services/portfolio') }}";

        function openModal(id) {
            const m = document.getElementById(id);
            m.classList.remove('hidden');
            m.classList.add('flex');
        }
        function closeModal(id) {
            const m = document.getElementById(id);
            m.classList.add('hidden');
            m.classList.remove('flex');
        }

        function openEditService(id, title, desc) {
            document.getElementById('edit-service-title').value = title;
            document.getElementById('edit-service-desc').value = desc;
            document.getElementById('form-edit-service').action = serviceBaseUrl + '/' + id;
            openModal('modal-edit-service');
        }

        function openEditProcess(id, label, title) {
            document.getElementById('edit-process-label').value = label;
            document.getElementById('edit-process-title').value = title;
            document.getElementById('form-edit-process').action = processBaseUrl + '/' + id;
            openModal('modal-edit-process');
        }

        function openEditPortfolio(id, title, shortDesc, desc, imageUrl) {
            document.getElementById('edit-portfolio-title').value = title;
            document.getElementById('edit-portfolio-short').value = shortDesc;
            document.getElementById('edit-portfolio-desc').value = desc;
            document.getElementById('form-edit-portfolio').action = portfolioBaseUrl + '/' + id;

            const preview = document.getElementById('edit-portfolio-preview');
            const img = document.getElementById('edit-portfolio-img');
            if (imageUrl) {
                img.src = imageUrl;
                preview.classList.remove('hidden');
            } else {
                preview.classList.add('hidden');
            }
            openModal('modal-edit-portfolio');
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                ['modal-add-service','modal-edit-service','modal-add-process','modal-edit-process','modal-add-portfolio','modal-edit-portfolio'].forEach(closeModal);
            }
        });
    </script>
    @endpush
@endsection
