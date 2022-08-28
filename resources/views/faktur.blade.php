<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CETAK DATA SEWA</title>
</head>
<body>
    <table>
        
        <tr>
            <td width="300px"><img class="logo mb-0" src="{{asset('assets/media/image/png.png')}}" height="150" alt="logo"></td>
            <td width="300px"></td>
            <td width="300px"><div class="header-logo" align="center">
                <h3 style="font-style:italic">Faktur Pembayaran</h3>
                    
                <div style="color: black;font-style:italic" class="mt-2">CV. YOYON</div>
                <div>Jln. Meulaboh - Tapak Tuan Kec. Darul Makmur Kab. Nagan Raya</div>
            </div></td>
            <td width="300px"></td>
            <td width="300px"></td>
            <td width="300px"></td>
        </tr>
        <tr align="center">
            <td colspan="5">
             ==================================================================================   
            </td>
        </tr>
        <tr align="center">
            <td colspan="6">
                <table> 
                    {{-- @foreach ($sewa as $item) --}}
                    <tr>
                        
                        <td width="300px" align="right">Invoice Pembayaran 
                        </td>
                        <td width="20px" align="center">:</td>
                        <td width="300px">FT2234567890</td>
        
                        
                    </tr>
                    <tr>
                        <td width="300px" align="right">Keterangan </td>
                        <td with="20px" align="center">:</td>
                        <td with="300px"><b style="color: green"> LUNAS </b></td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td width="300px" align="right">Kode Sewa </td>
                        <td width="20px" align="center">:</td>
                        <td width="300px" >{{$sewa->kd_sewa}}</td>
                    </tr><tr>
                        <td width="300px" align="right">Nama</td>
                        <td width="20px" align="center">:</td>
                        <td width="300px">{{$sewa->nama_pen}}</td>
                    </tr>
                    <tr>
                        <td width="300px" align="right">Alamat</td>
                        <td width="20px" align="center">:</td>
                        <td width="300px">{{$sewa->alamat}}</td>
                    </tr>
                    <tr>
                        <td width="300px" align="right">Tanggal Sewa</td>
                        <td width="20px" align="center">:</td>
                        <td width="300px">{{$sewa->tanggal_sewa}}</td>
                    </tr>
                    <tr>
                        <td width="300px" align="right">Tanggal Kembali </td>
                        <td width="20px" align="center">:</td>
                        <td width="300px">{{$sewa->tanggal_kembali}}</td>
                    </tr>
                    <tr>
                        <td width="300px" align="right">Jenis Alat Berat </td>
                        <td width="20px" align="center">:</td>
                        <td width="300px">{{$sewa->alatberats->nm_alat}}</td>
                    </tr>
                    <tr>
                        <td width="300px" align="right">Harga </td>
                        <td width="20px" align="center">:</td>
                        <td width="300px">Rp. {{number_format($sewa->alatberats->harga)}}</td>
                    </tr>
                    <tr>
                        <td width="300px" align="right">Biaya Operator </td>
                        <td width="20px" align="center">:</td>
                        <td width="300px">Rp. {{number_format($sewa->biaya_ope)}}</td>
                    </tr>
                    <tr>
                        <td width="300px" align="right">Pajak </td>
                        <td width="20px" align="center">:</td>
                        <td width="300px">{{$sewa->pajak}}</td>
                    </tr>
                    <tr>
                        <td width="300px" align="right">Total Biaya </td>
                        <td width="20px" align="center">:</td>
                        <td width="300px">Rp. {{number_format($sewa->total_biaya)}}</td>
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