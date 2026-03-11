@extends('layouts.public')

@section('content')
    <section class="bg-primary py-24 text-white text-center">
        <div class="container mx-auto px-6">
            <h1 class="text-5xl font-bold mb-4">Dedicated Practice Areas</h1>
            <div class="w-20 h-1 bg-secondary mx-auto"></div>
        </div>
    </section>

    <section class="py-24 bg-slate-50">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-12">
            @foreach($practiceAreas as $area)
                <div class="bg-white p-12 rounded-2xl shadow-sm border border-gray-100 hover:shadow-2xl transition-all group">
                    <div class="text-secondary mb-8 transform group-hover:scale-110 transition-transform">
                        {!! $area->icon ?? '<svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>' !!}
                    </div>
                    <h3 class="text-2xl font-bold mb-6 text-primary">{{ $area->title }}</h3>
                    <p class="text-slate-600 mb-8 leading-relaxed text-lg">{{ $area->short_description }}</p>
                    <div class="prose prose-slate mb-10 line-clamp-3">
                         {!! strip_tags($area->content) !!}
                    </div>
                    <a href="#" class="btn-primary text-center block">Read More Details</a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
