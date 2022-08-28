@extends('layout.nav')
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
@section('content')
<div class="content ">
                
    <div class="page-header">
        <div>
            <h3>Data Pelanggan</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Data Master</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Pelanggan</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table">
            
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Hp</th>
                  </tr>

                <tbody>
                    @forelse ($pel as $item)
                        <tr>   
                            @if($item->level==null)  
                            <th scope="row">{{$nomor++}}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->no_hp}}</td>
                            @else
                            @endif
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