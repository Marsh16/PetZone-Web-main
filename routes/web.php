<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeedbackController;
use App\Models\UserLog;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/transaction', function () {
    return view('transaction');
});

Route::resource('/', FeedbackController::class);
Route::post('/', [FeedbackController::class, 'store2'])->name('feedback.store2');

Route::get('/contact', function () {
    UserLog::create([
        'log_type' => 3
    ]);

    return view('contact');
});

Route::get('/pet-hotels', [BusinessController::class, 'index']);
Route::get('/announcement', [Controller::class, 'announcement']);
Route::get('/pet-hotel', [BusinessController::class, 'show'])->name('pet-hotel');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
