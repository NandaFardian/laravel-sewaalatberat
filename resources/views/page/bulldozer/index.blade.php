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
        <img src="berkas/Komatsu-D85ESS-2-2012-3.jpg" class="card-img-top" alt="">
        <span>Alat Berat</span>
        <h5>Bulldozer BK2020</h5>
        <a href="/sewa-user" class="btn btn-sm btn-success">Sewa</a>
    </div>
    
    </div>
    <div class="card-header">
        <div style="width: 18rem;">
        <img src="berkas/swamp-dozer.jpg" class="card-img-top" alt="">
        <span>Alat Berat</span>
        <h5>Bulldozer CQ23</h5>
        <a href="/sewa-user" class="btn btn-sm btn-success">Sewa</a>
    </div>
    </div>
    <div class="card-header">
        <div style="width: 18rem;">
        <img src="berkas/unnamed (4).jpg" class="card-img-top" alt="">
        <span>Alat Berat</span>
        <h5>Bulldozer Z234</h5>
        <a href="/sewa-user" class="btn btn-sm btn-success">Sewa</a>
    </div>
    </div>
    
</div>
@endsection
<script src="{{asset('js/bootstrap.min.js')}}"></script>