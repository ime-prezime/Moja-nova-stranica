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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

	<title>Kontakt stranica</title>
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
					<a class="nav-link" href="#">Pocetna<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://localhost/vezba/onama.php">O nama</a>
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
		<h2 class="display-4">Kontakt</h2>
		<hr>
		<div class="row">
			<div class="col-6">
				<form action="izlazna.php" method="post">
					<div class="form-group">
						<label for="formGroupExampleInput">Ime i Prezime</label>
						<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Molim Vas unesite Vase ime i prezime">
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Email Adresa</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Molim Vas unesite Vasz Email adresu">

					</div>

					<div class="form-group">
						<label for="formGroupExampleInputPhone1">Telefon</label>
						<input type="tel" class="form-control" id="formGroupExampleInputPhone1" placeholder="Molim Vas unesite Vas broj telefona">
					</div>

					<div class="form-group">
						<label for="formGroupExampleInputSubject1">Naslov poruke</label>
						<input type="text" class="form-control" id="formGroupExampleInputSubject1" placeholder="Molim Vas unesite naslov Vase poruke">
					</div>

					<div class="form-group">
						<label for="exampleFormControlTextarea1">Unesite Vasu poruku</label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Molim Vas unesite Vasu poruku"></textarea>
					</div>
					<button type="submit"class="btn outline-dark btn-lg btn-block">Poslati</button>
				</form>
			</div>
			<div class="col-6">
				<ul class="list-unstyled">
					<li>Adresa: <span class="float-right">Vojvode Stepe 283, Vozdovac</span></li>
					<li>Telefon: <span class="float-right"><a href="+38112471109">+38112471109</a></span></li>
					<li>Email: <span class="float-right"><a href="mailto:office@voio.rs">office@voio.rs</a></span></li>
					<ul>
						<hr>
						
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2832.6130673760786!2d20.477827315046365!3d44.76830538762751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a70f8df8b60e1%3A0x8fd9cdf24bd4d39!2sVojvode%20Stepe%20283%2C%20Beograd!5e0!3m2!1sen!2srs!4v1606936305301!5m2!1sen!2srs" width="560" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>

			<!-- Optional JavaScript; choose one of the two! -->

			<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>
</html>