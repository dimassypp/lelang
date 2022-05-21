<?php
    include "koneksi.php";

    $id_barang = $_GET['id_barang'];
    $folder = "foto/";

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

    $sql = "DELETE FROM barang where id_barang = '$id_barang'";

    $result = mysqli_query($koneksi,$sql);

    if ($result) {
        echo "<script>alert('Berhasil');location.href='tampil_barang.php';</script>";
    }
    else {
        echo "<script>alert('Gagal');</script>";
        echo mysqli_error($koneksi);
    }
?>