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
    <title>Dashboard Admin</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge device-width, initial-scale=1.0">
    <link rel="icon" href="/012-LSP-BPPVP/Template/Landing/img/LOGO SMK 2.png">
</head>

<body>
    <div class="layout2">
        <?php
        include '../Layout/header.php';
        ?>
        <section class="dashboard-section">
            <div class="dashboard-container">
                <h1>Selamat Datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
                <p>Dashboard Admin SMKN 2 Bandung</p>

                <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                <div class="success-message">
                    Data siswa berhasil ditambahkan!
                </div>
                <?php endif; ?>

                <div class="dashboard-grid">
                    <div class="dashboard-card">
                        <h3>Data Siswa</h3>
                        <p>Kelola data siswa sekolah</p>
                        <a href="/012-LSP-BPPVP/Template/Landing/admin/data-siswa-admin.php" class="dashboard-btn">Lihat
                            Data
                            Siswa</a>
                    </div>

                    <div class="dashboard-card">
                        <h3>Tambah Siswa</h3>
                        <p>Tambahkan data siswa baru</p>
                        <a href="/012-LSP-BPPVP/Template/Landing/admin/tambah-siswa.php" class="dashboard-btn">Tambah
                            Siswa</a>
                    </div>

                    <div class="dashboard-card">
                        <h3>Laporan</h3>
                        <p>Generate laporan sekolah</p>
                        <a href="#" class="dashboard-btn">Buat Laporan</a>
                    </div>

                    <div class="dashboard-card">
                        <h3>Pengaturan</h3>
                        <p>Konfigurasi sistem</p>
                        <a href="#" class="dashboard-btn">Pengaturan</a>
                    </div>
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