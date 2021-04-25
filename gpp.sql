-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2020 at 07:33 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gpp`
--

-- --------------------------------------------------------

--
-- Table structure for table `camera`
--

CREATE TABLE `camera` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `class` varchar(200) NOT NULL,
  `dnd` varchar(200) NOT NULL,
  `dw` varchar(200) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lon` varchar(50) NOT NULL,
  `loc` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `coins` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `camera`
--

INSERT INTO `camera` (`id`, `email`, `class`, `dnd`, `dw`, `lat`, `lon`, `loc`, `date`, `coins`, `image`) VALUES
(169, 'akhil@gmail.com', 'paper', 'Degradable', 'Dry', '18.9780318', '72.8396279', '', '2020-02-03', 0, ''),
(170, 'akhil@gmail.com', 'paper', 'Degradable', 'Dry', '18.9780318', '72.8396279', 'Byculla East', '2020-02-03', 0, ''),
(171, 'akhil@gmail.com', 'paper,paper', 'Degradable,Degradable', 'Dry,Dry', '18.9780318', '72.8396279', 'Byculla East', '2020-02-03', 0, ''),
(179, 'akhil@gmail.com', 'paper', 'Degradable', 'Dry', '18.9780318', '72.8396279', 'Byculla East', '2020-02-03', 0, ''),
(180, 'akhil@gmail.com', 'paper', 'Degradable', 'Dry', '18.9780318', '72.8396279', 'Byculla East', '2020-02-03', 10, ''),
(181, 'akhil@gmail.com', 'paper', 'Degradable', 'Dry', '19.0724278', '72.89935', 'Ghatkopar East', '2020-02-04', 10, ''),
(183, 'akhil@gmail.com', 'metal_can', 'Non-Degradable', 'Dry', '19.0729132', '72.8974169', 'Ghatkopar East', '2020-02-08', 10, ''),
(184, 'akhil@gmail.com', 'paper', 'Degradable', 'Dry', '19.0726144', '72.863744', 'Santacruz East', '2020-02-08', 10, '5e3e73da119d0'),
(185, 'akhil@gmail.com', 'paper,organic', 'Degradable,Degradable', 'Dry,Wet', '19.0726144', '72.863744', 'Santacruz East', '2020-02-08', 10, '5e3e7507c30f0'),
(186, 'akhil@gmail.com', 'paper', 'Degradable', 'Dry', '19.0726144', '72.863744', 'Santacruz East', '2020-02-08', 10, '5e3e7572b892f'),
(188, 'akhil@gmail.com', 'plastic', 'Non-Degradable', 'Dry', '19.0743444', '72.9136772', 'Ramabai Ambedkar Nagar', '2020-02-08', 10, 'akhil@gmail.com5e3f000aaf222'),
(190, 'akhil@gmail.com', 'plastic', 'Non-Degradable', 'Dry', '19.0743444', '72.9136772', 'Ramabai Ambedkar Nagar', '2020-02-08', 10, 'akhil@gmail.com5e3f00f5d23bb'),
(191, 'yash@gmail.com', 'cardboard', 'Degradable', 'Dry', '19.0455941', '72.8707436', 'Sion East', '2020-02-10', 10, 's@s.com5e415b065222f'),
(192, 'user@1.com', 'cardboard', 'Degradable', 'Dry', '19.0455941', '72.8707436', 'Sion East', '2020-02-10', 10, '1 (3)'),
(194, 'ram@gmail.com', 'paper', 'Degradable', 'Dry', '19.0456901', '72.8707727', 'Sion East', '2020-02-10', 10, 'gpp2@gmail.com5e4170b4c31da'),
(195, 'ram@gmail.com', 'paper', 'Degradable', 'Dry', '19.0456901', '72.8707727', 'Sion East', '2020-02-10', 10, 'gpp2@gmail.com5e4170c1228e5'),
(201, 'mohit@mastek.com', 'glass_bottle,metal_can,cardboard', 'Non-Degradable,Non-Degradable,Degradable', 'Dry,Dry,Dry', '19.0742748', '72.9136542', 'Ramabai Ambedkar Nagar', '2020-02-10', 10, 'gpp@mastek.com5e41968c2ef07'),
(202, 'yash@gmail.com', 'cardboard', 'Degradable', 'Dry', '19.0724933', '72.899465', 'Ghatkopar East', '2020-02-11', 10, 'user@2.com5e42f18fa68d0'),
(203, 'mohit@gmail.com', 'cardboard', 'Degradable', 'Dry', '19.0724933', '72.899465', 'Ghatkopar East', '2020-02-11', 10, 'user@2.com5e42f1b45e289'),
(204, 'user@1.com', 'plastic_wrapper,medical_waste,cardboard,plastic_wrapper,organic,glass_bottle,organic', 'Non-Degradable,,Degradable,Non-Degradable,Degradable,Non-Degradable,Degradable', 'Dry,,Dry,Dry,Wet,Dry,Wet', '19.0456806', '72.8708161', 'Sion East', '2020-02-12', 10, '1 (5)'),
(205, 'user@1.com', 'medical_waste,glass_bottle,cardboard,plastic_wrapper,organic', 'Medical Waste,Non-Degradable,Degradable,Non-Degradable,Degradable', 'Dry,Dry,Dry,Dry,Wet', '19.0456806', '72.8708161', 'Sion East', '2020-02-12', 10, '1 (11)'),
(206, 'user@1.com', 'medical_waste,cardboard,plastic_wrapper,plastic_bag,plastic_bottle,syringe,glass_bottle', 'Medical Waste,Degradable,Non-Degradable,Banned_plastic,Non-Degradable,Medical Waste,Non-Degradable', 'Dry,Dry,Dry,Banned_plastic,Dry,Dry,Dry', '19.0456806', '72.8708161', 'Sion East', '2020-02-12', 10, '1 (4)'),
(207, 'user@1.com', 'medical_waste,cardboard,plastic_bag,plastic_wrapper', 'Medical Waste,Degradable,Non-Degradable,Non-Degradable', 'Dry,Dry,Dry,Dry', '19.0456806', '72.8708161', 'Sion East', '2020-02-12', 10, '1 (5)'),
(208, 'user@1.com', 'medical_waste,cardboard,plastic_bag,plastic_wrapper,plastic_wrapper,metal_can', 'Medical Waste,Degradable,Non-Degradable,Non-Degradable,Non-Degradable,Non-Degradable', 'Dry,Dry,Dry,Dry,Dry,Dry', '19.0456806', '72.8708161', 'Sion East', '2020-02-12', 10, '1 (7)'),
(214, 'user@1.com', 'glass_bottle,medical_waste,cardboard,plastic_wrapper,plastic_bottle,organic,metal_can,plastic_bag,metal_can', 'Non-Degradable,Medical Waste,Degradable,Non-Degradable,Non-Degradable,Degradable,Non-Degradable,Non-Degradable,Non-Degradable', 'Dry,Dry,Dry,Dry,Dry,Wet,Dry,Dry,Dry', '19.0456806', '72.8708161', 'Sion East', '2020-02-12', 10, '1 (1)'),
(216, 'user@1.com', 'glass_bottle,cardboard,plastic_bottle,plastic_bag,plastic_wrapper,organic,medical_waste,metal_can', 'Non-Degradable,Degradable,Non-Degradable,Non-Degradable,Non-Degradable,Degradable,Medical Waste,Non-Degradable', 'Dry,Dry,Dry,Dry,Dry,Wet,Dry,Dry', '19.0456806', '72.8708161', 'Sion East', '2020-02-12', 10, '1 (8)'),
(217, 'user@1.com', 'cardboard,glass_bottle,plastic_wrapper,medical_waste,plastic_bottle,plastic_bag,organic,metal_can', 'Degradable,Non-Degradable,Non-Degradable,Medical Waste,Non-Degradable,Non-Degradable,Degradable,Non-Degradable', 'Dry,Dry,Dry,Dry,Dry,Dry,Wet,Dry', '19.0456806', '72.8708161', 'Sion East', '2020-02-12', 10, '1 (5)'),
(218, 'user@1.com', 'metal_can', 'Non-Degradable', 'Dry', '19.0456806', '72.8708161', 'Sion East', '2020-02-12', 10, '1 (2)'),
(219, 'user@1.com', 'paper,plastic_wrapper,plastic_bottle,plastic_cup', 'Degradable,Non-Degradable,Non-Degradable,Non-Degradable', 'Dry,Dry,Dry,Dry', '19.0456806', '72.8708161', 'Sion East', '2020-02-14', 10, 'user@1.com5e46ade38e4af'),
(220, 'user@1.com', 'paper', 'Degradable', 'Dry', '19.0456806', '72.8708161', 'Sion East', '2020-02-14', 10, 'user@1.com5e46b66662a14'),
(221, 'user@1.com', 'plastic_wrapper,metal,plastic_bag', 'Non-Degradable,Non-Degradable,Non-Degradable', 'Dry,Dry,Banned_plastic', '19.0456806', '72.8708161', 'Sion East', '2020-02-14', 10, 'user@1.com5e46b8de08b33');

