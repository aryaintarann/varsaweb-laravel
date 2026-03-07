@extends('layouts.public')

@section('title', 'About Us — ' . ($settings['site_name'] ?? 'VarsaWeb'))

@section('content')

    <section class="gradient-hero relative overflow-hidden pt-32 pb-20 lg:pt-40 lg:pb-28">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 right-1/4 w-96 h-96 bg-indigo-300/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-1/4 w-80 h-80 bg-violet-300/15 rounded-full blur-3xl"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="text-indigo-600 font-bold tracking-widest uppercase text-sm mb-4">About Us</div>
            <h1 class="mt-2 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight">
                {{ $settings['about_hero_title'] ?? 'The Team Behind' }} <br class="hidden sm:block">
                <span class="text-indigo-600">{{ $settings['site_name'] ?? 'VarsaWeb' }}</span>
            </h1>
            <p class="mt-6 text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed whitespace-pre-line">
                {{ $settings['about_hero_subtitle'] ?? 'Discover our story, our mission, and the values that drive us to deliver excellence in every project we undertake.' }}
            </p>
        </div>
    </section>

    <section class="py-24 lg:py-32 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                <div class="relative order-2 lg:order-1">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl shadow-slate-900/10">
                        <img class="w-full h-[480px] object-cover" src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1200&q=80" alt="Team brainstorming">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/20 to-transparent"></div>
                    </div>
                </div>

                <div class="space-y-6 order-1 lg:order-2">
                    <div class="text-indigo-600 font-bold tracking-widest uppercase text-sm mb-3">Our Story</div>
                    <h2 class="section-title">{!! $settings['about_story_title'] ?? 'Building the Future, <span class="text-slate-900">One Project at a Time</span>' !!}</h2>
                    <div class="space-y-4 text-slate-600 leading-relaxed text-lg whitespace-pre-line">
                        {{ $settings['about_story_text'] ?? "Founded with a simple belief — technology should empower businesses to reach their fullest potential. " . ($settings['site_name'] ?? 'VarsaWeb') . " began as a small team of passionate developers determined to make a difference.\n\nToday, our team has grown, but our core values remain the same. We focus on delivering high-quality, scalable digital solutions tailored to each client's unique needs, combining cutting-edge technology with a human-centered approach to design." }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="text-indigo-600 font-bold tracking-widest uppercase text-sm mb-3">Our Purpose</div>
                <h2 class="section-title mt-2">Vision & Mission</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
                {{-- Vision --}}
                <div class="card-hover bg-gradient-to-br from-slate-50 to-indigo-50/50 rounded-3xl p-10 border border-slate-100">

                    <h3 class="text-2xl font-bold text-slate-900 mb-4">{{ $settings['about_vision_title'] ?? 'Our Vision' }}</h3>
                    <p class="text-slate-600 text-lg leading-relaxed whitespace-pre-line">
                        {{ $settings['about_vision_text'] ?? 'To be at the forefront of digital transformation, recognized globally as a trusted partner that seamlessly bridges innovative ideas with impactful technological reality.' }}
                    </p>
                </div>

                {{-- Mission --}}
                <div class="card-hover bg-gradient-to-br from-slate-50 to-violet-50/50 rounded-3xl p-10 border border-slate-100">

                    <h3 class="text-2xl font-bold text-slate-900 mb-6">{{ $settings['about_mission_title'] ?? 'Our Mission' }}</h3>
                    <ul class="space-y-4 text-slate-600 text-lg">
                        @if(!empty($settings['about_mission_text_1']))
                        <li class="flex items-start gap-3">
                            <div class="mt-1 w-6 h-6 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0"><svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></div>
                            {{ $settings['about_mission_text_1'] }}
                        </li>
                        @endif
                        @if(!empty($settings['about_mission_text_2']))
                        <li class="flex items-start gap-3">
                            <div class="mt-1 w-6 h-6 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0"><svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></div>
                            {{ $settings['about_mission_text_2'] }}
                        </li>
                        @endif
                        @if(!empty($settings['about_mission_text_3']))
                        <li class="flex items-start gap-3">
                            <div class="mt-1 w-6 h-6 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0"><svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></div>
                            {{ $settings['about_mission_text_3'] }}
                        </li>
                        @endif
                        
                        @if(empty($settings['about_mission_text_1']) && empty($settings['about_mission_text_2']) && empty($settings['about_mission_text_3']))
                        <li class="flex items-start gap-3">
                            <div class="mt-1 w-6 h-6 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0"><svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></div>
                            Deliver outstanding, scalable digital solutions with measurable impact.
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="mt-1 w-6 h-6 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0"><svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></div>
                            Foster long-term partnerships built on trust, transparency, and results.
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="mt-1 w-6 h-6 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0"><svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></div>
                            Continuously innovate and embrace the latest technological advancements.
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 lg:py-32 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="text-indigo-600 font-bold tracking-widest uppercase text-sm mb-3">Our People</div>
                <h2 class="section-title mt-2">Meet the Team</h2>
                <p class="section-subtitle mt-4">A dedicated group of professionals committed to turning your vision into reality.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @forelse($teamMembers as $member)
                <div class="card-hover group text-center p-6 rounded-3xl transition-all duration-300 hover:bg-white hover:shadow-xl hover:shadow-slate-200/50 border border-transparent hover:border-slate-100">
                    <div class="relative mb-6 mx-auto w-40 h-40 rounded-3xl overflow-hidden shadow-lg">
                        @if($member->image)
                            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}">
                        @else
                            <div class="w-full h-full bg-indigo-100 flex items-center justify-center text-indigo-500 text-4xl font-bold transition-transform duration-500 group-hover:scale-110">
                                {{ substr($member->name, 0, 1) }}
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-indigo-900/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">{{ $member->name }}</h3>
                    <p class="text-sm text-indigo-600 font-medium mt-1">{{ $member->role }}</p>
                </div>
                @empty
                    <div class="col-span-full text-center text-slate-500 py-10">
                        No team members registered yet.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

@endsection
