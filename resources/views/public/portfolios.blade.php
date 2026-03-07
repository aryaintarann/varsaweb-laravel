@extends('layouts.public')

@section('title', 'Portfolio — ' . ($settings['site_name'] ?? 'VarsaWeb'))

@section('content')

    <section class="gradient-hero relative overflow-hidden pt-32 pb-20 lg:pt-40 lg:pb-28">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 right-1/3 w-96 h-96 bg-indigo-300/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-1/4 w-80 h-80 bg-violet-300/15 rounded-full blur-3xl"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="text-indigo-600 font-bold tracking-widest uppercase text-sm mb-4">Our Work</div>
            <h1 class="mt-2 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight">
                Featured
                <span class="text-indigo-600">Projects</span>
            </h1>
            <p class="mt-6 text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
                A curated collection of our best work, showcasing innovation across diverse industries.
            </p>
        </div>
    </section>

    <section class="py-24 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Category Filter --}}
            <div class="flex flex-col sm:flex-row items-center justify-between gap-6 mb-12 pb-8 border-b border-slate-100">
                <h2 class="text-2xl font-bold text-slate-900">All Projects</h2>
                <form action="{{ route('portfolios') }}" method="GET" class="flex items-center gap-3">
                    <select name="category" onchange="this.form.submit()" class="px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm font-medium text-slate-700 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-shadow">
                        <option value="">All Categories</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @if(request('category'))
                        <a href="{{ route('portfolios') }}" class="text-sm text-slate-500 hover:text-indigo-600 transition-colors underline underline-offset-2">Clear</a>
                    @endif
                </form>
            </div>

            {{-- Grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($portfolios as $portfolio)
                    <a href="{{ route('portfolio.detail', $portfolio) }}" class="card-hover group bg-white rounded-3xl overflow-hidden border border-slate-100 hover:border-indigo-100 flex flex-col block h-full">
                        <div class="relative overflow-hidden aspect-[4/3]">
                            @if($portfolio->image)
                                <img src="{{ Storage::url($portfolio->image) }}" alt="{{ $portfolio->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-slate-100 to-slate-200 flex items-center justify-center">
                                    <svg class="w-16 h-16 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                </div>
                            @endif
                            {{-- Overlay on hover --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/70 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                                <span class="text-white text-sm font-medium opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0 transition-all duration-500 delay-100">View Details</span>
                            </div>
                            {{-- Category Badge --}}
                            <div class="absolute top-4 left-4">
                                <span class="inline-flex items-center px-3 py-1.5 rounded-xl text-xs font-bold bg-white/90 backdrop-blur-sm text-indigo-700 shadow-sm">
                                    {{ $portfolio->category ? $portfolio->category->name : 'Uncategorized' }}
                                </span>
                            </div>
                        </div>
                        <div class="p-6 flex-grow flex flex-col">
                            <h3 class="text-lg font-bold text-slate-900 mb-2 group-hover:text-indigo-600 transition-colors duration-200">{{ $portfolio->title }}</h3>
                            <p class="text-sm text-slate-500 line-clamp-2 mb-5 flex-grow">{{ $portfolio->description }}</p>
                            <div class="flex items-center justify-between text-xs text-slate-400 pt-4 border-t border-slate-100 mt-auto">
                                <div class="flex items-center gap-1.5">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                                    {{ $portfolio->client_name ?? 'Confidential' }}
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    {{ $portfolio->completion_date ? $portfolio->completion_date->format('M Y') : 'Ongoing' }}
                                </div>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="col-span-full text-center py-20 bg-slate-50 rounded-3xl border-2 border-dashed border-slate-200">
                        <div class="w-16 h-16 rounded-2xl bg-slate-100 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        </div>
                        <h3 class="font-semibold text-slate-900">No Projects Found</h3>
                        <p class="mt-1 text-sm text-slate-500">
                            @if(request('category'))
                                No projects match this filter.
                            @else
                                Check back soon for our project showcases.
                            @endif
                        </p>
                        @if(request('category'))
                            <a href="{{ route('portfolios') }}" class="btn-primary mt-6 text-sm">Clear Filter</a>
                        @endif
                    </div>
                @endforelse
            </div>

            <div class="mt-12">
                {{ $portfolios->links('pagination::tailwind') }}
            </div>
        </div>
    </section>

@endsection
