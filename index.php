<?php
  include 'conn.php';
  session_start();

?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="fav/4.png"> 
    <title>GiftGallery.com</title>
  </head>

<body>

   









<!--header-->

<div class="nav1">
  <a class="nav1title" href="#"><em style="color: black;font-weight: bold;text-transform: uppercase;padding-left: 20px;font-size: 20px;">GiftGallery</em>.com</a>


  <div class="navd1" style="width:100%;">
        <ul class="navul1" style="width: 85%;">
          <li class="navli1">
            <a class="b1" href="#">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="navli1">
            <a class="b1" href="gifft.php">Gifts</a>
          </li>
          

          <li class="navli1">
                <div class="dropdown">
                  <button class="dropbtn b1">More</button>
                    <div class="dropdown-content">
                      <a href="ulogin.php">user login</a>
                      <a href="slogin.php">seller login</a>
                      <a href="alogin.php">admin login</a>
                     
                   
                    </div>
                </div>
          </li>
          

        </ul>

        <ul class="navul2" style="padding-left: 5%;">
          <div style="display: inline-flex;">
            <li class="navli1">
              <a href="signup.php" class="b1"> Sign Up</a>
            </li>&nbsp;&nbsp;
            <li class="navli1">
              <a href="ulogin.php" class="b1" style="border:1px solid silver;"> Login</a>
            </li>
          </div>
        </ul>
  </div>

</div>














<div class="onediv">


  <!-- ***** Main Banner Area Start ***** -->

      <div class="navtext">
          <div>
              <h4 class="navte2"><em style="color: white;">Gift Gallery</em>.com</h4>
          </div>
      </div>


      <div class="topcard">
        
          
        
          <div class="toppat" style="">
            <div class="ts">
                <a href="gifft.php?ser=phone" class="t1"><img src="img/phone.png" class="t2"><p class="t3">Mobiles</p></a>
                <a href="gifft.php?ser=fashion" class="t1"><img src="img/hxr.jpg" class="t2"><p class="t3">Fashion</p></a>
                <a href="gifft.php?ser=electronics" class="t1"><img src="img/sony_dslr.jpeg" class="t2"><p class="t3">Electronics</p></a>
                <a href="gifft.php?ser=home" class="t1"><img src="images/him.jpg" class="t2"><p class="t3">Home</p></a>
                <a href="gifft.php?ser=toys" class="t1"><img src="images/toy.jpg" class="t2"><p class="t3">Toys</p></a>
                <a href="gifft.php?ser=chocolate" class="t1"><img src="images/cho.jpg" class="t2"><p class="t3">Chocolates</p></a>
                <a href="gifft.php?ser=cloths" class="t1"><img src="img/shirt.jpg" class="t2"><p class="t3">Cloths</p></a>

            </div>
              
          </div>

      </div>







<br>
<div class="twodiv" style="margin-top:200px">
    <div>

          <div class="twoh">
           <br>
              <h4 style="font-size: 40px;">Diwali Season Sale</h4><br><br>
              <h6>May the festival of joy become more beautiful for you and family. All your new ventures get success and progress. <em>Happy Diwali</em></h6>
          
          </div>

          <div class="a1" style="margin-top: 100px;position: absolute;">
              <div class="cs2">
                  <h3>Diwali Special</h3><hr>
                  <a href="gifft.php?ser=phone&ser2=men&ser3=toys">Search</a>
              </div>
              
              


          
          </div>



    </div>
</div>

