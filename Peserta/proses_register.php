<?php

    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $tlp=$_POST['tlp'];
    $alamat=$_POST['alamat'];

    include "koneksi.php";
    $input = mysqli_query($koneksi, "INSERT INTO peserta (nama, username, password, alamat, tlp) VALUES ('{$nama}', '{$username}', '".md5($password)."', '{$alamat}', '{$tlp}')");

    if ($input) {
        echo "<script>alert('BERHASIL');location.href='index.php';</script>";
    }
    else{
        echo "<script>alert('gagal');location.href='index.php';</script>";
    }
?>