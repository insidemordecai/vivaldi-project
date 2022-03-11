<?php

session_start();
include "handle_glogin.php";
include "handle_login.php";
include "config.php";

if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"] !== true) {
  header("location: index.php");
  exit();
}

if (isset($_POST["submit"])){
  $id = $_POST["id"];
  $sql = "DELETE FROM `participant` WHERE id = $id";
  $result = mysqli_query($link, $sql);

  if ($result){
    echo "Record was deleted.";
    header("location: documents.php");
  } else {
    echo "Error executing query $sql" . mysqli_error($link);
  }
}

include "./components/header.php";
?>

<div class="row m-2">
  <div class="alert alert-danger">
    <form action="delete.php" method="post">
      <div class="p-2 text-center">
        <label for="">Are you sure you want to delete this record?</label>
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
      </div>

      <div class="p-2 text-center">
        <input type="submit" value="YES" name="submit" class="btn btn-danger col-md-3">
        <a href="documents.php" class="btn btn-primary col-md-3">NO</a>
      </div>

    </form>
  </div>
</div>