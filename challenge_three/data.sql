
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS `nordech_challenge`.`data` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `web_page` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `domain` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

INSERT INTO `nordech_challenge`.`data` (`id`, `web_page`, `country`, `domain`, `name`) VALUES
(1, "http://www.mga.edu/", "USA", "mga.edu", "Middle Georgia State College")

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
