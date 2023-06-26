<?php
	error_reporting(0);
	include 'conn.php';
    session_start();
	
    $msg = "cancelled";
	$id=$_GET['id'];
	$que = "UPDATE bill SET status='$msg' WHERE id ='$id'";

    $data = mysqli_query($conn,$que);


    if($data)
    {
        echo "<script> alert('order cancelled...');window.location.assign('dashboard.php')</script>";
    } 

    else
    {
        echo "<script> alert('order cannot cancelled');window.location.assign('dashboard.php')</script>";
    }

?>