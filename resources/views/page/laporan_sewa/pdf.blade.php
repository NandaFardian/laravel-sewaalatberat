<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CETAK DATA SEWA</title>
</head>
<body>
    <div class="form-group">
    <p align="center"><b>Laporan Data Sewa</b></p>
    <table class="static" align="center" rules="all" border="1px" style="width: 95%">
        <tr>
            <th>No</th>
            <th>Nama Penyewa</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Jenis Alat Berat</th>
            <th>Tanggal Sewa</th>
            <th>Harga</th>
            <th>Biaya Operator</th>
            <th>Pajak</th>
            <th>Total Biaya</th>
        </tr>
        @foreach ($cetakpdf as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->nama_pen}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->no_hp}}</td>
                <td>{{$item->alatberats->nm_alat}}</td>
                <td>{{$item->tanggal_sewa}}</td>
                <td>Rp. {{format_numberic ($item->alatberats->harga)}}</td>
                <td>Rp. {{$item->biaya_ope}}</td>
                <td>Rp. {{$item->pajak}}</td>
                <td>Rp. {{$item->total_biaya}}</td>
            </tr>
        @endforeach
    </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>