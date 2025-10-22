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
    <title>Edit Siswa</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge device-width, initial-scale=1.0">
    <link rel="icon" href="../img/LOGO SMK 2.png">
</head>

<body>
    <div class="layout2">
        <?php
        include '../Layout/header.php';
        ?>
        <section class="edit-siswa-section">
            <div class="form-container">
                <h1>Edit Data Siswa</h1>
                <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
                <div class="error-message">
                    Gagal mengupdate data siswa. Silakan coba lagi.
                </div>
                <?php endif; ?>
                <form action="../controller/edit.siswa.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $siswa['id']; ?>">
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" id="nama" name="nama"
                            value="<?php echo htmlspecialchars($siswa['nama'] ?? ''); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nis">NIS:</label>
                        <input type="text" id="nis" name="nis"
                            value="<?php echo htmlspecialchars($siswa['nis'] ?? ''); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan:</label>
                        <input type="text" id="jurusan" name="jurusan"
                            value="<?php echo htmlspecialchars($siswa['jurusan'] ?? ''); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <textarea id="alamat" name="alamat"
                            required><?php echo htmlspecialchars($siswa['alamat'] ?? ''); ?></textarea>
                    </div>
                    <div class="button-group">
                        <button type="submit" class="btn-submit">Update Siswa</button>
                        <a href="view-siswa.php?id=<?php echo $siswa['id']; ?>" class="btn-back">Batal</a>
                    </div>
                </form>
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