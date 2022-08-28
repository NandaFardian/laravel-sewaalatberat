@extends('layout.nav')
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
@section('content')
{{-- <?php 
			$bulan_tes =array(
				'01'=>"Januari",
				'02'=>"Februari",
				'03'=>"Maret",
				'04'=>"April",
				'05'=>"Mei",
				'06'=>"Juni",
				'07'=>"Juli",
				'08'=>"Agustus",
				'09'=>"September",
				'10'=>"Oktober",
				'11'=>"November",
				'12'=>"Desember"
			);
		?> --}}
<div class="content ">
                
    <div class="page-header">
        <div>
            <h3>Laporan Penyewaan</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Data Master</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Laporan Sewa</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <form action="post" action="/laporan_sewa">
            <table class="table table-striped">
                <tr>
                    <td>
                        <input type="date" value="<?= date('Y-m-d');?>" class="form-control" name="hari">
                    </td>
                    {{-- <td>
                        <select name="bln" class="form-control">
                            <option selected="selected">Bulan</option>
                            <?php
										$bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
										$jlh_bln=count($bulan);
										$bln1 = array('01','02','03','04','05','06','07','08','09','10','11','12');
										$no=1;
										for($c=0; $c<$jlh_bln; $c+=1){
											echo"<option value='$bln1[$c]'> $bulan[$c] </option>";
										$no++;}
									?>
                        </select>
                    </td>
                    <td>
                        <?php
                            $now=date('Y');
                            echo "<select name='thn' class='form-control'>";
                            echo '
                            <option selected="selected">Tahun</option>';
                            for ($a=2017;$a<=$now;$a++)
                            {
                                echo "<option value='$a'>$a</option>";
                            }
                            echo "</select>";
                            ?>
                    </td> --}}
                    <td>
                            <button class="btn btn-primary">
                                <i class="fa fa-search"></i> Cari
                            </button>
                            <a href="/laporan_sewa" class="btn btn-success">
                                <i class="fa fa-refresh"></i> Refresh</a>
                                
                            <?php if(!empty($_GET['cari'])){?>
                                <a href="excel.php?cari=yes&bln=<?=$_POST['bln'];?>&thn=<?=$_POST['thn'];?>" class="btn btn-info"><i class="fa fa-download"></i>
                                Excel</a>
                            <?php }else{?>
                                <a href="/laporan_sewa/pdf" target="_blank" class="btn btn-success">PDF</a>
                            <?php }?>
                    </td>
                </tr>
            </table>
            </form>
        <div class="card">  
            <table class="table">
                
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Sewa</th>
                    <th scope="col">Nama Penyewa</th>
                    <th scope="col">Alamat Lengkap</th>
                    <th scope="col">Tanggal Sewa</th>
                    <th scope="col">Jenis Alat Berat</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Biaya Operator</th>
                    <th scope="col">Pajak</th>
                    <th scope="col">Total Biaya</th>
                  </tr>
                
                <tbody>
                     @forelse ($sewa as $item)
                        <tr>     
                            <th scope="row">{{$nomor++}}</th>
                            <td>{{ $item->kd_sewa }}</td>
                            <td>{{ $item->nama_pen }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->tanggal_sewa }}</td>
                            <td>{{ $item->alatberats->nm_alat}}</td>
                            <td>Rp. {{number_format ($item->alatberats->harga) }}</td>
                            <td>Rp. {{number_format ($item->biaya_ope) }}</td>
                            <td>{{ $item->pajak }}</td>
                            <td>Rp. {{number_format ($item->total_biaya) }}</td>
                        </tr>
                    @empty
                        <tr class="table-primary">
                            <td colspan="14">Tidak Ada Data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
      </div>
</div>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
@endsection