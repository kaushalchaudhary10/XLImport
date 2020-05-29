DROP TABLE IF EXISTS `employee`;

CREATE TABLE IF NOT EXISTS `employee` (
  `id` varchar(10) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(50) NOT NULL,
  `workingTypeemployee` varchar(50) DEFAULT NULL,
  `start` varchar(6) DEFAULT NULL,
  `end` varchar(6) DEFAULT NULL,
  `storeId` varchar(20) DEFAULT NULL,
  `storeName` varchar(200) DEFAULT NULL
);