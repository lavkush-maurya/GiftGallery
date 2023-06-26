<?php
  
  include 'conn.php';
  session_start();
  error_reporting(0);
  $id=$_GET['id'];
  $mails = $_SESSION['email'];

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
    <style type="text/css">
      ::-webkit-scrollbar {
        display: none;
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
            <a class="b1" href="udash.php">Home</a>
          </li>
          <li class="navli1">
            <a class="b1" href="gifts.php">Gifts</a>
          </li>
          
          

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





 




<br>
<div class="dmain" style="float: left;display: inline-flex;position: relative;width: 100%;z-index: 5;">

    <div style="background: #f1f3f6;height: 790px;width: 300px;margin-top: 36px;background-position: 0% 50%;">
      <div style="display:  inline-grid;width: 100%;">
          <a href="#" onclick="m1()" class="i1" id="ho">Home</a>
          <a href="#" onclick="m2()" class="i1" id="us">Orders &nbsp;<span style="color:white;background: red;border-radius: 20px;padding: 1px 8px 2px 8px;opacity: .5;"><?php
                                          error_reporting(0);
                                          $query = "SELECT count(*) from bill where email = '$mails' and status = 'pending'";
                                          $qresult = mysqli_query($conn, $query);
                                          $row = mysqli_fetch_assoc($qresult);
                                          $count = $row["count(*)"];
                                          echo $count;
                                        ?></span></a>
          <a href="#" onclick="m3()" class="i1" id="se">Feedbacks & reply</a>
          <a href="#" onclick="m4()" class="i1" id="pr">Reset Password</a>
    
      </div>
        
    </div>
    <div style="background: white;height: 790px;width: 1600px;max-width: 1400px; margin-top: 36px;overflow: scroll;overflow-x: hidden;">
        




      <div class="x1" id="di1" style="padding-left:50px;">
        <br><center><h3>PROFILE</h3></center><hr>
        <h5>EDIT PROFILE: <?php echo $p;?></h5>
        <div><br>
             <div style="float: left;display: inline-flex;width: 100%;">
              <div style="width: 300px;height: 300px;">
                
                <img src="<?php  

                            error_reporting(0);
                            $qre8="select * from ulogin where email = '$mails'";
                            $run8=mysqli_query($conn,$qre8);

                            while($results8=mysqli_fetch_array($run8)) {
                               
                                echo "".$results8['profile']."";


                              }

                              ?>" style="border-radius: 30px;height: 300px;width: 300px;margin: 0;border: 2px solid black;">
                <form method="post" enctype="multipart/form-data">
                  <input type="file" name="proedit" class="editpro" id="kk" value="" title="" onclick="displayDiv()" style="visibility: hidden;"><label for="kk"  class="editpro"></label>
                  <input type="Submit" name="prosub" class="two" value="Update Profile" style="display: none;padding-left: 50px;" id="sk">
                </form>
              </div>
                

             </div>  



            <div style="margin-top: 300px;"><br><hr>
                <table style="font-size: 20px;">
                  
                  <form method="post">
                    <?php  

                            error_reporting(0);
                            $qr="select * from ulogin where email = '$mails'";
                            $r=mysqli_query($conn,$qr);

                            while($re=mysqli_fetch_array($r)) {
                               
                                echo "
                                    <tr>
                                      <td>Name:</td>
                                      <td class='da1'> ".$re['name']."</td>
                                    </tr>
                                    <tr>
                                      <td>Email:</td>
                                      <td class='da2'> ".$re['email']."</td>
                                    </tr>
                                    <tr>
                                      <td>Phone:</td>
                                      <td class='da2'>+91 ".$re['phone']."</td>
                                    </tr>
                                    <tr>
                                      <td>Address:</td>
                                      <td class='da2'> ".$re['address']."</td>
                                    </tr>
                                    <tr>
                                      <td>Gender:</td>
                                      <td class='da2'> ".$re['gender']."</td>
                                    </tr>
                                    <tr>
                                      <td colspan='2'><hr></td>
                                    </tr>
                                    <tr>
                                      <td colspan='2' style='width: 100%;'><a href='updateinfo.php?id=".$re['id']."&name=".$re['name']."&email=".$re['email']."&phone=".$re['phone']."&address=".$re['address']."&gender=".$re['gender']."' class='d3'>Update</a></td>
                                      
                                    </tr>


                                ";


                              }

                              ?>

                  </form>
                </table>
            </div> 

              
        </div>



      </div>





      <div class="x1" id="di2" style="display: none;">
        <br><center><h3>Orders Page</h3></center><hr>
                  <br><center><h5>Total Orders: [ <?php
                                          error_reporting(0);
                                          $query = "SELECT count(*) from bill where email = '$mails' and status = 'pending'";
                                          $qresult = mysqli_query($conn, $query);
                                          $row = mysqli_fetch_assoc($qresult);
                                          $count = $row["count(*)"];
                                          echo $count;
                                        ?> ] </h5></center><hr>
                  <div style="background:#f1f3f6;height: 900px;overflow: scroll;">
                          
                              <table class="table" style="margin-left: 50px;">
                                                
                                                        <tr >
                                                            <th scope="col">#Id</th>
                                                            <th scope="col">date</th>
                                                            <th scope="col">time</th>
                                                            <th scope="col">total</th>
                                                            <th scope="col">email</th>
                                                            <th scope="col">name</th>
                                                            <th scope="col">status</th>
                                                            <th scope="col">items</th>
                                                            <th scope="col">order id</th>
                                                      
                                                            <th scope="col">delete</th>
                                                        </tr>
                                                        
                                                    <?php
                                                          
                                                          $q1="select * from bill where email = '$mails' and status = 'pending'";
                                                          $r1=mysqli_query($conn,$q1);
                                                          
                                                          
                                                          while($d1=mysqli_fetch_array($r1)) {
                                                             

                                                      

                                                                echo "  
                                                                        <tr>
                                                                            <td scope='row'><p>".$d1['id']."</p></td>
                                                                            <td><p>".$d1['date']."</p></td>
                                                                            <td><p>".$d1['time']."</p></td>
                                                                            <td><p>".$d1['total']."</p></td>
                                                                            <td><p>".$d1['email']."</p></td>
                                                                            <td><p>".$d1['name']."</p></td>
                                                                            <td><p>".$d1['status']."</p></td>
                                                                            <td><p>".$d1['items']."</p></td>
                                                                            <td><p>".$d1['oid']."</p></td>
                                                                           
                                                                            
                                                                            <td><a href='updateorder.php?id=".$d1['id']."' class='btn vt' id='alik'></a></td>
                                                                        </tr>
                                                                        
                                                                    ";
                                                                    
                                                                    
                                                              }
                                                             
                                                        
                                                    ?>


                              </table>        

                  </div>
      </div>






      <div class="x1" id="di3" style="display: none;">
        <br><center><h3>My Feedbacks</h3></center><hr>

                <br><center><h5> [ <?php
                                          error_reporting(0);
                                          $query = "SELECT count(*) from feedback where email = '$mails'";
                                          $qresult = mysqli_query($conn, $query);
                                          $row = mysqli_fetch_assoc($qresult);
                                          $count = $row["count(*)"];
                                          echo $count;
                                        ?> ] </h5></center><hr>
                  <div style="background:#f1f3f6;height: 600px;overflow: scroll;">
                          
                              <table class="table" style="margin-left: 50px;">
                                                
                                                        <tr >
                                                            <th scope="col">#Id</th>
                                                            <th scope="col">email</th>
                                                            <th scope="col">feedback</th>
                                                                                                                
                                                            <th scope="col">delete</th>
                                                        </tr>
                                                        
                                                    <?php
                                                          
                                                          $q1="select * from feedback where email = '$mails'";
                                                          $r1=mysqli_query($conn,$q1);
                                                          
                                                          
                                                          while($d1=mysqli_fetch_array($r1)) {
                                                             

                                                      

                                                                echo "  
                                                                        <tr>
                                                                            <td scope='row'><p>".$d1['id']."</p></td>
                                                                            
                                                                            <td><p>".$d1['email']."</p></td>
                                                                            
                                                                            <td><p>".$d1['feedback']."</p></td>
                                                                            
                                                                            <td><a href='#' class='btn vt' id='alik'></a></td>
                                                                        </tr>
                                                                        
                                                                    ";
                                                                    
                                                                    
                                                              }
                                                             
                                                        
                                                    ?>


                              </table>        

                  </div>
      </div>






      <div class="x1" id="di4" style="display: none;">
        <br><center><h3>Reset Password</h3></center><hr>

                  <?php
                      $q15="select * from ulogin where email = '$mails'";
                      $r15 = mysqli_query($conn,$q15);

                      $opass = $_POST['opass'];
                      $npass = $_POST['npass'];
                      $cpass = $_POST['cpass'];

                      while($d15=mysqli_fetch_array($r15)) {

                            $did = $d15['id'];
                            $demail = $d15['email']; 
                            $dpassword = $d15['password'];                        
                      }


                      if(isset($_POST['spass'])){

                      
                          if($opass == $dpassword) {

                              if($npass == $cpass) {
                                    $que6 = "UPDATE ulogin SET password = '$npass' WHERE id = '$did'";

                                    $data6 = mysqli_query($conn,$que6);
                                    if($data6){

                                      echo "<script> alert('password updated');</script>";
                                    }
                              }

                              else{
                                echo "<script> alert('password did't match');</script>";
                              }
                          }
                          else{
                                echo "<script> alert('password did't match');</script>";
                            }
                          
                    }

                  ?>
                  

                  <div style="background:#f1f3f6;height: 600px;overflow: scroll;">
                         <form method="post">
                           
                         
                         <table class="table" style="margin-left: 50px;width: 60%;">
                                      
                                              <tr>
                                                <td>Old password:</td>
                                                <td><input type="text" name="opass" required min="8"> </td>
                                              </tr>
                                              
                                              <tr>
                                                <td>new password:</td>
                                                <td><input type="text" name="npass" required></td>
                                              </tr>

                                              <tr>
                                                <td>conform password:</td>
                                                <td><input type="text" name="cpass" required></td>
                                              </tr>

                                              <tr>
                                               
                                                <td colspan="2"><input type="submit" name="spass" value="Update" required></td>
                                              </tr>

                    </table> 
                    </form>     

              </div>
      </div>








              







           
     
      </div>  

    </div>


      
</div><br>


   <!-- ***** third div ***** -->









<!-- ***** footer start ***** -->
<br>

<div class="footer" style="width:99%;">
    <?php include("footer.php"); ?>  
</div>
         











<script type="text/javascript">
    var a = document.getElementById("di1");
    var b = document.getElementById("di2");
    var c = document.getElementById("di3");
    var d = document.getElementById("di4");


    function m1() {
      
      if (a.style.display === "none") {
        a.style.display = "block";b.style.display = "none";c.style.display = "none";d.style.display = "none";e.style.display = "none";f.style.display = "none";

      } 
    }

    function m2() {
      
      if (b.style.display === "none") {
        b.style.display = "block";a.style.display = "none";c.style.display = "none";d.style.display = "none";e.style.display = "none";f.style.display = "none";
      } else {
        b.style.display = "block";
        
      }
    }

    function m3() {
      
      if (c.style.display === "none") {
        c.style.display = "block";b.style.display = "none";a.style.display = "none";d.style.display = "none";e.style.display = "none";f.style.display = "none";
      } else {
        c.style.display = "block";
       
      }
    }

    function m4() {
      
      if (d.style.display === "none") {
        d.style.display = "block";b.style.display = "none";c.style.display = "none";a.style.display = "none";e.style.display = "none";f.style.display = "none";
      } else {
        d.style.display = "block";
        
      }
    }











      function displayDiv() {
      
        document.getElementById('sk').style.display = 'block';
        document.getElementById('kk').style.display = 'none';
      }

    

 </script>

  
    
</body>

</html>

<?php

  $r4 = $_SESSION['r4'];
  if($r4 > 0){
    header("Location: prod.php?id=$r4");
  }
?>


<?php
      if(isset($_POST['dele'])){
          
            $qr="delete from bill where id = '$idf'";
            $run = mysqli_query($conn,$qr);


            if($run)
            { 
                                                                        
                echo "<script> alert('your order is cancelled');window.location.assign('dashboard.php');</script>";
                                                                        
            } 
                                                                  
            else
            { 
                echo "<script> alert('error');window.location.assign('dashboard.php');</script>";
            } 
          }
?>







<?php
      if(isset($_POST['prosub'])){


            $file=$_FILES['proedit'];
            $filename = $file['name'];
            $tmp = $file['tmp_name'];    
            $fi = "image/".$filename;

            move_uploaded_file($tmp, "image/". $filename);
                

           $que = "UPDATE ulogin SET profile='$fi' WHERE email='$mails'";

                $data = mysqli_query($conn,$que);


                if($data)
                {
                  echo "<script> alert('Profile updated...');window.location.assign('dashboard.php')</script>";
                } 

                else
                {
                  echo "<script> alert('failed ...error...');window.location.assign('dashboard.php')</script>";
                }
              
          }
?>







