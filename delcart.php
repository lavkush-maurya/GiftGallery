<?php
	error_reporting(0);
	include 'conn.php';
    session_start();
	

	$id=$_GET['id'];
	$query = "delete from cart where id = '$id'";

	$data=mysqli_query($conn,$query);

	if($data)
	{
		echo "<script> alert('Item deleted from cart...');
			window.location.assign('cart.php')
			</script>";
	}
	else
	{
		echo "<script> alert('failed to delete from cart...');
			window.location.assign('cart.php')
			</script>";
	}



?>