
--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL auto_increment,
  `photograph_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `author` varchar(255) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `photograph_id` (`photograph_id`)
) AUTO_INCREMENT=7;

--
-- Dumping data for table `comments`
--
INSERT INTO `comments` VALUES (1,1,'2015-01-01 11:30:39','Kiera','I love this shells!'),(5,5,'2017-09-01 20:46:39','Fyodor','Internal combustion?.'),(6,5,'2009-01-01 21:08:58','Nataliya','stops the moments and gives a chance to take a closer look> cool.');

--
-- Table structure for table `photographs`
--

DROP TABLE IF EXISTS `photographs`;
CREATE TABLE `photographs` (
  `id` int(11) NOT NULL auto_increment,
  `filename` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `caption` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) AUTO_INCREMENT=9;

--
-- Dumping data for table `photographs`
--
INSERT INTO `photographs` VALUES (1,'succotash-1.jpg','image/jpeg',654139,'shells'),(5,'succotash-2.jpg','image/jpeg',732300,'engine'),(4,'succotash-3.jpg','image/jpeg',824209,'friends'),(6,'succotash-4.jpg','image/jpeg',1271736,'bridge'),(7,'succotash-5.jpg','image/jpeg',1068500,'Waterfall'),(8,'succotash-6.jpg','image/jpeg',1231130,'heron');

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) AUTO_INCREMENT=4;

--
-- Dumping data for table `users`
--
INSERT INTO `users` VALUES (1,'andr4776','studio','Andre','Roman','andr4776@gmail.com');
