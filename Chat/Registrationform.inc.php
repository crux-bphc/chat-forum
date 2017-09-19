<?php

include 'core.inc.php';

if(!loggedin())
{
	if(isset($_POST['username']) &&
		isset($_POST['password']) &&
		isset($_POST['retyped_password']) &&
		isset($_POST['firstname']) &&
		isset($_POST['lastname']) &&
		isset($_POST['email_id']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$retyped_password = $_POST['retyped_password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email_id = $_POST['email_id'];

		if(!empty($_POST['username']) &&
			!empty($_POST['password']) &&
			!empty($_POST['retyped_password']) &&
			!empty($_POST['firstname']) &&
			!empty($_POST['lastname']) &&
			!empty($_POST['email_id']))
		{
			if($password != $retyped_password)
			{
				$error_msg1 = 'passwords donot match';
			}
			else
			{
				$query = " SELECT `id` FROM `user_data` WHERE `user_name` = '$username' ";
				$query_run = mysql_query($query);
				
				if(mysql_num_rows($query_run) == 1)
				{
					$error_msg2 = 'username already exists';
				}
				else
				{
					$query = "INSERT INTO `user_data` VALUES('','".mysql_real_escape_string($username)."',
															    '".mysql_real_escape_string($password)."',
															    '".mysql_real_escape_string($firstname)."',
															    '".mysql_real_escape_string($lastname)."',
															    '".mysql_real_escape_string($email_id)."')  ";
					if($query_run = mysql_query($query))
					{
						header('Location: message.php');
					}
					else
					{
						echo 'there was a problem while registering, please try again later';
					}
				}
			}
		}
		else
		{
			
			$error_msg3 = 'FIll in all the fields';
		}
	}
	

?>

</form>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="style.css.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="ContactUs.js"></script>		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>		
	</head>

	<body>
	<div class="container">
		<div class="row">	
			<div class="col-md-offset-4 col-md-4">	
				<h1>
					Sign Up
				</h1><br><br>
				<form action="<?php echo $current_file; ?>" method="POST">

					Username : <input type="text" name="username" value="<?php if (isset($username)) {echo $username;} ?>"><br><br>
					Password : <input type="password" name="password"><br><br>
					Retype Password : <input type="password" name="retyped_password"><br><br>
					First Name : <input type="text" name="firstname" value="<?php  if (isset($username)) {echo $firstname;} ?>"><br><br>
					Last Name : <input type="text" name="lastname" value="<?php  if (isset($username)) {echo $lastname;} ?>"><br><br>
					Email Id : <input type="text" name="email_id" value="<?php  if (isset($username)) {echo $email_id;} ?>"><br><br>
					<input type="submit" value = "Register"><br>
					<p><?php 
						if(!empty($error_msg1) || !empty($error_msg2) || !empty($error_msg3))
						{
							echo '! '.$error_msg1.$error_msg2.$error_msg3 ;
						} 
						?></p>

			</div>		
		</div>
	</div>	
	</body>
</html>

<?php
}
else if(loggedin())
{
	echo 'Already Registered';
}


?>