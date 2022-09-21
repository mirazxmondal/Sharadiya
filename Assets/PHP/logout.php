<?php
// to start the session in logout page I connected with my database
require 'connect-session.php';

// Unset all of the session variables.
$_SESSION = array();

// remove all session variables
session_unset();

session_destroy(); 
header("location:../../index.html?msg=loggedout");

?>