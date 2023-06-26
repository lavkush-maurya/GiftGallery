<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <title>Healthcare.in</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">  
  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header" style="background: black;opacity: .7; border-bottom: 1px solid white;">
    <div class="logo">
      <a href="#" style="font-family: serif;font-size: 30px;text-transform: lowercase;"><em style="color: lightgreen;text-transform: uppercase;">Healthcare</em> .in</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">

        <li><a href="index.php" class="external" style="border: none;">Home</a></li>

        <li><a href="ulogin.php" class="external" style="border: none;">Patients</a></li>


        <li><a href="#section4" style="border: none;">Doctors</a></li>
        
        <li><a href="#section6" style="border: none;">Contact</a></li>

        <li><a href="#section7" style="border: none;">About us</a></li>

      </ul>
    </nav>
  </header>













  <!-- ***** Main Banner Area Start ***** -->
  <section id="top" data-section="section1" >
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/j.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text" style="background: #666;opacity: .8;">
          <div class="caption">
              <h6>-:safe and secure:-</h6>
              <h2 style="font-size: 50px;color: silver;"><em style="color: white;">Gift Gallery</em> .com</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="ulogin.php" class="external buttn" style="background: white; color: green;">- Get New Appoinment -</a></div>
              </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->












  










  













  <section class="section coming-soon" data-section="section3" style="background: url(img/t4.jpg);background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-xs-12">
          
        </div>
        <div class="col-md-5">
          <div class="right-content" style="border: 1px solid white;background: black;opacity: .9;">
            <div class="top-content">
              <h6>Show your experience on <em>feedback</em> submit your feedback</h6>
            </div>
            <form id="contact" method="post">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <input name="femail" type="email" class="form-control" id="femail" placeholder="Email" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <textarea name="feed" class="form-control" id="feed" placeholder="Your Feedback" required="" style="background: #333;color: white;"></textarea>
                  </fieldset>
                </div>
              
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button" name="feedsub">Submit</button>
                  </fieldset>
                </div>
              </div>
            </form>


            <?php
              error_reporting(0);
              $conn=mysqli_connect('localhost','root','','healthcare');

              $fmail = $_POST['femail'];
              $feed = $_POST['feed'];
              $feedsub = $_POST['feedsub'];

              if(isset($feedsub)){

                $que = "insert into feedback values('','$fmail','$feed')";
                $rfeed =mysqli_query($conn,$que);

                if($rfeed){
                  echo "<script> alert('successfully send...');window.location.assign('index.php')</script>";
                }
                else{
                  echo "<script> alert('error..');window.location.assign('index.php')</script>";
                }


              }


            ?>



          </div>
        </div>
      </div>
    </div>
  </section>



      

        









  <section data-section="section4" style="background: black;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>-- Doctors --</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">





          <?php  

                        error_reporting(0);
                            $conn=mysqli_connect('localhost','root','','minor') or die("failed");

                            $qre1="select * from ulogin";
                            $run1=mysqli_query($conn,$qre1);

                            while($results=mysqli_fetch_array($run1)) {

                        echo "<div class='item'>
                                <img src='".$results['img']."' alt='Course #1' style= 'height: 300px;width: 100%;background: white;border-bottom: 1px solid black;'>
                                <div class='down-content'>
                                  <h4>Dr. ".$results['name']."</h4>
                                  <p>Expert in: ".$results['spec']."</p>
                                  <div class='author-image'>
                                    <img src='img/care.jpg' alt='Author 1'>
                                  </div>
                                  <div class='text-button-pay'>
                                    <a href='ulogin.php'>get appoinment --<i class='fa fa-angle-double-right'></i></a>
                                  </div>
                                </div>
                              </div>";}

                        ?>

          


        </div>
      </div>
    </div>
  </section>
  

  









    <center>
    <section data-section="section7" style="background: #222;border-top: 1px solid white;height: auto;">
    
      
        

        <div class="container" style="color: white;"><hr>
          <h1>About Us Page</h1>
          <h3 style="color: lightgreen;">Our mission is to make healthcare better for everyone</h3>
          <p>Through our industry-leading technology, analytics and engagement solutions, we save billions of healthcare dollars annually while helping people lead healthier lives. Our broad range of payment accuracy and population health management solutions advance healthcare by helping healthcare organizations reduce costs and improve health outcomes.</p>
          <p>Here's the Creator Of The Healthcare.in</p>
        </div>

       
        <div class="container row">


          <div class="col" >
            <div class="card" style="width: 320px;">
              <img src="img/myd.jpg" alt="Jane" style="width: 100%;height: 250px;">
              <div class="container">
                <h2 style="margin-top: 10px;font-family: serif;">Vipul Nadge</h2>
                <p class="title" style="font-weight: 600;">CEO & Founder</p>
                <p>The CEO of the Healthcare.in</p>
                <p>ceo@healthcare.com</p>
                <p><button class="button" style="background: black;border: none;color: white;width: 250px;">Contact</button></p>
              </div>
            </div>
          </div>



          <div class="col">
            <div class="card"  style="width: 320px;">
              <img src="img/pro.jpeg" alt="Jane" style="width:100%;height: 250px;">
              <div class="container">
                <h2 style="margin-top: 10px;font-family: serif;">Luvkush Mourya</h2>
                <p class="title" style="font-weight: 600;">Art Director</p>
                <p>The DIRECTOR of the Healthcare.in</p>
                <p>director@healthcare.com</p>
                <p><button class="button" style="background: black;border: none;color: white;width: 250px;">Contact</button></p>
              </div>
            </div>
          </div>


        </div><br><br><br><br>

 
  
  </section>
</center>


















  <footer style="background: black;border-top: 1px solid white;position: relative;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p style="font-family: monospace;"><i class="fa fa-copyright"></i> Copyright 2021 by healthcare.in</p>
        </div>
      </div>
    </div>
  </footer>











 
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

  
    
</body>

</html>