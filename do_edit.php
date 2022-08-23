<?php
include 'config.php';
if (isset($_POST['id'])) {

    if ($_POST['id'] != "") {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $img_name = $_FILES['img']['name'];
        $img_size = $_FILES['img']['size'];
    } else {
        header("location:index.php");
    }
    if ($img_size > 2097152) {
        header("location:index.php?msg=size");
    } else {

        if ($img_name != "") {

            $allowed_extension = array('png', 'jpg', 'jepg');
            $splitFilename = explode('.', $img_name);
            $extension = strtolower(end($splitFilename));
            $file_tmp = $_FILES['img']['tmp_name'];
            $date = md5(date('Y-m-d h:i:s'));
            $img_name_new = $date . '-' . $img_name;

            if (in_array($extension, $allowed_extension) === true) {

                $get_img = "SELECT img FROM article WHERE id='$id'";
                $data_img = mysqli_query($db, $get_img);

                $old_img = mysqli_fetch_array($data_img);

                unlink("img/" . $old_img['img']);

                move_uploaded_file($file_tmp, 'img/' . $img_name_new);

                $query = mysqli_query($db, "UPDATE article SET title='$title', description='$description', img='$img_name_new' WHERE id='$id'");

                if ($query) {
                    header("location:index.php?msg=success");
                } else {
                    header("location:index.php?msg=failed");
                }
            } else {
                header("location:index.php?msg=extensions");
            }
        } else {

            $query = mysqli_query($db, "UPDATE article SET title='$title', description='$description'  WHERE id='$id'");

            if ($query) {
                header("location:index.php?msg=success");
            } else {
                header("location:index.php?msg=failed");
            }
        }
    }
} else {
    header("location:index.php");
}
