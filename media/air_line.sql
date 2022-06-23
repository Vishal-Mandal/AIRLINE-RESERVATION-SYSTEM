-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2019 at 08:28 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline`
--

-- --------------------------------------------------------

--
-- Table structure for table `adlogin`
--

CREATE TABLE `adlogin` (
  `ID` int(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adlogin`
--

INSERT INTO `adlogin` (`ID`, `Email`, `Password`) VALUES
(1, 'starkindustries360@gmail.com', 'roy@l_trip'),
(2, 'nirajhembrom678@gmail.com', 'roy@l_trip'),
(3, 'rahulkumarmirdha15dmk@gmail.co', 'roy@l_trip');

-- --------------------------------------------------------

--
-- Table structure for table `fldetail`
--

CREATE TABLE `fldetail` (
  `id` int(5) NOT NULL,
  `Flight_No` varchar(10) NOT NULL,
  `Flight_Name` varchar(25) NOT NULL,
  `Departure` varchar(35) NOT NULL,
  `Dep_Time` time(5) NOT NULL,
  `Arrival` varchar(35) NOT NULL,
  `Arr_Time` time(5) NOT NULL,
  `fare` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fldetail`
--

INSERT INTO `fldetail` (`id`, `Flight_No`, `Flight_Name`, `Departure`, `Dep_Time`, `Arrival`, `Arr_Time`, `fare`) VALUES
(1, 'ghfjhf', 'fjhfjh', 'fjhfhfjhfjgdghdghd', '00:00:00.00000', '', '00:00:00.00000', ''),
(2, 'A100', 'AirIndia', 'Delhi', '05:30:00.00000', 'Kolkata', '08:30:00.00000', 'Rs 1500'),
(3, 'A110', 'AirAsiaIndia', 'Kolkata', '09:00:00.00000', 'Bengaluru', '13:00:00.00000', 'Rs 5000'),
(4, 'A120', 'AirIndiaExp', 'Kochi', '14:30:00.00000', 'Kolkata', '17:00:00.00000', 'Rs 2500'),
(5, 'A130', 'GoAir', 'Mumbai', '20:30:00.00000', 'Kolkata', '00:00:00.00000', 'Rs 3000'),
(6, 'A140', 'Indigo', 'Kolkata', '07:30:00.00000', 'Gurgaon', '09:00:00.00000', 'Rs 1200'),
(7, 'A150', 'SpiceJet', 'Kolkata', '10:00:00.00000', 'Pune', '12:30:00.00000', 'Rs 2000'),
(8, 'A160', 'Vistara', 'Gurgaon', '03:50:00.00000', 'Kolkata', '07:00:00.00000', 'Rs 3000'),
(9, 'A1700', 'Alliance Air', 'Delhi', '21:00:00.00000', 'Kolkata', '23:30:00.00000', 'Rs 5000'),
(10, 'A180', 'AirCosta', 'Kolkata', '04:30:00.00000', 'Mumbai', '19:30:00.00000', 'Rs 3700'),
(11, 'A190', 'StarAir', 'Kolkata', '22:00:00.00000', 'Bengaluru', '01:00:00.00000', 'Rs 5500');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(5) NOT NULL,
  `note` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(50) NOT NULL,
  `cardno` varchar(100) NOT NULL,
  `card_type` varchar(10) NOT NULL,
  `fromdate` varchar(1000) NOT NULL,
  `tilldate` date NOT NULL,
  `cvv` varchar(20) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `city` varchar(60) NOT NULL,
  `state` varchar(69) NOT NULL,
  `zip` varchar(60) NOT NULL,
  `count` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `cardno`, `card_type`, `fromdate`, `tilldate`, `cvv`, `addr`, `city`, `state`, `zip`, `count`) VALUES
(4, '3546565', '', '2001-08-02', '2019-10-22', '222', 'shantinagar', 'dumka', 'jharkhand', '814101', 'India'),
(5, '3546565', '', '2001-08-02', '2019-10-22', '222', 'shantinagar', 'dumka', 'jharkhand', '814101', 'India'),
(6, '123456789', '', '1997-05-02', '2019-10-22', '555', 'bidhanagar', 'kolkata', 'west Bengal', '816107', 'India'),
(7, 'uygyu', '', '2019-10-22', '2019-10-22', '223', 'kyug', 'hhug', 'kkg', 'i', 'America'),
(8, '', '', '', '0000-00-00', '223', 'bidhanagar', 'kolkata', 'west Bengal', '816107', 'India'),
(9, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(10, '3546565', 'VISA', '2019-10-24', '2019-12-24', '223', 'bidhanagar', 'kolkata', 'west Bengal', '800000', 'India'),
(11, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(12, '', '', '', '0000-00-00', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `registrationforrm`
--

CREATE TABLE `registrationforrm` (
  `id` int(3) NOT NULL,
  `F_Name` varchar(55) NOT NULL,
  `L_Name` varchar(55) NOT NULL,
  `Lang` varchar(30) NOT NULL,
  `Nation` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Sex` char(25) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Phone` bigint(40) NOT NULL,
  `Pass` varchar(85) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrationforrm`
--

INSERT INTO `registrationforrm` (`id`, `F_Name`, `L_Name`, `Lang`, `Nation`, `DOB`, `Sex`, `City`, `Address`, `Email`, `Phone`, `Pass`) VALUES
(6, 'vishal', 'Mandal', 'English', 'American', '2019-10-23', 'Male', '', 'bidhanagar', 'scac@CCKBNKCJ.com', 9635874258, '111111'),
(10, 'Vishal', 'Mandal', 'English', 'Indian', '2001-10-25', 'Male', 'kolkata', 'Salt Lake Sector V ', 'starkindustries360@gmail.com', 9973740172, '123123'),
(11, 'Vishal', 'Mandal', 'English', 'Indian', '2000-01-25', 'Male', 'Mumbai', 'Salt Lake Sector V ', 'Nirajhembrom18@gmail.com', 999997598, '999999');

-- --------------------------------------------------------

--
-- Table structure for table `supportus`
--

CREATE TABLE `supportus` (
  `id` int(6) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `trainer`
-- (See below for the actual view)
--
CREATE TABLE `trainer` (
);

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `id` int(3) NOT NULL,
  `flight_no.` varchar(15) NOT NULL,
  `name` varchar(40) NOT NULL,
  `from` varchar(40) NOT NULL,
  `to` varchar(40) NOT NULL,
  `dept_date` date NOT NULL,
  `ret_date` date NOT NULL,
  `seat` varchar(11) NOT NULL,
  `class` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`id`, `flight_no.`, `name`, `from`, `to`, `dept_date`, `ret_date`, `seat`, `class`) VALUES
(1, 'A110', 'person wala', 'kolkata', 'kolkata', '2019-10-24', '2019-10-24', 'A2', 'Economy'),
(3, 'vjvuyvu', '', 'hbghjv', 'kjhiub', '0000-00-00', '0000-00-00', 'iughiugi', 'Economy'),
(4, '', '', '', '', '0000-00-00', '0000-00-00', '', 'Economy'),
(5, '', '', '', '', '0000-00-00', '0000-00-00', '', 'Economy'),
(6, '', '', '', '', '0000-00-00', '0000-00-00', '', 'Economy'),
(7, '', '', '', '', '0000-00-00', '0000-00-00', '', 'Economy'),
(8, '', '', '', '', '0000-00-00', '0000-00-00', '', 'Economy'),
(9, '', '', '', '', '0000-00-00', '0000-00-00', '', 'Economy');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(20) NOT NULL,
  `email` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `trainer`
--
DROP TABLE IF EXISTS `trainer`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `trainer`  AS  select `ticdetail`.`ID` AS `ID`,`ticdetail`.`Flight No` AS `Flight No`,`ticdetail`.`Flight Name` AS `Flight Name`,`ticdetail`.`Name of Passenger` AS `Name of Passenger`,`ticdetail`.`From  City` AS `From  City`,`ticdetail`.`To City` AS `To City`,`ticdetail`.`Depart Date` AS `Depart Date`,`ticdetail`.`Return Date` AS `Return Date`,`ticdetail`.`Class` AS `Class`,`ticdetail`.`Seat No` AS `Seat No` from `ticdetail` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adlogin`
--
ALTER TABLE `adlogin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fldetail`
--
ALTER TABLE `fldetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrationforrm`
--
ALTER TABLE `registrationforrm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supportus`
--
ALTER TABLE `supportus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adlogin`
--
ALTER TABLE `adlogin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fldetail`
--
ALTER TABLE `fldetail`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `registrationforrm`
--
ALTER TABLE `registrationforrm`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `supportus`
--
ALTER TABLE `supportus`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trip`
--
ALTER TABLE `trip`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
