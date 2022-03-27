### Vivaldi Project

Installation/Setup:

- Download latest release of [Google API Client Library for PHP] (project was built using v2.12.1)
- Extract the zip file to root of the project and rename to google-api

For Log In with Google: 
- Set up the project on [Google Developer Console]
- Download the `client_secret.json` file and save outside of the project folder
- Create a `client_secret.php` file in root (for security, it is untracked)
- Within it, create the following variables and declare them with your details:
  - `$clientId = "YOUR ID";` 
  - `$clientSecret = "YOUR SECRET";` 
  - `$redirectUri = "YOUR REDIRECT";`

To reproduce this project, the project sql file `vivaldi.sql` is included in the root folder. Import into phpMyAdmin. The file db also includes a table `hospital` for [Hospital Admission project].

[Google API Client Library for PHP]: https://github.com/googleapis/google-api-php-client
[Google Developer Console]: https://console.cloud.google.com/apis/dashboard
[Hospital Admission project]:https://github.com/insidemordecai/hospital-admission
