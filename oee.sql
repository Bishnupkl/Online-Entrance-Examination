-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2019 at 10:16 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`id`, `email`, `password`) VALUES
(1, 'safalsigdel381@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `exam_date`
--

CREATE TABLE `exam_date` (
  `id` int(11) NOT NULL,
  `edate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_date`
--

INSERT INTO `exam_date` (`id`, `edate`) VALUES
(1, '2019-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `question_table`
--

CREATE TABLE `question_table` (
  `q_id` int(100) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `choice1` varchar(100) NOT NULL,
  `choice2` varchar(100) NOT NULL,
  `choice3` varchar(100) NOT NULL,
  `choice4` varchar(100) NOT NULL,
  `correct_ans` varchar(100) NOT NULL,
  `mark` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_table`
--

INSERT INTO `question_table` (`q_id`, `question`, `choice1`, `choice2`, `choice3`, `choice4`, `correct_ans`, `mark`) VALUES
(1, 'A train 110m length travel at 60 km/hr. The time in which a man walking at 6 km/hr in opposite direction pass the train is', '6.6 sec', '66 sec', '6 sec', '5.4 sec', '6 sec', '1'),
(2, 'The maximum velocity of a car in level road of radius 80m in which car move without skidding if coefficient of friction is 0.25 is', '10 m/s', '8 m/s', '12 m/s', '14 m/s', '12 m/s', '1'),
(3, 'A fly wheel of mass 25 kg has a radius of 0.2m.It is making 240 rpm. The torque required to stop in rest in 20 sec is', '314 Nm', '0.628 Nm', '0.314 Nm', '1.26 Nm', '0.628 Nm', '1'),
(4, 'A cube is subjected to a pressure of 5*105 N/m2. Each side of the cube is shortened by 1% the bulk modulus of cube', '8.3*106 N/m2', '1.67*107 N/m2', '3.32*107 N/m2', '6.4*107 N/m2', '1.67*107 N/m2', '1'),
(5, 'A spherical liquid drop of radius R is divided into 8 equal droplets. It surface tension is T then work done in the process will be', '2?R2T', '3?R2T', '4?R2T', '5?R2T', '4?R2T', '1'),
(6, 'The number of electrons present in 3.2 grams of CH4 is', '0.25 NA', '0.5 NA', '0.75 NA', '1 NA', '1 NA', '1'),
(7, 'The vapour density of a metal chloride is 99 and the equivalent weight of metal is 63.5 . The formula of metal chloride is', 'MCl', 'M2Cl2', 'MCl2', 'M2Cl4', 'M2Cl2', '1'),
(8, 'The mole fraction of NaOH in 0.4M NaOH solution is', '7.5*10-3', '3.25*103', '7.15*10-4', '3.25*10-4', '7.5*10-3', '1'),
(9, 'How many unpaired electrons are present in Fe3+ ion', '3', '5', '1', '6', '5', '1'),
(10, 'Acetaldehyde and benzaldehyde can be distinguished by', 'Tollen’s test', '2,4-DNP test', 'Iodoform test', 'Wolff-Kishner', 'Iodoform test', '1'),
(11, 'Inscription on a tomb is called……………..', 'Epitaph', 'cemetery', 'Morgue', 'demagogue', 'Epitaph', '1'),
(12, 'After he finished the exam, he ………… to the teacher.', 'Handed over it', 'handed it over', 'handed it out', 'handed out it', 'handed it over', '1'),
(13, 'Every week she …………. her sister in her village to talk to her.', 'Calls over', 'calls on', 'calls out', 'calls up', 'calls out', '1'),
(14, 'He has a coat ……………… five pockets.', 'of', 'about ', 'with ', 'in ', 'with', '1'),
(15, 'To hit below the belt means:', 'to use force', 'to use unfair means', 'to use energy', 'to use leather', 'to use unfair means', '1'),
(16, 'For function f(x, y) = sin-1(x2 + y2) critical points are found. Now a new graph g(x, y) is formed by coupling graphs f(x, y) and f(x, y) = – sin-1(x2 + y2). What are the critical points of g(x, y)', '(0,0)', '(0,-90)', '(90,0)', 'none', '(0,-90)', '1'),
(17, 'If the Hessian matrix of a function is zero then the critical point is', 'It cannot be concluded', 'Always at Origin', 'Depends on Function', '(100,100)', 'It cannot be concluded', '1'),
(18, 'What is the maximum value of the function f(x, y) = 3xy + 4x2y2 in the region\r\nx=0; y=0; 2x + y = 2\r\n', '1', '0', '100', '10', '10', '1'),
(19, 'Divide 120 into three parts so that the sum of their products taken two at a time is maximum. If x, y, z are two parts, find value of x, y and z', 'x=40, y=40, z=40', 'x=38, y=50, z=32', 'x=50, y=40, z=30', 'x=80, y=30, z=50', 'x=38, y=50, z=32', '1'),
(20, 'For a Poisson Distribution, if mean(m) = 1, then P(1) is', '1/e', 'e', 'e/2', 'Indeterminate', '1/e', '1');

-- --------------------------------------------------------

--
-- Table structure for table `rdate`
--

CREATE TABLE `rdate` (
  `id` int(11) NOT NULL,
  `rdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rdate`
--

INSERT INTO `rdate` (`id`, `rdate`) VALUES
(1, '2018-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ques_attempted` int(100) NOT NULL,
  `mark_obtained` double NOT NULL,
  `right_answer` int(11) NOT NULL,
  `wrong_answer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `email`, `ques_attempted`, `mark_obtained`, `right_answer`, `wrong_answer`) VALUES
(1, 'safalsigdel381@gmail.com', 20, 20, 20, 0),
(2, 'selena@gmail.com', 18, 15.5, 16, 2),
(3, 'keshab@gmail.com', 18, 14.25, 15, 3),
(4, 'bishnu@gmail.com', 17, 12, 13, 4),
(5, 'shishir@gmail.com', 12, 9.5, 10, 2),
(6, 'yog@gmail.com', 15, 11, 11, 4),
(7, 'sujeet@gmail.com', 13, 9, 9, 4),
(8, 'yadav@gmail.com', 10, 8.5, 10, 2),
(9, 'messi@gmail.com', 17, 16.75, 16, 1),
(10, 'kristen@gmail.com', 18, 16, 16, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mark` double NOT NULL,
  `mark1` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sample`
--

INSERT INTO `sample` (`id`, `name`, `mark`, `mark1`) VALUES
(1, 'safal', -1.5, 1),
(2, 'ram', -1.3, 0.4);

-- --------------------------------------------------------

--
-- Table structure for table `stu_reg`
--

CREATE TABLE `stu_reg` (
  `id` int(11) NOT NULL,
  `name` varchar(1100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `fatname` varchar(1100) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(1100) NOT NULL,
  `password` varchar(11) NOT NULL,
  `reg_date` date NOT NULL,
  `gender` varchar(11) NOT NULL,
  `exam_status` varchar(1100) NOT NULL,
  `salting_value` varchar(1100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_reg`
--

INSERT INTO `stu_reg` (`id`, `name`, `address`, `fatname`, `dob`, `phone`, `email`, `password`, `reg_date`, `gender`, `exam_status`, `salting_value`) VALUES
(0, 'Roary Craig', 'Error reiciendis ea ', 'Ezekiel Conley', '1982-05-27', '+1 (448) 22', 'gesijaso@ma', '1be7d287c3d', '2019-05-23', 'male', 'not taken', 'djf*iwirÂ£jg54313kjg@g!jkg&gj'),
(0, 'Hiroko Hill', 'Molestiae totam duci', 'Yasir Bartlett', '2008-07-12', '+1 (103) 28', 'ziwed@maili', '39268ad4611', '2019-05-23', 'male', 'not taken', 'djf*iwirÂ£jg13811kjg@g!jkg&gj'),
(0, 'bishnu pokhrel', 'butwal', 'bhim', '1990-12-12', '9811990067', 'bishnu@gmai', 'ff88bf54ca6', '2019-05-23', 'male', 'not taken', 'djf*iwirÂ£jg30757kjg@g!jkg&gj'),
(0, 'bishnu', 'bishnu', 'bishnu', '1999-12-12', '9811990067', 'bishnup212@', 'bishnu', '2019-05-23', 'male', 'not taken', 'djf*iwirÂ£jg30809kjg@g!jkg&gj');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_reg`
--

CREATE TABLE `teacher_reg` (
  `t_id` int(10) NOT NULL,
  `t_name` varchar(50) NOT NULL,
  `t_gender` varchar(10) NOT NULL,
  `t_address` varchar(50) NOT NULL,
  `t_phone` varchar(100) NOT NULL,
  `t_email` varchar(50) NOT NULL,
  `t_password` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `rdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_reg`
--

INSERT INTO `teacher_reg` (`t_id`, `t_name`, `t_gender`, `t_address`, `t_phone`, `t_email`, `t_password`, `subject`, `rdate`) VALUES
(1, 'Nirmal Sharma', 'male', 'Butwal', '84848484', 'nirmal@gmail.com', 'nirmal', 'chemistry', '2018-06-05'),
(2, 'Hari Sharma', 'male', 'Butwal', '84848484', 'Harl@gmail.com', 'hari', 'english', '2018-06-05'),
(3, 'safal sigdel', 'male', 'Bardghat-3', '9811427933', 'safalsigdel381@gmail.com', 'safal', 'physics', '2018-06-05'),
(4, 'Narayan Sigdel', 'male', 'Butwal', '40903385', 'narayan@gmail.com', 'narayan', 'English', '2018-06-06');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `num` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `num`) VALUES
(1, 'safal'),
(3, 'safals');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_date`
--
ALTER TABLE `exam_date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_table`
--
ALTER TABLE `question_table`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `rdate`
--
ALTER TABLE `rdate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `e` (`email`);

--
-- Indexes for table `sample`
--
ALTER TABLE `sample`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_reg`
--
ALTER TABLE `teacher_reg`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `n` (`num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `exam_date`
--
ALTER TABLE `exam_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `question_table`
--
ALTER TABLE `question_table`
  MODIFY `q_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `rdate`
--
ALTER TABLE `rdate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sample`
--
ALTER TABLE `sample`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teacher_reg`
--
ALTER TABLE `teacher_reg`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
