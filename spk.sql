-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jul 2023 pada 07.14
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gapsiswa`
--

CREATE TABLE `gapsiswa` (
  `nama` varchar(30) NOT NULL,
  `gapipk` int(5) NOT NULL,
  `gappenghasilan` int(5) NOT NULL,
  `gaptanggungan` int(5) NOT NULL,
  `gapsmt` int(5) NOT NULL,
  `gapakademik` int(5) NOT NULL,
  `gapmikro` int(5) NOT NULL,
  `gapkom` int(5) NOT NULL,
  `gapmotiv` int(5) NOT NULL,
  `gappribadi` int(5) NOT NULL,
  `gapetika` int(5) NOT NULL,
  `gapwibawa` int(5) NOT NULL,
  `gaprapih` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gapsiswa`
--

INSERT INTO `gapsiswa` (`nama`, `gapipk`, `gappenghasilan`, `gaptanggungan`, `gapsmt`, `gapakademik`, `gapmikro`, `gapkom`, `gapmotiv`, `gappribadi`, `gapetika`, `gapwibawa`, `gaprapih`) VALUES
('Nina', -2, -2, -1, -1, -1, -1, 0, 0, 0, 0, 1, -1),
('Dani', 0, -2, 0, -1, -1, -1, 1, 0, -1, -1, 1, -1),
('Ayu', 0, 0, 0, 0, 0, -1, 0, 1, 0, -1, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasilsiswa`
--

CREATE TABLE `hasilsiswa` (
  `nama` varchar(30) NOT NULL,
  `bobotipk` float NOT NULL,
  `bobotpenghasilan` float NOT NULL,
  `bobottanggungan` float NOT NULL,
  `bobotsmt` float NOT NULL,
  `bobotakademik` float NOT NULL,
  `bobotmikro` float NOT NULL,
  `bobotkom` float NOT NULL,
  `bobotmotiv` float NOT NULL,
  `bobotpribadi` float NOT NULL,
  `bobotetika` float NOT NULL,
  `bobotwibawa` float NOT NULL,
  `bobotrapih` float NOT NULL,
  `ncfa` float NOT NULL,
  `nsfa` float NOT NULL,
  `hasila` float NOT NULL,
  `ncfk` float NOT NULL,
  `nsfk` float NOT NULL,
  `hasilk` float NOT NULL,
  `ncfs` float NOT NULL,
  `nsfs` float NOT NULL,
  `hasils` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasilsiswa`
--

INSERT INTO `hasilsiswa` (`nama`, `bobotipk`, `bobotpenghasilan`, `bobottanggungan`, `bobotsmt`, `bobotakademik`, `bobotmikro`, `bobotkom`, `bobotmotiv`, `bobotpribadi`, `bobotetika`, `bobotwibawa`, `bobotrapih`, `ncfa`, `nsfa`, `hasila`, `ncfk`, `nsfk`, `hasilk`, `ncfs`, `nsfs`, `hasils`, `total`) VALUES
('Nina', 3, 3, 4, 4, 4, 4, 5, 5, 5, 5, 4.5, 4, 3, 4, 3.4, 4, 5, 4.35, 5, 4.25, 4.7, 3.4),
('Dani', 5, 3, 5, 4, 4, 4, 4.5, 5, 4, 4, 4.5, 4, 4, 4.5, 4.2, 4, 4.75, 4.2625, 4, 4.25, 4.1, 4.2),
('Ayu', 5, 5, 5, 5, 5, 4, 5, 4.5, 5, 4, 5, 5, 5, 5, 5, 4.5, 4.75, 4.5875, 4.5, 5, 4.7, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keterangansiswa`
--

CREATE TABLE `keterangansiswa` (
  `nama` varchar(30) NOT NULL,
  `ket_ipk` varchar(20) NOT NULL,
  `ket_penghasilan` varchar(20) NOT NULL,
  `ket_tanggungan` varchar(20) NOT NULL,
  `ket_smt` varchar(20) NOT NULL,
  `ket_akademik` varchar(30) NOT NULL,
  `ket_mikro` varchar(30) NOT NULL,
  `ket_kom` varchar(30) NOT NULL,
  `ket_motiv` varchar(30) NOT NULL,
  `ket_pribadi` varchar(30) NOT NULL,
  `ket_etika` varchar(30) NOT NULL,
  `ket_wibawa` varchar(30) NOT NULL,
  `ket_rapih` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keterangansiswa`
--

INSERT INTO `keterangansiswa` (`nama`, `ket_ipk`, `ket_penghasilan`, `ket_tanggungan`, `ket_smt`, `ket_akademik`, `ket_mikro`, `ket_kom`, `ket_motiv`, `ket_pribadi`, `ket_etika`, `ket_wibawa`, `ket_rapih`) VALUES
('Nina', '2', '2', '2', '2', '3', '3', '3', '3', '4', '4', '4', '4'),
('Dani', '4', '2', '3', '2', '3', '3', '4', '3', '3', '3', '4', '4'),
('Ayu', '4', '4', '3', '3', '4', '3', '3', '4', '4', '3', '3', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nama` varchar(30) NOT NULL,
  `ipk` int(5) NOT NULL,
  `penghasilan` int(5) NOT NULL,
  `tanggungan` int(5) NOT NULL,
  `semester` int(5) NOT NULL,
  `akademik` int(5) NOT NULL,
  `mikro` int(5) NOT NULL,
  `kom` int(5) NOT NULL,
  `motiv` int(5) NOT NULL,
  `pribadi` int(5) NOT NULL,
  `etika` int(5) NOT NULL,
  `wibawa` int(5) NOT NULL,
  `rapih` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nama`, `ipk`, `penghasilan`, `tanggungan`, `semester`, `akademik`, `mikro`, `kom`, `motiv`, `pribadi`, `etika`, `wibawa`, `rapih`) VALUES
('Nina', 2, 2, 2, 2, 3, 3, 3, 3, 4, 4, 4, 4),
('Dani', 4, 2, 3, 2, 3, 3, 4, 3, 3, 3, 4, 4),
('Ayu', 4, 4, 3, 3, 4, 3, 3, 4, 4, 3, 3, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
