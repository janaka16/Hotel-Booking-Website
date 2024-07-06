-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 06:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL,
  `user_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `content`, `image`, `date_time`, `user_name`) VALUES
(2, 'Infinity Pool', 'Immerse yourself in the hotel\'s infinity pool which is located just a stone\'s throw away from the sea and feel the absolute relaxation and tranquility.', 'images/a2.jpg', '2023-01-28 17:42:11', 'john12'),
(9, 'Premier Beach View - Stay close to your beach', 'Right from the moment you wake up to the time you for a sleep, this beach house offers spectacular views and sounds only of the waves crashing against the rocks. It all seems magical and dreamy, yet is actually true. ', 'images/b2.jpg', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `username` varchar(25) NOT NULL,
  `checkIn` date NOT NULL,
  `checkOut` date NOT NULL,
  `adult` varchar(50) NOT NULL,
  `children` varchar(50) NOT NULL,
  `roomType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`username`, `checkIn`, `checkOut`, `adult`, `children`, `roomType`) VALUES
('', '2023-02-09', '2023-02-10', '1', '1', '1'),
('', '2023-02-24', '0000-00-00', '1', '1', '1'),
('', '0000-00-00', '0000-00-00', '', '', ''),
('', '0000-00-00', '0000-00-00', '', '', ''),
('', '0000-00-00', '0000-00-00', '', '', ''),
('', '0000-00-00', '0000-00-00', '', '', ''),
('', '0000-00-00', '0000-00-00', '', '', ''),
('', '0000-00-00', '0000-00-00', '', '', ''),
('', '2023-03-02', '2023-03-09', '3', '0', '1'),
('', '2023-03-03', '2023-03-10', '2', '0', '1'),
('', '2023-02-17', '2023-03-11', '3', '2', '1'),
('', '2023-03-08', '2023-03-04', '1', '0', '3'),
('', '2023-03-03', '2023-03-03', '2', '0', '1'),
('', '2023-03-02', '2023-02-28', '1', '0', '1'),
('', '2023-03-02', '2023-02-28', '1', '0', '1'),
('', '2023-02-04', '2023-02-04', '1', '0', '1'),
('', '2023-02-04', '2023-02-04', '1', '0', '1'),
('', '2023-03-03', '2023-03-04', '1', '2', '1'),
('', '2023-03-03', '2023-03-04', '1', '2', '1'),
('', '2023-03-03', '2023-03-04', '1', '2', '1'),
('', '2023-03-03', '2023-03-04', '1', '2', '1'),
('', '2023-03-11', '2023-03-10', '3', '0', '3'),
('', '2023-03-02', '2023-03-10', '1', '0', '1'),
('', '2023-03-09', '2023-03-10', '1', '3', '3'),
('', '2023-03-09', '2023-03-10', '1', '3', '3'),
('', '2023-03-09', '2023-03-10', '1', '3', '3'),
('', '2023-03-09', '2023-03-10', '1', '3', '3'),
('', '2023-04-01', '2023-04-08', '2', '2', '1'),
('', '2023-04-01', '2023-04-08', '2', '2', '1'),
('', '2023-03-03', '2023-03-03', '3', '0', '1'),
('', '2023-03-10', '2023-03-10', '3', '0', '1'),
('', '2023-03-10', '2023-03-10', '3', '0', '1'),
('', '2023-03-10', '2023-03-10', '3', '0', '1'),
('', '2023-03-10', '2023-03-10', '3', '0', '1'),
('', '2023-03-11', '2023-03-11', '2', '0', '1'),
('', '2023-03-11', '2023-03-11', '2', '0', '1'),
('', '2023-03-11', '2023-03-11', '2', '0', '1'),
('', '2023-03-11', '2023-03-11', '2', '0', '1'),
('', '2023-03-11', '2023-04-08', '2', '0', '1'),
('', '2023-03-03', '2023-03-03', '2', '3', '1'),
('', '2023-03-03', '2023-03-03', '2', '3', '1'),
('', '2023-03-03', '2023-03-03', '2', '3', '1'),
('', '2023-03-03', '2023-03-03', '2', '3', '1'),
('', '2023-03-11', '2023-03-11', '2', '2', '1'),
('', '2023-03-11', '2023-03-11', '2', '2', '1'),
('', '2023-03-11', '2023-03-11', '2', '2', '1'),
('', '2023-03-04', '2023-03-10', '2', '2', '1'),
('', '2023-03-10', '2023-03-03', '2', '2', '1'),
('', '0000-00-00', '0000-00-00', '', '', ''),
('', '2023-03-10', '2023-03-11', '2', '2', '2'),
('', '2023-02-18', '2023-02-25', '2', '2', '1'),
('', '2023-02-25', '2023-02-25', '2', '2', '1'),
('', '2023-02-25', '2023-02-25', '2', '2', '1'),
('', '2023-03-10', '2023-02-28', '2', '2', '1'),
('', '2023-03-11', '2023-02-25', '2', '2', '1'),
('', '2023-02-25', '2023-03-03', '1', '0', '1'),
('', '2023-02-25', '2023-03-03', '1', '0', '1'),
('', '2023-02-25', '2023-03-03', '1', '0', '1'),
('', '2023-03-04', '2023-03-10', '2', '2', '3'),
('', '2023-03-10', '2023-02-24', '3', '3', '1'),
('qqqqqqqqqqq', '2023-03-11', '2023-03-11', '1', '0', '3'),
('qqqqqqqqqqq', '2023-07-01', '2023-09-22', '3', '2', '2'),
('qqqqqqqqqqq', '2023-02-04', '2023-03-04', '2', '3', '2'),
('qqqqqqqqqqq', '2023-02-24', '2023-03-10', '2', '2', '1'),
('qqqqqqqqqqq', '2023-02-18', '2023-02-16', '1', '0', '1'),
('qqqqqqqqqqq', '2023-03-03', '2023-03-03', '3', '0', '1'),
('qqqqqqqqqqq', '2023-02-25', '2023-02-04', '1', '0', '1'),
('mmmlsdf', '2023-02-04', '2023-03-03', '2', '0', '1'),
('blah123', '2023-03-30', '2023-04-08', '1', '0', '1'),
('madara16', '2023-03-17', '2023-03-19', '2', '2', '2'),
('ruki16', '2023-03-29', '2023-03-22', '2', '3', '1'),
('Janaka2000', '2023-03-28', '2023-03-31', '2', '3', '2'),
('madu16', '2023-03-25', '2023-03-29', '3', '2', '3'),
('ice16', '2023-03-17', '2023-03-20', '3', '2', '3'),
('doom16', '2023-03-15', '2023-03-18', '3', '3', '3'),
('kanna16', '2023-03-14', '2023-03-17', '3', '2', '3'),
('cyberking', '2023-03-17', '2023-03-22', '2', '3', '3'),
('jk16', '2023-03-16', '2023-03-19', '3', '3', '2');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `blog_id` int(11) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`blog_id`, `user_name`, `comment`, `date_time`) VALUES
(0, '', '								Hey... login and say something!\r\n								', '2023-02-26 06:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `name`, `email`, `message`) VALUES
(1, 'test', 'test@gmail.com', 'test'),
(2, 'KD Perera', 'kdp@gmail.com', 'Great !');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_name` varchar(15) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `userlevel` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `firstname`, `lastname`, `email`, `password`, `userlevel`) VALUES
('1234', 'yoadijs', 'sjfodjis', 'ikeafdnjk@fjd.com', '$2y$10$0rqFSvgu', ''),
('ad123', 'andy', 'day', 'andy@gmail.com', '$2y$10$Zqi7waIk', ''),
('azx', 'mkm', 'ksfdnk', 'ksfejskj@gmail.com', '$2y$10$bf8mVz38', ''),
('blah123', 'afdkn', 'skldfj', 'efkj@gmail.com', '$2y$10$L3U8gqt7', ''),
('boruto16', 'uzumaki', 'boruto', 'boruto@gmail.com', '$2y$10$a3sRu0VM', ''),
('cyberking', 'chathura', 'alwis', 'cyber@gmail.com', '$2y$10$H8gDMF2e3rCpvn1ujutSOu3VMQPwuUDOQa6VwosytTQjFnWTBxRCq', ''),
('doom16', 'Janaka', 'Herath', 'doom@gmail.com', '$2y$10$qc/JTGvTUTU0zDgTdQbKreVkGyZu1k4NzuhMZEdh9JjjdlkKgymPe', ''),
('gaya16', 'gayasha', 'jayaweera', 'hash@gmail.com', '$2y$10$8j0VW6PW', ''),
('gayasha', 'gaya', 'jaya', 'gayasha@gmail.com', '$2y$10$kgG1PMK9', ''),
('ice16', 'Kalna', 'Dineli', 'ice@gmai.com', '$2y$10$6DEemi7v5F5HrcRkQFWah./JLzLHVR8keRWR7ZimXQg9dCO0kvLtC', ''),
('jk16', 'Janaka', 'Herath', 'janaka2000herath@gmail.com', '$2y$10$aNKUoDryaVLn6LOB7nruleiat7uAoBarUqNk/yvyHDlZLGjB.lrIu', ''),
('john12', 'john', 'doe', 'john@gmail.com', '$2y$10$ZmYZUMI/', 'admin'),
('kalpa16', 'kalpa', 'weerasekara', 'kalpa@gmail.com', '$2y$10$mvNDtS3uLs0nLO7vkfTd3uu3rZKtH8yLp19BcC3wNoe4AITYfcw1W', ''),
('kanna16', 'kanana', 'chalith', 'nipunrasanga1994@gmail.com', '$2y$10$zLamzYkwWLz7LaDOEMwF..UgDv8ijexjqEn/vDOzK6Se/fDtDpcY2', ''),
('kdppp', 'yo', 'yo', 'ddd@gmail.com', '$2y$10$XJlMC/1T', ''),
('madara16', 'madara', 'uchiha', 'madara@gmail.com', '$2y$10$VzKsOK0X', ''),
('madu16', 'madhushan', 'janaka', 'sltrexkennel@gmail.com', '$2y$10$sav2K8HGWy/8rcOZqZ0GXeeczpUj40gp9Y1eyBzjlYVZmTaGwILDC', ''),
('max7', 'max', 'doe', 'ma@gmail.com', '$2y$10$BMgNLSNW', 'admin'),
('mew', 'mew', 'mew', '2mew@gmail.com', '$2y$10$fbi8Jnpp', ''),
('mkkk', 'mkm', 'ksfdnk', 'k@fdsfy.com', '$2y$10$iiW.QzJT', ''),
('mkkkcvjnjfvjnfh', 'vgj', '2kf', 'sdf@gmail.com', '$2y$10$u9tVju8O', ''),
('mkkkefdwef', 'sfd', 'sf', 'ssfeseff@gg.com', '$2y$10$PS6JIU5X', ''),
('mmm', 'mm', 'mm', 'mm@m.com', '$2y$10$eGn6ov5Z', ''),
('mmmlsdf', 'fsekdm', 'fksnmjk', 'klsdfm@g.com', '$2y$10$NI3UJR40', ''),
('mmmsdfsfsf', 'afsds', 'sfdsfd', 'sf@gg.com', '$2y$10$oK7Xj5kQ', ''),
('movielover', 'liza', 'gomez', 'liz@yahoo.com', '$2y$10$GG2gNw2S', 'user'),
('new1', 'new1', 'yoyo', 'k@y.com', '$2y$10$OFw.i0L1', ''),
('new12', 'yoyo', 'yoyo', 'yoyo@gmail.com', '$2y$10$.aYe7GoK', ''),
('nipun21', 'nipun', 'rasanga', 'nipun@gmail.com', 'Abcd@123', ''),
('norm7', 'jay', 'perera', 'jay@yahoo.com', '$2y$10$dwkMfw0/', 'user'),
('qqqqqqqqqqq', 'qqq', 'qqq', 'sdffs@gmail.com', '$2y$10$WcJree9e', ''),
('ruki16', 'rukshan', 'weera', 'ruki@gmail.com', '$2y$10$EuPP0.0q', ''),
('super2', 'seline', 'ranasinghe', 'seline@gmailc.com', '$2y$10$CHHlZ9GO', 'user'),
('sweetapple', 'helen', 'brown', 'hel@gmail.com', '$2y$10$8KCTg34t', 'user'),
('test', 'test', 'test', 'test@gmail.com', '$2y$10$nxC6B0X3', 'user'),
('xdvkjfishef', 'sdnvk', 'KSD', 'DVKVNSD@GMAIL.com', '$2y$10$fbBXLABf', ''),
('yoyo', 'kdj', 'jdfkl', 'dsnj@jdfkslj.com', '$2y$10$D.t62zPu', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`blog_id`,`user_name`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
