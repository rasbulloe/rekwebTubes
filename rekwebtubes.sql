-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2019 pada 02.07
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekwebtubes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `noTelp` varchar(15) DEFAULT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `produk_id` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `produk_short_desc` text NOT NULL,
  `produk_long_desc` text DEFAULT NULL,
  `produk_image` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `produk_harga` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`produk_id`, `nama_produk`, `produk_short_desc`, `produk_long_desc`, `produk_image`, `produk_harga`) VALUES
(1, 'harte', 'Lampu Kerja LED', 'Anda dapat memilih untuk menyalakannya melalui port USB di komputer dan mengarahkan cahaya ke atas atau bawah. Terbuat dari pipa logam yang melengkung, ekspresi minimalis namun menyenangkan dan mudah dipasang.', 'harte.jpg', '299.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(128) NOT NULL,
  `keterangan_short` varchar(128) NOT NULL,
  `keterangan_long` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan_short`, `keterangan_long`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'brusali', 'Meja TV yang keren dan tahan lama', 'Jalur keluar kabel memudahkan untuk mengeluarkan kabel dari belakang sehingga tidak terlihat tetapi mudah diambil saat dibutuhkan.\r\nRak yang dapat diatur; menyesuaikan ruang di antara rak sesuai kebutuhan anda.\r\nKompartemen t', 'meja', 999000, 40, 'brusali.jpg'),
(2, 'Manick', 'Kotak dengan penutup Hitam', '', 'kotak penyimpanan', 249000, 32, 'manick.jpg'),
(3, 'BILLY Putih', 'Lemari buku dg panel/pintu kaca, putih', '', 'rak buku', 2799000, 32, 'billy white.jpg'),
(4, 'JOKKMOKK', 'Meja dan 4 kursi, warna antik', '', 'meja makan', 2299000, 32, 'jokkmokk.jpg'),
(19, 'POANG', 'Kursi Berlengan Anak', '', 'Kursi', 395000, 44, 'POANG.jpg'),
(20, 'HEMNES', 'Lemari 3 laci , Putih', '', 'Lemari Penyimpanan', 1999000, 32, 'hemnes.jpg'),
(21, 'SLATTUM', 'Rangka tempat tidur berpelapis , knisa abu abu muda', '', 'Tempat Tidur', 2999000, 36, 'slattum.jpg'),
(22, 'PLATSA', 'Rangka tempat tidur dengan penyimpanan ', '', 'Tempat Tidur', 4950000, 32, 'PLATSA.jpg'),
(23, 'SNILLE', 'Kursi Putar', '', 'Kursi', 349000, 11, 'SNILLE.jpg'),
(24, 'ADILS', 'Meja', '', 'Meja', 489000, 22, 'Adils.jpg'),
(25, 'STEFAN', 'Meja 2 kursi , warna antik lembut , coklat hitam', '', 'Meja Makan', 2989000, 22, 'stefan.jpg'),
(26, 'BUSUNGE', 'Lemari 2 laci , Putih', '', 'Lemari Penyimpanan', 1499000, 12, 'Busunge.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(9, 'dedeaminudin', 'jalan komodor udara supadio', '2019-12-20 20:46:04', '2019-12-21 20:46:04'),
(10, 'Indrawansyah ', 'setiabudi', '2019-12-22 06:10:45', '2019-12-23 06:10:45'),
(11, 'Karang Taruna', 'padjadjaran 203', '2019-12-23 10:25:52', '2019-12-24 10:25:52'),
(12, 'Imanudin N', 'padjadjaran 203', '2019-12-26 11:24:48', '2019-12-27 11:24:48'),
(13, 'Karang Taruna', 'padjadjaran 203', '2019-12-26 11:27:04', '2019-12-27 11:27:04'),
(14, 'Karang Taruna', 'padjadjaran 203', '2019-12-26 22:21:18', '2019-12-27 22:21:18'),
(15, 'Karang Taruna', 'padjadjaran 203', '2019-12-26 22:28:47', '2019-12-27 22:28:47'),
(16, 'Dede Aminudin N', 'padjadjaran 203', '2019-12-26 23:00:10', '2019-12-27 23:00:10'),
(17, 'Faza Pradipta Pradana Aji', 'padjadjaran 203', '2019-12-26 23:16:45', '2019-12-27 23:16:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(26, 7, 2, 'Manick', 1, 249000, ''),
(27, 7, 3, 'BILLY Putih', 1, 2799000, ''),
(28, 7, 4, 'JOKKMOKK', 1, 2299000, ''),
(29, 9, 1, 'Brusalli', 1, 999000, ''),
(30, 9, 2, 'Manick', 1, 249000, ''),
(31, 10, 1, 'Brusalli', 1, 999000, ''),
(32, 11, 1, 'brusali', 2, 999000, ''),
(33, 11, 2, 'Manick', 1, 249000, ''),
(34, 12, 1, 'brusali', 1, 999000, ''),
(35, 12, 2, 'Manick', 1, 249000, ''),
(36, 13, 2, 'Manick', 1, 249000, ''),
(37, 14, 3, 'BILLY Putih', 1, 2799000, ''),
(38, 14, 4, 'JOKKMOKK', 1, 2299000, ''),
(39, 15, 2, 'Manick', 2, 249000, ''),
(40, 16, 20, 'HEMNES', 1, 1999000, ''),
(41, 17, 24, 'ADILS', 1, 489000, ''),
(42, 17, 25, 'STEFAN', 1, 2989000, ''),
(43, 17, 23, 'SNILLE', 1, 349000, ''),
(44, 17, 26, 'BUSUNGE', 1, 1499000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) CHARACTER SET utf8 NOT NULL,
  `email` varchar(128) CHARACTER SET utf8 NOT NULL,
  `image` varchar(128) CHARACTER SET utf8 NOT NULL,
  `password` varchar(256) CHARACTER SET utf8 NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'admin', 'admin@admin.com', 'default.jpg', '$2y$10$7vbgVZ0VAYgKW8uuEAraxOZOcSxd/o44iB485d58WdSBn7Zf.4GMO', 1, 1, 1576258618),
(4, 'test', 'test@test.com', 'default.png', '$2y$10$ccqtRcxNZqAcp2R94ZiDVOLVo1Hv5hXnk2P9ifJo7mDNL4bWFsqI6', 2, 1, 1576391386);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Home', 'admin', '', 1),
(2, 2, 'Home', 'user', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
