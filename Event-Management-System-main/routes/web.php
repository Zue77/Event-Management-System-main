<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Other existing authenticated routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route for user and admin
    Route::middleware(['checkUserRole:user,admin'])->group(function () {
        Route::get('/event/browse', [EventController::class, 'browse'])->name('event.browse');
        Route::get('/event/view/{event}', [EventController::class, 'view'])->name('event.view');
    });

    // Route for organiser and admin
    Route::middleware(['checkUserRole:organiser,admin'])->group(function () {
        Route::get('/event', [EventController::class, 'allEvents'])->name('events.allEvents');
        Route::get('/event/create', [EventController::class, 'create'])->name('events.create');
        Route::post('/event', [EventController::class, 'store'])->name('events.store');
        Route::get('/event/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
        Route::put('/event/{event}/update', [EventController::class, 'update'])->name('events.update');
        Route::delete('/event/{event}/delete', [EventController::class, 'delete'])->name('events.delete');
    });
});

require __DIR__.'/auth.php';
