<?php
error_reporting(0);
include 'config.php';

if (isset($_POST['edit'])) {
    $id_wisata = $_POST['id_wisata'];
    $nama_wisata = $_POST['nama_wisata'];
    $deskripsi = $_POST['deskripsi'];
    $alamat = $_POST['alamat'];
    $foto = $_FILES['foto']['name'];
    $ekstensi = explode('.', $foto);
    $foto_baru = $foto;
    $tmp = $_FILES['foto']['tmp_name'];
    $path = 'img/' . $foto;

    if ($foto == '') {
        $query = "UPDATE tb_wisata SET nama_wisata = '$nama_wisata', deskripsi = '$deskripsi', alamat = '$alamat' WHERE id_wisata = '$id_wisata'";
    } else {
        $file = mysqli_query($koneksi, "SELECT * FROM tb_wisata WHERE id_wisata = '$id_wisata'");
        $hasil = mysqli_fetch_array($file);
        $foto_lama = $hasil['foto'];
        unlink("img/" . $foto_lama);

        if (move_uploaded_file($tmp, $path)) {
            $query = "UPDATE tb_wisata SET nama_wisata = '$nama_wisata', deskripsi = '$deskripsi', alamat = '$alamat', foto = '$foto_baru' WHERE id_wisata = '$id_wisata'";
        }
    }

    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        echo "<script>alert('Data Gagal Diubah!');
            window.location.href='wisata.php'</script>";
    } else {
        echo "<script>alert('Data Berhasil Diubah');
            window.location.href='wisata.php'</script>";
    }
}
