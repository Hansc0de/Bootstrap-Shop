<!--
/*
Created by : Kyr0x
Coded by : Kyr0x
Copyright by : Kyr0x
LICENSED By : GitHub, Kyr0x

Messagess : Don't change the copyright !
/*  
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, inital-scale=1">
	<meta name="author" content="Fathan Rangga">
	<meta name="description" content="Example adalah sebuah website toko online yang menjual sepatu untuk olahraga, sekolah dan lain-lain">
	<meta name="keywords" content="sepatu, olahraga, running, futsal, sekolah">
	<title>Example.com</title>

	<!-- Library of CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<!-- HTML5 shin and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<div class="jumbotron">
		<div class="container text-center">
			<h1>Welcome to Example.com!</h1>
			<p>This website is maintenance, please visit later. Thank you</p>
		</div>
	</div>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<!-- Navbars Start -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="">Example</a>
			</div>

			<!-- Navbar menu -->
			<div class="collapse navbar-collapse" id="#myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="#shop">SHOP</a></li>
					<li><a href="#payment">PAYMENTS</a></li>
					<li><a href="#about">ABOUT</a></li>
					<li><a href="#contact">CONTACT</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<form class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search here">
						</div>
						<button type="submit" class="btn btn-default">
							<span class="glyphicon glyphicon-search"></span>
							<span class="sr-only">Submit</span>
						</button>
					</form>
				</ul>
			</div>
		</div>
	</nav>

	<div id="meCarousel" class="carousel slide" data-ride="carousel">
		<!-- Carousel -->
		<ol class="carousel-indicators">
			<li data-target="#meCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#meCarousel" data-slide-to="1"></li>
		</ol>

		<!-- Image slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="http://placehold.it/1200x400?text=IMAGE" alt="Image">
				<div class="carousel-caption">
					<h3>Product</h3>
					<p>Description</p>
				</div>
			</div>

			<div class="item">
				<img src="http://placehold.it/1200x400?text=Another Image Maybe" alt="Image2">
				<div class="carousel-caption">
					<h3>Product</h3>
					<p>Description</p>
				</div>
			</div>

			<!-- Control of keys -->
			<a class="left carousel-control" href="#meCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#meCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<div id="shop" class="container-fluid text-center">
		<h2>PRODUCT</h2>
		<br>
		<!-- Product Menu -->
		<div class="row slideanim">
			<div class="col-sm-4">
				<div class="thumbnail">
					<img src="http://placehold.it/250x200?text=Product1" alt="Product 1">
					<div class="caption">
						<h3>Product 1</h3>
						<p>Description 1</p>
						<a href="#" class="btn btn-primary" role="button">Buy Now</a> <a href="#pModal1" class="btn btn-default" data-toggle="modal" role="button">See full</a>
					</div>
				</div>
			</div>
			<!-- Modal -->
			<div class="modal fade" id="pModal1" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content -->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h1><span class="glyphicon glyphicon-shopping-cart"></span> Details Product</h1>
						</div>
						<div class="modal-body">
							<div class="thumbail">
								<img src="http://placehold.it/250x200?text=Product1" alt="Product 1">
								<div class="caption">
									<h3>Product 1</h3>
									<p>Description 1</p>
								</div>
							</div>
							<form class="form-horizontal">
								<div class="form-group">
									<label class="control-label col-sm-2" for="Harga">Harga :</label>
									<label class="control-label col-sm-2">Rp.199.000</label>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="Size">Size :</label>
									<div class="col-sm-3">
										<select class="form-control" id="size">
											<option value="42">42</option>
											<option value="43">43</option>
											<option value="44">44</option>
											<option value="45">45</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="Size">Jumlah :</label>
									<div class="col-sm-3">
										<select class="form-control" id="size">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
										</select>
									</div>
								</div>
								<button type="submit" class="btn btn-primary" href="#">BUY</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="thumbnail">
					<img src="http://placehold.it/250x200?text=Product2" alt="Product 2">
					<div class="caption">
						<h3>Product 2</h3>
						<p>Description 2</p>
						<p><a href="#" class="btn btn-primary" role="button">Buy Now</a> <a href="#pModal2" class="btn btn-default" data-toggle="modal" role="button">See full</a>
					</div>
				</div>
			</div>
			<!-- Modal -->
			<div class="modal fade" id="pModal2" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content -->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h1><span class="glyphicon glyphicon-shopping-cart"></span> Details Product</h1>
						</div>
						<div class="modal-body">
							<div class="thumbail">
								<img src="http://placehold.it/250x200?text=Product1" alt="Product 2">
								<div class="caption">
									<h3>Product 2</h3>
									<p>Description 2</p>
								</div>
							</div>
							<form class="form-horizontal">
								<div class="form-group">
									<label class="control-label col-sm-2" for="Harga">Harga :</label>
									<label class="control-label col-sm-2">Rp.199.000</label>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="Size">Size :</label>
									<div class="col-sm-3">
										<select class="form-control" id="size">
											<option value="42">42</option>
											<option value="43">43</option>
											<option value="44">44</option>
											<option value="45">45</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="Size">Jumlah :</label>
									<div class="col-sm-3">
										<select class="form-control" id="size">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
										</select>
									</div>
								</div>
								<button type="submit" class="btn btn-primary" href="#">BUY</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="thumbnail">
					<img src="http://placehold.it/250x200?text=Product3" alt="Product 3">
					<div class="caption">
						<h3>Product 3</h3>
						<p>Description 3</p>
						<p><a href="#" class="btn btn-primary" role="button">Buy Now</a> <a href="#pModal3" class="btn btn-default" data-toggle="modal" role="button">See full</a>
					</div>
				</div>
			</div>
			<!-- Modal -->
			<div class="modal fade" id="pModal3" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content -->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h1><span class="glyphicon glyphicon-shopping-cart"></span> Details Product</h1>
						</div>
						<div class="modal-body">
							<div class="thumbail">
								<img src="http://placehold.it/250x200?text=Product1" alt="Product 3">
								<div class="caption">
									<h3>Product 3</h3>
									<p>Description 3</p>
								</div>
							</div>
							<form class="form-horizontal">
								<div class="form-group">
									<label class="control-label col-sm-2" for="Harga">Harga :</label>
									<label class="control-label col-sm-2">Rp.199.000</label>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="Size">Size :</label>
									<div class="col-sm-3">
										<select class="form-control" id="size">
											<option value="42">42</option>
											<option value="43">43</option>
											<option value="44">44</option>
											<option value="45">45</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="Size">Jumlah :</label>
									<div class="col-sm-3">
										<select class="form-control" id="size">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
										</select>
									</div>
								</div>
								<button type="submit" class="btn btn-primary" href="#">BUY</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="payment" class="container-fluid text-center bg-grey">
		<h2>PAYMENTS</h2>
		<!-- Payments Menu -->
		<div class="row slideanim">
			<div class="col-sm-4 col-xs-12">
				<div class="panel panel-default text-center">
					<div class="panel-heading">
						<h1>BANK BTN</h1>
					</div>
					<div class="panel-body">
						<p><strong>Nomor rek :</strong> 001620161006551</p>
						<p><strong>Atas nama :</strong> Muhammad Fathan Rangga Jaya</p>
						<p><strong>Nama bank :</strong> BANK BTN</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="panel panel-default text-center">
					<div class="panel-heading">
						<h1>BANK BRI</h1>
					</div>
					<div class="panel-body">
						<p><strong>Nomor rek :</strong> xxxxxxxxx</p>
						<p><strong>Atas nama :</strong> xxxxxxxxx</p>
						<p><strong>Nama bank :</strong> BANK BRI</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="panel panel-default text-center">
					<div class="panel-heading">
						<h1>BANK XXX</h1>
					</div>
					<div class="panel-body">
						<p><strong>Nomor rek :</strong> xxxxxxxxx</p>
						<p><strong>Atas nama :</strong> xxxxxxxxx</p>
						<p><strong>Nama bank :</strong> BANK xxxx</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="about" class="container-fluid">
	<!-- About menu -->
		<div class="row">
			<div class="col-sm-8">
				<h2>About Example.com</h2><br>
				<h4>Example.com is blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla</h4><br>
				<p>Example.com  blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla</p>
			</div>
			<div class="col-sm-4">
				<br><br><br><br>
				<span class="glyphicon glyphicon-tasks logo"></span>
			</div>
		</div>
	</div>

	<div id="contact" class="container-fluid bg-grey">
		<h2 class="text-center">CONTACT</h2>
		<div class="row">
			<div class="col-sm-5">
				<p>Contact us and we'll get back to you within 23 hours.</p>
				<p><span class="glyphicon glyphicon-map-marker"></span> Tangerang, Indonesia</p>
				<p><span class="glyphicon glyphicon-phone"></span> +62 81361277480</p>
				<p><span class="glyphicon glyphicon-envelope"></span> customersupport@example.com</p>
			</div>
			<div class="col-sm-7 slideanim">
				<div class="row">
					<div class="col-sm-6 form-group">
						<input class="form-control" id="name" name="name" placeholder="Your name" type="text" required>
					</div>
					<div class="col-sm-6 form-group">
						<input class="form-control" id="email" name="email" placeholder="Your email" type="email" required>
					</div>
				</div>
				<textarea class="form-control" id="comments" name="comments" placeholder="Type your problem/question/comment in here..." rows="5"></textarea><br>
				<div class="row">
					<div class="col-sm-12 form-group">
						<button class="btn btn-primary pull-right" type="submit">Send</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="container-fluid text-center">
		<p><span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span> Example.com copyright</p>
		<form class="form-inline">Subscribe :
			<input type="email" class="form-control" size="50" placeholder="Email Address" required>
			<button type="button" class="btn btn-danger">Subscribe</button>
		</form>
	</footer>

	<script>
		$(document).ready(function(){
			// Smooth Scrolling to all links in navbar
			$(".navbar a, footer a[href='#myPage']").on('click', function(event) {
				// Make sure this.has a value before overriding
				if (this.has !== "") {
					// Prevent default anchor click behavior
					event.preventDefault();
					// Store has
					var hash = this.hash;

					// Using jQuery animate() to add smooth page scroll
					$('html, body').animate({
						scrollTop: $(hash).offset().top
					}, 900, function(){

						// Add hash (#) to URL when done scrolling
						window.location.hash = hash;
					});
				} // End If
			});

			$(window).scroll(function() {
				$(".slideanim").each(function(){
					var pos = $(this).offset().top;

					var winTop = $(window).scrollTop();
						if (pos < winTop + 600) {
							$(this).addClass("slide");
						}
				});
			});
		})
	</script>
</body>
</html>