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


Route::get('room', [HomeController::class, 'bilik'])
                ->name('room');

Route::get('location', [HomeController::class, 'lokasi'])
                ->name('location');

Route::get('building', [HomeController::class, 'bangunan'])
                ->name('building');
                
Route::get('room', [RoomController::class, 'create'])
                ->name('room');

Route::get('location', [LocationController::class, 'create'])
                ->name('location');

Route::get('building', [BuildingController::class, 'create'])
                ->name('building');

Route::get('booking', [BookingController::class, 'create'])
                ->name('booking');


Route::get('calendar', [CalendarController::class, 'create']);

Route::get('post/{code}/room', [ 'as'=>'post-room', 'uses'=>'PostsController@room']);


require __DIR__.'/auth.php';
