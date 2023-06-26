<?php
    error_reporting(0);
    session_start();

    include 'conn.php';
    $pfid = $_GET['pfid'];

    
?>



<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> 
    <link rel="icon" type="image/x-icon" href="fav/4.png">
    <title>login</title>
    <style type="text/css">
      body{
        background: url("images/16.jpg") no-repeat;
        background-size: cover;
      }
    </style>
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


        </ul>

        <ul class="navul2" style="padding-left: 5%;">
          <div style="display: inline-flex;">
        
            <li class="navli1">
              <a href="selsignup.php" class="b1" style="border:1px solid silver;"> Sign up</a>
            </li>
          </div>
        </ul>
  </div>

</div>




<br><br>
<div class="main_ulog">
        
          <div>
                   
                   <div class="bannerContent2">
                       <h2 style="color:white;margin-left: 100px;">Login to <span style="color:green;font-weight: 800;">Gift</span><em>Gallery</em></h2> 
                   </div>
          </div>
           
          <div class="si1 fluid-container" style="margin-left: 100px;">
                <form method="GET" class="logn">
                     
                      <hr><br>
                    
                      <input type="email" name="email" required="" style="text-transform: lowercase;" placeholder="Email"><br><br>
                      <input type="password" name="password" required=""  placeholder="password"><br><br>
                      <input type="submit" class="logi" name="submit" value="login"> <br><br>

                      <br>

                      <center><a href="forgotupass.php" style="font-size: 20px;">Forgot Password?</a></center><hr><br>


                      <div style="display: inline-flex;font-size: 20px;">
                        <p>New Receptionist:</p>&nbsp;&nbsp;&nbsp;
                        <a href="selsignup.php">Register</a>
                      </div>
                     
                </form>

          </div>


        

</div>


   <!-- ***** third div ***** -->



    
</body>

</html>




<?php
    $mail=$_GET['email'];
    $pass=$_GET['password'];
    

      $_SESSION['email']=$mail;
      $_SESSION['pid']= $pfid;

      if(isset($_GET['submit']))
      {
        
        $q2="select * from slogin where email='$mail'";
        $r=mysqli_query($conn,$q2);
        $num=mysqli_num_rows($r);
        if($num==0)
        {
          echo"<script>alert('invalid username or password');</script>";
       ?>
        <script type="text/javascript">
          windows.location="slogin.php";
        </script>
        <?php
        }
        else
        {
           
               while($data=mysqli_fetch_array($r))
                      {
                           if(($mail==$data['email']) && ($pass==$data['password']))
                          {
                            echo "<script> alert('welcome ".$data['name']."');window.location.assign('sdash.php');</script>";
                           
                          }
                          else{
                            echo "<script> alert('invalid username or password');window.location.assign('slogin.php');</script>";
                          }
                      }
            
             
        }
      
        }     
?>