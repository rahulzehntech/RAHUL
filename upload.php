<?php
include 'config.php';

if (isset($_FILES['file'])) {

    $filename = $_FILES['file']['name'];
    $tempname = $_FILES['file']['tmp_name']; 

    $folder = "upload/".$filename; 

    $sql = "insert into login (file) values('$filename')";

    if (mysqli_query($conn, $sql)) {

        echo "image entered susscefuly";
      }
      else{
          echo "not inserted succesfully";
      }
    
}

?>