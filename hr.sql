-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 05:36 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `addition`
--

CREATE TABLE `addition` (
  `addition_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `addition_code` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `addition_year` date DEFAULT NULL,
  `addition_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

CREATE TABLE `asset` (
  `asset_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `asset_code` varchar(255) DEFAULT NULL,
  `asset_name` varchar(255) DEFAULT NULL,
  `purchase_date` varchar(255) DEFAULT NULL,
  `inovice_no` varchar(255) DEFAULT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `serial` decimal(20,2) DEFAULT NULL,
  `product_wrrenty` varchar(255) DEFAULT NULL,
  `salary_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `schedule_id` int(11) DEFAULT NULL,
  `leave_id` int(11) DEFAULT NULL,
  `sign_in_time` time DEFAULT NULL,
  `sign_out_time` time DEFAULT NULL,
  `late_count_time` time DEFAULT NULL,
  `attendance_Status` varchar(255) DEFAULT NULL,
  `attendace_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_schedule`
--

CREATE TABLE `attendance_schedule` (
  `schedule_id` int(11) NOT NULL,
  `signin_in` time DEFAULT NULL,
  `sign_out` time DEFAULT NULL,
  `late_count_time` time DEFAULT NULL,
  `absent_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `award_list`
--

CREATE TABLE `award_list` (
  `award_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `award_date` date DEFAULT NULL,
  `award_of_name` varchar(255) DEFAULT NULL,
  `total_amount` decimal(20,3) DEFAULT NULL,
  `leave_status` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `month_year` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `account_no` int(11) DEFAULT NULL,
  `swift_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `claims`
--

CREATE TABLE `claims` (
  `claims_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `claims_date` date DEFAULT NULL,
  `type_of_expense` varchar(255) DEFAULT NULL,
  `total_amount` decimal(20,2) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `claims_status` varchar(255) DEFAULT NULL,
  `claim_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deduction`
--

CREATE TABLE `deduction` (
  `deduction_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `deduction_code` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `amount` decimal(20,2) DEFAULT NULL,
  `month` date DEFAULT NULL,
  `deduction_year` date DEFAULT NULL,
  `deduction_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_Id` int(11) NOT NULL,
  `department_Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designation_Id` int(11) NOT NULL,
  `designation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(10) NOT NULL,
  `employee_type_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `employee_name` varchar(255) DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `employee_code` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `employee_status` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `Countries` varchar(255) DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `Passport_or_NID` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `maritial_Status` varchar(255) DEFAULT NULL,
  `present_address` varchar(255) DEFAULT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `phone` tinytext DEFAULT NULL,
  `employement_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee_document`
--

CREATE TABLE `employee_document` (
  `document_id` int(11) NOT NULL,
  `emlpoyee_id` int(11) DEFAULT NULL,
  `document_Name` varchar(255) DEFAULT NULL,
  `document_Status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee_type`
--

CREATE TABLE `employee_type` (
  `employee_Type_id` int(11) NOT NULL,
  `employee_Type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `expense_list`
--

CREATE TABLE `expense_list` (
  `expense_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `expense_date` date DEFAULT NULL,
  `expense_description` varchar(255) DEFAULT NULL,
  `amount` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `lang_Id` int(11) NOT NULL,
  `language_name` varchar(255) DEFAULT NULL,
  `language_short_form` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `leave_id` int(11) NOT NULL,
  `leave_type_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `leave_start_date` date DEFAULT NULL,
  `leave_end_date` date DEFAULT NULL,
  `leave_for` varchar(255) DEFAULT NULL,
  `supported_document` varchar(255) DEFAULT NULL,
  `leave_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leave_type`
--

CREATE TABLE `leave_type` (
  `leave_Type_id` int(11) NOT NULL,
  `leave_type` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `log_Id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `login_time` time DEFAULT NULL,
  `logout_time` time DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `user_ip` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `payroll_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `salary_id` int(11) DEFAULT NULL,
  `addition_id` int(11) DEFAULT NULL,
  `deduction_id` int(11) DEFAULT NULL,
  `salary_Date` date DEFAULT NULL,
  `salary_Month` varchar(255) DEFAULT NULL,
  `total_Attendance` int(11) DEFAULT NULL,
  `total_Absent` int(11) DEFAULT NULL,
  `total_Leave` int(11) DEFAULT NULL,
  `total_Leave_withoutpay` int(11) DEFAULT NULL,
  `salary_Year` date DEFAULT NULL,
  `salary_Status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `salary_id` int(11) NOT NULL,
  `salary_type_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `basic_salary` decimal(20,2) DEFAULT NULL,
  `medical` decimal(20,2) DEFAULT NULL,
  `house_rent` decimal(20,2) DEFAULT NULL,
  `food` decimal(20,3) DEFAULT NULL,
  `provident_fund` decimal(20,2) DEFAULT NULL,
  `net_salary` decimal(20,2) DEFAULT NULL,
  `gross_salary` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `salary_type`
--

CREATE TABLE `salary_type` (
  `salary_Type_id` int(11) NOT NULL,
  `salary_Type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) DEFAULT NULL,
  `permission` varchar(255) DEFAULT NULL,
  `user_role_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` tinytext DEFAULT NULL,
  `passwords` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `account_creation_date` date DEFAULT NULL,
  `user_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addition`
--
ALTER TABLE `addition`
  ADD PRIMARY KEY (`addition_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`asset_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`),
  ADD KEY `schedule_id` (`schedule_id`),
  ADD KEY `leave_id` (`leave_id`);

--
-- Indexes for table `attendance_schedule`
--
ALTER TABLE `attendance_schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `award_list`
--
ALTER TABLE `award_list`
  ADD PRIMARY KEY (`award_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `claims`
--
ALTER TABLE `claims`
  ADD PRIMARY KEY (`claims_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `deduction`
--
ALTER TABLE `deduction`
  ADD PRIMARY KEY (`deduction_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_Id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`designation_Id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `employee_type_id` (`employee_type_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `designation_id` (`designation_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `employee_document`
--
ALTER TABLE `employee_document`
  ADD PRIMARY KEY (`document_id`),
  ADD KEY `emlpoyee_id` (`emlpoyee_id`);

--
-- Indexes for table `employee_type`
--
ALTER TABLE `employee_type`
  ADD PRIMARY KEY (`employee_Type_id`);

--
-- Indexes for table `expense_list`
--
ALTER TABLE `expense_list`
  ADD PRIMARY KEY (`expense_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`lang_Id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`leave_id`),
  ADD KEY `leave_type_id` (`leave_type_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `leave_type`
--
ALTER TABLE `leave_type`
  ADD PRIMARY KEY (`leave_Type_id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`log_Id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`payroll_id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `salary_id` (`salary_id`),
  ADD KEY `addition_id` (`addition_id`),
  ADD KEY `deduction_id` (`deduction_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salary_id`),
  ADD KEY `salary_type_id` (`salary_type_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `salary_type`
--
ALTER TABLE `salary_type`
  ADD PRIMARY KEY (`salary_Type_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addition`
--
ALTER TABLE `addition`
  MODIFY `addition_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asset`
--
ALTER TABLE `asset`
  MODIFY `asset_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance_schedule`
--
ALTER TABLE `attendance_schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `award_list`
--
ALTER TABLE `award_list`
  MODIFY `award_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `claims`
--
ALTER TABLE `claims`
  MODIFY `claims_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deduction`
--
ALTER TABLE `deduction`
  MODIFY `deduction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_document`
--
ALTER TABLE `employee_document`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_type`
--
ALTER TABLE `employee_type`
  MODIFY `employee_Type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense_list`
--
ALTER TABLE `expense_list`
  MODIFY `expense_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `lang_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_type`
--
ALTER TABLE `leave_type`
  MODIFY `leave_Type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `log_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `payroll_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salary_type`
--
ALTER TABLE `salary_type`
  MODIFY `salary_Type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addition`
--
ALTER TABLE `addition`
  ADD CONSTRAINT `addition_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`);

--
-- Constraints for table `asset`
--
ALTER TABLE `asset`
  ADD CONSTRAINT `asset_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`);

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`schedule_id`) REFERENCES `attendance_schedule` (`schedule_id`),
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`leave_id`) REFERENCES `leaves` (`leave_id`);

--
-- Constraints for table `award_list`
--
ALTER TABLE `award_list`
  ADD CONSTRAINT `award_list_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`);

--
-- Constraints for table `bank`
--
ALTER TABLE `bank`
  ADD CONSTRAINT `bank_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`);

--
-- Constraints for table `claims`
--
ALTER TABLE `claims`
  ADD CONSTRAINT `claims_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`);

--
-- Constraints for table `deduction`
--
ALTER TABLE `deduction`
  ADD CONSTRAINT `deduction_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`employee_type_id`) REFERENCES `employee_type` (`employee_Type_id`),
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_Id`),
  ADD CONSTRAINT `employee_ibfk_3` FOREIGN KEY (`designation_id`) REFERENCES `designation` (`designation_Id`),
  ADD CONSTRAINT `employee_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`user_id`);

--
-- Constraints for table `employee_document`
--
ALTER TABLE `employee_document`
  ADD CONSTRAINT `employee_document_ibfk_1` FOREIGN KEY (`emlpoyee_id`) REFERENCES `employee` (`employee_id`);

--
-- Constraints for table `expense_list`
--
ALTER TABLE `expense_list`
  ADD CONSTRAINT `expense_list_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`);

--
-- Constraints for table `leaves`
--
ALTER TABLE `leaves`
  ADD CONSTRAINT `leaves_ibfk_1` FOREIGN KEY (`leave_type_id`) REFERENCES `leave_type` (`leave_Type_id`),
  ADD CONSTRAINT `leaves_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`);

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `log_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`user_id`);

--
-- Constraints for table `payroll`
--
ALTER TABLE `payroll`
  ADD CONSTRAINT `payroll_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`),
  ADD CONSTRAINT `payroll_ibfk_2` FOREIGN KEY (`salary_id`) REFERENCES `salary` (`salary_id`),
  ADD CONSTRAINT `payroll_ibfk_3` FOREIGN KEY (`addition_id`) REFERENCES `addition` (`addition_id`),
  ADD CONSTRAINT `payroll_ibfk_4` FOREIGN KEY (`deduction_id`) REFERENCES `deduction` (`deduction_id`);

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`salary_type_id`) REFERENCES `salary_type` (`salary_Type_id`),
  ADD CONSTRAINT `salary_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`);

--
-- Constraints for table `user_table`
--
ALTER TABLE `user_table`
  ADD CONSTRAINT `user_table_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
