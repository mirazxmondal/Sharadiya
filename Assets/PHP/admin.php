<?php
require 'admin-DB-connection.php';

$ptitle = $_POST['ptitle'];
$description = $_POST['description'];
$file_1 = $_FILES['thumbnail']['name'];
// $file_2 = $_FILES['file']['name']; 

$file = '';
$file_tmp = '';
$location = "../.././Upload/";
$data = '';
foreach ($_FILES['media2']['name'] as $key => $val) {
    $file = $_FILES['media2']['name'][$key];
    $file_tmp = $_FILES['media2']['tmp_name'][$key];
    move_uploaded_file($file_tmp, $location . $file);
    $data .= $file . " ";
}

// know the file type
$type = pathinfo($file_1 . $file_2, PATHINFO_EXTENSION);

if ($type == "jpeg" || $type == "jpg" || $type == "png" || $type == "mp4" || $type == "mkv") {
    // to place the pictures on server
    move_uploaded_file($_FILES['thumbnail']['tmp_name'], '../.././Upload/' . $file_1);
    // move_uploaded_file($_FILES['file']['tmp_name'], '../.././Upload/'.$file_2);

    $sql = "insert into admin(ptitle,description,media,file,media2) values('$ptitle','$description','$file_1','$file_2','$data')";
    $x = mysqli_query($conn, $sql);
    if ($x == 1) {
        header("location:admin-confirmation.html?msg=Done");
    } else {
        header("location:upload-page.php?msg=NotDone");
    }
} else {
    header("location:upload-page.php?msg=type-not-matched");
}
?>

Multiple picture add logic
<?php

//  // Count total uploaded files
//  $totalfiles = count($_FILES['file']['name']);

//  // Looping over all files
//  for($i=0;$i<$totalfiles;$i++){
//  $filename = $_FILES['file']['name'][$i];

// // Upload files and store in database
// if(move_uploaded_file($_FILES["file"]["tmp_name"][$i],'../.././Upload/'.$filename)){
// 		// Image db insert sql
// 		$insert = "INSERT into admin(file) values('$filename')";
// 		if(mysqli_query($conn, $insert)){
// 		  echo 'Data inserted successfully';
// 		}
// 		else{
// 		  echo 'Error: '.mysqli_error($conn);
// 		}
// 	}else{
// 		echo 'Error in uploading file - '.$_FILES['file']['name'][$i].'<br/>';
// 	}
//  }

?>