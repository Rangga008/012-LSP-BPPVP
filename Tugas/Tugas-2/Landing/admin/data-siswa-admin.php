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
    <title>Data Siswa Admin</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge device-width, initial-scale=1.0">
    <link rel="icon" href="/012-LSP-BPPVP/Template/Landing/img/LOGO SMK 2.png">
</head>

<body>
    <div class="layout2">
        <?php
        include '../Layout/header.php';
        ?>
        <section class="data-siswa-admin-section">
            <div class="table-container">
                <h2>Data Siswa</h2>
                <?php if (isset($_GET['delete']) && $_GET['delete'] == 1): ?>
                <div class="success-message">
                    Data siswa berhasil dihapus!
                </div>
                <?php endif; ?>
                <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
                <div class="error-message">
                    Gagal menghapus data siswa. Silakan coba lagi.
                </div>
                <?php endif; ?>
                <a href="/012-LSP-BPPVP/Template/Landing/admin/tambah-siswa.php" class="btn-add">Tambah Siswa</a>
                <?php
                include '../config/database.php';
                include '../controller/data.siswa.php';
                ?>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIS</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($dataSiswa)): ?>
                        <?php foreach ($dataSiswa as $index => $siswa): ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo htmlspecialchars($siswa['nama'] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($siswa['nis'] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($siswa['jurusan'] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($siswa['alamat'] ?? ''); ?></td>
                            <td class="action-buttons">
                                <button class="btn-view" onclick="openViewModal(<?php echo $siswa['id']; ?>)"><i
                                        class="fas fa-eye"></i> View</button>
                                <button class="btn-edit" onclick="openEditModal(<?php echo $siswa['id']; ?>)"><i
                                        class="fas fa-edit"></i> Edit</button>
                                <button class="btn-delete" onclick="openDeleteModal(<?php echo $siswa['id']; ?>)"><i
                                        class="fas fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php else: ?>
                        <tr>
                            <td colspan="6" class="no-data">Tidak ada data siswa.</td>
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
            <h2>Detail Siswa</h2>
            <div id="viewContent"></div>
        </div>
    </div>

    <!-- Modal for Edit -->
    <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('editModal')">&times;</span>
            <h2>Edit Siswa</h2>
            <form id="editForm">
                <input type="hidden" id="editId" name="id">
                <div class="form-group">
                    <label for="editNama">Nama:</label>
                    <input type="text" id="editNama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="editNis">NIS:</label>
                    <input type="text" id="editNis" name="nis" required>
                </div>
                <div class="form-group">
                    <label for="editJurusan">Jurusan:</label>
                    <input type="text" id="editJurusan" name="jurusan" required>
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
            <p>Apakah Anda yakin ingin menghapus siswa ini?</p>
            <div class="modal-buttons">
                <button id="confirmDelete" class="btn-delete">Hapus</button>
                <button onclick="closeModal('deleteModal')" class="btn-cancel">Batal</button>
            </div>
        </div>
    </div>

    <script>
    function openViewModal(id) {
        $.ajax({
            url: '../controller/get_siswa.php',
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
            url: '../controller/get_siswa.php',
            type: 'GET',
            data: {
                id: id,
                json: 1
            },
            success: function(data) {
                const siswa = JSON.parse(data);
                $('#editId').val(siswa.id);
                $('#editNama').val(siswa.nama);
                $('#editNis').val(siswa.nis);
                $('#editJurusan').val(siswa.jurusan);
                $('#editAlamat').val(siswa.alamat);
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
            url: '../controller/edit.siswa.php',
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
            url: '../controller/delete.siswa.php',
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