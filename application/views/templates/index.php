<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>| Praktek Dokter Mandiri</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url('landing/'); ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url('landing/'); ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url('landing/'); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url('landing/'); ?>css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    
    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top" >
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
                <img src="<?php echo base_url('landing/'); ?>img/logo-green2.png" style="width: 125px;" alt="">
                <a href="#home" class="navbar-brand">
                    <!-- <img class="img-fluid" src="img/logo.png" alt="Logo"> -->
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="#home" class="nav-item nav-link">Beranda</a>
                        <a href="#about" class="nav-item nav-link">Tentang</a>
                        <a href="#product" class="nav-item nav-link">Layanan</a>
                        <!-- <a href="#store" class="nav-item nav-link">Kontak</a> -->
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-light rounded-0 m-0">
                                <a href="feature.html" class="dropdown-item">Features</a>
                                <a href="blog.html" class="dropdown-item">Blog Article</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div> -->
                        <a href="#contact" class="nav-item nav-link">Kontak</a>
                    </div>
                    <div class="border-start ps-4 d-none d-lg-block">
                        <a href="<?php echo base_url('/login'); ?>"><button type="button" class="btn btn-primary rounded-pill px-4">login</button></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5" id="home">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?php echo base_url('landing/'); ?>img/dokter.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <p class="fs-4 text-white animated zoomIn">Selamat datang di <br> <strong class="text-light">Praktek kesehatan mas Mantri Thariq Faisal Badri, S.Kep., Ns</strong></p>
                                    <!-- <h1 class="display-1 text-dark animated zoomIn">Organic & Quality Tea Production</h1> -->
                                    <a href="#" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Daftar Antrian >></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <p class="fs-4 text-white animated zoomIn">Welcome to <strong class="text-dark">TEA House</strong></p>
                                    <h1 class="display-1 text-dark mb-4 animated zoomIn">Organic & Quality Tea Production</h1>
                                    <a href="" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid bg-white w-100 mb-3 wow fadeIn" data-wow-delay="0.1s" src="<?php echo base_url('landing/'); ?>img/about-1.jpg" alt="">
                            <img class="img-fluid bg-white w-50 wow fadeIn" data-wow-delay="0.2s" src="<?php echo base_url('landing/'); ?>img/about-4.jpg" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid bg-white w-50 mb-3 wow fadeIn" data-wow-delay="0.3s" src="<?php echo base_url('landing/'); ?>img/about-4.jpg" alt="">
                            <img class="img-fluid bg-white w-100 wow fadeIn" data-wow-delay="0.4s" src="<?php echo base_url('landing/'); ?>img/about-2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <p class="fs-5 fw-medium fst-italic text-primary">Tentang Kami</p>
                        <h1 class="text-dark">Sekilas tentang Praktek kesehatan masFaisal</h1>
                    </div>
                    <div class="row g-3 mb-4">
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="<?php echo base_url('landing/'); ?>img/about-5.jpg" alt="">
                        </div>
                        <div class="col-sm-8">
                            <!-- <h5>Sejarah</h5> -->
                            <p class="mb-0">Praktek Medis Mantri Thariq Faisal Badri, S.Kep., Ns didirikan pada tahun 2022 dengan visi untuk memberikan perawatan medis berkualitas tinggi dan berorientasi pasien kepada masyarakat Wringiagung.</p>
                        </div>
                    </div>
                    <div class="border-top mb-4"></div>
                    <div class="row g-3">
                        <div class="col-sm-8">
                            <!-- <h5>Daily use of a cup of tea is good for your health</h5> -->
                            <p class="mb-0">Kami percaya bahwa empati dan perhatian kepada setiap pasien adalah kunci dalam memberikan pelayanan medis yang berkualitas. Kami selalu berusaha untuk mendengarkan dengan baik dan memahami kebutuhan dan kekhawatiran pasien kami.</p>
                        </div>
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="<?php echo base_url('landing/'); ?>img/about-5.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Products Start -->
    <div class="container-fluid product py-5 my-5" id="product">
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Layanan</p>
                <h1 class="display-6">Praktek masFaisal Melayani</h1>
            </div>
            <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">
                <a href="" class="d-block product-item rounded">
                    <img src="<?php echo base_url('landing/'); ?>img/product-1.jpg" alt="">
                    <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-dark">Khitan (Laser/Super Ring)</h4>
                        <span class="text-body">prosedur sunat yang dilakukan dengan teknologi modern untuk meningkatkan keamanan, kenyamanan, dan pemulihan pasien</span>
                    </div>
                </a>
                <a href="" class="d-block product-item rounded">
                    <img src="<?php echo base_url('landing/'); ?>img/product-2.jpg" alt="">
                    <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-dark">Pemeriksaan Kesehatan</h4>
                        <span class="text-body">Layanan pemeriksaan kesehatan melibatkan penilaian menyeluruh terhadap kondisi kesehatan pasien. Ini bisa mencakup pemeriksaan fisik, pengukuran tekanan darah, analisis darah, tes laboratorium, dan lain-lain.</span>
                    </div>
                </a>
                <a href="" class="d-block product-item rounded">
                    <img src="<?php echo base_url('landing/'); ?>img/product-3.jpg" alt="">
                    <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-dark">Bekam</h4>
                        <span class="text-body">terapi alternatif yang melibatkan penggunaan cangkir khusus yang ditempelkan ke kulit untuk menciptakan tekanan negatif.</span>
                    </div>
                </a>
                <a href="" class="d-block product-item rounded">
                    <img src="<?php echo base_url('landing/'); ?>img/product-4.jpg" alt="">
                    <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-dark">Home Care (Pelayanan di Rumah)</h4>
                        <span class="text-body"> layanan medis yang dibawa langsung ke rumah pasien. Ini dapat mencakup perawatan oleh perawat, terapis fisik, atau dokter yang berkunjung ke rumah pasien. </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Article Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="<?php echo base_url('landing/'); ?>img/article.jpg" alt="">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <p class="fs-5 fw-medium fst-italic text-primary">Featured Acticle</p>
                        <h1 class="display-6">The history of tea leaf in the world</h1>
                    </div>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna. Tempor erat elitr rebum at clita.</p>
                    <a href="" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Article End -->


    <!-- Video Start -->
    <!-- <div class="container-fluid video my-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="py-5">
                        <h1 class="display-6 mb-4">Tea is a drink of <span class="text-white">health</span> and <span class="text-white">beauty</span></h1>
                        <h5 class="fw-normal lh-base fst-italic text-white mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit</h5>
                        <div class="row g-4 mb-5">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">Great tea assortment</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">Spices & additives</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">Unique accessories</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">Good for health & beauty</span>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-light rounded-pill py-3 px-5" href="">Explore More</a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://youtu.be/dQw4w9WgXcQ?si=G-JvTXiPWIUjrTkd" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Video End -->


    <!-- Video Modal Start -->
    <!-- <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"> -->
                    <!-- 16:9 aspect ratio -->
                    <!-- <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Video Modal End -->


    <!-- Store Start -->
    <!-- <div class="container-xxl py-5" id="store">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Online Store</p>
                <h1 class="display-6">Want to stay healthy? Choose tea taste</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="<?php echo base_url('landing/'); ?>img/store-product-1.jpg" alt="">
                        <div class="p-4">
                            <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h4 class="mb-3">Nature close tea</h4>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                            <h4 class="text-primary">$19.00</h4>
                        </div>
                        <div class="store-overlay">
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a>
                            <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i class="fa fa-cart-plus ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="<?php echo base_url('landing/'); ?>img/store-product-2.jpg" alt="">
                        <div class="p-4">
                            <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h4 class="mb-3">Green tea tulsi</h4>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                            <h4 class="text-primary">$19.00</h4>
                        </div>
                        <div class="store-overlay">
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a>
                            <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i class="fa fa-cart-plus ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="<?php echo base_url('landing/'); ?>img/store-product-3.jpg" alt="">
                        <div class="p-4">
                            <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h4 class="mb-3">Instant tea premix</h4>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                            <h4 class="text-primary">$19.00</h4>
                        </div>
                        <div class="store-overlay">
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a>
                            <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i class="fa fa-cart-plus ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <a href="" class="btn btn-primary rounded-pill py-3 px-5">View More Products</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Store End -->


    <!-- Testimonial Start -->
    <!-- <div class="container-fluid testimonial py-5 my-5" >
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-white">Testimonial</p>
                <h1 class="display-6">What our clients say about our tea</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.5s">
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid flex-shrink-0" src="<?php echo base_url('landing/'); ?>img/testimonial-1.jpg" alt="">
                        <div class="text-start ms-3">
                            <h5>Client Name</h5>
                            <span class="text-primary">Profession</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid flex-shrink-0" src="<?php echo base_url('landing/'); ?>img/testimonial-2.jpg" alt="">
                        <div class="text-start ms-3">
                            <h5>Client Name</h5>
                            <span class="text-primary">Profession</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid flex-shrink-0" src="<?php echo base_url('landing/'); ?>img/testimonial-3.jpg" alt="">
                        <div class="text-start ms-3">
                            <h5>Client Name</h5>
                            <span class="text-primary">Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="container-xxl contact py-5" id="contact">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Kontak</p>
                <h1 class="display-6">Hubungi Kami</h1>
            </div>
            <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-8">
                    <!-- <p class="text-center mb-5">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p> -->
                    <div class="row g-5">
                        <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fa fa-envelope fa-2x text-white"></i>
                            </div>
                            <p class="mb-2">masFaisal@gmail.com</p>
                            <!-- <p class="mb-0">support@example.com</p> -->
                        </div>
                        <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.4s">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fa fa-phone fa-2x text-white"></i>
                            </div>
                            <p class="mb-2">+62 345 67890</p>
                            <!-- <p class="mb-0">+012 345 67890</p> -->
                        </div>
                        <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fa fa-map-marker-alt fa-2x text-white"></i>
                            </div>
                            <p class="mb-2">Jl. Pasar, Pd. Jeruk, Wringin Agung</p>
                            <p class="mb-0">Kec. Jombang, Kabupaten Jember, Jawa Timur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Start -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Temukan kami</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Jl. Pasar, Pd. Jeruk, Wringin Agung, Kec. Jombang, Kabupaten Jember, Jawa Timur</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>+62 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>masFaisal@gmail.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Tautan</h4>
                    <a class="btn btn-link" href="#home">Tentang</a>
                    <a class="btn btn-link" href="#about">Layanan</a>
                    <a class="btn btn-link" href="#product">Kontak</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Jadwal</h4>
                    <p class="mb-1">Setiap Hari</p>
                    <h6 class="text-light">16:00 - 20:30</h6>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium" href="#">praktek masFaisal</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <!-- Designed By <a class="fw-medium" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="fw-medium" href="https://themewagon.com">ThemeWagon</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('landing/'); ?>lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url('landing/'); ?>lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url('landing/'); ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url('landing/'); ?>lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url('landing/'); ?>js/main.js"></script>
</body>

</html>