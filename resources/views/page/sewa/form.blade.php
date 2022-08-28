@extends('layout.nav')
@section('content')
<div class="content ">
    <div class="page-header">
        {{-- <div>
            <h3>Data Transaksi</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Data Master</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Transaksi</li>
                </ol>
            </nav>
        </div> --}}
    </div>
    <div class="card">
    <div class="card-header">
      <h4 class="float-start">Form Tambah Transaksi</h4>
    </div>
    <div class="card-body">
        <form method="post" action="/sewa/store">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Kode</label>
              <input type="text" name="kode" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly value="{{'NF-' .date('d-m-y' .'-'. $kd)}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Penyewa</label>
              <input type="text" name="nama"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Alamat Lengkap</label>
              <input type="text" name="alamat"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">No Hp</label>
              <input type="text" name="nohp"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tanggal Sewa</label>
              <input type="date" name="tgl_sewa"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tanggal Kembali</label>
              <input type="date" name="tgl_kem"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">               
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Jenis Alat Berat</label>
              <select class="form-control" id="myselect" onchange="gantiharga(event)">
                <option selected disabled value="-">-Pilih alat Berat-</option>
                @foreach ($alatberat as $item)
                    <option value="{{$item->harga}}">{{$item->nm_alat}}</option>    
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Jumlah</label>
              <input type="text" name="jumlah" class="form-control"  aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Harga</label>
              <input  readonly type="text" name="harga" class="form-control" id="harga" aria-describedby="emailHelp">
            </div>
            <div hidden class="mb-3">
              <input readonly type="text" name="alat" class="form-control" id="alat" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Biaya Operator</label>
              <input type="text" name="biaya_ope" readonly value=800000  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Pajak</label>
              <input type="text" name="pajak" readonly value=25% class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Total Biaya</label>
              <input type="text" name="total" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="/alatberat" class="btn btn-warning text-white">Batal</a>
          </form>
    </div>
  </div>
</div>
@endsection
@section('Script')
    <script>
        console.log($('#myselect').val());
        $('#myselect').change(function(){
          document.getElementById("harga").value = $(this).find(':selected').val();
          document.getElementById("alat").value = $(this).find(':selected').text();
        });
    </script>
@endsection