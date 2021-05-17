-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 17, 2021 at 11:10 AM
-- Server version: 10.5.8-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerdb`
--

CREATE TABLE `customerdb` (
  `cid` int(50) NOT NULL,
  `cfname` varchar(50) NOT NULL,
  `clname` varchar(50) NOT NULL,
  `phn` varchar(10) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `ca1` varchar(50) NOT NULL,
  `ca3` varchar(50) NOT NULL,
  `ca4` varchar(50) NOT NULL,
  `ca5` int(6) NOT NULL,
  `ept` varchar(50) NOT NULL,
  `lpt` varchar(50) NOT NULL,
  `rfname` varchar(50) NOT NULL,
  `rlname` varchar(50) NOT NULL,
  `rphn` varchar(10) NOT NULL,
  `rmail` varchar(50) NOT NULL,
  `ra1` varchar(50) NOT NULL,
  `ra3` varchar(50) NOT NULL,
  `ra4` varchar(50) NOT NULL,
  `ra5` int(6) NOT NULL,
  `height` varchar(3) NOT NULL,
  `weight` varchar(4) NOT NULL,
  `width` varchar(3) NOT NULL,
  `dlt` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customerdb`
--

INSERT INTO `customerdb` (`cid`, `cfname`, `clname`, `phn`, `mail`, `ca1`, `ca3`, `ca4`, `ca5`, `ept`, `lpt`, `rfname`, `rlname`, `rphn`, `rmail`, `ra1`, `ra3`, `ra4`, `ra5`, `height`, `weight`, `width`, `dlt`, `image`) VALUES
(7, 'tech', 'Squad', '7402410785', 'techsquadkec@gmail.com', 'MARIYAMMAN KOIL STREET Tiruppur, Anuppapalayam', 'Tiruppur', 'Tiruppur', 641652, '2021-03-29T18:07', '2021-12-15T18:08', 'mahatma', 'gandhi', '0000011111', 'ambedkar@gmail.com', 'vandaloor zoo', 'asia', 'korea', 101010, '6', '6', '2', '2021-04-15T20:05', 'productimg/2.jpg'),
(12, 'abishek', 'kumar', '7402410785', 'abishek2001@gmail.com', '25 kumaran road', 'erode', 'TamilNadu', 654245, '2021-04-17T20:01', '2021-04-18T20:01', 'Nirmal', 'prasad', '9080418894', 'nirmal@gmail.com', 'Mari amman koil street', 'anupparpalayam', 'TamilNadu', 658264, '3', '15', '5', '2021-04-19T20:03', 'productimg/placeholder.png'),
(4, 'podaa', 'Squad', '9080418894', 'techsquadkec@gmail.com', 'MARIYAMMAN KOIL STREET Tiruppur, Anuppapalayam', 'Tiruppur', 'Tiruppur', 641652, '2021-04-23T02:49', '2021-06-16T01:49', 'mahatma', 'gandhi', '0000011111', 'ambedkar@gmail.com', 'vandaloor zoo', 'asia', 'korea', 101010, '3', '5', '4', '2021-07-30T10:49', 'productimg/sg_cost.png');

-- --------------------------------------------------------

--
-- Table structure for table `driverformdb`
--

