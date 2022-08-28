<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\models\Alatberat ;
use App\models\Alatberat as Modelsalatberat;
use App\models\Merk;
use App\models\Operator;
use App\models\Pelanggan;
use App\models\Sewa;
use App\models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $jumlah_alatberat = Alatberat::all()->count();
        $jumlah_merk = Merk::all()->count();
        $jumlah_alatberat = Modelsalatberat::all()->count();
        $jumlah_operator = Operator::all()->count();
        $jumlah_pelanggan = User::all()->count();
        $jumlah_sewa = Sewa::all()->count();
        $jumlah_belumbayar = Sewa::where('status',0)->count();
        $jumlah_sudahbayar = Sewa::where('status',3)->count();
        // dd($jumlah_belumbayar);
        $notif = Sewa::where('kd_sewa')->count();
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
        $alatberat=Modelsalatberat::all();
        return view('page.kategori.index',compact('alatberat'));
    }

}
