-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 01:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employment`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_experience`
--

CREATE TABLE `academic_experience` (
  `id` int(50) NOT NULL,
  `experience` int(100) NOT NULL,
  `person_id` int(10) NOT NULL,
  `education_id` int(100) NOT NULL,
  `acm_org1` varchar(50) NOT NULL,
  `acm_post1` varchar(50) NOT NULL,
  `acm_joiningDate1` date NOT NULL,
  `acm_leavingDate1` date NOT NULL,
  `acm_salary1` varchar(50) NOT NULL,
  `acm_org2` varchar(50) NOT NULL,
  `acm_post2` varchar(50) NOT NULL,
  `acm_joiningDdate2` date NOT NULL,
  `acm_leavingDate2` date NOT NULL,
  `acm_salary2` varchar(50) NOT NULL,
  `acm_org3` varchar(50) NOT NULL,
  `acm_post3` varchar(50) NOT NULL,
  `acm_joiningDdate3` date NOT NULL,
  `acm_leavingDate3` date NOT NULL,
  `acm_salary3` varchar(50) NOT NULL,
  `acm_org4` varchar(50) NOT NULL,
  `acm_post4` varchar(50) NOT NULL,
  `acm_joiningDdate4` date NOT NULL,
  `acm_leavingDate4` date NOT NULL,
  `acm_salary4` varchar(50) NOT NULL,
  `acm_org5` varchar(50) NOT NULL,
  `acm_post5` varchar(50) NOT NULL,
  `acm_joiningDdate5` date NOT NULL,
  `acm_leavingDate5` date NOT NULL,
  `acm_salary5` varchar(50) NOT NULL,
  `ind_org1` varchar(50) NOT NULL,
  `ind_post1` text NOT NULL,
  `ind_joiningDate1` date NOT NULL,
  `ind_leavingDate1` date NOT NULL,
  `ind_salary1` varchar(50) NOT NULL,
  `ind_org2` text NOT NULL,
  `ind_post2` text NOT NULL,
  `ind_joiningDate2` date NOT NULL,
  `ind_leavingDate2` date NOT NULL,
  `ind_salary2` varchar(50) NOT NULL,
  `ind_org3` text NOT NULL,
  `ind_post3` text NOT NULL,
  `ind_joiningDate3` date NOT NULL,
  `ind_leavingDate3` date NOT NULL,
  `ind_salary3` varchar(50) NOT NULL,
  `ind_org4` text NOT NULL,
  `ind_post4` text NOT NULL,
  `ind_joiningDate4` date NOT NULL,
  `ind_leavingDate4` date NOT NULL,
  `ind_salary4` varchar(50) NOT NULL,
  `ind_org5` text NOT NULL,
  `ind_post5` text NOT NULL,
  `ind_joiningDate5` date NOT NULL,
  `ind_leavingDate5` date NOT NULL,
  `ind_salary5` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_experience`
--

INSERT INTO `academic_experience` (`id`, `experience`, `person_id`, `education_id`, `acm_org1`, `acm_post1`, `acm_joiningDate1`, `acm_leavingDate1`, `acm_salary1`, `acm_org2`, `acm_post2`, `acm_joiningDdate2`, `acm_leavingDate2`, `acm_salary2`, `acm_org3`, `acm_post3`, `acm_joiningDdate3`, `acm_leavingDate3`, `acm_salary3`, `acm_org4`, `acm_post4`, `acm_joiningDdate4`, `acm_leavingDate4`, `acm_salary4`, `acm_org5`, `acm_post5`, `acm_joiningDdate5`, `acm_leavingDate5`, `acm_salary5`, `ind_org1`, `ind_post1`, `ind_joiningDate1`, `ind_leavingDate1`, `ind_salary1`, `ind_org2`, `ind_post2`, `ind_joiningDate2`, `ind_leavingDate2`, `ind_salary2`, `ind_org3`, `ind_post3`, `ind_joiningDate3`, `ind_leavingDate3`, `ind_salary3`, `ind_org4`, `ind_post4`, `ind_joiningDate4`, `ind_leavingDate4`, `ind_salary4`, `ind_org5`, `ind_post5`, `ind_joiningDate5`, `ind_leavingDate5`, `ind_salary5`) VALUES
(3, 0, 23, 4, 'adssasaaa', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `educational_details`
--

CREATE TABLE `educational_details` (
  `id` int(50) NOT NULL,
  `person_id` int(100) NOT NULL,
  `phd1` varchar(50) NOT NULL,
  `phd2` varchar(50) NOT NULL,
  `phd3` varchar(50) NOT NULL,
  `phd4` varchar(50) NOT NULL,
  `phd5` varchar(50) NOT NULL,
  `phd6` varchar(50) NOT NULL,
  `pg1` varchar(50) NOT NULL,
  `pg2` varchar(50) NOT NULL,
  `pg3` varchar(50) NOT NULL,
  `pg4` varchar(50) NOT NULL,
  `pg5` varchar(50) NOT NULL,
  `pg6` varchar(50) NOT NULL,
  `ug1` varchar(50) NOT NULL,
  `ug2` varchar(50) NOT NULL,
  `ug3` varchar(50) NOT NULL,
  `ug4` varchar(50) NOT NULL,
  `ug5` varchar(50) NOT NULL,
  `ug6` varchar(50) NOT NULL,
  `marks_10th1` varchar(50) NOT NULL,
  `marks_10th2` varchar(50) NOT NULL,
  `marks_10th3` varchar(50) NOT NULL,
  `marks_10th4` varchar(50) NOT NULL,
  `marks_10th5` varchar(50) NOT NULL,
  `marks_10th6` varchar(50) NOT NULL,
  `marks_12th1` varchar(50) NOT NULL,
  `marks_12th2` varchar(50) NOT NULL,
  `marks_12th3` varchar(50) NOT NULL,
  `marks_12th4` varchar(50) NOT NULL,
  `marks_12th5` varchar(50) NOT NULL,
  `marks_12th6` varchar(50) NOT NULL,
  `any_other1` varchar(50) NOT NULL,
  `any_other2` varchar(50) NOT NULL,
  `any_other3` varchar(50) NOT NULL,
  `any_other4` varchar(50) NOT NULL,
  `any_other5` varchar(50) NOT NULL,
  `any_other6` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educational_details`
--

INSERT INTO `educational_details` (`id`, `person_id`, `phd1`, `phd2`, `phd3`, `phd4`, `phd5`, `phd6`, `pg1`, `pg2`, `pg3`, `pg4`, `pg5`, `pg6`, `ug1`, `ug2`, `ug3`, `ug4`, `ug5`, `ug6`, `marks_10th1`, `marks_10th2`, `marks_10th3`, `marks_10th4`, `marks_10th5`, `marks_10th6`, `marks_12th1`, `marks_12th2`, `marks_12th3`, `marks_12th4`, `marks_12th5`, `marks_12th6`, `any_other1`, `any_other2`, `any_other3`, `any_other4`, `any_other5`, `any_other6`) VALUES
(4, 23, 'dad', 'ads', 'ads', '54', '65', '', 'asd', 'ads', 'asd', '54', '76', '', 'ads', 'ads', 'ads', '54', '76', '', 'ad', 'ads', 'ads', '54', '76', '', 'ads', 'ad', 'ads', '54', '76', '', 'das', 'ad', 'ads', '45', '76', '');

-- --------------------------------------------------------

--
-- Table structure for table `person_detail`
--

CREATE TABLE `person_detail` (
  `person_id` int(11) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `formType` varchar(50) NOT NULL,
  `postApplied` varchar(50) NOT NULL,
  `Specialization` varchar(50) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `fatherName` varchar(50) NOT NULL,
  `spouseName` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `maritalStatus` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `panNumber` varchar(50) NOT NULL,
  `aadharNumber` int(50) NOT NULL,
  `personImage` varchar(100) NOT NULL,
  `address` varchar(80) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pinCode` int(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileNo1` int(30) NOT NULL,
  `mobileNo2` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person_detail`
--

INSERT INTO `person_detail` (`person_id`, `emp_id`, `formType`, `postApplied`, `Specialization`, `fullName`, `fatherName`, `spouseName`, `gender`, `maritalStatus`, `category`, `nationality`, `dob`, `panNumber`, `aadharNumber`, `personImage`, `address`, `city`, `pinCode`, `email`, `mobileNo1`, `mobileNo2`) VALUES
(23, 'LLOYD20241', 'personal', 'dsvdsdfs', 'gsfdsf', 'sfdfs', 'sfdd', 'sfdsf', 'male', 'single', 'general', '', '0000-00-00', '', 0, 'uploads/LLOYD20241/prof_1704801519-emp.', '', '', 0, 'thepalakchaudhary00@gmail.com', 2147483647, 0);

-- --------------------------------------------------------

--
-- Table structure for table `research_expertise`
--

CREATE TABLE `research_expertise` (
  `id` int(11) NOT NULL,
  `researchArea` varchar(50) DEFAULT NULL,
  `internationalJournals` varchar(50) DEFAULT NULL,
  `nationalJournals` varchar(50) DEFAULT NULL,
  `oralPresentation` varchar(50) DEFAULT NULL,
  `books` varchar(50) DEFAULT NULL,
  `bookChapters` varchar(50) DEFAULT NULL,
  `patents` varchar(50) NOT NULL,
  `phdprojectsGuided` varchar(50) DEFAULT NULL,
  `pgprojectsGuided` varchar(50) DEFAULT NULL,
  `ugprojectsGuided` varchar(50) DEFAULT NULL,
  `consul_gen_payment` int(11) DEFAULT NULL,
  `res_grants_pay` int(11) DEFAULT NULL,
  `ans1` varchar(60) DEFAULT NULL,
  `ans2` varchar(60) DEFAULT NULL,
  `ans3` varchar(60) DEFAULT NULL,
  `ans4` varchar(60) DEFAULT NULL,
  `name1` varchar(60) DEFAULT NULL,
  `designation1` varchar(60) DEFAULT NULL,
  `organization1` varchar(60) DEFAULT NULL,
  `mob1` int(11) DEFAULT NULL,
  `email1` varchar(60) DEFAULT NULL,
  `name2` varchar(60) DEFAULT NULL,
  `designation2` varchar(60) DEFAULT NULL,
  `organization2` varchar(60) DEFAULT NULL,
  `mob2` int(11) DEFAULT NULL,
  `email2` varchar(60) DEFAULT NULL,
  `sign` varchar(60) DEFAULT NULL,
  `person_id` int(11) NOT NULL,
  `education_id` int(11) NOT NULL,
  `experience_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_experience`
--
ALTER TABLE `academic_experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educational_details`
--
ALTER TABLE `educational_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person_detail`
--
ALTER TABLE `person_detail`
  ADD PRIMARY KEY (`person_id`);

--
-- Indexes for table `research_expertise`
--
ALTER TABLE `research_expertise`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_experience`
--
ALTER TABLE `academic_experience`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `educational_details`
--
ALTER TABLE `educational_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `person_detail`
--
ALTER TABLE `person_detail`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `research_expertise`
--
ALTER TABLE `research_expertise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