-- --------------------------------------------------------

--
-- Table structure for table `camera_worker`
--

CREATE TABLE `camera_worker` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `class` varchar(200) NOT NULL,
  `dnd` varchar(200) NOT NULL,
  `dw` varchar(200) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lon` varchar(50) NOT NULL,
  `loc` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `coins` int(11) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `camera_worker`
--

INSERT INTO `camera_worker` (`id`, `email`, `class`, `dnd`, `dw`, `lat`, `lon`, `loc`, `date`, `coins`, `image`) VALUES
(1, 'worker@gmail.com', 'cardboard', 'Degradable', 'Dry', '19.055019', '72.840524', 'Bandra West', '2020-02-02', 0, '1 (1)'),
(2, 'worker@gmail.com', 'paper,cardboard', 'Degradable,Degradable', 'Dry,Dry', '19.065330', '72.823180', 'Bandra West', '2020-02-02', 0, '1 (2)'),
(3, 'worker@gmail.com', 'paper', 'Degradable', 'Dry', '19.049570', '72.831001', 'Bandra West', '2020-02-02', 0, '1 (3)'),
(4, 'worker@gmail.com', 'paper', 'Degradable', 'Dry', '19.058335', '72.830266	', 'Bandra West', '2020-02-02', 0, '1 (4)'),
(5, 'worker@gmail.com', 'paper', 'Degradable', 'Dry', '19.060832', '72.830807', 'Bandra West', '2020-02-02', 0, '1 (5)'),
(6, 'worker@gmail.com', 'paper', 'Degradable', 'Dry', '19.042061', '72.818608	', 'Bandra West', '2020-02-02', 0, '1 (6)'),
(7, 'worker@gmail.com', 'paper', 'Degradable', 'Dry', '18.991423', '72.836458', 'Parel', '2020-02-02', 0, '1 (7)'),
(8, 'worker@gmail.com', 'paper', 'Degradable', 'Wet', '19.001388', '72.842077', 'Parel', '2020-02-02', 0, '1 (2)'),
(9, 'worker@gmail.com', 'paper', 'Degradable', 'Dry', '18.999443', '72.840501', 'Parel', '2020-02-02', 0, '1 (1)'),
(10, 'worker@gmail.com', 'paper,paper', 'Degradable,Degradable', 'Dry,Dry', '18.991423', '72.836458', 'Parel', '2020-02-02', 0, '1 (3)'),
(158, 'worker@gmail.com', 'plastic_cup', 'Non-Degradable', 'Dry', '18.997981', '72.840663', 'Parel', '2020-02-03', 0, '1 (4)'),
(159, 'worker@gmail.com', 'paper', 'Degradable', 'Dry', '18.938423', '72.832945', 'Fort', '2020-02-03', 0, '1 (5)'),
(162, 'worker@gmail.com', 'plastic_bottle,paper_cup,silver_foil,cardboard,organic', 'Non-Degradable,Degradable,Non-Degradable,Degradable,Degradable', 'Dry,Dry,Dry,Dry,Wet', '18.927135', '72.831604', 'Fort', '2020-02-03', 0, '1 (7)'),
(164, 'worker@gmail.com', 'paper,metal_can', 'Degradable,Non-Degradable', 'Dry,Dry', '18.932495', '72.831500', 'Fort', '2020-02-03', 0, '1 (1)'),
(165, 'worker@gmail.com', 'paper,paper', 'Degradable,Degradable', 'Dry,Dry', '18.928797', '72.828950', 'Fort', '2020-02-03', 0, '1 (8)'),
(181, 'worker@gmail.com', 'metal_can,plastic_bag,metal_can,paper_cup', 'Non-Degradable,Non-Degradable,Non-Degradable,Degradable', 'Dry,Wet', ' 19.024558', '72.850148', 'Matunga East', '2020-02-06', 10, '1 (8)'),
(182, 'worker@gmail.com', 'plastic_bag,paper_cup,silver_foil,paper,metal_can,metal_can,paper,paper', 'Non-Degradable,Degradable,Non-Degradable,Degradable,Non-Degradable,Non-Degradable,Degradable,Degradable', 'Dry,Dry,Dry,Dry,Dry,Dry,Dry,Dry', ' 19.024558', '72.850148', 'Matunga ', '2020-02-06', 10, '1 (10)'),
(183, 'worker@gmail.com', 'thermocol,silver_foil,paper,silver_foil', 'Non-Degradable,Non-Degradable,Degradable,Non-Degradable', 'Dry,Dry,Dry,Dry', ' 19.024558', '72.850148', 'Matunga ', '2020-02-06', 10, '1 (11)'),
(184, 'worker@gmail.com', 'metal_can,paper,cardboard,paper,thermocol,plastic_bag,plastic_bottle,plastic_bag,cardboard', 'Non-Degradable,Degradable,Degradable,Degradable,Non-Degradable,Non-Degradable,Non-Degradable,Non-Degradable,Degradable', 'Dry,Dry,Dry,Dry,Dry,Dry,Dry,Dry,Dry', ' 19.024558', '72.850148', 'Matunga ', '2020-02-06', 10, '1 (9)'),
(185, 'worker@gmail.com', 'metal_can,paper,paper,paper,silver_foil,plastic_bag', 'Non-Degradable,Degradable,Degradable,Degradable,Non-Degradable,Non-Degradable', 'Dry,Dry,Dry,Dry,Dry,Dry', '19.0742744', '72.9136532', 'Ramabai Ambedkar Nagar', '2020-02-06', 10, '1 (4)'),
(186, 'worker@gmail.com', 'organic,paper,organic', 'Degradable,Degradable,Degradable', 'Wet,Dry,Wet', '19.0742748', '72.9136522', 'Ramabai Ambedkar Nagar', '2020-02-06', 5, '1 (7)'),
(187, 'worker@gmail.com', 'paper,plastic_box,thermocol,plastic_bag,cardboard,cardboard,organic', 'Degradable,Non-Degradable,Non-Degradable,Non-Degradable,Degradable,Degradable,Non-Degradable', 'Dry,Dry,Dry,Dry,Dry,Dry,Dry', '19.0742738', '72.9136542', 'Ramabai Ambedkar Nagar', '2020-02-06', 10, '1 (5)'),
(232, 'worker@1.com', 'plastic_wrapper,plastic_bottle,glass_bottle', 'Non-Degradable,Non-Degradable,Non-Degradable', 'Dry,Dry,Dry', '19.045497', '72.8713018', 'Sion East', '2020-02-12', 0, '1 (8)'),
(233, 'worker@1.com', 'plastic_bottle,plastic_bottle,glass_bottle,cardboard,plastic_bag,plastic_bottle,paper', 'Non-Degradable,Non-Degradable,Non-Degradable,Degradable,Non-Degradable,Non-Degradable,Degradable', 'Dry,Dry,Dry,Dry,Dry,Dry,Dry', '19.0456842', '72.8708163', 'Sion East', '2020-02-12', 0, '1 (3)'),
(235, 'worker@1.com', 'metal_can,glass_bottle,plastic_bottle,paper,cardboard,plastic_bag,plastic_bottle', 'Non-Degradable,Non-Degradable,Non-Degradable,Degradable,Degradable,Non-Degradable,Non-Degradable', 'Dry,Dry,Dry,Dry,Dry,Dry,Dry', '19.0456806', '72.8708161', 'Sion East', '2020-02-12', 0, '1 (7)'),
(236, 'worker@1.com', 'paper,plastic_cup,paper,plastic_bottle,plastic_bag,plastic,organic', 'Degradable,Non-Degradable,Degradable,Non-Degradable,Non-Degradable,Non-Degradable', 'Dry,Dry,Dry,Dry,Dry,Dry,Wet', '19.0456806', '72.8708161', 'Sion East', '2020-02-12', 0, '1 (5)'),
(237, 'worker@1.com', 'plastic_wrapper,plastic_bottle,plastic_bottle,plastic', 'Non-Degradable,Non-Degradable,Non-Degradable,Non-Degradable', 'Dry,Dry,Dry,Dry', '19.045669', '72.8708169', 'Sion East', '2020-02-12', 0, '1 (8)'),
(238, 'worker@1.com', 'cardboard,metal_can,organic,plastic_wrapper,plastic_wrapper,glass_bottle,paper', 'Degradable,Non-Degradable,Non-Degradable,Non-Degradable,Non-Degradable,Non-Degradable,Degradable', 'Dry,Dry,Wet,Dry,Dry,Dry,Dry', '19.045669', '72.8708169', 'Sion East', '2020-02-12', 0, '1 (11)'),
(241, 'worker@1.com', 'cardboard,plastic_bag,paper,plastic_wrapper,plastic_wrapper,glass_bottle,plastic_cup', 'Degradable,Non-Degradable,Degradable,Non-Degradable,Non-Degradable,Non-Degradable,Non-Degradable', 'Dry,Dry,Dry,Dry,Dry,Dry,Dry', '19.045669', '72.8708169', 'Sion East', '2020-02-12', 0, '1 (6)'),
(279, 'worker@1.com', 'plastic_wrapper,plastic_wrapper', 'Non-Degradable,Non-Degradable', 'Dry,Dry', '19.026152', '73.011986', 'Nerul', '2020-02-14', 0, '1 (6)'),
(280, 'worker@1.com', 'organic,paper,organic', 'Degradable,Degradable,Degradabl', 'Wet,Dry,Wet', '19.026152', '73.011986', 'Nerul', '2020-02-14', 0, '1 (7)');

-- --------------------------------------------------------

--
-- Table structure for table `society`
--

CREATE TABLE `society` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `loc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `society`
--

