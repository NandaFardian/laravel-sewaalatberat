@extends('layout.user')
@section('content')
    <div class="page-title-area pt-200 pb-200 " style="background-image: url(assets2/img/bg/banner.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-titel-detalis  ">
                        <div align="center">
                            @auth
                            <h1 style="color: white">SELAMAT DATANG, {{Auth::user()->name}}</h1>
                            <h1 style="color: white">DI</h1>
                            <h1 style="color: white">PENYEWAAN ALAT BERAT</h1>
                            @else
                            <h1 style="color: white">SELAMAT DATANG</h1>
                            <h1 style="color: white">DI</h1>
                            <h1 style="color: white">PENYEWAAN ALAT BERAT</h1>
                            @endauth
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection