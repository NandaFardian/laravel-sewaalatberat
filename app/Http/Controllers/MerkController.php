<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merk;
class MerkController extends Controller
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
            $merk = Merk::where('merk','LIKE','%'.$request->search.'%')->get();
        }else{
            $merk = Merk::all();
        }
        $nomor = 1;
        return view('page.merk.index',compact('merk','nomor','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.merk.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate(
        [
            'merk.required' => 'Merk harus diisi',
            'merk.unique' => 'Merk sudah digunakan, silahkan tulis merk lain',
            'kap.required' => 'Kapasitas harus diisi',
        ]);

        $merk = new Merk;
        
        $merk->merk = $request->merk;
        $merk->kap = $request->kap;
        $merk->save();
        return redirect('/merk');
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
        $merk = Merk::find($id);
        return view('page.merk.edit',compact('merk'));
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
        $merk = Merk::find($id);

        $merk->merk = $request->merk;
        $merk->kap = $request->kap;
        $merk->save();
        return redirect('/merk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $merk = Merk::find($id);
        $merk->delete();
        return redirect('/merk');
    }
}
