<?php

session_start();
include "handle_glogin.php";
include "handle_login.php";
include "./components/header.php";
include "config.php";

if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"] !== true) {
  header("location: index.php");
  exit();
}

?>

<div class="row m-2">
  <div class="card">
    <div class="card-header bg-white">View Participants</div>
    <div class="card-body">

      <?php

      $sql = "SELECT * FROM `participant`";
      $result = mysqli_query($link, $sql);

      if ($result) {
        $data = mysqli_num_rows($result);

        if ($data > 0) {
          echo "<table class='table table-striped'>";
          echo "<tr>";
          echo "<th>#</th>";
          echo "<th>Full Name</th>";
          echo "<th>Phone Number</th>";
          echo "<th>Location</th>";
          echo "<th>Gender</th>";
          echo "<th>Actions</th>";
          echo "</tr>";

          while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['fullName'] . "</td>";
            echo "<td>" . $row['phoneNumber'] . "</td>";
            echo "<td>" . $row['location'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo
            "<td>
            <a href='view.php?id=" . $row["id"] . "'><i class='fa fa-eye'></i></a>
            <a href='delete.php?id=" . $row["id"] . "'><i class='fa fa-trash'></i></a>
          </td>";
            echo "</tr>";
          }

          echo "</table>";
        } else {
          echo "<p>No data was found</p>";
        }
      } else {
        echo "Error executing query $sql" . mysqli_error($link);
      }

      ?>
    </div>
  </div>
</div>