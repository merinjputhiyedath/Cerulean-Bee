-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2022 at 07:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cerulean_bee`
--

-- --------------------------------------------------------

--
-- Table structure for table `artwork_order`
--

CREATE TABLE `artwork_order` (
  `customer_id` int(11) NOT NULL,
  `customer_name` text NOT NULL,
  `email_id` text NOT NULL,
  `phone_number` text NOT NULL,
  `discount_rate` text NOT NULL,
  `order_date` date NOT NULL,
  `approved_date` date NOT NULL,
  `scheduled_print_date` date NOT NULL,
  `total_price` text NOT NULL,
  `apparel_item` text NOT NULL,
  `event_name` text NOT NULL,
  `base_color` text NOT NULL,
  `theme_name` text NOT NULL,
  `max_colors` text NOT NULL,
  `art_location_01` text NOT NULL,
  `description_01` text NOT NULL,
  `cost_01` text NOT NULL,
  `employee_01` text NOT NULL,
  `complete_date_01` date NOT NULL,
  `colors_01` text NOT NULL,
  `art_location_02` text NOT NULL,
  `description_02` text NOT NULL,
  `cost_02` text NOT NULL,
  `employee_02` text NOT NULL,
  `complete_date_02` date NOT NULL,
  `colors_02` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artwork_order`
--

