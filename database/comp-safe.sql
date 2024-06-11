-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2024 at 07:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serviceit`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID_CATEGORY` smallint(6) NOT NULL,
  `NAMA_CATEGORY` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID_CATEGORY`, `NAMA_CATEGORY`) VALUES
(1, 'Laptop'),
(2, 'PC Desktop'),
(3, 'Gadget');

-- --------------------------------------------------------

--
-- Table structure for table `mechanic`
--

CREATE TABLE `mechanic` (
  `ID_MECHANIC` int(11) NOT NULL,
  `NAMA_MECHANIC` varchar(255) NOT NULL,
  `KONTAK_MECHANIC` varchar(255) NOT NULL,
  `ID_SPECIALIST` smallint(6) DEFAULT NULL,
  `NOTE` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mechanic`
--

INSERT INTO `mechanic` (`ID_MECHANIC`, `NAMA_MECHANIC`, `KONTAK_MECHANIC`, `ID_SPECIALIST`, `NOTE`) VALUES
(1, 'John Doe', '+62 812-3456-7890', NULL, NULL),
(2, 'Jane Smith', '+62 878-6543-2109', NULL, NULL),
(3, 'Bob Johnson', '+62 813-1234-5678', NULL, NULL),
(4, 'Alice Williams', '+62 899-8887-7776', NULL, NULL),
(5, 'Charlie Brown', '+62 811-2223-3344', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `review` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `review`) VALUES
(2, 1, 'mewmewewe');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `ID_SERVICE` int(11) NOT NULL,
  `NAMA_PELANGGAN` varchar(255) NOT NULL,
  `KONTAK_PELANGGAN` varchar(255) NOT NULL,
  `MERK_DEVICE` varchar(100) NOT NULL,
  `STATUS_SERVICE` varchar(20) NOT NULL,
  `DESKRIPSI` varchar(255) NOT NULL,
  `ID_MECHANIC` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`ID_SERVICE`, `NAMA_PELANGGAN`, `KONTAK_PELANGGAN`, `MERK_DEVICE`, `STATUS_SERVICE`, `DESKRIPSI`, `ID_MECHANIC`) VALUES
(1, 'Eva Rodriguez', '+62 822-5555-6666', 'Laptop ASUS ROG', 'Selesai', 'Charging problem', 1),
(2, 'Ahmad Malik', '+62 877-9876-5432', 'Printer EPSON', 'Selesai', 'Focus calibration', 2),
(3, 'Sophie Chen', '+62 888-1111-2222', 'Laptop HP', 'On Progress', 'No sound issue', 3),
(4, 'Muhammad Ali', '+62 899-3333-4444', 'Laptop Acer', 'Selesai', 'Display glitch', 1),
(5, 'Aisha Gupta', '+62 811-7777-8888', 'Macbook Air M1', 'On Progress', 'Connection stability', 4);

-- --------------------------------------------------------

--
-- Table structure for table `specialist`
--

