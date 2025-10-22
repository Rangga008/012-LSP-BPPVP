<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../auth/login.php");
    exit();
}

include '../config/database.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    header("Location: ../admin/data-admin.php?error=1");
    exit();
}

// Prevent deleting current user
$query = "SELECT username FROM admin WHERE id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$admin = mysqli_fetch_assoc($result);

if ($admin && $admin['username'] === $_SESSION['username']) {
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    header("Location: ../admin/data-admin.php?error=1");
    exit();
}

mysqli_stmt_close($stmt);

$delete_query = "DELETE FROM admin WHERE id = ?";
$stmt = mysqli_prepare($conn, $delete_query);
mysqli_stmt_bind_param($stmt, "i", $id);

if (mysqli_stmt_execute($stmt)) {
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    header("Location: ../admin/data-admin.php?delete=1");
    exit();
} else {
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    header("Location: ../admin/data-admin.php?error=1");
    exit();
}
?>