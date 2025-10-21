 <header class="header">
     <div class="name contains-logo">
         <img src="/012-LSP-BPPVP/Template/Landing/img/LOGO SMK 2.png" alt="">
         <p>SMKN 2 Bandung</p>
     </div>
     <nav>
         <a href="/012-LSP-BPPVP/Template/Landing/index.php">Beranda</a>
         <a href="/012-LSP-BPPVP/Template/Landing/data-siswa.php">Data Siswa</a>
         <a href="#">Guru</a>
         <a href="#">Jurusan</a>
         <?php if (isset($_SESSION['username'])): ?>
         <a href="/012-LSP-BPPVP/Template/Landing/admin/dashboard.php">Dashboard</a>
         <div class="dropdown">
             <button class="dropbtn"><?php echo htmlspecialchars($_SESSION['username']); ?> ▼</button>
             <div class="dropdown-content">
                 <a href="/012-LSP-BPPVP/Template/Landing/controller/logout.php">Logout</a>
             </div>
         </div>
         <?php else: ?>
         <a href="/012-LSP-BPPVP/Template/Landing/auth/login.php">Login</a>
         <?php endif; ?>
     </nav>
 </header>