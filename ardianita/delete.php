<?php
error_reporting(0);
include 'config.php';

if (isset($_POST['hapus'])) {

    $id_wisata = $_POST['id_wisata'];

    $result = mysqli_query($koneksi, "DELETE from tb_wisata where id_wisata = '$id_wisata'");

    if (!$result) {
        echo "<script>alert('Data Gagal Dihapus');
            window.location.href='wisata.php'</script>";
    } else {
        echo "<script>alert('Data Berhasil Dihapus');
            window.location.href='wisata.php'</script>";
    }
}
