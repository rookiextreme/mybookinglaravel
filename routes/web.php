<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//room
Route::get('room', [RoomController::class, 'create'])
                ->name('room');

Route::get('roomList', [RoomController::class, 'show']);

//location
Route::get('location', [LocationController::class, 'create'])
                ->name('location');

Route::get('locationList', [LocationController::class, 'show']);

//building
Route::get('building', [BuildingController::class, 'create'])
                ->name('building');

Route::get('buildingList', [BuildingController::class, 'show']);

//booking
Route::get('booking', [BookingController::class, 'create'])
                ->name('booking');

//calendar
Route::get('calendar', [CalendarController::class, 'create']);

require __DIR__.'/auth.php';
