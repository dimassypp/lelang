<?php
    
    $id_peserta=$_POST['id_peserta'];
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $tlp=$_POST['tlp'];
    $alamat=$_POST['alamat'];
    
    include "koneksi.php";
    $update=mysqli_query($koneksi,"update peserta set nama='".$nama."', username='".$username."', password='".md5($password)."', alamat='".$alamat."', tlp='".$tlp."' where id_peserta = '".$id_peserta."' ") or die(mysqli_error($koneksi));
        if($update){
            echo "<script>alert('Sukses update peserta');location.href='tampil_peserta.php';</script>";
        } else {
            "<script>alert('Gagal update peserta');location.href='ubah_peserta.php?id_peserta=".$id_peserta."';</script>";
        }
?>