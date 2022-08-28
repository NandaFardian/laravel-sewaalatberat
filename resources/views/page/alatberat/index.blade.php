@extends('layout.nav')
@section('title','Data Alat Berat')
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
@section('content')
<div class="content ">        
                
    <div class="page-header">
        <div>
            <h3>Data Alat Berat</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Data Master</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Alat Berat</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
          <a href="/alatberat/form" class="float-start btn btn-success">Tambah Data</a>
          <form action="/alatberat" method="GET" class="float-right">

              <div class="input-group input-group-sm float-right" style="width: 150px;">
                <input type="text" name="search" class="form-control" placeholder="Search" value="{{$request->search}}">
                <button type="submit" class="btn btn-default">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            
          </form>
        </div>
        <div class="card-body">
            <table class="table">
                
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jenis Alat Berat</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Aksi</th>
                  </tr>
              
                <tbody>
                     @forelse ($alatberat as $item)
                        <tr>     
                            <th scope="row">{{$nomor++}}</th>
                            <td>{{ $item->nm_alat }}</td>
                            <td>{{ $item->merks->merk }}</td>
                            <td>{{ $item->jumlah }}</td>
                            <td>
                                <button type="button" class="btn btn-success btn-sm"   data-bs-toggle="modal" data-bs-target="#exampleModal1{{$item->id}}">
                                  Detail
                                </button>
                              
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal1{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body text-center">
                                        <img src="berkas/{{$item->foto}}" height="350" alt="">
                                      </div>
                                      <div class=" text-center">
                                        <p>Jenis Alat Berat : <b>{{$item->nm_alat}}</b></p>
                                        <p>Merk : <b>{{$item->merks->merk}}</b></p>
                                        <p>Tahun : <b>{{$item->tahun}}</b></p>
                                        <p>Jumlah : <b>{{$item->jumlah}}</b></p>
                                        <p>Harga : <b>Rp. {{$item->harga}}</b></p>
                                      </div>
                                      
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <a href="/alatberat/edit/{{$item->id}}" class="btn btn-warning fa fa-pencil btn-sm"></a>
                                <button type="button" class="btn btn-danger btn-sm fa fa-trash" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">
                                 
                                </button>
                                <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          Yakin <b>{{$item->nm_alat}}</b> ingin di hapus?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <form method="post" action="/alatberat/{{$item->id}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-primary">Hapus</button>
                                            </form>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="table-primary">
                            <td colspan="6">Tidak Ada Data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
      </div>
</div>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
@endsection