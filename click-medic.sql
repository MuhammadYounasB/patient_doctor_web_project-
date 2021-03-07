-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 12:18 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `click-medic`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `a_id` int(10) NOT NULL,
  `p_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `diseasename` varchar(50) NOT NULL,
  `pcontact` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`a_id`, `p_id`, `d_id`, `pname`, `dname`, `diseasename`, `pcontact`, `date`, `time`, `message`) VALUES
(19, 31, 31, 'ravi naat', 'Shaan Guru', 'heart problem', '989877978675765', '2020-11-20', '7:30', ' hello');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `d_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `speciality` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `img` varchar(500) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`d_id`, `name`, `email`, `address`, `speciality`, `contact`, `gender`, `description`, `img`, `password`) VALUES
(31, 'Shaan Guru', 'shaan@gmail.com', 'india', 'heart specialist', '0989898977787', ' MALE', 'I am heart specialist and I am very cool', 'pro_image/download (1).jpg', ''),
(37, 'hamza', 'hamzaicp54@gmail.com', 'hjh', 'heart specialist', '098989897778767509', ' female', 'jhjg', 'pro_image/', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `pass`) VALUES
(4, 'CEO hamza', 'ceo@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `contacinfo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `name`, `description`, `img`, `email`, `password`, `gender`, `contacinfo`) VALUES
(31, 'ravi naat', '	hello i am very curisal', 'pro_image/download (3).jpg', 'shaan@gmail.com', '123', 'MALE', '989877978675765'),
(32, 'ravi naat', '	hello', 'pro_image/download (2).jpg', 'shaan@gmail.com', '123', 'MALE', '0989898977787'),
(33, ' Khan', '	Hey', 'pro_image/download (2).jpg', 'khan@gmail.com', '123', 'MALE', '9898779786'),
(34, 'Daas ', '	hey', 'pro_image/download (3).jpg', 'daas@gmail.com', '123', 'MALE', '98987797');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `mdname` varchar(50) NOT NULL,
  `mdimg` varchar(200) NOT NULL,
  `mddescription` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `mdname`, `mdimg`, `mddescription`, `price`) VALUES
(5, 'pain killer', 'pro_image/download (6).jpg', 'This is very nice tablet ', '20$'),
(6, 'stomach medicine ', 'pro_image/download (4).jpg', 'this is very good medicine ', '50$'),
(7, 'head pain killer medicine ', 'pro_image/download (5).jpg', 'this medicine ', '60$');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) NOT NULL,
  `tittle` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `tittle`, `description`, `img`) VALUES
(4, ' Emergency  Calls for Doctors and nurseses', '  In this service our doctor are waiting for call of our patients. and funny doctor                 ', 'pro_image/'),
(5, 'Emergency call', 'In this service we provide the best person to received your call', 'pro_image/'),
(6, 'Suportive doctors', 'In this services we provide very supportive doctor ', 'pro_image/'),
(7, 'A very good environment', 'you feel a nice  environment and you will enjoyed.', 'pro_image/');

-- --------------------------------------------------------

--
-- Table structure for table `user_contact`
--

CREATE TABLE `user_contact` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_contact`
--

INSERT INTO `user_contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(2, 'ravi naat', 'hamzaicp54@gmail.com', 'I need personal doctor ', 'heloo I need this kind of website I like this website very much .');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `d_id` (`d_id`),
  ADD KEY `p_id` (`p_id`) USING BTREE;

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_contact`
--
ALTER TABLE `user_contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `d_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_contact`
--
ALTER TABLE `user_contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `patient` (`p_id`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`d_id`) REFERENCES `doctor` (`d_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
