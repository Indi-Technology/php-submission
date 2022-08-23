<?php
include 'config.php';
if (isset($_GET['id'])) {
    if ($_GET['id'] != "") {

        $id = $_GET['id'];

        $query = mysqli_query($db, "SELECT * FROM article WHERE id='$id'");
        $row = mysqli_fetch_array($query);
    } else {
        header("location:index.php");
    }
} else {
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Detail Article - <?= $row['title'] ?></title>
</head>

<body>
    <div class="container mt-5 ">
        <center class="mb-5">

            <div class="card border-0 my-5" style="width: 30rem;">
                <h2 class="card-title mb-4"><?= $row['title']  ?></h2>
                <img src="img/<?= $row['img'] ?>" class="w-100 h-100 img-fluid card-img-top">
            </div>

        </center>
        <p class="text-justify"><?= $row['description'] ?></p>

        <a href="index.php" class="btn btn-danger">Kembali</a>

    </div>
</body>

</html>