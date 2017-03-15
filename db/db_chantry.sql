-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2017 at 01:22 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: db_chantry
--

-- --------------------------------------------------------

--
-- Table structure for table tbl_imgs
--

CREATE TABLE tbl_imgs (
  img_id smallint(4) UNSIGNED NOT NULL,
  img_title varchar(250) NOT NULL,
  img_src varchar(150) NOT NULL DEFAULT 'default.jpg',
  img_thumb varchar(150) NOT NULL DEFAULT 'default-thumb.jpg',
  img_mobile varchar(250) NOT NULL DEFAULT 'default.jpg',
  img_desc varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_imgs
--

INSERT INTO tbl_imgs (img_id, img_title, img_src, img_thumb, img_mobile, img_desc) VALUES
(1, 'Peerless II Boat Tour', 'peerless_II_tour.jpg', 'peerless_II_tour_thumb.jpg', 'peerless_II_tour_mobile.jpg', 'Chantry Island Lighthouse. Photo by Carol Walberg.'),
(2, 'Chantry Island - Aerial View 1', 'chantry_island_aeiral_1.jpg', 'chantry_island_aeiral_1_thumb.jpg', 'chantry_island_aeiral_1_mobile.jpg', 'A gorgeous view of Chantry Island.'),
(3, 'Chantry Island', 'chantry_island_1.jpg', 'chantry_island_1_thumb.jpg', 'chantry_island_1_mobile.jpg', 'Another aerial view of Chantry Island. Photo by James Swartz.'),
(4, 'Peerless II', 'peerless_II_web.jpg', 'peerless_II_web_thumb.jpg', 'peerless_II_web_mobile.jpg', 'The New Tour Boat. Photo by Wayne MacDonald.'),
(5, 'Chantry Island 3', 'chantry_island_3.jpg', 'chantry_island_3_thumb.jpg', 'chantry_island_3_mobile.jpg', 'Aerial view of Chantry Island and the Saugeen River mouth in Southhampton, Ontario. Photo by Karen Smith.'),
(6, 'Chantry Island Bedroom', 'bedroom1.jpg', 'bedroom1_thumb.jpg', 'bedroom1_mobile.jpg', 'Inside Light Keeper\'s Cottage. Photo by George Plant.'),
(7, 'Chantry Island Flowers', 'chantry_flowers.jpg', 'chantry_flowers_thumb.jpg', 'chantry_flowers_mobile.jpg', 'Chantry Island Gardens. Photo by Donna Savoy.'),
(8, 'Chantry Island Sunset', 'chantry_sunset.jpg', 'chantry_sunset_thumb.jpg', 'chantry_sunset_mobile.jpg', 'A beautiful sunset at Chantry Island. Photo by Terry Thomas.'),
(9, 'Chantry Island Tour Base', 'chantry_island_tour.jpg', 'chantry_island_tour_thumb.jpg', 'chantry_island_tour_mobile.jpg', 'The tour base for Chantry Island. Photo by Vicki Tomori'),
(10, 'Chantry Island Birds', 'chantry_birds1.jpg', 'chantry_birds1_thumb.jpg', 'chantry_birds1_mobile.jpg', 'Enjoy the beautiful wild life at Chantry Island. Photo by Carol Walberg.'),
(11, 'Peerless II Portrait', 'peerless_II_boat_tour.jpg', 'peerless_II_boat_tour_thumb.jpg', 'peerless_II_boat_tour_mobile.jpg', 'The Peerless II Boat we gives tours on.'),
(12, 'Chantry Island 2', 'chantry_island_2.jpg', 'chantry_island_2_thumb.jpg', 'chantry_island_2_mobile.jpg', 'A aerial view of Chantry Island. Photo by Karen Smith.'),
(13, 'Saugeen River', 'saugeen_river1.jpg', 'saugeen_river1_thumb.jpg', 'saugeen_river1_mobile.jpg', 'An aerial view of the Saugeen river.'),
(14, 'Chantry Island Birds 2', 'chantry_birds2.jpg', 'chantry_birds2_thumb.jpg', 'chantry_birds2_mobile.jpg', 'A photo of Chantry Island\'s wild life. Photo by Carol Walberg.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table tbl_imgs
--
ALTER TABLE tbl_imgs
  ADD PRIMARY KEY (img_id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table tbl_imgs
--
ALTER TABLE tbl_imgs
  MODIFY img_id smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
