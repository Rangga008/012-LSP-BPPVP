<?php
include_once 'config/database.php';
include_once 'models/User.php';

$database = new Database();
$db = $database->getConnection();
$user = new User($db);

$user->id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: ID tidak ditemukan.');

if($_POST) {
    $user->name = $_POST['name'];
    $user->email = $_POST['email'];
    $user->phone = $_POST['phone'];

    if($user->update()) {
        header("Location: index.php?msg=Data berhasil diupdate");
        exit();
    } else {
        $error = "Gagal mengupdate data.";
    }
} else {
    $user->readOne();
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f5f5f5;
        padding: 20px;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    h1 {
        color: #333;
        margin-bottom: 30px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #333;
        font-weight: 500;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"] {
        width: 100%;
        padding: 12px;
        border: 2px solid #e0e0e0;
        border-radius: 5px;
        font-size: 14px;
        transition: border 0.3s;
    }

    input:focus {
        outline: none;
        border-color: #667eea;
    }

    .btn {
        padding: 12px 30px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        transition: all 0.3s;
        text-decoration: none;
        display: inline-block;
    }

    .btn-warning {
        background: #f59e0b;
        color: white;
    }

    .btn-warning:hover {
        background: #d97706;
    }

    .btn-secondary {
        background: #6c757d;
        color: white;
        margin-left: 10px;
    }

    .alert-danger {
        background: #fee2e2;
        color: #991b1b;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 20px;
        border-left: 4px solid #ef4444;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Edit User</h1>

        <?php if(isset($error)): ?>
        <div class="alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="POST">
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="name" value="<?php echo $user->name; ?>" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $user->email; ?>" required>
            </div>
            <div class="form-group">
                <label>Nomor Telepon</label>
                <input type="tel" name="phone" value="<?php echo $user->phone; ?>" required>
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>

</html>