<div style="overflow: scroll;background: transparent;width: 90%;margin-left: 5%;margin-top: -400px;z-index: 9;">

                  <?php  

                        error_reporting(0);
                    

                            $qre1="select * from product limit 30";
                            
                            $run1=mysqli_query($conn,$qre1);

                            while($results=mysqli_fetch_array($run1)) {

                        echo "<div class='block2'>

                              <a href='prod2.php?id=".$results['id']."' ><img class='bump' src='".$results['pimage']."' style='width: 300px; height: 220px;'></a>
                                    
                              <h6 class='ft'>[ ".$results['name']." ]</h6>
                              
                              <p>PRICE: ".$results['price'].".00<span style='color: green;font-weight: 800;'> ₹</span></p>
                                 
                              <a href='prod2.php?id=".$results['id']."' class='carto' style='width: 100%;'>VIEW</a>
                               
                             


                        </div>";}

                        ?>
                  
</div>







      <div class="a1" style="position: absolute;margin-top: 200px;z-index: 6;width: 500px;">
              <div class="cs2">
                  <h3>Feedback:</h3><hr>
              
              </div><br><br>
              
              <div class="fd1" style="width:100%;height: 500px;background: white;">

                    <form style="width: 500px;padding: 10px;padding-top: 60px;" method="post">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control-plaintext" value="" name="feedmail" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Feedback</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="feedback" name="ifeed" required>
                        </div>
                      </div><br>
                       <button type="submit" class="btn btn-primary" name="isub">SEND</button>

                       <br><br><br><br><br><br>
                       <p>'Thank you for your feedback...................'</p>
                    </form>
                

              </div>


          
          </div>


  <!-- ***** video background ***** 
   
        <video autoplay muted loop id="bg-video" style="width: 100%;height: 950px;">
          <source src="assets/images/j.mp4" type="video/mp4" />
        </video>

      -->  <img src="images/10.jpg" style="width: 100%;height: 850px;image-resolution: 300dpi;">

</div>















  <!-- ***** Main Banner Area End ***** -->


<div class="threediv">
          <center>
    
              
          <div class="cs1">
            <h1>Welcome to GiftGallery</h1>
            <p>Flat 40% OFF on all Products</p>
                    
          </div>
              
          </center>



           
          <div class="a1">
              <div class="cs2">
                  <h3>Best of Electronics</h3><hr>
                  <a href="gifft.php?ser=watch&ser2=camera">view all</a>
              </div>
              
              <div class="cs2">

                   <div class="q1">
                        
                         <?php  

                          error_reporting(0);
                      

                              $qre1="select * from product where catogory = 'watch' or catogory = 'camera' limit 10";
                              
                              $run1=mysqli_query($conn,$qre1);

                              while($results=mysqli_fetch_array($run1)) {

                          echo "<div class='block21'>

                                <img class='bump' src='".$results['pimage']."'>
                                      
                                <h6 class='ft'>[ ".$results['name']." ]</h6>
                                
                                <p>PRICE: ".$results['price'].".00<span style='color: green;font-weight: 800;'> ₹</span></p>
                                   
                                <a href='prod2.php?id=".$results['id']."'>VIEW</a>
                                 
                               


                          </div>";}

                        ?>
                  
                   </div>

                

              </div>


          
          </div>






          <div class="a1" style="background: transparent;">
            <p style="visibility: hidden;">shjdfs</p>
          </div>





          <div class="a1">
              <div class="cs2">
                  <h3>Mens</h3><hr>
                  <a href="gifft.php?ser=phone&ser2=men">view all</a>
              </div>
              
              <div class="cs2">

                   <div class="q1">
                        
                         <?php  

                          error_reporting(0);
                      

                              $qre1="select * from product where catogory = 'men' limit 10";
                              
                              $run1=mysqli_query($conn,$qre1);

                              while($results=mysqli_fetch_array($run1)) {

                          echo "<div class='block21'>

                                <img class='bump' src='".$results['pimage']."'>
                                      
                                <h6 class='ft'>[ ".$results['name']." ]</h6>
                                
                                <p>PRICE: ".$results['price'].".00<span style='color: green;font-weight: 800;'> ₹</span></p>
                                   
                                <a href='prod2.php?id=".$results['id']."'>VIEW</a>
                                 
                               


                          </div>";}

                        ?>
                  
                   </div>

                

              </div>


          
          </div>

          
</div><br>















   <!-- ***** third div ***** -->












<!-- ***** footer start ***** -->


<div class="footer">
    <?php include("footer.php"); ?>  
</div>
         












 
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="gift\bootstrap\js\bootstrap.min.js"></script>

  
    
</body>

</html>



  
  <?php
      if(isset($_POST['isub'])){

            
            $feedmail=$_POST['feedmail'];
            $ifeed=$_POST['ifeed'];


            $qr="insert into feedback values('','$feedmail','$ifeed')";
            $run = mysqli_query($conn,$qr);

            if($run)
            { 
              
              echo "<script> alert('feedback added...');window.location.assign('index.php');</script>";

            }
            else{
              echo "<script> alert('error');</script>";
            }



      }

  ?>  
