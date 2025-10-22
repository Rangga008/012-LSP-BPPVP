<?php include __DIR__ . '/../config/routes.php'; ?>
<header class="header">
    <div class="name contains-logo">
        <img src="<?php echo base_url(); ?>img/LOGO SMK 2.png" alt="">
        <p>SMKN 2 Bandung</p>
    </div>
    <nav>
        <a href="<?php echo base_url(); ?>index.php">Beranda</a>
        <a href="<?php echo base_url(); ?>data-siswa.php">Data Siswa</a>
        <a href="<?php echo base_url(); ?>data-guru.php">Guru</a>
        <a href="<?php echo base_url(); ?>data-jurusan.php">Jurusan</a>
        <?php if (isset($_SESSION['username'])): ?>
        <a href="<?php echo base_url(); ?>admin/dashboard.php">Dashboard</a>
        <div class="dropdown">
            <button class="dropbtn"><?php echo htmlspecialchars($_SESSION['username']); ?> ▼</button>
            <div class="dropdown-content">
                <a href="<?php echo base_url(); ?>controller/logout.php">Logout</a>
            </div>
        </div>
        <?php else: ?>
        <a href="<?php echo base_url(); ?>auth/login.php">Login</a>
        <?php endif; ?>
    </nav>
</header>