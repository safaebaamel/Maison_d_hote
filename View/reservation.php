<?php
    include_once '../Controllers/ReservationController.php';

    $res = new ReservationController;
    $res->addReservation();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="Assets/Style/reservation.css">
    <title>Reservation</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed navbar-expand-lg navbar-dark bg-dark p-md-3" style="background-color: black;">
        <div class="container">
            <a href="#" class="navbar-brand fs-3">Vacatya</a>
            <button type="button" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse"
                aria-controls="navbarNav" aria-expanded="false" aria-lable="Toggle Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="ClientDash.php" class="nav-link text-white fs-5">Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- body form -->
    <div class="bg-light">
        <div class="container">
            <div class="row mt-4">
                <div class="col-sm-4 order-md-2 mb-4">
                    <div class="message"></div>
                    <form class="card p-2" method="post">
                        <img src="Assets/Img/font.jpg" alt="" id="resImg">
                        <div class="input-group-append text-center m-1">
                            <label id="description" class="m-2 fs-4">Our beautiful Destinations</label>
                        </div>
                        <div class="text-center" style="color: blue;" name="price" id="price">
                        </div>
                    </form>
                </div>
               
                <!----billing address-->
                <div class="col-sm-8 order-md-1">
                    <h4 class="mb-3 text-center fs-1">Reservation</h4>
                    <form class="needs-validation" novalidate="" method="post">
                        <!---CHECKIN-->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Date In</label>
                                <input class="form-control" name="Date_entree" id="d_in" onchange="total()" type="date" required="">
                            </div>
                            <!----CHeckOut---->
                            <div class="col-md-6 mb-3">
                                <label>Date Out</label>
                                <input class="form-control" name="Date_sortie" id="d_out" onchange="total()" type="date" required="">
                            </div>
                        </div>
                        <!-- Good to reserve -->
                        <div class="col-md-4 mb-3">
                            <div class="">
                                <label>Choose a Good to reserve!</label>
                                <select name="reservation" name="id_bien" value="" id="good" onchange="Good()">
                                    <option value="empty"></option>
                                    <option value="simplechamber">Normal Chamber</option>
                                    <option value="doublechamber">Double Chamber</option>
                                    <option value="bungalow">Bungalow</option>
                                    <option value="appartment">Appartment</option>
                                </select>
                                <div id="affichage"></div>
                            </div>
                        </div>
                        <div id="view_div"></div>
                        <div id="double_type"></div>
                        <!-- Pension  -->
                        <div>
                            <div class="">
                                <label for="" class="">Choose a Pension!</label>
                                <select name="id_pension" id="pension" onchange="pension_func()">
                                    <option value="empty"></option>
                                    <option value="nopension">None</option>
                                    <option value="allpension">Complete</option>
                                    <optgroup label="Half">
                                        <option value="breakfastandlunch">Breakfast/Lunch</option>
                                        <option value="breakfastanddinner">Breakfast/Dinner</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <hr class="my-4">
                        <!-- Children -->
                        <div class="d-flex justify-content-around">
                            <div class="form-check">
                                <input id="no_child" name="child" value="false" type="checkbox" 
                                    onchange="check_add_children()" required>
                                <label>Without Children</label>
                            </div>
                            <div class="form-check">
                                <input id="with_child" name="child" value="true" type="checkbox" 
                                    onchange="check_add_children()" required>
                                <label>With Children</label>
                            </div>
                        </div>
                        <div id="plus_children"></div>
                        <div id="extra"></div>
                        <hr class="my-4">
                        <!--- Reservation button-->
                        <div class="d-flex justify-content-between mx-auto">
                            <button class="btn btn-success btn-block m-2" id="finalbooking" name="book"
                                type="submit">Book Now</button>
                            <button class="btn btn-primary btn-block m-2" id="addreservation" name="add"
                                type="submit">Add Reservation</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="page-footer bg-dark w-100">
        <div class="container text-center text-md-left mt-5">
            <div class="row bg-dark pt-4 shadow-none">
                <div class="col-md-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold text-white">About Us</h6>
                    <hr class="bg-light mb-4 mt-0 d-inline-block mx-auto text-white" style="width: 125px; height: 2px">
                    <p class="mt-2 text-white">Book your room right now and start your amazing adventure full of
                        discoveries and experiences</p>
                </div>
                <div class="col-md-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold text-white">We provide?</h6>
                    <hr class="bg-light mb-4 mt-0 d-inline-block mx-auto text-white" style="width: 85px; height: 2px">
                    <ul class="list-unstyled">
                        <li class="my-2"><a href="#" class="text-white" style="text-decoration: none;">Simple
                                Rooms</a></li>
                        <li class="my-2"><a href="#" class="text-white" style="text-decoration: none;">Double
                                Rooms</a></li>
                        <li class="my-2"><a href="#" class="text-white" style="text-decoration: none;">Appartment</a>
                        </li>
                        <li class="my-2"><a href="#" class="text-white" style="text-decoration: none;">Bungalow</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold text-white">Useful Links</h6>
                    <hr class="bg-light mb-4 mt-0 d-inline-block mx-auto" style="width: 110px; height: 2px;">
                    <ul class="list-unstyled">
                        <li class="my-2"><a class="text-white" href="index.php" style="text-decoration: none;">Home</a>
                        </li>
                        <li class="my-2"><a class="text-white" href="#" style="text-decoration: none;">About Us</a>
                        </li>
                        <li class="my-2"><a class="text-white" href="gallery.php"
                                style="text-decoration: none;">Gallery</a></li>
                        <li class="my-2"><a class="text-white" href="#" style="text-decoration: none;">Contact
                                Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center text-white">
            Created with <i class="bi bi-heart-fill" style="color:blue;"></i> by Blue
        </div>
    </footer>
    <script src="Assets/Js/reservation.js"></script>
</body>

</html>