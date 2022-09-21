<?php
require 'connect1.php';
require 'session-check.php';

?>
<html>
    <head>
        <link rel="stylesheet" href="../styles/./index.css"> 
    </head>
    <body>
        <h1>Welcome</h1>
        <h1 style="display:inline;"><?php echo($_SESSION['FIEM']['name']);?></h1>
        <h1 style="display:inline;"><?php echo($_SESSION['FIEM']['number']);?></h1><br>
        <img src="<?php echo($_SESSION['FIEM']['furl']);?>" height="200px" width="200px"> <br>
        <h3><a href="./logout.php">Log out</a></h3> 
    </body>
</html>



