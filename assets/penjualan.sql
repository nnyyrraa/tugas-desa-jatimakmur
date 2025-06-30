-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 06:07 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kd_brg` varchar(6) NOT NULL,
  `nm_brg` varchar(30) NOT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `stok` int(5) DEFAULT NULL,
  `stok_min` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kd_brg`, `nm_brg`, `satuan`, `harga`, `harga_beli`, `stok`, `stok_min`) VALUES
('', '', NULL, NULL, NULL, NULL, NULL),
('A-005', 'Pensil', 'Pcs', 6000, 10000, 10, 2),
('B-001', 'buku tulis putih item', 'Buah', 1000, 900, 198, 5),
('B-003', 'Pensil Lancip', 'Buah', 3000, 2500, 98, 5),
('B-004', 'Gethuk Lindri', 'Buah', 5000, 4000, 100, 5),
('B-005', 'Mangga', 'Buah', 10000, 9000, 0, 10),
('B-006', 'Wingko', 'Buah', 10000, 9000, 100, 10),
('B-007', 'Mangga', 'Buah', 10000, 9000, 100, 10),
('B-008', 'HP', 'Buah', 2000000, 1800000, 10, 2),
('B-009', 'Tahu', 'Buah', 20000, 5000, 30, 5),
('C-015', 'Bolpoin', 'Box', 9000, 10000, 15, 2);

-- --------------------------------------------------------

--
-- Table structure for table `beli`
--

CREATE TABLE `beli` (
  `no_beli` varchar(50) NOT NULL,
  `kd_sup` char(6) NOT NULL DEFAULT '',
  `tgl_beli` date DEFAULT NULL,
  `jenis` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) UNSIGNED NOT NULL,
  `id_kategori` int(3) UNSIGNED NOT NULL DEFAULT 0,
  `judul` varchar(100) NOT NULL DEFAULT '',
  `headline` text NOT NULL,
  `isi` text NOT NULL,
  `pengirim` varchar(15) NOT NULL DEFAULT '',
  `tanggal` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `judul`, `headline`, `isi`, `pengirim`, `tanggal`) VALUES
(3, 1, 'Skincare Routine', 'Skincare membuat anda terlihat muda', 'Hai, kembali lagi dengan saya. Kali ini saya akan membahas tentang skincare routine.\r\n', 'Susanti', '2022-01-12 16:01:50'),
(4, 1, 'WHO: Omicron Lebih Cepat Menular daripada Delta, Lemahkan Vaksin', 'Varian Covide 19', 'Penelitian data awal oleh Organisasi Kesehatan Dunia (WHO) menunjukkan Covid-19 varian Omicron lebih cepat menular ketimbang Delta dan dapat melemahkan vaksin yang ada saat ini.\r\n', 'Jihan', '2022-01-12 17:34:26'),
(5, 1, 'Sebanyak 16 Unit Damkar Padamkan Api yang Bakar Dua Rumah di Cipete Utara', 'Kebakaran', 'Dua rumah di Cipete Utara, Jakarta Selatan, terbakar. Kebakaran ini sempat membuat lalu lintas di sekitar lokasi menjadi macet. Dua rumah yang terbakar tersebut berlokasi di kawasan perkampungan Jalan Haji Jian, Cilandak Utara, Jakarta Selatan.\r\n', 'Kartono', '2022-01-12 17:36:43');

-- --------------------------------------------------------

--
-- Table structure for table `bukutamu`
--

