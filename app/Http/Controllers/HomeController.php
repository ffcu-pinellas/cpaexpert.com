<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        $colors = \App\Models\SiteColor::pluck('hex_code', 'name')->toArray();
        $fonts = \App\Models\SiteFont::pluck('font_family', 'name')->toArray();
        $practiceAreas = \App\Models\PracticeArea::all();
        $teamMembers = \App\Models\TeamMember::all();
        $testimonials = \App\Models\Testimonial::all();
        $latestPosts = \App\Models\BlogPost::with('category')->latest()->take(3)->get();
        $mainMenu = \App\Models\NavigationMenu::where('name', 'Main Navigation')->first();
        $footerMenu = \App\Models\NavigationMenu::where('name', 'Footer Links')->first();

        return view('home', compact(
            'settings', 'colors', 'fonts', 'practiceAreas', 
            'teamMembers', 'testimonials', 'latestPosts', 
            'mainMenu', 'footerMenu'
        ));
    }

    public function contact()
    {
        $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        $colors = \App\Models\SiteColor::pluck('hex_code', 'name')->toArray();
        $fonts = \App\Models\SiteFont::pluck('font_family', 'name')->toArray();
        $mainMenu = \App\Models\NavigationMenu::where('name', 'Main Navigation')->first();
        $footerMenu = \App\Models\NavigationMenu::where('name', 'Footer Links')->first();

        return view('contact', compact('settings', 'colors', 'fonts', 'mainMenu', 'footerMenu'));
    }

    public function practiceAreas()
    {
        $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        $colors = \App\Models\SiteColor::pluck('hex_code', 'name')->toArray();
        $fonts = \App\Models\SiteFont::pluck('font_family', 'name')->toArray();
        $practiceAreas = \App\Models\PracticeArea::all();
        $mainMenu = \App\Models\NavigationMenu::where('name', 'Main Navigation')->first();
        $footerMenu = \App\Models\NavigationMenu::where('name', 'Footer Links')->first();

        return view('practice-areas.index', compact('settings', 'colors', 'fonts', 'practiceAreas', 'mainMenu', 'footerMenu'));
    }

    public function team()
    {
        $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        $colors = \App\Models\SiteColor::pluck('hex_code', 'name')->toArray();
        $fonts = \App\Models\SiteFont::pluck('font_family', 'name')->toArray();
        $members = \App\Models\TeamMember::all();
        $mainMenu = \App\Models\NavigationMenu::where('name', 'Main Navigation')->first();
        $footerMenu = \App\Models\NavigationMenu::where('name', 'Footer Links')->first();

        return view('team.index', compact('settings', 'colors', 'fonts', 'members', 'mainMenu', 'footerMenu'));
    }

    public function blog()
    {
        $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        $colors = \App\Models\SiteColor::pluck('hex_code', 'name')->toArray();
        $fonts = \App\Models\SiteFont::pluck('font_family', 'name')->toArray();
        $posts = \App\Models\BlogPost::with('category')->latest()->paginate(9);
        $mainMenu = \App\Models\NavigationMenu::where('name', 'Main Navigation')->first();
        $footerMenu = \App\Models\NavigationMenu::where('name', 'Footer Links')->first();

        return view('blog.index', compact('settings', 'colors', 'fonts', 'posts', 'mainMenu', 'footerMenu'));
    }

    public function showPage($slug)
    {
        $page = \App\Models\Page::where('slug', $slug)->firstOrFail();
        $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        $colors = \App\Models\SiteColor::pluck('hex_code', 'name')->toArray();
        $fonts = \App\Models\SiteFont::pluck('font_family', 'name')->toArray();
        $mainMenu = \App\Models\NavigationMenu::where('name', 'Main Navigation')->first();
        $footerMenu = \App\Models\NavigationMenu::where('name', 'Footer Links')->first();

        return view('page', compact('page', 'settings', 'colors', 'fonts', 'mainMenu', 'footerMenu'));
    }
}