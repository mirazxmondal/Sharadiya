<?php
require 'connect1.php';
require 'session-check.php';
$result = mysqli_query($conn,"SELECT * FROM admin");

echo "<table border='1' border-collapse: collapse;>
<tr>
<th>Title</th>
<th>Description</th>
<th>Media</th>
<th>Approval</th>
</tr>";
echo "<center>WELCOME ADMIN!</center>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['ptitle'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
// echo '<img height="300" width="300"' . $rows['media'] . '>';
echo "<td><img height= '350px' width='350px' src='../../.././Upload/".$row['media']."'></td>";
echo "<td><video controls height='240px' width='350px'><source src='../../.././Upload/" .$row['file']. "'></video></td>";
echo " <a href='../../index.html/'><td><img height='50px' width='50px' src='../../../Upload/right.png'></td></a> ";
echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
<html>
    <head>
        <link rel="stylesheet" href="../styles/./index.css"> 
    </head>
    <body>
        <!-- <h1 style="display:inline;"><?php echo($_SESSION['FIEM']['name']);?></h1>
        <h1 style="display:inline;"><?php echo($_SESSION['FIEM']['number']);?></h1><br>
        <img src="<?php echo($_SESSION['FIEM']['furl']);?>" height="200px" width="200px"><br> -->
        <center>
        <h2><a href="./logout.php">Log out</a></h2> 
        </center>
    </body>
</html>





