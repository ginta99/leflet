create database trans_yogya;
use trans_yogya;

create table data_lokasi(
  `id_halte` int(100) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nama_halte` varchar(50) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `logtitude` varchar(20) NOT NULL,
  `keterangan` varchar(200) NOT NULL
);

INSERT INTO `data_lokasi` (`id_halte`, `nama_halte`, `latitude`, `logtitude`, `keterangan`) VALUES
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
(19, 'Halte Senopati 2', '-7.80146', '110.36873', ' Transjogja 2A: Terminal Jombor (via Malioboro)');
