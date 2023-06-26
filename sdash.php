<?php
  include 'conn.php';
    error_reporting(0);
    session_start();
    $log=$_POST['log'];
    $mails=$_SESSION['email'];                            
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

<div class="nav1" style="">
  <a class="nav1title" href="#"><em style="color: black;font-weight: bold;text-transform: uppercase;padding-left: 20px;font-size: 20px;">GiftGallery</em>.com</a>


  <div class="navd1" style="width:100%;">
        <ul class="navul1" style="width: 85%;">
          <li class="navli1">
            <a class="b1" href="sdash.php">Home<span class="sr-only">(current)</span></a>
          </li>
         
          
          

        </ul>

        <ul class="navul2" style="padding-left: 5%;">
          <div style="display: inline-flex;">
             &nbsp; 
            <li class="navli1" style="margin-top: 0px;">
              <a href="slogout.php" class="b1" style="border: 1px solid silver;"> LOGOUT</a>
            </li>
            
          </div>
        </ul>
  </div>

</div>










<div class="onediv">


  <!-- ***** Main Banner Area Start ***** -->
      <h3 style="position:absolute;margin-top: 100px;margin-left: 660px;width: 700px;">SELLER ACCOUNT <span style="color:green;"><?php echo $mails; ?></span></h3>
      


      <div class="" style="position:relative;float: left;display: inline-block;width: 80%;margin: 10%;z-index: 3;background: #f1f3f5;padding: 6px;">
          <div id="wrapper">

            <h3 style="color: green;">ADD PRODUCT </h3><hr>
            
            <div class="a2" style="background: white;"><br>
                <form class="signup" method="POST" enctype="multipart/form-data">
                  <h3 style="margin-left: 20px;"><span style="color: silver;">ADD</span> NEW <span style="color: silver;">GIFT</span></h3>
                  <div class="si3" style="color: black;">
                      

                        <div class="k1">
                            
                          
              
                            <label> <b>Name:</b></label><br>
                            <input type="text" name="pname" required="" placeholder="PRODUCT NAME:"><br><br>


                            <label> <b>PRODUCT:</b></label><br>
                            <input type="file" name="img" required="" style="text-transform: lowercase;"><br><br>
                          

                          
                            <label> <b>PRICE:</b></label><br>
                            <input type="number" name="price" required="" placeholder="PRICE:"><br><br>
                          

                          
                            <label> <b>QUANTITY:</b></label><br>
                            <input type="number" name="qty" required="" placeholder="QUANTITY:"><br><br>
                          

                            
                        </div>

                        <div class="k2">
                            <label> <b>DETAILS:</b></label><br>
                            <input type="text" name="pdetails" placeholder="DETAILS" required=""> <br><br>



                            <label> <b>CATOGORY:</b></label><br>
                            
                            <select name="ctgry" style="width: 40%;" required="">
                                  <option value="daughter" >daughter</option>
                                  <option value="grandmother" >grandmother</option>
                                  <option value="sister" >sister</option>
                                  <option value="girlfriend" >girlfriend</option>
                                  <option value="wife" >wife</option>
                                  <option value="mother" >mother</option>
                                  <option value="toys" >toys</option>
                                  <option value="softtoys" >softtoys</option>
                                  <option value="chocolates" >chocolates</option>
                                  <option value="nursery" >nursery</option>
                                  <option value="bigtoys" >bigtoys</option>
                                  <option value="cbottles" >cbottles</option>
                                  <option value="ckeyring" >ckeyring</option>
                                  <option value="dmugs" >dmugs</option>
                                  <option value="handmade" >handmade</option>
                                  <option value="home" >home</option>
                                  <option value="lifestyle" >lifestyle</option>
                                  <option value="mcover" >mcover</option>
                                  <option value="watch" >watch</option>
                                  <option value="shirts" >shirts</option>  
                                  <option value="cups" >cups</option>
                                  <option value="mens" >mens</option>                               
                            </select><br> <br>


                            <label> <b>CUSTOMIZE?:</b></label><br>
                            <div >
                              
                            <select name="sele" style="width: 40%;" required="">
                                  <option value="NO" >no</option>
                                  <option value="YES" >yes</option>
                                
                            </select>

                          </div><br><br>

                          
                        </div>
                        
                  </div>

                  <center><input type="submit" class="subm" name="create" value="ADD PRODUCT" style="width: 200px;height: 50px;font-size: 14px;"></center>


                </form>
          </div>
            
          </div>





          <div class="" style="overflow: scroll;background: silver;">

                  <?php  

                        error_reporting(0);
                    

                            $qre1="select * from product where sid = '$mails'";
                            
                            $run1=mysqli_query($conn,$qre1);

                            while($results=mysqli_fetch_array($run1)) {

                        echo "<div class='block2'>

                              <img class='bump' src='".$results['pimage']."' style='width: 300px; height: 220px;'>
                                    
                              <h6 class='ft'>[ ".$results['name']." ]</h6>
                              
                              <p>PRICE: ".$results['price'].".00<span style='color: green;font-weight: 800;'> ₹</span></p>
                                 
                              <a href='prod3.php?id=".$results['id']."' class='carto' style='width: 100%;'>VIEW</a>
                               
                             


                        </div>";}

                        ?>
                  
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


<?php
      if(isset($_POST['create'])){


            $file=$_FILES['img'];
            $filename = $file['name'];
            $tmp = $file['tmp_name'];    
            $fi = "pimage/".$filename;

            move_uploaded_file($tmp, "pimage/". $filename);
            
            $name=$_POST['pname'];
            $price=$_POST['price'];
            $custom=$_POST['sele'];
            $detail=$_POST['pdetails'];
            $catogory=$_POST['ctgry'];
            $qty=$_POST['qty'];




            $qr="insert into product values('','$name','$fi','$price','$custom','$detail','$catogory','$qty','$mails')";
            $run = mysqli_query($conn,$qr);

            if($run)
            { 
              echo "<script> alert('successfully added...');window.location.assign('sdash.php')</script>";
            }
            else{
              echo "<script> alert('failed to add product');window.location.assign('sdash.php')</script>";
            }



      }

?>