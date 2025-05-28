<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\QuoteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Vos endpoints RESTful protégés par le middleware “auth:api”.
| Ici on ajoute un préfixe de nom “api.” pour éviter les doublons.
|
*/

Route::middleware('auth:api')
    ->name('api.')
    ->group(function () {
        Route::apiResource('projects', ProjectController::class);

        Route::apiResource('skills', SkillController::class)
            ->only(['index', 'store', 'update', 'destroy']);

        Route::apiResource('contact-requests', ContactController::class)
            ->only(['index', 'show', 'destroy']);

        /* Route::apiResource('quote-requests', QuoteController::class)
              ->only(['index', 'show', 'destroy']); */
    });
