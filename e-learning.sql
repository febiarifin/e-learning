-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2021 pada 05.05
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
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `nis` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `idmateri` varchar(20) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`nis`, `nama`, `idmateri`, `kelas`, `waktu`) VALUES
('0487', 'Nasim Mansur', '608786412d96b', 'X Akuntansi 1', '2021-04-27 03:44:54'),
('0487', 'Nasim Mansur', '608787daf133e', 'X Akuntansi 1', '2021-04-27 03:57:59');

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
('user', '$2y$10$ttITYAaevSrP.PpeXGJc8e.fcjFvbb6sdr1SO4gKITkAexG86tq9.', 'profil.png', 'user', '2021-04-27 01:12:06');

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
('011354', 'Darman Putra S.Pd', 'L', 'Tegal', '1988-01-20', 'Ds. Ronggowarsito No. 811, Palangka Raya 39174, KalSel', '(+62) 601 7745 ', '50', 'profil.png', '2021-05-29 12:37:05'),
('013933', 'Marsito Harsanto Damanik M.Ak', 'L', 'Balikpapan', '1977-12-18', 'Psr. Jayawijaya No. 685, Jayapura 15934, SulTra', '(+62) 27 5901 6', '61', 'profil.png', '2021-04-27 03:20:44'),
('068294', 'Cengkir Galih Permadi', 'P', 'Padang', '2004-03-22', 'Jr. Bass No. 368, Malang 88350, SumSel', '0773 4819 340', '75', 'profil.png', '2021-05-29 12:36:57'),
('101155', 'Luwes Kurniawan S.Kom', 'P', 'Jayapura', '1996-03-09', 'Psr. Yos No. 193, Banjarmasin 90064, KalTeng', '(+62) 254 3211 ', '17', 'profil.png', '2021-05-29 12:37:05'),
('111425', 'Emong Haryanto', 'P', 'Bandar Lampung', '1994-02-19', 'Gg. Bakau Griya Utama No. 182, Pontianak 49119, KalTeng', '(+62) 705 7010 ', '59', 'profil.png', '2021-05-29 12:36:57'),
('169055', 'Yulia Mulyani', 'P', 'Administrasi Jakarta Selatan', '2001-06-02', 'Psr. Cikutra Barat No. 358, Samarinda 93127, DIY', '(+62) 458 3899 ', '54', 'profil.png', '2021-05-29 12:37:05'),
('175888', 'Alambana Prasasta', 'P', 'Tegal', '1972-12-06', 'Ki. Basoka No. 241, Bengkulu 87738, SulSel', '(+62) 29 0342 0', '84', 'profil.png', '2021-05-29 12:35:26'),
('229810', 'Balidin Galuh Nainggolan', 'L', 'Palopo', '1991-12-25', 'Dk. Suprapto No. 920, Mojokerto 68956, SulUt', '0817 9224 083', '23', 'profil.png', '2021-04-27 03:20:42'),
('363634', 'Novi Farida S.Pt', 'P', 'Mataram', '2003-09-03', 'Kpg. Sentot Alibasa No. 617, Prabumulih 73220, MalUt', '0515 0469 655', '50', 'profil.png', '2021-04-27 03:20:42'),
('428492', 'Mulya Mangunsong', 'L', 'Pagar Alam', '1982-08-07', 'Ki. Gardujati No. 231, Batam 92036, JaTeng', '(+62) 918 9597 ', '67', 'profil.png', '2021-05-29 12:37:05'),
('428902', 'Qori Rahayu Rahayu M.Pd', 'L', 'Bandar Lampung', '1984-10-06', 'Gg. Jagakarsa No. 694, Subulussalam 50564, Riau', '(+62) 917 1742 ', '23', 'profil.png', '2021-05-29 12:37:05'),
('432233', 'Puspa Hana Pertiwi S.IP', 'L', 'Depok', '2005-09-09', 'Kpg. PHH. Mustofa No. 631, Solok 80481, Papua', '(+62) 614 5629 ', '97', 'profil.png', '2021-05-29 12:36:57'),
('447335', 'Radit Jailani', 'P', 'Surabaya', '1980-09-17', 'Jln. Bahagia  No. 741, Prabumulih 81525, SulTra', '0352 8888 060', '52', 'profil.png', '2021-05-29 12:35:26'),
('555042', 'Zaenab Lalita Anggraini M.Farm', 'P', 'Palopo', '2003-09-01', 'Psr. Abdul No. 294, Binjai 78335, DKI', '0641 6724 2241', '26', 'profil.png', '2021-05-29 12:37:15'),
('570121', 'Bahuwirya Hardiansyah', 'L', 'Tanjung Pinang', '1982-10-30', 'Jr. Kusmanto No. 90, Administrasi Jakarta Utara 22282, DIY', '(+62) 773 6315 ', '22', 'profil.png', '2021-04-27 03:20:42'),
('574227', 'Adinata Rudi Mustofa', 'L', 'Medan', '1971-08-06', 'Ki. Sam Ratulangi No. 697, Palopo 12951, Banten', '(+62) 26 8656 8', '17', 'profil.png', '2021-04-27 03:20:44'),
('577036', 'Nasim Irawan', 'P', 'Singkawang', '2002-10-25', 'Jln. Abdul Muis No. 159, Sibolga 54532, JaBar', '(+62) 918 5582 ', '06', 'profil.png', '2021-04-27 03:20:44'),
('593215', 'Endra Napitupulu S.Ked', 'L', 'Cimahi', '1980-11-02', 'Gg. Kusmanto No. 728, Tangerang 45754, Gorontalo', '(+62) 991 7694 ', '72', 'profil.png', '2021-04-27 03:20:44'),
('617450', 'Puti Siti Mulyani', 'L', 'Pariaman', '1994-05-08', 'Jln. Bara No. 218, Bandar Lampung 30265, Gorontalo', '0686 0689 2185', '55', 'profil.png', '2021-05-29 12:35:26'),
('652392', 'Endra Jatmiko Prasasta', 'P', 'Surabaya', '2018-11-15', 'Psr. W.R. Supratman No. 867, Gunungsitoli 53622, SulTra', '021 3104 076', '47', 'profil.png', '2021-05-29 12:37:15'),
('727451', 'Natalia Laila Nuraini', 'P', 'Medan', '2015-01-09', 'Jln. Bakhita No. 653, Tidore Kepulauan 11939, KepR', '0659 7171 914', '61', 'profil.png', '2021-04-27 03:20:42'),
('753538', 'Lintang Pratiwi', 'P', 'Madiun', '2012-03-21', 'Kpg. Katamso No. 493, Batu 75248, KalTim', '(+62) 713 2655 ', '57', 'profil.png', '2021-05-29 12:37:15'),
('833353', 'Ade Oktaviani', 'P', 'Semarang', '2000-03-24', 'Ki. Ciumbuleuit No. 219, Tarakan 28605, Papua', '(+62) 25 6299 2', '75', 'profil.png', '2021-05-29 12:35:26'),
('836564', 'Gawati Mandasari S.Pt', 'L', 'Padang', '2012-10-04', 'Psr. Gardujati No. 713, Sukabumi 56515, NTT', '(+62) 337 1962 ', '99', 'profil.png', '2021-05-29 12:37:15'),
('841909', 'Harsana Maryadi M.Kom.', 'P', 'Langsa', '2003-02-21', 'Psr. Lumban Tobing No. 323, Singkawang 67076, SulBar', '(+62) 975 4332 ', '96', 'profil.png', '2021-05-29 12:37:15'),
('871595', 'Aisyah Rahimah', 'P', 'Tarakan', '2001-05-13', 'Ki. Bagas Pati No. 220, Pontianak 24275, JaTeng', '(+62) 917 1971 ', '99', 'profil.png', '2021-04-27 03:20:42'),
('878206', 'Jaka Harjasa Mansur', 'L', 'Salatiga', '1979-02-23', 'Jln. Bakaru No. 771, Salatiga 35317, KalTim', '(+62) 28 1116 0', '43', 'profil.png', '2021-05-29 12:36:57'),
('919101', 'Vega Hasta Simbolon', 'P', 'Sukabumi', '1982-01-19', 'Jr. Kebonjati No. 218, Prabumulih 40799, Banten', '0424 1132 251', '56', 'profil.png', '2021-04-27 03:20:44'),
('935155', 'Aurora Novitasari', 'P', 'Tomohon', '1989-12-12', 'Gg. Moch. Toha No. 16, Pekanbaru 40415, Lampung', '0811 066 318', '74', 'profil.png', '2021-05-29 12:36:57'),
('985531', 'Pandu Maheswara', 'P', 'Tasikmalaya', '1982-07-24', 'Ds. Bah Jaya No. 539, Pangkal Pinang 75968, JaTeng', '(+62) 681 4881 ', '29', 'profil.png', '2021-05-29 12:35:25');

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
('X Akuntansi 1', '6087833c789c6'),
('X Akuntansi 1', '6087836b9bf52'),
('X Akuntansi 1', '60878372b6994'),
('X Akuntansi 1', '6087837d120f6'),
('X Akuntansi 1', '608783841d6a7'),
('X Akuntansi 1', '608783a21d980'),
('X Akuntansi 1', '608783aee1844'),
('X Akuntansi 1', '608783b6eda19'),
('X Akuntansi 1', '608783d459759'),
('X Akuntansi 1', '60878396c405b');

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
('X Akuntansi 1', '013933', '0273'),
('X Akuntansi 1', '013933', '0338'),
('X Akuntansi 1', '013933', '0487'),
('X Akuntansi 1', '013933', '0600'),
('X Akuntansi 1', '013933', '0626'),
('X Akuntansi 1', '013933', '0896'),
('X Akuntansi 1', '013933', '1282'),
('X Akuntansi 1', '013933', '2079'),
('X Akuntansi 1', '013933', '2272'),
('X Akuntansi 1', '013933', '2622'),
('X Akuntansi 1', '013933', '3271'),
('X Akuntansi 1', '013933', '3397'),
('X Akuntansi 1', '013933', '3962'),
('X Akuntansi 1', '013933', '4135'),
('X Akuntansi 1', '013933', '4151'),
('X Akuntansi 1', '013933', '4380'),
('X Akuntansi 1', '013933', '5121'),
('X Akuntansi 1', '013933', '5468'),
('X Akuntansi 1', '013933', '5768'),
('X Akuntansi 1', '013933', '6521'),
('X Akuntansi 1', '013933', '6659'),
('X Akuntansi 1', '013933', '8209'),
('X Akuntansi 1', '013933', '8260'),
('X Akuntansi 1', '013933', '8541'),
('X Akuntansi 1', '013933', '8912'),
('X Akuntansi 1', '013933', '8969'),
('X Akuntansi 1', '013933', '9306'),
('X Akuntansi 1', '013933', '9497'),
('X Akuntansi 1', '013933', '9521'),
('X Akuntansi 1', '013933', '9534');

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
('608785c7c1385', 'http://localhost/e-learning/guru/?m=prosesLogin', 'Marsito Harsanto Damanik M.Ak', '2021-04-27 03:32:23'),
('6087864148b65', 'http://localhost/e-learning/guru/?m=prosesBuatMateri&username=Marsito%20Harsanto%20Damanik%20M.Ak', 'Marsito Harsanto Damanik M.Ak', '2021-04-27 03:34:25'),
('608787279a832', 'http://localhost/e-learning/guru/?m=prosesBuatMateri&username=Marsito%20Harsanto%20Damanik%20M.Ak', 'Marsito Harsanto Damanik M.Ak', '2021-04-27 03:38:15'),
('6087874c37ec7', 'http://localhost/e-learning/guru/?m=prosesBuatMateri&username=Marsito%20Harsanto%20Damanik%20M.Ak', 'Marsito Harsanto Damanik M.Ak', '2021-04-27 03:38:52'),
('608787db15ed7', 'http://localhost/e-learning/guru/?m=prosesBuatMateri&username=Marsito%20Harsanto%20Damanik%20M.Ak', 'Marsito Harsanto Damanik M.Ak', '2021-04-27 03:41:15'),
('608788a0807ba', 'http://localhost/e-learning/siswa/?m=prosesLogin', 'Nasim Mansur', '2021-04-27 03:44:32'),
('60878a510b116', 'http://localhost/e-learning/guru/?m=prosesLogin', 'Marsito Harsanto Damanik M.Ak', '2021-04-27 03:51:45'),
('60878b64eb262', 'http://localhost/e-learning/siswa/?m=lihatMateri&id=NjA4Nzg3ZGFmMTMzZQ==&username=Nasim%20Mansur', 'Nasim Mansur', '2021-04-27 03:56:20'),
('60878ba9cc633', 'http://localhost/e-learning/guru/?m=hapusMateri&id=NjA4Nzg3ZGFmMTMzZQ==&token=L55OIivufJctnRtZlkNIHrINzPSCwRJYSCTEPUQLIZOJSVYWPR&username=Marsito%20Harsanto%20Damanik%20M.Ak', 'Marsito Harsanto Damanik M.Ak', '2021-04-27 03:57:29'),
('60878bae7c3d1', 'http://localhost/e-learning/guru/?m=hapusMateri&id=NjA4Nzg3NGMyYjdlYQ==&token=xYMlBKmtVfzRvxGQmTAABNpAMwOZNWXFAzIFWKJIOZRZRVZROY&username=Marsito%20Harsanto%20Damanik%20M.Ak', 'Marsito Harsanto Damanik M.Ak', '2021-04-27 03:57:34'),
('60878bb35cf3b', 'http://localhost/e-learning/guru/?m=hapusMateri&id=NjA4Nzg3Mjc3MjAwNg==&token=PbYMCvIRzptHqsGINISFIMxqPUsCFwZYWQRVUTRYRWWNKZRYYW&username=Marsito%20Harsanto%20Damanik%20M.Ak', 'Marsito Harsanto Damanik M.Ak', '2021-04-27 03:57:39'),
('60878bbc1160c', 'http://localhost/e-learning/guru/?m=logout&username=Marsito%20Harsanto%20Damanik%20M.Ak', 'Marsito Harsanto Damanik M.Ak', '2021-04-27 03:57:48'),
('60878bdf02a5e', 'http://localhost/e-learning/siswa/?m=prosesLogin', 'Nasim Mansur', '2021-04-27 03:58:23'),
('60878be8a7484', 'http://localhost/e-learning/siswa/?m=lihatMateri&id=NjA4Nzg2NDEyZDk2Yg==&username=Nasim%20Mansur', 'Nasim Mansur', '2021-04-27 03:58:32'),
('60b843edb5554', 'http://localhost/e-learning/siswa/?m=prosesLogin', 'Edi Daryani Tamba', '2021-06-03 02:52:29'),
('60b84441853c6', 'http://localhost/e-learning/siswa/?m=logout&username=Edi%20Daryani%20Tamba', 'Edi Daryani Tamba', '2021-06-03 02:53:53'),
('60b84482a7918', 'http://localhost/e-learning/guru/?m=prosesLogin', 'Darman Putra S.Pd', '2021-06-03 02:54:58'),
('60b844b950f5b', 'http://localhost/e-learning/guru/?m=logout&username=Darman%20Putra%20S.Pd', 'Darman Putra S.Pd', '2021-06-03 02:55:53');

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
('608786412d96b', '6087833c789c6', 'Pengertian Proposal dan langkah-langkah penyusunan', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '013933', '2021-04-27 03:34:25', '608786412d97bMATERI-1.pdf', 'X Akuntansi 1');

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
('6087833c789c6', 'Bahasa Indonesia', '013933'),
('6087836b9bf52', 'Pemrograman Dasar', '229810'),
('60878372b6994', 'Bahasa Inggris', '363634'),
('6087837d120f6', 'Administrasi Perkantoran', '570121'),
('608783841d6a7', 'Pemrograman Web', '574227'),
('60878396c405b', 'Bahasa Jawa', '577036'),
('608783a21d980', 'PKN', '593215'),
('608783aee1844', 'Sejarah', '727451'),
('608783b6eda19', 'PAI', '871595'),
('608783d459759', 'Teknik Mesin', '919101');

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
('0273', 'Edi Daryani Tamba', 'L', 'Lubuklinggau', '1986-11-01', 'Gg. Soekarno Hatta No. 563, Sungai Penuh 91330, BaBel', '(+62) 522 0975 ', '79', 'profil.png', '2021-04-27 03:20:51'),
('0338', 'Nadine Wijayanti S.Pt', 'L', 'Manado', '2019-02-03', 'Gg. Gajah No. 244, Tual 46653, JaBar', '(+62) 848 1133 ', '96', 'profil.png', '2021-04-27 03:20:51'),
('0487', 'Nasim Mansur', 'L', 'Mojokerto', '2007-06-11', 'Kpg. Setia Budi No. 449, Pekalongan 97061, Maluku', '0246 9509 6621', '45', 'profil.png', '2021-04-27 03:20:52'),
('0600', 'Carla Namaga', 'L', 'Ternate', '1989-05-03', 'Psr. Wahidin No. 303, Pasuruan 45628, DIY', '(+62) 676 8124 ', '88', 'profil.png', '2021-04-27 03:20:51'),
('0626', 'Halim Pangestu M.Farm', 'L', 'Banjar', '2017-11-09', 'Dk. Jend. Sudirman No. 170, Tasikmalaya 95137, Papua', '0741 3887 710', '98', 'profil.png', '2021-04-27 03:20:51'),
('0896', 'Sari Mardhiyah', 'L', 'Kendari', '1978-12-15', 'Ds. Baja No. 608, Ternate 27631, KalUt', '(+62) 21 6436 3', '13', 'profil.png', '2021-04-27 03:20:51'),
('1282', 'Taufik Wibowo S.Sos', 'P', 'Subulussalam', '1992-07-02', 'Jr. Rajawali No. 669, Administrasi Jakarta Barat 90182, BaBel', '(+62) 866 1583 ', '17', 'profil.png', '2021-04-27 03:20:51'),
('2079', 'Raden Budiman', 'P', 'Banjar', '1971-12-07', 'Ki. Bahagia No. 920, Administrasi Jakarta Timur 76030, Bengkulu', '(+62) 367 3461 ', '12', 'profil.png', '2021-04-27 03:20:51'),
('2272', 'Aris Darmaji Putra', 'L', 'Surabaya', '1978-01-02', 'Dk. HOS. Cjokroaminoto (Pasirkaliki) No. 397, Pagar Alam 67439, KalTeng', '0567 4855 005', '02', 'profil.png', '2021-04-27 03:20:51'),
('2622', 'Reza Wijaya', 'P', 'Sabang', '1976-10-17', 'Gg. Dahlia No. 404, Manado 96718, SulTeng', '(+62) 465 0379 ', '93', 'profil.png', '2021-04-27 03:20:51'),
('3271', 'Simon Waluyo M.M.', 'P', 'Bau-Bau', '1994-03-05', 'Ki. B.Agam Dlm No. 737, Surakarta 62513, KalTim', '(+62) 816 4632 ', '40', 'profil.png', '2021-04-27 03:20:51'),
('3397', 'Anastasia Yulia Lailasari', 'P', 'Bengkulu', '2003-06-25', 'Jln. Ki Hajar Dewantara No. 489, Probolinggo 71020, Banten', '(+62) 890 1485 ', '30', 'profil.png', '2021-04-27 03:20:51'),
('3962', 'Rahmi Zelaya Andriani', 'P', 'Bau-Bau', '1991-02-08', 'Ki. Samanhudi No. 690, Sawahlunto 73570, KalBar', '0851 453 077', '77', 'profil.png', '2021-04-27 03:20:51'),
('4135', 'Bambang Kalim Nashiruddin S.Ked', 'L', 'Sorong', '2001-07-13', 'Ds. Urip Sumoharjo No. 979, Magelang 53413, KalUt', '(+62) 703 5373 ', '09', 'profil.png', '2021-04-27 03:20:51'),
('4151', 'Kasiyah Pudjiastuti', 'P', 'Dumai', '1987-01-30', 'Ds. Perintis Kemerdekaan No. 599, Tangerang 63192, SumBar', '021 8123 4449', '46', 'profil.png', '2021-04-27 03:20:51'),
('4380', 'Qori Ajeng Wastuti', 'L', 'Langsa', '2004-03-16', 'Jr. Jambu No. 729, Batam 70394, Gorontalo', '0463 0095 4173', '45', 'profil.png', '2021-04-27 03:20:51'),
('5121', 'Putu Dimaz Tarihoran M.Kom.', 'L', 'Bau-Bau', '2002-06-21', 'Gg. Uluwatu No. 389, Malang 43513, KalSel', '0625 8080 7179', '71', 'profil.png', '2021-04-27 03:20:51'),
('5468', 'Umi Mila Fujiati', 'P', 'Surakarta', '2021-01-11', 'Psr. M.T. Haryono No. 613, Bima 16740, SulSel', '0676 5455 501', '96', 'profil.png', '2021-04-27 03:20:51'),
('5768', 'Wani Paris Prastuti S.Pt', 'P', 'Parepare', '1988-06-20', 'Gg. Setia Budi No. 645, Yogyakarta 82328, SulSel', '0392 2454 3237', '49', 'profil.png', '2021-04-27 03:20:51'),
('6521', 'Vera Nasyiah', 'P', 'Langsa', '1985-08-15', 'Psr. Pasteur No. 788, Bekasi 45111, Gorontalo', '(+62) 526 4825 ', '20', 'profil.png', '2021-04-27 03:20:51'),
('6659', 'Widya Andriani', 'L', 'Langsa', '1980-09-22', 'Psr. Bakhita No. 465, Metro 22072, SumUt', '0755 5309 4354', '66', 'profil.png', '2021-04-27 03:20:51'),
('8209', 'Edi Kamidin Samosir', 'L', 'Cilegon', '2005-10-24', 'Dk. Muwardi No. 37, Cilegon 85297, JaTim', '(+62) 383 8904 ', '54', 'profil.png', '2021-04-27 03:20:51'),
('8260', 'Gandewa Atma Pradipta M.M.', 'L', 'Jambi', '1978-06-28', 'Jln. Wahidin No. 383, Padangsidempuan 76556, SulSel', '(+62) 962 0470 ', '73', 'profil.png', '2021-04-27 03:20:51'),
('8541', 'Mursinin Prasasta S.T.', 'L', 'Tasikmalaya', '1974-07-13', 'Jln. Astana Anyar No. 554, Tangerang 85485, JaTim', '021 1788 312', '39', 'profil.png', '2021-04-27 03:20:51'),
('8912', 'Maras Saptono', 'L', 'Bau-Bau', '1982-04-15', 'Dk. Ahmad Dahlan No. 200, Subulussalam 38702, Bengkulu', '(+62) 857 1829 ', '50', 'profil.png', '2021-04-27 03:20:51'),
('8969', 'Panca Gunarto', 'P', 'Tarakan', '1976-08-07', 'Jln. Jend. Sudirman No. 659, Kotamobagu 42460, SumUt', '0751 3429 2197', '95', 'profil.png', '2021-04-27 03:20:51'),
('9306', 'Yosef Taufan Wibisono S.Gz', 'L', 'Sungai Penuh', '1993-03-20', 'Kpg. Sugiyopranoto No. 345, Gorontalo 78757, Aceh', '(+62) 836 8950 ', '93', 'profil.png', '2021-04-27 03:20:51'),
('9497', 'Hardi Kuswoyo', 'P', 'Pasuruan', '1996-07-11', 'Dk. Zamrud No. 393, Solok 91159, DIY', '029 5639 0866', '51', 'profil.png', '2021-04-27 03:20:51'),
('9521', 'Dipa Utama', 'P', 'Kupang', '1971-08-14', 'Psr. Laswi No. 739, Administrasi Jakarta Selatan 34410, SulSel', '0680 6036 780', '90', 'profil.png', '2021-04-27 03:20:51'),
('9534', 'Cagak Kurniawan', 'P', 'Tegal', '1971-08-21', 'Ds. K.H. Maskur No. 27, Administrasi Jakarta Timur 66869, NTB', '(+62) 351 0046 ', '98', 'profil.png', '2021-04-27 03:20:52');

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
