<?php
include __DIR__ . '/../config/database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM guru WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $guru = mysqli_fetch_assoc($result);

    if (isset($_GET['json'])) {
        echo json_encode($guru);
    } else {
        if ($guru) {
            echo "<p><strong>Nama:</strong> " . htmlspecialchars($guru['nama']) . "</p>";
            echo "<p><strong>Mata Pelajaran:</strong> " . htmlspecialchars($guru['mata_pelajaran']) . "</p>";
            echo "<p><strong>Alamat:</strong> " . htmlspecialchars($guru['alamat']) . "</p>";
        } else {
            echo "<p>Data guru tidak ditemukan.</p>";
        }
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>