<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta  name="description" content="Opis strane">
	<meta name="keywords" content="rec,fraza,druga-rec">
	<meta name="author" content="Stefan Nikolic, acan1971@gmail.com">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/novistil.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.csss">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

	<title>Stefanova stranica</title>
</head>
<body>
	<style type="text/css">
		.slika{
			height:80px;
			border-radius:7px;
		}
	</style>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#"><img src="img/apple.jpg" class="slika"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto ml-5">
				<li class="nav-item active">
					<a class="nav-link" href="#">Pocetna</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="http://localhost/vezba/onama.php">O nama<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Galerija</a>
				</li>
				<li class="nav-item"> 
					<a href="http://localhost/vezba/kontakt.php" class="nav-link">Kontakt</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Usluge
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Web dizajn</a>
						<a class="dropdown-item" href="#">Graficki dizajn</a>
						<a class="dropdown-item" href="#">3D modelovanje</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Audio produkcija</a>
						<a class="dropdown-item" href="#">Video produkcija</a>
					</div>
				</li>
			</ul>
			
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>

	<div class="container">
		<h2 class="display-4">Galerija</h2>
		<hr>
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<ol class="carousel-indicators">
				<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
				<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
				<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
				<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></li>
				<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/office.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>First slide label</h5>
						<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/office1.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Second slide label</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/office2.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Third slide label</h5>
						<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
					</div>
				</div>

				<div class="carousel-item">
					<img src="img/office3.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Third slide label</h5>
						<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
					</div>
				</div>

				<div class="carousel-item">
					<img src="img/fbad.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Third slide label</h5>
						<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
					</div>
				</div>

			</div>
			<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</a>
		</div>
	</div>


	<footer>
		<div class="row text-center">
			<div class="col-12">
				<ul class="list-inline">
					<li class="list-inline-item"><a href="#">O nama</a></li>
					<li class="list-inline-item"><a href="#">Usluge</a></li>
					<li class="list-inline-item"><a href="#">Cenovnik</a></li>
					<li class="list-inline-item"><a href="#">FAQ</a></li>
					<li class="list-inline-item"><a href="#">Contact</a></li>
				</ul>
				<p><i class="fas fa copyright" aria-hidden="true"></i>
					2019 Vojvode Stepe 201, Vozdovac <a href="mailto:office@voio.rs">office@voio.rs</a>,<a href="tel:+11-2471-499">+11-2471-499</a></p>
				</div>
			</div>
			
		</footer>
		<!-- Optional JavaScript; choose one of the two! -->

		<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

		<script src="js/bootstrap.min.js"></script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>
</html>
