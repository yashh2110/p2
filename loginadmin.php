<?php
  session_start();
  include_once("dbconn.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./bootstrap/js/bootstrap.min.js">
    <title>login|adminpage</title>
  </head>
  <body>
    <div class="container-sm" style="position:relative;margin-left:auto;margin-right:auto;top:200px;align-items:center">
      <form class="form-group p-2" action="loginadmin.php" method="post">
        <input type="text" class="form-control m-2 p-2"name="username" placeholder="enter username" value="">
        <input type="password" class="form-control m-2 p-2" name="password" placeholder="enter password" value="">
        <button type="submit" class="btn btn-success m-2 p-2 text-center" name="loginbtn">Login</button>
      </form>
    </div>
  </body>
</html>
<?php
if(isset($_POST['loginbtn'])){

  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  $sql = "SELECT * FROM users WHERE username='$username'";
  if(!empty($username)){
    if(!empty($password)){
      if($query = mysqli_query($conn,$sql)){
        $row=mysqli_num_rows($query);
        if($row=1){
          if($cred =mysqli_fetch_assoc($query)){

            if(password_verify($password,$cred['password'])){
            $_SESSION['row']=$row;
            $_SESSION['username']=$cred['username'];
            header("location:admin.php");
          }else{
            echo "<div class='error text-warning far fa-times-circle'> Incorrect password</div>";
          }
          }else{
            echo "<div class='error text-warning far fa-times-circle'> Incorrect username</div>";
          }
        }else{
          echo "<div class='error text-warning far fa-times-circle'> Incorrect password or username</div>";
        }
      }else{
        echo "<div class='error text-warning far fa-times-circle'>Error in connection</div>";
      }
    }else{
      echo "<div class='error text-warning far fa-times-circle'>Please Enter the password</div>";
    }
  }else{
    echo "<div class='error text-warning far fa-times-circle'>Please Enter Username</div>";
  }
}


mysqli_close($conn);
 ?>
