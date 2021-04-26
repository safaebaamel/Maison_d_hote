<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Sign Up</title>
    <link rel="stylesheet" href="Assets/Style/signup.css">
  </head>
  <body>
      <!-- Navbar -->
    <nav class="navbar fixed navbar-expand-lg navbar-dark bg-dark p-md-3">
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
                        <a href="index.php" class="nav-link text-white fs-5">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white fs-5">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="signin.php" class="nav-link text-white fs-5">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="signup.php" class="nav-link btn text-white fs-5 border-bottom">Reservation</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- FORM -->
    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5 p-0">
                    <img src="Assets/Img/login.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold py-3">Sign Up</h1>
                    <h4>Welcome Among Us</h4>
                    <form action="post">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" placeholder="First Name" class="form-control my-3 p-3">
                            </div>
                            <div class="col-lg-7">
                                <input type="text" placeholder="Last Name" class="form-control my-3 p-3">
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="email" placeholder="example@gmail.com" class="form-control my-3 p-3">
                                </div>
                                <div class="col-lg-7">
                                    <input type="password" placeholder="********" class="form-control my-3 p-3">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <button type="submit" class="btn1 mt-3 mb-4">Sign Up</button>
                                </div>
                            </div>
                            <a href="#">Forgot password?</a>
                            <p>Already Have an account?<a href="signin.php">Log In Here!</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
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
                        <li class="my-2"><a class="text-white" href="index.php" style="text-decoration: none;">Home</a></li>
                        <li class="my-2"><a class="text-white" href="#" style="text-decoration: none;">About Us</a></li>
                        <li class="my-2"><a class="text-white" href="gallery.php" style="text-decoration: none;">Gallery</a></li>
                        <li class="my-2"><a class="text-white" href="#" style="text-decoration: none;">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center text-white">
            Created with <i class="bi bi-heart-fill" style="color:blue;"></i> by Blue 
        </div>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>