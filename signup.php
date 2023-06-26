<?php
  include 'conn.php';
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
        background: url("images/22.jpg") no-repeat;
        background-size: cover;
      }
      .td1:hover{
        opacity: 1;
      }
    </style>
    <title>sign up</title>
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











<br><br>
<div class="threediv td1">
          <center><br><br>

          <h3>Welcome to <span style="color:green;font-weight: 800;">Gift</span><em>Gallery</em></h3><br>
    
           
          <div class="container a2" style="background: transparent;border: none;">
                <form class="signup" method="POST" enctype="multipart/form-data" style="border: none;">
                  <h1><span style="color: #666;">registration</span></h1><br>
                  <div class="si2">
                      

                        <div class="k1">
                            
                          
              
                            <label> <b>Name:</b></label>
                            <input type="text" name="name" required="" placeholder="Enter name:" style="text-transform: lowercase;"><br><br>


                            <label> <b>Profile:</b></label>
                            <input type="file" name="img" required="" style="text-transform: lowercase;"><br><br>
                          

                          
                            <label> <b>Email:</b></label>
                            <input type="email" name="email" required="" placeholder="Email:" style="text-transform: lowercase;"><br><br>
                          

                          
                            <label> <b>Phone no:</b></label>
                            <input type="number" name="phone" required="" placeholder="Phone:"><br><br>
                          

                            
                        </div>

                        <div class="k2">
                            <label> <b>Password:</b></label>
                            <input type="password" name="password" placeholder="Password:" required=""> <br><br>



                            <label> <b>Address:</b></label>
                            <input type="text" name="address" placeholder="Address:" required="">  <br><br>



                            <label> <b>Gender:</b></label>
                            <div >
                              
                            <select name="gender" style="width: 40%;" required="">
                                  <option value="male" >male</option>
                                  <option value="female" >female</option>
                                  <option value="other" >other</option>
                            </select>

                          </div>

                          
                        </div>
                        
                  </div>

                  <input type="submit" class="subm" name="create" value="sign up" style="width: 200px;height: 50px;font-size: 16px;margin-top: 30px;">


                </form>
          </div>
</div>


<div>
  
  
</div>


   <!-- ***** third div ***** -->



    
</body>

</html>




<?php
      if(isset($_POST['create'])){


            $file=$_FILES['img'];
            $filename = $file['name'];
            $tmp = $file['tmp_name'];    
            $fi = "image/".$filename;

            move_uploaded_file($tmp, "image/". $filename);
            
            $name=$_POST['name'];
            $address=$_POST['address'];
            $gender=$_POST['gender'];
            $email=$_POST['email'];
            $phonenumber=$_POST['phone'];
            $password=$_POST['password'];




            $qr="insert into ulogin values('','$fi','$name','$email','$phonenumber','$password','$address','$gender')";
            $run = mysqli_query($conn,$qr);

            if($run)
            { 
              echo "<script> alert('successfully ragistered...');window.location.assign('ulogin.php')</script>";
            }
            else{
              echo "<script> alert('failed to register, cheak email, or email already exists');window.location.assign('uignup.php')</script>";
            }



      }

?>