<?php

use App\Http\Controllers\AttendeeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ExperimentalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Attendee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

// Debugging

Route::get('/experimental', [ExperimentalController::class, 'index']);

Route::post('/experimental/post', [ExperimentalController::class, 'sendPost']);

Route::group(['middleware' => ['auth']], function () {
    // Events
    Route::get('/', [EventController::class, 'dashboard']);
    Route::get('/events', [EventController::class, 'dashboard']);
    Route::get('/events/{slug}', [EventController::class, 'index'])->name('events_index');

    // Events - Fetch slugs
    Route::get('/add/checkSlug', [EventController::class, 'checkSlug']);

    // Events - CRUD

    Route::get('/add', [EventController::class, 'create']);
    Route::post('/add', [EventController::class, 'store']);

    Route::get('/events/{slug}/edit', [EventController::class, 'show']);
    Route::post('/events/{slug}/edit', [EventController::class, 'update']);

    Route::delete('events/{slug}/delete', [EventController::class, 'destroy']);
    // Attendees

    Route::get('/events/{slug}/add', [AttendeeController::class, 'create']);

    Route::post('/events/{slug}/add', [AttendeeController::class, 'store']);

    Route::get('/events/{slug}/edit/{id}', [AttendeeController::class, 'show']);

    Route::post('/events/{slug}/edit/{id}', [AttendeeController::class, 'update']);

    Route::delete('events/{slug}/delete/{id}', [AttendeeController::class, 'destroy']);
});



Route::get('/logout', function(){
    Auth::logout();
    return redirect('/login');
});

// Auth
Route::get('/login', [LoginController::class, 'index'])->name('login_index');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login_authenticate');

Route::get('/register', [RegisterController::class, 'index'])->name('register_index');
Route::post('/register', [RegisterController::class, 'store'])->name('register_store');
