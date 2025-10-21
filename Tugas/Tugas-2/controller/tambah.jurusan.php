<?php
include __DIR__ . '/../config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_jurusan = $_POST['nama_jurusan'];
    $deskripsi = $_POST['deskripsi'];

    $query = "INSERT INTO jurusan (nama_jurusan, deskripsi) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $nama_jurusan, $deskripsi);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: ../admin/data-jurusan-admin.php?success=1");
        exit();
    } else {
        header("Location: ../admin/tambah-jurusan.php?error=1");
        exit();
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>