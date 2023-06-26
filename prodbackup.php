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

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed;width: 100%;z-index: 10;border-bottom: 1px solid black;">
  <a class="navbar-brand" href="#"><em style="color: black;font-weight: bold;text-transform: uppercase;padding-left: 20px;">GiftGallery</em>.com</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav" style="width: 85%;position: relative;">
          <li class="nav-item active">
            <a class="nav-link" href="udash.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="gifts.php">GIFTS</a>
          </li>
          
          &nbsp;&nbsp;

          

        </ul>

       
          
     


        <ul class="navbar-nav titleright" style="padding-left: 5%;">
          <div style="display: inline-flex;">
            <li>
              <a href="cart.php" class=""><img src="img/cart.png" class="cat"><span class="spancart">
                
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
            </li>
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

           

             
                      <?php  

                        error_reporting(0);
                    

                            $qre1="select * from product where id = $id";
                            $run1=mysqli_query($conn,$qre1);

                            while($results=mysqli_fetch_array($run1)) {
                              $pf = $results['id'];
                              $sid = $results['sid'];
                        echo "



                        <div class='pdview container'>
                          <img src='".$results['pimage']."'>
                          <div class='pdc container'>
                            
                            <table cellpadding='3'>
                              <tr>
                                <td><p>Product name:</td>
                                <td><p class='pna'>".$results['name']."</p></td>
                              </tr>

                              <tr>
                                <td><h6>price: </h6></td>
                                <td><h6> ".$results['price'].".00<span style='color: green;font-weight: 600;'> ₹</span></h6></td>
                              </tr>

                              <tr>
                                <td><p>Customize?</p></td>
                                <td><p style='color: green;'> ".$results['customize']."</p></td>
                              </tr>

                              <tr>
                                <td><p>details =</td>
                                <td><p>".$results['details']."</p></td>
                              </tr>

                              <tr>
                                <td><b>quantity: </b></td>
                                <td><b>[ ".$results['quantity']." ]</b></td>
                              </tr>
                            </table>
                        
                            
                            
                            <div>
                            <form method='post'>
                                <input type='submit' name='subm' value='ADD TO CART' class='cartos'>
                            </form>
                            </div>
                            
                          </div>
                        </div>



                        ";}

                        ?>
                        
               
              


           
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