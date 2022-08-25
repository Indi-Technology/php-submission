<?php
session_start();
    include '../../config/database.php';

    $id_kategori=$_POST["id_kategori"];
    $gambar=$_POST["gambar"];
    $sql_hapus_artikel_kategori = "delete from artikel where id_kategori=$id_kategori";
    $hapus_artikel_kategori=mysqli_query($kon,$sql_hapus_artikel_kategori);

    $sql="delete from kategori where id_kategori=$id_kategori";
    $hapus_kategori=mysqli_query($kon,$sql);


    //Menghapus file gambar

    if ($gambar!='gambar_default.png'){
        unlink("gambar_kategori/".$gambar);
    }

?>