INSERT INTO `artwork_order` (`customer_id`, `customer_name`, `email_id`, `phone_number`, `discount_rate`, `order_date`, `approved_date`, `scheduled_print_date`, `total_price`, `apparel_item`, `event_name`, `base_color`, `theme_name`, `max_colors`, `art_location_01`, `description_01`, `cost_01`, `employee_01`, `complete_date_01`, `colors_01`, `art_location_02`, `description_02`, `cost_02`, `employee_02`, `complete_date_02`, `colors_02`) VALUES
(1, 'Kairav Patel', 'kairavpatel97@gmail.com', '+14089048575', '100', '2021-12-01', '2021-12-02', '2021-12-02', '750', 'T-shirt', 'CSUF', 'Blue', 'Halloween', '2', 'Front', 'Titan Logo', '200', 'Dex', '2021-12-03', 'Blue and Red Colors', 'Back', 'Number and Name', '200', 'Dex', '2021-12-03', 'Black and Blue Colors.'),
(2, 'Aagam Shah', 'aagamshah@gmail.com', '+919099503618', '100', '2021-12-04', '2021-12-06', '2021-12-07', '250', 'T-shirt', 'CSUF', 'Blue', 'Graduate Party', '2', 'Front side', 'Titan Logo', '75', 'kairav', '2021-12-08', 'Blue, Orange', 'Back Side', 'Number and Name', '75', 'kairav', '2021-12-09', 'Black'),
(4, 'John', 'john@gmail.com', '+19589589589', '0', '2021-12-06', '2021-12-06', '0000-00-00', '150', 'T-shirt', 'CSU Fullerton', 'Blue', 'Graduate Party', '3', 'Front', 'Titan Logo', '100', 'Dax', '2021-12-09', 'Blue, Black, Red', '', '', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee_work_log`
--

CREATE TABLE `employee_work_log` (
  `employee_id` int(11) NOT NULL,
  `employee_name` text NOT NULL,
  `employee_phone` text NOT NULL,
  `work_type` text NOT NULL,
  `pd_date_01` date NOT NULL,
  `pd_start_time_01` time NOT NULL,
  `project_01` text NOT NULL,
  `art_item_01` text NOT NULL,
  `task_01` text NOT NULL,
  `end_time_01` time NOT NULL,
  `pd_date_02` date NOT NULL,
  `pd_start_time_02` time NOT NULL,
  `project_02` text NOT NULL,
  `art_item_02` text NOT NULL,
  `task_02` text NOT NULL,
  `end_time_02` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_work_log`
--

INSERT INTO `employee_work_log` (`employee_id`, `employee_name`, `employee_phone`, `work_type`, `pd_date_01`, `pd_start_time_01`, `project_01`, `art_item_01`, `task_01`, `end_time_01`, `pd_date_02`, `pd_start_time_02`, `project_02`, `art_item_02`, `task_02`, `end_time_02`) VALUES
(1, 'kairav patel', '', '', '0000-00-00', '00:00:00', '', '0', '', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '00:00:00'),
(2, 'Kairav Patel', '+14089048575', 'Part Time', '2021-12-02', '11:11:00', 'Tshirt Printing', '0', 'Printing', '11:30:00', '0000-00-00', '23:20:00', 'Number and Name printing', 'Back Side Print', 'Printing', '11:55:00'),
(3, '', '', '', '0000-00-00', '00:00:00', '', '0', '', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '00:00:00'),
(4, 'Kairav Patel', '+14089048575', '', '0000-00-00', '00:00:00', '11:11:00', 'Tshirt Printing', '0', '00:00:00', '2021-12-03', '10:21:00', 'Number and Name printing', 'Number and Name printing', 'Back Side Print', '16:50:00'),
(5, 'Mahesh patel', '', '', '0000-00-00', '00:00:00', '', '', '', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '00:00:00'),
(6, 'Maheshbhai Patel', '+918980303688', 'Full Time', '2021-12-04', '08:34:00', 'T-shirt Printing', 'T-shirt', 'Printing', '09:34:00', '2021-12-04', '09:35:00', 'Paint Cutting', 'Full Paint', 'Cutting', '21:35:00'),
(8, 'Dax', '+15252525252', 'Full Time', '2021-12-06', '12:00:00', 'CSUF T-shirt', 'T-shirt', 'Titan Logo Print', '13:00:00', '0000-00-00', '00:00:00', '', '', '', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `printorder`
--

CREATE TABLE `printorder` (
  `customerid` int(11) NOT NULL,
  `customername` text NOT NULL,
  `emailid` text NOT NULL,
  `phonenumber` text NOT NULL,
  `orderdate` date NOT NULL,
  `artdate` date NOT NULL,
  `duedate` date NOT NULL,
  `setupcharge` text NOT NULL,
  `deposit` text NOT NULL,
  `discount` text NOT NULL,
  `totalcost` text NOT NULL,
  `apparelorderdate` date NOT NULL,
  `filmdate` date NOT NULL,
  `printdate` date NOT NULL,
  `delivereddate` date NOT NULL,
  `basecolor` text NOT NULL,
  `vendorname` text NOT NULL,
  `xsnumber` text NOT NULL,
  `xscharge` text NOT NULL,
  `snumber` text NOT NULL,
  `scharge` text NOT NULL,
  `mnumber` text NOT NULL,
  `mcharge` text NOT NULL,
  `lnumber` text NOT NULL,
  `lcharge` text NOT NULL,
  `xlnumber` text NOT NULL,
  `xlcharge` text NOT NULL,
  `xxlnumber` text NOT NULL,
  `xxlcharge` text NOT NULL,
  `unitbaseprice` text NOT NULL,
  `colorcharge` text NOT NULL,
  `blankprice` text NOT NULL,
  `locationsize` text NOT NULL,
  `colorchange` text NOT NULL,
  `colorlist` text NOT NULL,
  `finalcost` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `printorder`
--

INSERT INTO `printorder` (`customerid`, `customername`, `emailid`, `phonenumber`, `orderdate`, `artdate`, `duedate`, `setupcharge`, `deposit`, `discount`, `totalcost`, `apparelorderdate`, `filmdate`, `printdate`, `delivereddate`, `basecolor`, `vendorname`, `xsnumber`, `xscharge`, `snumber`, `scharge`, `mnumber`, `mcharge`, `lnumber`, `lcharge`, `xlnumber`, `xlcharge`, `xxlnumber`, `xxlcharge`, `unitbaseprice`, `colorcharge`, `blankprice`, `locationsize`, `colorchange`, `colorlist`, `finalcost`) VALUES
(1, 'Kairav Patel', 'kairavpatel97@gmail.com', '+919099503618', '2021-12-06', '2021-12-07', '2021-12-08', '100', '200', '300', '500', '2021-12-09', '2021-12-10', '2021-12-11', '2021-12-12', 'blue and orange', 'eartheagle', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '600', '700', '800', 'Front and Back', '1000', 'Blue and Orange', '1000'),
(2, '', '', '', '2021-12-05', '2021-12-06', '2021-12-07', '', '', '', '', '2021-12-08', '2021-12-09', '2021-12-10', '2021-12-11', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'John', 'john@gmail.com', '+195959595959', '2021-12-06', '2021-12-06', '2021-12-07', '100', '250', '0', '200', '2021-12-07', '2021-12-07', '2021-12-08', '2021-12-09', 'Blue', 'CSUF', '10', '1000', '', '', '5', '500', '', '', '', '', '', '', '100', '10', '1500', 'Front Size', '150', 'Blue, Black, Red', '1650');

-- --------------------------------------------------------

--
-- Table structure for table `project_cost_analysis`
--

CREATE TABLE `project_cost_analysis` (
  `project_id` int(11) NOT NULL,
  `project_name` text NOT NULL,
  `event_name` text NOT NULL,
  `item_name` text NOT NULL,
  `customer_name` text NOT NULL,
  `phonenumber` text NOT NULL,
  `mc_item_01` text NOT NULL,
  `mc_unitcost_01` text NOT NULL,
  `mc_pricecharge_01` text NOT NULL,
  `mc_units_01` text NOT NULL,
  `mc_cost_01` text NOT NULL,
  `mc_revenue_01` text NOT NULL,
  `mc_item_02` text NOT NULL,
  `mc_unitcost_02` text NOT NULL,
  `mc_pricecharge_02` text NOT NULL,
  `mc_units_02` text NOT NULL,
  `mc_cost_02` text NOT NULL,
  `mc_revenue_02` text NOT NULL,
  `totalcost_01` text NOT NULL,
  `totalrevenue_01` text NOT NULL,
  `lc_item_01` text NOT NULL,
  `lc_unitcost_01` text NOT NULL,
  `lc_pricecharge_01` text NOT NULL,
  `lc_units_01` text NOT NULL,
  `lc_cost_01` text NOT NULL,
  `lc_revenue_01` text NOT NULL,
  `lc_item_02` text NOT NULL,
  `lc_unitcost_02` text NOT NULL,
  `lc_pricecharge_02` text NOT NULL,
  `lc_units_02` text NOT NULL,
  `lc_cost_02` text NOT NULL,
  `lc_revenue_02` text NOT NULL,
  `totalrevenue_02` text NOT NULL,
  `material_charge` text NOT NULL,
  `artwork_fees` text NOT NULL,
  `fixed_charges` text NOT NULL,
  `total_discounts` text NOT NULL,
  `net_profits` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_cost_analysis`
--

INSERT INTO `project_cost_analysis` (`project_id`, `project_name`, `event_name`, `item_name`, `customer_name`, `phonenumber`, `mc_item_01`, `mc_unitcost_01`, `mc_pricecharge_01`, `mc_units_01`, `mc_cost_01`, `mc_revenue_01`, `mc_item_02`, `mc_unitcost_02`, `mc_pricecharge_02`, `mc_units_02`, `mc_cost_02`, `mc_revenue_02`, `totalcost_01`, `totalrevenue_01`, `lc_item_01`, `lc_unitcost_01`, `lc_pricecharge_01`, `lc_units_01`, `lc_cost_01`, `lc_revenue_01`, `lc_item_02`, `lc_unitcost_02`, `lc_pricecharge_02`, `lc_units_02`, `lc_cost_02`, `lc_revenue_02`, `totalrevenue_02`, `material_charge`, `artwork_fees`, `fixed_charges`, `total_discounts`, `net_profits`) VALUES
(1, 'Eartheagle', 'Halloween', 'T-shirt', 'Kairav Patel', '', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '100', '200', '300', '400', '500'),
(3, '', '', '', 'Kairav Patel', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'CSUF T-shirt', 'CSUF', 'Tshirt', 'John', '+195959595959', 'X-small T-shirt', '100', '1000', '10', '500', '500', 'Medium T-shirt', '100', '500', '5', '250', '250', '750', '750', '', '', '', '', '', '', '', '', '', '', '', '', '', '200', '300', '100', '0', '400');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email_id`) VALUES
(1, 'kairav_patel', 'cddad8eb12307282fcc2a5623787235e', 'kairavpatel97@gmail.com'),
(2, 'aagam_shah', '2e86999e388bfe1e16bed22df6305b13', 'aagam@gmail.com'),
(3, 'aagam', '0e7517141fb53f21ee439b355b5a1d0a', 'aagam_shah@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artwork_order`
--
ALTER TABLE `artwork_order`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `employee_work_log`
--
ALTER TABLE `employee_work_log`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `printorder`
--
ALTER TABLE `printorder`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `project_cost_analysis`
--
ALTER TABLE `project_cost_analysis`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artwork_order`
--
ALTER TABLE `artwork_order`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee_work_log`
--
ALTER TABLE `employee_work_log`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `printorder`
--
ALTER TABLE `printorder`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project_cost_analysis`
--
ALTER TABLE `project_cost_analysis`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
