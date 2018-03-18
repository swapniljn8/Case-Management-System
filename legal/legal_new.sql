-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 18, 2018 at 07:06 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `legal_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

DROP TABLE IF EXISTS `cases`;
CREATE TABLE IF NOT EXISTS `cases` (
  `case_year` varchar(100) NOT NULL,
  `case_type` varchar(100) NOT NULL,
  `case_number` varchar(30) NOT NULL,
  `yachikakarta_name` varchar(1000) NOT NULL,
  `versus` varchar(1000) NOT NULL,
  `adhivakta_name` varchar(1000) NOT NULL,
  `adhikari_name` varchar(1000) NOT NULL,
  `prakran_stithi` varchar(10000) NOT NULL,
  `latest_prakran_date` varchar(100) NOT NULL,
  `javabdawa_date` varchar(20) NOT NULL,
  `anya_jankari` varchar(100) NOT NULL,
  `case_status` varchar(100) NOT NULL,
  `nirnay_date` varchar(100) NOT NULL,
  `favour` varchar(100) NOT NULL,
  `compliance_period` int(100) NOT NULL,
  `compliance_from_date` varchar(100) NOT NULL,
  `compliance_against_dept` varchar(1000) NOT NULL,
  `appeal` varchar(100) NOT NULL,
  PRIMARY KEY (`case_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`case_year`, `case_type`, `case_number`, `yachikakarta_name`, `versus`, `adhivakta_name`, `adhikari_name`, `prakran_stithi`, `latest_prakran_date`, `javabdawa_date`, `anya_jankari`, `case_status`, `nirnay_date`, `favour`, `compliance_period`, `compliance_from_date`, `compliance_against_dept`, `appeal`) VALUES
('2017', 'AA', 'AA/1/2017', 'à¤¶à¥à¤­à¤® à¤œà¥ˆà¤¨', 'à¤¨à¥à¤¯à¤¾à¤¯à¤¾à¤²à¤¯', 'à¤¶à¥à¤°à¥€ à¤®à¤¨à¥‹à¤œ à¤¦à¥à¤µà¤¿à¤µà¥‡à¤¦à¥€', 'à¤°à¤¾à¤œà¥‡à¤‚à¤¦à¥à¤° à¤µà¤°à¥à¤®à¤¾', '01-01-2017 à¤•à¤‚à¤Ÿà¥‡à¤®à¥à¤ªà¥à¤Ÿ&#13;&#10;10-02-2018 à¤ªà¥‡à¤¶à¥€&#13;&#10;08-02-2033 à¤…à¤¸à¥à¤¦à¥à¤«à¥à¤˜à¥à¤œ&#13;&#10;-- &#13;&#10;-- &#13;&#10;19-01-2035 &#13;&#10;06-02-2020 ', '06-02-2020', '04-01-2017', '', 'pending', '--', '', 0, '--', '', ''),
('2017', 'AA', 'AA/2/2017', 'à¤¶à¥à¤­à¤® à¤œà¥ˆà¤¨', 'à¤¨à¥à¤¯à¤¾à¤¯à¤¾à¤²à¤¯', 'à¤¶à¥à¤°à¥€ à¤®à¤¨à¥‹à¤œ à¤¦à¥à¤µà¤¿à¤µà¥‡à¤¦à¥€', 'à¤°à¤¾à¤œà¥‡à¤‚à¤¦à¥à¤° à¤µà¤°à¥à¤®à¤¾', '01-01-2017 à¤•à¤‚à¤Ÿà¥‡à¤®à¥à¤ªà¥à¤Ÿ', '01-01-2017', '01-01-2017', 'à¤¨à¤¿à¤²', 'pending', '', '', 0, '', '', ''),
('2017', 'AA', 'AA/1212/2017', 'à¤¸à¥à¤µà¤ªà¥à¤¨à¤¿à¤² à¤œà¥ˆà¤¨', 'à¤…à¤®à¤¨ à¤ªà¤¤à¥‡à¤²', 'à¤¶à¥à¤°à¥€ à¤…à¤œà¤¯ à¤®à¤¿à¤¶à¥à¤°à¤¾', 'à¤µà¤¿à¤¶à¤¾à¤² à¤•à¥à¤®à¤¾à¤°', '17-01-2018 à¤•à¥ˆà¤¸ à¤šà¤² à¤°à¤¹à¤¾ à¤¹à¥ˆ&#13;&#10;02-01-2019 à¤²à¥à¤œà¥à¤¸à¥à¤¨à¤•à¥à¤¦', '02-01-2019', '03-02-2018', 'à¤•à¤œà¥à¤¸à¥à¤¬à¥à¤¦à¥à¤•', 'pending', '--', '', 0, '--', '', ''),
('2017', 'AA', 'AA/12121/2017', 'à¤¸à¥à¤µà¤ªà¥à¤¨à¤¿', 'à¤µà¤¦à¥à¤«à¤¸', 'à¤¶à¥à¤°à¥€ à¤®à¤¨à¥‹à¤œ à¤¦à¥à¤µà¤¿à¤µà¥‡à¤¦à¥€', 'à¤¸à¥à¤µà¤ªà¥à¤¨à¤¿à¤²', '01-01-2017 à¤¸', '01-01-2017', '02-01-2017', 'à¤¸', 'pending', '', '', 0, '', '', ''),
('2017', 'AA', 'AA/0/2017', 'à¤¸à¥à¤µà¤ªà¥à¤¨à¤¿à¤² à¤œà¥ˆà¤¨', 'à¤…à¤®à¤¨ à¤ªà¤¤à¥‡à¤²', 'à¤¶à¥à¤°à¥€ à¤®à¤¨à¥‹à¤œ à¤¦à¥à¤µà¤¿à¤µà¥‡à¤¦à¥€', 'à¤…à¤•à¤¾à¤¶ à¤œà¥ˆà¤¨', '01-01-2017 ', '01-01-2017', '01-01-2017', '', 'pending', '', '', 0, '', '', ''),
('', '', '//', '', '', '', '', '-- ', '--', '--', '', 'pending', '', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin'),
('shubham', 'jain');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
