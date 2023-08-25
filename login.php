<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>
<body class="bg-dark-subtle">
    

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home 
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      
    </ul>
    
  </div>
</nav>
  
  <div class="container mt-4 ">

    <h2 class="fw-bold">Login to your account.</h2><br>

  <form class="  needs-validation  " novalidate>
    
    <div class="col-md-4 mb-3">

      <label for="validusername" class="form-label">Username</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">@</span>
        <input type="text" class="form-control" id="validusername" aria-describedby="inputGroupPrepend" name="username"  required>
        <div class="invalid-feedback">
          Please enter a username.
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-3">

<label for="validusername" class="form-label">Password</label>
<div class="input-group has-validation">
 
  <input type="password" class="form-control" id="validpassword" aria-describedby="inputGroupPrepend" name="password"  required>
  <div class="invalid-feedback">
    Please enter your password.
  </div>
</div>
</div>


    <div class="col-12">
      <button class="btn btn-success" type="submit">LOGIN</button>
    </div>
  </form>
</div>
          

   <script>       
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        </script> 
</body>
</html>