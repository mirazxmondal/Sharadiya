<?php
// to start the session in logout page I connected with my database
require 'connect-session.php';
session_destroy();
header("location:index.html?msg=loggedout");
?>