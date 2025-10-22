-- Sample data for datasiswa database
-- Insert sample admin user (password is hashed)
INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'); -- password: password

-- Insert sample guru data
INSERT INTO `guru` (`id`, `nama`, `mata_pelajaran`, `alamat`) VALUES
(1, 'Ahmad Surya', 'Matematika', 'Jl. Sudirman No. 10, Bandung'),
(2, 'Siti Nurhaliza', 'Bahasa Indonesia', 'Jl. Asia Afrika No. 20, Bandung'),
(3, 'Budi Santoso', 'Fisika', 'Jl. Braga No. 15, Bandung');

-- Insert sample jurusan data
INSERT INTO `jurusan` (`id`, `nama_jurusan`, `deskripsi`) VALUES
(1, 'Teknik Komputer dan Jaringan', 'Jurusan yang mempelajari tentang jaringan komputer, pemrograman, dan teknologi informasi'),
(2, 'Akuntansi', 'Jurusan yang mempelajari tentang akuntansi, keuangan, dan bisnis'),
(3, 'Multimedia', 'Jurusan yang mempelajari tentang desain grafis, animasi, dan produksi multimedia');

-- Insert sample siswa data
INSERT INTO `siswa` (`id`, `nis`, `nama`, `jurusan`, `alamat`) VALUES
(1, 12345, 'Rina Sari', 'Teknik Komputer dan Jaringan', 'Jl. Cihampelas No. 5, Bandung'),
(2, 12346, 'Dedi Kurniawan', 'Akuntansi', 'Jl. Dago No. 8, Bandung'),
(3, 12347, 'Maya Putri', 'Multimedia', 'Jl. Setiabudi No. 12, Bandung');
