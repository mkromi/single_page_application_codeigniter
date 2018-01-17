-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 17, 2018 at 05:38 AM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spa`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fathers_name` varchar(100) NOT NULL,
  `mothers_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `fathers_name`, `mothers_name`) VALUES
(1, 'mr. someone', 'someone\'s father', 'someone\'s mother'),
(2, 'mr. another one', 'another one\' father', 'another one\'s mother'),
(3, 'mr. someone', 'someone\'s father', 'someone\'s mother'),
(4, 'mr. another one', 'another one\' father', 'another one\'s mother'),
(5, 'mr. someone', 'someone\'s father', 'someone\'s mother'),
(6, 'mr. another one', 'another one\' father', 'another one\'s mother'),
(7, 'mr. someone', 'someone\'s father', 'someone\'s mother'),
(8, 'mr. another one', 'another one\' father', 'another one\'s mother'),
(9, 'mr. someone', 'someone\'s father', 'someone\'s mother'),
(10, 'mr. another one', 'another one\' father', 'another one\'s mother'),
(11, 'mr. someone', 'someone\'s father', 'someone\'s mother'),
(12, 'mr. another one', 'another one\' father', 'another one\'s mother'),
(13, 'mr. someone', 'someone\'s father', 'someone\'s mother'),
(14, 'mr. another one', 'another one\' father', 'another one\'s mother'),
(15, 'mr. someone', 'someone\'s father', 'someone\'s mother'),
(16, 'mr. another one', 'another one\' father', 'another one\'s mother'),
(17, 'mr. someone', 'someone\'s father', 'someone\'s mother'),
(18, 'mr. another one', 'another one\' father', 'another one\'s mother'),
(19, 'mr. someone', 'someone\'s father', 'someone\'s mother'),
(20, 'mr. another one', 'another one\' father', 'another one\'s mother'),
(21, 'mr. someone', 'someone\'s father', 'someone\'s mother'),
(22, 'mr. another one', 'another one\' father', 'another one\'s mother'),
(23, 'mr. someone', 'someone\'s father', 'someone\'s mother'),
(24, 'mr. another one', 'another one\' father', 'another one\'s mother'),
(25, 'mr. someone', 'someone\'s father', 'someone\'s mother'),
(26, 'mr. another one', 'another one\' father', 'another one\'s mother'),
(27, 'mr. someone', 'someone\'s father', 'someone\'s mother'),
(28, 'mr. another one', 'another one\' father', 'another one\'s mother'),
(29, 'mr. someone', 'someone\'s father', 'someone\'s mother'),
(30, 'mr. another one', 'another one\' father', 'another one\'s mother'),
(31, 'mr. someone', 'someone\'s father', 'someone\'s mother'),
(32, 'mr. another one', 'another one\' father', 'another one\'s mother');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
