-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 04:39 PM
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
-- Database: `darul_atqia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '123'),
(2, 'darul', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id_album` int(11) NOT NULL,
  `ket_album` text NOT NULL,
  `foto_album` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `jdl_artikel` varchar(255) NOT NULL,
  `konten_artikel` text NOT NULL,
  `foto_artikel` varchar(255) DEFAULT NULL,
  `pembuat_artikel` varchar(255) NOT NULL,
  `tanggal_artikel` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `jdl_artikel`, `konten_artikel`, `foto_artikel`, `pembuat_artikel`, `tanggal_artikel`) VALUES
(3, 'Dengan menggunakan kode di atas, fungsi tambahPesan() akan mengembalikan nilai true jika data berhasil ditambahkan ke database, Dengan menggunakan kode di atas, fungsi tambahPesan() akan mengembalikan nilai true jika data berhasil ditambahkan ke database,', '&lt;p&gt;ilai * pada properti di atas dapat diisi dengan angka dari 0 hingga 5, yang masing-masing merepresentasikan jumlah pixel margin yang diberikan. Sebagai contoh, mx-3 akan memberikan margin kiri dan kanan sebesar 3 pixel pada elemen HTML yang diberikan. Diky Wiraguna bagaimana cara menambahkan tanggal otomatis pada tabel artikel di php mysql Untuk menambahkan tanggal otomatis pada tabel artikel di PHP MySQL, Anda dapat menggunakan kolom dengan tipe data TIMESTAMP. Kolom dengan tipe data ini akan secara otomatis menyimpan tanggal dan waktu saat data dimasukkan atau diubah. Berikut adalah contoh pembuatan tabel artikel dengan kolom tanggal menggunakan tipe data TIMESTAMP:&lt;/p&gt;', '63fef96d5dc52.png', 'jhon', '2023-03-20 06:37:40'),
(4, 'Error tersebut terjadi karena file &quot;../functions.php&quot; tidak ditemukan di direktori yang diindikasikan.', '&lt;p&gt;EDITED 2&lt;/p&gt;', '63feebed23775.png', 'Ajiz', '2023-03-20 05:33:31'),
(5, 'Kode di atas menampilkan form dengan tiga input yaitu nama, email, dan isi pesan, serta tombol untuk mengirim pesan. ', '&lt;p&gt;Kode di atas menampilkan &lt;strong&gt;form &lt;/strong&gt;dengan tiga input yaitu nama, email, dan isi pesan, serta tombol untuk mengirim pesan. Anda dapat menyesuaikan form ini dengan kebutuhan anda. Setelah form dikirim, Anda perlu membuat file &quot;proses_kirim_pesan.php&quot; untuk memproses data yang dikirimkan dari form tersebut. Di dalam file tersebut, Anda dapat menyimpan data pesan ke database atau mengirim email ke admin, atau melakukan aksi lainnya sesuai dengan kebutuhan. Berikut adalah contoh kode untuk menyimpan data pesan ke database:&lt;/p&gt;\r\n&lt;div id=&quot;simple-translate&quot; class=&quot;simple-translate-dark-theme&quot;&gt;\r\n&lt;div&gt;\r\n&lt;div class=&quot;simple-translate-button isShow&quot; style=&quot;background-image: url(&#039;chrome-extension://cllnohpbfenopiakdcjmjcbaeapmkcdl/icons/512.png&#039;); height: 22px; width: 22px; top: 29px; left: 172px;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n&lt;div class=&quot;simple-translate-panel &quot; style=&quot;width: 300px; height: 200px; top: 0px; left: 0px; font-size: 13px;&quot;&gt;\r\n&lt;div class=&quot;simple-translate-result-wrapper&quot; style=&quot;overflow: hidden;&quot;&gt;\r\n&lt;div class=&quot;simple-translate-move&quot; draggable=&quot;true&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n&lt;div class=&quot;simple-translate-result-contents&quot;&gt;\r\n&lt;p class=&quot;simple-translate-result&quot; dir=&quot;auto&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p class=&quot;simple-translate-candidate&quot; dir=&quot;auto&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;', '63feebb0c44f4.png', 'el', '2023-03-20 05:45:31'),
(6, 'Test', '&lt;p&gt;lorem &lt;strong&gt;nakjfenfkajfn&lt;/strong&gt; kjaefkaef &lt;em&gt;aefjaefbjafbajf&lt;/em&gt; ajf ajfh abjfhb ajhabgjaebg eguiqhquegheiguhgi qegu qeig qheg iquegh qieugh qiuh akgbkegb qgkqhg qegjqo rgi goqhg qgu qiguq hgiqugh qeuigh qgi hqguieh giqueg hiqugheg iuqgh iquegh eqguegh iqug qeigueqhgiequg hiugqheg iuqghuqig hqiu herjgbakurgh ikwugigh uinkjfneukfh qiuefh quiefh qieufhqefiuq ehfiquef qieuf qieufh qieufh qeifuqeh fiuqefhqiefuh qfiqu efuquefi qefuhq efu qefu qefiuqefh qief hqef iquefh qeifuqehfiu fh qeifuqef&amp;nbsp;&lt;/p&gt;', '64183f0cd803f.png', 'john', '2023-03-20 05:44:32'),
(7, 'Tes', '&lt;p&gt;gskjgnkrgjnslgn&lt;/p&gt;', '6418659c8afad.png', 'nfejkf', '2023-03-20 06:54:36');

