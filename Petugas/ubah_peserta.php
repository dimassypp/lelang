<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <div style= "background-image: url(./gambar/background_page.jpg); height:1000px">
</head>
<body>
    <?php
        include "navbar.php";
        include "koneksi.php";
        $query_peserta = mysqli_query($koneksi, "select * from peserta where id_peserta='".$_GET['id_peserta']."'");
        $data_peserta = mysqli_fetch_array($query_peserta);
    ?>    
    <br></br>
    <div class="container col-md-8">
        <div class="card">
        <h3 class="card-header text-center">Ubah Peserta</h3>
            <div class="card-body">
            <form action = "proses_ubah_peserta.php" method="post">
                <input type="hidden" name="id_peserta" value="<?=$data_peserta['id_peserta']?>">
                Nama :
                <input type="text" name="nama" value="<?=$data_peserta['nama']?>" class="form-control" required>
                Alamat :
                <input type="text" name="alamat" value="<?=$data_peserta['alamat']?>" class="form-control" required>
                Username :
                <input type="text" name="username" value="" class="form-control" placeholder="Masukan Username peserta" required>
                Password :
                <input type="password" name="password" value="" class="form-control" placeholder="Masukan Password peserta" required>
                TELP :
                <input type="number" name="tlp" value="<?=$data_peserta['tlp']?>" class="form-control" required>
                <input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
            <form>    
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>