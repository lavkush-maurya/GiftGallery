<?php
  include 'conn.php';
    error_reporting(0);
    session_start();
    $id=$_GET['id'];
                                
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
        background: white;
      }
    </style>
    <title>Dashboard</title>
  </head>

<body>

   




<!--header-->

<div class="nav1">
  <a class="nav1title" href="#"><em style="color: black;font-weight: bold;text-transform: uppercase;padding-left: 20px;font-size: 20px;">GiftGallery</em>.com</a>


  <div class="navd1" style="width:100%;">
        <ul class="navul1" style="width: 85%;">
          <li class="navli1">
            <a class="b1" href="index.php">Home</a>
          </li>
          <li class="navli1">
            <a class="b1" href="gifft.php">Gifts</a>
          </li>
          

          <li class="navli1">
                <div class="dropdown">
                  <button class="dropbtn b1">WOMEN</button>
                    <div class="dropdown-content">
                      <a href="gifft.php?ser=daughter">DAUGHTER</a>
                      <a href="gifft.php?ser=grandmother">GRANDMOTHER</a>
                      <a href="gifft.php?ser=sister">SISTER</a>
                      <a href="gifft.php?ser=girlfriend">GIRLFRIEND</a>
                      <a href="gifft.php?ser=wife">WIFE</a>
                      <a href="gifft.php?ser=mother">MOTHER</a>
                   
                    </div>
                </div>
          </li>

          <li class="navli1">
                <div class="dropdown">
                  <button class="dropbtn b1">CHILDRENS</button>
                    <div class="dropdown-content">
                      <a href="gifft.php?ser=toys">TOYS</a>
                      <a href="gifft.php?ser=softtoys">SOFT TOYS</a>
                      <a href="gifft.php?ser=chocolates">CHOCOLATES</a>
                      <a href="gifft.php?ser=nursery">NURSERY</a>
                      <a href="gifft.php?ser=bigtoys">BIG TOYS</a>
                      
                   
                    </div>
                </div>
          </li>

          <li class="navli1">
                <div class="dropdown">
                  <button class="dropbtn b1">SHOP BY CATEGORY</button>
                    <div class="dropdown-content">
                      <a href="gifft.php?ser=cbottles">CUSTOMIZE BOTTLES</a>
                      <a href="gifft.php?ser=ckeyring">CUSTOMIZE KEYRING</a>
                      <a href="gifft.php?ser=dmugs">DESIGNED MUGS</a>
                      <a href="gifft.php?ser=handmade">HANDMADE PRODUCTS</a>
                      <a href="gifft.php?ser=home">HOME DECOR WALL</a>
                      <a href="gifft.php?ser=lifestyle">LIFESTYLE</a>
                      <a href="gifft.php?ser=mcover">MOBILE COVERS</a>
                  
                   
                    </div>
                </div>
          </li>&nbsp;&nbsp;
          

        </ul>

        <ul class="navul2" style="padding-left: 5%;">
          <div style="display: inline-flex;">
            
            <li class="navli1">
              <a href="ulogin.php" class="b1" style="border:1px solid silver;"> Login</a>
            </li>
          </div>
        </ul>
  </div>

</div>










<div class="onediv d21" style="position: relative;">


  <!-- ***** Main Banner Area Start ***** -->

  <div class="io1">
    <?php  

        error_reporting(0);
                    

        $qre1="select * from product where id = '$id'";
        $run1=mysqli_query($conn,$qre1);

        while($results=mysqli_fetch_array($run1)) {

            $pf = $results['id'];
            $pr = $results['price'];
            $e1 = $pr / 10;
            $e11 = $e1 * 4;
            $final = $pr + $e11; 

            echo "

            <div class='io10'>
        
                <div class='ioa'>
                    <img src='".$results['pimage']."'>

                </div>

                <div class='ioa2'>
                      
                        <a href='ulogin.php?cid=$pf'>ADD TO CART</a>
                      
                   
                      <a href='ulogin.php?pid=$pf'>BUY NOW</a>
                </div>
            </div>

            <div class='io20'>
                <div class='m1'></div><br><hr>
                <h5> ".$results['name']." </h5><hr><br>
                <h2>₹$pr <span style='font-size: 20px;color: silver;'><strike>₹$final</strike>&nbsp;&nbsp;<span style='color:green;'> 40% off</span></span></h2>
                <h6>Available offers:</h6>
                <p>Bank Offer 5% Cashback on Axis Bank Card</p>
                <p>Partner OfferSign up for Giftgallery Pay Later and get Gift Card worth upto ₹500*</p>
                <p>Partner Offer Buy this product and get upto ₹500 off on </p>
                <p>Partner OfferClaim free annual subscription to Giftgallery.com</p><br>
                <h3>Customizable?<span style='font-size: 26px;color: green;'> [ ".$results['customize']." ]</span></h3><br>
                <h5 style='color:#555;'>Seller ID: <span style='color:violet;'>".$results['sid']."</span></h5>
                <p>* 7 day seller replacement policy/brand assistance for device issues</p>
                <p>* GST invoice available</p><hr>

                <h4>Description:</h4>
                <b>".$results['details']."</b><hr>
                <h4>Quantity:</h4>
                <b>available now: [ ".$results['quantity']." ]</b><hr>

                <h3>Review & Rating</h3>
                <form method='POST'>
                  <div style='display:inline-flex;float: left;'>
                      <input type='email' class='form-control' placeholder='Email' name='rmail' style='height: 37px;width: 400px;' required=''>
                      <input type='text' class='form-control' placeholder='Review' style='height: 37px;' name='rview' required=''>
                      <a href='ulogin.php?pid=$pf' class='form-control btn btn-primary' style='margin-top:0;height: 37px;width:150px;'>Submit</a>
                  </div>
                </form><br>";
                }

              ?>


                <hr>

                <div>
                    <h4>Email <span style="margin-left: 200px;">Reviews</span></h4><hr>
                    <?php

                                error_reporting(0);
                                $qr1="select * from review where pid = '$id'";
                                $run1 = mysqli_query($conn,$qr1);
                                while($resul=mysqli_fetch_array($run1)) {
                                  echo "
                                      <div style='background:#f1f3f6;padding-top: 15px;margin-top:0;'>
                                          <h6>".$resul['email']."  <span style='margin-left: 120px;color:silver;'>".$resul['review']."</span></h6><hr>
                                              
                                              
                                          
                                      </div>

                                  ";

                                }

                      ?>  
                </div>
                
            </div> 
            

            


        

            
  </div>

                      

 

</div><br>


  <!-- ***** Main Banner Area End ***** -->











<!-- ***** footer start ***** -->


<div style="position: relative;z-index: 1;display: inline-block;width: 99%;">
    <?php include("footer.php"); ?>  
</div>
         












 
    <script> <?php include("my.js") ?> <?php include("bootstrap/js/bootstrap.bundle.min.js") ?></script>

  
    
</body>

</html>







<?php
      if(isset($_POST['subm'])){

            $email = $_SESSION['email'];


            $qr="insert into cart values('','$pf','$email','$sid')";
            $run = mysqli_query($conn,$qr);

            if($run)
            { 
              echo "<script> alert('successfully added...');window.location.assign('cart.php');</script>";
            } 
            else
            { 
              echo "<script> alert('error...');window.location.assign('cart.php');</script>";
            } 
            



      }

?>
