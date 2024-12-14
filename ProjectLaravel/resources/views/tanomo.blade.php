<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/main.css">
</head>
<style>
    .nav-item {
        margin-left: 10px;
    }

    /*COMPONENTS -> TABS*/
    .nav-tabs {
        margin-bottom: 0px;
        border: 0;

    }

    .nav-tabs .nav-link {
        background-color: #eeeeee;
        font-size: 15px;
        margin: 0 10px;
        margin-left: 10px;
        color: #444;
        border-radius: 4px;
        padding: 15px 24px;
        -webkit-transition: 0.2s;
        transition: 0.2s;
        border: 0;
        border-top-color: currentcolor;
        border-right-color: currentcolor;
        border-bottom-color: currentcolor;
        border-left-color: currentcolor;
        font-family: "Spartan", sans-serif;
        font-weight: 600;
        line-height: 1;
    }

    .nav-tabs .nav-link.active {
        color: #F15412;
        background-color: #fde1bd;
    }

    .nav-tabs .nav-link:hover {
        color: #F15412;
        background-color: #fde1bd;
        -webkit-transform: translateY(-3px);
        transform: translateY(-3px);
        -webkit-transition: 0.2s;
        transition: 0.2s;
    }

    .nav-tabs .nav-link:first-child {
        margin-left: 0 !important;
    }

    .nav-tabs.no-border {
        border: none;
    }

    .nav-tabs.right .nav-item:last-child .nav-link {
        margin-right: 0;
    }

    .nav.right {
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: end;
    }
</style>

