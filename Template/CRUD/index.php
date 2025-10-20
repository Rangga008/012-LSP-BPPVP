<?php
include_once 'config/database.php';
include_once 'models/User.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);
$stmt = $user->readAll();
$num = $stmt->rowCount();
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP - Data Users</title>
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
        max-width: 1200px;
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

    .btn {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        transition: all 0.3s;
    }

    .btn-primary {
        background: #667eea;
        color: white;
    }

    .btn-primary:hover {
        background: #5568d3;
    }

    .btn-success {
        background: #10b981;
        color: white;
    }

    .btn-danger {
        background: #ef4444;
        color: white;
    }

    .btn-warning {
        background: #f59e0b;
        color: white;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #e0e0e0;
    }

    th {
        background: #f8f9fa;
        font-weight: 600;
        color: #333;
    }

    tr:hover {
        background: #f8f9fa;
    }

    .actions {
        display: flex;
        gap: 10px;
    }

    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 5px;
    }

    .alert-success {
        background: #d1fae5;
        color: #065f46;
        border-left: 4px solid #10b981;
    }

    .alert-danger {
        background: #fee2e2;
        color: #991b1b;
        border-left: 4px solid #ef4444;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Data Users</h1>
        <a href="create.php" class="btn btn-primary">+ Tambah User Baru</a>

        <?php if(isset($_GET['msg'])): ?>
        <div class="alert alert-success">
            <?php echo htmlspecialchars($_GET['msg']); ?>
        </div>
        <?php endif; ?>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Tanggal Dibuat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($num > 0) {
                    $no = 1;
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo "<tr>";
                        echo "<td>{$no}</td>";
                        echo "<td>{$name}</td>";
                        echo "<td>{$email}</td>";
                        echo "<td>{$phone}</td>";
                        echo "<td>{$created_at}</td>";
                        echo "<td class='actions'>";
                        echo "<a href='update.php?id={$id}' class='btn btn-warning'>Edit</a>";
                        echo "<a href='delete.php?id={$id}' class='btn btn-danger' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>";
                        echo "</td>";
                        echo "</tr>";
                        $no++;
                    }
                } else {
                    echo "<tr><td colspan='6' style='text-align:center;'>Tidak ada data</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>