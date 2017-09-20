<?php

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';

$mysql_database = 'users';

if(!mysql_connect($mysql_host, $mysql_user, $mysql_pass) || !mysql_select_db($mysql_database))
{
	die(mysql_error());
}

?>