<?php
  $name = $_POST['name'];
  $last_name = $_POST['last_name'];
  $insert = "insert into TABLE_NAME values('$name','$last_name')";// Do Your Insert Query
  if(mysql_query($insert)) {
   echo "Success";
  } else {
   echo "Cannot Insert";
  }
?>