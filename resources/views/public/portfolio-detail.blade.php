@extends('layouts.public')

@section('title', $portfolio->title . ' - Portfolio')

@section('content')
    {{-- Hero Section --}}
    <section class="gradient-hero relative pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute -top-40 right-1/4 w-96 h-96 bg-indigo-300/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-1/4 w-80 h-80 bg-violet-300/15 rounded-full blur-3xl"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            @if($portfolio->category)
                <span class="section-badge mb-6">
                    {{ $portfolio->category->name }}
                </span>
            @endif
            
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight max-w-4xl mx-auto">
                {{ $portfolio->title }}
            </h1>
            

            
            {{-- Quick Meta --}}
            <div class="mt-10 flex flex-wrap justify-center gap-8 text-sm">
                @if($portfolio->client_name)
                    <div class="flex flex-col items-center">
                        <span class="text-slate-400 font-semibold uppercase tracking-wider text-xs mb-1">Client</span>
                        <span class="text-slate-900 font-medium text-base">{{ $portfolio->client_name }}</span>
                    </div>
                @endif
                
                @if($portfolio->completion_date)
                    <div class="hidden sm:block w-px h-10 bg-slate-200"></div>
                    <div class="flex flex-col items-center">
                        <span class="text-slate-400 font-semibold uppercase tracking-wider text-xs mb-1">Completed</span>
                        <span class="text-slate-900 font-medium text-base">{{ $portfolio->completion_date->format('F d, Y') }}</span>
                    </div>
                @endif
            </div>
        </div>
    </section>

    {{-- Project Content --}}
    <section class="py-20 lg:py-32 bg-white relative">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Featured Image --}}
            @if($portfolio->image)
                <div class="-mt-40 mb-16 lg:-mt-48 lg:mb-24 relative z-20 rounded-3xl overflow-hidden shadow-2xl border border-white/20 bg-white">
                    <img src="{{ Storage::url($portfolio->image) }}" alt="{{ $portfolio->title }}" class="w-full h-auto object-cover max-h-[700px]">
                </div>
            @endif

            {{-- Full Description --}}
            @if($portfolio->description)
                 <div class="prose prose-lg prose-indigo max-w-3xl mx-auto text-slate-600">
                    <h2 class="text-3xl font-bold text-slate-900 mb-6">About the Project</h2>
                    <div class="leading-relaxed">
                        {!! nl2br(e($portfolio->description)) !!}
                    </div>
                </div>
            @endif
        </div>
    </section>

    {{-- Related Projects --}}
    @if($relatedProjects->isNotEmpty())
        <section class="py-24 bg-slate-50 border-t border-slate-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold text-slate-900">More Works in {{ $portfolio->category->name }}</h2>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach($relatedProjects as $project)
                        <a href="{{ route('portfolio.detail', $project) }}" class="group bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col h-full block">
                            <div class="aspect-video overflow-hidden bg-slate-100 relative">
                                @if($project->image)
                                    <img src="{{ Storage::url($project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-slate-300">
                                        <svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    </div>
                                @endif
                                <div class="absolute inset-0 bg-slate-900/10 group-hover:bg-transparent transition-colors duration-300"></div>
                            </div>
                            <div class="p-6 flex-grow flex flex-col">
                                <h3 class="font-bold text-slate-900 mb-2 group-hover:text-indigo-600 transition-colors">{{ $project->title }}</h3>
                                <p class="text-sm text-slate-500 line-clamp-2 flex-grow">{{ $project->description }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
                
                <div class="mt-12 text-center">
                    <a href="{{ route('portfolios') }}" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-xl text-indigo-700 bg-indigo-50 hover:bg-indigo-100 transition-colors duration-200">
                        View All Projects
                    </a>
                </div>
            </div>
        </section>
    @endif
@endsection
