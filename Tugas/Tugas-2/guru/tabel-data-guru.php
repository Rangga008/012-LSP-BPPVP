<section class="grid-layout">

    <div class="table-container">
        <h2>Data Guru</h2>
        <?php
        // Include database and controller for guru data
        include __DIR__ . '/../config/database.php';
        include __DIR__ . '/../controller/data.guru.php';
        ?>
        <table class="data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Mata Pelajaran</th>
                    <th>Alamat</th>
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
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <tr>
                    <td colspan="4" class="no-data">Tidak ada data guru.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</section>