<?php

use App\Http\Controllers\AttendeeController;
use App\Http\Controllers\EventController;
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
    return view('basic');
});

Route::get('/', [EventController::class, 'index']);

Route::get('/events/{id}', [EventController::class, 'index']);

Route::get('/events/{id}/add', [AttendeeController::class, 'create']);

Route::post('/events/{id}/add', [AttendeeController::class, 'store']);

Route::delete('events/{id}/delete', [AttendeeController::class, 'destroy']);
