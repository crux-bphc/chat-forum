<?php

include 'core.inc.php';
include_once ('../config/connect.inc.php');

$var = mysqli_connect("localhost", "root", "");

if(loggedin())
{
	$user_name = getfield('user_name');
	if(isset($_POST['message']))
	{
		$message = mysqli_real_escape_string($var,$_POST['message']);
		if(!empty($message))
		{
			$query = "INSERT INTO `users`.`messages` VALUES ('','".mysqli_real_escape_string($var,$user_name)."',
												                '".mysqli_real_escape_string($var,$message)."')";
			
			if($query_run = mysqli_query($var,$query))
			{
				header ('Location: index.php');
			}
			else
			{
				die(mysqli_error($var));
			}
		}
	}

}
?>

<html>
	<head>
		<link type="text/css" rel="stylesheet" href="message.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>		
	</head>

	<body>
	<div class="container">
		<div class="row">	
			<div class="col-md-offset-4 col-md-4">	
					<?php
						if(loggedin())
						{ 
							$query = "SELECT * FROM `users`.`messages` ";
							if($query_run = mysqli_query($var,$query)) 
							{	
						?>
						<div id="username">
							<span> <?php echo "USERNAME :".$user_name; ?> </span><br><br>
						</div>
						<div id="message_box">
							<?php	
								while($row = mysqli_fetch_array($query_run))
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
				</div>
				<form action="index.php" method="POST">
				<?php
					if(!(isset($_SESSION['user_id'])) && empty($_SESSION['user_id']))
					{
				?>		
						<br>
					<div id="gap">
						<p>You need to Log In first to be able to use the Chat Room</p>
						<a href="loginform.inc.php">LogIn</a>
						<a href="Registrationform.inc.php">SignUp</a>
					</div>
				<?php }
					else
					{
				?>	
						<input class="form" type="text" name="message" placeholder="Type Your Message">
						<input class="fomr" type="submit" name="submit" value="Send"><br><br>	
						<p id="color"><a id="logout" href="logout.php">LogOut</a></p>
				<?php
					}
		 		?>
		 		</form>
		 	</div>	
		</div>
	</div>		
</body>

</html>