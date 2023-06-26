<?php
  include 'conn.php';
    error_reporting(0);

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

                                      <img class='bump' src='".$results['pimage']."'>
                                            
                                      <h6 class='ft'>[ ".$results['name']." ]</h6>
                                      
                                      <p>PRICE: ".$results['price'].".00<span style='color: green;font-weight: 800;'> ₹</span></p>
                                         
                                      <a href='prod2.php?id=".$results['id']."'>VIEW</a>
                                       
                                     


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

                                                                          <a href='prod2.php?id=".$results['id']."' class='bloc121'><img class='bump' src='".$results['pimage']."'></a>
                                                                            
                                                                          <h6 class='ft'>[ ".$results['name']." ]</h6>
                                                                      
                                                                          <p>PRICE: ".$results['price'].".00<span style='color: green;font-weight: 800;'> ₹</span></p>
                                                                         
                                                                          <a href='prod2.php?id=".$results['id']."'>VIEW</a>
                                                                       
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

                                                        <a href='prod2.php?id=".$results['id']."'><img class='bump' src='".$results['pimage']."' style='width: 300px; height: 220px;'></a>
                                                              
                                                        <h6 class='ft'>[ ".$results['name']." ]</h6>
                                                        
                                                        <p>PRICE: ".$results['price'].".00<span style='color: green;font-weight: 800;'> ₹</span></p>
                                                           
                                                        <a href='prod2.php?id=".$results['id']."' class='carto' style='width: 100%;'>VIEW</a>
                                                         
                                                       


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