CREATE TABLE `bukutamu` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `situs` varchar(30) NOT NULL,
  `pesan` text NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukutamu`
--

INSERT INTO `bukutamu` (`id`, `nama`, `email`, `situs`, `pesan`, `waktu`) VALUES
(6, 'Ghiyatsi', 'ghiyatsi@gmail.com', 'http://ghiyatsi.com', 'pertama kali beli disini sangat puas apalagi tentang makanan dan minumannya sangat enak sekalii ...\r\n', '2017-12-06 10:08:39'),
(7, 'Ojan', 'jan@gmail.com', 'http://janyuhu.blogspot.com', 'suka bangett sama produknya apalagi untuk kerajinannya sangat indah\r\n', '2017-12-06 10:08:59'),
(12, 'Jeje', 'jeje123@gmail.com', 'https://jeje123.blogspot.com', 'akhirnya ada website toko ini, jadi lebih mudah menggunakan website ini. Keren kak !!\r\n', '2022-01-17 18:53:58'),
(14, 'Gangga Kusuma', 'ganggakusuma12@gmail.com', 'https://ganggakusuma.blogspot.', 'saya suka produk di website ini !!!\r\n', '2022-01-20 13:27:50');

-- --------------------------------------------------------

--
-- Table structure for table `calon_peserta`
--

CREATE TABLE `calon_peserta` (
  `id` int(11) DEFAULT NULL,
  `no_pendaftaran` varchar(20) DEFAULT NULL,
  `tgl_daftar` datetime DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tmp_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kel` enum('L','P') DEFAULT NULL,
  `sarjana` varchar(30) DEFAULT NULL,
  `pend_fak` varchar(50) DEFAULT NULL,
  `pend_univ` varchar(100) DEFAULT NULL,
  `organisasi` varchar(100) DEFAULT NULL,
  `ketrampilan` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `telpon` varchar(15) DEFAULT NULL,
  `hp` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon_peserta`
--

INSERT INTO `calon_peserta` (`id`, `no_pendaftaran`, `tgl_daftar`, `nama`, `tmp_lahir`, `tgl_lahir`, `jenis_kel`, `sarjana`, `pend_fak`, `pend_univ`, `organisasi`, `ketrampilan`, `alamat`, `kota`, `telpon`, `hp`, `email`) VALUES
(0, '82937-28394', '0000-00-00 00:00:00', 'Pupi', 'Bekasi', '2001-08-14', 'P', 'S1', 'Kedokteran', 'UNISULLA', 'BEM', 'BASKET', 'Jl. Tendean', 'Bekasi', '021786438242874', '087326784532', 'ppupi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `dbeli`
--

CREATE TABLE `dbeli` (
  `no_beli` varchar(50) NOT NULL DEFAULT '',
  `kd_brg` char(6) NOT NULL,
  `harga_beli` float DEFAULT NULL,
  `jml_beli` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dbeli`
--

INSERT INTO `dbeli` (`no_beli`, `kd_brg`, `harga_beli`, `jml_beli`) VALUES
('1', 'B-0004', 860000, 44),
('2', 'B-0008', 750000, 12);

-- --------------------------------------------------------

--
-- Table structure for table `djual`
--

CREATE TABLE `djual` (
  `no_jual` varchar(10) NOT NULL,
  `kd_brg` char(6) NOT NULL,
  `harga_jual` float DEFAULT NULL,
  `jml_jual` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `djual`
--

INSERT INTO `djual` (`no_jual`, `kd_brg`, `harga_jual`, `jml_jual`) VALUES
('1', 'B-001', 12000, 22),
('2', 'B-005', 60000, 50);

-- --------------------------------------------------------

--
-- Table structure for table `jual`
--

CREATE TABLE `jual` (
  `no_jual` varchar(10) NOT NULL,
  `kd_kons` char(6) DEFAULT NULL,
  `tgl_jual` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jual`
--

INSERT INTO `jual` (`no_jual`, `kd_kons`, `tgl_jual`) VALUES
('1', 'AB-001', '2022-06-15'),
('2', 'AB-001', '2022-06-15'),
('3', 'AB-002', '2019-01-23'),
('4', 'AB-005', '2013-08-06');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(3) UNSIGNED NOT NULL,
  `nm_kategori` varchar(30) NOT NULL DEFAULT '',
  `deskripsi` varchar(200) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nm_kategori`, `deskripsi`) VALUES
(1, 'Komputer', 'berita komputer'),
(2, 'Laptop', 'berita laptop');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id_kategori` int(3) UNSIGNED NOT NULL,
  `nm_kategori` varchar(30) NOT NULL DEFAULT '',
  `deskripsi` varchar(200) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori`, `nm_kategori`, `deskripsi`) VALUES
(1, 'Makanan', 'makanan indonesia'),
(2, 'Minuman', 'minuman indonesia'),
(3, 'Kerajinan', 'kerajinan anyaman bambu');

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `kd_kons` varchar(6) NOT NULL,
  `nm_kons` varchar(30) DEFAULT NULL,
  `alm_kons` varchar(50) DEFAULT NULL,
  `kota_kons` varchar(20) DEFAULT NULL,
  `kd_pos` varchar(5) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`kd_kons`, `nm_kons`, `alm_kons`, `kota_kons`, `kd_pos`, `phone`, `email`) VALUES
