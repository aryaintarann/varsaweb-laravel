@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('heading', 'Dashboard')
@section('subheading', 'Ringkasan konten website Anda')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div
            class="rounded-2xl border border-white/10 bg-white/5 backdrop-blur-xl p-6 transition-all duration-300 hover:bg-white/10">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-slate-500">Total Services</p>
                    <p class="mt-1 text-3xl font-display font-bold text-white">{{ $stats['services'] }}</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-brand-500/10 text-brand-400 flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
            </div>
        </div>

        <div
            class="rounded-2xl border border-white/10 bg-white/5 backdrop-blur-xl p-6 transition-all duration-300 hover:bg-white/10">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-slate-500">Team Members</p>
                    <p class="mt-1 text-3xl font-display font-bold text-white">{{ $stats['team_members'] }}</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-accent-500/10 text-accent-500 flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-8">
        <h2 class="text-lg font-semibold text-white mb-4">Quick Actions</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <a href="{{ route('admin.home.edit') }}"
                class="group rounded-2xl border border-white/10 bg-white/5 p-5 transition-all duration-300 hover:bg-white/10 hover:border-white/20 hover:-translate-y-0.5">
                <h3 class="text-white font-medium group-hover:text-brand-400 transition-colors">Edit Home Page</h3>
                <p class="mt-1 text-sm text-slate-500">Kelola hero section dan konten halaman utama</p>
            </a>
            <a href="{{ route('admin.services.index') }}"
                class="group rounded-2xl border border-white/10 bg-white/5 p-5 transition-all duration-300 hover:bg-white/10 hover:border-white/20 hover:-translate-y-0.5">
                <h3 class="text-white font-medium group-hover:text-brand-400 transition-colors">Manage Services</h3>
                <p class="mt-1 text-sm text-slate-500">Tambah, edit, atau hapus layanan</p>
            </a>
            <a href="{{ route('admin.footer.edit') }}"
                class="group rounded-2xl border border-white/10 bg-white/5 p-5 transition-all duration-300 hover:bg-white/10 hover:border-white/20 hover:-translate-y-0.5">
                <h3 class="text-white font-medium group-hover:text-brand-400 transition-colors">Edit Footer</h3>
                <p class="mt-1 text-sm text-slate-500">Kelola informasi footer dan social links</p>
            </a>
        </div>
    </div>
@endsection