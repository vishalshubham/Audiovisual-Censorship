<?php
$con = mysql_connect('localhost','root','mypass'); 
if (!$con) 
{ 
	die('Could not connect heree:'.mysql_error()); 
} 

mysql_select_db("hci", $con);

?>