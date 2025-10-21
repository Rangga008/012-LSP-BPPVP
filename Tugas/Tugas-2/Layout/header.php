 <header class="header">
     <div class="name contains-logo">
         <img src="/012-LSP-BPPVP/Template/Landing/img/LOGO SMK 2.png" alt="">
         <p>SMKN 2 Bandung</p>
     </div>
     <nav>
         <a href="/012-LSP-BPPVP/Template/Landing/index.php">Beranda</a>
         <a href="data-siswa.php">Data Siswa</a>
         <a href="admin/data-guru-admin.php">Guru</a>
         <a href="admin/data-jurusan-admin.php">Jurusan</a>
         <?php if (isset($_SESSION['username'])): ?>
         <a href="admin/dashboard.php">Dashboard</a>
         <div class="dropdown">
             <button class="dropbtn"><?php echo htmlspecialchars($_SESSION['username']); ?> ▼</button>
             <div class="dropdown-content">
                 <a href="controller/logout.php">Logout</a>
             </div>
         </div>
         <?php else: ?>
         <a href="auth/login.php">Login</a>
         <?php endif; ?>
     </nav>
 </header>