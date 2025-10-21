<?php
include __DIR__ . '/../config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama_jurusan = $_POST['nama_jurusan'];
    $deskripsi = $_POST['deskripsi'];

    $query = "UPDATE jurusan SET nama_jurusan = ?, deskripsi = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssi", $nama_jurusan, $deskripsi, $id);

    if (mysqli_stmt_execute($stmt)) {
        echo "success";
    } else {
        echo "error";
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>