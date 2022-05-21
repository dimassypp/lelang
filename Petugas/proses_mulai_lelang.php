<?php
    include "koneksi.php";
    $id_barang= $_GET['id_barang'];
    $status = 'dibuka';

    $update = mysqli_query($koneksi,"UPDATE barang SET status = '".$status."' WHERE id_barang = '".$id_barang."'");
    if ($update) {
        echo "<script>alert('Anda Berhasil Membuka lelang');location.href='detail_barang.php?id_barang=$id_barang'</script>";
    }
    else{
        echo "<script>alert('Gagal membuka lelang');location.href='lihat_barang.php'</script>";
        // echo mysqli_error($koneksi);
    }
?>