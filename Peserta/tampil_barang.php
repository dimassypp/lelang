<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <div style= "background-image: url(./gambar/background_page.png); height:2000px; weight:1000px">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

</head>
<body>
    <?php
    include "navbar.php"
    ?>
    <div class="container col-md-12 py-5">
      <div class="card">  
          <main>
          <div class="album py-3 bg-light">
            <div class="container">
            <h1 style="text-align:center">Daftar Barang</h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
              <table class="table">
              <thead> 
              <?php
              include "koneksi.php";
              if (isset($_POST['cari'])){
                $cari = $_POST['cari'];
                $query_barang = mysqli_query($koneksi, "select * from barang where id_barang = '$cari' or nama_barang like '%$cari%'");
              }
              else{
                $query_barang = mysqli_query($koneksi, "select * from barang");
              }
              while($data_barang = mysqli_fetch_array($query_barang)){
              ?>
              <tr>
              <div class="col-md-2">
                <div class="card shadow-sm">
                    <img src="../Petugas/foto/<?=$data_barang['foto_barang']?>" 
                    class="bd-placeholder-img card-img-top" width="270px" height="150px"
                    xmlns="http://www.w3.org/2000/svg" role="img"
                    aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" 
                    focusable="false"><title></title>
                    <rect width="100%" height="100%" fill="#55595c"/></img>

                    <div class="card-body">
                    <p class="card-text"><?=$data_barang['nama_barang']?></p>
                    <p class="card-text"><?="Rp".number_format($data_barang['harga'])." ,";?></b></p>
                    <p class="card-text">Status : <?=$data_barang['status']?></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <a href="lihat_barang.php?id_barang=<?=$data_barang['id_barang']?>" type="button" class="btn btn-sm btn-outline-secondary">Lihat</a>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              </tr>
              </thead>
              <?php
              }
              ?>
              </table> 
              </div>
              </div>
            </div>
          </main>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>