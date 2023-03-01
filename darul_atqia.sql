-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 07:39 AM
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
(3, 'Dengan menggunakan kode di atas, fungsi tambahPesan() akan mengembalikan nilai true jika data berhasil ditambahkan ke database, Dengan menggunakan kode di atas, fungsi tambahPesan() akan mengembalikan nilai true jika data berhasil ditambahkan ke database,', 'ilai * pada properti di atas dapat diisi dengan angka dari 0 hingga 5, yang masing-masing merepresentasikan jumlah pixel margin yang diberikan. Sebagai contoh, mx-3 akan memberikan margin kiri dan kanan sebesar 3 pixel pada elemen HTML yang diberikan.     Diky Wiraguna bagaimana cara menambahkan tanggal otomatis pada tabel artikel di php mysql Untuk menambahkan tanggal otomatis pada tabel artikel di PHP MySQL, Anda dapat menggunakan kolom dengan tipe data TIMESTAMP. Kolom dengan tipe data ini akan secara otomatis menyimpan tanggal dan waktu saat data dimasukkan atau diubah.  Berikut adalah contoh pembuatan tabel artikel dengan kolom tanggal menggunakan tipe data TIMESTAMP:', '63feec3b01935.png', 'jhon', '2023-02-28 23:10:03'),
(4, 'Error tersebut terjadi karena file &quot;../functions.php&quot; tidak ditemukan di direktori yang diindikasikan.', 'Error tersebut terjadi karena file &quot;../functions.php&quot; tidak ditemukan di direktori yang diindikasikan.  Dalam hal ini, file &quot;kirim_pesan.php&quot; mencoba untuk meng-include file &quot;functions.php&quot; yang berada di direktori di atasnya. Namun, jika file &quot;functions.php&quot; tidak ada di direktori tersebut, maka akan terjadi error &quot;No such file or directory&quot;.  Untuk mengatasi error tersebut, pastikan bahwa file &quot;functions.php&quot; sudah ada di direktori yang diindikasikan. Jika tidak, maka Anda perlu membuat file tersebut terlebih dahulu.  Jika file &quot;functions.php&quot; sudah ada di direktori yang diindikasikan, pastikan bahwa path ke file tersebut sudah benar. Anda dapat mencoba untuk mengubah path menjadi absolut path, seperti contohnya:  php Copy code include($_SERVER[&#039;DOCUMENT_ROOT&#039;].&#039;/PKL/functions.php&#039;); Dengan menggunakan absolute path, Anda dapat memastikan bahwa path ke file &quot;functions.php&quot; selalu benar, terlepas dari posisi file yang memanggilnya.     Diky Wiraguna function tambahPesan($data) {     global $conn;      $nama_pesan = htmlspecialchars($data[&quot;nama_pesan&quot;]);     $email_pesan = htmlspecialchars($data[&quot;email_pesan&quot;]);     $isi_pesan = htmlspecialchars($data[&quot;isi_pesan&quot;]);      // query insert data     $query = &quot;INSERT INTO pesan VALUES (&#039;&#039;,&#039;$nama_pesan&#039;,&#039;$email_pesan&#039;,&#039;$isi_pesan&#039;)&quot;;      mysqli_query($conn, $query);      return mysqli_affected_rows($conn); }   perbaiki kode diatas Kode di atas terlihat sudah cukup baik, namun terdapat satu kekurangan yang perlu diperbaiki yaitu penggunaan fungsi mysqli_affected_rows(). Fungsi tersebut digunakan untuk mengembalikan jumlah baris yang terpengaruh oleh query terakhir, namun pada fungsi tambahPesan() tidak sepenuhnya dibutuhkan.  Sebagai gantinya, kita dapat mengubah fungsi tambahPesan() agar mengembalikan nilai true jika data berhasil ditambahkan, atau mengembalikan nilai false jika terjadi error. Berikut adalah contoh kode yang diperbaiki:  php Copy code function tambahPesan($data) {     global $conn;      $nama_pesan = htmlspecialchars($data[&quot;nama_pesan&quot;]);     $email_pesan = htmlspecialchars($data[&quot;email_pesan&quot;]);     $isi_pesan = htmlspecialchars($data[&quot;isi_pesan&quot;]);      // query insert data     $query = &quot;INSERT INTO pesan VALUES (&#039;&#039;,&#039;$nama_pesan&#039;,&#039;$email_pesan&#039;,&#039;$isi_pesan&#039;)&quot;;      if (mysqli_query($conn, $query)) {         return true;     } else {         return false;     } } Dengan menggunakan kode di atas, fungsi tambahPesan() akan mengembalikan nilai true jika data berhasil ditambahkan ke database, atau mengembalikan nilai false jika terjadi error saat melakukan query ke database. Anda dapat menggunakan nilai yang dikembalikan oleh fungsi tambahPesan() untuk melakukan validasi saat memanggil fungsi tersebut.     Diky Wiraguna if (isset($_POST[&quot;submit&quot;])) {     // cek apakah data berhasil atau gagal     if (tambahPesan($_POST) &gt; 0) {         echo &quot;         &lt;script&gt;             alert(&#039;pesan terkirim&#039;);             document.location.href = &#039;kontak.php&#039;         &lt;/script&gt;         &quot;;     } else {         echo &quot;         &lt;script&gt;             alert(&#039;pesan tidak terkirim&#039;);             document.location.href = &#039;kontak.php&#039;         &lt;/script&gt;         &quot;;     } }   Kode di atas terlihat cukup baik, namun terdapat satu hal yang perlu diperhatikan yaitu penggunaan fungsi tambahPesan(). Pada kode sebelumnya, fungsi tersebut telah diperbaiki agar mengembalikan nilai true atau false. Oleh karena itu, pada kode di atas, perlu ada sedikit perubahan pada validasi if (tambahPesan($_POST) &gt; 0).  Berikut adalah contoh kode yang diperbaiki:  php Copy code if (isset($_POST[&quot;submit&quot;])) {     // tambahkan pesan dan cek apakah berhasil atau tidak     if (tambahPesan($_POST)) {         echo &quot;         &lt;script&gt;             alert(&#039;pesan terkirim&#039;);             document.location.href = &#039;kontak.php&#039;         &lt;/script&gt;         &quot;;     } else {         echo &quot;         &lt;script&gt;             alert(&#039;pesan tidak terkirim&#039;);             document.location.href = &#039;kontak.php&#039;         &lt;/script&gt;         &quot;;     } } Dalam kode di atas, perubahan yang dilakukan adalah menghapus tanda &gt; setelah pemanggilan fungsi tambahPesan($_POST). Hal ini dilakukan karena pada fungsi tambahPesan() telah dilakukan perubahan sehingga fungsi tersebut akan mengembalikan nilai true atau false. Oleh karena itu, validasi pada kode di atas menggunakan cara yang lebih sederhana yaitu if (tambahPesan($_POST)).     Diky Wiraguna setelah dicoba kenapa tidak memuculkan alert dan data tidak berhasil ditambah ket db Ada beberapa kemungkinan penyebab mengapa alert tidak muncul dan data tidak berhasil ditambahkan ke database. Beberapa kemungkinan tersebut antara lain:  Form yang dikirim tidak lengkap atau tidak sesuai dengan struktur tabel pada database.  Terdapat kesalahan dalam koneksi ke database, sehingga query tidak dapat dieksekusi.  Terdapat kesalahan pada kode yang tidak diidentifikasi oleh editor atau IDE.  Untuk memastikan penyebabnya, Anda dapat mengecek apakah terdapat error pada query atau koneksi ke database dengan menambahkan kode berikut pada fungsi tambahPesan():  bash Copy code if (mysqli_query($conn, $query)) {     return true; } else {     echo mysqli_error($conn);     return false; } Dengan menambahkan kode tersebut, Anda dapat melihat pesan error yang muncul jika terjadi kesalahan pada query. Selain itu, Anda juga dapat mengecek koneksi ke database dengan memeriksa kembali konfigurasi pada file koneksi (koneksi.php) dan pastikan bahwa file tersebut di-include pada halaman yang memanggil fungsi tambahPesan().  Jika kedua hal tersebut tidak menunjukkan kesalahan, maka kemungkinan terdapat kesalahan pada kode lain. Untuk memastikan hal tersebut, Anda dapat mengecek setiap baris kode dengan seksama atau menggunakan debugger untuk memudahkan proses pengecekan kesalahan.     Diky Wiraguna &lt;li&gt;             &lt;a class=&quot;text-white nav-link  bg-warning &quot; href=&quot;adm_pelajaran.php&quot;&gt;                 &lt;i class=&quot;bi bi-book&quot;&gt;&lt;/i&gt;                 Pelajaran             &lt;/a&gt;         &lt;/li&gt;  buatkan kondnisi jika berada pada adm_pelajaran.php maka bg-warning Anda dapat menambahkan kondisi pada tag &lt;a&gt; menggunakan PHP, seperti contoh di bawah ini:  php Copy code &lt;li&gt;     &lt;a class=&quot;text-white nav-link &lt;?php if(basename($_SERVER[&#039;PHP_SELF&#039;]) == &#039;adm_pelajaran.php&#039;) echo &#039;bg-warning&#039;; ?&gt;&quot; href=&quot;adm_pelajaran.php&quot;&gt;         &lt;i class=&quot;bi bi-book&quot;&gt;&lt;/i&gt;         Pelajaran     &lt;/a&gt; &lt;/li&gt; Kode di atas akan mengecek apakah halaman yang sedang dibuka adalah adm_pelajaran.php menggunakan basename($_SERVER[&#039;PHP_SELF&#039;]) dan jika ya, maka akan menambahkan class bg-warning pada tag &lt;a&gt;. Jika halaman yang dibuka berbeda, maka class bg-warning tidak ditambahkan.     Diky Wiraguna &lt;form method=&quot;POST&quot; action=&quot;&quot; enctype=&quot;multipart/form-data&quot;&gt;     &lt;div class=&quot;mb-3&quot;&gt;         &lt;label for=&quot;nama_pesan&quot; class=&quot;form-label&quot;&gt;Nama&lt;/label&gt;         &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;nama_pesan&quot; name=&quot;nama_pesan&quot; required&gt;     &lt;/div&gt;     &lt;div class=&quot;mb-3&quot;&gt;         &lt;label for=&quot;email_pesan&quot; class=&quot;form-label&quot;&gt;Email&lt;/label&gt;         &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;email_pesan&quot; name=&quot;email_pesan&quot; required&gt;     &lt;/div&gt;     &lt;div class=&quot;mb-3&quot;&gt;         &lt;label for=&quot;isi_pesan&quot; class=&quot;form-label&quot;&gt;Pesan&lt;/label&gt;         &lt;textarea class=&quot;form-control&quot; id=&quot;isi_pesan&quot; name=&quot;isi_pesan&quot; rows=&quot;3&quot; required&gt;&lt;/textarea&gt;     &lt;/div&gt;     &lt;button class=&quot;btn btn-primary&quot; type=&quot;sumbit&quot; name=&quot;submit&quot;&gt;Tambah Data&lt;/button&gt; &lt;/form&gt;  modifikasi tampilan pada form diatas dengan menambahkan card dan titlle card Hubungi Kami Anda dapat memodifikasi tampilan form di atas dengan menambahkan card dan judul &quot;Hubungi Kami&quot; menggunakan Bootstrap. Berikut contoh kodenya:  javascript Copy code &lt;div class=&quot;card&quot;&gt;   &lt;div class=&quot;card-header bg-primary text-white&quot;&gt;     Hubungi Kami   &lt;/div&gt;   &lt;div class=&quot;card-body&quot;&gt;     &lt;form method=&quot;POST&quot; action=&quot;&quot; enctype=&quot;multipart/form-data&quot;&gt;       &lt;div class=&quot;mb-3&quot;&gt;         &lt;label for=&quot;nama_pesan&quot; class=&quot;form-label&quot;&gt;Nama&lt;/label&gt;         &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;nama_pesan&quot; name=&quot;nama_pesan&quot; required&gt;       &lt;/div&gt;       &lt;div class=&quot;mb-3&quot;&gt;         &lt;label for=&quot;email_pesan&quot; class=&quot;form-label&quot;&gt;Email&lt;/label&gt;         &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;email_pesan&quot; name=&quot;email_pesan&quot; required&gt;       &lt;/div&gt;       &lt;div class=&quot;mb-3&quot;&gt;         &lt;label for=&quot;isi_pesan&quot; class=&quot;form-label&quot;&gt;Pesan&lt;/label&gt;         &lt;textarea class=&quot;form-control&quot; id=&quot;isi_pesan&quot; name=&quot;isi_pesan&quot; rows=&quot;3&quot; required&gt;&lt;/textarea&gt;       &lt;/div&gt;       &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot; name=&quot;submit&quot;&gt;Kirim&lt;/button&gt;     &lt;/form&gt;   &lt;/div&gt; &lt;/div&gt; Kode di atas akan menampilkan card dengan judul &quot;Hubungi Kami&quot; di bagian atas dan form pada bagian body-nya.     Diky Wiraguna tambahkan margin kiri kanan 6 pixel dan margin atas 6 pixel Anda dapat menambahkan margin kiri kanan 6 pixel dan margin atas 6 pixel pada card menggunakan class Bootstrap mx-2 my-2. Berikut contoh kodenya:  javascript Copy code &lt;div class=&quot;card mx-2 my-2&quot;&gt;   &lt;div class=&quot;card-header bg-primary text-white&quot;&gt;     Hubungi Kami   &lt;/div&gt;   &lt;div class=&quot;card-body&quot;&gt;     &lt;form method=&quot;POST&quot; action=&quot;&quot; enctype=&quot;multipart/form-data&quot;&gt;       &lt;div class=&quot;mb-3&quot;&gt;         &lt;label for=&quot;nama_pesan&quot; class=&quot;form-label&quot;&gt;Nama&lt;/label&gt;         &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;nama_pesan&quot; name=&quot;nama_pesan&quot; required&gt;       &lt;/div&gt;       &lt;div class=&quot;mb-3&quot;&gt;         &lt;label for=&quot;email_pesan&quot; class=&quot;form-label&quot;&gt;Email&lt;/label&gt;         &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;email_pesan&quot; name=&quot;email_pesan&quot; required&gt;       &lt;/div&gt;       &lt;div class=&quot;mb-3&quot;&gt;         &lt;label for=&quot;isi_pesan&quot; class=&quot;form-label&quot;&gt;Pesan&lt;/label&gt;         &lt;textarea class=&quot;form-control&quot; id=&quot;isi_pesan&quot; name=&quot;isi_pesan&quot; rows=&quot;3&quot; required&gt;&lt;/textarea&gt;       &lt;/div&gt;       &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot; name=&quot;submit&quot;&gt;Kirim&lt;/button&gt;     &lt;/form&gt;   &lt;/div&gt; &lt;/div&gt; Kode di atas akan menambahkan margin kiri kanan sebesar 6 pixel dan margin atas sebesar 6 pixel pada card yang menampilkan form &quot;Hubungi Kami&quot;.     Diky Wiraguna berapa batas margin yang diberikan bootstrap Bootstrap menyediakan beberapa pilihan nilai margin (atau padding) yang dapat digunakan dengan mudah pada elemen HTML, yaitu:  mx-* : margin horizontal (margin kiri dan kanan) my-* : margin vertical (margin atas dan bawah) mt-* : margin atas mb-* : margin bawah ml-* : margin kiri mr-* : margin kanan Nilai * pada properti di atas dapat diisi dengan angka dari 0 hingga 5, yang masing-masing merepresentasikan jumlah pixel margin yang diberikan. Sebagai contoh, mx-3 akan memberikan margin kiri dan kanan sebesar 3 pixel pada elemen HTML yang diberikan.     Diky Wiraguna bagaimana cara menambahkan tanggal otomatis pada tabel artikel di php mysql Untuk menambahkan tanggal otomatis pada tabel artikel di PHP MySQL, Anda dapat menggunakan kolom dengan tipe data TIMESTAMP. Kolom dengan tipe data ini akan secara otomatis menyimpan tanggal dan waktu saat data dimasukkan atau diubah.  Berikut adalah contoh pembuatan tabel artikel dengan kolom tanggal menggunakan tipe data TIMESTAMP:  sql Copy code CREATE TABLE artikel (   id INT(11) PRIMARY KEY AUTO_INCREMENT,   judul VARCHAR(255) NOT NULL,   isi TEXT NOT NULL,   tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP ); Pada contoh di atas, kolom tanggal akan secara otomatis menyimpan tanggal dan waktu saat data dimasukkan. Anda tidak perlu menyertakan data tanggal pada saat pengisian data artikel, karena kolom ini akan diisi otomatis oleh MySQL.  Ketika melakukan insert data ke tabel artikel, Anda dapat hanya menyertakan judul dan isi artikel. Contoh:  sql Copy code INSERT INTO artikel (judul, isi) VALUES (&#039;Judul Artikel&#039;, &#039;Isi dari artikel&#039;); Kolom tanggal akan secara otomatis diisi dengan tanggal dan waktu saat data dimasukkan.  Dengan menggunakan tipe data TIMESTAMP, Anda dapat memastikan bahwa tanggal pada tabel artikel selalu terisi dengan benar dan akurat.     Diky Wiraguna tambahkan foto artikel Untuk menambahkan foto pada tabel artikel, Anda perlu menambahkan kolom baru pada tabel artikel untuk menyimpan nama file gambar atau path ke file gambar. Anda juga perlu menambahkan field input pada form input artikel untuk mengupload gambar.  Berikut ini adalah contoh pembuatan tabel artikel dengan kolom gambar menggunakan tipe data VARCHAR:  sql Copy code CREATE TABLE artikel (   id INT(11) PRIMARY KEY AUTO_INCREMENT,   judul VARCHAR(255) NOT NULL,   isi TEXT NOT NULL,   gambar VARCHAR(255),   tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP ); Pada contoh di atas, kolom gambar akan digunakan untuk menyimpan nama file gambar yang diupload. Anda dapat mengubah tipe data gambar sesuai dengan kebutuhan Anda.  Setelah membuat kolom gambar pada tabel artikel, Anda perlu menambahkan field input pada form input artikel untuk mengupload gambar. Berikut ini adalah contoh kode untuk menambahkan field input gambar pada form:  php Copy code &lt;form method=&quot;POST&quot; action=&quot;&quot; enctype=&quot;multipart/form-data&quot;&gt;   &lt;div class=&quot;mb-3&quot;&gt;     &lt;label for=&quot;judul&quot; class=&quot;form-label&quot;&gt;Judul&lt;/label&gt;     &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;judul&quot; name=&quot;judul&quot; required&gt;   &lt;/div&gt;   &lt;div class=&quot;mb-3&quot;&gt;     &lt;label for=&quot;isi&quot; class=&quot;form-label&quot;&gt;Isi&lt;/label&gt;     &lt;textarea class=&quot;form-control&quot; id=&quot;isi&quot; name=&quot;isi&quot; rows=&quot;3&quot; required&gt;&lt;/textarea&gt;   &lt;/div&gt;   &lt;div class=&quot;mb-3&quot;&gt;     &lt;label for=&quot;gambar&quot; class=&quot;form-label&quot;&gt;Gambar&lt;/label&gt;     &lt;input type=&quot;file&quot; class=&quot;form-control&quot; id=&quot;gambar&quot; name=&quot;gambar&quot;&gt;   &lt;/div&gt;   &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot; name=&quot;submit&quot;&gt;Tambah Artikel&lt;/button&gt; &lt;/form&gt; Pada contoh di atas, field input gambar menggunakan tipe file untuk memungkinkan pengguna mengupload file gambar. Anda dapat menambahkan atribut accept pada tag input untuk membatasi tipe file yang dapat diupload.  Setelah menambahkan field input gambar pada form, Anda perlu menambahkan kode untuk mengupload file gambar ke server dan menyimpan nama file gambar pada kolom gambar pada tabel artikel. Berikut ini adalah contoh kode untuk mengupload file gambar dan menyimpan nama file pada kolom gambar:  php Copy code if (isset($_POST[&#039;submit&#039;])) {   $judul = $_POST[&#039;judul&#039;];   $isi = $_POST[&#039;isi&#039;];   $gambar = $_FILES[&#039;gambar&#039;][&#039;name&#039;];   $tmp = $_FILES[&#039;gambar&#039;][&#039;tmp_name&#039;];      // move uploaded file to desired directory   move_uploaded_file($tmp, &quot;uploads/&quot; . $gambar);    // insert data to database   $query = &quot;INSERT INTO artikel (judul, isi, gambar) VALUES (&#039;$judul&#039;, &#039;$isi&#039;, &#039;$gambar&#039;)&quot;;   $result = mysqli_query($conn, $query);    if ($result) {     echo &quot;Artikel berhasil ditambahkan&quot;;   } else {     echo &quot;Artikel gagal ditambahkan&quot;;   } } Pada contoh di atas, kode pertama digunakan untuk mengambil data yang diinputkan pada form, termasuk nama file gambar yang diupload. Kode selanjutnya digunakan untuk mengupload file gambar ke direktori uploads. Direktori ini harus dibuat terlebih dahulu di server. Kode terakhir digunakan untuk     Diky Wiraguna function tambahArtikel($data) {     global $conn;      $jdl_artikel = htmlspecialchars($data[&quot;jdl_artikel&quot;]);     $konten_artikel = htmlspecialchars($data[&quot;konten_artikel&quot;]);     // upload gambar/foto     $foto_artikel = uploadArtikel();     if (!$foto_artikel) {         return false;     }     $pembuat_artikel = htmlspecialchars($data[&quot;pembuat_artikel&quot;]);      // query insert data     $query = &quot;INSERT INTO artikel VALUES (&#039;&#039;,&#039;$jdl_artikel&#039;,&#039;$konten_artikel&#039;,&#039;$foto_artikel&#039;,&#039;$pembuat_artikel&#039;)&quot;;      mysqli_query($conn, $query);      return mysqli_affected_rows($conn); }  edit kode diatas dan tambahkan tanggal artikellnya function tambahArtikel($data) { global $conn;  php Copy code $jdl_artikel = htmlspecialchars($data[&quot;jdl_artikel&quot;]); $konten_artikel = htmlspecialchars($data[&quot;konten_artikel&quot;]); // upload gambar/foto $foto_artikel = uploadArtikel(); if (!$foto_artikel) {     return false; } $pembuat_artikel = htmlspecialchars($data[&quot;pembuat_artikel&quot;]); $tgl_artikel = date(&#039;Y-m-d&#039;); // menambahkan tanggal artikel  // query insert data $query = &quot;INSERT INTO artikel VALUES (&#039;&#039;,&#039;$jdl_artikel&#039;,&#039;$konten_artikel&#039;,&#039;$foto_artikel&#039;,&#039;$pembuat_artikel&#039;,&#039;$tgl_artikel&#039;)&quot;;  mysqli_query($conn, $query);  return mysqli_affected_rows($conn); }  Pada kode diatas, kita menambahkan variabel $tgl_artikel dengan nilai tanggal saat ini menggunakan fungsi date(). Kemudian, kita menambahkan variabel tersebut ke dalam query INSERT untuk dimasukkan ke dalam kolom tgl_artikel.     Diky Wiraguna tambahkan tanggal secara otomatis Untuk menambahkan tanggal secara otomatis saat menambahkan artikel, kita dapat menggunakan fungsi NOW() dari MySQL. Fungsi ini akan menghasilkan tanggal dan waktu saat ini sesuai dengan zona waktu yang diatur pada server MySQL.  Berikut adalah kode yang sudah dimodifikasi:  php Copy code function tambahArtikel($data) {     global $conn;      $jdl_artikel = htmlspecialchars($data[&quot;jdl_artikel&quot;]);     $konten_artikel = htmlspecialchars($data[&quot;konten_artikel&quot;]);     // upload gambar/foto     $foto_artikel = uploadArtikel();     if (!$foto_artikel) {         return false;     }     $pembuat_artikel = htmlspecialchars($data[&quot;pembuat_artikel&quot;]);     $tgl_artikel = date(&quot;Y-m-d H:i:s&quot;); // Tanggal otomatis saat artikel ditambahkan      // query insert data     $query = &quot;INSERT INTO artikel VALUES (&#039;&#039;,&#039;$jdl_artikel&#039;,&#039;$konten_artikel&#039;,&#039;$foto_artikel&#039;,&#039;$pembuat_artikel&#039;,&#039;$tgl_artikel&#039;)&quot;;      mysqli_query($conn, $query);      return mysqli_affected_rows($conn); } Pada kode diatas, kita menambahkan variabel $tgl_artikel yang diisi dengan nilai tanggal dan waktu saat ini menggunakan fungsi date(). Kemudian, kita tambahkan variabel tersebut pada query INSERT INTO untuk dimasukkan ke dalam kolom tgl_artikel.     Diky Wiraguna function ubahArtikel($data) {     global $conn;      $id_artikel = $data[&quot;id_artikel&quot;];     $jdl_artikel = htmlspecialchars($data[&quot;jdl_artikel&quot;]);     $konten_artikel = htmlspecialchars($data[&quot;konten_artikel&quot;]);      $gambarLama = htmlspecialchars($data[&quot;gambarLama&quot;]);     $pembuat_artikel = htmlspecialchars($data[&quot;pembuat_artikel&quot;]);      //cek apakah user memilih gambar baru atau tidak     if ($_FILES[&#039;foto_artikel&#039;][&#039;error&#039;] === 4) {         $foto_artikel = $gambarLama;     } else {          $foto_artikel = uploadArtikel();     }      // query update data      $query = &quot;UPDATE artikel SET                 jdl_artikel = &#039;$jdl_artikel&#039;,                 konten_artikel = &#039;$konten_artikel&#039;,                 foto_artikel = &#039;$foto_artikel&#039;,                 pembuat_artikel = &#039;$pembuat_artikel&#039;                 WHERE id_artikel = $id_artikel&quot;;      mysqli_query($conn, $query);      return mysqli_affected_rows($conn); }  ubah fungsi edit artikel diatas dan modifikasi dengan mengacu pada fungsi tambahArtikel diatas function ubahArtikel($data) { global $conn;  php Copy code $id_artikel = $data[&quot;id_artikel&quot;]; $jdl_artikel = htmlspecialchars($data[&quot;jdl_artikel&quot;]); $konten_artikel = htmlspecialchars($data[&quot;konten_artikel&quot;]);  $gambarLama = htmlspecialchars($data[&quot;gambarLama&quot;]); $pembuat_artikel = htmlspecialchars($data[&quot;pembuat_artikel&quot;]);  // cek apakah user memilih gambar baru atau tidak if ($_FILES[&#039;foto_artikel&#039;][&#039;error&#039;] === 4) {     $foto_artikel = $gambarLama; } else {     $foto_artikel = uploadArtikel(); }  // tambahkan tanggal artikel $tanggal_artikel = date(&quot;Y-m-d&quot;);  // query update data $query = &quot;UPDATE artikel SET             jdl_artikel = &#039;$jdl_artikel&#039;,             konten_artikel = &#039;$konten_artikel&#039;,             foto_artikel = &#039;$foto_artikel&#039;,             tanggal_artikel = &#039;$tanggal_artikel&#039;,             pembuat_artikel = &#039;$pembuat_artikel&#039;             WHERE id_artikel = $id_artikel&quot;;  mysqli_query($conn, $query);  return mysqli_affected_rows($conn); }     Diky Wiraguna okay terimakasih, sekarang buatkan kode untuk menampilkan artikel di halaman website yang dapat dilihat public, gunakan php dan bootstrap 5 dengan desain yang keren Baik, berikut adalah contoh kode untuk menampilkan artikel pada halaman website dengan menggunakan PHP dan Bootstrap 5:  php Copy code &lt;div class=&quot;container&quot;&gt;   &lt;div class=&quot;row&quot;&gt;     &lt;?php       // query untuk mengambil data artikel dari database       $query = &quot;SELECT * FROM artikel ORDER BY id_artikel DESC&quot;;       $result = mysqli_query($conn, $query);        // loop untuk menampilkan artikel       while ($row = mysqli_fetch_assoc($result)) {         $id_artikel = $row[&#039;id_artikel&#039;];         $jdl_artikel = $row[&#039;jdl_artikel&#039;];         $tgl_artikel = date(&#039;d M Y&#039;, strtotime($row[&#039;tgl_artikel&#039;]));         $konten_artikel = $row[&#039;konten_artikel&#039;];         $foto_artikel = $row[&#039;foto_artikel&#039;];         $pembuat_artikel = $row[&#039;pembuat_artikel&#039;];     ?&gt;     &lt;div class=&quot;col-md-4 mb-3&quot;&gt;       &lt;div class=&quot;card&quot;&gt;         &lt;img src=&quot;images/&lt;?php echo $foto_artikel; ?&gt;&quot; class=&quot;card-img-top&quot; alt=&quot;&lt;?php echo $jdl_artikel; ?&gt;&quot;&gt;         &lt;div class=&quot;card-body&quot;&gt;           &lt;h5 class=&quot;card-title&quot;&gt;&lt;?php echo $jdl_artikel; ?&gt;&lt;/h5&gt;           &lt;p class=&quot;card-text&quot;&gt;&lt;?php echo substr($konten_artikel, 0, 100); ?&gt;...&lt;/p&gt;           &lt;a href=&quot;artikel.php?id=&lt;?php echo $id_artikel; ?&gt;&quot; class=&quot;btn btn-primary&quot;&gt;Baca Selengkapnya&lt;/a&gt;         &lt;/div&gt;         &lt;div class=&quot;card-footer&quot;&gt;           &lt;small class=&quot;text-muted&quot;&gt;&lt;?php echo $tgl_artikel; ?&gt; | Oleh: &lt;?php echo $pembuat_artikel; ?&gt;&lt;/small&gt;         &lt;/div&gt;       &lt;/div&gt;     &lt;/div&gt;     &lt;?php } ?&gt;   &lt;/div&gt; &lt;/div&gt; Kode di atas akan menampilkan artikel-artikel dari database pada halaman website dengan tampilan card yang responsif. Setiap card akan menampilkan judul artikel, gambar artikel, cuplikan konten artikel, tanggal artikel, dan nama pembuat artikel. Ketika tombol &quot;Baca Selengkapnya&quot; pada card di klik, maka halaman artikel yang bersangkutan akan ditampilkan. Tentu saja, desainnya bisa disesuaikan dengan kebutuhan Anda.     Diky Wiraguna bagaimana cara membuat judul halaman dengan bootstrap 5 Untuk membuat judul halaman dengan Bootstrap 5, kita dapat menggunakan komponen navbar dengan menambahkan atribut class=&quot;navbar navbar-dark bg-primary&quot; pada elemen nav. Selain itu, kita juga dapat men     Diky Wiraguna bagaimana membuat tulisan dengan h1 pada bootsrap 5 Untuk membuat tulisan dengan h1 pada Bootstrap 5, kita dapat menggunakan class h1 pada elemen HTML yang digunakan. Contohnya seperti ini:  html Copy code &lt;h1 class=&quot;h1&quot;&gt;Ini adalah judul h1 dengan Bootstrap 5&lt;/h1&gt; Dengan menggunakan class h1, maka teks yang di dalamnya akan memiliki style dan ukuran font yang sudah ditentukan oleh Bootstrap 5. Selain itu, Bootstrap 5 juga menyediakan beberapa variasi style untuk h1, yaitu display-1, display-2, display-3, dan display-4. Kita dapat menggunakan variasi style tersebut untuk mendapatkan efek visual yang berbeda. Contohnya:  html Copy code &lt;h1 class=&quot;display-1&quot;&gt;Ini adalah judul display-1 dengan Bootstrap 5&lt;/h1&gt; &lt;h1 class=&quot;display-2&quot;&gt;Ini adalah judul display-2 dengan Bootstrap 5&lt;/h1&gt; &lt;h1 class=&quot;display-3&quot;&gt;Ini adalah judul display-3 dengan Bootstrap 5&lt;/h1&gt; &lt;h1 class=&quot;display-4&quot;&gt;Ini adalah judul display-4 dengan Bootstrap 5&lt;/h1&gt; Masing-masing variasi style memiliki ukuran font yang berbeda, di mana display-1 memiliki ukuran font paling besar dan display-4 memiliki ukuran font paling kecil.     Regenerate response', '63feebed23775.png', 'Ajiz', '2023-02-28 23:08:45'),
(5, 'Kode di atas menampilkan form dengan tiga input yaitu nama, email, dan isi pesan, serta tombol untuk mengirim pesan. ', 'Kode di atas menampilkan form dengan tiga input yaitu nama, email, dan isi pesan, serta tombol untuk mengirim pesan. Anda dapat menyesuaikan form ini dengan kebutuhan anda.  Setelah form dikirim, Anda perlu membuat file &quot;proses_kirim_pesan.php&quot; untuk memproses data yang dikirimkan dari form tersebut. Di dalam file tersebut, Anda dapat menyimpan data pesan ke database atau mengirim email ke admin, atau melakukan aksi lainnya sesuai dengan kebutuhan.  Berikut adalah contoh kode untuk menyimpan data pesan ke database:', '63feebb0c44f4.png', 'el', '2023-02-28 23:07:44');

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
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `ket_foto`, `foto`) VALUES
(1, 'Buka Bersama', '63f4e3ca882f2.jpg'),
(3, 'Pemasangan plank', '63f4e3d756b10.jpg');

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
  `isi_pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama_pesan`, `email_pesan`, `isi_pesan`) VALUES
(2, 'Tes', 'tes@gmail.com', 'Ini percobaan');

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
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `id_pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
