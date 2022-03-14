<?php

session_start();

if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"] !== true) {
  header("location: index.php");
  exit();
}

include "./components/header.php";
?>

<div class="row m-2">
  <div class="card">
    <div class="card-body">
      <form action="handle_addstudent.php" method="post" enctype="multipart/form-data">
        <div class="row m-2 p-2">
          <div class="col-md-6">
            <label class="form-label grey">Full Name</label>
            <input class="form-control" type="text" name="fullName" placeholder="">
          </div>
          <div class="col-md-6">
            <label class="form-label grey">Email Adress</label>
            <input class="form-control" type="text" name="emailAddress">
          </div>

        </div>
        <div class="row m-2 p-2">
          <div class="col-md-6">
            <label class="form-label grey">Phone Number</label>
            <input class="form-control" type="text" name="phoneNumber">
          </div>
          <div class="col-md-6">
            <label class="form-label grey">Address Location</label>
            <input class="form-control" type="text" name="location">
          </div>

        </div>
        <div class="row m-2 p-2">
          <div class="col-md-6">
            <label class="form-label grey">Date of Birth</label>
            <input class="form-control" type="date" name="dob">
          </div>
          <div class="col-md-6">
            <label class="form-label grey">Gender</label>
            <select class="form-control" name="gender">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>

          <div class="row p-2">
            <div class="col-md-12">
              <label class="form-label grey">Your Photo</label>
              <input class="form-control" type="file" name="photo">

            </div>
          </div>

          <div class="row m-2 p-2">
            <div class="text-center">
              <input type="submit" name="submit" class="col-6 btn btn-danger" value="SUBMIT">
            </div>

          </div>
        </div>

      </form>
    </div>
  </div>
</div>