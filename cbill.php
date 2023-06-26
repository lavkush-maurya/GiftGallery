<?php
	include 'conn.php';
    session_start();
    error_reporting(0);
    $id=$_POST['id'];
    $r = $_SESSION['email'];
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<style type="text/css">
				
		.container{
			width: 100%;
			margin-top: 2%;
			margin-bottom: 2%;
		}

		.row{
			border: 1px solid black;
			height: auto;
			width: 1000px;
			margin: auto;
		}

		.border{
			border: 1px solid black;
			height: auto;
			width: 960px;
			margin: 20px 20px 20px 20px;

		}

		.start{
			
			height: auto;
			width: 920px;
			margin: 20px 20px 20px 20px;

		}
		.first{
			background: #fff;
			height: 10%;
			display: inline-flex;
			width: 100%;
		}
		.first .logo img{
			width: 170px;
			height: 142px;
		}
		.first .addres{
			width: 100%;
		}
		.first .addres p{
			margin-left: 10px;
			padding-top: 30px;
		}










		.first .price{
			display: inline-flex;
			width: 550px;
			height: 70px;
			margin: auto;
			
		}
		.first .price .p1{
			
			width: 55%;
		
		}
		.first .price .p1 table{
			width: 100%;
			border-right: none;
		}
		.first .price .p1 p{
			
			margin: 4px;
		}

		.first .price .p2 table{
			width: 100%;
		}
		.first .price .p1 h5{
			font-size: 16px;
			margin: 10px;
		}
		.first .price .p2{
		
			width: 45%;
		}
		.first .price .p2 p{
			
			margin: 4px;
		}
		.first .price .p2 h5{
			font-size: 20px;
			margin: 10px;
		}





		.second{
			background: white;
			height: 4%;
		}

		.second table{
			border: 1px solid black;
			width: 100%;
			text-align: right;
			height: 100%;
		}
		.second table .hh{
			text-align: left;
		}
		.second table th{
			padding-left: 10px;
			background: #ccc;
		}
		.second table td{
			padding-right: 10px;
		}






		.three{
			background: white;
			height: 10%;
			margin-top: 20px;
		}

		.three table{
			border: 1px solid black;
			width: 100%;
			text-align: right;
			height: 100%;
		}
		.three table .hh{
			text-align: left;
		}
		.three table th{
			padding-left: 10px;
			height: 30px;
		}
		.three table td{
			padding-left: 10px;
			height: 100%;
			text-align: left;
		}






		.four{
			background: #fff;
			height: auto;
			margin-top: -2px;
		}

		.four table{
			border: 1px solid black;
			width: 100%;
			text-align: right;
			height: 100%;
		}
		.four table .hh{
			text-align: left;
		}
		.four table th{
			padding-left: 10px;
			height: 30px;
			background: #ccc;
		}
		.four table td{
			padding-left: 10px;
			height: 100%;
			text-align: left;
			margin-top: 0;
		}





		.five{
			background: #fff;
			height: auto;
			margin-top: 20px;
			display: inline-flex;
			width: 100%;
		}

		.five table{
			border: 1px solid black;
			width: 100%;
			text-align: right;
			height: 100%;
		}
		.five .f1 table{
			border-right: none;
		}
		.five table .hh{
			text-align: left;
		}
		.five table tr{
			width: 100%;
		}
		.five table th{
			padding-left: 10px;
			height: 30px;
			text-align: left;
			border-bottom: 1px solid black;
		}
		.five table td{
			padding-left: 10px;
			height: 100%;
			text-align: left;
		}
		.five .f1{
			width: 60%;
		}
		.five .f2{
			width: 40%;
		}








		.six{
			background: #fff;
			height: auto;
			margin-top: -2px;
			display: inline-flex;
			width: 100%;

		}

		.six table{
			border: 1px solid black;
			width: 100%;
			text-align: right;
			height: 100%;
		}
		.six table .hh{
			text-align: left;
		}
		.six table th{
			padding-left: 10px;
			height: 30px;
		}
		.six table td{
			padding-left: 10px;
			height: 100%;
			text-align: left;
		}
		.six .f1{
			width: 40%;
			border: 2px solid black;
			border-right: none;

		}
		.six .f1 img{
			width: 300px;
			height: 70px;
			border: none;
		}
		.six .f2{
			width: 60%;
		}








		.seven h2{
			background: #999;
			text-align: center;
			margin-top: 20px;

		}
		.seven h3{
			background: #222;
			text-align: left;
			margin-bottom: 20px;
			padding-left: 10px;
			color: white;
		}
		.seven h4{
			text-align: left;
			margin-bottom: 20px;
			padding-left: 10px;
		}

		h3{
			font-size: 20px;
		}

		td{
			font-size: 20px;
		}
		th{
			font-size: 20px;
		}
	</style>
