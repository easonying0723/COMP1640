-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 07:32 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `discussion`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_details`
--

CREATE TABLE `category_details` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_details`
--

INSERT INTO `category_details` (`id`, `cate_name`) VALUES
(1, 'CLASSES'),
(2, 'FACILITIES'),
(3, 'FEEDBACKS');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anonymity` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idea_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `anonymity`, `created_at`, `updated_at`, `idea_id`, `user_id`) VALUES
(17, 'is true btw', 1, '2022-04-16 17:06:17', '2022-04-16 17:06:17', 19, 3),
(18, '+1', 0, '2022-04-16 17:34:50', '2022-04-16 17:34:50', 19, 3),
(19, 'fun +1', 0, '2022-04-16 17:42:22', '2022-04-16 17:42:22', 25, 3),
(20, 'yea and effective +1', 0, '2022-04-16 17:44:25', '2022-04-16 17:44:25', 26, 3),
(21, 'too bad for u', 1, '2022-04-16 18:13:33', '2022-04-16 18:13:33', 24, 8),
(22, 'Owh really? the brochure show for us is in Kuala Lumpur campus? Kuala Lumpur Campus only have Maclab?', 0, '2022-04-16 18:14:21', '2022-04-16 18:14:21', 24, 8),
(23, 'hahahaha', 0, '2022-04-16 18:43:56', '2022-04-16 18:43:56', 24, 7),
(24, '+1 upupup', 0, '2022-04-16 18:44:51', '2022-04-16 18:44:51', 19, 7),
(25, 'To test the comment', 0, '2022-04-16 20:22:59', '2022-04-16 20:22:59', 31, 7),
(26, 'To test anonymous comment', 1, '2022-04-16 20:29:09', '2022-04-16 20:29:09', 31, 7);

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
-- Table structure for table `idea`
--

CREATE TABLE `idea` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `title_id` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idea` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `anonymous` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `idea`
--

