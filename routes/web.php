<?php

use App\Http\Controllers\MainVouture;
use App\Http\Controllers\SingleVouture;
use App\Http\Controllers\VoutureController;
use App\Livewire\Allproduct;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;

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

Route::get('/', function () {
    return view('welcome');
});


Route::view('/counter', 'app');



Route::resource('/vou', VoutureController::class);


Route::resource('/single_vouture', SingleVouture::class);
