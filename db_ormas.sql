-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2020 at 04:37 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ormas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dataormas`
--

CREATE TABLE `tb_dataormas` (
  `id_ormas` int(11) NOT NULL,
  `tanggal_daftar` datetime NOT NULL,
  `nama_ormas` varchar(100) NOT NULL,
  `nama_notaris` varchar(100) NOT NULL,
  `nomortglakta` varchar(50) NOT NULL,
  `nomorsrtpermohonan` varchar(50) NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `program_kerja` varchar(50) NOT NULL,
  `alamat_kantor` text NOT NULL,
  `tempat_pendirian` varchar(100) NOT NULL,
  `waktu_pendirian` date NOT NULL,
  `asas_ciri_ormas` varchar(100) NOT NULL,
  `tujuan_ormas` varchar(100) NOT NULL,
  `nama_pendiri` varchar(100) NOT NULL,
  `nik_pendiri` char(16) NOT NULL,
  `agama_pendiri` varchar(12) NOT NULL,
  `kewarganegaraan_pendiri` enum('WNA','WNI') NOT NULL,
  `jenis_kelamin_pendiri` enum('Pria','Wanita') NOT NULL,
  `tempat_lahir_pendiri` varchar(50) NOT NULL,
  `tanggal_lahir_pendiri` date NOT NULL,
  `statuspkw_pendiri` enum('Kawin','Belum Kawin') NOT NULL,
  `alamat_pendiri` text NOT NULL,
  `nomor_telp_pendiri` varchar(13) NOT NULL,
  `pekerjaan_pendiri` varchar(50) NOT NULL,
  `nama_pembina` varchar(100) DEFAULT NULL,
  `nama_penasihat` varchar(100) DEFAULT NULL,
  `nama_ketua` varchar(100) NOT NULL,
  `nik_ketua` char(16) NOT NULL,
  `agama_ketua` varchar(13) NOT NULL,
  `kewarganegaraan_ketua` enum('WNA','WNI') NOT NULL,
  `jenis_kelamin_ketua` enum('Pria','Wanita') NOT NULL,
  `tempat_lahir_ketua` varchar(100) NOT NULL,
  `tanggal_lahir_ketua` date NOT NULL,
  `statuspkw_ketua` enum('Kawin','Belum') NOT NULL,
  `alamat_ketua` text NOT NULL,
  `nomor_telp_ketua` varchar(13) NOT NULL,
  `nama_sekretaris` varchar(100) NOT NULL,
  `nama_bendahara` varchar(100) NOT NULL,
  `masa_akti_kepengurusan` varchar(50) NOT NULL,
  `keputusan_tertinggi_ormas` varchar(50) NOT NULL,
  `cabang` varchar(100) NOT NULL,
  `npwp` char(15) NOT NULL,
  `sumber_keuangan` enum('DN','LN') NOT NULL,
  `berbadan_hukum` int(1) NOT NULL,
  `usaha_ormas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pejabat`
--

CREATE TABLE `tb_pejabat` (
  `id_pejabat` int(11) NOT NULL,
  `Jabatan` varchar(100) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Pangkat` varchar(100) NOT NULL,
  `NIP` char(18) NOT NULL,
  `Dinas` varchar(100) NOT NULL,
  `Provinsi` varchar(100) NOT NULL,
  `Status` enum('Kepala Badan','Pemeriksa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pejabat`
--

INSERT INTO `tb_pejabat` (`id_pejabat`, `Jabatan`, `Nama`, `Pangkat`, `NIP`, `Dinas`, `Provinsi`, `Status`) VALUES
(1, 'Bupati', 'Apri Sujadi', 'Eselon I123123213', '091092020101929392', 'Kepala Daerah', 'Kepulauan Riau', 'Pemeriksa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `level_akses` enum('Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level_akses`) VALUES
(1, 'Hendra Riadi', 'Admin', '$2y$10$T8whvHn8Sg51nDV9QCM1ceIcJZWaKijBeZYTKv4l2YdbmcvfeELvO', 'Admin'),
(8, 'Sonoda Umi', 'Umi', '$2y$10$tJgKr.HEtEMiboaOaYtIdOUXByYs3Pr/.voIDadMlS5OAyedudoM.', 'Admin'),
(9, 'Bondan Chorisma', 'Bondan', '$2y$10$iWR002jHrB8ovSQaHEiVBu8qtsNf77xBdW7KwDHw9LXBeh.LAfmJ6', 'Admin'),
(10, 'Indri Junanda', 'Indri', '$2y$10$a4WJcIeij8LRxxf3uoMXAuOfmaDyzjhk2fRk65RJ5wW02qtvyxZ7K', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_verifikasi`
--

CREATE TABLE `tb_verifikasi` (
  `id_verifikasi` int(11) NOT NULL,
  `id_ormas` int(11) NOT NULL,
  `file_lambang_logo` varchar(30) NOT NULL,
  `verif01` int(1) NOT NULL,
  `file_bendera_ormas` varchar(30) NOT NULL,
  `verif02` int(1) NOT NULL,
  `file_surat_permohonan` varchar(30) NOT NULL,
  `verif03` int(1) NOT NULL,
  `file_akta` varchar(30) NOT NULL,
  `verif04` int(1) NOT NULL,
  `file_ad_art` varchar(30) NOT NULL,
  `verif05` int(1) NOT NULL,
  `file_program_ormas` varchar(30) NOT NULL,
  `verif06` int(1) NOT NULL,
  `file_skpengurus` varchar(30) NOT NULL,
  `verif07` int(1) NOT NULL,
  `file_fc_ktpketua` varchar(30) NOT NULL,
  `verif08` int(1) NOT NULL,
  `file_fc_ktpsekretaris` varchar(30) NOT NULL,
  `verif09` int(1) NOT NULL,
  `file_fc_ktpbendahara` varchar(30) NOT NULL,
  `verif10` int(1) NOT NULL,
  `file_sk_domisili` varchar(30) NOT NULL,
  `verif11` int(1) NOT NULL,
  `file_npwp` varchar(30) NOT NULL,
  `verif12` int(1) NOT NULL,
  `file_fotosekretariat` varchar(30) NOT NULL,
  `verif13` int(1) NOT NULL,
  `file_surat_pernyataan` varchar(30) NOT NULL,
  `verif14` int(1) NOT NULL,
  `file_daftarisian` varchar(30) NOT NULL,
  `verif15` int(1) NOT NULL,
  `file_suketkeabsahan` varchar(30) NOT NULL,
  `verif16` int(1) NOT NULL,
  `file_skt` varchar(30) NOT NULL,
  `verif17` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dataormas`
--
ALTER TABLE `tb_dataormas`
  ADD PRIMARY KEY (`id_ormas`);

--
-- Indexes for table `tb_pejabat`
--
ALTER TABLE `tb_pejabat`
  ADD PRIMARY KEY (`id_pejabat`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_verifikasi`
--
ALTER TABLE `tb_verifikasi`
  ADD PRIMARY KEY (`id_verifikasi`),
  ADD KEY `id_ormas` (`id_ormas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dataormas`
--
ALTER TABLE `tb_dataormas`
  MODIFY `id_ormas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pejabat`
--
ALTER TABLE `tb_pejabat`
  MODIFY `id_pejabat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_verifikasi`
--
ALTER TABLE `tb_verifikasi`
  MODIFY `id_verifikasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_verifikasi`
--
ALTER TABLE `tb_verifikasi`
  ADD CONSTRAINT `tb_verifikasi_ibfk_1` FOREIGN KEY (`id_ormas`) REFERENCES `tb_dataormas` (`id_ormas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
