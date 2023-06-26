<?php
  include 'conn.php';
    error_reporting(0);
    session_start();
    $log=$_POST['log'];
    $ser = $_GET['ser'];
    $ser2 = $_GET['ser2'];
    $ser3 = $_GET['ser3'];                              
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
          <li class="navli1">
            <a class="b1" href="gifts.php">Gifts</a>
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
            
            <li class="navli1" style="margin-top: -10px;">
              <a href="cart.php"><img src="img/cart.png" class="cat" style="margin-top: 3px;"><span class="spancart">
                
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
            <li class="navli1" style="margin-top:-7px;">
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















<div class="onediv" style="position: relative;">


  <!-- ***** Main Banner Area Start ***** -->



      <div class="" style="position:relative;float: left;display: inline-block;width: 80%;margin: 10%;z-index: 3;">

        <div class="fm1"><br>
                  <form method="post" enctype="multipart/form-data" >
                    <input type="text" placeholder="Search.." name="search" style="width: 100%;">
                    <input type="submit" name="subbi" value="search" class="btn btn-primary" style="width: 120px;height: 50px;font-size: 15px;margin: 0;">
                  </form>
        </div>


        <div id="wrapper">

          <div class="searto" style="">
                <h3 style="color: white;">Gifts</h3>
                
                

                 <?php  

                                  error_reporting(0);
                                  $seee = $_POST['search'];
                            

                                    $qre1="select * from product where catogory = '$seee'";
                                    
                                    $run1=mysqli_query($conn,$qre1);

                                    while($results=mysqli_fetch_array($run1)) {

                                echo "
                                   
                                      <div class='block21'>

                                      <a href='prod.php?id=".$results['id']."' class='bloc121'><img class='bump' src='".$results['pimage']."'></a?
                                            
                                      <h6 class='ft'>[ ".$results['name']." ]</h6>
                                      
                                      <p>PRICE: ".$results['price'].".00<span style='color: green;font-weight: 800;'> ₹</span></p>
                                         
                                      <a href='prod.php?id=".$results['id']."'>VIEW</a>
                                       
                                     


                                      </div>
                                    
                                      ";}

                              ?>  <hr> 


            <?php
                                          
                                          $query = "SELECT count(*) from product where catogory= '$ser' or catogory= '$ser2' or catogory= '$ser3'";
                                          $qresult = mysqli_query($conn, $query);
                                          $row = mysqli_fetch_assoc($qresult);
                                          $count = $row["count(*)"];
                                          if($count > 0){



                                         ?>

                                                <div class="a1" style="">
                                                    <h3>Search result:</h3>
                                                    
                                                    <div class="cs2">

                                                         <div class="q1">
                                                              
                                                               <?php  

                                                                  error_reporting(0);
                                                                  $seee = $_POST['search'];
                                                            

                                                                    $qre1="select * from product where catogory= '$ser' or catogory= '$ser2' or catogory= '$ser3' limit 20";
                                                                    
                                                                    $run1=mysqli_query($conn,$qre1);

                                                                    while($results=mysqli_fetch_array($run1)) {

                                                                      echo "<div class='block21'>

                                                                          <a href='prod.php?id=".$results['id']."' class='bloc121'><img class='bump' src='".$results['pimage']."'></a>
                                                                            
                                                                          <h6 class='ft'>[ ".$results['name']." ]</h6>
                                                                      
                                                                          <p>PRICE: ".$results['price'].".00<span style='color: green;font-weight: 800;'> ₹</span></p>
                                                                         
                                                                          <a href='prod.php?id=".$results['id']."'>VIEW</a>
                                                                       
                                                                          </div>  ";
                                                                    }

                                                              ?>
                                                        
                                                         </div>

                                                    </div>

                                                </div>
                                          <?php  }

            ?>

 


                <div class="a1" style="">
                    <h1 style="visibility: hidden;margin: 60px 0px;">empty</h1>
                    <div class="cs2">
                        <h3>ALL Products</h3><hr>
                    </div>
                    
               

                         <div style="overflow: scroll;background: transparent;width: 90%;margin-left: 5%;margin-top: -400px;z-index: 9;">

                                            <?php  

                                                  error_reporting(0);
                                              

                                                      $qre1="select * from product limit 30";
                                                      
                                                      $run1=mysqli_query($conn,$qre1);

                                                      while($results=mysqli_fetch_array($run1)) {

                                                  echo "<div class='block2'>

                                                        <a href='prod.php?id=".$results['id']."'><img class='bump' src='".$results['pimage']."' style='width: 300px; height: 220px;'></a>
                                                              
                                                        <h6 class='ft'>[ ".$results['name']." ]</h6>
                                                        
                                                        <p>PRICE: ".$results['price'].".00<span style='color: green;font-weight: 800;'> ₹</span></p>
                                                           
                                                        <a href='prod.php?id=".$results['id']."' class='carto' style='width: 100%;'>VIEW</a>
                                                         
                                                       


                                                  </div>";}

                                                  ?>
                                            
                          </div>

                      

            


          
                </div>



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