CREATE TABLE `specialist` (
  `ID_SPECIALIST` smallint(6) NOT NULL,
  `NAMA_SPECIALIST` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `specialist`
--

INSERT INTO `specialist` (`ID_SPECIALIST`, `NAMA_SPECIALIST`) VALUES
(1, 'Laptop Hardware Specialist'),
(2, 'Desktop Hardware Specialist'),
(3, 'Windows Software Specialist'),
(4, 'Mac Software Specialist'),
(5, 'Linux Software Specialist'),
(6, 'Gadget Specialist');

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

CREATE TABLE `supply` (
  `ID_BARANG` int(11) NOT NULL,
  `NAMA_SUPPLY` varchar(255) NOT NULL,
  `STOK_SUPPLY` int(11) NOT NULL,
  `HARGA_SUPPLY` int(11) NOT NULL,
  `ID_CATEGORY` smallint(6) DEFAULT NULL,
  `GAMBAR_SUPPLY` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supply`
--

INSERT INTO `supply` (`ID_BARANG`, `NAMA_SUPPLY`, `STOK_SUPPLY`, `HARGA_SUPPLY`, `ID_CATEGORY`, `GAMBAR_SUPPLY`) VALUES
(1, 'Keyboard', 50, 250000, 2, 'https://img.freepik.com/free-photo/top-view-keyboard-mouse-arrangement_23-2149386333.jpg?w=740&t=st=1702389410~exp=1702390010~hmac=a651569ebdf0b29550c2a0510b9d19fa302729155fe67a13c696d2dd0cfd3e68'),
(3, 'Monitor', 10, 1500000, 2, 'https://img.freepik.com/free-psd/helmet-mock-up_1310-159.jpg?w=740&t=st=1702389981~exp=1702390581~hmac=65eceaa6c7b90b48fbc3f66433de2191921dfe9daa829f16a0927c24ce3e4779'),
(4, 'Printer', 10, 800000, 3, 'https://img.freepik.com/free-photo/printer-with-white-sheets_1232-570.jpg?w=740&t=st=1702391005~exp=1702391605~hmac=ee2c85f1b158db317897a9888d683ba3044f2ef83d460e57a4c6d7f7920a4de5'),
(5, 'Headset', 40, 30000, 3, 'https://img.freepik.com/free-vector/wireless-headphones-set_1284-20423.jpg?w=740&t=st=1702390094~exp=1702390694~hmac=d010d454ffdce568c0b4d796d52e0896086cdb71e275aa850dca4273f460086a'),
(8, 'Screen Protector', 20, 100000, 1, 'https://m.media-amazon.com/images/I/61kv-i0Dv6L._AC_UF894,1000_QL80_.jpg'),
(9, 'Keyboard Skin Cover', 30, 80000, 1, 'https://images.hindustantimes.com/img/2022/02/21/1600x900/keyboard_protector_skin_cover_1645448069841_1645448084625.jpg'),
(10, 'Battery', 40, 750000, 1, 'https://id-media.apjonlinecdn.com/wysiwyg/blog/laptop-battery.jpg'),
(11, 'Tempered Glass', 50, 60000, 3, 'https://cdn.topsellbelanja.com/wp-content/uploads/2022/10/4-Jenis-Tempered-Glass-HP-Wajib-Tahu-Sebelum-Membeli-1536x768-1.webp'),
(12, 'Case', 30, 100000, 3, 'https://asset-2.tstatic.net/shopping/foto/bank/images/melepas-case-hp.jpg'),
(13, 'Power Bank', 20, 250000, 3, 'https://cdn.idntimes.com/content-images/community/2019/03/portable-chargers-update-1-3b14251a75207b1c09d7ca6209bdf0e3.jpg'),
(14, 'Phone Holder', 30, 75000, 3, 'https://hips.hearstapps.com/hmg-prod/images/ghi-carphoneholders-1671783491.png'),
(15, 'SSD 512GB', 30, 450000, 1, 'https://cdn11.bigcommerce.com/s-qfzamxn9kz/images/stencil/1280x1280/products/336108/383295/512GB-2282-SATA-MICRON__64748.1565196924.jpg?c=2'),
(16, 'RAM 4GB DDR4', 75, 400000, 2, 'https://i.pinimg.com/564x/99/83/ef/9983efee6324953d15c4c80fcbc10c8d.jpg'),
(17, 'PC Case', 20, 1500000, 2, 'https://storage-asset.msi.com/global/picture/news/2019/case/case-sizes.jpg'),
(18, 'Power Supply', 30, 700000, 2, 'https://caraguna.com/wp-content/uploads/2022/02/power-supply.jpg'),
(19, 'Processor Intel i9', 40, 10000000, 2, 'https://www.cined.com/content/uploads/2017/05/Intel-core-i9.jpg'),
(20, 'Processor AMD Ryzen 9', 30, 700000, 2, 'https://img.4gamers.com.tw/news-image/cb36b6c0-d54a-4150-9588-26179aa08975.jpg'),
(32, 'Earphone', 50, 200000, 3, 'https://img.id.my-best.com/content_section/choice_component/sub_contents/068e8a56693fec9cc1eb75821575c4e4.jpeg?ixlib=rails-4.3.1&q=70&lossless=0&w=690&fit=max&s=45ba0e88eea60fdf165216ce9c011c43'),
(33, 'Earphone', 20, 150000, 3, 'https://asset-2.tstatic.net/shopping/foto/bank/images/earphone-headset.jpg'),
(34, 'Earphone', 30, 150000, 3, 'https://asset-2.tstatic.net/shopping/foto/bank/images/earphone-headset.jpg'),
(36, 'Earphone', 30, 150000, 3, 'https://asset-2.tstatic.net/shopping/foto/bank/images/earphone-headset.jpg'),
(38, 'Earphone', 1, 150000, 3, 'https://asset-2.tstatic.net/shopping/foto/bank/images/earphone-headset.jpg'),
(39, 'Earphone', 20, 1500000, 1, 'https://asset-2.tstatic.net/shopping/foto/bank/images/earphone-headset.jpg'),
(40, 'Earphone', 40, 150000, 1, 'https://asset-2.tstatic.net/shopping/foto/bank/images/earphone-headset.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `ID_TRANSAKSI` int(11) NOT NULL,
  `TOTAL_HARGA` int(11) NOT NULL,
  `ID_SERVICE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`ID_TRANSAKSI`, `TOTAL_HARGA`, `ID_SERVICE`) VALUES
(1, 150000, 1),
(2, 50000, 2),
(3, 100000, 3),
(4, 75000, 4),
(5, 200000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `ROLE` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `USERNAME`, `PASSWORD`, `ROLE`) VALUES
(7, 'Naufal', 'naufalarsa', 'A'),
(8, 'Ryan', 'ryan123', 'U'),
(9, 'Ryan', 'ryan123', 'U'),
(10, 'Hal', 'hal123', 'U'),
(11, 'Arvin', 'arvin123', 'U'),
(12, 'Alam', 'alam123', 'U'),
(13, 'Yusuf', 'yusuf123', 'A'),
(14, 'Ghatfan', 'ghatfan123', 'M'),
(15, 'Zani', 'zani123', 'M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID_CATEGORY`);

--
-- Indexes for table `mechanic`
--
ALTER TABLE `mechanic`
  ADD PRIMARY KEY (`ID_MECHANIC`),
  ADD KEY `ID_SPECIALIST` (`ID_SPECIALIST`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ID_SERVICE`),
  ADD KEY `ID_MECHANIC` (`ID_MECHANIC`);

--
-- Indexes for table `specialist`
--
ALTER TABLE `specialist`
  ADD PRIMARY KEY (`ID_SPECIALIST`);

--
-- Indexes for table `supply`
--
ALTER TABLE `supply`
  ADD PRIMARY KEY (`ID_BARANG`),
  ADD KEY `ID_CATEGORY` (`ID_CATEGORY`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`ID_TRANSAKSI`),
  ADD KEY `ID_SERVICE` (`ID_SERVICE`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID_CATEGORY` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mechanic`
--
ALTER TABLE `mechanic`
  MODIFY `ID_MECHANIC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `ID_SERVICE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `specialist`
--
ALTER TABLE `specialist`
  MODIFY `ID_SPECIALIST` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `supply`
--
ALTER TABLE `supply`
  MODIFY `ID_BARANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `ID_TRANSAKSI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mechanic`
--
ALTER TABLE `mechanic`
  ADD CONSTRAINT `mechanic_ibfk_1` FOREIGN KEY (`ID_SPECIALIST`) REFERENCES `specialist` (`ID_SPECIALIST`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`ID_USER`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`ID_MECHANIC`) REFERENCES `mechanic` (`ID_MECHANIC`);

--
-- Constraints for table `supply`
--
ALTER TABLE `supply`
  ADD CONSTRAINT `supply_ibfk_1` FOREIGN KEY (`ID_CATEGORY`) REFERENCES `category` (`ID_CATEGORY`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`ID_SERVICE`) REFERENCES `service` (`ID_SERVICE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
