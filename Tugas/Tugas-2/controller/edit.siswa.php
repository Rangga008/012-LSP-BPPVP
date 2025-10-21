<?php
if (!isset($_SESSION)) {
    session_start();
}
include '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE siswa SET nama = ?, nis = ?, jurusan = ?, alamat = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssssi", $nama, $nis, $jurusan, $alamat, $id);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: ../admin/view-siswa.php?id=$id&success=1");
        exit();
    } else {
        header("Location: ../admin/edit-siswa.php?id=$id&error=1");
        exit();
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>