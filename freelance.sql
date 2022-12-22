-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 05:36 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freelance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone_number` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `first_name`, `last_name`, `username`, `email`, `gender`, `phone_number`) VALUES
(1, 'Robel', 'Alemu', 'roba', 'r@gmail.com', 'male', 921650867),
(2, 'test', 'test', 'test', 't@gmail.com', 'male', 911605908);

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `f_username` varchar(255) NOT NULL,
  `project_id` int(255) NOT NULL,
  `bid` int(255) NOT NULL,
  `apply_id` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`f_username`, `project_id`, `bid`, `apply_id`, `status`) VALUES
('r4343', 9, 200, 20, 'hired'),
('r4343', 10, 200, 21, 'hired'),
('r4343', 11, 200, 22, 'pending'),
('r4343', 13, 200, 23, 'hired');

-- --------------------------------------------------------

--
-- Table structure for table `blogger`
--

CREATE TABLE `blogger` (
  `blogger_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone_number` int(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogger`
--

INSERT INTO `blogger` (`blogger_id`, `first_name`, `last_name`, `username`, `email`, `gender`, `phone_number`, `address`) VALUES
(1, 'blog', 'blog', 'blog', 'b@gmail.com', 'male', 76867, 'fds');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(2000) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `title`, `body`, `author`, `date`, `image`) VALUES
(20, 'newww', 'kdfhsdkjfhsdklfhaskfhasjkfhkasd', 'blog', '2022-06-16', 'james-wheeler.jpg'),
(21, 'fdsjf', 'fsdhfksdfhdksjfhdjkahfakjdf', '', '2022-06-16', '1732407 - Copy.jpg'),
(22, 'edited', 'this is me trying to see if the update feature works i am so tired pls help me', 'blog', '2022-06-16', 'ER.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `fullname` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `cv_id` int(11) NOT NULL,
  `f_username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`fullname`, `phone`, `email`, `gender`, `dob`, `address`, `education`, `skill`, `description`, `cv_id`, `f_username`) VALUES
('test edit', 911605908, 'yonas@gmail.com', 'male', '2022-05-31', 'new address', 'ba', 'skill, another, two', 'fsdkfjsdklfjs', 2, 'r4343');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `employer_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `bio` varchar(1000) DEFAULT NULL,
  `dob` date NOT NULL,
  `username` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`employer_id`, `first_name`, `last_name`, `bio`, `dob`, `username`, `gender`, `phone_number`, `email`, `address`) VALUES
