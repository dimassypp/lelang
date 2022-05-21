<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histori lelang</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <div style= "background-image: url(./gambar/background_page.png); height:10000px">  

</head>
<body>
    <?php
        include "navbar.php";
    ?>
    <br></br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Lelang yang pernah anda ikuti</h1>
            </div>
            <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">NAMA BARANG</th>
                    <th scope="col">TANGGAL LELANG</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include "koneksi.php";
                    $query_lelang = mysqli_query($koneksi, "SELECT *
                    FROM barang
                    INNER JOIN laporan_lelang
                    ON barang.id_barang = laporan_lelang.id_barang
                    where laporan_lelang.id_peserta = '".$_SESSION['id_peserta']."' and status = 'ditutup' ");

                    $query_barang = mysqli_query($koneksi, "SELECT * FROM barang where status = 'ditutup'");
                    $data_barang = mysqli_fetch_array($query_barang);
                    $no=0;
                    while($data_lelang=mysqli_fetch_array($query_lelang)){
                        $no++;
                    ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$data_lelang['nama_barang']?></td>
                        <td><?=$data_lelang['tgl_lelang']?></td>
                        <?php
                            include "koneksi.php";
                            if($data_lelang['status']=='ditutup'){
                                if ($data_lelang['id_pemenang'] == $_SESSION['id_peserta'] ){
                                    echo "<td><label class='alert alert-success'>MENANG<br></label></td>";
                                }else{
                                    echo "<td><label class='alert alert-danger'> KALAH <br></label></td>";
                                }
                            }else{
                                echo "<td>Lelang Sedang Berjalan</td>";
                            }    
                           ?>
                        <td>
                            <a href="lihat_barang.php?id_barang=<?=$data_lelang['id_barang']?>" class="btn btn-primary">LIHAT</a>
                            <?Php if ($data_lelang['id_pemenang'] == $_SESSION['id_peserta'] ): ?>
                            <a href="cetak.php?id_barang=<?=$data_lelang['id_barang']?>" class="btn btn-success">CETAK</a>
                            <?php endif; ?>
                        </td>                        
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>


</body>
</html>