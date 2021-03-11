<?php
	session_start();
	include_once('connect.php');
    if(isset($_SESSION['uid'])){
		$id=$_SESSION['uid'];
	}
	if(!isset($_GET['bid'])){
		echo "not found";
	}
	$bid = $_GET['bid'];
	$sql = "INSERT INTO cart(uid,bid,amount) VALUES('$id','$bid',1)";	
	if(!mysqli_query($con,$sql))
	{
		echo 'course didnot added';
	}
	else{
		header("location:product.php");
	}
?>