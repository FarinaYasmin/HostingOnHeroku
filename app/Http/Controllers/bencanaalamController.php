<?php

namespace App\Http\Controllers;

use App\Models\pmkubencanaalam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bencanaalamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bencanaalam = DB::table('bencanaalam')->get();

        return view('bantuan.pmku.bencanaalam.bencanaalam', ['bencanaalam' => $bencanaalam]);
        //return view('bantuan.pmii.bko.index', ['bko' => $bko] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bantuan.pmku.bencanaalam.pmku-bencanaalam');
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

        $bencanaalam = array();

        $bencanaalam['gelaran'] = $request->gelaran;
        $bencanaalam['nama_penuh'] = $request->nama_penuh;
        $bencanaalam['jantina'] = $request->jantina;
        $bencanaalam['tarikh_lahir'] = $request->tarikh_lahir;
        $bencanaalam['umur'] = $request->umur;
        $bencanaalam['taraf_perkahwinan'] = $request->taraf_perkahwinan;
        $bencanaalam['bangsa'] = $request->bangsa;
        $bencanaalam['agama'] = $request->agama;
        $bencanaalam['warganegara'] = $request->warganegara;
        $bencanaalam['no_kp'] = $request->no_kp;
        $bencanaalam['alamat'] = $request->alamat;
        $bencanaalam['no_tel'] = $request->no_tel;
        $bencanaalam['emel'] = $request->emel;
        $bencanaalam['pemilik_akaun_bank'] = $request->pemilik_akaun_bank;
        $bencanaalam['nama_bank'] = $request->nama_bank;
        $bencanaalam['nama_pemilik'] = $request->nama_pemilik;
        $bencanaalam['no_akaun_bank'] = $request->no_akaun_bank;

        $bencanaalam = DB::table('bencanaalam')->insert($bencanaalam);
        return redirect()->route('bantuan.pmku.bencanaalam.bencanaalam')
            ->with('success', 'Permohonan telah berjaya disimpan');
    }

    public function edit($id){
        $bencanaalam = DB::table('bencanaalam')->where('id', $id)->first();
        return view('bantuan.pmku.bencanaalam.bencanaalamedit', compact('bencanaalam'));
    }

    public function update(Request $request, $id)
    {
        $bencanaalam = array();

        $bencanaalam['gelaran'] = $request->gelaran;
        $bencanaalam['nama_penuh'] = $request->nama_penuh;
        $bencanaalam['jantina'] = $request->jantina;
        $bencanaalam['tarikh_lahir'] = $request->tarikh_lahir;
        $bencanaalam['umur'] = $request->umur;
        $bencanaalam['taraf_perkahwinan'] = $request->taraf_perkahwinan;
        $bencanaalam['bangsa'] = $request->bangsa;
        $bencanaalam['agama'] = $request->agama;
        $bencanaalam['warganegara'] = $request->warganegara;
        $bencanaalam['no_kp'] = $request->no_kp;
        $bencanaalam['alamat'] = $request->alamat;
        $bencanaalam['no_tel'] = $request->no_tel;
        $bencanaalam['emel'] = $request->emel;
        $bencanaalam['pemilik_akaun_bank'] = $request->pemilik_akaun_bank;
        $bencanaalam['nama_bank'] = $request->nama_bank;
        $bencanaalam['nama_pemilik'] = $request->nama_pemilik;
        $bencanaalam['no_akaun_bank'] = $request->no_akaun_bank;

        $bencanaalam = DB::table('bencanaalam')->where('id', $id)->update($bencanaalam);
        return redirect()->route('bantuan.pmku.bencanaalam.bencanaalam')
                         ->with('success', 'Permohonan telah berjaya dikemaskini');
    }

    public function delete($id){
        $bencanaalam = DB::table('bencanaalam')->where('id', $id)->first();
        $data = DB::table('bencanaalam')->where('id', $id)->delete();
        return redirect()->route('bantuan.pmku.bencanaalam.bencanaalam')
                         ->with('success', 'Permohonan telah berjaya dipadam');
    }
}
