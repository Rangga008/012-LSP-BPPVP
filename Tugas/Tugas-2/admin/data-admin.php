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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="../js/script.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Data Admin</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge device-width, initial-scale=1.0">
    <link rel="icon" href="../img/LOGO SMK 2.png">
</head>

<body>
    <div class="layout2">
        <?php
        include '../Layout/header.php';
        ?>
        <section class="data-admin-section">
            <div class="table-container">
                <h2>Data Admin</h2>
                <?php if (isset($_GET['delete']) && $_GET['delete'] == 1): ?>
                <div class="success-message">
                    Admin berhasil dihapus!
                </div>
                <?php endif; ?>
                <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
                <div class="error-message">
                    Gagal menghapus admin. Silakan coba lagi.
                </div>
                <?php endif; ?>
                <button onclick="window.location.href='tambah-admin.php'" class="btn-add action-buttons btn-view">Tambah
                    Admin</button>
                <br>
                <?php
                include '../config/database.php';
                include '../controller/data.admin.php';
                ?>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($dataAdmin)): ?>
                        <?php foreach ($dataAdmin as $index => $admin): ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo htmlspecialchars($admin['username'] ?? ''); ?></td>
                            <td class="action-buttons">
                                <?php if ($admin['username'] !== $_SESSION['username']): ?>
                                <button class="btn-edit" onclick="openEditModal(<?php echo $admin['id']; ?>)"><i
                                        class="fas fa-edit"></i> Edit</button>
                                <button class="btn-delete" onclick="openDeleteModal(<?php echo $admin['id']; ?>)"><i
                                        class="fas fa-trash"></i> Delete</button>
                                <?php else: ?>
                                <span class="current-user">Current User</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php else: ?>
                        <tr>
                            <td colspan="3" class="no-data">Tidak ada data admin.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </section>
        <?php
        include '../Layout/footer.php';
        ?>
    </div>
    <button class="scroll-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Modal for Edit -->
    <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('editModal')">&times;</span>
            <h2>Edit Admin</h2>
            <form id="editForm">
                <input type="hidden" id="editId" name="id">
                <div class="form-group">
                    <label for="editUsername">Username:</label>
                    <input type="text" id="editUsername" name="username" required>
                </div>
                <div class="form-group">
                    <label for="editPassword">Password Baru (kosongkan jika tidak diubah):</label>
                    <input type="password" id="editPassword" name="password">
                </div>
                <button type="submit" class="btn-submit">Update</button>
            </form>
        </div>
    </div>

    <!-- Modal for Delete -->
    <div id="deleteModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('deleteModal')">&times;</span>
            <h2>Konfirmasi Hapus</h2>
            <p>Apakah Anda yakin ingin menghapus admin ini?</p>
            <div class="modal-buttons">
                <button id="confirmDelete" class="btn-delete">Hapus</button>
                <button onclick="closeModal('deleteModal')" class="btn-cancel">Batal</button>
            </div>
        </div>
    </div>

    <script>
    function openEditModal(id) {
        $.ajax({
            url: '../controller/get_admin.php',
            type: 'GET',
            data: {
                id: id,
                json: 1
            },
            success: function(data) {
                const admin = JSON.parse(data);
                $('#editId').val(admin.id);
                $('#editUsername').val(admin.username);
                $('#editPassword').val('');
                $('#editModal').show();
            }
        });
    }

    function openDeleteModal(id) {
        $('#confirmDelete').data('id', id);
        $('#deleteModal').show();
    }

    function closeModal(modalId) {
        $('#' + modalId).hide();
    }

    $('#editForm').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: '../controller/edit.admin.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                closeModal('editModal');
                location.reload();
            }
        });
    });

    $('#confirmDelete').click(function() {
        const id = $(this).data('id');
        $.ajax({
            url: '../controller/delete.admin.php',
            type: 'GET',
            data: {
                id: id
            },
            success: function(response) {
                closeModal('deleteModal');
                location.reload();
            }
        });
    });

    // Close modal when clicking outside
    $(window).click(function(e) {
        if ($(e.target).hasClass('modal')) {
            $('.modal').hide();
        }
    });
    </script>
</body>

</html>