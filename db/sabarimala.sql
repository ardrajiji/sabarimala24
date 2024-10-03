-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2019 at 05:31 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sabarimala`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminaccount`
--

CREATE TABLE IF NOT EXISTS `adminaccount` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `account` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `adminaccount`
--

INSERT INTO `adminaccount` (`tid`, `date`, `account`, `amount`) VALUES
(1, '2019-10-06', '23654875216', 125700),
(2, '2019-10-10', '23654875216', 125700),
(3, '2019-10-10', '23654875216', 125700),
(4, '2019-10-17', '23654875216', 125700),
(5, '2019-10-29', '23654875216', 125700),
(6, '2019-10-29', '23654875216', 800);

-- --------------------------------------------------------

--
-- Table structure for table `bookpark`
--

CREATE TABLE IF NOT EXISTS `bookpark` (
  `pid` int(100) NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) NOT NULL,
  `sbook` int(11) NOT NULL,
  `phoneno` int(50) NOT NULL,
  `date` date NOT NULL,
  `vnumber` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `bookpark`
--

INSERT INTO `bookpark` (`pid`, `pname`, `sbook`, `phoneno`, `date`, `vnumber`, `username`, `status`) VALUES
(5, 'Pamba', 1, 2147483647, '2019-10-29', 'kl7865', 'manu', ''),
(6, 'Pamba', 1, 2147483647, '2019-10-22', 'kl8945', 'manu', ''),
(7, 'Pamba', 1, 2147483647, '2019-10-19', 'kl6547', 'manu', ''),
(8, 'Pamba', 1, 2147483647, '2019-10-19', 'kl6547', 'manu', ''),
(9, 'Nilakal', 1, 2147483647, '2019-10-25', 'kl6578', 'manu', 'approved'),
(10, 'Nilakal', 1, 2147483647, '2019-11-13', 'kl8796', 'manu', 'not approved');

-- --------------------------------------------------------

--
-- Table structure for table `darshanam`
--

