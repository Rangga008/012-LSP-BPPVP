<?php
include __DIR__ . '/../config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $mata_pelajaran = $_POST['mata_pelajaran'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO guru (nama, mata_pelajaran, alamat) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sss", $nama, $mata_pelajaran, $alamat);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: ../admin/data-guru-admin.php?success=1");
        exit();
    } else {
        header("Location: ../admin/tambah-guru.php?error=1");
        exit();
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>