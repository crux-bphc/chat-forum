<?php
  include("database.php");

$id=$_POST['id'];
 
// Find highest answer number. 
$sql="SELECT MAX(a_id) AS Maxa_id FROM fanswer WHERE question_id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
// add + 1 to highest answer number and keep it in variable name "$Max_id". if there no answer yet set it = 1 
if ($rows) {
$Max_id = $rows['Maxa_id']+1;
}
else {
$Max_id = 1;
}
 
// get values that sent from form 
$a_name=$_POST['a_name'];
$a_email=$_POST['a_email'];
$a_answer=$_POST['a_answer']; 
 
$datetime=date("d/m/y H:i:s"); // create date and time
 
// Insert answer 
$sql2="INSERT INTO fanswer(question_id, a_id, a_name, a_email, a_answer, a_datetime)VALUES('$id', '$Max_id', '$a_name', '$a_email', '$a_answer', '$datetime')";
$result2=mysql_query($sql2);
 
if($result2){
echo "Successful<BR>";
echo "<a href='view_topic.php?id=".$id."'>View your answer</a>";
 
// If added new answer, add value +1 in reply column 
$tbl_name2="fquestions";
$sql3="UPDATE $tbl_name2 SET reply='$Max_id' WHERE id='$id'";
$result3=mysql_query($sql3);
}
else {
echo "ERROR";
}
 
// Close connection
mysql_close();
?>
