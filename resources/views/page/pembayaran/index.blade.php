@extends('layout.nav')
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
@section('content')
<div class="content ">
                
    <div class="page-header">
        <div>
            <h3>Data Bayar</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Data Master</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Bayar</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <a href="/pembayaran" class="btn btn-warning">
                <i class="fa fa-refresh"></i> Refresh</a>
            <table class="table">
            
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Sewa</th>
                    <th scope="col">Nama Penyewa</th>
                    <th scope="col">Total Biaya</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Opsi</th>
                  </tr>

                <tbody>
                    @forelse ($pem as $item)
                        <tr>     
                            <th scope="row">{{$nomor++}}</th>
                            <td>{{ $item->kd_sewa }}</td>
                            <td>{{ $item->nama_pen }}</td>
                            <td>Rp. {{number_format ($item->total_biaya) }}</td><td>
                            <button type="button" class="fa fa-photo" data-bs-toggle="modal" data-bs-target="#exampleModal1{{$item->id}}">
                            </button>
                            </td>
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
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <td><label class="badge {{($item->status == 0) ? 'badge-danger' : 'badge-success'}}">{{($item->status == 0) ? 'Belum Bayar' : 'Sudah Bayar'}}</label></td>
                            <td>
                                @if ($item->status == 0)
                                <form action="/pembayaran/{{$item->id}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-sm">Bayar</button>
                                </form>
                                @else
                                <a class="btn btn-primary btn-sm" href="/faktur/cetak/{{$item->id}}">Cetak</a>
                                @endif 
                            </td>
                            <td>
                                
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