<?php
require 'connect-session.php';
$a=$_GET['email'];
$b=$_GET['password'];
$sql="select * from sharadiya where email='$a' and password='$b'";
$ses=mysqli_query($conn,$sql); 
$x=mysqli_fetch_array($ses);
// Creating a session name and storing in x variable
$_SESSION['FIEM']=$x;

if(mysqli_num_rows($ses)>0)
{
    header("location:welcome.php?msg=done");
}
else
{
    header("location:login.html?msg=wrongemailorpassword");
}
?>