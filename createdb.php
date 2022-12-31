<?php
	$con=mysqli_connect("localhost","root","");
	if($con)
		echo "<br>Connection sucessful";
	else
		echo "<br>Connection failed";
	$q1="create database onlinebuilder";
	$qres=mysqli_query($con,$q1);
	if($qres)
		echo "<br>Datbase creation sucessful";
	else
		echo "Datbase creation failed";
	$conn=mysqli_connect("localhost","root","","onlinebuilder");
	$q2="create table orders(uname varchar(20) primary key,houseid varchar(20),dimension varchar(20),price int(10))";
	$q3="create table users(uname varchar(20) unique not null,emailid varchar(20),pwd varchar(20))";
	$qres1=mysqli_query($conn,$q2);
	if($qres1)
		echo "<br>orders table created successfully";
	else
		echo "<br>orders table creation failed";
	$qres2=mysqli_query($conn,$q3);
	if($qres2)
		echo "<br>users table created successfully";
	else
		echo "<br>users table creation failed";
	
?>
