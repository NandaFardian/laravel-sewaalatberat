<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/png.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><b> CV. YOYON </b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/foto.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Data Master</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tabel
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/pelanggan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data pelanggan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/alatberat" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Alat Berat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/merk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Merk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/ope" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Operator</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/sewa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Sewa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pembayaran" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Bayar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Laporan</li>
          <li class="nav-item">
            <a href="/laporan_sewa" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>
          <li class="nav-header">Logout</li>
          <li class="nav-item">
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"><i class="nav-icon far fa-circle text-danger"></i>
              {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
              </form>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Alat Berat</h1>
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
              <div class="card-header">
                <a href="/alatberat/form" class="float-start btn-sm btn btn-success">Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th scope="col">No Mesin</th>
                    <th scope="col">Jenis Alat Berat</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @forelse ($alatberat as $item)
                    <tr>     
                      
                        <td>{{ $item->no_mesin }}</td>
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
                                    <p>No Mesin : <b>{{$item->no_mesin}}</b></p>
                                    <p>Jenis Alat Berat : <b>{{$item->nm_alat}}</b></p>
                                    <p>Merk : <b>{{$item->merks->merk}}</b></p>
                                    <p>Kapasitas : <b>{{$item->merks->kap}}</b></p>
                                    <p>Tahun : <b>{{$item->tahun}}</b></p>
                                    <p>Stok : <b>{{$item->jumlah}}</b></p>
                                    <p>Performa : <b>{{$item->performa}}</b></p>
                                    <p>Jumlah Pemakaian : <b>{{$jumlah_excavator}}</b></p>
                                    <p>Harga : <b>Rp. {{number_format($item->harga) }}</b>/Hari</p>
                                  </div>
                                  
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <a href="/alatberat/edit/{{$item->id}}" class="btn btn-warning fa fa-pencil btn-sm">Edit</a>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">
                             Hapus
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
                  
                @endforelse
                  </tbody>
                </table>
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
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright Nanda Fardian </strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>


{{-- @extends('layout.nav')
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
@endsection --}}