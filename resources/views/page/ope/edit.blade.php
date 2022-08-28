@extends('layout.nav')
@section('content')
<div class ="content">
    <div class="card">
        <div class="card-header">
          <h4 class="float-start">Form Edit Data Operator</h4>
        </div>
        <div class="card-body">
            <form method="post" action="/ope/{{$ope->id}}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Operator</label>
                  <input type="text" value="{{$ope->nama}}" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Alamat</label>
                  <input type="text" value="{{$ope->alamat}}" name="alamat" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">No Hp</label>
                  <input type="text" value="{{$ope->no_hp}}" name="no_hp" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <a href="/ope" class="btn btn-warning text-white">Batal</a>
              </form>
        </div>
      </div>
  </div>
@endsection