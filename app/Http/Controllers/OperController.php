<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operator;
use Yajra\DataTables\DataTables;
class OperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $ope = Operator::where('nama','LIKE','%'.$request->search.'%')->get();
        }else{
            $ope = Operator::all();
        }
        $nomor = 1;
        return view('page.ope.index',compact('ope','nomor'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.ope.form');
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
        $ope = new Operator;
        
        $ope->nama = $request->nama;
        $ope->alamat = $request->alamat;
        $ope->no_hp = $request->no_hp;
        $ope->foto = $request->foto->getClientOriginalName();
        $ope->save();
        return redirect('/ope');
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
        $ope = Operator::find($id);
        return view('page.ope.edit',compact('ope'));
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

        $ope = Operator::find($id);

        $ope->nama = $request->nama;
        $ope->alamat = $request->alamat;
        $ope->no_hp = $request->no_hp;
        $ope->foto = $request->foto->getClientOriginalName();
        $ope->save();
        return redirect('/ope');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ope = Operator::find($id);
        $ope->delete();
        return redirect('/ope');
    }
}
