<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datadonor extends Model
{
    use HasFactory;
    protected $table = 'datadonors';
    protected $fillable = [
        'nama',
        'umur',
        'goldar',
        'tensi',
        'bb',
        'kt',
    ];
}
