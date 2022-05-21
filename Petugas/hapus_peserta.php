<?php
    if($_GET['id_peserta']) {
        include "koneksi.php";
        $qry_hapus=mysqli_query($koneksi,"delete from peserta where id_peserta='".$_GET['id_peserta']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus peserta');location.href='tampil_peserta.php';</script>";
        }else {
            echo "<script>alert('Gagal hapus peserta');location.href='tampil_peserta.php';</script>";
        }
    }
?>    