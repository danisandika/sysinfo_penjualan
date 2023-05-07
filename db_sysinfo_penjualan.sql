-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Bulan Mei 2023 pada 19.37
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sysinfo_penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `Id_Barang` int(11) NOT NULL,
  `Nama_Barang` varchar(100) NOT NULL,
  `Keterangan` varchar(255) DEFAULT NULL,
  `Satuan` varchar(50) NOT NULL,
  `Qty` int(11) NOT NULL,
  `Id_Pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`Id_Barang`, `Nama_Barang`, `Keterangan`, `Satuan`, `Qty`, `Id_Pengguna`) VALUES
(1, 'Laptop Asus', 'Laptop dengan spesifikasi tinggi', 'Unit', 46, 9),
(2, 'Mouse Logitech', 'Mouse berkualitas tinggi', 'Buah', 11, 9),
(3, 'Keyboard Razer', 'Keyboard gaming mekanik', 'Buah', 6, 9),
(4, 'Printer HP', 'Printer multifungsi dengan scanner', 'Unit', 9, 9),
(5, 'Hard Disk WD', 'Hard disk eksternal 1 TB', 'Buah', 13, 9),
(6, 'Monitor LG', 'Monitor layar lebar 24 inci', 'Unit', 32, 9),
(7, 'Kabel HDMI', 'Kabel HDMI 2 meter', 'Buah', 44, 9),
(8, 'Flashdisk Sandisk', 'Flashdisk 64 GB USB 3.0', 'Buah', 15, 9),
(9, 'Headset Razer', 'Headset gaming dengan mic', 'Buah', 13, 9),
(10, 'Modem Huawei', 'Modem 4G LTE', 'Unit', 10, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hakakses`
--

