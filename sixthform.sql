-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2018 at 10:28 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sixthform`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffid` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `firstname`, `lastname`, `subject`, `category`, `password`) VALUES
('001', 'malachi', 'egbugha', 'maths', 'academic', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentid` varchar(10000) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstcourse` varchar(100) NOT NULL,
  `secondcourse` varchar(100) NOT NULL,
  `thirdcourse` varchar(100) NOT NULL,
  `fourthcourse` varchar(100) NOT NULL,
  `firstscore` int(100) NOT NULL,
  `secondscore` int(100) NOT NULL,
  `thirdscore` int(100) NOT NULL,
  `fourthscore` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `hos` varchar(100) NOT NULL,
  `pin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentid`, `firstname`, `lastname`, `firstcourse`, `secondcourse`, `thirdcourse`, `fourthcourse`, `firstscore`, `secondscore`, `thirdscore`, `fourthscore`, `type`, `session`, `semester`, `comment`, `hos`, `pin`) VALUES
('001', 'Nzekwe ', 'Chidiogo', '0', 'Biology', 'Chemistry', 'Physics', 82, 65, 82, 75, 'CIE Result Information', '2018', 'First Semster', 'good', '', '123456'),
('malachi', 'anselem', 'egbugha', '0', 'maths', 'chemistry', 'physics', 40, 50, 70, 80, 'jfnbvfdnb', 'vfjfvjd', 'bvjdb', 'vdjvb', 'bfvhjfdvhj', 'chidi');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'malachi', 'malachi.egbugha@yahoo.com', 'chidi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
