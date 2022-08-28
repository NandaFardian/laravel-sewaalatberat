@extends('layout.user')
@section('content')
<div class="product-area pt-50 ">
    <div class="container">
        <div class="row justify-content-center">
    @foreach ($sewa->sewa as $item)
        @if ($item->status == 0)
        <div class="col d-flex" class="elementor-image-box-img">
        <div class="card-header">
        <div style="width: 18rem;">
            <p>Kode Sewa : {{$item->kd_sewa}}</p>
            <p>Nama : {{$item->nama_pen}}</p>
            <p>Total Biaya : Rp. {{$item->total_biaya}}</p>
            <h5>{{$item->nm_alat}} </h5>
            <a href="/bayarsewa/{{$item->id}}" class="btn btn-success">Bayar</a>
        @else
        @endif
        
    </div>
    <div>
    </div>
    <div>

    </div>
    </div>
    </div>
    @endforeach 
</div>
</div>
@endsection