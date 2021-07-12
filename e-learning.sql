-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2021 pada 18.46
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
('0487', 'Nasim Mansur', '608787daf133e', 'X Akuntansi 1', '2021-04-27 03:57:59'),
('0273', 'Edi Daryani Tamba', '608786412d96b', 'X Akuntansi 1', '2021-07-12 16:21:06'),
('0273', 'Edi Daryani Tamba', '60ec70c1b84a2', 'X Akuntansi 1', '2021-07-12 16:42:46');

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
-- Struktur dari tabel `diskusi`
--

CREATE TABLE `diskusi` (
  `idmateri` varchar(20) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `diskusi`
--

INSERT INTO `diskusi` (`idmateri`, `nis`, `nama`, `isi`, `date_time`) VALUES
('608786412d96b', '0273', 'Edi Daryani Tamba', '1', '2021-07-12 15:20:18'),
('608786412d96b', '0273', 'Edi Daryani Tamba', '2', '2021-07-12 15:20:20'),
('608786412d96b', '0273', 'Edi Daryani Tamba', '3', '2021-07-12 15:20:22'),
('608786412d96b', '0273', 'Edi Daryani Tamba', '4', '2021-07-12 15:20:24'),
('608786412d96b', '0273', 'Edi Daryani Tamba', '5', '2021-07-12 15:20:29'),
('608786412d96b', '0273', 'Edi Daryani Tamba', '6', '2021-07-12 15:20:32'),
('608786412d96b', '0273', 'Edi Daryani Tamba', '7', '2021-07-12 15:20:42'),
('608786412d96b', '0273', 'Edi Daryani Tamba', '8', '2021-07-12 15:20:48'),
('608786412d96b', '0273', 'Edi Daryani Tamba', '9', '2021-07-12 15:20:51'),
('608786412d96b', '0273', 'Edi Daryani Tamba', '10', '2021-07-12 15:20:56'),
('608786412d96b', '0273', 'Edi Daryani Tamba', '11', '2021-07-12 15:33:01'),
('608786412d96b', '0273', 'Edi Daryani Tamba', '12', '2021-07-12 15:33:04'),
('608786412d96b', '0273', 'Edi Daryani Tamba', '13', '2021-07-12 15:33:06'),
('608786412d96b', '0273', 'Edi Daryani Tamba', '14', '2021-07-12 15:33:08'),
('608786412d96b', '0273', 'Edi Daryani Tamba', '15', '2021-07-12 15:33:10'),
('608786412d96b', '0273', 'Edi Daryani Tamba', '16', '2021-07-12 15:33:13'),
('608786412d96b', '0273', 'Edi Daryani Tamba', '17', '2021-07-12 15:33:15'),
('608786412d96b', '0273', 'Edi Daryani Tamba', '18', '2021-07-12 15:33:18'),
('608786412d96b', '0273', 'Edi Daryani Tamba', '19', '2021-07-12 15:33:20'),
('608786412d96b', '0273', 'Edi Daryani Tamba', '20', '2021-07-12 15:33:23'),
('608786412d96b', '0273', 'Edi Daryani Tamba', '21', '2021-07-12 15:34:09'),
('608786412d96b', '0273', 'Edi Daryani Tamba', '22', '2021-07-12 16:15:52'),
('608786412d96b', '0273', 'Edi Daryani Tamba', '23', '2021-07-12 16:15:54'),
('608786412d96b', '0273', 'Edi Daryani Tamba', '24', '2021-07-12 16:15:57'),
('608786412d96b', '0273', 'Edi Daryani Tamba', '25', '2021-07-12 16:15:59'),
('60ec70c1b84a2', '0273', 'Edi Daryani Tamba', 'test 1', '2021-07-12 16:42:31');

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
('095565', 'Zamira Nuraini', 'L', 'Tomohon', '2014-11-08', 'Dk. Rajawali Timur No. 401, Subulussalam 95047, KalSel', '0677 4149 6666', '77', 'profil.png', '2021-07-07 15:59:33'),
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
('462340', 'Cahyanto Hendri Siregar S.E.', 'L', 'Bau-Bau', '1990-09-06', 'Ki. Thamrin No. 837, Medan 34176, SulBar', '(+62) 838 652 6', '69', 'profil.png', '2021-07-07 15:59:33'),
('467308', 'Aurora Zamira Hartati', 'L', 'Sukabumi', '2008-04-13', 'Ds. Wahid Hasyim No. 712, Yogyakarta 73610, Jambi', '(+62) 841 309 7', '50', 'profil.png', '2021-07-07 15:59:33'),
('555042', 'Zaenab Lalita Anggraini M.Farm', 'P', 'Palopo', '2003-09-01', 'Psr. Abdul No. 294, Binjai 78335, DKI', '0641 6724 2241', '26', 'profil.png', '2021-05-29 12:37:15'),
('570121', 'Bahuwirya Hardiansyah', 'L', 'Tanjung Pinang', '1982-10-30', 'Jr. Kusmanto No. 90, Administrasi Jakarta Utara 22282, DIY', '(+62) 773 6315 ', '22', 'profil.png', '2021-04-27 03:20:42'),
('574227', 'Adinata Rudi Mustofa', 'L', 'Medan', '1971-08-06', 'Ki. Sam Ratulangi No. 697, Palopo 12951, Banten', '(+62) 26 8656 8', '17', 'profil.png', '2021-04-27 03:20:44'),
('577036', 'Nasim Irawan', 'P', 'Singkawang', '2002-10-25', 'Jln. Abdul Muis No. 159, Sibolga 54532, JaBar', '(+62) 918 5582 ', '06', 'profil.png', '2021-04-27 03:20:44'),
('593215', 'Endra Napitupulu S.Ked', 'L', 'Cimahi', '1980-11-02', 'Gg. Kusmanto No. 728, Tangerang 45754, Gorontalo', '(+62) 991 7694 ', '72', 'profil.png', '2021-04-27 03:20:44'),
('597671', 'Ella Utami M.Farm', 'L', 'Serang', '2012-10-17', 'Kpg. Wahid No. 799, Cilegon 70100, SulTra', '0598 2669 832', '68', 'profil.png', '2021-07-07 15:59:33'),
('617450', 'Puti Siti Mulyani', 'L', 'Pariaman', '1994-05-08', 'Jln. Bara No. 218, Bandar Lampung 30265, Gorontalo', '0686 0689 2185', '55', 'profil.png', '2021-05-29 12:35:26'),
('641163', 'Asman Mansur', 'P', 'Tegal', '2012-10-25', 'Ds. Otto No. 723, Tegal 83628, MalUt', '(+62) 993 9525 ', '23', 'profil.png', '2021-07-07 15:59:33'),
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
('60e5e11c98be7', 'http://localhost:3000/guru?m=prosesLogin', 'Marsito Harsanto Damanik M.Ak', '2021-07-07 17:15:08'),
('60e5e134792a0', 'http://localhost:3000/guru?m=logout&username=Marsito%20Harsanto%20Damanik%20M.Ak', 'Marsito Harsanto Damanik M.Ak', '2021-07-07 17:15:32'),
('60e5e140aa36d', 'http://localhost:3000/siswa?m=prosesLogin', 'Edi Daryani Tamba', '2021-07-07 17:15:44'),
('60e5e19dbe65d', 'http://localhost:3000/siswa?m=logout&username=Edi%20Daryani%20Tamba', 'Edi Daryani Tamba', '2021-07-07 17:17:17'),
('60e5e4a1e0af5', 'http://localhost:3000/siswa?m=prosesLogin', 'Edi Daryani Tamba', '2021-07-07 17:30:09'),
('60e5e4a22d70d', 'http://localhost:3000/siswa?m=prosesLogin', 'Edi Daryani Tamba', '2021-07-07 17:30:10'),
('60e5e4f66133a', 'http://localhost:3000/siswa?m=lihatMateri&id=NjA4Nzg2NDEyZDk2Yg==&username=Edi%20Daryani%20Tamba', 'Edi Daryani Tamba', '2021-07-07 17:31:34'),
('60e5e5a5e1d68', 'http://localhost:3000/siswa?m=lihatMateri&id=NjA4Nzg2NDEyZDk2Yg==&username=Edi%20Daryani%20Tamba', 'Edi Daryani Tamba', '2021-07-07 17:34:29'),
('60e5e5ba8f751', 'http://localhost:3000/siswa?m=logout&username=Edi%20Daryani%20Tamba', 'Edi Daryani Tamba', '2021-07-07 17:34:50'),
('60e5e5c41c69b', 'http://localhost:3000/guru?m=prosesLogin', 'Marsito Harsanto Damanik M.Ak', '2021-07-07 17:35:00'),
('60e5e892514d2', 'http://localhost:3000/guru?m=logout&username=Marsito%20Harsanto%20Damanik%20M.Ak', 'Marsito Harsanto Damanik M.Ak', '2021-07-07 17:46:58'),
('60e5e8ee17de5', 'http://localhost:3000/siswa?m=prosesLogin', 'Edi Daryani Tamba', '2021-07-07 17:48:30'),
('60e5e8f73fe08', 'http://localhost:3000/siswa?m=logout&username=Edi%20Daryani%20Tamba', 'Edi Daryani Tamba', '2021-07-07 17:48:39'),
('60e5e93a23702', 'http://localhost:3000/siswa?m=prosesLogin', 'Edi Daryani Tamba', '2021-07-07 17:49:46'),
('60e5e9c6b2f1e', 'http://localhost:3000/siswa?m=lihatMateri&id=NjA4Nzg2NDEyZDk2Yg==&username=Edi%20Daryani%20Tamba', 'Edi Daryani Tamba', '2021-07-07 17:52:06'),
('60e5ea58e84f9', 'http://localhost:3000/siswa?m=logout&username=Edi%20Daryani%20Tamba', 'Edi Daryani Tamba', '2021-07-07 17:54:32'),
('60e5eb5376756', 'http://localhost:3000/siswa?m=prosesLogin', 'Edi Daryani Tamba', '2021-07-07 17:58:43'),
('60e5ebe0caf14', 'http://localhost:3000/siswa?m=lihatMateri&id=NjA4Nzg2NDEyZDk2Yg==&username=Edi%20Daryani%20Tamba', 'Edi Daryani Tamba', '2021-07-07 18:01:04'),
('60e5ec625fd8c', 'http://localhost:3000/siswa?m=logout&username=Edi%20Daryani%20Tamba', 'Edi Daryani Tamba', '2021-07-07 18:03:14'),
('60e5ec7684af7', 'http://localhost:3000/guru?m=prosesLogin', 'Marsito Harsanto Damanik M.Ak', '2021-07-07 18:03:34'),
('60e5ece51f135', 'http://localhost:3000/guru?m=logout&username=Marsito%20Harsanto%20Damanik%20M.Ak', 'Marsito Harsanto Damanik M.Ak', '2021-07-07 18:05:25'),
('60ec3671b7464', 'http://localhost:3000/siswa?m=prosesLogin', 'Edi Daryani Tamba', '2021-07-12 12:32:49'),
('60ec48d19dbbd', 'http://localhost:3000/siswa?m=prosesLogin', 'Edi Daryani Tamba', '2021-07-12 13:51:13'),
('60ec544ec2906', 'http://localhost:3000/siswa?m=logout&username=Edi%20Daryani%20Tamba', 'Edi Daryani Tamba', '2021-07-12 14:40:14'),
('60ec546bcfb62', 'http://localhost:3000/siswa?m=prosesLogin', 'Nasim Mansur', '2021-07-12 14:40:43'),
('60ec55baf3679', 'http://localhost:3000/siswa?m=logout&username=Nasim%20Mansur', 'Nasim Mansur', '2021-07-12 14:46:18'),
('60ec55bff02d9', 'http://localhost:3000/siswa?m=prosesLogin', 'Edi Daryani Tamba', '2021-07-12 14:46:23'),
('60ec55e7225cf', 'http://localhost:3000/siswa?m=logout&username=Edi%20Daryani%20Tamba', 'Edi Daryani Tamba', '2021-07-12 14:47:03'),
('60ec55eb29597', 'http://localhost:3000/siswa?m=prosesLogin', 'Nasim Mansur', '2021-07-12 14:47:07'),
('60ec59c1dc06a', 'http://localhost:3000/siswa?m=logout&username=Nasim%20Mansur', 'Nasim Mansur', '2021-07-12 15:03:29'),
('60ec59c613b38', 'http://localhost:3000/siswa?m=prosesLogin', 'Edi Daryani Tamba', '2021-07-12 15:03:34'),
('60ec5e2dd2b0d', 'http://localhost:3000/siswa?m=prosesLogin', 'Edi Daryani Tamba', '2021-07-12 15:22:21'),
('60ec6366ab7d2', 'http://localhost:3000/siswa?m=logout&username=Edi%20Daryani%20Tamba', 'Edi Daryani Tamba', '2021-07-12 15:44:38'),
('60ec637723a8f', 'http://localhost:3000/guru?m=prosesLogin', 'Marsito Harsanto Damanik M.Ak', '2021-07-12 15:44:55'),
('60ec670ecaf9c', 'http://localhost:3000/guru?m=logout&username=Marsito%20Harsanto%20Damanik%20M.Ak', 'Marsito Harsanto Damanik M.Ak', '2021-07-12 16:00:14'),
('60ec67168b5a5', 'http://localhost:3000/siswa?m=prosesLogin', 'Edi Daryani Tamba', '2021-07-12 16:00:22'),
('60ec6c667a262', 'http://localhost:3000/siswa?m=logout&username=Edi%20Daryani%20Tamba', 'Edi Daryani Tamba', '2021-07-12 16:23:02'),
('60ec6c6f35703', 'http://localhost:3000/guru?m=prosesLogin', 'Marsito Harsanto Damanik M.Ak', '2021-07-12 16:23:11'),
('60ec6dab297af', 'http://localhost:3000/guru?m=prosesBuatMateri&username=Marsito%20Harsanto%20Damanik%20M.Ak', 'Marsito Harsanto Damanik M.Ak', '2021-07-12 16:28:27'),
('60ec6e93381c2', 'http://localhost:3000/guru?m=logout&username=Marsito%20Harsanto%20Damanik%20M.Ak', 'Marsito Harsanto Damanik M.Ak', '2021-07-12 16:32:19'),
('60ec6e9b11b0a', 'http://localhost:3000/siswa?m=prosesLogin', 'Edi Daryani Tamba', '2021-07-12 16:32:27'),
('60ec6ea32c744', 'http://localhost:3000/siswa?m=lihatMateri&id=NjBlYzZkYWE5ZTBiMA==&username=Edi%20Daryani%20Tamba', 'Edi Daryani Tamba', '2021-07-12 16:32:35'),
('60ec6f624ae62', 'http://localhost:3000/siswa?m=logout&username=Edi%20Daryani%20Tamba', 'Edi Daryani Tamba', '2021-07-12 16:35:46'),
('60ec6f67c1f7e', 'http://localhost:3000/siswa?m=prosesLogin', 'Nasim Mansur', '2021-07-12 16:35:51'),
('60ec6f762eeef', 'http://localhost:3000/siswa?m=lihatMateri&id=NjBlYzZkYWE5ZTBiMA==&username=Nasim%20Mansur', 'Nasim Mansur', '2021-07-12 16:36:06'),
('60ec6f9868215', 'http://localhost:3000/siswa?m=logout&username=Nasim%20Mansur', 'Nasim Mansur', '2021-07-12 16:36:40'),
('60ec6fa3d77c3', 'http://localhost:3000/guru?m=prosesLogin', 'Marsito Harsanto Damanik M.Ak', '2021-07-12 16:36:51'),
('60ec7094d8c0d', 'http://localhost:3000/guru?m=hapusMateri&id=NjBlYzZkYWE5ZTBiMA==&token=9Ss5BcGxFGLnNIzEZDZXoXNURPMDAWzDTzJONUJGHIPVVSPSZQ&username=Marsito%20Harsanto%20Damanik%20M.Ak', 'Marsito Harsanto Damanik M.Ak', '2021-07-12 16:40:52'),
('60ec70c1c87ca', 'http://localhost:3000/guru?m=prosesBuatMateri&username=Marsito%20Harsanto%20Damanik%20M.Ak', 'Marsito Harsanto Damanik M.Ak', '2021-07-12 16:41:37'),
('60ec70cd9174a', 'http://localhost:3000/guru?m=logout&username=Marsito%20Harsanto%20Damanik%20M.Ak', 'Marsito Harsanto Damanik M.Ak', '2021-07-12 16:41:49'),
('60ec70da0d4c7', 'http://localhost:3000/siswa?m=prosesLogin', 'Edi Daryani Tamba', '2021-07-12 16:42:02');

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
('608786412d96b', '6087833c789c6', 'Pengertian Proposal dan langkah-langkah penyusunan', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '013933', '2021-04-27 03:34:25', '608786412d97bMATERI-1.pdf', 'X Akuntansi 1'),
('60ec70c1b84a2', '6087833c789c6', 'Test materi', 'Test...', '013933', '2021-07-12 16:41:37', '60ec70c1b84c9608786412d97bMATERI-1.pdf', 'X Akuntansi 1');

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
('0032', 'Almira Salwa Winarsih', 'P', 'Jambi', '1992-12-29', 'Ki. Jamika No. 318, Ternate 13833, KalTeng', '(+62) 482 3214 ', '80', 'profil.png', '2021-07-07 15:54:11'),
('0273', 'Edi Daryani Tamba', 'L', 'Lubuklinggau', '1986-11-01', 'Gg. Soekarno Hatta No. 563, Sungai Penuh 91330, BaBel', '(+62) 522 0975 ', '79', 'profil.png', '2021-04-27 03:20:51'),
('0338', 'Nadine Wijayanti S.Pt', 'L', 'Manado', '2019-02-03', 'Gg. Gajah No. 244, Tual 46653, JaBar', '(+62) 848 1133 ', '96', 'profil.png', '2021-04-27 03:20:51'),
('0487', 'Nasim Mansur', 'L', 'Mojokerto', '2007-06-11', 'Kpg. Setia Budi No. 449, Pekalongan 97061, Maluku', '0246 9509 6621', '45', 'profil.png', '2021-04-27 03:20:52'),
('0600', 'Carla Namaga', 'L', 'Ternate', '1989-05-03', 'Psr. Wahidin No. 303, Pasuruan 45628, DIY', '(+62) 676 8124 ', '88', 'profil.png', '2021-04-27 03:20:51'),
('0626', 'Halim Pangestu M.Farm', 'L', 'Banjar', '2017-11-09', 'Dk. Jend. Sudirman No. 170, Tasikmalaya 95137, Papua', '0741 3887 710', '98', 'profil.png', '2021-04-27 03:20:51'),
('0686', 'Vanesa Padmasari', 'P', 'Tangerang Selatan', '2021-04-02', 'Dk. Abdul. Muis No. 759, Palembang 19337, PapBar', '0755 4317 045', '36', 'profil.png', '2021-07-07 15:54:11'),
('0896', 'Sari Mardhiyah', 'L', 'Kendari', '1978-12-15', 'Ds. Baja No. 608, Ternate 27631, KalUt', '(+62) 21 6436 3', '13', 'profil.png', '2021-04-27 03:20:51'),
('0998', 'Jaga Saragih', 'L', 'Cilegon', '1999-11-03', 'Ds. Raden No. 749, Ternate 37762, KalTim', '0863 0603 9246', '14', 'profil.png', '2021-07-07 15:54:11'),
('1095', 'Ghaliyati Ida Usamah', 'P', 'Padang', '1970-11-16', 'Psr. Sunaryo No. 585, Banjar 10117, SulTeng', '(+62) 472 9622 ', '80', 'profil.png', '2021-07-07 15:54:11'),
('1142', 'Kanda Tampubolon M.Ak', 'L', 'Surabaya', '1977-12-30', 'Kpg. Madrasah No. 776, Surabaya 67726, Riau', '022 2706 5171', '96', 'profil.png', '2021-07-07 15:54:11'),
('1282', 'Taufik Wibowo S.Sos', 'P', 'Subulussalam', '1992-07-02', 'Jr. Rajawali No. 669, Administrasi Jakarta Barat 90182, BaBel', '(+62) 866 1583 ', '17', 'profil.png', '2021-04-27 03:20:51'),
('1434', 'Cornelia Tira Astuti S.Sos', 'L', 'Batu', '1981-10-18', 'Ki. Ekonomi No. 874, Solok 93345, SulTeng', '(+62) 214 4222 ', '34', 'profil.png', '2021-07-07 15:54:11'),
('1526', 'Tri Iswahyudi', 'P', 'Tomohon', '2004-06-23', 'Ds. Raden Saleh No. 74, Surakarta 32606, NTT', '0710 6370 5116', '61', 'profil.png', '2021-07-07 15:54:11'),
('2079', 'Raden Budiman', 'P', 'Banjar', '1971-12-07', 'Ki. Bahagia No. 920, Administrasi Jakarta Timur 76030, Bengkulu', '(+62) 367 3461 ', '12', 'profil.png', '2021-04-27 03:20:51'),
('2272', 'Aris Darmaji Putra', 'L', 'Surabaya', '1978-01-02', 'Dk. HOS. Cjokroaminoto (Pasirkaliki) No. 397, Pagar Alam 67439, KalTeng', '0567 4855 005', '02', 'profil.png', '2021-04-27 03:20:51'),
('2320', 'Erik Hutasoit', 'L', 'Sungai Penuh', '1976-09-11', 'Kpg. Gremet No. 569, Lubuklinggau 48967, JaTeng', '(+62) 739 5101 ', '57', 'profil.png', '2021-07-07 15:54:11'),
('2622', 'Reza Wijaya', 'P', 'Sabang', '1976-10-17', 'Gg. Dahlia No. 404, Manado 96718, SulTeng', '(+62) 465 0379 ', '93', 'profil.png', '2021-04-27 03:20:51'),
('2741', 'Luthfi Karsa Marpaung', 'P', 'Kupang', '1998-06-15', 'Jln. Ahmad Dahlan No. 519, Prabumulih 63324, SumSel', '0706 9828 9848', '55', 'profil.png', '2021-07-07 15:54:11'),
('2852', 'Heryanto Pangestu', 'P', 'Bontang', '2005-06-24', 'Dk. Jend. A. Yani No. 974, Banjarmasin 97508, Lampung', '(+62) 626 3482 ', '95', 'profil.png', '2021-07-07 15:54:11'),
('2978', 'Luthfi Wasita', 'P', 'Banda Aceh', '2006-06-01', 'Kpg. Sentot Alibasa No. 328, Tanjung Pinang 37880, SulTeng', '0352 0626 608', '58', 'profil.png', '2021-07-07 15:54:11'),
('3271', 'Simon Waluyo M.M.', 'P', 'Bau-Bau', '1994-03-05', 'Ki. B.Agam Dlm No. 737, Surakarta 62513, KalTim', '(+62) 816 4632 ', '40', 'profil.png', '2021-04-27 03:20:51'),
('3397', 'Anastasia Yulia Lailasari', 'P', 'Bengkulu', '2003-06-25', 'Jln. Ki Hajar Dewantara No. 489, Probolinggo 71020, Banten', '(+62) 890 1485 ', '30', 'profil.png', '2021-04-27 03:20:51'),
('3962', 'Rahmi Zelaya Andriani', 'P', 'Bau-Bau', '1991-02-08', 'Ki. Samanhudi No. 690, Sawahlunto 73570, KalBar', '0851 453 077', '77', 'profil.png', '2021-04-27 03:20:51'),
('4135', 'Bambang Kalim Nashiruddin S.Ked', 'L', 'Sorong', '2001-07-13', 'Ds. Urip Sumoharjo No. 979, Magelang 53413, KalUt', '(+62) 703 5373 ', '09', 'profil.png', '2021-04-27 03:20:51'),
('4151', 'Kasiyah Pudjiastuti', 'P', 'Dumai', '1987-01-30', 'Ds. Perintis Kemerdekaan No. 599, Tangerang 63192, SumBar', '021 8123 4449', '46', 'profil.png', '2021-04-27 03:20:51'),
('4380', 'Qori Ajeng Wastuti', 'L', 'Langsa', '2004-03-16', 'Jr. Jambu No. 729, Batam 70394, Gorontalo', '0463 0095 4173', '45', 'profil.png', '2021-04-27 03:20:51'),
('4595', 'Vicky Haryanti', 'P', 'Pematangsiantar', '1982-01-02', 'Jr. Tambak No. 405, Tual 38666, SulSel', '0571 1500 541', '15', 'profil.png', '2021-07-07 15:54:11'),
('4916', 'Kalim Ardianto', 'L', 'Surakarta', '1989-05-19', 'Ds. Jambu No. 64, Manado 22647, KepR', '0671 1583 671', '15', 'profil.png', '2021-07-07 15:54:11'),
('5121', 'Putu Dimaz Tarihoran M.Kom.', 'L', 'Bau-Bau', '2002-06-21', 'Gg. Uluwatu No. 389, Malang 43513, KalSel', '0625 8080 7179', '71', 'profil.png', '2021-04-27 03:20:51'),
('5352', 'Jono Situmorang', 'L', 'Sungai Penuh', '2007-03-25', 'Psr. Gajah Mada No. 421, Bekasi 41062, KepR', '0573 9209 7460', '51', 'profil.png', '2021-07-07 15:54:11'),
('5468', 'Umi Mila Fujiati', 'P', 'Surakarta', '2021-01-11', 'Psr. M.T. Haryono No. 613, Bima 16740, SulSel', '0676 5455 501', '96', 'profil.png', '2021-04-27 03:20:51'),
('5768', 'Wani Paris Prastuti S.Pt', 'P', 'Parepare', '1988-06-20', 'Gg. Setia Budi No. 645, Yogyakarta 82328, SulSel', '0392 2454 3237', '49', 'profil.png', '2021-04-27 03:20:51'),
('5964', 'Ulva Hasanah S.Farm', 'P', 'Bima', '1981-10-08', 'Gg. Achmad Yani No. 851, Bandung 57935, NTT', '0866 283 886', '67', 'profil.png', '2021-07-07 15:54:11'),
('6191', 'Kemal Kenzie Zulkarnain', 'L', 'Blitar', '1999-08-07', 'Dk. Qrisdoren No. 244, Bandung 34012, Lampung', '(+62) 834 2111 ', '45', 'profil.png', '2021-07-07 15:54:11'),
('6395', 'Latika Safitri S.Pd', 'P', 'Samarinda', '1988-03-14', 'Ds. Reksoninten No. 552, Pekanbaru 83053, PapBar', '0810 6945 393', '91', 'profil.png', '2021-07-07 15:54:11'),
('6521', 'Vera Nasyiah', 'P', 'Langsa', '1985-08-15', 'Psr. Pasteur No. 788, Bekasi 45111, Gorontalo', '(+62) 526 4825 ', '20', 'profil.png', '2021-04-27 03:20:51'),
('6659', 'Widya Andriani', 'L', 'Langsa', '1980-09-22', 'Psr. Bakhita No. 465, Metro 22072, SumUt', '0755 5309 4354', '66', 'profil.png', '2021-04-27 03:20:51'),
('6744', 'Zahra Padma Kusmawati', 'P', 'Jambi', '2019-09-09', 'Ds. Sukabumi No. 959, Administrasi Jakarta Timur 59853, SulSel', '(+62) 935 2540 ', '16', 'profil.png', '2021-07-07 15:54:11'),
('6844', 'Nyoman Gamblang Wijaya', 'L', 'Depok', '2002-06-26', 'Jln. Babakan No. 331, Mojokerto 17269, Gorontalo', '0204 7503 5167', '46', 'profil.png', '2021-07-07 15:54:11'),
('6899', 'Rudi Setiawan', 'L', 'Banjarmasin', '1989-01-24', 'Ds. Tangkuban Perahu No. 873, Denpasar 13849, Bali', '(+62) 910 9069 ', '81', 'profil.png', '2021-07-07 15:54:11'),
('7645', 'Gamanto Kusumo', 'L', 'Pariaman', '1998-08-09', 'Dk. Dewi Sartika No. 300, Tegal 76792, BaBel', '(+62) 919 3160 ', '98', 'profil.png', '2021-07-07 15:54:11'),
('8090', 'Clara Halimah M.Pd', 'P', 'Tangerang', '1993-06-27', 'Dk. Wora Wari No. 153, Ambon 46227, SulBar', '(+62) 380 4874 ', '84', 'profil.png', '2021-07-07 15:54:11'),
('8209', 'Edi Kamidin Samosir', 'L', 'Cilegon', '2005-10-24', 'Dk. Muwardi No. 37, Cilegon 85297, JaTim', '(+62) 383 8904 ', '54', 'profil.png', '2021-04-27 03:20:51'),
('8226', 'Bella Suartini', 'L', 'Lhokseumawe', '1974-01-23', 'Dk. Wahidin No. 196, Tanjung Pinang 66238, NTT', '0888 222 408', '32', 'profil.png', '2021-07-07 15:54:11'),
('8260', 'Gandewa Atma Pradipta M.M.', 'L', 'Jambi', '1978-06-28', 'Jln. Wahidin No. 383, Padangsidempuan 76556, SulSel', '(+62) 962 0470 ', '73', 'profil.png', '2021-04-27 03:20:51'),
('8541', 'Mursinin Prasasta S.T.', 'L', 'Tasikmalaya', '1974-07-13', 'Jln. Astana Anyar No. 554, Tangerang 85485, JaTim', '021 1788 312', '39', 'profil.png', '2021-04-27 03:20:51'),
('8870', 'Jarwi Budi Hardiansyah S.Kom', 'L', 'Tomohon', '2010-01-30', 'Dk. Ujung No. 980, Probolinggo 56823, SulUt', '(+62) 859 6039 ', '59', 'profil.png', '2021-07-07 15:54:11'),
('8912', 'Maras Saptono', 'L', 'Bau-Bau', '1982-04-15', 'Dk. Ahmad Dahlan No. 200, Subulussalam 38702, Bengkulu', '(+62) 857 1829 ', '50', 'profil.png', '2021-04-27 03:20:51'),
('8945', 'Kawaya Waskita S.Pd', 'L', 'Langsa', '2018-04-02', 'Gg. Bahagia  No. 411, Cimahi 70362, Bali', '0822 6538 0239', '54', 'profil.png', '2021-07-07 15:54:11'),
('8951', 'Gina Rahayu', 'P', 'Tebing Tinggi', '2013-05-10', 'Ki. Yos Sudarso No. 776, Balikpapan 89803, SulTra', '(+62) 761 7188 ', '67', 'profil.png', '2021-07-07 15:54:11'),
('8960', 'Puji Pertiwi', 'P', 'Cimahi', '1975-05-26', 'Dk. Bacang No. 127, Kediri 53201, NTB', '0832 1110 254', '38', 'profil.png', '2021-07-07 15:54:11'),
('8969', 'Panca Gunarto', 'P', 'Tarakan', '1976-08-07', 'Jln. Jend. Sudirman No. 659, Kotamobagu 42460, SumUt', '0751 3429 2197', '95', 'profil.png', '2021-04-27 03:20:51'),
('9306', 'Yosef Taufan Wibisono S.Gz', 'L', 'Sungai Penuh', '1993-03-20', 'Kpg. Sugiyopranoto No. 345, Gorontalo 78757, Aceh', '(+62) 836 8950 ', '93', 'profil.png', '2021-04-27 03:20:51'),
('9497', 'Hardi Kuswoyo', 'P', 'Pasuruan', '1996-07-11', 'Dk. Zamrud No. 393, Solok 91159, DIY', '029 5639 0866', '51', 'profil.png', '2021-04-27 03:20:51'),
('9504', 'Aurora Pertiwi', 'L', 'Malang', '2012-01-31', 'Ki. Bakin No. 631, Lhokseumawe 14329, JaTeng', '0216 3739 0140', '15', 'profil.png', '2021-07-07 15:54:11'),
('9521', 'Dipa Utama', 'P', 'Kupang', '1971-08-14', 'Psr. Laswi No. 739, Administrasi Jakarta Selatan 34410, SulSel', '0680 6036 780', '90', 'profil.png', '2021-04-27 03:20:51'),
('9534', 'Cagak Kurniawan', 'P', 'Tegal', '1971-08-21', 'Ds. K.H. Maskur No. 27, Administrasi Jakarta Timur 66869, NTB', '(+62) 351 0046 ', '98', 'profil.png', '2021-04-27 03:20:52'),
('9691', 'Padma Fujiati M.TI.', 'P', 'Probolinggo', '2013-05-09', 'Psr. Radio No. 733, Cirebon 78252, Bengkulu', '(+62) 264 5058 ', '28', 'profil.png', '2021-07-07 15:54:11'),
('9980', 'Galih Nashiruddin', 'P', 'Bitung', '2004-10-12', 'Dk. Moch. Toha No. 910, Pekanbaru 80103, Jambi', '(+62) 297 7191 ', '59', 'profil.png', '2021-07-07 15:54:11');

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
