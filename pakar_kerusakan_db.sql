-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 20, 2022 at 02:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakar_kerusakan_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `basispengetahuan`
--

CREATE TABLE `basispengetahuan` (
  `namapenyakit` varchar(100) NOT NULL,
  `gejala` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basispengetahuan`
--

INSERT INTO `basispengetahuan` (`namapenyakit`, `gejala`) VALUES
('Penyakit Layu Fusarium (Fusarium oxysporum f. sp. Melongenae Schlecht)', 'Warna jaringan akar coklat'),
('Penyakit Layu Fusarium (Fusarium oxysporum f. sp. Melongenae Schlecht)', 'Akar membusuk'),
('Layu Bakteri (Ralstonia (Pseudomonas solanacearum E.F.Sm)', 'Akar menjadi Kecoklatan'),
('Penyakit Nematoda Buncak Akar (Root Knot Nemotade)', 'Rambut akar sedikit'),
('Penyakit Nematoda Buncak Akar (Root Knot Nemotade)', 'Akar lebih sedikit'),
('Penyakit Layu Fusarium (Fusarium oxysporum f. sp. Melongenae Schlecht)', 'Warna jaringan batang coklat'),
('Layu Bakteri (Ralstonia (Pseudomonas solanacearum E.F.Sm)', 'Jaringan sekuler bawah batang kecoklatan'),
('Bercak Daun Cercospora (Cercospora capsici Heald et Wolf)', 'Terdapat bercak pada batang '),
('Ulat Bawang (Onion caterpillar, Beet armyworm)', 'Pangkal batang menunjukkan bekas gigitan ulat'),
('Ulat Bawang (Onion caterpillar, Beet armyworm)', 'Pangkal batang terpotong ï¿½ potong'),
('Ulat Bawang (Onion caterpillar, Beet armyworm)', 'Batang rebah '),
('Ulat Bawang (Onion caterpillar, Beet armyworm)', 'Batang rusak dan berceceran '),
('Ulat Tanah (Cut Worm)', 'Pangkal batang menunjukkan bekas gigitan ulat'),
('Ulat Tanah (Cut Worm)', 'Pangkal batang terpotong ï¿½ potong'),
('Ulat Tanah (Cut Worm)', 'Batang rebah '),
('Ulat Tanah (Cut Worm)', 'Batang rusak dan berceceran '),
('Penyakit Embun Buluk/Tepung Palsu (Downy mildew) ', 'Tanaman kerdil'),
('Penyakit otomatis, Antraknose (Antrachnose) ', 'Tanaman mati mendadak '),
('Penyakit Buluk Penicillium (Blue Mold) ', 'Tanaman menimbulkan bau busuk yang menyengat'),
('Penyakit Nematoda Buncak Akar (Root Knot Nemotade)', 'Tanaman lebih kaku'),
('Penyakit Nematoda Buncak Akar (Root Knot Nemotade)', 'Tanaman lebih kerdil '),
('Penyakit Nematoda Buncak Akar (Root Knot Nemotade)', 'Tanaman menguning'),
('Trips (Thrips parvispinus Karny) ', 'Pucuk tanaman mati'),
('Kutu Daun Persik (Myzus persicae Sulz.)', 'Tanaman menjadi keriput '),
('Kutu Daun Persik (Myzus persicae Sulz.)', 'Tanaman kerdil'),
('Virus Mosaik', 'pertumbuhan tanaman terhambat '),
('Virus Kuning', 'Tanaman kerdil'),
('Penyakit Layu Fusarium (Fusarium oxysporum f. sp. Melongenae Schlecht)', 'Buah kecil'),
('Penyakit Layu Fusarium (Fusarium oxysporum f. sp. Melongenae Schlecht)', 'Buah gugur'),
('Layu Bakteri (Ralstonia (Pseudomonas solanacearum E.F.Sm)', 'Warna buah kekuningan'),
('Layu Bakteri (Ralstonia (Pseudomonas solanacearum E.F.Sm)', 'Buah membusuk'),
('Antraknosa/Penyakit Patek (Colletotrichum capsici (Syd.) Bult. Et. Bisby)', 'Bercak kecil coklat kehitaman pada buah'),
('Antraknosa/Penyakit Patek (Colletotrichum capsici (Syd.) Bult. Et. Bisby)', 'Buah keriput'),
('Antraknosa/Penyakit Patek (Colletotrichum capsici (Syd.) Bult. Et. Bisby)', 'Warna kulit buah seperti jerami padi'),
('Busuk Buah (Fruit rot) ', 'Terdapat bercak kecil kebasah-basahan pada buah '),
('Busuk Buah (Fruit rot) ', 'Buah mengering'),
('Busuk Buah (Fruit rot) ', 'Biji yang \r\nterserang menjadi coklat\r\n'),
('Busuk Buah (Fruit rot) ', 'biji yang terserang menjadi keriput '),
('Ulat Grayak (Spodoptera litura F.)', 'Timbul lubang yang tidak beraturan pada buah '),
('Virus Kerupuk', 'Bunga dan Bakal buah berguguran'),
('Ulat Grayak (Spodoptera litura F.)', 'Tanaman gundul'),
('Tungau Kuning (Polyphagotarsonemus latus Banks) ', 'Tunas dan bunga gugur '),
('Ulat Buah (Helicoverpa armigera Hubner) ', 'Buah membusuk'),
('Ulat Buah (Helicoverpa armigera Hubner) ', 'Buah berlubang '),
('Lalat Buah (Bactrocera sp)', 'Buah membusuk'),
('Lalat Buah (Bactrocera sp)', 'Terdapat titik coklat kehitaman pada pangkal buah'),
('Lalat Buah (Bactrocera sp)', 'Pangkal buah berlubang '),
('Lalat Buah (Bactrocera sp)', 'Buah jatuh ke tanah '),
('Penyakit Trotol, Bercak Ungu (Purple blotch) ', 'Umbi membusuk'),
('Penyakit Trotol, Bercak Ungu (Purple blotch) ', 'Jaringan umbi mengering '),
('Penyakit Embun Buluk/Tepung Palsu (Downy mildew) ', 'Umbi membusuk'),
('Penyakit Embun Buluk/Tepung Palsu (Downy mildew) ', 'Umbi berkerut '),
('Penyakit Embun Buluk/Tepung Palsu (Downy mildew) ', 'Umbi berwarna kecoklatan '),
('Penyakit Embun Buluk/Tepung Palsu (Downy mildew) ', 'Bagian umbi dalam tampak kering dan pucat '),
('Penyakit Buluk Penicillium (Blue Mold) ', 'Umbi membusuk'),
('Penyakit Buluk Penicillium (Blue Mold) ', 'Lapisan umbi terdapat bercak merah keunguan '),
('Penyakit Buluk Penicillium (Blue Mold) ', 'Lapisan umbi tampak basah'),
('Penyakit Buluk Penicillium (Blue Mold) ', 'Lapisan umbi terpisah-pisah '),
('Penyakit Buluk Penicillium (Blue Mold) ', 'Umbi berair'),
('Virus Kerdil Kuning, Virus Mosaik (Onion Yellow Dwarf Virus) ', 'Umbi berukuran kecil '),
('Penyakit Nematoda Buncak Akar (Root Knot Nemotade)', 'Terdapat puru berbentuk bulat pada akar'),
('Penyakit Nematoda Buncak Akar (Root Knot Nemotade)', 'Akar lebih pendek'),
('Hama Putih atau Trips (Thrips)', 'Umbi berukuran kecil '),
('Penyakit Layu Fusarium (Fusarium oxysporum f. sp. Melongenae Schlecht)', 'Daun Menguning'),
('Layu Bakteri (Ralstonia (Pseudomonas solanacearum E.F.Sm)', 'Daun layu'),
('Bercak Daun Cercospora (Cercospora capsici Heald et Wolf)', 'Daun Menguning'),
('Bercak Daun Cercospora (Cercospora capsici Heald et Wolf)', 'Terdapat bercak bulat dan kering pada daun'),
('Bercak Daun Cercospora (Cercospora capsici Heald et Wolf)', 'Bercak pada daun berwarna pucat sampai putih'),
('Bercak Daun Cercospora (Cercospora capsici Heald et Wolf)', 'Bercak pada daun menyerupai mata kodok (frogeyes) '),
('Virus Kerupuk', 'Daun melengkung ke bawah '),
('Virus Kerupuk', 'Daun berwarna hijau pekat '),
('Virus Kerupuk', 'Permukaan daun tidak rata'),
('Virus Kerupuk', 'Daun terkesan regas seperti kerupuk '),
('Virus Kerupuk', 'Daun mati'),
('Virus Mosaik', 'Warna daun belang '),
('Virus Mosaik', 'Daun cekung '),
('Virus Mosaik', 'Daun mengeriting '),
('Virus Mosaik', 'Daun memanjang '),
('Virus Mosaik', 'Bentuk daun menyempit'),
('Virus Kuning', 'Helai daun mengalami ï¿½vein clearingï¿½'),
('Virus Kuning', 'Pucuk daun berwarna kuning jelas'),
('Virus Kuning', 'tulang daun menebal'),
('Virus Kuning', 'Daun menggulung keatas'),
('Virus Kuning', 'Daun menyusut'),
('Tungau Kuning (Polyphagotarsonemus latus Banks) ', 'Daun mengeriting '),
('Tungau Kuning (Polyphagotarsonemus latus Banks) ', 'Daun menyusut'),
('Tungau Kuning (Polyphagotarsonemus latus Banks) ', 'Warna daun berubah menjadi warna tembaga/kecoklata'),
('Tungau Kuning (Polyphagotarsonemus latus Banks) ', 'Daun terpuntir'),
('Tungau Kuning (Polyphagotarsonemus latus Banks) ', 'Daun menebal'),
('Trips (Thrips parvispinus Karny) ', 'Daun mengeriting '),
('Trips (Thrips parvispinus Karny) ', 'Permukaan bawah daun berwarna keperak-perakan'),
('Trips (Thrips parvispinus Karny) ', 'Bercak daun berwarna putih'),
('Trips (Thrips parvispinus Karny) ', 'Daun mengering '),
('Trips (Thrips parvispinus Karny) ', 'Daun keriput '),
('Trips (Thrips parvispinus Karny) ', 'Daun timbul benjolan seperti tumor '),
('Ulat Grayak (Spodoptera litura F.)', 'Daun layu'),
('Ulat Grayak (Spodoptera litura F.)', 'Warna daun kekuningan'),
('Kutu Kebul (Bemisia tabaci) ', 'Daun mati'),
('Kutu Kebul (Bemisia tabaci) ', 'Sel-sel dan jaringan daun rusak'),
('Kutu Kebul (Bemisia tabaci) ', 'Bercak nekrotik pada daun '),
('Ulat Grayak (Spodoptera litura F.)', 'Daun transparan'),
('Ulat Grayak (Spodoptera litura F.)', 'Daun rusak '),
('Penyakit Trotol, Bercak Ungu (Purple blotch) ', 'Daun terdapat bercak melekuk '),
('Penyakit Trotol, Bercak Ungu (Purple blotch) ', 'Bercak daun berwarna putih atau kelabu '),
('Penyakit Trotol, Bercak Ungu (Purple blotch) ', 'Bercak daun memebentuk zona berwarna ungu jika sud'),
('Penyakit Trotol, Bercak Ungu (Purple blotch) ', 'Ujung daun kering '),
('Penyakit Embun Buluk/Tepung Palsu (Downy mildew) ', 'Ujung daun terdapat bercak hijau pucat'),
('Penyakit Embun Buluk/Tepung Palsu (Downy mildew) ', 'Terdapat miselium dan spora pada bercak daun '),
('Penyakit Bercak daun Cercospora (Cercospora leaf Spot) ', 'Bercak daun bulat dan memanjang'),
('Penyakit Bercak daun Cercospora (Cercospora leaf Spot) ', 'Bercak daun berwarna coklat dengan tepi menguning '),
('Penyakit Bercak daun Cercospora (Cercospora leaf Spot) ', 'Jumlah bercak terbanyak pada ujung daun'),
('Penyakit Bercak daun Cercospora (Cercospora leaf Spot) ', 'jaringan pada bercak daun mati '),
('Penyakit otomatis, Antraknose (Antrachnose) ', 'Bercak daun berwarna putih'),
('Penyakit otomatis, Antraknose (Antrachnose) ', 'Bercak daun melebar dan menjadi putih kehijauan '),
('Penyakit otomatis, Antraknose (Antrachnose) ', 'Daun bawah rebah'),
('Penyakit otomatis, Antraknose (Antrachnose) ', 'Pangkal daun mengecil '),
('Mati pucuk ', 'Ujung daun busuk kebasah-basahan'),
('Mati pucuk ', 'Ujung daun berwarna coklat'),
('Mati pucuk ', 'Ujung daun mati'),
('Virus Kerdil Kuning, Virus Mosaik (Onion Yellow Dwarf Virus) ', 'Bentuk daun lebih kecil '),
('Virus Kerdil Kuning, Virus Mosaik (Onion Yellow Dwarf Virus) ', 'Warna daun belang hijau pucat sampai kekuningan '),
('Virus Kerdil Kuning, Virus Mosaik (Onion Yellow Dwarf Virus) ', 'Daun berpilin'),
('Hama Putih atau Trips (Thrips)', 'Daun bernoda putih mengkilat seperti perak '),
('Hama Putih atau Trips (Thrips)', 'Seluruh daun berwarna putih jika sudah parah'),
('Lalat Pengorok Daun (Liriomyza chinensis)', 'Terdapat bintik-bintik putih pada daun'),
('Lalat Pengorok Daun (Liriomyza chinensis)', 'daun penuh dengan korokan '),
('Lalat Pengorok Daun (Liriomyza chinensis)', 'Daun menjadi kering dan warna daun seperti terbaka'),
('Hama / Penyakit', 'Terdapat puru berbentuk bulat pada akar'),
('Hama / Penyakit', 'Rambut akar sedikit '),
('Hama / Penyakit', 'Bercak daun berwarna coklat dengan tepi menguning '),
('Hama / Penyakit', 'Umbi berkerut '),
('Jenis Kerusakan', 'Warna jaringan akar coklat'),
('Jenis Kerusakan', 'Warna jaringan batang coklat'),
('Jenis Kerusakan', 'Daun layu'),
('Jenis Kerusakan', 'Buah gugur'),
('Bagian CVT  bermasalah', 'Kencang'),
(' Filter udara tersumbat', 'A3'),
('Settingan knalpot  salah', 'A1'),
('Salah setting jarum  skep', 'A2'),
('Komponen piston aus  atau baret', 'A4'),
('Komponen piston aus  atau baret', 'mau kemana'),
(' Aki soak', 'mau kemana'),
(' Aki soak', 'Kencang'),
(' Aki soak', 'A5'),
(' Aki soak', 'A3'),
('Jenis Kerusakan', 'mau kemana'),
('Jenis Kerusakan', 'Motor Tidak ada tenaga'),
('Jenis Kerusakan', 'Kencang Banget coy'),
('Jenis Kerusakan', 'A5'),
('Jenis Kerusakan', 'A4'),
('Jenis Kerusakan', 'Kempes'),
('Jenis Kerusakan', 'A3'),
('Jenis Kerusakan', 'A2'),
('Jenis Kerusakan', 'A1'),
('Bagian CVT  bermasalah', 'mau kemana'),
('Bagian CVT  bermasalah', 'Motor Tidak ada tenaga'),
('Bagian CVT  bermasalah', 'Kencang Banget coy'),
('Bagian CVT  bermasalah', 'Kempes'),
('Jenis Kerusakan', 'Mogok'),
('Jenis Kerusakan', 'Motor Tidak ada tenaga'),
('Jenis Kerusakan', 'Kempes'),
('Kerusakan 2', 'Mogok'),
('Kerusakan 2', 'Motor Tidak ada tenaga'),
('Kerusakan 2', 'Kempes'),
('Kerusakan 2', 'Mogok'),
('Kerusakan 2', 'Motor Tidak ada tenaga'),
('Kerusakan 2', 'Kempes'),
('Kerusakan 2', 'Kempes'),
('Kerusakan 2', 'Knalpot terlalu berisik'),
('Kerusakan 1', 'Kencang Banget 20');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `idgejala` varchar(10) NOT NULL,
  `gejala` varchar(1000) NOT NULL,
  `daerah` varchar(10) DEFAULT NULL,
  `jenistanaman` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`idgejala`, `gejala`, `daerah`, `jenistanaman`) VALUES
('BG-1230', 'Kencang Banget ', '', ''),
('G1002', 'Habis Bansin', 'Mesin', 'Fino'),
('G1003', 'Mogok', 'Busi', 'Mio S'),
('GK-01', 'Motor Tidak ada tenaga', 'Busi', 'Mio S'),
('GK-20', 'Kempes', 'Knalpot', 'Mio S'),
('GK-22', 'Gejala 22', '', 'Fino'),
('GK-23', 'Knalpot terlalu berisik', 'Knalpot', 'Mio S'),
('GK-24', 'Kencang Banget 20', 'Knalpot', 'Fino');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `nama_kendaraan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `nama_kendaraan`) VALUES
(4, 'Fino'),
(5, 'Mio S');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `idpenyakit` varchar(20) NOT NULL,
  `namapenyakit` varchar(255) NOT NULL,
  `jenistanaman` varchar(20) NOT NULL,
  `kulturteknis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`idpenyakit`, `namapenyakit`, `jenistanaman`, `kulturteknis`) VALUES
('JK-001', 'Kerusakan 1', 'Fino', 'Solusi Kerusakan yang 1'),
('JK-002', 'Kerusakan 2', 'Mio S', 'Solusi Kerusakan yang 2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `nama`) VALUES
('U001', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`idgejala`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`idpenyakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
