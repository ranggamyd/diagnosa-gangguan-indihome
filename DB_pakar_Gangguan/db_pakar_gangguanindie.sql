-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2020 at 10:03 AM
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
-- Database: `db_pakar_gangguanindie`
--

-- --------------------------------------------------------

--
-- Table structure for table `analisa_hasil`
--

CREATE TABLE `analisa_hasil` (
  `id` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelamin` char(10) NOT NULL,
  `merk` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kd_kerusakan` char(4) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analisa_hasil`
--

INSERT INTO `analisa_hasil` (`id`, `nama`, `kelamin`, `merk`, `alamat`, `kd_kerusakan`, `tanggal`) VALUES
(1, 'Leny', 'P', 'HP', 'Bekasi', 'P003', '2016-09-29 11:40:13'),
(2, 'Leny', 'P', 'HP', 'Bekasi', 'P003', '2016-09-29 11:40:13'),
(3, 'Leny', 'P', 'HP', 'Bekasi', 'P005', '2016-09-29 11:40:13'),
(5, 'Leny', 'P', 'HP', 'Bekasi', 'P005', '2016-09-29 11:40:13'),
(7, 'Leny', 'P', 'HP', 'Bekasi', 'P005', '2016-09-29 11:40:13'),
(9, 'Leny', 'P', 'HP', 'Bekasi', 'P005', '2016-09-29 11:40:13'),
(11, 'Leny', 'P', 'HP', 'Bekasi', 'P005', '2016-09-29 11:40:13'),
(12, 'Leny', 'P', 'HP', 'Bekasi', 'P003', '2016-09-29 11:40:13'),
(13, 'Leny', 'P', 'HP', 'Bekasi', 'P001', '2016-09-29 11:40:13'),
(14, 'Leny', 'P', 'HP', 'Bekasi', 'P003', '2016-09-29 11:40:13'),
(15, 'Fadhil', 'L', 'HP', 'Ciredup', 'P003', '2017-01-24 10:40:48'),
(16, 'Fadhil', 'L', 'HP', 'Ciredup', 'P001', '2017-01-24 10:40:48'),
(18, 'Muttakin', 'L', 'Canon', 'Banda', 'P002', '2017-03-14 11:25:55'),
(20, 'Muttakin', 'L', 'Canon', 'Banda', 'P002', '2017-03-14 11:25:55'),
(22, 'Muttakin', 'L', 'Canon', 'Banda', 'P002', '2017-03-14 11:25:55'),
(26, 'Rizal', 'L', 'Canon', 'Langsa', 'P002', '2017-07-13 15:59:20'),
(28, 'Rizal', 'L', 'Canon', 'Langsa', 'P002', '2017-07-13 15:59:20'),
(30, 'Rizal', 'L', 'Canon', 'Langsa', 'P002', '2017-07-13 15:59:20'),
(32, 'Rizal', 'L', 'Canon', 'Langsa', 'P002', '2017-07-13 15:59:20'),
(34, 'Rizal', 'L', 'Canon', 'Langsa', 'P002', '2017-07-13 15:59:20'),
(36, 'Rizal', 'L', 'Canon', 'Langsa', 'P002', '2017-07-13 15:59:20'),
(38, 'Rizal', 'L', 'Canon', 'Langsa', 'P002', '2017-07-13 15:59:20'),
(40, 'Rizal', 'L', 'Canon', 'Langsa', 'P002', '2017-07-13 15:59:20'),
(41, '', '', '', '', '', '0000-00-00 00:00:00'),
(42, 'Rizal', 'L', 'Canon', 'Langsa', 'P002', '2017-07-13 15:59:20'),
(44, 'Rizal', 'L', 'Canon', 'Langsa', 'P002', '2017-07-13 15:59:20'),
(46, 'Rudi', 'L', 'Canon', 'Lhoksukon', 'P002', '2017-07-13 16:38:10'),
(47, 'Rudi', 'L', 'Canon', 'Lhoksukon', 'P001', '2017-07-13 16:38:10'),
(48, 'Rudi', 'L', 'Canon', 'Lhoksukon', 'P002', '2017-07-13 16:38:10'),
(49, 'Rudi', 'L', 'Canon', 'Lhoksukon', 'P001', '2017-07-13 16:38:10'),
(52, 'arif', 'L', 'Canon', 'a', '', '2017-07-17 19:37:41'),
(53, 'arif', 'L', 'Canon', 'a', 'P001', '2017-07-17 19:37:41'),
(54, 'arif', 'L', 'Canon', 'a', 'p004', '2017-07-17 19:37:41'),
(55, 'arif', 'L', 'Canon', 'a', 'P001', '2017-07-17 19:37:41'),
(56, 'arif', 'L', 'Canon', 'a', 'P005', '2017-07-17 19:37:41'),
(57, 'Rudi', 'L', 'Canon', 'Lhok', 'P002', '2017-09-30 19:09:22'),
(58, 'Rudi', 'L', 'Canon', 'Lhok', 'P001', '2017-09-30 19:09:22'),
(59, 'asd', 'L', 'Gamer', 'asd', 'P002', '2020-07-20 12:27:23'),
(60, 'asd', 'L', 'Gamer', 'asd', 'P06', '2020-07-20 12:27:23'),
(61, 'asd', 'P', 'Bundling Cloude', 'k', 'P002', '2020-07-20 14:34:03'),
(62, 'asd', 'P', 'Bundling Cloude', 'k', 'P001', '2020-07-20 14:34:03'),
(63, 'asd', 'P', 'Berkah Dari Rum', 'j', 'P06', '2020-07-20 14:45:05'),
(64, 'asd', 'P', 'Berkah Dari Rum', 'j', 'P06', '2020-07-20 14:45:05'),
(65, 'asd', 'P', 'Berkah Dari Rum', 'j', 'P06', '2020-07-20 14:45:05'),
(66, 'asd', 'P', 'Berkah Dari Rum', 'j', 'P06', '2020-07-20 14:45:05'),
(67, 'asd', 'P', 'Berkah Dari Rum', 'j', 'P06', '2020-07-20 14:45:05'),
(68, 'asd', 'P', 'Berkah Dari Rum', 'j', 'P06', '2020-07-20 14:45:05'),
(69, 'asd', 'P', 'Berkah Dari Rum', 'j', 'P06', '2020-07-20 14:45:05'),
(70, 'asd', 'P', 'Berkah Dari Rum', 'j', 'P06', '2020-07-20 14:45:05'),
(71, 'asd', 'P', 'Berkah Dari Rum', 'j', 'P06', '2020-07-20 14:45:05'),
(72, 'asd', 'P', 'Berkah Dari Rum', 'j', 'P06', '2020-07-20 14:45:05'),
(73, 'asd', 'P', 'Berkah Dari Rum', 'j', 'P06', '2020-07-20 14:45:05'),
(74, 'asd', 'P', 'Berkah Dari Rum', 'j', 'P06', '2020-07-20 14:45:05'),
(75, 'asd', 'P', 'Berkah Dari Rum', 'j', 'P06', '2020-07-20 14:45:05'),
(76, 'asd', 'P', 'Berkah Dari Rum', 'j', 'P06', '2020-07-20 14:45:05'),
(77, 'asd', 'L', 'Gamer', 'asd', 'P002', '2020-07-20 14:55:09');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `kd_gejala` char(4) NOT NULL,
  `gejala` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`kd_gejala`, `gejala`) VALUES
('G01', 'ada gelembung udara dalam cartridge (kemungkinan bisa disebabkan saat penyuntikan/pengisian   ulang cartridge) .................'),
('G02', 'print head tersumbat oleh tinta yang kering (bisa disebabkan karena jarang dipergunakan)'),
('G03', 'print head rusak/tergores/posisi berubah karena kerusakan fisik'),
('G04', 'salah dalam pemasangan cartridge'),
('G05', 'ada yang kehabisan tinta untuk warna tertentu atau semuanya'),
('G06', 'salah settingan pada komputernya atau printer pernah di set default di control panel'),
('G08', 'banyak gelembung udara di dalam cartridge'),
('G09', 'Printer dan uzur (tua) atau rusak atau tertutup bagian print head-nya'),
('G10', 'Cartridge tak terpasang dengan benar'),
('G11', 'pernah menyentuh chip kecil pada cartridge dengan tangan atau juga chip tersebut kotor/basah (chip ini mudah rusak)'),
('G13', 'apakah sewaktu kita mengganti cartridge posisi printer dalam keadaan mati, sehingga memory printer masih tetap dalam keadaan sebelumnya tinta habis'),
('G14', 'Terlihat garis putih/bercak-bercak pada hasil cetakan'),
('G15', 'warna cetakan tergores atau tidak rata'),
('G17', 'file yang hanya satu halaman tercetak berulang kali, 2 kali atau lebih.'),
('G18', 'teks yang dicetak terpotong pada pojok kiri bawah, tepi kiri, atau tepi bawah'),
('G07', 'label berwarna (kuning) tak dibuang'),
('G12', 'Rusaknya sebagian jalur (rangkaian pada cartridge)'),
('G16', 'terjadi kerusakan pada rangkaian dasar seperti paper feed (pengumpan kertas), head printer, carriage (pembawa) head printer, power supply, electronic control package,'),
('G20', 'AB');

-- --------------------------------------------------------

--
-- Table structure for table `kerusakan`
--

CREATE TABLE `kerusakan` (
  `kd_kerusakan` char(4) NOT NULL,
  `jenis_kerusakan` varchar(200) DEFAULT NULL,
  `definisi` text DEFAULT NULL,
  `solusi` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kerusakan`
--

INSERT INTO `kerusakan` (`kd_kerusakan`, `jenis_kerusakan`, `definisi`, `solusi`) VALUES
('P001', 'Hasil cetakan bergaris atau keluar namun warna pudar...................', 'Kemungkinan penyebabnya:\r\n* Ada gelembung udara dalam cartridge (kemungkinan bisa disebabkan saat penyuntikan/pengisian   ulang cartridge)\r\n* Print head kemungkinan tersumbat oleh tinta yang kering (bisa disebabkan karena jarang dipergunakan)\r\n* Print head rusak/tergores/posisi berubah karena kerusakan fisik\r\n* salah dalam pemasangan cartridge\r\n* Ada yang kehabisan tinta untuk warna tertentu atau semuanya\r\n* Salah settingan pada komputernya', 'Solusi:\r\n* Bersihkan dengan cara melakukan head cleaning selama 2-4 kali untuk mengeluarkan gelembung udara yang ada di dalam cartridge (baca manual printer sesuai dengan printernya)\r\n* Pasang kembali yakinkan secara benar catridenya, matikan dan hidupkan kembali untuk meyakinakan bahwa status cartridge telah berubah.\r\n* Ganti cartridge yang lama/rusak\r\n* Jaga benar jangan sampai membuka seal film bagian bawah walau keluaran bergaris atau tak keluar sama sekali\r\n* Cek kembali yakinkan saat anda mencetak tidak dalam settingan kualitas cetakan draft atau super ekonomi\r\n* Ganti print head lama atau yang rusak'),
('P002', 'Hasil cetakan tak keluar sama sekali', 'Kemungkinan penyebabnya:\r\n* Banyak gelembung udara di dalam cartridge\r\n* Printer dan uzur (tua) atau rusak atau tertutup bagian print head-nya\r\n* Label berwarna (kuning) tak dibuang', '* Bersihkan dengan cara melakukan head cleaning selama 2-4 kali untuk mengeluarkan gelembung udara yang ada di dalam cartridge (baca manual printer sesuai dengan printernya)\r\n* Kocok cartridge beberapa kali (3-4) sebelum memasangnya\r\n* Buang lebel kuning supaya udara bisa mengalir untuk mencetak secara normal\r\n* Jaga benar jangan sampai membuka seal film bagian bawah walo keluaran bergaris atau tak keluar sama sekali.'),
('P003', 'Printer tak mengenali cartridge yang baru dipasang', 'Kemungkinan penyebabnya:\r\n* Cartridge tak terpasang dengan benar\r\n* Menyentuh chip kecil pada cartridge dengan tangan atau juga chip tersebut kotor/basah (chip ini mudah rusak)\r\n* Rusaknya sebagian jalur (rangkaian pada cartridge)', 'Solusi:\r\n* Pasang kembali yakinkan secara benar catridenya, matikan dan hidupkan kembali untuk meyakinakan bahwa setatus cartridge telah berubah.\r\n* Gunakan kain bersih dan kering untuk membersihkan chip bila chipnya memang kotor\r\n* Cek jalur rangkaiannnya jika ada yang rusak\r\n* Jika memang tak dimungkinkan tuk diperbaiki beli aja yang baru.'),
('p004', 'Setelah dipasang cartridge baru ada peringatan bahwa cartridge yang terpasang tidak asli', 'Kemungkinan penyebabnya:\r\n* Hal ini bisa disebabkan karena sewaktu kita mengganti cartridge posisi printer dalam keadaan mati, sehingga memory printer masih tetap dalam keadaan sebelumnya “tinta habis', 'Pesan ini abaikan saja jika ada pertanyaan jawab aja “yes” atau lalukan sesuai permintaan, kasus ini tak mempengaruhi kualitas hasil cetakan dengan printer tersebut.'),
('P005', 'Printer tidak dapat mencetak', 'Pada saat proses percetakan akan dilakukan,printer dalam keadaan ON,dan kertas telah terpasng dengan baik tetapi printer tidak mau bergerak dan proses percetakan dinyatakan gagal. ', 'a)    Pengetesan printer menggunakan print test page pada driver printer.\r\nUntuk melakukan hal tersebut dapat melalui stars>>setting>>printers. Kemudian klik kanan pada printer yang digunakan lalu pilih properties,dalam tab general,klik tombol print test page.\r\nb)    Jika setelah tombol di tekan,printer bisa mencetak berarti tidak ada masalah pada printer.\r\nc)    Jika tidka,berarti ada masalh pada printernya atau pada koneksi port printernya. Cobalah pada komputer lain,jika proses percetakan berhasil dilakukan berarti kerusakan bukan pada printernya tetapi pada port printer tersebut.\r\nd)    Jika proses percetakan gagal berarti ada masalah pada printernya. Untuk mengatasinya coba cek kembali printer mulai dari cartridge sampai koneksi kabel-kabelnya.'),
('P06', 'hdfdfh', 'hdfhd', 'hdfhdh'),
('P007', 'C', 'C', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `relasi`
--

CREATE TABLE `relasi` (
  `id_relasi` int(4) NOT NULL,
  `kd_gejala` char(4) NOT NULL,
  `kd_kerusakan` char(4) NOT NULL,
  `bobot` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relasi`
--

INSERT INTO `relasi` (`id_relasi`, `kd_gejala`, `kd_kerusakan`, `bobot`) VALUES
(1, 'G06', 'P002', 5),
(2, 'G01', 'P001', 5),
(3, 'G02', 'P001', 3),
(4, 'G03', 'P001', 5),
(5, 'G07', 'P002', 3),
(6, 'G08', 'P002', 1),
(44, 'G10', 'P06', 1),
(38, 'G05', 'P001', 3),
(37, 'G04', 'P001', 3),
(39, 'G09', 'P002', 5),
(43, 'G01', 'P06', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_analisa`
--

CREATE TABLE `tmp_analisa` (
  `noip` varchar(30) NOT NULL,
  `kd_penyakit` char(4) NOT NULL,
  `kd_gejala` char(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_gejala`
--

CREATE TABLE `tmp_gejala` (
  `noip` int(3) NOT NULL,
  `kd_gejala` char(4) NOT NULL,
  `bobot` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_gejala`
--

INSERT INTO `tmp_gejala` (`noip`, `kd_gejala`, `bobot`) VALUES
(131076, 'G17', 0),
(131077, 'G18', 0),
(131078, 'G07', 0),
(131079, 'G12', 0),
(131080, 'G16', 0),
(131081, 'G20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_kerusakan`
--

CREATE TABLE `tmp_kerusakan` (
  `noip` varchar(30) NOT NULL,
  `kd_kerusakan` char(4) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_kerusakan`
--

INSERT INTO `tmp_kerusakan` (`noip`, `kd_kerusakan`, `nilai`) VALUES
('', 'P001', 0),
('', 'P002', 0.21428571428571),
('', 'P06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_pasien`
--

CREATE TABLE `tmp_pasien` (
  `id` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelamin` char(10) NOT NULL,
  `merk` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `noip` varchar(30) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_pasien`
--

INSERT INTO `tmp_pasien` (`id`, `nama`, `kelamin`, `merk`, `alamat`, `noip`, `tanggal`) VALUES
(124, 'ade suryadi', 'L', 'Khusus Guru', 'jl.kesambi no.15A Cirebon', '127.0.0.1', '2020-07-18 14:33:18'),
(135, 'asd', 'L', 'Gamer', 'asd', '::1', '2020-07-20 14:55:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analisa_hasil`
--
ALTER TABLE `analisa_hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kd_gejala`);

--
-- Indexes for table `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD PRIMARY KEY (`kd_kerusakan`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `relasi`
--
ALTER TABLE `relasi`
  ADD PRIMARY KEY (`id_relasi`);

--
-- Indexes for table `tmp_analisa`
--
ALTER TABLE `tmp_analisa`
  ADD PRIMARY KEY (`noip`);

--
-- Indexes for table `tmp_gejala`
--
ALTER TABLE `tmp_gejala`
  ADD PRIMARY KEY (`noip`);

--
-- Indexes for table `tmp_pasien`
--
ALTER TABLE `tmp_pasien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analisa_hasil`
--
ALTER TABLE `analisa_hasil`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `relasi`
--
ALTER TABLE `relasi`
  MODIFY `id_relasi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tmp_gejala`
--
ALTER TABLE `tmp_gejala`
  MODIFY `noip` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131082;

--
-- AUTO_INCREMENT for table `tmp_pasien`
--
ALTER TABLE `tmp_pasien`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
