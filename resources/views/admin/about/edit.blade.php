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

        {{-- Team Members --}}
        <div class="rounded-2xl border border-white/10 bg-white/5 p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-lg font-semibold text-white">Team Members</h2>
                <button onclick="openAddModal()"
                    class="inline-flex items-center gap-2 rounded-xl bg-brand-500 px-4 py-2 text-sm text-white font-semibold hover:bg-brand-600 transition-all duration-300 hover:shadow-lg hover:shadow-brand-500/25 active:scale-[0.98]">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Add Member
                </button>
            </div>

            {{-- Member List --}}
            @if($teamMembers->isEmpty())
                <p class="text-sm text-slate-500 text-center py-6">Belum ada anggota tim.</p>
            @else
                <div class="space-y-3">
                    @foreach($teamMembers as $member)
                        <div class="flex items-center gap-4 rounded-xl border border-white/10 bg-white/5 px-4 py-3">
                            {{-- Photo --}}
                            @if($member->photo)
                                <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}"
                                    class="w-10 h-10 rounded-lg object-cover border border-white/10 shrink-0">
                            @else
                                <div class="w-10 h-10 rounded-lg border border-dashed border-white/20 bg-white/5 flex items-center justify-center text-xs text-slate-500 shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                                </div>
                            @endif

                            {{-- Info --}}
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-white truncate">{{ $member->name }}</p>
                                <p class="text-xs text-slate-400 truncate">{{ $member->position }}</p>
                            </div>

                            {{-- Actions --}}
                            <div class="flex items-center gap-2 shrink-0">
                                <button
                                    onclick="openEditModal({{ $member->id }}, '{{ addslashes($member->name) }}', '{{ addslashes($member->position) }}', '{{ $member->photo ? asset('storage/' . $member->photo) : '' }}')"
                                    class="inline-flex items-center gap-1 rounded-lg bg-brand-500/15 text-brand-400 px-3 py-1.5 text-xs font-medium hover:bg-brand-500/30 transition-all">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                                    Edit
                                </button>
                                <form method="POST" action="{{ route('admin.about.member.destroy', $member) }}"
                                    onsubmit="return confirm('Hapus anggota {{ addslashes($member->name) }}?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="inline-flex items-center gap-1 rounded-lg bg-red-500/15 text-red-400 px-3 py-1.5 text-xs font-medium hover:bg-red-500/30 transition-all">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        {{-- Modal: Add Member --}}
        <div id="modal-add" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
            <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeAddModal()"></div>
            <div class="relative w-full max-w-md rounded-2xl border border-white/10 bg-[#0f172a] p-6 shadow-2xl">
                <div class="flex items-center justify-between mb-5">
                    <h3 class="text-base font-semibold text-white">Tambah Anggota Baru</h3>
                    <button onclick="closeAddModal()" class="text-slate-400 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                    </button>
                </div>
                <form method="POST" action="{{ route('admin.about.member.store') }}" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-xs font-medium text-slate-400 mb-1.5">Nama <span class="text-red-400">*</span></label>
                        <input type="text" name="name" required placeholder="Nama lengkap"
                            class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-slate-400 mb-1.5">Posisi <span class="text-red-400">*</span></label>
                        <input type="text" name="position" required placeholder="Jabatan / posisi"
                            class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-slate-400 mb-1.5">Foto</label>
                        <input type="file" name="photo" accept="image/jpeg,image/png,image/webp"
                            class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-xs text-slate-400 file:mr-3 file:py-1 file:px-3 file:rounded-lg file:border-0 file:bg-brand-500/20 file:text-brand-400 file:text-xs font-medium hover:file:bg-brand-500/30 file:cursor-pointer focus:outline-none transition-all">
                        <p class="mt-1 text-xs text-slate-600">JPG, PNG, WebP. Maks: 2MB</p>
                    </div>
                    <div class="flex gap-3 pt-1">
                        <button type="submit"
                            class="flex-1 rounded-xl bg-brand-500 px-4 py-2.5 text-sm text-white font-semibold hover:bg-brand-600 transition-all active:scale-[0.98]">Tambah</button>
                        <button type="button" onclick="closeAddModal()"
                            class="flex-1 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-300 hover:bg-white/10 transition-all">Batal</button>
                    </div>
                </form>
            </div>
        </div>

        {{-- Modal: Edit Member --}}
        <div id="modal-edit" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
            <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeEditModal()"></div>
            <div class="relative w-full max-w-md rounded-2xl border border-white/10 bg-[#0f172a] p-6 shadow-2xl">
                <div class="flex items-center justify-between mb-5">
                    <h3 class="text-base font-semibold text-white">Edit Anggota</h3>
                    <button onclick="closeEditModal()" class="text-slate-400 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                    </button>
                </div>
                <form id="edit-member-form" method="POST" action="" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    @method('PUT')
                    <div>
                        <label class="block text-xs font-medium text-slate-400 mb-1.5">Nama <span class="text-red-400">*</span></label>
                        <input type="text" id="edit-name" name="name" required
                            class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-slate-400 mb-1.5">Posisi <span class="text-red-400">*</span></label>
                        <input type="text" id="edit-position" name="position" required
                            class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-slate-400 mb-1.5">Foto Baru</label>
                        <div id="edit-photo-preview" class="mb-2 hidden">
                            <img id="edit-photo-img" src="" alt="" class="w-14 h-14 rounded-lg object-cover border border-white/10">
                            <p class="mt-1 text-xs text-slate-500">Foto saat ini</p>
                        </div>
                        <input type="file" name="photo" accept="image/jpeg,image/png,image/webp"
                            class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-xs text-slate-400 file:mr-3 file:py-1 file:px-3 file:rounded-lg file:border-0 file:bg-brand-500/20 file:text-brand-400 file:text-xs font-medium hover:file:bg-brand-500/30 file:cursor-pointer focus:outline-none transition-all">
                        <p class="mt-1 text-xs text-slate-600">Kosongkan jika tidak ingin mengubah foto. JPG, PNG, WebP. Maks: 2MB</p>
                    </div>
                    <div class="flex gap-3 pt-1">
                        <button type="submit"
                            class="flex-1 rounded-xl bg-brand-500 px-4 py-2.5 text-sm text-white font-semibold hover:bg-brand-600 transition-all active:scale-[0.98]">Simpan</button>
                        <button type="button" onclick="closeEditModal()"
                            class="flex-1 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-300 hover:bg-white/10 transition-all">Batal</button>
                    </div>
                </form>
            </div>
        </div>

        @push('scripts')
        <script>
            const baseUrl = "{{ url('admin/about/member') }}";

            function openAddModal() {
                const modal = document.getElementById('modal-add');
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            }

            function closeAddModal() {
                const modal = document.getElementById('modal-add');
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }

            function openEditModal(id, name, position, photoUrl) {
                document.getElementById('edit-name').value = name;
                document.getElementById('edit-position').value = position;
                document.getElementById('edit-member-form').action = baseUrl + '/' + id;

                const preview = document.getElementById('edit-photo-preview');
                const img = document.getElementById('edit-photo-img');
                if (photoUrl) {
                    img.src = photoUrl;
                    preview.classList.remove('hidden');
                } else {
                    preview.classList.add('hidden');
                }

                const modal = document.getElementById('modal-edit');
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            }

            function closeEditModal() {
                const modal = document.getElementById('modal-edit');
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }

            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeAddModal();
                    closeEditModal();
                }
            });
        </script>
        @endpush


    </div>
@endsection