<?php
    $id_barang= $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $tahun = $_POST['tahun_barang'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    

    $temp = $_FILES['foto_barang']['tmp_name'];
    $type = $_FILES['foto_barang']['type'];
    $size = $_FILES['foto_barang']['size'];
    $name = rand(0,9999).$_FILES['foto_barang']['name'];
    $folder = "foto/";

    // echo $id_barang;

    include "koneksi.php";
    // mendapatkan data barang yang diubah
    $sql = "select * from barang where id_barang='$id_barang'";
    # eksekusi perintah SQL
    $query = mysqli_query($koneksi, $sql);
    # konversi ke array
    $barang = mysqli_fetch_array($query);

    # proses hapus file yg lama
    $path = $folder.$barang["foto_barang"];

    # cek eksistensi file yg akan dihapus
    if (file_exists($path)) {
        # jika file yg lama ada, maka kita hapus
        unlink($path);
    }

    # upload file yg baru
    move_uploaded_file($temp, $folder . $name);

    # proses update data yg ada di database
    $sql = "update barang set nama_barang='$nama_barang',
    tahun_barang='$tahun', harga='$harga', deskripsi='$deskripsi',
    foto_barang='$name' where id_barang='$id_barang'";

    # eksekusi perintah update
    $result = mysqli_query($koneksi,$sql);

    if ($result) {
        echo "<script>alert('Berhasil');location.href='tampil_barang.php';</script>";
    }
    else {
        echo "<script>alert('Gagal');</script>";
        echo mysqli_error($koneksi);
    }
    
?>