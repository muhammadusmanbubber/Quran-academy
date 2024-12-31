-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 31, 2024 at 03:28 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_quran_academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

DROP TABLE IF EXISTS `banks`;
CREATE TABLE IF NOT EXISTS `banks` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `account_no` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'active',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `bank_name`, `account_no`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bank Alfalah', '04081009360794', 'active', '2024-09-13 11:08:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `course_duration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `cover_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` enum('active','inactive','completed') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'active',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `description`, `course_duration`, `price`, `cover_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Introduction to Quran', 'A comprehensive course on the basics of Quranic studies including history, interpretation, and memorization techniques.', '6 months', 150.00, '5176e3f14a0c03d3e79c7c1b4def2279.png', 'active', '2024-08-09 00:00:00', '2024-08-09 00:00:00'),
(2, 'Advanced Quranic Recitation', 'An advanced course focused on perfecting the art of Quranic recitation with Tajweed rules and techniques.', '3 months', 200.00, 'quran.png', 'active', '2024-08-09 00:00:00', '2024-08-09 00:00:00'),
(3, 'Islamic Jurisprudence (Fiqh)', 'An in-depth course on Islamic jurisprudence covering principles, sources, and applications of Islamic law.', '2 months', 250.00, 'tafseer.png', 'active', '2024-08-09 00:00:00', '2024-08-09 00:00:00'),
(11, 'Riyad-Us-Saliheen', 'What is the Islamic system of society, the rights of Allah, and the rights of people on the basis of which a human society looks like paradise? To know this subject, the greatest benefactor of this ummah, Imam Nawawi رحمه الله wrote an Islamic book entitled رياض الصالحين which covers all the topics regarding the various issues, etiquettes, and more.\r\n\r\nDarussalam has published this Islamic book in Urdu, English, and other languages, and has been marked as a bestselling book!\r\n\r\nThe author of this book is a very renowned Syrian Imam Yahya bin Sharf, an-Nawawi رحمه الله who was born in 631 AH and died in 676 AH. He is known as one of the best imams of the 7th century of hijra (7th AH).\r\n\r\nHe was the pupil of many great scholars such as Ishaaq ibn Ahmad al Maghrabi Al-Maqsadsi, Abdurrahman al-Anbari, and Abdul Aziz al-Ansari. He is the best interpreter of the famous hadith book Sahih Muslim.', '06 Months', 200.00, '6666c26f577ec813dc36ea57919f4dd6.jpg', 'active', NULL, NULL),
(12, 'Tafseer Ahsan-ul-Bayan', 'Hafiz Salahuddin Yusuf رحمه الله, a well-known Quran Interpreter of Pakistan, had written interpretation footnotes on the Salaf’s method and style in Urdu language and Darussalam published this interpretation with the title Tafseer Ahsanul-Bayan which is so appropriate in terms of the art of interpretation that King Fahd Complex for the Printing of the Holy Quran has printed it and distributed it all over the world in different languages for free. This tafsir is available in many languages including English and is printed in different sizes including a pocket size.\r\n\r\nThis Urdu Tafseer is one of the best Islamic books and is free from all slips of thought and belief. This interpretation is derived from both the method of Tafseer, al-Mathoor (interpretation from the direct sources; Quran and Sunnah) and al-Rai (the correct interpretation through the method of elicitation) and clarifies the meaning of the Quran in a very comprehensive way.', '04 Months', 140.00, 'c02e3d30f0958acd09394e7bc47c2109.jpg', 'active', NULL, NULL),
(10, 'Minhaj ul Muslim', 'The leading Imams have written many Islamic books related to the complete code of a Muslim’s life which are also very popular but in this day and age, a common man may not be able to fully understand them.\r\n\r\nThe people need conciseness and a definite solution to every problem so that they can act upon the Quran and the Sunnah. Of course, it is the duty of the people to seek evidence and to be satisfied with other scholars.\r\n\r\nThis great offer of Darussalam under the name of Minhaj-ul-Muslim is a wonderful gift for every Muslim, compiled by the eminent religious Saudi scholar, Sheikh Abu Bakr Jaber Al-Jazairi.\r\n\r\nHe has brought to the notice of the people in one volume all the necessary rules and regulations of Islam. We can say that this Islamic book is a comprehensive collection of teachings of the Qur’an and Sunnah related to all walks of life.', '03 Months', 140.00, '4104d3cd280d28088f2900fdb8407b82.jpg', 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

DROP TABLE IF EXISTS `donations`;
CREATE TABLE IF NOT EXISTS `donations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `images` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'active',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `title`, `description`, `images`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Educate a Future Leader', 'Educating a future leader is about more than imparting knowledge; it\'s about shaping minds, building character, and inspiring the next generation to reach their full potential. Education is the foundation upon which leaders are built, providing them with the tools and skills they need to make a positive impact in their communities and the world. Your support can help provide access to quality education, ensuring every child has the opportunity to learn, grow, and lead.\r\n\r\nBy investing in education, you are not just helping an individual but empowering a whole generation to rise above their circumstances, think critically, and drive meaningful change. Let\'s work together to build a brighter, more informed future for all.\r\n\r\n    Providing access to quality education for underprivileged children.\r\n    Encouraging critical thinking and leadership skills.\r\n    Building a foundation for a brighter and more informed future.\r\n', 'donation2.png', 'active', '2024-08-19 09:43:38', NULL, NULL),
(5, 'Feed a Hungry Household', 'Feeding a hungry household is more than just providing food; it\'s about offering hope and comfort to families in their most challenging times. Many families struggle daily to secure their next meal, and your generous contribution can make a significant difference. By supporting this cause, you help ensure that no family goes to bed hungry, and you provide them with the essential nutrition they need to lead healthy and fulfilling lives.\r\n\r\nYour kindness can transform the lives of those who need it most, offering them a chance for a brighter and more secure future. Every meal shared is a step towards ending hunger and building a stronger, more compassionate community.\r\n\r\n    Providing nutritious meals to those in need.\r\n    Supporting families to overcome hunger and malnutrition.\r\n    Promoting a community effort to fight food insecurity.\r\n', 'donation3.png', 'active', '2024-08-19 09:43:38', '0000-00-00 00:00:00', NULL),
(7, 'Quran Classes for Needy', 'At our Online Quran Academy, we believe that the teachings of the Quran should be accessible to everyone, regardless of their financial situation. Many individuals and families face economic hardships that prevent them from affording education. Your generous donation can help us provide free Quran classes to those who need them most, ensuring that they have the opportunity to learn, grow, and connect with their faith.\r\n\r\nBy supporting this initiative, you contribute to spreading knowledge and empowering individuals with the teachings of the Quran. Your support helps bridge the gap for those who are eager to learn but unable to afford the tuition, fostering a community united by faith and knowledge.\r\n\r\n    Providing free access to Quranic education for those in need.\r\n    Supporting students who lack the means to afford tuition fees.\r\n    Promoting the spread of Quranic knowledge and spiritual growth.\r\n', 'donation1.png', 'active', '2024-08-19 09:43:38', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donation_payment`
--

DROP TABLE IF EXISTS `donation_payment`;
CREATE TABLE IF NOT EXISTS `donation_payment` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int UNSIGNED NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_date` datetime NOT NULL,
  `payment_method` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `transaction_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `payment_status` enum('Pending','Completed','Failed','Refunded') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Pending',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `donation_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation_payment`
--

INSERT INTO `donation_payment` (`id`, `user_id`, `amount`, `payment_date`, `payment_method`, `transaction_id`, `payment_status`, `created_at`, `updated_at`, `donation_id`) VALUES
(1, 12, 10000.00, '2024-09-04 05:52:01', 'Stripe', 'ch_3PvC8wHiseu988hv1RfAE79P', 'Completed', '2024-09-04 05:52:01', '2024-09-04 05:52:01', 5),
(2, 14, 131.00, '2024-09-04 06:57:45', 'Stripe', 'ch_3PvDAYHiseu988hv0fqVjGf8', 'Completed', '2024-09-04 06:57:45', '2024-09-04 06:57:45', 7),
(3, 10, 124.00, '2024-09-04 07:00:03', 'Stripe', 'ch_3PvDCnHiseu988hv0D5JyT7Z', 'Completed', '2024-09-04 07:00:03', '2024-09-04 07:00:03', 5),
(4, 15, 1213.00, '2024-09-04 07:02:19', 'Stripe', 'ch_3PvDEzHiseu988hv05ndmvLA', 'Completed', '2024-09-04 07:02:19', '2024-09-04 07:02:19', 6),
(5, 17, 134.00, '2024-09-04 07:03:54', 'Stripe', 'ch_3PvDGWHiseu988hv0EJuHt2o', 'Completed', '2024-09-04 07:03:54', '2024-09-04 07:03:54', 7),
(6, 12, 34.00, '2024-09-13 02:56:29', 'Stripe', 'ch_3PyPgOHiseu988hv1Tsr2u0K', 'Completed', '2024-09-13 02:56:29', '2024-09-13 02:56:29', 0),
(7, 12, 23.00, '2024-09-18 14:13:13', 'Stripe', 'ch_3Q0Od7Hiseu988hv02J44fs7', 'Completed', '2024-09-18 14:13:13', '2024-09-18 14:13:13', 0),
(8, 12, 24.00, '2024-09-18 14:15:16', 'Stripe', 'ch_3Q0Of6Hiseu988hv0Q0f8oTx', 'Completed', '2024-09-18 14:15:16', '2024-09-18 14:15:16', 0),
(9, 12, 1000.00, '2024-09-19 03:32:41', 'Stripe', 'ch_3Q0b6jHiseu988hv1EoN8JrM', 'Completed', '2024-09-19 03:32:41', '2024-09-19 03:32:41', 0);

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

DROP TABLE IF EXISTS `instructors`;
CREATE TABLE IF NOT EXISTS `instructors` (
  `instructor_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `instructor_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone_no` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `country` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `profile_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_card_no` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_card_pic_front` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_card_pic_back` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `course_id` int UNSIGNED NOT NULL,
  `specialization` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `language` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `english_level` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `other_skills` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `certificate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `current_employment` tinyint(1) NOT NULL DEFAULT '0',
  `desired_pay` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `availability_schedule` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `bio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `whatsapp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tiktok` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `youtube` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `twiter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `referred` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`instructor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`instructor_id`, `instructor_name`, `email`, `phone_no`, `date_of_birth`, `gender`, `address`, `country`, `profile_image`, `id_card_no`, `id_card_pic_front`, `id_card_pic_back`, `course_id`, `specialization`, `language`, `english_level`, `other_skills`, `certificate`, `current_employment`, `desired_pay`, `availability_schedule`, `bio`, `status`, `facebook`, `whatsapp`, `tiktok`, `youtube`, `instagram`, `twiter`, `referred`, `created_at`, `updated_at`) VALUES
(3, 'Muhammad Farhan', 'farhan@gmail.com', '0331344949', '2000-08-01', 'Male', 'Dakhana khas Allah abad garbi tehsil jampur district rajanpur', 'Pakistan', 'a1a088c2fa2ac8b4d3bef1864063e2a6.PNG', '3240272251245', 'a73abcd5e186fdf2d10c9b4fdae9d014.jpg', 'c72286d0c9cecc704e370b2c33796f9e.jpg', 10, 'Arabic Language', 'Punjabi - ਪੰਜਾਬੀ', 'Excellent', 'Computer science', 'Hafiz e quran', 1, '30000', 'weekends_only', 'testing the description', '', 'https://www.facebook.com/dummyuser/posts/1234567890', '03317344949', NULL, 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', 'https://www.instagram.com/p/1234567890/', 'https://twitter.com/dummyuser/status/1234567890', 'word_of_mouth', '2024-08-21 12:46:07', '2024-08-21 12:46:07');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `gender` enum('male','female','any') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'any',
  `salary` decimal(10,2) DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `vacancies` int DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'active',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `version` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `group` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `namespace` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(3, '2024-06-27-105641', 'App\\Database\\Migrations\\CreateUsersTable', 'default', 'App', 1719567140, 1),
(5, '2024-06-29-060507', 'App\\Database\\Migrations\\RolesTable', 'default', 'App', 1719642185, 2),
(6, '2024-08-09-070445', 'App\\Database\\Migrations\\CreateCoursesTable', 'default', 'App', 1723187758, 3),
(8, '2024-08-09-071000', 'App\\Database\\Migrations\\CreateInstructorsTable', 'default', 'App', 1723211654, 4),
(9, '2024-08-09-135308', 'App\\Database\\Migrations\\DropTableName', 'default', 'App', 1723211654, 4),
(10, '2024-08-09-141330', 'App\\Database\\Migrations\\CreateCourseTable', 'default', 'App', 1723212871, 5),
(11, '2024-08-09-141352', 'App\\Database\\Migrations\\CreateInstructorTable', 'default', 'App', 1723212871, 5),
(12, '2024-08-12-050630', 'App\\Database\\Migrations\\CreateRegisteredChildTable', 'default', 'App', 1723439356, 6),
(13, '2024-08-13-052633', 'App\\Database\\Migrations\\AddUserIdToRegisteredChild', 'default', 'App', 1723526832, 7),
(14, '2024-08-19-141656', 'App\\Database\\Migrations\\UpdateCoursesTable', 'default', 'App', 1724077046, 8),
(15, '2024-08-21-073641', 'App\\Database\\Migrations\\CreateInstructorsTable', 'default', 'App', 1724226471, 9),
(16, '2024-08-21-133425', 'App\\Database\\Migrations\\AddInstructorIdToUsersTable', 'default', 'App', 1724247318, 10),
(17, '2024-08-22-053645', 'App\\Database\\Migrations\\CreateStudentAssignedTable', 'default', 'App', 1724305993, 11),
(18, '2024-08-26-051514', 'App\\Database\\Migrations\\CreateDonationPaymentTable', 'default', 'App', 1724649497, 12),
(19, '2024-08-26-054404', 'App\\Database\\Migrations\\CreateDonationsTable', 'default', 'App', 1724651105, 13),
(20, '2024-08-29-053433', 'App\\Database\\Migrations\\AddDonerColumnToUsersTable', 'default', 'App', 1724909721, 14),
(21, '2024-09-04-054601', 'App\\Database\\Migrations\\UpdateUsersTableEmailUnique', 'default', 'App', 1725428795, 15),
(22, '2024-09-13-171742', 'App\\Database\\Migrations\\CreateJobsTable', 'default', 'App', 1726248250, 16),
(23, '2024-09-13-172537', 'App\\Database\\Migrations\\CreateCertificateTable', 'default', 'App', 1726250385, 17),
(24, '2024-09-13-175435', 'App\\Database\\Migrations\\CreateBanksTable', 'default', 'App', 1726250385, 17),
(25, '2024-10-18-120401', 'App\\Database\\Migrations\\CreateSubjectDetailTable', 'default', 'App', 1729253307, 18);

-- --------------------------------------------------------

--
-- Table structure for table `registered_child`
--

DROP TABLE IF EXISTS `registered_child`;
CREATE TABLE IF NOT EXISTS `registered_child` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fathername` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gender` enum('Male','Female','Other') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `birth` date NOT NULL,
  `phone_number` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `whatsapp` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `skype` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `classes_per_week` int NOT NULL,
  `contact_time` enum('Morning','Day','Evening') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `teacher_gender` enum('Male','Female','Anyone') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `language` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `courses` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `referred` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `category_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `agree_terms` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered_child`
--

INSERT INTO `registered_child` (`id`, `user_id`, `username`, `fathername`, `email`, `gender`, `birth`, `phone_number`, `whatsapp`, `skype`, `address`, `classes_per_week`, `contact_time`, `teacher_gender`, `country`, `state`, `language`, `courses`, `referred`, `category_img`, `agree_terms`, `created_at`, `updated_at`) VALUES
(2, 15, 'Muhammad Usman', 'Sajjad Hussain', 'khanusman12345@gmail.com', 'Male', '2024-08-09', '03317344949', '03317344949', '03317344949', 'Islamabad', 3, 'Morning', 'Male', 'Pakistan', 'jampur', 'English', 'Electrician', 'Google', '6ce13131e1378269aab3f07b2396101b.jpg', 0, '2024-08-13 05:12:23', '2024-08-13 05:12:23'),
(8, 14, 'Hamza Noor', 'Noor Muhammad', 'hamzanoor79@gmail.com', 'Male', '2024-08-09', '03317344949', '03317344949', '03317344949', 'Rawalpindi islamabad', 5, 'Morning', 'Male', 'Pakistan', 'Punjab', 'English', '3', 'Facebook', 'd223b432a23ee62981d87dbcccda47c5.jpg', 0, '2024-08-15 05:21:43', '2024-08-15 05:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user', '', '2024-06-29 06:23:09', '2024-06-29 06:23:09', NULL),
(2, 'teacher', '', '2024-06-29 06:23:09', '2024-06-29 06:23:09', NULL),
(3, 'admin', '', '2024-06-29 06:23:09', '2024-06-29 06:23:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_assigned`
--

DROP TABLE IF EXISTS `student_assigned`;
CREATE TABLE IF NOT EXISTS `student_assigned` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int UNSIGNED NOT NULL,
  `instructor_id` int UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_assigned_user_id_foreign` (`user_id`),
  KEY `student_assigned_instructor_id_foreign` (`instructor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_assigned`
--

INSERT INTO `student_assigned` (`id`, `user_id`, `instructor_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 10, 17, 1, '2024-08-22 08:03:04', '2024-08-22 08:03:04');

-- --------------------------------------------------------

--
-- Table structure for table `subjects_detail`
--

DROP TABLE IF EXISTS `subjects_detail`;
CREATE TABLE IF NOT EXISTS `subjects_detail` (
  `user_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `fee` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `instructor_id` int UNSIGNED DEFAULT NULL,
  `role_id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'active',
  `activation_hash` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reset_hash` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `doner` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'inactive',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `email_2` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `instructor_id`, `role_id`, `username`, `email`, `password`, `phone_number`, `status`, `activation_hash`, `reset_hash`, `verified`, `doner`, `created_at`, `updated_at`, `deleted_at`) VALUES
(12, NULL, 3, 'Admin', 'khanusman8685@gmail.com', '$2y$10$iOgZQ41fPx07qMjF/SjplOYuoKmNpSVCCb0hoJvg72NwfrzrFW9FO', '03317344949', 'active', NULL, NULL, 1, 'active', '2024-06-29 06:23:09', '2024-06-29 06:23:09', NULL),
(10, NULL, 1, 'Ahmad Ali', 'khanusman4949@gmail.com', '$2y$10$8RCtm20TVOXDrYzDIM3ejuYKSPJ6FtAQSg2H3hOgraweovgZ6uuMW', '09719923222', 'active', NULL, NULL, 1, 'inactive', '2024-06-29 06:23:09', '2024-06-29 06:23:09', NULL),
(13, NULL, 1, 'Noman Ajaz', 'khanusman821685@gmail.com', '$2y$10$cGFOpg5cZOqJwDeiSBPLaezFKU.NK4yGqIq17b.JU203hoYJKmu/C', '03317344040', 'active', '591699', NULL, 0, 'inactive', '2024-08-02 13:45:48', '2024-08-02 13:45:48', NULL),
(14, NULL, 1, 'Hamza Noor', 'hamzanoor79@gmail.com', '$2y$10$im8gH6ak1B3cOr5k0SfcUu7a4wwoeWEGIK0nElUCv833Xf0GByLdG', '03317344949', 'active', '869277', NULL, 1, 'active', '2024-08-02 13:51:40', '2024-08-02 13:51:40', NULL),
(15, NULL, 1, 'Tehmoor Sami', 'khanusman12345@gmail.com', '$2y$10$6z0.MGQ8853yfHlcJIHMA.hsnwzquJQC4ZfWlf63B.tMpbLMTtjJW', '03317344949', 'active', '786339', NULL, 1, 'inactive', '2024-08-08 11:11:49', '2024-08-08 11:11:49', NULL),
(16, NULL, 1, 'Noman Ejaz', 'nomanajaz@gmail.com', '$2y$10$MdzXd6KgGhmLA.EFC6A.6eIrJSnIhJO5Lu1dzglddPlZpD2e3fVXe', '03317344949', 'active', '585285', NULL, 1, 'inactive', '2024-08-08 11:16:05', '2024-08-08 11:16:05', NULL),
(17, 3, 2, 'Muhammad Farhan', 'farhan@gmail.com', '$2y$10$Z8mb0eo.TPlLSX4D1FSL2e2irTaPRpvzCKCc0AtBGJZhAUV5LuXoa', '0331344949', 'active', '123716', NULL, 1, 'inactive', '2024-08-21 14:00:13', '2024-08-21 14:00:13', NULL),
(18, NULL, 0, 'Muhammad Usman', 'farhan3423@gmail.com', '', '03317344949', 'active', NULL, NULL, 0, 'active', '2024-09-04 05:38:23', '2024-09-04 05:38:23', NULL),
(19, NULL, 0, 'Muhammad Usman', 'test@gmail.com', '', '03317344949', 'active', NULL, NULL, 0, 'active', '2024-09-04 05:52:01', '2024-09-04 05:52:01', NULL),
(21, NULL, 0, 'Muhammad Usman', 'khanusman868de5@gmail.com', '', '0230923823', 'active', NULL, NULL, 0, 'inactive', '2024-10-18 12:01:08', '2024-10-18 12:01:08', NULL),
(23, NULL, 0, 'Muhammad Usman', 'khanusman868dsse5@gmail.com', '', '0230923823', 'active', NULL, NULL, 0, 'inactive', '2024-10-18 12:18:23', '2024-10-18 12:18:23', NULL),
(27, NULL, 0, 'test', 'test123@gmail.com', '', '0230923823', 'active', NULL, NULL, 0, 'inactive', '2024-10-18 12:38:21', '2024-10-18 12:38:21', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
