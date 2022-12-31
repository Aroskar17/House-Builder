<?php
	$unam=$_POST["uname"];

	$conn=mysqli_connect("localhost","root","","onlinebuilder");
	
	if($conn)
		echo "<br>Connection sucessful";
	else
		echo "<br>Connection failed";
	
	$q1=" delete from users where uname='$unam';";
	$q2=" delete from orders where uname='$unam';";
	$qu=mysqli_query($conn,$q1);
	$qu1=mysqli_query($conn,$q2);
	if($qu)
	   echo "<br>User $unam deleted from users table successfully:";
	else 
	   echo "Error";
	   if($qu1)
	   echo "<br>User $unam deleted from orders table successfully:";
	else 
	   echo "Error";
	
?>
