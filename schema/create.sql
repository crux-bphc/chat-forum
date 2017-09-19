
CREATE DATABASE IF NOT EXISTS `users`;

CREATE TABLE IF NOT EXISTS `columns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(40),
  `message` text,
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS `user_data` (
  `id` int(11) AUTO_INCREMENT,
  `user_name` varchar(30),
  `password` varchar(32),
  `first_name` varchar(40),
  `last_name` varchar(40),
  `email_id` varchar(40),
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


