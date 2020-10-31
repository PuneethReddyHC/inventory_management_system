-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2020 at 04:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `order_mgmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `agentd`
--

CREATE TABLE `agentd` (
  `agent_id` varchar(5) NOT NULL,
  `agent_name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agentd`
--

INSERT INTO `agentd` (`agent_id`, `agent_name`) VALUES
('A001', 'transco'),
('A002', 'fedx'),
('A003', 'upl'),
('A004', 'bluedart'),
('A005', 'dhl');

-- --------------------------------------------------------

--
-- Table structure for table `categ`
--

CREATE TABLE `categ` (
  `cat_id` char(20) NOT NULL,
  `category` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categ`
--

INSERT INTO `categ` (`cat_id`, `category`) VALUES
('CAT001', 'essentials'),
('CAT002', 'Furniture'),
('CAT003', 'bedding'),
('CAT004', 'fashion'),
('CAT005', 'electronics'),
('CAT006', 'perfumes');

-- --------------------------------------------------------

--
-- Table structure for table `cust`
--

CREATE TABLE `cust` (
  `custid` char(10) NOT NULL,
  `c_name` char(15) DEFAULT NULL,
  `phoneno` varchar(10) NOT NULL,
  `c_address` char(20) DEFAULT NULL,
  `email_id` char(100) NOT NULL,
  `password` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cust`
--

INSERT INTO `cust` (`custid`, `c_name`, `phoneno`, `c_address`, `email_id`, `password`) VALUES
('C200012', 'JOHN', '422234565', '16 BARREN STREET', 'abc@mail.com', 'john@123'),
('C20002', 'ROCK', '42223457', '15 HOLMES STREET', 'rock1@mail.com', 'rock@123'),
('C20003', 'ADAM', '42223458', '11 BAKERS STREET', 'adam1@mail.com', ''),
('C20004', 'EVA', '42223459', '23 LADA STREET', 'eva1@mail.com', ''),
('C20005', 'SHYAM', '42223460', '18 LADA STREET', 'shyam1@mail.com', ''),
('C20006', 'KAREN', '42223461', '15 BAKERS STREET', 'karen1@mail.com', 'karan@123'),
('C20007', 'MIKE', '42223462', '14 LOTUS STREET', 'mike1@mail.com', ''),
('C20008', 'ROSE', '42223463', '12 ALOK STREET', 'rose1@mail.com', ''),
('C20009', 'DIVI', '42223464', '17 AFFLE AVENCE', 'divi1@mail.com', ''),
('C200114', 'ABHI boss', '422234654', '10 HOLME  STREET', 'abhi1@gmail.com', 'abhi@123');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `dept_id` varchar(5) NOT NULL,
  `departname` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`dept_id`, `departname`) VALUES
('D001', 'CEO'),
('D002', 'Manager'),
('D003', 'Accounts'),
('D004', 'sales'),
('D005', 'Technical');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `emp_id` varchar(10) NOT NULL,
  `e_name` varchar(15) DEFAULT NULL,
  `dept_id` varchar(5) DEFAULT NULL,
  `qualification` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `e_address` varchar(20) DEFAULT NULL,
  `e_phno` int(11) DEFAULT NULL,
  `comm` int(3) DEFAULT NULL,
  `salary` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`emp_id`, `e_name`, `dept_id`, `qualification`, `dob`, `e_address`, `e_phno`, `comm`, `salary`) VALUES
('E5001', 'PUAL', 'D001', 'MBA', '0000-00-00', '16 VENTURE STREET', 42222001, 15, 7000),
('E5002', 'PUAL', 'D002', 'MBA', '0000-00-00', '22 PARK AVENUE', 42222114, 8, 3000),
('E5003', 'PHANI', 'D002', 'MBA', '0000-00-00', '10 JACKSON STREET', 42222154, 8, 3000),
('E5004', 'PRUTHVI', 'D003', 'MBA', '0000-00-00', '12 VENTURE STREET', 42222178, 0, 3000),
('E5005', 'SUKU', 'D004', 'B.COM', '0000-00-00', '18 PARK AVENUE', 42222185, 4, 1500),
('E5006', 'ARJUN', 'D005', 'M.COM', '0000-00-00', '17 PARK AVENUE', 42222789, 5, 1400),
('E5007', 'SANDDY', 'D002', 'BTECH', '0000-00-00', '16 KINGSTON AVENUE', 42222455, 3, 1400),
('E5008', 'ABDUL SHAIK', 'D001', 'PHD', '0000-00-00', '15 MIKE AVENUE', 422266, 12, 5000),
('E5009', 'NIKIL', 'D005', 'BTECH', '0000-00-00', '11 PARK AVENUE', 42222963, 5, 2500),
('E5010', 'VARUN', 'D005', 'MTECH', '0000-00-00', '09 JACKSON STREET', 42222741, 0, 1250);

-- --------------------------------------------------------

--
-- Table structure for table `orderref`
--

CREATE TABLE `orderref` (
  `order_id` varchar(10) DEFAULT NULL,
  `p_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderref`
--

INSERT INTO `orderref` (`order_id`, `p_id`) VALUES
('O2004', 'P4001'),
('O2004', 'P4007'),
('O2005', 'P4002'),
('O2007', 'P4003'),
('O2009', 'P4004'),
('O2011', 'P4005'),
('O2012', 'P4006'),
('O2015', 'P4010'),
('O2001', 'P4009'),
('O2012', 'P4008'),
('O20088', 'P4001'),
('O20089', 'P40010');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` varchar(10) NOT NULL,
  `o_date` date DEFAULT NULL,
  `prod_count` int(10) DEFAULT NULL,
  `cust_id` varchar(10) DEFAULT NULL,
  `o_status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `o_date`, `prod_count`, `cust_id`, `o_status`) VALUES
('O2002', '0000-00-00', 8, '123446', 'OD'),
('O20021', '0000-00-00', 8, 'C20004', 'COD'),
('O2003', '0000-00-00', 3, 'C20002', 'OD'),
('O2004', '2020-10-29', 7, 'C20001', 'COD'),
('O2005', '0000-00-00', 8, 'C20002', 'OD'),
('O2006', '0000-00-00', 7, 'C20002', 'OD'),
('O20088', '2020-10-29', 12, 'C20001', 'COD'),
('O20089', '2020-10-29', 12, 'C20001', 'COD'),
('O2009', '0000-00-00', 4, 'C20003', 'OD'),
('O2011', '0000-00-00', 4, 'C20006', 'OD'),
('O2012', '0000-00-00', 10, 'C20008', 'OD'),
('O2013', '0000-00-00', 2, 'C20010', 'OD'),
('O2015', '0000-00-00', 2, 'C20010', 'OD');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` char(10) NOT NULL,
  `p_name` char(10) DEFAULT NULL,
  `quantity` int(5) DEFAULT NULL,
  `catid` char(20) DEFAULT NULL,
  `discount` int(3) DEFAULT NULL,
  `price` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `quantity`, `catid`, `discount`, `price`) VALUES
