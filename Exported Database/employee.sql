-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2022 at 03:59 PM
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
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `password` varchar(10) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `fname`, `lname`, `email`, `address`, `mobile`, `password`, `designation`, `gender`, `file`) VALUES
(7, '', '', 'milindpatil2208@gmail.com', 'jnvdhbuybiun', '7058554647', 'Pass@123', 'Sr.Software Devloper', '', ''),
(9, 'milind', 'qqqqqq', 'milindpati08@gmail.com', '', '7878797987', '123', '22', '', ''),
(10, '', '', 'milind@gmail.com', 'hfftgvytv', '7058554647', '12345', 'Sr.Software Devloper', '', ''),
(11, 'bhavesh', 'gurav', 'bhavesh123@gmail.com', '', '7620582083', '12345', '23', '', ''),
(13, '', '', 'jay@gmail.com', 'dfkjfdhuv', '7878797987', '123', 'Sr.Software Devloper', '', ''),
(14, 'vishal', 'patil', 'mili@gmail.com', '', '7058554647', '123', '22', '', ''),
(15, 'jaydeep', 'pakdjn', 'jadeep@gmail.com', '', '6515411451', '12345', '23', '', ''),
(16, 'milind', 'qqqqqq', 'milindpatilss2208@gmail.com', 'sdcds', '7878797987', '11', '22', '', ''),
(17, 'milind', 'patil', 'miliaand@gmail.com', 'sdcds', '7878797987', '11', '22', '', ''),
(19, 'milind', 'qqqqqq', 'jaydfv@gmail.com', 'sd', '7878797987', '11', 'Jr.Software Devloper', '', ''),
(21, 'milind', 'jnjnd', 'milind@gmail.com', 'nndsvvn', '58484', '123', 'Sr.Software Devloper', '', ''),
(22, 'milind12', 'jnjnd', 'milind@gmail.com', 'nndsvvn', '58484', '123', 'Sr.Software Devloper', '', ''),
(26, ' jbhjbkj', '', '', '', '', '', ' ', '', ''),
(29, 'khbhjb', '', '', '', '', '', ' ', '', ''),
(31, 'milind', 'patil', 'milindpatil2208@gmail.com', 'hdfihi', '561654516', '123', 'Sr.Software Devloper', '', ''),
(32, 'milind', 'patil', 'milindpatil2208@gmail.com', 'hdfihi', '561654516', '123', 'Sr.Software Devloper', '', ''),
(33, 'milind', 'patil', 'milindpatil2208@gmail.com', 'hdfihi', '561654516', '123', 'Sr.Software Devloper', '', ''),
(38, '', '', '', '', '', '', ' ', '', ''),
(39, 'milind', 'qqqqqq', 'milind111@gmail.com', 'sdcds', '7058554647', '123', 'Sr.Software Devloper', '', ''),
(43, 'milind', 'kk', 'milind11@gmail.com', 'aaa', '7058554645', '123', 'Sr.Software Devloper', 'male', ''),
(45, 'Bhavesh', 'Gurav', 'bg@gmail.com', 'PATIL WADA', '8412222165', '123', 'Sr.Software Devloper', '', ''),
(51, 'milind', 'qqqqqq', 'milindpatilgmail.com', 'lknk', '7058554647', '12', 'Jr.Software Devloper', '', ''),
(52, 'ndvb', 'jhbjuhbf', 'm@gmail.com', 'jbhb', '6564526521', '123', 'Jr.Software Devloper', '', ''),
(53, 'ndvbuuuu', 'jhbjuhbfzzz', 'm12000@gmail.com', 'jbhbppp', '6564526521', '12345', 'Business Analyst ', '', ''),
(55, 'mayur', 'patil', 'mm@gmail.com', 'bjbjb', '7058554647', '2208', 'Sr.Software Devloper', '', ''),
(56, 'jaydeep', 'wadel', 'jaydee@gmail.com', 'kibhfvbn', '8546574975', '123', 'Jr.Software Devloper', '', ''),
(57, 'milind', 'patil', 'milind333@gmail.com', 'parola', '7620582083', '555', 'Sr.Software Devloper', '', ''),
(58, 'MILI', 'PA', 'J@GMAIL.COM', 'K', '5548795562', '12345', 'Sr.Software Devloper', '', ''),
(59, 'JANVI', 'Kcs', 'K@GMAIL.COM', 'JUHJCU', '5151515152', '444', 'Business Analyst ', '', ''),
(60, 'lll', 'llll', 'll@gmail.com', 'llll', '6445454894', '888', 'Jr.Software Devloper', '', 'Skills_Image.jpg'),
(61, 'ashwini', 'bhootni', 'bhootni@gmail.com', 'hell', '6598484156', '888', 'Jr.Software Devloper', '', 'Address Details.xlsx'),
(62, 'milind', 'patil', 'mmm@gmail.com', 'parola', '7620582083', '789', 'Sr.Software Devloper', '', 'Address Details - Copy.xlsx'),
(63, 'milnd', 'qqqqqq', 'milindsssssspatil2208@gmail.com', 'sdcds', '7878797987', 's', 'Project Manager', '', 'Address Details.xlsx'),
(64, 'milind', 'qqqqqqjhj', 'jay12dfv@gmail.com', 'bvdub', '1111111111', '1', 'Business Analyst', '', 'Address Details.xlsx'),
(65, 'jjj', 'kkk', 'vis@gmail.com', 'h', '7058554647', '456', 'Sr.Software Devloper', 'male', 'Address Details.xlsx'),
(66, 'nhdbn', 'ijnidn', 'jjjj@gmail.com', 'buhfbu', '8515151518', '789', 'Jr.Software Devloper', 'male', 'Address Details.xlsx'),
(67, 'hfjhy', 'jkhkjh', 'jtjutu@ljlj.com', '39, vyankatesh', '0125469888', '789', 'Project Manager', 'female', 'Address Details - Copy.xlsx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
