<?php

include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Add Article</title>
</head>

<body>
    <div class="container mt-5 ">
        <center class="mb-5">
            <h2>Input Article Data</h2>
        </center>
        <hr>
        <?php if (isset($_GET['msg'])) { ?>
            <?php if ($_GET['msg'] == "success") { ?>
                <div class="alert alert-primary" role="alert">
                    Article has been added successfully
                </div>
            <?php } elseif ($_GET['msg'] == "failed") { ?>
                <div class="alert alert-danger" role="alert">
                    Failed to add article
                </div>
            <?php } elseif ($_GET['msg'] == "extensions") { ?>
                <div class="alert alert-warning" role="alert">
                    Only JPG, JPEG, and PNG allowed
                </div>
            <?php } elseif ($_GET['msg'] == "size") { ?>
                <div class="alert alert-warning" role="alert">
                    File size must be under 2 MB
                </div>
            <?php } ?>
        <?php } ?>
        <br>

        <form action="do_insert.php" class="row g-3  mb-4" method="post" enctype="multipart/form-data">
            <div class="col-12">
                <label for="title" class="form-label"> Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="col-md-12">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" id="description" rows="3" class="form-control" name="description"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Cover</label>
                <input type="file" name="img" class="form-control">
            </div>
            <div class="mb-3">
                <a href="index.php" class="btn btn-danger">Back</a>
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>

    </div>
</body>

</html>