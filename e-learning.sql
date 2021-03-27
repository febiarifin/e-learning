-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Mar 2021 pada 12.26
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
('2020150032', 'Ahmad Subakti', 'L', 'Pekalongan', '1983-03-03', 'Tembelang, Wonosobo', '081564235967', '2020150032', 'profil.png', '2021-03-27 06:32:03'),
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
('605f0489f2789', '605c700f9bfee', 'Test', 'test', '2020150030', '2021-03-27 10:10:17', '605f0489f2796MATERI-1.pdf', 'X Rekayasa Perangkat Lunak (RPL) 1');

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
('605ed2387d5ab', 'Administrasi Perkantoran', '2020150031');

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
