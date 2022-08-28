@extends('layout.nav')
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
@section('content')
<div class="content ">
                
    <div class="page-header">
        <div>
            <h3>Data Sewa</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Data Master</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Sewa</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
          <a href="/sewa" class="btn btn-warning">
            <i class="fa fa-refresh"></i> Refresh</a>
          <form action="/sewa" method="GET" class="float-right">

            <div class="input-group input-group-sm float-right" style="width: 150px;">
              <input type="text" name="search" class="form-control" placeholder="Search" value="{{$request->search}}">
              <button type="submit" class="btn btn-default">
                <i class="fa fa-search"></i>
              </button>
            </div>
          
        </form>
        </div>
        <div tabindex="0" >
          
          <pre>
            
            <table class="table container">
                
                  <span><tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama Penyewa</th>
                    <th scope="col">Alamat Lengkap</th>
                    <th scope="col">Jenis Alat Berat</th>
                    <th scope="col">Total Biaya</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>
                  </tr></span>
                
                <tbody>
                     @forelse ($sewa as $item)
                        <tr>     
                            <th scope="row">{{$nomor++}}</th>
                            <td>{{ $item->kd_sewa }}</td>
                            <td>{{ $item->nama_pen }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->alatberats->nm_alat}}</td>
                            <td>Rp. {{ $item->total_biaya }}</td>
                            <td>
                              @if($item->status == 0)
                              <label class="badge badge-warning">Sedang Disewa</label>
                              @elseif($item->status == 1)
                              <label class="badge badge-warning">Sedang Disewa</label>
                              @else
                              <label class="badge badge-primary">Selesai Disewa</label>
                              @endif
                            </td>
                            <td>
                              
                                @if ($item->status == 0)
                                <form action="/status-kembali/{{$item->id}}" method="post">
                                  @csrf
                                  <button type="submit" class="btn btn-warning btn-sm">Kembali</button>
                                @elseif($item->status == 1)
                                <form action="/status-kembali/{{$item->id}}" method="post">
                                  @csrf
                                  <button type="submit" class="btn btn-warning btn-sm">Kembali</button>
                              </form>
                                @else
                                @endif  
                        
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
                                    <div class="text-justify">
                                      <p>Kode Sewa : <b>{{ $item->kd_sewa }}</b></p>
                                      <p>Nama Penyewa : <b>{{ $item->nama_pen }}</b></p>
                                      <p>Alamat : <b>{{ $item->alamat }}</b></p>
                                      <p>No. Hp : <b>{{ $item->no_hp }}</b></p>
                                      <p>Tanggal Sewa : <b>{{ $item->tanggal_sewa }}</b></p>
                                      <p>Tanggal Kembali : <b>{{ $item->tanggal_kembali }}</b></p>
                                      <p>Jenis Alat Berat : <b>{{ $item->alatberats->nm_alat}}</b></p>
                                      <p>Jumlah : <b>{{ $item->jumlah}}</b></p>
                                      <p>Harga : <b>Rp. {{ $item->alatberats->harga }}</b></p>
                                      <p>Biaya Operator :Rp. <b>{{ $item->biaya_ope }}</b></p>
                                      <p>Pajak : <b>{{ $item->pajak }}</b></p>
                                      <p>Total Biaya :Rp. <b>{{ $item->total_biaya }}</b></p>
                                    </div>
                                    
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="table-primary">
                            <td colspan="14">Tidak Ada Data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
          
          </pre>
        </aside>
        </div>
      </div>
</div>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
@endsection