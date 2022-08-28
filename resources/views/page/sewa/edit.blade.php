@extends('layout.nav')
@section('content')
<div class ="container mt-3 bg-white p-4">
    <div class="card">
        <div class="card-header">
          <h4 class="float-start">Form Edit Data Pelanggan</h4>
        </div>
        <div class="card-body">
            <form method="post" action="/sewa/{{$sewa->id}}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Status</label>
                  <input type="text" value="{{$sewa->status}}" name="status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <a href="/pelanggan" class="btn btn-warning text-white">Batal</a>
              </form>
        </div>
      </div>
  </div>
@endsection