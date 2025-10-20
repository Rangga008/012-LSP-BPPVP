<?php
include_once 'config/database.php';
include_once 'models/User.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);
$user->id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: ID tidak ditemukan.');

if($user->delete()) {
    header("Location: index.php?msg=Data berhasil dihapus");
} else {
    header("Location: index.php?msg=Gagal menghapus data");
}
exit();
?>