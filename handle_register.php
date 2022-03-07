<?php

include "config.php";

if (isset($_POST["register"])) {

  $firstname = $_POST["firstname"];
  $secondname = $_POST["secondname"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpass = $_POST["confirmpass"];

  if (strlen($password) < 6){
    $passError = "Password be more than 6 characters";
    echo $passError;
  } else {
    $storePass = password_hash($password, PASSWORD_DEFAULT);
  }

  if ($password != $confirmpass){
    $confirmpassError = "Passwords do not match";
    echo $confirmpassError;
  }

  if (empty($passError) and empty($confirmpassError)){
    $sql = "INSERT INTO `users`(`firstname`, `secondname`, `email`, `password`) VALUES ('$firstname','$secondname','$email','$storePass')";

    $result = mysqli_query($link, $sql);

    if ($result) {
      echo "Successfully registered account";
      header("location: index.php");
    } else {
      echo "Error executing query $sql" . mysqli_error($link);
    }
  }
}