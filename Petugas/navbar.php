<?php
    session_start();
    if ($_SESSION['status_login'] != true) {
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="navbar.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LLNGGGGGG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="tampil_barang.php">Barang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tampil_petugas.php">Petugas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tampil_peserta.php">Peserta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="laporan.php">Histori</a>
            </li>
        </ul>
        <div class="col-lg-6 col-md-8 mx-auto">
        </div>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="proses_logout.php">Logout</a>
            </li>
        </ul>
    </div>
  </div>
</nav>
<script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>    