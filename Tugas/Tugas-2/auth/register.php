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
                <div class="register-container">
                    <button onclick="history.back()" class="back-button"> <i></i> </button>
                    <h2>Register</h2>
                    <form action="../controller/register.process.php" method="POST">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required>

                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>

                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" id="confirm_password" name="confirm_password" required>

                        <button type="submit">Register</button>
                    </form>
                    <a>
                        Sudah punya akun? <a href="login.php">Login</a>
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