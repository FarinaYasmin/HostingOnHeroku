<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\pmkubencanaalam;
use App\Models\pmkukarp;
use App\Models\pmkuper;

class Pemohon extends Model
{

    protected $table = "pemohon";

    public function bencanaalam()
    {
        return $this->belongsTo('App\Models\pmkubencanaalam');
    }

    public function karp()
    {
        return $this->hasOne('App\Models\pmkukarp');
    }

    public function per()
    {
        return $this->hasOne('App\Models\pmkuper');
    }


}
