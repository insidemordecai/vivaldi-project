<?php

include "handle_glogin.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>

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
              <img src="https://images.unsplash.com/photo-1574169208507-84376144848b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=579&q=80" alt="Login" width="400">
            </div>
          </div>

          <div class="col-lg-7">
            <div class="text-center">
              <h4>Log In Here</h4>
            </div>

            <form action="handle_login.php" method="post">
              <div class="row mb-3">
                <input class="form-control rounded-pill" type="email" name="email" placeholder="Email Address">
              </div>
              <div class="row mb-3">
                <input class="form-control rounded-pill" type="password" name="password" placeholder="Password">
              </div>
              <div class="row mb-3">
                <input class="btn btn-primary rounded-pill" type="submit" name="login" value="Log In">
              </div>
              <hr>
              <div class="row mb-3">
                <button type="button" onclick="window.location='<?php echo $login_url;?>'" class="btn btn-danger rounded-pill"><i class="fa fa-google"></i> Login With Google</button>
              </div>
            </form>
            <hr>
            <div class="text-center">
              <a href="">Forgot Password?</a>
            </div>
            <div class="text-center">
              <a href="register.php">Create Account</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>