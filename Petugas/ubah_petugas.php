<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Ubah Petugas</title>
    <div style= "background-image: url(./gambar/background_page.jpg); height:1000px">
</head>
<body>
    <?php
    include "navbar.php";
    include "koneksi.php";
    $query_petugas = mysqli_query($koneksi, "select * from petugas where id_petugas='".$_GET['id_petugas']."'");
    $data_petugas = mysqli_fetch_array($query_petugas);
    ?>
    <br></br>
    <div class="container col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center" >Ubah Petugas</h3>
                <form action="proses_ubah_petugas.php" method="post">
                <input type="hidden" name="id_petugas" value="<?=$data_petugas['id_petugas']?>">
                    <div>
                        Nama :
                        <input type="text" name="nama_petugas" value="<?=$data_petugas['nama_petugas']?>" class="form-control" required>
                    </div>
                    <div>
                        Username :
                        <input type="text" name="username" value="<?=$data_petugas['username']?>" class="form-control" required>
                    </div>
                    <div>
                        Password :
                        <input type="password" name="password" value="" class="form-control" required>
                    </div>
                        Level :
                        <select name="level" class="form-select" aria-label="Default select example">
                            <option value="<?$data_petugas['level']?>"></option>>
                            <option value="admin"> Admin </option>
                            <!-- <option value="petugas"> Petugas </option> -->
                    </div>
                    </select>
                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                <form> 
            </div>
        </div>   
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>