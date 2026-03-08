@extends('layouts.public')

@section('title', 'Contact Us — ' . ($settings['site_name'] ?? 'VarsaWeb'))

@section('content')

    <section class="gradient-hero relative overflow-hidden pt-32 pb-20 lg:pt-40 lg:pb-28">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 left-1/4 w-96 h-96 bg-indigo-300/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-1/3 w-80 h-80 bg-violet-300/15 rounded-full blur-3xl"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="text-indigo-600 font-bold tracking-widest uppercase text-sm mb-4">Get in Touch</div>
            <h1 class="mt-6 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white tracking-tight">
                Let's Start a
                <span class="text-indigo-600">Conversation</span>
            </h1>
            <p class="mt-6 text-lg text-slate-600 dark:text-slate-300 max-w-2xl mx-auto leading-relaxed">
                Whether you have a question, a project idea, or just want to say hello — we'd love to hear from you.
            </p>
        </div>
    </section>

    <section class="py-24 lg:py-32 bg-slate-50 dark:bg-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-slate-900 dark:border-slate-700 dark:shadow-black/20 rounded-3xl shadow-xl shadow-slate-900/5 overflow-hidden border border-slate-100">
                <div class="grid lg:grid-cols-5">

                    {{-- Contact Info --}}
                    <div class="lg:col-span-2 bg-indigo-600 relative overflow-hidden p-10 lg:p-12 text-white">
                        <div class="absolute inset-0 overflow-hidden">
                            <div class="absolute -bottom-20 -left-20 w-60 h-60 bg-indigo-400/20 rounded-full blur-3xl"></div>
                            <div class="absolute top-10 right-10 w-40 h-40 bg-violet-400/15 rounded-full blur-3xl"></div>
                        </div>

                        <div class="relative z-10 h-full flex flex-col justify-between">
                            <div>
                                <h2 class="text-3xl font-extrabold tracking-tight mb-3">Let's Talk</h2>
                                <p class="text-indigo-200 leading-relaxed mb-10 text-lg">
                                    Fill out the form and our team will get back to you within 24 hours.
                                </p>

                                <div class="space-y-6">
                                    @if(!empty($settings['contact_email']))
                                    <div class="flex items-start gap-4">
                                        <div class="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-sm flex items-center justify-center flex-shrink-0">
                                            <svg class="w-5 h-5 text-indigo-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                        </div>
                                        <div>
                                            <div class="text-sm font-semibold text-indigo-200 uppercase tracking-wider mb-1">Email</div>
                                            <div class="text-white font-medium">{{ $settings['contact_email'] }}</div>
                                        </div>
                                    </div>
                                    @endif

                                    @if(!empty($settings['contact_phone']))
                                    <div class="flex items-start gap-4">
                                        <div class="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-sm flex items-center justify-center flex-shrink-0">
                                            <svg class="w-5 h-5 text-indigo-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                        </div>
                                        <div>
                                            <div class="text-sm font-semibold text-indigo-200 uppercase tracking-wider mb-1">Phone</div>
                                            <div class="text-white font-medium">{{ $settings['contact_phone'] }}</div>
                                        </div>
                                    </div>
                                    @endif

                                    @if(!empty($settings['contact_address']))
                                    <div class="flex items-start gap-4">
                                        <div class="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-sm flex items-center justify-center flex-shrink-0">
                                            <svg class="w-5 h-5 text-indigo-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                        </div>
                                        <div>
                                            <div class="text-sm font-semibold text-indigo-200 uppercase tracking-wider mb-1">Office</div>
                                            <div class="text-white font-medium">{{ $settings['contact_address'] }}</div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>

                            {{-- Social Links --}}
                            <div class="flex space-x-3 mt-12">
                                @if(!empty($settings['social_facebook']))
                                <a href="{{ $settings['social_facebook'] }}" class="w-10 h-10 rounded-xl bg-white/10 hover:bg-white/20 flex items-center justify-center text-white/70 hover:text-white transition-all duration-200">
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                                </a>
                                @endif
                                @if(!empty($settings['social_instagram']))
                                <a href="{{ $settings['social_instagram'] }}" class="w-10 h-10 rounded-xl bg-white/10 hover:bg-white/20 flex items-center justify-center text-white/70 hover:text-white transition-all duration-200">
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/></svg>
                                </a>
                                @endif
                                @if(!empty($settings['social_linkedin']))
                                <a href="{{ $settings['social_linkedin'] }}" class="w-10 h-10 rounded-xl bg-white/10 hover:bg-white/20 flex items-center justify-center text-white/70 hover:text-white transition-all duration-200">
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{-- Contact Form --}}
                    <div class="lg:col-span-3 p-10 lg:p-14">
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-2">Send us a message</h3>
                        <p class="text-slate-500 dark:text-slate-400 mb-8">We'll respond as quickly as possible.</p>

                        @if(session('success'))
                            <div class="mb-8 bg-emerald-50 dark:bg-emerald-900/20 border border-emerald-200 dark:border-emerald-700 rounded-2xl p-5">
                                <div class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-full bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <svg class="w-5 h-5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-emerald-800 dark:text-emerald-300">Message Sent!</h4>
                                        <p class="text-sm text-emerald-700 dark:text-emerald-400 mt-1">{{ session('success') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                            @csrf

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Full Name <span class="text-red-500">*</span></label>
                                    <input type="text" name="name" id="name" value="{{ old('name') }}" required placeholder="Your name"
                                        class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-600 rounded-xl text-slate-800 dark:text-slate-100 placeholder-slate-400 dark:placeholder-slate-500 focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-shadow @error('name') border-red-300 bg-red-50 dark:border-red-700 dark:bg-red-900/20 @enderror">
                                    @error('name')<p class="mt-1.5 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>@enderror
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Email <span class="text-red-500">*</span></label>
                                    <input type="email" name="email" id="email" value="{{ old('email') }}" required placeholder="you@example.com"
                                        class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-600 rounded-xl text-slate-800 dark:text-slate-100 placeholder-slate-400 dark:placeholder-slate-500 focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-shadow @error('email') border-red-300 bg-red-50 dark:border-red-700 dark:bg-red-900/20 @enderror">
                                    @error('email')<p class="mt-1.5 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>@enderror
                                </div>
                            </div>

                            <div>
                                <label for="subject" class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Subject <span class="text-red-500">*</span></label>
                                @php $defaultSubject = request('service') ? 'Inquiry regarding: ' . request('service') : ''; @endphp
                                <input type="text" name="subject" id="subject" value="{{ old('subject', $defaultSubject) }}" required placeholder="What is this about?"
                                    class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-600 rounded-xl text-slate-800 dark:text-slate-100 placeholder-slate-400 dark:placeholder-slate-500 focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-shadow @error('subject') border-red-300 bg-red-50 dark:border-red-700 dark:bg-red-900/20 @enderror">
                                @error('subject')<p class="mt-1.5 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>@enderror
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Message <span class="text-red-500">*</span></label>
                                <textarea name="message" id="message" rows="5" required placeholder="Tell us about your project..."
                                    class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-600 rounded-xl text-slate-800 dark:text-slate-100 placeholder-slate-400 dark:placeholder-slate-500 focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-shadow resize-none @error('message') border-red-300 bg-red-50 dark:border-red-700 dark:bg-red-900/20 @enderror">{{ old('message') }}</textarea>
                                @error('message')<p class="mt-1.5 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>@enderror
                            </div>

                            <div>
                                <button type="submit" class="btn-primary text-base px-8 py-4 w-full sm:w-auto">
                                    Send Message
                                    <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(!empty($settings['contact_map_url']))
    <section class="bg-white dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-24">
            <div class="rounded-3xl overflow-hidden shadow-lg shadow-slate-900/5 border border-slate-100">
                <iframe src="{{ $settings['contact_map_url'] }}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    @endif

@endsection
