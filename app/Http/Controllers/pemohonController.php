<?php

namespace App\Http\Controllers;

use App\Models\Pemohon;
use App\Models\pmkubencanaalam;
use App\Models\pmkukarp;
use App\Models\pmkuper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pemohonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetchDataBencana(){

        try {
            return Pemohon::find();
        } catch (\Exception $e) {
            return [];
        }
        
    }

    public function fetchDataKarp(){

        try {
            return Pemohon::find();
        } catch (\Exception $e) {
            return [];
        }
        
    }

    public function fetchDataPer(){

        try {
            return Pemohon::find(2);
        } catch (\Exception $e) {
            return [];
        }
        
    }

    
}
