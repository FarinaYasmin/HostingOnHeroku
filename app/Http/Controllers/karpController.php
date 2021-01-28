<?php

namespace App\Http\Controllers;

use App\Models\pmkukarp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class karpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karp = DB::table('karp')->get();

        return view('bantuan.pmku.karp.karp', ['karp' => $karp]);
        //return view('bantuan.pmii.bko.index', ['bko' => $bko] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bantuan.pmku.karp.pmku-karp');
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

        $karp = array();

        $karp['gelaran'] = $request->gelaran;
        $karp['nama_penuh'] = $request->nama_penuh;
        $karp['jantina'] = $request->jantina;
        $karp['tarikh_lahir'] = $request->tarikh_lahir;
        $karp['umur'] = $request->umur;
        $karp['taraf_perkahwinan'] = $request->taraf_perkahwinan;
        $karp['bangsa'] = $request->bangsa;
        $karp['agama'] = $request->agama;
        $karp['warganegara'] = $request->warganegara;
        $karp['no_kp'] = $request->no_kp;
        $karp['alamat'] = $request->alamat;
        $karp['no_tel'] = $request->no_tel;
        $karp['emel'] = $request->emel;
        $karp['pemilik_akaun_bank'] = $request->pemilik_akaun_bank;
        $karp['nama_bank'] = $request->nama_bank;
        $karp['nama_pemilik'] = $request->nama_pemilik;
        $karp['no_akaun_bank'] = $request->no_akaun_bank;

        $karp = DB::table('karp')->insert($karp);
        return redirect()->route('bantuan.pmku.karp.karp')
            ->with('success', 'Permohonan telah berjaya disimpan');
    }

    public function edit($id){
        $karp = DB::table('karp')->where('id', $id)->first();
        return view('bantuan.pmku.karp.karpedit', compact('karp'));
    }

    public function update(Request $request, $id)
    {
        $karp = array();

        $karp['gelaran'] = $request->gelaran;
        $karp['nama_penuh'] = $request->nama_penuh;
        $karp['jantina'] = $request->jantina;
        $karp['tarikh_lahir'] = $request->tarikh_lahir;
        $karp['umur'] = $request->umur;
        $karp['taraf_perkahwinan'] = $request->taraf_perkahwinan;
        $karp['bangsa'] = $request->bangsa;
        $karp['agama'] = $request->agama;
        $karp['warganegara'] = $request->warganegara;
        $karp['no_kp'] = $request->no_kp;
        $karp['alamat'] = $request->alamat;
        $karp['no_tel'] = $request->no_tel;
        $karp['emel'] = $request->emel;
        $karp['pemilik_akaun_bank'] = $request->pemilik_akaun_bank;
        $karp['nama_bank'] = $request->nama_bank;
        $karp['nama_pemilik'] = $request->nama_pemilik;
        $karp['no_akaun_bank'] = $request->no_akaun_bank;

        $karp = DB::table('karp')->where('id', $id)->update($karp);
        return redirect()->route('bantuan.pmku.karp.karp')
                         ->with('success', 'Permohonan telah berjaya dikemaskini');
    }

    public function delete($id){
        $karp = DB::table('karp')->where('id', $id)->first();
        $data = DB::table('karp')->where('id', $id)->delete();
        return redirect()->route('bantuan.pmku.karp.karp')
                         ->with('success', 'Permohonan telah berjaya dipadam');
    }
}
