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
<div class="container text-center my-3">
    <h2 class="font-weight-light">Bootstrap 4 - Multi Item Carousel</h2>
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    
                    <div class="col-lg-3 mt-items">
                        <div class="bg-white rounded shadow-lg p-4 mb-3">
                            <div class="col-md-12">
                                <img src="assets/images/5.jpg" class="img-fluid pic-item" alt="">
                            </div>
                            <div class="col-md-12">
                                <h4 class="text-center p-3">Chocolate</h4>
                                <h3 class=" text-center">₱180.00</h3>
                                <button class="btn">ADD TO CART</button>
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="col-lg-3 mt-items">
                    <div class="bg-white rounded shadow-lg p-4 mb-3">
                        
                        <div class="col-md-12">
                            <img src="assets/images/7.jpg" class="img-fluid pic-item"  alt="">
                        </div>
                        <div class="col-md-12">
                            <h4 class="text-center p-3">Mangoe</h4>
                            <h3 class="text-center">₱180.00</h3>
                            <button class="btn">ADD TO CART</button>
                        </div>      
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                <div class="col-lg-3 mt-items">
                    <div class="bg-white rounded shadow-lg p-4 mb-3">
                        
                        <div class="col-md-12">
                            <img src="assets/images/15.jpg" class="img-fluid pic-item"  alt="">
                        </div>
                        <div class="col-md-12">
                            <h4 class="text-center p-3">Frappe </h4>
                            <h3 class="text-center">₱180.00</h3>
                            <button class="btn">ADD TO CART</button>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 mt-items">
                    <div class="bg-white rounded shadow-lg p-4 mb-3">
                    
                        <div class="col-md-12">
                            <img src="assets/images/11.jpg" class="img-fluid pic-item" alt="">
                        </div>
                        <div class="col-md-12">
                            <h4 class="ext-center p-3">Taro</h4>
                            <h3 class=" text-center">₱180.00</h3>
                            <button class="btn">ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                <div class="col-lg-3 mt-items">
                    <div class="bg-white rounded shadow-lg p-4 mb-3">
                        
                            <div class="col-md-12">
                                <img src="assets/images/13.jpg" class="img-fluid pic-item" alt="">
                            </div>
                            <div class="col-md-12">
                                
                                <h4 class=" text-center p-3">Iced Caramel Macchiato</h4>
                                <h3 class=" text-center">Mark Falcutila</h3>
                                <button class="btn">ADD TO CART</button>
                            </div>
                        
                    </div>
                </div>

                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="http://placehold.it/380?text=5">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="http://placehold.it/380?text=6">
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <h5 class="mt-2">Advances one slide at a time</h5>
</div>
    

</body>
</html>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/sweetalert/sweetalert2.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>


