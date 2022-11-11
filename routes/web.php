<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\StokdarahController;
use App\Http\Controllers\MasyarakatController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// });

// Route::get('stokdarah',[ StokdarahController::class, 'index']);
// Route::get('kegiatan',[ KegiatanController::class, 'index']);

Route::get('masyarakat',[ MasyarakatController::class, 'index']);

Auth::routes();

Route::middleware(['auth', 'user-role:admin'])->group(function(){
    Route::get("/dashboard",[DashboardController::class,'adminHome'])->name('home.admin');
});

Route::middleware(['auth', 'user-role:masyarakat'])->group(function(){
    Route::get("/home",[HomeController::class,'masyarakatHome'])->name('home');
});
