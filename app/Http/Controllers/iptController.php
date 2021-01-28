<?php

namespace App\Http\Controllers;

use App\Models\pmtkipt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class iptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ipt = DB::table('ipt')->get();

        return view('bantuan.pmtk.ipt.ipt', ['ipt' => $ipt]);
        //return view('bantuan.pmii.bko.index', ['bko' => $bko] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bantuan.pmtk.ipt.pmtk-ipt');
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

        $ipt = array();

        $ipt['gelaran'] = $request->gelaran;
        $ipt['nama_penuh'] = $request->nama_penuh;
        $ipt['jantina'] = $request->jantina;
        $ipt['tarikh_lahir'] = $request->tarikh_lahir;
        $ipt['umur'] = $request->umur;
        $ipt['taraf_perkahwinan'] = $request->taraf_perkahwinan;
        $ipt['bangsa'] = $request->bangsa;
        $ipt['agama'] = $request->agama;
        $ipt['warganegara'] = $request->warganegara;
        $ipt['no_kp'] = $request->no_kp;
        $ipt['alamat'] = $request->alamat;
        $ipt['no_tel'] = $request->no_tel;
        $ipt['emel'] = $request->emel;
        $ipt['jenis_sklh'] = $request->jenis_sklh;
        $ipt['nama_sklh'] = $request->nama_sklh;
        $ipt['alamat_sklh'] = $request->alamat_sklh;
        $ipt['no_tel_sklh'] = $request->no_tel_sklh;
        $ipt['emel_sklh'] = $request->emel_sklh;
        $ipt['pemilik_akaun_bank'] = $request->pemilik_akaun_bank;
        $ipt['nama_bank'] = $request->nama_bank;
        $ipt['nama_pemilik'] = $request->nama_pemilik;
        $ipt['no_akaun_bank'] = $request->no_akaun_bank;

        $ipt = DB::table('ipt')->insert($ipt);
        return redirect()->route('bantuan.pmtk.ipt.ipt')
            ->with('success', 'Permohonan telah berjaya disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ipt  $ipt
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ipt  $ipt
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $ipt = DB::table('ipt')->where('id', $id)->first();
        return view('bantuan.pmtk.ipt.iptedit', compact('ipt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ipt  $ipt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ipt = array();

        $ipt['id'] = $request->id;
        $ipt['gelaran'] = $request->gelaran;
        $ipt['nama_penuh'] = $request->nama_penuh;
        $ipt['jantina'] = $request->jantina;
        $ipt['tarikh_lahir'] = $request->tarikh_lahir;
        $ipt['umur'] = $request->umur;
        $ipt['taraf_perkahwinan'] = $request->taraf_perkahwinan;
        $ipt['bangsa'] = $request->bangsa;
        $ipt['agama'] = $request->agama;
        $ipt['warganegara'] = $request->warganegara;
        $ipt['no_kp'] = $request->no_kp;
        $ipt['alamat'] = $request->alamat;
        $ipt['no_tel'] = $request->no_tel;
        $ipt['emel'] = $request->emel;
        $ipt['jenis_sklh'] = $request->jenis_sklh;
        $ipt['nama_sklh'] = $request->nama_sklh;
        $ipt['alamat_sklh'] = $request->alamat_sklh;
        $ipt['no_tel_sklh'] = $request->no_tel_sklh;
        $ipt['emel_sklh'] = $request->emel_sklh;
        $ipt['pemilik_akaun_bank'] = $request->pemilik_akaun_bank;
        $ipt['nama_bank'] = $request->nama_bank;
        $ipt['nama_pemilik'] = $request->nama_pemilik;
        $ipt['no_akaun_bank'] = $request->no_akaun_bank;

        $ipt = DB::table('ipt')->where('id', $id)->update($ipt);
        return redirect()->route('bantuan.pmtk.ipt.ipt')
                         ->with('success', 'Permohonan telah berjaya dikemaskini');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ipt  $ipt
     * @return \Illuminate\Http\Response
     */
    public function delete($id){
        $ipt = DB::table('ipt')->where('id', $id)->first();
        $data = DB::table('ipt')->where('id', $id)->delete();
        return redirect()->route('bantuan.pmtk.ipt.ipt')
                         ->with('success', 'Permohonan telah berjaya dipadam');
    }
}
