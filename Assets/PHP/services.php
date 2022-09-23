<?php
require 'connect.php';
$name=$_GET['name'];
$number=$_GET['number'];
$email=$_GET['email'];
$service=$_GET['service'];
$date=$_GET['date'];

$sql="insert into service(name,number,email,service,date) values('$name','$number','$email','$service','$date')";
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
