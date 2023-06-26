<?php
  include 'conn.php';
    error_reporting(0);
    session_start();
    $log=$_POST['log'];
                                
?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> 
    <link rel="icon" type="image/x-icon" href="fav/4.png">
    <style type="text/css">
      body{
        background: #333;
      }
    </style>
    <title>Dashboard</title>
  </head>

<body>

   




<!--header-->

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed;width: 100%;z-index: 10;border-bottom: 1px solid black;">
  <a class="navbar-brand" href="#"><em style="color: black;font-weight: bold;text-transform: uppercase;padding-left: 20px;">GiftGallery</em>.com</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav" style="width: 85%;position: relative;">
          <li class="nav-item active">
            <a class="nav-link" href="adash.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="gifts.php">GIFTS</a>
          </li>
          
          &nbsp;&nbsp;

         

        </ul>

       
          
     


        <ul class="navbar-nav titleright" style="padding-left: 5%;">
          <div style="display: inline-flex;">
            <li>
              <p class="mails"><?php echo $_SESSION['email']; ?></p>
               
            </li>
            <li>
              <a href="ulogout.php" class="nav-link b1" style="border:1px solid silver;"> Logout</a>
            </li>
          </div>
        </ul>
  </div>

</nav>










<div class="onediv" style="position: relative;">


  <!-- ***** Main Banner Area Start ***** -->



      <div class="" style="position:relative;float: left;display: inline-block;width: 80%;margin: 10%;z-index: 3;">
          <div id="wrapper">


            <div class="a2"><br>
                <form class="signup" method="POST" enctype="multipart/form-data">
                  <h3 style="margin-left: 20px;"><span style="color: white;">ADD</span> NEW <span style="color: white;">GIFT</span></h3>
                  <div class="si3" style="color: white;">
                      

                        <div class="k1">
                            
                          
              
                            <label> <b>Name:</b></label><br>
                            <input type="text" name="pname" required="" placeholder="PRODUCT NAME:" style="text-transform: lowercase;"><br><br>


                            <label> <b>PRODUCT:</b></label><br>
                            <input type="file" name="img" required="" style="text-transform: lowercase;"><br><br>
                          

                          
                            <label> <b>PRICE:</b></label><br>
                            <input type="number" name="price" required="" placeholder="PRICE:" style="text-transform: lowercase;"><br><br>
                          

                          
                            <label> <b>QUANTITY:</b></label><br>
                            <input type="number" name="qty" required="" placeholder="QUANTITY:"><br><br>
                          

                            
                        </div>

                        <div class="k2">
                            <label> <b>DETAILS:</b></label><br>
                            <input type="text" name="pdetails" placeholder="DETAILS" required=""> <br><br>



                            <label> <b>CATOGORY:</b></label><br>
                            <input type="text" name="ctgry" placeholder="CATOGORY" required="">  <br><br>



                            <label> <b>CUSTOMIZE?:</b></label><br>
                            <div >
                              
                            <select name="sele" style="width: 40%;" required="">
                                  <option value="NO" >no</option>
                                  <option value="YES" >yes</option>
                                
                            </select>

                          </div><br><br>

                          
                        </div>
                        
                  </div>

                  <center><input type="submit" class="subm" name="create" value="ADD PRODUCT" style="width: 200px;height: 50px;font-size: 14px;"></center>


                </form>
          </div>
 
          </div>
      </div>

      
      


 

</div><br>


  <!-- ***** Main Banner Area End ***** -->











<!-- ***** footer start ***** -->


<div style="position: relative;z-index: 1;">
    <?php include("footer.php"); ?>  
</div>
         












 
    <script> <?php include("my.js") ?> <?php include("bootstrap/js/bootstrap.bundle.min.js") ?></script>

  
    
</body>

</html>






<?php
      if(isset($_POST['create'])){


            $file=$_FILES['img'];
            $filename = $file['name'];
            $tmp = $file['tmp_name'];    
            $fi = "pimage/".$filename;

            move_uploaded_file($tmp, "pimage/". $filename);
            
            $name=$_POST['pname'];
            $price=$_POST['price'];
            $custom=$_POST['sele'];
            $detail=$_POST['pdetails'];
            $catogory=$_POST['ctgry'];
            $qty=$_POST['qty'];




            $qr="insert into product values('','$name','$fi','$price','$custom','$detail','$catogory','$qty')";
            $run = mysqli_query($conn,$qr);

            if($run)
            { 
              echo "<script> alert('successfully added...');window.location.assign('sdash.php')</script>";
            }
            else{
              echo "<script> alert('failed to add product');window.location.assign('sdash.php')</script>";
            }



      }

?>