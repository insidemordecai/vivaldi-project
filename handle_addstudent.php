<?php

session_start();
include "./components/header.php";
include "./components/config.php";

if (isset($_POST["submit"])) {

  // pick values
  $fullName = $_POST["fullName"];
  $emailAddress = $_POST["emailAddress"];
  $phoneNumber = $_POST["phoneNumber"];
  $location = $_POST["location"];
  $dob = $_POST["dob"];
  $gender = $_POST["gender"];

  // file
  $photoname = $_FILES["photo"]["name"];
  $tempname = $_FILES["photo"]["tmp_name"];
  $folder = "uploads/" . $photoname;

  $sql = "INSERT INTO `participant`(`fullName`, `emailAddress`, `phoneNumber`, `location`, `dob`, `gender`, `photo`) VALUES ('$fullName','$emailAddress','$phoneNumber','$location','$dob','$gender','$photoname')";

  $result = mysqli_query($link, $sql);

  if (move_uploaded_file($tempname, $folder)) {
    echo "<p class='alert alert-primary'> Image has been uploaded successfully </p>";
  } else {
    echo "Error uploading photo";
  }

  if ($result) {
    echo "<p class='alert alert-danger'> Records have been uploaded successfully </p>";
  } else {
    echo "Error executing this query $sql" . mysqli_error($link);
  }
}
