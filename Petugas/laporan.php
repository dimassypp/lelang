<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <div style= "background-image: url(./gambar/background_page.jpg); height:10000px">

</head>
<body>
<?php
    include "navbar.php";
    ?>
    <br></br>
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header">
                <h1>LAPORAN LELANG</h1>
                <form action="proses_tutup.php" method="POST">
                    <input type="hidden" name="id_barang" value="<?=$data_barang['id_barang']?>">
                </form>    
            </div>
            <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID BARANG</th>
                    <th scope="col">NAMA BARANG</th>
                    <th scope="col">HARGA AKHIR</th>
                    <th scope="col">TANGGAL LELANG</th>
                    <th scope="col">PEMENANG LELANG</th>                    
                    <th scope="col">FOTO</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include "koneksi.php";
                    
                    $query_barang = mysqli_query($koneksi, "select * from barang where status = 'ditutup'");
                
                    while($data_barang = mysqli_fetch_array($query_barang)){
                        $query_pemenang = mysqli_query($koneksi, "SELECT * FROM peserta p
                        JOIN barang b ON b.id_pemenang = p.id_peserta WHERE
                        id_barang = '".$data_barang['id_barang']."'");
                        $data_pemenang = mysqli_fetch_array($query_pemenang);

                        $query_lelang = mysqli_query($koneksi, "SELECT * FROM lelang");
                        $data_lelang = mysqli_fetch_array($query_lelang);
                ?>
                    <tr>
                        <td><?=$data_barang['id_barang']?></td>
                        <td><?=$data_barang['nama_barang']?></td>
                        <td><?="Rp".number_format($data_barang['harga'])." ,"?></td>
                        <td><?=$data_lelang['tgl_lelang']?></td>  
                        <td>
                            <?php if($data_barang['status']=='ditutup') :?>
                            <?=$data_pemenang['nama']?>
                            <?php else: ?>
                                <div>belum dilelang</div>
                            <?php endif; ?>
                        </td>
                        <td><img src="foto/<?=$data_barang['foto_barang']?>" width=100></td>
                        <td><?=$data_barang['status']?></td>
                        <td><a href="cetak.php?id_barang=<?=$data_barang['id_barang']?>" class="btn btn-success">CETAK</a></td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>


</body>
</html>