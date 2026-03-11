@extends('layouts.public')

@section('content')
    <section class="bg-primary py-24 text-white text-center">
        <div class="container mx-auto px-6">
            <h1 class="text-5xl font-bold mb-4">Our Elite Professionals</h1>
            <div class="w-20 h-1 bg-secondary mx-auto"></div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-12">
            @foreach($members as $member)
                <div class="group">
                    <div class="relative overflow-hidden rounded-2xl bg-slate-100 aspect-[3/4] mb-6">
                        <img src="{{ $member->image_url ?? 'https://images.unsplash.com/photo-1556157382-97ec2d584e2a?auto=format&fit=crop&q=80&w=800' }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 transform group-hover:scale-105">
                    </div>
                    <h3 class="text-2xl font-bold text-primary mb-1">{{ $member->name }}</h3>
                    <p class="text-secondary font-bold text-sm uppercase tracking-widest mb-4">{{ $member->role }}</p>
                    <p class="text-slate-600 text-sm leading-relaxed line-clamp-3 mb-6 italic">"{{ strip_tags($member->bio) }}"</p>
                    <a href="mailto:{{ $member->email }}" class="text-primary font-bold hover:text-secondary transition-colors underline underline-offset-4">Contact {{ explode(' ', $member->name)[0] }}</a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
