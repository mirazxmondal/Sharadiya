<?php
require 'connect.php';
$a=$_GET['name'];
$b=$_GET['number'];
$c=$_GET['zip']; 
$d=$_GET['email'];
$e=$_GET['password'];
$f=$_GET['cpassword'];
$g=$_GET['address'];

$sql="insert into sharadiya(name,number,zip,email,password,cpassword,address) values('$a','$b','$c','$d','$e','$f','$g')";
$x=mysqli_query($conn,$sql);

if($x==1)
{
    header("location:registration-successful.html?msg=Done");
}
else
{
    header("location:registration-successful.html?msg=NotDone");
}
?>
