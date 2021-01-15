<?php
session_start();
include_once("dbconn.php");
if(!$conn){
  echo "error".mysqli_connect_error();
}elseif (isset($_POST['hssubmit'])) {
  //row1
  $hsr1img1= $_FILES['hsr1img1'];
  $hsr1img1name = $hsr1img1['name'];
  $hsr1img1temp = $hsr1img1['tmp_name'];
  $hsr1img1error = $hsr1img1['error'];
  $hsr1img1size = $hsr1img1['size'];
  $hsr1img1text = explode(".",$hsr1img1name);
  $hsr1img1type = strtolower(end($hsr1img1text));
  $hsr1img1newname = uniqid("",true).".".$hsr1img1type;
  $hsr1img1filedest = "homesun/".$hsr1img1newname;
  move_uploaded_file($hsr1img1temp,$hsr1img1filedest);
  //row1

  $hsr1img2= $_FILES['hsr1img2'];
  $hsr1img2name = $hsr1img2['name'];
  $hsr1img2temp = $hsr1img2['tmp_name'];
  $hsr1img2error = $hsr1img2['error'];
  $hsr1img2size = $hsr1img2['size'];
  $hsr1img2text = explode(".",$hsr1img2name);
  $hsr1img2type = strtolower(end($hsr1img2text));
  $hsr1img2newname = uniqid("",true).".".$hsr1img2type;
  $hsr1img2filedest = "homesun/".$hsr1img2newname;
  move_uploaded_file($hsr1img2temp,$hsr1img2filedest);
  //row1
  $hsr1img3= $_FILES['hsr1img3'];
  $hsr1img3name = $hsr1img3['name'];
  $hsr1img3temp = $hsr1img3['tmp_name'];
  $hsr1img3error = $hsr1img3['error'];
  $hsr1img3size = $hsr1img3['size'];
  $hsr1img3text = explode(".",$hsr1img3name);
  $hsr1img3type = strtolower(end($hsr1img3text));
  $hsr1img3newname = uniqid("",true).".".$hsr1img3type;
  $hsr1img3filedest = "homesun/".$hsr1img3newname;
  move_uploaded_file($hsr1img3temp,$hsr1img3filedest);
  //row2
  $hsr2img1= $_FILES['hsr2img1'];
  $hsr2img1name = $hsr2img1['name'];
  $hsr2img1temp = $hsr2img1['tmp_name'];
  $hsr2img1error = $hsr2img1['error'];
  $hsr2img1size = $hsr2img1['size'];
  $hsr2img1text = explode(".",$hsr2img1name);
  $hsr2img1type = strtolower(end($hsr2img1text));
  $hsr2img1newname = uniqid("",true).".".$hsr2img1type;
  $hsr2img1filedest = "homesun/".$hsr2img1newname;
  move_uploaded_file($hsr2img1temp,$hsr2img1filedest);
  //row2
  $hsr2img2= $_FILES['hsr2img2'];
  $hsr2img2name = $hsr2img2['name'];
  $hsr2img2temp = $hsr2img2['tmp_name'];
  $hsr2img2error = $hsr2img2['error'];
  $hsr2img2size = $hsr2img2['size'];
  $hsr2img2text = explode(".",$hsr2img2name);
  $hsr2img2type = strtolower(end($hsr2img2text));
  $hsr2img2newname = uniqid("",true).".".$hsr2img2type;
  $hsr2img2filedest = "homesun/".$hsr2img2newname;
  move_uploaded_file($hsr2img2temp,$hsr2img2filedest);
  //row2
  $hsr2img3= $_FILES['hsr2img3'];
  $hsr2img3name = $hsr2img3['name'];
  $hsr2img3temp = $hsr2img3['tmp_name'];
  $hsr2img3error = $hsr2img3['error'];
  $hsr2img3size = $hsr2img3['size'];
  $hsr2img3text = explode(".",$hsr2img3name);
  $hsr2img3type = strtolower(end($hsr2img3text));
  $hsr2img3newname = uniqid("",true).".".$hsr2img3type;
  $hsr2img3filedest = "homesun/".$hsr2img3newname;
  move_uploaded_file($hsr2img3temp,$hsr2img3filedest);
  //row3
  $hsr3img1= $_FILES['hsr3img1'];
  $hsr3img1name = $hsr3img1['name'];
  $hsr3img1temp = $hsr3img1['tmp_name'];
  $hsr3img1error = $hsr3img1['error'];
  $hsr3img1size = $hsr3img1['size'];
  $hsr3img1text = explode(".",$hsr3img1name);
  $hsr3img1type = strtolower(end($hsr3img1text));
  $hsr3img1newname = uniqid("",true).".".$hsr3img1type;
  $hsr3img1filedest = "homesun/".$hsr3img1newname;
  move_uploaded_file($hsr3img1temp,$hsr3img1filedest);
  //row3
  $hsr3img2= $_FILES['hsr3img2'];
  $hsr3img2name = $hsr3img2['name'];
  $hsr3img2temp = $hsr3img2['tmp_name'];
  $hsr3img2error = $hsr3img2['error'];
  $hsr3img2size = $hsr3img2['size'];
  $hsr3img2text = explode(".",$hsr3img2name);
  $hsr3img2type = strtolower(end($hsr3img2text));
  $hsr3img2newname = uniqid("",true).".".$hsr3img2type;
  $hsr3img2filedest = "homesun/".$hsr3img2newname;
  move_uploaded_file($hsr3img2temp,$hsr3img2filedest);
  //row3
  $hsr3img3= $_FILES['hsr3img3'];
  $hsr3img3name = $hsr3img3['name'];
  $hsr3img3temp = $hsr3img3['tmp_name'];
  $hsr3img3error = $hsr3img3['error'];
  $hsr3img3size = $hsr3img3['size'];
  $hsr3img3text = explode(".",$hsr3img3name);
  $hsr3img3type = strtolower(end($hsr3img3text));
  $hsr3img3newname = uniqid("",true).".".$hsr3img3type;
  $hsr3img3filedest = "homesun/".$hsr3img3newname;
  move_uploaded_file($hsr3img3temp,$hsr3img3filedest);
  $stmt = mysqli_stmt_init($conn);

  $sql = "INSERT INTO homesun (hsr1img1,hsr1img2,hsr1img3,hsr2img1,hsr2img2,hsr2img3,hsr3img1,hsr3img2,hsr3img3) VALUES (?,?,?,?,?,?,?,?,?)";
  mysqli_stmt_prepare($stmt,$sql);
  mysqli_stmt_bind_param($stmt,"sssssssss",$hsr1img1newname,$hsr1img2newname,$hsr1img3newname,$hsr2img1newname,$hsr2img2newname,$hsr2img3newname,$hsr3img1newname,$hsr3img2newname,$hsr3img3newname);
  if(mysqli_stmt_execute($stmt)){
    header("location:admin.php?message=uploaded");
  }else{
    header("location:admin.php?message=error");
  }

  }
?>
