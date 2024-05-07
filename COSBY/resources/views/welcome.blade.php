<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUSTOM</title>
    <link rel="shortcut icon" href="icons/icon-1.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9bbc3d5946.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <section>
            <nav class="navbar navbar-expand-lg fixed-top top-banner">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img style="width: 150px;" src="icons/Logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        </ul>
                        <div class="d-flex nav-menu">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="designtool">Design tool</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#product">Product</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact Us</a>
                                </li>
                                <li class="nav-item">
    @if(session('email'))
        <a style="border-radius:10px; border:2px solid white; padding:5px 20px 5px 20px;" class="nav-link" href="/logout">Logout</a>
    @else
        <a style="border-radius:10px; border:2px solid white; padding:5px 20px 5px 20px;"class="nav-link" href="/login">Login</a>
    @endif
</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </section>
        <section class="banner mb-5">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid w-75" src="images/banner-shoes.png" alt="">
                            </div>
                            <div class="col-md-6 m-auto">
                                <h1 class="fw-bold display-4"><span style="color:#FA804C">FASHION REACT</span><br> CUSTOMIZABLE</h1>
                                <p>Everybody is different, make your own style.</p>
                                <a class="btn nike-btn px-3 py-2" href="/designtool"><i class="fa-solid fa-cart-shopping me-2"></i>
                                    Design Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid w-75" src="images/daco.png" alt="">
                            </div>
                            <div class="col-md-6 m-auto">
                                <h1 class="fw-bold display-4"><span style="color:#FA804C">FASHION REACT</span><br> OWN WAY</h1>
                                <p>Everybody is different, make your own style.</p>
                                <a class="btn nike-btn px-3 py-2" href=""><i class="fa-solid fa-cart-shopping me-2"></i>
                                    BUY
                                    NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6 ">
                                <img class="img-fluid w-75" src="images/packo.png" alt="">
                            </div>
                            <div class="col-md-6 m-auto">
                                <h1 class="fw-bold display-4"><span style="color:#FA804C">FASHION
                                        REACT</span><br> OWN STYLE</h1>
                                <p>Everybody is different, make your own style.</p>
                                <a class="btn nike-btn px-3 py-2" href=""><i class="fa-solid fa-cart-shopping me-2"></i>
                                    BUY
                                    NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <main>
        <section id="product" class="container mb-5">
            <div class="casual-shoes">
                <h1 class="fw-bold py-3">RECOMMENDED SHIRTS</h1>
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-sm-12 mb-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <img class="img-fluid product-image" src="images/packo.png" alt="" data-price="700">
                                <h5 class="card-title fw-bold mt-4"> Printed Shirt</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <div class="d-flex justify-content-between">
                                    <h3 class="fw-bold" style="color:#FA804C">₹700</h3>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-12 mb-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <img class="img-fluid product-image" src="images/daco.png" alt="" data-price="700">
                                <h5 class="card-title fw-bold mt-4"> White shirt</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <div class="d-flex justify-content-between">
                                    <h3 class="fw-bold" style="color:#FA804C">₹700</h3>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-12 mb-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <img class="img-fluid product-image" src="images/pngegg 1.png" alt="" data-price="700">
                                <h5 class="card-title fw-bold mt-4"> Striped shirt</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <div class="d-flex justify-content-between">
                                    <h3 class="fw-bold" style="color:#FA804C">₹700</h3>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container mb-5">
            <div class="formal-shoes">
                <h1 class="fw-bold py-3">FORMAL SHIRTS</h1>
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-sm-12 mb-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <img class="img-fluid product-image" src="images/formal1.png" alt="" data-price="700">
                                <h5 class="card-title fw-bold mt-4"> Checked shirt</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <div class="d-flex justify-content-between">
                                    <h3 class="fw-bold" style="color:#FA804C">₹700</h3>
                                    
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-12 mb-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <img class="img-fluid product-image" src="images/formal2.png" alt="" data-price="700">
                                <h5 class="card-title fw-bold mt-4"> polo shirt</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <div class="d-flex justify-content-between">
                                    <h3 class="fw-bold" style="color:#FA804C">₹700</h3>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-12 mb-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <img class="img-fluid product-image" src="images/formal3.png" alt="" data-price="700">
                                <h5 class="card-title fw-bold mt-4"> Formal shirt</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <div class="d-flex justify-content-between">
                                    <h3 class="fw-bold" style="color:#FA804C">₹700</h3>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <section id="about" class="container mb-5 supporting">
            <div class="row d-sm-flex lex-column-reverse">
                <div class="col-lg-5 col-md-6 col-sm-12 d-sm-flex flex-sm-column-reverse">
                    <div class="container">
                        <div class="row g-2">
                            <div class="col-12 d-flex align-items-center"
                                style="box-shadow: 0px 0px 30px lightgrey; padding: 10px; border-radius: 10px; cursor: pointer;">
                                <img class="img-fluid w-25 me-3" src="icons/icon-1.png" alt="">
                                <div class="flex-column">
                                    <h5 class="fw-bold">Find the Perfect Fit</h5>
                                    <p><small>Everybody is different, which is why we offer styles for every
                                            body</small></p>
                                </div>
                            </div>
                            <div class="col-12 d-flex align-items-center"
                                style="box-shadow: 0px 0px 30px lightgrey; padding: 10px; border-radius: 10px; cursor: pointer;">
                                <img class="img-fluid w-25 me-3" src="icons/free.png" alt="">
                                <div class="flex-column">
                                    <h5 class="fw-bold">Free Exchanges</h5>
                                    <p><small>One of the many reasons you can shop with peace of mind.</small></p>
                                </div>
                            </div>
                            <div class="col-12 d-flex align-items-center"
                                style="box-shadow: 0px 0px 30px lightgrey; padding: 10px; border-radius: 10px; cursor: pointer;">
                                <img class="img-fluid w-25 me-3" src="icons/support.png" alt="">
                                <div class="flex-column">
                                    <h5 class="fw-bold">Contact Our Seller</h5>
                                    <p><small>They are here to help you. That's literally what we pay them for.</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <img class="img-fluid" src="icons/xmld.png" alt="">
                </div>
            </div>
        </section>
    </main>
    <footer id="contact" class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top container">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <span class="mb-3 mb-md-0 text-muted">© 2024 COSBY D CUSTOM, Inc</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex font">
            <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-twitter"></i></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-facebook"></i></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-github"></i></a></li>
        </ul>
    </footer>
    
    <script src="black.js"></script>
</body>

</html>