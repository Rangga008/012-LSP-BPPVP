<?php
if (!isset($_SESSION)) {
    session_start();
}
include '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO siswa (nama, nis, jurusan, alamat) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $nama, $nis, $jurusan, $alamat);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: ../admin/dashboard.php?success=1");
        exit();
    } else {
        header("Location: ../admin/tambah-siswa.php?error=1");
        exit();
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>