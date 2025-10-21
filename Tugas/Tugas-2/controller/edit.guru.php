<?php
include __DIR__ . '/../config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $mata_pelajaran = $_POST['mata_pelajaran'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE guru SET nama = ?, mata_pelajaran = ?, alamat = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sssi", $nama, $mata_pelajaran, $alamat, $id);

    if (mysqli_stmt_execute($stmt)) {
        echo "success";
    } else {
        echo "error";
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>