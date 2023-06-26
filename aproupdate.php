<?php
  include 'conn.php';
    error_reporting(0);
    session_start();
    $log=$_POST['log'];
    $mails=$_SESSION['email'];
    $id = $_GET["id"];                             
?>

<?php 
  

  $q2="select * from product where id='$id'";
  $r=mysqli_query($conn,$q2);
    while($re=mysqli_fetch_array($r)){
        $name = "".$re['name']."";
        $price = "".$re['price']."";
        $details = "".$re['details']."";
        $catogory = "".$re['catogory']."";

    }
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
        </ul>


        <ul class="navbar-nav titleright" style="padding-left: 5%;">
          <div style="display: inline-flex;">
            <li>
              <p class="mails"><?php echo $_SESSION['email']; ?></p>
               
            </li>
            <li>
              <a href="alogout.php" class="nav-link b1" style="border:1px solid silver;"> Logout</a>
            </li>
          </div>
        </ul>
  </div>

</nav>










<div class="onediv" style="position: relative;">


  <!-- ***** Main Banner Area Start ***** -->

      <div class="navtext" style="z-index: 3;">
          <div>
              <h2 class="navte2"><em style="color: white;">Gift Gallery</em>.com</h2>
          </div>
      </div><br>


      <div class="" style="position:relative;float: left;display: inline-block;width: 80%;margin: 10%;z-index: 3;">
          <div id="wrapper">

            <h3 style="color: white;">ADD PRODUCT</h3><hr>
            
        <div class="card container" style="background: transparent;border: none;position: relative;">
          <div class="row" style="background: transparent;">
             
                <div class="col" style="border: 1px solid black;padding-bottom: 15px;">
                    
                  <form class="card" style="border: none;margin-top: 15px;" method="post" enctype="multipart/form-data">
                   
                    <div class="row">
                      <div class="col" style="font-size: 20px;font-weight: 700;">
                        name:
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" name="name" placeholder="name" required="" style="text-transform: lowercase;" value="<?php echo "$name"; ?>">
                      </div>
                    </div><hr>



                    <div class="row">
                      <div class="col" style="font-size: 20px;font-weight: 700;">
                        Price:
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" name="price" required="" value="<?php echo "$price"; ?>">
                      </div>
                    </div><hr>



                    <div class="row">
                      <div class="col" style="font-size: 20px;font-weight: 700;">
                        Details:
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" name="details" placeholder="email" required="" style="text-transform: lowercase;" value="<?php echo "$details"; ?>">
                      </div>
                    </div><hr>



                    <div class="row">
                      <div class="col" style="font-size: 20px;font-weight: 700;">
                        catogory:
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" name="catogory" placeholder="phone" required="" value="<?php echo "$catogory"; ?>">
                      </div>
                    </div><hr>







                    <input type="submit" name="create" value="Update" class="btn btn-primary">

                  </form>




                 

                </div>

          </div>

          <?php  
          
              error_reporting(0);
              if($_POST['create'])
              {
              

              
                
                
                $name=$_POST['name'];
                $price=$_POST['price'];
                $details=$_POST['details'];
                $catogory=$_POST['catogory'];
               
              

                $que = "UPDATE product SET name='$name',price='$price',details='$details',catogory='catogory' WHERE id='$id'";

                $data = mysqli_query($conn,$que);


                if($data)
                {
                  echo "<script> alert('Record updated...');window.location.assign('adash.php')</script>";
                } 

                else
                {
                  echo "<script> alert('failed ...error...');window.location.assign('aproupdate.php')</script>";
                }
              }


          ?>

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

