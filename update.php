<?php
	$unam=$_POST["uname"];
	$emaili=$_POST["emailid"] ;
	$passwor=$_POST["pwd"];
	$conn=mysqli_connect("localhost","root","","onlinebuilder");
	if($conn)
		echo "<br>Connection sucessful";
	else
		echo "<br>Connection failed";
	$q1="update users set pwd='$passwor' where uname='$unam' and emailid ='$emaili' ;";
	$queryres=mysqli_query($conn,$q1);
	if($queryres)
	   {
		   echo "<br>User email and password changed successfully:";
		   echo "<br>New email=$emaili and new password=$passwor";
	   }
	else 
	   echo "Error";
	
?>
