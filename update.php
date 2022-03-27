<?php

session_start();

if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"] !== true) {
  header("location: index.php");
  exit();
}

include "./components/header.php";
include "./components/config.php";

if (isset($_POST["submit"])) {
  $id = $_POST["id"];

  $up_fullName = $_POST["fullName"];
  $up_emailAddress = $_POST["emailAddress"];
  $up_phoneNumber = $_POST["phoneNumber"];
  $up_location = $_POST["location"];
  $up_dob = $_POST["dob"];
  $up_gender = $_POST["gender"];

  $photoname = $_FILES["photo"]["name"];
  $tempname = $_FILES["photo"]["tmp_name"];
  $folder = "uploads/" . $photoname;

  // moving photo to uploads
  if (move_uploaded_file($tempname, $folder)) {
    echo "<p class='alert alert-primary'> Image has been uploaded successfully </p>";
  } else {
    echo "Error uploading photo";
  }

  $up_sql = "UPDATE `participant` SET `fullName`='$up_fullName',`emailAddress`='$up_emailAddress',`phoneNumber`='$up_phoneNumber',`location`='$up_location',`dob`='$up_dob',`gender`='$up_gender',`photo`='$photoname' WHERE id = $id";

  $up_result = mysqli_query($link, $up_sql);

  if ($up_result) {
    echo "<p class='alert alert-primary'> Record updated successfully </p>";
    header("location: documents.php");
  } else {
    echo "Error updating record $up_sql" . mysqli_error($link);
  }
} else {
  // auto-fill spaces for editing
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
    } else {
      echo "No record of id $id found.";
    }
  } else {
    echo "Error executing query $sql " . mysqli_error($link);
  }
}
?>

<div class="row m-2">
  <div class="card">
    <div class="card-body">
      <form action="update.php" method="post" enctype="multipart/form-data">
        <div class="row m-2 p-2">
          <div class="col-md-6">
            <label class="form-label grey">Full Name</label>
            <input class="form-control" type="text" name="fullName" value="<?php echo $fullName; ?>">
          </div>
          <div class="col-md-6">
            <label class="form-label grey">Email Adress</label>
            <input class="form-control" type="text" name="emailAddress" value="<?php echo $emailAddress; ?>">
          </div>

        </div>
        <div class="row m-2 p-2">
          <div class="col-md-6">
            <label class="form-label grey">Phone Number</label>
            <input class="form-control" type="text" name="phoneNumber" value="<?php echo $phoneNumber; ?>">
          </div>
          <div class="col-md-6">
            <label class="form-label grey">Address Location</label>
            <input class="form-control" type="text" name="location" value="<?php echo $location; ?>">
          </div>

        </div>
        <div class="row m-2 p-2">
          <div class="col-md-6">
            <label class="form-label grey">Date of Birth</label>
            <input class="form-control" type="date" name="dob" value="<?php echo $dob; ?>">
          </div>
          <div class="col-md-6">
            <label class="form-label grey">Gender</label>
            <select class="form-control" name="gender">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="<?php echo $gender; ?>" selected><?php echo $gender; ?></option>
            </select>
          </div>

          <div class="row p-2">
            <div class="col-md-12">
              <label class="form-label grey">Your Photo</label>
              <input class="form-control" type="file" name="photo">

            </div>
          </div>

          <div class="row p-2">
            <div class="col-md-12">
              <input class="form-control" type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
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