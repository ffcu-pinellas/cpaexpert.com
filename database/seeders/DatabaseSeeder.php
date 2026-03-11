<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Setting;
use App\Models\PracticeArea;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use App\Models\NavigationMenu;
use App\Models\SiteColor;
use App\Models\SiteFont;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Admin User
        User::updateOrCreate(
            ['email' => 'admin@cpaexpert.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('Messenger@0090'),
                'email_verified_at' => now(),
            ]
        );

        // 2. Site Settings
        $settings = [
            'site_name' => 'CPAExpert & Diverse Law',
            'site_description' => 'Find trusted legal and accounting help.',
            'contact_email' => 'info@yourcpaexpert.com',
            'contact_phone' => '(555) 123-4567',
            'address' => '123 Elite Way, Financial District, FL',
            'google_maps_embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3523.515904092671!2d-82.4571776!3d27.94752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjfCsDU2JzUxLjEiTiA4MsKwMjcnMjUuOCJX!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'footer_text' => '© 2026 CPAExpert & Diverse Law Firm. All rights reserved.',
            'tawk_property_id' => '',
            'banner_title' => 'Legal Solutions Start Here',
            'banner_subtitle' => 'CPAExpert is the number one source of free legal information and resources on the web.',
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        // 3. Site Colors
        SiteColor::updateOrCreate(['name' => 'Primary'], ['hex_code' => '#FA6400']);
        SiteColor::updateOrCreate(['name' => 'Secondary'], ['hex_code' => '#e2b13c']);

        // 4. Site Fonts
        SiteFont::updateOrCreate(['name' => 'Heading'], ['font_family' => 'Playfair Display', 'source' => 'google_fonts']);
        SiteFont::updateOrCreate(['name' => 'Body'], ['font_family' => 'Inter', 'source' => 'google_fonts']);

        // 5. Practice Areas
        $areas = [
            [
                'title' => 'Criminal Law',
                'slug' => 'criminal-law',
                'short_description' => 'Expert defense for criminal charges and litigation.',
                'content' => 'Full criminal law services.',
            ],
            [
                'title' => 'Family Law',
                'slug' => 'family-law',
                'short_description' => 'Compassionate guidance for family matters.',
                'content' => 'Divorce, custody, and more.',
            ],
            [
                'title' => 'Personal Injury',
                'slug' => 'personal-injury',
                'short_description' => 'Fighting for your rights after an accident.',
                'content' => 'Injury claims and settlements.',
            ],
            [
                'title' => 'Real Estate Law',
                'slug' => 'real-estate',
                'short_description' => 'Strategic advice for property transactions.',
                'content' => 'Real estate contracts and disputes.',
            ],
            [
                'title' => 'CPA & Tax Services',
                'slug' => 'tax-services',
                'short_description' => 'Professional accounting and tax planning.',
                'content' => 'Tax audit defense and preparation.',
            ],
        ];

        foreach ($areas as $area) {
            PracticeArea::updateOrCreate(['slug' => $area['slug']], $area);
        }

        // 6. Navigation Menus
        NavigationMenu::updateOrCreate(['name' => 'Main Navigation'], [
            'items' => [
                ['label' => 'Find a Lawyer', 'url' => '/practice-areas'],
                ['label' => 'Legal Forms', 'url' => '/page/legal-forms'],
                ['label' => 'Learn About Law', 'url' => '/blog'],
                ['label' => 'Legal Professionals', 'url' => '/team'],
                ['label' => 'Blogs', 'url' => '/blog'],
            ]
        ]);

        NavigationMenu::updateOrCreate(['name' => 'Footer Links'], [
            'items' => [
                ['label' => 'Privacy Policy', 'url' => '/page/privacy-policy'],
                ['label' => 'Terms of Service', 'url' => '/page/terms'],
                ['label' => 'Contact Us', 'url' => '/contact'],
            ]
        ]);
    }
}
