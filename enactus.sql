-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2021 at 11:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enactus`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `section_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `section_name`, `content`) VALUES
(1, 'Vision', 'Create better, more sustainable Egyptian communities.'),
(2, 'Mission', 'Engage the next generation of entrepr- eneurial leaders to use innovation and business principles for the improvement of the Egyptian community'),
(3, 'Goal', 'Train Generation To inovative and green soulutions'),
(4, 'Entrepreneurial', 'Having the perspective to see an opportunity and the talent to create value from that opportunity.'),
(5, 'Action', 'The willingness to do something and the commitment to see it through even when the outcome is not guaranteed.'),
(6, 'Us', 'A group of people who see themselves connected in some important way; individuals that are part of a greater whole.');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `name`) VALUES
(1, 'Computers and Artificial Intelligence');

-- --------------------------------------------------------

--
-- Table structure for table `commity`
--

CREATE TABLE `commity` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `abbreviation` varchar(10) NOT NULL,
  `describtion` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commity`
--

INSERT INTO `commity` (`id`, `name`, `abbreviation`, `describtion`) VALUES
(2, 'IT', 'IT', 'sfsdf dsfsd fsd fsd'),
(3, 'PM', 'PM', 'fdsfsdgsafsdfsd'),
(4, 'HR', 'HR', 'sdfsdf sdsdHR HR'),
(5, 'Presentation', 'Presentati', 'PresentationPresentationPresentation'),
(6, 'Media', 'Media', 'MediaMediaMediaMedia'),
(7, 'ER', 'ER', 'ERERERERERER'),
(8, 'Logistics', 'Logistics', 'LogisticsLogisticsLogisticsLogistics');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `ename` varchar(255) CHARACTER SET utf8 NOT NULL,
  `eyear` varchar(255) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 NOT NULL,
  `descrip` text CHARACTER SET utf8 NOT NULL,
  `link` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `ename`, `eyear`, `img`, `descrip`, `link`) VALUES
(1, 'ENACTUS', '2022', 'images.jpg', 'HJVY,VJ,HNKJNFDVN,JDKVBZCDDKF', 'http://localhost/phpmyadmin/tbl_change.php?db=enactus&table=event'),
(2, 'shine up', '2019', 'icons8-admin-settings-male-100.png', 'kbejgfhfffffffhfhhffhhfhfhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'http://localhost/enactus-gh-pages/add_event.php');

-- --------------------------------------------------------

--
-- Table structure for table `hosters`
--

CREATE TABLE `hosters` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(100) NOT NULL,
  `birthdate` varchar(10) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `commity_name` varchar(50) DEFAULT NULL,
  `season_year` varchar(15) NOT NULL,
  `position_name` varchar(50) NOT NULL,
  `university_name` varchar(50) NOT NULL,
  `college_name` varchar(70) NOT NULL,
  `college_year` varchar(10) NOT NULL,
  `about_hoster` varchar(300) NOT NULL,
  `facebook_link` varchar(150) DEFAULT NULL,
  `twitter_link` varchar(150) DEFAULT NULL,
  `instgram_link` varchar(150) DEFAULT NULL,
  `linkedin_link` varchar(150) DEFAULT NULL,
  `admin_trust` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hosters`
--

