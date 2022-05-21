<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar lelang</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <div style= "background-image: url(./gambar/background_page.png); height:20000px; weight:1000px">
</head>
<body>
    <?php
        include "navbar.php";
        include "koneksi.php";
        $query_detail_barang = mysqli_query($koneksi, "SELECT * FROM barang where id_barang = '".$_GET['id_barang']."'");
        $data_barang = mysqli_fetch_array($query_detail_barang);
        
        $query_pemenang = mysqli_query($koneksi, "SELECT * FROM peserta where id_peserta = '".$data_barang['id_pemenang']."'");
        $data_pemenang = mysqli_fetch_array($query_pemenang);

    ?>
    <div class="container col-md-12 py-5">
        <main class="container">     
            <div class="card">
                <div class="card mb-3" style="max-width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="../Petugas/foto/<?=$data_barang['foto_barang']?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <form action="proses_tawar.php" method="POST">
                                <input type="hidden" name="id_barang" value="<?=$data_barang['id_barang']?>">
                                <input type="hidden" name="harga" value="<?=$data_barang['harga']?>">
                                <table class="table table-striped">
                                    <h1 style="text-align:center">Detail Barang</h1>
                                    <thead>
                                        <?php if($data_barang['status'] == 'dibuka') :?>
                                        <tr>
                                            <td>Nama Barang</td>
                                            <td><?=$data_barang['nama_barang']?></td>
                                        </tr>
                                        <tr>
                                            <td>Status Lelang</td>
                                            <td><?=$data_barang['status']?></td>
                                        </tr>
                                        <tr>
                                            <td>Harga tertinggi saat ini</td>
                                            <td><?="Rp".number_format($data_barang['harga'])." ,"?></td>
                                        </tr>
                                        <tr>
                                            <td><?php if(isset($data_pemenang['nama'])) echo 'Penawar Tertinggi'?></td>
                                            <td><?php if(isset($data_pemenang['nama'])) echo $data_pemenang['nama']?></td>
                                        </tr>
                                        <?php elseif($data_barang['status'] == 'ditutup') :?>
                                        <tr>
                                            <td>Nama Mobil</td>
                                            <td><?=$data_barang['nama_barang']?></td>
                                        </tr>
                                        <tr>
                                            <td>Tahun</td>
                                            <td><?=$data_barang['tahun_barang']?></td>
                                        </tr>
                                        <tr>
                                            <td>Deskripsi</td>
                                            <td><?=$data_barang['deskripsi']?></td>
                                        </tr>
                                        <tr>
                                            <td>Status Lelang</td>
                                            <td><?=$data_barang['status']?></td>
                                        </tr>
                                        <tr>
                                            <td>Terlelang dgn Harga</td>
                                            <td><?="Rp".number_format($data_barang['harga'])." ,"?></td>
                                        </tr>
                                        <tr>
                                            <?php if(isset($data_pemenang['nama'])):?>
                                                <td>Pemenang Lelang</td>
                                                <td><?=$data_pemenang['nama']?></td>
                                            <?php endif; ?>
                                        </tr>
                                        <?php else : ?>
                                        <tr>
                                            <td>Nama Barang</td>
                                            <td><?=$data_barang['nama_barang']?></td>
                                        </tr>
                                        <tr>
                                            <td>Tahun</td>
                                            <td><?=$data_barang['tahun_barang']?></td>
                                        </tr>
                                        <tr>
                                            <td>Deskripsi</td>
                                            <td><?=$data_barang['deskripsi']?></td>
                                        </tr>
                                        <tr>
                                            <td>Status Lelang</td>
                                            <td><?=$data_barang['status']?></td>
                                        </tr>
                                        <?php endif; ?>
                                    </thead>
                                </table>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="container col-md-12 py-5">
                <div class="card">
                    <div class="card-header">
                        <?php if($data_barang['status'] == 'dibuka') :?>
                            <main class="container">
                                <section class="py-5 text-center container">
                                    <div class="col-lg-6 col-md-8 mx-auto">
                                        <h1 class="fw-light">Penawaran</h1>
                                    </div>
                                </section>
                                <div class="card mb-3" style="max-width: 100%;">
                                <div class="row g-0">
                                <form action="proses_tawar.php" method="POST">
                                <input type="hidden" name="id_barang" value="<?=$data_barang['id_barang']?>">
                                <input type="hidden" name="harga" value="<?=$data_barang['harga']?>">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <td>Tawar dengan:</td>
                                            <td><input type="number" name="harga_tawar" value="1"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><input type="submit" class="btn btn-success" value="Tawar"></td>
                                        </tr>
                                    </thead>
                                </table>
                                </form>
                                </div>
                                </div>
                        <?php else: ?>
                        <h1 style="text-align:center">RIWAYAT LELANG</h1>
                        <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr style="text-align:left">
                                    <th scope="col">NAMA PESERTA</th>
                                    <th scope="col">HARGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if ($data_barang['status'] == 'ditutup'){
                                    $query_lelang=mysqli_query($koneksi, "
                                    SELECT lelang.id_barang, lelang.id_peserta, lelang.harga, peserta.nama 
                                    FROM lelang
                                    JOIN peserta ON peserta.id_peserta = lelang.id_peserta where id_barang = '".$_GET['id_barang']."'
                                    ORDER BY harga DESC");

                                    while($data_lelang = mysqli_fetch_array($query_lelang)){
                                ?>
                                    <tr style="text-align:left">
                                        <td><?=$data_lelang['nama']?></td>
                                        <td><?="Rp".number_format($data_lelang['harga'])." ,"?></td>
                                    </tr>                
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </main>
</body>
</html>