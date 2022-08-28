<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\models\Alatberat;
use App\Models\Alatberat as ModelsAlatberat;
use App\models\Merk as ModelsMerk;
use App\models\Operator as ModelsOperator;
use App\models\Sewa as ModelsSewa;
use App\models\User as ModelsUser;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     * 
     * 
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $jumlah_alatberat = Alatberat::all()->count();
        $jumlah_merk = ModelsMerk::all()->count();
        $jumlah_alatberat = ModelsAlatberat::all()->count();
        $jumlah_operator = ModelsOperator::all()->count();
        $jumlah_pelanggan = ModelsUser::all()->count();
        $jumlah_sewa = ModelsSewa::all()->count();
        $jumlah_belumbayar = ModelsSewa::where('status',0)->count();
        $jumlah_sudahbayar = ModelsSewa::where('status',3)->count();
        // dd($jumlah_belumbayar);
        $notif = ModelsSewa::where('kd_sewa')->count();
        return view('home',compact('jumlah_merk','jumlah_sudahbayar','notif','jumlah_belumbayar','jumlah_alatberat','jumlah_operator','jumlah_pelanggan','jumlah_sewa'));
    }
    public function beranda()
    {
        return view('page.beranda.index');
    }
    public function awal()
    {
        return view('page.beranda.index');
    }
    public function kategori()
    {
        $alatberat=ModelsAlatberat::all();
        return view('page.kategori.index',compact('alatberat'));
    }

}