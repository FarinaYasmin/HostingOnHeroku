<?php

namespace App\Http\Controllers;

use App\Models\pmkuper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class perController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $per = DB::table('per')->get();

        return view('bantuan.pmku.per.per', ['per' => $per]);
        //return view('bantuan.pmii.bko.index', ['bko' => $bko] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bantuan.pmku.per.pmku-per');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validateData = $request->validate([
                'gelaran' => 'required',
                'nama_penuh' => 'required',
                'jantina' => 'required',
                'tarikh_lahir' => 'required',
                'umur' => 'required',
                'taraf_perkahwinan' => 'required',
                'bangsa' => 'required',
                'agama' => 'required',
                'warganegara' => 'required',
                'no_kp' => 'required',
                'alamat' => 'required',
                'no_tel' => 'required',
                'emel' => 'required',
                'pemilik_akaun_bank' => 'required',
                'nama_bank' => 'required',
                'nama_pemilik' => 'required',
                'no_akaun_bank' => 'required',
        ]);

        $per = array();

        $per['gelaran'] = $request->gelaran;
        $per['nama_penuh'] = $request->nama_penuh;
        $per['jantina'] = $request->jantina;
        $per['tarikh_lahir'] = $request->tarikh_lahir;
        $per['umur'] = $request->umur;
        $per['taraf_perkahwinan'] = $request->taraf_perkahwinan;
        $per['bangsa'] = $request->bangsa;
        $per['agama'] = $request->agama;
        $per['warganegara'] = $request->warganegara;
        $per['no_kp'] = $request->no_kp;
        $per['alamat'] = $request->alamat;
        $per['no_tel'] = $request->no_tel;
        $per['emel'] = $request->emel;
        $per['pemilik_akaun_bank'] = $request->pemilik_akaun_bank;
        $per['nama_bank'] = $request->nama_bank;
        $per['nama_pemilik'] = $request->nama_pemilik;
        $per['no_akaun_bank'] = $request->no_akaun_bank;

        $per = DB::table('per')->insert($per);
        return redirect()->route('bantuan.pmku.per.per')
            ->with('success', 'Permohonan telah berjaya disimpan');
    }

    public function edit($id){
        $per = DB::table('per')->where('id', $id)->first();
        return view('bantuan.pmku.per.peredit', compact('per'));
    }

    public function update(Request $request, $id)
    {
        $per = array();

        $per['gelaran'] = $request->gelaran;
        $per['nama_penuh'] = $request->nama_penuh;
        $per['jantina'] = $request->jantina;
        $per['tarikh_lahir'] = $request->tarikh_lahir;
        $per['umur'] = $request->umur;
        $per['taraf_perkahwinan'] = $request->taraf_perkahwinan;
        $per['bangsa'] = $request->bangsa;
        $per['agama'] = $request->agama;
        $per['warganegara'] = $request->warganegara;
        $per['no_kp'] = $request->no_kp;
        $per['alamat'] = $request->alamat;
        $per['no_tel'] = $request->no_tel;
        $per['emel'] = $request->emel;
        $per['pemilik_akaun_bank'] = $request->pemilik_akaun_bank;
        $per['nama_bank'] = $request->nama_bank;
        $per['nama_pemilik'] = $request->nama_pemilik;
        $per['no_akaun_bank'] = $request->no_akaun_bank;

        $per = DB::table('per')->where('id', $id)->update($per);
        return redirect()->route('bantuan.pmku.per.per')
                         ->with('success', 'Permohonan telah berjaya dikemaskini');
    }

    public function delete($id){
        $per = DB::table('per')->where('id', $id)->first();
        $data = DB::table('per')->where('id', $id)->delete();
        return redirect()->route('bantuan.pmku.per.per')
                         ->with('success', 'Permohonan telah berjaya dipadam');
    }
}
