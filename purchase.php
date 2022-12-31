<?php
	$uname=$_POST['uname'];
	$password=$_POST['pwd'] ;
	$houseid=$_POST['hid'];
	$dimension=$_POST['dim'];
	$price=$_POST['price'];
	$conn=mysqli_connect("localhost","root","","onlinebuilder");
	
	if($conn)
		echo "";
	else  
		die("Disconnected:");

	$q1="insert into orders values('$uname','$houseid','$dimension',$price);";
	$queryres=mysqli_query($conn,$q1);
	if($queryres)
	   echo "<br>Purchased successfully:";
	else 
	   echo "Error";

?>

