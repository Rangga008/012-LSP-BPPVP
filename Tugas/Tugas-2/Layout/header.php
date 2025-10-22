 <header class="header">
     <div class="name contains-logo">
         <img src="/012-LSP-BPPVP/Template/Landing/img/LOGO SMK 2.png" alt="">
         <p>SMKN 2 Bandung</p>
     </div>
     <nav>
         <a href="/012-LSP-BPPVP/Tugas/Tugas-2/index.php">Beranda</a>
         <a href="/012-LSP-BPPVP/Tugas/Tugas-2/data-siswa.php">Data Siswa</a>
         <a href="/012-LSP-BPPVP/Tugas/Tugas-2/data-guru.php">Guru</a>
         <a href="/012-LSP-BPPVP/Tugas/Tugas-2/data-jurusan.php">Jurusan</a>
         <?php if (isset($_SESSION['username'])): ?>
         <a href="/012-LSP-BPPVP/Tugas/Tugas-2/admin/dashboard.php">Dashboard</a>
         <div class="dropdown">
             <button class="dropbtn"><?php echo htmlspecialchars($_SESSION['username']); ?> ▼</button>
             <div class="dropdown-content">
                 <a href="/012-LSP-BPPVP/Tugas/Tugas-2/controller/logout.php">Logout</a>
             </div>
         </div>
         <?php else: ?>
         <a href="/012-LSP-BPPVP/Tugas/Tugas-2/auth/login.php">Login</a>
         <?php endif; ?>
     </nav>
 </header>