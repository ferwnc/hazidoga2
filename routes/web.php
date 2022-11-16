<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fooldal;
use App\Http\Controllers\autoeletut;
use App\Http\Controllers\tulaj;
use App\Http\Controllers\baleset;

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
Route::get('/', [fooldal::class,"getContent"]);
Route::get('/fooldal', [fooldal::class,"getContent"]);
Route::get('/autoadat', [autoeletut::class,"getContent"]);
Route::get('/tulaj', [tulaj::class,"getContent"]);
Route::get('/baleset', [baleset::class,"getContent"]);
