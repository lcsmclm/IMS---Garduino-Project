-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 09, 2018 at 01:22 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gnome`
--

-- --------------------------------------------------------

--
-- Table structure for table `gnomes`
--

CREATE TABLE `gnomes` (
  `id` int(11) NOT NULL,
  `uuid` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `user_id` int(11) NOT NULL,
  `plant_id` int(100) NOT NULL,
  `current_temp` varchar(300) NOT NULL,
  `current_moisture` varchar(300) NOT NULL,
  `current_light` varchar(300) NOT NULL,
  `statistical` varchar(10000) NOT NULL,
  `location` varchar(300) NOT NULL,
  `color` varchar(250) NOT NULL,
  `alert_status` int(1) NOT NULL,
  `image` varchar(300) NOT NULL DEFAULT 'default-plant.jpg',
  `TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gnomes`
--

INSERT INTO `gnomes` (`id`, `uuid`, `name`, `user_id`, `plant_id`, `current_temp`, `current_moisture`, `current_light`, `statistical`, `location`, `color`, `alert_status`, `image`, `TIMESTAMP`, `Title`) VALUES
(18, 87662810, 'Kitchen Plant', 0, 0, '19.5', '36', '51.3', '', '', 'blue', 0, 'default-plant.jpg', '2018-01-09 12:20:40', 'Tomatoes'),
(19, 82937561, 'Living Room Plant', 0, 0, '22', '58', '70', '', '', 'orange', 1, 'orchids.jpg', '2018-01-09 12:21:13', 'Orchid'),
(20, 42918564, 'Bedroom Plant', 0, 0, '24', '20', '90', '', '', 'green', 0, 'petunias.jpg', '2018-01-09 12:21:37', 'Petunia');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plantlist`
--

CREATE TABLE `plantlist` (
  `plantlist_id` int(5) NOT NULL,
  `plantlist_name` varchar(200) NOT NULL,
  `plantlist_desc` varchar(500) NOT NULL,
  `plantlist_care` varchar(500) NOT NULL,
  `plantlist_type` tinyint(2) NOT NULL,
  `plantlist_location` tinyint(2) NOT NULL,
  `plantlist_img` varchar(250) NOT NULL DEFAULT 'default-plant.svg',
  `plantlist_light` varchar(200) NOT NULL,
  `plantlist_temperature` varchar(200) NOT NULL,
  `plantlist_water` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plantlist`
--

INSERT INTO `plantlist` (`plantlist_id`, `plantlist_name`, `plantlist_desc`, `plantlist_care`, `plantlist_type`, `plantlist_location`, `plantlist_img`, `plantlist_light`, `plantlist_temperature`, `plantlist_water`) VALUES
(1, 'Orchid', 'Orchids are some of the most commonly grown houseplants. Provided they have proper growing conditions, it isn’t difficult to learn how to take care of orchid plants. Keep reading to get some indoor orchid care tips.', 'Orchids need ample water but should be allowed to dry out some between waterings. One way to check for watering is by poking your finger about an inch into the growing media. If it\'s dry, give it some water; otherwise, let it be. Indoor orchid plants also need adequate humidity, about fifty to seventy percent.', 4, 3, 'orchids.jpg', 'Medium - High', '21-32°C ', '50-65%'),
(2, 'Tomatoes', 'The tomato (see pronunciation) is the edible, often red, fruit of the plant Solanum lycopersicum, commonly known as a tomato plant. The plant belongs to the nightshade family, which is called Solanaceae.', 'Water well throughout the growing season, about 2 inches per week during the summer. Keep watering consistent! Mulch five weeks after transplanting to retain moisture. To help tomatoes through periods of drought, find some flat rocks and place one next to each plant.', 2, 3, 'default-plant.jpg', '', '', ''),
(3, 'Aloe Verra', 'Aloe vera is a plant species of the genus Aloe. It grows wild in tropical climates around the world and is cultivated for agricultural and medicinal uses. Aloe is also used for decorative purposes and grows successfully indoors as a potted plant.', 'Water aloe vera plants deeply, but in order to discourage rot, allow the soil to dry at least 1 to 2 inches deep between waterings. Water about every 3 weeks and even more sparingly during the winter. Use your finger to test dryness before watering.', 1, 3, 'aloe-vera.jpg', '', '', ''),
(4, 'Petunia', 'Petunia is genus of 35 species of flowering plants of South American origin, closely related to tobacco, cape gooseberries, tomatoes, deadly nightshades, potatoes and chili peppers in the same family, Solanaceae.', 'Petunias are tolerant of heat so you don\'t have to water them regularly. A thorough watering once a week should be sufficient (unless there are prolonged periods of drought in your area). ...\r\nFertilize your plants monthly to ensure good growth.', 4, 3, 'petunias.jpg', '', '', ''),
(5, 'Bell Pepper', 'The bell pepper is a cultivar group of the species Capsicum annuum. Cultivars of the plant produce fruits in different colors, including red, yellow, orange, green, chocolate/brown, vanilla/white, and purple.', 'Soil should be well drained, but be sure to maintain adequate moisture either with mulch or plastic covering. If necessary, support plants with cages or stakes to prevent bending. Try commercially available cone-shaped wire tomato cages.', 3, 3, 'bell-peppers.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `plantlist_categories`
--

CREATE TABLE `plantlist_categories` (
  `plantlist_category_id` int(4) NOT NULL,
  `plantlist_category_title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plantlist_categories`
--

INSERT INTO `plantlist_categories` (`plantlist_category_id`, `plantlist_category_title`) VALUES
(1, 'Medicinal'),
(2, 'Fruit'),
(3, 'Vegetable'),
(4, 'Flower');

-- --------------------------------------------------------

--
-- Table structure for table `plantlist_location`
--

CREATE TABLE `plantlist_location` (
  `plantlist_location_id` tinyint(2) NOT NULL,
  `plantlist_location_title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plantlist_location`
--

INSERT INTO `plantlist_location` (`plantlist_location_id`, `plantlist_location_title`) VALUES
(1, 'Indoor'),
(2, 'Outdoor'),
(3, 'Indoor / Outdoor');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lucas', 'lucas@branton.ca', '$2y$10$B0EyRF1t3wXGfpEFK2z5pu2T02ecdfkRGlafKIgaWAUYowa6S5/iW', 'mzpaj8y5ZmFMYSOwEVw7h3u4h7VKNZAq1rO2tJCdUv5IxkIzewX13HEhxKJW', '2018-01-08 03:07:32', '2018-01-08 03:07:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gnomes`
--
ALTER TABLE `gnomes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plantlist`
--
ALTER TABLE `plantlist`
  ADD PRIMARY KEY (`plantlist_id`);

--
-- Indexes for table `plantlist_categories`
--
ALTER TABLE `plantlist_categories`
  ADD PRIMARY KEY (`plantlist_category_id`);

--
-- Indexes for table `plantlist_location`
--
ALTER TABLE `plantlist_location`
  ADD PRIMARY KEY (`plantlist_location_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gnomes`
--
ALTER TABLE `gnomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `plantlist`
--
ALTER TABLE `plantlist`
  MODIFY `plantlist_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `plantlist_categories`
--
ALTER TABLE `plantlist_categories`
  MODIFY `plantlist_category_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `plantlist_location`
--
ALTER TABLE `plantlist_location`
  MODIFY `plantlist_location_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
