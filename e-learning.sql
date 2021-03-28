-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Mar 2021 pada 18.44
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-learning`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `level` varchar(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`, `foto`, `level`, `date_time`) VALUES
('admin', '$2y$10$KRMUGhBWX3HMQBX/Iomwr.B1ZTO5cPrSYpWAMTwrcic.wgaxy0cgi', 'profil.png', 'admin', '2021-03-25 14:32:06'),
('user', '$2y$10$UcJzustbZlPO9mu8rWPJhO52L5/MFsFydaPU61yC/mklL4sMTH/.2', 'profil.png', 'user', '2021-03-26 02:41:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(20) NOT NULL,
  `nama` text NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `jeniskelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `telepon`, `password`, `foto`, `date_time`) VALUES
('2020150030', 'Ahmad Maulana', 'L', 'Wonosobo', '1980-07-01', 'Kalilawang\r\nKecamatan Garung', '089876543', '2020150030', 'profil.png', '2021-03-27 06:32:46'),
('2020150031', 'Zainatul', 'P', 'Kebumen', '1995-06-06', 'Mekarsari, Wonosobo', '08314678908', '2020150031', 'profil.png', '2021-03-27 06:32:23'),
('2020150032', 'Ahmad Subakti', 'L', 'Pekalongan', '1983-03-03', 'Tembelang, Wonosobo', '081564235967', '2020150032', 'profil.png', '2021-03-27 13:55:37'),
('2020150033', 'Wulandari', 'P', 'Wonosobo', '1990-03-30', 'Sukoharjo', '08116688732', '2020150033', 'profil.png', '2021-03-27 06:34:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` varchar(20) NOT NULL,
  `kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `kelas`) VALUES
('60561b2e85b7f', 'X Akuntansi 1'),
('605daa7c2aa42', 'X Rekayasa Perangkat Lunak (RPL) 1'),
('605daa959074f', 'X Teknik Kendaraan Ringan (TKR) 1'),
('605daa887ceff', 'X Teknik Komputer dan Jaringan (TKJ) 1'),
('605daa8fc2394', 'X Teknik Sepeda Motar (TSM) 1'),
('605daa9f1597b', 'XI Akuntansi 1'),
('605daaaa4d5b0', 'XI Rekayasa Perangkat Lunak (RPL) 1'),
('605daacd29cf0', 'XI Teknik Kendaraan Ringan (TKR) 1'),
('605daabe20fa8', 'XI Teknik Komputer dan Jaringan (TKJ) 1'),
('605daac7655d0', 'XI Teknik Sepeda Motar (TSM) 1'),
('605daad4e0f4e', 'XII Akuntansi 1'),
('605daadd2b188', 'XII Rekayasa Perangkat Lunak (RPL) 1'),
('605daafeb9d90', 'XII Teknik Kendaraan Ringan (TKR) 1'),
('605daae5abaf8', 'XII Teknik Komputer dan Jaringan (TKJ) 1'),
('605daaec397af', 'XII Teknik Sepeda Motar (TSM) 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_mapel`
--

CREATE TABLE `kelas_mapel` (
  `kelas` varchar(50) NOT NULL,
  `matapelajaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas_mapel`
--

INSERT INTO `kelas_mapel` (`kelas`, `matapelajaran`) VALUES
('X Rekayasa Perangkat Lunak (RPL) 1', '605c700f9bfee'),
('X Rekayasa Perangkat Lunak (RPL) 1', '605c70a7c231b'),
('X Rekayasa Perangkat Lunak (RPL) 1', '605dadf890543'),
('X Akuntansi 1', '605c700f9bfee'),
('X Akuntansi 1', '605dadf890543'),
('X Akuntansi 1', '605ed2387d5ab');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_siswa`
--

CREATE TABLE `kelas_siswa` (
  `kelas` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas_siswa`
--

INSERT INTO `kelas_siswa` (`kelas`, `nip`, `nis`) VALUES
('X Akuntansi 1', '2020150033', '4230'),
('X Akuntansi 1', '2020150033', '4232'),
('X Rekayasa Perangkat Lunak (RPL) 1', '2020150030', '4231'),
('X Rekayasa Perangkat Lunak (RPL) 1', '2020150030', '4234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id` varchar(20) NOT NULL,
  `akses` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id`, `akses`, `user`, `waktu`) VALUES
('605f396ee47d1', 'http://localhost/e-learning/guru/?m=prosesLogin', 'Ahmad Subakti', '2021-03-27 13:55:58'),
('605f398773441', 'http://localhost/e-learning/guru/?m=logout&username=Ahmad%20Subakti', 'Ahmad Subakti', '2021-03-27 13:56:23'),
('6060aa538faea', 'http://localhost/e-learning/guru/?m=prosesLogin', 'Ahmad Subakti', '2021-03-28 16:09:55'),
('6060abe1e5821', 'http://localhost/e-learning/guru/?m=logout&username=Ahmad%20Subakti', 'Ahmad Subakti', '2021-03-28 16:16:33'),
('6060abe5628bf', 'http://192.168.43.102/e-learning/guru/?m=prosesLogin', 'Ahmad Subakti', '2021-03-28 16:16:37'),
('6060ac2fbc6de', 'http://192.168.43.102/e-learning/guru/?m=logout&username=Ahmad%20Subakti', 'Ahmad Subakti', '2021-03-28 16:17:51'),
('6060ac8c12baf', 'http://192.168.43.102/e-learning/siswa/?m=prosesLogin', 'Solihin', '2021-03-28 16:19:24'),
('6060ad5067be2', 'http://192.168.43.102/e-learning/siswa/?m=lihatMateri&id=NjA1ZWY1NWM0YjBmMA==&username=Solihin', 'Solihin', '2021-03-28 16:22:40'),
('6060adc99413a', 'http://192.168.43.102/e-learning/siswa/?m=lihatMateri&id=NjA1ZWY1NWM0YjBmMA==&username=Solihin', 'Solihin', '2021-03-28 16:24:41'),
('6060adcfe0fe9', 'http://192.168.43.102/e-learning/siswa/?m=logout&username=Solihin', 'Solihin', '2021-03-28 16:24:47'),
('6060adf2a2807', 'http://192.168.43.102/e-learning/guru/?m=prosesLogin', 'Wulandari', '2021-03-28 16:25:22'),
('6060ae5925a86', 'http://192.168.43.102/e-learning/guru/?m=prosesLogin', 'Ahmad Subakti', '2021-03-28 16:27:05'),
('6060ae9c76eeb', 'http://192.168.43.102/e-learning/guru/?m=logout&username=Ahmad%20Subakti', 'Ahmad Subakti', '2021-03-28 16:28:12'),
('6060aeb5eb228', 'http://192.168.43.102/e-learning/siswa/?m=prosesLogin', 'Solihin', '2021-03-28 16:28:37'),
('6060aeda06364', 'http://localhost/e-learning/guru/?m=prosesLogin', 'Zainatul', '2021-03-28 16:29:14'),
('6060af24364cc', 'http://localhost/e-learning/guru/?m=prosesBuatMateri&username=Zainatul', 'Zainatul', '2021-03-28 16:30:28'),
('6060af4ee26cb', 'http://192.168.43.102/e-learning/siswa/?m=lihatMateri&id=NjA2MGFmMjQyMmE4Yw==&username=Solihin', 'Solihin', '2021-03-28 16:31:10'),
('6060b0b548213', 'http://localhost/e-learning/guru/?m=logout&username=', '', '2021-03-28 16:37:09'),
('6060b0c584d6f', 'http://localhost/e-learning/guru/?m=prosesLogin', 'Zainatul', '2021-03-28 16:37:25'),
('6060b1a0de383', 'http://192.168.43.102/e-learning/siswa/?m=logout&username=Solihin', 'Solihin', '2021-03-28 16:41:04'),
('6060b1b026e31', 'http://192.168.43.102/e-learning/guru/?m=prosesLogin', 'Zainatul', '2021-03-28 16:41:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materipelajaran`
--

CREATE TABLE `materipelajaran` (
  `id` varchar(20) NOT NULL,
  `idpelajaran` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `ringkasan` text NOT NULL,
  `nip` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `file` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `materipelajaran`
--

INSERT INTO `materipelajaran` (`id`, `idpelajaran`, `judul`, `ringkasan`, `nip`, `tanggal`, `file`, `kelas`) VALUES
('605ee85a9bd5f', '605c70a7c231b', 'Test', 'test', '2020150032', '2021-03-27 08:10:02', '605ee85a9bd73MATERI-1.pdf', 'X Rekayasa Perangkat Lunak (RPL) 1'),
('605ef55c4b0f0', '605c700f9bfee', 'Test', 'test', '2020150030', '2021-03-27 09:05:32', '605ef55c4b0feMATERI-1.pdf', 'X Akuntansi 1'),
('605f0489f2789', '605c700f9bfee', 'Test', 'test', '2020150030', '2021-03-27 10:10:17', '605f0489f2796MATERI-1.pdf', 'X Rekayasa Perangkat Lunak (RPL) 1'),
('6060af2422a8c', '605dadf890543', 'Materi pertemuan 1', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore esse sit amet consequatur odio quidem voluptate vero dicta? Velit perspiciatis accusantium a quasi. Ad quaerat id incidunt vero animi dolorem.', '2020150031', '2021-03-28 16:30:28', '6060af2422a98MATERI-1.pdf', 'X Akuntansi 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelajaran`
--

CREATE TABLE `pelajaran` (
  `id` varchar(20) NOT NULL,
  `namapelajaran` varchar(255) NOT NULL,
  `nip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelajaran`
--

INSERT INTO `pelajaran` (`id`, `namapelajaran`, `nip`) VALUES
('605c700f9bfee', 'Bahasa Indonesia', '2020150030'),
('605c70a7c231b', 'Pemrograman Dasar', '2020150032'),
('605dadf890543', 'Bahasa Inggris', '2020150031'),
('605ed2387d5ab', 'Administrasi Perkantoran', '2020150033');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `jeniskelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `telepon`, `password`, `foto`, `date_time`) VALUES
('4230', 'Sri Aeni', 'P', 'Wonosobo', '2003-04-15', 'Wadaslintang', '081765234908', '4230', 'profil.png', '2021-03-27 06:33:13'),
('4231', 'Nurul', 'P', 'Wonosobo', '2003-08-20', 'Gemblengan', '0897653546455', '4231', 'profil.png', '2021-03-27 06:33:27'),
('4232', 'Solihin', 'L', 'Magelang', '2003-03-25', 'Magelang', '0897653353', '4232', 'profil.png', '2021-03-27 06:33:48'),
('4234', 'Hidayat', 'L', 'Wonosobo', '2003-08-12', 'Lengkong, Mojotengah', '08353453345', '4233', 'profil.png', '2021-03-27 07:05:53');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kelas` (`kelas`);

--
-- Indeks untuk tabel `materipelajaran`
--
ALTER TABLE `materipelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
