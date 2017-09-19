<?php

include 'core.inc.php';

if(loggedin())
{
	$user_name = getfield('user_name');
	if(isset($_POST['message']))
	{
		$message = $_POST['message'];
		if(!empty($message))
		{
			$query = "INSERT INTO messages VALUES ('','".mysql_real_escape_string($user_name)."',
												      '".mysql_real_escape_string($message)."')";
			
			if($query_run = mysql_query($query))
			{
				header ('Location: index.php');
			}
			else
			{
				die(mysql_error());
			}
		}
	}

}

if(loggedin())
{ 
	$query = "SELECT * FROM `messages` ";
	if($query_run = mysql_query($query)) 
	{	
?>
		<div id="username">
			<span> <?php echo "USERNAME :".$user_name; ?> </span><br><br>
		</div>
<?php	
		while($row = mysql_fetch_array($query_run))
		{
?>			
		<div id="window">
			<span> <?php echo $row['user_name']." : ".$row['message']; ?> </span>
		</div>

<?php
		}		            
	}
}

?>

<html>
	
<head>
	<link rel="stylesheet" type="text/css" href="indexstyle.css"></link>	
</head>

<body>
	<form action="index.php" method="POST">
		<?php
			if(!(isset($_SESSION['user_id'])) && empty($_SESSION['user_id']))
			{
		?>		
			<a href="loginform.inc.php">LogIn</a>
			<a href="Registrationform.inc.php">SignUp</a>
		<?php }
			else
			{
		?>	
			<input type="text" name="message" placeholder="Type Your Message">
			<input type="submit" name="submit" value="Send"><br><br>	
			<a href="logout.php">LogOut</a>
		<?php
			}
		 ?>
	</form>
</body>

</html>