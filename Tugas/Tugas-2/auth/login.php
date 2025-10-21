<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/auth.css">
    <script src="../js/script.js" defer></script>
    <script src="../js/auth.js" defer></script>
    <title>SMKN 2 Bandung</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge device-width, initial-scale=1.0">
    <link rel="icon" href="../img/LOGO SMK 2.png">
</head>

<body>
    <div class="layout2">
        <div>
            <section>
                <div class="login-container">
                    <button onclick="history.back()" class="back-button"> <i></i> </button>
                    <h2>Login</h2>
                    <form action="../controller/login.process.php" method="POST">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required>

                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>

                        <button type="submit">Login</button>
                    </form>
                    <a disabled>
                        Belum punya akun? <a href="register.php">Daftar</a>
                    </a>
                    <footer>
                        &copy; 2024 SMKN 2 Bandung. All rights reserved.
                    </footer>
                </div>
            </section>
        </div>
    </div>
</body>

</html>