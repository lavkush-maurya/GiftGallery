
<?php
  include 'conn.php';
  
    error_reporting(0);
    session_start();
    $id=$_GET['id'];
    $mails = $_SESSION['email'];
    $tdate= date("Y-m-d");
    unset($_SESSION['r4']);

    $random = rand(1000000,10000000);
                                 
?>


<?php
date_default_timezone_set("Asia/Calcutta");
$ttime = date("h:i:sa");
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




<br><br><br><br>



<div style="display:inline-flex;float: left;position: relative;color: black;width: 100%;">
     
          <div class="col-75 container" style="background: #f1f3f6;height: 700px;padding-top: 20px;">
  
              <form method="post" style="border-right: 1px solid black;padding-right: 40px;float: left;display: inline-flex;">

                <div class="row">
                  <div class="col-50" style="">
                    <h3>Billing Address</h3>
                    <label for="fname"><i class="fa fa-user"></i> Full Name*</label>
                    <input type="text" id="fname" name="firstname" placeholder="John M. Doe" required>
                    <label for="email"><i class="fa fa-envelope"></i> Email*</label>
                    <input type="text" id="email" name="email" placeholder="john@example.com" required>
                    <label for="adr"><i class="fa fa-address-card-o"></i> Address*</label>
                    <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" required>
                    <label for="city"><i class="fa fa-institution"></i> City*</label>
                    <input type="text" id="city" name="city" placeholder="New York" required>

                    <div class="row">
                      <div class="col-50">
                        <label for="state">State *</label>
                        <input type="text" id="state" name="state" placeholder="NY" required> 
                      </div>
                      <div class="col-50">
                        <label for="zip">Zip *</label>
                        <input type="text" id="zip" name="zip" placeholder="10001" required>
                      </div>
                    </div>
                  </div>

                  <div class="col-50">
                    <h3>Payment</h3>
                    
                    <label for="cname">Name on Card*</label>
                    <input type="text" id="cname" name="cardname" placeholder="John More Doe" required>
                    <label for="ccnum">Credit card number*</label>
                    <input type="number" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required style="width: 100%;">
                    <label for="expmonth">Exp Month*</label>

                     <select name="expmonth" style="width: 40%;" required="">
                                  <option value="January" >January</option>
                                  <option value="February" >February</option>
                                  <option value="March" >March</option>
                                  <option value="April" >April</option>
                                  <option value="May" >May</option>
                                  <option value="June" >June</option>
                                  <option value="July" >July</option>
                                  <option value="August" >August</option>
                                  <option value="September" >September</option>
                                  <option value="October" >October</option>
                                  <option value="November" >November</option>
                                  <option value="December" >December</option>
                                                                
                            </select>
           

                    <div class="row">
                      <div class="col-50">
                        <label for="expyear">Exp Year*</label>
                        <input type="number" id="expyear" name="expyear" placeholder="2018" required>
                      </div>
                      <div class="col-50">
                        <label for="cvv">CVV*</label>
                        <input type="number" id="cvv" name="cvv" placeholder="352" required>
                      </div>
                    </div>
                  </div>

                
               <center>
                <input type="submit" value="Continue to checkout" class="btn" style="width: 320px;" name="w1"></center>
              
            </div>
         

       
          <div style="width: 650px;height: 500px;overflow-y: scroll;padding-left: 40px;">
                                    
                                    <a href="cart.php" style="position: relative;"><img src="img/cart.png" class="cat"><span class="spancart" style="width:60px;background: blue;">
                
                                    total <?php
                                          error_reporting(0);
                                          $mails = $_SESSION['email'];
                                          $query = "SELECT count(*) from cart where email = '$mails'";
                                          $qresult = mysqli_query($conn, $query);
                                          $row = mysqli_fetch_assoc($qresult);
                                          $count = $row["count(*)"];
                                          echo $count;
                                    ?>
                                    </span></a>
                              
                                      <table class="table">
                                      
                                              <tr >
                                                
                                                
                                                  <th scope="col">Name</th>
                                                  <th scope="col">price</th>
                                                  <th scope="col">Quantity</th>
                                               
                                              </tr>
                                            
                                          <?php
                                                
                                               
                         


                                                $qre2="select * from product where id = '$id'";
                                                $run2=mysqli_query($conn,$qre2);

                                               

                                                while($results=mysqli_fetch_array($run2)) {


                                                $pf = $results['id'];
                                                $quantity = $results['quantity'];
                                                $pname = $results['name'];
                                                $sid = $results['sid'];
                                                $price = $results['price'];

                                                  
                                                  echo "

                                                          <tr>
                                                           
                                                             
                                                              <td><p>".$results['name']."</p></td>
                                                              
                                                              <td><input type='number' readonly id='fnum' value='$price' style='visibility:hidden;height :0px;width:0px;margin:0px;position: absolute;'><p>".$results['price'].".00<span style='color: green;font-weight: 600;'>₹</span></p></td>";?>
                                                              
                                                              
                                                              <td><input type='number' id="snum" onchange="multiplyBy()" name="lom" value="1" min="1" max='<?php echo "$quantity" ?>' style='width:60px;'></td>

                                                              
                                                      <?php       
                                                         
                                                          
                                                          echo"   </tr>";
                                                         
                                                        
                                                    
                                                      }

                                              
                                              
                                          ?>


                                      </table>
                                   
                                          
                                            <div style="float: left;display: inline-flex;"><h2 style="font-size: 30px;font-family: fantasy;">Total: &nbsp;&nbsp;</h2><h2 id="result" style="color: green;font-weight: 800;"><?php echo "$price"; ?></h2><h2 style="color: green;">.00 ₹</h2></div>
                                            <input type="number" name="sui" value="<?php echo"$price"; ?>" id="result2" style='visibility: hidden;'>
                                      



        </div></form>
                              
</div>

</div>

         



<script type="text/javascript">
  function multiplyBy()
    {
      num1 = document.getElementById(
        "fnum").value;
      num2 = document.getElementById(
        "snum").value;
      document.getElementById(
        "result").innerHTML = num1 * num2;

      document.getElementById(
        "result2").value = num1 * num2;
    }
</script>

  
    
</body>

</html>

<?php
                                                    if(isset($_POST['w1'])){

                                                                      $qtt = $_POST['sui'];
                                                                      $lom = $_POST['lom'];
                                                              

                                                                      $qrh="insert into pbill values('','$pf','$pname','$price','$qtt','$lom','$sid','$mails','$tdate','$random')";
                                                                      $runh = mysqli_query($conn,$qrh);


                                                                      $firstname = $_POST['firstname'];
                                                                      $q = "pending"; 

                                                                      $qr="insert into bill values('','$tdate','$ttime','$qtt','$mails','$firstname','$q','1','$random')";
                                                                      $run = mysqli_query($conn,$qr);

                                                                      if($run)
                                                                      { 
                                                                        
                                                                            echo "<script> alert('congrats your order is on way...');window.location.assign('dashboard.php');</script>";
                                                                        
                                                                      } 
                                                                  
                                                                      else
                                                                      { 
                                                                        echo "<script> alert('error');window.location.assign('cheakout.php');</script>";
                                                                      } 
                                                                    }
?>