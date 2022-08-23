<?php include './template/header.php' ?>
<h1 class="mt-3">Articles</h1>

<?php if (isset($_GET['msg'])) { ?>
    <?php if ($_GET['msg'] == "success") { ?>
        <div class="alert alert-primary" role="alert">
            Article has been updated successfully
        </div>
    <?php } elseif ($_GET['msg'] == "failed") { ?>
        <div class="alert alert-danger" role="alert">
            Failed to update article
        </div>
    <?php } elseif ($_GET['msg'] == "extensions") { ?>
        <div class="alert alert-warning" role="alert">
            Only JPG, JPEG, and PNG allowed
        </div>
    <?php } elseif ($_GET['msg'] == "size") { ?>
        <div class="alert alert-warning" role="alert">
            File size must be under 2 MB
        </div>
    <?php } elseif ($_GET['msg'] == "delete") { ?>
        <div class="alert alert-primary" role="alert">
            Article deleted successfully
        </div>
    <?php } elseif ($_GET['msg'] == "faileddelete") { ?>
        <div class="alert alert-danger" role="alert">
            Failed to delete article
        </div>
    <?php } ?>
<?php } ?>

<a href="insert.php" class="btn btn-primary mb-2">Add Article</a>

<div class="card card-body">
    <div class="container text-center">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            include 'config.php';

            $get = mysqli_query($db, "SELECT * FROM article ORDER BY title");
            while ($data = mysqli_fetch_array($get)) {
            ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/<?= $data['img']; ?>" class="h-100 w-100">
                        <div class="card-body">
                            <h5 class="card-title"><?= $data['title'] ?></h5>
                            <a href="detail.php?id=<?= $data['id'] ?>" class="btn btn-primary text-white">Detail</a>
                            <a href="edit.php?id=<?= $data['id'] ?>" class="btn btn-warning text-white">Edit</a>
                            <a href="delete.php?id=<?= $data['id'] ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</div>
<?php include './template/footer.php' ?>