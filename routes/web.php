<?php

use App\Http\Controllers\Kod_gelaranController;
use App\Http\Controllers\KodAgensibilController;
use App\Http\Controllers\KodBangsaController;
use App\Http\Controllers\KodDunController;
use App\Http\Controllers\KodParlimenController;
use App\Http\Controllers\NegeriController;
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
Route::resource('negeri', NegeriController::class)->names('negeri');
Route::resource('kod_gelaran', Kod_gelaranController::class)->names('kod_gelaran');
Route::resource('kod_parlimen', KodParlimenController::class)->names('kod_parlimen');
Route::resource('kod_dun', KodDunController::class)->names('kod_dun');
Route::resource('kod_bangsa', KodBangsaController::class)->names('kod_bangsa');
Route::resource('kod_agensibil', KodAgensibilController::class)->names('kod_agensibil');
Route::get('/', function () {
    return view('home');
})->name('home');;
