<?php 
	include("database.php");
	extract($_POST);
	$topic=$_POST['topic'];
	$detail=$_POST['detail'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	
	$datetime=date("d/m/y h:i:s");

	$sql="INSERT INTO fquestions(topic, detail, name, email, datetime) VALUES ('$topic', '$detail', '$name', '$email', '$datetime')";
	$result=mysql_query($sql);
 
	if($result){
		echo "Successful<BR>";
		echo "<a href=index.php>View your topic</a>";
	}
	else {
		echo "ERROR";
	}
	mysql_close();


?>