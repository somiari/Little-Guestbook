-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2017 at 06:04 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guestbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic`
--

CREATE TABLE `basic` (
  `ID` int(11) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basic`
--

INSERT INTO `basic` (`ID`, `Name`, `Message`, `Date`) VALUES
(1, 'Somiari Lucky', 'It works!', '2017-07-18 13:58:01'),
(2, 'Sanjay Gupta', 'This is the text area and this is text in the text area. ', '2017-07-18 15:20:42'),
(3, 'Michael Curtis', 'This textarea can not sing, can it?', '2017-07-18 15:21:12'),
(4, 'Longjohn Bernard', 'It\'s a pretty textarea!', '2017-07-23 22:34:20'),
(5, 'Anthony Enahoro', 'This has got to be a textarea. It takes text, doesn\'t it?', '2017-07-24 02:05:17'),
(6, 'Bassey Effiong', 'Just because it accepts text doesn\'t make it a textarea.', '2017-07-24 02:14:18'),
(7, 'Peter Perez', 'Hello guys, this is definitely a textarea!', '2017-07-24 10:41:08'),
(8, 'Sampson', 'It looks like a textarea, hence it\'s a textarea.', '2017-07-24 12:39:05'),
(9, 'Mike Tyson', 'Since it can\'t be punched I guess it\'s a textarea.', '2017-07-24 17:01:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic`
--
ALTER TABLE `basic`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic`
--
ALTER TABLE `basic`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
