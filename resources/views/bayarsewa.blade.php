@extends('layout.user')
@section('content')
<div class="product-area pt-50 ">
    <div class="container">
        <div class="">
    <form method="post" action="/bayarsewa/{{$sewa->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Rekening</label>
            <input type="text" value="7142567819" readonly class="form-control">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Atas Nama</label>
            <input type="text" value="Nanda Fardian" readonly class="form-control">
          </div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Foto</label>
          <input type="file" name="foto" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        <a href="/beranda" target="_blank" class="btn btn-warning text-white">Batal</a>    
      </form>
    </div>
</div>
@endsection