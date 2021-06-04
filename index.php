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

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a href="#" class="navbar-brand">
                
                <img src="assets/images/2.png" style="height: 140px;" alt="">
                <label for="" style="font-weight: 900; border-bottom:5px solid rgb(184, 129, 58);">
                MILKTEA! 
                </label>
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item active">
                    <a href="#" class="nav-link nav-title">Home
                    <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                     <a class="nav-link nav-title" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-title" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-title" href="#contact">Contact</a>
                </li>
            </ul>
            <button type="button" class=" nav-item nav-link btn btn-success mr-5 btnn">Login</button>
        </div>
    </nav>

    <div class="container-fluid bg">
        <div class="row">
            <div class="col-lg-8 text mx-auto">
                <h2>MILKTEA SHOP</h2>
                <p>Lorem ipsum dolor sit amet, consecteta minus autem</p>
                <button class="click">Click Here</button>
         
            </div>
        </div>
        
    </div>
    <div class="container-fluid" style="width: 100%;">
        <div class="row about" id="about">
            
                <div class="col-lg-6 about-left">
                    <h5>Few Words</h5>
                    <h2>About Cafe</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                        quibusdam veritatis labore deserunt tenetur ipsa ipsam doloremqu
                        ucimus neque dolore vero quas, culpa sint quod repellat min
                        ima enim a nesciunt.</p>
                        <a href="menu.php" class="btn btn-success click">View All Menu</a>
                </div>
                <div class="col-lg-6 about-right">
                    <img src="assets/images/pic.png" class="img-fluid" alt="">
                </div>
        </div>

        <!-- ####################### -->
        <div class="row menu" id="services">
                <div class="col-lg-12 menu-title">
                    <p>Explore Our</p>
                    <h2>Menu</h2>
                </div>
                <div class="col-lg-4 menu-left">
                    
                    <img src="assets/images/2.png" alt="">
                    <h3>Milketea</h3>
                  
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, quis ea. Voluptatum, ea exercitationem odio est</p>
                    <!-- <a href="menu.php" class="btn btn-success">View ALL</a> -->
                    <a href="menu.php" class="btn btn-success">View All Menu</a>
                </div>
                <div class="col-lg-4 menu-mid">
                
                    <img src="assets/images/pc3.png" alt="">
                    <h3>Burger & Fries</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, quis ea. Voluptatum, ea exercitationem odio est</p>
                    
                    <a href="menu.php" class="btn btn-success">View All Menu</a>
                    
                </div>
                <div class="col-lg-4 menu-right">
                    <img src="assets/images/cake.jpg" alt="">
                    <h3>Pastries</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, quis ea. Voluptatum, ea exercitationem odio est</p>
                    
                    <a href="menu.php" class="btn btn-success">View All Menu</a>
                </div>
        </div>

        <!-- ####################### -->
        <!-- <div class="row">
            <div class="carousel slide carcar" id="carouselExample" data-ride="carousel">
                <div class="carousel-inner" style="background-color: gray; color:white;">
                    <div class="carousel-item active">
                        <h2 class="text-dark">Hello</h2>
                    </div>
                    <div class="carousel-item">
                        <h2>Hello</h2>
                    </div><div class="carousel-item">
                        <h2>Hello</h2>
                    </div>
                </div>
                
                <a class="carousel-control-prev text-dark" href="#carouselExample" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next text-dark"  href="#carouselExample" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="next-only">Next</span>
                </a>
            </div>
        </div> -->
        <!-- ####################### -->
        
        </div>
        <!-- ####################### -->
        
    </div>


    <div class="container-fluid reserve" id="">
        <div class="row " id="reserve">
            <div class="col-lg-7">
                <div class="table col-lg-10">
                    <h3>Reserve</h3>
                    <h2>Your Table</h2>
                    <input type="text" name="name" placeholder="Name">
                    <input type="email" name="email" placeholder="email">
                    <input type="number" name="phone_no" placeholder="Phone Number">
                    <input type="date" name="date_reserve" placeholder="" >
                    <input type="text" name="Time" placeholder="Time">
                    <input type="submit" name="submit" value="Book a Table">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="reserve-right">
                    <h5>Feel the taste </h5>
                    <h2>More than Milktea</h2>
                    <h5>Feel the taste </h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                        quibusdam veritatis labore deserunt tenetur ipsa ipsam doloremqu
                        ucimus neque dolore vero quas, culpa sint quod repellat min
                        ima enim a nesciunt.</p>
                    <button class="btn btn-success ">View All Menu</button>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid contact" id="contact">
        <div class="row">
            <div class="col-lg-7 mx-auto contact-left">
                <div class="row">
                    <h2>Get in Touch</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Sit eveniet nostrum saepe non vitae, in beatae magni quasi
                        omnis commodi aperiam? Distinctio eaque omnis nam illo et laboriosam, 
                    </p>
                        <div class="col-md-4">
                            <div class=""></div><h3 >Contact Info</h3>
                            <p><i class="fas fa-envelope"></i>  milktea@gmail.com</p>
                            <p><i class="fas fa-mobile"></i>  09535435466</p>
                            <p><i class="fas fa-map-marker-alt"></i>  Pasig City</p>
                        </div>
                        <div class="col-md-8">
                        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=400&amp;height=300&amp;hl=en&amp;q=Hampton Garden Maybunga Pasig&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fridaynightfunkin.net/">Friday Night Funkin PC</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:300px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:300px;}.gmap_iframe {height:300px!important;}</style></div>
                        </div>
                 </div>
                    
            </div>
            <div class="col-lg-4 mx-auto contact-right">
                    <h2>Contact Us</h2>
                    
                    <input type="text" name="fullname" placeholder="Full Name">
                    <input type="email" name="email" placeholder="Email" >
                    <input type="text" name="subject" placeholder="Subject"> 
                    <textarea name=""  rows="3" placeholder="Address"></textarea>
                    <input type="submit" name="submit" class="btn btn-success" value="Send">
            </div>
           
        </div>
    </div>

    <div class="container-fluid footer">
        <div class="row">
            <div class="col-lg-12">
                <a href="#" class="navbar-brand">
                    
                    <img src="assets/images/2.png" style="height: 140px; color:#fff;" alt="">
                    <label for="" style="font-weight: 900; border-bottom:5px solid rgb(184, 129, 58);">
                    MILKTEA! 
                    </label>
                </a>
            </div>
            <div class="col-lg-8 footer-title">
                <div class="row">
                    <div class="col-lg footer-nav">
                        <p><a href="#" class="navbar-brand">Home</a></p>
                        <p><a href="#about" class="navbar-brand">About</a></p>
                        <p><a href="#services" class="navbar-brand">Services</a></p>
                        <p><a href="#contact" class="navbar-brand">Contact</a></p>
                    </div>
                    <div class="col-lg">
                        <h2>About Us</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo earum dicta lum laudantium aperiam quas minima modi qui?</p>
                    </div>
                    <div class="col-lg">
                         <h2>Product</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo earum dicta lum laudantium aperiam quas minima modi qui?</p>
                    </div>
                    <div class="col-lg">
                         <h2>Company</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo earum dicta lum laudantium aperiam quas minima modi qui?</p>
                    </div>     
                </div>
            </div>
            <div class="col-lg-4">
                <div class="search-bar">
                    <input type="text" placeholder="Search...">
                    <a href="#"><i class="fas fa-search text-dark"></i></a>
                </div>
                <a href="#" class="icon"><i class="fab fa-facebook"></i></a>
                <a href="#" class="icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="icon"><i class="fas fa-envelope"></i></a>
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
