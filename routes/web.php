<?php

use App\Http\Controllers\Webhooks\HooksController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Webhooks\WebhooksController;
use App\Http\Middleware\VerifyCsrfToken;

Route::get('/', function () {
    ds('inicia');
    return view('hooks');
});

Route::post('/hooks', [HooksController::class, 'index'])->name('hooks');


Route::post('/hooksstore', [WebhooksController::class, 'store'])
    ->name('hooksstore')
    ->withoutMiddleware(VerifyCsrfToken::class);
