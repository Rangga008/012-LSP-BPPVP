<?php
if (!isset($_SESSION)) {
    session_start();
}
include '../config/database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM siswa WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: ../admin/data-siswa-admin.php?delete=1");
        exit();
    } else {
        header("Location: ../admin/data-siswa-admin.php?error=1");
        exit();
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>