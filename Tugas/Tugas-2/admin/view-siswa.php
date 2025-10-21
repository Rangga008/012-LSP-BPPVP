<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../auth/login.php");
    exit();
}

include '../config/database.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: data-siswa-admin.php");
    exit();
}

$query = "SELECT * FROM siswa WHERE id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$siswa = mysqli_fetch_assoc($result);

if (!$siswa) {
    header("Location: data-siswa-admin.php");
    exit();
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
    <title>View Siswa</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge device-width, initial-scale=1.0">
    <link rel="icon" href="/012-LSP-BPPVP/Template/Landing/img/LOGO SMK 2.png">
</head>

<body>
    <div class="layout2">
        <?php
        include '../Layout/header.php';
        ?>
        <section class="view-siswa-section">
            <div class="form-container">
                <h1>Detail Siswa</h1>
                <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                <div class="success-message">
                    Data siswa berhasil diupdate!
                </div>
                <?php endif; ?>
                <div class="detail-group">
                    <label>Nama:</label>
                    <p><?php echo htmlspecialchars($siswa['nama'] ?? ''); ?></p>
                </div>
                <div class="detail-group">
                    <label>NIS:</label>
                    <p><?php echo htmlspecialchars($siswa['nis'] ?? ''); ?></p>
                </div>
                <div class="detail-group">
                    <label>Jurusan:</label>
                    <p><?php echo htmlspecialchars($siswa['jurusan'] ?? ''); ?></p>
                </div>
                <div class="detail-group">
                    <label>Alamat:</label>
                    <p><?php echo htmlspecialchars($siswa['alamat'] ?? ''); ?></p>
                </div>
                <div class="button-group">
                    <a href="/012-LSP-BPPVP/Template/Landing/admin/edit-siswa.php?id=<?php echo $siswa['id']; ?>"
                        class="btn-edit">Edit</a>
                    <a href="/012-LSP-BPPVP/Template/Landing/admin/data-siswa-admin.php" class="btn-back">Kembali</a>
                </div>
            </div>
        </section>
        <?php
        include '../Layout/footer.php';
        ?>
    </div>
    <button class="scroll-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
</body>

</html>