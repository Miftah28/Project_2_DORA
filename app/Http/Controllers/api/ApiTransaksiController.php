<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Stokdarah;
use Illuminate\Http\Request;

class ApiTransaksiController extends Controller
{
    public function index()
    {
        $stokdarah = Stokdarah::all();
        return response()->json([
            'success' => true,
            'message' => 'List Semua stok darah',
            'data' => $stokdarah
        ], 200);
    }
}
