<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Alatberat;
use App\Models\Sewa;
use Illuminate\Support\Facades\Auth;


class SewaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $sewa = Sewa::where('nama_pen','LIKE','%'.$request->search.'%')->get();
        }else{
            $sewa = Sewa::all();
        }
        $nomor = 1;
        return view('page.sewa.index',compact('sewa','nomor','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alatberat = Alatberat::all();
        $q = DB::table('sewas')->select(DB::raw('MAX(RIGHT(kd_sewa,4)) as kode'));
        $kd="";
        if($q->count()>0)
        {
            foreach($q->get()as $k)
            {
                $tmp = ((int)$k->kode)+1;
                $kd = sprintf("%04s",$tmp);
            }
        }
        else{
            $kd = "0001";
        }
        return view('page.sewa.form',compact('alatberat','kd'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $alatberat = Alatberat::where('nm_alat','=',$request->alat)->get();

        $sewa = new Sewa;
            
        $sewa->kd_sewa = $request->kode;
        $sewa->nama_pen = $request->nama;
        $sewa->alamat = $request->alamat;
        $sewa->no_hp = $request->nohp;
        $sewa->alatberats_id = $alatberat[0]->id;
        $sewa->jumlah = $request->jumlah;
        $sewa->tanggal_sewa = $request->tgl_sewa;
        $sewa->tanggal_kembali = $request->tgl_kem;
        // $sewa->harga = $request->harga;
        $sewa->biaya_ope = $request->biaya_ope;
        $sewa->pajak = $request->pajak;
        $sewa->total_biaya = $request->total;
        $sewa->save();
        return redirect('/sewa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sewa = Sewa::find($id);
        $alatberat = Alatberat::all();
        return view('page.sewa.edit',compact('sewa','alatberat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sewa = Alatberat::find($id);
        
        $sewa->kd_sewa = $request->kode;
        $sewa->nama_pen = $request->nama;
        $sewa->alamat = $request->alamat;
        $sewa->no_hp = $request->nohp;
        $sewa->alatberats_id = $request->alatberat;
        $sewa->tanggal_sewa = $request->tgl_sewa;
        $sewa->tanggal_kembali = $request->tgl_kem;
        $sewa->harga = $request->harga;
        $sewa->biaya_ope = $request->biaya_ope;
        $sewa->pajak = $request->pajak;
        $sewa->total_biaya = $request->total;
        $sewa->save();
        return redirect('/sewa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sewa = Sewa::find($id);
        $sewa->delete();
        return redirect('/sewa');
    }

    public function userstore(Request $request)
    {
        $alatberat = Alatberat::where('nm_alat','=',$request->alat)->get();

        $sewa = new Sewa;
        
        $sewa->users_id = Auth::user()->id;
        $sewa->kd_sewa = $request->kode;
        $sewa->nama_pen = $request->nama;
        $sewa->alamat = $request->alamat;
        $sewa->no_hp = $request->nohp;
        $sewa->alatberats_id = $alatberat[0]->id;
        $sewa->jumlah = $request->jumlah;
        $sewa->tanggal_sewa = $request->tgl_sewa;
        $sewa->tanggal_kembali = $request->tgl_kem;
        // $sewa->harga = $request->harga;
        $sewa->biaya_ope = $request->biaya_ope;
        $sewa->pajak = $request->pajak;
        $sewa->total_biaya = $request->total;
        $sewa->save();
        // $sewa->id;
        // dd($sewa);
        return redirect('/stock/'.$sewa->id);
    }

    public function tampilan(){

        $alatberat = Alatberat::all();

        return view('page.sewa-user.index',compact('alatberat'));

    }
    public function tambah(){

        $alatberat = Alatberat::all();

        $q = DB::table('sewas')->select(DB::raw('MAX(RIGHT(kd_sewa,4)) as kode'));
        $kd="";
        if($q->count()>0)
        {
            foreach($q->get()as $k)
            {
                $tmp = ((int)$k->kode)+1;
                $kd = sprintf("%04s",$tmp);
            }
        }
        else{
            $kd = "0001";
        }
        return view('page.sewa-user.index',compact('alatberat','kd'));

    }

    public function stock(Request $request,$id){
        $sewa = Sewa::find($id);
        $sewa1 = $sewa->alatberats_id;
        // dd($sewa1);
        $alatberat = Alatberat::where('id', $sewa1)->first();
        $alatberat->jumlah = $alatberat->jumlah-1;
        $alatberat->save();
        return redirect('/bayar');
    }

}
