@extends('layouts.public')

@section('content')
<div class="root">
    <!-- Banner Section -->
    <section class="fl-banner" style="--fl-homepage-banner-background-image-desktop: url(https://www.findlaw.com/static/c/images/images/w_1200,c_limit,dpr_auto/f_auto,q_auto:eco/v1753177840/ability-law/wp-prod/www-Group-162-1-2/www-Group-162-1-2.jpg?_i=AA);">
        <div class="fl-banner__content">
            <h1 class="fl-banner__text-main">
                {{ $settings['banner_title'] ?? 'Legal Solutions Start Here' }}
            </h1>
            <span class="fl-banner__text-secondary">
                <p>{{ $settings['banner_subtitle'] ?? 'CPAExpert is the number one source of free legal information and resources on the web.' }}</p>
            </span>
            <div class="fl-banner__search">
                <div class="fl-flex gap-4">
                     <a href="#contact" class="fl-button primary" style="padding: 15px 30px; font-size: 1.2rem; text-decoration: none;">Get Started Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="fl-stats fl-flex fl-items-center fl-justify-center fl-stats-horizontal fl-stats-height-small">
        <ul class="fl-stats-cards-container fl-no-margin">
            <li class="fl-stats-cards-item">
                <div class="fl-stats-card fl-no-margin fl-flex fl-items-center fl-justify-center fl-stats-card-horizontal fl-stats-card-height-small">
                    <span class="fl-stats-card-value fl-callout-display">#1</span>
                    <span class="fl-stats-card-description fl-text">most visited legal information website</span>
                </div>
            </li>
            <li class="fl-stats-cards-item">
                <div class="fl-stats-card fl-no-margin fl-flex fl-items-center fl-justify-center fl-stats-card-horizontal fl-stats-card-height-small">
                    <span class="fl-stats-card-value fl-callout-display">35k+</span>
                    <span class="fl-stats-card-description fl-text">articles reviewed by legal professionals</span>
                </div>
            </li>
            <li class="fl-stats-cards-item">
                <div class="fl-stats-card fl-no-margin fl-flex fl-items-center fl-justify-center fl-stats-card-horizontal fl-stats-card-height-small">
                    <span class="fl-stats-card-value fl-callout-display">1.2m</span>
                    <span class="fl-stats-card-description fl-text">law firms in our nationwide directory</span>
                </div>
            </li>
        </ul>
    </section>

    <!-- Practice Areas -->
    <div class="fl-container fl-section-title fl-text-center py-20">
        <h2 class="fl-title-H2 fl-section-title-heading">Explore Legal Issues</h2>
        <p class="fl-section-title-content">Whether you are facing a legal issue or want to learn about a specific legal subject, browsing our legal topics is the perfect starting point.</p>
    </div>

    <div class="fl-container">
        <div class="topic-box-section-content" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; margin-bottom: 50px;">
            @foreach($practiceAreas as $area)
                <a class="fl-topic-box-item" href="{{ url('/practice-areas/'.$area->slug) }}" style="text-decoration: none; border: 1px solid #eee; padding: 30px; border-radius: 8px; text-align: center; display: block;">
                    <div style="font-size: 3rem; margin-bottom: 15px;">⚖️</div>
                    <span class="fl-topic-box-item-text fl-text-lg-bold" style="color: #333; font-weight: bold; font-size: 1.2rem;">{{ $area->title }}</span>
                </a>
            @endforeach
        </div>
    </div>

    <!-- Contact Form Section -->
    <section id="contact" class="py-24 bg-slate-50">
        <div class="container mx-auto px-6">
            <div style="background: white; border-radius: 20px; box-shadow: 0 10px 50px rgba(0,0,0,0.1); padding: 50px; max-width: 800px; margin: 0 auto;">
                <h2 class="text-3xl font-bold mb-6 text-center">Schedule a Consultation</h2>
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                        <input type="text" name="name" placeholder="Name" style="width: 100%; padding: 15px; border: 1px solid #ddd; border-radius: 8px;" required>
                        <input type="email" name="email" placeholder="Email" style="width: 100%; padding: 15px; border: 1px solid #ddd; border-radius: 8px;" required>
                    </div>
                    <textarea name="message" rows="5" placeholder="Case Details" style="width: 100%; padding: 15px; border: 1px solid #ddd; border-radius: 8px; margin-bottom: 20px;" required></textarea>
                    <button type="submit" class="fl-button primary" style="width: 100%; padding: 20px; font-size: 1.2rem;">Submit Case Review</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
