<?php

include 'core.inc.php';

if(isset($_POST['username']) && isset($_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	if( !empty($username) && !empty($password))
	{
		$query = "SELECT `id` FROM `user_data` WHERE `user_name` = '$username' && `password` = '$password'";
		if($query_run = mysql_query($query))
		{
			$query_num_rows = mysql_num_rows($query_run);
			if($query_num_rows == 0)
			{
				$error_msg1 = 'Invalid username or password';
			}
			else if($query_num_rows == 1)
			{
				$user_id = mysql_result($query_run, 0, 'id');
				$_SESSION['user_id'] = $user_id;
				header('Location: index.php');
			}
		}
	}
	else
	{
		$error_msg2 = 'please enter username and password';
	}
}

?>

<html>
	<head>
		<link type="text/css" rel="stylesheet" href="style.css.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>		
	</head>

	<body>
	<div class="container">
		<div class="row">	
			<div class="col-md-offset-4 col-md-4">	
				<h1>
					Log In
				</h1><br><br>
				<div id="login">
					<form class="form" action="loginform.inc.php" method="POST">
						<em>Username : </em><input type="text" name="username" placeholder="Enter User Name"><br><br>
						<em>Password : </em><input type="password" name="password" placeholder="Enter Your password"><br><br>
						<div id="button"><input type="submit" value="Log In"><br></div>
						<p>
						<?php
						if(!empty($error_msg1) || !empty($error_msg2))
						{
							echo '! '.$error_msg1.$error_msg2;
						}
						?>
						</p>
					</form>
				</div>
			</div>		
		</div>
	</div>	
	</body>
</html>