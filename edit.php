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

    <title>Edit Article Page</title>
</head>

<body>
    <div class="container mt-5 ">
        <center class="mb-5">
            <h2>Edit Article</h2>
        </center>
        <hr>
        <form action="do_edit.php" class="row g-3  mb-4" method="post" enctype="multipart/form-data">
            <div class="col-12">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?= $row['title']; ?>">
                <input type="hidden" name="id" class="form-control" value="<?= $row['id']; ?>">
            </div>
            <div class="col-md-12">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" rows="3" class="form-control" name="description"><?= $row['description'] ?></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Cover</label>
                <input type="file" name="img" class="form-control">
                <br>
                <?php
                if ($row['img']) : ?>
                    <img src="img/<?= $row['img']; ?>" style="width:100px;height:100px;">
                <?php endif ?>
            </div>
            <div class="mb-3">
                <a href="index.php" class="btn btn-danger">Kembali</a>
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>

    </div>
</body>

</html>