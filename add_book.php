<?php
	session_start();
	include_once "connect.php";
    if(isset($_POST['submit'])){
		$str = "INSERT INTO books (bookname, catagory, author,  price ) VALUES
		('" . $_POST["name"] . "', '" . $_POST["catagory"] ."' , '" . $_POST["author"] . "', '" . ($_POST["price"]) . "')";
		$result=mysqli_query($con,$str);
		if(!empty($result)) {
			$error_message = "";
			$success_message = "You have entered a book successfully!";	
			unset($_POST);
			header("Location: admin_home.php");
		} else {
			echo "not done not dones";
			$error_message = "Problem in adding book. Try Again!";	
		}
	}	
?>
