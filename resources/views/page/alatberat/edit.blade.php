@extends('layout.nav')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Data Alat Berat</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Alat Berat</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <form method="post" action="/alatberat/{{$alatberat->id}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">No Mesin</label>
                  <input type="text" value="{{$alatberat->no_mesin}}" name="no_mesin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
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
                  <label for="exampleInputPassword1" class="form-label">Performa</label>
                  <input type="text" value="{{$alatberat->performa}}" name="performa" class="form-control" id="exampleInputPassword1">
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
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection



