-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2025 at 08:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absu-marketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `title` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `title`, `category`, `description`, `price`, `image`, `created_at`) VALUES
(1, 1, 'shoes', 'Clothing & Fashion', '0', 2000, 'slazzer-edit-image.png', '2025-03-10 04:59:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `phone`, `password`, `date`) VALUES
(1, 'Emmanuel Chimaobi', 'Bobby', 'bobby0brown@gmail.com', '08082958171', '$2y$10$qXMgM/1.ZGd5TAyFltK1rOQBZO0jZX7GVqSgnXrlWBaLXajWUF6lG', '2025-02-24 14:11:29.284262'),
(28, 'Rejoice Aguegbo', 'Nicole', 'aguerejoice@gmail.com', '2147483647', '$2y$10$oHZw8FrSVRSGNg9H7d/hf.Lo2.2KT8V.h409gjqmarCaaylZNq1tS', '2025-02-24 14:43:13.958640'),
(29, 'Emmanuel Chimaobi', '12', 'bobbybrown@gmail.com', '2147483647', '$2y$10$0KpAjpINtIC4TfezS11H8ONjgLyKFprCWQOq5MJZF1c7659gZaK9.', '2025-02-26 10:41:44.706263'),
(30, 'Emmanuel Chimaobi', '123', 'bobbybrown@gmail.com', '2147483647', '$2y$10$j9vNXo8eGn7S7rUJD6Ud0OoXOtbTbkGbpDkjTFJyj/JQ1mRk6XRPC', '2025-02-26 10:42:46.120214'),
(31, 'emmanuel', 'emma', 'emma@gmail.com', '08082958171', '$2y$10$kluzOlth2T5LId8Wc11pbeY60YZmw.GvA0CCWBHuw3jq5YCCf81L.', '2025-02-27 14:20:14.702033'),
(32, '123', '121   12', '12@gmi.com', '12', '$2y$10$4YB.ZaXeOcwECadk7lhAgO3MMQ7rHcjLRGp9wAoTFnt7tZwEUCGsa', '2025-03-08 02:50:34.635747'),
(33, '123', '123   456   789', '123@gmi.com', '123', '$2y$10$oiVFH.5YtxWHh48eQAzshOrnoNO5lSRe3PRPeZwLY/QgqpqrEGOO6', '2025-03-08 03:00:30.913213'),
(34, '1232', '12mm', '12mmm@gmi.com', '123', '$2y$10$OcWACN3LUQ7lj8TDch26j.mAev6qOrY5NjBEWxd9X8Mx71TGBNcnu', '2025-03-08 03:03:04.685822'),
(35, '123', '123mmmmp', '1mmooo23@gmi.com', '123', '$2y$10$Pe9S/iVeisfQu09tuShEteerTXkwl1mdU2dtIy2U4cdF8nfKfqW62', '2025-03-08 03:04:42.211250'),
(36, 'me', 'mmewmwemm', 'mmmme@gmmi.com', '123', '$2y$10$CeQszJGG2NhnAnvjOWXcreEJiuzPEIsLRoMLGr36nxuhdVdtKctZq', '2025-03-08 03:08:54.641711'),
(37, '123', '12312', '12313@gmi.com', '89939', '$2y$10$8xMJMaXyyFg/wOb1fSc7dOvviS3mEC2dtcgt.zHPybIJ13.BwIfJm', '2025-03-08 03:15:06.536972'),
(38, '123', '13243', '31312@gmi.com', '2131', '$2y$10$lZ3186rgkOjbPRo8s.c9FOTHdq7gpC1JL7IUqCsHhjJOw/jgSMmM2', '2025-03-08 03:15:52.487710'),
(39, 'bobb', 'qbbweei', 'iwwwi@gmi.com', '222', '$2y$10$D9Sis/8NW/n2CuNC7Lr60.NgkWTBlc7WGXfEFnGo4PA8Ca1mMB2Je', '2025-03-08 03:17:24.457705'),
(40, 'bobbt', 'biewiwei', 'bbewbewei@gmi.com', '1213', '$2y$10$xvmlkNccVJh/WZNNgO5c9O/JVJLof/oDgE.3hT/BEcQ28KiC.Atf.', '2025-03-08 03:18:40.263776'),
(41, 'bobby', 'Nicole mmmmmm', 'bobb@gmi.com', '123', '$2y$10$CWcsUAG/ouneXkc1YPX8mepN/DFJTZodW8ptEGN/4aKn2aXb8/hfu', '2025-03-08 03:51:28.023439'),
(42, 'bobbyr   mmememew', 'bobbbby', 'bobbi@gmi.com', '123', '$2y$10$C3ay0Yi.4TCh6Sdk8RgQceDbJDKfR73JQqQeKrTYTJ9CHTBpV5Soy', '2025-03-08 04:05:45.345228'),
(43, 'mmimm', 'mimimimi', 'bobbiiti@gmi.com', '1234', '$2y$10$TbtbY7Hf4Mr4MGq8sm5DsO//YJo1szrikXp73JQWqmp0Kc.lhQpjW', '2025-03-08 04:07:23.164543'),
(44, '1231', '1231123', '1231232@gmi.com', '12332', '$2y$10$FwgfozCNNNsLvL2peylF0uBE3YT7p4WkVSmfPqGswQUVUIxs0JRm2', '2025-03-08 04:10:17.368349'),
(45, '12312312', '1231231', '1231212@gmi.com', '1232312', '$2y$10$By3HaObs/bmXgL9dZIkmde8iCPJ3pJwitCA9e.T0H/3TITMP.WPwW', '2025-03-08 04:22:05.337186'),
(46, '1242112214', '142142412', '1241224214@gmi.com', '12421142444', '$2y$10$/tcTPQccFWsrIBDFtuRVOuTJ8mLP1WFy1KY7RlxSXZRqdd9eGmUBC', '2025-03-08 04:22:58.812424'),
(47, '142iiiii', 'iii24iuy4i14u', 'iuo4uou1oou@gmi.com', '777777', '$2y$10$.ez2skW/hTaeQDS4NCqpI.mjjhCHAJ4i/vl4/HZswkyQQyDGY29K2', '2025-03-08 04:25:54.301279'),
(48, '1233213123 123213123', '21312321321122222222211', '21321312@gmi.com', '12321321312', '$2y$10$hxa8OyFGzGQCvRKjr9ahN.FKXFWAIDu7Be32tO2jqIEu3tSmIQ45W', '2025-03-08 04:29:28.964372'),
(49, '121', '12133212321', '12312123@gmi.com', '13wqrererwe', '$2y$10$88lrOhxLuRwU9.tKtGr44.9CG8BbtPY6qYQb.hKOkFb.CBNK1MxYm', '2025-03-08 04:43:59.572014'),
(50, 'emmnuechimobi', '13bobbyb', '1232312@gmi.com', '1234567899e', '$2y$10$g4yqetjRcgOAy2Q1utg0eO7JvfbXFIrUeFvZ0zrAJOTekDDcI2MK6', '2025-03-08 05:09:27.727498'),
(51, 'emmwnuw chu', 'qeqeq@gm', 'qwqw@gmi.com', '13331232333', '$2y$10$uGkPmtiOJcFLzJs98rmPxe5fB4w6Re0P5Rk8IFi1wkdTs68paXfhK', '2025-03-08 05:15:31.823742'),
(52, 'Emm', 'mm', 'nonon@GMI.com', '12321390808', '$2y$10$37ae6fGEcSGobh/VTqXx6eHWACEDZZ61ZzlZsmQtozamhlMVScqx2', '2025-03-08 05:39:07.646094'),
(53, 'Emmanuel Chimaobi', 'bobby001', 'bobby0brown101@gmail.com', '08082958171', '$2y$10$4VqK08gwZGcoPmcP.lad0OAVFL1Qo9NaedctWWxBPUSzHEbi/Cznu', '2025-03-08 06:03:30.281699'),
(54, 'hope', 'hope', 'hope@gmail.com', '12345678901', '$2y$10$TcXiL6NSQ/Vv5tJlLl4uFOP6a0InmdOPbXTo.aAENs8U3lcsX/1re', '2025-03-08 06:13:24.409110'),
(55, 'rerwerw', 'ewrwer', 'eerwerw@gm.com', '12311231213', '$2y$10$g7RUCET6movvSDzfmIz0kekmbCt32tsO9ahjP3RF.Axj3JJgW16SW', '2025-03-08 06:21:58.589821'),
(56, 'bobby', 'min', 'min@gm.com', '08082958171', '$2y$10$j6dbl2KWNO5zSRL1mQdVGeVnuf.rKjsxlkOkL41k7K1fW0DvWl12G', '2025-03-08 06:26:22.243098');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
