<?php
	$dbconn = mysqli_connect("localhost", "root", "airbac", "rdc");
	
	if (mysqli_connect_errno()){
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>