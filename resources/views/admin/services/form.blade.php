@extends('admin.layouts.app')
@section('title', $service ? 'Edit Service' : 'Tambah Service')
@section('heading', $service ? 'Edit Service' : 'Tambah Service')
@section('subheading', $service ? 'Perbarui informasi layanan' : 'Tambahkan layanan baru')

@section('content')
    <form method="POST" action="{{ $service ? route('admin.services.update', $service) : route('admin.services.store') }}"
        class="max-w-3xl">
        @csrf
        @if($service) @method('PUT') @endif

        <div class="rounded-2xl border border-white/10 bg-white/5 p-6 space-y-6">
            <div>
                <label for="title" class="block text-sm font-medium text-slate-300 mb-2">Judul Service</label>
                <input type="text" id="title" name="title" value="{{ old('title', $service?->title) }}" required
                    class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all"
                    placeholder="Web Development">
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-slate-300 mb-2">Deskripsi</label>
                <textarea id="description" name="description" rows="4" required
                    class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all"
                    placeholder="Deskripsi layanan...">{{ old('description', $service?->description) }}</textarea>
            </div>

            <div>
                <label for="sort_order" class="block text-sm font-medium text-slate-300 mb-2">Urutan</label>
                <input type="number" id="sort_order" name="sort_order"
                    value="{{ old('sort_order', $service?->sort_order ?? 0) }}"
                    class="w-32 rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all">
            </div>
        </div>

        <div class="mt-6 flex items-center gap-3">
            <button type="submit"
                class="inline-flex items-center rounded-xl bg-brand-500 px-6 py-3 text-white font-semibold hover:bg-brand-600 transition-all duration-300 hover:shadow-lg hover:shadow-brand-500/25 active:scale-[0.98]">
                {{ $service ? 'Simpan Perubahan' : 'Tambah Service' }}
            </button>
            <a href="{{ route('admin.services.index') }}"
                class="inline-flex items-center rounded-xl border border-white/10 bg-white/5 px-6 py-3 text-slate-400 hover:text-white hover:bg-white/10 transition-all duration-300">
                Batal
            </a>
        </div>
    </form>
@endsection