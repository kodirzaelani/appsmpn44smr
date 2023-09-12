<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('') }}assets/images/favicon.ico">

    <title>SMPN 44 Samarinda</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('') }}assets/frontend/css/vendors_css.css">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('') }}assets/frontend/css/style.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/frontend/css/skin_color.css">
    @stack('styles')
    @livewireStyles

</head>

<body class="theme-primary">

    <!-- The social media icon bar -->
    <div class="icon-bar-sticky">
        <a href="#" class="waves-effect waves-light btn btn-social-icon btn-facebook"><i
                class="fa fa-facebook"></i></a>
        <a href="#" class="waves-effect waves-light btn btn-social-icon btn-twitter"><i
                class="fa fa-twitter"></i></a>
        <a href="#" class="waves-effect waves-light btn btn-social-icon btn-linkedin"><i
                class="fa fa-linkedin"></i></a>
        <a href="#" class="waves-effect waves-light btn btn-social-icon btn-youtube"><i
                class="fa fa-youtube-play"></i></a>
    </div>
    <header class="top-bar text-dark">
        <div class="topbar">

            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6 col-12 d-lg-block d-none">
                        <div class="topbar-social text-center text-md-start topbar-left">
                            <ul class="list-inline d-md-flex d-inline-block">
                                <li class="ms-10 pe-10"><a href="#"><i
                                            class="text-dark fa fa-question-circle"></i> Ask a Question</a></li>
                                <li class="ms-10 pe-10"><a href="#"><i class="text-dark fa fa-envelope"></i>
                                        info@EduAdmin.com</a></li>
                                <li class="ms-10 pe-10"><a href="#"><i class="text-dark fa fa-phone"></i> +(1)
                                        123-878-1649</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 xs-mb-10">
                        <div class="topbar-call text-center text-lg-end topbar-right">
                            <ul class="list-inline d-lg-flex justify-content-end">
                                <li class="me-10 ps-10 lng-drop">
                                    <select class="header-lang-bx selectpicker">
                                        <option>USD</option>
                                        <option>EUR</option>
                                        <option>GBP</option>
                                        <option>INR</option>
                                    </select>
                                </li>
                                <li class="me-10 ps-10 lng-drop">
                                    <select class="header-lang-bx selectpicker">
                                        <option data-icon="flag-icon flag-icon-us">Eng USA</option>
                                        <option data-icon="flag-icon flag-icon-gb">Eng UK</option>
                                    </select>
                                </li>
                                <li class="me-10 ps-10"><a href="#"><i
                                            class="text-dark fa fa-user d-md-inline-block d-none"></i> Register</a></li>
                                <li class="me-10 ps-10"><a href="#"><i
                                            class="text-dark fa fa-sign-in d-md-inline-block d-none"></i> Login</a></li>
                                <li class="me-10 ps-10"><a href="#"><i
                                            class="text-dark fa fa-dashboard d-md-inline-block d-none"></i> My
                                        Account</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav hidden class="nav-dark nav-transparent">
            <div class="nav-header">
                <a href="index.html" class="brand">
                    <img src="{{ asset('') }}assets/images/logo-light-text2.png" alt="" />
                </a>
                <button class="toggle-bar">
                    <span class="ti-menu"></span>
                </button>
            </div>
            <ul class="menu">
                <li class="dropdown">
                    <a href="#">Home</a>
                    <ul class="dropdown-menu">
                        <li><a href="index.html">Home 1</a></li>
                        <li><a href="index2.html">Home 2</a></li>
                        <li><a href="index3.html">Home 3</a></li>
                        <li><a href="index4.html">Home 4</a></li>
                        <li><a href="index5.html">Home 5</a></li>
                        <li><a href="index6.html">Home 6</a></li>
                    </ul>
                </li>
                <li>
                    <a href="about.html">About</a>
                </li>
                <li class="dropdown">
                    <a href="#">Courses</a>
                    <ul class="dropdown-menu">
                        <li><a href="courses_list.html">Courses List</a></li>
                        <li><a href="courses_list_right_sidebar.html">Courses List Right Sidebar</a></li>
                        <li><a href="courses_list-map.html">Courses with Map</a></li>
                        <li><a href="courses_categories.html">Courses Categories</a></li>
                        <li><a href="courses_details.html">Courses Details</a></li>
                        <li><a href="courses_details_right_sidebar.html">Courses Details right sidebar</a></li>
                    </ul>
                </li>
                <li class="megamenu">
                    <a href="#">Pages</a>
                    <div class="megamenu-content">
                        <div class="row">
                            <div class="col-lg-3 col-12">
                                <ul class="list-group">
                                    <li>
                                        <h4 class="menu-title">User Pages</h4>
                                    </li>
                                    <li><a href="faqs.html"><i class="ti-arrow-circle-right me-10"></i>FAQs</a></li>
                                    <li><a href="inovice.html"><i class="ti-arrow-circle-right me-10"></i>Invoice</a>
                                    </li>
                                    <li><a href="membership.html"><i
                                                class="ti-arrow-circle-right me-10"></i>Membership</a></li>
                                    <li><a href="mydashboard.html"><i class="ti-arrow-circle-right me-10"></i>My
                                            Dashboard</a></li>
                                    <li><a href="staff.html"><i class="ti-arrow-circle-right me-10"></i>Staff</a></li>
                                    <li><a href="testimonial.html"><i
                                                class="ti-arrow-circle-right me-10"></i>Testimonial</a></li>
                                    <li><a href="typography.html"><i
                                                class="ti-arrow-circle-right me-10"></i>Typography</a></li>
                                    <li><a href="user_list.html"><i class="ti-arrow-circle-right me-10"></i>User
                                            List</a></li>
                                    <li><a href="userprofile.html"><i class="ti-arrow-circle-right me-10"></i>User
                                            Profile</a></li>
                                    <li><a href="about.html"><i class="ti-arrow-circle-right me-10"></i>About</a></li>
                                    <li><a href="contact_us.html"><i
                                                class="ti-arrow-circle-right me-10"></i>Contact</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-12">
                                <ul class="list-group">
                                    <li>
                                        <h4 class="menu-title">Widgets</h4>
                                    </li>
                                    <li><a href="widgets.html"><i class="ti-arrow-circle-right me-10"></i>Widgets</a>
                                    </li>
                                    <li><a href="courses_list.html"><i class="ti-arrow-circle-right me-10"></i>Courses
                                            List</a></li>
                                    <li><a href="courses_details.html"><i
                                                class="ti-arrow-circle-right me-10"></i>Courses Details</a></li>
                                    <li><a href="register.html"><i
                                                class="ti-arrow-circle-right me-10"></i>Register</a></li>
                                    <li><a href="login.html"><i class="ti-arrow-circle-right me-10"></i>Login</a></li>
                                    <li><a href="register_login.html"><i
                                                class="ti-arrow-circle-right me-10"></i>Register & Login</a></li>
                                    <li><a href="forgot_pass.html"><i class="ti-arrow-circle-right me-10"></i>Forgot
                                            Password</a></li>
                                    <li><a href="lockscreen.html"><i class="ti-arrow-circle-right me-10"></i>Lock
                                            Screen</a></li>
                                    <li><a href="maintenance.html"><i class="ti-arrow-circle-right me-10"></i>Under
                                            Constructions</a></li>
                                    <li><a href="404.html"><i class="ti-arrow-circle-right me-10"></i>404</a></li>
                                    <li><a href="500.html"><i class="ti-arrow-circle-right me-10"></i>500</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-12">
                                <ul class="list-group">
                                    <li>
                                        <h4 class="menu-title">Features</h4>
                                    </li>
                                    <li><a href="header_default.html"><i
                                                class="ti-arrow-circle-right me-10"></i>Header One</a></li>
                                    <li><a href="header_style2.html"><i class="ti-arrow-circle-right me-10"></i>Header
                                            Two</a></li>
                                    <li><a href="header_style3.html"><i class="ti-arrow-circle-right me-10"></i>Header
                                            Three</a></li>
                                    <li><a href="header_style4.html"><i class="ti-arrow-circle-right me-10"></i>Header
                                            Four</a></li>
                                    <li><a href="header_style5.html"><i class="ti-arrow-circle-right me-10"></i>Header
                                            Five</a></li>
                                    <li><a href="footer_style1.html"><i class="ti-arrow-circle-right me-10"></i>Footer
                                            One</a></li>
                                    <li><a href="footer_style2.html"><i class="ti-arrow-circle-right me-10"></i>Footer
                                            Two</a></li>
                                    <li><a href="footer_style3.html"><i class="ti-arrow-circle-right me-10"></i>Footer
                                            Three</a></li>
                                    <li><a href="footer_style4.html"><i class="ti-arrow-circle-right me-10"></i>Footer
                                            Four</a></li>
                                    <li><a href="footer_style5.html"><i class="ti-arrow-circle-right me-10"></i>Footer
                                            Five</a></li>
                                    <li><a href="footer_style6.html"><i class="ti-arrow-circle-right me-10"></i>Footer
                                            Six</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-12 d-none d-lg-block">
                                <img src="../images/front-end-img/adv.jpg" class="img-fluid" alt="" />
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#">Blog</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown">
                            <a href="#">Grid Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog_grid_2.html">Grid 2 colunm</a></li>
                                <li><a href="blog_grid_3.html">Grid 3 colunm</a></li>
                                <li><a href="blog_grid_left_sidebar.html">blog left sidebar</a></li>
                                <li><a href="blog_grid_right_sidebar.html">blog right sidebar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">List Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog_list.html">Blog List</a></li>
                                <li><a href="blog_list_left_sidebar.html">Blog List Left Sidebar</a></li>
                                <li><a href="blog_list_right_sidebar.html">Blog List right Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">Single Blog Post</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog_single_grid_post.html">Single Grid Post</a></li>
                                <li><a href="blog_single_html5video_post.html">Single html5 Video-post</a></li>
                                <li><a href="blog_single_image_post.html">Single Image Post</a></li>
                                <li><a href="blog_single_slider_post.html">Single Slider Post</a></li>
                                <li><a href="blog_single_soundcloud_post.html">Single SoundCloud Post</a></li>
                                <li><a href="blog_single_vimeo_post.html">Single Vimeo Post</a></li>
                                <li><a href="blog_single_post.html">Single without image post</a></li>
                                <li><a href="blog_single_youtube_post.html">Single Youtube Post</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Shop</a>
                    <ul class="dropdown-menu">
                        <li><a href="shop.html">Shop Grid</a></li>
                        <li><a href="shop-cart.html">Shop Cart</a></li>
                        <li><a href="shop-checkout.html">Shop Checkout</a></li>
                        <li><a href="shop-details.html">Shop Details</a></li>
                        <li><a href="shop-orders.html">Shop Orders</a></li>
                    </ul>
                </li>
                <li>
                    <a href="contact_us.html">Contact</a>
                </li>
            </ul>
            <ul class="attributes">
                <li class="d-md-block d-none"><a href="#" class="px-10 pt-15 pb-10">
                        <div class="btn btn-primary py-5">Enroll Now</div>
                    </a></li>
                <li><a href="#" class="toggle-search-fullscreen"><span class="ti-search"></span></a></li>
                <li class="megamenu" data-width="270">
                    <a href="#"><span class="ti-shopping-cart"></span></a>
                    <div class="megamenu-content megamenu-cart">
                        <!-- Start Shopping Cart -->
                        <div class="cart-header">
                            <div class="total-price">
                                Total: <span>$2,432.93</span>
                            </div>
                            <i class="ti-shopping-cart"></i>
                            <span class="badge">3</span>
                        </div>
                        <div class="cart-body">
                            <ul>
                                <li>
                                    <img src="../images/front-end-img/product/product-1.png" alt="">
                                    <h5 class="title">Lorem ipsum dolor</h5>
                                    <span class="qty">Quantity: 02</span>
                                    <span class="price-st">$843,12</span>
                                    <a href="#" class="link"></a>
                                </li>
                                <li>
                                    <img src="../images/front-end-img/product/product-2.png" alt="">
                                    <h5 class="title">Lorem ipsum dolor</h5>
                                    <span class="qty">Quantity: 02</span>
                                    <span class="price-st">$843,12</span>
                                    <a href="#" class="link"></a>
                                </li>
                                <li>
                                    <img src="../images/front-end-img/product/product-3.png" alt="">
                                    <h5 class="title">Lorem ipsum dolor</h5>
                                    <span class="qty">Quantity: 02</span>
                                    <span class="price-st">$843,12</span>
                                    <a href="#" class="link"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="cart-footer">
                            <a href="#">Checkout</a>
                        </div>
                        <!-- End Shopping Cart -->
                    </div>
                </li>
            </ul>

            <div class="wrap-search-fullscreen">
                <div class="container">
                    <button class="close-search"><span class="ti-close"></span></button>
                    <input type="text" placeholder="Search..." />
                </div>
            </div>
        </nav>
    </header>


    <section class="bg-img pt-130 pb-50" data-overlay-light="5"
        style="background-image: url({{ asset('') }}assets/images/banners/banner-2.jpeg); background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center mt-80">
                        <h1 class="box-title text-dark mb-30">Find Your Online Course</h1>
                    </div>
                    <form class="cours-search bg-black-40 mb-30">
                        <div class="input-group">
                            <input type="text" class="form-control"
                                placeholder="What do you want to learn today?">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center">
                        <a href="courses_list.html" class="btn btn-dark">Browse Courses List</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-xl-100 py-50 bg-white" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-12">
                    <div class="box box-body p-xl-50 p-30 bg-lightest">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-12">
                                <p class="badge badge-warning badge-lg">FREE</p>
                                <h1 class="mb-15">Live Classes</h1>
                                <h4 class="fw-400">It is a long established fact that a reade.</h4>
                                <p class="fs-22">Experience Plus for free and start<br> learning from the best</p>
                                <a href="#" class="btn btn-outline btn-primary">See all</a>
                            </div>
                            <div class="col-lg-6 col-12 position-relative">
                                <div class="media-list media-list-hover media-list-divided md-post mt-lg-0 mt-30">
                                    <a class="media media-single box-shadowed bg-white pull-up mb-15" href="#">
                                        <img class="w-80 rounded ms-0"
                                            src="{{ asset('') }}assets/images/avatar/1.jpg" alt="...">
                                        <div class="media-body fw-500">
                                            <h5 class="overflow-hidden text-overflow-h nowrap">Basic English for IBPS
                                                SO/ IBPS PO/IBPS Clerk exams | 5 PM</h5>
                                            <small class="text-fade">Today, 5:00 PM</small>
                                            <p><small class="text-fade mt-10">Johen doe</small></p>
                                        </div>
                                    </a>
                                    <a class="media media-single box-shadowed bg-white pull-up mb-15" href="#">
                                        <img class="w-80 rounded ms-0"
                                            src="{{ asset('') }}assets/images/avatar/2.jpg" alt="...">
                                        <div class="media-body fw-500">
                                            <h5 class="overflow-hidden text-overflow-h nowrap">Basic English for IBPS
                                                SO/ IBPS PO/IBPS Clerk exams | 5 PM</h5>
                                            <small class="text-fade">Today, 5:00 PM</small>
                                            <p><small class="text-fade mt-10">Johen doe</small></p>
                                        </div>
                                    </a>
                                    <a class="media media-single box-shadowed bg-white pull-up mb-15" href="#">
                                        <img class="w-80 rounded ms-0"
                                            src="{{ asset('') }}assets/images/avatar/3.jpg" alt="...">
                                        <div class="media-body fw-500">
                                            <h5 class="overflow-hidden text-overflow-h nowrap">Basic English for IBPS
                                                SO/ IBPS PO/IBPS Clerk exams | 5 PM</h5>
                                            <small class="text-fade">Today, 5:00 PM</small>
                                            <p><small class="text-fade mt-10">Johen doe</small></p>
                                        </div>
                                    </a>
                                    <a class="media media-single box-shadowed bg-white pull-up mb-0" href="#">
                                        <img class="w-80 rounded ms-0"
                                            src="{{ asset('') }}assets/images/avatar/4.jpg" alt="...">
                                        <div class="media-body fw-500">
                                            <h5 class="overflow-hidden text-overflow-h nowrap">Basic English for IBPS
                                                SO/ IBPS PO/IBPS Clerk exams | 5 PM</h5>
                                            <small class="text-fade">Today, 5:00 PM</small>
                                            <p><small class="text-fade mt-10">Johen doe</small></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-50" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-12 text-center">
                    <h1 class="mb-15">Explore our Courses</h1>
                    <hr class="w-100 bg-primary">
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-12">
                    <ul class="nav nav-tabs justify-content-center bb-0 mb-10" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#all"
                                role="tab">All</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab1"
                                role="tab">Finance</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab2"
                                role="tab">Operations</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab3"
                                role="tab">Strategy & Leadership</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab4"
                                role="tab">Marketing</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab5"
                                role="tab">Analytics</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab6"
                                role="tab">HR</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab7"
                                role="tab">Management</a> </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="all" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/4.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">General</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/6.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">IT & Software</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/5.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Photography</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/2.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Programming Language</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/7.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Business Manegement</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/8.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">UI Design</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/9.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Manegement</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/10.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Computer Basic</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab1" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/5.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Photography</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/2.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Programming Language</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/7.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Business Manegement</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="{{ asset('') }}assets/images/courses/8.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">UI Design</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab2" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="../images/front-end-img/courses/7.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Business Manegement</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="../images/front-end-img/courses/8.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">UI Design</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="../images/front-end-img/courses/9.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Manegement</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="../images/front-end-img/courses/10.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Computer Basic</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab3" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="../images/front-end-img/courses/5.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Photography</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="../images/front-end-img/courses/2.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Programming Language</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="../images/front-end-img/courses/7.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Business Manegement</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="../images/front-end-img/courses/8.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">UI Design</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab4" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="../images/front-end-img/courses/7.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Business Manegement</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="../images/front-end-img/courses/8.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">UI Design</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="../images/front-end-img/courses/9.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Manegement</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="../images/front-end-img/courses/10.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Computer Basic</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab5" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="../images/front-end-img/courses/5.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Photography</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="../images/front-end-img/courses/2.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Programming Language</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="../images/front-end-img/courses/7.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Business Manegement</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="../images/front-end-img/courses/8.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">UI Design</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab6" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="../images/front-end-img/courses/7.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Business Manegement</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="../images/front-end-img/courses/8.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">UI Design</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="../images/front-end-img/courses/9.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Manegement</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="../images/front-end-img/courses/10.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Computer Basic</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab7" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="../images/front-end-img/courses/4.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">General</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="../images/front-end-img/courses/6.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">IT & Software</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="../images/front-end-img/courses/9.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Manegement</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="../images/front-end-img/courses/10.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-start">
                                                    <h4 class="box-title">Computer Basic</h4>
                                                    <p class="mb-10 text-light fs-12"><i
                                                            class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read
                                                        more</a>
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

    <section class="py-50 bg-white" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-12 text-center">
                    <h1 class="mb-15">Our top University Partners.</h1>
                    <hr class="w-100 bg-primary">
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-12">
                    <div class="owl-carousel owl-theme owl-btn-1" data-nav-arrow="false" data-nav-dots="false"
                        data-items="6" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xx-items="2">
                        <div class="item"><img src="../images/front-end-img/unilogo/uni-1.jpg"
                                class="img-fluid my-15 rounded box-shadowed pull-up" alt=""></div>
                        <div class="item"><img src="../images/front-end-img/unilogo/uni-2.jpg"
                                class="img-fluid my-15 rounded box-shadowed pull-up" alt=""></div>
                        <div class="item"><img src="../images/front-end-img/unilogo/uni-3.jpg"
                                class="img-fluid my-15 rounded box-shadowed pull-up" alt=""></div>
                        <div class="item"><img src="../images/front-end-img/unilogo/uni-4.jpg"
                                class="img-fluid my-15 rounded box-shadowed pull-up" alt=""></div>
                        <div class="item"><img src="../images/front-end-img/unilogo/uni-5.jpg"
                                class="img-fluid my-15 rounded box-shadowed pull-up" alt=""></div>
                        <div class="item"><img src="../images/front-end-img/unilogo/uni-6.jpg"
                                class="img-fluid my-15 rounded box-shadowed pull-up" alt=""></div>
                        <div class="item"><img src="../images/front-end-img/unilogo/uni-7.jpg"
                                class="img-fluid my-15 rounded box-shadowed pull-up" alt=""></div>
                        <div class="item"><img src="../images/front-end-img/unilogo/uni-8.jpg"
                                class="img-fluid my-15 rounded box-shadowed pull-up" alt=""></div>
                        <div class="item"><img src="../images/front-end-img/unilogo/uni-9.jpg"
                                class="img-fluid my-15 rounded box-shadowed pull-up" alt=""></div>
                        <div class="item"><img src="../images/front-end-img/unilogo/uni-10.jpg"
                                class="img-fluid my-15 rounded box-shadowed pull-up" alt=""></div>
                        <div class="item"><img src="../images/front-end-img/unilogo/uni-11.jpg"
                                class="img-fluid my-15 rounded box-shadowed pull-up" alt=""></div>
                        <div class="item"><img src="../images/front-end-img/unilogo/uni-12.jpg"
                                class="img-fluid my-15 rounded box-shadowed pull-up" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-50" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-12 text-center">
                    <h1 class="mb-15">Upcoming Courses</h1>
                    <hr class="w-100 bg-primary">
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-12">
                    <ul class="nav nav-tabs justify-content-center bb-0 mb-10" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#tab8"
                                role="tab">MBA</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab9"
                                role="tab">Machine Learning</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab10"
                                role="tab">Software & Technology</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab11"
                                role="tab">Marketing</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab12"
                                role="tab">Law</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab13"
                                role="tab">Management</a> </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab8" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="../images/front-end-img/courses/1.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Manegement</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="fw-bold">Duration:</span> 6
                                                        Months</a>
                                                    <a href="#"><span class="fw-bold">Daily:</span> 2
                                                        Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="../images/front-end-img/courses/9.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Networking</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="fw-bold">Duration:</span> 6
                                                        Months</a>
                                                    <a href="#"><span class="fw-bold">Daily:</span> 2
                                                        Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="../images/front-end-img/courses/8.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Security</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="fw-bold">Duration:</span> 6
                                                        Months</a>
                                                    <a href="#"><span class="fw-bold">Daily:</span> 2
                                                        Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="../images/front-end-img/courses/7.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">IT & Software</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="fw-bold">Duration:</span> 6
                                                        Months</a>
                                                    <a href="#"><span class="fw-bold">Daily:</span> 2
                                                        Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab9" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="../images/front-end-img/courses/7.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">IT & Software</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="fw-bold">Duration:</span> 6
                                                        Months</a>
                                                    <a href="#"><span class="fw-bold">Daily:</span> 2
                                                        Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="../images/front-end-img/courses/1.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Manegement</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="fw-bold">Duration:</span> 6
                                                        Months</a>
                                                    <a href="#"><span class="fw-bold">Daily:</span> 2
                                                        Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="../images/front-end-img/courses/9.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Networking</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="fw-bold">Duration:</span> 6
                                                        Months</a>
                                                    <a href="#"><span class="fw-bold">Daily:</span> 2
                                                        Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="../images/front-end-img/courses/8.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Security</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="fw-bold">Duration:</span> 6
                                                        Months</a>
                                                    <a href="#"><span class="fw-bold">Daily:</span> 2
                                                        Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab10" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="../images/front-end-img/courses/8.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Security</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="fw-bold">Duration:</span> 6
                                                        Months</a>
                                                    <a href="#"><span class="fw-bold">Daily:</span> 2
                                                        Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="../images/front-end-img/courses/7.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">IT & Software</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="fw-bold">Duration:</span> 6
                                                        Months</a>
                                                    <a href="#"><span class="fw-bold">Daily:</span> 2
                                                        Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="../images/front-end-img/courses/9.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Networking</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="fw-bold">Duration:</span> 6
                                                        Months</a>
                                                    <a href="#"><span class="fw-bold">Daily:</span> 2
                                                        Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="../images/front-end-img/courses/1.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Manegement</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="fw-bold">Duration:</span> 6
                                                        Months</a>
                                                    <a href="#"><span class="fw-bold">Daily:</span> 2
                                                        Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab11" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="../images/front-end-img/courses/1.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Manegement</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="fw-bold">Duration:</span> 6
                                                        Months</a>
                                                    <a href="#"><span class="fw-bold">Daily:</span> 2
                                                        Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="../images/front-end-img/courses/7.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">IT & Software</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="fw-bold">Duration:</span> 6
                                                        Months</a>
                                                    <a href="#"><span class="fw-bold">Daily:</span> 2
                                                        Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="../images/front-end-img/courses/9.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Networking</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="fw-bold">Duration:</span> 6
                                                        Months</a>
                                                    <a href="#"><span class="fw-bold">Daily:</span> 2
                                                        Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="../images/front-end-img/courses/8.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Security</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="fw-bold">Duration:</span> 6
                                                        Months</a>
                                                    <a href="#"><span class="fw-bold">Daily:</span> 2
                                                        Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab12" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="../images/front-end-img/courses/8.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Security</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="fw-bold">Duration:</span> 6
                                                        Months</a>
                                                    <a href="#"><span class="fw-bold">Daily:</span> 2
                                                        Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="../images/front-end-img/courses/7.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">IT & Software</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="fw-bold">Duration:</span> 6
                                                        Months</a>
                                                    <a href="#"><span class="fw-bold">Daily:</span> 2
                                                        Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="../images/front-end-img/courses/1.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Manegement</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="fw-bold">Duration:</span> 6
                                                        Months</a>
                                                    <a href="#"><span class="fw-bold">Daily:</span> 2
                                                        Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="../images/front-end-img/courses/9.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Networking</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="fw-bold">Duration:</span> 6
                                                        Months</a>
                                                    <a href="#"><span class="fw-bold">Daily:</span> 2
                                                        Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab13" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="../images/front-end-img/courses/9.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Networking</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="fw-bold">Duration:</span> 6
                                                        Months</a>
                                                    <a href="#"><span class="fw-bold">Daily:</span> 2
                                                        Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="../images/front-end-img/courses/8.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Security</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="fw-bold">Duration:</span> 6
                                                        Months</a>
                                                    <a href="#"><span class="fw-bold">Daily:</span> 2
                                                        Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="../images/front-end-img/courses/1.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Manegement</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="fw-bold">Duration:</span> 6
                                                        Months</a>
                                                    <a href="#"><span class="fw-bold">Daily:</span> 2
                                                        Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top"
                                                    src="../images/front-end-img/courses/7.jpg"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button"
                                                    class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                                        class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">IT & Software</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="fw-bold">Duration:</span> 6
                                                        Months</a>
                                                    <a href="#"><span class="fw-bold">Daily:</span> 2
                                                        Hours</a>
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

    <section class="py-50 bg-white" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-12 text-center">
                    <h1 class="mb-15">Reviews & Ratings</h1>
                    <hr class="w-100 bg-primary">
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-md-3 col-12">
                    <div class="box pull-up">
                        <div class="box-body">
                            <div>
                                <div class="d-flex align-items-center mb-30">
                                    <div class="me-15">
                                        <img src="../images/front-end-img/avatar/1.jpg"
                                            class="avatar avatar-lg rounded10" alt="">
                                    </div>
                                    <div class="d-flex flex-column fw-500">
                                        <a href="#" class="text-dark hover-primary mb-1 fs-16">Johen
                                            Kothari</a>
                                        <span class="text-fade fs-12">Software Engineer</span>
                                    </div>
                                </div>
                                <p class="mb-25 min-h-120">A great aspect of this course is the student mentors. These
                                    people are always there to help, support, and motivate the student to complete
                                    modules...</p>
                                <div class="d-flex align-items-center">
                                    <a href="#">
                                        <i class="me-15 fa fa-linkedin-square"></i>
                                        <span>Detailed Review</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="box pull-up">
                        <div class="box-body">
                            <div>
                                <div class="d-flex align-items-center mb-30">
                                    <div class="me-15">
                                        <img src="../images/front-end-img/avatar/2.jpg"
                                            class="avatar avatar-lg rounded10" alt="">
                                    </div>
                                    <div class="d-flex flex-column fw-500">
                                        <a href="#" class="text-dark hover-primary mb-1 fs-16">Johen doe</a>
                                        <span class="text-fade fs-12">Vice President</span>
                                    </div>
                                </div>
                                <p class="mb-25 min-h-120">This course actually helped me move from being a general
                                    manager to vice president. The content was exciting. I actually implemented what I
                                    learnt through case...</p>
                                <div class="d-flex align-items-center">
                                    <a href="#">
                                        <i class="me-15 fa fa-linkedin-square"></i>
                                        <span>Detailed Review</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="box pull-up">
                        <div class="box-body">
                            <div>
                                <div class="d-flex align-items-center mb-30">
                                    <div class="me-15">
                                        <img src="../images/front-end-img/avatar/3.jpg"
                                            class="avatar avatar-lg rounded10" alt="">
                                    </div>
                                    <div class="d-flex flex-column fw-500">
                                        <a href="#" class="text-dark hover-primary mb-1 fs-16">Anshu
                                            Srivastav</a>
                                        <span class="text-fade fs-12">Research Assistant</span>
                                    </div>
                                </div>
                                <p class="mb-25 min-h-120">Group case studies really give a sense of teamwork, as it
                                    happens in regular classroom studies. It teaches us coordination and right attitude
                                    as a team...</p>
                                <div class="d-flex align-items-center">
                                    <a href="#">
                                        <i class="me-15 fa fa-linkedin-square"></i>
                                        <span>Detailed Review</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="box pull-up">
                        <div class="box-body">
                            <div>
                                <div class="d-flex align-items-center mb-30">
                                    <div class="me-15">
                                        <img src="../images/front-end-img/avatar/4.jpg"
                                            class="avatar avatar-lg rounded10" alt="">
                                    </div>
                                    <div class="d-flex flex-column fw-500">
                                        <a href="#" class="text-dark hover-primary mb-1 fs-16">Mical Doe</a>
                                        <span class="text-fade fs-12">Analyst</span>
                                    </div>
                                </div>
                                <p class="mb-25 min-h-120">It doesn’t matter what your previous working background is,
                                    as everything is taught from the basics.</p>
                                <div class="d-flex align-items-center">
                                    <a href="#">
                                        <i class="me-15 fa fa-linkedin-square"></i>
                                        <span>Detailed Review</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="box pull-up">
                        <div class="box-body">
                            <div>
                                <div class="d-flex align-items-center mb-30">
                                    <div class="me-15">
                                        <img src="../images/front-end-img/avatar/5.jpg"
                                            class="avatar avatar-lg rounded10" alt="">
                                    </div>
                                    <div class="d-flex flex-column fw-500">
                                        <a href="#" class="text-dark hover-primary mb-1 fs-16">Paton don</a>
                                        <span class="text-fade fs-12">Data Analyst</span>
                                    </div>
                                </div>
                                <p class="mb-25 min-h-120">They will prepare you how to face Data Science job
                                    interviews along with this upGrad will also provide mock interviews and mock MCQ
                                    tests to check...</p>
                                <div class="d-flex align-items-center">
                                    <a href="#">
                                        <i class="me-15 fa fa-linkedin-square"></i>
                                        <span>Detailed Review</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="box pull-up">
                        <div class="box-body">
                            <div>
                                <div class="d-flex align-items-center mb-30">
                                    <div class="me-15">
                                        <img src="../images/front-end-img/avatar/6.jpg"
                                            class="avatar avatar-lg rounded10" alt="">
                                    </div>
                                    <div class="d-flex flex-column fw-500">
                                        <a href="#" class="text-dark hover-primary mb-1 fs-16">Johen Doe</a>
                                        <span class="text-fade fs-12">Samsung</span>
                                    </div>
                                </div>
                                <p class="mb-25 min-h-120">Many of the basic concepts are being taught to build good
                                    intuition of Machine Learning models. Most of the basic math required for developing
                                    an intuition...</p>
                                <div class="d-flex align-items-center">
                                    <a href="#">
                                        <i class="me-15 fa fa-linkedin-square"></i>
                                        <span>Detailed Review</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="box pull-up">
                        <div class="box-body">
                            <div>
                                <div class="d-flex align-items-center mb-30">
                                    <div class="me-15">
                                        <img src="../images/front-end-img/avatar/7.jpg"
                                            class="avatar avatar-lg rounded10" alt="">
                                    </div>
                                    <div class="d-flex flex-column fw-500">
                                        <a href="#" class="text-dark hover-primary mb-1 fs-16">Moriss
                                            Kothari</a>
                                        <span class="text-fade fs-12">Software Engineer</span>
                                    </div>
                                </div>
                                <p class="mb-25 min-h-120">You will be notified of any interview opportunities in ML
                                    and they will share your profile with the recruiters. This really helps to kick
                                    start your...</p>
                                <div class="d-flex align-items-center">
                                    <a href="#">
                                        <i class="me-15 fa fa-linkedin-square"></i>
                                        <span>Detailed Review</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="box pull-up">
                        <div class="box-body">
                            <div>
                                <div class="d-flex align-items-center mb-30">
                                    <div class="me-15">
                                        <img src="../images/front-end-img/avatar/8.jpg"
                                            class="avatar avatar-lg rounded10" alt="">
                                    </div>
                                    <div class="d-flex flex-column fw-500">
                                        <a href="#" class="text-dark hover-primary mb-1 fs-16">Johens
                                            Kothari</a>
                                        <span class="text-fade fs-12">Software Engineer</span>
                                    </div>
                                </div>
                                <p class="mb-25 min-h-120">The course justifies every penny charged and is an
                                    investment that reaps benefits once we enter the market after course completion.</p>
                                <div class="d-flex align-items-center">
                                    <a href="#">
                                        <i class="me-15 fa fa-linkedin-square"></i>
                                        <span>Detailed Review</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-50" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-12 text-center">
                    <h1 class="mb-15">Try FREE courses to learn fundamentals</h1>
                    <hr class="w-100 bg-primary">
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <a href="#">
                            <img class="card-img-top" src="../images/front-end-img/courses/1.jpg"
                                alt="Card image cap">
                        </a>
                        <div class="position-absolute r-10 t-10">
                            <button type="button"
                                class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                    class="fa fa-heart-o"></i></button>
                            <button type="button"
                                class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                    class="fa fa-share-alt"></i></button>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Data</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to additional content.</p>
                            <a href="#" class="btn btn-primary btn-outline btn-sm">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <a href="#">
                            <img class="card-img-top" src="../images/front-end-img/courses/2.jpg"
                                alt="Card image cap">
                        </a>
                        <div class="position-absolute r-10 t-10">
                            <button type="button"
                                class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                    class="fa fa-heart-o"></i></button>
                            <button type="button"
                                class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                    class="fa fa-share-alt"></i></button>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Management & Marketing</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to additional content.</p>
                            <a href="#" class="btn btn-primary btn-outline btn-sm">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <a href="#">
                            <img class="card-img-top" src="../images/front-end-img/courses/3.jpg"
                                alt="Card image cap">
                        </a>
                        <div class="position-absolute r-10 t-10">
                            <button type="button"
                                class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                    class="fa fa-heart-o"></i></button>
                            <button type="button"
                                class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                    class="fa fa-share-alt"></i></button>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Technology</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to additional content.</p>
                            <a href="#" class="btn btn-primary btn-outline btn-sm">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <a href="#">
                            <img class="card-img-top" src="../images/front-end-img/courses/4.jpg"
                                alt="Card image cap">
                        </a>
                        <div class="position-absolute r-10 t-10">
                            <button type="button"
                                class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                    class="fa fa-heart-o"></i></button>
                            <button type="button"
                                class="waves-effect waves-circle btn btn-circle btn-dark btn-xs me-5"><i
                                    class="fa fa-share-alt"></i></button>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Digital Marketing</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to additional content.</p>
                            <a href="#" class="btn btn-primary btn-outline btn-sm">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-primary mx-auto">View All Free Courses</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-50 bg-img countnm-bx"
        style="background-image: url(../images/front-end-img/background/bg-3.jpg)" data-overlay="5"
        data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="text-center">
                        <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
                            <span class="text-white fs-40 icon-User"><span class="path1"></span><span
                                    class="path2"></span></span>
                        </div>
                        <h1 class="countnm my-10 text-white fw-300">5428</h1>
                        <div class="text-uppercase text-white">Teachers</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="text-center">
                        <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
                            <span class="text-white fs-40 icon-Book"></span>
                        </div>
                        <h1 class="countnm my-10 text-white fw-300">120</h1>
                        <div class="text-uppercase text-white">Courses</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="text-center">
                        <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
                            <span class="text-white fs-40 icon-Group"><span class="path1"></span><span
                                    class="path2"></span></span>
                        </div>
                        <h1 class="countnm my-10 text-white fw-300">7485</h1>
                        <div class="text-uppercase text-white">Student</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="text-center">
                        <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
                            <span class="text-white fs-40 icon-Globe"><span class="path1"></span><span
                                    class="path2"></span></span>
                        </div>
                        <h1 class="countnm my-10 text-white fw-300">100</h1>
                        <div class="text-uppercase text-white">Country</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-50" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-12 text-center">
                    <h1 class="mb-15">Latest Blog</h1>
                    <hr class="w-100 bg-primary">
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-xl-4 col-md-4 col-12">
                    <div class="blog-post">
                        <div class="entry-image clearfix">
                            <img class="img-fluid" src="../images/front-end-img/courses/1f.jpg" alt="">
                        </div>
                        <div class="blog-detail">
                            <div class="entry-title mb-10">
                                <a href="#">Blog Post With Image</a>
                            </div>
                            <div class="entry-meta mb-10">
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fa fa-folder-open-o"></i> Design</a></li>
                                    <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                                    <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus fuga laborum totam
                                    itaque architecto! Laudantium sed delectus assumenda, doloribus non.</p>
                            </div>
                            <div class="entry-share d-flex justify-content-between align-items-center">
                                <div class="entry-button">
                                    <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                </div>
                                <div class="social">
                                    <strong>Share : </strong>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-dribbble"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-12">
                    <div class="blog-post">
                        <div class="entry-image clearfix">
                            <div class="owl-carousel bottom-dots-center owl-theme" data-nav-dots="true"
                                data-autoplay="true" data-items="1" data-md-items="1" data-sm-items="1"
                                data-xs-items="1" data-xx-items="1">
                                <div class="item">
                                    <img src="../images/front-end-img/courses/2f.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="../images/front-end-img/courses/3f.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="../images/front-end-img/courses/4f.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="blog-detail">
                            <div class="entry-title mb-10">
                                <a href="#">Blog Post With Image Slider</a>
                            </div>
                            <div class="entry-meta mb-10">
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fa fa-folder-open-o"></i> Design</a></li>
                                    <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                                    <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus fuga laborum totam
                                    itaque architecto! Laudantium sed delectus assumenda, doloribus non.</p>
                            </div>
                            <div class="entry-share d-flex justify-content-between align-items-center">
                                <div class="entry-button">
                                    <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                </div>
                                <div class="social">
                                    <strong>Share : </strong>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-dribbble"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-12">
                    <div class="blog-post">
                        <div class="entry-image clearfix">
                            <ul class="grid-post list-unstyled">
                                <li>
                                    <img class="img-fluid" src="../images/front-end-img/courses/5f.jpg"
                                        alt="">
                                </li>
                                <li>
                                    <img class="img-fluid" src="../images/front-end-img/courses/6f.jpg"
                                        alt="">
                                </li>
                                <li>
                                    <img class="img-fluid" src="../images/front-end-img/courses/7f.jpg"
                                        alt="">
                                </li>
                                <li>
                                    <img class="img-fluid" src="../images/front-end-img/courses/8f.jpg"
                                        alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="blog-detail">
                            <div class="entry-title mb-10">
                                <a href="#">Blogpost With Image Grid Gallery</a>
                            </div>
                            <div class="entry-meta mb-10">
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fa fa-folder-open-o"></i> Design</a></li>
                                    <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                                    <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus fuga laborum totam
                                    itaque architecto! Laudantium sed delectus assumenda, doloribus non.</p>
                            </div>
                            <div class="entry-share d-flex justify-content-between align-items-center">
                                <div class="entry-button">
                                    <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                </div>
                                <div class="social">
                                    <strong>Share : </strong>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-dribbble"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer_three">
        <div class="footer-top bg-dark3 pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div class="widget">
                            <h4 class="footer-title">About</h4>
                            <hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
                            <p class="text-capitalize mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam, quis exercitation ullamco laboris<br><br>Duis aute irure dolor in reprehenderit
                                in voluptate velit esse cillum.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="widget">
                            <h4 class="footer-title">Contact Info</h4>
                            <hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
                            <ul class="list list-unstyled mb-30">
                                <li> <i class="fa fa-map-marker"></i> 123, Lorem Ipsum, Dummy City,<br>FL-12345 USA
                                </li>
                                <li> <i class="fa fa-phone"></i> <span>+(1) 123-878-1649 </span><br><span>+(1)
                                        123-878-1649 </span></li>
                                <li> <i class="fa fa-envelope"></i> <span>info@EduAdmin.com
                                    </span><br><span>support@EduAdmin.com </span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="widget widget_gallery clearfix">
                            <h4 class="footer-title">Our Gallery</h4>
                            <hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
                            <ul class="list-unstyled">
                                <li><img src="../images/gallery/thumb/1.jpg" alt=""></li>
                                <li><img src="../images/gallery/thumb/2.jpg" alt=""></li>
                                <li><img src="../images/gallery/thumb/3.jpg" alt=""></li>
                                <li><img src="../images/gallery/thumb/4.jpg" alt=""></li>
                                <li><img src="../images/gallery/thumb/5.jpg" alt=""></li>
                                <li><img src="../images/gallery/thumb/6.jpg" alt=""></li>
                                <li><img src="../images/gallery/thumb/7.jpg" alt=""></li>
                                <li><img src="../images/gallery/thumb/8.jpg" alt=""></li>
                                <li><img src="../images/gallery/thumb/9.jpg" alt=""></li>
                                <li><img src="../images/gallery/thumb/10.jpg" alt=""></li>
                                <li><img src="../images/gallery/thumb/11.jpg" alt=""></li>
                                <li><img src="../images/gallery/thumb/12.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="widget">
                            <h4 class="footer-title">Accept Card Payments</h4>
                            <hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
                            <ul class="payment-icon list-unstyled d-flex gap-items-1">
                                <li class="ps-0">
                                    <a href="javascript:;"><i class="fa fa-cc-amex" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><i class="fa fa-cc-visa" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><i class="fa fa-credit-card-alt"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><i class="fa fa-cc-mastercard"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><i class="fa fa-cc-paypal" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                            <h4 class="footer-title mt-20">Newsletter</h4>
                            <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto w-60">
                            <div class="mb-20">
                                <form class="" action="" method="post">
                                    <div class="input-group">
                                        <input name="email" required="required" class="form-control"
                                            placeholder="Your Email Address" type="email">
                                        <button name="submit" value="Submit" type="submit"
                                            class="btn btn-primary"> <i class="fa fa-envelope"></i> </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="by-1 bg-dark3 py-10 border-dark">
            <div class="container">
                <div class="text-center footer-links">
                    <a href="#" class="btn btn-link">Home</a>
                    <a href="#" class="btn btn-link">About Us</a>
                    <a href="#" class="btn btn-link">Pricing</a>
                    <a href="#" class="btn btn-link">Courses</a>
                    <a href="#" class="btn btn-link">Blog</a>
                    <a href="#" class="btn btn-link">Contact Us</a>
                    <a href="#" class="btn btn-link">Privacy Policy</a>
                    <a href="#" class="btn btn-link">Terms Of Conditions</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom bg-dark3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-12 text-md-start text-center"> © 2020 <span
                            class="text-white">EduAdmin</span> All Rights Reserved.</div>
                    <div class="col-md-6 mt-md-0 mt-20">
                        <div class="social-icons">
                            <ul
                                class="list-unstyled d-flex gap-items-1 justify-content-md-end justify-content-center">
                                <li><a href="#"
                                        class="waves-effect waves-circle btn btn-social-icon btn-circle btn-facebook"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a href="#"
                                        class="waves-effect waves-circle btn btn-social-icon btn-circle btn-twitter"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li><a href="#"
                                        class="waves-effect waves-circle btn btn-social-icon btn-circle btn-linkedin"><i
                                            class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"
                                        class="waves-effect waves-circle btn btn-social-icon btn-circle btn-youtube"><i
                                            class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Vendor JS -->
    <script src="{{ asset('') }}assets/frontend/js/vendors.min.js"></script>
    <!-- Corenav Master JavaScript -->
    <script src="{{ asset('') }}assets/corenav-master/coreNavigation-1.1.3.js"></script>
    <script src="{{ asset('') }}assets/frontend/js/nav.js"></script>
    <script src="{{ asset('') }}assets/vendor_components/OwlCarousel2/dist/owl.carousel.js"></script>
    <script src="{{ asset('') }}assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js"></script>


    <!-- EduAdmin front end -->
    <script src="{{ asset('') }}assets/frontend/js/template.js"></script>

    @livewireScripts

</body>

</html>
