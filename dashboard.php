<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.html"); 
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

   
</head>
<body>
   
<div class="p-5">

    
<?php
if(isset($_SESSION["firstname"]) && isset($_SESSION["lastname"])) {
    echo "<h2>WELCOME!</h2>". $_SESSION["firstname"] . " " . $_SESSION["lastname"];
} else {
    echo "<h2>WELCOME! User</h2>";
}
?>


<div class="container-fluid text-align-center"></div>
     <a href="logout.php">
     <button class="btn btn-primary" type="submit" value="logout">logout</button>
     </a>
   

</div>
        
</div>
   
</body>
</html>
