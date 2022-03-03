<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="bg-primary">

  <div class="container-fluid p-4">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-5">
            <div>
              <img src="https://images.unsplash.com/photo-1518640467707-6811f4a6ab73?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="Login" width="400">
            </div>
          </div>

          <div class="col-lg-7">
            <div class="text-center">
              <h4>Create an Account</h4>
            </div>

            <form action="" method="post">
              <div class="row mb-3">
                <div class="col-lg-6">
                  <input class="form-control rounded-pill" type="text" name="firstname" placeholder="First Name" required>
                </div>
                <div class="col-lg-6">
                  <input class="form-control rounded-pill" type="text" name="secondname" placeholder="Second Name" required>
                </div>
              </div>
              <div class="row mb-3">
                <div>
                  <input class="form-control rounded-pill" type="email" name="email" placeholder="Email Address">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-lg-6">
                  <input class="form-control rounded-pill" type="password" name="password" placeholder="Password">
                </div>
                <div class="col-lg-6">
                  <input class="form-control rounded-pill" type="confirmpassword" name="confirmpassword" placeholder="Confirm Password">
                </div>
              </div>
              <div class="row mb-3">
                <input class="btn btn-primary rounded-pill" type="submit" name="register" value="Register">
              </div>
              <hr>
              <div class="row mb-3">
                <button class="btn btn-danger rounded-pill"><i class="fa fa-google"></i> Register With Google</button>
              </div>
            </form>
            <hr>
            <div class="text-center">
              <a href="">Forgot Password?</a>
            </div>
            <div class="text-center">
              <a href="index.php">Already have an account? Log in</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>