-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2020 pada 13.54
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sirespek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `tlp` varchar(14) NOT NULL,
  `rek` varchar(100) NOT NULL,
  `saldo` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `id_bengkel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_admin`, `nama`, `username`, `email`, `password`, `level`, `tlp`, `rek`, `saldo`, `alamat`, `jk`, `tgl_lahir`, `nik`, `id_bengkel`) VALUES
(1, 'Awiez Fathwa Zein', 'awiez_zein', 'awiezfathwa@gmail.co', '123', 'Admin', '0', '', 0, '', '', '', '', ''),
(2, 'AWIEZ FATHWA ZEIN', 'user', 'k@.com', '123', 'User', '08121400000', 'BRI-2010203902898', 1000000, '1234', 'Laki-Laki', '2020-12-02', '123', ''),
(9, 'Awiez Fathwa Zein', 'superadmin', 'aw@com', '123', 'Super Admin', '08121400000', '2324', 434, 'frt', '', '', '', ''),
(24, 'AWIEZ FATHWA ZEIN', 'zen3', 'awiezfathwa@gmail.com', '123', 'User', '', '', 0, '', '', '', '', ''),
(25, 'Yamaha Victory Karawaci', 'mitra', 'test', '123', 'Mitra', '', '', 0, '', '', '', '', 'BGKL002'),
(28, 'Test Akun Admin', 'admin', 'awiezfathwa.zein19@mhs.uinjkt.ac.id', '123', 'User', '', '', 0, '', '', '', '', ''),
(31, 'AWIEZ FATHWA ZEIN', 'superadmin', 'wdf', '123', 'User', '', '', 0, '', '', '', '', ''),
(32, 'AWIEZ FATHWA ZEIN', 'superadmin', 'wssd', '123', 'User', '', '', 0, '', '', '', '', ''),
(33, 'AWIEZ FATHWA ZEIN', 'superadmin', '12e11', '123', 'User', '', '', 0, '', '', '', '', ''),
(34, 'g23', 'superadmin', 'e2fe', 'e33', 'User', '', '', 0, '', '', '', '', ''),
(58, 'ewt', 'superadmin', 'y6786', 'yfguyf', 'User', '', '', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alamat`
--

CREATE TABLE `alamat` (
  `id_alamat` int(11) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alamat`
--

INSERT INTO `alamat` (`id_alamat`, `provinsi`, `kota`) VALUES
(1, 'Banten', 'Tangerang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(64) NOT NULL,
  `artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `artikel`) VALUES
(1, '<h4><b>Lorem Ipsum</b></h4>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate sem pharetra pretium iaculis. Nunc nec feugiat ligula, ut iaculis lorem. Nam faucibus mollis magna, sit amet finibus libero bibendum nec. Pellentesque feugiat dolor nisl, sed commodo elit pulvinar sit amet. Etiam euismod eros eget nulla imperdiet, lobortis pretium quam facilisis. In id vestibulum felis. Nullam quis metus efficitur, ullamcorper dolor vel, posuere magna. Suspendisse accumsan arcu ut pretium laoreet. Ut rhoncus tellus tellus, sit amet ultrices purus pellentesque id. Nam id neque dui. Quisque libero dolor, ultricies in lacinia eget, eleifend nec purus. Morbi iaculis elementum ligula, ut fermentum urna convallis quis. Pellentesque tincidunt finibus lectus, vitae maximus tortor mollis sit amet. </p>\r\n\r\n<p>Phasellus orci neque, interdum nec elementum nec, rutrum quis neque. Morbi ultricies leo consequat, rhoncus neque a, scelerisque purus. Morbi in mauris molestie, interdum sapien in, pretium felis. Morbi dignissim feugiat dui id condimentum. Nulla dapibus dictum tincidunt. Ut eu luctus mauris. Mauris ipsum tellus, fermentum nec rhoncus quis, auctor id quam. Vestibulum eget nunc eu ligula laoreet tincidunt at in nulla. Etiam suscipit sed sem mollis porta. Nullam est dolor, pharetra et sapien sit amet, pulvinar eleifend justo. Nulla non mi pharetra, hendrerit urna sed, bibendum dolor. Aliquam aliquam venenatis libero et mattis. Aenean scelerisque maximus elit eu suscipit. Cras sed vestibulum velit. Aenean dapibus varius quam, ut eleifend sem laoreet in.</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `carousell`
--

CREATE TABLE `carousell` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `untuk` varchar(200) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`id`, `user`, `isi`, `untuk`, `role`) VALUES
(14, 'user_test_sirespek', 'Ada yang bisa kami bantu?', 'user_test_sirespek', 'admin'),
(15, '', 'hai', 'user_test_sirespek', 'admin'),
(17, '', '12', '', 'admin'),
(20, 'user_test_sirespek', 'yrtyrkyhgjlgj;ghj;gh;hkh;k', 'user_test_sirespek', 'admin'),
(24, 'awiez_zein', 'iya', 'user_test_sirespek', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_bengkel`
--

CREATE TABLE `data_bengkel` (
  `id_bengkel` varchar(11) NOT NULL,
  `jenis_kendaraan` varchar(20) NOT NULL,
  `merek` varchar(20) NOT NULL,
  `nama_bengkel` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `alamat_bengkel` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_bengkel`
--

INSERT INTO `data_bengkel` (`id_bengkel`, `jenis_kendaraan`, `merek`, `nama_bengkel`, `alamat_bengkel`, `link`) VALUES
('BGKL001', 'Mobil', 'Mercedes Benz', 'test', 'TANGERANG', 'fdwf'),
('BGKL002', 'Motor', 'Yamaha', 'Yamaha Victory Karawaci', 'Jl. Imam Bonjol No.42F, RT.002/RW.003, G/H, Kec. Karawaci, Kota Tangerang, Banten 15113', 'https://www.google.com/maps/dir//bengkel+resmi+yamaha/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x2e69fed4570bb247:0x1d3f963dee32f82?sa=X&ved=2ahUKEwjBy6zI0cTsAhUKOSsKHdBiApcQ9RcwAHoECAUQBA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id_info` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id_info`, `judul`, `isi`) VALUES
(1, 'Pencurian Akun', 'Kepada seluruh pelanggan layanan Sirespek, diharapkan untuk mengganti password anda secara berkala untuk menghindari tindakan yang tidak diinginkan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `nopol` varchar(8) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `jenis`, `nopol`, `merek`, `tipe`, `username`) VALUES
(1, 'Motor', 'B6621VDQ', 'Yamaha', 'Jupiter MX', 'user'),
(2, 'Mobil', 'B1002VOL', 'Toyota', 'Avanza Veloz 1.5', 'user'),
(3, 'Motor', 'G6519KM', 'Yamaha', 'Jupiter Z', 'zein'),
(4, 'fsg', '4313', 'dcfa', 'dffsgfdgdghrhghghtbhdghdgdffsgfdgdghrhghghtbhdghdg', 'user'),
(5, 'Mobil', 'sdf', 'dsvas', 'svdw', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `running`
--

CREATE TABLE `running` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `running`
--

INSERT INTO `running` (`id`, `judul`, `isi`) VALUES
(1, 'test', '  Jangan lupa pakai masker!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `teknisi`
--

CREATE TABLE `teknisi` (
  `id_teknisi` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bengkel` varchar(11) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `teknisi`
--

INSERT INTO `teknisi` (`id_teknisi`, `nama`, `bengkel`, `jam`, `status`) VALUES
(1, 'Budi', 'BMBL001', '10:00', 'ready'),
(2, 'Anduk', 'BMTR003', '09:01', 'Tersedia'),
(3, 'Eri', 'BMBL002', '9:00', 'na'),
(5, 'AWIEZ FATHWA ZEIN', 'BMTR003', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` varchar(10) CHARACTER SET utf8 NOT NULL,
  `tanggal_masuk` datetime DEFAULT NULL,
  `kendaraan` varchar(50) NOT NULL,
  `bengkel` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `selesai` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `tlp` varchar(15) NOT NULL,
  `perawatan` varchar(100) NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `norek` varchar(100) NOT NULL,
  `jam` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `tanggal_masuk`, `kendaraan`, `bengkel`, `status`, `selesai`, `username`, `tlp`, `perawatan`, `pembayaran`, `norek`, `jam`) VALUES
('INV001', '2020-11-28 10:43:30', '1. B6621VDQ - Jupiter MX', 'BMTR003', 'Selesai', '-', 'user', '08121400000', '2. Ganti Oli', '4. QRIS (Soon)', 'BRI-2010203902898', ''),
('INV002', '2020-11-28 10:48:01', '1. B6621VDQ - Jupiter MX', 'Astrido Toyota Tangerang - Jl. Daan Mogot No.Km.22, RT.001/RW.005, Tanah Tinggi, Kec. Tangerang, Kota Tangerang, Banten 15119', 'Ditangani', '1970-01-01 10:00:00', 'user', '08121400000', '2. Ganti Oli', '2. Virtual Account (Soon)', 'BRI-2010203902898', ''),
('INV003', '2020-11-28 10:49:05', '2. B1002VOL - Avanza Veloz 1.5', 'Astrido Toyota Tangerang - Jl. Daan Mogot No.Km.22, RT.001/RW.005, Tanah Tinggi, Kec. Tangerang, Kota Tangerang, Banten 15119', 'Selesai', '2020-11-28 13:49:05', 'user', '08121400000', '2. Ganti Oli', '3. Saldo (Soon)', 'BRI-2010203902898', ''),
('INV004', '2020-11-28 21:55:54', '1. B6621VDQ - Jupiter MX', 'Yamaha TM Motor 2 Cipondoh - Jl. KH Hasyim Ashari, RT.001/RW.002, Kenanga, Kec. Cipondoh, Kota Tangerang, Banten 15148', '', '2020-11-29 00:55:54', '', '08121400000', '1. Perawatan Ringan', 'Saldo', '', ''),
('INV005', '2020-11-28 21:56:56', '2. B1002VOL - Avanza Veloz 1.5', 'Astrido Toyota Tangerang - Jl. Daan Mogot No.Km.22, RT.001/RW.005, Tanah Tinggi, Kec. Tangerang, Kota Tangerang, Banten 15119', 'Diambil', '2020-11-29 00:56:56', '', '08121400000', '2. Ganti Oli', 'Saldo', '', ''),
('INV006', '2020-11-28 21:57:20', '1. B6621VDQ - Jupiter MX', 'Astrido Toyota Tangerang - Jl. Daan Mogot No.Km.22, RT.001/RW.005, Tanah Tinggi, Kec. Tangerang, Kota Tangerang, Banten 15119', 'Selesai', '2020-11-29 00:57:20', '', '08121400000', '2. Ganti Oli', 'Saldo', '', ''),
('INV007', '2020-11-28 21:58:26', '1. B6621VDQ - Jupiter MX', 'Astrido Toyota Tangerang - Jl. Daan Mogot No.Km.22, RT.001/RW.005, Tanah Tinggi, Kec. Tangerang, Kota Tangerang, Banten 15119', '', '2020-11-29 00:58:26', 'user', '08121400000', '1. Perawatan Ringan', 'Saldo', '', ''),
('INV008', '2020-11-28 22:00:00', '1. B6621VDQ - Jupiter MX', 'Astrido Toyota Tangerang - Jl. Daan Mogot No.Km.22, RT.001/RW.005, Tanah Tinggi, Kec. Tangerang, Kota Tangerang, Banten 15119', 'Validasi Pembayaran', '2020-11-29 01:00:00', 'user', '08121400000', '1. Perawatan Ringan', 'Saldo', '', ''),
('INV009', '2020-11-28 22:04:12', '2. B1002VOL - Avanza Veloz 1.5', 'Auto2000 Tangerang - Area Bisnis Park, Jl. Jenderal Sudirman, RT.005/RW.005, Babakan, Kec. Tangerang, Kota Tangerang, Banten 15118', 'Validasi Pembayaran', '2020-11-29 01:04:12', 'user', '08121400000', '1. Perawatan Ringan', 'Saldo', '', ''),
('INV010', '2020-11-29 11:55:18', 'B6621VDQ - Jupiter MX', 'Auto2000 Tangerang - Area Bisnis Park, Jl. Jenderal Sudirman, RT.005/RW.005, Babakan, Kec. Tangerang, Kota Tangerang, Banten 15118', 'Validasi Pembayaran', '2020-11-29 14:55:18', 'user', '08121400000', '2. Ganti Oli', 'QRIS (Soon)', 'BRI-2010203902898', 'jam'),
('INV011', '2020-11-29 11:56:36', 'B1002VOL - Avanza Veloz 1.5', 'Astrido Toyota Tangerang - Jl. Daan Mogot No.Km.22, RT.001/RW.005, Tanah Tinggi, Kec. Tangerang, Kota Tangerang, Banten 15119', 'Validasi Pembayaran', '2020-11-29 14:56:36', 'user', '08121400000', '1. Perawatan Ringan', 'Saldo', 'BRI-2010203902898', '9:00 - Eri'),
('INV0112202', '2020-12-01 15:48:28', 'B6621VDQ - Jupiter MX', 'Menunggu Konfirmasi', '-', '2020-12-01 18:48:28', 'user', '08121400000', 'Layanan Darurat', 'COD', '-', '-'),
('INV0212202', '2020-12-02 09:52:06', 'B1002VOL - Avanza Veloz 1.5', 'Menunggu Konfirmasi', '-', '2020-12-02 12:52:06', 'user', '08121400000', 'Layanan Darurat', 'COD', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_acc`
--

CREATE TABLE `user_acc` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_acc`
--

INSERT INTO `user_acc` (`id`, `username`, `nama`, `email`, `password`) VALUES
(5, 'awiez_zein', 'AWIEZ FATHWA ZEIN', 'anonymousgov8@gmail.com', '123'),
(6, 'awiez_zein', 'AWIEZ FATHWA ZEIN', 'awiez_fathwa@yahoo.com', '$2y$10$0OlgYQY17t0JfbLwax9FK.f9kd7VT5GMi0lr9.t1ajC'),
(7, 'zein', 'zein', 'awiezfathwa@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `carousell`
--
ALTER TABLE `carousell`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_bengkel`
--
ALTER TABLE `data_bengkel`
  ADD PRIMARY KEY (`id_bengkel`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_info`);

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `running`
--
ALTER TABLE `running`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `teknisi`
--
ALTER TABLE `teknisi`
  ADD PRIMARY KEY (`id_teknisi`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_acc`
--
ALTER TABLE `user_acc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id_alamat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `carousell`
--
ALTER TABLE `carousell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `running`
--
ALTER TABLE `running`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `teknisi`
--
ALTER TABLE `teknisi`
  MODIFY `id_teknisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_acc`
--
ALTER TABLE `user_acc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
