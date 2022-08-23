<?php
include 'config.php';

$title = $_POST['title'];
$description = $_POST['description'];
$img_name = $_FILES['img']['name'];
$img_size = $_FILES['img']['size'];

if ($img_size > 2097152) {
    header("location:insert.php?msg=size");
} else {

    if ($img_name != "") {

        $allowed_extension = array('png', 'jpg', 'jepg');
        $splitFilename = explode('.', $img_name);
        $extension = strtolower(end($splitFilename));
        $file_tmp = $_FILES['img']['tmp_name'];
        $date = md5(date('Y-m-d h:i:s'));
        $img_name_new = $date . '-' . $img_name;

        if (in_array($extension, $allowed_extension) === true) {
            move_uploaded_file($file_tmp, 'img/' . $img_name_new);

            $query = mysqli_query($db, "INSERT INTO article VALUES ('','$title', '$description',  '$img_name_new')");

            if ($query) {
                header("location:insert.php?msg=success");
            } else {
                header("location:insert.php?msg=failed");
            }
        } else {
            header("location:insert.php?msg=extensions");
        }
    } else {

        $query = mysqli_query($db, "INSERT INTO film(title, description) VALUES ('$title', '$description')");

        if ($query) {
            header("location:insert.php?msg=success");
        } else {
            header("location:insert.php?msg=failed");
        }
    }
}
