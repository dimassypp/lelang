<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <div style= "background-image: url(./gambar/background_page.jpg); height:1000px">
</head>
<body>
    <?php
    include "navbar.php";
    ?>
    <br></br>
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header">
                <h1>List Barang</h1>
                <form method="POST" action="home.php" class="d-flex">
                    <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
                    <button class="btn btn-dark" type="submit">Search</button>
                </form>
            </div>
            <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID BARANG</th>
                    <th scope="col">NAMA BARANG</th>
                    <th scope="col">HARGA AWAL</th>
                    <th scope="col">FOTO</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include "koneksi.php";
                    if (isset($_POST['cari'])) {
                        $cari = $_POST['cari'];
                        $query_barang = mysqli_query($koneksi, "select * from barang where id_produk = '$cari' or nama_barang like '%$cari%'");
                    }
                    else{
                        $query_barang = mysqli_query($koneksi, "select * from barang");
                    }
                    while($data_barang = mysqli_fetch_array($query_barang)){
                ?>
                    <tr>
                        <td><?=$data_barang['id_barang']?></td>
                        <td><?=$data_barang['nama_barang']?></td>
                        <td><?="Rp".number_format($data_barang['harga'])." ,"?></td>
                        <td><img src="foto/<?=$data_barang['foto_barang']?>" width=100></td>
                        <td><?=$data_barang['status']?></td>
                        <td>
                            <?php if ($data_barang['status'] == 'ditutup'):?>
                                <a href="hapus_barang.php?id_barang=<?=$data_barang['id_barang']?>" class="btn btn-danger"
                                onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a>
                                <a href="detail_barang.php?id_barang=<?=$data_barang['id_barang']?>" class="btn btn-primary">Detail</a>
                            <?php else :?>    
                                <a href="hapus_barang.php?id_barang=<?=$data_barang['id_barang']?>" class="btn btn-danger"
                                onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a>
                                <a href="detail_barang.php?id_barang=<?=$data_barang['id_barang']?>" class="btn btn-primary">Detail</a>
                                <a href="ubah_barang.php?id_barang=<?=$data_barang['id_barang']?>" class="btn btn-success">Edit</a>
                            <?php endif;?>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
            <a href="tambah_barang.php" type="button" class="btn btn-dark">Tambah Barang</a>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>