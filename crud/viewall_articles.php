<?php
// Include navbar
include 'navbar.php';

// Include database configuration
require_once 'db_config.php';

// Get list of article from database
$result = $db->query("SELECT * FROM article ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>
        List of Articles
    </title>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/article.css">
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-between">
            <h1>List of Articles</h1>
            <a class="btn btn-primary btn-oval" href="add_article.php">Add Article</a>
        </div>

        <div class="card row">
            <div class="col">
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <div class="card-sm d-inline-block" style="width: 30rem;">
                        <a class="card-link" style="border: 0px;" href="view_article.php?view=<?php echo $row['id']; ?>">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize"><?php echo $row['title']; ?></h5>
                                <p class="card-text" style="color: #D8CDAC;"><?php echo substr_replace($row['content'], "...", 100); ?></p>
                            </div>
                        </a>
                    </div>

                    <!-- <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td>
                            <a href="view_article.php?view=<?php echo $row['id']; ?>">
                                <div>
                                    <?php echo $row['title']; ?>
                                </div>
                            </a>
                        </td>
                        <td><?php echo $row['content']; ?></td>
                        <td><img style="width: 300px" src="data:image/*;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /></td>
                        <td>
                            <a href="edit_article.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                            <a href="delete_article.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr> -->
            <?php endwhile; ?>
        </div>
    </div>
</body>

</html>
