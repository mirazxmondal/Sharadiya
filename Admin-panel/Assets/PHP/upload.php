<?php
require 'connect.php';
$a=$_POST['a1'];
$b=$_POST['a2'];
$c=$_POST['a3']; 
$d=$_POST['a4'];
$e=$_POST['a5'];
// to receive the photo or file $_FILES is used 
$pic=$_FILES['a6']['name'];
$url="Upload/";
$furl=$url.$pic;
// know the file type
$type=pathinfo($furl,PATHINFO_EXTENSION);
if ($type=="jpeg" || $type=="jpg" || $type=="png")
{
// to place the pictures on server
move_uploaded_file($_FILES['a6']['tmp_name'],$furl);

$sql="insert into login(fname,lname,email,pwd,pnumber,furl) values('$a','$b','$c','$d','$e','$furl')";
$x=mysqli_query($conn,$sql);

if($x==1)
{
    header("location:index.html?msg=Done");
}
else
{
    header("location:index.html?msg=NotDone");
}
}
else
{
    header("location:index.html?msg=type-not-matched");
}
?>
