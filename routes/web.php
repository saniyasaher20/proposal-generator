<?php

use App\Http\Controllers\ProposalController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/proposals/{proposal}/pdf', [ProposalController::class, 'showPdf'])
    ->name('proposals.pdf');

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
