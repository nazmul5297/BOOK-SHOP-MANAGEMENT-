<?php
	session_start();
	include_once "connect.php";
    if(isset($_POST['submit'])){
		$username=$_POST['uid'];
		$password = $_POST['upass'];
		$str="SELECT*FROM user WHERE uid='$username' AND upass='$password'";
		$result=mysqli_query($con,$str);
		$row=mysqli_fetch_array($result);

		if($row>0){
			session_start();
			$_SESSION['uid']=$row['uid'];
			$_SESSION['upass']=$row['upass'];
			header("Location: product.php");
		}
		else{
			echo "session did not start";
		}
	}
?>


				

