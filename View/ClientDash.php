<?php 

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Safae Baamel">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>Client Dash</title>
  <!-- Bootstrap core CSS -->
  <link href="Assets/Style/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="Assets/Style/dashboard.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-dark sticky-top bg-light flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-3 p-4 fs-3" href="#">Vacatya</a>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="home"></span>
                Dashboard <span class="sr-only">Admin</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file"></span>
                Orders
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reservation.php">
                <span data-feather="users"></span>
                Reservations
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold" href="index.php?disconnect">
                <span data-feather="layers"></span>
                Disconnect
              </a>
            </li>
          </ul>
      </nav>

      <div class="container m-4">
        <div class="row my-4">
          <div class="col-md-10 mx-auto">
            <div class="card">
              <div class="card-body bg-light"  style="padding-left: 234px;">
                <table class="table table-hover">
                  <thead>
                    <tr class="">
                      <th scope="col">date_entrer</th>
                      <th scope="col">date_sortie</th>
                      <th scope="col">chambre_type</th>
                      <th scope="col">chambre_view </th>
                      <th scope="col">pension</th>
                      <th scope="col">enfants</th>
                      <th scope="col">Tarifs</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Bootstrap core JavaScript
    ================================================== -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
      </script>
      <!-- Icons -->
      <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>

</body>

</html>