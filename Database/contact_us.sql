-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 08, 2021 at 07:39 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `contact_us`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_tiffin`
--

CREATE TABLE `add_tiffin` (
  `id` bigint(20) NOT NULL auto_increment,
  `tname` varchar(50) NOT NULL,
  `tcategory` varchar(50) NOT NULL,
  `tqty` text NOT NULL,
  `otime` time NOT NULL,
  `tprice` text NOT NULL,
  `timg` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `add_tiffin`
--

INSERT INTO `add_tiffin` (`id`, `tname`, `tcategory`, `tqty`, `otime`, `tprice`, `timg`) VALUES
(1, 'KKKk', 'Nonveg', '3', '05:55:00', '35', '1.jpg'),
(12, 'Khichdi', 'Veg ', '10', '02:00:00', '50', '2.jpeg'),
(13, 'Banner', 'Veg', '5', '02:02:00', '200', '13.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `Admin_Name` varchar(50) NOT NULL,
  `Admin_Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`Admin_Name`, `Admin_Password`) VALUES
('Ajaysingh ', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `cust_login`
--

CREATE TABLE `cust_login` (
  `username` varchar(40) NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust_login`
--

INSERT INTO `cust_login` (`username`, `pass`) VALUES
('staff', 'Rcpstaff'),
('Ajaysingh ', '1234567'),
('Ajaysingh ', '1234567'),
('Dr.D.M.Marathe', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `new_admin`
--

CREATE TABLE `new_admin` (
  `aname` varchar(50) NOT NULL,
  `apss` text NOT NULL,
  `acpass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_admin`
--


-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `pass` text NOT NULL,
  `cpass` text NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` text NOT NULL,
  `mob` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`firstname`, `lastname`, `pass`, `cpass`, `gender`, `email`, `mob`) VALUES
('Durga', 'Patil', '12344321', '1234321', 'f', 'durga23@gmail.com', 9870887698),
('Ajaysingh ', 'Rajput', '1234567', '1234567', 'm', 'ajay67raj@gmail.com', 8177882326),
('Dr. D.M.', 'Marathe', '12345', '12345', 'm', 'dmmarathe@gmail.com', 9865321478),
('Bhavesh', 'Shamra', '1234', '1234', 'm', 'bhavesh23@GMAIL.COM', 9876007866);
