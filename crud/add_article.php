<?php
    // Include navbar
    include 'navbar.php';

    // Include database configuration file
    require_once 'db_config.php';

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        if (!empty($_FILES['image']['name'])) {
            $image = $_FILES['image']['tmp_name'];
            $img_content = addslashes(file_get_contents($image));

            // Insert article into database
            $result = $db->query("INSERT INTO article (title, content, image) VALUES('$title', '$content', '".$img_content."')");
        } else {
            $result = $db->query("INSERT INTO article (title, content) VALUES('$title', '$content')");
        }

        if ($result) {
            header('location:viewall_articles.php');
        }

    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Article</title>
    </head>
    <body>
        <div class="container">
            <h1 class="title">Write Article</h1>
            <div class="card">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <input type="text" name="content" class="form-control content" required>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" accept="image/*" name="image" class="form-control">
                    </div>
                    <div class="text-center">
                        <a class="btn btn-sq sec" href="viewall_articles.php">Cancel</a>
                        <button class="btn btn-sq" type="submit" class="btn btn-primary" name="submit">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
