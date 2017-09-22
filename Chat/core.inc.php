<?php

ob_start();
session_start();

include ('../schema/create.php');
include ('../config/connect.inc.php');

$error_msg1="";
$error_msg2="";
$error_msg3="";
$error_msg4="";

function loggedin()
{
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function getfield($field)
{
	$connect = mysqli_connect("localhost","root","");

	$query = "SELECT `$field` FROM `users`.`user_data` WHERE `id` = '". $_SESSION['user_id']. "' ";
	if($query_run = mysqli_query($connect,$query))
	{
		$row = mysqli_fetch_row($query_run);
		if($query_result = $row[0])
		{
			return $query_result;
		}

	}
}

?>