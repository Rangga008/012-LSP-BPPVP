<?php
include __DIR__ . '/../config/database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM jurusan WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: ../admin/data-jurusan-admin.php?delete=1");
        exit();
    } else {
        header("Location: ../admin/data-jurusan-admin.php?error=1");
        exit();
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>