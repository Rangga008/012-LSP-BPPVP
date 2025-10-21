<?php
if (!isset($_SESSION)) {
    session_start();
}
include '../config/database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM siswa WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $siswa = mysqli_fetch_assoc($result);

    if ($siswa) {
        if (isset($_GET['json'])) {
            echo json_encode($siswa);
        } else {
            echo "<div class='detail-group'>
                    <label>Nama:</label>
                    <p>" . htmlspecialchars($siswa['nama'] ?? '') . "</p>
                  </div>
                  <div class='detail-group'>
                    <label>NIS:</label>
                    <p>" . htmlspecialchars($siswa['nis'] ?? '') . "</p>
                  </div>
                  <div class='detail-group'>
                    <label>Jurusan:</label>
                    <p>" . htmlspecialchars($siswa['jurusan'] ?? '') . "</p>
                  </div>
                  <div class='detail-group'>
                    <label>Alamat:</label>
                    <p>" . htmlspecialchars($siswa['alamat'] ?? '') . "</p>
                  </div>";
        }
    } else {
        echo "Data siswa tidak ditemukan.";
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>