('AB-001', 'Lala', 'Jl. Gajah Mada', 'Semarang', '71193', '084829461835', 'Lala123@gmail.com'),
('AB-002', 'Najwa Shihab', 'Jl. WR. Supratman', 'Purwokerto', '61154', '083856294726', 'Najwa88@yahoo.com'),
('AB-003', 'Raka Abdi Tama', 'Jl. Kusuma Bangsa', 'Pekalongan', '82531', '083647294672', 'MuhRaka77@gmail.com'),
('AB-004', 'Virgania Ramdhani', 'Jl. Patriot nomer 30', 'Yogyakarta', '74368', '085739274831', 'virganiaramdhani20@gmail.com'),
('AB-007', 'Niyaira Permatasari', 'Jl. Kurinci Gg VII', 'Solo', '73921', '085273927163', 'niyairaaa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `kecamatan` varchar(200) NOT NULL,
  `dana_desa` varchar(200) NOT NULL,
  `prioritas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `kecamatan`, `dana_desa`, `prioritas`) VALUES
(1, 'Wonoayu', '6.443.139', '1'),
(2, 'Tulangan', '6.179.486', '9'),
(3, 'Tarik', '5.770.444', '5'),
(4, 'Balongbendo', '5.718.008', '12'),
(5, 'Prambon', '5.668.593', '8'),
(6, 'Krian', '5.435.441', '10'),
(7, 'Krembung', '5.409.465', '23'),
(9, 'Porong', '3.686.338', '15'),
(10, 'Laravel', '2.834.242', '18'),
(11, 'Bondowoso', '6.826.382', '2');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `nama`, `jenis_kelamin`, `tgl_lahir`, `tempat_lahir`, `alamat`) VALUES
(1, 'Choi Hyun Suk', 'Laki-laki', '1999-04-21', 'Jakarta', 'Jalan Mojokerto nomer 90'),
(2, 'Jihoon', 'Laki-laki', '2000-03-14', 'Semarang', 'Jalan Diponegoro nomer 65'),
(4, 'Park Chae Young', 'Perempuan', '1997-02-11', 'Auckland', 'Jalan Karanganyar nomer 01'),
(5, 'Kanemoto Yoshi', 'Laki-laki', '2000-05-15', 'Jepang', 'Jalan Kiminoha nomer 87'),
(6, 'Lalisa Manoban', 'Perempuan', '1997-03-27', 'Bangkok', 'Jalan Soedirman nomer 32'),
(7, 'Park Jeong Woo', 'Laki-laki', '2004-09-28', 'Ik-san', 'Jalan Ik-san nomer 28'),
(8, 'Watanabe Haruto', 'Laki-laki', '2004-04-05', 'Jepang', 'Jalan Konichiwa nomer 99'),
(9, 'Kim Jisoo', 'Perempuan', '1995-01-03', 'Seoul', 'Jalan Sidoharjo nomer 12'),
(10, 'Bang Ye Dam', 'Laki-laki', '2002-05-07', 'Seoul', 'Jalan Pemuda Gang Timoer nomer 71');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesan` int(100) UNSIGNED NOT NULL,
  `tanggal` datetime NOT NULL,
  `customer` varchar(100) NOT NULL DEFAULT '',
  `amount` varchar(100) NOT NULL DEFAULT '',
  `payment` varchar(100) NOT NULL DEFAULT '',
  `hubungan` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesan`, `tanggal`, `customer`, `amount`, `payment`, `hubungan`) VALUES
(1, '2022-01-11 08:02:29', 'Ranitya Zahara', 'Rp 300.000', 'PayLater', 'Paid\r\n'),
(5, '2022-01-20 00:19:38', 'Lalisa Mnaoban', 'Rp 899.000', 'COD', 'Paid\r\n'),
(7, '2022-01-20 00:25:13', 'Jhihan Prameswati', 'Rp 450.000', 'Transfer Bank', 'Paid\r\n'),
(8, '2022-01-20 13:32:05', 'Evelin Nur Yahani', 'Rp 720.000', 'Indomaret', 'Unpaid\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(5) UNSIGNED NOT NULL,
  `id_kategori` int(3) UNSIGNED NOT NULL DEFAULT 0,
  `nama` varchar(100) NOT NULL DEFAULT '',
  `harga` varchar(100) NOT NULL,
  `stock` int(100) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama`, `harga`, `stock`, `tanggal`) VALUES
(2, 3, 'Vodka Sunset', 'Rp 114.664', 55, '2022-01-17 23:21:39'),
(3, 3, 'Woven Bamboo Kitchen', 'Rp 501.655', 20, '2022-01-17 23:23:02');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(4) NOT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(254) DEFAULT NULL,
  `confirm_password` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id`, `user_id`, `email`, `password`, `confirm_password`) VALUES
(15, 'Tono', 'tonosudarjo@gmail.com', 'tono123', 'tono123'),
(16, 'Jojo', 'jojojayanto22@gmail.com', 'jojo33', 'jojo33'),
(17, 'Lala', 'lala123@gmail.com', 'lala123', 'lala123'),
(20, 'Karin', 'karin123@gmail.com', 'karin123', 'karin123'),
(21, 'Zhahiran', 'tsaniyazhahiran89@gmail.com', 'tsaniya123', 'tsaniya123'),
(22, 'Sarah', 'sarahgemila88@gmail.com', 'sarah88', 'sarah88'),
(23, 'Junkyu', 'kimjunkyu35@gmail.com', 'kimjunkyu', 'kimjunkyu'),
(24, 'Tsaniya', 'tsaniyazhahiran89@gmail.com', 'tsaniya123', 'tsaniya123'),
(25, 'Joko', 'jokokumadi@gmail.com', 'jokokumadi', 'jokokumadi'),
(26, 'Dono', 'donokasino@gmail.com', 'donokasino', 'donokasino');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supp` varchar(6) NOT NULL,
  `nm_supp` varchar(30) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `alm_supp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supp`, `nm_supp`, `telepon`, `alm_supp`) VALUES
