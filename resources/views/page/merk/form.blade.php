@extends('layout.nav')
@section('title','Tambah Data Alat Berat')
@section('content')
<div class="content ">
    <div class="page-header">
        <div>
            <h3>Data Merk</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Data Master</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Merk</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="card">
    <div class="card-header">
      <h4 class="float-start">Form Tambah Alat Berat</h4>
    </div>
    <div class="card-body">
        <form method="post" action="/merk/store">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Merk</label>
              <input type="text" name="merk" value="{{old('merk')}}" class="form-control @error('merk') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('merk')
                <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Kapasitas</label>
              <input type="text" name="kap" value="{{old('kap')}}" class="form-control @error('kap') is-invalid @enderror" id="exampleInputPassword1">
              @error('kap')
              <div class="text-danger">{{$message}}</div>
            @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="/alatberat" class="btn btn-warning text-white">Batal</a>
          </form>
    </div>
  </div>
</div>
@endsection
