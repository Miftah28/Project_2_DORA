<?php

use App\Http\Controllers\api\ApiKegiatanController;
use App\Http\Controllers\api\ApiStokdarahController;
use App\Http\Controllers\api\ApiUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//API ROUTES
Route::post('/auth/register', [ApiUserController::class, 'register']);
Route::post('/auth/login', [ApiUserController::class, 'login']);
Route::get('/stokdarah',[ApiStokdarahController::class, 'index']);
Route::get('api/kegiatan', [ApiKegiatanController::class, 'lihat']);
Route::get('/transaksi',[ApiTransaksiController::class, 'index']);
