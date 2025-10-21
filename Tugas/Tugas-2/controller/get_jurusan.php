<?php
include __DIR__ . '/../config/database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM jurusan WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $jurusan = mysqli_fetch_assoc($result);

    if (isset($_GET['json'])) {
        echo json_encode($jurusan);
    } else {
        if ($jurusan) {
            echo "<p><strong>Nama Jurusan:</strong> " . htmlspecialchars($jurusan['nama_jurusan']) . "</p>";
            echo "<p><strong>Deskripsi:</strong> " . htmlspecialchars($jurusan['deskripsi']) . "</p>";
        } else {
            echo "<p>Data jurusan tidak ditemukan.</p>";
        }
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>