('AD-001', 'Lala', '085283927389', 'Semarang'),
('AD-002', 'Jonathan', '085293645829', 'Jakarta'),
('AD-003', 'Jennie', '085787545896', 'Purwokerto');

-- --------------------------------------------------------

--
-- Table structure for table `surat_file`
--

CREATE TABLE `surat_file` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_file`
--

INSERT INTO `surat_file` (`id`, `name`, `file`) VALUES
(2, 'Surat Pemberitahuan Notifikasi Perubahan (Variasi)', 'files/Surat Pemberitahuan Notifikasi Perubahan (Variasi).pdf'),
(4, 'Surat Keterangan Domisili Tempat Tinggal', 'files/Surat Keterangan Domisili Tempat Tinggal.pdf'),
(5, 'Surat Pengantar Perekaman E-KTP', 'files/Surat Pengantar Perekaman E-KTP.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `password` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `name`, `password`) VALUES
(1, 'ajib', 'Ajib Susanto', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Tsaniya', 'Tsaniya Zhahiran', '123');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(10) NOT NULL,
  `akun` text NOT NULL,
  `judul` varchar(100) NOT NULL,
  `situs` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `akun`, `judul`, `situs`, `waktu`) VALUES
(2, 'Nihongo Mantappu', 'Reaksi Waseda Boys Pertama Kali Coba Masakan Padang', 'https://youtu.be/YBvVm9zcH0I', '2022-01-10 19:10:25'),
(3, 'Tanboy Kun', 'Legendaris!! Mukbang Makanan Para Raja Bali Porsi Jumbo', 'https://youtu.be/OYNSEuBBHfY', '2022-01-01 13:10:38'),
(4, 'Maria Marmora', 'pisctachio latte is here! | Target Starbucks | cafe vlog | ASMR', 'https://youtu.be/5ZscWgAsHrE', '2022-01-18 00:46:10'),
(5, 'Hungry Olivia ASMR', 'BESER GA ? BESER GA ? BESER LAH \r\nASMR ES JERUK SEGENTONG AUTO MBLEDOS', 'https://youtu.be/x-JcSsOHwEw', '2022-01-18 00:47:35'),
(6, 'Anom Stiemara', 'Cara Membuat Keranjang dari Anyaman Bambu', 'https://youtu.be/mWsfMFVZhn8', '2022-01-18 00:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `v_penjualan`
--

CREATE TABLE `v_penjualan` (
  `no_jual` varchar(10) DEFAULT NULL,
  `tgl_jual` date NOT NULL,
  `nm_kons` varchar(30) DEFAULT NULL,
  `kd_brg` char(6) DEFAULT NULL,
  `nm_brg` varchar(30) DEFAULT NULL,
  `harga_jual` float DEFAULT NULL,
  `jml_jual` int(4) DEFAULT NULL,
  `totjual` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `v_penjualan`
--

INSERT INTO `v_penjualan` (`no_jual`, `tgl_jual`, `nm_kons`, `kd_brg`, `nm_brg`, `harga_jual`, `jml_jual`, `totjual`) VALUES
('13', '2022-06-02', 'Nana', 'B-0003', 'mouse', 50000, 12, 60000),
('10', '2022-06-07', 'Lala', 'B-0005', 'komputer', 2000000, 5, 20000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kd_brg`);

--
-- Indexes for table `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`no_beli`),
  ADD KEY `MUL` (`kd_sup`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `bukutamu`
--
ALTER TABLE `bukutamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dbeli`
--
ALTER TABLE `dbeli`
  ADD PRIMARY KEY (`no_beli`,`kd_brg`);

--
-- Indexes for table `djual`
--
ALTER TABLE `djual`
  ADD PRIMARY KEY (`no_jual`,`kd_brg`);

--
-- Indexes for table `jual`
--
ALTER TABLE `jual`
  ADD PRIMARY KEY (`no_jual`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`kd_kons`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supp`);

--
-- Indexes for table `surat_file`
--
ALTER TABLE `surat_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `v_penjualan`
--
ALTER TABLE `v_penjualan`
  ADD PRIMARY KEY (`tgl_jual`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bukutamu`
--
ALTER TABLE `bukutamu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id_kategori` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesan` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `surat_file`
--
ALTER TABLE `surat_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
