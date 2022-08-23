<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db_name = 'articles';

$db = mysqli_connect($server, $user, $password, $db_name);

if (!$db) {
    die('gagal terhubung ke database' . mysqli_connect_error());
}
