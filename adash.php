<?php
  include 'conn.php';
    error_reporting(0);
    session_start();
    $log=$_POST['log'];
                                
?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> 
    <link rel="icon" type="image/x-icon" href="fav/4.png">
    <style type="text/css">
    
      .nav1{
        position: fixed;
        width: 100%;
        z-index: 6;
        border-bottom: 1px solid black;
        background: white;
        height: 60px;
        float: left;
        display: inline-flex;
      }
      ::-webkit-scrollbar {
        display: none;
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
            <a class="b1" href="#">Home<span class="sr-only">(current)</span></a>
          </li>
        </ul>

        <ul class="navul2" style="padding-left: 5%;">
          <div style="display: inline-flex;">
             
            <li class="navli1" style="">
              <a href="alogout.php" class="b1" style="border: 1px solid silver;"><?php echo $_SESSION['pid']; ?> LOGOUT</a>
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
          <a href="#" onclick="m2()" class="i1" id="us">Users</a>
          <a href="#" onclick="m3()" class="i1" id="se">Sellers</a>
          <a href="#" onclick="m4()" class="i1" id="pr">Products</a>
          <a href="#" onclick="m5()" class="i1" id="fe">Feedbacks</a>
          <a href="#" onclick="m6()" class="i1" id="re">Earnings</a>
      </div>
        
    </div>
    <div style="background: white;height: 790px;width: 1300px;max-width: 1400px; margin-top: 36px;overflow: scroll;overflow-x: hidden;">
        
      <div class="x1" id="di1" >
        <br><center><h3>Home Page</h3></center><hr><h5>Users:</h5>
        <div>
              <div style="background:#f1f3f6;height: 300px;overflow: scroll;">
                
                    <table class="table" style="margin-left: 50px;">
                                      
                                              <tr >
                                                  <th scope="col">#Id</th>
                                                  <th scope="col">Image</th>
                                                  <th scope="col">Name</th>
                                                  <th scope="col">email</th>
                                                  <th scope="col">Phone</th>
                                                  
                                                  <th scope="col">delete</th>
                                              </tr>
                                              
                                          <?php
                                                
                                                $q1="select * from ulogin limit 10";
                                                $r1=mysqli_query($conn,$q1);
                                                
                                                
                                                while($d1=mysqli_fetch_array($r1)) {
                                                   

                                            

                                                      echo "  
                                                              <tr>
                                                                  <td scope='row'><p>".$d1['id']."</p></td>
                                                                  <td><img src='".$d1['profile']."' width='50px' height='50px'></td>
                                                                  <td><p>".$d1['name']."</p></td>
                                                                  
                                                                  <td><p>".$d1['email']."</p></td>
                                                                  
                                                                  <td><p>+91 ".$d1['phone']."</p></td>
                                                                  
                                                                  <td><a href='#' class='btn vt' id='alik'></a></td>
                                                              </tr>
                                                              
                                                          ";
                                                          
                                                          
                                                    }
                                                   
                                              
                                          ?>


                    </table>        

              </div><hr><h5>Sellers:</h5>

              <div style="background:#f1f3f6;height: 300px;overflow: scroll;">
                                  
                        <table class="table" style="margin-left: 50px;">
                                      
                                              <tr >
                                                  <th scope="col">#Id</th>
                                                  <th scope="col">Image</th>
                                                  <th scope="col">Name</th>
                                                  <th scope="col">email</th>
                                                  <th scope="col">Phone</th>
                                                  
                                                  <th scope="col">delete</th>
                                              </tr>
                                              
                                          <?php
                                                
                                                $q1="select * from slogin limit 10";
                                                $r1=mysqli_query($conn,$q1);
                                                
                                                
                                                while($d1=mysqli_fetch_array($r1)) {
                                                   

                                            

                                                      echo "  
                                                              <tr>
                                                                  <td scope='row'><p>".$d1['id']."</p></td>
                                                                  <td><img src='".$d1['profile']."' width='50px' height='50px'></td>
                                                                  <td><p>".$d1['name']."</p></td>
                                                                  
                                                                  <td><p>".$d1['email']."</p></td>
                                                                  
                                                                  <td><p>+91 ".$d1['phone']."</p></td>
                                                                  
                                                                  <td><a href='#' class='btn vt' id='alik'></a></td>
                                                              </tr>
                                                              
                                                          ";
                                                          
                                                          
                                                    }
                                                   
                                              
                                          ?>


                        </table>           
              </div><hr><h5>Products top [ 20 ]:</h5>

              <div style="background:#f1f3f6;height: 300px;overflow: scroll;">
            
                         <table class="table" style="margin-left: 50px;">
                                      
                                              <tr >
                                                  <th scope="col">#Id</th>
                                                  <th scope="col">Image</th>
                                                  <th scope="col">Name</th>
                                                  <th scope="col">price</th>
                                                  <th scope="col">catogory</th>
                                                  
                                                  <th scope="col">view</th>
                                              </tr>
                                              
                                          <?php
                                                
                                                $q1="select * from product limit 20";
                                                $r1=mysqli_query($conn,$q1);
                                                
                                                
                                                while($d1=mysqli_fetch_array($r1)) {
                                                   

                                            

                                                      echo "  
                                                              <tr>
                                                                  <td scope='row'><p>".$d1['id']."</p></td>
                                                                  <td><img src='".$d1['pimage']."' width='50px' height='50px'></td>
                                                                  <td><p>".$d1['name']."</p></td>
                                                                  
                                                                  <td><p>".$d1['price']."</p></td>
                                                                  
                                                                  <td><p>".$d1['catogory']."</p></td>
                                                                  
                                                                  <td><a href='view3.php?id=".$d1['id']."' class='' id='alik' style='text-decoration:none;padding:6px 20px;'>-></a></td>
                                                              </tr>
                                                              
                                                          ";
                                                          
                                                          
                                                    }
                                                   
                                              
                                          ?>


                    </table>     

              </div><hr><h5>Reviews:</h5>

              <div style="background:#f1f3f6;height: 300px;overflow: scroll;">
                       <table class="table" style="margin-left: 50px;">
                                      
                                              <tr >
                                                  <th scope="col">#Id</th>
                                                  <th scope="col">pid</th>
                                                  <th scope="col">email</th>
                                                  <th scope="col">review</th>
                                                 
                                                  
                                                  <th scope="col">delete</th>
                                              </tr>
                                              
                                          <?php
                                                
                                                $q1="select * from review limit 20";
                                                $r1=mysqli_query($conn,$q1);
                                                
                                                
                                                while($d1=mysqli_fetch_array($r1)) {
                                                   

                                            

                                                      echo "  
                                                              <tr>
                                                                  <td scope='row'><p>".$d1['id']."</p></td>
                                                               
                                                                  <td><p>".$d1['pid']."</p></td>
                                                                  
                                                                  <td><p>".$d1['email']."</p></td>
                                                                  
                                                                  <td><p>".$d1['review']."</p></td>
                                                                  
                                                                  <td><a href='#' class='btn vt' id='alik'></a></td>
                                                              </tr>
                                                              
                                                          ";
                                                          
                                                          
                                                    }
                                                   
                                              
                                          ?>


                    </table>           
                                  
              </div><hr>

              
        </div>



      </div>


      <div class="x1" id="di2" style="display: none;">
        <br><center><h3>Users Page</h3></center><hr>
                  <br><center><h5>Total Users: [ <?php
                                          error_reporting(0);
                                          $query = "SELECT count(*) from ulogin";
                                          $qresult = mysqli_query($conn, $query);
                                          $row = mysqli_fetch_assoc($qresult);
                                          $count = $row["count(*)"];
                                          echo $count;
                                        ?> ] </h5></center><hr>
                  <div style="background:#f1f3f6;height: 600px;overflow: scroll;">
                          
                              <table class="table" style="margin-left: 50px;">
                                                
                                                        <tr >
                                                            <th scope="col">#Id</th>
                                                            <th scope="col">Image</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">email</th>
                                                            <th scope="col">Phone</th>
                                                      
                                                            <th scope="col">delete</th>
                                                        </tr>
                                                        
                                                    <?php
                                                          
                                                          $q1="select * from ulogin limit 20";
                                                          $r1=mysqli_query($conn,$q1);
                                                          
                                                          
                                                          while($d1=mysqli_fetch_array($r1)) {
                                                             

                                                      

                                                                echo "  
                                                                        <tr>
                                                                            <td scope='row'><p>".$d1['id']."</p></td>
                                                                            <td><img src='".$d1['profile']."' width='50px' height='50px'></td>
                                                                            <td><p>".$d1['name']."</p></td>
                                                                            
                                                                            <td><p>".$d1['email']."</p></td>
                                                                            
                                                                            <td><p>+91 ".$d1['phone']."</p></td>
                                                                            
                                                                            <td><a href='#' class='btn vt' id='alik'></a></td>
                                                                        </tr>
                                                                        
                                                                    ";
                                                                    
                                                                    
                                                              }
                                                             
                                                        
                                                    ?>


                              </table>        

                  </div>
      </div>


      <div class="x1" id="di3" style="display: none;">
        <br><center><h3>Sellers Page</h3></center><hr>

                <br><center><h5>Total Sellers: [ <?php
                                          error_reporting(0);
                                          $query = "SELECT count(*) from slogin";
                                          $qresult = mysqli_query($conn, $query);
                                          $row = mysqli_fetch_assoc($qresult);
                                          $count = $row["count(*)"];
                                          echo $count;
                                        ?> ] </h5></center><hr>
                  <div style="background:#f1f3f6;height: 600px;overflow: scroll;">
                          
                              <table class="table" style="margin-left: 50px;">
                                                
                                                        <tr >
                                                            <th scope="col">#Id</th>
                                                            <th scope="col">Image</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">email</th>
                                                            <th scope="col">Phone</th>
                                                      
                                                            <th scope="col">delete</th>
                                                        </tr>
                                                        
                                                    <?php
                                                          
                                                          $q1="select * from slogin limit 20";
                                                          $r1=mysqli_query($conn,$q1);
                                                          
                                                          
                                                          while($d1=mysqli_fetch_array($r1)) {
                                                             

                                                      

                                                                echo "  
                                                                        <tr>
                                                                            <td scope='row'><p>".$d1['id']."</p></td>
                                                                            <td><img src='".$d1['profile']."' width='50px' height='50px'></td>
                                                                            <td><p>".$d1['name']."</p></td>
                                                                            
                                                                            <td><p>".$d1['email']."</p></td>
                                                                            
                                                                            <td><p>+91 ".$d1['phone']."</p></td>
                                                                            
                                                                            <td><a href='#' class='btn vt' id='alik'></a></td>
                                                                        </tr>
                                                                        
                                                                    ";
                                                                    
                                                                    
                                                              }
                                                             
                                                        
                                                    ?>


                              </table>        

                  </div>
      </div>


      <div class="x1" id="di4" style="display: none;">
        <br><center><h3>Products Page</h3></center><hr>


                  <br><center><h5>Total Products: [ <?php
                                          error_reporting(0);
                                          $query = "SELECT count(*) from product";
                                          $qresult = mysqli_query($conn, $query);
                                          $row = mysqli_fetch_assoc($qresult);
                                          $count = $row["count(*)"];
                                          echo $count;
                                        ?> ] </h5></center><hr>

                  <div style="background:#f1f3f6;height: 600px;overflow: scroll;">
                          
                         <table class="table" style="margin-left: 50px;">
                                      
                                              <tr >
                                                  <th scope="col">#Id</th>
                                                  <th scope="col">Image</th>
                                                  <th scope="col">Name</th>
                                                  <th scope="col">price</th>
                                                  <th scope="col">catogory</th>
                                                  <th scope="col">Update</th>
                                                  <th scope="col">delete</th>
                                              </tr>
                                              
                                          <?php
                                                
                                                $q1="select * from product limit 20";
                                                $r1=mysqli_query($conn,$q1);
                                                
                                                
                                                while($d1=mysqli_fetch_array($r1)) {
                                                   

                                            

                                                      echo "  
                                                              <tr>
                                                                  <td scope='row'><p>".$d1['id']."</p></td>
                                                                  <td><img src='".$d1['pimage']."' width='50px' height='50px'></td>
                                                                  <td><p>".$d1['name']."</p></td>
                                                                  
                                                                  <td><p>".$d1['price']."</p></td>
                                                                  
                                                                  <td><p>".$d1['catogory']."</p></td>
                                                                  <td><a href='#' class='btn vt2'></a></td>
                                                                  <td><a href='#' class='btn vt'></a></td>
                                                              </tr>
                                                              
                                                          ";
                                                          
                                                          
                                                    }
                                                   
                                              
                                          ?>


                    </table>     

              </div>
      </div>


      <div class="x1" id="di5" style="display: none;">
        <br><center><h3>Feedback Page</h3></center><hr>


                  <br><center><h5>Total Feedbacks: [ <?php
                                          error_reporting(0);
                                          $query = "SELECT count(*) from feedback";
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
                                                
                                                $q1="select * from feedback limit 20";
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


      <div class="x1" id="di6" style="display: none;">
        <br><center><h3>Earnings Page</h3></center><hr>







              







           
     
      </div>  

    </div>


      
</div><br>

<!-- ***** Main Banner Area End ***** -->


<!-- ***** footer start ***** -->

<div style="z-index: 1;width: 99%;">
        <?php include("footer.php"); ?>  
</div>   


 <script type="text/javascript">
    var a = document.getElementById("di1");
    var b = document.getElementById("di2");
    var c = document.getElementById("di3");
    var d = document.getElementById("di4");
    var e = document.getElementById("di5");
    var f = document.getElementById("di6");

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

    function m5() {
      
      if (e.style.display === "none") {
        e.style.display = "block";b.style.display = "none";c.style.display = "none";d.style.display = "none";a.style.display = "none";f.style.display = "none";
      } else {
        e.style.display = "block";
       
      }
    }

    function m6() {
      
      if (f.style.display === "none") {
        f.style.display = "block";b.style.display = "none";c.style.display = "none";d.style.display = "none";e.style.display = "none";a.style.display = "none";
      } else {
        f.style.display = "block";
      
      }
    }

 </script>


  
    
</body>

</html>