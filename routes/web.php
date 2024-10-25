<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpeakerController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\ParticipantController;

// Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/speakers', [FrontController::class, 'speakers'])->name('speakers');
Route::get('/schedule', [FrontController::class, 'schedule'])->name('schedule');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {
        // Rute untuk manajemen event
        Route::resource('event', EventController::class);
        // Rute untuk manajemen tiket
        Route::resource('ticket', TicketController::class);
        // Rute untuk manajemen peserta
        Route::resource('participant', ParticipantController::class);
        // Rute untuk manajemen penyelenggara
        Route::resource('organizer', OrganizerController::class);
        // Rute untuk manajemen pembayaran
        Route::resource('payment', PaymentController::class);
        Route::patch('payment/{payment}/status/{status}', [PaymentController::class, 'updateStatus'])->name('payments.updateStatus');
        // Rute untuk manajemen pembicara
        Route::resource('speaker', SpeakerController::class);
    
    });

});

require __DIR__.'/auth.php';
