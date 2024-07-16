-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2024 at 04:21 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railwayreservationsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbus`
--

CREATE TABLE `addbus` (
  `busid` int(50) NOT NULL,
  `busname` varchar(50) NOT NULL,
  `busno` varchar(50) NOT NULL,
  `bustype` varchar(50) NOT NULL,
  `routeid` varchar(50) NOT NULL,
  `startstopage` varchar(50) NOT NULL,
  `endstopage` varchar(50) NOT NULL,
  `seat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addbus`
--

INSERT INTO `addbus` (`busid`, `busname`, `busno`, `bustype`, `routeid`, `startstopage`, `endstopage`, `seat`) VALUES
(1, 'samoli volvo', '2', 'AC', '1', 'kolkata', 'durgapur', '40'),
(2, 'Krishna', '8', 'AC', '2', 'kolkata', 'medinipur', '2'),
(3, 'xyz', '9', 'NON-AC', '2', 'bankura', 'durgapur', '50'),
(4, 'volvo', '123', 'AC', '2', 'durgapur', 'bankura', '2'),
(5, 'volvo', 'b001', 'AC', '1', 'select station', 'select station', '2'),
(6, 'volvo', 'b001', 'AC', '2', 'durgapur', 'durgapur', '2'),
(7, 'volvo', 'b001', 'AC', '2', 'bankura', 'durgapur', '2');

-- --------------------------------------------------------

--
-- Table structure for table `addtrain`
--

CREATE TABLE `addtrain` (
  `trainid` int(50) NOT NULL,
  `tname` varchar(20) NOT NULL,
  `tno` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `routeid` varchar(20) NOT NULL,
  `startstation` varchar(20) NOT NULL,
  `endstation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addtrain`
--

INSERT INTO `addtrain` (`trainid`, `tname`, `tno`, `type`, `routeid`, `startstation`, `endstation`) VALUES
(5, 'vibhuti express', '11', 'local', '2', 'bankura', 'Howrah'),
(6, 'garibnawaj express', '3', 'Express', '2', 'kolkata', 'durgapur');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneno` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `email`, `phoneno`, `address`, `password`, `image`) VALUES
(68, 'Admin', 'admin@gmail.com', '1234567890', 'Durgapur', 'Admin@123', '1701843292.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `boggies`
--

CREATE TABLE `boggies` (
  `boggiesid` int(50) NOT NULL,
  `boggiesname` varchar(50) NOT NULL,
  `noofseat` varchar(50) NOT NULL,
  `trainid` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `boggies`
--

INSERT INTO `boggies` (`boggiesid`, `boggiesname`, `noofseat`, `trainid`, `class`) VALUES
(132, 'sun', '2', '5', 'NON AC'),
(133, 'abc', '3', '5', 'ac'),
(134, 'aaa', '2', '5', 'ac'),
(135, 'abc', '40', '5', 'AC');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingid` int(50) NOT NULL,
  `pnrno` varchar(50) NOT NULL,
  `trainid` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `passengerid` varchar(50) NOT NULL,
  `boggiesname` varchar(50) NOT NULL,
  `seatno` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `tos` varchar(50) NOT NULL,
  `froms` varchar(50) NOT NULL,
  `bookingdate` datetime NOT NULL,
  `journeydate` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `pnrno`, `trainid`, `userid`, `passengerid`, `boggiesname`, `seatno`, `class`, `tos`, `froms`, `bookingdate`, `journeydate`, `status`) VALUES
(82, '1700924643', '5', '123@gmail.com', '113', 'abc', '1', 'AC', 'bankura', 'durgapur', '2023-11-25 20:34:53', '2023-11-25', ''),
(83, '1700924643', '5', '123@gmail.com', '114', 'abc', '2', 'AC', 'bankura', 'durgapur', '2023-11-25 20:34:53', '2023-11-25', ''),
(84, '1700924941', '5', '123@gmail.com', '115', 'abc', '3', 'AC', 'bankura', 'durgapur', '2023-11-25 20:39:20', '2023-11-25', ''),
(85, '1701029085', '5', '123@gmail.com', '116', 'abc', '1', 'AC', 'durgapur', 'bankura', '2023-11-27 01:35:29', '2023-11-23', ''),
(86, '1701029235', '5', '123@gmail.com', '117', 'abc', '1', 'AC', 'durgapur', 'bankura', '2023-11-27 01:37:51', '2023-11-30', ''),
(87, '1701069406', '5', '123@gmail.com', '118', 'abc', '1', 'AC', 'durgapur', 'bankura', '2023-11-27 12:47:13', '2023-11-29', ''),
(88, '1701069610', '5', '123@gmail.com', '119', 'abc', '1', 'AC', 'durgapur', 'bankura', '2023-11-27 12:50:37', '2023-11-28', ''),
(89, '1701071052', '5', '123@gmail.com', '120', 'abc', '2', 'AC', 'durgapur', 'bankura', '2023-11-27 13:14:36', '2023-11-29', ''),
(90, '1701086915', '5', '123@gmail.com', '121', 'abc', '2', 'AC', 'durgapur', 'bankura', '2023-11-27 17:39:12', '2023-11-30', ''),
(91, '1701086915', '5', '123@gmail.com', '122', 'abc', '3', 'AC', 'durgapur', 'bankura', '2023-11-27 17:39:12', '2023-11-30', ''),
(92, '1701088171', '5', '123@gmail.com', '123', 'abc', '1', 'AC', 'durgapur', 'bankura', '2023-11-27 18:00:07', '2023-11-13', ''),
(93, '1701088171', '5', '123@gmail.com', '124', 'abc', '2', 'AC', 'durgapur', 'bankura', '2023-11-27 18:00:07', '2023-11-13', ''),
(94, '1701088493', '5', '123@gmail.com', '125', 'abc', '3', 'AC', 'durgapur', 'bankura', '2023-11-27 18:06:34', '2023-11-29', ''),
(95, '1701088493', '5', '123@gmail.com', '126', 'aaa', '1', 'AC', 'durgapur', 'bankura', '2023-11-27 18:06:34', '2023-11-29', ''),
(96, '1701088493', '5', '123@gmail.com', '127', 'aaa', '2', 'AC', 'durgapur', 'bankura', '2023-11-27 18:06:34', '2023-11-29', ''),
(97, '1701088657', '5', '123@gmail.com', '130', 'aaa', '1', 'AC', 'durgapur', 'bankura', '2023-11-27 18:08:37', '2023-11-30', ''),
(98, '1701088657', '5', '123@gmail.com', '131', 'aaa', '2', 'AC', 'durgapur', 'bankura', '2023-11-27 18:08:37', '2023-11-30', ''),
(99, '1701099523', '5', '123@gmail.com', '132', 'abc', '1', 'AC', 'durgapur', 'bankura', '2023-11-27 21:09:12', '2023-11-14', ''),
(100, '1701415422', '5', '123@gmail.com', '133', 'abc', '1', 'AC', 'durgapur', 'bankura', '2023-12-01 12:54:35', '2023-12-02', ''),
(101, '1701417186', '5', '123@gmail.com', '134', 'abc', '1', 'AC', 'durgapur', 'bankura', '2023-12-01 13:23:30', '2023-12-08', ''),
(102, '1704519768', '5', '123@gmail.com', '135', 'abc', '1', 'AC', 'bankura', 'durgapur', '2024-01-06 11:14:25', '2024-01-05', ''),
(103, '1704519768', '5', '123@gmail.com', '136', 'abc', '2', 'AC', 'bankura', 'durgapur', '2024-01-06 11:14:25', '2024-01-05', ''),
(104, '1704519768', '5', '123@gmail.com', '137', 'abc', '3', 'AC', 'bankura', 'durgapur', '2024-01-06 11:14:25', '2024-01-05', ''),
(105, '1704519768', '5', '123@gmail.com', '138', 'aaa', '1', 'AC', 'bankura', 'durgapur', '2024-01-06 11:14:25', '2024-01-05', ''),
(106, '1704519768', '5', '123@gmail.com', '139', 'aaa', '2', 'AC', 'bankura', 'durgapur', '2024-01-06 11:14:25', '2024-01-05', ''),
(107, '1707025287', '5', '123@gmail.com', '141', 'abc', '1', 'AC', 'bankura', 'durgapur', '2024-02-04 11:11:47', '2024-02-03', ''),
(108, '1707025505', '5', '123@gmail.com', '142', 'abc', '2', 'AC', 'bankura', 'durgapur', '2024-02-04 11:15:23', '2024-02-03', ''),
(109, '1707025993', '5', '123@gmail.com', '143', 'abc', '3', 'AC', 'bankura', 'durgapur', '2024-02-04 11:24:04', '2024-02-03', ''),
(110, '1707025993', '5', '123@gmail.com', '144', 'aaa', '1', 'AC', 'bankura', 'durgapur', '2024-02-04 11:24:04', '2024-02-03', ''),
(111, '1707025993', '5', '123@gmail.com', '145', 'aaa', '2', 'AC', 'bankura', 'durgapur', '2024-02-04 11:24:04', '2024-02-03', ''),
(112, '1707028644', '5', '123@gmail.com', '146', 'abc', '1', 'AC', 'bankura', 'durgapur', '2024-02-04 12:08:06', '2024-02-04', ''),
(113, '1707028644', '5', '123@gmail.com', '147', 'abc', '2', 'AC', 'bankura', 'durgapur', '2024-02-04 12:08:06', '2024-02-04', ''),
(114, '1707394421', '5', '123@gmail.com', '148', 'abc', '1', 'AC', 'durgapur', 'bankura', '2024-02-08 17:44:08', '2024-02-09', ''),
(115, '1707395095', '5', '123@gmail.com', '149', 'abc', '2', 'AC', 'bankura', 'durgapur', '2024-02-08 17:55:24', '2024-02-09', ''),
(116, '1707395095', '5', '123@gmail.com', '150', 'abc', '3', 'AC', 'bankura', 'durgapur', '2024-02-08 17:55:24', '2024-02-09', ''),
(117, '1707395959', '5', '123@gmail.com', '151', 'sun', '1', 'NON AC', 'bankura', 'durgapur', '2024-02-08 18:09:45', '2024-02-09', ''),
(118, '1707395959', '5', '123@gmail.com', '152', 'sun', '2', 'NON AC', 'bankura', 'durgapur', '2024-02-08 18:09:45', '2024-02-09', ''),
(119, '1707396297', '5', '123@gmail.com', '153', 'aaa', '1', 'AC', 'bankura', 'durgapur', '2024-02-08 18:15:24', '2024-02-09', ''),
(120, '1707396297', '5', '123@gmail.com', '154', 'aaa', '2', 'AC', 'bankura', 'durgapur', '2024-02-08 18:15:24', '2024-02-09', ''),
(121, '1707396593', '5', '123@gmail.com', '155', 'abc', '1', 'AC', 'bankura', 'durgapur', '2024-02-08 18:20:25', '2024-02-10', ''),
(122, '1707396593', '5', '123@gmail.com', '156', 'abc', '2', 'AC', 'bankura', 'durgapur', '2024-02-08 18:20:25', '2024-02-10', ''),
(123, '1707397432', '5', '123@gmail.com', '157', 'abc', '3', 'AC', 'bankura', 'durgapur', '2024-02-08 18:34:35', '2024-02-10', ''),
(124, '1707397432', '5', '123@gmail.com', '158', 'aaa', '1', 'AC', 'bankura', 'durgapur', '2024-02-08 18:34:35', '2024-02-10', ''),
(125, '1707397432', '5', '123@gmail.com', '159', 'aaa', '2', 'AC', 'bankura', 'durgapur', '2024-02-08 18:34:35', '2024-02-10', ''),
(126, '1707397630', '5', '123@gmail.com', '160', 'abc', '1', 'AC', 'bankura', 'durgapur', '2024-02-08 18:37:39', '2024-02-16', ''),
(127, '1707397630', '5', '123@gmail.com', '161', 'abc', '2', 'AC', 'bankura', 'durgapur', '2024-02-08 18:37:39', '2024-02-16', ''),
(128, '1707397853', '5', '123@gmail.com', '162', 'abc', '1', 'AC', 'bankura', 'durgapur', '2024-02-08 18:41:23', '2024-02-11', ''),
(129, '1707397853', '5', '123@gmail.com', '163', 'abc', '2', 'AC', 'bankura', 'durgapur', '2024-02-08 18:41:23', '2024-02-11', ''),
(130, '1707398263', '5', '123@gmail.com', '164', 'abc', '3', 'AC', 'bankura', 'durgapur', '2024-02-08 18:48:09', '2024-02-11', ''),
(131, '1707398263', '5', '123@gmail.com', '165', 'aaa', '1', 'AC', 'bankura', 'durgapur', '2024-02-08 18:48:09', '2024-02-11', ''),
(132, '1707398668', '5', '123@gmail.com', '166', 'abc', '1', 'AC', 'bankura', 'durgapur', '2024-02-08 18:55:00', '2024-02-12', ''),
(133, '1707398668', '5', '123@gmail.com', '167', 'abc', '2', 'AC', 'bankura', 'durgapur', '2024-02-08 18:55:00', '2024-02-12', ''),
(134, '1707540853', '5', '123@gmail.com', '168', 'abc', '3', 'AC', 'durgapur', 'bankura', '2024-02-10 10:24:38', '2024-02-16', ''),
(135, '1707541024', '5', '123@gmail.com', '169', 'aaa', '1', 'AC', 'durgapur', 'bankura', '2024-02-10 10:27:17', '2024-02-16', ''),
(136, '1707541153', '5', '123@gmail.com', '170', 'abc', '1', 'AC', 'durgapur', 'bankura', '2024-02-10 10:30:00', '2024-02-15', ''),
(137, '1707541153', '5', '123@gmail.com', '171', 'abc', '2', 'AC', 'durgapur', 'bankura', '2024-02-10 10:30:00', '2024-02-15', ''),
(138, '1707546710', '5', '123@gmail.com', '172', 'abc', '1', 'AC', 'durgapur', 'bankura', '2024-02-10 12:02:36', '2024-02-18', ''),
(139, '1707546710', '5', '123@gmail.com', '173', 'abc', '2', 'AC', 'durgapur', 'bankura', '2024-02-10 12:02:36', '2024-02-18', ''),
(140, '1707547124', '5', '123@gmail.com', '174', 'abc', '3', 'AC', 'durgapur', 'bankura', '2024-02-10 12:09:15', '2024-02-18', ''),
(141, '1707547124', '5', '123@gmail.com', '175', 'aaa', '1', 'AC', 'durgapur', 'bankura', '2024-02-10 12:09:15', '2024-02-18', ''),
(142, '1707547519', '5', '123@gmail.com', '176', 'abc', '1', 'AC', 'durgapur', 'bankura', '2024-02-10 12:16:31', '2024-02-19', ''),
(143, '1707547519', '5', '123@gmail.com', '177', 'abc', '2', 'AC', 'durgapur', 'bankura', '2024-02-10 12:16:31', '2024-02-19', ''),
(144, '1707547519', '5', '123@gmail.com', '178', 'abc', '3', 'AC', 'durgapur', 'bankura', '2024-02-10 12:16:31', '2024-02-19', ''),
(145, '1707548576', '5', '123@gmail.com', '179', 'abc', '1', 'AC', 'durgapur', 'bankura', '2024-02-10 12:34:08', '2024-02-20', ''),
(146, '1713671600', '5', '123@gmail.com', '180', 'abc', '1', 'AC', 'durgapur', 'bankura', '2024-04-21 09:36:24', '2024-04-21', 'confirm'),
(147, '1713671600', '5', '123@gmail.com', '181', 'abc', '2', 'AC', 'durgapur', 'bankura', '2024-04-21 09:36:24', '2024-04-21', 'confirm'),
(148, '1713671600', '5', '123@gmail.com', '182', 'abc', '3', 'AC', 'durgapur', 'bankura', '2024-04-21 09:36:24', '2024-04-21', 'confirm'),
(149, '1713671600', '5', '123@gmail.com', '183', 'aaa', '1', 'AC', 'durgapur', 'bankura', '2024-04-21 09:36:24', '2024-04-21', 'confirm'),
(150, '1713671600', '5', '123@gmail.com', '184', 'aaa', '2', 'AC', 'durgapur', 'bankura', '2024-04-21 09:36:24', '2024-04-21', 'confirm'),
(151, '1713674632', '5', '123@gmail.com', '186', 'abc', '1', 'AC', 'durgapur', 'bankura', '2024-04-21 10:14:11', '2024-04-22', 'confirm'),
(152, '1713674696', '5', '123@gmail.com', '187', 'abc', '2', 'AC', 'durgapur', 'bankura', '2024-04-21 10:15:54', '2024-04-22', 'confirm'),
(153, '1713674696', '5', '123@gmail.com', '188', 'abc', '3', 'AC', 'durgapur', 'bankura', '2024-04-21 10:15:54', '2024-04-22', 'confirm'),
(154, '1713674696', '5', '123@gmail.com', '189', 'aaa', '1', 'AC', 'durgapur', 'bankura', '2024-04-21 10:15:54', '2024-04-22', 'confirm'),
(155, '1713674696', '5', '123@gmail.com', '190', 'aaa', '2', 'AC', 'durgapur', 'bankura', '2024-04-21 10:15:54', '2024-04-22', 'confirm'),
(156, '1713677872', '5', '123@gmail.com', '193', 'abc', '1', 'AC', 'durgapur', 'bankura', '2024-04-21 11:08:10', '2024-04-30', 'confirm'),
(157, '1713677902', '5', '123@gmail.com', '194', 'abc', '2', 'AC', 'durgapur', 'bankura', '2024-04-21 11:09:51', '2024-04-30', 'confirm'),
(158, '1713677902', '5', '123@gmail.com', '195', 'abc', '3', 'AC', 'durgapur', 'bankura', '2024-04-21 11:09:51', '2024-04-30', 'confirm'),
(159, '1713677902', '5', '123@gmail.com', '196', 'aaa', '1', 'AC', 'durgapur', 'bankura', '2024-04-21 11:09:51', '2024-04-30', 'confirm'),
(160, '1713677902', '5', '123@gmail.com', '197', 'aaa', '2', 'AC', 'durgapur', 'bankura', '2024-04-21 11:09:51', '2024-04-30', 'confirm'),
(161, '1713678021', '5', '123@gmail.com', '198', 'aaa', '3', 'AC', 'durgapur', 'bankura', '2024-04-21 11:17:00', '2024-04-30', 'waiting'),
(162, '1713678477', '5', '123@gmail.com', '199', 'aaa', '4', 'AC', 'durgapur', 'bankura', '2024-04-21 11:18:44', '2024-04-30', 'confirm'),
(163, '1713678477', '5', '123@gmail.com', '200', 'aaa', '5', 'AC', 'durgapur', 'bankura', '2024-04-21 11:18:44', '2024-04-30', 'confirm'),
(164, '1713678477', '5', '123@gmail.com', '201', 'aaa', '6', 'AC', 'durgapur', 'bankura', '2024-04-21 11:18:44', '2024-04-30', 'confirm'),
(165, '1713958878', '5', '123@gmail.com', '203', 'aaa', '1', 'AC', 'bankura', 'durgapur', '2024-04-24 17:11:58', '2024-04-25', 'confirm'),
(166, '1713959108', '5', '123@gmail.com', '204', 'aaa', '7', 'AC', 'bankura', 'durgapur', '2024-04-24 17:16:02', '2024-04-30', 'confirm'),
(167, '1713959108', '5', '123@gmail.com', '205', 'aaa', '8', 'AC', 'bankura', 'durgapur', '2024-04-24 17:16:02', '2024-04-30', 'confirm'),
(168, '1713959108', '5', '123@gmail.com', '206', 'aaa', '9', 'AC', 'bankura', 'durgapur', '2024-04-24 17:16:02', '2024-04-30', 'confirm'),
(169, '1713959211', '5', '123@gmail.com', '207', 'aaa', '10', 'AC', 'bankura', 'durgapur', '2024-04-24 17:17:21', '2024-04-30', 'confirm'),
(170, '1713959569', '5', '123@gmail.com', '208', 'aaa', '1', 'AC', 'bankura', 'durgapur', '2024-04-24 17:23:31', '2024-04-26', 'confirm'),
(171, '1713959569', '5', '123@gmail.com', '209', 'aaa', '2', 'AC', 'bankura', 'durgapur', '2024-04-24 17:23:31', '2024-04-26', 'confirm'),
(172, '1713959650', '5', '123@gmail.com', '210', 'aaa', '3', 'AC', 'bankura', 'durgapur', '2024-04-24 17:24:58', '2024-04-26', 'confirm'),
(173, '1713959650', '5', '123@gmail.com', '211', 'aaa', '4', 'AC', 'bankura', 'durgapur', '2024-04-24 17:24:58', '2024-04-26', 'confirm'),
(174, '1713959650', '5', '123@gmail.com', '212', 'aaa', '5', 'AC', 'bankura', 'durgapur', '2024-04-24 17:24:58', '2024-04-26', 'confirm'),
(175, '1713959720', '5', '123@gmail.com', '213', 'aaa', '6', 'AC', 'bankura', 'durgapur', '2024-04-24 17:25:53', '2024-04-26', 'waiting'),
(176, '1713959720', '5', '123@gmail.com', '214', 'aaa', '7', 'AC', 'bankura', 'durgapur', '2024-04-24 17:25:53', '2024-04-26', 'confirm'),
(177, '1713960108', '5', '123@gmail.com', '215', 'aaa', '8', 'AC', 'bankura', 'durgapur', '2024-04-24 17:32:19', '2024-04-26', 'waiting'),
(178, '1713960108', '5', '123@gmail.com', '216', 'aaa', '9', 'AC', 'bankura', 'durgapur', '2024-04-24 17:32:19', '2024-04-26', 'waiting'),
(179, '1713960214', '5', '123@gmail.com', '217', 'aaa', '10', 'AC', 'bankura', 'durgapur', '2024-04-24 17:34:05', '2024-04-26', 'waiting'),
(180, '1713960315', '5', '123@gmail.com', '218', 'aaa', '1', 'AC', 'bankura', 'durgapur', '2024-04-24 17:37:13', '2024-04-29', 'confirm'),
(181, '1713960315', '5', '123@gmail.com', '219', 'aaa', '2', 'AC', 'bankura', 'durgapur', '2024-04-24 17:37:13', '2024-04-29', 'confirm'),
(182, '1713960315', '5', '123@gmail.com', '220', 'aaa', '3', 'AC', 'bankura', 'durgapur', '2024-04-24 17:37:13', '2024-04-29', 'confirm'),
(183, '1713960315', '5', '123@gmail.com', '221', 'aaa', '4', 'AC', 'bankura', 'durgapur', '2024-04-24 17:37:13', '2024-04-29', 'confirm'),
(184, '1713960315', '5', '123@gmail.com', '222', 'aaa', '5', 'AC', 'bankura', 'durgapur', '2024-04-24 17:37:13', '2024-04-29', 'confirm'),
(185, '1713960315', '5', '123@gmail.com', '223', 'aaa', '6', 'AC', 'bankura', 'durgapur', '2024-04-24 17:37:13', '2024-04-29', 'confirm'),
(186, '1713960664', '5', '123@gmail.com', '224', 'aaa', '7', 'AC', 'bankura', 'durgapur', '2024-04-24 17:41:22', '2024-04-29', 'waiting'),
(187, '1713961025', '5', '123@gmail.com', '225', 'aaa', '1', 'AC', 'bankura', 'durgapur', '2024-04-24 17:48:28', '2024-04-28', 'confirm'),
(188, '1713961025', '5', '123@gmail.com', '226', 'aaa', '2', 'AC', 'bankura', 'durgapur', '2024-04-24 17:48:28', '2024-04-28', 'confirm'),
(189, '1713961025', '5', '123@gmail.com', '227', 'aaa', '3', 'AC', 'bankura', 'durgapur', '2024-04-24 17:48:28', '2024-04-28', 'confirm'),
(190, '1713961025', '5', '123@gmail.com', '228', 'aaa', '4', 'AC', 'bankura', 'durgapur', '2024-04-24 17:48:28', '2024-04-28', 'confirm'),
(191, '1713961025', '5', '123@gmail.com', '229', 'aaa', '5', 'AC', 'bankura', 'durgapur', '2024-04-24 17:48:28', '2024-04-28', 'confirm'),
(192, '1713961025', '5', '123@gmail.com', '230', 'aaa', '6', 'AC', 'bankura', 'durgapur', '2024-04-24 17:48:28', '2024-04-28', 'waiting'),
(193, '1713961025', '5', '123@gmail.com', '231', 'aaa', '7', 'AC', 'bankura', 'durgapur', '2024-04-24 17:48:28', '2024-04-28', 'waiting'),
(194, '1713961565', '5', '123@gmail.com', '232', 'aaa', '8', 'AC', 'bankura', 'durgapur', '2024-04-24 17:57:03', '2024-04-28', 'waiting'),
(195, '1715152410', '5', '123@gmail.com', '233', 'aaa', '1', 'AC', 'bankura', 'durgapur', '2024-05-08 12:43:49', '2024-05-16', 'confirm'),
(196, '1715152568', '5', '123@gmail.com', '234', 'aaa', '2', 'AC', 'bankura', 'durgapur', '2024-05-08 12:47:35', '2024-05-16', 'confirm'),
(197, '1715153054', '5', '123@gmail.com', '235', 'aaa', '3', 'AC', 'durgapur', 'bankura', '2024-05-08 12:54:42', '2024-05-16', 'confirm'),
(198, '1715153054', '5', '123@gmail.com', '236', 'aaa', '4', 'AC', 'durgapur', 'bankura', '2024-05-08 12:54:42', '2024-05-16', 'confirm'),
(199, '1715153277', '5', '123@gmail.com', '237', 'aaa', '1', 'AC', 'durgapur', 'bankura', '2024-05-08 12:58:12', '2024-05-17', 'confirm'),
(200, '1715153486', '5', '123@gmail.com', '238', 'aaa', '1', 'AC', 'bankura', 'durgapur', '2024-05-08 13:01:43', '2024-05-09', 'confirm'),
(201, '1716011088', '5', '123@gmail.com', '239', 'aaa', '1', 'AC', 'durgapur', 'bankura', '2024-05-18 11:15:12', '2024-05-23', 'confirm'),
(202, '1716122497', '5', '123@gmail.com', '240', 'aaa', '1', 'AC', 'durgapur', 'bankura', '2024-05-19 18:12:30', '2024-05-19', 'confirm'),
(203, '1716124528', '5', '123@gmail.com', '241', 'aaa', '2', 'AC', 'durgapur', 'bankura', '2024-05-19 18:45:54', '2024-05-19', 'confirm'),
(204, '1716130821', '5', '123@gmail.com', '242', 'aaa', '1', 'AC', 'durgapur', 'bankura', '2024-05-19 20:30:36', '2024-05-20', 'confirm'),
(205, '1716132293', '5', '123@gmail.com', '243', 'aaa', '3', 'AC', 'durgapur', 'bankura', '2024-05-19 20:55:08', '2024-05-19', 'confirm'),
(208, '1716872893', '5', '123@gmail.com', '246', 'aaa', '3', 'AC', 'durgapur', 'bankura', '2024-05-28 10:39:14', '2024-05-30', 'confirm'),
(209, '1716872893', '5', '123@gmail.com', '247', 'aaa', '4', 'AC', 'durgapur', 'bankura', '2024-05-28 10:39:14', '2024-05-30', 'confirm'),
(211, '1716873102', '5', '123@gmail.com', '249', 'aaa', '1', 'AC', 'durgapur', 'bankura', '2024-05-28 10:42:57', '2024-05-30', 'confirm'),
(212, '1716873102', '5', '123@gmail.com', '250', 'aaa', '2', 'AC', 'durgapur', 'bankura', '2024-05-28 10:42:57', '2024-05-30', 'confirm'),
(213, '1716873102', '5', '123@gmail.com', '251', 'aaa', '5', 'AC', 'durgapur', 'bankura', '2024-05-28 10:42:57', '2024-05-30', 'confirm'),
(214, '1716876941', '5', '123@gmail.com', '252', 'abc', '1', 'AC', 'durgapur', 'Bankura', '2024-05-28 11:46:36', '2024-05-29', 'confirm');

-- --------------------------------------------------------

--
-- Table structure for table `busaccount`
--

CREATE TABLE `busaccount` (
  `slno` int(100) NOT NULL,
  `busaccno` int(100) NOT NULL,
  `from` varchar(20) NOT NULL,
  `to` varchar(20) NOT NULL,
  `noofchild` varchar(50) NOT NULL,
  `noofadult` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `mode` varchar(50) NOT NULL,
  `bookingno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `busaccount`
--

INSERT INTO `busaccount` (`slno`, `busaccno`, `from`, `to`, `noofchild`, `noofadult`, `price`, `type`, `date`, `mode`, `bookingno`) VALUES
(11, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-03-08', 'online', '1709913361'),
(12, 2, 'kolkata', 'medinipur', '1', '2', '312.5', 'AC', '2024-03-08', 'online', '1709913452'),
(13, 2, 'kolkata', 'medinipur', '0', '2', '250', 'AC', '2024-03-08', 'online', '1709914816'),
(14, 2, 'kolkata', 'medinipur', '0', '2', '250', 'AC', '2024-03-10', 'online', '1710047891'),
(15, 2, 'kolkata', 'medinipur', '1', '1', '187.5', 'AC', '2024-03-10', 'online', '1710048782'),
(16, 2, 'kolkata', 'medinipur', '1', '2', '312.5', 'AC', '2024-03-10', 'online', '1710049053'),
(17, 2, 'kolkata', 'medinipur', '1', '2', '312.5', 'AC', '2024-03-10', 'online', '1710049672'),
(18, 2, 'kolkata', 'medinipur', '1', '1', '187.5', 'AC', '2024-03-16', 'online', '1710602902'),
(19, 2, 'kolkata', 'medinipur', '0', '2', '250', 'AC', '2024-03-30', 'online', '1711812400'),
(20, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-03-31', 'online', '1711852408'),
(21, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-03-31', 'online', '1711853656'),
(22, 2, 'kolkata', 'medinipur', '0', '2', '250', 'AC', '2024-03-31', 'online', '1711854161'),
(23, 2, 'kolkata', 'medinipur', '0', '2', '250', 'AC', '2024-03-31', 'online', '1711854651'),
(24, 2, 'kolkata', 'medinipur', '0', '2', '250', 'AC', '2024-03-31', 'online', '1711854975'),
(25, 2, 'kolkata', 'medinipur', '0', '2', '250', 'AC', '2024-04-06', 'online', '1712380660'),
(26, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-04-06', 'online', '1712381951'),
(27, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-04-06', 'online', '1712383023'),
(28, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-04-06', 'online', '1712383230'),
(29, 2, 'kolkata', 'medinipur', '0', '3', '375', 'AC', '2024-04-06', 'online', '1712383364'),
(30, 2, 'kolkata', 'medinipur', '0', '3', '375', 'AC', '2024-04-06', 'online', '1712383560'),
(31, 2, 'kolkata', 'medinipur', '0', '3', '375', 'AC', '2024-04-06', 'online', '1712383933'),
(32, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-04-06', 'online', '1712384390'),
(33, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-04-06', 'online', '1712384560'),
(34, 2, 'kolkata', 'medinipur', '0', '5', '625', 'AC', '2024-04-06', 'online', '1712385606'),
(35, 2, 'kolkata', 'medinipur', '0', '2', '250', 'AC', '2024-04-21', 'online', '1713669669'),
(36, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-04-21', 'online', '1713669777'),
(37, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-04-21', 'online', '1713669963'),
(38, 2, 'kolkata', 'medinipur', '0', '3', '375', 'AC', '2024-04-24', 'online', '1713962185'),
(39, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-05-05', 'online', '1714880086'),
(40, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-05-05', 'online', '1714880146'),
(41, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-05-05', 'online', '1714880190'),
(42, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-05-05', 'online', '1714880517'),
(43, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-05-05', 'online', '1714880635'),
(44, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-05-05', 'online', '1714881712'),
(45, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-05-05', 'online', '1714882226'),
(46, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-05-05', 'online', '1714882765'),
(47, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-05-05', 'online', '1714883164'),
(48, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-05-05', 'online', '1714883220'),
(49, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-05-08', 'online', '1715151350'),
(50, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-05-08', 'online', '1715151476'),
(51, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-05-08', 'online', '1715151630'),
(52, 2, 'kolkata', 'medinipur', '0', '2', '250', 'AC', '2024-05-08', 'online', '1715152024'),
(53, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-05-18', 'online', '1716008859'),
(54, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-05-18', 'online', '1716013325'),
(55, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-05-18', 'online', '1716056249'),
(56, 2, 'kolkata', 'medinipur', '0', '1', '125', 'AC', '2024-05-19', 'online', '1716058465'),
(57, 1, 'kolkata', 'durgapur', '0', '1', '150', 'AC', '2024-05-28', 'online', '1716878263');

-- --------------------------------------------------------

--
-- Table structure for table `busbooking`
--

CREATE TABLE `busbooking` (
  `bookingid` int(11) NOT NULL,
  `bkn` int(50) NOT NULL,
  `busid` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `passengerid` varchar(50) NOT NULL,
  `seatno` varchar(50) NOT NULL,
  `bustype` varchar(50) NOT NULL,
  `tos` varchar(50) NOT NULL,
  `froms` varchar(50) NOT NULL,
  `bookingdate` date NOT NULL,
  `journeydate` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `busbooking`
--

INSERT INTO `busbooking` (`bookingid`, `bkn`, `busid`, `userid`, `passengerid`, `seatno`, `bustype`, `tos`, `froms`, `bookingdate`, `journeydate`, `status`) VALUES
(31, 1712380660, '2', '123@gmail.com', '1', '1', 'AC', 'medinipur', 'kolkata', '2024-04-06', '2024-04-06', 'confirm'),
(32, 1712380660, '2', '123@gmail.com', '2', '2', 'AC', 'medinipur', 'kolkata', '2024-04-06', '2024-04-06', 'confirm'),
(33, 1712381951, '2', '123@gmail.com', '3', '1', 'AC', 'medinipur', 'kolkata', '2024-04-06', '2024-04-07', 'confirm'),
(34, 1712383023, '2', '123@gmail.com', '4', '2', 'AC', 'medinipur', 'kolkata', '2024-04-06', '2024-04-07', 'confirm'),
(35, 1712383230, '2', '123@gmail.com', '5', '3', 'AC', 'medinipur', 'kolkata', '2024-04-06', '2024-04-07', 'waiting'),
(36, 1712383364, '2', '123@gmail.com', '6', '1', 'AC', 'medinipur', 'kolkata', '2024-04-06', '2024-04-08', 'confirm'),
(37, 1712383364, '2', '123@gmail.com', '7', '2', 'AC', 'medinipur', 'kolkata', '2024-04-06', '2024-04-08', 'confirm'),
(38, 1712383364, '2', '123@gmail.com', '8', '3', 'AC', 'medinipur', 'kolkata', '2024-04-06', '2024-04-08', 'waiting'),
(39, 1712383560, '2', '123@gmail.com', '9', '1', 'AC', 'medinipur', 'kolkata', '2024-04-06', '2024-04-09', 'confirm'),
(40, 1712383560, '2', '123@gmail.com', '10', '2', 'AC', 'medinipur', 'kolkata', '2024-04-06', '2024-04-09', 'confirm'),
(41, 1712383560, '2', '123@gmail.com', '11', '3', 'AC', 'medinipur', 'kolkata', '2024-04-06', '2024-04-09', 'waiting'),
(42, 1712383933, '2', '123@gmail.com', '12', '1', 'AC', 'medinipur', 'kolkata', '2024-04-06', '2024-04-10', 'confirm'),
(43, 1712383933, '2', '123@gmail.com', '13', '2', 'AC', 'medinipur', 'kolkata', '2024-04-06', '2024-04-10', 'confirm'),
(44, 1712383933, '2', '123@gmail.com', '14', '3', 'AC', 'medinipur', 'kolkata', '2024-04-06', '2024-04-10', 'waiting'),
(45, 1712384390, '2', '123@gmail.com', '15', '3', 'AC', 'medinipur', 'kolkata', '2024-04-06', '2024-04-06', 'confirm'),
(46, 1712384560, '2', '123@gmail.com', '16', '3', 'AC', 'medinipur', 'kolkata', '2024-04-06', '2024-04-07', 'confirm'),
(47, 1712385606, '2', '123@gmail.com', '17', '3', 'AC', 'medinipur', 'kolkata', '2024-04-06', '2024-04-08', 'waiting'),
(48, 1712385606, '2', '123@gmail.com', '18', '3', 'AC', 'medinipur', 'kolkata', '2024-04-06', '2024-04-08', 'waiting'),
(49, 1712385606, '2', '123@gmail.com', '19', '3', 'AC', 'medinipur', 'kolkata', '2024-04-06', '2024-04-08', 'waiting'),
(50, 1712385606, '2', '123@gmail.com', '20', '3', 'AC', 'medinipur', 'kolkata', '2024-04-06', '2024-04-08', 'waiting'),
(51, 1712385606, '2', '123@gmail.com', '21', '3', 'AC', 'medinipur', 'kolkata', '2024-04-06', '2024-04-08', 'waiting'),
(52, 1713669669, '2', '123@gmail.com', '22', '1', 'AC', 'medinipur', 'kolkata', '2024-04-21', '2024-04-21', 'confirm'),
(53, 1713669669, '2', '123@gmail.com', '23', '2', 'AC', 'medinipur', 'kolkata', '2024-04-21', '2024-04-21', 'confirm'),
(54, 1713669777, '2', '123@gmail.com', '24', '3', 'AC', 'medinipur', 'kolkata', '2024-04-21', '2024-04-21', 'waiting'),
(55, 1713669963, '2', '123@gmail.com', '25', '3', 'AC', 'medinipur', 'kolkata', '2024-04-21', '2024-04-21', 'waiting'),
(56, 1713962185, '2', '123@gmail.com', '26', '1', 'AC', 'medinipur', 'kolkata', '2024-04-24', '2024-04-24', 'confirm'),
(57, 1713962185, '2', '123@gmail.com', '27', '2', 'AC', 'medinipur', 'kolkata', '2024-04-24', '2024-04-24', 'confirm'),
(58, 1713962185, '2', '123@gmail.com', '28', '3', 'AC', 'medinipur', 'kolkata', '2024-04-24', '2024-04-24', 'waiting'),
(59, 1714880086, '2', '123@gmail.com', '30', '1', 'AC', 'medinipur', 'kolkata', '2024-05-05', '2024-05-05', 'confirm'),
(60, 1714880146, '2', '123@gmail.com', '31', '2', 'AC', 'medinipur', 'kolkata', '2024-05-05', '2024-05-05', 'confirm'),
(61, 1714880190, '2', '123@gmail.com', '32', '1', 'AC', 'medinipur', 'kolkata', '2024-05-05', '2024-05-06', 'confirm'),
(62, 1714880517, '2', '123@gmail.com', '33', '2', 'AC', 'medinipur', 'kolkata', '2024-05-05', '2024-05-06', 'confirm'),
(63, 1714880635, '2', '123@gmail.com', '34', '1', 'AC', 'medinipur', 'kolkata', '2024-05-05', '2024-05-07', 'confirm'),
(64, 1714881712, '2', '123@gmail.com', '35', '2', 'AC', 'medinipur', 'kolkata', '2024-05-05', '2024-05-07', 'confirm'),
(65, 1714882226, '2', '123@gmail.com', '36', '1', 'AC', 'medinipur', 'kolkata', '2024-05-05', '2024-05-08', 'confirm'),
(66, 1714882765, '2', '123@gmail.com', '37', '1', 'AC', 'medinipur', 'kolkata', '2024-05-05', '2024-05-09', 'confirm'),
(67, 1714883164, '2', '123@gmail.com', '38', '1', 'AC', 'medinipur', 'kolkata', '2024-05-05', '2024-05-15', 'confirm'),
(68, 1714883220, '2', '123@gmail.com', '39', '2', 'AC', 'medinipur', 'kolkata', '2024-05-05', '2024-05-15', 'confirm'),
(69, 1715151350, '2', '123@gmail.com', '40', '2', 'AC', 'medinipur', 'kolkata', '2024-05-08', '2024-05-08', 'confirm'),
(70, 1715151476, '2', '123@gmail.com', '41', '2', 'AC', 'medinipur', 'kolkata', '2024-05-08', '2024-05-09', 'confirm'),
(71, 1715151630, '2', '123@gmail.com', '42', '1', 'AC', 'medinipur', 'kolkata', '2024-05-08', '2024-05-10', 'confirm'),
(72, 1715152024, '2', '123@gmail.com', '43', '1', 'AC', 'medinipur', 'kolkata', '2024-05-08', '2024-05-16', 'confirm'),
(73, 1715152024, '2', '123@gmail.com', '44', '2', 'AC', 'medinipur', 'kolkata', '2024-05-08', '2024-05-16', 'confirm'),
(74, 1716008859, '2', '123@gmail.com', '45', '1', 'AC', 'medinipur', 'kolkata', '2024-05-18', '2024-05-19', 'confirm'),
(75, 1716121959, '2', '123@gmail.com', '46', '2', 'AC', 'medinipur', 'kolkata', '2024-05-19', '2024-05-19', 'confirm'),
(76, 1716130537, '2', '123@gmail.com', '47', '1', 'AC', 'medinipur', 'kolkata', '2024-05-19', '2024-05-20', 'confirm'),
(77, 1716130688, '2', '123@gmail.com', '48', '2', 'AC', 'medinipur', 'kolkata', '2024-05-19', '2024-05-20', 'confirm'),
(78, 1716873270, '2', '123@gmail.com', '49', '1', 'AC', 'medinipur', 'kolkata', '2024-05-28', '2024-05-30', 'confirm'),
(79, 1716873270, '2', '123@gmail.com', '50', '2', 'AC', 'medinipur', 'kolkata', '2024-05-28', '2024-05-30', 'confirm'),
(80, 1716873367, '2', '123@gmail.com', '51', '3', 'AC', 'medinipur', 'kolkata', '2024-05-28', '2024-05-30', 'waiting'),
(81, 1716873367, '2', '123@gmail.com', '52', '3', 'AC', 'medinipur', 'kolkata', '2024-05-28', '2024-05-30', 'waiting'),
(82, 1716878263, '1', '123@gmail.com', '53', '1', 'AC', 'durgapur', 'kolkata', '2024-05-28', '2024-05-30', 'confirm');

-- --------------------------------------------------------

--
-- Table structure for table `buspassenger`
--

CREATE TABLE `buspassenger` (
  `passengerid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `phoneno` int(50) NOT NULL,
  `bkn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buspassenger`
--

INSERT INTO `buspassenger` (`passengerid`, `name`, `age`, `occupation`, `phoneno`, `bkn`) VALUES
(1, 'Arpita ', '987', 'student', 2147483647, '1712380660'),
(2, 'Arpita ', '88', 'jkhkj', 2147483647, '1712380660'),
(3, 'Arpita ', '88', 'student', 2147483647, '1712381951'),
(4, 'Riya', '99', 'jkhkj', 2147483647, '1712383023'),
(5, 'Riya', '88', 'student', 2147483647, '1712383230'),
(6, 'Arpita ', '88', 'student', 2147483647, '1712383364'),
(7, 'Mou', '88', 'student', 2147483647, '1712383364'),
(8, 'Priya', '99', 'student', 2147483647, '1712383364'),
(9, 'Arpita ', '88', 'student', 2147483647, '1712383560'),
(10, 'Riya', '99', 'student', 2147483647, '1712383560'),
(11, 'Priya', '66', 'jkhkj', 2147483647, '1712383560'),
(12, 'Arpita ', '88', 'student', 2147483647, '1712383933'),
(13, 'Riya', '99', 'jkhkj', 2147483647, '1712383933'),
(14, 'Arpita ', '88', 'student', 2147483647, '1712383933'),
(15, 'Arpita ', '88', 'student', 2147483647, '1712384390'),
(16, 'Arpita ', '88', 'jkhkj', 2147483647, '1712384560'),
(17, 'SAnchi', '21', 'student', 2147483647, '1712385606'),
(18, 'Arpita ', '19+', 'student', 2147483647, '1712385606'),
(19, 'mou', '987', 'jkhkj', 2147483647, '1712385606'),
(20, 'Riya', '99', 'hjgjh', 2147483647, '1712385606'),
(21, 'sou', '45', 'hjgjh', 2147483647, '1712385606'),
(22, 'Arpita ', '987', 'student', 2147483647, '1713669669'),
(23, 'Mou', '66', 'student', 2147483647, '1713669669'),
(24, 'Riya', '88', 'student', 2147483647, '1713669777'),
(25, 'Arpita ', '88', 'student', 2147483647, '1713669963'),
(26, 'Priya', '99', 'jkyjj', 2147483647, '1713962185'),
(27, 'Mou', '987', 'jkyjj', 2147483647, '1713962185'),
(28, 'mou', '99', 'jkyjj', 2147483647, '1713962185'),
(29, 'Priya', '99', 'jkyjj', 2147483647, '1713962185'),
(30, 'Arpita ', '99', 'student', 2147483647, '1714880086'),
(31, 'Arpita ', '99', 'student', 2147483647, '1714880146'),
(32, 'Arpita ', '88', 'student', 2147483647, '1714880190'),
(33, 'Arpita ', '88', 'student', 2147483647, '1714880517'),
(34, 'Arpita ', '88', 'student', 2147483647, '1714880635'),
(35, 'Riya', '19+', 'student', 2147483647, '1714881712'),
(36, 'Riya', '88', 'student', 2147483647, '1714882226'),
(37, 'Mou', '45', 'hjgjh', 2147483647, '1714882765'),
(38, 'Arpita ', '99', 'jkhkj', 2147483647, '1714883164'),
(39, 'Mou', '987', 'jkhkj', 2147483647, '1714883220'),
(40, 'Arpita ', '20', 'student', 2147483647, '1715151350'),
(41, 'Arpita ', '20', 'student', 2147483647, '1715151476'),
(42, 'Arpita ', '99', 'jkhkj', 2147483647, '1715151630'),
(43, 'Riya', '88', 'student', 2147483647, '1715152024'),
(44, 'Arpita ', '88', 'jkhkj', 2147483647, '1715152024'),
(45, 'Arpita ', '88', 'student', 2147483647, '1716008859'),
(46, 'Arpita ', '88', 'student', 2147483647, '1716121959'),
(47, 'Priya', '20', 'student', 2147483647, '1716130537'),
(48, 'Arpita ', '99', 'student', 2147483647, '1716130688'),
(49, 'Arpita ', '19+', 'student', 2147483647, '1716873270'),
(50, 'Mou', '45', 'fdvfvd', 2147483647, '1716873270'),
(51, 'Priya', '45', 'jkyjj', 2147483647, '1716873367'),
(52, 'Priya', '19+', 'fgnghn', 2147483647, '1716873367'),
(53, 'Pratham', '20', 'student', 1234567890, '1716878263'),
(54, 'Pratham', '20', 'student', 1234567890, '1716878393');

-- --------------------------------------------------------

--
-- Table structure for table `buspayment`
--

CREATE TABLE `buspayment` (
  `bkn` int(11) NOT NULL,
  `cardno` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `cvc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buspayment`
--

INSERT INTO `buspayment` (`bkn`, `cardno`, `date`, `cvc`) VALUES
(1, 55, 99, 88),
(2, 66, 77, 99),
(3, 0, 0, 0),
(4, 44, 55, 88),
(5, 55, 77, 99),
(6, 2147483647, 4, 989),
(7, 7777, 8888, 888),
(8, 77, 77, 77),
(9, 55, 77, 99),
(10, 123131321, 12122, 1221),
(11, 121232, 1322, 1323),
(12, 12345, 6, 123);

-- --------------------------------------------------------

--
-- Table structure for table `busrating`
--

CREATE TABLE `busrating` (
  `ratingid` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `ratingvalue` varchar(50) NOT NULL,
  `ratingtext` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `busroute`
--

CREATE TABLE `busroute` (
  `busrouteid` int(50) NOT NULL,
  `busroutename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `busroute`
--

INSERT INTO `busroute` (`busrouteid`, `busroutename`) VALUES
(2, 'dgp-kol'),
(5, 'tamil Nadu'),
(6, 'Karnataka'),
(7, 'Delhi'),
(8, 'kolkata');

-- --------------------------------------------------------

--
-- Table structure for table `busstopage`
--

CREATE TABLE `busstopage` (
  `stopageid` int(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `stopagename` varchar(50) NOT NULL,
  `stopagecode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `busstopage`
--

INSERT INTO `busstopage` (`stopageid`, `city`, `stopagename`, `stopagecode`) VALUES
(1, 'onda', 'Bankura', '1234'),
(3, '', 'Bankura', ''),
(6, 'ratnapur', 'durgapur', '123'),
(7, 'Kolkata', 'kolkata', '123'),
(8, 'Kolkata', 'durgapur', '123');

-- --------------------------------------------------------

--
-- Table structure for table `bustime`
--

CREATE TABLE `bustime` (
  `timeid` int(50) NOT NULL,
  `busid` int(50) NOT NULL,
  `stopagename` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bustime`
--

INSERT INTO `bustime` (`timeid`, `busid`, `stopagename`, `time`) VALUES
(1, 2, 'kolkata', '17:50'),
(2, 2, 'medinipur', '14:51'),
(4, 3, 'durgapur', '16:06'),
(6, 2, 'durgapur', '15:06'),
(8, 0, 'durgapur', '13:04');

-- --------------------------------------------------------

--
-- Table structure for table `bustoroute`
--

CREATE TABLE `bustoroute` (
  `stopagerouteid` int(50) NOT NULL,
  `busrouteid` varchar(50) NOT NULL,
  `stopagename` varchar(50) NOT NULL,
  `stopageno` varchar(50) NOT NULL,
  `km` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bustoroute`
--

INSERT INTO `bustoroute` (`stopagerouteid`, `busrouteid`, `stopagename`, `stopageno`, `km`) VALUES
(1, '1', 'kolkata', '2', 30),
(2, '1', 'durgapur', '1', 0),
(3, '2', 'kolkata', '2', 20),
(4, '2', 'medinipur', '2', 45);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `classid` int(50) NOT NULL,
  `trainid` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`classid`, `trainid`, `class`) VALUES
(20, '4', 'AC'),
(21, '5', 'NON AC');

-- --------------------------------------------------------

--
-- Table structure for table `confirmfoodbooking`
--

CREATE TABLE `confirmfoodbooking` (
  `foodbookingid` int(50) NOT NULL,
  `foodbookingno` varchar(50) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `pnr` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `subcategory` varchar(50) NOT NULL,
  `foodname` varchar(50) NOT NULL,
  `noofadult` varchar(20) NOT NULL,
  `noofchild` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `confirmfoodbooking`
--

INSERT INTO `confirmfoodbooking` (`foodbookingid`, `foodbookingno`, `useremail`, `pnr`, `category`, `subcategory`, `foodname`, `noofadult`, `noofchild`, `time`) VALUES
(12, '1713962283', '123@gmail.com', '1707547124', 'matar paneer', 'chinease', 'abc', '2', '2', 'Breakfast'),
(13, '1713962475', '123@gmail.com', '1701417186', 'matar paneer', 'chinease', 'abc', '2', '2', 'Lunch'),
(14, '1713962712', '123@gmail.com', '1701417186', 'matar paneer', 'chinease', 'abc', '2', '2', 'Lunch'),
(15, '1713963673', '123@gmail.com', '1701417186', 'matar paneer', 'chinease', 'abc', '2', '2', 'Lunch'),
(16, '1713963913', '123@gmail.com', '1701417186', 'matar paneer', 'chinease', 'abc', '2', '2', 'Lunch'),
(17, '1714270713', '123@gmail.com', '1701088657', 'matar paneer', 'chinease', 'abc', '2', '3', 'Breakfast'),
(18, '1714270713', '123@gmail.com', '1701088657', 'matar paneer', 'chinease', 'abc', '2', '1', 'Breakfast'),
(19, '1714270713', '123@gmail.com', '1701088657', 'matar paneer', 'chinease', 'abc', '2', '3', 'Breakfast'),
(20, '1715527307', '123@gmail.com', '1700924643', 'matar paneer', 'chinease', 'abc', '2', '2', 'Breakfast'),
(21, '1715776098', '123@gmail.com', '1700924643', 'matar paneer', 'chinease', 'abc', '5', '5', 'Breakfast'),
(22, '1716058378', '123@gmail.com', '1713671600', 'matar paneer', 'chinease', 'abc', '2', '5', 'Evening Snacks'),
(23, '1716877596', '123@gmail.com', '1713671600', 'matar paneer', 'chinease', 'abc', '5', '7', 'Evening Snacks');

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE `day` (
  `dayid` int(50) NOT NULL,
  `tid` varchar(50) NOT NULL,
  `day` varchar(59) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`dayid`, `tid`, `day`) VALUES
(1, '1', 'T'),
(2, '4', 'M'),
(3, '6', 'W');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `districtid` int(50) NOT NULL,
  `statename` varchar(50) NOT NULL,
  `districtname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`districtid`, `statename`, `districtname`) VALUES
(12, 'Bihar', 'Sitamarhi'),
(13, 'WestBengal', 'Kolkata');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `foodid` int(40) NOT NULL,
  `category` varchar(50) NOT NULL,
  `foodsubcategory` varchar(40) NOT NULL,
  `foodname` varchar(40) NOT NULL,
  `price` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodid`, `category`, `foodsubcategory`, `foodname`, `price`) VALUES
(0, 'matar paneer', 'chinease', 'abc', '50');

-- --------------------------------------------------------

--
-- Table structure for table `foodcategory`
--

CREATE TABLE `foodcategory` (
  `categoryid` int(40) NOT NULL,
  `categoryname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foodcategory`
--

INSERT INTO `foodcategory` (`categoryid`, `categoryname`) VALUES
(0, 'masala muri'),
(11, 'matar paneer'),
(12, 'polao'),
(13, 'jhjkh');

-- --------------------------------------------------------

--
-- Table structure for table `foodsubcategory`
--

CREATE TABLE `foodsubcategory` (
  `subcategoryid` int(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `subcategory` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foodsubcategory`
--

INSERT INTO `foodsubcategory` (`subcategoryid`, `category`, `subcategory`) VALUES
(1, 'matar paneer', 'chinease');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `passengerid` int(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `pnr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`passengerid`, `name`, `age`, `occupation`, `phoneno`, `pnr`) VALUES
(25, 'Mou', '88', 'student', '9876543210', '1696512275'),
(26, 'jhljk', '987', 'jkyjj', '7866856756', '1696512275'),
(27, 'Mou', '88', 'hjgjh', '7866856756', '1696513977'),
(28, 'Mou', '99', 'student', '7866856756', '1696513977'),
(29, 'Arpita ', '99', 'student', '9876543210', '1696653327'),
(30, 'Arpita ', '99', 'student', '9876543210', '1696654984'),
(31, 'dfgbdxf', 'rr', 'hjgjh', '9876543210', '1696657561'),
(32, 'Priya', '88', 'student', '7866856756', '1696657584'),
(33, 'Riya', '987', 'student', '7866856765', '1696657631'),
(34, 'mou', '76', 'fdvfvd', '7866856798', '1696657672'),
(35, 'sou', '45', 'fgnghn', '5678943213', '1696657765'),
(36, 'rfou', '65', ' bfgng', '9871234565', '1696657840'),
(37, 'leo', '23', 'cdvdfv', '8765433298', '1696657840'),
(38, 'tom', '34', 'fgbnthmh', '8712345956', '1696657840'),
(39, 'bn v', '66', 'ghmnfg', '9876543210', '1696658040'),
(40, 'n.n.b', 'b,bj', 'hj,hg', '9876543210', '1696658079'),
(41, 'xcvx', 'xcvx', 'xcvx', '9876543210', '1696658175'),
(42, 'xcvxc', '66', 'cxvxc', '7866856765', '1696658175'),
(43, 'xcbxccb', '6', 'fghf', '5678943213', '1696658175'),
(44, 'Mou', '99', 'student', '7866856756', '1696658233'),
(45, 'Riya', '987', 'student', '3534535675', '1696658233'),
(46, 'gfgfg', '22', 'bfgb', '7866856765', '1696658708'),
(47, 'Riya', '45', 'rbrbg', '7866856765', '1696660777'),
(48, 'don', '55', 'dfgbv', '7866856798', '1696660777'),
(49, 'fan', '66', 'tntnt', '2345678902', '1696661797'),
(50, 'vrgr', '33', 'gbgtbgb', '5678943213', '1696658175'),
(51, 'Mou', '95', 'jkhkj', '5678943213', '1696662056'),
(52, 'tonu', '34', 'efffvfv', '7866856798', '1696662056'),
(53, 'sona', '54', 'fvfvdfvd', '5678943213', '1696662056'),
(54, 'sona', '32', 'cvdcds', '7866856765', '1696662154'),
(55, 'scsc', '65', 'sbsjk', '9871234565', '1696662154'),
(56, 'Mou', '99', 'student', '5678943213', '1696662308'),
(57, 'fgh', '66', 'student', '7866856756', '1696662056'),
(58, 'Mou', '99', 'hjgjh', '5678943213', '1696662403'),
(59, 'Mou', '987', 'jkyjj', '9871234565', '1696662630'),
(60, 'hen', '44', 'frfb', '7866856756', '1696662850'),
(61, 'owl', '78', 'vffdvfdv', '7866856798', '1696662850'),
(62, 'rat', '38', 'bggf ', '9871234565', '1696662850'),
(63, 'Arpita ', '45', 'student', '9876543210', '1697112981'),
(64, 'Arpita ', '99', 'student', '9876543210', '1697113820'),
(65, 'Arpita ', '19+', 'student', '9876543210', '1697117034'),
(66, 'Arpita ', '88', 'student', '9876543210', '1697118124'),
(67, 'Arpita ', '88', 'jkhkj', '9876543210', '1697118420'),
(68, 'Mou', '987', 'hjgjh', '7866856765', '1697118496'),
(69, 'Arpita ', '88', 'student', '9876543210', '1698307262'),
(70, 'Arpita ', '88', 'student', '9876543210', '1698317695'),
(71, 'Riya', '987', 'student', '9876543210', '1698318145'),
(72, 'Arpita ', '88', 'student', '9876543210', '1698319927'),
(73, 'Riya', '88', 'student', '9876543210', '1698320146'),
(74, 'Mou', '88', 'student', '7866856756', '1698320204'),
(75, 'Arpita ', '88', 'student', '9876543210', '1698843748'),
(76, 'Arpita ', '987', 'jkyjj', '5678943213', '1699072259'),
(77, 'Mou', '987', 'jkyjj', '7866856798', '1699072259'),
(78, 'Priya', '66', 'jkyjj', '5678943213', '1699072259'),
(79, 'sou', '66', 'jkyjj', '7866856765', '1699072259'),
(80, 'Arpita ', '66', 'jkyjj', '7866856798', '1699072259'),
(81, 'Mou', '99', 'jkyjj', '5678943213', '1699073064'),
(82, 'Riya', '88', 'jkhkj', '7866856765', '1699073064'),
(83, 'sou', '987', 'jkyjj', '7866856765', '1699073064'),
(84, 'Riya', '66', 'fdvfvd', '7866856765', '1699073064'),
(85, 'sanchu', '19+', 'student', '9876543210', '1699073374'),
(86, 'somu', '19+', 'student', '9876543210', '1699073374'),
(87, 'arpu', '88', 'student', '9876543210', '1699073374'),
(88, 'pratham', '99', 'fdvfvd', '7866856765', '1699073374'),
(89, 'Arpita ', '99', 'student', '9876543210', '1699073570'),
(90, 'Riya', '88', 'student', '9876543210', '1699073570'),
(91, 'Arpita ', '99', 'student', '9876543210', '1699073570'),
(92, 'Priya', '45', 'hjgjh', '7866856756', '1699073993'),
(93, 'Mou', '45', 'jkyjj', '7866856798', '1699073993'),
(94, 'Priya', '7', 'fgnghn', '5678943213', '1699073993'),
(95, 'mou', '66', 'jkyjj', '7866856765', '1699073993'),
(96, 'Riya', '987', 'jkyjj', '7866856765', '1699074801'),
(97, 'Priya', '987', 'jkhkj', '5678943213', '1699074831'),
(98, 'Riya', '987', 'hjgjh', '5678943213', '1699074831'),
(99, 'Riya', '99', 'jkhkj', '5678943213', '1699074949'),
(100, 'Priya', '987', 'jkhkj', '5678943213', '1699074949'),
(101, 'Arpita ', '88', 'student', '9876543210', '1700278453'),
(102, 'Arpita ', '88', 'student', '9876543210', '1700278685'),
(103, 'Arpita ', '88', 'student', '9876543210', '1700280463'),
(104, 'Riya', '66', 'jkhkj', '5678943213', '1700280660'),
(105, 'mou', '99', 'student', '7866856765', '1700281387'),
(106, 'Arpita ', '987', 'jkhkj', '5678943213', '1700557441'),
(107, 'Mou', '987', 'hjgjh', '7866856765', '1700557617'),
(108, 'Priya', '99', 'student', '5678943213', '1700557834'),
(109, 'mou', '99', 'student', '5678943213', '1700558035'),
(110, 'Arpita ', '987', 'jkhkj', '5678943213', '1700558035'),
(111, 'Arpita ', '88', 'student', '5678943213', '1700558760'),
(112, 'Riya', '99', 'student', '9876543210', '1700558760'),
(113, 'Supriya', '27', 'job', '9876543210', '1700924643'),
(114, 'Arpita ', '88', 'student', '5678943213', '1700924643'),
(115, 'Arpita ', '88', 'student', '5678943213', '1700924941'),
(116, 'sumana', '55', 'student', '8927831863', '1701029085'),
(117, 'sanchita', '55', 'student', '7478254580', '1701029235'),
(118, 'sanchita', '22', 'student', '7478254580', '1701069406'),
(119, 'sanchita', '21', 'student', '7478254580', '1701069610'),
(120, 'sanchita', '20', 'ghhjh', '7478254580', '1701071052'),
(121, 'sanchita', '55', 'sdsf', '7478254580', '1701086915'),
(122, 'sumana', 'ghg', '22', '8927831863', '1701086915'),
(123, 'sayon', '22', 'ghg', '9800551998', '1701088171'),
(124, 'sanchita', '32', 'hgjhjg', '7478254580', '1701088171'),
(125, 'sayon', 'asss', '44', '9800551998', '1701088493'),
(126, 'sanchita', '23', 'ghgh', '7478254580', '1701088493'),
(127, 'sumana', '33', 'ghjgjg', '8927831863', '1701088493'),
(128, 'arpita', '20', 'student', '1234567890', '1701088493'),
(129, 'moutan', '33', 'fghg', '0987654321', '1701088493'),
(130, 'sanchita', '21', 'fhg', '7478254580', '1701088657'),
(131, 'sumana', '22', 'ghjgjg', '8927831863', '1701088657'),
(132, 'sanchita', '22', 'student', '7478254580', '1701099523'),
(133, 'swastika', '19', 'student', '9876543110', '1701415422'),
(134, 'sanchita', '20', 'student', '7478254580', '1701417186'),
(135, 'Arpita ', '88', 'student', '9876543210', '1704519768'),
(136, 'Riya', '88', 'student', '7866856765', '1704519768'),
(137, 'Mou', '99', 'student', '9876543210', '1704519768'),
(138, 'Priya', '88', 'student', '5678943213', '1704519768'),
(139, 'sou', '99', 'jkyjj', '9876543210', '1704519768'),
(140, 'Priya', '99', 'hjgjh', '7866856765', '1704519768'),
(141, 'Arpita ', '88', 'student', '9876543210', '1707025287'),
(142, 'Arpita ', '88', 'student', '9876543210', '1707025505'),
(143, 'Riya', '99', 'jkhkj', '9876543210', '1707025993'),
(144, 'Arpita ', '66', 'student', '5678943213', '1707025993'),
(145, 'Mou', '987', 'student', '5678943213', '1707025993'),
(146, 'Arpita ', '88', 'student', '9876543210', '1707028644'),
(147, 'Riya', '88', 'student', '5678943213', '1707028644'),
(148, 'Arpita ', '88', 'student', '9876543210', '1707394421'),
(149, 'Riya', '88', 'student', '9876543210', '1707395095'),
(150, 'Arpita ', '99', 'student', '7866856765', '1707395095'),
(151, 'Riya', '88', 'student', '9876543210', '1707395959'),
(152, 'Riya', '987', 'jkyjj', '7866856756', '1707395959'),
(153, 'Arpita ', '88', 'jkhkj', '9876543210', '1707396297'),
(154, 'Riya', '88', 'jkhkj', '7866856756', '1707396297'),
(155, 'Priya', '45', 'fdvfvd', '7866856756', '1707396593'),
(156, 'mou', '19+', 'fdvfvd', '7866856765', '1707396593'),
(157, 'Arpita ', '88', 'student', '9876543210', '1707397432'),
(158, 'Riya', '987', 'student', '5678943213', '1707397432'),
(159, 'mou', '66', 'fdvfvd', '7866856765', '1707397432'),
(160, 'Arpita ', '88', 'student', '9876543210', '1707397630'),
(161, 'Riya', '99', 'jkhkj', '5678943213', '1707397630'),
(162, 'Riya', '99', 'student', '9876543210', '1707397853'),
(163, 'Riya', '66', 'jkyjj', '7866856765', '1707397853'),
(164, 'Priya', '88', 'student', '7866856756', '1707398263'),
(165, 'Riya', '99', 'jkyjj', '9876543210', '1707398263'),
(166, 'Arpita ', '88', 'student', '9876543210', '1707398668'),
(167, 'Riya', '99', 'jkyjj', '9871234565', '1707398668'),
(168, 'mona', '20', 'Student', '8927831863', '1707540853'),
(169, 'mona', '20', 'Student', '8927831863', '1707541024'),
(170, 'Sumana', '20', 'Student', '8927831863', '1707541153'),
(171, 'Tufan', '19', 'student', '8101524502', '1707541153'),
(172, 'Sumana', '20', 'student', '7478254580', '1707546710'),
(173, 'Tufan', '19', 'Student', '8101524502', '1707546710'),
(174, 'Tufan', '19', 'Student', '8101524502', '1707547124'),
(175, 'Sumana', '20', 'student', '7478254580', '1707547124'),
(176, 'mona', '11', 'student', '8927831863', '1707547519'),
(177, 'Tufan', '20', 'Student', '8101524502', '1707547519'),
(178, 'Pratham', '10', 'student', '1234567890', '1707547519'),
(179, 'mona', '20', 'Student', '8927831863', '1707548576'),
(180, 'Arpita ', '88', 'student', '5678943213', '1713671600'),
(181, 'Arpita ', '99', 'jkhkj', '5678943213', '1713671600'),
(182, 'Riya', '987', 'jkhkj', '5678943213', '1713671600'),
(183, 'Arpita ', '987', 'jkhkj', '7866856765', '1713671600'),
(184, 'Mou', '88', 'jkhkj', '5678943213', '1713671600'),
(185, 'Arpita ', '987', 'jkhkj', '9876543210', '1713671600'),
(186, 'Arpita ', '88', 'student', '9876543210', '1713674632'),
(187, 'Arpita ', '99', 'student', '7866856756', '1713674696'),
(188, 'Riya', '66', 'jkhkj', '5678943213', '1713674696'),
(189, 'Riya', '99', 'student', '9876543210', '1713674696'),
(190, 'Arpita ', '987', 'jkyjj', '5678943213', '1713674696'),
(191, 'Riya', '88', 'student', '9876543210', '1713677822'),
(192, 'Arpita ', '99', 'student', '9876543210', '1713677822'),
(193, 'Arpita ', '88', 'jkhkj', '9876543210', '1713677872'),
(194, 'Riya', '88', 'student', '5678943213', '1713677902'),
(195, 'Arpita ', '45', 'jkhkj', '9876543210', '1713677902'),
(196, 'Priya', '19+', 'student', '5678943213', '1713677902'),
(197, 'Riya', '99', 'jkhkj', '5678943213', '1713677902'),
(198, 'Arpita ', '987', 'jkhkj', '7866856756', '1713678021'),
(199, 'Arpita ', '88', 'student', '9876543210', '1713678477'),
(200, 'Riya', '987', 'jkhkj', '9876543210', '1713678477'),
(201, 'Riya', '88', 'student', '5678943213', '1713678477'),
(202, 'Arpita ', '88', 'jkhkj', '5678943213', '1713958801'),
(203, 'mona', '20', 'student', '9090909090', '1713958878'),
(204, 'Riya', '88', 'jkyjj', '9876543210', '1713959108'),
(205, 'Mou', '987', 'jkhkj', '5678943213', '1713959108'),
(206, 'Riya', '99', 'jkhkj', '5678943213', '1713959108'),
(207, 'Arpita ', '88', 'student', '5678943213', '1713959211'),
(208, 'Arpita ', '20', 'student', '9876543210', '1713959569'),
(209, 'Riya', '99', 'student', '9876543210', '1713959569'),
(210, 'Riya', '99', 'student', '5678943213', '1713959650'),
(211, 'Arpita ', '987', 'student', '9876543210', '1713959650'),
(212, 'Arpita ', '88', 'student', '7866856765', '1713959650'),
(213, 'Priya', '45', 'jkhkj', '9876543210', '1713959720'),
(214, 'mou', '19+', 'jkhkj', '7866856765', '1713959720'),
(215, 'Arpita ', '88', 'student', '9876543210', '1713960108'),
(216, 'Arpita ', '88', 'student', '9876543210', '1713960108'),
(217, 'Arpita ', '88', 'jkhkj', '9876543210', '1713960214'),
(218, 'Riya', '987', 'student', '5678943213', '1713960315'),
(219, 'Riya', '99', 'jkhkj', '5678943213', '1713960315'),
(220, 'Mou', '66', 'student', '7866856765', '1713960315'),
(221, 'Priya', '987', 'jkhkj', '7866856765', '1713960315'),
(222, 'Arpita ', '99', 'jkhkj', '5678943213', '1713960315'),
(223, 'sou', '99', 'jkhkj', '7866856798', '1713960315'),
(224, 'Riya', '99', 'student', '5678943213', '1713960664'),
(225, 'Arpita ', '88', 'student', '5678943213', '1713961025'),
(226, 'Arpita ', '99', 'hjgjh', '5678943213', '1713961025'),
(227, 'Mou', '99', 'jkhkj', '5678943213', '1713961025'),
(228, 'Mou', '987', 'jkyjj', '7866856756', '1713961025'),
(229, 'Riya', '987', 'student', '7866856765', '1713961025'),
(230, 'Riya', '99', 'jkhkj', '7866856765', '1713961025'),
(231, 'Riya', '66', 'jkhkj', '5678943213', '1713961025'),
(232, 'Riya', '88', 'jkhkj', '5678943213', '1713961565'),
(233, 'Arpita ', '88', 'student', '9876543210', '1715152410'),
(234, 'Arpita ', '88', 'student', '9876543210', '1715152568'),
(235, 'Arpita ', '88', 'student', '9876543210', '1715153054'),
(236, 'Mou', '99', 'jkhkj', '9876543210', '1715153054'),
(237, 'Riya', '88', 'jkhkj', '9876543210', '1715153277'),
(238, 'Arpita ', '88', 'student', '9876543210', '1715153486'),
(239, 'Arpita ', '19+', 'student', '9876543210', '1716011088'),
(240, 'Riya', '99', 'student', '5678943213', '1716122497'),
(241, 'Arpita ', '88', 'student', '7866856765', '1716124528'),
(242, 'Riya', '88', 'student', '9876543210', '1716130821'),
(243, 'Arpita ', '88', 'jkhkj', '5678943213', '1716132293'),
(244, 'Arpita ', '19+', 'student', '9876543210', '1716872732'),
(245, 'Riya', '19+', 'student', '5678943213', '1716872732'),
(246, 'Mou', '45', 'staff', '7866856765', '1716872893'),
(247, 'mou', '66', 'fgnghn', '7866856798', '1716872893'),
(248, 'sou', '88', 'ghjg', '9871234565', '1716873021'),
(249, 'Priya', '45', 'fgnghn', '9871234565', '1716873102'),
(250, 'moutan', '22', 'Student', '9876543210', '1716873102'),
(251, 'pratham', '21', 'staff', '7866856756', '1716873102'),
(252, 'Pratham', '20', 'student', '1234567890', '1716876941');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `ratingid` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `ratingvalue` varchar(50) NOT NULL,
  `ratingtext` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`ratingid`, `userid`, `ratingvalue`, `ratingtext`) VALUES
(1, 'sumana@gmail.com', '4', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `routeid` int(100) NOT NULL,
  `routename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`routeid`, `routename`) VALUES
(1, 'Durgapur'),
(2, 'kolkata'),
(10, 'darjeeling'),
(13, 'simlapal');

-- --------------------------------------------------------

--
-- Table structure for table `selectfood`
--

CREATE TABLE `selectfood` (
  `orderid` int(50) NOT NULL,
  `pnr` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `subcategory` varchar(50) NOT NULL,
  `foodname` varchar(50) NOT NULL,
  `noofadult` varchar(11) NOT NULL,
  `noofchild` varchar(11) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `selectfood`
--

INSERT INTO `selectfood` (`orderid`, `pnr`, `category`, `subcategory`, `foodname`, `noofadult`, `noofchild`, `time`) VALUES
(9, '1700924941', 'matar paneer', 'chinease', 'abc', '3', '2', 'Breakfast'),
(10, '1700924941', 'matar paneer', 'chinease', 'abc', '3', '2', 'Breakfast'),
(11, '1700924941', 'matar paneer', 'chinease', 'abc', '3', '2', 'Breakfast'),
(12, '1700924941', 'matar paneer', 'chinease', 'abc', '3', '2', 'Breakfast'),
(13, '1700924941', 'matar paneer', 'chinease', 'abc', '3', '2', 'Breakfast'),
(14, '1700924941', 'matar paneer', 'chinease', 'abc', '3', '2', 'Breakfast'),
(15, '1700924941', 'matar paneer', 'chinease', 'abc', '3', '2', 'Breakfast'),
(16, '1700924941', 'matar paneer', 'chinease', 'abc', '3', '2', 'Breakfast'),
(17, '1700924941', 'matar paneer', 'chinease', 'abc', '3', '2', 'Breakfast'),
(18, '1700924941', 'matar paneer', 'chinease', 'abc', '3', '2', 'Breakfast'),
(19, '1700924941', 'matar paneer', 'chinease', 'abc', '3', '2', 'Breakfast'),
(20, '1700924941', 'matar paneer', 'chinease', 'abc', '3', '2', 'Breakfast'),
(23, '1707547124', 'matar paneer', 'chinease', 'abc', '2', '2', 'Breakfast');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `stateid` int(50) NOT NULL,
  `statename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`stateid`, `statename`) VALUES
(6, 'Rajasthan'),
(7, 'WestBengal'),
(13, 'dgp');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `stationid` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `stationname` varchar(50) NOT NULL,
  `stationcode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`stationid`, `city`, `stationname`, `stationcode`) VALUES
(9, '', 'kolkara', ''),
(10, 'onda', 'Bankura', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `stationinroute`
--

CREATE TABLE `stationinroute` (
  `stationrouteid` int(50) NOT NULL,
  `routeid` varchar(50) NOT NULL,
  `stationname` varchar(50) NOT NULL,
  `stationno` varchar(50) NOT NULL,
  `km` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stationinroute`
--

INSERT INTO `stationinroute` (`stationrouteid`, `routeid`, `stationname`, `stationno`, `km`) VALUES
(11, '2', 'bankura', '102', '10'),
(12, '2', 'durgapur', '1111', '0'),
(27, '13', 'Bankura', '9', '90');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `timeid` int(11) NOT NULL,
  `trainid` varchar(50) NOT NULL,
  `stationname` varchar(50) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`timeid`, `trainid`, `stationname`, `time`) VALUES
(2, '4', 'kolkata', '07:00:00'),
(3, '5', 'bankura', '09:00:00'),
(5, '', 'bankura', '13:12:00'),
(6, '4', 'dgp', '08:51:00'),
(7, '4', 'bankura', '05:54:00'),
(9, '5', 'Dgp', '02:59:00'),
(11, '6', 'kolkata', '13:15:00'),
(12, '6', 'durgapur', '14:16:00'),
(15, '', 'durgapur', '13:44:00');

-- --------------------------------------------------------

--
-- Table structure for table `trainaccount`
--

CREATE TABLE `trainaccount` (
  `accid` int(50) NOT NULL,
  `trainid` varchar(50) NOT NULL,
  `from` varchar(50) NOT NULL,
  `to` varchar(50) NOT NULL,
  `noofadult` varchar(50) NOT NULL,
  `noofchild` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `pnr` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `mode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainaccount`
--

INSERT INTO `trainaccount` (`accid`, `trainid`, `from`, `to`, `noofadult`, `noofchild`, `price`, `type`, `pnr`, `date`, `mode`) VALUES
(1, '5', 'bankura', 'durgapur', '2', '0', 100, 'AC', '1707546710', '2024-02-10', ''),
(2, '4', 'bankura', 'durgapur', '2', '0', 100, 'AC', '1707547124', '2024-02-10', ''),
(3, '5', 'bankura', 'durgapur', '1', '2', 100, 'AC', '1707547519', '2024-02-10', ''),
(4, '5', 'bankura', 'durgapur', '1', '0', 50, 'AC', '1707548576', '2024-02-10', 'Online'),
(5, '5', 'bankura', 'durgapur', '1', '0', 50, 'AC', '1713674632', '2024-04-21', 'Online'),
(6, '4', 'bankura', 'durgapur', '4', '0', 200, 'AC', '1713674696', '2024-04-21', 'Online'),
(7, '4', 'bankura', 'durgapur', '1', '0', 50, 'AC', '1713677872', '2024-04-21', 'Online'),
(8, '4', 'bankura', 'durgapur', '4', '0', 200, 'AC', '1713677902', '2024-04-21', 'Online'),
(9, '5', 'bankura', 'durgapur', '1', '0', 50, 'AC', '1713678021', '2024-04-21', 'Online'),
(10, '4', 'bankura', 'durgapur', '3', '0', 150, 'AC', '1713678477', '2024-04-21', 'Online'),
(11, '4', 'durgapur', 'bankura', '1', '0', 50, 'AC', '1713958878', '2024-04-24', 'Online'),
(12, '4', 'durgapur', 'bankura', '3', '0', 150, 'AC', '1713959108', '2024-04-24', 'Online'),
(13, '4', 'durgapur', 'bankura', '1', '0', 50, 'AC', '1713959211', '2024-04-24', 'Online'),
(14, '5', 'durgapur', 'bankura', '2', '0', 100, 'AC', '1713959569', '2024-04-24', 'Online'),
(15, '5', 'durgapur', 'bankura', '3', '0', 150, 'AC', '1713959650', '2024-04-24', 'Online'),
(16, '4', 'durgapur', 'bankura', '2', '0', 100, 'AC', '1713959720', '2024-04-24', 'Online'),
(17, '5', 'durgapur', 'bankura', '2', '0', 100, 'AC', '1713960108', '2024-04-24', 'Online'),
(18, '5', 'durgapur', 'bankura', '1', '0', 50, 'AC', '1713960214', '2024-04-24', 'Online'),
(19, '4', 'durgapur', 'bankura', '6', '0', 300, 'AC', '1713960315', '2024-04-24', 'Online'),
(20, '4', 'durgapur', 'bankura', '1', '0', 50, 'AC', '1713960664', '2024-04-24', 'Online'),
(21, '5', 'durgapur', 'bankura', '7', '0', 350, 'AC', '1713961025', '2024-04-24', 'Online'),
(22, '5', 'durgapur', 'bankura', '1', '0', 50, 'AC', '1713961565', '2024-04-24', 'Online'),
(23, '5', 'durgapur', 'bankura', '1', '0', 50, 'AC', '1715152410', '2024-05-08', 'Online'),
(24, '4', 'durgapur', 'bankura', '1', '0', 50, 'AC', '1715152568', '2024-05-08', 'Online'),
(25, '4', 'bankura', 'durgapur', '2', '0', 100, 'AC', '1715153054', '2024-05-08', 'Online'),
(26, '4', 'bankura', 'durgapur', '1', '0', 50, 'AC', '1715153277', '2024-05-08', 'Online'),
(27, '5', 'durgapur', 'bankura', '1', '0', 50, 'AC', '1715153486', '2024-05-08', 'Online'),
(28, '4', 'bankura', 'durgapur', '1', '0', 50, 'AC', '1716011088', '2024-05-18', 'Online'),
(29, '5', 'bankura', 'durgapur', '1', '0', 50, 'AC', '1716013228', '2024-05-18', 'Online'),
(30, '5', 'bankura', 'durgapur', '1', '0', 50, 'AC', '1716056311', '2024-05-18', 'online'),
(31, '5', 'bankura', 'durgapur', '1', '0', 50, 'AC', '1716056367', '2024-05-18', 'online'),
(32, '5', 'bankura', 'durgapur', '1', '0', 50, 'AC', '1716058411', '2024-05-19', 'online'),
(33, '5', 'Bankura', 'durgapur', '1', '0', 50, 'AC', '1716865953', '2024-05-28', 'online'),
(34, '5', 'Bankura', 'durgapur', '1', '0', 50, 'AC', '1716876941', '2024-05-28', 'online');

-- --------------------------------------------------------

--
-- Table structure for table `trainpayment`
--

CREATE TABLE `trainpayment` (
  `pnr` int(11) NOT NULL,
  `cardno` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `cvc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainpayment`
--

INSERT INTO `trainpayment` (`pnr`, `cardno`, `date`, `cvc`) VALUES
(1, 7777, 8888, 888),
(2, 7, 77, 787),
(3, 77, 77, 77),
(4, 1232, 121, 1222),
(5, 11, 12, 55),
(6, 12133, 1231112, 12121),
(7, 1231322, 2121321, 21212),
(8, 12332, 4656, 666),
(9, 12345, 9, 2345);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmpassword` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `secondname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `marriedstatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `email`, `password`, `confirmpassword`, `Firstname`, `secondname`, `lastname`, `address`, `phonenumber`, `pincode`, `country`, `city`, `state`, `district`, `occupation`, `dob`, `gender`, `nationality`, `marriedstatus`) VALUES
(101, '123@gmail.com', '12345', '12345', 'Riya', 'Kumar ', 'Roy', 'durgapur', '9832189384', '713205', 'India', 'Dugapur', 'West Bengal', '', 'Student', '23/05/2003', 'female', 'Hindu', 'Unmarried'),
(103, 'admin@gmail.com', 'Sumana@123', 'Sumana', 'Sumana@123', '', 'Malgope', 'Baharabandh,Bankura', '8927831863', '722152', 'India', 'onda', 'WestBengal', 'Kolkata', 'Student', '2024-05-21', 'on', 'hindu', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbus`
--
ALTER TABLE `addbus`
  ADD PRIMARY KEY (`busid`);

--
-- Indexes for table `addtrain`
--
ALTER TABLE `addtrain`
  ADD PRIMARY KEY (`trainid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `boggies`
--
ALTER TABLE `boggies`
  ADD PRIMARY KEY (`boggiesid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `busaccount`
--
ALTER TABLE `busaccount`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `busbooking`
--
ALTER TABLE `busbooking`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `buspassenger`
--
ALTER TABLE `buspassenger`
  ADD PRIMARY KEY (`passengerid`);

--
-- Indexes for table `buspayment`
--
ALTER TABLE `buspayment`
  ADD PRIMARY KEY (`bkn`);

--
-- Indexes for table `busrating`
--
ALTER TABLE `busrating`
  ADD PRIMARY KEY (`ratingid`);

--
-- Indexes for table `busroute`
--
ALTER TABLE `busroute`
  ADD PRIMARY KEY (`busrouteid`);

--
-- Indexes for table `busstopage`
--
ALTER TABLE `busstopage`
  ADD PRIMARY KEY (`stopageid`);

--
-- Indexes for table `bustime`
--
ALTER TABLE `bustime`
  ADD PRIMARY KEY (`timeid`);

--
-- Indexes for table `bustoroute`
--
ALTER TABLE `bustoroute`
  ADD PRIMARY KEY (`stopagerouteid`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`classid`);

--
-- Indexes for table `confirmfoodbooking`
--
ALTER TABLE `confirmfoodbooking`
  ADD PRIMARY KEY (`foodbookingid`);

--
-- Indexes for table `day`
--
ALTER TABLE `day`
  ADD PRIMARY KEY (`dayid`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`districtid`);

--
-- Indexes for table `foodcategory`
--
ALTER TABLE `foodcategory`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `foodsubcategory`
--
ALTER TABLE `foodsubcategory`
  ADD PRIMARY KEY (`subcategoryid`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`passengerid`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`ratingid`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`routeid`);

--
-- Indexes for table `selectfood`
--
ALTER TABLE `selectfood`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`stateid`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`stationid`);

--
-- Indexes for table `stationinroute`
--
ALTER TABLE `stationinroute`
  ADD PRIMARY KEY (`stationrouteid`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`timeid`);

--
-- Indexes for table `trainaccount`
--
ALTER TABLE `trainaccount`
  ADD PRIMARY KEY (`accid`);

--
-- Indexes for table `trainpayment`
--
ALTER TABLE `trainpayment`
  ADD PRIMARY KEY (`pnr`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbus`
--
ALTER TABLE `addbus`
  MODIFY `busid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `addtrain`
--
ALTER TABLE `addtrain`
  MODIFY `trainid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `boggies`
--
ALTER TABLE `boggies`
  MODIFY `boggiesid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `busaccount`
--
ALTER TABLE `busaccount`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `busbooking`
--
ALTER TABLE `busbooking`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `buspassenger`
--
ALTER TABLE `buspassenger`
  MODIFY `passengerid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `buspayment`
--
ALTER TABLE `buspayment`
  MODIFY `bkn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `busrating`
--
ALTER TABLE `busrating`
  MODIFY `ratingid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `busroute`
--
ALTER TABLE `busroute`
  MODIFY `busrouteid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `busstopage`
--
ALTER TABLE `busstopage`
  MODIFY `stopageid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bustime`
--
ALTER TABLE `bustime`
  MODIFY `timeid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bustoroute`
--
ALTER TABLE `bustoroute`
  MODIFY `stopagerouteid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `classid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `confirmfoodbooking`
--
ALTER TABLE `confirmfoodbooking`
  MODIFY `foodbookingid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `day`
--
ALTER TABLE `day`
  MODIFY `dayid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `districtid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `foodcategory`
--
ALTER TABLE `foodcategory`
  MODIFY `categoryid` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `foodsubcategory`
--
ALTER TABLE `foodsubcategory`
  MODIFY `subcategoryid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `passengerid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `ratingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `routeid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `selectfood`
--
ALTER TABLE `selectfood`
  MODIFY `orderid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `stateid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `stationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stationinroute`
--
ALTER TABLE `stationinroute`
  MODIFY `stationrouteid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `timeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `trainaccount`
--
ALTER TABLE `trainaccount`
  MODIFY `accid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `trainpayment`
--
ALTER TABLE `trainpayment`
  MODIFY `pnr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
