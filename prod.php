<?php
  include 'conn.php';
    error_reporting(0);
    session_start();
    $id=$_GET['id'];
    $rt = $_SESSION['pid'];
                            
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
            <a class="b1" href="udash.php">Home</a>
          </li>
          <li class="navli1">
            <a class="b1" href="gifts.php">Gifts</a>
          </li>
          <li class="navli1">
            <a class="b1" href="dashboard.php">Orders</a>
          </li>

          <li class="navli1">
                <div class="dropdown">
                  <button class="dropbtn b1">WOMEN</button>
                    <div class="dropdown-content">
                      <a href="gifts.php?ser=daughter">DAUGHTER</a>
                      <a href="gifts.php?ser=grandmother">GRANDMOTHER</a>
                      <a href="gifts.php?ser=sister">SISTER</a>
                      <a href="gifts.php?ser=girlfriend">GIRLFRIEND</a>
                      <a href="gifts.php?ser=wife">WIFE</a>
                      <a href="gifts.php?ser=mother">MOTHER</a>
                   
                    </div>
                </div>
          </li>

          <li class="navli1">
                <div class="dropdown">
                  <button class="dropbtn b1">CHILDRENS</button>
                    <div class="dropdown-content">
                      <a href="gifts.php?ser=toys">TOYS</a>
                      <a href="gifts.php?ser=softtoys">SOFT TOYS</a>
                      <a href="gifts.php?ser=chocolates">CHOCOLATES</a>
                      <a href="gifts.php?ser=nursery">NURSERY</a>
                      <a href="gifts.php?ser=bigtoys">BIG TOYS</a>
                      
                   
                    </div>
                </div>
          </li>

          <li class="navli1">
                <div class="dropdown">
                  <button class="dropbtn b1">SHOP BY CATEGORY</button>
                    <div class="dropdown-content">
                      <a href="gifts.php?ser=cbottles">CUSTOMIZE BOTTLES</a>
                      <a href="gifts.php?ser=ckeyring">CUSTOMIZE KEYRING</a>
                      <a href="gifts.php?ser=dmugs">DESIGNED MUGS</a>
                      <a href="gifts.php?ser=handmade">HANDMADE PRODUCTS</a>
                      <a href="gifts.php?ser=home">HOME DECOR WALL</a>
                      <a href="gifts.php?ser=lifestyle">LIFESTYLE</a>
                      <a href="gifts.php?ser=mcover">MOBILE COVERS</a>
                  
                   
                    </div>
                </div>
          </li>&nbsp;&nbsp;
          

        </ul>

        <ul class="navul2" style="padding-left: 5%;">
          <div style="display: inline-flex;">
            <li class="navli1" style="margin-top: -2px;">
              <a href="cart.php" class=""><img src="img/cart.png" class="cat" style="margin-top:2px;"><span class="spancart">
                
                                    <?php
                                          error_reporting(0);
                                          $mails = $_SESSION['email'];
                                          $query = "SELECT count(*) from cart where email = '$mails'";
                                          $qresult = mysqli_query($conn, $query);
                                          $row = mysqli_fetch_assoc($qresult);
                                          $count = $row["count(*)"];
                                          echo $count;
                                    ?>
              </span></a>
            </li> &nbsp; 
            <li class="navli1">
              <div class="dropdown">
                  <button class="dropbtn b1" style="padding: 2px; margin: 0;width: 40px;height: 40px;background-size: cover;border-radius: 30px;"><img src="<?php  

                            error_reporting(0);
                            $qre8="select * from ulogin where email = '$mails'";
                            $run8=mysqli_query($conn,$qre8);

                            while($results8=mysqli_fetch_array($run8)) {
                                echo "".$results8['profile']."";
                              }

                              ?>" style="border-radius: 30px;height: 30px;width: 30px;margin: 0;"></button>

                    <div class="dropdown-content">
                      <a href="#"><?php echo "<b>Welcome</b> <em style='color:green;'>$mails</em>"; ?></a>
                      <a href="dashboard.php">Dashboard</a>
                      <a href="ulogout.php" style="background: darkred;color: white;">Logout</a>
                     
                   
                    </div>
                </div>
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
            $sid = $results['sid'];
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
                      
                      <form method='post'>
                        <input type='submit' name='subm' value='ADD TO CART' class='hj'>
                      </form>
                      <form method='post'>
                        <input type='submit' name='subm2' value='BUY NOW' class='hj' style='width: 180px;'>
                      </form>
                   
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
                      <input type='email' class='form-control' readonly placeholder='Email' value='$mails' name='rmail' style='height: 37px;width: 400px;' required=''>
                      <input type='text' class='form-control' placeholder='Review' style='height: 37px;' name='rview' required=''>
                      <input type='submit' class='form-control btn btn-primary' style='margin-top: 0px;height: 36px;width: 100px;' name='rsub'>
                  </div>
                </form><br>";
                }

              ?>


                <hr>

                <div>
                    <h4>Email <span style="margin-left: 200px;">Reviews</span><span style="margin-left: 200px;">Delete</span></h4><hr>
                    <?php

                                error_reporting(0);
                                $qr1="select * from review where pid = '$id'";
                                $run1 = mysqli_query($conn,$qr1);
                                while($resul=mysqli_fetch_array($run1)) {
                                  echo "
                                      <div style='background:#f1f3f6;padding-top: 15px;margin-top:0;'><table style='width:100%;'>
                                              <tr>  <td> <h6>".$resul['email']." </h6></td> 
                                              <td><span style='margin-left: 120px;color:silver;'>".$resul['review']."</span></td>
                                              <td><span style='margin-left: 120px;color:silver;'><a href='delrev.php?id=".$resul['id']."&pid=$id' class='btn vt' id='alik'></a></span></td><hr>
                                              
                                             </tr> 
                                          </table>
                                      </div>

                                  ";

                                }

                      ?>  
                </div>
                
            </div> 
            

            


        

            
  </div>


             
  
  <?php
      if(isset($_POST['rsub'])){

            
            $rmail=$_POST['rmail'];
            $rview=$_POST['rview'];


            $qr="insert into review values('','$pf','$rmail','$rview')";
            $run = mysqli_query($conn,$qr);

            if($run)
            { 
              
              echo "<script> alert('review added...');window.location.assign('prod.php?id=$id');</script>";

            }
            else{
              echo "<script> alert('error');</script>";
            }



      }

  ?>  
                          

 

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
            $q5="select * from cart where pid = '$pf' and email= '$email'";
            $r5 = mysqli_query($conn,$q5);
            $num5=mysqli_num_rows($r5);

            if($num5==0)
            {

                $qr="insert into cart values('','$pf','$email','$sid')";
                $run = mysqli_query($conn,$qr);

                if($run)
                { 
                  echo "<script> alert('successfully added...');window.location.assign('cart.php');</script>";
                } 
            }
            else
            { 
              echo "<script> alert('product already in cart...');window.location.assign('cart.php');</script>";
            } 
            



      }

?>

<?php
      if(isset($_POST['subm2'])){

            $email = $_SESSION['email'];

            
            $qrf="select * from cart where pid = '$pf' and email= '$email'";
            $r = mysqli_query($conn,$qrf);
            $num=mysqli_num_rows($r);
            if($num==0)
            {
                $qr="insert into cart values('','$pf','$email','$sid')";
                $run = mysqli_query($conn,$qr);
                if($run)
                { 
                  echo "<script> alert('redirected to puchasing...');window.location.assign('cheakout2.php?id=$pf');</script>";
                } 
            }
            else{
                echo "<script> alert('product already in cart...cheakout cart');window.location.assign('cheakout2.php?id=$pf');</script>";
            }
            

            
          



      }

?>
