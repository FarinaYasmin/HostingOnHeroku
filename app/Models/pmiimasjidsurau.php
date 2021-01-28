<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pmiimasjidsurau extends Model
{
    protected $fillable = [
        'id',
        'gelaran',
        'nama_penuh',
        'jantina',
        'tarikh_lahir',
        'umur',
        'taraf_perkahwinan',
        'bangsa',
        'agama',
        'warganegara',
        'no_kp',
        'alamat',
        'no_tel',
        'emel',
        'jenis_organisasi',
        'nama_organisasi',
        'alamat_organisasi',
        'no_tel_organisasi',
        'emel_organisasi',
        'pemilik_akaun_bank',
        'nama_bank',
        'nama_pemilik',
        'no_akaun_bank'

    ];
}
