<?php
	session_start();
	include_once "connect.php";
    if(isset($_POST['submit'])){
		$username=$_POST['uid'];
		$password = $_POST['upass'];

		if($username == "admin" && $password == "admin"){
			session_start();
			$_SESSION['uid']=$row['uid'];
			$_SESSION['upass']=$row['upass'];
			header("Location: admin_home.html");
		}
		else{
			echo "Wrong Username or Password";
		}
	}
?>

