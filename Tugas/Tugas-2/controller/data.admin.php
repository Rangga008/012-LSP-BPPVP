<?php
include '../config/database.php';

$query = "SELECT id, username FROM admin ORDER BY id ASC";
$result = mysqli_query($conn, $query);

$dataAdmin = [];
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $dataAdmin[] = $row;
    }
    mysqli_free_result($result);
}

mysqli_close($conn);
?>