CREATE TABLE IF NOT EXISTS `darshanam` (
  `class` int(20) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) NOT NULL,
  `amount` int(20) NOT NULL,
  PRIMARY KEY (`class`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `darshanam`
--

INSERT INTO `darshanam` (`class`, `cname`, `amount`) VALUES
(11, 'vip', 5500),
(20, 'first', 100);

-- --------------------------------------------------------

--
-- Table structure for table `darshanambooking`
--

CREATE TABLE IF NOT EXISTS `darshanambooking` (
  `dsid` bigint(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phno` bigint(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `nopersons` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`dsid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `darshanambooking`
--

INSERT INTO `darshanambooking` (`dsid`, `name`, `phno`, `date`, `class`, `nopersons`, `status`) VALUES
(1, 'sarath', 2147483647, '', 'first', '15', '1'),
(2, 'unnikrishnan', 2147483647, '', 'third', '20', '1'),
(4, 'vishnu', 2147483647, '', 'first', '12', '1'),
(6, 'mani', 2147483647, '', 'first', '25', '1'),
(7, 'lakshmipriya', 2147483647, '', 'first', '1', '1'),
(8, 'ram', 2147483647, '', 'first', '2', '1'),
(9, 'chandhran', 2147483647, '', 'first', '2', '1'),
(10, 'mahadevan', 9048857540, '', 'first', '2', '1'),
(11, 'radhika', 8281802858, '', 'first', '1', '1'),
(12, 'sreeram', 6733355656, '', 'first', '5', '1'),
(13, 'akash', 8156967655, '', 'first', '2', '1'),
(14, 'akash', 8156967655, '', 'first', '2', '1'),
(15, 'melvin', 1234567891, '', 'second', '6', '0'),
(16, 'riya', 2147483647, '', 'first', '2', '1'),
(17, 'kukku', 9778665646, '', 'first', '2', '1'),
(18, 'sandra', 8921919991, '', 'first', '2', '1'),
(21, 'ajeena', 9961932344, '2019-03-14T23:59PM', 'first', '10', '0'),
(22, '', 0, '2019-03-14T01:00AM', '', '', '0'),
(23, 'MANHA', 1212121212, '2019-03-09T01:00AM', 'first', '3', '1'),
(24, 'john', 9876543212, 'AM', '3', '3', '0'),
(26, '', 0, 'AM', '', '', '0'),
(34, 'manu', 9632568936, '2019-10-28T11:00AM', 'first', '3', '0'),
(39, 'manu', 9387491627, '2019-10-25T06:28AM', 'first', '2', '0');

-- --------------------------------------------------------

--
-- Table structure for table `darshanam_allot`
--

CREATE TABLE IF NOT EXISTS `darshanam_allot` (
  `qu_alltid` int(20) NOT NULL AUTO_INCREMENT,
  `class` int(20) NOT NULL,
  `regno` int(20) NOT NULL,
  `no_person` int(10) NOT NULL,
  `qdate` date NOT NULL,
  `qstime` time NOT NULL,
  `qetime` time NOT NULL,
  `tot_amount` int(20) NOT NULL,
  PRIMARY KEY (`qu_alltid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `darshanam_allot`
--


-- --------------------------------------------------------

--
-- Table structure for table `lodge`
--

CREATE TABLE IF NOT EXISTS `lodge` (
  `lodgeno` int(20) NOT NULL AUTO_INCREMENT,
  `lodge_name` varchar(30) NOT NULL,
  `location` varchar(20) NOT NULL,
  `type_room` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `number_of_room` int(20) NOT NULL,
  `amount` int(20) NOT NULL,
  `image` varchar(500) NOT NULL,
  `rating` varchar(20) NOT NULL,
  PRIMARY KEY (`lodgeno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `lodge`
--

INSERT INTO `lodge` (`lodgeno`, `lodge_name`, `location`, `type_room`, `type`, `number_of_room`, `amount`, `image`, `rating`) VALUES
(1, 'lakshmi', 'kdr', 'Ac', 'type', 1, 123, '', ''),
(2, 'harivarasanom', 'ijk', 'Non Ac', ' type', 2, 46788, '', ''),
(3, 'devalayam', 'kdr', 'Non Ac', ' type', 2, 5000, '', ''),
(4, 'devalayam', 'kdr', 'Non Ac', ' type', 2, 5000, '', ''),
(5, 'kodugalluramma', 'kodugallur', 'Non Ac', 'type', 1, 500, '', ''),
(6, 'erumeli', 'pamba', 'Ac', ' type', 4, 850, '', ''),
(7, 'sarathi', 'pamba', 'Non Ac', ' type', 4, 800, '', ''),
(8, 'sreeram', 'pathanamthitta', 'Non Ac', 'type', 2, 500, '', ''),
(9, 'sabari', 'pamba', 'Ac', ' type', 8, 800, '', ''),
(10, 'kaveri', 'gavi', 'Ac', 'type', 1, 400, '', ''),
(11, 'hggh', 'hhh', 'Ac', 'type', 5, 2000, '', ''),
(12, 'saravana', 'ernakulam', 'Ac', ' type', 10, 800, 'cute-eiffel-tower-wallpaper-background-wallpapers-other-picture-cute-wallpaper.jpg', '3'),
(13, 'bio', 'kottayam', 'Ac', ' type', 20, 1200, '3500.jpg', '3');

-- --------------------------------------------------------

--
-- Table structure for table `lodgebooking`
--

CREATE TABLE IF NOT EXISTS `lodgebooking` (
  `lid` int(50) NOT NULL AUTO_INCREMENT,
  `nam` varchar(50) NOT NULL,
  `phno` varchar(50) NOT NULL,
  `date1` date NOT NULL,
  `lodgename` varchar(50) NOT NULL,
  `numberofroom` int(50) NOT NULL,
  `noofday` int(50) NOT NULL,
  `rt` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `lodgebooking`
--

INSERT INTO `lodgebooking` (`lid`, `nam`, `phno`, `date1`, `lodgename`, `numberofroom`, `noofday`, `rt`, `type`, `amount`, `status`) VALUES
(1, 'e', '54', '2019-01-09', 'lakshmi', 3, 1, 'rt', '', '', '1'),
(10, 'a', '45', '2019-01-15', 'lakshmi', 2, 2, 'AC', 'single', '', '1'),
(15, 'ramnadh', '2147483647', '2019-01-21', 'lakshmi', 2, 2, 'AC', 'single', '', '1'),
(16, 'ramnadh', '2147483647', '2019-01-21', 'lakshmi', 2, 2, 'AC', 'single', '', '1'),
(17, 'ramnadh', '2147483647', '2019-01-21', 'lakshmi', 2, 2, 'AC', 'single', '', '1'),
(18, 'krish', '2147483647', '2019-01-02', 'devalayam', 1, 1, 'AC', 'single', '', '1'),
(19, 'malu', '9446225063', '2019-01-02', 'devalayam', 2, 1, '', 'single', '', '1'),
(20, 'nisary', '9887665456', '2019-01-01', 'harivarasanom', 1, 1, 'AC', 'single', '', '1'),
(21, 'akash', '9947265597', '2019-11-25', 'sabari', 2, 5, 'AC', 'single', '', '1'),
(22, 'sandra', '8921919991', '2019-12-01', 'sarathi', 2, 2, 'AC', 'single', '', '1'),
(23, 'sandra', '8921919991', '2015-10-31', 'kaveri', 2, 3, 'AC', 'single', '', '1'),
(30, 'athira', '9658745236', '2019-10-17', 'saravana', 2, 2, 'NONAC', 'single', '3200', '0'),
(32, 'manu', '9562183950', '0000-00-00', 'saravana', 2, 2, 'NONAC', 'single', '3200', '0'),
(33, 'manu', '9632568974', '2019-10-09', 'saravana', 1, 1, 'NONAC', 'single', '800', '1');

-- --------------------------------------------------------

--
-- Table structure for table `lodge_booking`
--

CREATE TABLE IF NOT EXISTS `lodge_booking` (
  `bookid` int(20) NOT NULL AUTO_INCREMENT,
  `lodgeno` int(20) NOT NULL,
  `regno` int(20) NOT NULL,
  `Fdate` date NOT NULL,
  `Tdate` date NOT NULL,
  `room_ac` varchar(20) NOT NULL,
  `room_single` varchar(20) NOT NULL,
  `no_room` int(20) NOT NULL,
  `amount` int(20) NOT NULL,
  PRIMARY KEY (`bookid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `lodge_booking`
--


-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `usertype`) VALUES
('admin', 'admin123', 'admin'),
('akash', '123', 'staff'),
('akash ev', '456', 'user'),
('alee', 'alee', 'driver'),
('amal', '1234', 'staff'),
('aneeja', 'aneeja', 'user'),
('appu', 'appu', 'staff'),
('aravind', '234', 'staff'),
('athira', 'athira', 'user'),
('d', '123', 'user'),
('devan', '9048857540', 'staff'),
('e', '12345', 'user'),
('gokul', '1230', 'user'),
('jithin', 'jithin', 'otherstaff'),
('kannan', '2345', 'user'),
('kiran', '', 'staff'),
('kk', '12345', 'user'),
('kukku', '1234', 'user'),
('lachu', '123', 'user'),
('lakshmi', '9048857540', 'staff'),
('malu', 'malu', 'user'),
('manman', '123', 'user'),
('manu', 'manu', 'user'),
('nia', 'nia', 'driver'),
('nisary', '123', 'user'),
('priya', '34568789', 'staff'),
('ram', '123', 'user'),
('riya', 'riya', 'driver'),
('s', '123', 'user'),
('sabarimala', '123', 'user'),
('sandra', '234', 'user'),
('srurthy', 'sruthy', 'staff'),
('sruthy', 'sruthy', 'staff'),
('v', 'w', 'user'),
('varun', '123456', 'staff'),
('vinu', 'vinu', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `otherstaff`
--

CREATE TABLE IF NOT EXISTS `otherstaff` (
  `regno` int(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `place` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phoneno` bigint(50) NOT NULL,
  `aadar` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`regno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `otherstaff`
--

INSERT INTO `otherstaff` (`regno`, `fname`, `lname`, `age`, `gender`, `place`, `email`, `phoneno`, `aadar`, `status`) VALUES
(1, 'Jithin', 'George', 21, 'gender', 'ernakulam', 'jithin@gmail.com', 8563224789, '987654323455', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `otherstaff_allot`
--

CREATE TABLE IF NOT EXISTS `otherstaff_allot` (
  `staff_allotid` int(20) NOT NULL AUTO_INCREMENT,
  `staffname` varchar(20) NOT NULL,
  `shifttype` varchar(30) NOT NULL,
  `date_allot` date NOT NULL,
  PRIMARY KEY (`staff_allotid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `otherstaff_allot`
--

INSERT INTO `otherstaff_allot` (`staff_allotid`, `staffname`, `shifttype`, `date_allot`) VALUES
(1, 'Jithin', 'Night', '2019-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `parking`
--

CREATE TABLE IF NOT EXISTS `parking` (
  `blockid` int(10) NOT NULL AUTO_INCREMENT,
  `block_name` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `slots` varchar(10) NOT NULL,
  PRIMARY KEY (`blockid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `parking`
--

INSERT INTO `parking` (`blockid`, `block_name`, `amount`, `slots`) VALUES
(21, '', 200, '20'),
(22, 'Pamba', 100, '200'),
(23, 'Nilakal', 100, '500');

-- --------------------------------------------------------

--
-- Table structure for table `parkingbooking`
--

CREATE TABLE IF NOT EXISTS `parkingbooking` (
  `pid` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phoneno` int(50) NOT NULL,
  `date` date NOT NULL,
  `vnumber` varchar(100) NOT NULL,
  `vechi_type` varchar(50) NOT NULL,
  `noofdays` int(50) NOT NULL,
  `status` int(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `parkingbooking`
--

INSERT INTO `parkingbooking` (`pid`, `name`, `phoneno`, `date`, `vnumber`, `vechi_type`, `noofdays`, `status`) VALUES
(1, 'vhckjbl', 2147483647, '2019-01-01', '45553', 'tyfuyg', 3, 0),
(3, 'vhckjbl', 2147483647, '2019-01-01', '45553', 'tyfuyg', 3, 0),
(4, 'manu', 2147483647, '2019-01-10', '2222', 'eee', 10, 1),
(5, 'd', 2147483647, '2019-01-03', '32322', 'zdfgxc', 2, 0),
(6, 'w', 2147483647, '2019-01-08', '2147483647', 'fygjh', 5, 0),
(7, 'maheshwaran', 2147483647, '2019-01-03', '554554', 'fygjh', 3, 0),
(8, 'chachu', 2147483647, '2019-01-02', '222', 'cdd', 2, 0),
(9, 'radhika', 2147483647, '2019-01-08', '50001', 'fygjh', 1, 0),
(10, 'radhika', 2147483647, '2018-12-31', '32322', 'zdfgxc', 2, 0),
(11, 'nisary', 2147483647, '2019-01-02', '1001', 'dddd', 1, 0),
(12, 'sandra', 2147483647, '2019-01-01', '111', 'bike', 1, 0),
(13, 'sandra', 2147483647, '2014-12-31', '111', 'car', 3, 0),
(14, 'akash', 2147483647, '2019-12-31', '121', 'car', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `parking_allot`
--

CREATE TABLE IF NOT EXISTS `parking_allot` (
  `parkid` int(20) NOT NULL AUTO_INCREMENT,
  `blockid` int(10) NOT NULL,
  `regno` int(20) NOT NULL,
  `Sdate` date NOT NULL,
  `Edate` date NOT NULL,
  `amount` int(20) NOT NULL,
  PRIMARY KEY (`parkid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `parking_allot`
--


-- --------------------------------------------------------

--
-- Table structure for table `poojabook`
--

CREATE TABLE IF NOT EXISTS `poojabook` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `poojaname` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `poojabook`
--

INSERT INTO `poojabook` (`pid`, `poojaname`, `amount`) VALUES
(1, 'aarathi', 50),
(2, 'ganapathi pooja', 300);

-- --------------------------------------------------------

--
-- Table structure for table `poojabooking`
--

CREATE TABLE IF NOT EXISTS `poojabooking` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `poojaname` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `poojabooking`
--

INSERT INTO `poojabooking` (`pid`, `poojaname`, `amount`, `username`, `status`) VALUES
(1, 'aarathi', 50, 'riya', ''),
(2, 'ganapathi', 300, 'manu', 'approved'),
(3, 'ganapathi', 100, 'manu', 'approved'),
(4, 'ganapathi pooja', 300, 'manu', 'not approved'),
(5, 'ganapathi pooja', 300, 'manu', 'not approved');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `regno` int(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `place` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phoneno` bigint(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `licenceproof` varchar(500) NOT NULL,
  `licencenumber` varchar(50) NOT NULL,
  `vehi_no` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`regno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`regno`, `fname`, `lname`, `age`, `gender`, `place`, `email`, `phoneno`, `username`, `licenceproof`, `licencenumber`, `vehi_no`, `status`) VALUES
(16, 'lakshmi', '', 21, ' gender', 'paravoor', 'vava@gmail.com', 9048857540, '', '', '', '', ''),
(17, 'varun', 'nair', 21, 'gender', 'cgjvsk', 'varun@gmail.com', 98876676765, '', '', '', '', ''),
(18, 'akash', 'ev', 20, 'gender', 'adimali', 'akashev7@gmail.com', 8921919991, '', '', '', '', ''),
(19, 'amal', 'ev', 24, 'gender', 'adimali', 'amalev@gmail.com', 9656945443, '', '', '', '', ''),
(20, 'aravind', 'ns', 21, 'gender', 'kathippara', 'aravindns@12gmail.co', 8921919991, '', '', '', '', ''),
(21, 'gokul', 'George', 25, 'gender', 'bhbh', 'john@gmail.com', 9876543213, '', '', '', '', ''),
(23, 'nia', 'qwe', 21, ' gender', 'ernakulam', 'nia@gmail.com', 8987655433, 'nia', '78395.png', 'kl98663258874', '', 'approved'),
(25, 'fg', 'jkj', 32, ' gender', 'ernakulam', 'hj@gmail.com', 9076544465, '', 'bins-waste-segregation-colour-resized.jpg', 'kl78654323567', '', ''),
(26, 'appu', 'rr', 26, 'gender', 'kottayam', 'appu@gmail.com', 9876543212, 'appu', '8i65B5X5T.jpg', 'kl987645324356', '', 'not approved'),
(27, 'vinu', 'kannan', 33, 'gender', 'ernakulam', 'vinu@gmail.com', 9865235478, '', 'photo-1544620347-c4fd4a3d5957.jpg', '965412258745236', '', ''),
(28, 'kiran', 'rr', 34, 'gender', 'ernakulam', 'kiran@gmail.com', 9874523654, 'kiran', '0773.jpg', '12365487552', '', 'not approved'),
(32, 'riya', 'ww', 45, ' gender', 'ernakulam', 'riya@gmail.com', 9652417852, 'riya', '1M4A0140_-e1505237093477.jpg', '65412354789', 'kl8854', 'approved'),
(33, 'john', 'www', 32, 'gender', 'paravur', 'john@gmail.com', 9878775877, 'john', 'architecture-book-bindings-bookcase-1370298.jpg', '24567898675', 'kl5433', 'approved'),
(34, 'alee', 'dsexg', 45, ' gender', 'fdg', 'alee@gmail.com', 9878775877, 'alee', 'architecture-book-bindings-bookcase-1370298.jpg', '78543212345', 'kl5466', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `shift_details`
--

CREATE TABLE IF NOT EXISTS `shift_details` (
  `shiftid` int(20) NOT NULL AUTO_INCREMENT,
  `Shifttype` varchar(30) NOT NULL,
  `descshift` varchar(20) NOT NULL,
  PRIMARY KEY (`shiftid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `shift_details`
--

INSERT INTO `shift_details` (`shiftid`, `Shifttype`, `descshift`) VALUES
(8, '', '0000-00-00'),
(23, 'mrng', 'fdvycbhia hcsjn'),
(24, 'Night', 'Should Work from 10 ');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `userid` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `account` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmpassword` varchar(50) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`userid`, `name`, `address`, `email`, `phoneno`, `account`, `amount`, `username`, `password`, `confirmpassword`) VALUES
(6, 'riya', 'aa', 'riya@gmail.com', '2147483647', '', -4700, 'riya', '123', '123'),
(9, 'nisary', 'kfhjh', 'l@gmail.com', '2147483647', '', -4700, 'nisary', '123', '123'),
(10, 'vyga', 'vkhb', 'ss@gmail.com', '2147483647', '', -4700, 'aa', '123', '123'),
(12, 'ram', 'fykh', 'ss@gmail.com', '2147483647', '', -4700, 'ram', '123', '123'),
(13, 'kukku', 'eec', 'ss@gmail.com', '9778665646', '', -4700, 'kukku', '1234', '1234'),
(14, 'akash', 'ev', 'akash7@gmail.com', '7510740048', '', -4700, 'akash', '8156967655', '8156967655'),
(15, 'amal', 'edapparambath', 'amalev@gmail.com', '9656945443', '', -4700, 'amal', '123', '123'),
(16, 'kannan', 'edapparambath', 'kannan@gmail.com', '9947265597', '', -4700, 'kannan', '2345', '2345'),
(17, 'c', 'sdd', 'ss@gmail.com', '9776554654', '', -4700, 'kk', '12345', '12345'),
(18, 'sandra', 'edapparambath', 'sandra@gmail.com', '8921919991', '', -4700, 'sandra', '234', '234'),
(20, 'akash ev', 'edapparambath', 'akashev7@gmail.com', '9497072597', '', -4700, 'akash ev', '456', '456'),
(21, 'MANHA', 'piravamveedu', 'manha@gmail.com', '1221121212', '', -4700, 'manman', '123', '123'),
(22, 'gokul', 'fhmfgj', 'john@gmail.com', '9876543213', '', -4700, 'gokul', '1230', '1230'),
(23, 'athitra', 'asd', 'ath@gmail.com', '9854687452', '9652348752369854', 35000, 'athira', 'athira', 'athira'),
(24, 'manu', 'asd', 'manu@gmail.com', '9856325698', '36598425987', 50200, 'manu', 'manu', 'manu');

-- --------------------------------------------------------

--
-- Table structure for table `staff_allot`
--

CREATE TABLE IF NOT EXISTS `staff_allot` (
  `staff_allotid` int(20) NOT NULL AUTO_INCREMENT,
  `staffname` varchar(20) NOT NULL,
  `shifttype` varchar(30) NOT NULL,
  `date_allot` date NOT NULL,
  PRIMARY KEY (`staff_allotid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `staff_allot`
--

INSERT INTO `staff_allot` (`staff_allotid`, `staffname`, `shifttype`, `date_allot`) VALUES
(16, 'nia', 'mrng', '2019-09-18'),
(17, 'nia', 'Night', '2019-11-28'),
(18, 'riya', 'Night', '2019-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `vechicle`
--

CREATE TABLE IF NOT EXISTS `vechicle` (
  `dname` varchar(50) NOT NULL,
  `vechi_id` int(20) NOT NULL AUTO_INCREMENT,
  `vehi_no` varchar(50) NOT NULL,
  `vechi_name` varchar(30) NOT NULL,
  `seat_capacity` int(20) NOT NULL,
  `vechi_tpe` varchar(30) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`vechi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `vechicle`
--

INSERT INTO `vechicle` (`dname`, `vechi_id`, `vehi_no`, `vechi_name`, `seat_capacity`, `vechi_tpe`, `amount`, `status`) VALUES
('', 5, 'kl5432', 'bmw', 5, 'car', '4000', ''),
('', 6, 'kl9865', 'alto', 4, 'car', '450', ''),
('', 7, 'kl4598', 'swift', 4, 'car', '2000', ''),
('', 9, 'kl4399', 'maruti', 4, 'car', '900', ''),
('appu', 10, 'kl2806', 'ford', 4, 'car', '900', ''),
('vinu', 11, 'kl5643', 'swift', 5, 'car', '900', ''),
('riya', 12, 'kl8854', 'i10', 4, 'car', '800', 'approved'),
('john', 13, 'kl5433', 'rtrt', 4, 'car', '800', 'approved'),
('alee', 14, 'kl5466', 'alto', 6, 'car', '900', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `vechicle_allot`
--

CREATE TABLE IF NOT EXISTS `vechicle_allot` (
  `allotid` int(10) NOT NULL AUTO_INCREMENT,
  `vechi_no` int(20) NOT NULL,
  `regno` int(20) NOT NULL,
  `vechi_date` date NOT NULL,
  `Vechi_stime` time NOT NULL,
  `vechi_etime` time NOT NULL,
  `amount` int(20) NOT NULL,
  PRIMARY KEY (`allotid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `vechicle_allot`
--


-- --------------------------------------------------------

--
-- Table structure for table `vehiclebooking`
--

CREATE TABLE IF NOT EXISTS `vehiclebooking` (
  `vbid` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `phno` bigint(50) NOT NULL,
  `date` date NOT NULL,
  `vehiclenumber` varchar(50) NOT NULL,
  `vehi_type` varchar(50) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `licencenumber` varchar(50) NOT NULL,
  `startlocation` varchar(50) NOT NULL,
  `endlocation` varchar(50) NOT NULL,
  `noofperson` bigint(50) NOT NULL,
  `noofdays` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`vbid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `vehiclebooking`
--

INSERT INTO `vehiclebooking` (`vbid`, `name`, `phno`, `date`, `vehiclenumber`, `vehi_type`, `dname`, `licencenumber`, `startlocation`, `endlocation`, `noofperson`, `noofdays`, `status`) VALUES
(3, 'manu', 9856325417, '2019-10-16', 'kl5643', 'swift', 'appu', 'kl987645324356', 'vytilla', 'sabarimala', 4, 2, 'not approved'),
(5, 'manu', 9856321547, '2019-10-22', 'kl4598', 'swift', 'nia', 'kl98663258874', 'vytilla', 'sabarimala', 4, 1, 'not approved'),
(6, 'manu', 9856321547, '2019-10-22', 'kl4598', 'swift', 'nia', 'kl98663258874', 'vytilla', 'sabarimala', 4, 1, 'not approved'),
(7, 'manu', 9654125874, '2019-10-24', 'kl4399', 'maruti', 'nia', 'kl98663258874', 'vytillahub', 'sabarimala', 2, 2, 'approved'),
(8, 'manu', 9866545236, '2019-10-24', 'kl2806', 'ford', 'nia', 'kl98663258874', 'vytilla', 'sabarimala', 3, 2, 'approved'),
(9, 'manu', 87665444556, '2019-11-14', 'kl8854', 'i10', 'riya', '65412354789', 'kochi', 'sabarimala', 3, 1, 'approved');
