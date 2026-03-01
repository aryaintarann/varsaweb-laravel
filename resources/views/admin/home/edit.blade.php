@extends('admin.layouts.app')
@section('title', 'Edit Home')
@section('heading', 'Home Page')
@section('subheading', 'Kelola konten hero section halaman utama')

@section('content')
    <form method="POST" action="{{ route('admin.home.update') }}" enctype="multipart/form-data" class="max-w-3xl">
        @csrf
        @method('PUT')

        <div class="rounded-2xl border border-white/10 bg-white/5 p-6 space-y-6">
            <div>
                <label for="badge_text" class="block text-sm font-medium text-slate-300 mb-2">Badge Text</label>
                <input type="text" id="badge_text" name="badge_text" value="{{ old('badge_text', $setting->badge_text) }}"
                    class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all">
            </div>

            <div>
                <label for="hero_title" class="block text-sm font-medium text-slate-300 mb-2">Hero Title</label>
                <input type="text" id="hero_title" name="hero_title" value="{{ old('hero_title', $setting->hero_title) }}"
                    class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all">
            </div>

            <div>
                <label for="hero_description" class="block text-sm font-medium text-slate-300 mb-2">Hero Description</label>
                <textarea id="hero_description" name="hero_description" rows="4"
                    class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all">{{ old('hero_description', $setting->hero_description) }}</textarea>
            </div>

            <div>
                <label for="hero_image" class="block text-sm font-medium text-slate-300 mb-2">Hero Image</label>
                @if($setting->hero_image_url)
                    <div class="mb-3">
                        <img src="{{ str_starts_with($setting->hero_image_url, 'http') ? $setting->hero_image_url : asset('storage/' . $setting->hero_image_url) }}"
                            alt="Current Hero" class="h-40 w-auto rounded-xl object-cover border border-white/10">
                        <p class="mt-1 text-xs text-slate-500">Gambar saat ini</p>
                    </div>
                @endif
                <input type="file" id="hero_image" name="hero_image" accept="image/jpeg,image/png,image/webp"
                    class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-3 text-slate-400 file:mr-4 file:py-1 file:px-3 file:rounded-lg file:border-0 file:bg-brand-500/20 file:text-brand-400 file:text-sm file:font-medium hover:file:bg-brand-500/30 file:cursor-pointer focus:outline-none focus:ring-2 focus:ring-brand-500 transition-all">
                <p class="mt-1 text-xs text-slate-500">Format: JPG, PNG, WebP. Maks: 2MB</p>
            </div>
        </div>

        <div class="mt-6 flex items-center gap-3">
            <button type="submit"
                class="inline-flex items-center rounded-xl bg-brand-500 px-6 py-3 text-white font-semibold hover:bg-brand-600 transition-all duration-300 hover:shadow-lg hover:shadow-brand-500/25 active:scale-[0.98]">
                Simpan Perubahan
            </button>
        </div>
    </form>
@endsection