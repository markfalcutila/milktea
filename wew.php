<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome/all.min.css">
    <link rel="stylesheet" href="assets/css/sweetalert/sweetalert2.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="assets/js/sweetalert/sweetalert2.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">

<style>
body {
	background: #ebebeb;
	font-family: "Open Sans", sans-serif;
}
.carousel {
	margin: 30px auto 60px;
	padding: 0 80px;
}
.carousel .carousel-item {
	text-align: center;
	overflow: hidden;
}
.carousel .carousel-item h4 {
	font-family: 'Varela Round', sans-serif;
}
.carousel .carousel-item img {
	max-width: 100%;
	display: inline-block;
}
.carousel .carousel-item .btn {
	border-radius: 0;
	font-size: 12px;
	text-transform: uppercase;
	font-weight: bold;
	border: none;
	background: #a177ff;
	padding: 6px 15px;
	margin-top: 5px;
}
.carousel .carousel-item .btn:hover {
	background: #8c5bff;
}
.carousel .carousel-item .btn i {
	font-size: 14px;
	font-weight: bold;
	margin-left: 5px;
}
.carousel .thumb-wrapper {
	margin: 5px;
	text-align: left;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0,0,0,0.1);   
}
.carousel .thumb-content {
	padding: 15px;
	font-size: 13px;
}
.carousel-control-prev, .carousel-control-next {
	height: 44px;
	width: 44px;
	background: none;	
	margin: auto 0;
	border-radius: 50%;
	border: 3px solid rgba(0, 0, 0, 0.8);
}
.carousel-control-prev i, .carousel-control-next i {
	font-size: 36px;
	position: absolute;
	top: 50%;
	display: inline-block;
	margin: -19px 0 0 0;
	z-index: 5;
	left: 0;
	right: 0;
	color: rgba(0, 0, 0, 0.8);
	text-shadow: none;
	font-weight: bold;
}
.carousel-control-prev i {
	margin-left: -3px;
}
.carousel-control-next i {
	margin-right: -3px;
}
.carousel-indicators {
	bottom: -50px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 10px;
	height: 10px;
	border-radius: 50%;
	margin: 4px;
	border: none;
}
.carousel-indicators li {	
	background: #ababab;
}
.carousel-indicators li.active {	
	background: #555;
}
</style>
</head>
<body>
<div class="container-xl">
	<div class="row">
		<div class="col-md-10 mx-auto">
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>   
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row">
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/cities/london.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>London</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam.</p>
									<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/cities/new-york.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>New York</h4>
									<p>Vivamus fermentum in arcu in aliquam. Quisque aliqua porta odio in fringilla vivamus.</p>
									<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>
						</div>				
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/cities/paris.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Paris</h4>
									<p>Convallis eget pretium eu, bibendum non leo. Proin susc ipit purus adipiscing dolor.</p>
									<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>					
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/cities/kuala-lumpur.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Kuala Lumpur</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam.</p>
									<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/cities/agra.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Agra</h4>
									<p>Vivamus fermentum in arcu in aliquam. Quisque aliqua porta odio in fringilla vivamus.</p>
									<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/cities/dubai.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Dubai</h4>
									<p>Convallis eget pretium eu, bibendum non leo. Proin susc ipit purus adipiscing dolor.</p>
									<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>					
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/cities/rio-de-janeiro.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Rio De Janeiro</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam.</p>
									<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/cities/giza.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Giza</h4>
									<p>Vivamus fermentum in arcu in aliquam. Quisque aliqua porta odio in fringilla vivamus.</p>
									<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/cities/sydney.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Sydney</h4>
									<p>Convallis eget pretium eu, bibendum non leo. Proin susc ipit purus adipiscing dolor.</p>
									<a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>					
						</div>
					</div>
				</div>
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control-next" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>
</div>


</body>
</html>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/sweetalert/sweetalert2.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>


