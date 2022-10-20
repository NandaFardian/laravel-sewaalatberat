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
            <td width="300px"></td>
            <td width="300px"></td>
            <td width="300px"><div class="header-logo" align="center">
                <h3 style="font-style:italic">CV. Yoyon</h3>
            </div></td>
            <td width="300px"></td>
            <td width="300px"></td>
            
        </tr>
        <tr>
            <td>
        Waktu : <label>15:09:09</label>   
            </td>
        </tr>
        <tr>
            <td colspan="4">Jum'at : 29/04/2022</td>
            <td colspan="2">Kode Sewa : {{$sewa->kd_sewa}}</td>
        </tr>
        <tr>
            <td>Status : <b style="color: green"> Lunas </b></td>
        </tr>
        <tr>
        <td colspan="6">--------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
        <tr align="center">
            
            <td colspan="6">
                <table style="text-align: center"> 
                    <tr>
                        <td width="300px">No</td>
                        <td width="300px">Nama</td>
                        <td width="300px">Tanggal Sewa</td>
                        <td width="300px">Jenis Alat Berat</td>
                        <td width="300px">Harga</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>{{$sewa->nama_pen}}</td>
                        <td>{{$sewa->tanggal_sewa}}</td>
                        <td>{{$sewa->alatberats->nm_alat}}</td>
                        <td>Rp. {{number_format ($sewa->alatberats->harga)}}</td>
                    </tr>
                    <tr>
                        <td colspan="6">-------------------------------------------------------------------------------------------------------------------------------------</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            Biaya Operator
                        </td>
                        <td>Rp. {{number_format ($sewa->biaya_ope)}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            Biaya Tambahan
                        </td>
                        <td>Rp. {{number_format ($sewa->pajak)}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            Grand Total
                        </td>
                        <td>Rp. {{number_format ($sewa->total_biaya)}}</td>
                    </tr>
                    <tr>
                        <td colspan="6">-------------------------------------------------------------------------------------------------------------------------------------</td>
                    </tr>
                    <tr>
                        <td colspan="6" align="center"><h3><b>Terima Kasih</b><br><b>Silahkan Berkunjung Kembali</b></h3></td>
                    </tr>
                    <tr>
                        <td colspan="6" align="center"><h3></h3></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>