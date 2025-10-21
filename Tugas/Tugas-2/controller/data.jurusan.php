<?php
if (!isset($_SESSION)) {
    session_start();
}
include __DIR__ . '/../config/database.php';
$query = "SELECT * FROM jurusan ORDER BY nama_jurusan ASC ";
$result = mysqli_query($conn, $query);
$dataJurusan = [];
while ($row = mysqli_fetch_assoc($result)) {
    $dataJurusan[] = $row;
}
mysqli_close($conn);
?>