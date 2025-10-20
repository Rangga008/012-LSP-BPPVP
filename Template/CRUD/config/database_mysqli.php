<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "nama_database";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");
?>