-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Okt 2023 pada 15.01
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computer-term-search-php-mysql`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id_kontak` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kontak`
--

INSERT INTO `tb_kontak` (`id_kontak`, `username`, `email`, `comment`) VALUES
(1, 'aaaa', 'aaa@gmail.com', 'aaaa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kosakata`
--

CREATE TABLE `tb_kosakata` (
  `id` int(11) NOT NULL,
  `kosakata` varchar(255) NOT NULL,
  `makna` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kosakata`
--

INSERT INTO `tb_kosakata` (`id`, `kosakata`, `makna`) VALUES
(1, 'Abend', 'Penghentian sebuah program atau proses yang tidak normal diakibatkan oleh terjadinya kesalahan input data oleh user atau crash program'),
(2, 'ABI', 'Pemafaran spesifikasi perangkat keras dan sistem operasi yang sedang digunakan.'),
(3, 'AbiWord', 'Aplikasi GNOME Office untuk mengolah kata (word processing). AbiWord tergolong dalam salah satu perangkat lunak open source yang dilisensi dengan GNU GPL (General Public License). Karena bisa digunakan sebebas-bebasnya termasuk juga melakukan modifikasi sesuai kebutuhan.'),
(4, 'Abort', 'Perintah untuk membatalkan jalannya suatu program secara paksa dan mengembalikan ke sistem operasi.'),
(5, 'Access', 'Kegiatan mengambil atau menyimpan data dari atau ke memori atau ke disk drive.'),
(6, 'Accessibillity', 'Cara men-set tombol, suara, tampilan dan lain sebagainya pada sistem operasi Windows.'),
(7, 'Accessories', 'Pada sistem operasi Windows, accessories adalah program-program tambahan, misalnya Calculator, Notepad, Wordpad, Paint, dll.'),
(8, 'Accumulator', 'Bagian dari arithmetic unit sebuah komputer untuk menyimpan hasil dari perhitungan sementara atau beberapa operasi lain.'),
(9, 'Acknowledge', 'Tanda dari terminal penerima bahwa pengiriman pesan telah sampai tanpa ada kesalahan. Acknowledge berasal dari kata Acknowledgement.'),
(10, 'Bindery', 'Database jaringan yang berisi definisi untuk entitas pengguna, group, workgroup, dll.'),
(11, 'Bit', 'Unit terkecil dari informasi. Satu bit cukup untuk menyatakan perbedaan antara ya dan tidak, atas dan bawah, on dan off, satu dan nol. Komputer harus menampilkan informasi dalam bit karena sirkuit elektronik yang dibuat hanya memiliki dua keadaan, on atau off.'),
(12, 'Bitmap', 'Sebuah image grafis yang disusun dari pixel-pixel dan dikonversikan ke dalam bits. Biasa digunakan dalam Microsoft Windows.'),
(13, 'Black Hat', 'Hacker jahat, hacker black hat ini juga biasa disebut sebagai “aka crackers” dengan kemampuan mencuri data atau merusak sistem yang ada dalam komputer korban. Kelebihan black hat adalah kemampuannya untuk menghilangkan jejak hingga tidak bisa dilacak siapa sebenarnya pelaku serangan yang terjadi setelah tujuan tertentu mereka terpenuhi.'),
(14, 'Black Box', 'Alat atau sebuah proses yang khusus hanya dalam batas proses input dan output. Kita tidak mengetahui apa yang terjadi di dalam.'),
(15, 'Cancel', 'Digunakan untuk membatalkan perintah atau menggagalkan kegiatan yang sedang dikerjakan.'),
(16, 'Access', 'Kegiatan mengambil atau menyimpan data dari atau ke memori atau ke disk drive.'),
(17, 'Access Method', 'Perangkat lunak yang mengontrol pemindahan data antara penyimpan utama dan peralatan input dan output dalam sebuah sistem.'),
(18, 'Access Time', 'Waktu yang dibutuhkan untuk mengambil atau memasukkan data dari atau ke memori.'),
(19, 'Accessories', 'Pada sistem operasi Windows, accessories adalah program-program tambahan, misalnya Calculator, Notepad, Wordpad, Paint, dll.'),
(20, 'Active Task Button', 'Tombol perintah yang terletak pada taskbar yang akan muncul jika sebuah perintah harus dieksekusi.'),
(21, 'Active', 'Segala sesuatu yang berhubungan dengan setiap alat atau sistem yang sedang digunakan saat ini.'),
(22, 'ActiveX', 'Lingkungan pemrograman yang dilakukan oleh Microsoft untuk menciptakan sistem yang aktif pada halaman Web, yang juga mendukung Java, JavaScript, Visual Basic dan bahasa-bahasa pemrograman lainnya yang semuannya itu terbatas dan hanya dapat digunakan pada Internet Explorer.'),
(23, 'Auto Answer', 'Kemampuan sebuah modem untuk memberikan tanggapan pada suatu hubungan dengan sistem komputer tanpa campur tangan pengguna.'),
(24, 'Auto Call', 'Kemampuan sebuah modem untuk memanggil atau mengadakan sambungan atas perintah komputer.'),
(25, 'AutoCAD', 'Perangkat lunak yang digunakan untuk mendesain gambar teknik, khususnya dalam pembuatan gambar desain arsitektur maupun konstruksi. Perangkat lunak ini merupakan salah satu perangkat lunak teknik yang dikeluarkan oleh Autodesk Inc. Kelebihan dari perangkat lunak ini adalah kemampuan untuk pembuatan konstruksi baik bentuk dua dimensi maupun tiga dimensi.'),
(26, 'AutoCAD MAP', 'Salah satu perangkat lunak Autodesk untuk pemetaan. Kelebihan AutoCAD MAP 2000 adalah dapat melakukan operasi dengan beberapa proyek sekaligus (multiple document interface, MDI) dan pada saat yang sama masih dapat membukan proyek lain dengan sumber data tunggal.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `tb_kosakata`
--
ALTER TABLE `tb_kosakata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
