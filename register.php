<?php
	$uname=$_POST["uname"];
	$emailid=$_POST["emailid"] ;
	$password=$_POST["pwd"];
	$conn=mysqli_connect("localhost","root","","onlinebuilder");
	
	if($conn)
		echo "<br>Connection sucessful";
	else
		echo "<br>Connection failed";
	
	$q1="insert into users values('$uname','$emailid','$password');";
	$queryres=mysqli_query($conn,$q1);
	if($queryres)
	   echo "<br>User registered successfully:";
	else 
	   echo "Error";
 ?>
