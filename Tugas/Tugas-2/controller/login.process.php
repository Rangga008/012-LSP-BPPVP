<?php
if (!isset($_SESSION)) {
    session_start();
}
include '../config/database.php';
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM admin WHERE username='$username'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $row['username'];
        header("Location: ../admin/dashboard.php");
        exit();
    } else {
        echo "<script>alert('Password salah. Silakan coba lagi.'); window.location.href = '../auth/login.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('Username tidak ditemukan. Silakan coba lagi.'); window.location.href = '../auth/login.php';</script>";
    exit();
}
?>