INSERT INTO `society` (`id`, `email`, `loc`) VALUES
(1, 'sahil.more2@somaiya.edu', 'Nerul'),
(2, 'parth.maniar@somaiya.edu', 'Fort'),
(3, 'dkoushal.d@somaiya.edu', 'Sion East'),
(4, 'saj.maru@somaiya.edu', 'Bandra West');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `teamname` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `team_id` varchar(50) NOT NULL,
  `team_member_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `created_by`, `teamname`, `description`, `team_id`, `team_member_email`) VALUES
(21, 'yash@gmail.com', 'CPT', 'ddd', 'CTk9hqQ5', 'yash@gmail.com'),
(44, 'akhil@gmail.com', 'PQT', 'dasdas', '3Uyr8LkK', 'akhil@gmail.com'),
(46, 'ram@gmail.com', 'GPP', 'asd', '3fHkWcog', 'ram@gmail.com'),
(59, 'mohit@gmail.com', 'sdfs', 'sfsf', 'CTk9hqQ6', 'mohit@gmail.com'),
(60, 'rohan@gmail.com', 'gppv2', 'sdsdsd', 'EGhnDkK1', 'rohan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(60) NOT NULL,
  `number` varchar(11) NOT NULL,
  `address` varchar(600) NOT NULL,
  `adharcard` varchar(300) NOT NULL,
  `password` varchar(50) NOT NULL,
  `coins` int(11) NOT NULL,
  `team_id` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `number`, `address`, `adharcard`, `password`, `coins`, `team_id`) VALUES
(11, 'Yash', 'yash@gmail.com', 'user', '8384734543', 'Mulund', '9878678987654564', '123', 20, 'CTk9hqQ5'),
(14, 'Akhil Sir', 'akhil@gmail.com', 'user', '9876745634', 'Mastek ', '1234675896561243', '123', 110, '3Uyr8LkK'),
(15, 'Ram', 'ram@gmail.com', 'user', '9878976787', 'Matunga', '7678987654565432', '123', 15, '3fHkWcog'),
(16, 'Mohit', 'mohit@gmail.com', 'user', '987876456', 'Dadar', '8987656456543234', '123', 10, 'CTk9hqQ6'),
(17, 'Rohan', 'rohan@gmail.com', 'user', '9876789089', 'Pune', '9876567876', '123', 0, 'EGhnDkK1'),
(18, 'worker', 'worker@1.com', 'worker', '9965328967', 'Mumbai', '123212342123421', '123', 0, ''),
(20, 'Admin', 'admin@1.com', 'admin', '14565165', 'Mumbai.', '565146146851658', '123', 0, ''),
(26, 'User1', 'user@1.com', 'user', '416541595', 'Ghansoli', '8596784256345987', '123', 150, ''),
(39, 'worker2', 'worker@mastek.com', 'worker', '8412985878', 'Mumbai', '1565489786526358', 'worker', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users11`
--

