@extends('layout.user')
@section('content')
<div class="login-page-area pt-50">
    <div class="container">
        <form method="post" action="/sewa-user/userstore">
            @csrf
            {{-- @method('PUT') --}}
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Sewa</label>
                <input type="text" readonly name="kode" value="{{'NF-' .date('d-m-y'.'-'. $kd)}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama lengkap</label>
                <input type="text" readonly name="nama" value="{{Auth::user()->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Alamat Lengkap</label>
                <input type="text" name="alamat" value="{{Auth::user()->alamat}}"  class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">No. Hp</label>
                <input type="text" name="nohp" value="{{Auth::user()->no_hp}}" class="form-control" id="exampleInputPassword1">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tanggal Sewa</label>
                <input type="date" name="tgl_sewa" value="<?= date('Y-m-d');?>" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tanggal Kembali</label>
                <input type="date" name="tgl_kem" class="form-control" id="exampleInputPassword1">
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
              <div class="mb-3" hidden>
                <label for="exampleInputEmail1" class="form-label">Jumlah</label>
                <input type="text" value="1" name="jumlah" class="form-control" aria-describedby="emailHelp">
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
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Pajak</label>
                <input type="text" name="pajak" readonly value="25%" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Total Biaya</label>
                <input type="text" readonly name="total" value="{{2500000+80000*25/100}}" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/sewa-user" class="btn btn-warning text-white">Batal</a>
        </form>
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