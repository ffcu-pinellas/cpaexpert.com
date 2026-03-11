@extends('layouts.public')

@section('content')
    <section class="bg-primary py-24 text-white text-center">
        <div class="container mx-auto px-6">
            <h1 class="text-5xl font-bold mb-4">Latest Insights & Resources</h1>
            <div class="w-20 h-1 bg-secondary mx-auto"></div>
        </div>
    </section>

    <section class="py-24 bg-slate-50">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-12">
            @foreach($posts as $post)
                <div class="bg-white rounded-2xl shadow-sm overflow-hidden border border-gray-100 hover:shadow-xl transition-all flex flex-col">
                    <div class="aspect-video bg-slate-200">
                        @if($post->featured_image_url)
                            <img src="{{ $post->featured_image_url }}" class="w-full h-full object-cover">
                        @endif
                    </div>
                    <div class="p-8 flex-1 flex flex-col">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="px-3 py-1 bg-indigo-50 text-indigo-700 text-[10px] font-bold uppercase tracking-widest rounded-full">{{ $post->category->name }}</span>
                            <span class="text-[10px] text-slate-400 font-bold uppercase tracking-widest">{{ $post->created_at->format('M d, Y') }}</span>
                        </div>
                        <h3 class="text-2xl font-bold text-primary mb-4 leading-tight hover:text-secondary transition-colors cursor-pointer">{{ $post->title }}</h3>
                        <p class="text-slate-600 text-sm leading-relaxed line-clamp-3 mb-8">{{ Str::limit(strip_tags($post->content), 150) }}</p>
                        <div class="mt-auto">
                            <a href="#" class="text-primary font-bold inline-flex items-center gap-2 hover:text-secondary transition-colors group">
                                Read Full Article 
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="container mx-auto px-6 mt-16">
            {{ $posts->links() }}
        </div>
    </section>
@endsection
