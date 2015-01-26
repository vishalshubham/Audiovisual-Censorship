<?php

	
	$conn = new mysqli('localhost', 'u682170483_hci', 'hci13111998', 'u682170483_hci');

	if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
?>

<?php

	$user	= $_POST['user'];
	$name	= $_POST['name'];
	$pass	= $_POST['password'];
	
	$sql = "INSERT INTO user_details values('$user','$name','$pass','')";
	$query = mysql_query($sql);
	
	if(!$query)
		echo mysql_error();
	else
		echo "successfully inserted";
?>