-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 09:15 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complaint`
--

-- --------------------------------------------------------

--
-- Table structure for table `accused`
--

CREATE TABLE `accused` (
  `a_id` int(11) NOT NULL,
  `aname` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `hash` varchar(50) NOT NULL,
  `photo1` varchar(50) NOT NULL,
  `hash1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accused`
--

INSERT INTO `accused` (`a_id`, `aname`, `photo`, `hash`, `photo1`, `hash1`) VALUES
(4, 'Kumar', 'accused/c1.jpg', 'a7004af8881925e0e86471129e2cf09b', 'accused/c11.jpg', 'cbf1a908326274e8c9a173262018c08e'),
(6, 'Ashik', 'accused/d1.jpg', 'b5ba232a8e2d8112884e49ed97827fda', 'accused/d11.jpg', '65b834ca2641a4e8d2f356195c5265a8'),
(7, 'Karthik', 'accused/e1.jpg', '0dfdf56e6ddd45ca46fb98bc3a492daa', 'accused/e11.jpg', '7ddd4d5bd16d480ffabd246a34b65b3b'),
(8, 'Silambu', 'accused/f1.jpg', 'af9a8e167415656652341ddb65b6cd5e', 'accused/f11.jpg', '356756840038f69c4d52c5bdf31158e6'),
(9, 'hari', 'accused/g1.jpg', '868b87407f0d748f893c8bb5896f19b2', 'accused/g11.jpg', '13d10135e4d7144fc8ef951984db7f8f'),
(10, 'kumaran', 'accused/h1.jpg', 'ef54129f56d793703a218b894c5eea98', 'accused/h11.jpg', '550f71f855df383b001478a03f23ac50'),
(11, 'arun', 'accused/i1.jpg', '0ee86f91ff2fb4495fd3a0a85309d406', 'accused/i11.jpg', '17bafc6e23347c693ed06c57cea47441'),
(12, 'Naveen', 'accused/j1.jpg', 'b7ebb31039f048a971d36c77fce9d562', 'accused/j11.jpg', 'd3e10d2b7507414f906e95f5276552b3'),
(13, 'subash', 'accused/k1.jpg', '38cd07dc2906a1ac83eb271a6f7e9300', 'accused/k11.jpg', '65c323aef730d928be9159bcacbb2717'),
(14, 'sureandar', 'accused/l1.jpg', 'd8ed4386ed0547c6c95a44fd70288f78', 'accused/l11.jpg', 'c37a706c87b15d06e8e2356c7318fce0'),
(16, 'zzz', 'accused/qqq.jpg', '8d9a4e40664e0db9bf78003988bf287e', 'accused/qqqq1.jpg', '9f9471d5211c44a4a42e9b3b3d774400');

-- --------------------------------------------------------

--
-- Table structure for table `fir`
--

CREATE TABLE `fir` (
  `c_id` int(50) NOT NULL,
  `u_id` int(11) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_fname` varchar(20) NOT NULL,
  `c_address` varchar(50) NOT NULL,
  `c_moble` varchar(10) NOT NULL,
  `c_mail` varchar(25) NOT NULL,
  `cr_place` varchar(20) NOT NULL,
  `cr_date` date NOT NULL,
  `cr_time` time NOT NULL,
  `cr_dis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fir`
--

INSERT INTO `fir` (`c_id`, `u_id`, `c_name`, `c_fname`, `c_address`, `c_moble`, `c_mail`, `cr_place`, `cr_date`, `cr_time`, `cr_dis`) VALUES
(6, 5, 'xxx', 'naveen appa', 'usman road t nagar', '7744110011', 'xxx@gmail.com', 'guindy', '2021-03-18', '11:00:00', 'i lost my wallet in bus stop');

-- --------------------------------------------------------

--
-- Table structure for table `missing`
--

