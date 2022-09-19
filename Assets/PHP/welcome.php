<?php
require 'connect.php';
require 'connect-session.php';

?>
<html>
    <head>
        <style>
            body{

                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Welcome!</h1>
        <h1 style="display:inline;"><?php echo($_SESSION['FIEM']['name']);?></h1>
        <h3><a href="./logout.php">Log out</a></h3> 
    </body>
</html>
