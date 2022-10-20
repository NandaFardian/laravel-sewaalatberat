@extends('layout.nav')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Data Alat Berat</h1>
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
