@extends('layout.user')
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
@section('content')
    <div class="product-area pt-50 ">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-title">
                    <h3>
                        Produk Kami
                    </h3>
                </div>
            </div>
        </div>
        <hr>

    </div>
    <div class="container">
        <div class="row justify-content-center">
    
    <div class="col d-flex" class="elementor-image-box-img">
    <div class="card-header">
        <div style="width: 18rem;">
        <img src="berkas/rizwan-259-1615291368206_604763e8323fa-121-559X410.jpg" class="card-img-top" alt="">
        <span>Alat Berat</span>
        <h5>Crane MK546</h5>
        <a href="/sewa-user" class="btn btn-sm btn-success">Sewa</a>
    </div>
    
    </div>
    <div class="card-header">
        <div style="width: 18rem;">
        <img src="berkas/rizwan-259-1615291368206_604763e8323fa-121-559X410.jpg" class="card-img-top" alt="">
        <span>Alat Berat</span>
        <h5>Crane MK546</h5>
        <a href="/sewa-user" class="btn btn-sm btn-success">Sewa</a>
    </div>
    </div>
    <div class="card-header">
        <div style="width: 18rem;">
        <img src="berkas/Rough-Terrain-Crane-Kato-SL600-II-51-ton-2008-khr-4-041019-430x370.jpg" class="card-img-top" alt="">
        <span>Alat Berat</span>
        <h5>Crane GT987</h5>
        <a href="/sewa-user" class="btn btn-sm btn-success">Sewa</a>
    </div>
    </div>
    
</div>
@endsection
<script src="{{asset('js/bootstrap.min.js')}}"></script>