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
   


<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid" >
<a class="navbar-brand" href="#">iLogin</a>
  
     <a href="logout.php">
     <button class="btn btn-danger" type="submit" value="logout">logout</button>
     </a>


    
  </div>
</nav>


<div class= "container-fluid">
    <div class="row text-center mt-5" >

    <?php  if (isset($_SESSION['username']) ) : ?>
             <h1>
                             Welcome!
                             <strong>
                                 <?php echo $_SESSION['username']; ?>
                             </strong>
                         </h1>

                 <?php endif ?>

</div>

<div class = "row text-center my-4">

<p class = "display-6 ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti officia natus, quidem necessitatibus reprehenderit vitae obcaecati culpa nam, enim, inventore cum quo eveniet molestiae voluptas aperiam praesentium dignissimos impedit quos?</p>
</div>
        
</div>
   
</body>
</html>
