<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Petugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <div style= "background-image: url(./gambar/background_page.jpg); height:1000px">
</head>
<body>
    <?php
    include "navbar.php";
    ?>
    <br>
    </br>
    <div class="container col-md-6">
        <div class="card">
            <h1 class="card-header" style="text-align:center">Tambah Petugas</h1>
            <div class="card-body">
            <form action = "proses_tambah_petugas.php" method="post">
                <div>
                    Nama :
                    <input type="text" name="nama_petugas" value="" class="form-control" required>
                </div>
                <div>
                    Username :
                    <input type="text" name="username" value="" class="form-control" required>
                </div>
                <div>
                    Password :
                    <input type="password" name="password" value="" class="form-control" required>
                </div>
                <div>
                    Level :
                    <select name="level" class="form-select" aria-label="Default select example">
                        <option value="">-- Silahkan Pilih Level --</option>>
                        <option value="admin"> Admin </option>
                        <!-- <option value="petugas"> Petugas </option> -->
                    </select>
                </div>
                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
            <form>
            </div>    
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>