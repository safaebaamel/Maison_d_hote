<?php
	session_start();
	if(!isset ($_SESSION['email']) ) {
		header("location: index.php");
	}
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
                    <li class="nav-item">
                        <a href="../controller/logout.php" class="nav-link text-white fs-5">Disconnect</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="bg-light">
        <div class="alert alert-primary text-center" id="warning" role="alert"></div>
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
                        <div id="hidden_price"></div>
                        <div id="pic"></div>
                    </form>
                </div>

                <!----billing address-->
                <div class="col-sm-8 order-md-1">
                    <h4 class="mb-3 text-center fs-1">Reservation</h4>
                    <form action="../controller/ReservationController.php" method="POST">
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <label>Date In</label>
                                <input name="checkin" id="d_in" required type="date" onchange=total() class="form-control ">
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label>Date Out</label>
                                <input name="checkout" id="d_out" required type="date" onchange=total() class="form-control">
                            </div>
                        </div>
                        <!-- Good to reserve -->
                        <div class="row">
                            <div class="">
                                <label>Our Luxury Goods!</label>
                                <select required id="bien" onchange="pick_good()" name="bientype[1][type]">
                                    <option value="" disabled="" selected="">Good</option>
                                    <option value="schamber">Simple Chamber</option>
                                    <option value="dchamber">Double Chamber</option>
                                    <option value="bungalow">Bungalow</option>
                                    <option value="appartment">Appartment</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label>Adding More Rooms</label>
                            <div class="col-8">
                                <input type="number" placeholder="How many rooms to add?" id="extra_chamber">
                            </div>
                            <div class="col-4">
                                <button id="extra" required type="button" class="btn btn-success"
                                    style="margin: 14px;">add Room</button>
                            </div>
                        </div>
                        <div class="row" id="chamber_add"></div>
                        <div style="display:none;" class="col-12 mt-4 text-center" id="title-persons">
                        </div>
                        <div class="row " id="children">
                            <label class="text-center">How many kids ? </label>
                            <div class="col-sm-12">
                                <input name="children" id='nbr_child' placeholder="Number of Children" type="number"
                                    class="form-control mb-4 " onchange="children_func()">
                            </div>
                        </div>
                        <div class="row" id="add_child">
                        </div>
                        <div class="d-grid gap-2 col-12">
                            <button style="width: 200px;" class="btn btn-primary" type="submit"
                                name="reserver">Reserver</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- footer -->
        <footer class="page-footer bg-dark w-100 mt-3">
            <div class="container text-center text-md-left mt-5">
                <div class="row bg-dark pt-4 shadow-none">
                    <div class="col-md-3 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold text-white">About Us</h6>
                        <hr class="bg-light mb-4 mt-0 d-inline-block mx-auto text-white"
                            style="width: 125px; height: 2px">
                        <p class="mt-2 text-white">Book your room right now and start your amazing adventure full of
                            discoveries and experiences</p>
                    </div>
                    <div class="col-md-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold text-white">We provide?</h6>
                        <hr class="bg-light mb-4 mt-0 d-inline-block mx-auto text-white"
                            style="width: 85px; height: 2px">
                        <ul class="list-unstyled">
                            <li class="my-2"><a href="#" class="text-white" style="text-decoration: none;">Simple
                                    Rooms</a></li>
                            <li class="my-2"><a href="#" class="text-white" style="text-decoration: none;">Double
                                    Rooms</a></li>
                            <li class="my-2"><a href="#" class="text-white"
                                    style="text-decoration: none;">Appartment</a>
                            </li>
                            <li class="my-2"><a href="#" class="text-white" style="text-decoration: none;">Bungalow</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold text-white">Useful Links</h6>
                        <hr class="bg-light mb-4 mt-0 d-inline-block mx-auto" style="width: 110px; height: 2px;">
                        <ul class="list-unstyled">
                            <li class="my-2"><a class="text-white" href="index.php"
                                    style="text-decoration: none;">Home</a>
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