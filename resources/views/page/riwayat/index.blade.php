@extends('layout.user')
@section('content')
<div class="product-area pt-50 ">
    <div class="container">
        <div class="row justify-content-center">
    @foreach ($sewa->sewa as $item)
    <div class="col d-flex" class="elementor-image-box-img">
    <div class="card-header">
        <div style="width: 18rem;">
            <img src="berkas/{{$item->alatberats->foto}}" height="150" alt="">
        <p>Jenis Alat Berat : {{$item->alatberats->nm_alat}}</p>
        <p>Tanggal Sewa : {{$item->tanggal_sewa}}</p>
        <p>Total Biaya : Rp. {{number_format ($item->total_biaya)}}</p>
        <h5>{{$item->nm_alat}} </h5>
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