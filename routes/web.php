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

Route::post('room', [RoomController::class, 'store']);

Route::get('roomList', [RoomController::class, 'index']);

Route::get('room/edit/{id}', [RoomController::class, 'edit']);

Route::post('room/update', [RoomController::class, 'update']);

Route::get('room/delete/{id}', [RoomController::class, 'destroy']);

//location
Route::get('location', [LocationController::class, 'create'])
                ->name('location');

Route::post('location', [LocationController::class, 'store']);

Route::get('locationList', [LocationController::class, 'index']);

Route::get('location/edit/{id}', [LocationController::class, 'edit']);

Route::post('location/update', [LocationController::class, 'update']);

Route::get('location/delete/{id}', [LocationController::class, 'destroy']);

//building
Route::get('building', [BuildingController::class, 'create'])
                ->name('building');

Route::post('building', [BuildingController::class, 'store']);

Route::get('buildingList', [BuildingController::class, 'index']);

Route::get('building/edit/{id}', [BuildingController::class, 'edit']);

Route::post('building/update', [BuildingController::class, 'update']);

Route::get('building/delete/{id}', [BuildingController::class, 'destroy']);

//booking
Route::get('booking', [BookingController::class, 'create'])
                ->name('booking');

Route::post('booking', [BookingController::class, 'store']);

Route::get('bookingList', [BookingController::class, 'index']);

Route::get('booking/edit/{id}', [BookingController::class, 'edit']);

Route::post('booking/update', [BookingController::class, 'update']);

Route::get('booking/delete/{id}', [BookingController::class, 'destroy']);

//calendar
Route::get('calendar', [CalendarController::class, 'create']);

require __DIR__.'/auth.php';
