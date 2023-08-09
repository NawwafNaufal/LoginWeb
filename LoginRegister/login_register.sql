-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 08:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `NoTelp` int(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `NoTelp`, `password`) VALUES
(1, 'mahfudz', 0, '$2y$10$yoRPkwpdqIrzOSpjI159Y.Be.tJUnUWA29ldn2fsWGkriGFzEkuQG'),
(2, 'naufal', 0, '$2y$10$gln9aEN6iDWYH6jPgv0FNOKI1dx.UBa6fHJRRM59I5UJtiEmyuGBS'),
(3, 'feri', 0, '$2y$10$Cl3O7Qs4SX27uGwcPZvJ2uugM5sNKDYWisHV4jhtSlTW8Ycsjpwj.'),
(4, 'mnn', 0, '$2y$10$gatlipSA.cn114jJwue79./2qG0Uo4TNnuu6KgCp15oE/cyXpBpWW'),
(5, 'naufal@gmail.com', 0, '$2y$10$6JUoTrCNwJRVMizleOUxWOxOscVj0SmIfr8A2zBsChteZCxdB/Esi'),
(6, 'sas', 232323, '$2y$10$8TWt2F8FADscFNhbgBz3ieW6zz98LMWjwRxATg/UzXyyQ.TriMkvK'),
(7, 'nawwaf', 210602043, '$2y$10$2OvHL5Q/GDnOd2QZfoZM1.owdnO07zkUF1dmXpe0EYd5M4AhCa/5u'),
(8, 'sss', 1111, '$2y$10$EscuotsP6iVwyg/YzQfaQ.NJwfB06iK7bU9Aypb8vnRd3ap7ZpkOC'),
(9, 'sndbd', 21323, '$2y$10$.LNsmk08iUuv77le3yjAxO8QPC/noSgb08rU5njGmUTceXzZOwpR2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
