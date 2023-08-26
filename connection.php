<?php
include "config.php"; 

if (isset($_POST['submit'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];

    $file_name = $_FILES['file']['name'];
    $temp_name = $_FILES['file']['tmp_name']; 


    move_uploaded_file($temp_name, "upload/".$file_name);

    $sql = "INSERT INTO login (firstname, lastname, username, password, contact, city, file) VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssssss", $fname, $lname, $username, $password, $contact, $city, $file_name);

    if (mysqli_stmt_execute($stmt)) {
        echo "Record entered successfully";
        header("Location: login.php"); 
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
