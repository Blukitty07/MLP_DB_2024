-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: cooperg3723_L2_MLP
-- ------------------------------------------------------
-- Server version 	8.0.43-0ubuntu0.22.04.1
-- Date: Mon, 15 Sep 2025 23:33:11 +0000

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40101 SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `category`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `Category_ID` int NOT NULL AUTO_INCREMENT,
  `Catergory` varchar(28) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Category_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `category` VALUES (1,'Apple Family'),(2,'Cake Family'),(3,'Cutie Mark Crusaders'),(4,'Dragons'),(5,'Fan Favorites'),(6,'Generation 1'),(7,'Generation 4'),(9,'Generation 5'),(10,'Griffons'),(11,'Hippogriffs'),(12,'Hippogriffs/Seaponies'),(13,'Non Pony Characters'),(14,'Pie Family'),(15,'Pillars of Old Equestria'),(16,'Ponyville Residents'),(17,'Power Ponies'),(18,'Rich Family'),(19,'Royalty'),(20,'School Age Ponies'),(21,'Shy Family'),(22,'Storm Creatures'),(23,'Supporting Characters'),(24,'Villains'),(25,'Wonderbolts'),(26,'Young Six');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `category` with 25 row(s)
--

--
-- Table structure for table `colours`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colours` (
  `Colour_ID` int NOT NULL AUTO_INCREMENT,
  `Colour` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Colour_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colours`
--

