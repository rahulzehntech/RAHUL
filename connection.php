<?php

include "config.php";

if (isset($_POST['submit'])) {
   
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $username = $_POST['username'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];

    $file_name = $_FILES['file']['name'];
    $temp_name = $_FILES['file']['tmp_name']; 

    $folder = "upload/".$file_name; 

    move_uploaded_file($file_name, "upload/".$temp_name);

        $sql = "insert into login (firstname, lastname, username,contact,city, file) values('$fname','$lname','$username','$contact', '$city' ,'$file_name')";

    if (mysqli_query($conn, $sql)) {

      echo "record entered susscefuly";
    }
    else{
        echo "error". mysqli_error($conn);
    }

   
    


}

mysqli_close($conn);
?>


