@extends('layouts.public')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[80vh] flex items-center overflow-hidden bg-slate-900">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-slate-900/60 z-10"></div>
            <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&q=80&w=2000" class="w-full h-full object-cover">
        </div>
        
        <div class="container mx-auto px-6 relative z-20">
            <div class="max-w-2xl">
                <span class="text-secondary font-bold tracking-widest uppercase text-sm mb-4 block">Trusted Expertise in Law & Accounting</span>
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-8 leading-tight">Elite Legal Representation & Financial Strategy.</h1>
                <p class="text-xl text-slate-200 mb-10 leading-relaxed">We provide a unique combination of legal expertise and CPA services to protect your assets and grow your future.</p>
                <div class="flex flex-col md:flex-row gap-4">
                    <a href="#contact" class="btn-primary text-center px-10 py-4 text-lg">Schedule Consultation</a>
                    <a href="#practice-areas" class="border-2 border-white/30 text-white px-10 py-4 rounded font-bold text-lg hover:bg-white/10 transition-all text-center">Our Services</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stat Bar -->
    <section class="bg-primary py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl font-bold text-secondary mb-2">25+</div>
                    <div class="text-slate-400 text-sm uppercase tracking-widest">Years Experience</div>
                </div>
                 <div>
                    <div class="text-4xl font-bold text-secondary mb-2">1k+</div>
                    <div class="text-slate-400 text-sm uppercase tracking-widest">Clients Won</div>
                </div>
                 <div>
                    <div class="text-4xl font-bold text-secondary mb-2">$50M+</div>
                    <div class="text-slate-400 text-sm uppercase tracking-widest">Recovered</div>
                </div>
                 <div>
                    <div class="text-4xl font-bold text-secondary mb-2">99%</div>
                    <div class="text-slate-400 text-sm uppercase tracking-widest">Success Rate</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Practice Areas -->
    <section id="practice-areas" class="py-24 bg-slate-50">
        <div class="container mx-auto px-6 text-center mb-16">
            <h2 class="text-4xl font-bold text-primary mb-4">Dedicated Practice Areas</h2>
            <div class="w-20 h-1 bg-secondary mx-auto"></div>
        </div>

        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($practiceAreas as $area)
                <div class="bg-white p-10 rounded-xl shadow-sm border border-gray-100 hover:shadow-xl transition-all group">
                    <div class="text-secondary mb-6 transform group-hover:scale-110 transition-transform">
                        {!! $area->icon ?? '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>' !!}
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-primary">{{ $area->title }}</h3>
                    <p class="text-slate-600 mb-6 leading-relaxed">{{ $area->short_description }}</p>
                    <a href="#" class="text-sm font-bold text-primary hover:text-secondary transition-colors inline-flex items-center gap-2 uppercase tracking-widest">
                        Learn More 
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-24 bg-white">
        <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
            <div class="max-w-2xl">
                <h2 class="text-4xl font-bold text-primary mb-4">Our Elite Professionals</h2>
                <div class="w-20 h-1 bg-secondary mb-6"></div>
                <p class="text-slate-600 text-lg">A diverse team of skilled attorneys and CPAs dedicated to your success.</p>
            </div>
            <a href="#" class="btn-primary">View All Professionals</a>
        </div>

        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">
            @foreach($teamMembers as $member)
                <div class="group relative overflow-hidden rounded-xl bg-slate-100 aspect-[3/4]">
                    <img src="{{ $member->image_url ?? 'https://images.unsplash.com/photo-1556157382-97ec2d584e2a?auto=format&fit=crop&q=80&w=800' }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity p-8 flex flex-col justify-end">
                        <h4 class="text-white font-bold text-xl">{{ $member->name }}</h4>
                        <p class="text-secondary text-sm mb-4">{{ $member->role }}</p>
                        <div class="flex gap-3">
                            <!-- Socials Placeholder -->
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-24 bg-primary text-white overflow-hidden relative">
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <svg class="w-16 h-16 text-secondary/20 mx-auto mb-10" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H15.017C14.4647 8 14.017 7.55228 14.017 7V5C14.017 4.44772 14.4647 4 15.017 4H19.017C21.2261 4 23.017 5.79086 23.017 8V15C23.017 18.866 19.883 22 16.017 22H14.017V21ZM5.017 21L5.017 18C5.017 16.8954 5.91243 16 7.017 16H10.017C10.5693 16 11.017 15.5523 11.017 15V9C11.017 8.44772 10.5693 8 10.017 8H6.017C5.46472 8 5.017 7.55228 5.017 7V5C5.017 4.44772 5.46472 4 6.017 4H10.017C12.2261 4 14.017 5.79086 14.017 8V15C14.017 18.866 10.883 22 7.017 22H5.017V21Z"></path></svg>
                
                <div class="text-2xl md:text-3xl font-light italic leading-relaxed mb-10">
                    "This firm handled my complex legal and tax situation with absolute brilliance. Their combined approach is truly unique and effective."
                </div>
                
                <div class="flex items-center justify-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-secondary text-primary flex items-center justify-center font-bold">JD</div>
                    <div class="text-left">
                        <div class="font-bold text-lg">Jane Doe</div>
                        <div class="text-secondary text-sm uppercase tracking-widest">Client Testimonial</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-gray-100 flex flex-col md:flex-row">
                <div class="p-12 md:p-20 flex-1">
                    <h2 class="text-4xl font-bold text-primary mb-6">Schedule Your Consult</h2>
                    <p class="text-slate-600 mb-10 text-lg">Tell us about your case or financial needs. Our experts will review and reach out within 24 hours.</p>
                    
                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <input type="text" name="name" placeholder="Full Name" class="w-full bg-slate-50 border-gray-100 rounded-lg p-4 focus:ring-2 focus:ring-secondary transition-all" required>
                            <input type="email" name="email" placeholder="Email Address" class="w-full bg-slate-50 border-gray-100 rounded-lg p-4 focus:ring-2 focus:ring-secondary transition-all" required>
                        </div>
                        <input type="text" name="subject" placeholder="What are you looking for? (e.g. Tax Audit, Family Law)" class="w-full bg-slate-50 border-gray-100 rounded-lg p-4 focus:ring-2 focus:ring-secondary transition-all">
                        <textarea name="message" rows="5" placeholder="Your Message" class="w-full bg-slate-50 border-gray-100 rounded-lg p-4 focus:ring-2 focus:ring-secondary transition-all" required></textarea>
                        <button type="submit" class="w-full btn-primary text-xl py-5 shadow-xl shadow-primary/20">Send Message Now</button>
                    </form>
                </div>
                
                <div class="bg-primary p-12 md:p-20 text-white md:w-1/3">
                    <h3 class="text-2xl font-bold mb-10">Direct Contact</h3>
                    <div class="space-y-8">
                        <div class="flex gap-4">
                            <div class="text-secondary">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div>
                                <div class="text-xs uppercase tracking-widest text-slate-400 mb-1">Call Us</div>
                                <div class="text-lg font-bold">{{ $settings['contact_phone'] ?? '(555) 123-4567' }}</div>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="text-secondary">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <div class="text-xs uppercase tracking-widest text-slate-400 mb-1">Email Us</div>
                                <div class="text-lg font-bold">{{ $settings['contact_email'] ?? 'info@yourcpaexpert.com' }}</div>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="text-secondary">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <div class="text-xs uppercase tracking-widest text-slate-400 mb-1">Our Office</div>
                                <div class="text-lg font-bold">{{ $settings['address'] ?? '123 Elite Way, FL' }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-20">
                        <div class="rounded-xl overflow-hidden grayscale opacity-50 contrast-125 border border-white/10">
                             {!! $settings['google_maps_embed'] ?? '' !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
