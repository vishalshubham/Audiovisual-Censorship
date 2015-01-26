<?php
	$conn = mysql_connect("localhost","u682170483_hci","hci13111998");
	$db = mysql_select_db("u682170483_hci",$conn);
?>

<?php

	$user	= $_POST['user'];
	$name	= $_POST['name'];
	$pass	= $_POST['password'];
	
	$sql = "INSERT INTO user_details values('$user','$name','$password','')";
	$query = mysql_query($sql);
	
	if(!$query)
		echo mysql_error();
	else
		echo "successfully inserted";
?>