


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
	
	$sql = "DELETE FROM cart WHERE uid ='$id' ";	

	if(!mysqli_query($con,$sql))
			{
				echo 'course didnot added';
			}
	else{
				header("location:index.html");
			}
?>