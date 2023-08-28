
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
 <div class="container-fluid">

 <a class="navbar-brand" href="#">iLogin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

     
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      
    </ul>
    
  </div>
  </div>
</nav>
  
  <div class="container col-10 justify-content-center align-items-center mt-4 ">

    <h2 class="fw-bold">Registration Form</h2>

  <form class="needs-validation" method = "post" action="connection.php" novalidate enctype="multipart/form-data">
    <div class="col-md-4 mb-3">
      <label for="validfirstname" class="form-label">First name</label>
      <input type="text" class="form-control" id="validfirstname" name="firstname"  required>
      <div class="invalid-feedback">
        Enter your first name.
      </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validlastname" class="form-label">Last name</label>
      <input type="text" class="form-control" id="validlastname" name="lastname" required>
      <div class="invalid-feedback">
        Enter your last name.
      </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validusername" class="form-label">Username</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">@</span>
        <input type="text" class="form-control" id="validusername" aria-describedby="inputGroupPrepend" name="username"  required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>


    <div class="col-md-4 mb-3">
      <label for="validpassword" class="form-label">Password</label>
      <div class="input-group has-validation">
       
        <input type="password" class="form-control" id="validpassword" aria-describedby="inputGroupPrepend" name="password"  required>
        <div class="invalid-feedback">
          Please provide a password.
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validmobile" class="form-label">Contact number</label>
      <input type="tel" class="form-control" id="validmobile" name="contact" maxlength="10" required>
      <div class="invalid-feedback">
        Provide a valid 10-digit number.
      </div>
    </div>
    
    <div class="col-md-4 mb-3">
      <label for="validcity" class="form-label">City</label>
      <input type="text" class="form-control" id="validcity" name="city" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    

    <div class="mb-3 col-md-4">
      <label for="validfile" class="form-label">Upload image</label>
      <input class="form-control" type="file" id="validfile" name="file"  required>
    </div>
    
    <div class="col-12 mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Agree to terms and conditions
        </label>
        <div class="invalid-feedback">
          You must agree before submitting.
        </div>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" name = "submit" type="submit">Submit form</button>
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