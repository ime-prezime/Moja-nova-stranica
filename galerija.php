<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<script type="text/javascript" src="js/jquery.js"></script>

	<link rel="stylesheet" type="text/css" href="css/all.min.css">

	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">

	<title>Treneri</title>
</head>
<body>
	<style type="text/css">
		#footer{
			background:#333;
			position:absolute;
			top:850px;
		}
		.brand{
			text-align:center;
			margin-top:2rem;
		}
		.logo1{
			height:4rem;
		}
		.icons a{
			font-size:2rem;
			margin:2rem 1rem;
			color:#fff;
			text-decoration:none;
			cursor:pointer;
		}
		.icons a:hover{
			color:yellow;
		}
		.footer-links{
			text-align:center;
			display:flex;
			flex-flow:column;
			margin:1rem 0;
		}
		.footer-links h3{
			font-size:2.2rem;
			color:yellow;
		}
		.footer-links a{
			color:#fff;
			font-size:1.7rem;
			text-decoration:none;
		}
		.footer-links a:hover{
			color:yellow;
		}
		.letter h2{
			font-size:2rem;
			margin:2rem 0;
			color:#fff;
		}
		input[type="text"]{
			border:.2rem solid #fff;
			outline:none;
			background:none;
			height:4rem;
			width:22rem;
			padding:0 1rem;
			font-size:1.3rem;
			color:#fff;
		}
		input[type="submit"]{
			height:4rem;
			width:14rem;
			background:#fff;
			outline:none;
			border:none;
			border-radius:5rem;
			color:#333;
			background:#fff;
			font-size:1.6rem;
			font-weight:bold;
			text-transform:capitalize;
			letter-spacing: .2rem;
			cursor:pointer;
			position:relative;
			z-index:1;
			overflow:hidden;
		}
		input[type="submit"]:hover{
			background:#333;
			color:yellow;
		}
		.logo{
			background:yellow;
			border-radius:50%;
		}
		@import url('https://fonts.googleapis.com/css2?family=Lemonada&display=swap');
		*{
			margin:0;
			padding:0;
			box-sizing:border-box;
			text-transform:capitalize;
			transition:all .2s linear;
		}
		html{
			font-size:62,5%;
			scroll-behavior: smooth;
		}
		body{
			overflow-x: hidden;
		}
		#header{
			width:100%;
			position:fixed;
			top:0;
			left:0;
			display:flex;
			align-items:center;
			justify-content: space-between;
			padding:2rem 4rem;
			z-index:1000;
		}
		.logo img{
			height:5rem;
		}
		.tekst{
			color:#ccc;
			font-size:2rem;
		}
		.card-container{
			width:95%;
			margin:7rem auto;
			display:flex;
			align-items:center;
			justify-content: space-around;
			flex-wrap:wrap;
		}
		.card{
			height:40rem;
			width:30rem;
			background:#fff;
			padding:1rem;
			margin:2rem;
			text-align:center;
		}

		nav ul{
			display:flex;
			align-items:center;
			justify-content:space-around;
			list-style:none;  
		} 
		nav ul li{
			margin-right:4rem;
		}
		nav ul li a{
			font-size:2rem;
			color:#fff;
			text-decoration:none;
		}
		nav ul li a:hover{
			color:yellow;
			text-decoration:none;
		}
		#home{
			background:linear-gradient(0deg, rgba(0,0,0,.6), rgba(0,0,0,.6));
			min-height:100vh;
		}
		.fa-hamburger{
			font-size:4rem;
			z-index:10000;
			color:yellow;
			cursor:pointer;
			display:none;
		}
		.content h1{
			font-size:5rem;
			font-family:'lemonada', sans-serif;
			font-weight:bolder;
			text-shadow:.1rem .1rem .3rem #333;
			color:yellow;
		}
		h2{
			font-size:3.5rem;
			font-family:'lemonada', sans-serif;
			font-weight:bolder;
			text-shadow:.1rem .1rem .3rem #333;
			color:#fff;
		}
		p{
			font-size:1.6rem;
			color:#ccc;
		}
		button{
			height:4rem;
			width:18rem;
			background:#fff;
			outline:none;
			border:none;
			border-radius:5rem;
			color:#333;
			background:#fff;
			font-size:1.6rem;
			font-weight:bold;
			text-transform:capitalize;
			letter-spacing: .2rem;
			cursor:pointer;
			position:relative;
			z-index:1;
			overflow:hidden;
		}
		button::before{
			content:'';
			position:absolute;
			top:0;
			left:0;
			background:yellow;
			height:100%;
			width:0%;
			transition:.2s;
			z-index:-1;
		}
		button:hover::before{
			width:100%;
		}
		.video-container{
			position:absolute;
			top:0;
			left:0;
			height:100vh;
			width:100%;
			z-index:-1;
		}
		.vid{
			position:absolute;
			height:100vh;
			width:100%;
			object-fit:cover;
			display:none;
		}
		.vid1{
			display:block;
		}
		.controls{
			position:absolute;
			bottom:14%;
			left:50%;
			transform:translateY(-50%, -50%);
			display:flex;
		}
		.dots{
			height:2rem;
			width:2rem;
			cursor:pointer;
			background:yellow;
			margin:0 1rem;
		}
		.dots:hover{
			background:#fff;
		}

		@media (max-width:768px){
			html{
				font-size:50%;
			}
			.fa-hamburger{
				display:block;
			}
			.nav-toogle{
				left:0;
			}
			nav{
				position:fixed;
				top:0;
				left:0;
				height:100vh;
				width:35rem;
				background:#000;
			}
			ul{
				flex-flow:column;
				justify-content: center;
				height:100%;
			}
			li{
				margin:2rem 0;
			}
			a{
				font-size:3.5rem;
				border-radius:5rem;
			}
			nav ul li a:hover{
				padding:3rem;
				color:#333;
				background:yellow;
			}

		}

		.logo{
			background:yellow;
			border-radius:50%;
		}
		#special{
			background:#000;
			min-height:100vh;
		}
		.heading h1{
			font-size:4rem;
			color:#fff;
			padding-top:7rem;
			margin-bottom:2rem;
		}
		span{
			color:yellow;
		}
		.bravo{
			height:50%;
			width:100%;
			object-fit:cover;
		}
		.text-box{
			width:600px;
			position:absolute;
			top:200px;
			left:100px;
			color:#fff;
			animation: textup 12s linear infinite;
			transform:translateY(100px);
		}
		.text-box h1{
			margin-bottom:40px;
		}
		.text-box p{
			font-size:22px;
			color:#fff;
			margin-top:80px;
		}
		.link{
			height:4rem;
			width:18rem;
			background:#000;
			color:#fff;
		}
		.link:hover{
			color:#333;
		}
		.card:hover{
			transform:scale(.9);
		}
		.header-active{
			background:#333;
			height:6rem;
			box-shadow:.2rem 0 5rem #000;
		}
		#footer{
			background:#333;
			position:absolute;
			top:850px;
		}
		.brand{
			text-align:center;
			margin-top:2rem;
		}
		.logo1{
			height:4rem;
		}
		.icons a{
			font-size:2rem;
			margin:2rem 1rem;
			color:#fff;
			text-decoration:none;
			cursor:pointer;
		}
		.icons a:hover{
			color:yellow;
		}
		.footer-links{
			text-align:center;
			display:flex;
			flex-flow:column;
			margin:1rem 0;
		}
		.footer-links h3{
			font-size:2.2rem;
			color:yellow;
		}
		.footer-links a{
			color:#fff;
			font-size:1.7rem;
			text-decoration:none;
		}
		.footer-links a:hover{
			color:yellow;
		}
		.letter h2{
			font-size:2rem;
			margin:2rem 0;
			color:#fff;
		}
		input[type="text"]{
			border:.2rem solid #fff;
			outline:none;
			background:none;
			height:4rem;
			width:22rem;
			padding:0 1rem;
			font-size:1.3rem;
			color:#fff;
		}
		input[type="submit"]{
			height:4rem;
			width:14rem;
			background:#fff;
			outline:none;
			border:none;
			border-radius:5rem;
			color:#333;
			background:#fff;
			font-size:1.6rem;
			font-weight:bold;
			text-transform:capitalize;
			letter-spacing: .2rem;
			cursor:pointer;
			position:relative;
			z-index:1;
			overflow:hidden;
		}
		input[type="submit"]:hover{
			background:#333;
			color:yellow;
		}
		.banner,.banner2,.banner3,.banner4{
			height:100vh;
			width:100%;
			position:absolute;
			top:0;
			left:0;
		}
		.slicice{
			width:120%;
			position:absolute;
			top:50%;
			left:50%;
			transform:translate(-50%, -50%);
			height:100vh;
			animation: zoom-out 3s linear infinite;
		}
		.text-box{
			width:600px;
			position:absolute;
			top:200px;
			left:100px;
			color:#fff;
			animation: textup 12s linear infinite;
			transform:translateY(100px);
		}
		.text-box h1{
			margin-bottom:40px;

		}
		.text-box p{
			font-size:20px;
			line-height:22px;
			margin-top:80px;
		}
		.text-box span{
			background:red;
			width:100px;
			border:1px solid;
			position:absolute;
		}
		.banner{
			animation:prvi 12s linear infinite;
		}
		.banner2{
			animation:drugi 12s linear infinite;
		}
		.banner3{
			animation:treci 12s linear infinite;
		}
		.banner4{
			animation:cetvrti 12s linear infinite;
		}
		.text-box1{
			animation-delay:0s;
		}
		.text-box2{
			animation-delay:3s;
		}
		.text-box3{
			animation-delay:6s;
		}
		.text-box4{
			animation-delay:9s;
		}
		@keyframes prvi{
			0%{
				visibility:visible;
			}
			25%{
				visibility: hidden;
			}
			50%{
				visibility: hidden;
			}
			75%{
				visibility: hidden;
			}
			100%{
				visibility: visible;
			}
		}

		@keyframes drugi{
			0%{
				visibility:hidden;
			}
			25%{
				visibility: hidden;
			}
			50%{
				visibility: visible;
			}
			75%{
				visibility: hidden;
			}
			100%{
				visibility: hidden;
			}
		}

		@keyframes treci{
			0%{
				visibility:hidden;
			}
			25%{
				visibility: hidden;
			}
			50%{
				visibility: hidden;
			}
			75%{
				visibility: visible;
			}
			100%{
				visibility: hidden;
			}
		}

		@keyframes cetvrti{
			0%{
				visibility:hidden;
			}
			25%{
				visibility: hidden;
			}
			50%{
				visibility: hidden;
			}
			75%{
				visibility: hidden;
			}
			100%{
				visibility: visible;
			}
		}

		@keyframes zoom-out{
			100%{
				width:100%;
			}
		}
		@keyframes textup{
			10%{
				transform:translateY(0px);
			}
			100%{
				transform:translateY(0px);
			}
		}
	</style>
	<header id="header" class="header-active">

		<nav>
			<ul>
				<li><a href="http://localhost/nova-vezba/index.html">Pocetna</a></li>
				<li><a href="http://localhost/nova-vezba/galerija.php">Trenerski Tim</a></li>
				<li><a href="http://localhost/nova-vezba/onama.html">O nama</a></li>
				<li><a href="#dishes">Galerija</a></li>
				<li><a href="http://localhost/nova-vezba/kontakt.html">Kontakt</a></li>
			</ul>
		</nav>

		<div class="fas fa-hamburger"></div>

		<a href="#" class="logo"><img src="images/bravo.png"></a>
	</header>

	<div class="banner">
		<img src="images/srki.jpg" class="slicice">
		<div class="text-box text-box-1">
			<h1>Srdjan Milosavljevic</h1>
			<span></span>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>

	<div class="banner2">
		<img src="images/nikola.jpg" class="slicice">
		<div class="text-box text-box2">
			<h1>Nikola Ilic</h1>
			<span></span>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>

	<div class="banner3">
		<img src="images/branko.jpg" class="slicice">
		<div class="text-box text-box3">
			<h1>Branko Galic</h1>
			<span></span>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>

	<div class="banner4">
		<img src="images/nemanja.jpg" class="slicice">
		<div class="text-box text-box4">
			<h1>Nemanja Petrovic</h1>
			<span></span>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>

	<section id="footer" class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-4 brand">
				<a href="#" class="logo1"><img src="images/bravo.png" class="logo"></a>

				<div class="icons">
					<a class="fab fa-facebook" href="https://www.facebook.com/fkbravors"></a>
					<a class="fab fa-twitter" href="https://twitter.com/fkbravors?lang=en"></a>
					<a class="fab fa-instagram" href="https://www.instagram.com/fkbravors/?hl=en"></a>
				</div>
			</div>

			<div class="col-md-4 footer-links">
				<h3>Links:</h3><br>
				<a href="http://localhost/nova-vezba/index.html">Pocetna</a>
				<a href="http://localhost/nova-vezba/galerija.php">Trenerski Tim</a>
				<a href="http://localhost/nova-vezba/onama.html">O nama</a>
				<a href="#dish">Galerija</a>
				<a href="http://localhost/nova-vezba/kontakt.html">Kontakt</a>
			</div>

			<div class="col-md-4 text-center text-md-left letter">
				<h2>newsletter</h2>
				<input type="text"> <br>
				<input type="submit" value="Subscribe">
			</div>
		</div>
	</section>


</body>
</html>