@extends('layout.nav')
@section('content')
<div class ="content">
    <div class="card">
        <div class="card-header">
          <h4 class="float-start">Form Edit Data Merk</h4>
        </div>
        <div class="card-body">
            <form method="post" action="/merk/{{$merk->id}}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Merk</label>
                  <input type="text" value="{{$merk->merk}}" name="merk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Kapasitas</label>
                  <input type="text" value="{{$merk->kap}}" name="kap" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <a href="/merk" class="btn btn-warning text-white">Batal</a>
              </form>
        </div>
    </div>
</div>
@endsection