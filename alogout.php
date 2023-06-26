
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="fav/4.png">
	<title>LOGOUT</title>
	<style type="text/css">
		input{
			border: none;
			padding: 5px 40px;
			border-radius: 2px;
			font-size: 20px;
			text-decoration: none;
			margin: 0px 20px;
			color: white;
			background: red;
			font-family: serif;
			cursor: pointer;
		}
		.uu{
			height: 400px;
			background: #f1f3f6;
			width: 600px;
			padding-top: 80px;
			margin-top: 100px;
			border: 1px solid silver;
			box-shadow: 0px 0px 10px 1px silver;
		}
	</style>
</head>
<body>
	<center>
	<div class="uu">
		<img src="images/logo.png" style="width: 180px;height: 180px;">
		<h1 style="font-size: 30px;">Are you sure you want to log out?</h1>
		<div><form method="post">
			<table>
				<tr>
					<td><input type="submit" name="logot" value="LOGOUT"></td>
					<td><input type="submit" name="nop" value="CANCLE" style="background: blue;"></td>
				</tr>
			</table></form>
		</div>

	</div>
	</center>
</body>
</html>


<?php
error_reporting(0);

if (isset($_POST['logot'])) {

	session_start();
	session_destroy();
	echo "<script> alert('Thank you for visiting...LOGOUT!');window.location.assign('index.php')</script>";
	
}

else if (isset($_POST['nop'])) {
	

	header('location:adash.php');
	
}

?>
