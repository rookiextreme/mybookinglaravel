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

Route::get('roomList', [RoomController::class, 'index']);

//location
Route::get('location', [LocationController::class, 'create'])
                ->name('location');

Route::post('location', [LocationController::class, 'store']);

Route::get('locationList', [LocationController::class, 'index']);

//building
Route::get('building', [BuildingController::class, 'create'])
                ->name('building');

Route::post('building', [BuildingController::class, 'store']);

Route::get('buildingList', [BuildingController::class, 'index']);

Route::get('building/edit/{id}', [BuildingController::class, 'edit']);

Route::get('building/edit/{id}', [BuildingController::class, 'edit']);

Route::get('building/delete/{id}', [BuildingController::class, 'destroy']);

//booking
Route::post('building/update', [BuildingController::class, 'update']);

//calendar
Route::get('calendar', [CalendarController::class, 'create']);

require __DIR__.'/auth.php';
