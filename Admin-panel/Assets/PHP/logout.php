<?php
// to start the session in logout page I connected with my database
require 'connect1.php';
session_destroy();
header("location:index.html?msg=loggedout");
?>