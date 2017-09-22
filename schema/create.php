<?php 

	$var = mysqli_connect("localhost", "root", "");

	$database = "CREATE DATABASE IF NOT EXISTS `users`";
	mysqli_query($var,$database);

	$message = "CREATE TABLE IF NOT EXISTS `users`.`messages` (
				  `id` int(11) NOT NULL AUTO_INCREMENT primary key NOT NULL,
				  `user_name` varchar(40),
				  `message` text
				) ENGINE=InnoDB DEFAULT CHARSET=latin1 ";



	$user_data = "CREATE TABLE IF NOT EXISTS `users`.`user_data` (
				  `id` int(11) AUTO_INCREMENT primary key NOT NULL,
				  `user_name` varchar(30),
				  `password` varchar(32),
				  `first_name` varchar(40),
				  `last_name` varchar(40),
				  `email_id` varchar(40)
				) ENGINE=InnoDB DEFAULT CHARSET=latin1 ";

	mysqli_query($var,$message) or die(mysqli_error($var));
	mysqli_query($var,$user_data);
?>

