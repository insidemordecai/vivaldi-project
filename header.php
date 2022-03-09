<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/dash.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <script src="js/popper.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/dash.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-lg-3 bg-primary">
        <ul class="nav flex-column">
          <li class="nav-item spacy">
            <a class="nav-link active" aria-current="page" href="#">
              <i class="fa fa-buysellads text-white fa-3x"></i>
              <span class="text-white h4 m-3">VIVALDI ADMIN</span>
            </a>
          </li>

          <hr />

          <li class="nav-item spacy">
            <a class="nav-link" href="#">
              <i class="fa fa-dashboard text-white fa-lg"></i>
              <span class="text-white m-2">Dashboard</span>
            </a>
          </li>

          <hr />

          <li class="nav-item spacy">
            <a class="nav-link" href="addparticipant.php">
              <i class="fa fa-users text-white fa-lg"></i>
              <span class="text-white m-2">Participants</span>
            </a>
          </li>
          <li class="nav-item spacy">
            <a class="nav-link" href="#">
              <i class="fa fa-cogs text-white fa-lg"></i>
              <span class="text-white m-2">Components</span>
            </a>
          </li>

          <hr />

          <li class="nav-item spacy">
            <a class="nav-link" href="#">
              <i class="fa fa-file text-white fa-lg"></i>
              <span class="text-white m-2">Documents</span>
            </a>
          </li>
          <li class="nav-item spacy">
            <a class="nav-link" href="#">
              <i class="fa fa-line-chart text-white fa-lg"></i>
              <span class="text-white m-2">Charts</span>
            </a>
          </li>

          <hr />

          <li class="nav-item spacy">
            <a class="nav-link" href="#">
              <i class="fa fa-clipboard text-white fa-lg"></i>
              <span class="text-white m-2">Accounts</span>
            </a>
          </li>
          <li class="nav-item dropdown spacy">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-archive text-white fa-lg"></i>
              <span class="text-white m-2">Archive</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="#">2021</a></li>
              <li><a class="dropdown-item" href="#">2020</a></li>
            </ul>
          </li>
          <hr />
          <li class="nav-item spacy">
            <a class="nav-link" href="logout.php">
              <i class="fa fa-mail-forward text-white fa-lg"></i>
              <span class="text-white m-2">Log Out</span>
            </a>
          </li>
        </ul>
      </div>

      <div class="col-sm-9 col-lg-9 bg-light">
        <div class="row bg-white">
          <div class="col-sm-7 col-lg-7">
            <nav class="navbar navbar-light">
              <div class="container-fluid">
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                  <button class="btn btn-outline-primary" type="submit">
                    Search
                  </button>
                </form>
              </div>
            </nav>
          </div>

          <div class="col-sm-5 col-lg-5">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active btn dropdown-toggle" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-envelope fa-lg grey"></i>
                        <span class="badge bg-danger rounded-pill">10+</span>
                      </a>
                      <div class="dropdown-menu p-4 text-muted" style="max-width: 200px">
                        <p>
                          <b>John D.</b><br />
                          Hello, could you pass by my office?
                        </p>
                        <p class="mb-0">
                          <b>Molly C.</b><br />
                          The report doesn't make sense.
                        </p>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <i class="fa fa-bell fa-lg grey"></i>
                        <span class="badge bg-danger rounded-pill">4</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span class="m-2"><?php echo $_SESSION["firstname"]; ?></span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" id="LiveToastBtn">
                        <img class="rounded-circle" src="<?php echo $_SESSION["picture"]; ?>" alt="Loading" width="32" height="32" />
                      </a>

                      <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                        <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
                          <div class="toast-header">
                            <img src="..." class="rounded me-2" alt="..." />
                            <strong class="me-auto">Bootstrap</strong>
                            <small>11 mins ago</small>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                          </div>
                          <div class="toast-body">
                            Hello, world! This is a toast message.
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>