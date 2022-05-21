<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <div style= "background-image: url(./gambar/background_page.jpg); height:1000px">
</head>
<body>
    <?php
    include "navbar.php";
    ?>
    <br></br>
    <div class="container col-md-10" >
        <div class="card">
            <div class="card-header">
                <h1>List Peserta</h1>
                <form method="POST" action="tampil_peserta.php" class="d-flex">
                    <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
                    <button class="btn btn-dark" type="submit">Search</button>
                </form>
            </div>
            <div class="card-body">
            <table class="table">
                <thead>
                    <tr style="text-align:center">
                    <th scope="col">ID PESERTA</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">TELP</th>
                    <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include "koneksi.php";
                    if (isset($_POST['cari'])) {
                        $cari = $_POST['cari'];
                        $query_peserta = mysqli_query($koneksi, "select * from peserta where id_peserta = '$cari' or nama like '%$cari%'");
                    }
                    else{
                        $query_peserta = mysqli_query($koneksi, "select * from peserta");
                    }
                    while($data_peserta = mysqli_fetch_array($query_peserta)){
                ?>
                    <tr style="text-align:center">
                        <td class="text-center"><?=$data_peserta['id_peserta']?></td>
                        <td><?=$data_peserta['nama']?></td>
                        <td><?=$data_peserta['alamat']?></td>
                        <td><?=$data_peserta['tlp']?></td>
                        <td>
                            <a href="ubah_peserta.php?id_peserta=<?=$data_peserta['id_peserta']?>" class="btn btn-success">Edit</a>
                            <a href="hapus_peserta.php?id_peserta=<?=$data_peserta['id_peserta']?>" class="btn btn-danger"
                            onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
            <a href="tambah_peserta.php" type="button" class="btn btn-dark">Tambah Peserta</a>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
