-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 17, 2021 at 02:53 PM
-- Server version: 10.2.39-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klcedu_klc`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_layouts`
--

CREATE TABLE `about_layouts` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_layouts`
--

INSERT INTO `about_layouts` (`id`, `title`, `position`, `created_at`, `updated_at`) VALUES
(1, 'about', '1', NULL, '2021-09-11 05:19:01'),
(2, 'facts', '2', NULL, '2021-09-11 05:19:01'),
(3, 'testimonial', '3', NULL, '2021-09-11 05:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `about_pages`
--

CREATE TABLE `about_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_pages`
--

INSERT INTO `about_pages` (`id`, `title`, `image`, `content`, `created_at`, `updated_at`) VALUES
(1, 'KLC EDU', 'site-images/about/613b792d0fadd.jpg', '<p>KLC provides free counseling and visa processing for Australia, USA, UK, New Zealand, Europe, Canada, Japan and India. We provide expert advice and best option to the students with test preparation classes.</p>', NULL, '2021-09-15 18:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `author`, `body`, `cover`, `tag`, `created_at`, `updated_at`) VALUES
(3, 'Tokyo’s COVID-19 count dips below 900', 'tokyo-s-covid-19-count-dips-below-900', 'KLC Education', '<p>TOKYO – New coronavirus cases in Japan’s capital city fell below 1,000 on Thursday for the third time in 11 days.</p><p>Tokyo reported 831 newly infected people, about half the number a week prior, according to public broadcaster NHK and metropolitan government data. The city’s fifth and most severe coronavirus wave peaked at 5,773 new cases on Aug. 13 and continues to wane.</p><p>Japan on Wednesday reported 6,809 new cases, a slight increase over previous days but far from the Aug. 27 peak of 26,050, according to the Johns Hopkins Coronavirus Resource Center and the World Health Organization. Another 74 people died of complications of COVID-19, the coronavirus respiratory disease, according to Johns Hopkins.</p><p>More than half – 52.3% – of Japan’s population is fully vaccinated, according to the center.</p><p>None of the U.S. military installations in Japan had reported new COVID-19 cases by 5:30 p.m. Thursday.</p><p>On Okinawa, Amelia Earhart Intermediate School at Kadena Air Base closed a fourth-grade classroom Thursday until testing and quarantine requirements were complete after another positive case, according to the school principal.</p><p>The school closed a classroom earlier in the week after someone tested positive, but the message Wednesday from principal Jason Federico did not specify if the same classroom was involved. His message, posted on the Marine Corps Community Service, School Liaison Officer Facebook page, said students would receive remote learning in the interim.</p><p>“You will receive a message from Mr. Furusho outlining the remote learning plan for your students while the classroom is closed,” Federico wrote in a separate Facebook post.</p><p>Okinawa prefecture, where Kadena and the headquarters of III Marine Expeditionary Force are located, reported 229 new infections Thursday, according to the prefectural Department of Public Health and Medical Care.</p>', 'blogs/blog-61436ecdd998f.jpg', 'information', '2021-09-11 02:30:10', '2021-09-16 22:05:29'),
(4, 'Aukus: UK, US and Australia pact signals Asia-Pacific shift', 'aukus-uk-us-and-australia-pact-signals-asia-pacific-shift', 'KLC Education', '<p>A new security partnership in the Asia Pacific will see the UK and US provide Australia with the technology and capability to deploy nuclear-powered submarines. American officials have said the move was not aimed at countering Beijing. However experts say the AUKUS agreement signals a paradigm shift in strategy and policy across the region.</p><p>The timing of the new deal is particularly significant. It comes just a month after the US exit from Afghanistan, when doubts have been raised in multiple quarters about US commitment in the region.</p><p>Britain too is eager to be more involved in the Asia-Pacific especially after its exit from the European Union and Australia is increasingly concerned about China\'s influence.</p><p>\"It is a \'big deal\' because this really shows that all three nations are drawing a line in the sand to start and counter the Chinese Communist Party\'s (CCP) aggressive moves in the Indo-Pacific,\" Guy Boekenstein, senior director of Defence and National Security at Australia\'s Northern Territory government told the BBC.</p><p>\"It also publicly demonstrates our combined stance on this and commitment to a stable and secure Indo-Pacific region - one that for the past 70 years has led to the prosperity of all in the region, including China\'s economic growth.\"</p><p>What does the agreement involve?<br>The agreement involves the sharing of information and technology in a number of areas including intelligence and quantum technology as well as the acquisition of cruise missiles.</p><p>But the nuclear submarines are key. They are to be built in Adelaide in South Australia and will involve the US and the UK providing consultation on technology for their production.</p><p>\"A nuclear submarine has enormous defence capabilities and therefore ramifications for the region. Only 6 countries in the world have nuclear submarines. They are a really powerful deterrent capability without giving them nuclear weapons,\" Michael Shoebridge, Director of Defence, Strategy and National Security at the Australian Strategic Policy Institute said.</p><p>UK, US and Australia launch pact to counter China<br>UK to shift foreign policy focus after review<br>China warns UK as carrier strike group approaches<br>Nuclear submarines are much more stealthy than conventional ones - they operate quietly, are able to move easily and are harder to detect.</p><p>At least eight submarines will be supported, although it\'s not clear when they will be deployed. The process will take longer due to a lack of nuclear infrastructure in Australia.</p><p>They will not be nuclear armed, only powered with nuclear reactors.</p><p>\"Let me be clear: Australia is not seeking to acquire nuclear weapons or establish a civil nuclear capability,\" Australia\'s Prime Minister Scott Morrison said.</p><p>President Biden added that there would be an initial 18-month consultation period with teams from the three countries to decide how it would work and to ensure compliance with non-proliferation commitments.</p><p>However, the move does show that the US and UK are willing to take the big step of exporting nuclear technology to a non-nuclear powered nation, according to Yun Sun, Co-Director of the East Asia Programme at the Stimson Center.</p><p>And that is what makes the partnership so unique.</p>', 'blogs/blog-61436fdd7ccdd.jpg', 'information', '2021-09-16 22:08:25', '2021-09-16 22:10:24'),
(5, 'Military to be called in to help Scottish ambulance crews', 'military-to-be-called-in-to-help-scottish-ambulance-crews', 'KLC Education', '<p>The Scottish government has asked the MoD for military assistance for the country\'s ambulance service.</p><p>Nicola Sturgeon said health services were dealing with the most challenging combination of circumstances in their history due to the Covid-19 pandemic.</p><p>Opposition politicians have highlighted a series of serious ambulance delays, including one where a man died after a 40-hour wait.</p><p>They said this should not be happening in Scotland in 2021.</p><p>Ms Sturgeon said her government was looking at a range of plans to deal with the significant challenges facing the health services, with the detail of a request for military assistance being considered.</p><p>She told the Scottish Parliament: \"I\'ll be going back to my office to finalise the detail of the request for military assistance so we can submit that as quickly as possible.\"</p><p>The first minister added: \"Such military assistance is already being provided to ambulance services in England and of course we have had military assistance for other aspects of the pandemic over the past 18 months.\"</p><p>The Ministry of Defence confirmed it had received a request from the Scottish government, which it said related to support for Scottish Ambulance Service mobile testing units.</p><p>A spokeswoman said the MoD was \"working hard to identify where we can most effectively assist other government departments and civil authorities.\"</p><p>Investigations are ongoing into several cases reported in the media on Thursday, including one where a Glasgow pensioner died after a 40-hour wait for an ambulance.</p><p>The Herald newspaper reported that the family of 65-year-old Gerard Brown were told that he could have survived had help arrived sooner.</p><p>Mr Brown\'s GP - who is said to have repeatedly warned 999 call handlers that the patient\'s status was critical - was quoted as describing the crisis engulfing the Scottish Ambulance Service as being like \"third world medicine\".</p><p>The Scottish Ambulance Service is investigating the circumstances of the case, and said it will be \"in contact with Mr Brown\'s family directly to apologise for the delay\".</p><p>Mr Brown\'s death has been reported to the Procurator Fiscal, who said an investigation was \"ongoing\".</p><p>Pressed on the case at her weekly question session at Holyrood, Ms Sturgeon offered her condolences to Mr Brown\'s family, and said what had been reported was \"unacceptable\".</p><p>She said Scotland was \"experiencing probably the most challenging combination of circumstances that our health service has faced since its establishment\" due to the pandemic.</p><p>&nbsp;</p>', 'blogs/blog-614370571d10e.jpg', 'information', '2021-09-16 22:12:03', '2021-09-16 22:12:03');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blogs_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'jhkjkh', 'admin@gmian.com', NULL, 'asd', 'adasd', 0, '2021-09-15 08:48:03', '2021-09-15 08:49:50');

-- --------------------------------------------------------

--
-- Table structure for table `course_additionals`
--

CREATE TABLE `course_additionals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facts`
--

CREATE TABLE `facts` (
  `id` int(11) NOT NULL,
  `page` varchar(150) DEFAULT NULL,
  `fact1` varchar(150) DEFAULT NULL,
  `fact2` varchar(150) DEFAULT NULL,
  `fact3` varchar(150) DEFAULT NULL,
  `fact4` varchar(150) DEFAULT NULL,
  `fact1value` varchar(150) DEFAULT NULL,
  `fact2value` varchar(150) DEFAULT NULL,
  `fact3value` varchar(150) DEFAULT NULL,
  `fact4value` varchar(150) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facts`
