<?php

include "handle_glogin.php";

echo $_SESSION["firstname"];
echo $_SESSION["secondname"];
echo $_SESSION["email"];

echo "<img src='" . $_SESSION["picture"] . "' >";
