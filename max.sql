-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2017 at 01:41 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `max`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `filename` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `filename`, `user_id`, `status`) VALUES
(14, '774936.jpg', 18, 0),
(15, '412921.jpg', 21, 0),
(16, '543565.jpg', 18, 0),
(17, '98838.jpg', 21, 0),
(18, '815130.jpg', 21, 0),
(19, '771689.jpg', 21, 1),
(20, '567019.jpg', 18, 0),
(21, '342653.jpg', 18, 0),
(22, '500415.jpg', 18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `note_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `note` varchar(200) NOT NULL,
  `date_posted` date NOT NULL,
  `time_posted` time NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`note_id`, `title`, `note`, `date_posted`, `time_posted`, `user_id`) VALUES
(22, 'hello', 'World\r\nsssss', '2017-08-09', '02:59:07', 18),
(23, 'sdsad', 'asdasdsad', '2017-08-09', '01:51:15', 21);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `school` varchar(200) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `date_posted` date NOT NULL,
  `time_posted` time NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post`, `status`, `school`, `dept`, `date_posted`, `time_posted`, `user_id`) VALUES
(38, 'gwapa ko', 'Public', 'IT', 'UC', '2017-08-09', '08:26:14', 21),
(40, 'This research is all about how to make a manuscript in IT and you are free to use this ', 'Private', 'IT', 'UC', '2017-08-09', '02:49:35', 18),
(42, 'asdsadasd', 'Public', 'IT', 'UC', '2017-08-09', '01:50:45', 21),
(43, 'sdadsadsadsad', 'Public', 'IT', 'UC', '2017-08-09', '01:50:59', 21),
(44, 'sadsadasdsadas', 'Public', 'IT', 'UC', '2017-08-09', '01:51:02', 21),
(45, 'asdsadsad', 'Private', 'IT', 'UC', '2017-08-09', '01:51:05', 21),
(46, 'I LOVE MY BEAUTIFUL GIRLFRIEND SO MUCH ', 'Public', 'IT', 'UC', '2017-08-12', '06:58:57', 18);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(10) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `profession` varchar(200) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `repass` varchar(30) NOT NULL,
  `dateStarted` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `mname`, `lname`, `address`, `birthdate`, `email`, `contact`, `profession`, `username`, `password`, `repass`, `dateStarted`, `status`) VALUES
(18, 'Kim', 'Ponce', 'Mayorga', 'Lawaan Talisay City Cebu Camella homes block 13 lot 5', '1994-11-14', 'mayorgakimik@gmail.com', '09332514781', 'Teacher', 'kimmayorga', 'kimmayorga', 'kimmayorga', '2017-07-31', 1),
(19, 'Kent', 'Ponce', 'Mayorga', 'Lawaan Talisay City Camella Homes block 13 lot 5 Phase 3d upper', '1994-11-14', 'kentGwapo@gmail.com', '09332514781', 'Teacher', 'kentmayorga', 'kentmayorga', 'kentmayorga', '2017-08-06', 1),
(20, 'Ryan Andrew', 'Montez', 'Azura', 'San Fernando', '1990-02-13', 'azura@gmail.com', '09332514781', 'Teacher', 'azuraryan', 'azuraryan', 'azuraryan', '2017-08-06', 1),
(21, 'Gigi Samantha', 'Lacia', 'Yap', 'UNITED STATE OF AMERICA Lugar sa mga gwapa', '1997-08-25', 'samanthayap@gmail.com', '09221334212', 'Teacher', 'samgwapa', 'samgwapa', 'samgwapa', '2017-08-06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `work_id` int(11) NOT NULL,
  `content` varchar(50000) NOT NULL,
  `title` varchar(250) NOT NULL,
  `category` varchar(30) NOT NULL,
  `privacy` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`note_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`work_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `work_id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
