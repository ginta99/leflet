-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Jun 2016 pada 05.57
-- Versi Server: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_trans_yogyakarta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_halte`
--

CREATE TABLE IF NOT EXISTS `data_halte` (
  `id_halte` int(100) NOT NULL,
  `nama_halte` varchar(50) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `logtitude` varchar(20) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `data_halte`
--

INSERT INTO `data_halte` (`id_halte`, `nama_halte`, `latitude`, `logtitude`, `keterangan`) VALUES
(1, 'Halte Malioboro 1', '-7.79084', '110.36615', 'Transjogja 2A: Terminal Jombor (via Malioboro),  Transjogja 3A: Terminal Giwangan (via Malioboro), Transjogja 1A: Terminal Prambanan (via Malioboro) '),
(2, 'Halte Kusumanegara (Gembira Loka)', '-7.80228', '110.39846', 'Transjogja 2A: Terminal Jombor (via Malioboro), Transjogja 1B: Bandara Adisucipto (via UGM)'),
(3, 'Halte Ring Road Utara (STIKES Guna Bangsa)', '-7.76073', '110.40890', ' Transjogja 3B: Terminal Giwangan (via Jl. Bayangkara)'),
(4, 'Halte Jl. Solo (Janti)', '-7.78325', '110.41158', ' Transjogja 1B: Bandara Adisucipto (via UGM),  Transjogja 3A: Terminal Giwangan (via Malioboro),  Transjogja 1A: Terminal Prambanan (via Malioboro).'),
(5, 'Halte Jl. Kaliurang (KOPMA UGM)', '-7.77430', '110.37514', ' Transjogja 3A: Terminal Giwangan (via Malioboro)'),
(6, 'Halte Gedong Kuning (JEC)', '-7.79853', '110.40286', ' Transjogja 3A: Terminal Giwangan (via Malioboro),  Transjogja 1A: Terminal Prambanan (via Malioboro).'),
(7, 'Halte UIN Sunan Kalijaga 1', '-7.78597', '110.39471', ' Transjogja 4B: Terminal Giwangan (via Timoho) => Kridosono'),
(8, 'Halte UAD', '-7.82060', '110.38854', 'Transjogja 4B: Terminal Giwangan (via Timoho) => Kridosono, Transjogja 4A: Terminal Giwangan (via Taman Siswa) => Kridosono '),
(9, 'Halte Museum Biologi', '-7.80164', '110.37420', ' Transjogja 1B: Bandara Adisucipto (via UGM),  Transjogja 4A: Terminal Giwangan (via Taman Siswa) => Kridosono '),
(10, ' Halte FK-UGM', '-7.76783', '110.37427', 'Transjogja 3A: Terminal Giwangan (via Malioboro)'),
(11, 'Halte APMD 1', '-7.79164', '110.39317', 'Transjogja 4B: Terminal Giwangan (via Timoho) => Kridosono'),
(12, 'Halte UIN Sunan Kalijaga 2', '-7.78621', '110.39483', ' Transjogja 4B: Terminal Giwangan (via Timoho) => Kridosono'),
(13, 'Halte Jl. Colombo (UNY)', '-7.77777', '110.38656', ' Transjogja 2A: Terminal Jombor (via Malioboro) ,  Transjogja 1B: Bandara Adisucipto (via UGM)'),
(14, 'Halte RS. AU DR. S. Hardjolukito', '-7.79733', '110.40992', 'Transjogja 1B: Bandara Adisucipto (via UGM), Transjogja 3B: Terminal Giwangan (via Jl. Bayangkara) '),
(15, 'Halte Kusumanegara (Gedung Juang 45)', '-7.80223', '110.39988', 'Transjogja 2B: Terminal Jombor(via Pingit),  Transjogja 1A: Terminal Prambanan (via Malioboro) '),
(16, 'Halte Terminal Giwangan', '-7.83411', '110.39278', ' Transjogja 4B: Terminal Giwangan (via Timoho) => Kridosono '),
(17, 'Halte Prambanan', '-7.75563', '110.48990', 'Transjogja 1A: Terminal Prambanan (via Malioboro)'),
(18, 'Halte Jl. Solo (Alfa)', '-7.78329', '110.41980', 'Transjogja 1B: Bandara Adisucipto (via UGM)'),
(19, 'Halte Senopati 2', '-7.80146', '110.36873', ' Transjogja 2A: Terminal Jombor (via Malioboro)'),
(20, ' Halte Bandara Adisutjipto', '-7.78485', '110.43714', 'Transjogja 1B: Bandara Adisucipto (via UGM)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_lokasi`
--

CREATE TABLE IF NOT EXISTS `data_lokasi` (
  `id_lokasi` int(100) NOT NULL,
  `nama_lokasi` varchar(50) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `logtitude` varchar(20) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `data_lokasi`
--

INSERT INTO `data_lokasi` (`id_lokasi`, `nama_lokasi`, `latitude`, `logtitude`, `keterangan`) VALUES
(1, 'Malioboro ', '-7.79321', '110.36614', 'Jalan Mall Malioboro'),
(2, 'Stmik Akakom', '-7.79325', '110.40767', 'Jl. Raya Janti Karang Jambe no 143'),
(3, 'Kebun Binatang Gembira Loka', '-7.80566', '110.39613', 'Jalan Kebun Raya, Rejowinangun, Kotagede, Kota Yogyakarta, Special Region of Yogyakarta, 55165, Indonesia'),
(4, 'Taman Pintar Yogyakarta', '-7.80109', '110.36775', 'Jalan Senopati, Prawirodirjan, Gondomanan, Kota Yogyakarta, Special Region of Yogyakarta, 55131, Indonesia'),
(5, 'Kampus UIN Sunan Kalijaga', '-7.78396', '110.39479', ' Jalan Kampus Barat, Catur Tunggal, Catur tunggal, Depok, Sleman Regency, Special Region of Yogyakarta, 55281, Indonesia'),
(6, 'Jogja Expo Center', '-7.79965', '110.40442', 'Jalan Janti, Banguntapan, Bantul Regency, Special Region of Yogyakarta, 55198, Indonesia'),
(7, 'XT Square', '-7.81644', '110.38660', 'Jalan Veteran, Pandeyan, Umbulharjo, Kota Yogyakarta, Special Region of Yogyakarta, 55172, Indonesia'),
(8, 'bandara Adisucipto', '-7.78570', '110.43713', ' Jalan Jogja Solo, Maguwoharjo, Depok, Sleman Regency, Special Region of Yogyakarta, 55282, Indonesia'),
(9, ' Gramedia Plaza Ambarukmo', '-7.78238', '110.40167', ' Jalan Laksda Adisucipto, Catur Tunggal, Catur tunggal, Depok, Sleman Regency, Special Region of Yogyakarta, 55221, Indonesia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_halte`
--
ALTER TABLE `data_halte`
  ADD PRIMARY KEY (`id_halte`);

--
-- Indexes for table `data_lokasi`
--
ALTER TABLE `data_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_halte`
--
ALTER TABLE `data_halte`
  MODIFY `id_halte` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `data_lokasi`
--
ALTER TABLE `data_lokasi`
  MODIFY `id_lokasi` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