(13, 'robel ', 'abebe', 'edited bio', '2022-05-30', 'r43', '', 123456, 'yonas@gmail.com', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `freelancer`
--

CREATE TABLE `freelancer` (
  `freelancer_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `bio` varchar(1000) DEFAULT NULL,
  `dob` date NOT NULL,
  `username` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone_number` int(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `professional_title` varchar(255) NOT NULL,
  `education` varchar(1000) NOT NULL,
  `experience` varchar(2000) NOT NULL,
  `skill` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `freelancer`
--

INSERT INTO `freelancer` (`freelancer_id`, `first_name`, `last_name`, `bio`, `dob`, `username`, `gender`, `phone_number`, `email`, `address`, `professional_title`, `education`, `experience`, `skill`) VALUES
(3, 'Dawit', 'Ashebir', 'new bio new', '2000-03-03', 'r4343', 'male', 911605908, 'yonas@gmail.com', 'yekab', 'xd', 'Degree', '2 years', '');

-- --------------------------------------------------------

--
-- Table structure for table `hired`
--

CREATE TABLE `hired` (
  `h_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `e_username` varchar(255) NOT NULL,
  `f_username` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hired`
--

INSERT INTO `hired` (`h_id`, `project_id`, `e_username`, `f_username`, `price`) VALUES
(4, 9, 'r43', 'r4343', 200),
(5, 10, 'r43', 'r4343', 200),
(6, 13, 'r43', 'r4343', 200),
(7, 13, 'r43', 'r4343', 200);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` varchar(255) NOT NULL,
  `outgoing_msg_id` varchar(255) NOT NULL,
  `msg` varchar(2000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`, `date`) VALUES
(3, 'r4343', 'r43', 'sjadasjd', '2022-06-19'),
(4, 'r4343', 'r43', 'sfajk', '2022-06-19'),
(7, 'r4343', 'r43', 'new', '2022-06-19'),
(8, 'r4343', 'r43', 'b', '2022-06-19'),
(11, 'r43', 'r4343', 'hey there', '2022-06-19'),
(12, 'r4343', 'r43', 'hello', '2022-06-19'),
(13, 'r43', 'r4343', 'how are you', '2022-06-19'),
(16, 'r43', 'r4343', 'a', '2022-06-19'),
(21, 'r4343', 'r43', 'b', '2022-06-19'),
(22, 'r43', 'r4343', 'c', '2022-06-19'),
(23, 'support@43', 'r4343', 'testing', '2022-06-19'),
(24, 'r4343', 'support@43', 'working', '2022-06-19'),
(25, 'r4343', 'r43', 'fgf', '2022-06-20'),
(26, 'support@43', 'r43', 'fsdjfd jf', '2022-06-20'),
(27, 'r43', 'r4343', 'test hey', '2022-06-20'),
(28, 'r4343', 'r43', 'hello', '2022-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `category` varchar(255) NOT NULL,
  `e_username` varchar(255) NOT NULL,
  `skill` varchar(1000) NOT NULL,
  `budget` varchar(1000) NOT NULL,
  `posted_on` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `description`, `category`, `e_username`, `skill`, `budget`, `posted_on`, `status`) VALUES
(13, 'test project', 'web dev', 'web dev', 'r43', 'css', '78', '2022-06-14', ''),
(19, 'idk', 'ujkhnm', 'jjhjkk', 'r43', 'php', '86', '2022-06-17', ''),
(20, 'uiwerywu', 'utyut', 'uuiyu', 'r43', 'php', '67', '2022-06-17', ''),
(21, 'date', 'date', 'date', 'r43', 'date', '67', '2022-06-19', ''),
(22, 'mb', 'qr', 'd', 'r43', 'qw', '43', '2022-06-19', 'pending'),
(23, 'dsad', 'sfsdjf sdfjsdf', 'sda', 'r43', 'php', '65', '2022-06-20', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'freelancer'),
(3, 'employer'),
(4, 'blogger'),
(5, 'support');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `payrate` varchar(255) NOT NULL,
  `f_username` varchar(255) NOT NULL,
  `posted_on` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `description`, `category`, `payrate`, `f_username`, `posted_on`) VALUES
(1, 'edited', 'test', 'test', '20 per hour', 'r4343', 0),
(2, 'new new new', 'i will edit any kind of ', 'audio editing', '80 per hour', 'r4343', 0),
(3, 'service details', 'sacsc', 'details', '50 per hour', 'r4343', 0),
(5, 'user', 'test', 'r43', '100 per hour', 'r4343', 0);

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `support_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone_number` int(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`support_id`, `first_name`, `last_name`, `username`, `email`, `gender`, `phone_number`, `address`) VALUES
(10, 'Abel', 'Abebe', 'support@43', 'support@gmail.com', 'male', 912345678, 'Arada sub city');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `role_id`) VALUES
(1, 'Roba', 'r@gmail.com', 'nb', 1),
(2, 'R43', 'r43@gmail.com', '00', 3),
(20, 'r4343', 'r4343@gmail.com', 'pass', 2),
(43, 'blog', 'b@gmail.com', '123456', 4),
(53, 'support@43', 'support@gmail.com', 'support@43', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`apply_id`);

--
-- Indexes for table `blogger`
--
ALTER TABLE `blogger`
  ADD PRIMARY KEY (`blogger_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`cv_id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`employer_id`);

--
-- Indexes for table `freelancer`
--
ALTER TABLE `freelancer`
  ADD PRIMARY KEY (`freelancer_id`);

--
-- Indexes for table `hired`
--
ALTER TABLE `hired`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`support_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `apply_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `blogger`
--
ALTER TABLE `blogger`
  MODIFY `blogger_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `cv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `employer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `freelancer`
--
ALTER TABLE `freelancer`
  MODIFY `freelancer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hired`
--
ALTER TABLE `hired`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `support_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
