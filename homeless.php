<?php
session_start();
include_once("dbconn.php");
if(!$conn){
  echo "error".mysqli_connect_error();
}elseif (isset($_POST['hfsubmit'])) {
  //row1
  $hfr1img1= $_FILES['hfr1img1'];
  $hfr1img1name = $hfr1img1['name'];
  $hfr1img1temp = $hfr1img1['tmp_name'];
  $hfr1img1error = $hfr1img1['error'];
  $hfr1img1size = $hfr1img1['size'];
  $hfr1img1text = explode(".",$hfr1img1name);
  $hfr1img1type = strtolower(end($hfr1img1text));
  $hfr1img1newname = uniqid("",true).".".$hfr1img1type;
  $hfr1img1filedest = "homeless/".$hfr1img1newname;
  move_uploaded_file($hfr1img1temp,$hfr1img1filedest);
  //row1

  $hfr1img2= $_FILES['hfr1img2'];
  $hfr1img2name = $hfr1img2['name'];
  $hfr1img2temp = $hfr1img2['tmp_name'];
  $hfr1img2error = $hfr1img2['error'];
  $hfr1img2size = $hfr1img2['size'];
  $hfr1img2text = explode(".",$hfr1img2name);
  $hfr1img2type = strtolower(end($hfr1img2text));
  $hfr1img2newname = uniqid("",true).".".$hfr1img2type;
  $hfr1img2filedest = "homeless/".$hfr1img2newname;
  move_uploaded_file($hfr1img2temp,$hfr1img2filedest);
  //row1
  $hfr1img3= $_FILES['hfr1img3'];
  $hfr1img3name = $hfr1img3['name'];
  $hfr1img3temp = $hfr1img3['tmp_name'];
  $hfr1img3error = $hfr1img3['error'];
  $hfr1img3size = $hfr1img3['size'];
  $hfr1img3text = explode(".",$hfr1img3name);
  $hfr1img3type = strtolower(end($hfr1img3text));
  $hfr1img3newname = uniqid("",true).".".$hfr1img3type;
  $hfr1img3filedest = "homeless/".$hfr1img3newname;
  move_uploaded_file($hfr1img3temp,$hfr1img3filedest);
  //row2
  $hfr2img1= $_FILES['hfr2img1'];
  $hfr2img1name = $hfr2img1['name'];
  $hfr2img1temp = $hfr2img1['tmp_name'];
  $hfr2img1error = $hfr2img1['error'];
  $hfr2img1size = $hfr2img1['size'];
  $hfr2img1text = explode(".",$hfr2img1name);
  $hfr2img1type = strtolower(end($hfr2img1text));
  $hfr2img1newname = uniqid("",true).".".$hfr2img1type;
  $hfr2img1filedest = "homeless/".$hfr2img1newname;
  move_uploaded_file($hfr2img1temp,$hfr2img1filedest);
  //row2
  $hfr2img2= $_FILES['hfr2img2'];
  $hfr2img2name = $hfr2img2['name'];
  $hfr2img2temp = $hfr2img2['tmp_name'];
  $hfr2img2error = $hfr2img2['error'];
  $hfr2img2size = $hfr2img2['size'];
  $hfr2img2text = explode(".",$hfr2img2name);
  $hfr2img2type = strtolower(end($hfr2img2text));
  $hfr2img2newname = uniqid("",true).".".$hfr2img2type;
  $hfr2img2filedest = "homeless/".$hfr2img2newname;
  move_uploaded_file($hfr2img2temp,$hfr2img2filedest);
  //row2
  $hfr2img3= $_FILES['hfr2img3'];
  $hfr2img3name = $hfr2img3['name'];
  $hfr2img3temp = $hfr2img3['tmp_name'];
  $hfr2img3error = $hfr2img3['error'];
  $hfr2img3size = $hfr2img3['size'];
  $hfr2img3text = explode(".",$hfr2img3name);
  $hfr2img3type = strtolower(end($hfr2img3text));
  $hfr2img3newname = uniqid("",true).".".$hfr2img3type;
  $hfr2img3filedest = "homeless/".$hfr2img3newname;
  move_uploaded_file($hfr2img3temp,$hfr2img3filedest);
  //row3
  $hfr3img1= $_FILES['hfr3img1'];
  $hfr3img1name = $hfr3img1['name'];
  $hfr3img1temp = $hfr3img1['tmp_name'];
  $hfr3img1error = $hfr3img1['error'];
  $hfr3img1size = $hfr3img1['size'];
  $hfr3img1text = explode(".",$hfr3img1name);
  $hfr3img1type = strtolower(end($hfr3img1text));
  $hfr3img1newname = uniqid("",true).".".$hfr3img1type;
  $hfr3img1filedest = "homeless/".$hfr3img1newname;
  move_uploaded_file($hfr3img1temp,$hfr3img1filedest);
  //row3
  $hfr3img2= $_FILES['hfr3img2'];
  $hfr3img2name = $hfr3img2['name'];
  $hfr3img2temp = $hfr3img2['tmp_name'];
  $hfr3img2error = $hfr3img2['error'];
  $hfr3img2size = $hfr3img2['size'];
  $hfr3img2text = explode(".",$hfr3img2name);
  $hfr3img2type = strtolower(end($hfr3img2text));
  $hfr3img2newname = uniqid("",true).".".$hfr3img2type;
  $hfr3img2filedest = "homeless/".$hfr3img2newname;
  move_uploaded_file($hfr3img2temp,$hfr3img2filedest);
  //row3
  $hfr3img3= $_FILES['hfr3img3'];
  $hfr3img3name = $hfr3img3['name'];
  $hfr3img3temp = $hfr3img3['tmp_name'];
  $hfr3img3error = $hfr3img3['error'];
  $hfr3img3size = $hfr3img3['size'];
  $hfr3img3text = explode(".",$hfr3img3name);
  $hfr3img3type = strtolower(end($hfr3img3text));
  $hfr3img3newname = uniqid("",true).".".$hfr3img3type;
  $hfr3img3filedest = "homeless/".$hfr3img3newname;
  move_uploaded_file($hfr3img3temp,$hfr3img3filedest);
  $stmt = mysqli_stmt_init($conn);
  $sql = "INSERT INTO homeless (hfr1img1,hfr1img2,hfr1img3,hfr2img1,hfr2img2,hfr2img3,hfr3img1,hfr3img2,hfr3img3) VALUES (?,?,?,?,?,?,?,?,?)";
  mysqli_stmt_prepare($stmt,$sql);
  mysqli_stmt_bind_param($stmt,"sssssssss",$hfr1img1newname,$hfr1img2newname,$hfr1img3newname,$hfr2img1newname,$hfr2img2newname,$hfr2img3newname,$hfr3img1newname,$hfr3img2newname,$hfr3img3newname);
  if(mysqli_stmt_execute($stmt)){
    header("location:admin.php?message=uploaded");
  }else{
    echo "error".mysqli_error($conn);
  }

  }
?>
