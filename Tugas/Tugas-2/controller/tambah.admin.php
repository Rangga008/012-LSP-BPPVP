<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../auth/login.php");
    exit();
}

include '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate input
    if (empty($username) || empty($password) || empty($confirm_password)) {
        header("Location: ../admin/tambah-admin.php?error=1");
        exit();
    }

    if ($password !== $confirm_password) {
        header("Location: ../admin/tambah-admin.php?error=1");
        exit();
    }

    // Check if username already exists
    $check_query = "SELECT id FROM admin WHERE username = ?";
    $stmt = mysqli_prepare($conn, $check_query);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header("Location: ../admin/tambah-admin.php?error=1");
        exit();
    }

    mysqli_stmt_close($stmt);

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert new admin
    $insert_query = "INSERT INTO admin (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $insert_query);
    mysqli_stmt_bind_param($stmt, "ss", $username, $hashed_password);

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header("Location: ../admin/tambah-admin.php?success=1");
        exit();
    } else {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header("Location: ../admin/tambah-admin.php?error=1");
        exit();
    }
} else {
    header("Location: ../admin/tambah-admin.php");
    exit();
}
?>