<?php

use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\StokdarahController;
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
    return view('login.index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('stokdarah',[ StokdarahController::class, 'index']);

Route::get('masyarakat',[ MasyarakatController::class, 'index']);
