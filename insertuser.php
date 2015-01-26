<?php

include 'config.php';


$user= $_POST['user'];
$nam= $_POST['nam'];
$age= $_POST['age'];
$gender = 'male';

mysql_query("INSERT INTO user 
			VALUES(NULL ,'$user','$nam','$age','$gender')") or die('Error: '.mysql_error());
/*
$sql="INSERT INTO user ('user','nam','age','gender')
			VALUES($user,
							  '$_POST[nam]', 
							  '$_POST[age]',
							   $gender)";
								  
if (!mysql_query($sql))
  {
  die('Error: '.mysql_error());
  }
*/
mysql_close($con);

?>