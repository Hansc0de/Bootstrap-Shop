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
	<title>Payment - Example.com</title>

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
					<li><a href="#"><i class="glyphicon glyphicon-shopping-cart"></i></a></li>
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

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8">
				<div class="panel panel-primary">
					<div class="panel-heading text-center">PAYMENT</div>
					<div class="panel-body">
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label class="control-label text-label col-sm-2" for="firstname">*FIRST NAME :</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="firstname" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label text-label col-sm-2" for="lastname">*LAST NAME :</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="lastname" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label text-label col-sm-2" for="address">*ADDRESS :</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="address" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label text-label col-sm-2" for="address2">ADDRESS2 :</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="address2">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label text-label col-sm-2" for="address3">ADDRESS3 :</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="address3">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label text-label col-sm-2" for="city">*CITY :</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="city" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label text-label col-sm-2" for="province">*STATE :</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="province" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label text-label col-sm-2" for="postcode">*ZIP :</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="postcode" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label text-label col-sm-2" for="address">*COUNTRY :</label>
								<div class="col-sm-8">
									<select class="form-control" id="country" required>
										<option value="ID">Indonesia</option>
										<option value="US">United States</option>
										<option value="EN">English United</option>
									</select>
								</div>
							</div>
							<button class="btn btn-success" type="submit">Proceed</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Need Help ?</div>
					<div class="panel-body">
						<p class="cart-para"><span class="glyphicon glyphicon-phone"></span> +62 813.6127.7480</p>
						<div class="horiz"></div>
						<p class="cart-para"><span class="glyphicon glyphicon-envelope"></span> @example.com</p>
						<div class="horiz"></div>
						<p class="cart-para"><span class="glyphicon glyphicon-time"></span> Monday-Friday (09.00 A.M - 12.00 P.M)</p>
					</div>
					<div class="panel-footer">
						<p style="text-align: right; font-size: 12px;"><strong>Powered by BTN, BRI, XXX</strong></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="container-fluid text-center bg-grey">
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