<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Public pages
Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/projects', [ProjectController::class, 'index'])
    ->name('projects.index');

Route::get('/project/{project}', [ProjectController::class, 'show'])
    ->where('project', '[0-9]+')
    ->name('projects.show');

Route::get('/skills', [SkillController::class, 'index'])
    ->name('skills.index');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/quote-request', function () {
    return view('pages.quote-request');
})->name('quote.request');

// Authentication routes
Route::get('/login', [AuthController::class, 'showLoginForm'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.attempt');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');


// Admin pages (requires auth)
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // Projects
    Route::get('/dashboard/projects', [ProjectController::class, 'adminIndex'])
        ->name('dashboard.projects.index');

    Route::get('/dashboard/projects/create', [ProjectController::class, 'create'])
        ->name('dashboard.projects.create');

    Route::post('/dashboard/projects/store', [ProjectController::class, 'store'])
        ->name('dashboard.projects.store');

    Route::get('/dashboard/projects/edit/{project}', [ProjectController::class, 'edit'])
        ->where('project', '[0-9]+')
        ->name('dashboard.projects.edit');

    Route::post('/dashboard/projects/update/{project}', [ProjectController::class, 'update'])
        ->where('project', '[0-9]+')
        ->name('dashboard.projects.update');

    Route::delete('/dashboard/projects/delete/{project}', [ProjectController::class, 'destroy'])
        ->where('project', '[0-9]+')
        ->name('dashboard.projects.delete');

    // Skills
    Route::get('/dashboard/skills', [SkillController::class, 'adminIndex'])
        ->name('dashboard.skills.index');

    Route::get('/dashboard/skills/create', [SkillController::class, 'create'])
        ->name('dashboard.skills.create');

    Route::post('/dashboard/skills/store', [SkillController::class, 'store'])
        ->name('dashboard.skills.store');

    Route::get('/dashboard/skills/edit/{skill}', [SkillController::class, 'edit'])
        ->where('skill', '[0-9]+')
        ->name('dashboard.skills.edit');

    Route::post('/dashboard/skills/update/{skill}', [SkillController::class, 'update'])
        ->where('skill', '[0-9]+')
        ->name('dashboard.skills.update');

    Route::delete('/dashboard/skills/delete/{skill}', [SkillController::class, 'destroy'])
        ->where('skill', '[0-9]+')
        ->name('dashboard.skills.delete');

    // Contacts
    Route::get('/dashboard/contacts', [ContactController::class, 'adminIndex'])
        ->name('dashboard.contacts.index');

    Route::get('/dashboard/contacts/create', [ContactController::class, 'create'])
        ->name('dashboard.contacts.create');

    Route::post('/dashboard/contacts/store', [ContactController::class, 'store'])
        ->name('dashboard.contacts.store');

    Route::get('/dashboard/contacts/edit/{contact}', [ContactController::class, 'edit'])
        ->where('contact', '[0-9]+')
        ->name('dashboard.contacts.edit');

    Route::post('/dashboard/contacts/update/{contact}', [ContactController::class, 'update'])
        ->where('contact', '[0-9]+')
        ->name('dashboard.contacts.update');

    Route::delete('/dashboard/contacts/delete/{contact}', [ContactController::class, 'destroy'])
        ->where('contact', '[0-9]+')
        ->name('dashboard.contacts.delete');

    // Quotes
    Route::get('/dashboard/quotes', [QuoteController::class, 'adminIndex'])
        ->name('dashboard.quotes.index');

    Route::get('/dashboard/quotes/create', [QuoteController::class, 'create'])
        ->name('dashboard.quotes.create');

    Route::post('/dashboard/quotes/store', [QuoteController::class, 'store'])
        ->name('dashboard.quotes.store');

    Route::get('/dashboard/quotes/edit/{quote}', [QuoteController::class, 'edit'])
        ->where('quote', '[0-9]+')
        ->name('dashboard.quotes.edit');

    Route::post('/dashboard/quotes/update/{quote}', [QuoteController::class, 'update'])
        ->where('quote', '[0-9]+')
        ->name('dashboard.quotes.update');

    Route::delete('/dashboard/quotes/delete/{quote}', [QuoteController::class, 'destroy'])
        ->where('quote', '[0-9]+')
        ->name('dashboard.quotes.delete');

    // Settings
    Route::get('/dashboard/settings', [SettingController::class, 'adminIndex'])
        ->name('dashboard.settings.index');

    Route::get('/dashboard/settings/create', [SettingController::class, 'create'])
        ->name('dashboard.settings.create');

    Route::post('/dashboard/settings/store', [SettingController::class, 'store'])
        ->name('dashboard.settings.store');

    Route::get('/dashboard/settings/edit/{setting}', [SettingController::class, 'edit'])
        ->where('setting', '[0-9]+')
        ->name('dashboard.settings.edit');

    Route::post('/dashboard/settings/update/{setting}', [SettingController::class, 'update'])
        ->where('setting', '[0-9]+')
        ->name('dashboard.settings.update');

    Route::delete('/dashboard/settings/delete/{setting}', [SettingController::class, 'destroy'])
        ->where('setting', '[0-9]+')
        ->name('dashboard.settings.delete');
});

// Fallback 404
Route::fallback(function () {
    return response()->view('pages.404', [], 404);
});
