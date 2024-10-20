<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relawan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'lokasi_observasi',
        'mekanisme_penanaman',
        'laporan',
        'foto',
    ];
}