--

INSERT INTO `facts` (`id`, `page`, `fact1`, `fact2`, `fact3`, `fact4`, `fact1value`, `fact2value`, `fact3value`, `fact4value`, `updated_at`, `created_at`) VALUES
(2, 'home', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'about', 'sTUDENT OF PURPOSE', 'WORK EXPERIENCE LETTERS', 'SAMPLE BIO-DATA', 'rECOMMENDATION LETTERS', '10', '10', '10', '10', '2021-09-15 12:04:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `title` varchar(150) DEFAULT NULL,
  `image` varchar(150) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `updated_at`, `created_at`) VALUES
(2, 'img1', 'gallery/gallery-61423e988ba90.png', '2021-09-16 00:27:32', '2021-09-12 16:27:59'),
(3, 'img2', 'gallery/gallery-613e2a969469e.PNG', '2021-09-12 16:28:06', '2021-09-12 16:28:06'),
(4, 'img3', 'gallery/gallery-613e2a9f5c271.PNG', '2021-09-12 16:28:15', '2021-09-12 16:28:15'),
(5, 'img4', 'gallery/gallery-613e2aa5d33c8.PNG', '2021-09-12 16:28:21', '2021-09-12 16:28:21');

-- --------------------------------------------------------

--
-- Table structure for table `home_layouts`
--

