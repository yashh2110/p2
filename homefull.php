<?php
session_start();
include_once("dbconn.php");
if(!$conn){
  echo "error".mysqli_connect_error();
}elseif (isset($_POST['hffsubmit'])) {
  //row1
  $hffr1img1= $_FILES['hffr1img1'];
  $hffr1img1name = $hffr1img1['name'];
  $hffr1img1temp = $hffr1img1['tmp_name'];
  $hffr1img1error = $hffr1img1['error'];
  $hffr1img1size = $hffr1img1['size'];
  $hffr1img1text = explode(".",$hffr1img1name);
  $hffr1img1type = strtolower(end($hffr1img1text));
  $hffr1img1newname = uniqid("",true).".".$hffr1img1type;
  $hffr1img1filedest = "homefull/".$hffr1img1newname;
  move_uploaded_file($hffr1img1temp,$hffr1img1filedest);
  //row1

  $hffr1img2= $_FILES['hffr1img2'];
  $hffr1img2name = $hffr1img2['name'];
  $hffr1img2temp = $hffr1img2['tmp_name'];
  $hffr1img2error = $hffr1img2['error'];
  $hffr1img2size = $hffr1img2['size'];
  $hffr1img2text = explode(".",$hffr1img2name);
  $hffr1img2type = strtolower(end($hffr1img2text));
  $hffr1img2newname = uniqid("",true).".".$hffr1img2type;
  $hffr1img2filedest = "homefull/".$hffr1img2newname;
  move_uploaded_file($hffr1img2temp,$hffr1img2filedest);
  //row1
  $hffr1img3= $_FILES['hffr1img3'];
  $hffr1img3name = $hffr1img3['name'];
  $hffr1img3temp = $hffr1img3['tmp_name'];
  $hffr1img3error = $hffr1img3['error'];
  $hffr1img3size = $hffr1img3['size'];
  $hffr1img3text = explode(".",$hffr1img3name);
  $hffr1img3type = strtolower(end($hffr1img3text));
  $hffr1img3newname = uniqid("",true).".".$hffr1img3type;
  $hffr1img3filedest = "homefull/".$hffr1img3newname;
  move_uploaded_file($hffr1img3temp,$hffr1img3filedest);
  //row2
  $hffr2img1= $_FILES['hffr2img1'];
  $hffr2img1name = $hffr2img1['name'];
  $hffr2img1temp = $hffr2img1['tmp_name'];
  $hffr2img1error = $hffr2img1['error'];
  $hffr2img1size = $hffr2img1['size'];
  $hffr2img1text = explode(".",$hffr2img1name);
  $hffr2img1type = strtolower(end($hffr2img1text));
  $hffr2img1newname = uniqid("",true).".".$hffr2img1type;
  $hffr2img1filedest = "homefull/".$hffr2img1newname;
  move_uploaded_file($hffr2img1temp,$hffr2img1filedest);
  //row2
  $hffr2img2= $_FILES['hffr2img2'];
  $hffr2img2name = $hffr2img2['name'];
  $hffr2img2temp = $hffr2img2['tmp_name'];
  $hffr2img2error = $hffr2img2['error'];
  $hffr2img2size = $hffr2img2['size'];
  $hffr2img2text = explode(".",$hffr2img2name);
  $hffr2img2type = strtolower(end($hffr2img2text));
  $hffr2img2newname = uniqid("",true).".".$hffr2img2type;
  $hffr2img2filedest = "homefull/".$hffr2img2newname;
  move_uploaded_file($hffr2img2temp,$hffr2img2filedest);
  //row2
  $hffr2img3= $_FILES['hffr2img3'];
  $hffr2img3name = $hffr2img3['name'];
  $hffr2img3temp = $hffr2img3['tmp_name'];
  $hffr2img3error = $hffr2img3['error'];
  $hffr2img3size = $hffr2img3['size'];
  $hffr2img3text = explode(".",$hffr2img3name);
  $hffr2img3type = strtolower(end($hffr2img3text));
  $hffr2img3newname = uniqid("",true).".".$hffr2img3type;
  $hffr2img3filedest = "homefull/".$hffr2img3newname;
  move_uploaded_file($hffr2img3temp,$hffr2img3filedest);
  //row3
  $hffr3img1= $_FILES['hffr3img1'];
  $hffr3img1name = $hffr3img1['name'];
  $hffr3img1temp = $hffr3img1['tmp_name'];
  $hffr3img1error = $hffr3img1['error'];
  $hffr3img1size = $hffr3img1['size'];
  $hffr3img1text = explode(".",$hffr3img1name);
  $hffr3img1type = strtolower(end($hffr3img1text));
  $hffr3img1newname = uniqid("",true).".".$hffr3img1type;
  $hffr3img1filedest = "homefull/".$hffr3img1newname;
  move_uploaded_file($hffr3img1temp,$hffr3img1filedest);
  //row3
  $hffr3img2= $_FILES['hffr3img2'];
  $hffr3img2name = $hffr3img2['name'];
  $hffr3img2temp = $hffr3img2['tmp_name'];
  $hffr3img2error = $hffr3img2['error'];
  $hffr3img2size = $hffr3img2['size'];
  $hffr3img2text = explode(".",$hffr3img2name);
  $hffr3img2type = strtolower(end($hffr3img2text));
  $hffr3img2newname = uniqid("",true).".".$hffr3img2type;
  $hffr3img2filedest = "homefull/".$hffr3img2newname;
  move_uploaded_file($hffr3img2temp,$hffr3img2filedest);
  //row3
  $hffr3img3= $_FILES['hffr3img3'];
  $hffr3img3name = $hffr3img3['name'];
  $hffr3img3temp = $hffr3img3['tmp_name'];
  $hffr3img3error = $hffr3img3['error'];
  $hffr3img3size = $hffr3img3['size'];
  $hffr3img3text = explode(".",$hffr3img3name);
  $hffr3img3type = strtolower(end($hffr3img3text));
  $hffr3img3newname = uniqid("",true).".".$hffr3img3type;
  $hffr3img3filedest = "homefull/".$hffr3img3newname;
  move_uploaded_file($hffr3img3temp,$hffr3img3filedest);
  $sql = "INSERT INTO homefull (hffr1img1,hffr1img2,hffr1img3,hffr2img1,hffr2img2,hffr2img3,hffr3img1,hffr3img2,hffr3img3) VALUES ('$hffr1img1newname','$hffr1img2newname','$hffr1img3newname','$hffr2img1newname','$hffr2img2newname','$hffr2img3newname','$hffr3img1newname','$hffr3img2newname','$hffr3img3newname')";
  if(!mysqli_query($conn,$sql)){
    echo mysqli_error($conn);
  }

  }
?>
