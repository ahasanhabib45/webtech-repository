-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2022 at 07:06 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dream house`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `CompanyName` varchar(20) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`CompanyName`, `Contact`, `Email`, `Address`, `Username`, `Password`) VALUES
('Dream House', '01637842691', 'alifkhan6475@gmail.com', 'Mohammadpur, Dhaka, Bangladesh', 'admin', 'admin124');

-- --------------------------------------------------------

--
-- Table structure for table `apartment`
--

CREATE TABLE `apartment` (
  `ID` int(20) NOT NULL,
  `Price` varchar(20) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apartment`
--

INSERT INTO `apartment` (`ID`, `Price`, `Location`, `Details`) VALUES
(1, '2.5 Core BDT', 'Gulshan 1, Dhaka, Bangladesh', 'Visit This 2343 Sq Ft Flat For Sale In Gulshan 1'),
(3, '2.2 Core BDT', 'Uttara Sector 7, Dhaka', '3200 Sq Ft Apartment listed for sale'),
(4, '1.2 Core BDT', 'Mirpur 10, Dhaka', '1200 Sq Ft Apartment listed for sale'),
(5, '4.2 Core BDT', 'Mohammadpur, Dhaka', '2200 Sq Ft Apartment listed for sale');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `ID` int(100) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `DateofBirth` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`ID`, `Name`, `Gender`, `DateofBirth`, `Email`, `Contact`, `Username`, `Password`) VALUES
(1, 'Shuvra Das', 'Female', '20/11/1998', 'das@gmail.com', '01987563412', 'das', 'das123'),
(2, 'Rafi reza', 'Others', '12/12/1999', 'reza@gmail.com', '998065317', 'reza', 'reza123'),
(4, 'Peyal Sarker', 'Male', '31/11/2000', 'peyal@gmail.com', '90887654', 'peyal', 'peyal123'),
(6, 'Shahrukh Khan', 'Male', '4/2/1998', 'khan@gmail.com', '99806754343', 'khan', 'khan1234'),
(7, 'Bindu PM', 'Male', '7/6/1999', 'pm@gmail.com', '78905643', 'pm', 'pm123');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `ID` int(255) NOT NULL,
  `User` varchar(20) NOT NULL,
  `Chat` varchar(1000) NOT NULL,
  `Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`ID`, `User`, `Chat`, `Time`) VALUES
(1, 'admin', 'Change Your Password', '2022-08-06 05:20:49'),
(2, 'seller', 'where is your office', '2022-08-07 07:48:10'),
(3, 'seller', 'will u add about us', '2022-08-07 07:49:49'),
(4, 'seller', 'will u add about us', '2022-08-07 07:49:50'),
(5, 'seller', 'are you there', '2022-08-07 07:51:34'),
(6, 'admin', 'hlw', '2022-08-07 08:32:32'),
(7, 'admin', 'hlw', '2022-08-07 08:32:41');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Religion` varchar(10) NOT NULL,
  `PresentAddress` varchar(100) NOT NULL,
  `PermanentAddress` varchar(100) NOT NULL,
  `PhoneNo` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(12) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`ID`, `FirstName`, `LastName`, `Gender`, `DateOfBirth`, `Religion`, `PresentAddress`, `PermanentAddress`, `PhoneNo`, `Email`, `Username`, `Password`) VALUES
(1, 'Md Ahasan', 'Habib', 'Male', '1996-08-01', 'Islam', 'Dhaka, Bangladesh', 'Dhaka, Bangladesh', '01567897654', 'habib@gmail.com', 'habib', 'habib123'),
(2, 'Fardin', 'Ohi', 'Male', '1995-08-03', 'Hindu', 'Dhaka', 'Dhaka', '78965437', 'ohi@gmail.com', 'ohi', 'ohi123'),
(4, 'Tahsin', 'Ferdous', 'Female', '2002-08-08', 'Islam', 'Dhaka', 'Dhaka', '4568345', 'tahsin@gmail.com', 'tahsin', 'tahsin');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `Date` date NOT NULL,
  `News` varchar(500) NOT NULL,
  `ID` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Date`, `News`, `ID`) VALUES
('2022-08-06', 'A combination of political will and capacity building could change the game for the better', 1),
('2022-08-06', 'he prices of flats have started to rise in Dhaka, ending a three-year stagnation after easing of Covid-19 fallout', 2),
('2022-08-07', 'Today is my project submission Day', 3);

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `ID` int(100) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Query` varchar(500) NOT NULL,
  `Solve` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`ID`, `Name`, `Query`, `Solve`) VALUES
(1, 'Dipon Biswas', 'I cannot add apartment. help me', 'yes'),
(2, 'Athoy Roy', 'Need to Change my information', 'yes'),
(4, 'Nusrat Nisha', 'There is a system problem', 'no'),
(6, 'Ahsan Sumon', 'Need to chnage my apartment details help me', 'yes'),
(7, 'Dipon Biswas', 'hlw kamrul', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `ID` int(100) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `DateOfBirth` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`ID`, `Name`, `Gender`, `DateOfBirth`, `Email`, `Contact`, `Username`, `Password`) VALUES
(2, 'Dipon Biswas', 'Male', '1995-10-10', 'dipon@gmail.com', '01834567898', 'bappi', 'bappi123'),
(3, 'Athoy Roy', 'Male', '2000-06-15', 'athoyroy@gmail.com', '01956394373', 'athoy', 'athoyathoy'),
(4, 'Nusrat Nisha', 'female', '2000-06-07', 'nisha@gmail.com', '01956394355', 'nisha', 'nisha123'),
(5, 'Maria Binte', 'Female', '2000-06-07', 'maria@gmail.com', '01956394355', 'maria', 'maria123'),
(6, 'Nisrat Maria', 'Female', '2000-06-07', 'nusrat@gmail.com', '01956394355', 'nusrat', 'nusrat123'),
(7, 'Athoy Roy', 'Male', '2000-06-07', 'roy@gmail.com', '01956394355', 'roy', 'ahsanahsan'),
(8, 'Ahsan Sumon', 'Male', '2000-06-07', 'sumon@gmail.com.com', '01956394355', 'sumon', 'sumon123'),
(9, 'Afsana Binte', 'Female', '2000-06-07', 'afsabna@gmail.com', '01956394355', 'afsana', 'afsana123'),
(10, 'Ahsan Habib', 'Male', '2000-06-07', 'ahsan@gmail.com', '01956394355', 'ahsan', 'ahsanahsan');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `ID` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Surname` varchar(40) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`ID`, `Name`, `Surname`, `Username`, `Password`, `image`) VALUES
(2, 'James', 'Hannigan', 'jimmy', '12345', NULL),
(3, 'jim1', 'jim', 'jim1', 'jim1', NULL),
(4, 'jim2', 'jim', 'jim2', 'jim2', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartment`
--
ALTER TABLE `apartment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apartment`
--
ALTER TABLE `apartment`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
