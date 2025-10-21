<?php
if (!isset($_SESSION)) {
    session_start();
}
include __DIR__ . '/../config/database.php';
$query = "SELECT * FROM siswa ORDER BY nama ASC ";
$result = mysqli_query($conn, $query);
$dataSiswa = [];
while ($row = mysqli_fetch_assoc($result)) {
    $dataSiswa[] = $row;
}
mysqli_close($conn);
?>