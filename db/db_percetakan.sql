-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 23, 2020 at 09:02 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_percetakan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alamat_kirim`
--

CREATE TABLE `tb_alamat_kirim` (
  `id_alamat_kirim` int(11) NOT NULL,
  `kecamatan` enum('Test1','Test2') NOT NULL,
  `kelurahan` enum('Test1','Test2') NOT NULL,
  `rw` varchar(3) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `dusun` varchar(50) NOT NULL,
  `kode_pos` enum('111','222') NOT NULL,
  `biaya_kirim` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_alamat`
--

CREATE TABLE `tb_detail_alamat` (
  `id_detail_alamat` int(11) NOT NULL,
  `kecamatan` enum('test') NOT NULL,
  `kelurahan` enum('test') NOT NULL,
  `dusun` varchar(50) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `id_pelanggan` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `sub_harga` int(6) NOT NULL,
  `kuantitas` int(5) NOT NULL,
  `jenis_kertas` enum('HVS','KARTON','MANILA') NOT NULL,
  `ukuran` enum('A3','A4','Folio') NOT NULL,
  `sub_total` int(6) NOT NULL,
  `sisi` enum('Satu Sisi','Dua Sisi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan_pelanggan`
--

CREATE TABLE `tb_laporan_pelanggan` (
  `id_laporan` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `file_laporan_pelanggan` varchar(50) NOT NULL,
  `tgl_laporan_pelanggan` date NOT NULL,
  `status_cek` enum('Belum Cek','Sudah Cek') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan_pendapatan`
--

CREATE TABLE `tb_laporan_pendapatan` (
  `id_laporan_pendapatan` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `file_laporan_pendapatan` varchar(50) NOT NULL,
  `tgl_laporan_pendapatan` date NOT NULL,
  `status_cek` enum('Belum Cek','Sudah Cek') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan_transaksi`
--

CREATE TABLE `tb_laporan_transaksi` (
  `id_laporan_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `file_laporan_transaksi` varchar(50) NOT NULL,
  `tgl_laporan_transaksi` date NOT NULL,
  `status_cek` enum('Belum Cek','Sudah Cek') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `id_layanan` int(11) NOT NULL,
  `nama_layanan` varchar(50) NOT NULL,
  `foto_layanan` varchar(50) NOT NULL,
  `deskripsi_layanan` varchar(200) NOT NULL,
  `harga_layanan` int(5) NOT NULL,
  `status_layanan` enum('Tersedia','Tidak Tersedia') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_layanan`
--

INSERT INTO `tb_layanan` (`id_layanan`, `nama_layanan`, `foto_layanan`, `deskripsi_layanan`, `harga_layanan`, `status_layanan`) VALUES
(9, 'Cetak Foto Berbagai Ukuran', 'print2.jpg', 'Cetak Foto Berbagai Ukuran', 2000, 'Tersedia'),
(10, 'Cetak Poster A3', 'print.jpg', 'Cetak Desain Poster Anda Dengan Ukuran A3', 3000, 'Tersedia'),
(11, 'Print Hitam Putih', 'print.jpg', 'Print File Anda Dengan Warna Hitam Putih', 500, 'Tersedia'),
(12, 'Print Warna', 'print_foto.png', 'Print File Anda Dengan Warna Yang Tajam dan Tidak Pecah', 1500, 'Tersedia'),
(13, 'Print Kartu Nama', 'print_foto.png', 'Cetak Desain Kartu Nama Anda Dengan Warna Tajam dan Kualitas Baik', 1000, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(11) NOT NULL,
  `level_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `level_name`) VALUES
(1, 'Pimpinan'),
(2, 'Admin'),
(3, 'Pelanggan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_level_menu`
--

CREATE TABLE `tb_level_menu` (
  `id_level` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `menu_url` varchar(100) NOT NULL,
  `menu_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) DEFAULT NULL,
  `kota_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_detail_alamat` int(11) DEFAULT NULL,
  `id_penilaian` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `no_rek` varchar(50) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `metode` enum('COD','Transfer Bank') NOT NULL,
  `status_pembayaran` enum('Belum Bayar','Sudah Bayar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `status_login` enum('Offline','Online') NOT NULL,
  `password` varchar(32) NOT NULL,
  `foto_pengguna` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `status_akun` enum('Proses','Aktif','Blocked') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `id_level`, `tgl_daftar`, `username`, `status_login`, `password`, `foto_pengguna`, `jenis_kelamin`, `email`, `no_hp`, `status_akun`) VALUES
(6, 3, '2020-03-12', 'Test', 'Offline', '8ce4b16b22b58894aa86c421e8759df3', NULL, 'Perempuan', 'tes@gmail.com', 'l', 'Aktif'),
(7, 3, '2020-04-16', 'seohyeon', 'Offline', '202cb962ac59075b964b07152d234b70', NULL, 'Perempuan', 'tes@gmail.com', '0889898007890', 'Proses'),
(8, 3, '2020-04-16', 'seohyeon', 'Offline', 'c4ca4238a0b923820dcc509a6f75849b', NULL, 'Perempuan', 'tes@gmail.com', '123456789012', 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengiriman`
--

CREATE TABLE `tb_pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `tgl_pengiriman` date NOT NULL,
  `tgl_penerimaan` date NOT NULL,
  `status_pengiriman` enum('Diproses','Dikemas','Dikirim','Selesai') NOT NULL,
  `konfirmasi_pengiriman` enum('Belum Diterima','Sudah Diterima') NOT NULL,
  `id_alamat_kirim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penilaian`
--

CREATE TABLE `tb_penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `komentar` varchar(200) NOT NULL,
  `nilai` int(1) NOT NULL,
  `tgl_penilaian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil_toko`
--

CREATE TABLE `tb_profil_toko` (
  `id_profil_toko` int(11) NOT NULL,
  `foto_toko` varchar(50) NOT NULL,
  `deskripsi_toko` varchar(200) NOT NULL,
  `alamat_toko` varchar(100) NOT NULL,
  `nomor_telpon_toko` varchar(13) NOT NULL,
  `email_toko` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_profil_toko`
--

INSERT INTO `tb_profil_toko` (`id_profil_toko`, `foto_toko`, `deskripsi_toko`, `alamat_toko`, `nomor_telpon_toko`, `email_toko`) VALUES
(2, 'wall6.jpg', 'PERMATA SHOP merupakan percetakan online Banjarnegara. Kami melayani dengan hati dan profesional. Kami percetakan aman dan terpercaya untuk Anda.', 'Banjarnegara', '0897765432459', 'tes@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_promosi`
--

CREATE TABLE `tb_promosi` (
  `id_info` int(11) NOT NULL,
  `judul_info` varchar(50) NOT NULL,
  `gambar_info` varchar(50) NOT NULL,
  `tgl_info` date NOT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `deskripsi_info` varchar(200) NOT NULL,
  `status_info` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_promosi`
--

INSERT INTO `tb_promosi` (`id_info`, `judul_info`, `gambar_info`, `tgl_info`, `tgl_akhir`, `deskripsi_info`, `status_info`) VALUES
(2, 'iki validasine podo mau', 'email-2-icon.png', '2020-04-05', NULL, 'iki yo podo mau', 'Aktif'),
(3, 'Diskon Akhir Tahun', '3b8ea2b9591102defc3d66f95eee7750.jpg', '2020-04-14', NULL, 'Menjelang Akhir Tahun 2020 Permata Toko Menghadirkan Diskon 50% Untuk Semua Layanan', 'Aktif'),
(4, 'iki validasine podo mau', 'IMG_20200413_134435.jpg', '2020-04-23', NULL, 'ccfgcxvcvcxcxcx', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `id_pengiriman` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `sisi` enum('Satu Sisi','Dua Sisi') NOT NULL,
  `kuantitas` int(5) NOT NULL,
  `jenis_kertas` enum('HVS','KARTON','MANILA') NOT NULL,
  `ukuran_kertas` enum('A3','A4','Folio') NOT NULL,
  `sub_harga` int(6) NOT NULL,
  `sub_total` int(6) NOT NULL,
  `total` int(6) NOT NULL,
  `status_transaksi` enum('Diproses','Di batalkan','Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alamat_kirim`
--
ALTER TABLE `tb_alamat_kirim`
  ADD PRIMARY KEY (`id_alamat_kirim`);

--
-- Indexes for table `tb_detail_alamat`
--
ALTER TABLE `tb_detail_alamat`
  ADD PRIMARY KEY (`id_detail_alamat`);

--
-- Indexes for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD KEY `id_layanan` (`id_layanan`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `tb_laporan_pelanggan`
--
ALTER TABLE `tb_laporan_pelanggan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `tb_laporan_pendapatan`
--
ALTER TABLE `tb_laporan_pendapatan`
  ADD PRIMARY KEY (`id_laporan_pendapatan`),
  ADD KEY `id_pembayaran` (`id_pembayaran`);

--
-- Indexes for table `tb_laporan_transaksi`
--
ALTER TABLE `tb_laporan_transaksi`
  ADD PRIMARY KEY (`id_laporan_transaksi`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_level_menu`
--
ALTER TABLE `tb_level_menu`
  ADD KEY `id_level` (`id_level`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_detail_alamat` (`id_detail_alamat`),
  ADD KEY `id_penilaian` (`id_penilaian`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `tb_pengiriman`
--
ALTER TABLE `tb_pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`),
  ADD KEY `id_alamat_kirim` (`id_alamat_kirim`);

--
-- Indexes for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `tb_profil_toko`
--
ALTER TABLE `tb_profil_toko`
  ADD PRIMARY KEY (`id_profil_toko`);

--
-- Indexes for table `tb_promosi`
--
ALTER TABLE `tb_promosi`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_pembayaran` (`id_pembayaran`),
  ADD KEY `id_pengiriman` (`id_pengiriman`),
  ADD KEY `id_layanan` (`id_layanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alamat_kirim`
--
ALTER TABLE `tb_alamat_kirim`
  MODIFY `id_alamat_kirim` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_detail_alamat`
--
ALTER TABLE `tb_detail_alamat`
  MODIFY `id_detail_alamat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_laporan_pelanggan`
--
ALTER TABLE `tb_laporan_pelanggan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_laporan_pendapatan`
--
ALTER TABLE `tb_laporan_pendapatan`
  MODIFY `id_laporan_pendapatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_laporan_transaksi`
--
ALTER TABLE `tb_laporan_transaksi`
  MODIFY `id_laporan_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_pengiriman`
--
ALTER TABLE `tb_pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_profil_toko`
--
ALTER TABLE `tb_profil_toko`
  MODIFY `id_profil_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_promosi`
--
ALTER TABLE `tb_promosi`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD CONSTRAINT `tb_keranjang_ibfk_1` FOREIGN KEY (`id_layanan`) REFERENCES `tb_layanan` (`id_layanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_keranjang_ibfk_2` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_laporan_pelanggan`
--
ALTER TABLE `tb_laporan_pelanggan`
  ADD CONSTRAINT `tb_laporan_pelanggan_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_laporan_pendapatan`
--
ALTER TABLE `tb_laporan_pendapatan`
  ADD CONSTRAINT `tb_laporan_pendapatan_ibfk_1` FOREIGN KEY (`id_pembayaran`) REFERENCES `tb_pembayaran` (`id_pembayaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_laporan_transaksi`
--
ALTER TABLE `tb_laporan_transaksi`
  ADD CONSTRAINT `tb_laporan_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_level_menu`
--
ALTER TABLE `tb_level_menu`
  ADD CONSTRAINT `tb_level_menu_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `tb_level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_level_menu_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `tb_menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD CONSTRAINT `tb_pelanggan_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `tb_pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pelanggan_ibfk_2` FOREIGN KEY (`id_detail_alamat`) REFERENCES `tb_detail_alamat` (`id_detail_alamat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pelanggan_ibfk_3` FOREIGN KEY (`id_penilaian`) REFERENCES `tb_penilaian` (`id_penilaian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD CONSTRAINT `tb_pengguna_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `tb_level` (`id_level`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_pengiriman`
--
ALTER TABLE `tb_pengiriman`
  ADD CONSTRAINT `tb_pengiriman_ibfk_1` FOREIGN KEY (`id_alamat_kirim`) REFERENCES `tb_alamat_kirim` (`id_alamat_kirim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`id_pembayaran`) REFERENCES `tb_pembayaran` (`id_pembayaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_transaksi_ibfk_3` FOREIGN KEY (`id_pengiriman`) REFERENCES `tb_pengiriman` (`id_pengiriman`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_transaksi_ibfk_4` FOREIGN KEY (`id_layanan`) REFERENCES `tb_layanan` (`id_layanan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
