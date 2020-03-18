-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2020 at 07:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_routine`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_14_161545_create_admin_table', 1),
(6, '2020_02_15_150631_create_department_table', 2),
(7, '2020_02_16_060748_create_slider_table', 3),
(10, '2020_02_17_152808_create_room_table', 4),
(11, '2020_02_18_091408_create_section_table', 5),
(12, '2020_02_18_134010_create_semester_table', 6),
(13, '2020_02_18_140653_create_day_table', 7),
(14, '2020_02_18_141300_create_time_table', 8),
(16, '2020_02_18_150548_create_course_table', 9),
(17, '2020_02_18_171235_create_teacher_table', 10),
(18, '2020_02_19_061932_create_routine_table', 11),
(19, '2020_02_28_174002_create_student_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `dept_id` int(11) NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_label` tinyint(4) NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `dept_id`, `admin_name`, `admin_email`, `admin_img`, `admin_password`, `access_label`, `publication_status`, `created_at`, `updated_at`) VALUES
(4, 0, 'Admin', 'admin@gmail.com', 'public/admin_image/074842job.PNG', '123456', 0, 1, '2020-02-15 01:48:42', NULL),
(5, 1, 'cse', 'cse@gmail.com', 'public/admin_image/053411IMG_0675.JPG', '123456', 1, 1, '2020-02-16 22:57:05', NULL),
(6, 2, 'BBA', 'bba@gmail.com', 'public/admin_image/053613IMG_0675.JPG', '123456', 1, 1, '2020-02-14 23:36:13', NULL),
(7, 0, 'shohanur rahman sohan', 'salman@gmail.com', 'public/admin_image/0619111.PNG', '12345', 1, 1, '2020-02-17 00:19:11', NULL),
(8, 3, 'English', 'english@gmail.com', 'public/admin_image/133535bcs image.png', '123456', 1, 1, '2020-02-26 07:35:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `semester_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `course_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Theory=0 and lab =1',
  `course_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`course_id`, `semester_id`, `dept_id`, `course_title`, `course_type`, `course_code`, `publication_status`, `created_at`, `updated_at`) VALUES
(5, 2, 1, 'Object Oriented Programming', '0', 'CS 2312', 1, '2020-02-19 09:17:16', '2020-02-26 01:50:46'),
(6, 2, 1, 'Object Oriented Programming', '1', 'CSE2312S', 1, '2020-02-19 09:18:15', NULL),
(7, 2, 1, 'C++', '0', 'CSE 1208', 1, '2020-02-19 09:19:44', NULL),
(8, 2, 1, 'C++', '1', 'CSE 1208S', 1, '2020-02-19 09:20:24', NULL),
(9, 2, 1, 'Software Engineering', '0', 'CSE 4737', 1, '2020-02-19 09:21:23', NULL),
(10, 2, 1, 'Software Engineering', '1', 'CSE 4737S', 1, '2020-02-19 09:21:52', NULL),
(11, 4, 1, 'java', '0', '1102', 1, '2020-02-22 06:40:28', NULL),
(12, 2, 2, 'Accounting', '0', '11111', 1, '2020-02-24 02:49:19', NULL),
(13, 2, 3, 'english', '0', '1111', 1, '2020-02-28 23:04:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_day`
--

CREATE TABLE `tbl_day` (
  `day_id` bigint(20) UNSIGNED NOT NULL,
  `day_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day2_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_day`
--

INSERT INTO `tbl_day` (`day_id`, `day_name`, `day2_name`, `created_at`, `updated_at`) VALUES
(4, 'Saturday', 'Saturday', '2020-02-19 08:59:19', NULL),
(5, 'Sunday', 'Sunday', '2020-02-19 08:59:30', NULL),
(6, 'Monday', '	\r\nMonday', '2020-02-19 08:59:44', NULL),
(7, 'Tuesday', 'Tuesday', '2020-02-19 09:00:02', NULL),
(8, 'Wednesday', 'Wednesday', '2020-02-19 09:00:17', NULL),
(9, 'Thursday', 'Thursday', '2020-02-19 09:00:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `dept_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`dept_id`, `dept_name`, `dept_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'CSE', 'Computer science and engineering (CSE) is an academic program at some universities that integrates the fields of computer engineering and computer science', 1, '2020-02-15 22:50:07', '2020-02-19 08:56:28'),
(2, 'BBA', '(BBA) is an academic program at some universities that integrates the fields of BBA bba', 1, '2020-02-15 22:53:03', '2020-02-17 22:53:54'),
(3, 'English', '............................', 1, '2020-02-19 08:57:05', NULL),
(4, 'Sociology', '......................', 1, '2020-02-19 08:57:19', NULL),
(5, 'Bangla', '.....', 1, '2020-02-19 08:57:35', NULL),
(6, 'ALL', '---', 1, '2020-02-24 01:00:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `room_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_id` int(11) NOT NULL,
  `room_type` tinyint(4) NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`room_id`, `room_no`, `dept_id`, `room_type`, `publication_status`, `status`, `created_at`, `updated_at`) VALUES
(5, '201', 1, 0, 1, NULL, '2020-02-19 09:03:59', NULL),
(6, '202', 1, 0, 1, NULL, '2020-02-19 09:05:54', NULL),
(7, '203', 1, 1, 1, NULL, '2020-02-19 09:06:14', NULL),
(8, '204', 1, 1, 1, NULL, '2020-02-19 09:06:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_routine`
--

CREATE TABLE `tbl_routine` (
  `routine_id` bigint(20) UNSIGNED NOT NULL,
  `dept_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `day_id` int(11) DEFAULT NULL,
  `time_id` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_routine`
--

INSERT INTO `tbl_routine` (`routine_id`, `dept_id`, `semester_id`, `teacher_id`, `course_id`, `section_id`, `day_id`, `time_id`, `room_id`, `year`, `created_at`, `updated_at`) VALUES
(19, 1, 2, 6, 5, 1, 4, NULL, NULL, '', '2020-02-24 23:31:12', NULL),
(27, 2, 2, 7, 12, 2, 5, 4, 5, '2020', '2020-02-28 22:56:37', '2020-02-29 00:09:22'),
(28, 3, 2, 8, 13, 1, NULL, NULL, NULL, '2020', '2020-02-28 23:04:56', NULL),
(29, 1, 2, 5, 5, 1, 4, 3, 5, '2020', '2020-02-28 23:13:52', '2020-02-28 23:32:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_section`
--

CREATE TABLE `tbl_section` (
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `section_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_section`
--

INSERT INTO `tbl_section` (`section_id`, `section_name`, `created_at`, `updated_at`) VALUES
(1, 'A', '2020-02-18 03:22:54', NULL),
(2, 'B', '2020-02-18 03:28:11', NULL),
(3, 'C', '2020-02-18 03:28:17', NULL),
(6, 'D', '2020-02-19 08:58:12', NULL),
(7, 'E', '2020-02-19 08:58:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester`
--

CREATE TABLE `tbl_semester` (
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `semester_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_semester`
--

INSERT INTO `tbl_semester` (`semester_id`, `semester_name`, `created_at`, `updated_at`) VALUES
(2, 'Spring', '2020-02-18 07:48:45', '2020-02-18 07:50:55'),
(3, 'Fall', '2020-02-18 07:48:57', NULL),
(4, 'Summer', '2020-02-18 07:49:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `title`, `slider_img`, `created_at`, `updated_at`) VALUES
(2, 'welcome to our online university', 'public/slider_image/06213020161219_142457.jpg', '2020-02-16 00:47:50', NULL),
(3, 'welcome to our university', 'public/slider_image/062140DSC_0129.JPG', '2020-02-16 00:21:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `std_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `std_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `std_id`, `dept_id`, `std_name`, `std_password`, `std_img`, `created_at`, `updated_at`) VALUES
(1, 201530495, 1, 'sohan', '123456', NULL, NULL, NULL),
(2, 202020, 2, 'std', '12345', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE `tbl_teacher` (
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `dept_id` int(11) NOT NULL,
  `teacher_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`teacher_id`, `dept_id`, `teacher_name`, `teacher_email`, `teacher_password`, `teacher_img`, `publication_status`, `created_at`, `updated_at`) VALUES
(5, 1, 'Shomoita Jahid Mitin', 'ShomoitaJahid@gmail.com', '123456', 'public/teacher_image/152825somoita.PNG', 1, '2020-02-19 09:28:25', NULL),
(6, 1, 'Ahsan Arif', 'ahsanarif@gmail.com', '123456', 'public/teacher_image/15300130706804_1233108743458393_2917960356670210048_o.jpg', 1, '2020-02-19 09:30:01', NULL),
(7, 2, 'salam', 'salam@gmail.com', '123456', 'public/teacher_image/08463485199039_234692200891536_1101809559833411584_n.jpg', 1, '2020-02-24 02:46:34', NULL),
(8, 3, 'mahbub', 'mahbub@gmai.com', '123456', 'public/teacher_image/05012988012296_1319865018206688_8596723621034983424_n.jpg', 1, '2020-02-28 23:01:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_time`
--

CREATE TABLE `tbl_time` (
  `time_id` bigint(20) UNSIGNED NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_time`
--

INSERT INTO `tbl_time` (`time_id`, `time`, `created_at`, `updated_at`) VALUES
(3, '9:00am-11:00am', '2020-02-19 09:02:02', NULL),
(4, '11:00am-1:00pm', '2020-02-19 09:02:28', NULL),
(5, '2:00pm-4:00pm', '2020-02-19 09:02:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `tbl_day`
--
ALTER TABLE `tbl_day`
  ADD PRIMARY KEY (`day_id`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `tbl_routine`
--
ALTER TABLE `tbl_routine`
  ADD PRIMARY KEY (`routine_id`);

--
-- Indexes for table `tbl_section`
--
ALTER TABLE `tbl_section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `tbl_time`
--
ALTER TABLE `tbl_time`
  ADD PRIMARY KEY (`time_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `course_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_day`
--
ALTER TABLE `tbl_day`
  MODIFY `day_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `dept_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `room_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_routine`
--
ALTER TABLE `tbl_routine`
  MODIFY `routine_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_section`
--
ALTER TABLE `tbl_section`
  MODIFY `section_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  MODIFY `semester_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  MODIFY `teacher_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_time`
--
ALTER TABLE `tbl_time`
  MODIFY `time_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
