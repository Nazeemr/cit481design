<?php


// Create connection
$db = mysqli_connect('database-1.cbtgoka7hvmt.us-west-1.rds.amazonaws.com', 'admin', 'password','project');

// Check connection
if (!$db) {
  echo "Connection failed: " . mysqli_connect_error();
} else {

}
?>
