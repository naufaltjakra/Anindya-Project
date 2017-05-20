-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Mei 2017 pada 15.11
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anindya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cover`
--

CREATE TABLE `cover` (
  `cover_id` int(11) NOT NULL,
  `cover_judul` varchar(50) NOT NULL,
  `cover_text` varchar(255) NOT NULL,
  `cover_lokasi` varchar(50) NOT NULL,
  `cover_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cover`
--

INSERT INTO `cover` (`cover_id`, `cover_judul`, `cover_text`, `cover_lokasi`, `cover_url`) VALUES
(4, 'Anindya asd', 'Aliquam ac metus lorem. In in condimentum odio.', 'ede516cdb93c7005c8e77900bebd9bf1efb95bdc.jpg', ''),
(5, 'Anindya', 'Deskripsi sementara', '4df95752f6ab36264dc0944f92c13c35652330de.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_judul` varchar(50) NOT NULL,
  `gallery_lokasi` varchar(50) NOT NULL,
  `gallery_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_judul`, `gallery_lokasi`, `gallery_url`) VALUES
(1, 'Gambar 1', 'eb4acdf3a3bd92ed2267e750f067d9581caabb6b.jpg', 'coba-gambar'),
(4, 'Gambar 2', 'f4018ed8a3f11058b106ac9a1b425f4b0ad6e0a6.jpg', 'asdas-dsad-asd'),
(5, 'Gambar 3', '214ffc486365be23ef112c69a5c50736ad82d93f.jpg', 'gambar-3'),
(6, 'Gallery 4', '21707e2d1eacd5117b3430421b3a1d0aead3e17a.jpg', 'gallery-4'),
(7, 'Gallery 5', '059b4502862551480edc1cbc7189cf1278896dac.jpg', 'gallery-5'),
(8, 'Gallery 6', '6f95b31ce4ebe1e266354725fbecf640d094c224.jpg', 'gallery-6'),
(9, 'Gallery 7', 'eaf9118406833affd635bb4a24d5fb347e84ce52.jpg', 'gallery-7'),
(11, 'Gambar 8', '2f5e410a1cd69c8760435ec734e5d58976284dba.jpg', 'gambar-8'),
(12, 'PKL', '7b7ea96abcceca420ba395d79df03907a4b62ee5.png', 'pkl');

-- --------------------------------------------------------

--
-- Struktur dari tabel `maps`
--

