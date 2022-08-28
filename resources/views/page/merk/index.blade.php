@extends('layout.nav')
@section('title','Data Merk')
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
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
          <a href="/merk/form" class="float-start btn btn-success">Tambah Data</a>
          <form action="/merk" method="GET" class="float-right">

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
                    <th scope="col">Nama Merk</th>
                    <th scope="col">Kap</th>
                    <th scope="col">Aksi</th>
                  </tr>
               
                <tbody>
                    @forelse ($merk as $item)
                        <tr>     
                            <th scope="row">{{$nomor++}}</th>
                            <td>{{ $item->merk }}</td>
                            <td>{{ $item->kap }}</td>
                            <td>
                                <a href="/merk/edit/{{$item->id}}" class="btn btn-warning btn-sm fa fa-pencil"></a>
                                <button type="button" class="btn btn-primary btn-sm fa fa-trash" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">
                                </button>
                                <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          Yakin <b>{{$item->merk}}</b> ingin di hapus?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <form method="post" action="/merk/{{$item->id}}">
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
                            <td colspan="4">Tidak Ada Data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
      </div>
</div>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
@endsection