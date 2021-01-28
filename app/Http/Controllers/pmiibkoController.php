<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pmiibko;
use Illuminate\Support\Facades\DB;

class pmiibkoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pmiibko = DB::table('pmiibko')->get();

        return view('bantuan.pmii.bko.bko', ['pmiibko' => $pmiibko]);
        //return view('bantuan.pmii.bko.index', ['bko' => $bko] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bantuan.pmii.bko.pmii-bko');
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
                'jenis_organisasi' => 'required',
                'nama_organisasi' => 'required',
                'alamat_organisasi' => 'required',
                'no_tel_organisasi' => 'required',
                'emel_organisasi' => 'required',
                'pemilik_akaun_bank' => 'required',
                'nama_bank' => 'required',
                'nama_pemilik' => 'required',
                'no_akaun_bank' => 'required',
        ]);

        $pmiibko = array();

        $pmiibko['gelaran'] = $request->gelaran;
        $pmiibko['nama_penuh'] = $request->nama_penuh;
        $pmiibko['jantina'] = $request->jantina;
        $pmiibko['tarikh_lahir'] = $request->tarikh_lahir;
        $pmiibko['umur'] = $request->umur;
        $pmiibko['taraf_perkahwinan'] = $request->taraf_perkahwinan;
        $pmiibko['bangsa'] = $request->bangsa;
        $pmiibko['agama'] = $request->agama;
        $pmiibko['warganegara'] = $request->warganegara;
        $pmiibko['no_kp'] = $request->no_kp;
        $pmiibko['alamat'] = $request->alamat;
        $pmiibko['no_tel'] = $request->no_tel;
        $pmiibko['emel'] = $request->emel;
        $pmiibko['jenis_organisasi'] = $request->jenisorganisasi;
        $pmiibko['nama_organisasi'] = $request->nama_organisasi;
        $pmiibko['alamat_organisasi'] = $request->alamat_organisas;
        $pmiibko['no_tel_organisasi'] = $request->no_tel_organisasi;
        $pmiibko['emel_organisasi'] = $request->emel_organisasi;
        $pmiibko['pemilik_akaun_bank'] = $request->pemilik_akaun_bank;
        $pmiibko['nama_bank'] = $request->nama_bank;
        $pmiibko['nama_pemilik'] = $request->nama_pemilik;
        $pmiibko['no_akaun_bank'] = $request->no_akaun_bank;

        $pmiibko = DB::table('pmiibko')->insert($pmiibko);
        return redirect()->route('bantuan.pmii.bko.bko')
            ->with('success', 'Permohonan telah berjaya disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pmiibko  $pmiibko
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pmiibko  $pmiibko
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $pmiibko = DB::table('pmiibko')->where('id', $id)->first();
        return view('bantuan.pmii.bko.bkoedit', compact('pmiibko'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pmiibko  $pmiibko
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pmiibko = array();

        $pmiibko['id'] = $request->id;
        $pmiibko['gelaran'] = $request->gelaran;
        $pmiibko['nama_penuh'] = $request->nama_penuh;
        $pmiibko['jantina'] = $request->jantina;
        $pmiibko['tarikh_lahir'] = $request->tarikh_lahir;
        $pmiibko['umur'] = $request->umur;
        $pmiibko['taraf_perkahwinan'] = $request->taraf_perkahwinan;
        $pmiibko['bangsa'] = $request->bangsa;
        $pmiibko['agama'] = $request->agama;
        $pmiibko['warganegara'] = $request->warganegara;
        $pmiibko['no_kp'] = $request->no_kp;
        $pmiibko['alamat'] = $request->alamat;
        $pmiibko['no_tel'] = $request->no_tel;
        $pmiibko['emel'] = $request->emel;
        $pmiibko['jenis_organisasi'] = $request->jenisorganisasi;
        $pmiibko['nama_organisasi'] = $request->nama_organisasi;
        $pmiibko['alamat_organisasi'] = $request->alamat_organisas;
        $pmiibko['no_tel_organisasi'] = $request->no_tel_organisasi;
        $pmiibko['emel_organisasi'] = $request->emel_organisasi;
        $pmiibko['pemilik_akaun_bank'] = $request->pemilik_akaun_bank;
        $pmiibko['nama_bank'] = $request->nama_bank;
        $pmiibko['nama_pemilik'] = $request->nama_pemilik;
        $pmiibko['no_akaun_bank'] = $request->no_akaun_bank;

        $pmiibko = DB::table('pmiibko')->where('id', $id)->update($pmiibko);
        return redirect()->route('bantuan.pmii.bko.bko')
                         ->with('success', 'Permohonan telah berjaya dikemaskini');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pmiibko  $pmiibko
     * @return \Illuminate\Http\Response
     */
    public function delete($id){
        $pmiibko = DB::table('pmiibko')->where('id', $id)->first();
        $data = DB::table('pmiibko')->where('id', $id)->delete();
        return redirect()->route('bantuan.pmii.bko.bko')
                         ->with('success', 'Permohonan telah berjaya dipadam');
    }
}
