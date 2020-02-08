-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2020 at 12:50 PM
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
  `nama_ormas` varchar(50) NOT NULL,
  `nama_notaris` varchar(50) NOT NULL,
  `nomortglakta` varchar(50) NOT NULL,
  `nomorsrtpermohonan` varchar(50) NOT NULL,
  `bidang` varchar(50) NOT NULL,
  `program_kerja` varchar(50) NOT NULL,
  `alamat_kantor` text NOT NULL,
  `tempat_pendirian` varchar(50) NOT NULL,
  `waktu_pendirian` date NOT NULL,
  `asas_ciri_ormas` varchar(50) NOT NULL,
  `tujuan_ormas` text NOT NULL,
  `nama_pendiri` varchar(50) NOT NULL,
  `nik_pendiri` char(16) NOT NULL,
  `agama_pendiri` varchar(15) NOT NULL,
  `kewarganegaraan_pendiri` varchar(50) NOT NULL,
  `jenis_kelamin_pendiri` enum('Pria','Wanita') NOT NULL,
  `tempat_lahir_pendiri` varchar(50) NOT NULL,
  `tanggal_lahir_pendiri` date NOT NULL,
  `statuspkw_pendiri` varchar(20) NOT NULL,
  `alamat_pendiri` text NOT NULL,
  `nomor_telp_pendiri` char(15) NOT NULL,
  `pekerjaan_pendiri` varchar(50) NOT NULL,
  `nama_pembina` varchar(50) DEFAULT NULL,
  `nama_penasihat` varchar(50) DEFAULT NULL,
  `nama_ketua` varchar(50) NOT NULL,
  `nik_ketua` char(16) NOT NULL,
  `agama_ketua` varchar(10) NOT NULL,
  `kewarganegaraan_ketua` varchar(10) NOT NULL,
  `jenis_kelamin_ketua` enum('Pria','Wanita') NOT NULL,
  `tempat_lahir_ketua` varchar(50) NOT NULL,
  `tanggal_lahir_ketua` date NOT NULL,
  `statuspkw_ketua` varchar(20) NOT NULL,
  `alamat_ketua` text NOT NULL,
  `nomor_telp_ketua` char(15) NOT NULL,
  `nama_sekretaris` varchar(50) NOT NULL,
  `nama_bendahara` varchar(50) NOT NULL,
  `masa_bakti_kepengurusan` varchar(50) NOT NULL,
  `keputusan_tertinggi_ormas` varchar(50) NOT NULL,
  `cabang` varchar(50) NOT NULL,
  `npwp` char(15) NOT NULL,
  `sumber_keuangan` varchar(50) NOT NULL,
  `berbadan_hukum` varchar(50) NOT NULL,
  `usaha_ormas` varchar(50) NOT NULL,
  `file_lambang_logo` varchar(50) NOT NULL,
  `verif01` enum('Ada','Tidak') NOT NULL,
  `file_bendera_ormas` varchar(50) NOT NULL,
  `verif02` enum('Ada','Tidak') NOT NULL,
  `file_surat_permohonan` varchar(50) NOT NULL,
  `verif03` enum('Ada','Tidak') NOT NULL,
  `file_akta` varchar(50) NOT NULL,
  `verif04` enum('Ada','Tidak') NOT NULL,
  `file_ad_art` varchar(50) NOT NULL,
  `verif05` enum('Ada','Tidak') NOT NULL,
  `file_program_ormas` varchar(50) NOT NULL,
  `verif06` enum('Ada','Tidak') NOT NULL,
  `file_skpengurus` varchar(50) NOT NULL,
  `verif07` enum('Ada','Tidak') NOT NULL,
  `file_fc_ktpketua` varchar(50) NOT NULL,
  `verif08` enum('Ada','Tidak') NOT NULL,
  `file_fc_ktpsekretaris` varchar(50) NOT NULL,
  `verif09` enum('Ada','Tidak') NOT NULL,
  `file_fc_ktpbendahara` varchar(50) NOT NULL,
  `verif10` enum('Ada','Tidak') NOT NULL,
  `file_sk_domisili` varchar(50) NOT NULL,
  `verif11` enum('Ada','Tidak') NOT NULL,
  `file_npwp` varchar(50) NOT NULL,
  `verif12` enum('Ada','Tidak') NOT NULL,
  `file_fotosekretaris` varchar(50) NOT NULL,
  `verif13` enum('Ada','Tidak') NOT NULL,
  `file_surat_pernyataan` varchar(50) NOT NULL,
  `verif14` enum('Ada','Tidak') NOT NULL,
  `file_daftarisian` varchar(50) NOT NULL,
  `verif15` enum('Ada','Tidak') NOT NULL,
  `file_suketkeabasahan` varchar(50) NOT NULL,
  `verif16` enum('Ada','Tidak') NOT NULL,
  `file_skt` varchar(50) NOT NULL,
  `verif17` enum('Ada','Tidak') NOT NULL
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
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemeriksa`
--

CREATE TABLE `tb_pemeriksa` (
  `id_pemeriksa` int(11) NOT NULL,
  `nama_pemeriksa` varchar(100) NOT NULL,
  `pangkat_pemeriksa` varchar(100) NOT NULL,
  `nip_pemeriksa` char(18) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Administrator', 'Admin', '$2y$10$T8whvHn8Sg51nDV9QCM1ceIcJZWaKijBeZYTKv4l2YdbmcvfeELvO', 'Admin'),
(8, 'Sonoda Umi', 'Umi', '$2y$10$tJgKr.HEtEMiboaOaYtIdOUXByYs3Pr/.voIDadMlS5OAyedudoM.', 'Admin'),
(9, 'Bondan Chorisma', 'Bondan', '$2y$10$iWR002jHrB8ovSQaHEiVBu8qtsNf77xBdW7KwDHw9LXBeh.LAfmJ6', 'Admin'),
(10, 'Indri Junanda', 'Indri', '$2y$10$a4WJcIeij8LRxxf3uoMXAuOfmaDyzjhk2fRk65RJ5wW02qtvyxZ7K', 'Admin');

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
-- Indexes for table `tb_pemeriksa`
--
ALTER TABLE `tb_pemeriksa`
  ADD PRIMARY KEY (`id_pemeriksa`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

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
  MODIFY `id_pejabat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pemeriksa`
--
ALTER TABLE `tb_pemeriksa`
  MODIFY `id_pemeriksa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
