<?php
    session_start();
    if ($_SESSION['status_login'] != true) {
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LLNGGGGGG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="col-lg-6 col-md-8 mx-auto align-items-start">
          <form method="POST" action="tampil_barang.php" class="d-flex">
              <input class="form-control me-2" type="search" name="cari"
              placeholder="Cari Barang Disini" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
      </div>
      <div class="col-lg-2 col-md-6 mx-auto">
      </div>
        <ul class="navbar-nav">
        <li>
            <a class="nav-link" href="#"><?php echo $_SESSION['nama'];?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="tampil_barang.php">Daftar Barang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="riwayat_lelang.php">lelang</a>
          </li>
          <li>
            <a class="nav-link" href="proses_logout.php">Logout</a>
          </li>
        </ul>
    </div>
  </div>
</nav>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>    