<?php

namespace App\Http\Controllers;

use App\Models\pmtksrm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class srmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $srm = DB::table('srm')->get();

        return view('bantuan.pmtk.srm.srm', ['srm' => $srm]);
        //return view('bantuan.pmii.bko.index', ['bko' => $bko] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bantuan.pmtk.srm.pmtk-srm');
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
            'jenis_sklh' => 'required',
            'nama_sklh' => 'required',
            'alamat_sklh' => 'required',
            'no_tel_sklh' => 'required',
            'emel_sklh' => 'required',
            'pemilik_akaun_bank' => 'required',
            'nama_bank' => 'required',
            'nama_pemilik' => 'required',
            'no_akaun_bank' => 'required',
        ]);

        $srm = array();

        $srm['gelaran'] = $request->gelaran;
        $srm['nama_penuh'] = $request->nama_penuh;
        $srm['jantina'] = $request->jantina;
        $srm['tarikh_lahir'] = $request->tarikh_lahir;
        $srm['umur'] = $request->umur;
        $srm['taraf_perkahwinan'] = $request->taraf_perkahwinan;
        $srm['bangsa'] = $request->bangsa;
        $srm['agama'] = $request->agama;
        $srm['warganegara'] = $request->warganegara;
        $srm['no_kp'] = $request->no_kp;
        $srm['alamat'] = $request->alamat;
        $srm['no_tel'] = $request->no_tel;
        $srm['emel'] = $request->emel;
        $srm['jenis_sklh'] = $request->jenis_sklh;
        $srm['nama_sklh'] = $request->nama_sklh;
        $srm['alamat_sklh'] = $request->alamat_sklh;
        $srm['no_tel_sklh'] = $request->no_tel_sklh;
        $srm['emel_sklh'] = $request->emel_sklh;
        $srm['pemilik_akaun_bank'] = $request->pemilik_akaun_bank;
        $srm['nama_bank'] = $request->nama_bank;
        $srm['nama_pemilik'] = $request->nama_pemilik;
        $srm['no_akaun_bank'] = $request->no_akaun_bank;

        $srm = DB::table('srm')->insert($srm);
        return redirect()->route('bantuan.pmtk.srm.srm')
            ->with('success', 'Permohonan telah berjaya disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sijil  $srm
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sijil  $srm
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $srm = DB::table('srm')->where('id', $id)->first();
        return view('bantuan.pmtk.srm.srmedit', compact('srm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sijil  $srm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $srm = array();

        $srm['id'] = $request->id;
        $srm['gelaran'] = $request->gelaran;
        $srm['nama_penuh'] = $request->nama_penuh;
        $srm['jantina'] = $request->jantina;
        $srm['tarikh_lahir'] = $request->tarikh_lahir;
        $srm['umur'] = $request->umur;
        $srm['taraf_perkahwinan'] = $request->taraf_perkahwinan;
        $srm['bangsa'] = $request->bangsa;
        $srm['agama'] = $request->agama;
        $srm['warganegara'] = $request->warganegara;
        $srm['no_kp'] = $request->no_kp;
        $srm['alamat'] = $request->alamat;
        $srm['no_tel'] = $request->no_tel;
        $srm['emel'] = $request->emel;
        $srm['jenis_sklh'] = $request->jenis_sklh;
        $srm['nama_sklh'] = $request->nama_sklh;
        $srm['alamat_sklh'] = $request->alamat_sklh;
        $srm['no_tel_sklh'] = $request->no_tel_sklh;
        $srm['emel_sklh'] = $request->emel_sklh;
        $srm['pemilik_akaun_bank'] = $request->pemilik_akaun_bank;
        $srm['nama_bank'] = $request->nama_bank;
        $srm['nama_pemilik'] = $request->nama_pemilik;
        $srm['no_akaun_bank'] = $request->no_akaun_bank;

        $srm = DB::table('srm')->where('id', $id)->update($srm);
        return redirect()->route('bantuan.pmtk.srm.srm')
            ->with('success', 'Permohonan telah berjaya dikemaskini');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sijil  $srm
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $srm = DB::table('srm')->where('id', $id)->first();
        $data = DB::table('srm')->where('id', $id)->delete();
        return redirect()->route('bantuan.pmtk.srm.srm')
            ->with('success', 'Permohonan telah berjaya dipadam');
    }
}
