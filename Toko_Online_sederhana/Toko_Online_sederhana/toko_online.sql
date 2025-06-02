-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 01 Jun 2025 pada 12.28
-- Versi server: 8.0.30
-- Versi PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL,
  `deskripsi` text,
  `gambar` varchar(255) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `deskripsi`, `gambar`, `kategori`) VALUES
(1, 'Smartphone Android', 'Rp 2.500.000', 'Smartphone dengan kamera jernih dan baterai tahan lama', 'https://images-cdn.ubuy.com.sa/63b46431ffafdf2f462e84a6-christmas-gifts-clearance-cbcbtwo-smart.jpg', 'elektronik'),
(2, 'Sneakers Keren', 'Rp 300.000', 'Sepatu sneakers cocok buat nongkrong atau olahraga', 'https://down-id.img.susercontent.com/file/cb9a26248a119e7fbd42ac508d418654.webp', 'fashion'),
(3, 'Jam Tangan Digital', 'Rp 150.000', 'Jam tangan sporty dengan fitur stopwatch dan waterproof', 'https://down-id.img.susercontent.com/file/id-11134207-7rbk9-m7rc0jl3ojo034.webp', 'fashion'),
(4, 'Keyboard Mechanical RGB', 'Rp 600.000', 'Keyboard dengan lampu RGB dan switch clicky', 'https://down-id.img.susercontent.com/file/sg-11134201-7rcdp-lri13s57jj673b@resize_w450_nl.webp', 'elektronik'),
(5, 'Tas Ransel Kulit', 'Rp 200.000', 'Tas ransel dengan desain elegan dan bahan kulit sintetis', 'https://down-id.img.susercontent.com/file/id-11134207-7rasj-m52p8rs5k1i0e8.webp', 'fashion'),
(6, 'kaos keren laki laki', '20.000', 'kaos keren distro untuk laki laki', 'https://down-id.img.susercontent.com/file/id-11134207-7r98p-lzoa3pb7h78b3a@resize_w450_nl.webp', 'fashion');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
