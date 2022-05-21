<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas</title>
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
                <h1>List Petugas</h1>
                <form method="POST" action="tampil_petugas.php" class="d-flex">
                    <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
                    <button class="btn btn-dark" type="submit">Search</button>
                </form>
            </div>
            <div class="card-body">
            <table class="table">
                <thead>
                    <tr style="text-align:center">
                    <th scope="col">ID PETUGAS</th>
                    <th scope="col">NAMA PETUGAS</th>
                    <th scope="col">LEVEL</th>
                    <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include "koneksi.php";
                    if (isset($_POST['cari'])) {
                        $cari = $_POST['cari'];
                        $query_petugas = mysqli_query($koneksi, "select * from petugas where id_petugas = '$cari' or nama_petugas like '%$cari%'");
                    }
                    else{
                        $query_petugas = mysqli_query($koneksi, "select * from petugas");
                    }
                    while($data_petugas = mysqli_fetch_array($query_petugas)){
                ?>
                    <tr style="text-align:center">
                        <td class="text-center"><?=$data_petugas['id_petugas']?></td>
                        <td><?=$data_petugas['nama_petugas']?></td>
                        <td><?=$data_petugas['level']?></td>
                        <td>
                            <a href="ubah_petugas.php?id_petugas=<?=$data_petugas['id_petugas']?>" class="btn btn-success">Edit</a>
                            <a href="hapus_petugas.php?id_petugas=<?=$data_petugas['id_petugas']?>" class="btn btn-danger"
                            onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
            <a href="tambah_petugas.php" type="button" class="btn btn-dark">Tambah Petugas</a>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
