<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pmiimasjidsurau;
use Illuminate\Support\Facades\DB;

class masjidsurauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masjidsurau = DB::table('masjidsurau')->get();

        return view('bantuan.pmii.masjidsurau.masjidsurau', ['masjidsurau' => $masjidsurau]);
        //return view('bantuan.pmii.bko.index', ['bko' => $bko] );
    }

    public function create()
    {
        return view('bantuan.pmii.masjidsurau.pmii-masjidsurau');
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

        $masjidsurau = array();

        $masjidsurau['gelaran'] = $request->gelaran;
        $masjidsurau['nama_penuh'] = $request->nama_penuh;
        $masjidsurau['jantina'] = $request->jantina;
        $masjidsurau['tarikh_lahir'] = $request->tarikh_lahir;
        $masjidsurau['umur'] = $request->umur;
        $masjidsurau['taraf_perkahwinan'] = $request->taraf_perkahwinan;
        $masjidsurau['bangsa'] = $request->bangsa;
        $masjidsurau['agama'] = $request->agama;
        $masjidsurau['warganegara'] = $request->warganegara;
        $masjidsurau['no_kp'] = $request->no_kp;
        $masjidsurau['alamat'] = $request->alamat;
        $masjidsurau['no_tel'] = $request->no_tel;
        $masjidsurau['emel'] = $request->emel;
        $masjidsurau['jenis_organisasi'] = $request->jenis_organisasi;
        $masjidsurau['nama_organisasi'] = $request->nama_organisasi;
        $masjidsurau['alamat_organisasi'] = $request->alamat_organisasi;
        $masjidsurau['no_tel_organisasi'] = $request->no_tel_organisasi;
        $masjidsurau['emel_organisasi'] = $request->emel_organisasi;
        $masjidsurau['pemilik_akaun_bank'] = $request->pemilik_akaun_bank;
        $masjidsurau['nama_bank'] = $request->nama_bank;
        $masjidsurau['nama_pemilik'] = $request->nama_pemilik;
        $masjidsurau['no_akaun_bank'] = $request->no_akaun_bank;

        $masjidsurau = DB::table('masjidsurau')->insert($masjidsurau);
        return redirect()->route('bantuan.pmii.masjidsurau.masjidsurau')
            ->with('success', 'Permohonan telah berjaya disimpan');
    }

    public function edit($id){
        $masjidsurau = DB::table('masjidsurau')->where('id', $id)->first();
        return view('bantuan.pmii.masjidsurau.masjidsurauedit', compact('masjidsurau'));
    }

    public function update(Request $request, $id)
    {
        $masjidsurau = array();

        $masjidsurau['gelaran'] = $request->gelaran;
        $masjidsurau['nama_penuh'] = $request->nama_penuh;
        $masjidsurau['jantina'] = $request->jantina;
        $masjidsurau['tarikh_lahir'] = $request->tarikh_lahir;
        $masjidsurau['umur'] = $request->umur;
        $masjidsurau['taraf_perkahwinan'] = $request->taraf_perkahwinan;
        $masjidsurau['bangsa'] = $request->bangsa;
        $masjidsurau['agama'] = $request->agama;
        $masjidsurau['warganegara'] = $request->warganegara;
        $masjidsurau['no_kp'] = $request->no_kp;
        $masjidsurau['alamat'] = $request->alamat;
        $masjidsurau['no_tel'] = $request->no_tel;
        $masjidsurau['emel'] = $request->emel;
        $masjidsurau['jenis_organisasi'] = $request->jenis_organisasi;
        $masjidsurau['nama_organisasi'] = $request->nama_organisasi;
        $masjidsurau['alamat_organisasi'] = $request->alamat_organisasi;
        $masjidsurau['no_tel_organisasi'] = $request->no_tel_organisasi;
        $masjidsurau['emel_organisasi'] = $request->emel_organisasi;
        $masjidsurau['pemilik_akaun_bank'] = $request->pemilik_akaun_bank;
        $masjidsurau['nama_bank'] = $request->nama_bank;
        $masjidsurau['nama_pemilik'] = $request->nama_pemilik;
        $masjidsurau['no_akaun_bank'] = $request->no_akaun_bank;

        $masjidsurau = DB::table('masjidsurau')->where('id', $id)->update($masjidsurau);
        return redirect()->route('bantuan.pmii.masjidsurau.masjidsurau')
                         ->with('success', 'Permohonan telah berjaya dikemaskini');
    }

    public function delete($id){
        $masjidsurau = DB::table('masjidsurau')->where('id', $id)->first();
        $data = DB::table('masjidsurau')->where('id', $id)->delete();
        return redirect()->route('bantuan.pmii.masjidsurau.masjidsurau')
                         ->with('success', 'Permohonan telah berjaya dipadam');
    }
}
