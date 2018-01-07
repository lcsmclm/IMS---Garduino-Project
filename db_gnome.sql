-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 07, 2018 at 03:50 AM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: db_gnome
--

-- --------------------------------------------------------

--
-- Table structure for table plantlist
--

CREATE TABLE plantlist (
  plantlist_id int(5) NOT NULL,
  plantlist_name varchar(200) NOT NULL,
  plantlist_desc varchar(500) NOT NULL,
  plantlist_care varchar(500) NOT NULL,
  plantlist_type tinyint(2) NOT NULL,
  plantlist_location tinyint(2) NOT NULL,
  plantlist_img varchar(250) NOT NULL DEFAULT 'default-plant.svg',
  plantlist_imgsmall varchar(200) NOT NULL DEFAULT 'default-plant.svg',
  plantlist_light varchar(200) NOT NULL,
  plantlist_temperature varchar(200) NOT NULL,
  plantlist_water varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table plantlist
--

INSERT INTO plantlist (plantlist_id, plantlist_name, plantlist_desc, plantlist_care, plantlist_type, plantlist_location, plantlist_img, plantlist_imgsmall, plantlist_light, plantlist_temperature, plantlist_water) VALUES
(1, 'Orchid', 'Orchids are some of the most commonly grown houseplants. Provided they have proper growing conditions, it isn’t difficult to learn how to take care of orchid plants. Keep reading to get some indoor orchid care tips.', 'Orchids need ample water but should be allowed to dry out some between waterings. One way to check for watering is by poking your finger about an inch into the growing media. If it\'s dry, give it some water; otherwise, let it be. Indoor orchid plants also need adequate humidity, about fifty to seventy percent.', 4, 3, 'default-plant.svg', 'default-plant.svg', 'Medium - High', '21-32°C ', '50-65%'),
(2, 'Tomatoes', 'The tomato (see pronunciation) is the edible, often red, fruit of the plant Solanum lycopersicum, commonly known as a tomato plant. The plant belongs to the nightshade family, which is called Solanaceae.', 'Water well throughout the growing season, about 2 inches per week during the summer. Keep watering consistent! Mulch five weeks after transplanting to retain moisture. To help tomatoes through periods of drought, find some flat rocks and place one next to each plant.', 2, 3, 'default-plant.svg', 'default-plant.svg', '', '', ''),
(3, 'Aloe Verra', 'Aloe vera is a plant species of the genus Aloe. It grows wild in tropical climates around the world and is cultivated for agricultural and medicinal uses. Aloe is also used for decorative purposes and grows successfully indoors as a potted plant.', 'Water aloe vera plants deeply, but in order to discourage rot, allow the soil to dry at least 1 to 2 inches deep between waterings. Water about every 3 weeks and even more sparingly during the winter. Use your finger to test dryness before watering.', 1, 3, 'default-plant.svg', 'default-plant.svg', '', '', ''),
(4, 'Petunia', 'Petunia is genus of 35 species of flowering plants of South American origin, closely related to tobacco, cape gooseberries, tomatoes, deadly nightshades, potatoes and chili peppers in the same family, Solanaceae.', 'Petunias are tolerant of heat so you don\'t have to water them regularly. A thorough watering once a week should be sufficient (unless there are prolonged periods of drought in your area). ...\r\nFertilize your plants monthly to ensure good growth.', 4, 3, 'default-plant.svg', 'default-plant.svg', '', '', ''),
(5, 'Bell Pepper', 'The bell pepper is a cultivar group of the species Capsicum annuum. Cultivars of the plant produce fruits in different colors, including red, yellow, orange, green, chocolate/brown, vanilla/white, and purple.', 'Soil should be well drained, but be sure to maintain adequate moisture either with mulch or plastic covering. If necessary, support plants with cages or stakes to prevent bending. Try commercially available cone-shaped wire tomato cages.', 3, 3, 'default-plant.svg', 'default-plant.svg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table plantlist_categories
--

CREATE TABLE plantlist_categories (
  plantlist_category_id int(4) NOT NULL,
  plantlist_category_title varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table plantlist_categories
--

INSERT INTO plantlist_categories (plantlist_category_id, plantlist_category_title) VALUES
(1, 'Medicinal'),
(2, 'Fruit'),
(3, 'Vegetable'),
(4, 'Flower');

-- --------------------------------------------------------

--
-- Table structure for table plantlist_location
--

CREATE TABLE plantlist_location (
  plantlist_location_id tinyint(2) NOT NULL,
  plantlist_location_title varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table plantlist_location
--

INSERT INTO plantlist_location (plantlist_location_id, plantlist_location_title) VALUES
(1, 'Indoor'),
(2, 'Outdoor'),
(3, 'Indoor / Outdoor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table plantlist
--
ALTER TABLE plantlist
  ADD PRIMARY KEY (plantlist_id);

--
-- Indexes for table plantlist_categories
--
ALTER TABLE plantlist_categories
  ADD PRIMARY KEY (plantlist_category_id);

--
-- Indexes for table plantlist_location
--
ALTER TABLE plantlist_location
  ADD PRIMARY KEY (plantlist_location_id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table plantlist
--
ALTER TABLE plantlist
  MODIFY plantlist_id int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table plantlist_categories
--
ALTER TABLE plantlist_categories
  MODIFY plantlist_category_id int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table plantlist_location
--
ALTER TABLE plantlist_location
  MODIFY plantlist_location_id tinyint(2) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
