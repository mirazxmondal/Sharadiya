/* This code is establishing a connection to a MySQL database named "sharadiya" on the local server
using the username "root" and an empty password. The `mysqli_connect()` function returns a
connection object that is stored in the `` variable. If the connection fails, the `die()`
function is called with an error message returned by `mysqli_error()`. */
<?php
$conn=mysqli_connect('localhost','root','','sharadiya') or die (mysqli_error($conn));

?>