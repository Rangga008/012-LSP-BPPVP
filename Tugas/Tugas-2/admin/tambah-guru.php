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
    <title>Tambah Guru</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge device-width, initial-scale=1.0">
    <link rel="icon" href="/012-LSP-BPPVP/Template/Landing/img/LOGO SMK 2.png">
</head>

<body>
    <div class="layout2">
        <?php
        include '../Layout/header.php';
        ?>
        <section class="tambah-guru-section">
            <div class="form-container">
                <h2>Tambah Guru</h2>
                <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
                <div class="error-message">
                    Gagal menambahkan data guru. Silakan coba lagi.
                </div>
                <?php endif; ?>
                <form action="../controller/tambah.guru.php" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="mata_pelajaran">Mata Pelajaran:</label>
                        <input type="text" id="mata_pelajaran" name="mata_pelajaran" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <textarea id="alamat" name="alamat" required></textarea>
                    </div>
                    <button type="submit" class="btn-submit">Tambah Guru</button>
                </form>
                <a href="data-guru-admin.php" class="btn-back">Kembali ke Data
                    Guru</a>
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