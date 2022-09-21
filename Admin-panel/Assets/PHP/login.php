<?php
require 'connect1.php';
$c=$_GET['a1'];
$d=$_GET['a2'];
$sql="select * from login where email='$c' and pwd='$d'";
$a=mysqli_query($conn,$sql); 
$x=mysqli_fetch_array($a);
// Creating a session name and storing in x variable, session is global variable
$_SESSION['FIEM']=$x;
// Array query(Line7) is running or not is checked by this query
if(mysqli_num_rows($a)>0)
{
    header("location:welcome.php?msg=done");
}
else
{
    header("location:login.html?msg=wrongemailorpwd");
}
?>