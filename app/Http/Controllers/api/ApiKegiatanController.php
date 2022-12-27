<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\kegiatan;
use Illuminate\Http\Request;

class ApiKegiatanController extends Controller
{
    public function lihat()
    {
        // $kegiatan = kegiatan::all();
        // return response()->json([
        //     'success' => true,
        //     'message' => 'List Semua Kegiatan',
        //     'data' => $kegiatan
        // ]);
        
        return "selamat";
    }
}
