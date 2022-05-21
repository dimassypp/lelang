<?php
    $nama_barang = $_POST['nama_barang'];
    $tahun = $_POST['tahun_barang'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $status = "belum dibuka";
    

    $temp = $_FILES['foto_barang']['tmp_name'];
    $type = $_FILES['foto_barang']['type'];
    $size = $_FILES['foto_barang']['size'];
    $name = rand(0,9999).$_FILES['foto_barang']['name'];
    $folder = "foto/";

    include "koneksi.php";

    if($size < 2048000 and ($type == "image/jpeg" or $type == "image/png" or $type == "image/jpg"))
    {
        move_uploaded_file($temp, $folder . $name);

        $input = mysqli_query($koneksi, "INSERT INTO barang (nama_barang,
        tahun_barang, harga, deskripsi, foto_barang, status) VALUES ('".$nama_barang."',
        '".$tahun."', '".$harga."', '".$deskripsi."', '".$name."', '".$status."')");

        if($input){
            echo "<script>alert('Berhasil');
            location.href='tampiL_barang.php';</script>";
        } else {
            echo "<script>alert('Gagal');
            location.href='tambah_barang.php';</script>";
            // die ('Gagal!' .mysqli_error($koneksi));
        }
    }
    else {
        echo "<script>alert('File tidak sesuai');
        location.href='tambah_barang.php';</script>";
    }

?>