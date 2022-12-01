<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatadonorController extends Controller
{
    public function index()
    {
        return view('donor darah.datadonor');
    }
}
