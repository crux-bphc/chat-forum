<?php

ob_start();
session_start();
include 'connect.inc.php';

$error_msg1="";
$error_msg2="";
$error_msg3="";
$error_msg4="";

function get_data($id)
{
	$query = "SELECT * FROM sale_items WHERE id = $id ";
	if($query_run = mysql_query($query))
	{
		echo $name = mysql_result($query_run, 0, 'product name')."<br>";
		echo $phonenumber = mysql_result($query_run, 0, 'Phone Number');
	}
	else
	{
		die(mysql_error());
	}
}

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
	$query = "SELECT `$field` FROM `user_data` WHERE `id` = '". $_SESSION['user_id']. "' ";
	if($query_run = mysql_query($query))
	{
		if($query_result = mysql_result($query_run, 0, $field))
		{
			return $query_result;
		}

	}
}

?>