-- --------------------------------------------------------

--
-- Table structure for table `balasan`
--

CREATE TABLE `balasan` (
  `id_balasan` int(11) NOT NULL,
  `nama_balasan` varchar(50) NOT NULL,
  `email_balasan` varchar(50) NOT NULL,
  `isi_balasan` text NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `tanggal_balasan` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `balasan`
--

INSERT INTO `balasan` (`id_balasan`, `nama_balasan`, `email_balasan`, `isi_balasan`, `id_artikel`, `tanggal_balasan`) VALUES
(2, 'Diky', 'fkjsn@gmail.com', 'wah parah ni hoaq', 5, '2023-03-19 19:49:51');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`) VALUES
(1, 'tempat tinggal santri'),
(2, 'lapangan'),
(3, 'alat olahraga'),
(4, 'dapur umum untuk santri'),
(7, 'Lapangan Sepak Bola');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `ket_foto` text NOT NULL,
  `kategori_foto` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `ket_foto`, `kategori_foto`, `foto`) VALUES
(13, 'dvsbb', 'smp-islam', '6418706306898.png'),
(14, 'Tes 1', 'darul-atqia', '641879e000257.png'),
(15, 'Tes2 ', 'sma-islam', '641879ee90bd4.png'),
(16, 'Tes4', 'sma-islam', '641879fa828b4.png');

-- --------------------------------------------------------

--
-- Table structure for table `pelajaran`
--

CREATE TABLE `pelajaran` (
  `id_pelajaran` int(11) NOT NULL,
  `nama_pelajaran` text NOT NULL,
  `penjelasan_pelajaran` text NOT NULL,
  `foto_pelajaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajaran`
--

INSERT INTO `pelajaran` (`id_pelajaran`, `nama_pelajaran`, `penjelasan_pelajaran`, `foto_pelajaran`) VALUES
(9, 'IPA upd', 'Ilmu Pengetahuan Alam', '63f4f11e908a0.jpg'),
(14, 'darassullugoh', 'kitab yang mempelajari tentang', 'darasullugoh.jpg'),
(16, 'fiqhul wadih', 'Kitab al-Fiqh al-Wadhih, merupakan kitab fikih sederhana berbahasa Arab yang ditulis oleh Mahmud Yunus, salah seorang tokoh pendidikan islam di Indonesia.  Berikut ini terjemahan dari Isi Kitab Al-Fikhul Wadih, pada bagian pertama membahas tentang Thaharah.', 'fiqulwadih.jpg'),
(17, 'matan bina', 'kitab matan bina adalah', 'muktarulhadist.jpg'),
(18, 'sejarah', 'mata pelajaran sejarah merupakan mata pelajaran yang mempelajari segala hal yang telah terjadi di masa lalu', '638a42d252261.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama_pesan` varchar(255) NOT NULL,
  `email_pesan` varchar(255) NOT NULL,
  `isi_pesan` varchar(255) NOT NULL,
  `tanggal_pesan` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama_pesan`, `email_pesan`, `isi_pesan`, `tanggal_pesan`) VALUES
(2, 'Tes', 'tes@gmail.com', 'Ini percobaan', '2023-03-01 07:04:00'),
(3, 'tes', 'tes@gmail.com', 'hai apa kabar\r\n', '2023-03-01 00:09:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `balasan`
--
ALTER TABLE `balasan`
  ADD PRIMARY KEY (`id_balasan`),
  ADD KEY `id_artikel` (`id_artikel`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`id_pelajaran`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `balasan`
--
ALTER TABLE `balasan`
  MODIFY `id_balasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `id_pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `balasan`
--
ALTER TABLE `balasan`
  ADD CONSTRAINT `balasan_ibfk_1` FOREIGN KEY (`id_artikel`) REFERENCES `artikel` (`id_artikel`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