CREATE TABLE `tb_hakakses` (
  `Id_Akses` int(11) NOT NULL,
  `Nama_Akses` varchar(50) NOT NULL,
  `Keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_hakakses`
--

INSERT INTO `tb_hakakses` (`Id_Akses`, `Nama_Akses`, `Keterangan`) VALUES
(2, 'Presiden Direktur', 'Pemimpin Perusahaan'),
(3, 'Marketing Staff', 'Bertanggung Jawab terhadap strategi pemasaran produk'),
(4, 'IT Staff', 'Bertanggung Jawab terhadap jalannya Aplikasi perusahaan'),
(5, 'Sales Staff', 'Bertanggung Jawab terhadap jalannya pemasaran produk'),
(6, 'Accounting Staff', 'Bertanggung Jawab terhadap arus keuangan perusahaan'),
(7, 'Finance Staff', 'Bertanggung Jawab terhadap kondisi keuangan perusahaan'),
(8, 'HR & GA', 'Bertanggung Jawab terhadap Pemanfaatan & Pengadaan resource perusahaan'),
(9, 'Administrasi Staff', 'Bertanggung Jawab terhadap Pendataan administrasi perusahaan'),
(10, 'Customer Service Staff', 'Bertanggung Jawab terhadap hubungan dengan pelanggan'),
(11, 'Cashier Staff', 'Bertanggung Jawab terhadap Penerimaan Cash dari Pelanggan'),
(12, 'Pramuniaga Staff', 'Bertanggung Jawab terhadap Kenyamanan Pelanggan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor_telepon` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kode_pos` varchar(100) NOT NULL,
  `Id_Barang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `nomor_telepon`, `email`, `kode_pos`, `Id_Barang`) VALUES
(1, 'John Doe', 'Jl. Merdeka No. 12', '081234567890', 'johndoe@email.com', '12345', 1),
(2, 'Jane Smith', 'Jl. Sudirman No. 5', '087654321098', 'janesmith@email.com', '67890', 3),
(3, 'Ahmad Rizki', 'Jl. Pahlawan No. 10', '085432187654', 'ahmadrizki@email.com', '54321', 2),
(4, 'Siti Nurul', 'Jl. Diponegoro No. 15', '081234567890', 'sitinurul@email.com', '23456', 5),
(5, 'Budi Santoso', 'Jl. Gajah Mada No. 20', '087654321098', 'budisantoso@email.com', '78901', 7),
(6, 'Rina Amelia', 'Jl. Kartini No. 25', '085432187654', 'rinaamelia@email.com', '43210', 9),
(7, 'Eko Prasetyo', 'Jl. Cempaka No. 30', '081234567890', 'ekoprasetyo@email.com', '87654', 8),
(8, 'Ayu Kusuma', 'Jl. A. Yani No. 35', '087654321098', 'ayukusuma@email.com', '21098', 10),
(9, 'Hendra Saputra', 'Jl. Ahmad Dahlan No. 40', '085432187654', 'hendrasaputra@email.com', '76543', 1),
(10, 'Sari Indah', 'Jl. Pahlawan No. 45', '081234567890', 'sariindah@email.com', '09876', 4),
(11, 'Denny Wijaya', 'Jl. Sudirman No. 50', '087654321098', 'dennywijaya@email.com', '65432', 2),
(12, 'Wulan Sari', 'Jl. Merdeka No. 55', '085432187654', 'wulansari@email.com', '21098', 7),
(13, 'Andi Susanto', 'Jl. Diponegoro No. 60', '081234567890', 'andisusanto@email.com', '76543', 1),
(14, 'Dian Purnama', 'Jl. Gajah Mada No. 65', '087654321098', 'dianpurnama@email.com', '43210', 5),
(15, 'Rita Wijaya', 'Jl. Pahlawan No. 70', '085432187654', 'ritawijaya@email.com', '78901', 3),
(16, 'Dewi Cahyani', 'Jl. Kartini No. 75', '081234567890', 'dewicahyani@email.com', '23456', 2),
(17, 'Fajar Nugroho', 'Jl. Ahmad Dahlan No. 80', '087654321098', 'fajarnugroho@email.com', '87654', 4),
(18, 'Lia Ayu', 'Jl. Palem', '08521827121', 'liaayu@gmail.com', '22112', 3),
(19, 'Aresha', 'Jl. Patimura', '081315477812', 'areshacantik@email.com', '09000', 5),
(20, 'Indah', 'Jl. Muaro jamb', '0852111560547', 'dedeindah@gmail.com', '2221', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `Id_Pembelian` int(11) NOT NULL,
  `Tgl_Pembelian` datetime NOT NULL,
  `Harga_Beli` int(11) NOT NULL,
  `Jumlah_Pembelian` int(11) NOT NULL,
  `Id_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pembelian`
--

INSERT INTO `tb_pembelian` (`Id_Pembelian`, `Tgl_Pembelian`, `Harga_Beli`, `Jumlah_Pembelian`, `Id_barang`) VALUES
(1, '2023-04-16 21:51:07', 10000000, 5, 1),
(2, '2023-04-16 21:51:07', 11000000, 18, 1),
(3, '2023-04-16 21:51:07', 300000, 10, 2),
(4, '2023-04-16 21:51:07', 310000, 5, 2),
(5, '2023-04-16 21:51:07', 410000, 5, 3),
(6, '2023-04-16 21:51:07', 40500, 15, 3),
(7, '2023-04-16 21:51:07', 3000000, 7, 4),
(8, '2023-04-16 21:51:07', 3100000, 5, 4),
(9, '2023-04-16 21:51:07', 2010000, 5, 5),
(10, '2023-04-16 21:51:07', 2010000, 6, 5),
(11, '2023-04-16 21:51:07', 690000, 12, 6),
(12, '2023-04-16 21:51:07', 700000, 10, 6),
(13, '2023-04-16 21:51:07', 50000, 20, 7),
(14, '2023-04-16 21:51:07', 51000, 10, 7),
(15, '2023-04-16 21:51:07', 150000, 15, 8),
(16, '2023-04-16 21:51:07', 160000, 10, 8),
(17, '2023-04-16 21:51:07', 200000, 13, 9),
(18, '2023-04-16 21:51:07', 190000, 10, 9),
(19, '2023-04-16 21:51:07', 200000, 8, 10),
(20, '2023-04-16 21:51:07', 230000, 5, 10),
(21, '2023-05-07 18:12:17', 200000, 25, 6),
(22, '2023-05-07 18:15:44', 15000000, 24, 1);

--
-- Trigger `tb_pembelian`
--
DELIMITER $$
CREATE TRIGGER `update_tambah_stok` AFTER INSERT ON `tb_pembelian` FOR EACH ROW UPDATE tb_barang SET qty = qty + NEW.jumlah_pembelian WHERE id_barang = NEW.id_barang
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `Id_Pengguna` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Nama_Depan` varchar(100) NOT NULL,
  `Nama_Belakang` varchar(100) NOT NULL,
  `No_HP` varchar(50) NOT NULL,
  `Alamat` varchar(255) DEFAULT NULL,
  `Id_Akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`Id_Pengguna`, `Username`, `Password`, `Nama_Depan`, `Nama_Belakang`, `No_HP`, `Alamat`, `Id_Akses`) VALUES
(1, 'johndoe', '123456', 'John', 'Doe', '8123456789', 'Jl. Sudirman No. 123', 2),
(2, 'janesmith', 'abc123', 'Jane', 'Smith', '87654321', 'Jl. Gatot Subroto No. 456', 5),
(3, 'markjohnson', 'qwerty', 'Mark', 'Johnson', '81234567', 'Jl. Thamrin No. 789', 6),
(4, 'sarahlee', 'pass123', 'Sarah', 'Lee', '81345678', 'Jl. Kebon Jeruk No. 456', 7),
(5, 'robertchan', 'robert123', 'Robert', 'Chan', '82345678', 'Jl. Kuningan No. 789', 8),
(6, 'lisapark', 'park123', 'Lisa', 'Park', '89876543', 'Jl. M.H. Thamrin No. 1234', 10),
(7, 'danielwang', 'daniel123', 'Daniel', 'Wang', '81298765', 'Jl. Tebet No. 345', 11),
(8, 'annalim', 'anna123', 'Anna', 'Lim', '85678912', 'Jl. Sudirman No. 4567', 12),
(9, 'jameskim', 'james123', 'James', 'Kim', '85345678', 'Jl. Kemang No. 7890', 3),
(10, 'angelalee', 'angela123', 'Angela', 'Lee', '87654321', 'Jl. Bintaro No. 90120', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `Id_Penjualan` int(11) NOT NULL,
  `Tgl_Penjualan` datetime NOT NULL,
  `Harga_Jual` int(11) NOT NULL,
  `Jumlah_Penjualan` int(11) NOT NULL,
  `Id_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`Id_Penjualan`, `Tgl_Penjualan`, `Harga_Jual`, `Jumlah_Penjualan`, `Id_barang`) VALUES
(1, '2023-04-16 22:00:53', 11000000, 2, 1),
(2, '2023-04-16 22:00:53', 11000000, 3, 1),
(3, '2023-04-16 22:00:53', 310000, 4, 2),
(4, '2023-04-16 22:00:53', 305000, 10, 2),
(5, '2023-04-16 22:00:53', 290000, 3, 3),
(6, '2023-04-16 22:00:53', 310000, 4, 3),
(7, '2023-04-16 22:00:53', 3400000, 2, 4),
(8, '2023-04-16 22:00:53', 3350000, 4, 4),
(9, '2023-04-16 22:00:53', 2400000, 2, 5),
(10, '2023-04-16 22:00:53', 2200000, 4, 5),
(11, '2023-04-16 22:00:53', 750000, 10, 6),
(12, '2023-04-16 22:00:53', 730000, 9, 6),
(13, '2023-04-16 22:00:53', 60000, 1, 7),
(14, '2023-04-16 22:00:53', 55000, 5, 7),
(15, '2023-04-16 22:00:53', 160000, 14, 8),
(16, '2023-04-16 22:00:53', 165000, 11, 8),
(17, '2023-04-16 22:00:53', 180000, 14, 9),
(18, '2023-04-16 22:00:53', 200000, 3, 9),
(19, '2023-04-16 22:00:53', 210000, 2, 10),
(20, '2023-04-16 22:00:53', 220000, 3, 10),
(21, '2023-05-07 18:26:11', 3000000, 12, 3);

--
-- Trigger `tb_penjualan`
--
DELIMITER $$
CREATE TRIGGER `update_kurang_stok` AFTER INSERT ON `tb_penjualan` FOR EACH ROW UPDATE tb_barang SET qty = qty - NEW.jumlah_penjualan WHERE id_barang = NEW.id_barang
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `id_supplier` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kode_pos` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `Id_Pembelian` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_supplier`
--

INSERT INTO `tb_supplier` (`id_supplier`, `nama`, `alamat`, `kode_pos`, `kota`, `Id_Pembelian`) VALUES
('S001', 'PT. ABC', 'Jl. Sudirman No. 123', '12345', 'Jakarta', 2),
('S002', 'CV. XYZ', 'Jl. Gajah Mada No. 456', '54321', 'Surabaya', 1),
('S003', 'UD. KLM', 'Jl. Diponegoro No. 789', '67890', 'Bandung', 3),
('S004', 'PT. DEF', 'Jl. Thamrin No. 456', '54321', 'Jakarta', 4),
('S005', 'CV. UVW', 'Jl. Pemuda No. 123', '12345', 'Surabaya', 5),
('S006', 'UD. NOP', 'Jl. Merdeka No. 789', '67890', 'Bandung', 6),
('S007', 'PT. GHI', 'Jl. Gatot Subroto No. 456', '54321', 'Jakarta', 7),
('S008', 'CV. RST', 'Jl. Hayam Wuruk No. 123', '12345', 'Surabaya', 8),
('S009', 'UD. JKL', 'Jl. Asia Afrika No. 789', '67890', 'Bandung', 9),
('S010', 'PT. MNO', 'Jl. MH Thamrin No. 456', '54321', 'Jakarta', 10),
('S011', 'CV. PQR', 'Jl. Tunjungan No. 123', '12345', 'Surabaya', 2),
('S012', 'UD. STU', 'Jl. Braga No. 789', '67890', 'Bandung', 11),
('S013', 'PT. VWX', 'Jl. Sudirman No. 456', '54321', 'Jakarta', 12),
('S014', 'CV. YZA', 'Jl. Diponegoro No. 123', '12345', 'Surabaya', 4),
('S015', 'UD. BCD', 'Jl. Asia Afrika No. 789', '67890', 'Bandung', 5),
('S016', 'PT. EFG', 'Jl. Thamrin No. 456', '54321', 'Jakarta', 7),
('S017', 'CV. HIJ', 'Jl. Hayam Wuruk No. 123', '12345', 'Surabaya', 8),
('S018', 'UD. KLM', 'Jl. Merdeka No. 789', '67890', 'Bandung', 9),
('S019', 'PT. NOP', 'Jl. Gatot Subroto No. 456', '54321', 'Jakarta', 10),
('S020', 'CV. QRST', 'Jl. Tunjungan No. 123', '12345', 'Surabaya', 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`Id_Barang`),
  ADD KEY `Id_Pengguna` (`Id_Pengguna`);

--
-- Indeks untuk tabel `tb_hakakses`
--
ALTER TABLE `tb_hakakses`
  ADD PRIMARY KEY (`Id_Akses`);

--
-- Indeks untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `pelanggan_ibfk_1` (`Id_Barang`);

--
-- Indeks untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`Id_Pembelian`),
  ADD KEY `Id_barang` (`Id_barang`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`Id_Pengguna`),
  ADD KEY `Id_Akses` (`Id_Akses`);

