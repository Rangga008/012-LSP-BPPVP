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
    <title>Data Guru Admin</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge device-width, initial-scale=1.0">
    <link rel="icon" href="/012-LSP-BPPVP/Template/Landing/img/LOGO SMK 2.png">
</head>

<body>
    <div class="layout2">
        <?php
        include '../Layout/header.php';
        ?>
        <section class="data-guru-admin-section">
            <div class="table-container">
                <h2>Data Guru</h2>
                <?php if (isset($_GET['delete']) && $_GET['delete'] == 1): ?>
                <div class="success-message">
                    Data guru berhasil dihapus!
                </div>
                <?php endif; ?>
                <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
                <div class="error-message">
                    Gagal menghapus data guru. Silakan coba lagi.
                </div>
                <?php endif; ?>
                <a href="tambah-guru.php" class="btn-add">Tambah Guru</a>
                <?php
                include '../config/database.php';
                include '../controller/data.guru.php';
                ?>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Mata Pelajaran</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($dataGuru)): ?>
                        <?php foreach ($dataGuru as $index => $guru): ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo htmlspecialchars($guru['nama'] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($guru['mata_pelajaran'] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($guru['alamat'] ?? ''); ?></td>
                            <td class="action-buttons">
                                <button class="btn-view" onclick="openViewModal(<?php echo $guru['id']; ?>)"><i
                                        class="fas fa-eye"></i> View</button>
                                <button class="btn-edit" onclick="openEditModal(<?php echo $guru['id']; ?>)"><i
                                        class="fas fa-edit"></i> Edit</button>
                                <button class="btn-delete" onclick="openDeleteModal(<?php echo $guru['id']; ?>)"><i
                                        class="fas fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php else: ?>
                        <tr>
                            <td colspan="5" class="no-data">Tidak ada data guru.</td>
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
            <h2>Detail Guru</h2>
            <div id="viewContent"></div>
        </div>
    </div>

    <!-- Modal for Edit -->
    <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('editModal')">&times;</span>
            <h2>Edit Guru</h2>
            <form id="editForm">
                <input type="hidden" id="editId" name="id">
                <div class="form-group">
                    <label for="editNama">Nama:</label>
                    <input type="text" id="editNama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="editMataPelajaran">Mata Pelajaran:</label>
                    <input type="text" id="editMataPelajaran" name="mata_pelajaran" required>
                </div>
                <div class="form-group">
                    <label for="editAlamat">Alamat:</label>
                    <textarea id="editAlamat" name="alamat" required></textarea>
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
            <p>Apakah Anda yakin ingin menghapus guru ini?</p>
            <div class="modal-buttons">
                <button id="confirmDelete" class="btn-delete">Hapus</button>
                <button onclick="closeModal('deleteModal')" class="btn-cancel">Batal</button>
            </div>
        </div>
    </div>

    <script>
    function openViewModal(id) {
        $.ajax({
            url: '../controller/get_guru.php',
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
            url: '../controller/get_guru.php',
            type: 'GET',
            data: {
                id: id,
                json: 1
            },
            success: function(data) {
                const guru = JSON.parse(data);
                $('#editId').val(guru.id);
                $('#editNama').val(guru.nama);
                $('#editMataPelajaran').val(guru.mata_pelajaran);
                $('#editAlamat').val(guru.alamat);
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
            url: '../controller/edit.guru.php',
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
            url: '../controller/delete.guru.php',
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