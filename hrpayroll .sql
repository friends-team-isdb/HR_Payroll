-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 03:37 PM
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
-- Database: `hrpayroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `addition`
--

CREATE TABLE `addition` (
  `addition_id` int(11) NOT NULL,
  `employee_id` varchar(255) DEFAULT NULL,
  `addition_code` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `addition_year` varchar(255) DEFAULT NULL,
  `addition_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

CREATE TABLE `asset` (
  `asset_id` int(11) NOT NULL,
  `employee_id` varchar(255) DEFAULT NULL,
  `asset_code` varchar(255) DEFAULT NULL,
  `asset_name` varchar(255) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
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
  `id` int(11) NOT NULL,
  `employee_id` varchar(255) DEFAULT NULL,
  `singInTime` time DEFAULT NULL,
  `singOutTime` time DEFAULT NULL,
  `lateCountTime` time DEFAULT NULL,
  `attendaneStatus` varchar(255) DEFAULT NULL,
  `attendancedate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `employee_id`, `singInTime`, `singOutTime`, `lateCountTime`, `attendaneStatus`, `attendancedate`) VALUES
(1, 'Abdus Samad', NULL, NULL, NULL, 'Absent', '2021-11-25'),
(2, 'Abdus Samad', NULL, NULL, NULL, 'Present', '2021-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_schedule`
--

CREATE TABLE `attendance_schedule` (
  `Schedule_id` int(11) NOT NULL,
  `Signin_in_time_setup` time DEFAULT NULL,
  `Sign_out_time_setup` time DEFAULT NULL,
  `Late_Count_time` time DEFAULT NULL,
  `Absent_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `award_list`
--

CREATE TABLE `award_list` (
  `award_id` int(11) NOT NULL,
  `employee_id` varchar(255) DEFAULT NULL,
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
  `employee_id` varchar(255) DEFAULT NULL,
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
  `employee_id` varchar(255) DEFAULT NULL,
  `claims_date` date DEFAULT NULL,
  `type_of_expense` varchar(255) DEFAULT NULL,
  `total_amount` int(11) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `claims_status` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deduction`
--

CREATE TABLE `deduction` (
  `deduction_id` int(11) NOT NULL,
  `employee_id` varchar(255) DEFAULT NULL,
  `deduction_code` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `amount` decimal(20,2) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `deduction_year` varchar(255) DEFAULT NULL,
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

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_Id`, `department_Name`) VALUES
(1, 'IT'),
(2, 'Accounts');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designation_Id` int(11) NOT NULL,
  `designation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_Id`, `designation`) VALUES
(1, 'Software Developer'),
(2, 'Head Accounts');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(10) NOT NULL,
  `employee_type_id` varchar(255) DEFAULT NULL,
  `department_id` varchar(255) DEFAULT NULL,
  `designation_id` varchar(255) DEFAULT NULL,
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
  `employement_status` varchar(255) DEFAULT NULL,
  `phone` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_type_id`, `department_id`, `designation_id`, `user_id`, `employee_name`, `appointment_date`, `date_of_birth`, `employee_code`, `email`, `joining_date`, `employee_status`, `religion`, `nationality`, `district`, `Countries`, `postal_code`, `Passport_or_NID`, `gender`, `maritial_Status`, `present_address`, `permanent_address`, `picture`, `employement_status`, `phone`) VALUES
(1, 'Intern', 'IT', 'Software Developer', NULL, 'Abdus Samad', '2021-11-25', '2021-11-18', 123456, 'abdussamad018@gmail.com', '2021-11-19', 'Software Developer', 'Islam', 'Bangladeshi', 'Chandpur', 'Bangladesh', 1215, '25862', 'Male', 'married', 'Danmondi', 'Chandpur', 'uploads/notice (1).png', '', '01845891962'),
(2, 'Full time', 'IT', 'Software Developer', NULL, 'Ahsan Habib', '2021-11-25', '2021-11-23', 8520, 'habib@gmail.com', '2021-12-30', 'Software Developer', 'Islam', 'Bangladeshi', 'Chandpur', 'Bangladesh', 3652, '3273525896', 'Male', 'married', 'Pallabi Dhaka', 'Faridgonj Chandpur', 'uploads/profile.png', '', '01885939393');

-- --------------------------------------------------------

--
-- Table structure for table `employee_document`
--

CREATE TABLE `employee_document` (
  `Document_id` int(11) NOT NULL,
  `Emlpoyee_id` varchar(255) DEFAULT NULL,
  `Document_Name` varchar(255) DEFAULT NULL,
  `Document_Status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_document`
--

INSERT INTO `employee_document` (`Document_id`, `Emlpoyee_id`, `Document_Name`, `Document_Status`) VALUES
(1, NULL, 'NID ', 'Valid');

-- --------------------------------------------------------

--
-- Table structure for table `employee_type`
--

CREATE TABLE `employee_type` (
  `employee_Type_id` int(11) NOT NULL,
  `employee_Type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_type`
--

INSERT INTO `employee_type` (`employee_Type_id`, `employee_Type`) VALUES
(2, 'Full time');

-- --------------------------------------------------------

--
-- Table structure for table `expense_list`
--

CREATE TABLE `expense_list` (
  `expense_id` int(11) NOT NULL,
  `employee_id` varchar(255) DEFAULT NULL,
  `expense_date` date DEFAULT NULL,
  `expense_description` varchar(255) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
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
  `leave_type_id` varchar(255) DEFAULT NULL,
  `employee_id` varchar(255) DEFAULT NULL,
  `leave_start_date` date DEFAULT NULL,
  `leave_end_date` date DEFAULT NULL,
  `leave_for` varchar(255) DEFAULT NULL,
  `supported_document` varchar(255) DEFAULT NULL,
  `leave_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`leave_id`, `leave_type_id`, `employee_id`, `leave_start_date`, `leave_end_date`, `leave_for`, `supported_document`, `leave_status`) VALUES
(3, 'Tanda', 'Abdus Samad', '2021-11-23', '2021-11-26', 'Ami valo nei', 'NID ', 'aproved'),
(4, 'Fever', 'Abdus Samad', '2021-11-26', '2021-11-27', 'Jor', 'NID ', 'pending'),
(5, 'Fever', 'Abdus Samad', '2021-11-24', '2021-11-25', 'Dorkar', 'NID ', 'aproved'),
(6, 'Tanda', 'Ahsan Habib', '2021-11-24', '2021-11-25', 'TEST', 'NID ', 'aproved');

-- --------------------------------------------------------

--
-- Table structure for table `leave_type`
--

CREATE TABLE `leave_type` (
  `leave_type_id` int(11) NOT NULL,
  `leave_type` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_type`
--

INSERT INTO `leave_type` (`leave_type_id`, `leave_type`, `payment_status`) VALUES
(1, 'Tanda', 'pending'),
(2, 'Fever', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `userName` varchar(255) DEFAULT NULL,
  `loginTime` time DEFAULT NULL,
  `logoutTime` time DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `userIp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `payroll_id` int(11) NOT NULL,
  `employee_id` varchar(255) DEFAULT NULL,
  `salary_id` varchar(255) DEFAULT NULL,
  `addition_id` varchar(255) DEFAULT NULL,
  `deduction_id` varchar(255) DEFAULT NULL,
  `salary_Date` date DEFAULT NULL,
  `salary_Month` varchar(255) DEFAULT NULL,
  `total_Attendance` int(11) DEFAULT NULL,
  `total_Absent` int(11) DEFAULT NULL,
  `total_Leave` int(11) DEFAULT NULL,
  `total_Leave_withoutpay` int(11) DEFAULT NULL,
  `salary_Status` varchar(255) DEFAULT NULL,
  `Salary_Year` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`payroll_id`, `employee_id`, `salary_id`, `addition_id`, `deduction_id`, `salary_Date`, `salary_Month`, `total_Attendance`, `total_Absent`, `total_Leave`, `total_Leave_withoutpay`, `salary_Status`, `Salary_Year`) VALUES
(1, 'Abdus Samad', NULL, NULL, NULL, '2021-11-25', '01', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Abdus Samad', NULL, NULL, NULL, '2021-11-10', '01', NULL, NULL, NULL, NULL, NULL, '2021');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `salary_id` int(11) NOT NULL,
  `salary_type_id` varchar(255) DEFAULT NULL,
  `employe_id` varchar(255) DEFAULT NULL,
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
  `password` varchar(255) DEFAULT NULL,
  `role_id` varchar(255) DEFAULT NULL,
  `account_creation_date` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_name`, `full_name`, `email`, `phone`, `password`, `role_id`, `account_creation_date`, `status`) VALUES
(1, 'Abdus Samad', 'Abdus Samad', 'abdussamad018@gmail.com', '01845891962', '123456', '', '2021-11-23', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addition`
--
ALTER TABLE `addition`
  ADD PRIMARY KEY (`addition_id`);

--
-- Indexes for table `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`asset_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_schedule`
--
ALTER TABLE `attendance_schedule`
  ADD PRIMARY KEY (`Schedule_id`);

--
-- Indexes for table `award_list`
--
ALTER TABLE `award_list`
  ADD PRIMARY KEY (`award_id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `claims`
--
ALTER TABLE `claims`
  ADD PRIMARY KEY (`claims_id`);

--
-- Indexes for table `deduction`
--
ALTER TABLE `deduction`
  ADD PRIMARY KEY (`deduction_id`);

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
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `employee_document`
--
ALTER TABLE `employee_document`
  ADD PRIMARY KEY (`Document_id`);

--
-- Indexes for table `employee_type`
--
ALTER TABLE `employee_type`
  ADD PRIMARY KEY (`employee_Type_id`);

--
-- Indexes for table `expense_list`
--
ALTER TABLE `expense_list`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`lang_Id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `leave_type`
--
ALTER TABLE `leave_type`
  ADD PRIMARY KEY (`leave_type_id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`payroll_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salary_id`);

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
  ADD PRIMARY KEY (`user_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendance_schedule`
--
ALTER TABLE `attendance_schedule`
  MODIFY `Schedule_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `department_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employee_document`
--
ALTER TABLE `employee_document`
  MODIFY `Document_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_type`
--
ALTER TABLE `employee_type`
  MODIFY `employee_Type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `leave_type`
--
ALTER TABLE `leave_type`
  MODIFY `leave_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `payroll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
