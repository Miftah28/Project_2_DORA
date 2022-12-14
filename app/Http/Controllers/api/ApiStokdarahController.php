<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Stokdarah;
use Illuminate\Http\Request;

class ApiStokdarahController extends Controller
{
    public function index()
    {
        $stokdarah = Stokdarah::latest()->get();
        return response([
            'success' => true,
            'message' => 'List Semua stok darah',
            'data' => $stokdarah
        ], 200);
    }
}