INSERT INTO `idea` (`id`, `user_id`, `cat_id`, `title_id`, `subject`, `idea`, `file`, `photo`, `anonymous`, `created_at`, `updated_at`) VALUES
(19, 3, 1, 111, 'Online Classes Prefer Of Course', 'Due to the instability of Covid-19 you still thinking of going back to school? Crazy is it aiyoyo. The virus keep infect each other also these issue keep blocked by high-level management of SEGi. What the point and how unsecure SEGi treat our staff is.', 'Graduate Internship Portfolio.pdf', '20220417010458.jpg', 1, '2022-04-16 17:04:58', '2022-04-16 17:04:58'),
(21, 3, 2, 112, 'SEAT DISTANCE', 'Wishing seat distance can follow the SOP. Due to the pandemic student need to seat separately each other with table distance of 1m.', '', '20220417011732.jpg', 0, '2022-04-16 17:17:32', '2022-04-16 17:17:32'),
(22, 3, 2, 112, 'RENOVATION NEEDED', 'Year by year pass i think classroom should be renovate and extend due to the large amount of student will come in study for next 10 years', 'segilogo.png', '20220417012712.png', 0, '2022-04-16 17:27:12', '2022-04-16 17:27:12'),
(23, 3, 3, 116, 'CONSEPT OF TIME', 'The high-level management gave a really short period of time to settle our issue although we have mentioned it to them through email and emails. Given us less than 3 months to let us code all the stuff???? is impossible to let students be treaten like that.', 'segi logo.png', '20220417013426.png', 0, '2022-04-16 17:34:26', '2022-04-16 17:34:26'),
(24, 3, 2, 114, 'PENANG', 'Penang no matlab wuwuwuwuwu.', '', '20220417014001.png', 0, '2022-04-16 17:40:01', '2022-04-16 17:40:01'),
(25, 3, 2, 113, 'EXCITED', 'Penang campuses and Subang Jaya Campuses has ESPORTLAB that provide a good place for student to enjoy their time. Very excited that waiting for Penang to have a TV set to play Nintendo Switch or PS5 game in it.', 'segi logo.png', '20220417014150.png', 0, '2022-04-16 17:41:50', '2022-04-16 17:41:50'),
(26, 3, 3, 117, 'NO EXAM-BASED FOR DEGREE STUDENT', 'Based on the subject above, degree or bachelor student will be full coursework based for their result.', '', '20220417014352.png', 0, '2022-04-16 17:43:52', '2022-04-16 17:43:52'),
(27, 8, 3, 116, 'EXTENSION TIME FOR FYP', 'to little time to settle the coursework so much stress la', 'Setting up SGC Wordpress access.docx', '20220417021604.jpg', 0, '2022-04-16 18:16:04', '2022-04-16 18:16:04'),
(28, 8, 2, 113, 'NINTENDOSWITCH', 'Wishing campuses has a great experienced of nintendo switch in esportlab.In other way it also can collaborate with them as well. Win win yingying', '', '20220417023044.jpg', 0, '2022-04-16 18:30:44', '2022-04-16 18:30:44'),
(30, 8, 3, 116, 'EXTEND', 'wishing for extend because very stress', 'Graduate Internship Portfolio.pdf,Reply Form.pdf', '20220417024144.jpg', 0, '2022-04-16 18:41:44', '2022-04-16 18:41:44'),
(31, 7, 2, 113, 'Improvise Subject Quality', 'For testlog purpose', 'COMP 1640 CW_Term1_2122.doc', '20220417032515.JPG', 0, '2022-04-16 19:25:15', '2022-04-16 19:25:15'),
(32, 7, 3, 117, 'To test anonymous function', 'To test anonymous function', '', '', 1, '2022-04-16 19:48:12', '2022-04-16 19:48:12'),
(33, 15, 2, 112, 'Electric appliances need fixing', 'All electric appliances need fixing or replacing', '', '', 0, '2022-04-17 16:21:02', '2022-04-17 16:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `idea_view`
--

CREATE TABLE `idea_view` (
  `id` int(11) NOT NULL,
  `idea_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `idea_view`
--

INSERT INTO `idea_view` (`id`, `idea_id`, `user_id`, `created_at`, `updated_at`) VALUES
(683, 19, 3, '2022-04-16 17:05:44', '2022-04-16 17:05:44'),
(684, 19, 3, '2022-04-16 17:06:21', '2022-04-16 17:06:21'),
(685, 19, 3, '2022-04-16 17:06:35', '2022-04-16 17:06:35'),
(686, 20, 1, '2022-04-16 17:10:06', '2022-04-16 17:10:06'),
(687, 20, 1, '2022-04-16 17:10:16', '2022-04-16 17:10:16'),
(688, 19, 3, '2022-04-16 17:14:52', '2022-04-16 17:14:52'),
(689, 20, 3, '2022-04-16 17:27:25', '2022-04-16 17:27:25'),
(690, 19, 3, '2022-04-16 17:34:39', '2022-04-16 17:34:39'),
(691, 19, 3, '2022-04-16 17:34:54', '2022-04-16 17:34:54'),
(692, 19, 3, '2022-04-16 17:37:27', '2022-04-16 17:37:27'),
(693, 19, 3, '2022-04-16 17:38:18', '2022-04-16 17:38:18'),
(694, 19, 3, '2022-04-16 17:38:28', '2022-04-16 17:38:28'),
(695, 25, 3, '2022-04-16 17:42:06', '2022-04-16 17:42:06'),
(696, 25, 3, '2022-04-16 17:42:09', '2022-04-16 17:42:09'),
(697, 26, 3, '2022-04-16 17:44:09', '2022-04-16 17:44:09'),
(698, 19, 8, '2022-04-16 17:45:21', '2022-04-16 17:45:21'),
(699, 23, 8, '2022-04-16 17:45:40', '2022-04-16 17:45:40'),
(700, 24, 8, '2022-04-16 18:13:19', '2022-04-16 18:13:19'),
(701, 24, 8, '2022-04-16 18:13:49', '2022-04-16 18:13:49'),
(702, 24, 8, '2022-04-16 18:14:25', '2022-04-16 18:14:25'),
(703, 27, 8, '2022-04-16 18:28:41', '2022-04-16 18:28:41'),
(704, 24, 7, '2022-04-16 18:43:42', '2022-04-16 18:43:42'),
(705, 19, 7, '2022-04-16 18:44:19', '2022-04-16 18:44:19'),
(706, 31, 7, '2022-04-16 19:28:21', '2022-04-16 19:28:21'),
(707, 31, 7, '2022-04-16 19:30:56', '2022-04-16 19:30:56'),
(708, 32, 7, '2022-04-16 19:49:37', '2022-04-16 19:49:37'),
(709, 30, 7, '2022-04-16 19:56:09', '2022-04-16 19:56:09'),
(710, 19, 7, '2022-04-16 19:57:58', '2022-04-16 19:57:58'),
(711, 20, 7, '2022-04-16 19:58:01', '2022-04-16 19:58:01'),
(712, 21, 7, '2022-04-16 19:58:03', '2022-04-16 19:58:03'),
(713, 22, 7, '2022-04-16 19:58:05', '2022-04-16 19:58:05'),
(714, 22, 7, '2022-04-16 20:01:49', '2022-04-16 20:01:49'),
(715, 32, 7, '2022-04-16 20:12:38', '2022-04-16 20:12:38'),
(716, 32, 7, '2022-04-16 20:12:50', '2022-04-16 20:12:50'),
(717, 31, 7, '2022-04-16 20:15:58', '2022-04-16 20:15:58'),
(718, 31, 7, '2022-04-16 20:16:05', '2022-04-16 20:16:05'),
(719, 31, 7, '2022-04-16 20:17:07', '2022-04-16 20:17:07'),
(720, 32, 7, '2022-04-16 20:18:42', '2022-04-16 20:18:42'),
(721, 31, 7, '2022-04-16 20:18:46', '2022-04-16 20:18:46'),
(722, 31, 7, '2022-04-16 20:23:58', '2022-04-16 20:23:58'),
(723, 32, 7, '2022-04-16 20:26:42', '2022-04-16 20:26:42'),
(724, 31, 7, '2022-04-16 20:26:44', '2022-04-16 20:26:44'),
(725, 31, 7, '2022-04-16 20:29:13', '2022-04-16 20:29:13'),
(726, 30, 4, '2022-04-17 04:56:24', '2022-04-17 04:56:24'),
(727, 19, 3, '2022-04-17 05:41:11', '2022-04-17 05:41:11'),
(728, 31, 3, '2022-04-17 05:51:20', '2022-04-17 05:51:20'),
(729, 32, 4, '2022-04-17 15:44:26', '2022-04-17 15:44:26'),
(730, 27, 4, '2022-04-17 15:44:52', '2022-04-17 15:44:52'),
(731, 28, 15, '2022-04-17 17:51:52', '2022-04-17 17:51:52'),
(732, 19, 15, '2022-04-17 18:10:30', '2022-04-17 18:10:30'),
(733, 21, 15, '2022-04-17 18:44:23', '2022-04-17 18:44:23'),
(734, 22, 15, '2022-04-17 18:44:31', '2022-04-17 18:44:31'),
(735, 21, 15, '2022-04-17 18:44:40', '2022-04-17 18:44:40'),
(736, 22, 15, '2022-04-17 18:44:45', '2022-04-17 18:44:45'),
(737, 21, 15, '2022-04-17 18:44:48', '2022-04-17 18:44:48'),
(738, 33, 15, '2022-04-17 18:44:51', '2022-04-17 18:44:51'),
(739, 19, 15, '2022-04-17 18:44:56', '2022-04-17 18:44:56'),
(740, 19, 15, '2022-04-17 18:47:09', '2022-04-17 18:47:09'),
(741, 19, 15, '2022-04-17 18:49:37', '2022-04-17 18:49:37'),
(742, 19, 15, '2022-04-17 18:49:40', '2022-04-17 18:49:40');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `idea_id` int(11) NOT NULL,
  `like` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `idea_id`, `like`, `created_at`, `updated_at`) VALUES
(268, 3, 19, 1, '2022-04-16 17:38:27', '2022-04-16 17:38:27'),
(269, 3, 25, 1, '2022-04-16 17:42:08', '2022-04-16 17:42:08'),
(270, 3, 26, 1, '2022-04-16 17:44:25', '2022-04-16 17:44:25'),
(271, 8, 19, 1, '2022-04-16 17:45:25', '2022-04-16 17:45:25'),
(272, 8, 21, 0, '2022-04-16 17:45:33', '2022-04-16 17:45:33'),
(273, 8, 23, 1, '2022-04-16 17:45:38', '2022-04-16 17:45:38'),
(274, 8, 22, 1, '2022-04-16 18:12:58', '2022-04-16 18:12:58'),
(275, 8, 24, 0, '2022-04-16 18:13:15', '2022-04-16 18:13:15'),
(276, 8, 28, 1, '2022-04-16 18:31:55', '2022-04-16 18:31:55'),
(277, 7, 19, 1, '2022-04-16 18:43:09', '2022-04-16 18:43:09'),
(278, 7, 30, 1, '2022-04-16 18:43:20', '2022-04-16 18:43:20'),
(279, 7, 26, 1, '2022-04-16 18:43:34', '2022-04-16 18:43:34'),
(280, 7, 22, 1, '2022-04-16 20:02:45', '2022-04-16 20:02:45'),
(281, 7, 21, 0, '2022-04-16 20:05:54', '2022-04-16 20:05:54'),
(282, 7, 27, 0, '2022-04-16 20:09:01', '2022-04-16 20:09:01'),
(283, 7, 31, 0, '2022-04-16 20:09:53', '2022-04-16 20:09:53');

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
(5, '2022_03_06_154456_add_new_columns_to_users_table', 2),
(6, '2022_03_25_153037_create_comments_table', 3),
(7, '2022_03_25_173133_create_user_table', 4),
(8, '2022_03_26_175608_create_users_table', 5),
(9, '2022_03_27_091624_create_idea_table', 6),
(10, '2022_03_28_072022_add_user_id_idea_id_to_comments', 7);

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
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `setting` varchar(3000) NOT NULL,
  `extra` varchar(3000) DEFAULT NULL,
  `detail` varchar(3000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `setting`, `extra`, `detail`, `created_at`, `updated_at`) VALUES
(3, 'idea_closure_date', '2022', '2022-04-30', '2022-04-10 08:09:49', '2022-04-16 13:56:03'),
(4, 'comment_closure_date', '2022', '2022-04-30', '2022-04-10 08:09:49', '2022-04-16 13:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `title_details`
--

CREATE TABLE `title_details` (
  `title_id` int(11) NOT NULL,
  `title_name` varchar(255) NOT NULL,
  `id` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `title_details`
--

INSERT INTO `title_details` (`title_id`, `title_name`, `id`) VALUES
(111, 'ONLINE OR OFFLINE', '1'),
(112, 'CLASSROOM', '2'),
(113, 'ESPORTROOM', '2'),
(114, 'MACLAB', '2'),
(116, 'SEGI_FYP PROJECT', '3'),
(117, 'EXAM', '3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profilepic` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `position`, `department`, `profilepic`, `status`, `created_at`, `updated_at`) VALUES
(1, 'YingYing', 'callmeyingying520@gmail.com', '$2y$10$TwUPx46si29Hx6MjB0pv6OZwAfY6CtliVVnwgV8VHwPZXJbbZduDa', 'Manager', 'Marketing', 'fobbi.jpg', 1, '2022-04-12 16:14:49', '2022-04-12 16:14:49'),
(2, 'Yvette Yee', 'yvetteyee520@gmail.com', '$2y$10$zmluQKwpLy3bhUZlr/lCguItXVVFt1ozHh0gDOos/N.yD01r.uV3.', 'Coordinator', 'Marketing', 'ducky.jpg', 1, '2022-04-16 16:27:24', '2022-04-16 16:27:24'),
(3, 'YeeYingYing3', 'triple.y.yvetteyee@gmail.com', '$2y$10$suyWX.Izht1W2.smlV1SHeaxeE9t75hp9GMYbZ76jYiBvqExdIl0u', 'Staff', 'Marketing', 'snowy.jpg', 1, '2022-04-16 16:27:48', '2022-04-16 16:27:48'),
(4, 'Hoe Chian Xin', 'chianxin@gmail.com', '$2y$10$BNaeQG3KKS2jyiSWonAdgOZ4ork3YKchiIX/3s8nQ3pvTVFQo.fcq', 'Manager', 'IT', 'ironman.png', 1, '2022-04-16 16:28:34', '2022-04-17 06:06:51'),
(5, 'Carol', 'carolhcx16@gmail.com', '$2y$10$AV3jc7ffZIbHl7NXOdg1GeQnsFCMtdWgmVvvdVAG8vy/sZTFMJS/q', 'Coordinator', 'IT', 'molly.jpg', 1, '2022-04-16 16:29:02', '2022-04-16 16:29:02'),
(6, 'Eason', 'ey73210723@gmail.com', '$2y$10$rYiEB5oOSx4sg7JMtRzr8uYnZhHKzXHhxuDf4anQL8Uvt3fBVL7q6', 'Staff', 'IT', 'blush.jpg', 1, '2022-04-16 16:30:14', '2022-04-16 16:30:14'),
(7, 'Marcheal', 'marchealyong@gmail.com', '$2y$10$6PKeDGrWJbGMVG6P/9aBJeWIwk/MERFtoDLfraKnHWTBrtCHerm0S', 'Staff', 'Marketing', 'profile3.png', 1, '2022-04-16 16:42:10', '2022-04-16 16:42:10'),
(8, 'Hennio', 'hennio@gmail.com', '$2y$10$qbJyVrDrpnanMInznLekEO0aHrBRK.Bv3NdXTcfr9TM7o69OMjgUu', 'Staff', 'IT', 'middle.jpg', 0, '2022-04-16 16:54:14', '2022-04-17 13:33:33'),
(15, 'Aislinn', 'aislinn@gmail.com', '$2y$10$ZVv6/L7W1xyEZIuavE7YnOWl2b1rz7VKCCaV/eKwW5.RGrD..0g12', 'Staff', 'Marketing', '20220418040111.jpg', 1, '2022-04-17 16:19:12', '2022-04-17 20:01:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_details`
--
ALTER TABLE `category_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `idea`
--
ALTER TABLE `idea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idea_view`
--
ALTER TABLE `idea_view`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title_details`
--
ALTER TABLE `title_details`
  ADD PRIMARY KEY (`title_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_details`
--
ALTER TABLE `category_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `idea`
--
ALTER TABLE `idea`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `idea_view`
--
ALTER TABLE `idea_view`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=743;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=284;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `title_details`
--
ALTER TABLE `title_details`
  MODIFY `title_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
