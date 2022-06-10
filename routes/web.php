<?php

use App\Http\Controllers\Admin\ApartmentController;
use App\Http\Controllers\Admin\BuildingController;
use Illuminate\Support\Facades\Route;

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

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('layouts.dashboard.app');
});
Route::group(
    [
        'prefix' => 'dashboard'
    ],
    function () {
        Route::resource('buildings', BuildingController::class);
    }
);

Route::group([
    'prefix' => 'dashboard'
], function () {
    Route::resource('apartments', ApartmentController::class);
});
