<?php
  include 'conn.php';
    error_reporting(0);
    session_start();
    $id=$_GET['id'];
    $mails = $_SESSION['email']; 
    unset($_SESSION['r5']);                              
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
        background: url('images/13.jpg') no-repeat;
        background-size: cover;
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

          &nbsp;&nbsp;
          

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
          <div id="wrapper">

            <div class="searto">
                <h3 style="color: white;">PRODUCT

                    IN CART: [ <?php
                                          error_reporting(0);
                                          $query = "SELECT count(*) from cart where email = '$mails'";
                                          $qresult = mysqli_query($conn, $query);
                                          $row = mysqli_fetch_assoc($qresult);
                                          $count = $row["count(*)"];
                                          echo $count;
                                        ?> ]

                                    
                </h3>

                

                
            </div>

             
                    
                        
                <div class="col-sm" >
                        <div class="col" >
                             <div class="card" style="margin: 0px;box-shadow: 0px 0px 10px 1px silver;height: 500px;overflow-y: scroll;">
                                <div class="card-header">
                                  
                                </div>
                                <div class="card-body">
                                  <div style="width: 100%;">
                                    
                                    <h2 class="col" style="color: black;">CART /*</h2>
                                        
                                      <table class="table">
                                      
                                              <tr >
                                                  <th scope="col">#Id</th>
                                                  <th scope="col">Image</th>
                                                  <th scope="col">Name</th>
                                                  <th scope="col">price</th>
                                                  <th scope="col">Quantity</th>
                                                  <th scope="col">Total</th>
                                                  <th scope="col">Purchase</th>
                                                  <th scope="col">delete</th>
                                              </tr>
                                              
                                          <?php
                                                
                                                $q1="select * from cart where email = '$mails'";
                                                $r1=mysqli_query($conn,$q1);
                                                
                                                
                                                while($d1=mysqli_fetch_array($r1)) {
                                                   

                                                      $sid = $d1['pid'];
                                                
                                                      $q2="select * from product where id = '$sid'";
                                                      $r2=mysqli_query($conn,$q2);
                                                      while($d2=mysqli_fetch_array($r2)) {
                                                        
                                                        
                                                      
                                                        
                                                      
                                                      echo "  
                                                              <tr>
                                                                  <td scope='row'><p>".$d2['id']."</p></td>
                                                                  <td><img src='".$d2['pimage']."' width='50px' height='30px' class='cartimg'></td>
                                                                  <td><p>".$d2['name']."</p></td>
                                                                  
                                                                  <td><p id='yttt' name='pc'>".$d2['price'].".00<span style='color: green;font-weight: 600;'> ₹</span></p></td>
                                                                 
                                                                 "; 
                                                                 $cid = $d2['id'];
                                                                 $s2 = $d2['price'] * $_GET['yo'];
                                                            ?>
                                                                  <form method='POST'>
                                                                      <td><input type='submit' name='action' value='-' style='width:30px;height:30px;'>

                                                                     <input type='number' name='yo' value='<?php echo $_SESSION['plus']; ?>' min='1' max='<?php echo "".$d2['quantity']."";?>' style='width:50px;'>

                                                                     <input type='submit' name='action' value='+' style='width:30px;height:30px;'>
                                                                  </form>
                                                      <?php echo "
                                                                  <td><p> ".$d2['price'].".00<span style='color: green;font-weight: 600;'> ₹</span></p></td>

                                                                  <td><a href='cheakout2.php?id=".$d2['id']."' class='btn' id='alik' style='border: 1px solid black;width:30px;height:30px;margin:0;padding:0;'>-></a></td>

                                                                  <td><a href='delcart.php?id=".$d1['id']."' class='btn vt' id='alik'></a></td>
                                                              </tr>
                                                              
                                                          ";
                                                         


                                                          $t1 = "$qqty * ".$d2['price']."";

                                                          $t = $t1;
                                                      $ttl += "".$d2['price']."";
                                                    }
                                                      $r = $ttl;
                                                      $ty = $r;
                                                }
                                          ?>


                                      </table>
                                     




                                       <?php
                                           
                                          if ($_POST['action'] == '+'){
                                            $d = 0;
                                            $t = $d + 1;
                                              $_SESSION['plus'] = $t;
                                          }
                                          if ($_POST['action'] == '-'){
                                              $_SESSION['minus'] = +1;
                                          }
                                        ?>  
                                            
                                      



                                  </div>
                                </div>
                              </div>
                        </div>


                        <div class="card f2" style="height: 110px;display: inline-flex;float: left;width: 100%;padding: 7px 10px;box-shadow: 0px 0px 10px 1px silver;">
                            
                              <table>
                                  
                                    <tr>
                                      <td><h3>TOTAL: </h3></td>
                                      <td><h3 id="yresult">= <?php echo "$ty"; ?>.00<span style='color: green;font-weight: 600;'> ₹</span></h3></td>
                                    </tr>
                                    
                                    <tr>
                                      <td><h3>BUY: </h3></td>
                                      <td><a href="cheakout.php"><button class="btn btn-success" style="width:200px;font-size: 12px;">CHEAKOUT</button></a></td>
                                    </tr>
                                 
                              </table>
                              
                              
                            
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
         




<script type="text/javascript">
    var a = document.getElementById('ytt');
    var b = document.getElementById('yttt');
    var result = document.getElementById('yresult');


    function subtotal() {
        for(i=0;i<a.length;a++){
          result[i].innerText=(a[i].value)*(a[i].value);
        }           
    }
</script>
  
    
</body>

</html>



