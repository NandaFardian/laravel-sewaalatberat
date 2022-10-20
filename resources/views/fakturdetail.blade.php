<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Detail</title>
</head>
<body>
    <table>
        <tr align="center">
            <td colspan="5">
            <h3><b>Struk Detail</b></h3>   
            </td>
        </tr>
        <tr align="center">
            <td colspan="6">
                <table> 
                    {{-- @foreach ($sewa as $item) --}}
                    <tr>
                        
                        <td width="300px" align="right">Kode Sewa 
                        </td>
                        <td width="20px" align="center">:</td>
                        <td width="300px"><b>{{$sewa->kd_sewa}}</b></td>
        
                        
                    </tr>
                    <tr>
                        <td width="300px" align="right">Nama Penyewa</td>
                        <td width="20px" align="center">:</td>
                        <td width="300px"><b>{{$sewa->nama_pen}}</b></td>
                    </tr>
                    <tr>
                        <td width="300px" align="right">Alamat</td>
                        <td width="20px" align="center">:</td>
                        <td width="300px"><b>{{$sewa->alamat}}</b></td>
                    </tr>
                    <tr>
                        <td width="300px" align="right">Tanggal Sewa</td>
                        <td width="20px" align="center">:</td>
                        <td width="300px"><b>{{$sewa->tanggal_sewa}}</b></td>
                    </tr>
                    <tr>
                        <td width="300px" align="right">Tanggal Kembali </td>
                        <td width="20px" align="center">:</td>
                        <td width="300px"><b>{{$sewa->tanggal_kembali}}</b></td>
                    </tr>
                    <tr>
                        <td width="300px" align="right">Jenis Alat Berat </td>
                        <td width="20px" align="center">:</td>
                        <td width="300px"><b>{{$sewa->alatberats->nm_alat}}</b></td>
                    </tr>
                    <tr>
                        <td width="300px" align="right">Jumlah </td>
                        <td width="20px" align="center">:</td>
                        <td width="300px"><b>{{$sewa->jumlah}}</b></td>
                    </tr>
                    <tr>
                        <td width="300px" align="right">Harga </td>
                        <td width="20px" align="center">:</td>
                        <td width="300px"><b>Rp. {{number_format($sewa->alatberats->harga)}}</b></td>
                    </tr>
                    <tr>
                        <td width="300px" align="right">Biaya Operator </td>
                        <td width="20px" align="center">:</td>
                        <td width="300px"><b>Rp. {{number_format($sewa->biaya_ope)}}</b></td>
                    </tr>
                    <tr>
                        <td width="300px" align="right">Biaya Tambahan </td>
                        <td width="20px" align="center">:</td>
                        <td width="300px"><b>{{$sewa->pajak}}</b></td>
                    </tr>
                    <tr>
                        <td width="300px" align="right">Total Biaya </td>
                        <td width="20px" align="center">:</td>
                        <td width="300px"><b>Rp. {{number_format($sewa->total_biaya)}}</b></td>
                    </tr>
                    {{-- @endforeach --}}
                </table>
            </td>
        </tr>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>