CREATE TABLE `maps` (
  `map_id` int(11) NOT NULL,
  `map_kota` text NOT NULL,
  `map_latitude` varchar(255) NOT NULL,
  `map_longitude` varchar(255) NOT NULL,
  `map_judul` text NOT NULL,
  `map_deskripsi` text NOT NULL,
  `map_asal` varchar(255) NOT NULL,
  `map_lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `maps`
--

INSERT INTO `maps` (`map_id`, `map_kota`, `map_latitude`, `map_longitude`, `map_judul`, `map_deskripsi`, `map_asal`, `map_lokasi`) VALUES
(1, 'Jakarta', '-6.21462', '106.84513', 'Event Jakarta', 'Lorem ipsum dolor sit amet', 'gambarevent/event1.png', '1cc32fafcc04b9e9f61daa3f1b663732dc3d5251.jpg'),
(8, 'Kediri', '-7.834818', '111.999753', 'Event Kediri', 'Phasellus mollis odio maximus urna venenatis, et aliqete eros luctus duis nisi nunc liquet eros luctus duis nisi nunc', 'event-kediri', '969c46dd7eef4edcee441fcf29f45dac067e8898.png'),
(9, 'Tangerang', '-0.935402', '100.356924', 'Event Padang', 'Phasellus mollis odio maximus urna venenatis, et aliqete eros luctus duis nisi nunc liquet eros luctus duis nisi nunc', '', 'e0f1defe12313c5008627e53a55a105fb85ea7bb.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_id` int(10) UNSIGNED DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `lft` int(10) UNSIGNED DEFAULT NULL,
  `rgt` int(10) UNSIGNED DEFAULT NULL,
  `depth` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_05_05_115641_create_menu_items_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `produk_id` int(11) NOT NULL,
  `produk_nama` varchar(50) NOT NULL,
  `produk_deskripsi` text NOT NULL,
  `produk_harga` varchar(50) NOT NULL,
  `produk_lokasi` varchar(50) NOT NULL,
  `produk_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`produk_id`, `produk_nama`, `produk_deskripsi`, `produk_harga`, `produk_lokasi`, `produk_url`) VALUES
(1, 'Vivamus', 'Phasellus mollis odio maximus urna venenatis, et aliquete eros luctus duis nisi nunc liquet eros luctus duis nisi nunc', 'Rp. 500.000', 'sample1.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `profile_teks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`profile_id`, `profile_teks`) VALUES
(1, 'Nulla vitae augue in nisl semper tempus ut vel arcu. Sed commodo nisi eget augue feugiat, non auctor velit tempus. Vestibulum quis tellus tempor, vestibulum ipsum a, porta velit. Donec interdum, tortor ac porta sodales, ante metus sollicitudin lorem, nec laoreet enim quam eu sapien. Quisque in tincidunt nulla, sit amet fermentum elit. Etiam cursus enim laoreet porta rhoncus. Duis accumsan vitae velit nec maximus. Mauris ex ligula, semper nec mauris eu, iaculis tempor odio. Vestibulum pellentesque, odio sit amet facilisis porttitor, sem justo eleifend lacus, nec volutpat nulla lectus ac orci.'),
(2, '<p>Nulla vitae augue in nisl semper tempus ut vel arcu. Sed commodo nisi eget augue feugiat, non auctor velit tempus. Vestibulum quis tellus tempor, vestibulum ipsum a, porta velit. Donec interdum, tortor ac porta sodales, ante metus sollicitudin lorem, nec laoreet enim quam eu sapien. Quisque in tincidunt nulla, sit amet fermentum elit. Etiam cursus enim laoreet porta rhoncus. Duis accumsan vitae velit nec maximus. Mauris ex ligula, semper nec mauris eu, iaculis tempor odio. Vestibulum pellentesque, odio sit amet facilisis porttitor, sem justo eleifend lacus, nec volutpat nulla lectus ac orci.</p>'),
(3, '<p>Nulla vitae augue in nisl semper tempus ut vel arcu. Sed commodo nisi eget augue feugiat, non auctor velit tempus. Vestibulum quis tellus tempor, vestibulum ipsum a, porta velit. Donec interdum, tortor ac porta sodales, ante metus sollicitudin lorem, nec laoreet enim quam eu sapien. Quisque in tincidunt nulla, sit amet fermentum elit. Etiam cursus enim laoreet porta rhoncus. Duis accumsan vitae velit nec maximus. Mauris ex ligula, semper nec mauris eu, iaculis tempor odio. Vestibulum pellentesque, odio sit amet facilisis porttitor, sem justo eleifend lacus, nec volutpat nulla lectus ac orci.</p>'),
(4, '<p>Hallooooooo.... Nulla vitae augue in nisl semper tempus ut vel arcu. Sed commodo nisi eget augue feugiat, non auctor velit tempus. Vestibulum quis tellus tempor, vestibulum ipsum a, porta velit. Donec interdum, tortor ac porta sodales, ante metus sollicitudin lorem, nec laoreet enim quam eu sapien. Quisque in tincidunt nulla, sit amet fermentum elit. Etiam cursus enim laoreet porta rhoncus. Duis accumsan vitae velit nec maximus. Mauris ex ligula, semper nec mauris eu, iaculis tempor odio. Vestibulum pellentesque, odio sit amet facilisis porttitor, sem justo eleifend lacus, nec volutpat nulla lectus ac orci.</p>'),
(5, '<p>Hallooooooo.... Nulla vitae augue in nisl semper tempus ut vel arcu. Sed commodo nisi eget augue feugiat, non auctor velit tempus. Vestibulum quis tellus tempor, vestibulum ipsum a, porta velit. Donec interdum, tortor ac porta sodales, ante metus sollicitudin lorem, nec laoreet enim quam eu sapien. Quisque in tincidunt nulla, sit amet fermentum elit. Etiam cursus enim laoreet porta rhoncus. Duis accumsan vitae velit nec maximus. Mauris ex ligula, semper nec mauris eu, iaculis tempor odio. Vestibulum pellentesque, odio sit amet facilisis porttitor, sem justo eleifend lacus, nec volutpat nulla lectus ac orci.</p>\r\n<p>&nbsp;</p>\r\n<p>Hallooooooo.... Nulla vitae augue in nisl semper tempus ut vel arcu. Sed commodo nisi eget augue feugiat, non auctor velit tempus. Vestibulum quis tellus tempor, vestibulum ipsum a, porta velit. Donec interdum, tortor ac porta sodales, ante metus sollicitudin lorem, nec laoreet enim quam eu sapien. Quisque in tincidunt nulla, sit amet fermentum elit. Etiam cursus enim laoreet porta rhoncus. Duis accumsan vitae velit nec maximus. Mauris ex ligula, semper nec mauris eu, iaculis tempor odio. Vestibulum pellentesque, odio sit amet facilisis porttitor, sem justo eleifend lacus, nec volutpat nulla lectus ac orci.</p>'),
(6, '<p>&nbsp;</p>\r\n<p>Hallooooooo.... Nulla vitae augue in nisl semper tempus ut vel arcu. Sed commodo nisi eget augue feugiat, non auctor velit tempus. Vestibulum quis tellus tempor, vestibulum ipsum a, porta velit. Donec interdum, tortor ac porta sodales, ante metus sollicitudin lorem, nec laoreet enim quam eu sapien. Quisque in tincidunt nulla, sit amet fermentum elit. Etiam cursus enim laoreet porta rhoncus. Duis accumsan vitae velit nec maximus. Mauris ex ligula, semper nec mauris eu, iaculis tempor odio. Vestibulum pellentesque, odio sit amet facilisis porttitor, sem justo eleifend lacus, nec volutpat nulla lectus ac orci.</p>'),
(7, '<p>Hallooooooo.... Nulla vitae augue in nisl semper tempus ut vel arcu. Sed commodo nisi eget augue feugiat, non auctor velit tempus. Vestibulum quis tellus tempor, vestibulum ipsum a, porta velit. Donec interdum, tortor ac porta sodales, ante metus sollicitudin lorem, nec laoreet enim quam eu sapien. Quisque in tincidunt nulla, sit amet fermentum elit. Etiam cursus enim laoreet porta rhoncus. Duis accumsan vitae velit nec maximus. Mauris ex ligula, semper nec mauris eu, iaculis tempor odio. Vestibulum pellentesque, odio sit amet facilisis porttitor, sem justo eleifend lacus, nec volutpat nulla lectus ac orci.</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `story`
--

CREATE TABLE `story` (
  `story_id` int(11) NOT NULL,
  `story_title` varchar(50) NOT NULL,
  `story_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `story`
--

INSERT INTO `story` (`story_id`, `story_title`, `story_text`) VALUES
(1, 'Story Pertama', 'Etiam cursus enim laoreet porta rhoncus. Duis accumsan vitae velit nec maximus. Mauris ex ligula, semper nec mauris eu, iaculis tempor odio. Vestibulum pellentesque, odio sit amet facilisis porttitor,Etiam cursus enim laoreet porta rhoncus. '),
(2, 'Story Kedua', 'Etiam cursus enim laoreet porta rhoncus. Duis accumsan vitae velit nec maximus. Mauris ex ligula, semper nec mauris eu, iaculis tempor odio. Vestibulum pellentesque, odio sit amet facilisis porttitor,'),
(7, 'Story Ketiga', 'Duis accumsan vitae velit nec maximus. Mauris ex ligula, semper nec mauris eu, iaculis tempor odio. Vestibulum pellentesque, odio sit amet facilisis porttitor, Vestibulum pellentesque, odio sit amet facilisis porttitor.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Naufal ', 'naufal@gmail.com', '$2y$10$PZbnqcujj5qnxw4WXPTmX.ZI0VplZ7MT9j1XDLmuilqxZj.hFRGjK', '68VCS89Q2kmUomx7bwFmWb2BxzfLYbrzhqmWITM8TsxGTF9u7RUGfMaXEB6a', '2017-01-29 00:20:18', '2017-01-29 01:51:00'),
(2, 'cakra', 'cakra@gmail.com', '123456', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cover`
--
ALTER TABLE `cover`
  ADD PRIMARY KEY (`cover_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`),
  ADD UNIQUE KEY `gallery_url` (`gallery_url`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`map_id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`story_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cover`
--
ALTER TABLE `cover`
  MODIFY `cover_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `map_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `story_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
