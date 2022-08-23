<?php
include 'config.php';
if (isset($_GET['id'])) {
    if ($_GET['id'] != "") {

        $id = $_GET['id'];

        $get_img = "SELECT img FROM article WHERE id='$id'";
        $data_img = mysqli_query($db, $get_img);
        $old_img = mysqli_fetch_array($data_img);

        unlink("img/" . $old_img['img']);

        $query = mysqli_query($db, "DELETE FROM article WHERE id='$id'");
        if ($query) {
            header("location:index.php?msg=delete");
        } else {
            header("location:index.php?msg=faileddelete");
        }
    } else {
        header("location:index.php");
    }
} else {
    header("location:index.php");
}
