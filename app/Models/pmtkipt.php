<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pmtkipt extends Model
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
        'jenis_sklh',
        'nama_sklh',
        'alamat_sklh',
        'no_tel_sklh',
        'emel_sklh',
        'pemilik_akaun_bank',
        'nama_bank',
        'nama_pemilik',
        'no_akaun_bank'

    ];
}
