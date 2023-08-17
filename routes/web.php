<?php

use App\Http\Controllers\AttendeeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Attendee;
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

Route::get('/experimental', function(){
    return view('experimental');
});

Route::get('/', [EventController::class, 'index']);

Route::get('/events/{id}', [EventController::class, 'index']);

Route::get('/events/{id}/add', [AttendeeController::class, 'create']);

Route::post('/events/{id}/add', [AttendeeController::class, 'store']);

Route::get('/events/{eventid}/edit/{id}', [AttendeeController::class, 'show']);

Route::post('/events/{eventid}/edit/{id}', [AttendeeController::class, 'update']);

Route::delete('events/{id}/delete', [AttendeeController::class, 'destroy']);

// Auth
Route::get('/login', [LoginController::class, 'index'])->name('login_index');

Route::get('/register', [RegisterController::class, 'index'])->name('register_index');
Route::post('/register', [RegisterController::class, 'store'])->name('register_store');