<body>
    <header class="header-area overlay">
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container">
                <a href="#" class="navbar-brand">Online Shopping</a>

                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                </button>

                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li><a href="#" class="nav-item nav-link active">Home</a></li>
                        <li><a href="#" class="nav-item nav-link active">About Us</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-item nav-link active" data-toggle="dropdown">Services</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Dropdown Item 1</a>
                                <a href="#" class="dropdown-item">Dropdown Item 2</a>
                                <a href="#" class="dropdown-item">Dropdown Item 3</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-item nav-link active" data-toggle="dropdown">Portfolio</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Dropdown Item 1</a>
                                <a href="#" class="dropdown-item">Dropdown Item 2</a>
                                <a href="#" class="dropdown-item">Dropdown Item 3</a>
                                <a href="#" class="dropdown-item">Dropdown Item 4</a>
                                <a href="#" class="dropdown-item">Dropdown Item 5</a>
                            </div>
                        </li>
                        <li><a href="#" class="nav-item nav-link active">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active ">
                            <img class="d-block " style="width: 100%;" src="img/order5.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block " style=" width: 100%; " src="img/order.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block " style=" width: 100%; " src="img/order2.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class=" sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <br><br>
    </header>
    <section class="featured section-padding position-relative" ​ style=" margin-top: 2%; ">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features  hover-up">
                        <img src="img/feature-1.png" alt="">
                        <h4 class="bg-1">Free Shipping</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features">
                        <img src="img/feature-2.png" alt="">
                        <h4 class="bg-3">Online Order</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features">
                        <img src="img/feature-3.png" alt="">
                        <h4 class="bg-2">Save Money</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features">
                        <img src="img/feature-4.png" alt="">
                        <h4 class="bg-4">Promotions</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features">
                        <img src="img/feature-5.png" alt="">
                        <h4 class="bg-5">Happy Sell</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features">
                        <img src="assets/imgs/theme/icons/feature-6.png" alt="">
                        <h4 class="bg-6">24/7 Support</h4>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <div class="container mt-5">
        <div class="row">
            <div class="tab-header" style=" display: flex; justify-content: space-between;">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <button class="nav-link active" type="button">Featured</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" type="button">Popular</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" type="button">New added</button>
                    </li>
                </ul>

            </div>

        </div>
    </div>
    <main>

        <section id="content" class="content">
            <div class="container">

                <div class="row product-grid-4">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="product-details.html">
                                        <img class="default-img" src="assets/imgs/shop/product-1-1.jpg" alt="">
                                        <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt="">
                                    </a>
                                </div>

                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop.html">Clothing</a>
                                </div>
                                <h2><a href="product-details.html">Colorful Pattern Shirts</a></h2>

                                <div class="product-price">
                                    <span>$15.50</span>


                                </div>
                                <div class="product-action-1 show">
                                    <a aria-label="Add To Cart" class="action-btn hover-up" data-toggle="modal"
                                        data-target="#myModal"><i class="fi-rs-shopping-bag-add"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="product-details.html">
                                        <img class="default-img" src="assets/imgs/shop/product-2-1.jpg" alt="">
                                        <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="">
                                    </a>
                                </div>

                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop.html">Clothing</a>
                                </div>
                                <h2><a href="product-details.html">Plain Color Pocket Shirts</a></h2>

                                <div class="product-price">
                                    <span>$15.50</span>

                                </div>
                                <div class="product-action-1 show">
                                    <a aria-label="Add To Cart" class="action-btn hover-up" data-toggle="modal"
                                        data-target="#myModal"><i class="fi-rs-shopping-bag-add"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="product-details.html">
                                        <img class="default-img" src="img/product-3-1.jpg" alt="">
                                        <img class="hover-img" src="img/product-3-2.jpg" alt="">
                                    </a>
                                </div>

                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="best">Best Sell</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop.html">Shirts</a>
                                </div>
                                <h2><a href="product-details.html">Vintage Floral Oil Shirts</a></h2>

                                <div class="product-price">
                                    <span>$15.50</span>

                                </div>
                                <div class="product-action-1 show">
                                    <a aria-label="Add To Cart" class="action-btn hover-up" data-toggle="modal"
                                        data-target="#myModal"><i class="fi-rs-shopping-bag-add"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="product-details.html">
                                        <img class="default-img" src="img/product-4-1.jpg" alt="">
                                        <img class="hover-img" src="img/product-4-2.jpg" alt="">
                                    </a>
                                </div>

                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="sale">Sale</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop.html">Clothing</a>
                                </div>
                                <h2><a href="product-details.html">Colorful Hawaiian Shirts</a></h2>

                                <div class="product-price">
                                    <span>$15.50</span>

                                </div>
                                <div class="product-action-1 show">
                                    <a aria-label="Add To Cart" class="action-btn hover-up" data-toggle="modal"
                                        data-target="#myModal"><i class="fi-rs-shopping-bag-add"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6" style=" margin-top: 2%; ">
                        <div class="product-cart-wrap mb-xs-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="product-details.html">
                                        <img class="default-img" src="img/product-5-1.jpg" alt="">
                                        <img class="hover-img" src="img/product-5-2.jpg" alt="">
                                    </a>
                                </div>

                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop.html">Shirt</a>
                                </div>
                                <h2><a href="product-details.html">Flowers Sleeve Lapel Shirt</a></h2>

                                <div class="product-price">
                                    <span>$15.50</span>

                                </div>
                                <div class="product-action-1 show">
                                    <a aria-label="Add To Cart" class="action-btn hover-up" data-toggle="modal"
                                        data-target="#myModal"><i class="fi-rs-shopping-bag-add"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6" style=" margin-top: 2%; ">
                        <div class="product-cart-wrap mb-xs-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="product-details.html">
                                        <img class="default-img" src="img/product-6-1.jpg" alt="">
                                        <img class="hover-img" src="img/product-6-2.jpg" alt="">
                                    </a>
                                </div>

                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop.html">Shirts</a>
                                </div>
                                <h2><a href="product-details.html">Ethnic Floral Casual Shirts</a></h2>

                                <div class="product-price">
                                    <span>$15.50</span>

                                </div>
                                <div class="product-action-1 show">
                                    <a aria-label="Add To Cart" class="action-btn hover-up" data-toggle="modal"
                                        data-target="#myModal"><i class="fi-rs-shopping-bag-add"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6" style=" margin-top: 2%; ">
                        <div class="product-cart-wrap mb-xs-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="product-details.html">
                                        <img class="default-img" src="img/thumbnail-8.jpg" alt="">
                                        <img class="hover-img" src="img/thumbnail-7.jpg" alt="">
                                    </a>
                                </div>

                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop.html">Shoes</a>
                                </div>
                                <h2><a href="product-details.html">Stitching Hole Sandals</a></h2>

                                <div class="product-price">
                                    <span>$15.50</span>
                                </div>
                                <div class="product-action-1 show">
                                    <a aria-label="Add To Cart" class="action-btn hover-up" data-toggle="modal"
                                        data-target="#myModal"><i class="fi-rs-shopping-bag-add"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6" style=" margin-top: 2%; ">
                        <div class="product-cart-wrap">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="product-details.html">
                                        <img class="default-img" src="img/product-8-1.jpg" alt="">
                                        <img class="hover-img" src="img/product-8-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop.html">Shirt</a>
                                </div>
                                <h2><a href="product-details.html">Mens Porcelain Shirt</a></h2>

                                <div class="product-price">
                                    <span>$15.50 </span>
                                </div>
                                <div class="product-action-1 show">
                                    <a aria-label="Add To Cart" class="action-btn hover-up" data-toggle="modal"
                                        data-target="#myModal"><i class="fi-rs-shopping-bag-add"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="banner-2 section-padding pb-0">
            <div class="container">
                <div class="banner-img banner-big  f-none">
                    <img src="img/Subheading.png" alt="">
                    <div class="banner-text d-md-block d-none">
                        <h4 class="mb-15 mt-40 text-brand">Repair Services</h4>
                        <h1 class="fw-600 mb-20">We're an Apple <br>Authorised Service Provider</h1>
                        <a href="shop.html" class="btn">Learn More <i class="fi-rs-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding">
            <div class="container ">
                <h3 class="section-title mb-20 " style="margin-top: 3%"><span style="color: #F15412;">Popular</span>
                    Categories</h3>

                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows">
                    </div>
                    <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="product-details.html">
                                        <img class="default-img" src="assets/imgs/shop/product-2-1.jpg"
                                            style=" height: 200px; " style=" height: 200px; " alt="">
                                        <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg"
                                            style=" height: 200px; " style=" height: 200px; " alt="">
                                    </a>
                                </div>

                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="product-details.html">Lorem ipsum dolor</a></h2>

                                <div class="product-price">
                                    <span>$238.85 </span>

                                </div>
                            </div>
                        </div>

                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="product-details.html">
                                        <img class="default-img" src="assets/imgs/shop/product-4-1.jpg"
                                            style=" height: 200px; " alt="">
                                        <img class="hover-img" src="assets/imgs/shop/product-4-2.jpg"
                                            style=" height: 200px; " alt="">
                                    </a>
                                </div>

                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="product-details.html">Aliquam posuere</a></h2>

                                <div class="product-price">
                                    <span>$173.85 </span>

                                </div>
                            </div>
                        </div>
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="product-details.html">
                                        <img class="default-img" src="assets/imgs/shop/product-4-1.jpg"
                                            style=" height: 200px; " alt="">
                                        <img class="hover-img" src="assets/imgs/shop/product-4-2.jpg"
                                            style=" height: 200px; " alt="">
                                    </a>
                                </div>

                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="product-details.html">Aliquam posuere</a></h2>

                                <div class="product-price">
                                    <span>$173.85 </span>

                                </div>
                            </div>
                        </div>
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="product-details.html">
                                        <img class="default-img" src="assets/imgs/shop/product-3-1.jpg"
                                            style=" height: 200px; " alt="">
                                        <img class="hover-img" src="assets/imgs/shop/product-3-2.jpg"
                                            style=" height: 200px; " alt="">
                                    </a>
                                </div>

                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="product-details.html">Donec congue</a></h2>

                                <div class="product-price">
                                    <span>$83.8 </span>

                                </div>
                            </div>
                        </div>
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="product-details.html">
                                        <img class="default-img" src="assets/imgs/shop/product-9-1.jpg"
                                            style=" height: 200px; " alt="">
                                        <img class="hover-img" src="assets/imgs/shop/product-9-2.jpg"
                                            style=" height: 200px; " alt="">
                                    </a>
                                </div>

                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="product-details.html">Curabitur porta</a></h2>

                                <div class="product-price">
                                    <span>$1238.85 </span>

                                </div>
                            </div>
                        </div>
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="product-details.html">
                                        <img class="default-img" src="assets/imgs/shop/product-9-1.jpg"
                                            style=" height: 200px; " alt="">
                                        <img class="hover-img" src="assets/imgs/shop/product-9-2.jpg"
                                            style=" height: 200px; " alt="">
                                    </a>
                                </div>

                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="product-details.html">Curabitur porta</a></h2>

                                <div class="product-price">
                                    <span>$1238.85 </span>

                                </div>
                            </div>
                        </div>
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="product-details.html">
                                        <img class="default-img" src="assets/imgs/shop/product-1-1.jpg"
                                            style=" height: 200px; " alt="">
                                        <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg"
                                            style=" height: 200px; " alt="">
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="product-details.html">Vestibulum ante</a></h2>

                                <div class="product-price">
                                    <span>$238.85 </span>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="banners mb-15" style=" margin-top: 3%; ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img ">
                            <img src="assets/imgs/banner/banner-1.png" alt="">
                            <div class="banner-text">
                                <span>Smart Offer</span>
                                <h4>Save 20% on <br>Woman Bag</h4>
                                <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img ">
                            <img src="assets/imgs/banner/banner-2.png" alt="">
                            <div class="banner-text">
                                <span>Sale off</span>
                                <h4>Great Summer <br>Collection</h4>
                                <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-md-none d-lg-flex">
                        <div class="banner-img   mb-sm-0">
                            <img src="assets/imgs/banner/banner-3.png" alt="">
                            <div class="banner-text">
                                <span>New Arrivals</span>
                                <h4>Shop Today’s <br>Deals & Offers</h4>
                                <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><br><br>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-up"></i></button>
        <hr>
        <footer>
            <div style="background-color:#ffff;color:black;padding:30px;">
                <div class="row">
                    <div class=" col-md-2">
                    </div>
                    <div class=" col-md-3">
                        <h5 class="mt-3 mb-10" style="color:black; font-size: 18px;">Contact</h5>
                        <p style="color: black; font-size: 15px; ">
                            <strong>Address: </strong>Phnom Penh
                        </p>
                        <p style="color: black;font-size: 15px; ">
                            <strong>Phone: </strong>+068 2808 14
                        </p>
                        <p style="color: black;font-size: 15px; ">
                            <strong>Email: </strong>votanak1997@gmail.com
                        </p>
                        <h5 class="mb-10 mt-30 fw-600" style="color: black">Follow Us</h5>

                    </div>

                    <div class="col-md-3 ">
                        <h5 class="" style="color:black; font-size: 18px;margin-top: 5%; ">About</h5>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#" style="color:black; font-size: 15px;">About Us</a></li>
                            <li><a href="#" style="color:black; font-size: 15px;">Delivery Information</a></li>
                            <li><a href="#" style="color:black; font-size: 15px;">Privacy Policy</a></li>
                            <li><a href="#" style="color:black; font-size: 15px;">Terms &amp; Conditions</a></li>
                            <li><a href="#" style="color:black; font-size: 15px;">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3  ">
                        <h5 class="widget-title" style="color:black; margin-top: 5%; ">Install App</h5>
                        <div class="row">
                            <div class="col-md-8 col-lg-12 ">
                                <p style="color:black;font-size: 15px;">From App Store or Google Play</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class=" download-app">
                                            <a href="#" class="hover-up">
                                                <img src="assets/imgs/theme/google-play.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class=" download-app">
                                            <a href="#" class="hover-up mb-sm-4 mb-lg-0">
                                                <img class="active" src="assets/imgs/theme/app-store.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="" style="color:black;">Secured Payment Gateways</h5><br>
                            <div class="col-md-4 col-lg-12  mt-lg-0">
                                <img class="" src="assets/imgs/theme/payment-method.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="product-details.html">
                                    <img class="default-img" src="assets/imgs/shop/product-1-1.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <script src="assets/js/plugins/slick.js"></script>
    <script src="assets/js/plugins/jquery.syotimer.min.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/plugins/jquery-ui.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/main.js?v=3.3"></script>
    <script src="assets/js/shop.js?v=3.3"></script>
    <script>

        jQuery(function ($) {
            $(window).on('scroll', function () {
                if ($(this).scrollTop() >= 200) {
                    $('.navbar').addClass('fixed-top');
                } else if ($(this).scrollTop() == 0) {
                    $('.navbar').removeClass('fixed-top');
                }
            });

            function adjustNav() {
                var winWidth = $(window).width(),
                    dropdown = $('.dropdown'),
                    dropdownMenu = $('.dropdown-menu');

                if (winWidth >= 768) {
                    dropdown.on('mouseenter', function () {
                        $(this).addClass('show')
                            .children(dropdownMenu).addClass('show');
                    });

                    dropdown.on('mouseleave', function () {
                        $(this).removeClass('show')
                            .children(dropdownMenu).removeClass('show');
                    });
                } else {
                    dropdown.off('mouseenter mouseleave');
                }
            }

            $(window).on('resize', adjustNav);
            adjustNav();
        });


        // Get the button
        let mybutton = document.getElementById("myBtn");
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

    </script>
</body>

</html>