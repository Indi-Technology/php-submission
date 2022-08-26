<?php
// Include navbar
include 'navbar.php';

// Edit article
require_once 'db_config.php';
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $result = mysqli_query($db, "SELECT * FROM article WHERE id=$id");

    if ($result) {
        $row = mysqli_fetch_array($result);
        $title = $row['title'];
        $content = $row['content'];
        $image = $row['image'];
    }
}

if (isset($_POST['update'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['tmp_name'];
        $img_content = addslashes(file_get_contents($image));
        $sql = "UPDATE article SET title='$title', content='$content', image='" . $img_content . "' WHERE id=$id";
    } else {
        $sql = "UPDATE article SET title='$title', content='$content' WHERE id=$id";
    }

    $result = $db->query($sql);

    if ($result) {
        header('location:viewall_articles.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Article</title>
</head>

<body>
    <div class="container">
        <h1 class="title">Edit Article</h1>
        <div class="card">
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="<?php echo $title; ?>" required>
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <input type="text" name="content" class="form-control content" value="<?php echo $content; ?>" required>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <span>
                        <input type="file" accept="image/*" name="image" class="form-control" value="<?php echo base64_encode($image); ?>">
                    </span>
                </div>
                <div class="text-center">
                    <a class="btn btn-sq sec" href="viewall_articles.php">Cancel</a>
                    <button class="btn btn-sq" type="submit" class="btn btn-primary" name="update">Update</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
