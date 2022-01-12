-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 05:58 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipl`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `email`, `country`, `message`) VALUES
(1, 'SUBHRANSU SEKHAR BEHERA', 'subhransusekharbehera44@gmail.com', 'usa', 'new'),
(2, 'SUBHRANSU SEKHAR BEHERA', 'subhransusekharbehera44@gmail.com', 'usa', 'new'),
(3, 'SUBHRANSU SEKHAR BEHERA', 'subhransusekharbehera44@gmail.com', 'india', 'hoho'),
(4, 'SUBHRANSU SEKHAR BEHERA', 'subhransusekharbehera44@gmail.com', 'india', 'hoho');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `playerName` varchar(30) NOT NULL,
  `from_team` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `isplaying` varchar(10) NOT NULL,
  `description` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `playerName`, `from_team`, `price`, `isplaying`, `description`) VALUES
(1, 'Virat Kohli', 'RCB', '17CR', 'true', 'Batsman'),
(2, 'Rajat Patidar', 'RCB', '20L', 'true', 'Batsman'),
(3, 'Suyash Prabhudessai', 'RCB', '20L', 'true', 'Batsman'),
(4, 'Sachin Baby', 'RCB', '20L', 'true', 'Batsman'),
(5, 'Devdutt Padikkal', 'RCB', '20L', 'true', 'Batsman'),
(6, 'AB de Villiers', 'RCB', '11CR', 'true', 'Batsman'),
(7, 'Shahbaz Ahamad ', 'RCB', '20L', 'true', 'ALL-Rounder'),
(8, 'Glenn Maxwell', 'RCB', '14.25CR', 'true', 'ALL-Rounder'),
(9, 'Washington Sundar', 'RCB', '3.2CR', 'false', 'ALL-Rounder'),
(10, 'George Garton', 'RCB', '20L', 'true', 'Bowler'),
(11, 'Kyle Jamieson', 'RCB', '15CR', 'true', 'Bowler'),
(12, 'Mohammed Siraj', 'RCB', '2.6CR', 'true', 'Bowler'),
(13, 'Rohit Sharma', 'MI', '15cr', 'true', 'Batsman'),
(14, 'Saurabh Tiwary', 'MI', '30L', 'true', 'Batsman'),
(15, 'Suryakumar Yadav', 'MI', '3.2CR', 'true', 'Batsman'),
(16, 'Anmolpreet Singh', 'MI', '80L', 'true', 'Batsman'),
(17, 'Hardik Pandya', 'MI', '11CR', 'true', 'ALL-Rounder'),
(18, 'Krunal Pandya', 'MI', '8.8CR', 'true', 'ALL-Rounder'),
(19, 'Anukul Roy', 'MI', '20L', 'true', 'ALL-Rounder'),
(20, 'Trent Boult ', 'MI', '3.2CR', 'true', 'ALL-Rounder'),
(21, 'Adam Milne', 'MI', '3.2CR', 'true', 'Bowler'),
(22, 'Marco Jansen', 'MI', '20L', 'true', 'Bowler'),
(23, 'Dhawal Kulkarni', 'MI', '75L', 'true', 'Bowler'),
(24, 'Suresh Raina', 'CSK', '11cr', 'true', 'Batsman'),
(25, 'Ambati Rayudu', 'CSK', '2.20CR', 'true', 'Batsman'),
(26, 'Faf du Plessis', 'CSK', '1.6CR', 'true', 'Batsman'),
(27, 'Ruturaj Gaikwad', 'CSK', '20L', 'true', 'Batsman'),
(28, 'Mahendra Singh Dhoni', 'CSK', '15CR', 'true', 'Batsman'),
(34, 'Karn Sharma', 'CSK', '5CR', 'true', 'ALL-Rounder'),
(35, 'Dwayne Bravo', 'CSK', '6.4CR', 'true', 'ALL-Rounder'),
(36, 'Ravindra Jadeja', 'CSK', '7CR', 'true', 'ALL-Rounder'),
(37, 'Imran Tahir', 'CSK', '1CR', 'true', 'Bowler'),
(38, 'Deepak Chahar', 'CSK', '80L', 'true', 'Bowler'),
(39, 'KM Asif', 'CSK', '40L', 'true', 'Bowler'),
(40, 'Shardul Thakur', 'CSK', '2.6CR', 'true', 'Bowler'),
(41, 'Shikhar Dhawan', 'DC', '5.2cr', 'true', 'Batsman'),
(42, 'Steve Smith', 'DC', '2.20CR', 'true', 'Batsman'),
(43, 'Ripal Patel', 'DC', '20L', 'true', 'Bowler'),
(44, 'Rishabh Pant', 'DC', '15CR', 'true', 'Batsman'),
(45, 'Tom Curran', 'DC', '5.25CR', 'true', 'ALL-Rounder'),
(46, 'Marcus Stoinis', 'DC', '4.8CR', 'true', 'ALL-Rounder'),
(47, 'Kagiso Rabada', 'DC', '4.2CR', 'true', 'Bowler'),
(48, 'Anrich Nortje ', 'DC', '30L', 'true', 'Bowler'),
(49, 'Ishant Sharma', 'DC', '1.1CR', 'true', 'Bowler'),
(50, 'Umesh Yadav', 'DC', '1CR', 'true', 'Bowler'),
(51, 'KL Rahul', 'PK', '11CR', 'true', 'Batsman'),
(52, 'Shahrukh Khan', 'PK', '5.25CR', 'true', 'Batsman'),
(53, 'Dawid Malan', 'PK', '1.5CR', 'true', 'Batsman'),
(54, 'Mandeep Singh', 'PK', '1.4CR', 'true', 'ALL-Rounder'),
(55, 'Moises Henriques', 'PK', '4.2CR', 'true', 'ALL-Rounder'),
(56, 'Jalaj Saxena', 'PK', '30CR', 'true', 'ALL-Rounder'),
(57, 'Mohammed Shami', 'PK', '4.8CR', 'true', 'Bowler'),
(58, 'Harpreet Brar', 'PK', '20L', 'true', 'Bowler'),
(59, 'Ravi Bishnoi', 'PK', '2CR', 'true', 'Bowler'),
(60, 'Eoin Morgan', 'KKR', '5.25CR', 'true', 'Batsman'),
(61, 'Nitish Rana', 'KKR', '3.4CR', 'true', 'Batsman'),
(62, 'Rinku Singh', 'KKR', '50L', 'true', 'Batsman'),
(63, 'Andre Russell', 'KKR', '8.5CR', 'true', 'ALL-Rounder'),
(64, 'Sunil Narine', 'KKR', '12.5CR', 'true', 'ALL-Rounder'),
(65, 'Shakib Al Hasan', 'KKR', '3.2CR', 'true', 'ALL-Rounder'),
(66, 'Harbhajan Singh', 'KKR', '2CR', 'true', 'Bowler'),
(67, 'Sandeep Warrier', 'KKR', '20L', 'true', 'Bowler'),
(68, 'Prasidh Krishna', 'KKR', '20L', 'true', 'Bowler'),
(69, 'Varun Chakravarthy', 'KKR', '4CR', 'true', 'Bowler'),
(70, 'Yashasvi Jaiswal', 'RR', '2.4cr', 'true', 'Batsman'),
(71, 'Manan Vohra ', 'RR', '20L', 'true', 'Batsman'),
(72, 'Riyan Parag', 'RR', '20L', 'true', 'Batsman'),
(73, 'Sanju Samson', 'RR', '8CR', 'true', 'Batsman'),
(74, 'Chris Morris', 'RR', '16.25CR', 'true', 'ALL-Rounder'),
(75, 'Shivam Dube', 'RR', '4.4CR', 'true', 'ALL-Rounder'),
(76, 'Ben Stokes', 'RR', '12.5CR', 'true', 'ALL-Rounder'),
(77, 'Liam Livingstone', 'RR', '75L', 'true', 'Bowler'),
(78, 'Kuldip Yadav', 'RR', '20L', 'true', 'Bowler'),
(79, 'Andrew Tye', 'RR', '1CR', 'true', 'Bowler'),
(80, 'Mustafizur Rahman', 'RR', '1CR', 'true', 'Bowler'),
(81, 'David Warner', 'SRH', '12.5CR', 'true', 'Batsman'),
(82, 'Kane Williamson', 'SRH', '3CR', 'true', 'Batsman'),
(83, 'Virat Singh', 'SRH', '1.9CR', 'true', 'Batsman'),
(84, 'Wriddhiman Saha', 'SRH', '1.2CR', 'true', 'Batsman'),
(85, 'Kedar Jadhav', 'SRH', '2CR', 'true', 'ALL-Rounder'),
(86, 'J Suchit', 'SRH', '30L', 'true', 'ALL-Rounder'),
(87, 'Jason Holder', 'SRH', '75L', 'true', 'ALL-Rounder'),
(88, 'Abhishek Sharma', 'SRH', '55L', 'true', 'ALL-Rounder'),
(89, 'Rashid Khan', 'SRH', '9CR', 'true', 'Bowler'),
(90, 'T Natarajan', 'SRH', '40L', 'true', 'Bowler'),
(91, 'Sandeep Sharma', 'SRH', '3CR', 'true', 'Bowler'),
(92, 'Bhuvneshwar Kumar ', 'SRH', '8.5CR', 'true', 'Bowler');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
