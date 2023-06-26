<?php
  include 'conn.php';
    error_reporting(0);
    session_start();

    $mails=$_SESSION['email'];
    $id = $_GET["id"]; 
    $name = $_GET["name"]; 
    $email = $_GET["email"]; 
    $phone = $_GET["phone"]; 
    $address = $_GET["address"];                             
?>



<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> 
    <link rel="icon" type="image/x-icon" href="fav/4.png">
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
          
          
          

        </ul>

        <ul class="navul2" style="padding-left: 5%;">
          <div style="display: inline-flex;">
             &nbsp; 
            
            <li class="navli1" style="margin-top: 0px;">
              <div class="dropdown">
                  <button class="dropbtn b1" style="padding: 2px; margin: 0;width: 40px;height: 40px;background-size: cover;border-radius: 30px;border: 1px solid silver;"><img src="<?php  

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










<div class="onediv" style="position: relative;">


  <!-- ***** Main Banner Area Start ***** -->

      <div class="navtext" style="z-index: 3;">
          <div>
              <h2 class="navte2"><em style="color: black;">Gift Gallery</em>.com</h2>
          </div>
      </div><br>


      <div class="" style="position:relative;float: left;display: inline-block;width: 80%;margin: 10%;z-index: 3;">
          <div id="wrapper">

            <h3 style="color: green;">UPDATE DETAILS</h3><hr>
            
        <div class="card container" style="background: transparent;border: none;position: relative;">
          <div class="row" style="background: transparent;">
             
                <div class="col" style="border: 1px solid black;padding-bottom: 15px;">
                    
                  <form class="card" style="border: none;margin-top: 15px;" method="post" enctype="multipart/form-data">
                   
                    <div class="row">
                      <div class="col" style="font-size: 20px;font-weight: 700;">
                        name:
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" name="tname" required="" style="text-transform: lowercase;" value="<?php echo "$name"; ?>">
                      </div>
                    </div>



                    <div class="row">
                      <div class="col" style="font-size: 20px;font-weight: 700;">
                        Email:
                      </div>
                      <div class="col">
                        <input type="email" class="form-control" name="temail" required="" value="<?php echo "$email"; ?>">
                      </div>
                    </div><br>



                    <div class="row">
                      <div class="col" style="font-size: 20px;font-weight: 700;">
                        Phone:
                      </div>
                      <div class="col">
                        <input type="number" class="form-control" name="tphone" required="" style="text-transform: lowercase;" value="<?php echo "$phone"; ?>">
                      </div>
                    </div><br>



                    <div class="row">
                      <div class="col" style="font-size: 20px;font-weight: 700;">
                        Address:
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" name="taddress" required="" style="text-transform: lowercase;" value="<?php echo "$address"; ?>">
                      </div>
                    </div>



                    <div class="row">
                      <div class="col" style="font-size: 20px;font-weight: 700;">
                        Gender:
                      </div>
                      <div class="col">
                        <select name="tgender" style="width: 40%;">
                                  <option value="male" >male</option>
                                  <option value="female" >female</option>
                                  <option value="other" >other</option>
                        </select>
                       
                      </div>
                    </div><br>







                    <center><input type="submit" name="create" value="Update" class="btn btn-primary" style="width:300px;border-radius: 0px;"></center>

                  </form>




                 

                </div>

          </div>

          <?php  
          
              error_reporting(0);
              if(isset($_POST['create']))
              {
              

              
                
                
              
                $tname = $_POST["tname"]; 
                $temail = $_POST["temail"]; 
                $tphone = $_POST["tphone"]; 
                $taddress = $_POST["taddress"];
                $tgender = $_POST["tgender"]; 
               
              

                $que = "UPDATE ulogin SET name='$tname',email='$temail',phone='$tphone',address='$taddress',gender='$tgender' WHERE id='$id'";

                $data = mysqli_query($conn,$que);


                if($data)
                {
                  echo "<script> alert('Record updated...');window.location.assign('dashboard.php')</script>";
                } 

                else
                {
                  echo "<script> alert('failed ...error...');window.location.assign('dashboard.php')</script>";
                }
              }


          ?>

        </div>
            
          </div>





      </div>

      


 

</div><br>


  <!-- ***** Main Banner Area End ***** -->











<!-- ***** footer start ***** -->


<div style="position: relative;z-index: 1;width: 99%;">
    <?php include("footer.php"); ?>  
</div>
         












 
    <script> <?php include("my.js") ?> <?php include("bootstrap/js/bootstrap.bundle.min.js") ?></script>

  
    
</body>

</html>

