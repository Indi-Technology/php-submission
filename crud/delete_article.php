<?php
    // Include database configuration file
    require_once 'db_config.php';
    
    // Delete article  
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $result = $db->query("DELETE FROM article WHERE id=$id");

        if ($result) {
            header('location:viewall_articles.php');
            // $_SESSION['message'] = "Article has been deleted!";
            // $_SESSION['msg_type'] = "danger";
        }
    }
?>
