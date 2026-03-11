@extends('layouts.public')

@section('content')
    <section class="bg-primary py-24 text-white text-center">
        <div class="container mx-auto px-6">
            <h1 class="text-5xl font-bold mb-4">{{ $page->title }}</h1>
            <div class="w-20 h-1 bg-secondary mx-auto mb-8"></div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 max-w-4xl prose prose-lg prose-slate mx-auto">
            {!! $page->content !!}
        </div>
    </section>
@endsection