CREATE TABLE `home_layouts` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_layouts`
--

INSERT INTO `home_layouts` (`id`, `title`, `position`, `created_at`, `updated_at`) VALUES
(1, 'header', '1', NULL, '2021-09-16 15:58:52'),
(3, 'testimonial', '7', NULL, '2021-09-16 15:58:52'),
(4, 'blog', '4', NULL, '2021-09-16 15:58:52'),
(14, 'text', '3', '2021-09-15 05:09:46', '2021-09-16 15:58:52'),
(19, 'services', '2', '2021-09-15 08:50:46', '2021-09-16 15:58:52'),
(24, 'text', '5', '2021-09-16 15:58:43', '2021-09-16 15:58:52');

-- --------------------------------------------------------

--
-- Table structure for table `home_pages`
--

CREATE TABLE `home_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_pages`
--

INSERT INTO `home_pages` (`id`, `title`, `image`, `content`, `created_at`, `updated_at`) VALUES
(1, 'KLC Education Foundation', 'site-images/home/614313af973c6.png', '<p>Professional Counselling &amp; Placement opened its doors in 2005 in Kumaripati, Lalitpur, Nepal, and focus on the Hospitality and Tourism industry.</p><p>KLC Education Foundation Pvt. Ltd. is a leading educational institute providing the best education and visa consulting service.</p>', NULL, '2021-09-16 15:36:43');

-- --------------------------------------------------------

--
-- Table structure for table `main_menus`
--

CREATE TABLE `main_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) DEFAULT NULL,
  `link` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_menus`
--

INSERT INTO `main_menus` (`id`, `title`, `position`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Home', 1, '/', NULL, '2021-09-16 00:20:16'),
(2, 'About', 2, '/about', NULL, '2021-09-16 00:20:16'),
(3, 'Courses', 3, '#', NULL, '2021-09-16 00:20:16'),
(4, 'Countries', 4, '#', NULL, '2021-09-16 00:20:16'),
(7, 'Blog', 6, '/blog', NULL, '2021-09-16 00:20:16'),
(8, 'Contact', 7, '/contact', NULL, '2021-09-16 00:20:16'),
(9, 'Gallery', 5, '/gallery', NULL, '2021-09-16 00:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Blogs', 0, 'f78323b8-4b89-4a1a-a25d-f76657b906a8', 'blogs', 'about-img1', 'about-img1.png', 'image/png', 'media', 'media', 24528, '[]', '[]', '[]', '[]', 1, '2021-09-10 13:23:51', '2021-09-10 13:23:51'),
(2, 'App\\Models\\Blogs', 0, 'd0be05d0-0f3d-4f11-b020-8fc70eb39b15', 'blogs', 'Australia_Day', 'Australia_Day.jpg', 'image/jpeg', 'media', 'media', 2267805, '[]', '[]', '[]', '[]', 2, '2021-09-11 02:30:01', '2021-09-11 02:30:01'),
(3, 'App\\Models\\Blogs', 0, '143eb8bf-e620-415e-967b-89ab0744c1ca', 'blogs', 'health-img3', 'health-img3.jpg', 'image/jpeg', 'media', 'media', 82641, '[]', '[]', '[]', '[]', 3, '2021-09-16 11:34:50', '2021-09-16 11:34:50');

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
(22, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(23, '2021_09_06_102728_create_blogs_table', 2),
(24, '2021_09_06_115125_create_permission_tables', 2),
(25, '2021_09_06_120341_create_media_table', 2),
(26, '2021_09_06_151614_create_site_settings_table', 2),
(27, '2021_09_08_105705_create_courses_table', 2),
(28, '2021_09_08_105718_create_countries_table', 2),
(29, '2021_09_08_110545_create_course_additionals_table', 2),
(30, '2021_09_09_025658_create_blog_comments_table', 2),
(31, '2021_09_09_093322_create_testimonials_table', 2),
(32, '2021_09_09_112619_create_contacts_table', 2),
(33, '2021_09_10_182317_create_pages_table', 2),
(34, '2021_09_10_200713_create_main_menus_table', 3),
(35, '2021_09_10_201419_create_home_pages_table', 4),
(36, '2021_09_10_204442_create_about_pages_table', 5),
(37, '2021_09_10_211715_create_contact_pages_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subof` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `footer` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `link`, `slug`, `subof`, `content`, `image`, `banner`, `status`, `footer`, `created_at`, `updated_at`) VALUES
(3, 'IELTS', '/courses/ielts', 'ielts', 3, '<h2><strong>What is IELTS?</strong></h2><p>The International English Language Testing System (IELTS) is designed to help you work, study or migrate to a country where English is the native language. This includes countries such as Australia, Canada, New Zealand, the UK and USA.</p><p>Your ability to listen, read, write and speak in English will be assessed&nbsp;</p><p>during the test. IELTS is graded on a scale of 1-9.&nbsp;&nbsp;</p><p>IELTS is jointly owned by the British Council, IDP: IELTS Australia and Cambridge Assessment English.</p><figure class=\"image\"><img src=\"https://klc.edu.np/media/3/health-img3.jpg\"></figure><p>&nbsp;</p><h2><strong>Why take IELTS?</strong></h2><p>If you are looking to work, live or study in an English-speaking country, then you must be able to demonstrate a high level of English language ability.</p><p>English is the third most spoken language in the world, with 379 million speakers worldwide.</p><p>Being able to communicate in the native language of the country you wish to work or study in, has a wide range of benefits. It is also essential for job opportunities as well as integration into the community.</p><p>IELTS is the most popular test for those looking to migrate to Australia, Canada, New Zealand and the UK. It is globally recognized by more than 11,000 employers, universities, schools and immigration bodies including 3,400 institutions in the USA.&nbsp;&nbsp;</p>', 'courses/613b82894b2c4.jpg', 'courses/613b87fab7489.jpg', 1, 1, '2021-09-10 16:06:33', '2021-09-16 11:35:55'),
(4, 'Australia', '/countries/australia', 'australia', 4, '<p>Many people around the world know Australia for being a gorgeous country and it’s a world class quality of living, with six of Australian cities are listed among the highest 40 cities within the world. Australian education system is considered best education in the world with the reputation of safe, friendly communities from coast to coast.</p><p>Australia offers a various range of study options for International student, with quite 1,100 institutions and over 22,000 courses tailored for you. Once you study in Australia, you’ve got the chance to pursue an impressive education from leading institution. Australia’s extraordinary heritage of innovation means your potential of success is boundless. Australian universities encourage International student to think big. Every year , student from round the world graduate from Australian Institutions with top quality qualification in almost every field. Australian graduates are wanted by employers worldwide and that they often continue to realize great success.</p><p>Your degree from an Australian education provider can take you to anywhere within the world. With 43 universities across Australia, there’ll be course which will assist you achieve your goal. Study here will boost your career prospect because graduates from Australia are desirable employees in any workplace. In most fields, an Australian qualification are recognized by employers. Australian courses are constantly updated with inputs from industry leaders to insure your skills and knowledge are current, strengthening your ability to compete your job.</p><p>The Australian Qualification framework (AQF) allows student easily move through the education system. It also provides a simple way for countries to acknowledge your qualification and issue a comparable qualification for local use. Australia sets the quality of excellence in education internationally. Education sector is predicated on a network of world leading education providers, premium facilities outstanding lectures and student support service.</p><p>Australia may be a safe, inclusive and supportive study environment, where you are feeling welcomed &amp; inspired. Australians have a reputation of being friendly and welcoming, with an open and informal approach to life, while also showing respect for the rights and freedoms of others. Australia features a very high standard of living, with the standard of education, healthcare, transport, infrastructure and government services all well above international averages. Australia features a reputation of a secure place to measure, with the streets and public spaces of Australia cities offering security and freedom not always found in other parts of the planet.</p>', 'courses/613c1073e246a.jpg', NULL, 1, 1, '2021-09-11 02:12:03', '2021-09-15 12:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_layouts`
--

CREATE TABLE `page_layouts` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(150) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'IELTS Classes', 'IELTS, also known as International Language Testing Center is the world’s most popular English Language Proficient Test for higher education and global migration.', 'services/service-61430d924a72a.jpg', 1, '2021-09-15 09:41:05', '2021-09-16 15:11:30'),
(4, 'Study in Canada', 'Canada has become a flourishing hub for International student whose dream include remaining in the country in which they complete their studies.', 'services/service-61430e677ec04.jpg', 1, '2021-09-16 15:14:11', '2021-09-16 15:14:11'),
(5, 'Study in Korea', 'South Korea, an East Asian nation on the southern half of the Korean Peninsula, shares one of the world’s most heavily militarized borders with North Korea. It’s equally known for its green,', 'services/service-61430fad3bbc1.jpg', 1, '2021-09-16 15:19:37', '2021-09-16 15:20:05'),
(6, 'Study in Japan', 'Japan is an island country in East Asia, located in the northwest Pacific Ocean. It is bordered on the west by the Sea of Japan, and extends from the Sea of Okhotsk in the north toward the East China Sea and Taiwan in the south.', 'services/service-614317914c42b.jpg', 1, '2021-09-16 15:53:17', '2021-09-16 15:53:17');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iframe` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `termscondition` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privacypolicy` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footertext` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `title`, `description`, `keyword`, `logo`, `favicon`, `address`, `phone`, `email`, `timing`, `iframe`, `created_at`, `updated_at`, `termscondition`, `privacypolicy`, `facebook`, `twitter`, `linkedin`, `instagram`, `footertext`) VALUES
(1, 'KLC Educational Foundation Pvt. Ltd.', 'Professional Counselling & Placement, opened its doors in 2005 in Kumaripati, lalitpur, Nepal and focuses on the Hospitality and Tourism industry', 'KLC Educational Foundation Pvt. Ltd.', 'site-images/logo-613ce9f31fc3b.PNG', 'site-images/favicon-61423b28d0224.png', 'Kumaripati-20, Lalitpur', '01-5546816', 'klc@klc.edu.np', '7:00 PM - 5:00 PM', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.4826120324233!2d85.31682755355287!3d27.67147495874074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19cde05f7e3b%3A0x50184bfaf22e750f!2sKLC%20Education%20Foundation%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1631727977228!5m2!1sen!2snp', '2021-09-10 13:48:01', '2021-09-16 15:07:37', '<p><i>This Terms and Conditions was last updated on January 1, 2020.</i></p><p>&nbsp;</p><h3><strong>1. Data You Provide to Us</strong></h3><p>We may collect different data from or about you depending on how you use the Services. Below are some examples to help you better understand the data we collect.</p><h3><strong>2. How We Get Data About You</strong></h3><p>We use tools like cookies, web beacons, analytics services, and advertising providers to gather the data listed above. Some of these tools offer you the ability to opt out of data collection.</p><h3><strong>3. What We Use Your Data For</strong></h3><ol><li>Responding to your questions and concerns;</li><li>Sending you administrative messages and information, including messages from instructors and teaching assistants, notifications about changes to our Service, and updates to our agreements;</li><li>Sending push notifications to your wireless device to provide updates and other relevant messages (which you can manage from the “options” or “settings” page of the mobile app);</li></ol><h3><strong>4. Your Choices About the Use of Your Data</strong></h3><p>You can choose not to provide certain data to us, but you may not be able to use certain features of the Services.</p><ul><li>To stop receiving promotional communications from us, you can opt out by using the unsubscribe mechanism in the promotional communication you receive or by changing the email preferences in your account. Note that regardless of your email preference settings, we will send you transactional and relationship messages regarding the Services, including administrative confirmations, order confirmations, important updates about the Services, and notices about our policies.</li><li>The browser or device you use may allow you to control cookies and other types of local data storage. Your wireless device may also allow you to control whether location or other data is collected and shared. You can manage Adobe’s LSOs through their Website Storage Settings panel.</li><li>To get information and control cookies used for tailored advertising from participating companies, see the consumer opt-out pages for the Network Advertising Initiative and Digital Advertising Alliance, or if you’re located in the European Union, visit the Your Online Choices site. To opt out of Google’s display advertising or customize Google Display Network ads, visit the Google Ads Settings page. To opt out of Taboola’s targeted ads, see the Opt-out Link in their Cookie Policy.</li><li>To update data you provide directly, log into your account and update your account at any time.</li></ul><h3><strong>5. Our Policy Concerning Children</strong></h3><p>We recognize the privacy interests of children and encourage parents and guardians to take an active role in their children’s online activities and interests. Children under 13 (or under 16 in the European Economic Area) should not use the Services. If we learn that we’ve collected personal data from a child under those ages, we will take reasonable steps to delete it.</p>', '<p><i>This Privacy Policy was last updated on January 1, 2020.</i></p><p>&nbsp;</p><h3><strong>1. Data You Provide to Us</strong></h3><p>We may collect different data from or about you depending on how you use the Services. Below are some examples to help you better understand the data we collect.</p><h3><strong>2. How We Get Data About You</strong></h3><p>We use tools like cookies, web beacons, analytics services, and advertising providers to gather the data listed above. Some of these tools offer you the ability to opt out of data collection.</p><h3><strong>3. What We Use Your Data For</strong></h3><ol><li>Responding to your questions and concerns;</li><li>Sending you administrative messages and information, including messages from instructors and teaching assistants, notifications about changes to our Service, and updates to our agreements;</li><li>Sending push notifications to your wireless device to provide updates and other relevant messages (which you can manage from the “options” or “settings” page of the mobile app);</li></ol><h3><strong>4. Your Choices About the Use of Your Data</strong></h3><p>You can choose not to provide certain data to us, but you may not be able to use certain features of the Services.</p><ul><li>To stop receiving promotional communications from us, you can opt out by using the unsubscribe mechanism in the promotional communication you receive or by changing the email preferences in your account. Note that regardless of your email preference settings, we will send you transactional and relationship messages regarding the Services, including administrative confirmations, order confirmations, important updates about the Services, and notices about our policies.</li><li>The browser or device you use may allow you to control cookies and other types of local data storage. Your wireless device may also allow you to control whether location or other data is collected and shared. You can manage Adobe’s LSOs through their Website Storage Settings panel.</li><li>To get information and control cookies used for tailored advertising from participating companies, see the consumer opt-out pages for the Network Advertising Initiative and Digital Advertising Alliance, or if you’re located in the European Union, visit the Your Online Choices site. To opt out of Google’s display advertising or customize Google Display Network ads, visit the Google Ads Settings page. To opt out of Taboola’s targeted ads, see the Opt-out Link in their Cookie Policy.</li><li>To update data you provide directly, log into your account and update your account at any time.</li></ul><h3><strong>5. Our Policy Concerning Children</strong></h3><p>We recognize the privacy interests of children and encourage parents and guardians to take an active role in their children’s online activities and interests. Children under 13 (or under 16 in the European Economic Area) should not use the Services. If we learn that we’ve collected personal data from a child under those ages, we will take reasonable steps to delete it.</p>', 'klctest', NULL, 'klc-education-foundation-pvt-ltd-25887551', NULL, 'KLC provides free counseling and visa processing for Australia, USA, UK, New Zealand, Europe, Canada, Japan and India. We provide expert advice and best option to the students with test preparation classes.');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `position` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL,
  `facebook` varchar(150) DEFAULT NULL,
  `twitter` varchar(150) DEFAULT NULL,
  `instagram` varchar(150) DEFAULT NULL,
  `linkedin` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `template_blocks`
--

CREATE TABLE `template_blocks` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `template_blocks`
--

INSERT INTO `template_blocks` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Text', NULL, NULL),
(2, 'Testimonial', NULL, NULL),
(4, 'Our Team', NULL, NULL),
(5, 'Facts', NULL, NULL),
(6, 'Blog', NULL, NULL),
(7, 'Services', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `status`, `photo`, `comments`, `created_at`, `updated_at`) VALUES
(1, 'Anisha Karki', 'Student', 'testimonial/testimonial-614375d8aec7a.jpg', 'I came to Korea through KLC Education Foundation. I personally found that it was my best decision to go and get to know about my future plan regarding overseas study through KLC Education Foundation. I am and always will really be grateful for all the guidance I had received from KLC Education Foundation team throughout my career. It is one of the best places to get 100% valid information and advice for your career. As it is one of the established and well-known consultancies trusted by many students.', '2021-09-16 22:20:06', '2021-09-16 22:35:32');

-- --------------------------------------------------------

--
-- Table structure for table `text_blocks`
--

CREATE TABLE `text_blocks` (
  `id` int(11) NOT NULL,
  `block_position` varchar(150) DEFAULT NULL,
  `page` varchar(150) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `imageposition` varchar(50) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `text_blocks`
--

INSERT INTO `text_blocks` (`id`, `block_position`, `page`, `title`, `subtitle`, `image`, `imageposition`, `content`, `updated_at`, `created_at`) VALUES
(1, '14', 'home', 'KLC Education foundation offers Under AIP Program in Canada!!', 'Are you ready for Under AIP Program in Canada? We apply Migration and PR too for Canada!!', 'site-images/textblock/61431efa0406b.jpg', 'left', '<p>Canada is a country in North America. Its ten provinces and three territories extend from the Atlantic to the Pacific and northward into the Arctic Ocean, covering 9.98 million square kilometers, making it the world\'s second-largest country by total area.</p><p>Canada is officially bilingual in English and French, reflecting the country’s history as ground once contested by two of Europe’s great powers. The word Canada is derived from the Huron-Iroquois kanata, meaning a village or settlement. In the 16th century, French explorer Jacques Cartier used the name Canada to refer to the area around the settlement that is now Quebec city. Later, Canada was used as a synonym for New France, which, from 1534 to 1763, included all the French possessions along the St. Lawrence River and the Great Lakes.&nbsp;</p>', '2021-09-16 16:34:27', NULL),
(6, '24', 'home', 'Are you prepared well? Well if not we suggest you join KLC Education Foundation!!', 'Are you planning to STUDY or WORK in JAPAN / KOREA', 'site-images/textblock/614371696eb7b.png', 'right', '<p>Japan, island country lying off the east coast of Asia. It consists of a great string of islands in a northeast-southwest arc that stretches for approximately 1,500 miles (2,400 km) through the western North Pacific Ocean. Nearly the entire land area is taken up by the country’s four main islands; from north to south these are Hokkaido (Hokkaidō), Honshu (Honshū), Shikoku, and Kyushu (Kyūshū). Honshu is the largest of the four, followed in size by Hokkaido, Kyushu, and Shikoku.</p><p>South Korea, an East Asian nation on the southern half of the Korean Peninsula, shares one of the world’s most heavily militarized borders with North Korea. It’s equally known for its green, hilly countryside dotted with cherry trees and centuries-old Buddhist temples, plus its coastal fishing villages, sub-tropical islands and high-tech cities such as Seoul, the capital.</p>', '2021-09-16 22:17:52', '2021-09-16 16:00:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$DBc19vwkY4FVzLSYLCaWVu9mb4iU0f3wTe441N83LX8dEVIehMLfi', NULL, '2021-09-10 17:47:34', '2021-09-10 17:47:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_layouts`
--
ALTER TABLE `about_layouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_pages`
--
ALTER TABLE `about_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_additionals`
--
ALTER TABLE `course_additionals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facts`
--
ALTER TABLE `facts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_layouts`
--
ALTER TABLE `home_layouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_pages`
--
ALTER TABLE `home_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_menus`
--
ALTER TABLE `main_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_link_unique` (`slug`);

--
-- Indexes for table `page_layouts`
--
ALTER TABLE `page_layouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_blocks`
--
ALTER TABLE `template_blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text_blocks`
--
ALTER TABLE `text_blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_layouts`
--
ALTER TABLE `about_layouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `about_pages`
--
ALTER TABLE `about_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_additionals`
--
ALTER TABLE `course_additionals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facts`
--
ALTER TABLE `facts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_layouts`
--
ALTER TABLE `home_layouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `main_menus`
--
ALTER TABLE `main_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `page_layouts`
--
ALTER TABLE `page_layouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `template_blocks`
--
ALTER TABLE `template_blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `text_blocks`
--
ALTER TABLE `text_blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
