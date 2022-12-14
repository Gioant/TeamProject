-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 23, 2022 at 04:15 PM
-- Server version: 8.0.29
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `subTitle` varchar(150) NOT NULL,
  `text` longtext NOT NULL,
  `picture` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `subTitle`, `text`, `picture`) VALUES
(1, 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat lorem ipsum dolores michelada.', 'about.jpg'),
(2, 'This is a test title for the add about description', 'This is a test sub Title', 'Team C is the best team in the world <3', 'mybrain.png');

-- --------------------------------------------------------

--
-- Table structure for table `chef`
--

DROP TABLE IF EXISTS `chef`;
CREATE TABLE IF NOT EXISTS `chef` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `poste` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chef`
--

INSERT INTO `chef` (`id`, `name`, `lastname`, `avatar`, `poste`, `description`) VALUES
(1, 'Nicholas', 'Tsoukatos', 'nickk.jpg', 'Team Leader', 'Captain of my ship, my team needs me to get them out of the storm'),
(2, 'Anthony', 'Giolti Funes', 'andy.jpg', 'Big Brain Genius', 'Andy graduated University at 8 years old and is now mama birding us newbies in coding'),
(3, 'Jean-Loup', 'Davidson', 'jean-loup.jpg', 'Hardworker', 'He will not take a break, he drink 5 redbulls a day'),
(4, 'Kevin', 'Chan', 'kevinChan.jpg', 'Speed Checker', 'All Kevin does is work everyday, he did not sleep for the past 3 years');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `location` varchar(50) NOT NULL,
  `open` varchar(20) NOT NULL,
  `close` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `location`, `open`, `close`, `email`, `phone`) VALUES
(1, 'A108 Adam Street, New York, NY 535022', '11:00', '23:00', 'info@example.com', '+1 5589 55488 55');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

DROP TABLE IF EXISTS `footer`;
CREATE TABLE IF NOT EXISTS `footer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `picture` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `title` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `picture`, `title`, `address`, `area`, `phone`, `email`) VALUES
(1, 'logo.png', 'Content Changer', '1616 Rene-Levesque Blvd W.', 'Montreal, Quebec H3H 1P8', '123-123-1234', 'info@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` mediumtext NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `description`, `price`, `picture`, `type`) VALUES
(1, 'Lobster Bisque', 'Lorem, deren, trataro, filede, nerada', '5.95', 'lobster-bisque.jpg', 'Starters'),
(2, 'Crab Cake', 'A delicate crab cake served on a toasted roll with lettuce and tartar sauce', '7.95', 'cake.jpg', 'Starters'),
(3, 'Tuscan Grilled', 'Grilled chicken with provolone, artichoke hearts, and roasted red pesto', '9.95', 'tuscan-grilled.jpg', 'Specialty'),
(4, 'Greek Salad', 'Fresh spinach, crisp romaine, tomatoes, and Greek olives', '9.95', 'greek-salad.jpg', 'Salads'),
(5, 'Lobster Roll', 'Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll', '12.95', 'lobster-roll.jpg', 'Specialty'),
(6, 'Bread Barrel', 'Lorem, deren, trataro, filede, nerada', '6.95', 'bread-barrel.jpg', 'Specialty'),
(7, 'Caesar Selections', 'Lorem, deren, trataro, filede, nerada', '8.95', 'caesar.jpg', 'Salads'),
(8, 'Mozzarella Stick', 'Lorem, deren, trataro, filede, nerada', '4.95', 'mozzarella.jpg', 'Starters'),
(9, 'Spinach Salad', 'Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette', '9.95', 'spinach-salad.jpg', 'Salads');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `price` int NOT NULL,
  `picture` varchar(50) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `price`, `picture`, `text`) VALUES
(1, 'Birtday Parties', 189, 'event-birthday.jpg', '1234'),
(2, 'Private Parties', 290, 'event-private.jpg', '1234'),
(3, 'Custom Parties', 99, 'event-custom.jpg', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `username`, `avatar`, `email`, `password`, `level`) VALUES
(1, 'Demo', 'Test', 'DemoUser', 'default.png', 'test123@grr.la', '12345', 1),
(2, 'Andy', 'Demo', 'AndyTest', 'default-color.png', 'andyTest@grr.la', 'test123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `welcome`
--

DROP TABLE IF EXISTS `welcome`;
CREATE TABLE IF NOT EXISTS `welcome` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title1` varchar(50) NOT NULL,
  `title2` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `welcome`
--

INSERT INTO `welcome` (`id`, `title1`, `title2`) VALUES
(1, 'Welcome to Content Manager', 'Changing content for 2 weeks..!');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
