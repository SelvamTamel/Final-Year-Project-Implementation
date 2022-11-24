-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 02:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyberpersona`
--

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 'What is CyberPersona?', 'CyberPersona is an online cybersecurity personality portal where you can have access to identify your strengths and vulnerabilities within 24 hours a day', 1, '2022-10-06 13:21:48', '2022-10-07 08:38:57'),
(2, 'Will the personal information that I provide be kept confidential?', 'Yes. Your information is kept confidential. We will only release records if authorized by you.', 1, '2022-10-17 15:05:48', '2022-10-18 04:51:59'),
(3, 'What if none of the personality traits match my behavior or characteristic?', 'This is highly unlikely to happen, given the type of personality traits that we have used on our cybersecurity quiz. However, there should be a technical or server problem, please do not hesitate to contact our CyberPersona support team who will be ready ', 1, '2022-10-13 20:42:09', '2022-10-14 21:21:54');

-- --------------------------------------------------------

--
-- Table structure for table `info_zone_posts`
--

CREATE TABLE `info_zone_posts` (
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_author_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_author_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_date` date NOT NULL,
  `post_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_category_num` tinyint(4) NOT NULL,
  `post_users_views` tinyint(4) NOT NULL,
  `post_widget_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_widget_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `info_zone_posts`
--

INSERT INTO `info_zone_posts` (`post_id`, `post_image`, `post_tittle`, `post_content`, `post_author_image`, `post_author_name`, `post_date`, `post_category`, `post_category_num`, `post_users_views`, `post_widget_image`, `post_widget_name`, `post_status`, `created_at`, `updated_at`) VALUES
(1, 'talian_psikologi.jpg', 'Want To Know More About Befrienders?', 'Befrienders is a not-for-profit organization providing emotional support 24 hours a day, 7 days a week, to people who are lonely, in distress, in despair, and having suicidal thoughts - without charge. Once your call is answered, a caring and trained person will listen to you, ask questions to generally understand how you feel, give you the time to share your dilemma and support you if you feel lost about how to cope. Today, Befrienders Worldwide is a dynamic and expanding global network of 349 emotional support centers in 32 countries, spanning 5 continents. These centers provide an open space for those in distress to talk and be heard.', 'kpwkm_logo.jpg', 'Kementerian Pembangunan Wanita, Keluarga Dan Masyarakat', '2022-09-28', 'Psychology', 1, 6, 'talian_kasih.jpg', 'What is Befrienders', 'published', '2022-10-08 20:45:31', '2022-10-09 20:45:31'),
(2, 'cyberrisk.jpg', 'Does Different Personality Traits Are Susceptible With Different Security Threats?', 'People are central to cyber security. Empowered with the right skills and tools, people can protect themselves and their organizations from cyber-attack. But people are not all the same. Each of us has our own personality. And studies show links between our personalities and our security behavior. If personality influences cyber risk, a one-size-fits-all approach isn’t optimal. A tailored approach would better limit cyber risk. Behavioral psychologists use the Big Five model to identify and understand personalities. The model includes five personality traits. These are Openness, Conscientiousness, Extraversion, Agreeableness, and Neuroticism (OCEAN).	These traits are all continuums. A person can “score” high or low for each trait. Traits are neither negative nor positive. They each have their own strengths and weaknesses.', 'bd2_logo.jfif', 'CybSafe', '2022-10-06', 'Personality Traits', 2, 12, 'cyberperson.jpg', 'OCEAN & Cyberthreats', 'published', '2022-10-06 11:55:59', '2022-10-06 13:05:30'),
(3, 'cyberthreats.JPG', 'Cybersecurity Threats for Students & How to Fight Them?', 'We often view our new reality as an era of new opportunities. An astonishing 93% of Malaysian families claim to have tried some form of online learning during the COVID-19 pandemic. The same source specifies that the lower the household’s income, the greater the likelihood they would opt for online education resources. Only 20% of students used offline resources sent by their school, while 80% accessed their materials via the Internet. Still, even the 20% could access both variants, with the two groups overlapping. Cybercriminals attack households, not large companies. Thus, they often avoid large-scale prosecution. Largely, people do not turn to the law when their password is stolen. Learning and working from home (and sometimes both), we have not yet learned appropriate security measures. We really need to.', 'cybersecurity_logo.jpg', 'CyberSecurity Malaysia', '2022-10-11', 'Cyber Security', 3, 24, 'cybersecurity.jpg', 'Avoid Cyber Threats', 'published', '2022-10-10 13:39:35', '2022-10-13 16:18:49');

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
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_10_16_140812_create_student_infos_table', 1),
(5, '2022_10_16_144707_create_faqs_table', 1),
(6, '2022_10_23_182911_create_personality_quiz_scores_table', 1),
(7, '2022_10_28_020827_create_info_zone_posts_table', 1);

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
-- Table structure for table `personality_quiz_scores`
--

CREATE TABLE `personality_quiz_scores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `extraversion` tinyint(4) NOT NULL,
  `agreeableness` tinyint(4) NOT NULL,
  `conscientiousness` tinyint(4) NOT NULL,
  `neuroticism` tinyint(4) NOT NULL,
  `openness` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `student_infos`
--

CREATE TABLE `student_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `studentid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_as` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_zone_posts`
--
ALTER TABLE `info_zone_posts`
  ADD PRIMARY KEY (`post_id`);

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
-- Indexes for table `personality_quiz_scores`
--
ALTER TABLE `personality_quiz_scores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `student_infos`
--
ALTER TABLE `student_infos`
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
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `info_zone_posts`
--
ALTER TABLE `info_zone_posts`
  MODIFY `post_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personality_quiz_scores`
--
ALTER TABLE `personality_quiz_scores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_infos`
--
ALTER TABLE `student_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
