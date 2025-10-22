<section class="grid-layout">

    <div class="table-container">
        <h2>Data Jurusan</h2>
        <?php
        // Include database and controller for jurusan data
        include __DIR__ . '/../config/database.php';
        include __DIR__ . '/../controller/data.jurusan.php';
        ?>
        <table class="data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Jurusan</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($dataJurusan)): ?>
                <?php foreach ($dataJurusan as $index => $jurusan): ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td><?php echo htmlspecialchars($jurusan['nama_jurusan'] ?? ''); ?></td>
                    <td><?php echo htmlspecialchars($jurusan['deskripsi'] ?? ''); ?></td>
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <tr>
                    <td colspan="3" class="no-data">Tidak ada data jurusan.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</section>