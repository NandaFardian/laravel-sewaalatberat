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
    @foreach ($alatberat as $item)
    <div class="col d-flex" class="elementor-image-box-img">
    <div class="card-header">
        <div style="width: 18rem;">
        <img src="{{url('berkas')}}/{{$item->foto}}" class="card-img-top" alt="">
        <span>Alat Berat</span>
        <h5>{{$item->nm_alat}} </h5>
        <a href="/sewa-user" class="btn btn-sm btn-success">Sewa</a>
        <button type="button" class="btn btn-Primary btn-sm"   data-bs-toggle="modal" data-bs-target="#exampleModal1{{$item->id}}">
          Detail
        </button>
        <div class="modal fade" id="exampleModal1{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="berkas/{{$item->foto}}" height="350" alt="">
                </div>
                <div class=" text-center">
                                    <p>No Mesin : <b>{{$item->no_mesin}}</b></p>
                                    <p>Jenis Alat Berat : <b>{{$item->nm_alat}}</b></p>
                                    <p>Merk : <b>{{$item->merks->merk}}</b></p>
                                    <p>Kapasitas : <b>{{$item->merks->kap}}</b></p>
                                    <p>Tahun : <b>{{$item->tahun}}</b></p>  
                                    <p>Stok : <b>{{$item->jumlah}}</b></p>
                                    <p>Performa : <b>{{$item->performa}}</b></p>
                                    <p>Jumlah Pemakaian : <b>{{$jumlah_excavator}}</b></p>
                                    <p>Harga : <b>Rp. {{number_format($item->harga) }}</b>/Hari</p>
                </div>
                
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                </div>
              </div>
            </div>
          </div>
    </div>
    </div>
    </div>

  

        
    @endforeach 
</div>
@endsection
<script src="{{asset('js/bootstrap.min.js')}}"></script>