<?php

namespace App\Http\Controllers;

use App\Models\Stokdarah;

use Illuminate\Http\Request;

class StokdarahController extends Controller
{

    public function index()
    {
        return view('stokdarah.index');
    }

}
