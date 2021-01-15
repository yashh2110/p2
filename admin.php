<?php
session_start();
if(!empty($_SESSION['row'])){
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
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/path/to/jquery.mCustomScrollbar.css" />
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./bootstrap/js/bootstrap.min.js">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet"><title>National Opticals</title>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>admin|Nationalopticals</title>
  </head>
  <body>
    <section class="admin">
      <h2 class="text-center mb-4">Admin panel</h2>
      <div class="homesun container-sm">
        <form class="form-group m-2" action="homesun.php" method="post" enctype="multipart/form-data">
          <table class="table text-center ">
            <tr>
              <th>home page sunglasses row</th>
            </tr>
          </table>
          <table class="table table-hover">
            <tbody>
              <tr>
                <td>row1</td>
                <td><input type="file" class="form-control"  name="hsr1img1" value=""></td>
                <td><input type="file" class="form-control" name="hsr1img2" value=""></td>
                <td><input type="file" class="form-control" name="hsr1img3" value=""></td>
              </tr>
              <tr>
                <td>row2</td>
                <td><input type="file" class="form-control" name="hsr2img1" value=""></td>
                <td><input type="file" class="form-control" name="hsr2img2" value=""></td>
                <td><input type="file" class="form-control" name="hsr2img3" value=""></td>
              </tr>
              <tr>
                <td>row2</td>
                <td><input type="file" class="form-control" name="hsr3img1" value=""></td>
                <td><input type="file" class="form-control" name="hsr3img2" value=""></td>
                <td><input type="file" class="form-control" name="hsr3img3" value=""></td>
              </tr>
            </tbody>
          </table>
          <button type="submit" style="float:right" class="btn btn-success" name="hssubmit">Uplode</button>
        </form>
      </div>
      <div class="homesun container-sm">
        <form class="form-group" action="homeless.php" method="post" enctype="multipart/form-data">
          <table class="table text-center ">
            <tr>
              <th>home page frameless row</th>
            </tr>
          </table>
          <table class="table table-hover">
            <tbody>
              <tr>
                <td>row1</td>
                <td><input type="file" class="form-control" name="hfr1img1" value=""></td>
                <td><input type="file" class="form-control" name="hfr1img2" value=""></td>
                <td><input type="file" class="form-control" name="hfr1img3" value=""></td>
              </tr>
              <tr>
                <td>row2</td>
                <td><input type="file" class="form-control" name="hfr2img1" value=""></td>
                <td><input type="file" class="form-control" name="hfr2img2" value=""></td>
                <td><input type="file" class="form-control" name="hfr2img3" value=""></td>
              </tr>
              <tr>
                <td>row2</td>
                <td><input type="file" class="form-control" name="hfr3img1" value=""></td>
                <td><input type="file" class="form-control" name="hfr3img2" value=""></td>
                <td><input type="file" class="form-control" name="hfr3img3" value=""></td>
              </tr>
            </tbody>
          </table>
          <button type="submit" style="float:right" class="btn btn-success" name="hfsubmit">Uplode</button>
        </form>
      </div>
      <div class="homesun container-sm">
        <form class="form-group" action="homefull.php" method="post" enctype="multipart/form-data">
          <table class="table text-center ">
            <tr>
              <th>home page fullframe row</th>
            </tr>
          </table>
          <table class="table table-hover">
            <tbody>
              <tr>
                <td>row1</td>
                <td><input type="file" class="form-control" name="hffr1img1" value=""></td>
                <td><input type="file" class="form-control" name="hffr1img2" value=""></td>
                <td><input type="file" class="form-control" name="hffr1img3" value=""></td>
              </tr>
              <tr>
                <td>row2</td>
                <td><input type="file" class="form-control" name="hffr2img1" value=""></td>
                <td><input type="file" class="form-control" name="hffr2img2" value=""></td>
                <td><input type="file" class="form-control" name="hffr2img3" value=""></td>
              </tr>
              <tr>
                <td>row2</td>
                <td><input type="file" class="form-control" name="hffr3img1" value=""></td>
                <td><input type="file" class="form-control" name="hffr3img2" value=""></td>
                <td><input type="file" class="form-control" name="hffr3img3" value=""></td>
              </tr>
            </tbody>
          </table>
          <button type="submit" style="float:right" class="btn btn-success" name="hffsubmit">Uplode</button>
        </form>
      </div>
      <div class="sunpage container-sm">

        <form class="form-group" action="dbsun.php" method="post" enctype="multipart/form-data">
          <table class="table  table-hover">
            <thead>
              <tr>
                <th class="text-center" >Upload for sunglasses page</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="file" name="sunpage" value=""></td>
                <td><button type="submit" class="btn btn-success" name="sunpagebtn">Upload</button></td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>
      <div class="lesspage container-sm">

        <form class="form-group" action="dbless.php" method="post" enctype="multipart/form-data">
          <table class="table  table-hover">
            <thead>
              <tr>
                <th class="text-center" >Upload for frameless page</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="file" name="lesspage" value=""></td>
                <td><button type="submit" class="btn btn-success" name="lesspagebtn">Upload</button></td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>
      <div class="fullpage container-sm">

        <form class="form-group" action="dbfull.php" method="post" enctype="multipart/form-data">
          <table class="table  table-hover">
            <thead>
              <tr>
                <th class="text-center" >Upload for fullframes page</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="file" name="fullpage" value=""></td>
                <td><button type="submit" class="btn btn-success" name="fullpagebtn">Upload</button></td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>
      <div class="halfpage container-sm">

        <form class="form-group" action="dbhalf.php" method="post" enctype="multipart/form-data">
          <table class="table  table-hover">
            <thead>
              <tr>
                <th class="text-center" >Upload for halfframe page</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="file" name="halfpage" value=""></td>
                <td><button type="submit" class="btn btn-success" name="halfpagebtn">Upload</button></td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>
      <div class="smallhome container-sm">

        <form class="form-group" action="dbmobile.php" method="post" enctype="multipart/form-data">
          <table class="table  table-hover">
            <thead>
              <tr>
                <th class="text-center" >Upload for mobile home slides</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="file" name="smallhome" value=""></td>
                <td><button type="submit" class="btn btn-success" name="smallhomebtn">Upload</button></td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>
    </section>
  </body>
</html>
<?php
}else{
  header("location:loginadmin.php");
}
 ?>
