<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Sewa;
use App\Models\Alatberat;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Auth;
class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $nomor = 1;
        $pem = Sewa::all();
        return view('page.pembayaran.index',compact('pem','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sewa = Sewa::all();
        return view('page.pembayaran.index',compact('sewa'));
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
        $validasi = $request->validate(
            [
                'foto' => 'required|file|mimes:png,jpg,jpeg',
            ]
            );
        $nama_file = $request->foto->getClientOriginalName();
 
        
        $upload3 = $request->foto->move('berkas',$nama_file);
        $sewa = Sewa::find($id);
    
        $sewa->foto = $request->foto->getClientOriginalName();
        $sewa->save();
        return view('faktur',compact('sewa'));
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
    
    public function statusedit($id){
        $status = Sewa::select('status')->where('id',$id)->first();
        return view('page.pembayaran.index',compact('status'));
    }
    public function upload(){
        return view('page.upload.index');
    }

    public function bayar(){
        $sewa = Auth::user();
        // $sewa =Sewa::where('users_id',Auth::user()->id);

        return view('bayar',compact('sewa'));
    }
    public function bayaredit($id){
        $sewa = Sewa::find($id);
        return view('/bayarsewa',compact('sewa'));
    }
    public function faktur($id){
        $sewa = Sewa::find($id);
        // dd($sewa);
        return view('faktur',compact('sewa'));
    }
    public function fakturDetail($id){
        $sewa = Sewa::find($id);
        // dd($sewa);
        return view('fakturdetail',compact('sewa'));
    }

    // public function fakturid($id, Request $request){
    //     $sewa = Sewa::where('id',$id)->first();
    //     $sewa = Sewa::find($id);
    //     return view('/faktur',compact('sewa'));
    // }
    // public function print($id, Request $request){
    //     $sewa = Sewa::where('id',$id)->first();
    //     return view('/faktur',compact('sewa'));
    // }

    public function UpdateStatus($id)
    {   
        $sewa = Sewa::find($id);
        $sewa->status = '1';
        $sewa->save();
        return redirect('/pembayaran');
    }
    public function UpdateStatusKembali($id)
    {   
        $sewa = Sewa::find($id);
        $sewa1 = $sewa->alatberats_id;
        $sewa->status = '3';
        $sewa->save();
        // dd($sewa1);
        $alatberat = Alatberat::where('id', $sewa1)->first();
        $alatberat->jumlah = $alatberat->jumlah+1;
        $alatberat->save();
        return redirect('/sewa');
    }
    public function riwayat(){
        $sewa = Auth::user();
        // $sewa =Sewa::where('users_id',Auth::user()->id);

        return view('page.riwayat.index',compact('sewa'));
    }
}
