@extends('layout.user')
@section('content')
<div class="product-area pt-50 ">
    <div class="container">
        <div class="row justify-content-center">
    
        
        <div class="col d-flex" class="elementor-image-box-img">
        <div class="card-header">
        <div style="width: 18rem;">
            
            @foreach ($sewa->sewa as $item)
            @if ($item->status == 0)
            <img src="berkas/{{$item->alatberats->foto}}" height="250" alt="">
            <p>Kode Sewa : {{$item->kd_sewa}}</p>
            <p>Alamat : {{$item->alamat}}</p>
            <p>Tanggal Sewa : {{$item->alamat}}</p>
            <p>Nama : {{$item->nama_pen}}</p>
            <p>Total Biaya : Rp. {{number_format ($item->total_biaya)}}</p>
            <h5>{{$item->nm_alat}} </h5>
            
            <a href="/bayarsewa/{{$item->id}}" class="btn btn-success">Bayar</a>
            
        @else
        @endif
        @endforeach
        
    </div>
    <div>
    </div>
    <div>

    </div>
    </div>
    </div>
    
</div>
</div>
@endsection