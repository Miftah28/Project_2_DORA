<?php

<<<<<<< HEAD
use App\Http\Controllers\StokdarahController;
=======
>>>>>>> 1ea8709ab44537b76dbe72654ebbf3e157016e82
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
<<<<<<< HEAD

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::resource('stokdarah',StokdarahController::class);

=======
>>>>>>> 1ea8709ab44537b76dbe72654ebbf3e157016e82
