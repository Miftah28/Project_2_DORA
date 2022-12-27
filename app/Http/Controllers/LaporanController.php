<?php

namespace App\Http\Controllers;

use App\Models\Datadonor;
use App\Models\Stokdarah;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use PDF;

class LaporanController extends Controller
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function index()
    {
        $data = Datadonor::all();
        $stokdarahs = Stokdarah::all();
        $transaksis = Transaksi::orderBy('id', 'ASC')->paginate(5);
        return view('laporan.index',['data'=>$data,'stokdarahs'=>$stokdarahs,'transaksis'=>$transaksis]);
        // return view('laporan.index',['data'=>$data,'stokdarahs'=>$stokdarahs]);
    }

    public function pdfdonordarah()
    {
        $data = Datadonor::all();
        $pdf = PDF::loadView('laporan.pdfdatadonor',['data'=>$data,]);
        return $pdf->download('datadonor.pdf');
    }

    public function pdfstokdarah()
    {
        $data = Stokdarah::all();
        $pdf = PDF::loadView('laporan.pdfstokdarah',['stokdarahs'=>$data,]);
        return $pdf->download('Stokdarah.pdf');
    }

    public function pdftransaksi()
    {
        $data = Transaksi::all();
        $pdf = PDF::loadView('laporan.pdftransaksi',['transaksis'=>$data,]);
        return $pdf->download('Transaksi.pdf');
    }
}
