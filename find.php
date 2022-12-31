<?php
	$unam=$_POST["uname"];
	$conn=mysqli_connect("localhost","root","","onlinebuilder");
	if($conn)
		echo "<br>Connection sucessful";
	else
		echo "<br>Connection failed";
	
	$q1="select * from users where uname='$unam';";
	
	$qu=mysqli_query($conn,$q1);
	
	if($qu){
	   echo "<br>Record found the details are<br>";
	   while ($info = mysqli_fetch_array($qu)) {
        echo "<br>Username:" . $info['uname'];
        echo " <br>Email_ID:" . $info['emailid'];
        echo "<br>Password:" . $info['pwd'];
    }
}
	else 
	   echo "Record not found";
	  
	
?>

