<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacatya - Home</title>
    <link rel="stylesheet" href="Assets/Style/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <!-- CSS only -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
        integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/Style/style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
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
                        <a href="#" class="nav-link text-white fs-5">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white fs-5">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white fs-5">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link btn text-white fs-5">Reservation</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Banner Image -->
    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center"
        style="background-image: url('Pictures/font.jpg'); background-size: cover;">
        <div class="content text-center">
            <h1 class="text-white intro-r">Resort and Hotel Booking</h1>
            <p class="text-white intro">Vacatya has a lot to offer for anyone who loves nature, sports, history, sunny
                beach leisure and active adventures.</p>
        </div>
    </div>

    <!-- Body Content -->
    <div class="book">
        <form class="book-form">
            <div class="form-item">
                <label for="checkin-date">Check In Date: </label>
                <input type="date" id="chekin-date">
            </div>
            <div class="form-item">
                <label for="checkout-date">Check Out Date: </label>
                <input type="date" id="chekout-date">
            </div>
            <div class="form-item">
                <label for="adult">Adults: </label>
                <input type="number" min="1" value="1" id="adult">
            </div>
            <div class="form-item">
                <label for="children">Children: </label>
                <input type="number" min="1" value="1" id="children">
            </div>
            <div class="form-item">
                <label for="rooms">Rooms: </label>
                <input type="number" min="1" value="1" id="rooms">
            </div>
            <div class="form-item">
                <input type="submit" class="btn" value="Book Now">
            </div>
        </form>
    </div>

    <!-- Offers section -->
    <section class="containers">
        <h1 class="text-center first">Our Best Offers</h1>
        <div class="row-1">
            <article class="card fl-left"  style="background-image: url('Pictures/paris.jpg'); background-size: cover;">
                <section class="date">
                    <time datetime="14th feb">
                        <span>Paris</span><span>14 Feb</span>
                    </time>
                </section>
                <section class="card-cont" >
                    <small>Bungalow Lux</small>
                    <h3>live in Paris</h3>
                    <div class="even-info">
                        <i class="bi bi-geo-fill">Paris</i>
                        <p>
                            The humid subtropical climate, Luxury chambers, Paris
                        </p>
                    </div>
                    <a href="#">Book</a>
                </section>
            </article>
            <article class="card fl-left"  style="background-image: url('Pictures/la.jpg'); background-size: cover;">
                <section class="date">
                    <time datetime="14th feb">
                        <span>LA</span><span>24 Feb</span>
                    </time>
                </section>
                <section class="card-cont">
                    <small>Appartment Lux</small>
                    <h3>live in LA</h3>
                    <div class="even-info">
                        <i class="bi bi-geo-fill">LA</i>
                        <p>
                            The humid subtropical climate, Luxury chambers, LA
                        </p>
                    </div>
                    <a href="#">Book</a>
                </section>
            </article>
        </div>
        <div class="row-1">
            <article class="card fl-left" style="background-image: url('Pictures/usa.jpg'); background-size: cover;">
                <section class="date">
                    <time datetime="14th feb">
                        <span>USA</span><span>01 Feb</span>
                    </time>
                </section>
                <section class="card-cont">
                    <small>CHAMBRE Lux</small>
                    <h3>live in USA</h3>
                    <div class="even-info">
                        <i class="bi bi-geo-fill">USA</i>
                        <p>
                            The humid subtropical climate, Luxury chambers, USA
                        </p>
                    </div>
                    <a href="#">Book</a>
                </section>
            </article>
            <article class="card fl-left" style="background-image: url('Pictures/mexico.jpg'); background-size: cover;" >
                <section class="date">
                    <time datetime="14th feb">
                        <span>Mexico</span><span>14 Feb</span>
                    </time>
                </section>
                <section class="card-cont">
                    <small>Bungalow Lux</small>
                    <h3>live in Mexico</h3>
                    <div class="even-info">
                        <i class="bi bi-geo-fill">Mexico</i>
                        <p>
                            The humid subtropical climate, Luxury chambers, Mexico
                        </p>
                    </div>
                    <a href="#">Book</a>
                </section>
            </article>
        </div>
        </div>
    </section>

    <!-- END of ROOMS -->
    <section class="customers bg-dark" id="customers">
        <div class="sec-width">
            <div class="title">
                <h2 class="text-center text-light feeds">What clients said about us</h2>
            </div>
            <div class="customers-container">
                <!-- single customer -->
                <div class="customer">
                    <img src="Pictures/cust3.jpg" alt="customer image">
                    <div class="rating">
                        <span><i class="bi bi-star"></i></span>
                        <span><i class="bi bi-star"></i></span>
                        <span><i class="bi bi-star"></i></span>
                        <span><i class="bi bi-star"></i></span>
                        <span><i class="bi bi-star"></i></span>
                    </div>
                    <h3>We Loved it</h3>
                    <p>Lorem ipsum dolor sit amet
                    </p>
                </div>
                <!-- end of single customer -->
                <!-- single customer -->
                <div class="customer">
                    <img src="Pictures/cust2.jpg" alt="customer image">
                    <div class="rating">
                        <span><i class="bi bi-star"></i></span>
                        <span><i class="bi bi-star"></i></span>
                        <span><i class="bi bi-star"></i></span>
                        <span><i class="bi bi-star"></i></span>
                        <span><i class="bi bi-star"></i></span>
                    </div>
                    <h3>Comfortable Living</h3>
                    <p>Lorem ipsum dolor sit amet
                    </p>
                </div>
                <!-- end of single customer -->
                <!-- single customer -->
                <div class="customer">
                    <img src="Pictures/cust1.jpg" alt="customer image">
                    <div class="rating">
                        <span><i class="bi bi-star"></i></span>
                        <span><i class="bi bi-star"></i></span>
                        <span><i class="bi bi-star"></i></span>
                        <span><i class="bi bi-star"></i></span>
                        <span><i class="bi bi-star"></i></span>
                    </div>
                    <h3>Nice Place</h3>
                    <p>Lorem ipsum dolor sit amet
                    </p>
                </div>
                <!-- end of single customer -->
            </div>
        </div>
    </section>
    <!-- end of body content -->

    <!-- footer -->
    <footer class="page-footer bg-dark w-100">
        <div class="bg-light">
            <div class="container">
                <div class="row py-4 d-flex align-items-center">
                    <div class="col-md-12 text-center">
                        <a href="#" class="my-2"><i class="bi bi-facebook text-dark mr-4"></i></a>
                        <a href="#" class="my-2"><i class="bi bi-twitter text-dark mr-4"></i></a>
                        <a href="#" class="my-2"><i class="bi bi-google-plus-g text-dark mr-4"></i></a>
                        <a href="#" class="my-2"><i class="bi bi-linkedin-in text-dark mr-4"></i></a>
                        <a href="#" class="my-2"><i class="bi bi-instagram text-dark mr-4"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center text-md-left mt-5">
            <div class="row">
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
                        <li class="my-2"><a href="#" class="text-white" style="text-decoration: none;">Simple Rooms</a></li>
                        <li class="my-2"><a href="#" class="text-white" style="text-decoration: none;">Double Rooms</a></li>
                        <li class="my-2"><a href="#" class="text-white" style="text-decoration: none;">Appartment</a></li>
                        <li class="my-2"><a href="#" class="text-white" style="text-decoration: none;">Bungalow</a></li>
                    </ul>
                </div>
                <div class="col-md-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold text-white">Useful Links</h6>
                    <hr class="bg-light mb-4 mt-0 d-inline-block mx-auto" style="width: 110px; height: 2px;">
                    <ul class="list-unstyled">
                        <li class="my-2"><a class="text-white" href="#" style="text-decoration: none;">Home</a></li>
                        <li class="my-2"><a class="text-white" href="#" style="text-decoration: none;">About Us</a></li>
                        <li class="my-2"><a class="text-white" href="#" style="text-decoration: none;">Blog</a></li>
                        <li class="my-2"><a class="text-white" href="#" style="text-decoration: none;">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>






    <!-- Script -->
    <script src="Assets/Js/bootstrap.bundle.js"></script>
    <script src="Assets/Js/script.js"></script>

</body>

</html>