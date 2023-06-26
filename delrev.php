<?php
	error_reporting(0);
	include 'conn.php';
    session_start();
	$pid=$_GET['pid'];
	$id=$_GET['id'];
	$mails = $_SESSION['email'];

	$query = "delete from review where id = '$id' AND email = '$mails'";

	$data=mysqli_query($conn,$query);

	if($data)
	{
		echo "<script> alert('review deleted...');
			window.location.assign('prod.php?id=$pid')
			</script>";
	}
	else
	{
		echo "<script> alert('cannot delete others review...');
			window.location.assign('prod.php?id=$pid')
			</script>";
	}



?>