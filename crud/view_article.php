<?php
// Include navbar
include 'navbar.php';

// Include database configuration
require_once 'db_config.php';

// View an article
if (isset($_GET['view'])) {
    $id = $_GET['view'];

    $result = mysqli_query($db, "SELECT * FROM article WHERE id=$id");

    if ($result) {
        $row = mysqli_fetch_array($result);
        $title = $row['title'];
        $content = $row['content'];
        $image = $row['image'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Article Details</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1 class="title"><?php echo $title; ?></h1>
            <?php
                if(isset($row['image']) && !empty($row['image'])){ ?>
                    <div class="text-center">
                        <img style="width: 100%; margin-bottom: 2%" src="data:image/*;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />
                    </div>
            <?php } ?>
            <div><?php echo $content; ?></div>
        </div>

        <div class="container">
            <div class="row justify-content-end">
                    <a class="btn btn-oval danger" href="delete_article.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete Article</a>
                    <a class="btn btn-oval" href="edit_article.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit Article</a>
            </div>
        </div>
</body>

</html>
