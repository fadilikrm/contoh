<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Sotang Mangga Tiga</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="/frontend/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="/frontend/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
    <link href="/frontend/lib/owlcarousel/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/frontend/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Template Stylesheet -->
    <link href="/frontend/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <div class="container-fluid nav-bar">
      <div class="container">
        <nav class="navbar navbar-light navbar-expand-lg py-4">
          <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <img src="" alt="logo" />
          </a>
          <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars text-primary"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto">
              <a href="index.html" class="nav-item nav-link active">Home</a>
              <a href="#About" class="nav-item nav-link">About</a>
              <div class="nav-item dropdown">
                <a href="#Produk" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Produk</a>
                <div class="dropdown-menu bg-light">
                  <a href="#Menu" class="nav-item nav-link">Menu</a>
                  <a href="#Order" class="nav-item nav-link">Order</a>
                  <a href="#Testimoni" class="nav-item nav-link">Testimoni</a>
            </div>
          </div>
              <a href="#Team" class="nav-item nav-link">Team</a>
              <a href="#Keunggulan" class="nav-item nav-link">Keunggulan</a>
              <div class="nav-item dropdown">
                <a href="#Gallery" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Gallery</a>
                <div class="dropdown-menu bg-light">
                    <a href="#Foto" class="dropdown-item">Foto</a>
                    <a href="#Video" class="dropdown-item">Video</a>
            </div>
          </div>
          <a href="team.html" class="nav-item nav-link">Login</a>

          
        </div>
        </nav>
      </div>
    </div>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <div class="container-fluid bg-light py-6 my-6 mt-0">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-7 col-md-12">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-4 animated bounceInDown">Welcome to Sotang Mangga Tiga</small>
            <h1 class="display-1 mb-4 animated bounceInDown">Cemilan <span class="text-primary"> Enak</span> Dan<span class="text-primary"> Mengenyangkan</span></h1>
            <a href="#Order" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 animated bounceInLeft">Book Now</a>
            <a href="#About" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 animated bounceInLeft">Know More</a>
          </div>
          <div class="col-lg-5 col-md-12">
            <img src="/frontend/img/hero.png" class="img-fluid rounded animated zoomIn" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- Hero End -->

    <!-- About Satrt -->
    <section id="About">
      <div class="container-fluid py-6">
        <div class="container">
          <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
              <img src="/frontend/img/about.jpg" class="img-fluid rounded" alt="" />
            </div>
            <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
              <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">About Us</small>
              <h1 class="display-5 mb-4">Trusted By 200 + satisfied clients</h1>
              <p class="mb-4">
                Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eit esdioilore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullaemco laboeeiris nisi ut aliquip ex ea commodo consequat. Duis aute
                irure dolor iesdein reprehendeerit in voluptate velit esse cillum dolore.
              </p>
              <div class="row g-4 text-dark mb-5">
                <div class="col-sm-6"><i class="fas fa-share text-primary me-2"></i>Fresh and Fast food Delivery</div>
                <div class="col-sm-6"><i class="fas fa-share text-primary me-2"></i>24/7 Customer Support</div>
                <div class="col-sm-6"><i class="fas fa-share text-primary me-2"></i>Easy Customization Options</div>
                <div class="col-sm-6"><i class="fas fa-share text-primary me-2"></i>Delicious Deals for Delicious Meals</div>
              </div>
              <a href="" class="btn btn-primary py-3 px-5 rounded-pill">About Us<i class="fas fa-arrow-right ps-2"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About End -->

    <!-- Menu Start -->
    <section id="Menu">
      <div class="container-fluid menu bg-light py-6 my-6">
        <div class="container">
          <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Menu</small>
            <h1 class="display-5 mb-5">Menu</h1>
          </div>
          <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
              <li class="nav-item p-2">
                <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill active" data-bs-toggle="pill" href="#tab-6">
                  <span class="text-dark" style="width: 150px">Semua</span>
                </a>
              </li>
              <li class="nav-item p-2">
                <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" href="#tab-7">
                  <span class="text-dark" style="width: 150px">Populer</span>
                </a>
              </li>
              <li class="nav-item p-2">
                <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" href="#tab-8">
                  <span class="text-dark" style="width: 150px">Manis</span>
                </a>
              </li>
              <li class="nav-item p-2">
                <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" href="#tab-9">
                  <span class="text-dark" style="width: 150px">Asin</span>
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <div id="tab-6" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                  <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-01.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>SOTANG ORIGINAL</h4>
                          <h4 class="text-primary">10K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.2s">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-02.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>SOTANG MOZARELLA</h4>
                          <h4 class="text-primary">$15K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-03.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>SOTANG JUMBO</h4>
                          <h4 class="text-primary">15K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.4s">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-04.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>SOTANG FULL JUMBO</h4>
                          <h4 class="text-primary">18K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.5s">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-05.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>SOTANG FULL MOZARELLA</h4>
                          <h4 class="text-primary">15K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.6s">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-06.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>CORNDOG MOZARELLA</h4>
                          <h4 class="text-primary">10K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.7s">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-07.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>CORNDOG SOSIS</h4>
                          <h4 class="text-primary">10K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.8s">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-08.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>CORNDOG SOSIS JUMBO</h4>
                          <h4 class="text-primary">15K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.7s">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-07.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>CHOCHO MOZARELLA</h4>
                          <h4 class="text-primary">10K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.8s">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-08.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>KENTANG GORENG</h4>
                          <h4 class="text-primary">10K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab-7" class="tab-pane fade show p-0">
                <div class="row g-4">
                  <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-01.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>CHOCO MOZARELLA</h4>
                          <h4 class="text-primary">10K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-03.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>SOTANG MOZARELLA</h4>
                          <h4 class="text-primary">15K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-05.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>SOTANG JUMBO</h4>
                          <h4 class="text-primary">15K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-07.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>SOTANG FULL JUMBO KENTANG</h4>
                          <h4 class="text-primary">18K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab-8" class="tab-pane fade show p-0">
                <div class="row g-4">
                  <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-01.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>CHOCO MOZARELLA</h4>
                          <h4 class="text-primary">10K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Menu End -->

    <!--  Order Start -->
    <section id="Order">
      <div class="container-fluid service py-6">
        <div class="container">
          <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Artikel</small>
            <h1 class="display-5 mb-5">What We Offer</h1>
          </div>
          <div class="row g-4">
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
              <div class="bg-light rounded service-item">
                <div class="service-content d-flex align-items-center justify-content-center p-4">
                  <div class="service-content-icon text-center">
                    <i class="fas fa-cheese fa-7x text-primary mb-4"></i>
                    <h4 class="mb-3">Wedding Services</h4>
                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                    <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.3s">
              <div class="bg-light rounded service-item">
                <div class="service-content d-flex align-items-center justify-content-center p-4">
                  <div class="service-content-icon text-center">
                    <i class="fas fa-pizza-slice fa-7x text-primary mb-4"></i>
                    <h4 class="mb-3">Corporate Catering</h4>
                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                    <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.5s">
              <div class="bg-light rounded service-item">
                <div class="service-content d-flex align-items-center justify-content-center p-4">
                  <div class="service-content-icon text-center">
                    <i class="fas fa-hotdog fa-7x text-primary mb-4"></i>
                    <h4 class="mb-3">Cocktail Reception</h4>
                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                    <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.7s">
              <div class="bg-light rounded service-item">
                <div class="service-content d-flex align-items-center justify-content-center p-4">
                  <div class="service-content-icon text-center">
                    <i class="fas fa-hamburger fa-7x text-primary mb-4"></i>
                    <h4 class="mb-3">Bento Catering</h4>
                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                    <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
              <div class="bg-light rounded service-item">
                <div class="service-content d-flex align-items-center justify-content-center p-4">
                  <div class="service-content-icon text-center">
                    <i class="fas fa-wine-glass-alt fa-7x text-primary mb-4"></i>
                    <h4 class="mb-3">Pub Party</h4>
                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                    <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.3s">
              <div class="bg-light rounded service-item">
                <div class="service-content d-flex align-items-center justify-content-center p-4">
                  <div class="service-content-icon text-center">
                    <i class="fas fa-walking fa-7x text-primary mb-4"></i>
                    <h4 class="mb-3">Home Delivery</h4>
                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                    <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.5s">
              <div class="bg-light rounded service-item">
                <div class="service-content d-flex align-items-center justify-content-center p-4">
                  <div class="service-content-icon text-center">
                    <i class="fas fa-wheelchair fa-7x text-primary mb-4"></i>
                    <h4 class="mb-3">Sit-down Catering</h4>
                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                    <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.7s">
              <div class="bg-light rounded service-item">
                <div class="service-content d-flex align-items-center justify-content-center p-4">
                  <div class="service-content-icon text-center">
                    <i class="fas fa-utensils fa-7x text-primary mb-4"></i>
                    <h4 class="mb-3">Buffet Catering</h4>
                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                    <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Order End -->

    <!-- Testimoni Start -->
    <section id="Testimoni">
      <div class="container-fluid menu bg-light py-6 my-6">
        <div class="container">
          <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Menu</small>
            <h1 class="display-5 mb-5">Testimoni</h1>
          </div>
          <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
              <li class="nav-item p-2">
                <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill active" data-bs-toggle="pill" href="#tab-6">
                  <span class="text-dark" style="width: 150px">Semua</span>
                </a>
              </li>
              <li class="nav-item p-2">
                <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" href="#tab-7">
                  <span class="text-dark" style="width: 150px">Populer</span>
                </a>
              </li>
              <li class="nav-item p-2">
                <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" href="#tab-8">
                  <span class="text-dark" style="width: 150px">Manis</span>
                </a>
              </li>
              <li class="nav-item p-2">
                <a class="d-flex py-2 mx-2 border border-primary bg-white rounded-pill" data-bs-toggle="pill" href="#tab-9">
                  <span class="text-dark" style="width: 150px">Asin</span>
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <div id="tab-6" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                  <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-01.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>SOTANG ORIGINAL</h4>
                          <h4 class="text-primary">10K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.2s">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-02.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>SOTANG MOZARELLA</h4>
                          <h4 class="text-primary">$15K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-03.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>SOTANG JUMBO</h4>
                          <h4 class="text-primary">15K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.4s">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-04.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>SOTANG FULL JUMBO</h4>
                          <h4 class="text-primary">18K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.5s">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-05.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>SOTANG FULL MOZARELLA</h4>
                          <h4 class="text-primary">15K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.6s">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-06.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>CORNDOG MOZARELLA</h4>
                          <h4 class="text-primary">10K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.7s">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-07.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>CORNDOG SOSIS</h4>
                          <h4 class="text-primary">10K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.8s">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-08.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>CORNDOG SOSIS JUMBO</h4>
                          <h4 class="text-primary">15K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.7s">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-07.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>CHOCHO MOZARELLA</h4>
                          <h4 class="text-primary">10K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.8s">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-08.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>KENTANG GORENG</h4>
                          <h4 class="text-primary">10K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab-7" class="tab-pane fade show p-0">
                <div class="row g-4">
                  <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-01.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>CHOCO MOZARELLA</h4>
                          <h4 class="text-primary">10K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-03.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>SOTANG MOZARELLA</h4>
                          <h4 class="text-primary">15K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-05.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>SOTANG JUMBO</h4>
                          <h4 class="text-primary">15K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-07.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>SOTANG FULL JUMBO KENTANG</h4>
                          <h4 class="text-primary">18K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab-8" class="tab-pane fade show p-0">
                <div class="row g-4">
                  <div class="col-lg-6">
                    <div class="menu-item d-flex align-items-center">
                      <img class="flex-shrink-0 img-fluid rounded-circle" src="/frontend/img/menu-01.jpg" alt="" />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                          <h4>CHOCO MOZARELLA</h4>
                          <h4 class="text-primary">10K</h4>
                        </div>
                        <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimoni End -->

    <!-- Artikel Start -->
    <section id="Artikel">
            <div class="container-fluid blog py-6">
              <div class="container">
                  <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                      <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Blog</small>
                      <h1 class="display-5 mb-5">Be First Who Read News</h1>
                  </div>
                  <div class="row gx-4 justify-content-center">
                      <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s">
                          <div class="blog-item">
                              <div class="overflow-hidden rounded">
                                  <img src="/frontend/img/blog-1.jpg" class="img-fluid w-100" alt="">
                              </div>
                              <div class="blog-content mx-4 d-flex rounded bg-light">
                                  <div class="text-dark bg-primary rounded-start">
                                      <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                          <p class="fw-bold mb-0">16</p>
                                          <p class="fw-bold mb-0">Sep</p>
                                      </div>
                                  </div>
                                  <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food from</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.3s">
                          <div class="blog-item">
                              <div class="overflow-hidden rounded">
                                  <img src="/frontend/img/blog-2.jpg" class="img-fluid w-100" alt="">
                              </div>
                              <div class="blog-content mx-4 d-flex rounded bg-light">
                                  <div class="text-dark bg-primary rounded-start">
                                      <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                          <p class="fw-bold mb-0">16</p>
                                          <p class="fw-bold mb-0">Sep</p>
                                      </div>
                                  </div>
                                  <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food from</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.5s">
                          <div class="blog-item">
                              <div class="overflow-hidden rounded">
                                  <img src="/frontend/img/blog-3.jpg" class="img-fluid w-100" alt="">
                              </div>
                              <div class="blog-content mx-4 d-flex rounded bg-light">
                                  <div class="text-dark bg-primary rounded-start">
                                      <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                          <p class="fw-bold mb-0">16</p>
                                          <p class="fw-bold mb-0">Sep</p>
                                      </div>
                                  </div>
                                  <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food from</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
    </section>
    <!-- Artikel End -->

    <!-- Team Start -->
    <section id="Team">
    <div class="container-fluid team py-6">
      <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Team</small>
            <h1 class="display-5 mb-5">We have experienced chef Team</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.1s">
                <div class="team-item rounded">
                    <img class="img-fluid rounded-top " src="/frontend/img/team-1.jpg" alt="">
                    <div class="team-content text-center py-3 bg-dark rounded-bottom">
                        <h4 class="text-primary">Henry</h4>
                        <p class="text-white mb-0">Decoration Chef</p>
                    </div>
                    <div class="team-icon d-flex flex-column justify-content-center m-4">
                        <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fas fa-share-alt"></i></a>
                        <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.3s">
                <div class="team-item rounded">
                    <img class="img-fluid rounded-top " src="/frontend/img/team-2.jpg" alt="">
                    <div class="team-content text-center py-3 bg-dark rounded-bottom">
                        <h4 class="text-primary">Jemes Born</h4>
                        <p class="text-white mb-0">Executive Chef</p>
                    </div>
                    <div class="team-icon d-flex flex-column justify-content-center m-4">
                        <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fas fa-share-alt"></i></a>
                        <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.5s">
                <div class="team-item rounded">
                    <img class="img-fluid rounded-top " src="/frontend/img/team-3.jpg" alt="">
                    <div class="team-content text-center py-3 bg-dark rounded-bottom">
                        <h4 class="text-primary">Martin Hill</h4>
                        <p class="text-white mb-0">Kitchen Porter</p>
                    </div>
                    <div class="team-icon d-flex flex-column justify-content-center m-4">
                        <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fas fa-share-alt"></i></a>
                        <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.7s">
                <div class="team-item rounded">
                    <img class="img-fluid rounded-top " src="/frontend/img/team-4.jpg" alt="">
                    <div class="team-content text-center py-3 bg-dark rounded-bottom">
                        <h4 class="text-primary">Adam Smith</h4>
                        <p class="text-white mb-0">Head Chef</p>
                    </div>
                    <div class="team-icon d-flex flex-column justify-content-center m-4">
                        <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fas fa-share-alt"></i></a>
                        <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
    </section>
    <!-- Team End -->
  
    <!-- Events Start -->
    <section id="Gallery">
        <div class="container-fluid event py-6">
          <div class="container">
              <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                  <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Latest Events</small>
                  <h1 class="display-5 mb-5">Our Social & Professional Events Gallery</h1>
              </div>
              <div class="tab-class text-center" id="Foto">
                  <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
                      <li class="nav-item p-2">
                          <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                              <span class="text-dark" style="width: 150px;">Foto</span>
                          </a>
                      </li>
                      <li class="nav-item p-2" id="Video">
                          <a class="d-flex py-2 mx-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                              <span class="text-dark" style="width: 150px;">Video</span>
                          </a>
                      </li>
                  </ul>
                  <div class="tab-content">
                      <div id="tab-1" class="tab-pane fade show p-0 active">
                          <div class="row g-4">
                              <div class="col-lg-12">
                                  <div class="row g-4">
                                      <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                                          <div class="event-img position-relative">
                                              <img class="img-fluid rounded w-100" src="/frontend/img/event-1.jpg" alt="">
                                              <div class="event-overlay d-flex flex-column p-4">
                                                  <h4 class="me-auto">Wedding</h4>
                                                  <a href="/frontend/img/event-1.jpg" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.3s">
                                          <div class="event-img position-relative">
                                              <img class="img-fluid rounded w-100" src="/frontend/img/event-2.jpg" alt="">
                                              <div class="event-overlay d-flex flex-column p-4">
                                                  <h4 class="me-auto">Corporate</h4>
                                                  <a href="/frontend/img/event-2.jpg" data-lightbox="event-2" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.5s">
                                          <div class="event-img position-relative">
                                              <img class="img-fluid rounded w-100" src="/frontend/img/event-3.jpg" alt="">
                                              <div class="event-overlay d-flex flex-column p-4">
                                                  <h4 class="me-auto">Wedding</h4>
                                                  <a href="/frontend/img/event-3.jpg" data-lightbox="event-3" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.7s">
                                          <div class="event-img position-relative">
                                              <img class="img-fluid rounded w-100" src="/frontend/img/event-4.jpg" alt="">
                                              <div class="event-overlay d-flex flex-column p-4">
                                                  <h4 class="me-auto">Buffet</h4>
                                                  <a href="/frontend/img/event-4.jpg" data-lightbox="event-4" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                                          <div class="event-img position-relative">
                                              <img class="img-fluid rounded w-100" src="/frontend/img/event-5.jpg" alt="">
                                              <div class="event-overlay d-flex flex-column p-4">
                                                  <h4 class="me-auto">Cocktail</h4>
                                                  <a href="/frontend/img/event-5.jpg" data-lightbox="event-5" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.3s">
                                          <div class="event-img position-relative">
                                              <img class="img-fluid rounded w-100" src="/frontend/img/event-6.jpg" alt="">
                                              <div class="event-overlay d-flex flex-column p-4">
                                                  <h4 class="me-auto">Wedding</h4>
                                                  <a href="/frontend/img/event-6.jpg" data-lightbox="event-6" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.5s">
                                          <div class="event-img position-relative">
                                              <img class="img-fluid rounded w-100" src="/frontend/img/event-7.jpg" alt="">
                                              <div class="event-overlay d-flex flex-column p-4">
                                                  <h4 class="me-auto">Buffet</h4>
                                                  <a href="/frontend/img/event-7.jpg" data-lightbox="event-7" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.7s">
                                          <div class="event-img position-relative">
                                              <img class="img-fluid rounded w-100" src="/frontend/img/event-8.jpg" alt="">
                                              <div class="event-overlay d-flex flex-column p-4">
                                                  <h4 class="me-auto">Corporate</h4>
                                                  <a href="/frontend/img/event-8.jpg" data-lightbox="event-17" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div id="tab-2" class="tab-pane fade show p-0">
                          <div class="row g-4">
                              <div class="col-lg-12">
                                  <div class="row g-4">
                                      <div class="col-md-6 col-lg-3">
                                          <div class="event-img position-relative">
                                              <img class="img-fluid rounded w-100" src="/frontend/img/event-1.jpg" alt="">
                                              <div class="event-overlay d-flex flex-column p-4">
                                                  <h4 class="me-auto">Wedding</h4>
                                                  <a href="/frontend/img/01.jpg" data-lightbox="event-8" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6 col-lg-3">
                                          <div class="event-img position-relative">
                                              <img class="img-fluid rounded w-100" src="/frontend/img/event-2.jpg" alt="">
                                              <div class="event-overlay d-flex flex-column p-4">
                                                  <h4 class="me-auto">Wedding</h4>
                                                  <a href="/frontend/img/01.jpg" data-lightbox="event-9" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div id="tab-3" class="tab-pane fade show p-0">
                          <div class="row g-4">
                              <div class="col-lg-12">
                                  <div class="row g-4">
                                      <div class="col-md-6 col-lg-3">
                                          <div class="event-img position-relative">
                                              <img class="img-fluid rounded w-100" src="/frontend/img/event-3.jpg" alt="">
                                              <div class="event-overlay d-flex flex-column p-4">
                                                  <h4 class="me-auto">Corporate</h4>
                                                  <a href="/frontend/img/01.jpg" data-lightbox="event-10" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6 col-lg-3">
                                          <div class="event-img position-relative">
                                              <img class="img-fluid rounded w-100" src="/frontend/img/event-4.jpg" alt="">
                                              <div class="event-overlay d-flex flex-column p-4">
                                                  <h4 class="me-auto">Corporate</h4>
                                                  <a href="/frontend/img/01.jpg" data-lightbox="event-11" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div id="tab-4" class="tab-pane fade show p-0">
                          <div class="row g-4">
                              <div class="col-lg-12">
                                  <div class="row g-4">
                                      <div class="col-md-6 col-lg-3">
                                          <div class="event-img position-relative">
                                              <img class="img-fluid rounded w-100" src="/frontend/img/event-5.jpg" alt="">
                                              <div class="event-overlay d-flex flex-column p-4">
                                                  <h4 class="me-auto">Cocktail</h4>
                                                  <a href="/frontend/img/01.jpg" data-lightbox="event-12" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6 col-lg-3">
                                          <div class="event-img position-relative">
                                              <img class="img-fluid rounded w-100" src="/frontend/img/event-6.jpg" alt="">
                                              <div class="event-overlay d-flex flex-column p-4">
                                                  <h4 class="me-auto">Cocktail</h4>
                                                  <a href="/frontend/img/01.jpg" data-lightbox="event-13" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div id="tab-5" class="tab-pane fade show p-0">
                          <div class="row g-4">
                              <div class="col-lg-12">
                                  <div class="row g-4">
                                      <div class="col-md-6 col-lg-3">
                                          <div class="event-img position-relative">
                                              <img class="img-fluid rounded w-100" src="/frontend/img/event-7.jpg" alt="">
                                              <div class="event-overlay d-flex flex-column p-4">
                                                  <h4 class="me-auto">Buffet</h4>
                                                  <a href="/frontend/img/01.jpg" data-lightbox="event-14" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6 col-lg-3">
                                          <div class="event-img position-relative">
                                              <img class="img-fluid rounded w-100" src="/frontend/img/event-8.jpg" alt="">
                                              <div class="event-overlay d-flex flex-column p-4">
                                                  <h4 class="me-auto">Buffet</h4>
                                                  <a href="/frontend/img/01.jpg" data-lightbox="event-15" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
      <!-- Events End -->

    <!-- Footer Start -->
    <div class="container-fluid footer py-6 my-6 mb-0 bg-light wow bounceInUp" data-wow-delay="0.1s">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="footer-item">
              <h1 class="text-primary">Cater<span class="text-dark">Serv</span></h1>
              <p class="lh-lg mb-4">There cursus massa at urnaaculis estieSed aliquamellus vitae ultrs condmentum leo massamollis its estiegittis miristum.</p>
              <div class="footer-icon d-flex">
                <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                <a href="#" class="btn btn-primary btn-sm-square me-2 rounded-circle"><i class="fab fa-instagram"></i></a>
                <a href="#" class="btn btn-primary btn-sm-square rounded-circle"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="footer-item">
              <h4 class="mb-4">Special Facilities</h4>
              <div class="d-flex flex-column align-items-start">
                <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>Cheese Burger</a>
                <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>Sandwich</a>
                <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>Panner Burger</a>
                <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>Special Sweets</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="footer-item">
              <h4 class="mb-4">Contact Us</h4>
              <div class="d-flex flex-column align-items-start">
                <p><i class="fa fa-map-marker-alt text-primary me-2"></i> 123 Street, New York, USA</p>
                <p><i class="fa fa-phone-alt text-primary me-2"></i> (+012) 3456 7890 123</p>
                <p><i class="fas fa-envelope text-primary me-2"></i> info@example.com</p>
                <p><i class="fa fa-clock text-primary me-2"></i> 26/7 Hours Service</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="footer-item">
              <h4 class="mb-4">Social Gallery</h4>
              <div class="row g-2">
                <div class="col-4">
                  <img src="/frontend/img/menu-01.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="" />
                </div>
                <div class="col-4">
                  <img src="/frontend/img/menu-02.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="" />
                </div>
                <div class="col-4">
                  <img src="/frontend/img/menu-03.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="" />
                </div>
                <div class="col-4">
                  <img src="/frontend/img/menu-04.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="" />
                </div>
                <div class="col-4">
                  <img src="/frontend/img/menu-05.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="" />
                </div>
                <div class="col-4">
                  <img src="/frontend/img/menu-06.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <span class="text-light"
              ><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span
            >
          </div>
          <div class="col-md-6 my-auto text-center text-md-end text-white">
            <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
            <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
            <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
            Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('/frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('/frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('/frontend/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('/frontend/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('/frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('/frontend/js/main.js') }}"></script>
  </body>
</html>