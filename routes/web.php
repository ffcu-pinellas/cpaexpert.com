<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/practice-areas', [\App\Http\Controllers\HomeController::class, 'practiceAreas'])->name('public.practice-areas');
Route::get('/team', [\App\Http\Controllers\HomeController::class, 'team'])->name('public.team');
Route::get('/blog', [\App\Http\Controllers\HomeController::class, 'blog'])->name('public.blog');
Route::get('/page/{slug}', [\App\Http\Controllers\HomeController::class, 'showPage'])->name('public.page');
Route::get('/contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('public.contact');
Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

Route::get('/migrate', function() {
    \Illuminate\Support\Facades\Artisan::call('migrate --force');
    \Illuminate\Support\Facades\Artisan::call('db:seed --force');
    return "Migrations and Seeding completed successfully! Admin Login: admin@cpaexpert.com / Messenger@0090";
});
Route::get('/admin', function() {
    return redirect()->route('dashboard');
});

Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('pages', \App\Http\Controllers\Admin\PageController::class);
    Route::resource('team', \App\Http\Controllers\Admin\TeamController::class);
    Route::resource('blog', \App\Http\Controllers\Admin\BlogController::class);
    Route::resource('practice-areas', \App\Http\Controllers\Admin\PracticeAreaController::class);
    Route::resource('navigation', \App\Http\Controllers\Admin\NavigationController::class);
    Route::resource('testimonials', \App\Http\Controllers\Admin\TestimonialController::class);
    Route::resource('submissions', \App\Http\Controllers\Admin\ContactSubmissionController::class);
    Route::resource('media', \App\Http\Controllers\Admin\MediaController::class);
    Route::get('/visual-customization', [\App\Http\Controllers\Admin\VisualCustomizationController::class, 'index'])->name('visual.index');
    Route::post('/visual-customization', [\App\Http\Controllers\Admin\VisualCustomizationController::class, 'update'])->name('visual.update');

    Route::get('/settings', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('settings.index');
    Route::post('/settings', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('settings.update');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
