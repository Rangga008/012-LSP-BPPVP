<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../auth/login.php");
    exit();
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
    <title>Tambah Jurusan</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge device-width, initial-scale=1.0">
    <link rel="icon" href="/012-LSP-BPPVP/Template/Landing/img/LOGO SMK 2.png">
</head>

<body>
    <div class="layout2">
        <?php
        include '../Layout/header.php';
        ?>
        <section class="tambah-jurusan-section">
            <div class="form-container">
                <h2>Tambah Jurusan</h2>
                <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
                <div class="error-message">
                    Gagal menambahkan data jurusan. Silakan coba lagi.
                </div>
                <?php endif; ?>
                <form action="../controller/tambah.jurusan.php" method="POST">
                    <div class="form-group">
                        <label for="nama_jurusan">Nama Jurusan:</label>
                        <input type="text" id="nama_jurusan" name="nama_jurusan" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi:</label>
                        <textarea id="deskripsi" name="deskripsi" required></textarea>
                    </div>
                    <button type="submit" class="btn-submit">Tambah Jurusan</button>
                </form>
                <a href="data-jurusan-admin.php" class="btn-back">Kembali ke Data
                    Jurusan</a>
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