<?php
	$conn=mysqli_connect("localhost","root","","construction");
	if($conn)
		echo "Connected Succesfully";
	else 
		echo "Not connected to database";
	$email=" ER";
	$password="SADTG";
	$q1="SELECT * FROM useres where emailid=$emailid and pwd=$password";
	$res=mysqli_query($conn,$q1);
	
?>
