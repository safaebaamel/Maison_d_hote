<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <title>Gallery</title>
    <link rel="stylesheet" href="Assets/Style/style.css">
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
                        <a href="index.php" class="nav-link text-white fs-5">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="gallery.php" class="nav-link text-white fs-5">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="signin.php" class="nav-link text-white fs-5">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="reservation.php" class="nav-link  text-white fs-5 border-bottom">Reservation</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- body -->
    <section class="gallery-block cards-gallery">
   	<div class="container">
   		<div class="heading">
   			<h2 class="fs-2">Our Beautiful Destinations</h2>
   		</div>
   		<div class="row">
   			<div class="col-md-6 col-lg-4">
   				<div class="card border-0 transform-on-hover">
   					<a class="lightbox" href="Assets/Img/Gallery/gall1.jpg"><img src="Assets/Img/Gallery/gall1.jpg" class="card-img-top"></a>
   					<div class="card-body">
   						<h6>Bungalows</h6>
   						<p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
   					</div>
   				</div>
   			</div>
   			
   			<div class="col-md-6 col-lg-4">
   				<div class="card border-0 transform-on-hover">
   					<a class="lightbox" href="Assets/Img/Gallery/gall2.jpg"><img src="Assets/Img/Gallery/gall5.jpg" class="card-img-top"></a>
   					<div class="card-body">
   						<h6>Appartments</h6>
   						<p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
   					</div>
   				</div>
   			</div>
   			
   			<div class="col-md-6 col-lg-4">
   				<div class="card border-0 transform-on-hover">
   					<a class="lightbox" href="Assets/Img/Gallery/gall3.jpg"><img src="Assets/Img/Gallery/gall1.jpg" class="card-img-top"></a>
   					<div class="card-body">
   						<h6>Lorem Ipsum</h6>
   						<p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
   					</div>
   				</div>
   			</div>
   		</div>
   		
   		
   		<div class="row">
   			<div class="col-md-6 col-lg-4">
   				<div class="card border-0 transform-on-hover">
   					<a class="lightbox" href="Assets/Img/Gallery/gall5.jpg"><img src="Assets/Img/Gallery/gall5.jpg" class="card-img-top"></a>
   					<div class="card-body">
   						<h6>Lorem Ipsum</h6>
   						<p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
   					</div>
   				</div>
   			</div>
   			
   			<div class="col-md-6 col-lg-4">
   				<div class="card border-0 transform-on-hover">
   					<a class="lightbox" href="Assets/Img/Gallery/gall5.jpg"><img src="Assets/Img/Gallery/gall5.jpg" class="card-img-top"></a>
   					<div class="card-body">
   						<h6>Lorem Ipsum</h6>
   						<p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
   					</div>
   				</div>
   			</div>
   			
   			<div class="col-md-6 col-lg-4">
   				<div class="card border-0 transform-on-hover">
   					<a class="lightbox" href="Assets/Img/Gallery/gall2.jpg"><img src="Assets/Img/Gallery/gall5.jpg" class="card-img-top"></a>
   					<div class="card-body">
   						<h6>Lorem Ipsum</h6>
   						<p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
   					</div>
   				</div>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
	      baguetteBox.run('.cards-gallery', {animation: 'slideIn'});
	  </script>
</body>
</html>