LOCK TABLES `colours` WRITE;
/*!40000 ALTER TABLE `colours` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `colours` VALUES (1,'none'),(2,'Black'),(3,'Black (plus)'),(4,'Blonde'),(5,'Blue'),(6,'Blue (plus)'),(7,'Brown'),(8,'Brown (plus)'),(9,'Coral'),(10,'Cream'),(11,'Cyan'),(12,'Dark'),(13,'Dark Blue'),(14,'Dark Brown'),(15,'Dark Green'),(16,'Dark Purple'),(17,'Gray'),(18,'Gray (plus)'),(19,'Green'),(20,'Honeydew (plus)'),(21,'Lavender'),(22,'Light Blue'),(23,'Light Blue (plus)'),(24,'Light Brown'),(25,'Light Gray'),(26,'Light Green'),(27,'Light Magenta'),(28,'Light Orange'),(29,'Light Pink'),(30,'Light Purple'),(31,'Light Purple (plus)'),(32,'Light Yellow'),(33,'Lime'),(34,'Magenta'),(35,'Mint'),(36,'Mismatched'),(37,'Orange'),(38,'Orange (plus)'),(39,'Pale Aqua'),(40,'Pale Green'),(41,'Pale Magenta'),(42,'Pale Orange'),(43,'Pale Yellow'),(44,'Pastel Rainbow'),(45,'Pink'),(46,'Pink (plus)'),(47,'Purple'),(48,'Rainbow'),(49,'Red'),(50,'Red (plus)'),(51,'Tan'),(52,'White'),(53,'White (plus)'),(54,'White Striped'),(55,'Yellow'),(56,'Yellow (plus)');
/*!40000 ALTER TABLE `colours` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `colours` with 56 row(s)
--

--
-- Table structure for table `ponies`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ponies` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `pony_name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `non_pony` tinyint(1) NOT NULL,
  `main_character` tinyint(1) NOT NULL,
  `Category_ID` int NOT NULL,
  `mane_colour1_ID` int NOT NULL,
  `mane_colour2_ID` int NOT NULL,
  `body_colour1_ID` int NOT NULL,
  `body_colour2_ID` int NOT NULL,
  `Residence_ID` int NOT NULL,
  `Description` varchar(92) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ponies`
--

LOCK TABLES `ponies` WRITE;
/*!40000 ALTER TABLE `ponies` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `ponies` VALUES (1,'Applejack',0,1,7,4,1,37,1,29,'Hardworking and honest earth pony who works at Sweet Apple Acres.'),(2,'Big McIntosh',0,0,23,37,55,49,1,29,'Applejack\'s strong and quiet brother.'),(3,'Derpy Hooves',0,0,5,55,1,17,1,23,'A clumsy pegasus with crossed eyes.'),(4,'Discord',1,0,24,36,1,36,1,7,'Spirit of chaos and disharmony.'),(5,'Fluttershy',0,1,7,45,1,55,1,23,'A shy and kind pegasus who loves animals.'),(6,'Granny Smith',0,0,23,52,17,26,1,29,'Elderly and wise grandmother of the Apple family.'),(7,'Hitch Trailblazer',0,1,9,4,1,28,1,15,'The responsible and brave sheriff of Maretime Bay.'),(8,'Izzy Moonbow',0,1,9,5,47,21,1,3,'A unicorn with a creative spirit and a knack for crafting.'),(9,'King Sombra',0,0,24,2,49,17,12,9,'Shadowy tyrant of the Crystal Empire.'),(10,'Pinkie Pie',0,1,7,45,1,45,1,23,'An energetic and cheerful earth pony who loves to throw parties.'),(11,'Pipp Petals',0,1,9,47,1,45,1,33,'A pegasus pop star and influencer who loves to sing.'),(12,'Princess Cadance',0,0,19,45,56,45,1,9,'Princess of love and ruler of the Crystal Empire.'),(13,'Princess Celestia',0,0,19,44,1,52,1,4,'Ruler of Equestria who raises the sun.'),(14,'Princess Luna',0,0,19,5,1,5,1,4,'Celestia\'s sister who raises the moon.'),(15,'Queen Chrysalis',1,0,24,5,19,2,1,6,'Leader of the changelings.'),(16,'Rainbow Dash',0,1,7,48,1,5,1,23,'A loyal and competitive pegasus who loves to fly fast.'),(17,'Rarity',0,1,7,47,1,52,1,23,'A generous and fashion-loving unicorn who runs a boutique.'),(18,'Shining Armor',0,0,23,5,52,52,1,9,'Twilight Sparkle\'s brother and captain of the Royal Guard.'),(19,'Spike',1,1,7,19,1,47,1,23,'A baby dragon and Twilight Sparkle\'s loyal assistant.'),(20,'Starlight Glimmer',0,1,7,47,39,41,1,23,'A reformed villain who becomes a powerful unicorn and friend.'),(21,'Sunny Starscout',0,1,9,9,1,37,1,15,'An adventurous and idealistic earth pony who believes in bringing back harmony to Equestria.'),(22,'Sunset Shimmer',0,1,7,49,55,37,1,5,'Former student of Princess Celestia who finds redemption.'),(23,'Tirek',1,0,24,49,2,49,2,30,'A powerful centaur who steals magic.'),(24,'Twilight Sparkle',0,1,7,47,1,47,1,23,'A studious and magically talented unicorn, later becomes an alicorn princess.'),(25,'Zecora',1,0,23,2,54,17,1,12,'A wise and mystical zebra who lives in the Everfree Forest.'),(26,'Zipp Storm',0,1,9,52,1,52,1,33,'A rebellious and athletic pegasus princess who loves flying and discovering the truth.'),(27,'Apple Bloom',0,0,3,49,1,55,1,29,'Applejack\'s younger sister and a member of the Cutie Mark Crusaders.'),(28,'Sweetie Belle',0,0,3,47,52,52,1,23,'Rarity\'s younger sister and a member of the Cutie Mark Crusaders.'),(29,'Scootaloo',0,0,3,47,1,37,1,23,'A pegasus filly and member of the Cutie Mark Crusaders.'),(30,'Babs Seed',0,0,3,45,49,24,1,14,'Apple Bloom\'s cousin and a member of the Cutie Mark Crusaders.'),(31,'Gabby',1,0,3,2,52,17,1,13,'A griffon and honorary member of the Cutie Mark Crusaders.'),(32,'Braeburn',0,0,1,55,1,32,1,1,'Applejack\'s cousin from Appleloosa.'),(33,'Bright Mac',0,0,1,37,1,55,1,29,'Applejack\'s father.'),(34,'Pear Butter',0,0,1,37,1,43,1,29,'Applejack\'s mother.'),(35,'Goldie Delicious',0,0,1,17,1,32,1,27,'Aunt of the Apple siblings, known for her love of cats.'),(36,'Uncle Orange',0,0,1,5,1,37,1,14,'Applejack\'s uncle from Manehattan.'),(37,'Aunt Orange',0,0,1,19,55,37,1,14,'Applejack\'s aunt from Manehattan.'),(38,'Hayseed Turnip Truck',0,0,1,7,1,55,1,23,'Cousin of the Apple siblings, lives in Ponyville.'),(39,'Apple Strudel',0,0,1,17,1,32,1,1,'Elderly cousin of the Apple siblings.'),(40,'Apple Rose',0,0,1,52,17,45,1,29,'Elderly relative of the Apple siblings.'),(41,'Maud Pie',0,0,14,17,47,17,1,24,'Pinkie Pie\'s stoic sister who loves rocks.'),(42,'Limestone Pie',0,0,14,33,40,17,1,24,'Pinkie Pie\'s grumpy sister.'),(43,'Marble Pie',0,0,14,17,1,25,1,24,'Pinkie Pie\'s shy and quiet sister.'),(44,'Igneous Rock Pie',0,0,14,17,1,7,1,24,'Pinkie Pie\'s father.'),(45,'Cloudy Quartz',0,0,14,17,47,17,1,24,'Pinkie Pie\'s mother.'),(46,'Zephyr Breeze',0,0,21,45,1,22,1,8,'Fluttershy\'s lazy and egotistical brother.'),(47,'Mr. Shy',0,0,21,45,52,32,1,8,'Fluttershy\'s supportive father.'),(48,'Mrs. Shy',0,0,21,45,52,32,1,8,'Fluttershy\'s gentle mother.'),(49,'Mr. Carrot Cake',0,0,2,37,55,55,1,23,'Owner of Sugarcube Corner and Pinkie Pie\'s employer.'),(50,'Mrs. Cup Cake',0,0,2,45,52,5,1,23,'The Owner of Sugarcube Corner and Pinkie Pie\'s employer.'),(51,'Pound Cake',0,0,2,7,1,55,1,23,'Mr. and Mrs. Cake\'s pegasus son.'),(52,'Pumpkin Cake',0,0,2,37,1,55,1,23,'Mr. and Mrs. Cake\'s unicorn daughter.'),(53,'Sandbar',0,0,26,26,52,26,1,25,'A friendly and laid-back earth pony student.'),(54,'Gallus',1,0,26,5,1,5,1,13,'A griffon student who is initially aloof but becomes loyal.'),(55,'Yona',1,0,26,7,1,14,1,32,'A yak student who is strong and confident.'),(56,'Smolder',1,0,26,37,55,37,1,10,'A dragon student who is tough but caring.'),(57,'Silverstream',1,0,26,45,1,29,1,18,'A hippogriff student who is curious and enthusiastic.'),(58,'Ocellus',1,0,26,5,1,22,1,6,'A changeling student who is shy and intelligent.'),(59,'Diamond Tiara',0,0,18,47,45,45,1,23,'Filthy Rich\'s daughter who starts as a bully but reforms.'),(60,'Silver Spoon',0,0,20,17,1,25,1,23,'Diamond Tiara\'s best friend and fellow former bully.'),(61,'Snips',0,0,20,37,1,22,1,23,'An excitable unicorn colt who is friends with Snails.'),(62,'Snails',0,0,20,19,37,55,1,23,'A slow-witted but good-natured unicorn colt.'),(63,'Twist',0,0,20,49,52,32,1,23,'A friendly earth pony filly with a love of candy.'),(64,'Pipsqueak',0,0,20,7,1,52,24,23,'A small but brave colt with a British accent.'),(65,'Button Mash',0,0,20,7,1,24,1,23,'A young colt who loves playing video games.'),(66,'Filthy Rich',0,0,18,2,1,24,1,23,'A wealthy business pony and father of Diamond Tiara.'),(67,'Cheerilee',0,0,16,45,1,29,1,23,'A kind and patient schoolteacher in Ponyville.'),(68,'Mayor Mare',0,0,16,52,17,51,1,23,'The dedicated mayor of Ponyville.'),(69,'Doctor Whooves',0,0,16,14,1,51,1,23,'A pony with a mysterious past, inspired by Doctor Who.'),(70,'Bon Bon',0,0,16,45,6,10,1,23,'A candy maker with a secret agent past.'),(71,'Lyra Heartstrings',0,0,16,52,5,26,1,23,'A unicorn with a fascination for humans.'),(72,'Vinyl Scratch',0,0,16,5,22,52,1,23,'A DJ and music lover known for her electronic beats.'),(73,'Octavia Melody',0,0,16,2,17,17,1,23,'A classical musician who plays the cello.'),(74,'Spitfire',0,0,25,37,1,55,1,8,'Captain of the Wonderbolts.'),(75,'Soarin',0,0,25,13,22,22,1,8,'A skilled flyer and member of the Wonderbolts.'),(76,'Fleetfoot',0,0,25,52,11,52,1,8,'A swift and agile member of the Wonderbolts.'),(77,'Mistress Mare-velous',0,0,17,16,52,32,1,16,'Leader of the Power Ponies, inspired by Wonder Woman.'),(78,'Saddle Rager',0,0,17,45,19,55,34,16,'A shy pony who transforms into a powerful monster when angry.'),(79,'Radiance',0,0,17,45,47,52,34,16,'A unicorn with the power to create energy constructs.'),(80,'Zapp',0,0,17,52,22,5,34,16,'A pegasus with the power to control weather.'),(81,'Fili-Second',0,0,17,45,52,52,45,16,'A speedy pony who can move at incredible speeds.'),(82,'Matter-Horn',0,0,17,47,52,30,1,16,'A powerful unicorn with ice powers.'),(83,'Humdrum',0,0,17,5,50,30,1,16,'A young dragon who assists the Power Ponies.'),(84,'Princess Skystar',1,0,12,47,22,32,34,18,'Princess of the hippogriffs who loves adventure.'),(85,'Silverstream',1,0,12,45,1,29,35,18,'A hippogriff who attends the School of Friendship.'),(86,'Terramar',1,0,12,47,23,25,1,18,'Silverstream\'s brother who is torn between land and sea.'),(87,'Sky Beak',1,0,12,45,1,25,35,18,'Father of Silverstream and Terramar.'),(88,'Ocean Flow',1,0,12,55,27,22,32,26,'Mother of Silverstream and Terramar.'),(89,'Novo',1,0,12,47,55,27,32,26,'Queen of the hippogriffs and seaponies.'),(90,'Grampa Gruff',1,0,10,52,18,7,55,13,'An elderly griffon with a grumpy demeanor.'),(91,'Gilda',1,0,10,52,23,55,8,13,'A griffon who is Rainbow Dash\'s former friend.'),(92,'Gabby',1,0,10,2,53,17,1,13,'A friendly and enthusiastic griffon who becomes an honorary Cutie Mark Crusader.'),(93,'Gustave le Grand',1,0,10,7,3,52,8,13,'A griffon chef who competes in baking contests.'),(94,'Greta',1,0,10,55,38,7,56,13,'A griffon who is friends with Gabby and Gilda.'),(95,'General Seaspray',1,0,11,5,18,25,52,18,'A loyal and brave general of the hippogriffs.'),(96,'Grubber',1,0,22,17,53,17,52,28,'An assistant to the Storm King, known for his mischievous personality.'),(97,'Storm King',1,0,24,52,23,52,23,28,'A powerful and tyrannical ruler who seeks to conquer Equestria.'),(98,'Tempest Shadow',1,0,24,16,46,16,30,28,'A unicorn with a broken horn who serves the Storm King before finding redemption.'),(99,'Rockhoof',0,0,15,32,1,24,1,19,'A heroic earth pony known for his immense strength.'),(100,'Mistmane',0,0,15,13,47,22,35,20,'A wise unicorn known for her beauty and sacrifice.'),(101,'Flash Magnus',0,0,15,37,55,32,1,8,'A brave pegasus who serves in the Royal Legion.'),(102,'Meadowbrook',0,0,15,47,1,22,20,23,'A healer earth pony who is known for her medical expertise.'),(103,'Somnambula',0,0,15,52,31,28,1,11,'A pegasus known for her hope and resilience.'),(104,'Star Swirl the Bearded',0,0,15,52,23,25,1,11,'A powerful unicorn wizard and mentor to Princess Celestia and Princess Luna.'),(105,'Shadow Lock',0,0,23,2,22,22,25,31,'A unicorn with a mysterious past who seeks knowledge.'),(106,'Luster Dawn',0,0,7,45,55,42,32,4,'A talented unicorn and student of Twilight Sparkle.'),(107,'Firefly',0,0,6,45,1,22,1,22,'A brave and adventurous pegasus who is the inspiration for Rainbow Dash.'),(108,'Wind Whistler',0,0,6,5,1,22,1,22,'A calm and logical pegasus known for her intelligence.'),(109,'Paradise',0,0,6,52,49,52,1,22,'A pegasus who loves to tell stories and share knowledge.'),(110,'Ember',1,0,4,5,1,22,55,10,'Dragon Lord and friend of Spike.'),(111,'Torch',1,0,4,49,56,49,56,10,'Former Dragon Lord and father of Ember.'),(112,'Sludge',1,0,4,15,38,15,37,10,'A lazy and deceitful dragon who claims to be Spike\'s father.'),(113,'Garble',1,0,4,49,55,49,1,10,'A teenage dragon bully who becomes a poet.'),(114,'Crackle',1,0,4,49,56,15,1,10,'A dragon known for her unusual appearance.'),(115,'Smolder',1,0,4,37,55,37,1,10,'A tough but caring dragon who attends the School of Friendship.'),(116,'Scorpan',1,0,13,24,14,24,52,17,'A gargoyle who befriends ponies and betrays his brother Tirek.'),(117,'Prince Rutherford',1,0,13,24,18,24,17,32,'Leader of the yaks, known for his strong and stubborn personality.'),(118,'Seabreeze',1,0,13,5,3,5,1,2,'A breezie who leads his people through Equestria.');
/*!40000 ALTER TABLE `ponies` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `ponies` with 118 row(s)
--

--
-- Table structure for table `residence`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `residence` (
  `Residence_ID` int NOT NULL AUTO_INCREMENT,
  `Residence` varchar(27) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Residence_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `residence`
--

LOCK TABLES `residence` WRITE;
/*!40000 ALTER TABLE `residence` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `residence` VALUES (1,'Appleloosa'),(2,'Breezie World'),(3,'Bridlewood'),(4,'Canterlot'),(5,'Canterlot High School'),(6,'Changeling Kingdom'),(7,'Chaosville'),(8,'Cloudsdale'),(9,'Crystal Empire'),(10,'Dragon Lands'),(11,'Equestria'),(12,'Everfree Forest'),(13,'Griffonstone'),(14,'Manehattan'),(15,'Maretime Bay'),(16,'Maretropolis'),(17,'Midnight Castle'),(18,'Mount Aris'),(19,'Mystical Meadow'),(20,'Orchid Valley'),(22,'Ponyland'),(23,'Ponyville'),(24,'Rock Farm'),(25,'School of Friendship'),(26,'Seaquestria'),(27,'Smith Family Homestead'),(28,'Storm King\'s Lair'),(29,'Sweet Apple Acres'),(30,'Tartarus'),(31,'Unknown'),(32,'Yakyakistan'),(33,'Zephyr Heights');
/*!40000 ALTER TABLE `residence` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `residence` with 32 row(s)
--

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET AUTOCOMMIT=@OLD_AUTOCOMMIT */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Mon, 15 Sep 2025 23:33:11 +0000
