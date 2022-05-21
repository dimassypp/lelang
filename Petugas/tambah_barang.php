<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <div style= "background-image: url(./gambar/background_page.jpg); height:1000px">
</head>
<body>
    <?php
        include "navbar.php";
    ?>
    <br></br>
    <div class="container">
        <div class="card">
            <h1 class="card-header" style="text-align:center">Tambah Barang</h1>
            <div class="card-body">
                <form method="POST" action="proses_tambah_barang.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" placeholder="Masukkan Nama Barang" required>
                    </div>
                    <div class="mb-3">
                        <label for="tahun_barang" class="form-label">Tahun Barang</label>
                        <input type="year" class="form-control" name="tahun_barang" placeholder="Masukkan Tahun Barang" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga_awal" class="form-label">Harga</label>
                        <input type="number" class="form-control" name="harga" placeholder="Masukkan Harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" row="3" placeholder="Masukkan Deskripsi Produk" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="foto_barang" class="form-label">Foto</label>
                        <input type="file" class="form-control" name="foto_barang" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>