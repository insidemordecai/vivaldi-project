<?php

include "./components/config.php";

if (isset($_POST["login"])) {

  $userEmail = $_POST["email"];
  $userPass = $_POST["password"];

  $sql = "SELECT * FROM `users` WHERE email = '$userEmail'";

  $result = mysqli_query($link, $sql);

  if ($result) {
    $data = mysqli_num_rows($result);

    if ($data == 1) {
      while ($row = mysqli_fetch_array($result)) {

        $id = $row["id"];
        $email = $row["email"];
        $firstname = $row["firstname"];
        $password = $row["password"];

        // verify and login
        if (password_verify($userPass, $password)) {

          if ($row["usertype"] == "student") {
            session_start();

            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $id;
            $_SESSION["username"] = $firstname;

            header("location: dashboard.php");
          } elseif ($row["usertype"] == "admin") {
            session_start();

            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $id;
            $_SESSION["username"] = $firstname;

            header("location: admindashboard.php");
          } else {
            echo "You have not been assigned a usertype. Contact Admin.";
          }
        } else {
          echo "Incorrect Password";
        }
      }
    } else {
      echo "No such user was found!";
    }
  } else {
    echo "Error executing query $sql" . mysqli_error($link);
  }
}
