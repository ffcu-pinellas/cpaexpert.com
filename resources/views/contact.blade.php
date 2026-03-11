@extends('layouts.public')

@section('content')
    <section class="bg-primary py-24 text-white text-center">
        <div class="container mx-auto px-6">
            <h1 class="text-5xl font-bold mb-4">Contact Our Experts</h1>
            <div class="w-20 h-1 bg-secondary mx-auto"></div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-20">
                <div>
                    <h2 class="text-3xl font-bold text-primary mb-8">Get in Touch</h2>
                    <p class="text-slate-600 mb-12 text-lg leading-relaxed">Have a question about our services or need to schedule a consultation? Fill out the form below and one of our dedicated professionals will reach out to you within one business day.</p>
                    
                    <div class="space-y-10 mb-12">
                        <div class="flex gap-6 items-start">
                            <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 text-lg mb-1">Office Location</h4>
                                <p class="text-slate-500">{{ $settings['address'] ?? '123 Elite Way, Tampa, FL 33602' }}</p>
                            </div>
                        </div>
                        <div class="flex gap-6 items-start">
                            <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 text-lg mb-1">Phone Number</h4>
                                <p class="text-slate-500">{{ $settings['contact_phone'] ?? '(555) 123-4567' }}</p>
                            </div>
                        </div>
                        <div class="flex gap-6 items-start">
                            <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 text-lg mb-1">Email Address</h4>
                                <p class="text-slate-500">{{ $settings['contact_email'] ?? 'info@yourcpaexpert.com' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-3xl overflow-hidden shadow-xl border border-gray-100 h-80 grayscale contrast-125">
                         {!! $settings['google_maps_embed'] ?? '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3524.339241516!2d-82.4580!3d27.9506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjfCsDU3JzAyLjIiTiA4MsKwMjcnMjguOCJX!5e0!3m2!1sen!2sus!4v1600000000000!5m2!1sen!2sus" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>' !!}
                    </div>
                </div>

                <div class="bg-slate-50 p-12 md:p-16 rounded-3xl border border-gray-100 shadow-sm self-start">
                    <h3 class="text-3xl font-bold text-primary mb-8">Send a Message</h3>
                    
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-200 text-green-700 px-6 py-4 rounded-xl mb-8 flex items-center gap-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-widest text-slate-400 mb-2">Your Name</label>
                            <input type="text" name="name" class="w-full bg-white border-gray-200 rounded-xl p-4 focus:ring-2 focus:ring-secondary focus:border-transparent transition-all" required>
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-widest text-slate-400 mb-2">Email Address</label>
                            <input type="email" name="email" class="w-full bg-white border-gray-200 rounded-xl p-4 focus:ring-2 focus:ring-secondary focus:border-transparent transition-all" required>
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-widest text-slate-400 mb-2">Phone Number</label>
                            <input type="text" name="phone" class="w-full bg-white border-gray-200 rounded-xl p-4 focus:ring-2 focus:ring-secondary focus:border-transparent transition-all">
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-widest text-slate-400 mb-2">Subject</label>
                            <input type="text" name="subject" class="w-full bg-white border-gray-200 rounded-xl p-4 focus:ring-2 focus:ring-secondary focus:border-transparent transition-all">
                        </div>
                         <div>
                            <label class="block text-xs font-bold uppercase tracking-widest text-slate-400 mb-2">Message</label>
                            <textarea name="message" rows="6" class="w-full bg-white border-gray-200 rounded-xl p-4 focus:ring-2 focus:ring-secondary focus:border-transparent transition-all" required></textarea>
                        </div>
                        <button type="submit" class="w-full btn-primary text-xl py-5 shadow-lg shadow-primary/10">Submit Inquiry</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
