@extends('layout.user')
@section('content')
<div class="product-area pt-50 ">
    <div class="container">
        <div class="row justify-content-center">
    
    <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th scope="col">Kode</th>
            <th scope="col">Nama Penyewa</th>
            <th scope="col">Jenis Alat Berat</th>
            <th scope="col">Total Biaya</th>

          </tr>
          </thead>
          <tbody>
            @foreach ($sewa->sewa as $item)
          <tr>
            <td>{{ $item->kd_sewa }}</td>
            <td>{{ $item->nama_pen }}</td>
            <td>{{ $item->alatberats->nm_alat }}</td>
            <td>Rp. {{number_format ($item->total_biaya) }}</td>
          @endforeach 
          </tbody>
        </table>
      </div>
    </div>
  

        
   
</div>
</div>
@endsection