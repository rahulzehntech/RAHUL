<?php

include "config.php";

if (isset($_POST['submit']) && isset($_FILES['file'])) {
   
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $username = $_POST['username'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];

    $filename = $_FILES['file']['name'];
    $tempname = $_FILES['file']['tmp_name']; 

    $folder = "upload/".$filename; 

        $sql = "insert into login (firstname, lastname, username,contact,city, file) values('$fname','$lname','$username','$contact', '$city' ,'$filename')";

    if (mysqli_query($conn, $sql)) {

      echo "record entered susscefuly";
    }
    else{
        echo "error". mysqli_error($conn);
    }

   
    


}

mysqli_close($conn);
?>


