-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 02, 2019 at 04:44 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vectorindia`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneno` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googlemapsrc` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1->active,0->inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `address`, `email`, `mobile`, `phoneno`, `googlemapsrc`, `status`, `created_at`, `updated_at`) VALUES
(1, '# 502, Nagasuri Plaza (Bank Of India building)\r\nBehind Maithrivanam, Ameerpet,\r\nHyderabad – 500038', 'manvendrasinghpratap@icloud.com', '424324', '34535', 'https://laravel.com/docs/5.8/migrations', 1, '2019-04-24 03:56:53', '2019-04-24 03:56:53'),
(2, '33/49, 27th Cross, 12th Main, \r\nJayanagar 4th block, \r\nBangalore - 560011.', 'info.blr@vectorindia.org', '+918762456789', '080 26 54 64 74', 'https://www.google.com/maps/d/viewer?mid=1ttwa-cRGq29vCcOcmePGde5VJ9Q&hl=en&ll=12.930375000000003%2C77.58647700000006&z=17', 1, '2019-04-24 05:08:56', '2019-04-24 05:08:56'),
(3, 'aslaskdsa\r\nsafcsdknmfklsd\r\nsdfkndskfdsl\r\nsdfkdsnfmldsk', 'test@test.com', '12323213', '234242343', 'https://www.google.com/search?rlz=1C1CHBF_enIN820IN820&q=squarespace+templates&sa=X&ved=2ahUKEwjUn4nmte3hAhUCiXAKHSCBDN0Q1QIoAXoECAcQAg', 1, '2019-04-26 09:31:59', '2019-04-26 23:45:24'),
(4, 'adasdsad\r\nasd\r\nsa\r\ndasdsadsad\r\nsadsadsadsadsadsadsadsa\r\nsd\r\na\r\nd\r\nsad\r\nas', 'email@email.com', '456456565', '546545465', '546546546', 1, '2019-04-26 23:51:06', '2019-04-26 23:51:22'),
(5, 'ssadsadasdsad', 'manvendrasinghpratap@icloud.com', '23232323', '2323232', 'dsadsad23232323s', 1, '2019-04-27 02:59:29', '2019-04-27 02:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_04_17_013846_create_settings_table', 2),
(5, '2019_04_24_075956_create_addresses_table', 3),
(6, '2019_04_27_091045_create_news_table', 4),
(8, '2019_04_27_093814_add_new_coloumn_imagename_to_news_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `heading` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_heading` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `imagename` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `written_by` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderBy` tinyint(4) DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0=>inactive,1=>inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `heading`, `sub_heading`, `description`, `imagename`, `written_by`, `orderBy`, `status`, `created_at`, `updated_at`) VALUES
(4, 'asd', NULL, 'asda es\r\n\r\nfdgfd', 'php3FE7.tmp.jpg', 'sdasdasd', NULL, '1', '2019-04-27 05:45:12', '2019-04-27 05:45:12'),
(5, 'Dummy Data', NULL, 'SUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.com\r\nSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.com', NULL, 'Manvendra Pratap Singh', NULL, '1', '2019-04-27 05:48:14', '2019-04-27 05:48:14'),
(6, 'New Dummy Data', NULL, 'SUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.com', 'php8399.tmp.jpg', 'Manvendra Pratap Singh', NULL, '1', '2019-04-27 05:48:46', '2019-04-27 05:48:46'),
(7, 'The Next Big Think In Data Analysis', 'Finance Analysis', 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.\r\n\r\nThe bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. \"What\'s happened to me? \" he thought. It wasn\'t a dream.\r\n\r\nHis room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather.\r\n\r\nHis room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather.', 'phpCFC.tmp.jpg', 'Singh Pratap', NULL, '1', '2019-04-30 12:58:28', '2019-04-30 12:58:28'),
(8, 'New News', 'Sub heading', 'sckmsdlk \r\nsd;klcnsd lkssdfosdi sd\r\ndsndsjknfdsj \r\nsdfkjdsnfsdfsdnfsdsdi  nefjkneoiwfnwe jnfosdofids  jdn', 'php98C3.tmp.png', 'Manvik Singh', NULL, '1', '2019-05-01 11:44:25', '2019-05-01 11:44:25');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `field_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `field_name`, `value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'companyname', 'Vector India', 1, NULL, NULL),
(2, 'companyaddress', NULL, 1, NULL, NULL),
(3, 'contactno', '1234567890', 1, NULL, NULL),
(4, 'googleaddress', NULL, 1, NULL, NULL),
(5, 'haveanyquestion', 'have any question?', 1, NULL, NULL),
(6, 'bestprofessionalsolutionsforyourcompany', 'Drives you to Industry', 1, NULL, NULL),
(7, 'skype', 'skype_VectorInstitute', 1, NULL, NULL),
(8, 'facebook', 'facebook', 1, NULL, NULL),
(9, 'googleplus', 'googleplus', 1, NULL, NULL),
(10, 'twitter', 'twitter', 1, NULL, NULL),
(11, 'youtube', 'youtube', 1, NULL, NULL),
(12, 'vimeo', 'vimeo', 1, NULL, NULL),
(13, 'email', 'info@vectorindia.org', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `heading` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_heading` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `imagename` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `written_by` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderBy` tinyint(4) DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0=>inactive,1=>inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `heading`, `sub_heading`, `description`, `imagename`, `written_by`, `orderBy`, `status`, `created_at`, `updated_at`) VALUES
(4, 'asd', NULL, 'asda es\r\n\r\nfdgfd', 'php3FE7.tmp.jpg', 'sdasdasd', NULL, '1', '2019-04-27 05:45:12', '2019-04-27 05:45:12'),
(5, 'Dummy Data', NULL, 'SUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.com\r\nSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.com', NULL, 'Manvendra Pratap Singh', NULL, '1', '2019-04-27 05:48:14', '2019-04-27 05:48:14'),
(6, 'New Dummy Data', NULL, 'SUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.comSUCCESS | meaning in the Cambridge English Dictionary\r\nhttps://dictionary.cambridge.org/dictionary/english/success\r\n\"success\" in American English. ... These examples are from the Cambridge English Corpus and from sources on the web. Any opinions in the examples do not represent the opinion of the Cambridge Dictionary editors or of Cambridge University Press or its licensors.\r\nWhat is success? | TED Talks - TED.com', 'php8399.tmp.jpg', 'Manvendra Pratap Singh', NULL, '1', '2019-04-27 05:48:46', '2019-04-27 05:48:46'),
(7, 'The Next Big Think In Data Analysis', 'Finance Analysis', 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.\r\n\r\nThe bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. \"What\'s happened to me? \" he thought. It wasn\'t a dream.\r\n\r\nHis room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather.\r\n\r\nHis room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather.', 'phpCFC.tmp.jpg', 'Singh Pratap', NULL, '1', '2019-04-30 12:58:28', '2019-04-30 12:58:28'),
(8, 'New News', 'Sub heading', 'sckmsdlk \r\nsd;klcnsd lkssdfosdi sd\r\ndsndsjknfdsj \r\nsdfkjdsnfsdfsdnfsdsdi  nefjkneoiwfnwe jnfosdofids  jdn', 'php98C3.tmp.png', 'Manvik Singh', NULL, '1', '2019-05-01 11:44:25', '2019-05-01 11:44:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$qmtxb7/ZzXUuP05nl/0O/OGR6yVlFPoVYswE4MlOhADGjTCpT20xa', NULL, '2019-04-17 23:06:22', '2019-04-17 23:06:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
