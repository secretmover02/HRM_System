-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 02:07 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile_db`
--

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
(3, '2022_03_30_063313_tbl_residential_address', 1),
(4, '2022_03_30_073608_tbl_user_info', 1),
(5, '2022_03_31_054433_tbl_family_background', 2),
(6, '2022_03_31_054459_tbl_educational_background', 2),
(7, '2022_03_31_054534_tbl_civil_service_eligibilty', 2),
(8, '2022_03_31_054553_tbl_work_experience', 2),
(9, '2022_03_31_054632_tbl_voluntary_work_ivolvement', 2),
(10, '2022_03_31_054649_tbl_learning_development', 2),
(11, '2022_03_31_054708_tbl_other_information', 2),
(12, '2022_03_31_054746_tbl_character_references', 2),
(13, '2022_03_31_055148_tbl_question', 2),
(14, '2022_03_31_081838_tbl_children', 2),
(15, '2022_04_01_005318_tbl_division', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address`
--

CREATE TABLE `tbl_address` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_no` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subdivision` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brgy` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_address`
--

INSERT INTO `tbl_address` (`id`, `id_number`, `house_no`, `street`, `subdivision`, `brgy`, `city`, `province`, `zipcode`, `type`) VALUES
(3, '123123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'residential'),
(4, '123123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'permanent');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_character_references`
--

CREATE TABLE `tbl_character_references` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_character_references`
--

INSERT INTO `tbl_character_references` (`id`, `id_number`, `name`, `address`, `tel_no`) VALUES
(2, '123123', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_children`
--

CREATE TABLE `tbl_children` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `child_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child_birth_date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_civil_service`
--

CREATE TABLE `tbl_civil_service` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license_title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_examination` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_examination` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_validity` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_civil_service`
--

INSERT INTO `tbl_civil_service` (`id`, `id_number`, `license_title`, `rating`, `date_examination`, `place_examination`, `license_number`, `date_validity`, `type`) VALUES
(2, '123123', 'PD907', '', 'AUgust 13, 2021', 'Quezon City', '12335562321', '10/10/2025', 'csc'),
(3, '123123', 'Non Professional Driver License', '', 'August 30 2019', 'Grand Central Terminal Lucena City', 'D0-100223215', 'AUgust 30 2024', 'driver_license'),
(4, '123123', 'Licensure Examination for Teacher', '75', 'July 2023', 'asdfasdfasdfasd', '122546531', 'July 2023', 'prc'),
(5, '123123', 'Law', '75', 'July 2023', 'Greenhills QC', '211462213556', 'July 2029', 'bar'),
(6, '123123', 'Barangay Privilages', '', 'AUgsta', 'ljkjasldfasdf', '51541132165', '2123132', 'others');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_division`
--

CREATE TABLE `tbl_division` (
  `id` int(10) UNSIGNED NOT NULL,
  `fd_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fd_description` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_educational_background`
--

CREATE TABLE `tbl_educational_background` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_education` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_earned` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_graduated` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `academic_honor_received` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_educational_background`
--

INSERT INTO `tbl_educational_background` (`id`, `id_number`, `level`, `school_name`, `course_education`, `from`, `to`, `unit_earned`, `year_graduated`, `academic_honor_received`) VALUES
(2, '123123', 'elementary', 'Buenavista West ELementary School', 'Primary', '06/30/2003', '06/09/2009', NULL, '2009', 'Academic Honor Received'),
(3, '123123', 'secondary', 'Bukal SUr National High School', 'Secondary', '04/20/2209', '04/20/2017', NULL, '2017', NULL),
(4, '123123', 'vocational', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '123123', 'college', 'College Of Sciences technology and communication inc', 'Bachelor of Sciences in Information Technology', '04/17/2017', '04/17/2017', '225', '2017', 'Most Behaved'),
(6, '123123', 'graduate studies', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_family_background`
--

CREATE TABLE `tbl_family_background` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spouse_lname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_fname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_mname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_extension` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone_no` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_lname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_fname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_mname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_extension` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_maiden_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_fname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_lname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_mname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_extension` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_family_background`
--

INSERT INTO `tbl_family_background` (`id`, `id_number`, `spouse_lname`, `spouse_fname`, `spouse_mname`, `spouse_extension`, `occupation`, `business_name`, `business_address`, `telephone_no`, `father_lname`, `father_fname`, `father_mname`, `father_extension`, `mother_maiden_name`, `mother_fname`, `mother_lname`, `mother_mname`, `mother_extension`) VALUES
(2, '123123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'punzalan', 'melvin', 'd', 'jr', 'ramirez', 'ely', 'de ramos', 'punzalan', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_learning_development`
--

CREATE TABLE `tbl_learning_development` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_hours` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_ld` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conducted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_learning_development`
--

INSERT INTO `tbl_learning_development` (`id`, `id_number`, `title`, `from`, `to`, `number_hours`, `type_ld`, `conducted_by`) VALUES
(2, '123123', 'WE DEVELOPMENT', '03/24/2020', '04/24/2020', '104', 'technical', 'I DONT KNOW');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_other_information`
--

CREATE TABLE `tbl_other_information` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills_hobbies` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recognition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `membership_organization` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_other_information`
--

INSERT INTO `tbl_other_information` (`id`, `id_number`, `skills_hobbies`, `recognition`, `membership_organization`) VALUES
(2, '123123', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

CREATE TABLE `tbl_question` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_34` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_35` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_36` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_37` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_38` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_39` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_40` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`id`, `id_number`, `no_34`, `no_35`, `no_36`, `no_37`, `no_38`, `no_39`, `no_40`) VALUES
(2, '123123', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_info`
--

CREATE TABLE `tbl_users_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_extension` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_birth` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citizenship` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `civil_status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gsis_no` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pag_ibig_no` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `philhealth_no` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sss_no` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tin_no` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agency_employee_no` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone_no` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person_address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person_number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_users_info`
--

INSERT INTO `tbl_users_info` (`id`, `id_number`, `division_code`, `lname`, `fname`, `mname`, `name_extension`, `birth_date`, `place_birth`, `citizenship`, `sex`, `civil_status`, `height`, `weight`, `blood_type`, `gsis_no`, `pag_ibig_no`, `philhealth_no`, `sss_no`, `tin_no`, `agency_employee_no`, `telephone_no`, `mobile_no`, `contact_person_name`, `contact_person_address`, `contact_person_number`, `created_at`, `updated_at`) VALUES
(2, '123123', 'ICT-ORD', 'Punzalan', 'Melvin', 'De Ramos', NULL, 'August 30, 1996', 'Candelaria Quezon', 'Filipino', 'Male', 'Single', '5\'4\"', '55', 'o+', '12312345633', '12312345633', '12312345633', '12312345633', '12312345633', NULL, '123(1)-22323', '09104968682', 'Elizabeth Punzalan', 'Candelaria Quezon', '09104968682', '2022-04-07 01:59:52', '2022-04-07 01:59:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_voluntary_work_involvement`
--

CREATE TABLE `tbl_voluntary_work_involvement` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_organization` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_organization` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_hours` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nature_work` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_voluntary_work_involvement`
--

INSERT INTO `tbl_voluntary_work_involvement` (`id`, `id_number`, `address_organization`, `name_organization`, `from`, `to`, `number_hours`, `nature_work`, `position`) VALUES
(2, '123123', 'brgy lipa, Sto tomas Batangas', 'SOUTHERn luzon technology community', '03/03/2022', '03/03/2022', '10254', 'managerial', 'technical supervisor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_work_experience`
--

CREATE TABLE `tbl_work_experience` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monthly_salary` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_grade` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_step` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_appointment` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `govt_services` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_work_experience`
--

INSERT INTO `tbl_work_experience` (`id`, `id_number`, `from`, `to`, `position_title`, `company`, `monthly_salary`, `salary_grade`, `salary_step`, `status_appointment`, `govt_services`) VALUES
(2, '123123', '06/03/2017', '05/20/2021', 'ICT Instructor', 'College of Sciences Technology and Communication INC', '123456', NULL, NULL, 'Contractual', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `id_number`, `email`, `password`, `profile`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Melvin D. Punzalan', '123123', 'melvin.punzalan@deped.gov.ph', '$2y$10$.wKOtPEZAnGixjL5JaN.e.Q6E1wdFSWamKHCz589v/m6PZMgCcCte', 'public/img/avatar5.png', 'DLzn1hdzpZyvKx4MTmXZD2m7Q0HuEPGY6UsIFPhIPJs8hDEREJ9KDwPkfFXD', '2022-04-07 01:59:52', '2022-04-07 01:59:52');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `tbl_address`
--
ALTER TABLE `tbl_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_character_references`
--
ALTER TABLE `tbl_character_references`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_children`
--
ALTER TABLE `tbl_children`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_civil_service`
--
ALTER TABLE `tbl_civil_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_division`
--
ALTER TABLE `tbl_division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_educational_background`
--
ALTER TABLE `tbl_educational_background`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_family_background`
--
ALTER TABLE `tbl_family_background`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_learning_development`
--
ALTER TABLE `tbl_learning_development`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_other_information`
--
ALTER TABLE `tbl_other_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_question`
--
ALTER TABLE `tbl_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users_info`
--
ALTER TABLE `tbl_users_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_voluntary_work_involvement`
--
ALTER TABLE `tbl_voluntary_work_involvement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_work_experience`
--
ALTER TABLE `tbl_work_experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_address`
--
ALTER TABLE `tbl_address`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_character_references`
--
ALTER TABLE `tbl_character_references`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_children`
--
ALTER TABLE `tbl_children`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_civil_service`
--
ALTER TABLE `tbl_civil_service`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_division`
--
ALTER TABLE `tbl_division`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_educational_background`
--
ALTER TABLE `tbl_educational_background`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_family_background`
--
ALTER TABLE `tbl_family_background`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_learning_development`
--
ALTER TABLE `tbl_learning_development`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_other_information`
--
ALTER TABLE `tbl_other_information`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_question`
--
ALTER TABLE `tbl_question`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users_info`
--
ALTER TABLE `tbl_users_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_voluntary_work_involvement`
--
ALTER TABLE `tbl_voluntary_work_involvement`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_work_experience`
--
ALTER TABLE `tbl_work_experience`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
