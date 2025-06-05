<?php

use App\Http\Controllers\ProposalController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');

    Route::get('/proposals/{proposal}/pdf', [ProposalController::class, 'showPdf'])
        ->name('proposals.pdf');

    // Show the “live HTML preview + edit” page for a given Proposal
    // Route::get('proposals/{proposal}/html-preview', [ProposalController::class, 'htmlPreview'])
    //     ->name('proposals.htmlPreview');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
