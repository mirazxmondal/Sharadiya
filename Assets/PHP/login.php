<?php
require 'connect-session.php';
$phpname=$_GET['phpname'];
$phppassword=$_GET['phppassword'];
$sql="select * from sharadiya where email='$phpname' and password='$phppassword'";
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
    header("location:../../index.html?msg=wrongemailorpassword");
}
?>