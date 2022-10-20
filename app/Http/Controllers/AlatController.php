<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alatberat;
use App\Models\Merk;
use App\Models\Sewa;

class AlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $alatberat = Alatberat::where('nm_alat','LIKE','%'.$request->search.'%')
                                    ->orWhere('tahun','LIKE','%'.$request->search.'%')
            ->get();
        }else{
            $alatberat = Alatberat::all();
        }
        $jumlah_excavator = Sewa::where('alatberats_id',1)
        ->count();

        $nomor = 1;
        return view('page.alatberat.index',compact('alatberat','nomor','request','jumlah_excavator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create()
    {
        $merk = Merk::all();
        return view('page.alatberat.form',compact('merk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate(
            [
                'foto' => 'required|file|mimes:png,jpg,jpeg',
            ]
            );
        $nama_file = $request->foto->getClientOriginalName();
 
        $upload3 = $request->foto->move('berkas',$nama_file);
        $alatberat = new Alatberat;
            
        $alatberat->no_mesin = $request->no_mesin;
        $alatberat->nm_alat = $request->nama;
        $alatberat->merks_id = $request->merk;
        $alatberat->tahun = $request->tahun;
        $alatberat->jumlah = $request->jumlah;
        $alatberat->performa = $request->performa;
        $alatberat->harga = $request->harga;
        $alatberat->foto = $request->foto->getClientOriginalName();
        $alatberat->save();
        return redirect('/alatberat');
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
        $alatberat = Alatberat::find($id);
        $merk = Merk::all();
        return view('page.alatberat.edit',compact('alatberat','merk'));
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
        $validasi = $request->validate(
            [
                'foto' => 'required|file|mimes:png,jpg,jpeg',
            ]
            );
        $nama_file = $request->foto->getClientOriginalName();
 
        $upload3 = $request->foto->move('berkas',$nama_file);
        $alatberat = Alatberat::find($id);
        
        $alatberat->no_mesin = $request->no_mesin;
        $alatberat->nm_alat = $request->nama;
        $alatberat->merks_id = $request->merk;
        $alatberat->tahun = $request->tahun;
        $alatberat->performa = $request->performa;
        $alatberat->jumlah = $request->jumlah;
        $alatberat->harga = $request->harga;
        $alatberat->foto = $request->foto->getClientOriginalName();
        $alatberat->save();
        return redirect('/alatberat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alatberat = Alatberat::find($id);
        $alatberat->delete();
        return redirect('/alatberat');
    }
}
