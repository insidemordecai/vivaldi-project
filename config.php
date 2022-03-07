<?php

$link = mysqli_connect("localhost", "root", "", "vivaldi");

if ($link == false) {
  echo "Error connecting to server " . mysqli_connect_error($link);
}