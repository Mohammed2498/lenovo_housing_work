<?php

use App\Http\Controllers\Admin\ApartmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BuildingController;


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
