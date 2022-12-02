<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksis';
    protected $fillable = [
        'nama',
        'nik',
        'notelp',
        'tanggal',
        'sk',
        'jumlah',
        'keterangan',
        'status'
    ];
}
