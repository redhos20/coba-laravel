<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AngkaController;

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

Route::get('/tabel',function(){
    return view('tabel');
});

Route::get('/angka',[AngkaController::class,'Angka']);