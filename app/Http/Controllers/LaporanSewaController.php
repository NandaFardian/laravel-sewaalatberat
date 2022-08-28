<?php

namespace App\Http\Controllers;
use App\Models\Sewa;

use Illuminate\Http\Request;

class LaporanSewaController extends Controller
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
        return view('page.laporan_sewa.index',compact('nomor','sewa','request'));
    }

    public function cetakpdf()
    {
        $cetakpdf = Sewa::all();
        return view('page.laporan_sewa.pdf',compact('cetakpdf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $alatberat = Alatberat::all();
        // $merk = Merk::all();
        // return view('page.laporan.form',compact('merk','alatberat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