CREATE TABLE `users11` (
  `id` int(10) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `email` varchar(21) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  `number` varchar(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `adharcard` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `coins` int(5) DEFAULT NULL,
  `team_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users11`
--

INSERT INTO `users11` (`id`, `name`, `email`, `role`, `number`, `address`, `adharcard`, `password`, `coins`, `team_id`) VALUES
(1, 'Sahil More', 'sahil@gmail.com', 'user', '8965354789', 'Ghatkopar', '865932147589', '123', 0, ''),
(2, 'Parth Maniar', 'parth@gmail.com', 'user', '8965321478', 'Churney Road', '786953254178', '123', 110, ''),
(3, 'Saj Maru', 'saj@gmail.com', 'user', '9965874126', 'Lal Baug', '986523158566', '123', 90, ''),
(4, 'Kaushal Kumar', 'kaushal@gmail.com', 'user', '9968953214', 'Goregaon', '778956231478', '123', 70, ''),
(5, 'Rohan Malhotra', 'rohan@gmail.com', 'user', '8856326497', 'Nerul', '106235487967', '123', 30, ''),
(7, 'Admin', 'admin@gmail.com', 'admin', '8888856234', 'Kurla', '852147963585', '123', 0, ''),
(8, 'Raj Sharma', 'raj@gmail.com', 'user', '9963251478', 'Ghansoli', '109826202148', '123', 20, ''),
(10, 'Yash Saxena', 'yash@gmail.com', 'user', '8412365478', 'Mulund', '108563214789', '123', 10, ''),
(11, 'Kushal Mehta', 'kushal@gmail.comkusha', 'user', '9965632548', 'Thane', '854215356978', '123', 25, ''),
(12, 'Ram Joshi', 'ram@gmail.com', 'user', '8421365978', 'Matunga', '754211985621', '123', 15, ''),
(13, 'Mohit Rathi', 'mohit@gmail.com', 'user', '9865989878', 'Dadar', '785412569863', '123', 5, ''),
(14, 'Suresh Gupta', 'suresh@gmail.com', 'user', '99653265477', 'Bhandup', '785421369857', '123', 55, ''),
(15, 'Omkar Joshi', 'omkar@gmail.com', 'user', '8965752349', 'Nahur', '789652418695', '123', 35, ''),
(16, 'Worker', 'worker@gmail.com', 'worker', '8985847462', 'Sion', '485965754125', '123', 0, ''),
(18, 'user', 'user@1.com', 'user', '9876543216', 'Lalbaug', '132654897116', '123', 150, 'oreDqNjV'),
(19, 'user1', 'user1@gmail.com', 'user', '9564546546', 'Lalbaug', '546546646546', '123', 0, 'oreDqNjV');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camera`
--
ALTER TABLE `camera`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `camera_worker`
--
ALTER TABLE `camera_worker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `society`
--
ALTER TABLE `society`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users11`
--
ALTER TABLE `users11`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camera`
--
ALTER TABLE `camera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT for table `camera_worker`
--
ALTER TABLE `camera_worker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

--
-- AUTO_INCREMENT for table `society`
--
ALTER TABLE `society`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users11`
--
ALTER TABLE `users11`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
