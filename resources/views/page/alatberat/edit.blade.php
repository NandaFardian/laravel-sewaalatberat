@extends('layout.nav')
@section('title','Tambah Data Alat Berat')
@section('content')
<div class="content ">
    <div class="card">
    <div class="card-header">
      <h4 class="float-start">Form Edit Alat Berat</h4>
    </div>
    <div class="card-body">
      <form method="post" action="/alatberat/{{$alatberat->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Jenis Alat Berat</label>
          <input type="text" value="{{$alatberat->nm_alat}}" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Merk</label>
          <select name="merk" id="" class="form-control">
            <option value="">-Pilih Merk-</option>
            @foreach ($merk as $item)
                <option value="{{$item->id}}" {{$alatberat->merks_id == $item->id ? 'selected' : ''}}>{{$item->merk}}</option>
            @endforeach
          </select>   
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Tahun</label>
          <input type="text" value="{{$alatberat->tahun}}" name="tahun" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Jumlah</label>
          <input type="text" value="{{$alatberat->jumlah}}" name="jumlah" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Harga</label>
          <input type="text" value="{{$alatberat->harga}}" name="harga" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Foto</label>
          <input type="file" name="foto" class="form-control" id="exampleInputPassword1">
          <img src="{{asset('berkas/'.$alatberat->foto)}}" height="350" alt="">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        <a href="/alatberat" class="btn btn-warning text-white">Batal</a>
      </form>
    </div>
  </div>
</div>
@endsection
{{-- @extends('layout.nav')
@section('title','Edit Data Alat Berat')
@section('content')
<div class ="container mt-3 bg-white p-4">
    <div class="card">
        <div class="card-header">
          <h4 class="float-start">Form Edit Data Alat Berat</h4>
        </div>
        <div class="card-body">
            <form method="post" action="/alatberat/{{$alatberat->id}}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Jenis Alat Berat</label>
                  <input type="text" value="{{$alatberat->nm_alat}}" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Merk</label>
                  <select name="merk" id="" class="form-control">
                    <option value="">-Pilih Merk-</option>
                    @foreach ($merk as $item)
                        <option value="{{$item->id}}" {{$alatberat->merks_id == $item->id ? 'selected' : ''}}>{{$item->merk}}</option>
                    @endforeach
                  </select>   
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Tahun</label>
                  <input type="text" value="{{$alatberat->tahun}}" name="tahun" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Jumlah</label>
                  <input type="text" value="{{$alatberat->jumlah}}" name="jumlah" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Harga</label>
                  <input type="text" value="{{$alatberat->harga}}" name="harga" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Foto</label>
                  <input type="file" value="" name="foto" class="form-control" id="exampleInputPassword1">
                  <img src="{{asset('berkas/'.$alatberat->foto)}}" height="350" alt="">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <a href="/merk" class="btn btn-warning text-white">Batal</a>
              </form>
        </div>
      </div>
  </div>
@endsection --}}