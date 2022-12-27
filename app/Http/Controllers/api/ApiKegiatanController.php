<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Datadonor;
use Illuminate\Http\Request;

class ApiKegiatanController extends Controller
{
    public function index()
    {
        $datadonor = Datadonor::all();
        return response()->json([
            'success' => true,
            'message' => 'List Semua stok darah',
            'data' => $datadonor
        ], 200);
    }
}
