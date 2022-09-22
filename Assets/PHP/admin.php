<?php
require 'admin-DB-connection.php';
$ptitle=$_POST['ptitle'];
$description=$_POST['description'];
// $c=$_POST['thumbnail']; 
// to receive the photo or file $_FILES is used 
$pic=$_FILES['thumbnail']['name'];
$url=".././Upload";
$furl=$url.$pic;
// know the file type
$type=pathinfo($furl,PATHINFO_EXTENSION);
if ($type=="jpeg" || $type=="jpg" || $type=="png" || $type=="mp4" || $type=="mpeg")
{
// to place the pictures on server
move_uploaded_file($_FILES['thumbnail']['tmp_name'],$furl);

$sql="insert into admin(ptitle,description,media) values('$ptitle','$description','$furl')";
$x=mysqli_query($conn,$sql);

if($x==1)
{
    header("location:admin-confirmation.html?msg=Done");
}
else
{
    header("location:welcome.php?msg=NotDone");
}
}
else
{
    header("location:welcome.php?msg=type-not-matched");
}
?>
