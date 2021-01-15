<?php
session_start();
include_once ("dbconn.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/sun.css">
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
    <style>
    body, html{
      height:100%;
    }
    .parallax {
      background-image: url("./images/rimless.jpg");
      position: relative;
      margin-left: auto;
      margin-right: auto;
      width:100%;
      height:50%;
      background-attachment: fixed;
      background-position:center;
      background-repeat: no-repeat;
      background-size:cover;
    }
    .parallax1 {
      background-image: url("./images/rimless1.jpeg");
      height:100%;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size:cover;
    }
    @media screen and (max-width:700px) {
      .parallax {
        background-image: url("./images/smallrimless.jpg");
        position: relative;
        margin-left: auto;
        margin-right: auto;
        width:100%;
        height:50%;
        background-attachment: fixed;
        background-position:center;
        background-repeat: no-repeat;
        background-size:cover;
      }
      .parallax1 {
        background-image: url("./images/smallrimless2.jpg");
        height:100%;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size:cover;
      }
    }
</style>
  </head>
  <body>
    <div class="head container-fluid-sm">
      <img src="./images/logo1.png" class="logo" alt="">
      <h1 class="text-center sunh">Rimless frames</h1>
      <div class="home">
      <a id="homebtn" style="color:#003366;" href="index.php"> <i class="fas fa-home p-3 m-2"></i></a>
      </div>
      <div class="godown text-center">
      <a href="#items"><i class="fas fa-angle-down"></i></a>
      </div>
    </div>
    <div class="parallax">
    </div>
    <div id="items" class="bg-light items container-sm pl-5">
      <?php
      $sql ="SELECT * FROM framelesspage ORDER BY `date` DESC";
      $result=mysqli_query($conn,$sql);
      while ($row=mysqli_fetch_assoc($result)) {
       ?>
      <div class="div">
        <img src="./sunpage/<?php echo $row['lesspageimg'] ?>">
      </div>
      <?php
      }
       ?>
    </div>
    <div class="parallax1">
    </div>
    <div class="foot container-sm input-group">
      <img src="./images/rimshop.jpg" alt="">
      <h2 class="pt-4 pl-3">Come to our place to place your order</h2>
      <a href="index.php#location" class="btn btn-dark">location</a>
    </div>
  </body>
