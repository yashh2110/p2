<?php
session_start();
include ("dbconn.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="The best opticals shop. Providing best service over 23 years.all types of frames and eye checkups are available">
    <meta name="keywords" content="opticals,optical shop,optical store,eye care,spects,frames,spectacles">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./bootstrap/js/bootstrap.min.js">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet"><title>National Opticals</title>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  </head>
  <body>
    <section id="home" class="home_background">
      <div class="img container-fluid-sm" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">
        <img src="./images/picmain.jpg" alt="">
      </div>
      <div id="forsmall" class="conatiner-fluid-sm ">
        <div id="homec" class="carousel slide" data-ride="carousel">
          <ul class="carousel-indicators">
            <li data-target="#homec" data-slide-to="0" class="active"></li>
            <li data-target="#homec" data-slide-to="1"></li>
            <li data-ride="#homec" data-slide-to="2"></li>
          </ul>
          <div class="carousel-inner">
            <?php
            $sql ="SELECT * FROM smallhome ORDER BY `date` DESC";
            $result = mysqli_query($conn,$sql);
            $count="";
            while ($row = mysqli_fetch_assoc($result)) {
              if(empty($count)){
             ?>
            <div class="carousel-item main active">
              <?php
              $count=1;
            }else{
              ?>
              <div class="carousel-item main">
              <?php
            }
               ?>
              <img src="./mobilehomeslides/<?php echo $row['smallhomeimg'] ?>" alt="Nationalopticals">
            </div>
            <?php

          }
             ?>
          </div>
          <a href="#homec" class="carousel-control-prev" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a>
          <a href="#homec" data-slide="next" class="carousel-control-next"> <span class="carousel-control-next-icon"></span> </a>
        </div>

      </div>

    <div class="topnav" id="myTopnav">
      <a href="#call" data-aos="fade-right" data-aos-offset="300" data-aos-duration="1500" data-aos-easing="ease-in-sine" class="active bg-primary">CallUs</a>
      <a href="#location" data-aos="fade-right" data-aos-offset="300" data-aos-duration="1600" data-aos-easing="ease-in-sine" >Location</a>
      <a href="full.php"data-aos="fade-right" data-aos-offset="300" data-aos-duration="1700" data-aos-easing="ease-in-sine" >Fullframes</a>
      <a href="half.php"data-aos="fade-right" data-aos-offset="300" data-aos-duration="1800" data-aos-easing="ease-in-sine" >HalfFrames</a>
      <a href="sun.php"data-aos="fade-right" data-aos-offset="300" data-aos-duration="1900" data-aos-easing="ease-in-sine" >Sunglasses</a>

      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
    <div class="container-fluid-sm logo" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="1400" >
      <img src="./images/logo1.png" alt="">
    </div>
    <div class="container-fluid-sm logosmall" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="1400" >
      <img src="./images/logosmall.png" alt="">
    </div>
    <h1 class="ml4 container-sm" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="1000">
      <span class="letters letters-1 p-1 text-primary">Nationalopticals</span>
      <span class="letters letters-2 p-1 text-warning">Welcomes</span>
      <span class="letters letters-3 p-1">You</span>
    </h1>

    <div class="para">
      <h1 class="ml1 container-fluid-sm" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="1400" >
        <span class="text-wrapper">
          <span class="letters">Providing Excellent & Expertized Service Over <b style="background:#e6e6ff color:white">23 YEARS</b> </span>
        </span>
      </h1>
      <div class="caption"  data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="1400" >
        <p class="text-left">Quality And Care Are Our First priority </p>
      </div>
      <div class="caption1"  data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="1400" >
        <p class="text-left">Full frames,Half frames,Shell frames,Rim less frames,ContactLenses are available</p>
      </div>

    </div>
    <h1 class="ml11">
      <span class="text-wrapper">
        <span class="line line1"></span>
        <span class="letters">Let us See The World Clear with Nationalopticals </span>
      </span>
    </h1>
      <a  href="#products" data-aos="fade-left" style="transition-delay: 6s;" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="1400" href="#" class="btn btn-primary makeapp p-2 m-2">Products</a>
    <div  class="godown">
      <a href="#products"><i class="fas fa-angle-down"></i></a>

    </div>
    </section>
    <section id="products" class="itemscroll">
      <div class="container-sm productheading">
        <h3 class="text-center ">Products</h3>

      </div>

      <div class="container my-4 ">

    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item p-2 m-2" data-ride="carousel">
      <div class="productheading ">
        <h4 class="text-left">Sunglasses</h4>
        <a href="sun.php" class="btn btn-primary text-white mb-2" style="float:right">Show More</a>

      </div>
      <!--Controls-->
      <div class="controls-top">
        <a id="btnprev" class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a id="btnnext" class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
        <li data-target="#multi-item-example" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->
      <?php
        $sunsql = "SELECT * FROM homesun order by `date` DESC LIMIT 0 , 1";
        $sunquery = mysqli_query($conn,$sunsql);
        while ($sunrow=mysqli_fetch_assoc($sunquery)) {
       ?>
      <div class="carousel-inner" role="listbox">
        <!-- SUNGLASSES -->

        <!--First slide-->
        <div class="carousel-item active">

          <div class="row">
            <div data-aos="fade-up"  data-aos-duration="100"class="col-sm-4">
              <div class="card">
                <img style="width:100%;height:250px;" src="./homesun/<?php echo $sunrow['hsr1img1'] ?>"
                  alt="Card image cap">
              </div>
            </div>

            <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4 clearfix d-none d-sm-block">
              <div class="card">
                <img  style="width:100%;height:250px;"src="./homesun/<?php echo $sunrow['hsr1img2'] ?>"
                  alt="Card image cap">

              </div>
            </div>

            <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4 clearfix d-none d-sm-block">
              <div class="card">
                <img class="card-img-top" style="width:100%;height:250px;"  src="./homesun/<?php echo $sunrow['hsr1img3'] ?>"
                  alt="Card image cap">

              </div>
            </div>
          </div>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

          <div class="row">
            <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4">
              <div class="card">
                <img class="card-img-top" style="width:100%;height:250px;"  src="./homesun/<?php echo $sunrow['hsr2img1'] ?>"
                  alt="Card image cap">

              </div>
            </div>

            <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4 clearfix d-none d-sm-block">
              <div class="card">
                <img class="card-img-top" style="width:100%;height:250px;"  src="./homesun/<?php echo $sunrow['hsr2img2'] ?>"
                  alt="Card image cap">

              </div>
            </div>

            <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4 clearfix d-none d-sm-block">
              <div class="card">
                <img class="card-img-top" style="width:100%;height:250px;"  src="./homesun/<?php echo $sunrow['hsr2img3'] ?>"
                  alt="Card image cap">

              </div>
            </div>
          </div>

        </div>
        <!--/.Second slide-->

        <!--Third slide-->
        <div class="carousel-item">

          <div class="row">
            <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4">
              <div class="card">
                <img class="card-img-top" style="width:100%;height:250px;"  src="./homesun/<?php echo $sunrow['hsr3img1'] ?>"
                  alt="Card image cap">

              </div>
            </div>
            <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4 clearfix d-none d-sm-block">
              <div class="card">
                <img class="card-img-top" style="width:100%;height:250px;"  src="./homesun/<?php echo $sunrow['hsr3img2'] ?>"
                  alt="Card image cap">

              </div>
            </div>
            <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4 clearfix d-none d-sm-block">
              <div class="card">
                <img class="card-img-top" style="width:100%;height:250px;"  src="./homesun/<?php echo $sunrow['hsr3img3'] ?>"
                  alt="Card image cap">

              </div>
            </div>


            </div>
          </div>

        </div>
        <?php
      }
        ?>

        <!--/.Third slide-->

      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->


    </div>
  <div class="container my-4  pb-3">

<!--Carousel Wrapper-->
<div id="multi-item2" class="carousel slide carousel-multi-item p-2 m-2" data-ride="carousel">
  <div class="productheading">
    <h4 class="text-left">Frameless</h4>
    <a href="frameless.php" class="btn btn-primary text-white mb-2" style="float:right">Show More</a>
  </div>
  <!--Controls-->
  <div class="controls-top">
    <a id="btnprev" class="btn-floating" href="#multi-item2" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
    <a id="btnnext" class="btn-floating" href="#multi-item2" data-slide="next"><i class="fa fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#multi-item2" data-slide-to="0" class="active"></li>
    <li data-target="#multi-item2" data-slide-to="1"></li>
    <li data-target="#multi-item2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!-- FRAMELESS -->
  <?php
    $sunsql = "SELECT * FROM homeless order by `date` DESC LIMIT 0 , 1";
    $sunquery = mysqli_query($conn,$sunsql);
    while ($sunrow=mysqli_fetch_assoc($sunquery)) {
   ?>
  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">

      <div class="row">
        <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4">
          <div class="card">
            <img class="card-fit" style="width:100%;height:250px;" src="./homeless/<?php echo $sunrow['hfr1img1'] ?>"
              alt="Card image cap">
          </div>
        </div>

        <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4 clearfix d-none d-sm-block">
          <div class="card">
            <img  style="width:100%;height:250px;"src="./homeless/<?php echo $sunrow['hfr1img2'] ?>"
              alt="Card image cap">

          </div>
        </div>

        <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4 clearfix d-none d-sm-block">
          <div class="card">
            <img class="card-img-top" style="width:100%;height:250px;"  src="./homeless/<?php echo $sunrow['hfr1img3'] ?>"
              alt="Card image cap">

          </div>
        </div>
      </div>

    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item">

      <div class="row">
        <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4">
          <div class="card">
            <img class="card-img-top" style="width:100%;height:250px;"  src="./homeless/<?php echo $sunrow['hfr2img1'] ?>"
              alt="Card image cap">

          </div>
        </div>

        <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4 clearfix d-none d-sm-block">
          <div class="card">
            <img class="card-img-top" style="width:100%;height:250px;"  src="./homeless/<?php echo $sunrow['hfr2img2'] ?>"
              alt="Card image cap">

          </div>
        </div>

        <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4 clearfix d-none d-sm-block">
          <div class="card">
            <img class="card-img-top" style="width:100%;height:250px;"  src="./homeless/<?php echo $sunrow['hfr2img3'] ?>"
              alt="Card image cap">

          </div>
        </div>
      </div>

    </div>
    <!--/.Second slide-->

    <!--Third slide-->
    <div class="carousel-item">

      <div class="row">
        <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4">
          <div class="card">
            <img class="card-img-top" style="width:100%;height:250px;"  src="./homeless/<?php echo $sunrow['hfr3img1'] ?>"
              alt="Card image cap">

          </div>
        </div>
        <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4 clearfix d-none d-sm-block">
          <div class="card">
            <img class="card-img-top" style="width:100%;height:250px;"  src="./homeless/<?php echo $sunrow['hfr3img2'] ?>"
              alt="Card image cap">

          </div>
        </div>
         <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4 clearfix d-none d-sm-block">
            <div class="card">
              <img class="card-img-top" style="width:100%;height:250px;"  src="./homeless/<?php echo $sunrow['hfr3img3'] ?>"
                alt="Card image cap">

            </div>
          </div>

        </div>
      </div>

    </div>
    <?php
  }
     ?>
    <!--/.Third slide-->

  </div>
  <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->


</div>

    <div class="container my-4  pb-3">

  <!--Carousel Wrapper-->
  <div id="multi-item3" class="carousel slide carousel-multi-item p-2 m-2" data-ride="carousel">
    <div class="productheading ">
      <h4 class="text-left">Fullframes</h4>
      <a href="full.php" class="btn btn-primary text-white mb-2" style="float:right">Show More</a>

    </div>
    <!--Controls-->
    <div class="controls-top">
      <a id="btnprev" class="btn-floating" href="#multi-item3" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
      <a id="btnnext" class="btn-floating" href="#multi-item3" data-slide="next"><i class="fa fa-chevron-right"></i></a>
    </div>
    <!--/.Controls-->

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#multi-item3" data-slide-to="0" class="active"></li>
      <li data-target="#multi-item3" data-slide-to="1"></li>
      <li data-target="#multi-item3" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
<!-- Fullframes -->
    <!--Slides-->
    <?php
      $sunsql = "SELECT * FROM homefull order by `date` DESC LIMIT 0 , 1";
      $sunquery = mysqli_query($conn,$sunsql);
      while ($sunrow=mysqli_fetch_assoc($sunquery)) {
     ?>
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">

        <div class="row">
          <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4">
            <div class="card">
              <img class="card-fit" style="width:100%;height:250px;" src="./homefull/<?php echo $sunrow['hffr1img1'] ?>"
                alt="Card image cap">
            </div>
          </div>

          <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4 clearfix d-none d-sm-block">
            <div class="card">
              <img  style="width:100%;height:250px;"src="./homefull/<?php echo $sunrow['hffr1img2'] ?>"
                alt="Card image cap">

            </div>
          </div>

          <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4 clearfix d-none d-sm-block">
            <div class="card">
              <img class="card-img-top" style="width:100%;height:250px;"  src="./homefull/<?php echo $sunrow['hffr1img3'] ?>"
                alt="Card image cap">

            </div>
          </div>
        </div>

      </div>
      <!--/.First slide-->

      <!--Second slide-->
      <div class="carousel-item">

        <div class="row">
          <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4">
            <div class="card">
              <img class="card-img-top" style="width:100%;height:250px;"  src="./homefull/<?php echo $sunrow['hffr2img1'] ?>"
                alt="Card image cap">

            </div>
          </div>

          <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4 clearfix d-none d-sm-block">
            <div class="card">
              <img class="card-img-top" style="width:100%;height:250px;"  src="./homefull/<?php echo $sunrow['hffr2img2'] ?>"
                alt="Card image cap">

            </div>
          </div>

          <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4 clearfix d-none d-sm-block">
            <div class="card">
              <img class="card-img-top" style="width:100%;height:250px;"  src="./homefull/<?php echo $sunrow['hffr2img3'] ?>"
                alt="Card image cap">

            </div>
          </div>
        </div>

      </div>
      <!--/.Second slide-->

      <!--Third slide-->
      <div class="carousel-item">

        <div class="row">
          <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4">
            <div class="card">
              <img class="card-img-top" style="width:100%;height:250px;"  src="./homefull/<?php echo $sunrow['hffr3img1'] ?>"
                alt="Card image cap">

            </div>
          </div>
          <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4 clearfix d-none d-sm-block">
            <div class="card">
              <img class="card-img-top" style="width:100%;height:250px;"  src="./homefull/<?php echo $sunrow['hffr3img2'] ?>"
                alt="Card image cap">

            </div>
          </div>
          <div data-aos="fade-up"  data-aos-duration="1000" class="col-sm-4 clearfix d-none d-sm-block">
              <div class="card">
                <img class="card-img-top" style="width:100%;height:250px;"  src="./homefull/<?php echo $sunrow['hffr3img3'] ?>"
                  alt="Card image cap">

              </div>
            </div>

          </div>
        </div>

      </div>
      <!--/.Third slide-->

    </div>
    <?php
  }
     ?>
    <!--/.Slides-->

  </div>
  <!--/.Carousel Wrapper-->


  </div>
      </section>
    <section class="checkup">
      <img data-aos="fade-left" data-aos-offset="10px" data-aos-duration="1000"src="./images/checkup.jpg" alt="">
      <div class="dark">

      </div>
      <div class="careheading">
        <h1 class="text-center text-primary mt-4">Eye checkup</h1>
        <p class="text-dark text-center" style="font-family:Helvetica;width:60%;position:relative;margin-left:auto;margin-right:auto">We have Expertized eye checkup.We are Providing our service over 23 years with out fail.We have highly qualified staff for the checkups.Your satisfaction is over first priority.Let us make the world crystel clear</p>
        <a href="tel:+919390307908" style="font-size:0.8em;position:relative;left:40%;" class="btn btn-primary text-white text-center p-2">Call us</a>
      </div>
    </section>
    <section id="location" class="locationsec">
      <div class="container-sm">
        <h3 class="text-center locationheading" data-aos="fade-down">Location</h3>
        <div class="input-group locationbox">
          <ul class="address">
            <li id="add1"  data-aos="fade-left"  data-aos-duration="500">Branch1</li>
            <li id="add2"  data-aos="fade-left"  data-aos-duration="700">Branch2</li>
          </ul>
          <div id="map1" class="iframe">
            <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15668.174401949896!2d78.06776368197585!3d10.960079175763148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baa2fafff8a3e35%3A0x871e5ff3f9150506!2sNational%20Opticals!5e0!3m2!1sen!2sin!4v1598711496494!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
          <div class="iframe" id="map2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.080384564336!2d78.0018031146257!3d11.10738689209747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3babd4b160fb40d7%3A0x73708bd97bd55826!2sNational%20Opticals!5e0!3m2!1sen!2sin!4v1598714045865!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>

    </section>
    <section id="call" class="call">
      <h2 class="text-primary text-center pt-3" style="font-family: 'Orbitron', sans-serif;">Featured Brands</h2>
      <div class="brands input-group">

        <img class="p-2"src="./images/brand1.jpeg" alt="">
        <img class="p-2"src="./images/brand2.jpeg" alt="">
        <img class="p-2"src="./images/brand3.jpeg" alt="">
        <img class="p-2"src="./images/brand4.jpeg" alt="">

      </div>
      <div class="container-sm">
        <div data-aos="fade-left"  data-aos-duration="1000" class="callimg">
          <!-- <img src="./images/pic1.jpg" alt=""> -->
        </div>
        <div class="callus">
          <p></p>
          <a href="tel:+919390307908" class="btn  text-white p-2 m-2"><i class="fas fa-phone-alt"></i> Call Now</a>
        </div>
      </div>

    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

  </body>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="./js/index.js">

  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init();
  </script>
</html>
