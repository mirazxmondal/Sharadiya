<?php
require 'connect1.php';
require 'session-check.php';

// $sql = 'SELECT a.tutorial_id, a.tutorial_author, b.tutorial_count
// FROM tutorials_tbl a, tcount_tbl b
// WHERE a.tutorial_author = b.tutorial_author';

// mysql_select_db('TUTORIALS');
// $retval = mysql_query( $sql, $conn );

// if(! $retval ) {
//    die('Could not get data: ' . mysql_error());
// }

// while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
//    echo "Author:{$row['tutorial_author']} <br> ".
//       "Count: {$row['tutorial_count']} <br> ".
//       "Tutorial ID: {$row['tutorial_id']} <br> ".
//       "--------------------------------<br>";
// }
// echo "Fetched data successfully\n";
// mysql_close($conn); 

?>
<html>
    <head>
        <link rel="stylesheet" href="../styles/./index.css"> 
    </head>
    <body>
        <p>WELCOME ADMIN!</p>

        <h1 style="display:inline;"><?php echo($_SESSION['FIEM']['name']);?></h1>
        <h1 style="display:inline;"><?php echo($_SESSION['FIEM']['number']);?></h1><br>
        <img src="<?php echo($_SESSION['FIEM']['furl']);?>" height="200px" width="200px"><br>
        <h3><a href="./logout.php">Log out</a></h3> 
    </body>
</html>



