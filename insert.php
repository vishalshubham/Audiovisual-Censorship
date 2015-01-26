<?php

include 'config.php';

if (!$_POST['nudity'])
{
	$_POST['nudity'] = 'no';
}
if (!$_POST['violence'])
{
	$_POST['violence'] = 'no';
}
if (!$_POST['adult'])
{
	$_POST['adult'] = 'no';
}
if (!$_POST['language'])
{
	$_POST['language'] = 'no';
}

$user = 'no';

echo $user;
/*$sql="INSERT INTO timespan VALUES(NULL, '$_POST[user]', 2, 3,
								  '$_POST[nudity]', 
								  '$_POST[violence]',
								  '$_POST[adult]',
								  '$_POST[language]', 
								  '$_POST[desc]')";*/
mysql_query("INSERT INTO timespan 
				VALUES(NULL, '$user', 2, 4, '$_POST[nudity]', '$_POST[violence]', '$_POST[adult]', '$_POST[language]', '$_POST[desc]')") or die('Error: '.mysql_error());


//$sql="INSERT INTO comments (name, email, comment) VALUES('$_POST[name]','$_POST[email]','$_POST[comment]')";
//$sql="INSERT INTO timespan VALUES('". mysql_real_escape_string($_POST['desc'])."', 2, 3,
//								  '". mysql_real_escape_string($_POST['nudity'])."', 
//								  '". mysql_real_escape_string($_POST['violence'])."',
//								  '". mysql_real_escape_string($_POST['adult'])."',
//								  '". mysql_real_escape_string($_POST['language'])."', 
//								  '". mysql_real_escape_string($_POST['desc'])."')";
//if (!mysql_query($sql))
// {
//  die('Error: '.mysql_error());
//  }
//								  '$_POST[starttime]', 
//								  '$_POST[endtime]',

  
mysql_close($con);

?>