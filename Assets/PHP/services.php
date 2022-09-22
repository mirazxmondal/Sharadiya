<?php
require 'connect.php';
$name=$_GET['name'];
$number=$_GET['number'];
$email=$_GET['email'];
$service=$_GET['service'];

$sql="insert into service(name,number,email,service) values('$name','$number','$email','$service')";
$x=mysqli_query($conn,$sql);

if($x==1)
{
    header("location:service-registration-successful.html?msg=Done");
}
else
{
    header("location:service-registration-successful.html?msg=NotDone");
}
?>
