<?php
require 'connect.php';
require 'connect-session.php';

?>
<html>
    <head>
        <link rel="stylesheet" href="../styles/welcome-php.css"/>
    </head>
    <body>
        <h1>Welcome!</h1>
        <h1 style="display:inline;"><?php echo($_SESSION['FIEM']['name']);?></h1>


       <button><a href="./logout.php">Log out</a></button> 
    </body>
</html>
