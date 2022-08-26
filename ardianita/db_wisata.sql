-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 05:08 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_wisata`
--

CREATE TABLE `tb_wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(255) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_wisata`
--

INSERT INTO `tb_wisata` (`id_wisata`, `nama_wisata`, `alamat`, `deskripsi`, `foto`) VALUES
(1, 'Kawah Ijen', 'Jawa Timur', 'Kawah Ijen adalah sebuah wisata alam berupa danau asam yang warnanya hijau kebiruan dengan diameter sekitar 700 meter dan luas mencapai 5.466 hektar. Kawah Ijen memiliki kedalaman hingga 200 meter dan volume danau bisa mencapai 36 juta meter kubik. Danau ini terbentuk secara alami akibat letusan Gunung Ijen yang masih aktif hingga akhirnya membentuk lekukan besar dan menjadi sebuah danau.', 'kawah-ijen.jpg'),
(2, 'Air terjun Madakaripur', 'Jawa Timur', 'Air terjun ini tidak hanya terkenal akan keindahannya saja, namun juga karena ada legenda Mahapatih Gadjah Mada. Air terjun Madakaipura ini menjadi salah satu bagian dari Taman Nasional Bromo Tengger Semeru. Air terjun Madakaripura ini mempunyai tinggi 200 meter dan merupakan salah satu air terjun yang tertinggi di Indonesia. Air di air terjun ini tersembunyi di tebing- tebing dan berwarna jernih dan juga terasa dingin yang akan menyegarkan kembali pikiran kita.', 'madakaripura.jpg'),
(3, 'Air terjun Moramo', 'Sulawesi Tenggara', 'Air terjun Moramo terletak di kawasan Suaka Alam, Suaka Margasatwa Tanjung Peropa, Sulawesi Tenggara. Lokasi air terjun ini sekitar 60 kilometer dari kota Kendari. Air terjun ini dikenal karena tempatnya yang unik dan juga indah. Konon, tempat ini juga dikenal sebagi tempat mandinya bidadari. Air terjun Moramo merupakan air terjun yang unik karena berbeda dengan air terjun pada umumnya. Air terjun ini memiliki 7 undakan yang berukuran besar serta puluhan undakan yang berukuran kecil.  Di sekitar air terjun terdapat bebatuan marmer yang semakin menambah keelokan pemandangan air terjun ini. Tidak hanya itu, disekitar air terjun juga dijumpai banyak sekali kupu- kupu yang akan menemani Anda bermain. Dan jika beruntung, Anda juga akan melihat pelangi sebagai biasan cahaya di sekitar air terjun. Maka tidak heran banyak warga yang mempercayai air terjun ini sebagai tempat pemandian bidadari karena keelokannya.', 'moramo.jpg'),
(4, 'Candi Borobudur', 'Kabupaten Magelang, Jawa Tengah', 'Candi Borobudur terletak diatas bukit hijau yang asri di mana Sobat Pesona bisa menyaksikan bukit-bukit hijau lain di sekitarnya. Bangunannya sendiri terdiri atas jutaan blok batu yang dibuat kedalam tiga struktur yang menggambarkan tingkatan alam semesta menurut filsafat Buddha. Bangunan kolosal ini juga dihiasi oleh 2.672 panel relief dan 504 patung Buddha.', 'candi-borobudur.jpg'),
(5, 'Pantai Nihiwatu', 'Sumba Barat, Nusa Tenggara Timur', 'Pantai Nihiwatu berada sekitar 30 km dari Kota Waikabubak, Kabupaten Sumba Barat, Nusa Tenggara Timur. Suasananya sepi dan damai karena letaknya yang jauh dari keramaian kota. Pemandangan yang disuguhkan Pantai Nihiwatu sangatlah mempesona. Pasir bersih, air laut yang jernih, dan suasana damai pasti tidak akan membuat Anda menyesal berkunjung ke tempat ini. Pantai ini dikelola olah resort internasional bernama Resort Nihiwatu, sehingga tidak semua orang bisa masuk ke area wisata.', 'Pantai-Nihiwatu-Sumba.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
