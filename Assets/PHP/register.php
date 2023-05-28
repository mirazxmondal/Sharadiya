<?php
require 'connect.php';
$name=$_GET['name'];
$number=$_GET['number'];
$zip=$_GET['zip']; 
$email=$_GET['email'];
$password=$_GET['password'];
$cpassword=$_GET['cpassword'];
$address=$_GET['address'];
$message="Password and Confirm password should match!";

$sql="insert into sharadiya(name,number,zip,email,password,cpassword,address) values('$name','$number','$zip','$email','$password','$cpassword','$address')";
$data=$_GET;
if ($data['password'] !== $data['cpassword']) {
    die('Password and Confirm password should match!');
 }
$x=mysqli_query($conn,$sql);

if($x==1)
{
    header("location:registration-successful.php?msg=Done");
}
else
{
    header("location:registration-successful.php?msg=NotDone");
}
?>