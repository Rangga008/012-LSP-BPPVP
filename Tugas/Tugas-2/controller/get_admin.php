<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../auth/login.php");
    exit();
}

include '../config/database.php';

$id = $_GET['id'] ?? null;
$json = $_GET['json'] ?? null;

if (!$id) {
    echo "Invalid request";
    exit();
}

$query = "SELECT id, username FROM admin WHERE id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$admin = mysqli_fetch_assoc($result);

if ($admin) {
    if ($json) {
        echo json_encode($admin);
    } else {
        echo "<div class='detail-group'>
                <label>Username:</label>
                <p>" . htmlspecialchars($admin['username']) . "</p>
              </div>";
    }
} else {
    echo "Admin not found";
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>