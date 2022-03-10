<?php

session_start();
include "handle_glogin.php";
include "handle_login.php";
include "header.php";

if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"] !== true) {
  header("location: index.php");
  exit();
}

?>

<div class="row m-2 p-2">
  <div class="col-md-6">
    <h3 class="grey">The Dashboard</h3>
  </div>

  <div class="col-md-6">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Get Report
      <i class="fa fa-arrow-circle-o-down fa-lg"></i>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Choose a Report
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">...</div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn btn-primary">
              Save changes
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row m-2">
  <div class="col">
    <div class="card">
      <div class="card-body border-left-primary">
        <div class="row align-items-center">
          <div class="col">
            <div class="text-primary">Requests</div>
            <div class="grey">50+ requests</div>
          </div>
          <div class="col-auto">
            <i class="fa fa-comments-o fa-2x grey"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <div class="card-body border-left-green">
        <div class="row align-items-center">
          <div class="col">
            <div class="text-success">Monthly Earnings</div>
            <div class="grey">$400,000</div>
          </div>
          <div class="col-auto">
            <i class="fa fa-calendar-o fa-2x grey"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <div class="card-body border-left-orange">
        <div class="row align-items-center">
          <div class="col">
            <div class="text-warning">To Do List</div>
            <div class="grey">10 Pending</div>
          </div>
          <div class="col-auto">
            <i class="fa fa-reorder fa-2x grey"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row m-2">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-header text-primary bg-white">
        Projects Progress
      </div>
      <div class="card-body">
        <div class="m-2 p-2">
          <span class="grey">Software Installation</span>
          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
              25%
            </div>
          </div>
        </div>
        <div class="m-2 p-2">
          <span class="grey">Account Setup</span>
          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
              58%
            </div>
          </div>
        </div>
        <div class="m-2 p-2">
          <span class="grey">Dashboard Design</span>
          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              75%
            </div>
          </div>
        </div>
        <div class="m-2 p-2">
          <span class="grey">Dashboard Creation</span>
          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              100%
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-header text-primary bg-white">
        Toasts and Tooltiops
      </div>
      <div class="card-body">
        <div>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Mollitia accusantium asperiores accusamus. Facilis magni
          impedit nihil explicabo itaque quos fugit?
          <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="This link will take you to mysite.com">Lorem ipsum dolor sit amet</a>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Omnis ducimus magni saepe nemo quod itaque reiciendis cumque
          tenetur dolores a.
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row m-2">
  <div class="col-6">
    <div class="row">
      <div class="col">
        <div class="alert alert-primary" role="alert">
          A simple primary alert—check it out!
        </div>
      </div>
      <div class="col">
        <div class="alert alert-secondary" role="alert">
          A simple secondary alert—check it out!
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="alert alert-success" role="alert">
          A simple success alert—check it out!
        </div>
      </div>
      <div class="col">
        <div class="alert alert-warning" role="alert">
          A simple warning alert—check it out!
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="alert alert-danger" role="alert">
          A simple danger alert—check it out!
        </div>
      </div>
      <div class="col">
        <div class="alert alert-dark" role="alert">
          A simple dark alert—check it out!
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <ul class="list-group">
      <li class="list-group-item d-flex justify-content-between">
        A list item
        <span class="badge bg-primary rounded-pill">14</span>
      </li>
      <li class="list-group-item d-flex justify-content-between">
        A second list item
        <span class="badge bg-primary rounded-pill">2</span>
      </li>
      <li class="list-group-item d-flex justify-content-between">
        A third list item
        <span class="badge bg-primary rounded-pill">1</span>
      </li>
      <li class="list-group-item d-flex justify-content-between">
        A fourth list item
        <span class="badge bg-primary rounded-pill">3</span>
      </li>
      <li class="list-group-item d-flex justify-content-between">
        A fifth list item
        <span class="badge bg-primary rounded-pill">7</span>
      </li>
      <li class="list-group-item d-flex justify-content-between">
        <span class="bg-primary text-white">A sixth list item </span>
        <span class="badge bg-primary rounded-pill">3</span>
      </li>
    </ul>
  </div>
</div>
</div>
</div>
</div>
</body>

</html>