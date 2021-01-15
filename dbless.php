<?php
session_start();
include_once("dbconn.php");
if(!$conn){
  die("error".mysqli_connect_error());
}
if(isset($_POST['lesspagebtn'])){
  $imag= $_FILES['lesspage'];
  $name = $imag['name'];
  $temp = $imag['tmp_name'];
  $error = $imag['error'];
  $size = $imag['size'];
  $text = explode(".",$name);
  $type = strtolower(end($text));
  $newname = uniqid("",true).".".$type;
  $filedest = "frameless/".$newname;
  $stmt = mysqli_stmt_init($conn);

  $sql = "INSERT INTO framelesspage (lesspageimg) VALUES (?)";
  mysqli_stmt_prepare($stmt,$sql);
  mysqli_stmt_bind_param($stmt,"s",$newname);
  if(mysqli_stmt_execute($stmt)){
    move_uploaded_file($temp,$filedest);
    header("location:admin.php?message=success");
  }else{
    echo "error".mysqli_error($conn);
  }
}
 ?>
