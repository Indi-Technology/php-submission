<?php
// Database configuration
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "php_assignment";

// Create database connection
$db = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
