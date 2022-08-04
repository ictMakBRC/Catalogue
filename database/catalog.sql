-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 04, 2022 at 04:14 PM
-- Server version: 10.3.35-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `biospecimens`
--

CREATE TABLE `biospecimens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ProjectAcronym` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PTID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SampleID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AliquotID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specimen_type_id` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CaseControl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `VisitName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DateCollected` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SPECIMEN_SOURCE` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SOURCE_ORGANISM` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PURITY` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CONCENTRATION` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `batch_No` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'System'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biospecimens`
--

INSERT INTO `biospecimens` (`id`, `project_id`, `ProjectAcronym`, `PTID`, `SampleID`, `AliquotID`, `specimen_type_id`, `Gender`, `Age`, `CaseControl`, `VisitName`, `DateCollected`, `SPECIMEN_SOURCE`, `SOURCE_ORGANISM`, `PURITY`, `CONCENTRATION`, `is_active`, `user_id`, `created_at`, `updated_at`, `batch_No`) VALUES
(1, 1, 'PRESIDE', 'P01', 'S01', 'A01', 'DNA', 'M', '12', NULL, 'Prospective', '02/11/2020', 'Whole Blood', 'Human', '1.8', '500', 1, 2, '2021-12-14 08:07:19', '2021-12-14 08:07:19', '43861639480000'),
(2, 2, 'NeuroGAP-Psychosis', 'P01', 'S01', 'A02', 'Serum', 'M', '12', NULL, 'Prospective', '03/11/2020', 'Whole Blood', 'Human', NULL, NULL, 1, 2, '2021-12-14 08:07:19', '2021-12-14 08:07:19', '43861639480000'),
(3, 1, 'COV-2 Protocol Study', 'P01', 'S02', 'A10', 'Plasma', 'M', '12', NULL, 'Prospective', '04/11/2020', 'Whole Blood', 'Human', NULL, NULL, 1, 2, '2021-12-14 08:07:19', '2021-12-14 08:07:19', '43861639480000'),
(4, 2, 'PRESIDE', 'P01', 'S01', 'S01', 'Dry Blood Spots (DBS)', 'F', '12', NULL, 'Prospective', '05/11/2020', 'Whole Blood', 'Human', NULL, NULL, 1, 2, '2021-12-14 08:07:19', '2021-12-14 08:07:19', '43861639480000');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_acronym` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specimen_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aliqout_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethinicity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `donor_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `state` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `session_id`, `item`, `project_acronym`, `email`, `specimen_type`, `sample_id`, `aliqout_type`, `gender`, `age`, `ethinicity`, `donor_status`, `created_at`, `updated_at`, `state`) VALUES
(1, '1658853622455', 'Tissue', 'PRESIDE', NULL, 'Ovum', 'XXA2', 'Ovum', 'Female', '11', 'Acholi', 'Healthy Individual', '2022-07-26 14:35:56', '2022-07-26 14:35:56', 'pending'),
(2, '165887543982', 'Tissue', 'PRESIDE', NULL, 'Ovum', 'XXA2', 'Ovum', 'Female', '11', 'Acholi', 'Healthy Individual', '2022-07-26 19:48:01', '2022-07-26 19:48:01', 'pending'),
(3, '165887543982', 'Tissue', 'PRESIDE', NULL, 'Ovum', 'XXA4', 'Ovum', 'Male', '10', 'Indian', 'Healthy Individual', '2022-07-26 19:48:47', '2022-07-26 19:48:47', 'pending'),
(5, '1658878674883', 'Tissue', 'PRESIDE', NULL, 'Cord Blood', 'XXA1', 'Cord Blood', 'Male', '12', 'Muganda', 'Healthy Individual', '2022-07-26 20:39:43', '2022-07-26 20:39:43', 'pending'),
(6, '1658878674883', 'Tissue', 'PRESIDE', NULL, 'Sperm', 'XXA7', 'Sperm', 'Male', '5.4', 'Acholi', 'Healthy Individual', '2022-07-26 20:55:16', '2022-07-26 20:55:16', 'pending'),
(7, '1658879820578', 'Tissue', 'PRESIDE', 'guest@catalog.com', 'Ovum', 'XXA3', 'Ovum', 'Male', '9', 'Ankole', 'Healthy Individual', '2022-07-26 21:37:42', '2022-07-26 21:37:42', 'pending'),
(8, '1658920472706', 'Tissue', 'PRESIDE', NULL, 'Sperm', 'XXA13', 'Sperm', 'Male', '54', 'Ankole', 'Healthy Individual', '2022-07-27 08:17:14', '2022-07-27 08:17:14', 'pending'),
(11, '1659362784194', 'Tissue', 'PRESIDE', NULL, 'Sperm', 'XXA12', 'Sperm', 'Male', '22', 'Acholi', 'Healthy Individual', '2022-08-01 11:06:55', '2022-08-01 11:08:25', 'submited'),
(12, '1659362784194', 'Tissue', 'PRESIDE', NULL, 'Sperm', 'XXA9', 'Sperm', 'Male', '3.2', 'Indian', 'Healthy Individual', '2022-08-01 11:06:59', '2022-08-01 11:08:25', 'submited'),
(13, '1659366583734', 'Tissue', 'PRESIDE', NULL, 'Sperm', 'XXA14', 'Sperm', 'Female', '21', 'Indian', 'Healthy Individual', '2022-08-01 12:12:22', '2022-08-01 12:12:22', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `collection_sites`
--

CREATE TABLE `collection_sites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_id` bigint(20) UNSIGNED DEFAULT NULL,
  `project_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collection_sites`
--

INSERT INTO `collection_sites` (`id`, `site_name`, `country_name`, `project_id`, `project_code`, `created_at`, `updated_at`) VALUES
(1, 'Site A', 'Uganda', 1, '51631638257352', '2021-11-30 13:37:00', '2021-11-30 13:37:00'),
(2, 'Site B', 'Uganda', 1, '51631638257352', '2021-11-30 13:37:43', '2021-11-30 13:37:43'),
(3, 'Site B', 'Afghanistan', 1, '51631638257352', '2021-11-30 13:38:45', '2021-11-30 13:38:45'),
(4, 'Kampala', 'Afghanistan', 2, '52581638882659', '2021-12-07 10:22:42', '2021-12-07 10:22:42'),
(5, 'Entebbe', 'Uganda', 2, '52581638882659', '2021-12-07 10:23:01', '2021-12-07 10:23:01');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_id` bigint(20) UNSIGNED DEFAULT NULL,
  `project_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`, `project_id`, `project_code`, `created_at`, `updated_at`) VALUES
(1, 'Åland Islands', 1, '51631638257352', '2021-11-30 10:58:31', '2021-11-30 10:58:31'),
(3, 'Albania', 1, '51631638257352', '2021-11-30 11:05:12', '2021-11-30 11:05:12'),
(4, 'Burkina Faso', 1, '51631638257352', '2021-11-30 11:05:33', '2021-11-30 11:05:33'),
(7, 'Uganda', 2, '52581638882659', '2021-12-07 10:32:39', '2021-12-07 10:32:39');

-- --------------------------------------------------------

--
-- Table structure for table `csv_data`
--

CREATE TABLE `csv_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `csv_filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `csv_header` tinyint(1) NOT NULL DEFAULT 0,
  `csv_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_25_092617_laratrust_setup_tables', 1),
(7, '2021_11_29_121156_create_projects_table', 2),
(11, '2021_11_30_120418_create_countries_table', 3),
(12, '2021_11_30_121635_create_collection_sites_table', 3),
(13, '2021_12_01_132637_create_specimen_types_table', 4),
(16, '2021_12_03_102231_create_biospecimens_table', 5),
(17, '2021_12_03_114336_create_organs_table', 6),
(18, '2021_12_03_154518_create_csv_datas_table', 7),
(19, '2021_12_07_120646_create_publications_table', 7),
(20, '2021_12_07_121220_create_project_objectives_table', 7),
(21, '2021_12_16_161312_create_tissues_table', 8),
(22, '2022_01_15_175720_create_carts_table', 9),
(24, '2022_02_08_091125_create_requests_table', 10),
(25, '2022_02_08_092542_create_specimen_requests_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `organs`
--

CREATE TABLE `organs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ProjectAcronym` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SampleID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ParticipantID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specimen_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `Quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Aliqout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BMI` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ethinicity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CollectionDate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Donor_Sample_Status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Stored_for` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2021-11-25 06:45:37', '2021-11-25 06:45:37'),
(2, 'users-read', 'Read Users', 'Read Users', '2021-11-25 06:45:37', '2021-11-25 06:45:37'),
(3, 'users-update', 'Update Users', 'Update Users', '2021-11-25 06:45:37', '2021-11-25 06:45:37'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2021-11-25 06:45:37', '2021-11-25 06:45:37'),
(5, 'orders-create', 'Create Orders', 'Create Orders', '2021-11-25 06:45:38', '2021-11-25 06:45:38'),
(6, 'orders-read', 'Read Orders', 'Read Orders', '2021-11-25 06:45:38', '2021-11-25 06:45:38'),
(7, 'orders-update', 'Update Orders', 'Update Orders', '2021-11-25 06:45:38', '2021-11-25 06:45:38'),
(8, 'orders-delete', 'Delete Orders', 'Delete Orders', '2021-11-25 06:45:38', '2021-11-25 06:45:38'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2021-11-25 06:45:38', '2021-11-25 06:45:38'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2021-11-25 06:45:38', '2021-11-25 06:45:38'),
(11, 'dashboard-create', 'Create Dashboard', 'Create Dashboard', '2021-11-25 06:45:38', '2021-11-25 06:45:38'),
(12, 'dashboard-read', 'Read Dashboard', 'Read Dashboard', '2021-11-25 06:45:38', '2021-11-25 06:45:38'),
(13, 'dashboard-update', 'Update Dashboard', 'Update Dashboard', '2021-11-25 06:45:38', '2021-11-25 06:45:38'),
(14, 'dashboard-delete', 'Delete Dashboard', 'Delete Dashboard', '2021-11-25 06:45:38', '2021-11-25 06:45:38'),
(15, 'profile-create', 'Create Profile', 'Create Profile', '2021-11-25 06:45:40', '2021-11-25 06:45:40'),
(16, 'view-read', 'Read View', 'Read View', '2021-11-25 06:45:40', '2021-11-25 06:45:40');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(14, 1),
(15, 3),
(16, 4);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_acronym` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_design` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disease` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_funder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `H3_africa_affiliated` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `step` int(11) NOT NULL DEFAULT 1,
  `country_of_collection` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_acronym`, `project_name`, `project_design`, `project_description`, `disease`, `project_funder`, `H3_africa_affiliated`, `pcode`, `status`, `step`, `country_of_collection`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'NeuroGAP-Psychosis', 'SARS-COV-2 Protocol Study', 'The Catalog is updated regularly with the latest data from the LIMS for all the studies at the IBRH3AU Biorepository.', 'The Catalog provides an unlimited easy access to high quality Biospecimens, human tissues and organs by potential recipients or researchers. It is a single convenient point of access to a pool of Biospecimens. We\'re trusted by many leading research institutions, academic institutes and biomedical companies for diagnostics, health care or basic research. Through the catalog you are able to search and request for biospecimens or human tissues/organs for health care or basic research needs.', 'SARS-COV-2 Protocol Study', 'Government of Uganda', 'East-Africa', '51631638257352', 'Active', 2, 'Uganda', 2, '2021-11-30 07:08:47', '2021-11-30 07:46:24'),
(2, 'COV-2 Protocol Study', 'ASAP Uganda', 'The Catalog is updated regularly with the latest data from the LIMS for all the studies at the IBRH3AU Biorepository.', 'The Catalog provides an unlimited easy access to high quality Biospecimens, human tissues and organs by potential recipients or researchers. It is a single convenient point of access to a pool of Biospecimens. We\'re trusted by many leading research institutions, academic institutes and biomedical companies for diagnostics, health care or basic research. Through the catalog you are able to search and request for biospecimens or human tissues/organs for health care or basic research needs.', 'SARS-CoV-2, Asthma', 'Government of Uganda', 'organs for health', '52581638882659', 'Active', 1, NULL, 2, '2021-12-07 10:19:28', '2021-12-07 10:19:28'),
(3, 'PRESIDE', 'PRESIDE InPrivate browsing', 'Hide your browsing from your school, employer, or internet service provider\r\nGive you additional protection from tracking by default\r\nAdd additional protection to what\'s available in normal browsing', 'What InPrivate browsing does\r\nDeletes your browsing info when you close all InPrivate windows\r\nSaves collections, favorites, and downloads (but not download history)\r\nPrevents Microsoft Bing searches from being associated with you', 'InPrivate browsing', 'InPrivate', 'DONE', '59751639679211', 'Active', 1, 'Uganda', 2, '2021-12-16 15:30:39', '2021-12-16 15:30:39');

-- --------------------------------------------------------

--
-- Table structure for table `project_objectives`
--

CREATE TABLE `project_objectives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `objective_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_id` bigint(20) UNSIGNED DEFAULT NULL,
  `project_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_objectives`
--

INSERT INTO `project_objectives` (`id`, `objective_name`, `project_id`, `project_code`, `created_at`, `updated_at`) VALUES
(2, 'The Catalog provides an unlimited access to well', 1, '51631638257352', '2021-12-07 09:40:04', '2021-12-07 09:40:04'),
(3, 'The Catalog provides an unlimited access to well annotated Biospecimens and human tissues.', 1, '51631638257352', '2021-12-07 09:45:51', '2021-12-07 09:45:51'),
(4, 'The Catalog is updated regularly with the latest data from the LIMS for all the studies at the IBRH3AU Biorepository.', 2, '52581638882659', '2021-12-07 10:26:49', '2021-12-07 10:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `publication_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_id` bigint(20) UNSIGNED DEFAULT NULL,
  `project_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requesterip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requestercounry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requestercity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(11) UNSIGNED DEFAULT NULL,
  `code` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'Superadmin', 'Superadmin', '2021-11-25 06:45:37', '2021-11-25 06:45:37'),
(2, 'admin', 'Admin', 'Admin', '2021-11-25 06:45:39', '2021-11-25 06:45:39'),
(3, 'user', 'User', 'User', '2021-11-25 06:45:40', '2021-11-25 06:45:40'),
(4, 'guest', 'Guest', 'Guest', '2021-11-25 06:45:40', '2021-11-25 06:45:40');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(3, 1, 'App\\Models\\User'),
(1, 2, 'App\\Models\\User'),
(4, 3, 'App\\Models\\User'),
(4, 4, 'App\\Models\\User'),
(4, 5, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `specimen_requests`
--

CREATE TABLE `specimen_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requesterip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requestercounry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requestercity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `code` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specimen_requests`
--

INSERT INTO `specimen_requests` (`id`, `email`, `session`, `name`, `position`, `organization`, `subject`, `details`, `requesterip`, `requestercounry`, `requestercity`, `created_at`, `updated_at`, `user_id`, `code`) VALUES
(2, 'kedkayz@gmail.com', '1644311601774', 'hu', 'ksdkds', NULL, 'Requesting for Serum samples', 'mkknkn', NULL, NULL, NULL, '2022-02-08 09:16:26', '2022-02-08 09:16:26', NULL, '1644322586'),
(3, 'ked@1234.com', '1659362784194', 'Kiyimba Abdalla', 'Clinical officer', 'Uganda Virus Research Center', 'Requesting for Serum samples', 'I would also like to dedicate it to all the staffs of Kampala University, my lovely Mum Alice Adong, my sister Peace Adong, my brother Innocent Lukwiya and all the friends and relatives not forgetting my field supervisor Miss. Ayebare Dorah and the University supervisor Mrs. Gawaya Emilly for the great advice and ideas in bringing out this booklet.', '102.134.149.88', 'Uganda', 'Kampala', '2022-08-01 11:08:25', '2022-08-01 11:08:25', NULL, 'R1659362905');

-- --------------------------------------------------------

--
-- Table structure for table `specimen_types`
--

CREATE TABLE `specimen_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `specimen_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `storage_temperature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `container_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specimen_types`
--

INSERT INTO `specimen_types` (`id`, `specimen_type`, `storage_temperature`, `container_type`, `is_active`, `created_at`, `updated_at`) VALUES
(2, 'Whole Blood for RNA', '-80℃', 'PaxGene RNA Blood tube', 1, '2021-12-03 06:42:56', '2021-12-07 10:28:24'),
(3, 'PaxGene RNA Blood tube', '-80℃', 'Dry Blood Spots (DBS)', 1, '2021-12-07 10:29:10', '2021-12-07 10:29:10'),
(4, 'Serum', '-80℃', '2ml screw capped micro tubes', 1, '2021-12-07 10:30:06', '2021-12-07 10:30:06'),
(5, 'Whole Blood for DNA', '34', 'PaxGene DNA Blood tube', 1, '2021-12-07 18:15:00', '2021-12-07 18:15:00'),
(6, 'Plasma', '-80', 'White top screw cap tube 2ml', 1, '2021-12-07 18:16:37', '2021-12-07 18:16:37'),
(7, 'DNA', '34', '1.5ml Microcentrifuge tube', 1, '2021-12-07 18:18:41', '2021-12-07 18:18:41'),
(8, 'Bracelets', '-80', 'Bracelets', 1, '2021-12-08 04:05:25', '2021-12-08 04:05:25'),
(9, 'Sperm', '34', 'MDxBy', 1, '2021-12-16 15:24:54', '2021-12-16 15:24:54'),
(10, 'Cord Blood', '34', 'XYZ', 1, '2021-12-16 15:25:17', '2021-12-16 15:25:17'),
(11, 'Ovum', '34F', 'XYZ', 1, '2021-12-16 15:25:45', '2021-12-16 15:25:45');

-- --------------------------------------------------------

--
-- Table structure for table `tissues`
--

CREATE TABLE `tissues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_acronym` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specimen_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `participant_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_id` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aliqout_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BMI` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethinicity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `donor_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stored_for` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batch_No` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT 'System',
  `is_active` int(11) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tissues`
--

INSERT INTO `tissues` (`id`, `project_id`, `project_acronym`, `category`, `specimen_type`, `participant_id`, `sample_id`, `aliqout_type`, `gender`, `age`, `BMI`, `ethinicity`, `collection_date`, `donor_status`, `stored_for`, `batch_No`, `is_active`, `user_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 'PRESIDE', 'Tissue', 'Cord Blood', 'P001', 'XXA1', 'Cord Blood', 'Male', '12', NULL, 'Muganda', '44385', 'Healthy Individual', 'Research_x000D_', '84071639739329', 1, 2, '2021-12-17 08:09:02', '2021-12-17 08:09:02'),
(2, NULL, 'PRESIDE', 'Tissue', 'Ovum', 'P002', 'XXA2', 'Ovum', 'Female', '11', NULL, 'Acholi', '44385', 'Healthy Individual', 'Research_x000D_', '84071639739329', 1, 2, '2021-12-17 08:09:02', '2021-12-17 08:09:02'),
(3, NULL, 'PRESIDE', 'Tissue', 'Ovum', 'P003', 'XXA3', 'Ovum', 'Male', '9', NULL, 'Ankole', '44385', 'Healthy Individual', 'Research_x000D_', '84071639739329', 1, 2, '2021-12-17 08:09:02', '2021-12-17 08:09:02'),
(4, NULL, 'PRESIDE', 'Tissue', 'Ovum', 'P004', 'XXA4', 'Ovum', 'Male', '10', NULL, 'Indian', '44385', 'Healthy Individual', 'Research_x000D_', '84071639739329', 1, 2, '2021-12-17 08:09:02', '2021-12-17 08:09:02'),
(5, NULL, 'PRESIDE', 'Tissue', 'Sperm', 'P005', 'XXA5', 'Ovum', 'Female', '7', NULL, 'Asian', '44385', 'Healthy Individual', 'Research_x000D_', '84071639739329', 1, 2, '2021-12-17 08:09:02', '2021-12-17 08:09:02'),
(6, NULL, 'PRESIDE', 'Tissue', 'Sperm', 'P006', 'XXA6', 'Sperm', 'Male', '6.5', NULL, 'Muganda', '44385', 'Healthy Individual', 'Research_x000D_', '84071639739329', 1, 2, '2021-12-17 08:09:02', '2021-12-17 08:09:02'),
(7, NULL, 'PRESIDE', 'Tissue', 'Sperm', 'P007', 'XXA7', 'Sperm', 'Male', '5.4', NULL, 'Acholi', '44385', 'Healthy Individual', 'Research_x000D_', '84071639739329', 1, 2, '2021-12-17 08:09:02', '2021-12-17 08:09:02'),
(8, NULL, 'PRESIDE', 'Tissue', 'Sperm', 'P008', 'XXA8', 'Sperm', 'Female', '34', NULL, 'Ankole', '44385', 'Healthy Individual', 'Research_x000D_', '84071639739329', 1, 2, '2021-12-17 08:09:02', '2021-12-17 08:09:02'),
(9, NULL, 'PRESIDE', 'Tissue', 'Sperm', 'P009', 'XXA9', 'Sperm', 'Male', '3.2', NULL, 'Indian', '44385', 'Healthy Individual', 'Research_x000D_', '84071639739329', 1, 2, '2021-12-17 08:09:02', '2021-12-17 08:09:02'),
(10, NULL, 'PRESIDE', 'Tissue', 'Sperm', 'P010', 'XXA10', 'Sperm', 'Male', '22', NULL, 'Asian', '44385', 'Healthy Individual', 'Research_x000D_', '84071639739329', 1, 2, '2021-12-17 08:09:02', '2021-12-17 08:09:02'),
(11, NULL, 'PRESIDE', 'Tissue', 'Sperm', 'P011', 'XXA11', 'Sperm', 'Female', '19', NULL, 'Muganda', '44385', 'Healthy Individual', 'Research_x000D_', '84071639739329', 1, 2, '2021-12-17 08:09:02', '2021-12-17 08:09:02'),
(12, NULL, 'PRESIDE', 'Tissue', 'Sperm', 'P012', 'XXA12', 'Sperm', 'Male', '22', NULL, 'Acholi', '44385', 'Healthy Individual', 'Research_x000D_', '84071639739329', 1, 2, '2021-12-17 08:09:02', '2021-12-17 08:09:02'),
(13, NULL, 'PRESIDE', 'Tissue', 'Sperm', 'P013', 'XXA13', 'Sperm', 'Male', '54', NULL, 'Ankole', '44385', 'Healthy Individual', 'Research_x000D_', '84071639739329', 1, 2, '2021-12-17 08:09:02', '2021-12-17 08:09:02'),
(14, NULL, 'PRESIDE', 'Tissue', 'Sperm', 'P014', 'XXA14', 'Sperm', 'Female', '21', NULL, 'Indian', '44385', 'Healthy Individual', 'Research_x000D_', '84071639739329', 1, 2, '2021-12-17 08:09:02', '2021-12-17 08:09:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_names` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `first_name`, `other_names`, `full_name`, `gender`, `title`, `organization`, `position`, `contact`, `address`, `country`, `website`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ked kays', 'ked@ripontechug.com', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$.0qzKyPAGWzrHRq/nlf9v.xbR6QTgd6Cl7nUINJ5XyceV87rh/NQS', NULL, '2021-11-25 06:48:47', '2021-11-25 06:48:47'),
(2, 'ked2', 'admin@admin.com', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$IqtOnelBqDGgrzxI0VnA.uZldtKDgQbSSz32xdSjKlEK35eBgep86', 'WdkMTnTQoFJBC0wkYyRO9fMjFiJyEYHbIPRRgZo5bXunCh6upWIbhg4D3m3h', '2021-11-29 07:19:00', '2021-11-29 07:19:00'),
(3, 'ked', 'guest@catalog.com', 'KED', 'DENNIS', ' DENNIS', 'male', 'Mr.', 'Ripon Tech', 'Sr Officer', '0705568888', 'KAMPALA', 'Uganda', NULL, NULL, '$2y$10$ACbGWm7BmHCg5apVNy4KIO9GyHHgUgpWo6a.or.jLTXFo90GNseOq', NULL, '2022-01-15 17:05:35', '2022-07-26 23:28:33'),
(4, 'Catalog', 'cat@ripontechug.com', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$Ah/W2X5EIJjogZQ7yte1guHzktacSDG.Kn6EL.5F3WS36d5z5BGaG', NULL, '2022-01-24 18:47:44', '2022-01-24 18:47:44'),
(5, 'lord', 'lord@gmail.com', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$zDSjljRgoqLbeHZA3YMAwu2PNBdyT0VIy/.q6ub9hnT0MKcEq4P3W', NULL, '2022-02-08 09:28:47', '2022-02-08 09:28:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biospecimens`
--
ALTER TABLE `biospecimens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biospecimens_project_id_foreign` (`project_id`),
  ADD KEY `biospecimens_user_id_foreign` (`user_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collection_sites`
--
ALTER TABLE `collection_sites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `collection_sites_project_id_foreign` (`project_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `countries_project_id_foreign` (`project_id`);

--
-- Indexes for table `csv_data`
--
ALTER TABLE `csv_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organs`
--
ALTER TABLE `organs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organs_project_id_foreign` (`project_id`),
  ADD KEY `organs_specimen_type_id_foreign` (`specimen_type_id`),
  ADD KEY `organs_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_user_id_foreign` (`user_id`);

--
-- Indexes for table `project_objectives`
--
ALTER TABLE `project_objectives`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_objectives_project_id_foreign` (`project_id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `publications_project_id_foreign` (`project_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `specimen_requests`
--
ALTER TABLE `specimen_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specimen_types`
--
ALTER TABLE `specimen_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tissues`
--
ALTER TABLE `tissues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tissues_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `biospecimens`
--
ALTER TABLE `biospecimens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `collection_sites`
--
ALTER TABLE `collection_sites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `csv_data`
--
ALTER TABLE `csv_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `organs`
--
ALTER TABLE `organs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_objectives`
--
ALTER TABLE `project_objectives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `specimen_requests`
--
ALTER TABLE `specimen_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `specimen_types`
--
ALTER TABLE `specimen_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tissues`
--
ALTER TABLE `tissues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collection_sites`
--
ALTER TABLE `collection_sites`
  ADD CONSTRAINT `collection_sites_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `countries`
--
ALTER TABLE `countries`
  ADD CONSTRAINT `countries_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `organs`
--
ALTER TABLE `organs`
  ADD CONSTRAINT `organs_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `organs_specimen_type_id_foreign` FOREIGN KEY (`specimen_type_id`) REFERENCES `specimen_types` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `organs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `project_objectives`
--
ALTER TABLE `project_objectives`
  ADD CONSTRAINT `project_objectives_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `publications`
--
ALTER TABLE `publications`
  ADD CONSTRAINT `publications_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tissues`
--
ALTER TABLE `tissues`
  ADD CONSTRAINT `tissues_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