('P4001', '', 12, '', 0, 0),
('P40010', 'BLANKET', 12, 'CAT003', 40, 450),
('P4002', 'BLANKETS', 20, 'CAT003', 24, 149),
('P400234', 'shampoo', 100, 'CAT003', 1, 7),
('P4003', 'PILLOWS', 15, 'CAT003', 8, 209),
('P4004', 'UNIFORM_a', 22, 'CAT004', 0, 199),
('P4005', 'COMPUTERS', 5, 'CAT005', 10, 100),
('P4006', 'PERFUMES', 10, 'CAT006', 5, 169),
('P4007', 'CHAIRS', 5, 'CAT002', 5, 100),
('P4009', 'SOMETHING', 12, 'CAT001', 10, 100),
('P5010', 'TABLES', 5, 'CAT002', 2, 169),
('P5011', 'HANGERS', 20, 'CAT002', 10, 22),
('P5015', 'HANDLES', 25, 'CAT002', 5, 75);

-- --------------------------------------------------------

--
-- Table structure for table `shipments`
--

CREATE TABLE `shipments` (
  `sh_id` varchar(10) NOT NULL,
  `s_date` date DEFAULT NULL,
  `s_status` varchar(10) DEFAULT NULL,
  `agent_id` varchar(5) DEFAULT NULL,
  `emp_id` varchar(10) DEFAULT NULL,
  `est_delivery` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipments`
--

INSERT INTO `shipments` (`sh_id`, `s_date`, `s_status`, `agent_id`, `emp_id`, `est_delivery`) VALUES
('S3003', '2020-10-30', 'SD', 'A002', 'E5005', '2020-10-30'),
('S3004', '0000-00-00', 'SR', 'A001', 'E5005', '0000-00-00'),
('S3005', '0000-00-00', 'SP', 'A003', 'E5006', '0000-00-00'),
('S3006', '0000-00-00', 'SD', 'A002', 'E5007', '0000-00-00'),
('S30067', '0000-00-00', 'SD', 'A001', 'E5004', '0000-00-00'),
('S3009', '0000-00-00', 'SD', 'A002', 'E5008', '0000-00-00'),
('S3010', '0000-00-00', 'SD', 'A003', 'E5009', '0000-00-00'),
('S3011', '0000-00-00', 'SP', 'A004', 'E5008', '0000-00-00'),
('S3012', '0000-00-00', 'SR', 'A005', 'E5006', '0000-00-00'),
('S3014', '0000-00-00', 'SR', 'A002', 'E5007', '0000-00-00'),
('S3016', '0000-00-00', 'SD', 'A001', 'E5005', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `shipref`
--

CREATE TABLE `shipref` (
  `sh_id` varchar(10) DEFAULT NULL,
  `order_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipref`
--

INSERT INTO `shipref` (`sh_id`, `order_id`) VALUES
('S3003', 'O2004'),
('S3004', 'O2005'),
('S3005', 'O2007'),
('S3006', 'O2009'),
('S3009', 'O2011'),
('S3010', 'O2012'),
('S3010', 'O2015');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agentd`
--
ALTER TABLE `agentd`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `categ`
--
ALTER TABLE `categ`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `cust`
--
ALTER TABLE `cust`
  ADD PRIMARY KEY (`custid`),
  ADD UNIQUE KEY `phoneno` (`phoneno`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `shipments`
--
ALTER TABLE `shipments`
  ADD PRIMARY KEY (`sh_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
