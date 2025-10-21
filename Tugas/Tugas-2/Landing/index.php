<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
    <title>SMKN 2 Bandung</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge device-width, initial-scale=1.0">
    <link rel="icon" href="/012-LSP-BPPVP/Template/Landing/img/LOGO SMK 2.png">
</head>

<body>
    <div class="layout2">
        <?php 
        include 'Layout/header.php'; 
        include 'Layout/hero.php';
        include 'Layout/content.php';
        include 'Layout/footer.php';
        ?>
    </div>
    <button>
        <i class="fas fa-arrow-up"></i>
    </button>
</body>

</html>