CREATE TABLE `driverformdb` (
  `did` int(50) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` text NOT NULL,
  `pincode` int(10) NOT NULL,
  `refrence` varchar(100) NOT NULL,
  `worktime` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `companyname` varchar(200) NOT NULL,
  `companycontact` int(100) NOT NULL,
  `manager` varchar(100) NOT NULL,
  `mangercontact` int(100) NOT NULL,
  `assurance` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `aadthar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `driverformdb`
--

INSERT INTO `driverformdb` (`did`, `firstname`, `lastname`, `email`, `phone`, `address`, `city`, `pincode`, `refrence`, `worktime`, `experience`, `companyname`, `companycontact`, `manager`, `mangercontact`, `assurance`, `description`, `aadthar`) VALUES
(8, 'vijay', 'kumar', 'vijaykumar@gmail.cpm', 90804, 'vijay illam dubai ', ' tnagar', 6000, 'my friend', '24hrs', 'noooooooooooooo', ' vijay travels', 9090, 'abcd', 8989, 'yes', 'poda poda lusu', 'Aadthar/3.jfif'),
(9, 'ajith', 'kumar', 'ajithkumar@gmail.com', 898989, 'dubai sandhu', ' chennai', 68768, 'myself', '24hrs', 'nil', ' abce', 999, 'monisha', 888, 'yes', 'haiiii i am ajithkumar byeeeeeeeeeee', 'Aadthar/sg_go.png'),
(13, 'aswin', 'kumar', '', 987, '32g, nehru street ', ' chennai', 600001, 'friend', '24hrs', 'nil', ' tech', 555, 'squad', 55555, 'yes', 'i will work hard', 'Aadthar/pencil.png');

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_db`
--

CREATE TABLE `dynamic_db` (
  `id` int(11) NOT NULL,
  `driverid` varchar(255) NOT NULL,
  `customerid` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dynamic_db`
--

INSERT INTO `dynamic_db` (`id`, `driverid`, `customerid`, `amount`) VALUES
(2, '8', '4', '4000'),
(4, '7', '7', '88'),
(5, '7', '4', '90'),
(6, '7', '7', '100');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `gender`, `create_datetime`) VALUES
(3, 'naanu naanu', 'ambedkar@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f', 'driver', '2021-04-12 11:51:20'),
(4, 'poda', 'techsquadkec@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f', 'customer', '2021-04-12 12:31:32'),
(5, 'techsquad', 'naishad@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f', 'driver', '2021-04-12 12:38:57'),
(6, 'trioo', 'trioooo@gmail.com', 'e8dc4081b13434b45189a720b77b6818', 'customer', '2021-04-15 05:06:30'),
(7, 'mathi', 'mathi2002nagaraj@gmail.com', 'db65884595944348d988215892c2e3d3', 'driver', '2021-04-15 10:29:00'),
(8, 'vijay', 'vijayakumar@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f', 'driver', '2021-04-15 12:53:51'),
(9, 'ajith', 'ajithkumar@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f', 'driver', '2021-04-16 03:05:28'),
(10, 'Kumar_01', 'admin@codingfrontend.com', 'e945c5c1e4c3fc3ea494b4454ce18fa6', 'customer', '2021-04-16 08:47:13'),
(12, 'abishek', 'abishek2001@gmail.com', 'e8dc4081b13434b45189a720b77b6818', 'customer', '2021-04-16 14:28:17'),
(13, 'aswin', 'aswinkumar@gmail.com', 'e8dc4081b13434b45189a720b77b6818', 'driver', '2021-04-16 14:35:35'),
(14, 'Who', 'Whowhowho@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f', 'customer', '2021-04-17 02:41:33'),
(15, 'Arasi', 'mathi2002nagaraj@gmail.com', '202cb962ac59075b964b07152d234b70', 'customer', '2021-04-17 03:58:24'),
(16, 'moni', 'moni@some.com', '202cb962ac59075b964b07152d234b70', 'customer', '2021-04-17 04:16:05'),
(17, 'kathir', 'mathiarasin.19cse@kongu.edu', '81dc9bdb52d04dc20036dbd8313ed055', 'customer', '2021-04-17 04:17:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerdb`
--
ALTER TABLE `customerdb`
  ADD UNIQUE KEY `image` (`image`);

--
-- Indexes for table `driverformdb`
--
ALTER TABLE `driverformdb`
  ADD UNIQUE KEY `did` (`did`);

--
-- Indexes for table `dynamic_db`
--
ALTER TABLE `dynamic_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dynamic_db`
--
ALTER TABLE `dynamic_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