</head>

<body>
	<div style="container"> 


		<form method="post">

		<?php

		error_reporting(0);
		$conn=mysqli_connect('localhost','root','','healthcare');
		
		$rand= rand(100, 100000);

		$pname=$_GET['pname'];
		$acno=$_GET['acno'];
		$adate=$_GET['adate'];
		$paddress=$_GET['paddress'];
		$ico=$_GET['ico'];
		$pono=$_GET['pono'];
		$discount=$_GET['discount'];
		$gst=$_GET['gst'];
		$bill=$_GET['bill'];
		$gstno=$_GET['gstno'];
		$tdate= date("Y-m-d");
		
		
		$_SESSION['pname']=$pname;

			
		$qr1 = "Select * from pat";
		$qr2 = "Select * from bill where email = '$r'";
		$qr3 = "Select * from billno";;

		$data = mysqli_query($conn,$qr1);
		$data2 = mysqli_query($conn,$qr2);
		$data3 = mysqli_query($conn,$qr3);

		$result=mysqli_fetch_array($data);
		$result2=mysqli_fetch_array($data2);
		$result3=mysqli_fetch_array($data3);
															
			

		
					echo "
					
						<div class='open'>
											
												<div class='container'>
							<div class='row' id='row'>
								<div class='border'>

									<div class='start'>
										

										<div class='first'>
											

												<div class='logo'>
													<img src='img/logo.jpg'>
												</div>

												<div class='addres'>
													<p>HEALTHCARE.in <br> Safe and Secure <br>Address: 415409, surat India<br> Phone: +91 1234567898 </p>
												</div>

												<div class='price'>
													<div class='p1'>
														<table cellpadding='0' cellspacing='0' border='1'>
															<tr><td><p style='font-size: 20px;'>Today's date:</p></td></tr>
															<tr><td><h5 style='border-top:1px solid black;font-size: 20px;'>".date("Y-m-d")."</h5></td></tr>
														</table>
														
														
													</div>
													<div class='p2'>
														<table cellpadding='0' cellspacing='0' border='1'>
															<tr><td><p style='font-size: 20px;'>Bill</p></td></tr>
															<tr><td><h5 style='border-top:1px solid black;font-size: 20px;'>INVOICE</h5></td></tr>
														</table>
													</div>
												</div>

										</div>






										<div class='second'>
											<table border='1' cellspacing='0' cellpadding='0'>
												<tr class='hh'>
													<th style='border: 1px solid black;'>Patient Name:</th>
													<th style='border: 1px solid black;'>Account No:</th>
													<th style='border: 1px solid black;'>Assign Date:</th>
													<th style='border: 1px solid black;'>Billing Date:</th>
												</tr>

												<tr style='border: 1px solid black;'>
													<td style='text-transform: uppercase;border: 1px solid black; '>$pname</td>
													<td style='text-transform: uppercase;border: 1px solid black;'>$acno</td>
													<td style='border: 1px solid black;'>$adate</td>
													<td>".date("Y-m-d")."</td>
												</tr>
											</table>
										</div>







										<div class='three'>
											<table border='1' cellspacing='0' cellpadding='0'>
												<tr class='hh'>
													<th style='border: 1px solid black;'>Patient Address:</th>
													<th style='border: 1px solid black;'>Insurance Coverage:</th>
													<th style='border: 1px solid black;'>Policy Number:</th>
												</tr>

												<tr>
													<td style='border: 1px solid black;'>$paddress</td>
													<td style='border: 1px solid black;'>$ico</td>
													<td style='border: 1px solid black;'>$pono</td>
												</tr>
											</table>
										</div>







										<div class='four'>
											<table border='1' cellspacing='0' cellpadding='0'>
												<tr class='hh'>
													<th style='border: 1px solid black;'>Date:</th>
													<th style='border: 1px solid black;'>Description:</th>
													<th style='border: 1px solid black;'>Quantity:</th>
													<th style='border: 1px solid black;'>Amount:</th>
													<th style='border: 1px solid black;'>Total:</th>
												</tr>
											";

										$dat = mysqli_query($conn,$qr2);
										while($result2=mysqli_fetch_array($dat))
											{
											echo "<tr style ='border:none;';>
													<td style='border: 1px solid silver;'>".$result2['dates']."</td>
													<td style='border: 1px solid silver;'>".$result2['dis']."</td>
													<td style='border: 1px solid silver;'>".$result2['quan']."</td>
													<td style='border: 1px solid silver;'>".$result2['amount']."</td>
													<td style='border: 1px solid silver;'>".$result2['total']."</td>
												</tr>";

											}




										echo "	</table>
										</div>



										

										<div class='five'>
											<div class='f1'>
												<table>
													<tr><th style='border: 1px solid black;'>Patient Name:</th></tr>
													<tr><td style='border: 1px solid silver;'>$pname</td></tr>
												</table>
											</div>
											<div class='f2'>
												<table border='1' cellspacing='0' cellpadding='0'>
													<tr class='hh'>
														<th style='border: 1px solid black;'>TOTAL:</th>
														";
														

														
														

														$sums = "SELECT SUM(total) AS sum FROM bill where email = '$r'";

														$seetotal = mysqli_query($conn,$sums);


														while($row = mysqli_fetch_assoc($seetotal)){

															$b = "₹"." ".$row['sum'];
															$bu ="".$row['sum']."";
														}

														echo "<td style='border: 1px solid black;'>$b</td>";
														
											echo "
													</tr>

													<tr>
														<td style='border: 1px solid black;'>gst (18%):</td>

														";

														$gst = "18%";

														$c = ($bu*$gst)/100;


														$tgst = $bu + $c;
														$finals = $tgst - $discount;


														echo "<td style='border: 1px solid black;'>₹ $c</td>";

														echo"
													</tr>

													<tr>
														<td style='border: 1px solid black;'>Discount:</td>
														<td style='border: 1px solid black;'>₹ $discount</td>
													</tr>
												</table>
											</div>
											
										</div>




										<div class='six'>
											<div class='f1' style='width: 40%;'>
												
													<img src='img/bar.jpg' style='margin-top: 5px;'>
												
											</div>
											<div class='f2' style='width: 60%;'>
												<table border='1' cellspacing='0' cellpadding='0'>
													<tr class='hh'>
														<th style='border: 1px solid black;'>PATIENT AMOUNT DUE:</th>
														<th style='font-size: 22px;border: 1px solid black;'>₹ $finals </th>
													</tr>

													<tr>
														<td style='border: 1px solid black;'>Bill</td>
														<td style='color: green;font-weight: 600;font-size: 30px;'>$bill</td>
													</tr>

												</table>
											</div>
											
										</div>


										<div class='seven'>
											<h2 style='font-family:serif;'>HEALTHCARE BILL</h2><br>
											<h3 style='text-transform:uppercase;';>GSTIN no: $gstno</h3>
											<h4>Contact: +91 9283723232</h4>
											<h4 style='margin-top: -40px;text-align: right;'>Bill NO: BLHC$rand</h4>
											<h5 style='margin-top: 50px;font-size: 20px;margin-bottom: 0;border-top:2px solid black;width: 200px;'>Signature:</h5>
										</div>

									</div>


									

								</div>
							</div>
						</div>


												

						</div>

						<div class='container' style='border: none;'>
						  <div class='row' style='border: none;'>
						    <div class='col'>
						    	<form method='post'>
						      	<button Name='print' onclick='myFunction()' id='mydiv' style='width: 300px;padding: 10px;background: blue;color: white;border: none;'>print</button>
						      	</form>
						    </div>
						    <div class='col-9' >
						    
						    </div>
						  </div>
						 </div>

						 <script type='text/javascript'>
							function myFunction() {
					  		var x = document.getElementById('mydiv');

					  		if (x.style.display === 'none') {
					  				
					    			x.style.display = 'block';
					    	
					  			}else {

					   				 x.style.display = 'none';
					   				
					   				 window.print();

					   				 window.location = 'inv.php';
					  			}
							}

						</script>
						


						
					
				
				";	

				
				
					
				


?>




<?php
		error_reporting(0);
		$conn=mysqli_connect('localhost','root','','healthcare');
		$printr=$_POST['print'];
		

		if(isset($printr))
			{
				$qy="DELETE FROM bill WHERE email = '$r'";
				$qu3="insert into finalbill values('','$tdate','$pname','$acno','$adate','$paddress','$ico','$pono','$discount','$gstno','$finals','$bill')";

				$run = mysqli_query($conn,$qy);
				$run3 = mysqli_query($conn,$qu3);
				if($run3){
					

					
					echo "<script> alert('Done...');window.location.assign('inv.php')</script>";
				}


				else{
					echo "<script> alert('failed...');window.location.assign('inv.php')</script>";
				}

			}

	

?>
</form>


<script src="bootstrap/js/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/js/jquery.bundle.min.js"></script>


	

</body>
</html>








					
