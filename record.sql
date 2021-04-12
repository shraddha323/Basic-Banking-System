

DROP TABLE IF EXISTS `record`;


CREATE TABLE `record` (
  `name` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `mobile` varchar(40) DEFAULT NULL,
  `date1` date DEFAULT NULL
) ;



DROP TABLE IF EXISTS `transcation_history`;

CREATE TABLE `transcation_history` (
  `sender` varchar(40) DEFAULT NULL,
  `receiver` varchar(40) DEFAULT NULL,
  `amount` varchar(15) DEFAULT NULL,
  `date2` date DEFAULT NULL
) ;

