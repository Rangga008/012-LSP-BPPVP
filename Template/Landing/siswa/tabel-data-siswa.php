<section class="grid-layout">

    <div class="table-container">
        <h2>Data Siswa</h2>
        <?php
        // Contoh data siswa
        include __DIR__ . '/../config/database.php';
        include __DIR__ . '/../controller/data.siswa.php';
        ?>
        <table class="data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
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
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <tr>
                    <td colspan="5" class="no-data">Tidak ada data siswa.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</section>