<?php
require 'connect.php';
$i=" ";
$query="select media2 from admin";
$fire=mysqli_query($conn,$query);
$data=mysqli_fetch_array($fire);
$res=$data['media2'];
$res=explode(" ",$res);
$count=count($res)-1;
for($i=0;$i<$count;++$i)
{
    ?>
    <img src="../.././Upload/<?= $res[$i]?>" height="100px" width="100px"/>
    <?php
}
?>