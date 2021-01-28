<?php

namespace App\Http\Controllers;

use App\Models\pmtksijil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sijilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sijil = DB::table('sijil')->get();

        return view('bantuan.pmtk.sijil.sijil', ['sijil' => $sijil]);
        //return view('bantuan.pmii.bko.index', ['bko' => $bko] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bantuan.pmtk.sijil.pmtk-sijil');
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

        $sijil = array();

        $sijil['gelaran'] = $request->gelaran;
        $sijil['nama_penuh'] = $request->nama_penuh;
        $sijil['jantina'] = $request->jantina;
        $sijil['tarikh_lahir'] = $request->tarikh_lahir;
        $sijil['umur'] = $request->umur;
        $sijil['taraf_perkahwinan'] = $request->taraf_perkahwinan;
        $sijil['bangsa'] = $request->bangsa;
        $sijil['agama'] = $request->agama;
        $sijil['warganegara'] = $request->warganegara;
        $sijil['no_kp'] = $request->no_kp;
        $sijil['alamat'] = $request->alamat;
        $sijil['no_tel'] = $request->no_tel;
        $sijil['emel'] = $request->emel;
        $sijil['jenis_sklh'] = $request->jenis_sklh;
        $sijil['nama_sklh'] = $request->nama_sklh;
        $sijil['alamat_sklh'] = $request->alamat_sklh;
        $sijil['no_tel_sklh'] = $request->no_tel_sklh;
        $sijil['emel_sklh'] = $request->emel_sklh;
        $sijil['pemilik_akaun_bank'] = $request->pemilik_akaun_bank;
        $sijil['nama_bank'] = $request->nama_bank;
        $sijil['nama_pemilik'] = $request->nama_pemilik;
        $sijil['no_akaun_bank'] = $request->no_akaun_bank;

        $sijil = DB::table('sijil')->insert($sijil);
        return redirect()->route('bantuan.pmtk.sijil.sijil')
            ->with('success', 'Permohonan telah berjaya disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sijil  $sijil
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sijil  $sijil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sijil = DB::table('sijil')->where('id', $id)->first();
        return view('bantuan.pmtk.sijil.sijiledit', compact('sijil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sijil  $sijil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sijil = array();

        $sijil['id'] = $request->id;
        $sijil['gelaran'] = $request->gelaran;
        $sijil['nama_penuh'] = $request->nama_penuh;
        $sijil['jantina'] = $request->jantina;
        $sijil['tarikh_lahir'] = $request->tarikh_lahir;
        $sijil['umur'] = $request->umur;
        $sijil['taraf_perkahwinan'] = $request->taraf_perkahwinan;
        $sijil['bangsa'] = $request->bangsa;
        $sijil['agama'] = $request->agama;
        $sijil['warganegara'] = $request->warganegara;
        $sijil['no_kp'] = $request->no_kp;
        $sijil['alamat'] = $request->alamat;
        $sijil['no_tel'] = $request->no_tel;
        $sijil['emel'] = $request->emel;
        $sijil['jenis_sklh'] = $request->jenis_sklh;
        $sijil['nama_sklh'] = $request->nama_sklh;
        $sijil['alamat_sklh'] = $request->alamat_sklh;
        $sijil['no_tel_sklh'] = $request->no_tel_sklh;
        $sijil['emel_sklh'] = $request->emel_sklh;
        $sijil['pemilik_akaun_bank'] = $request->pemilik_akaun_bank;
        $sijil['nama_bank'] = $request->nama_bank;
        $sijil['nama_pemilik'] = $request->nama_pemilik;
        $sijil['no_akaun_bank'] = $request->no_akaun_bank;

        $sijil = DB::table('sijil')->where('id', $id)->update($sijil);
        return redirect()->route('bantuan.pmtk.sijil.sijil')
            ->with('success', 'Permohonan telah berjaya dikemaskini');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sijil  $sijil
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $sijil = DB::table('sijil')->where('id', $id)->first();
        $data = DB::table('sijil')->where('id', $id)->delete();
        return redirect()->route('bantuan.pmtk.sijil.sijil')
            ->with('success', 'Permohonan telah berjaya dipadam');
    }
}
