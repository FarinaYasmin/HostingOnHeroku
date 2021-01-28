<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pmiixtvtagama;
use Illuminate\Support\Facades\DB;

class xtvtagamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $xtvtagama = DB::table('xtvtagama')->get();

        return view('bantuan.pmii.xtvtagama.xtvtagama', ['xtvtagama' => $xtvtagama]);
        //return view('bantuan.pmii.bko.index', ['bko' => $bko] );
    }

    public function create()
    {
        return view('bantuan.pmii.xtvtagama.pmii-xtvtagama');
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

        $xtvtagama = array();

        $xtvtagama['gelaran'] = $request->gelaran;
        $xtvtagama['nama_penuh'] = $request->nama_penuh;
        $xtvtagama['jantina'] = $request->jantina;
        $xtvtagama['tarikh_lahir'] = $request->tarikh_lahir;
        $xtvtagama['umur'] = $request->umur;
        $xtvtagama['taraf_perkahwinan'] = $request->taraf_perkahwinan;
        $xtvtagama['bangsa'] = $request->bangsa;
        $xtvtagama['agama'] = $request->agama;
        $xtvtagama['warganegara'] = $request->warganegara;
        $xtvtagama['no_kp'] = $request->no_kp;
        $xtvtagama['alamat'] = $request->alamat;
        $xtvtagama['no_tel'] = $request->no_tel;
        $xtvtagama['emel'] = $request->emel;
        $xtvtagama['jenis_organisasi'] = $request->jenis_organisasi;
        $xtvtagama['nama_organisasi'] = $request->nama_organisasi;
        $xtvtagama['alamat_organisasi'] = $request->alamat_organisasi;
        $xtvtagama['no_tel_organisasi'] = $request->no_tel_organisasi;
        $xtvtagama['emel_organisasi'] = $request->emel_organisasi;
        $xtvtagama['pemilik_akaun_bank'] = $request->pemilik_akaun_bank;
        $xtvtagama['nama_bank'] = $request->nama_bank;
        $xtvtagama['nama_pemilik'] = $request->nama_pemilik;
        $xtvtagama['no_akaun_bank'] = $request->no_akaun_bank;

        $xtvtagama = DB::table('xtvtagama')->insert($xtvtagama);
        return redirect()->route('bantuan.pmii.xtvtagama.xtvtagama')
            ->with('success', 'Permohonan telah berjaya disimpan');
    }

    public function edit($id){
        $xtvtagama = DB::table('xtvtagama')->where('id', $id)->first();
        return view('bantuan.pmii.xtvtagama.xtvtagamaedit', compact('xtvtagama'));
    }

    public function update(Request $request, $id)
    {
        $xtvtagama = array();

        $xtvtagama['gelaran'] = $request->gelaran;
        $xtvtagama['nama_penuh'] = $request->nama_penuh;
        $xtvtagama['jantina'] = $request->jantina;
        $xtvtagama['tarikh_lahir'] = $request->tarikh_lahir;
        $xtvtagama['umur'] = $request->umur;
        $xtvtagama['taraf_perkahwinan'] = $request->taraf_perkahwinan;
        $xtvtagama['bangsa'] = $request->bangsa;
        $xtvtagama['agama'] = $request->agama;
        $xtvtagama['warganegara'] = $request->warganegara;
        $xtvtagama['no_kp'] = $request->no_kp;
        $xtvtagama['alamat'] = $request->alamat;
        $xtvtagama['no_tel'] = $request->no_tel;
        $xtvtagama['emel'] = $request->emel;
        $xtvtagama['jenis_organisasi'] = $request->jenis_organisasi;
        $xtvtagama['nama_organisasi'] = $request->nama_organisasi;
        $xtvtagama['alamat_organisasi'] = $request->alamat_organisasi;
        $xtvtagama['no_tel_organisasi'] = $request->no_tel_organisasi;
        $xtvtagama['emel_organisasi'] = $request->emel_organisasi;
        $xtvtagama['pemilik_akaun_bank'] = $request->pemilik_akaun_bank;
        $xtvtagama['nama_bank'] = $request->nama_bank;
        $xtvtagama['nama_pemilik'] = $request->nama_pemilik;
        $xtvtagama['no_akaun_bank'] = $request->no_akaun_bank;

        $xtvtagama = DB::table('xtvtagama')->where('id', $id)->update($xtvtagama);
        return redirect()->route('bantuan.pmii.xtvtagama.xtvtagama')
                         ->with('success', 'Permohonan telah berjaya dikemaskini');
    }

    public function delete($id){
        $xtvtagama = DB::table('xtvtagama')->where('id', $id)->first();
        $data = DB::table('xtvtagama')->where('id', $id)->delete();
        return redirect()->route('bantuan.pmii.xtvtagama.xtvtagama')
                         ->with('success', 'Permohonan telah berjaya dipadam');
    }
}
