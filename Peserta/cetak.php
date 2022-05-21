<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Laporan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Script to print the content of a div -->
    <script>
        function printDiv() {
            var divContents = document.getElementById("GFG").innerHTML;
            var a = window.open('', '', 'height=500, width=500');
            a.document.write('<html>');
            a.document.write('<body >');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>
</head>
<body>
<?php
    include "koneksi.php";
    $query_lelang = mysqli_query($koneksi, "SELECT *
    FROM peserta
    INNER JOIN barang
    ON peserta.id_peserta = barang.id_pemenang
    where barang.id_barang = '".$_GET['id_barang']."'");
    $data_lelang=mysqli_fetch_array($query_lelang);
?>
<div id="GFG">
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <h1 style="text-align:center">LAPORAN PEMENANG LELANG</h1>
                    <div class="card-body">
                </tr>
            </thead>
            <tbody>
                <tr>
                    <tr>
                        <h3 style="text-align:center">Detail Barang</h3>
                    </tr>
                    <tr>
                        <th scope="col">NAMA BARANG</th>
                        <td><?=$data_lelang['nama_barang']?></td>
                    </tr>
                    <tr>
                        <th scope="col">TAHUN BARANG</th>
                        <td><?=$data_lelang['tahun_barang']?></td>
                    </tr>
                    <tr>
                        <th scope="col">DESKRIPSI</th>
                        <td><?=$data_lelang['deskripsi']?></td>
                    </tr>
                    <tr>
                        <th scope="col">Harga</th>     
                        <td><?=$data_lelang['harga']?></td>               
                    </tr>
                </tr>
                <tr>
            </tbody>
        </table>
    </div>
    <br></br>
    <div class="container">
        <table class="table">
            <thead>
            </thead>
            <tbody>
                <tr>
                    <tr>
                        <h3 style="text-align:center">Data Pemenang</h3>
                    </tr>
                    <tr>
                        <th scope="col">NAMA</th>
                        <td><?=$data_lelang['nama']?></td>
                    </tr>
                    <tr>
                        <th scope="col">ALAMAT</th>
                        <td><?=$data_lelang['alamat']?></td>
                    </tr>
                    <tr>
                        <th scope="col">NOMOR TELEPONE</th>
                        <td><?=$data_lelang['tlp']?></td>
                </tr>
                <tr>
            </tbody>
        </table>
        </div>
    </div>
</div>    

<input type="button" value="print" onclick="printDiv()"> 
</body>
</html>
