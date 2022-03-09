<?php

include "./google-api/vendor/autoload.php";
include "./client_secret.php";

$gClient = new Google_Client();

$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setApplicationName("Vivaldi");
$gClient->setRedirectUri($redirectUri);
$gClient->addScope("https://www.googleapis.com/auth/plus.login  https://www.googleapis.com/auth/userinfo.email");

$login_url = $gClient->createAuthUrl();

if (isset($_GET["code"])) {

  // get token
  $token = $gClient->fetchAccessTokenWithAuthCode($_GET["code"]);

  if (!isset($token["error"])) {
    $gClient->setAccessToken($token["access_token"]);

    $_SESSION["access_token"] = $token["access_token"];

    // object for gservice
    $gService = new Google_Service_Oauth2($gClient);

    // get user data
    $data = $gService->userinfo->get();

    if (!empty($data["given_name"])) {
      $firstname = $data["given_name"];
      $_SESSION["firstname"] = $firstname;
    }

    if (!empty($data["family_name"])) {
      $secondname = $data["family_name"];
      $_SESSION["secondname"] = $secondname;
    }

    if (!empty($data["email"])) {
      $email = $data["email"];
      $_SESSION["email"] = $email;
    }

    if (!empty($data["gender"])) {
      $gender = $data["gender"];
      $_SESSION["gender"] = $gender;
    }

    if (!empty($data["picture"])) {
      $picture = $data["picture"];
      $_SESSION["picture"] = $picture;
    }

    // save login state
    $_SESSION["loggedin"] = true; 
  }
}
