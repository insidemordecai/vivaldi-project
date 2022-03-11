<?php

session_start();
include "handle_glogin.php";
include "handle_login.php";
include "./components/header.php";
include "./components/config.php";

if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"] !== true) {
  header("location: index.php");
  exit();
}

if (isset($_GET["id"]) and !empty($_GET["id"])) {
  $id = $_GET["id"];

  $sql = "SELECT * FROM `participant` WHERE id = $id";
  $result = mysqli_query($link, $sql);

  if ($result) {
    $data = mysqli_num_rows($result);

    if ($data == 1) {
      $row = mysqli_fetch_array($result);

      $fullName = $row["fullName"];
      $emailAddress = $row["emailAddress"];
      $phoneNumber = $row["phoneNumber"];
      $location = $row["location"];
      $dob = $row["dob"];
      $gender = $row["gender"];
      $photo = $row["photo"];
      $timestamp = $row["timestamp"];

      $filepath = "uploads/$photo";
?>

      <div class="row m-2">
        <div class="card col-md-4">
          <div class="card-body">
            <div class="m-2">
              <img src="<?php echo $filepath; ?>" alt="loading" height="150" width="150">
            </div>
            <hr>
            <div class="m-2">
              <label for="" class="form-label">Name: <?php echo $fullName; ?></label>
            </div>

            <div class="m-2">
              <label for="" class="form-label">Phone: <?php echo $phoneNumber; ?></label>
            </div>
          </div>
        </div>

        <div class="card col-md-6">
          <div class="m-2">
            <label for="" class="form-label">Gender: <?php echo $gender; ?></label>
          </div>
          <div class="m-2">
            <label for="" class="form-label">Email: <?php echo $emailAddress; ?></label>
          </div>
          <hr>
          <div class="m-2">
            <label for="" class="form-label">Location: <?php echo $location; ?></label>
          </div>
          <div class="m-2">
            <label for="" class="form-label">DOB: <?php echo $dob; ?></label>
          </div>
          <hr>
          <div class="m-2">
            <label for="" class="form-label">User Created: <?php echo $timestamp; ?></label>
          </div>
        </div>
      </div>


<?php
    } else {
      echo "This record was not found!";
    }
  } else {
    echo "Error executing query $sql" . mysqli_error($link);
  }
} else {
  echo "<p>ID Value not picked</p>";
}