CREATE TABLE `missing` (
  `mp_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `mp_name` varchar(20) NOT NULL,
  `mp_c_no` varchar(20) NOT NULL,
  `mp_c_add` varchar(50) NOT NULL,
  `mp_dis` varchar(20) NOT NULL,
  `mp_photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `missing`
--

INSERT INTO `missing` (`mp_id`, `u_id`, `mp_name`, `mp_c_no`, `mp_c_add`, `mp_dis`, `mp_photo`) VALUES
(3, 5, 'naveen', '9900990099', 'guindy', 'teyhu6ioo578u67uytu5', 'missing-person/fp.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `p_id` int(11) NOT NULL,
  `zone` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `st_no` varchar(20) NOT NULL,
  `st_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`p_id`, `zone`, `area`, `st_no`, `st_pass`) VALUES
(3, 'south', 'guindy', 'c2', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `proof`
--

CREATE TABLE `proof` (
  `p_id` int(11) NOT NULL,
  `user` varchar(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `hash` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proof`
--

INSERT INTO `proof` (`p_id`, `user`, `photo`, `hash`) VALUES
(13, 'xxx', 'proof/f11.jpg', '356756840038f69c4d52c5bdf31158e6'),
(14, 'xxx', 'proof/qqqq1.jpg', '9f9471d5211c44a4a42e9b3b3d774400'),
(15, 'xxx', 'proof/qqqq1.jpg', '9f9471d5211c44a4a42e9b3b3d774400'),
(16, 'xxx', 'proof/qqqq1.jpg', '9f9471d5211c44a4a42e9b3b3d774400');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `s_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `l_type` varchar(10) NOT NULL,
  `l_dis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`s_id`, `c_id`, `l_type`, `l_dis`) VALUES
(10, 6, 'level1', 'we  accept your complaint we will find  your wallet.'),
(11, 6, 'level2', 'we will check CCTV process on going'),
(12, 6, 'level3', 'we got the vicitim');

-- --------------------------------------------------------

--
-- Table structure for table `statusmp`
--

CREATE TABLE `statusmp` (
  `sm_id` int(11) NOT NULL,
  `mp_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `mp_dis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statusmp`
--

INSERT INTO `statusmp` (`sm_id`, `mp_id`, `type`, `mp_dis`) VALUES
(3, 3, 'level1', 'we will find that pe');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phno` varchar(50) NOT NULL,
  `arae` varchar(50) NOT NULL,
  `p_photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `uname`, `password`, `email`, `phno`, `arae`, `p_photo`) VALUES
(5, 'xxx', '123', 'xxx@gmail.com', '7744110011', 'USMAN ROAD T NAGAR', 'user-photo/02.png');

-- --------------------------------------------------------

--
-- Table structure for table `wanted`
--

CREATE TABLE `wanted` (
  `w_id` int(11) NOT NULL,
  `w_name` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wanted`
--

INSERT INTO `wanted` (`w_id`, `w_name`, `photo`) VALUES
(6, 'anbu', 'wanted-person/qqq.jpg'),
(7, 'vijay Mallaiya', 'wanted-person/vijay_m.jpg'),
(8, 'subash', 'wanted-person/fp.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accused`
--
ALTER TABLE `accused`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `fir`
--
ALTER TABLE `fir`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `missing`
--
ALTER TABLE `missing`
  ADD PRIMARY KEY (`mp_id`);

--
-- Indexes for table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `proof`
--
ALTER TABLE `proof`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `statusmp`
--
ALTER TABLE `statusmp`
  ADD PRIMARY KEY (`sm_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `wanted`
--
ALTER TABLE `wanted`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accused`
--
ALTER TABLE `accused`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `fir`
--
ALTER TABLE `fir`
  MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `missing`
--
ALTER TABLE `missing`
  MODIFY `mp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `police`
--
ALTER TABLE `police`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `proof`
--
ALTER TABLE `proof`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `statusmp`
--
ALTER TABLE `statusmp`
  MODIFY `sm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wanted`
--
ALTER TABLE `wanted`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