INSERT INTO `hosters` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `birthdate`, `mobile`, `photo`, `commity_name`, `season_year`, `position_name`, `university_name`, `college_name`, `college_year`, `about_hoster`, `facebook_link`, `twitter_link`, `instgram_link`, `linkedin_link`, `admin_trust`) VALUES
(4, 'Ahmed', 'Abdel-Fattah', 'Ahmed_Abdo', 'pro.ahmed.abdelfattah@gmail.com', '$2y$10$jDJgVOMat/q/rLWZ3KdPtefchjMjm3bzd9pT9Y1wnLZd..GxIGnEK', '1999-02-07', '01022635745', 'sdfdsfdsf', NULL, '2016/2017', 'President', 'Benha', 'Computers and Artificial Intelligence', '4', 'dsfsdfsdfdsfsd', NULL, NULL, NULL, NULL, 1),
(5, 'Ahmed', 'Abdel-Fattah', 'Ahmed_Abdo2', 'pro.ahmed.abdhgelfattah@gmail.com', '$2y$10$jDJgVOMat/q/rLWZ3KdPtefchjMjm3bzd9pT9Y1wnLZd..GxIGnEK', '1999-02-07', '01022635775', 'sdfdsfdsf', 'Logistics', '2016/2017', 'Member', 'Benha', 'Computers and Artificial Intelligence', '4', 'dsfsdfsdfdsfsd', NULL, NULL, NULL, NULL, 3),
(6, 'Ahmed', 'Abdel-Fattah', 'Ahmed_Abdo3', 'pro.ahmed.abdhgdsdselfattah@gmail.com', '$2y$10$jDJgVOMat/q/rLWZ3KdPtefchjMjm3bzd9pT9Y1wnLZd..GxIGnEK', '1999-02-07', '01022638775', 'sdfdsfdsf', 'HR', '2016/2017', 'Head', 'Benha', 'Computers and Artificial Intelligence', '4', 'dsfsdfsdfdsfsd', NULL, NULL, NULL, NULL, 2),
(8, 'Ahmed', 'Abdel-Fattah', 'Ahmed_Abdo4', 'pro.ahmed.abdshgdsdselfattah@gmail.com', '$2y$10$jDJgVOMat/q/rLWZ3KdPtefchjMjm3bzd9pT9Y1wnLZd..GxIGnEK', '1999-02-07', '01027638775', 'sdfdsfdsf', 'Media', '2016/2017', 'Vice Head', 'Benha', 'Computers and Artificial Intelligence', '4', 'dsfsdfsdfdsfsd', NULL, NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `phone` int(11) NOT NULL,
  `commity` varchar(255) NOT NULL,
  `season` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `collage_name` varchar(255) NOT NULL,
  `collage_year` int(255) NOT NULL,
  `about` varchar(1000) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `insta` varchar(255) NOT NULL,
  `linked_in` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT '0',
  `old_member` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `email`, `birthday`, `phone`, `commity`, `season`, `university`, `collage_name`, `collage_year`, `about`, `facebook`, `twitter`, `insta`, `linked_in`, `img`, `old_member`) VALUES
(4, 'Amr', 'Mohamed', 'amr@gmail.com', '2000-07-15', 1115343143, 'Logistics', '2020 / 2021', 'benha', 'bfcai', 4, 'dkjfhjklsdhfljhsadkljfh sjkldhflkj dhajkfl hsdklj hfklhdkjasfhkljadshfjklhdslkfj asdfasdf sdaf sdaf asdf', 'https://www.facebook.com/groups/505032686615017/permalink/1168971586887787/', 'https://www.facebook.com/groups/505032686615017/permalink/1168971586887787/', 'https://www.facebook.com/groups/505032686615017/permalink/1168971586887787/', 'https://www.facebook.com/groups/505032686615017/permalink/1168971586887787/', '263868_', 0),
(15, 'Amr', 'Mohamedasd', 'amr@gmail.com123', '2021-07-14', 2147483647, 'ER', '2013 / 2014', 'benha', 'bfcai', 2, 'asdfad', 'https://www.facebook.com/groups/505032686615017/permalink/1168971586887787/', 'https://www.facebook.com/groups/505032686615017/permalink/1168971586887787/', 'https://www.facebook.com/groups/505032686615017/permalink/1168971586887787/', 'https://www.facebook.com/groups/505032686615017/permalink/1168971586887787/', '199347_client.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `name`) VALUES
(5, 'Head'),
(4, 'IT Manager'),
(7, 'Member'),
(1, 'President'),
(3, 'Project Director'),
(6, 'Vice Head'),
(2, 'Vice President');

-- --------------------------------------------------------

--
-- Table structure for table `season`
--

CREATE TABLE `season` (
  `id` int(11) NOT NULL,
  `year` varchar(15) NOT NULL,
  `active_season` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `season`
--

INSERT INTO `season` (`id`, `year`, `active_season`) VALUES
(1, '2016/2017', 0);

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`id`, `name`) VALUES
(1, 'Benha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `commity`
--
ALTER TABLE `commity`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `abbreviation` (`abbreviation`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `season`
--
ALTER TABLE `season`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`year`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `commity`
--
ALTER TABLE `commity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `season`
--
ALTER TABLE `season`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
