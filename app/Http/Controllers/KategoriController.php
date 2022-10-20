<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alatberat;
use App\Models\Sewa;
class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlah_excavator = Sewa::where('alatberats_id',1)
        ->count();
        $alatberat=Alatberat::all();
        return view('page.excavator.index',compact('alatberat','jumlah_excavator'));
    }
    public function crane()
    {
        $jumlah_excavator = Sewa::where('alatberats_id',1)
        ->count();
        $alatberat=Alatberat::all();
        return view('page.alatberat.crane.index',compact('alatberat','jumlah_excavator'));
    }
    public function bull()
    {
        $jumlah_excavator = Sewa::where('alatberats_id',1)
        ->count();
        $alatberat=Alatberat::all();
        return view('page.bulldozer.index',compact('alatberat','jumlah_excavator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
