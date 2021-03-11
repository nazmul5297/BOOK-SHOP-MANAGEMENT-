-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2019 at 05:29 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` int(11) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `bookname`, `catagory`, `author`, `price`) VALUES
(1, 'Theory of C++', 'engineering', 'yead', 250),
(2, 'Fundamental of Physics', 'science', 'Halliday & Resnick', 250),
(3, 'Data Structure', 'engineering', 'Seymour Lispchutz', 350),
(4, 'Introduction of Algorithm', 'engineering', 'Rnald L. Rivest', 360),
(5, 'ISC Phisics', 'science', 'D.K.Banerjee', 260),
(6, 'Supernatural Business', 'bba', 'Wez Hone', 150),
(7, 'Medical Microbiology and Immunology', 'medical', 'Waren Jawetz', 220),
(8, 'Robin Hood', 'story', 'Walt Disney', 250),
(9, 'Fairey Tales', 'story', 'Unknown', 290);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `uid` varchar(255) NOT NULL,
  `bid` varchar(255) NOT NULL,
  `amount` int(68) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`uid`, `bid`, `amount`) VALUES
('yead', 'yead', 1),
('yead', 'yead', 1),
('yead', '0003', 1),
('yead', '0005', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `upass` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `upass`, `address`, `mno`) VALUES
('001', 'zahid', 'yead', 'bashundhara', '01677'),
('002', 'Yead', 'yead', 'Bashundhara', '01677'),
('003', 'nazmul', 'yead', 'dhaka', '01678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
