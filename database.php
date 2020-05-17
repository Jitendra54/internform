<?php

	
	$hostname = 'localhost';
	$username = 'id13734394_root';
	$password = 'Midoriya@123';
	$database ='id13734394_login';

$conn = mysqli_connect(	$hostname,	$username,	$password,$database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else 
echo"connected sucessfully";


?>