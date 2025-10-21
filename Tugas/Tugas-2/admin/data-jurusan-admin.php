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
    <title>Data Jurusan Admin</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge device-width, initial-scale=1.0">
    <link rel="icon" href="/012-LSP-BPPVP/Template/Landing/img/LOGO SMK 2.png">
</head>

<body>
    <div class="layout2">
        <?php
        include '../Layout/header.php';
        ?>
        <section class="data-jurusan-admin-section">
            <div class="table-container">
                <h2>Data Jurusan</h2>
                <?php if (isset($_GET['delete']) && $_GET['delete'] == 1): ?>
                <div class="success-message">
                    Data jurusan berhasil dihapus!
                </div>
                <?php endif; ?>
                <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
                <div class="error-message">
                    Gagal menghapus data jurusan. Silakan coba lagi.
                </div>
                <?php endif; ?>
                <a href="tambah-jurusan.php" class="btn-add">Tambah Jurusan</a>
                <?php
                include '../config/database.php';
                include '../controller/data.jurusan.php';
                ?>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Jurusan</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($dataJurusan)): ?>
                        <?php foreach ($dataJurusan as $index => $jurusan): ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo htmlspecialchars($jurusan['nama_jurusan'] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($jurusan['deskripsi'] ?? ''); ?></td>
                            <td class="action-buttons">
                                <button class="btn-view" onclick="openViewModal(<?php echo $jurusan['id']; ?>)"><i
                                        class="fas fa-eye"></i> View</button>
                                <button class="btn-edit" onclick="openEditModal(<?php echo $jurusan['id']; ?>)"><i
                                        class="fas fa-edit"></i> Edit</button>
                                <button class="btn-delete" onclick="openDeleteModal(<?php echo $jurusan['id']; ?>)"><i
                                        class="fas fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php else: ?>
                        <tr>
                            <td colspan="4" class="no-data">Tidak ada data jurusan.</td>
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

    <!-- Modal for View -->
    <div id="viewModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('viewModal')">&times;</span>
            <h2>Detail Jurusan</h2>
            <div id="viewContent"></div>
        </div>
    </div>

    <!-- Modal for Edit -->
    <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('editModal')">&times;</span>
            <h2>Edit Jurusan</h2>
            <form id="editForm">
                <input type="hidden" id="editId" name="id">
                <div class="form-group">
                    <label for="editNamaJurusan">Nama Jurusan:</label>
                    <input type="text" id="editNamaJurusan" name="nama_jurusan" required>
                </div>
                <div class="form-group">
                    <label for="editDeskripsi">Deskripsi:</label>
                    <textarea id="editDeskripsi" name="deskripsi" required></textarea>
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
            <p>Apakah Anda yakin ingin menghapus jurusan ini?</p>
            <div class="modal-buttons">
                <button id="confirmDelete" class="btn-delete">Hapus</button>
                <button onclick="closeModal('deleteModal')" class="btn-cancel">Batal</button>
            </div>
        </div>
    </div>

    <script>
    function openViewModal(id) {
        $.ajax({
            url: '../controller/get_jurusan.php',
            type: 'GET',
            data: {
                id: id
            },
            success: function(data) {
                $('#viewContent').html(data);
                $('#viewModal').show();
            }
        });
    }

    function openEditModal(id) {
        $.ajax({
            url: '../controller/get_jurusan.php',
            type: 'GET',
            data: {
                id: id,
                json: 1
            },
            success: function(data) {
                const jurusan = JSON.parse(data);
                $('#editId').val(jurusan.id);
                $('#editNamaJurusan').val(jurusan.nama_jurusan);
                $('#editDeskripsi').val(jurusan.deskripsi);
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
            url: '../controller/edit.jurusan.php',
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
            url: '../controller/delete.jurusan.php',
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