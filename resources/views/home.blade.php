<!doctype html>
<html lang="en">


<!-- Mirrored from kiswa.net/themes/star-travel/demo/demo-ltr/flight-homepage.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Feb 2023 11:10:51 GMT -->
<head>
    <title>Flight Homepage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap-4.4.1.min.css">


    <!-- Sidebar Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="cpswitch" href="css/orange.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" />

    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="css/datepicker.css">

    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="css/magnific-popup.css">
</head>


<body id="flight-homepage">

    <div class="wrapper">
        <!--====== LOADER =====-->
        <div class="loader"></div>


        <!--======== SEARCH-OVERLAY =========-->
        <div id="myOverlay" class="overlay">
            <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
            <div class="overlay-content">

                <form>
                    <div class="form-group">
                        <div class="input-group">
                            <input class="float-left" type="text" placeholder="Search.." name="search">
                            <button class="float-left" type="submit"><i class="fa fa-search"></i></button>
                        </div><!-- end input-group -->
                    </div><!-- end form-group -->
                </form>

            </div><!-- end overlay-content -->
        </div><!-- end overlay -->


        <!--============= TOP-BAR ===========-->
        <div id="top-bar" class="tb-text-white colored">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div id="info">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><span><i class="fa fa-map-marker"></i></span>29 Land St,
                                    Lorem City, CA</li>
                                <li class="list-inline-item"><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                            </ul>
                        </div><!-- end info -->
                    </div><!-- end columns -->
                    <div class="col-12 col-md-6">
                        <div id="links">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="login-1.html"><span><i
                                                class="fa fa-lock"></i></span>Login</a></li>
                                <li class="list-inline-item"><a href="registration-1.html"><span><i
                                                class="fa fa-plus"></i></span>Sign Up</a></li>
                                <li class="list-inline-item">
                                    <form>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <div class="form-group currency">
                                                    <span><i class="fa fa-angle-down"></i></span>
                                                    <select class="form-control">
                                                        <option value="">$</option>
                                                        <option value="">£</option>
                                                    </select>
                                                </div><!-- end form-group -->
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="form-group language">
                                                    <span><i class="fa fa-angle-down"></i></span>
                                                    <select class="form-control">
                                                        <option value="">EN</option>
                                                        <option value="">UR</option>
                                                        <option value="">FR</option>
                                                        <option value="">IT</option>
                                                    </select>
                                                </div><!-- end form-group -->
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                            </ul>
                        </div><!-- end links -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end top-bar -->

        <nav class="navbar navbar-expand-xl sticky-top navbar-custom main-navbar p-1" id="mynavbar-1">
            <div class="container">

                <a href="#" class="navbar-brand py-1 m-0"><span><i class="fa fa-plane"></i>STAR</span>TRAVELS</a>
                <div class="header-search d-xl-none my-auto ml-auto py-1">
                    <a href="#" class="search-button" onclick="openSearch()"><span><i
                                class="fa fa-search"></i></span></a>
                </div>
                <button class="navbar-toggler ml-2" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation" id="sidebarCollapse">
                    <i class="fa fa-navicon py-1"></i>
                </button>

                <div class="collapse navbar-collapse" id="myNavbar1">
                    <ul class="navbar-nav ml-auto navbar-search-link">
                        <li class="nav-item dropdown active">
                            <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Home<span><i
                                        class="fa fa-angle-down "></i></span></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="index.html" class="dropdown-item">Main Homepage</a></li>
                                <li class="active"><a class="dropdown-item" href="flight-homepage.html">Flight
                                        Homepage</a></li>
                                <li><a class="dropdown-item" href="hotel-homepage.html">Hotel Homepage</a></li>
                                <li><a class="dropdown-item" href="tour-homepage.html">Tour Homepage</a></li>
                                <li><a class="dropdown-item" href="cruise-homepage.html">Cruise Homepage</a></li>
                                <li><a class="dropdown-item" href="car-homepage.html">Car Homepage</a></li>
                                <li><a class="dropdown-item" href="landing-page.html">Landing Page</a></li>
                                <li><a class="dropdown-item" href="travel-agency-homepage.html">Travel Agency Page</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Flight<span><i
                                        class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="flight-homepage.html">Flight Homepage</a></li>
                                <li><a class="dropdown-item" href="flight-listing-left-sidebar.html">List View Left
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="flight-listing-right-sidebar.html">List View Right
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="flight-grid-left-sidebar.html">Grid View Left
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="flight-grid-right-sidebar.html">Grid View Right
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="flight-detail-left-sidebar.html">Detail Left
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="flight-detail-right-sidebar.html">Detail Right
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="flight-booking-left-sidebar.html">Booking Left
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="flight-booking-right-sidebar.html">Booking Right
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="flight-search-result.html">Search Result</a></li>
                                <li><a class="dropdown-item" href="flight-offers.html">Hot Offers</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Hotel<span><i
                                        class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="hotel-homepage.html">Hotel Homepage</a></li>
                                <li><a class="dropdown-item" href="hotel-listing-left-sidebar.html">List View Left
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="hotel-listing-right-sidebar.html">List View Right
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="hotel-grid-left-sidebar.html">Grid View Left
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="hotel-grid-right-sidebar.html">Grid View Right
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="hotel-detail-left-sidebar.html">Detail Left
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="hotel-detail-right-sidebar.html">Detail Right
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="hotel-booking-left-sidebar.html">Booking Left
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="hotel-booking-right-sidebar.html">Booking Right
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="hotel-search-result.html">Search Result</a></li>
                                <li><a class="dropdown-item" href="hotel-offers.html">Hot Offers</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Tour<span><i
                                        class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="tour-homepage.html">Tour Homepage</a></li>
                                <li><a class="dropdown-item" href="tour-listing-left-sidebar.html">List View Left
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="tour-listing-right-sidebar.html">List View Right
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="tour-grid-left-sidebar.html">Grid View Left
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="tour-grid-right-sidebar.html">Grid View Right
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="tour-detail-left-sidebar.html">Detail Left
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="tour-detail-right-sidebar.html">Detail Right
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="tour-booking-left-sidebar.html">Booking Left
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="tour-booking-right-sidebar.html">Booking Right
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="tour-search-result.html">Search Result</a></li>
                                <li><a class="dropdown-item" href="tour-offers.html">Hot Offers</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Cruise<span><i
                                        class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="cruise-homepage.html">Cruise Homepage</a></li>
                                <li><a class="dropdown-item" href="cruise-listing-left-sidebar.html">List View Left
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="cruise-listing-right-sidebar.html">List View Right
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="cruise-grid-left-sidebar.html">Grid View Left
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="cruise-grid-right-sidebar.html">Grid View Right
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="cruise-detail-left-sidebar.html">Detail Left
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="cruise-detail-right-sidebar.html">Detail Right
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="cruise-booking-left-sidebar.html">Booking Left
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="cruise-booking-right-sidebar.html">Booking Right
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="cruise-search-result.html">Search Result</a></li>
                                <li><a class="dropdown-item" href="cruise-offers.html">Hot Offers</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Car<span><i
                                        class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="car-homepage.html">Car Homepage</a></li>
                                <li><a class="dropdown-item" href="car-listing-left-sidebar.html">List View Left
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="car-listing-right-sidebar.html">List View Right
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="car-grid-left-sidebar.html">Grid View Left
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="car-grid-right-sidebar.html">Grid View Right
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="car-detail-left-sidebar.html">Detail Left Sidebar</a>
                                </li>
                                <li><a class="dropdown-item" href="car-detail-right-sidebar.html">Detail Right
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="car-booking-left-sidebar.html">Booking Left
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="car-booking-right-sidebar.html">Booking Right
                                        Sidebar</a></li>
                                <li><a class="dropdown-item" href="car-search-result.html">Search Result</a></li>
                                <li><a class="dropdown-item" href="car-offers.html">Hot Offers</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Features<span><i
                                        class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"><a href="#" class="dropdown-toggle dropdown-item"
                                        data-toggle="dropdown">Header</a>
                                    <ul class="dropdown-menu dropdown-sbm left-sbm">
                                        <li><a href="feature-header-style-1.html" class="dropdown-item">Header Style
                                                1</a></li>
                                        <li><a href="feature-header-style-2.html" class="dropdown-item">Header Style
                                                2</a></li>
                                        <li><a href="feature-header-style-3.html" class="dropdown-item">Header Style
                                                3</a></li>
                                        <li><a href="feature-header-style-4.html" class="dropdown-item">Header Style
                                                4</a></li>
                                        <li><a href="feature-header-style-5.html" class="dropdown-item">Header Style
                                                5</a></li>
                                        <li><a href="feature-header-style-6.html" class="dropdown-item">Header Style
                                                6</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a href="#" class="dropdown-toggle dropdown-item"
                                        data-toggle="dropdown">Page Title</a>
                                    <ul class="dropdown-menu dropdown-sbm left-sbm">
                                        <li><a href="feature-page-title-style-1.html" class="dropdown-item">Page Title
                                                Style 1</a></li>
                                        <li><a href="feature-page-title-style-2.html" class="dropdown-item">Page Title
                                                Style 2</a></li>
                                        <li><a href="feature-page-title-style-3.html" class="dropdown-item">Page Title
                                                Style 3</a></li>
                                        <li><a href="feature-page-title-style-4.html" class="dropdown-item">Page Title
                                                Style 4</a></li>
                                        <li><a href="feature-page-title-style-5.html" class="dropdown-item">Page Title
                                                Style 5</a></li>
                                        <li><a href="feature-page-title-style-6.html" class="dropdown-item">Page Title
                                                Style 6</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle dropdown-item"
                                        data-toggle="dropdown">Footer</a>
                                    <ul class="dropdown-menu dropdown-sbm left-sbm">
                                        <li><a href="feature-footer-style-1.html" class="dropdown-item">Footer Style
                                                1</a></li>
                                        <li><a href="feature-footer-style-2.html" class="dropdown-item">Footer Style
                                                2</a></li>
                                        <li><a href="feature-footer-style-3.html" class="dropdown-item">Footer Style
                                                3</a></li>
                                        <li><a href="feature-footer-style-4.html" class="dropdown-item">Footer Style
                                                4</a></li>
                                        <li><a href="feature-footer-style-5.html" class="dropdown-item">Footer Style
                                                5</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle dropdown-item"
                                        data-toggle="dropdown">Blog</a>
                                    <ul class="dropdown-menu dropdown-sbm left-sbm">
                                        <li><a href="blog-listing-left-sidebar.html" class="dropdown-item">Blog Listing
                                                Left Sidebar</a></li>
                                        <li><a href="blog-listing-right-sidebar.html" class="dropdown-item">Blog Listing
                                                Right Sidebar</a></li>
                                        <li><a href="blog-detail-left-sidebar.html" class="dropdown-item">Blog Detail
                                                Left Sidebar</a></li>
                                        <li><a href="blog-detail-right-sidebar.html" class="dropdown-item">Blog Detail
                                                Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle dropdown-item"
                                        data-toggle="dropdown">Gallery</a>
                                    <ul class="dropdown-menu dropdown-sbm left-sbm">
                                        <li><a href="gallery-masonry.html" class="dropdown-item">Gallery Masonry</a>
                                        </li>
                                        <li><a href="gallery-2-columns.html" class="dropdown-item">Gallery 2 Columns</a>
                                        </li>
                                        <li><a href="gallery-3-columns.html" class="dropdown-item">Gallery 3 Columns</a>
                                        </li>
                                        <li><a href="gallery-4-columns.html" class="dropdown-item">Gallery 4 Columns</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle dropdown-item"
                                        data-toggle="dropdown">Forms</a>
                                    <ul class="dropdown-menu dropdown-sbm left-sbm">
                                        <li><a href="login-1.html" class="dropdown-item">Login 1</a></li>
                                        <li><a href="login-2.html" class="dropdown-item">Login 2</a></li>
                                        <li><a href="registration-1.html" class="dropdown-item">Registration 1</a></li>
                                        <li><a href="registration-2.html" class="dropdown-item">Registration 2</a></li>
                                        <li><a href="forgot-password-1.html" class="dropdown-item">Forgot Password 1</a>
                                        </li>
                                        <li><a href="forgot-password-2.html" class="dropdown-item">Forgot Password 2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Pages<span><i
                                        class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu dropdown-menu-right row mega-dropdown-menu"
                                aria-labelledby="navbarDropdown">
                                <li class="dropdown-item">
                                    <div class="row">
                                        <div class="col-md">
                                            <ul class="list-unstyled">
                                                <li class="dropdown-item dropdown-header">Standard <span>Pages</span>
                                                </li>
                                                <li><a href="about-us-1.html">About Us 1</a></li>
                                                <li><a href="about-us-2.html">About Us 2</a></li>
                                                <li><a href="services-1.html">Services 1</a></li>
                                                <li><a href="services-2.html">Services 2</a></li>
                                                <li><a href="team-1.html">Our Team 1</a></li>
                                                <li><a href="team-2.html">Our Team 2</a></li>
                                                <li><a href="contact-us-1.html">Contact Us 1</a></li>
                                                <li><a href="contact-us-2.html">Contact Us 2</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md">
                                            <ul class="list-unstyled">
                                                <li class=" dropdown-header">User <span>Dashboard</span></li>
                                                <li><a href="dashboard-1.html">Dashboard 1</a></li>
                                                <li><a href="dashboard-2.html">Dashboard 2</a></li>
                                                <li><a href="user-profile.html">User Profile</a></li>
                                                <li><a href="booking.html">Booking</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="cards.html">Cards</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md">
                                            <ul class="list-unstyled">
                                                <li class=" dropdown-header">Special <span>Pages</span></li>
                                                <li><a href="error-page-1.html">404 Page 1</a></li>
                                                <li><a href="error-page-2.html">404 Page 2</a></li>
                                                <li><a href="coming-soon-1.html">Coming Soon 1</a></li>
                                                <li><a href="coming-soon-2.html">Coming Soon 2</a></li>
                                                <li><a href="faq-left-sidebar.html">FAQ Left Sidebar</a></li>
                                                <li><a href="faq-right-sidebar.html">FAQ Right Sidebar</a></li>
                                                <li><a href="testimonials-1.html">Testimonials 1</a></li>
                                                <li><a href="testimonials-2.html">Testimonials 2</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md">
                                            <ul class="list-unstyled">
                                                <li class=" dropdown-header">Extra <span>Pages</span></li>
                                                <li><a href="before-you-fly.html">Before Fly</a></li>
                                                <li><a href="travel-insurance.html">Travel Insurance</a></li>
                                                <li><a href="travel-guide.html">Travel Guide</a></li>
                                                <li><a href="holidays.html">Holidays</a></li>
                                                <li><a href="thank-you.html">Thank You</a></li>
                                                <li><a href="payment-success.html">Payment Success</a></li>
                                                <li><a href="pricing-table-1.html">Pricing Table 1</a></li>
                                                <li><a href="pricing-table-2.html">Pricing Table 2</a></li>
                                                <li><a href="popup-ad.html">Popup Ad</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-item search-btn">
                            <a href="#" class="search-button" onclick="openSearch()"><span><i
                                        class="fa fa-search"></i></span></a>
                        </li>
                    </ul>
                </div><!-- end navbar collapse -->
            </div><!-- End container -->
        </nav>
        <div class="sidenav-content">
            <!-- Sidebar  -->
            <nav id="sidebar" class="sidenav">
                <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Star Travel</h2>

                <div id="main-menu">
                    <div id="dismiss">
                        <button class="btn" id="closebtn">&times;</button>
                    </div>
                    <div class="list-group panel">
                        <a href="#home-links" class="items-list active" data-toggle="collapse" aria-expanded="false">
                            <span><i class="fa fa-home link-icon"></i></span>Home<span><i
                                    class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu text-danger" id="home-links">
                            <a class="items-list" href="index.html">Main Homepage</a>
                            <a class="items-list active" href="flight-homepage.html">Flight Homepage</a>
                            <a class="items-list" href="hotel-homepage.html">Hotel Homepage</a>
                            <a class="items-list" href="tour-homepage.html">Tour Homepage</a>
                            <a class="items-list" href="cruise-homepage.html">Cruise Homepage</a>
                            <a class="items-list" href="car-homepage.html">Car Homepage</a>
                            <a class="items-list" href="landing-page.html">Landing Page</a>
                            <a class="items-list" href="travel-agency-homepage.html">Travel Agency Page</a>
                        </div><!-- end sub-menu -->

                        <a class="items-list" href="#flights-links" data-toggle="collapse"><span><i
                                    class="fa fa-plane link-icon"></i></span>Flights<span><i
                                    class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="flights-links">
                            <a class="items-list" href="flight-homepage.html">Flight Homepage</a>
                            <a class="items-list" href="flight-listing-left-sidebar.html">List View Left Sidebar</a>
                            <a class="items-list" href="flight-listing-right-sidebar.html">List View Right Sidebar</a>
                            <a class="items-list" href="flight-grid-left-sidebar.html">Grid View Left Sidebar</a>
                            <a class="items-list" href="flight-grid-right-sidebar.html">Grid View Right Sidebar</a>
                            <a class="items-list" href="flight-detail-left-sidebar.html">Detail Left Sidebar</a>
                            <a class="items-list" href="flight-detail-right-sidebar.html">Detail Right Sidebar</a>
                            <a class="items-list" href="flight-booking-left-sidebar.html">Booking Left Sidebar</a>
                            <a class="items-list" href="flight-booking-right-sidebar.html">Booking Right Sidebar</a>
                            <a class="items-list" href="flight-search-result.html">Search Result</a>
                            <a class="items-list" href="flight-offers.html">Hot Offers</a>
                        </div><!-- end sub-menu -->

                        <a class="items-list" href="#hotels-links" data-toggle="collapse"><span><i
                                    class="fa fa-building link-icon"></i></span>Hotels<span><i
                                    class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="hotels-links">
                            <a class="items-list" href="hotel-homepage.html">Hotel Homepage</a>
                            <a class="items-list" href="hotel-listing-left-sidebar.html">List View Left Sidebar</a>
                            <a class="items-list" href="hotel-listing-right-sidebar.html">List View Right Sidebar</a>
                            <a class="items-list" href="hotel-grid-left-sidebar.html">Grid View Left Sidebar</a>
                            <a class="items-list" href="hotel-grid-right-sidebar.html">Grid View Right Sidebar</a>
                            <a class="items-list" href="hotel-detail-left-sidebar.html">Detail Left Sidebar</a>
                            <a class="items-list" href="hotel-detail-right-sidebar.html">Detail Right Sidebar</a>
                            <a class="items-list" href="hotel-booking-left-sidebar.html">Booking Left Sidebar</a>
                            <a class="items-list" href="hotel-booking-right-sidebar.html">Booking Right Sidebar</a>
                            <a class="items-list" href="hotel-search-result.html">Search Result</a>
                            <a class="items-list" href="hotel-offers.html">Hot Offers</a>
                        </div><!-- end sub-menu -->

                        <a class="items-list" href="#tours-links" data-toggle="collapse"><span><i
                                    class="fa fa-globe link-icon"></i></span>Tours<span><i
                                    class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="tours-links">
                            <a class="items-list" href="tour-homepage.html">Tour Homepage</a>
                            <a class="items-list" href="tour-listing-left-sidebar.html">List View Left Sidebar</a>
                            <a class="items-list" href="tour-listing-right-sidebar.html">List View Right Sidebar</a>
                            <a class="items-list" href="tour-grid-left-sidebar.html">Grid View Left Sidebar</a>
                            <a class="items-list" href="tour-grid-right-sidebar.html">Grid View Right Sidebar</a>
                            <a class="items-list" href="tour-detail-left-sidebar.html">Detail Left Sidebar</a>
                            <a class="items-list" href="tour-detail-right-sidebar.html">Detail Right Sidebar</a>
                            <a class="items-list" href="tour-booking-left-sidebar.html">Booking Left Sidebar</a>
                            <a class="items-list" href="tour-booking-right-sidebar.html">Booking Right Sidebar</a>
                            <a class="items-list" href="tour-search-result.html">Search Result</a>
                            <a class="items-list" href="tour-offers.html">Hot Offers</a>
                        </div><!-- end sub-menu -->

                        <a class="items-list" href="#cruise-links" data-toggle="collapse"><span><i
                                    class="fa fa-ship link-icon"></i></span>Cruise<span><i
                                    class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="cruise-links">
                            <a class="items-list" href="cruise-homepage.html">Cruise Homepage</a>
                            <a class="items-list" href="cruise-listing-left-sidebar.html">List View Left Sidebar</a>
                            <a class="items-list" href="cruise-listing-right-sidebar.html">List View Right Sidebar</a>
                            <a class="items-list" href="cruise-grid-left-sidebar.html">Grid View Left Sidebar</a>
                            <a class="items-list" href="cruise-grid-right-sidebar.html">Grid View Right Sidebar</a>
                            <a class="items-list" href="cruise-detail-left-sidebar.html">Detail Left Sidebar</a>
                            <a class="items-list" href="cruise-detail-right-sidebar.html">Detail Right Sidebar</a>
                            <a class="items-list" href="cruise-booking-left-sidebar.html">Booking Left Sidebar</a>
                            <a class="items-list" href="cruise-booking-right-sidebar.html">Booking Right Sidebar</a>
                            <a class="items-list" href="cruise-search-result.html">Search Result</a>
                            <a class="items-list" href="cruise-offers.html">Hot Offers</a>
                        </div><!-- end sub-menu -->

                        <a class="items-list" href="#cars-links" data-toggle="collapse"><span><i
                                    class="fa fa-car link-icon"></i></span>Cars<span><i
                                    class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="cars-links">
                            <a class="items-list" href="car-homepage.html">Car Homepage</a>
                            <a class="items-list" href="car-listing-left-sidebar.html">List View Left Sidebar</a>
                            <a class="items-list" href="car-listing-right-sidebar.html">List View Right Sidebar</a>
                            <a class="items-list" href="car-grid-left-sidebar.html">Grid View Left Sidebar</a>
                            <a class="items-list" href="car-grid-right-sidebar.html">Grid View Right Sidebar</a>
                            <a class="items-list" href="car-detail-left-sidebar.html">Detail Left Sidebar</a>
                            <a class="items-list" href="car-detail-right-sidebar.html">Detail Right Sidebar</a>
                            <a class="items-list" href="car-booking-left-sidebar.html">Booking Left Sidebar</a>
                            <a class="items-list" href="car-booking-right-sidebar.html">Booking Right Sidebar</a>
                            <a class="items-list" href="car-search-result.html">Search Result</a>
                            <a class="items-list" href="car-offers.html">Hot Offers</a>
                        </div><!-- end sub-menu -->

                        <a class="items-list" href="#features-links" data-toggle="collapse"><span><i
                                    class="fa fa-puzzle-piece link-icon"></i></span>Features<span><i
                                    class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu mega-sub-menu" id="features-links">
                            <a class="items-list" href="#header-style-links" data-toggle="collapse">Header<span><i
                                        class="fa fa-caret-down arrow"></i></span></a>
                            <div class="collapse sub-menu mega-sub-menu-links" id="header-style-links">
                                <a class="items-list" href="feature-header-style-1.html">Header Style 1</a>
                                <a class="items-list" href="feature-header-style-2.html">Header Style 2</a>
                                <a class="items-list" href="feature-header-style-3.html">Header Style 3</a>
                                <a class="items-list" href="feature-header-style-4.html">Header Style 4</a>
                                <a class="items-list" href="feature-header-style-5.html">Header Style 5</a>
                                <a class="items-list" href="feature-header-style-6.html">Header Style 6</a>
                            </div>
                            <a class="items-list" href="#page-title-style-links" data-toggle="collapse">Page
                                Title<span><i class="fa fa-caret-down arrow"></i></span></a>
                            <div class="collapse sub-menu mega-sub-menu-links" id="page-title-style-links">
                                <a class="items-list" href="feature-page-title-style-1.html">Page Title Style 1</a>
                                <a class="items-list" href="feature-page-title-style-2.html">Page Title Style 2</a>
                                <a class="items-list" href="feature-page-title-style-3.html">Page Title Style 3</a>
                                <a class="items-list" href="feature-page-title-style-4.html">Page Title Style 4</a>
                                <a class="items-list" href="feature-page-title-style-5.html">Page Title Style 5</a>
                                <a class="items-list" href="feature-page-title-style-6.html">Page Title Style 6</a>
                            </div>
                            <a class="items-list" href="#footer-style-links" data-toggle="collapse">Footer<span><i
                                        class="fa fa-caret-down arrow"></i></span></a>
                            <div class="collapse sub-menu mega-sub-menu-links" id="footer-style-links">
                                <a class="items-list" href="feature-footer-style-1.html">Footer Style 1</a>
                                <a class="items-list" href="feature-footer-style-2.html">Footer Style 2</a>
                                <a class="items-list" href="feature-footer-style-3.html">Footer Style 3</a>
                                <a class="items-list" href="feature-footer-style-4.html">Footer Style 4</a>
                                <a class="items-list" href="feature-footer-style-5.html">Footer Style 5</a>
                            </div>
                            <a class="items-list" href="#f-blog-links" data-toggle="collapse">Blog<span><i
                                        class="fa fa-caret-down arrow"></i></span></a>
                            <div class="collapse sub-menu mega-sub-menu-links" id="f-blog-links">
                                <a class="items-list" href="blog-listing-left-sidebar.html">Blog Listing Left
                                    Sidebar</a>
                                <a class="items-list" href="blog-listing-right-sidebar.html">Blog Listing Right
                                    Sidebar</a>
                                <a class="items-list" href="blog-detail-left-sidebar.html">Blog Detail Left Sidebar</a>
                                <a class="items-list" href="blog-detail-right-sidebar.html">Blog Detail Right
                                    Sidebar</a>
                            </div>
                            <a class="items-list" href="#f-gallery-links" data-toggle="collapse">Gallery<span><i
                                        class="fa fa-caret-down arrow"></i></span></a>
                            <div class="collapse sub-menu mega-sub-menu-links" id="f-gallery-links">
                                <a class="items-list" href="gallery-masonry.html">Gallery Masonry</a>
                                <a class="items-list" href="gallery-2-columns.html">Gallery 2 Columns</a>
                                <a class="items-list" href="gallery-3-columns.html">Gallery 3 Columns</a>
                                <a class="items-list" href="gallery-4-columns.html">Gallery 4 Columns</a>
                            </div>
                            <a class="items-list" href="#f-forms-links" data-toggle="collapse">Forms<span><i
                                        class="fa fa-caret-down arrow"></i></span></a>
                            <div class="collapse sub-menu mega-sub-menu-links" id="f-forms-links">
                                <a class="items-list" href="login-1.html">Login 1</a>
                                <a class="items-list" href="login-2.html">Login 2</a>
                                <a class="items-list" href="registration-1.html">Registration 1</a>
                                <a class="items-list" href="registration-2.html">Registration 2</a>
                                <a class="items-list" href="forgot-password-1.html">Forgot Password 1</a>
                                <a class="items-list" href="forgot-password-2.html">Forgot Password 2</a>
                            </div>
                        </div><!-- end sub-menu -->

                        <a class="items-list" href="#pages-links" data-toggle="collapse"><span><i
                                    class="fa fa-clone link-icon"></i></span>Pages<span><i
                                    class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="pages-links">
                            <div class="list-group-heading ">Standard <span>Pages</span></div>
                            <a class="items-list" href="about-us-1.html">About Us 1</a>
                            <a class="items-list" href="about-us-2.html">About Us 2</a>
                            <a class="items-list" href="services-1.html">Services 1</a>
                            <a class="items-list" href="services-2.html">Services 2</a>
                            <a class="items-list" href="team-1.html">Our Team 1</a>
                            <a class="items-list" href="team-2.html">Our Team 2</a>
                            <a class="items-list" href="contact-us-1.html">Contact Us 1</a>
                            <a class="items-list" href="contact-us-2.html">Contact Us 2</a>
                            <div class="list-group-heading ">User <span>Dashboard</span></div>
                            <a class="items-list" href="dashboard-1.html">Dashboard 1</a>
                            <a class="items-list" href="dashboard-2.html">Dashboard 2</a>
                            <a class="items-list" href="user-profile.html">User Profile</a>
                            <a class="items-list" href="booking.html">Booking</a>
                            <a class="items-list" href="wishlist.html">Wishlist</a>
                            <a class="items-list" href="cards.html">Cards</a>
                            <div class="list-group-heading ">Special <span>Pages</span></div>
                            <a class="items-list" href="error-page-1.html">404 Page 1</a>
                            <a class="items-list" href="error-page-2.html">404 Page 2</a>
                            <a class="items-list" href="coming-soon-1.html">Coming Soon 1</a>
                            <a class="items-list" href="coming-soon-2.html">Coming Soon 2</a>
                            <a class="items-list" href="faq-left-sidebar.html">FAQ Left Sidebar</a>
                            <a class="items-list" href="faq-right-sidebar.html">FAQ Right Sidebar</a>
                            <a class="items-list" href="testimonials-1.html">Testimonials 1</a>
                            <a class="items-list" href="testimonials-2.html">Testimonials 2</a>
                            <div class="list-group-heading ">Extra <span>Pages</span></div>
                            <a class="items-list" href="before-you-fly.html">Before Fly</a>
                            <a class="items-list" href="travel-insurance.html">Travel Insurance</a>
                            <a class="items-list" href="travel-guide.html">Travel Guide</a>
                            <a class="items-list" href="holidays.html">Holidays</a>
                            <a class="items-list" href="thank-you.html">Thank You</a>
                            <a class="items-list" href="payment-success.html">Payment Success</a>
                            <a class="items-list" href="pricing-table-1.html">Pricing Table 1</a>
                            <a class="items-list" href="pricing-table-2.html">Pricing Table 2</a>
                            <a class="items-list" href="popup-ad.html">Popup Ad</a>
                        </div><!-- end sub-menu -->

                    </div><!-- End list-group panel -->
                </div><!-- End main-menu -->
            </nav>
        </div><!-- End sidenav-content -->


        <!--========================= FLEX SLIDER =====================-->
        <section class="flexslider-container" id="flexslider-container-2">

            <div class="flexslider slider" id="slider-2">
                <ul class="slides">

                    <li class="item-1 back-size"
                        style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/flight-slider-1.jpg) 50% 15%; background-size:cover;    height:100%;">
                        <div class="meta">
                            <div class="container">
                                <h2>Best Flight Offers</h2>
                                <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri.
                                    Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua
                                    ullamcorper.</p>
                            </div><!-- end container -->
                        </div><!-- end meta -->
                    </li><!-- end item-1 -->

                    <li class="item-2 back-size"
                        style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/flight-slider-1.jpg) 50% 15%; background-size:cover;    height:100%;">
                        <div class=" meta">
                            <div class="container">
                                <h2>Best Flight Offers</h2>
                                <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri.
                                    Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua
                                    ullamcorper.</p>
                            </div><!-- end container -->
                        </div><!-- end meta -->
                    </li><!-- end item-2 -->

                </ul>
            </div><!-- end slider -->

            <div class="search-tabs" id="search-tabs-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <ul class="nav nav-tabs">
                                <li class="nav-item active"><a class="nav-link" href="#flights"
                                        data-toggle="tab"><span><i class="fa fa-plane"></i></span><span
                                            class="d-md-inline-flex d-none st-text">Flights</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#hotels" data-toggle="tab"><span><i
                                                class="fa fa-building"></i></span><span
                                            class="d-md-inline-flex d-none st-text">Hotels</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#tours" data-toggle="tab"><span><i
                                                class="fa fa-suitcase"></i></span><span
                                            class="d-md-inline-flex d-none st-text">Tours</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#cruise" data-toggle="tab"><span><i
                                                class="fa fa-ship"></i></span><span
                                            class="d-md-inline-flex d-none st-text">Cruise</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#cars" data-toggle="tab"><span><i
                                                class="fa fa-car"></i></span><span
                                            class="d-md-inline-flex d-none st-text">Cars</span></a></li>
                            </ul>

                            <div class="tab-content">

                                <div id="flights" class="tab-pane in active">
                                    <form>
                                        <div class="row">

                                            <div class="col-12 col-md-12 col-lg-5 col-xl-4">
                                                <div class="row">

                                                    <div class="col-12 col-md-6 col-lg-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control" placeholder="From">
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    <div class="col-12 col-md-6 col-lg-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control" placeholder="To">
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                </div><!-- end row -->
                                            </div><!-- end columns -->

                                            <div class="col-12 col-md-12 col-lg-5 col-xl-4">
                                                <div class="row">

                                                    <div class="col-6 col-md-6 col-lg-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control dpd1"
                                                                placeholder="Check In">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    <div class="col-6 col-md-6 col-lg-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control dpd2"
                                                                placeholder="Check Out">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                </div><!-- end row -->
                                            </div><!-- end columns -->

                                            <div class="col-12 col-md-12 col-lg-2 col-xl-2">
                                                <div class="form-group right-icon">
                                                    <select class="form-control">
                                                        <option selected>Adults</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-12 col-md-12 col-lg-12 col-xl-2 search-btn">
                                                <button class="btn btn-orange">Search</button>
                                            </div><!-- end columns -->

                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end flights -->

                                <div id="hotels" class="tab-pane">
                                    <form>
                                        <div class="row">

                                            <div class="col-12 col-md-12 col-lg-6 col-xl-5">
                                                <div class="row">

                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control dpd1"
                                                                placeholder="Check In">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control dpd2"
                                                                placeholder="Check Out">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                </div><!-- end row -->
                                            </div><!-- end columns -->

                                            <div class="col-12 col-md-12 col-lg-6 col-xl-5">
                                                <div class="row">

                                                    <div class="col-12 col-md-12 col-lg-4">
                                                        <div class="form-group right-icon">
                                                            <select class="form-control">
                                                                <option selected>Rooms</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    <div class="col-6 col-md-6 col-lg-4">
                                                        <div class="form-group right-icon">
                                                            <select class="form-control">
                                                                <option selected>Adults</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    <div class="col-6 col-md-6 col-lg-4">
                                                        <div class="form-group right-icon">
                                                            <select class="form-control">
                                                                <option selected>Kids</option>
                                                                <option>0</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                </div><!-- end row -->
                                            </div><!-- end columns -->

                                            <div class="col-12 col-md-12 col-lg-12 col-xl-2 search-btn">
                                                <button class="btn btn-orange">Search</button>
                                            </div><!-- end columns -->

                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end hotels -->

                                <div id="tours" class="tab-pane">
                                    <form>
                                        <div class="row">

                                            <div class="col-12 col-md-12 col-lg-3 col-xl-4">
                                                <div class="form-group left-icon">
                                                    <input type="text" class="form-control"
                                                        placeholder="City,Country" />
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-12 col-md-12 col-lg-3 col-xl-3">
                                                <div class="form-group right-icon">
                                                    <select class="form-control">
                                                        <option selected>Month</option>
                                                        <option>January</option>
                                                        <option>February</option>
                                                        <option>March</option>
                                                        <option>April</option>
                                                        <option>May</option>
                                                        <option>June</option>
                                                        <option>July</option>
                                                        <option>August</option>
                                                        <option>September</option>
                                                        <option>October</option>
                                                        <option>November</option>
                                                        <option>December</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-12 col-md-12 col-lg-6 col-xl-3">
                                                <div class="row">

                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group right-icon">
                                                            <select class="form-control">
                                                                <option selected>Adults</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group right-icon">
                                                            <select class="form-control">
                                                                <option selected>Kids</option>
                                                                <option>0</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                </div><!-- end row -->
                                            </div><!-- end columns -->

                                            <div class="col-12 col-md-12 col-lg-12 col-xl-2 search-btn">
                                                <button class="btn btn-orange">Search</button>
                                            </div><!-- end columns -->

                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end tours -->

                                <div id="cruise" class="tab-pane">
                                    <form>
                                        <div class="row">

                                            <div class="col-12 col-md-12 col-lg-5 col-xl-4">
                                                <div class="row">

                                                    <div class="col-12 col-md-6 col-lg-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control" placeholder="From">
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    <div class="col-12 col-md-6 col-lg-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control" placeholder="To">
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                </div><!-- end row -->
                                            </div><!-- end columns -->

                                            <div class="col-12 col-md-12 col-lg-5 col-xl-4">
                                                <div class="row">

                                                    <div class="col-6 col-md-6 col-lg-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control dpd1"
                                                                placeholder="Check In">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    <div class="col-6 col-md-6 col-lg-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control dpd2"
                                                                placeholder="Check Out">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                </div><!-- end row -->
                                            </div><!-- end columns -->

                                            <div class="col-12 col-md-12 col-lg-2 col-xl-2">
                                                <div class="form-group right-icon">
                                                    <select class="form-control">
                                                        <option selected>Adults</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-12 col-md-12 col-lg-12 col-xl-2 search-btn">
                                                <button class="btn btn-orange">Search</button>
                                            </div><!-- end columns -->

                                        </div><!-- end columns -->
                                    </form>
                                </div><!-- end cruises -->

                                <div id="cars" class="tab-pane">
                                    <form>
                                        <div class="row">

                                            <div class="col-12 col-md-12 col-lg-7 col-xl-6">
                                                <div class="row">

                                                    <div class="col-md-6 col-lg-4">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control"
                                                                placeholder="Country" />
                                                            <i class="fa fa-globe"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    <div class="col-md-6 col-lg-4">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control"
                                                                placeholder="City" />
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    <div class="col-md-12 col-lg-4">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control"
                                                                placeholder="Location" />
                                                            <i class="fa fa-street-view"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                </div><!-- end row -->
                                            </div><!-- end columns -->

                                            <div class="col-12 col-md-12 col-lg-5 col-xl-4">
                                                <div class="row">

                                                    <div class="col-6 col-md-6 col-lg-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control dpd1"
                                                                placeholder="Check In">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                    <div class="col-6 col-md-6 col-lg-6">
                                                        <div class="form-group left-icon">
                                                            <input type="text" class="form-control dpd2"
                                                                placeholder="Check Out">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div><!-- end columns -->

                                                </div><!-- end row -->
                                            </div><!-- end columns -->

                                            <div class="col-12 col-md-12 col-lg-12 col-xl-2 search-btn">
                                                <button class="btn btn-orange">Search</button>
                                            </div><!-- end columns -->

                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end cars -->

                            </div><!-- end tab-content -->

                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end search-tabs -->

        </section><!-- end flexslider-container -->


        <!--================= FLIGHT OFFERS =============-->
        <section id="flight-offers" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading">
                            <h2>Flight Offers</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->

                        <div class="row">

                            <div class="col-md-6 col-lg-4">
                                <div class="main-block flight-block">
                                    <a href="flight-detail-right-sidebar.html">
                                        <div class="flight-img">
                                            <img src="images/flight-1.jpg" class="img-fluid" alt="flight-img" />
                                        </div><!-- end flight-img -->

                                        <div class="flight-info">
                                            <div class="flight-title">
                                                <h3><span class="flight-destination">Spain</span>|<span
                                                        class="flight-type">OneWay Flight</span></h3>
                                            </div><!-- end flight-title -->

                                            <div class=" flight-timing">
                                                <ul class="list-unstyled">
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                            02-2017 </span>(8:40 PM)</li>
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                            03-2017 </span>(8:40 PM)</li>
                                                </ul>
                                            </div><!-- end flight-timing -->

                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="list-inline-item price">$568.00<span
                                                        class="pkg">Avg/Person</span></li>
                                                <li class="list-inline-item rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end flight-info -->
                                    </a>
                                </div><!-- end flight-block -->
                            </div><!-- end columns -->

                            <div class="col-md-6 col-lg-4">
                                <div class="main-block flight-block">
                                    <a href="flight-detail-right-sidebar.html">
                                        <div class="flight-img">
                                            <img src="images/flight-2.jpg" class="img-fluid" alt="flight-img" />
                                        </div><!-- end flight-img -->

                                        <div class="flight-info">
                                            <div class="flight-title">
                                                <h3><span class="flight-destination">Spain</span>|<span
                                                        class="flight-type">OneWay Flight</span></h3>
                                            </div><!-- end flight-title -->

                                            <div class=" flight-timing">
                                                <ul class="list-unstyled">
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                            02-2017 </span>(8:40 PM)</li>
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                            03-2017 </span>(8:40 PM)</li>
                                                </ul>
                                            </div><!-- end flight-timing -->

                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="list-inline-item price">$568.00<span
                                                        class="pkg">Avg/Person</span></li>
                                                <li class="list-inline-item rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end flight-info -->
                                    </a>
                                </div><!-- end flight-block -->
                            </div><!-- end columns -->

                            <div class="col-md-6 col-lg-4">
                                <div class="main-block flight-block">
                                    <a href="flight-detail-right-sidebar.html">
                                        <div class="flight-img">
                                            <img src="images/flight-3.jpg" class="img-fluid" alt="flight-img" />
                                        </div><!-- end flight-img -->

                                        <div class="flight-info">
                                            <div class="flight-title">
                                                <h3><span class="flight-destination">Spain</span>|<span
                                                        class="flight-type">OneWay Flight</span></h3>
                                            </div><!-- end flight-title -->

                                            <div class=" flight-timing">
                                                <ul class="list-unstyled">
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                            02-2017 </span>(8:40 PM)</li>
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                            03-2017 </span>(8:40 PM)</li>
                                                </ul>
                                            </div><!-- end flight-timing -->

                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="list-inline-item price">$568.00<span
                                                        class="pkg">Avg/Person</span></li>
                                                <li class="list-inline-item rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end flight-info -->
                                    </a>
                                </div><!-- end flight-block -->
                            </div><!-- end columns -->

                            <div class="col-md-6 col-lg-4">
                                <div class="main-block flight-block">
                                    <a href="flight-detail-right-sidebar.html">
                                        <div class="flight-img">
                                            <img src="images/flight-4.jpg" class="img-fluid" alt="flight-img" />
                                        </div><!-- end flight-img -->

                                        <div class="flight-info">
                                            <div class="flight-title">
                                                <h3><span class="flight-destination">Spain</span>|<span
                                                        class="flight-type">OneWay Flight</span></h3>
                                            </div><!-- end flight-title -->

                                            <div class=" flight-timing">
                                                <ul class="list-unstyled">
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                            02-2017 </span>(8:40 PM)</li>
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                            03-2017 </span>(8:40 PM)</li>
                                                </ul>
                                            </div><!-- end flight-timing -->

                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="list-inline-item price">$568.00<span
                                                        class="pkg">Avg/Person</span></li>
                                                <li class="list-inline-item rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end flight-info -->
                                    </a>
                                </div><!-- end flight-block -->
                            </div><!-- end columns -->

                            <div class="col-md-6 col-lg-4">
                                <div class="main-block flight-block">
                                    <a href="flight-detail-right-sidebar.html">
                                        <div class="flight-img">
                                            <img src="images/flight-5.jpg" class="img-fluid" alt="flight-img" />
                                        </div><!-- end flight-img -->

                                        <div class="flight-info">
                                            <div class="flight-title">
                                                <h3><span class="flight-destination">Spain</span>|<span
                                                        class="flight-type">OneWay Flight</span></h3>
                                            </div><!-- end flight-title -->

                                            <div class=" flight-timing">
                                                <ul class="list-unstyled">
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                            02-2017 </span>(8:40 PM)</li>
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                            03-2017 </span>(8:40 PM)</li>
                                                </ul>
                                            </div><!-- end flight-timing -->

                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="list-inline-item price">$568.00<span
                                                        class="pkg">Avg/Person</span></li>
                                                <li class="list-inline-item rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end flight-info -->
                                    </a>
                                </div><!-- end flight-block -->
                            </div><!-- end columns -->

                            <div class="col-md-6 col-lg-4">
                                <div class="main-block flight-block">
                                    <a href="flight-detail-right-sidebar.html">
                                        <div class="flight-img">
                                            <img src="images/flight-6.jpg" class="img-fluid" alt="flight-img" />
                                        </div><!-- end flight-img -->

                                        <div class="flight-info">
                                            <div class="flight-title">
                                                <h3><span class="flight-destination">Spain</span>|<span
                                                        class="flight-type">OneWay Flight</span></h3>
                                            </div><!-- end flight-title -->

                                            <div class=" flight-timing">
                                                <ul class="list-unstyled">
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                            02-2017 </span>(8:40 PM)</li>
                                                    <li><span><i class="fa fa-plane"></i></span><span class="date">Aug,
                                                            03-2017 </span>(8:40 PM)</li>
                                                </ul>
                                            </div><!-- end flight-timing -->

                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="list-inline-item price">$568.00<span
                                                        class="pkg">Avg/Person</span></li>
                                                <li class="list-inline-item rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end flight-info -->
                                    </a>
                                </div><!-- end flight-block -->
                            </div><!-- end columns -->

                        </div><!-- end row -->

                        <div class="view-all text-center">
                            <a href="flight-grid-right-sidebar.html" class="btn btn-orange">View All</a>
                        </div><!-- end view-all -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end flight-offers -->


        <!--============== TOP DESTINATIONS ============-->
        <section id="destinations" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading">
                            <h2>Top Destinations</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->

                        <div class="row">

                            <div class="col-md-6 col-lg-6">
                                <div class="main-block destination-block">
                                    <div class="row">

                                        <div class="col-md-12 col-lg-6 col-lg-pull-6 no-pd-r">
                                            <div class="destination-info">
                                                <div class="destination-title">
                                                    <a href="tour-detail-right-sidebar.html">Blue Beach</a>
                                                    <p class="country">Dubai</p>
                                                    <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy
                                                        text of the printing.</p>
                                                    <span class="destination-price">$899/Person</span>
                                                    <a href="tour-detail-right-sidebar.html" class="btn btn-orange">Book
                                                        Now</a>
                                                </div><!-- end destination-title -->
                                            </div><!-- end destination-info -->
                                        </div><!-- end columns -->

                                        <div class="col-md-12 col-lg-6 col-lg-push-6 no-pd-l">
                                            <div class="main-img destination-img">
                                                <a href="tour-detail-right-sidebar.html">
                                                    <img src="images/destination-1.jpg" class="img-fluid"
                                                        alt="destination-img" />
                                                </a>
                                            </div><!-- end destination-img -->
                                        </div><!-- end columns -->

                                    </div><!-- end row -->
                                </div><!-- end destination-block -->
                            </div><!-- end columns -->

                            <div class="col-md-6 col-lg-6">
                                <div class="main-block destination-block">
                                    <div class="row">

                                        <div class="col-md-12 col-lg-6 col-lg-pull-6 no-pd-r">
                                            <div class="destination-info">
                                                <div class="destination-title">
                                                    <a href="tour-detail-right-sidebar.html">Sydney Tour</a>
                                                    <p class="country">Australia</p>
                                                    <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy
                                                        text of the printing.</p>
                                                    <span class="destination-price">$899/Person</span>
                                                    <a href="tour-detail-right-sidebar.html" class="btn btn-orange">Book
                                                        Now</a>
                                                </div><!-- end destination-title -->
                                            </div><!-- end destination-info -->
                                        </div><!-- end columns -->

                                        <div class="col-md-12 col-lg-6 col-lg-push-6 no-pd-l">
                                            <div class="main-img destination-img">
                                                <a href="tour-detail-right-sidebar.html">
                                                    <img src="images/destination-2.jpg" class="img-fluid"
                                                        alt="destination-img" />
                                                </a>
                                            </div><!-- end destination-img -->
                                        </div><!-- end columns -->

                                    </div><!-- end row -->
                                </div><!-- end destination-block -->
                            </div><!-- end columns -->

                            <div class="col-md-6 col-lg-6">
                                <div class="main-block destination-block">
                                    <div class="row">

                                        <div class="col-md-12 col-lg-6 col-lg-pull-6 no-pd-r">
                                            <div class="destination-info">
                                                <div class="destination-title">
                                                    <a href="tour-detail-right-sidebar.html">Wild Forest</a>
                                                    <p class="country">Africa</p>
                                                    <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy
                                                        text of the printing.</p>
                                                    <span class="destination-price">$899/Person</span>
                                                    <a href="tour-detail-right-sidebar.html" class="btn btn-orange">Book
                                                        Now</a>
                                                </div><!-- end destination-title -->
                                            </div><!-- end destination-info -->
                                        </div><!-- end columns -->

                                        <div class="col-md-12 col-lg-6 col-lg-push-6 no-pd-l">
                                            <div class="main-img destination-img">
                                                <a href="tour-detail-right-sidebar.html">
                                                    <img src="images/destination-3.jpg" class="img-fluid"
                                                        alt="destination-img" />
                                                </a>
                                            </div><!-- end destination-img -->
                                        </div><!-- end columns -->

                                    </div><!-- end row -->
                                </div><!-- end destination-block -->
                            </div><!-- end columns -->

                            <div class="col-md-6 col-lg-6">
                                <div class="main-block destination-block">
                                    <div class="row">

                                        <div class="col-md-12 col-lg-6 col-lg-pull-6 no-pd-r">
                                            <div class="destination-info">
                                                <div class="destination-title">
                                                    <a href="tour-detail-right-sidebar.html">Beautiful Paris</a>
                                                    <p class="country">France</p>
                                                    <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy
                                                        text of the printing.</p>
                                                    <span class="destination-price">$899/Person</span>
                                                    <a href="tour-detail-right-sidebar.html" class="btn btn-orange">Book
                                                        Now</a>
                                                </div><!-- end destination-title -->
                                            </div><!-- end destination-info -->
                                        </div><!-- end columns -->

                                        <div class="col-md-12 col-lg-6 col-lg-push-6 no-pd-l">
                                            <div class="main-img destination-img">
                                                <a href="tour-detail-right-sidebar.html">
                                                    <img src="images/destination-4.jpg" class="img-fluid"
                                                        alt="destination-img" />
                                                </a>
                                            </div><!-- end destination-img -->
                                        </div><!-- end columns -->

                                    </div><!-- end row -->
                                </div><!-- end destination-block -->
                            </div><!-- end columns -->

                        </div><!-- end row -->

                        <div class="view-all text-center">
                            <a href="tour-listing-right-sidebar.html" class="btn btn-g-border">View All</a>
                        </div><!-- end view-all -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end destinations -->


        <!--========================= BEST FEATURES =======================-->
        <section id="best-features" class="banner-padding lightgrey-features">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-dollar"></i></span>
                            <h3>Best Price Guarantee</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam
                                delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                    </div><!-- end columns -->

                    <div class="col-md-6 col-lg-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-lock"></i></span>
                            <h3>Safe and Secure</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam
                                delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                    </div><!-- end columns -->

                    <div class="col-md-6 col-lg-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-thumbs-up"></i></span>
                            <h3>Best Travel Agents</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam
                                delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                    </div><!-- end columns -->

                    <div class="col-md-6 col-lg-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-bars"></i></span>
                            <h3>Travel Guidelines</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam
                                delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end best-features -->


        <!--=============== TESTIMONIALS ===============-->
        <section id="testimonials" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading white-heading">
                            <h2>Testimonials</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->

                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <div class="carousel-inner text-center">

                                <div class="carousel-item active">
                                    <blockquote>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius
                                        prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an
                                        eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque
                                        fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam
                                        mnesarchum at, pro an eros perpetua ullamcorper.</blockquote>
                                    <div class="rating">
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star lightgrey"></i></span>
                                    </div><!-- end rating -->

                                    <small>Jhon Smith</small>
                                </div><!-- end item -->

                                <div class="carousel-item">
                                    <blockquote>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius
                                        prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an
                                        eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque
                                        fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam
                                        mnesarchum at, pro an eros perpetua ullamcorper.</blockquote>
                                    <div class="rating">
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star lightgrey"></i></span>
                                    </div><!-- end rating -->

                                    <small>Jhon Smith</small>
                                </div><!-- end item -->

                                <div class="carousel-item">
                                    <blockquote>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius
                                        prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an
                                        eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque
                                        fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam
                                        mnesarchum at, pro an eros perpetua ullamcorper.</blockquote>
                                    <div class="rating">
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star lightgrey"></i></span>
                                    </div><!-- end rating -->

                                    <small>Jhon Smith</small>
                                </div><!-- end item -->

                            </div><!-- end carousel-inner -->

                            <ol class="carousel-indicators mx-auto">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active"><img
                                        src="images/client-1.jpg" class="img-fluid d-block" alt="client-img">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="1"><img src="images/client-2.jpg"
                                        class="img-fluid d-block" alt="client-img">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="2"><img src="images/client-3.jpg"
                                        class="img-fluid d-block" alt="client-img">
                                </li>
                            </ol>

                        </div><!-- end quote-carousel -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end testimonials -->


        <!--============== HIGHLIGHTS =============-->
        <section id="highlights" class="highlights-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="row">

                            <div class="col-12 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-plane"></i></span>
                                    </div><!-- end h-icon -->

                                    <div class="h-text">
                                        <span class="numbers">2496</span>
                                        <p>Outstanding Tours</p>
                                    </div><!-- end h-text -->
                                </div><!-- end highlight-box -->
                            </div><!-- end columns -->

                            <div class="col-12 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-ship"></i></span>
                                    </div><!-- end h-icon -->

                                    <div class="h-text cruise">
                                        <span class="numbers">1906</span>
                                        <p>Worldwide Cruise</p>
                                    </div><!-- end h-text -->
                                </div><!-- end highlight-box -->
                            </div><!-- end columns -->

                            <div class="col-12 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-taxi"></i></span>
                                    </div><!-- end h-icon -->

                                    <div class="h-text taxi">
                                        <span class="numbers">2033</span>
                                        <p>Luxury Car Booking</p>
                                    </div><!-- end h-text -->
                                </div><!-- end highlight-box -->
                            </div><!-- end columns -->

                        </div><!-- end row -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end highlights -->


        <!--============ NEWSLETTER-2 =============-->
        <section id="newsletter-2" class="newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-5 col-xl-5">
                        <h2>Subscribe Our Newsletter</h2>
                    </div>

                    <div class="col-12 col-md-12 col-lg-7 col-xl-7">
                        <form>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" class="form-control input-lg"
                                        placeholder="Enter your email address" required />
                                    <span class="input-group-btn"><button class="btn btn-lg"><i
                                                class="fa fa-envelope"></i></button></span>
                                </div>
                            </div>
                        </form>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end newsletter-2 -->


        <!--======================= FOOTER =======================-->
        <section id="footer" class="ftr-heading-w ftr-heading-mgn-2">

            <div id="footer-top" class="banner-padding ftr-top-grey">
                <div class="container">
                    <div class="row">

                        <div class="col-12 col-md-12 col-lg-5 col-xl-5 footer-widget ftr-about ftr-our-company">
                            <h3 class="footer-heading">OUR COMPANY</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                                quis nostrud exerci tation ullamcorper suscipit.</p>
                            <ul class="social-links list-inline list-unstyled">
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-facebook"></i></span></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-twitter"></i></span></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><span><i
                                                class="fa fa-google-plus"></i></span></a></li>
                                <li class="list-inline-item"><a href="#"><span><i
                                                class="fa fa-pinterest-p"></i></span></a></li>
                                <li class="list-inline-item"><a href="#"><span><i
                                                class="fa fa-instagram"></i></span></a></li>
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-linkedin"></i></span></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><span><i
                                                class="fa fa-youtube-play"></i></span></a></li>
                            </ul>
                        </div><!-- end columns -->

                        <div class="col-12 col-md-12 col-lg-7 col-xl-7 footer-widget ftr-in-touch">
                            <h3 class="footer-heading">Get in Touch</h3>
                            <form>
                                <div class="row">
                                    <div class="col-md-6 col-lg-5 col-xl-5 slide-right-vis">

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name" required />
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email" required />
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Subject" required />
                                        </div>

                                    </div><!-- end columns -->

                                    <div class="col-md-6 col-lg-7 col-xl-7 slide-left-vis">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Your Message"></textarea>
                                        </div>
                                    </div><!-- end columns -->

                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-orange">Send</button>
                                    </div><!-- end butn -->
                                </div><!-- end row -->
                            </form>
                        </div><!-- end columns -->

                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-top -->

            <div id="footer-bottom" class="ftr-bot-black">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6" id="copyright">
                            <p>© 2017 <a href="#">StarTravel</a>. All rights reserved.</p>
                        </div><!-- end columns -->

                        <div class="col-12 col-md-6 col-lg-6 col-xl-6" id="terms">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="#">Terms & Condition</a></li>
                                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-bottom -->

        </section><!-- end footer -->
    </div>


    <!-- Page Scripts Starts -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/bootstrap-4.4.1.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-flex.js"></script>
    <script src="js/custom-date-picker.js"></script>
    <!-- Page Scripts Ends -->

</body>


<!-- Mirrored from kiswa.net/themes/star-travel/demo/demo-ltr/flight-homepage.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Feb 2023 11:11:38 GMT -->
</html>