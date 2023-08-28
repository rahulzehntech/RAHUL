<?php
$conn = mysqli_connect("localhost", "root", "", "crud") or die("connection failed");


// Process login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

/*     $targetDir = "upload/";
    $profilePicture = $targetDir . basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"], $profilePicture); */

    $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        
        $user = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION["username"] = $user["username"];
        header("Location: dashboard.php"); 
        exit();
    } else {
        
        echo "Invalid username or password.";
    }
}

mysqli_close($conn);





?>