-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 28, 2017 at 06:38 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gamecentre`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `Login_Id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Login_Id`, `password`) VALUES
('prasad', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `game_review`
--

CREATE TABLE IF NOT EXISTS `game_review` (
  `User_Name` varchar(20) NOT NULL,
  `Game_Name` varchar(50) NOT NULL,
  `Game_Genre` varchar(50) NOT NULL,
  `Rating` varchar(20) NOT NULL,
  `hplay` varchar(20) NOT NULL,
  `system_prefer` varchar(40) NOT NULL,
  `Agegrp` varchar(20) NOT NULL,
  `influence` varchar(10) NOT NULL,
  `Like` text NOT NULL,
  `Dislike` text NOT NULL,
  `Suggestion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game_review`
--

INSERT INTO `game_review` (`User_Name`, `Game_Name`, `Game_Genre`, `Rating`, `hplay`, `system_prefer`, `Agegrp`, `influence`, `Like`, `Dislike`, `Suggestion`) VALUES
('admin', 'Devil May cry 3d', 'Action', '4 to 7', '7 to 10', 'PC', '5 to 10', 'Yes', 'Grahpics', 'Sound', 'Something better should be der'),
('admin', 'Devil May cry 3d', 'Action', '4 to 7', '7 to 10', 'PC', '5 to 10', 'Yes', 'erewr', 'erewr', 'werewr'),
('admin', 'fifa', 'sports', '4 to 7', '7 to 10', 'PC', '5 to 10', 'Yes', 'graphics', 'der is football in d game', 'gv me d ownership'),
('admin', 'Devil May cry 3d', 'Action', '4 to 7', '7 to 10', 'PC', '21 to 25', 'yes', 'Grahpics', 'Sound', 'Something better should be der'),
('admin', 'Devil May cry 3d', 'Action', '4 to 7', '7 to 10', 'PS', '5 to 10', 'No', 'erewr', 'erewr', 'werewr'),
('admin', 'fifa', 'sports', '4 to 7', '7 to 10', 'PS', '16 to 20', 'Yes', 'graphics', 'der is football in d game', 'gv me d ownership'),
('admin', 'Devil May cry 3d', 'Action', '4 to 7', '7 to 10', 'PC', '21 to 25', 'Yes', 'Graphics', 'sound', 'increae level'),
('prasad', 'Counter Strike', 'Action', '4 to 7', '12 to 18', 'Desktop', '11 to 15', 'Yes', 'dsfsaf', 'dfdsfdf', 'sfdsfsf'),
('mun', 'Counter Strike', 'Adventure', '4 to 7', '12 to 18', 'Xbox', '5 to 10', 'Yes', 'dfr', 'sdfds', 'dsfsdf'),
('prasad', 'Game of Thrones', 'Strategy', '4 to 7', '12 to 18', 'Laptop', '11 to 15', 'Yes', 'vcbvcxv', 'cxbcvb', 'cvbcvb'),
('prasad', 'Grand Theft Auto', 'Suspense', '4 to 7', '6 to 11', 'Laptop', '16 to 20', 'Yes', 'fxv', 'xcvcx', 'xcvxcv'),
('prasad', 'CrazyMan2', 'Comedy', '8 to 10', '19 to 24', 'Xbox', '11 to 15', 'Yes', 'fbdf', 'dfgd', 'dfgdf'),
('prasad', 'Christmas Carol', 'Puzzle', '8 to 10', '6 to 11', 'Laptop', '5 to 10', 'Yes', 'dfgdf', 'gdfgfdg', 'dfgfd'),
('prasad', 'Golden Wake', 'Quiz', '1 to 4', '12 to 18', 'Laptop', '16 to 20', 'Yes', 'fdg', 'fg', 'fg'),
('malcolm', 'Grand Theft Auto', 'Adventure', '8 to 10', '0 to 5', 'Desktop', '5 to 10', 'Yes', 'Amazing graphics', 'laggy', 'difficulty level increase');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `First_Name` varchar(40) NOT NULL,
  `Last_Name` varchar(40) NOT NULL,
  `Dob` varchar(40) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Email_Id` varchar(40) NOT NULL,
  `Contact_No` varchar(40) NOT NULL,
  `Login_Id` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`First_Name`, `Last_Name`, `Dob`, `Gender`, `Email_Id`, `Contact_No`, `Login_Id`, `Password`) VALUES
('Himat', 'Bhanushali', '5-10', '', 'himat.bhanushali@gmail.com', '09967732153', 'himat', 'admin'),
('Munaf', 'Patel', '5-10', 'Male', 'mpatel@gmail.com', '9892443556', 'munaf', 'patel'),
('Haenon', 'Mendes', '5-10', 'Male', 'gdgdgdg', '5454545', 'haenon', 'mendes'),
('', '', '11-15', '', '', '', '', ''),
('Himat', 'Bhanushali', '11-15', '', 'himat.bhanushali@gmail.com', '', '', ''),
('Himat', 'Bhanushali', '5-10', 'Male', 'himat.bhanushali@gmail.com', '', '', ''),
('Himat', 'Bhanushali', '11-15', 'Male', 'himat.bhanushali@gmail.com', '09967732153', 'killer', 'abc'),
('Himat', 'Bhanushali', '5-10', 'Male', 'himat.bhanushali@gmail.com', '09967732153', 'asd', 'aqw'),
('Kiran ', 'Kewat', '5-10', 'Female', 'kiran.kewat@gmail.com', '9892443556', 'kiran', 'kiran'),
('Munaf', 'Patel', '21-25', 'Male', 'pmunaf123@gmail.com', '6319650041', 'mun', 'mun');
