<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../auth/login.php");
    exit();
}

include '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Validate input
    if (empty($username)) {
        header("Location: ../admin/data-admin.php?error=1");
        exit();
    }

    // Check if username already exists (excluding current admin)
    $check_query = "SELECT id FROM admin WHERE username = ? AND id != ?";
    $stmt = mysqli_prepare($conn, $check_query);
    mysqli_stmt_bind_param($stmt, "si", $username, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header("Location: ../admin/data-admin.php?error=1");
        exit();
    }

    mysqli_stmt_close($stmt);

    if (!empty($password)) {
        // Update with new password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $update_query = "UPDATE admin SET username = ?, password = ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $update_query);
        mysqli_stmt_bind_param($stmt, "ssi", $username, $hashed_password, $id);
    } else {
        // Update username only
        $update_query = "UPDATE admin SET username = ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $update_query);
        mysqli_stmt_bind_param($stmt, "si", $username, $id);
    }

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header("Location: ../admin/data-admin.php?success=1");
        exit();
    } else {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header("Location: ../admin/data-admin.php?error=1");
        exit();
    }
} else {
    header("Location: ../admin/data-admin.php");
    exit();
}
?>