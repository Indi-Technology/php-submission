<?php
error_reporting(0);
include 'config.php';

if (isset($_POST['submit'])) {

    $nama_wisata = $_POST['nama_wisata'];
    $deskripsi = $_POST['deskripsi'];
    $alamat = $_POST['alamat'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    $result = mysqli_query($koneksi, "INSERT INTO tb_wisata VALUES ('', '$nama_wisata','$deskripsi','$alamat', '$foto')");
    if (move_uploaded_file($tmp, 'img/' . $foto)) {
        if ($result) {
            echo "<script>alert('Data Berhasil Ditambahkan!');
            window.location.href='wisata.php'</script>";
        } else {
            echo "<script>alert('Data Gagal Ditambahkan!');
			window.location.href='wisata.php'</script>";
        }
    }
}
