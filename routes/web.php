<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\Admin\TeamMembers;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {

    Route::resource('posts', \App\Http\Controllers\Backend\PostController::class);
    Route::resource('team-members', \App\Http\Controllers\Backend\TeamMemberController::class);
    Route::resource('testimonials', \App\Http\Controllers\Backend\TestimonialController::class);
    Route::resource('partners', \App\Http\Controllers\Backend\PartnerController::class);
    Route::resource('contact-messages', \App\Http\Controllers\Backend\ContactMessageController::class);
    Route::resource('sliders', \App\Http\Controllers\Backend\SliderController::class);
    Route::resource('abouts', \App\Http\Controllers\Backend\AboutController::class);
    Route::resource('features', \App\Http\Controllers\Backend\FeatureController::class);
    Route::resource('achievements', \App\Http\Controllers\Backend\AchievementController::class);
    Route::resource('settings', \App\Http\Controllers\Backend\SettingController::class);
    Route::resource('firms', \App\Http\Controllers\Backend\FirmController::class);
    Route::resource('members', \App\Http\Controllers\Backend\MemberController::class);
    Route::resource('lawyers', \App\Http\Controllers\Backend\LawyerController::class);
    Route::resource('services', \App\Http\Controllers\Backend\ServiceController::class);
    Route::resource('addresses', \App\Http\Controllers\Backend\AddressController::class);
    Route::resource('practice-areas', \App\Http\Controllers\Backend\PracticeAreaController::class);
    Route::resource('statistics', \App\Http\Controllers\Backend\StatisticController::class);
});

// Section Pages
Route::get('/about', \App\Livewire\AboutPage::class)->name('about');
Route::get('/features', \App\Livewire\FeaturesPage::class)->name('features');
Route::get('/achievements', \App\Livewire\AchievementsPage::class)->name('achievements');
Route::get('/team', \App\Livewire\TeamPage::class)->name('team');
Route::get('/blog', \App\Livewire\PostsPage::class)->name('blog');
Route::get('/contact', \App\Livewire\ContactPage::class)->name('contact');


// Detail Pages
Route::get('/blog/{id}', \App\Livewire\BlogDetail::class)->name('blog.detail');
Route::get('/achievements/{id}', \App\Livewire\AchievementDetail::class)->name('achievement.detail');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
});

require __DIR__.'/auth.php';