--
-- Indeks untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`Id_Penjualan`),
  ADD KEY `Id_barang` (`Id_barang`);

--
-- Indeks untuk tabel `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`id_supplier`),
  ADD KEY `supp_ibfk_1` (`Id_Pembelian`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `Id_Barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_hakakses`
--
ALTER TABLE `tb_hakakses`
  MODIFY `Id_Akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  MODIFY `Id_Pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `Id_Pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `Id_Penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`Id_Pengguna`) REFERENCES `tb_pengguna` (`Id_Pengguna`);

--
-- Ketidakleluasaan untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD CONSTRAINT `pelanggan_ibfk_1` FOREIGN KEY (`Id_Barang`) REFERENCES `tb_barang` (`Id_Barang`);

--
-- Ketidakleluasaan untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD CONSTRAINT `tb_pembelian_ibfk_1` FOREIGN KEY (`Id_barang`) REFERENCES `tb_barang` (`Id_Barang`);

--
-- Ketidakleluasaan untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD CONSTRAINT `tb_pengguna_ibfk_1` FOREIGN KEY (`Id_Akses`) REFERENCES `tb_hakakses` (`Id_Akses`);

--
-- Ketidakleluasaan untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD CONSTRAINT `tb_penjualan_ibfk_1` FOREIGN KEY (`Id_barang`) REFERENCES `tb_barang` (`Id_Barang`);

--
-- Ketidakleluasaan untuk tabel `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD CONSTRAINT `supp_ibfk_1` FOREIGN KEY (`Id_Pembelian`) REFERENCES `tb_pembelian` (`Id_Pembelian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
