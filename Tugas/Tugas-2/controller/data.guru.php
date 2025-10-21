<?php
if (!isset($_SESSION)) {
    session_start();
}
include __DIR__ . '/../config/database.php';
$query = "SELECT * FROM guru ORDER BY nama ASC ";
$result = mysqli_query($conn, $query);
$dataGuru = [];
while ($row = mysqli_fetch_assoc($result)) {
    $dataGuru[] = $row;
}
mysqli_close($conn);
?>