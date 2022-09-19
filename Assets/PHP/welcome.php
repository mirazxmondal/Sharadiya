<?php
require 'connect.php';
require 'connect-session.php';

?>
<html>
    <head>
        <style>
            body{
                background: rgb(232,148,79);
                background: linear-gradient(90deg, rgba(232,148,79,1) 0%, rgba(255,120,108,1) 100%, rgba(0,212,255,1) 100%);
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
