<?php
    session_start();
    include "koneksi.php";
    $id_barang = $_POST['id_barang'];
    $jumlah_harga_tawar = $_POST['harga_tawar'];
    $harga = $_POST['harga'];

        if ($jumlah_harga_tawar <= $harga) {
            echo "<script>alert('Tawaran tidak boleh dibawah harga lelang / harga saat ini');location.href='lihat_barang.php?id_barang=$id_barang'</script>";
        }else {
            $qry = mysqli_query($koneksi,"select * from laporan_lelang where id_peserta = '".$_SESSION['id_peserta']."' and id_barang = '".$id_barang."' ");
            if(mysqli_num_rows($qry) > 0){
                mysqli_query($koneksi,"UPDATE laporan_lelang SET harga = '".$jumlah_harga_tawar."', WHERE id_peserta = '".$_SESSION['id_peserta']."'");

                $query_lelang = mysqli_query($koneksi, "INSERT INTO lelang (id_barang, tgl_lelang, harga, id_peserta)
                VALUES ('".$id_barang."', '".date('Y-m-d')."', '".$jumlah_harga_tawar."', '".$_SESSION['id_peserta']."' )");
                mysqli_query($koneksi,"UPDATE barang SET harga = '".$jumlah_harga_tawar."', id_pemenang = '".$_SESSION['id_peserta']."' WHERE id_barang = '".$id_barang."'");
                
                if ($query_lelang) {
                    echo "<script>alert('Anda Berhasil Menawar');location.href='lihat_barang.php?id_barang=$id_barang'</script>";
                }
                else{
                    echo "<script>alert('Gagal Menawar');location.href='lihat_barang.php?id_barang=$id_barang'</script>";
                    // echo mysqli_error($koneksi);
                }
            }else {       

                $query_laporan_lelang = mysqli_query($koneksi, "INSERT INTO laporan_lelang (id_barang, id_peserta, harga, tgl_lelang)
                VALUES ('".$id_barang."', '".$_SESSION['id_peserta']."', '".$jumlah_harga_tawar."', '".date('Y-m-d')."' )");

                $query_lelang = mysqli_query($koneksi, "INSERT INTO lelang (id_barang, tgl_lelang, harga, id_peserta)
                VALUES ('".$id_barang."', '".date('Y-m-d')."', '".$jumlah_harga_tawar."', '".$_SESSION['id_peserta']."' )");

                mysqli_query($koneksi,"UPDATE barang SET harga = '".$jumlah_harga_tawar."', id_pemenang = '".$_SESSION['id_peserta']."' WHERE id_barang = '".$id_barang."'");

        
                if ($query_lelang) {
                    echo "<script>alert('Anda Berhasil Menawar');location.href='lihat_barang.php?id_barang=$id_barang'</script>";
                }
                else{
                    echo "<script>alert('Gagal Menawar');location.href='lihat_barang.php?id_barang=$id_barang'</script>";
                    // echo mysqli_error($koneksi);
                }

            }    
        }
?>