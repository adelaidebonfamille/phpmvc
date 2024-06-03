-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2024 at 04:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekonomi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidang`
--

CREATE TABLE `bidang` (
  `id_bidang` varchar(5) NOT NULL,
  `bidang` varchar(20) NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bidang`
--

INSERT INTO `bidang` (`id_bidang`, `bidang`, `deskripsi`) VALUES
('BE', 'Dasar Manajemen', 'Bidang dasar manajemen mencakup konsep-konsep, teori, dan prinsip-prinsip fundamental yang menjadi landasan bagi pemahaman lebih lanjut dalam disiplin manajemen.'),
('FM', 'Manajemen Keuangan', 'Berkaitan dengan pengelolaan aset keuangan organisasi, analisis investasi, manajemen risiko, dan pengambilan keputusan keuangan.'),
('HRM', 'Manajemen Sumber Day', 'Fokus pada pengelolaan aspek manusia dalam organisasi, termasuk rekrutmen, pelatihan, pengembangan, dan pengelolaan kinerja karyawan.'),
('IM', 'Manajemen Internasio', 'Fokus pada aspek manajemen yang berkaitan dengan operasi lintas negara, termasuk perdagangan, ekspansi internasional, dan manajemen multikultural.'),
('IME', 'Manajemen Inovasi da', 'Memfokuskan pada pengembangan inovasi dan kewirausahaan dalam konteks bisnis, termasuk strategi pengembangan produk dan penerapan teknologi baru.'),
('MM', 'Manajemen Pemasaran', 'Mempelajari strategi pemasaran, analisis pasar, pengembangan produk, dan penerapan teknologi digital dalam pemasaran.'),
('OM', 'Manajemen Operasi', 'Memahami pengelolaan proses operasional, efisiensi produksi, pengendalian kualitas, dan penerapan teknik untuk meningkatkan produktivitas.'),
('PM', 'Manajemen Proyek', 'Memahami pengelolaan proyek dari perencanaan hingga pelaksanaan, termasuk pengendalian biaya, waktu, dan sumber daya.'),
('SM', 'Manajemen Strategis', 'Mempelajari pengembangan strategi jangka panjang organisasi, analisis lingkungan bisnis, dan pengambilan keputusan tingkat tinggi.');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_dosen` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nip`, `nama_dosen`) VALUES
(21, '198201011234001', 'Ahmad Sudirman'),
(22, '198305101234002', 'Budi Santoso'),
(23, '198407151234003', 'Chandra Wijaya'),
(24, '198501121234004', 'Dewi Kartika'),
(25, '198605111234005', 'Eko Wibowo'),
(26, '198707121234006', 'Farida Susanti'),
(27, '198808181234007', 'Gita Anggraini'),
(28, '198909091234008', 'Heru Prasetyo'),
(29, '199001011234009', 'Indah Permata Sari'),
(30, '199102211234010', 'Joko Widodo');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` varchar(4) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL,
  `id_fakultas` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `id_fakultas`) VALUES
('0101', 'Manajemen', 1),
('0102', 'Ekonomi Pembangunan', 1),
('0103', 'Akuntansi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id` int(11) NOT NULL,
  `id_mk` varchar(11) NOT NULL,
  `matkul` text NOT NULL,
  `hari` varchar(7) NOT NULL,
  `ruang` text NOT NULL,
  `waktu` time NOT NULL,
  `id_tipe` varchar(5) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `semester` int(1) NOT NULL,
  `sks` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id`, `id_mk`, `matkul`, `hari`, `ruang`, `waktu`, `id_tipe`, `id_dosen`, `semester`, `sks`) VALUES
(1, 'EKO11111', 'PENGANTAR EKONOMI 1', 'Senin', 'Ruangan 101', '08:00:00', 'BE', 0, 1, 3),
(2, 'EKO11211', 'PENGANTAR BISNIS', 'Senin', 'Ruangan 102', '10:00:00', 'BE', 0, 1, 3),
(3, 'EKO11311', 'PENGANTAR AKUNTANSI I', 'Selasa', 'Ruangan 103', '08:00:00', 'BE', 0, 1, 3),
(4, 'EKO11411', 'MATEMATIKA EKONOMI I', 'Selasa', 'Ruangan 104', '10:00:00', 'BE', 0, 1, 3),
(5, 'UNI10111', 'PENDIDIKAN AGAMA', 'Rabu', 'Ruangan 105', '08:00:00', 'BE', 0, 1, 2),
(6, 'UNI10311', 'BAHASA INDONESIA', 'Rabu', 'Ruangan 106', '10:00:00', 'BE', 0, 1, 2),
(7, 'UNI10508', 'PANCASILA', 'Kamis', 'Ruangan 107', '08:00:00', 'BE', 0, 1, 2),
(8, 'UNI11111', 'BAHASA INGGRIS', 'Kamis', 'Ruangan 108', '10:00:00', 'BE', 0, 1, 2),
(9, 'UNI17111', 'ILMU KEALAMAN DASAR', 'Jumat', 'Ruangan 109', '08:00:00', 'BE', 0, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `mhsfe`
--

CREATE TABLE `mhsfe` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `registered` tinyint(1) NOT NULL,
  `id_jurusan` varchar(4) NOT NULL,
  `semester` int(1) NOT NULL,
  `angkatan` int(11) DEFAULT NULL,
  `dosen_pembimbing_akademik` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nomor_telpon` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `kewarganegaraan` varchar(10) DEFAULT NULL,
  `pekerjaan` varchar(10) DEFAULT NULL,
  `tempat_kerja` varchar(255) DEFAULT NULL,
  `alamat_pekerjaan` varchar(255) DEFAULT NULL,
  `telp_tempat_kerja` varchar(20) DEFAULT NULL,
  `nama_ayah` varchar(255) DEFAULT NULL,
  `pendidikan_ayah` varchar(100) DEFAULT NULL,
  `umur_ayah` int(11) DEFAULT NULL,
  `pekerjaan_ayah` varchar(255) DEFAULT NULL,
  `alamat_orang_tua` varchar(255) DEFAULT NULL,
  `nama_ibu` varchar(255) DEFAULT NULL,
  `umur_ibu` int(11) DEFAULT NULL,
  `pendidikan_ibu` varchar(10) NOT NULL,
  `pekerjaan_ibu` varchar(255) DEFAULT NULL,
  `foto` blob DEFAULT NULL,
  `suliet` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mhsfe`
--

INSERT INTO `mhsfe` (`id`, `nim`, `nama`, `registered`, `id_jurusan`, `semester`, `angkatan`, `dosen_pembimbing_akademik`, `alamat`, `nomor_telpon`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `kewarganegaraan`, `pekerjaan`, `tempat_kerja`, `alamat_pekerjaan`, `telp_tempat_kerja`, `nama_ayah`, `pendidikan_ayah`, `umur_ayah`, `pekerjaan_ayah`, `alamat_orang_tua`, `nama_ibu`, `umur_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `foto`, `suliet`) VALUES
(1, '01011000000001', 'John Doe', 1, '0101', 1, 2024, '198407151234003', '', '', 'Palembang', '0000-00-00', NULL, NULL, 't', '', '', '', '', '', 0, '', '', '', 0, '', '', NULL, 0),
(2, '01011000000002', 'Alice Johnson', 1, '0101', 3, NULL, NULL, '1', '', '1', '0000-00-00', NULL, NULL, 't', '', '', '', '', '', 0, '', '', '', 0, '', '', NULL, 0),
(3, '01011000000003', 'Mark Smith', 1, '0101', 3, NULL, NULL, '1', '', '1', '0000-00-00', NULL, NULL, 't', '', '', '', '', '', 0, '', '', '', 0, '', '', NULL, 0),
(4, '01011000000004', 'Emily Brown', 1, '0101', 5, NULL, NULL, '1', '', '1', '0000-00-00', NULL, NULL, 't', '', '', '', '', '', 0, '', '', '', 0, '', '', NULL, 1),
(5, '01011000000005', 'Michael Lee', 1, '0101', 7, NULL, NULL, '1', '', '1', '0000-00-00', NULL, NULL, 't', '', '', '', '', '', 0, '', '', '', 0, '', '', NULL, 1),
(6, '01021000000006', 'Sarah Wilson', 1, '0102', 1, NULL, NULL, '1', '', '1', '0000-00-00', NULL, NULL, 't', '', '', '', '', '', 0, '', '', '', 0, '', '', NULL, 0),
(7, '01021000000007', 'David Garcia', 1, '0102', 3, NULL, NULL, '1', '', '1', '0000-00-00', NULL, NULL, 't', '', '', '', '', '', 0, '', '', '', 0, '', '', NULL, 0),
(8, '01021000000008', 'Emma Martinez', 1, '0102', 3, NULL, NULL, '1', '', '1', '0000-00-00', NULL, NULL, 't', '', '', '', '', '', 0, '', '', '', 0, '', '', NULL, 0),
(9, '01021000000009', 'Christopher Lopez', 1, '0102', 5, NULL, NULL, '1', '', '1', '0000-00-00', NULL, NULL, 't', '', '', '', '', '', 0, '', '', '', 0, '', '', NULL, 1),
(10, '01021000000010', 'Amanda Taylor', 1, '0102', 7, NULL, NULL, '1', '', '1', '0000-00-00', NULL, NULL, 't', '', '', '', '', '', 0, '', '', '', 0, '', '', NULL, 1),
(11, '01031000000011', 'Ryan Anderson', 1, '0103', 1, NULL, NULL, '1', '', '1', '0000-00-00', NULL, NULL, 't', '', '', '', '', '', 0, '', '', '', 0, '', '', NULL, 0),
(12, '01031000000012', 'Laura Rodriguez', 1, '0103', 3, NULL, NULL, '1', '', '1', '0000-00-00', NULL, NULL, 't', '', '', '', '', '', 0, '', '', '', 0, '', '', NULL, 0),
(13, '01031000000013', 'Jason Hernandez', 1, '0103', 3, NULL, NULL, '1', '', '1', '0000-00-00', NULL, NULL, 't', '', '', '', '', '', 0, '', '', '', 0, '', '', NULL, 0),
(14, '01031000000014', 'Megan Martinez', 1, '0103', 5, NULL, NULL, '1', '', '1', '0000-00-00', NULL, NULL, 't', '', '', '', '', '', 0, '', '', '', 0, '', '', NULL, 1),
(15, '01031000000015', 'Joaquina Martinez', 1, '0103', 7, 2021, '198201011234001', '1', '', '1', '0000-00-00', NULL, NULL, 't', '', '', '', '', '', 0, '', '', '', 0, '', '', NULL, 1),
(16, '01031000000016', 'Camila Cabello', 1, '0103', 7, 2021, '198201011234001', '1', '', '1', '0000-00-00', NULL, NULL, 't', '', '', '', '', '', 0, '', '', '', 0, '', '', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `userfe`
--

CREATE TABLE `userfe` (
  `nim` varchar(20) NOT NULL,
  `password` varchar(500) NOT NULL,
  `id_jurusan` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userfe`
--

INSERT INTO `userfe` (`nim`, `password`, `id_jurusan`) VALUES
('01011000000001', '$2y$10$BstLhlah/34x4YC966D84uScLZI9MLTqJV8gWo9Xpk5w4oF2buUCq', '0101'),
('01011000000002', '$2y$10$txJ23wXg6kfGCyCHtMr3r.1EyrAiQnGYmKaSoIdmAbnZnquO7Huce', '0101'),
('01011000000003', '$2y$10$E9hgxdlpewpsnHw1KtpD0OvSwuEIV0.5tOEX4PI8f1z', '0101'),
('01011000000004', '$2y$10$e/iQYuIMm30ECfcCqDAC1u7C7tpnBKHJUE2fU2aScXyoz3o4Nyboq', '0101'),
('01011000000005', '$2y$10$do05FaneG11vcH/semQLW.ewWRe0vZ11gdH/5TXVrueWxigXtFhgO', '0101'),
('01021000000006', '$2y$10$MF6cRY1FrK0AJM6xnPsnoeawPBGz5P7ATLX9oJX1/duLm.J1da7bK', '0102'),
('01021000000007', '$2y$10$WlgYJ3SGdsJSaiAMG3Lcw.Enl8oCbeTFsLJVurg9K0V4zy714Dy3C', '0102'),
('01021000000008', '$2y$10$CPU.pcwfFyrdMV3CLzZNg./v5x3.MLzyyBCz.SkftCzk2ZrXUmpqi', '0102'),
('01021000000009', '$2y$10$VNeJdSjLdeQVKjrecO9x9O1LhXzQtQN11G9XP0fbmlZPHM4Dr0UDK', '0102'),
('01021000000010', '$2y$10$j2fg0BqkMT8pF.aHwyxsauyTliA4Bw0OlYmFM.zkRJtgqZFIxf9uu', '0102'),
('01031000000011', '$2y$10$8JJlyMJRAzGFiHSyn/BipOJt1UHhbjw84oVidq2yTcMXMKMGsmwqy', '0103'),
('01031000000012', '$2y$10$f4SRa5Gx/xNj34mr9pH/XO5jSxGzRGk9nG9kzlnfVHKIkeVv9FDF6', '0103'),
('01031000000013', '$2y$10$W7FQ./pRxp1GL0BLnCk0NecjbGkcHSOUeUIr6dGktW7GoeGzRLZuK', '0103'),
('01031000000014', '$2y$10$Pgpg4c5d3Wkidg7ILlY16.OcsbQmVXrb5ctnChMOR/Tr9zKwqE2IW', '0103'),
('01031000000015', '$2y$10$zg.9L/xZ7V5dTHwSGa6ZH.cqba/SwpjwQn3L3/4reE/VWglD3mW.G', '0103'),
('01031000000016', '$2y$10$VaEraD48tNRDDfX6DZE7jung4evGFqBm/PKVyFuTbhBr8FhiXXVWG', '0103');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mhsfe`
--
ALTER TABLE `mhsfe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jurusan` (`id_jurusan`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `userfe`
--
ALTER TABLE `userfe`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `mhsfe`
--
ALTER TABLE `mhsfe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
