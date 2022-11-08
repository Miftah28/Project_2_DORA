<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stokdarah extends Model
{
    use HasFactory;
    protected $table = 'stokdarahs';
    protected $fillable = [
        'goldar',
        'wb',
        'prc',
        't',
        'ffp',
        'tglupdatestok',
    ];
}
