<?php
	$username = $_POST['email'];
	$password = $_POST['password'];
	$con = new mysqli("localhost","root","","gg");
	if($con->connect_error){
		die("Failed to connect : ".$con->connect_error);
	}else{
		$username=stripcslashes($username);
		$password=stripcslashes($password);
		$username=mysqli_real_escape_string($con,$username);
		$password=mysqli_real_escape_string($con,$password);
		$sql="select * from login where email='$username' and password='$password'";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count=mysqli_num_rows($result);
		if($count==1){
			echo "<h1> sucess</h1>";
		}
		else{
			echo "<h1> failed</h1>";
		}
	}
?>