<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="StreamLab" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DiogoFLix</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- CSS bootstrap-->
    <link rel="stylesheet" href="{{ asset('assets') }}/streamlab/css/bootstrap.min.css" />
    <!--  Style -->
    <link rel="stylesheet" href="{{ asset('assets') }}/streamlab/css/style.css" />
    <!--  Responsive -->
    <link rel="stylesheet" href="{{ asset('assets') }}/streamlab/css/responsive.css" />

    <script src="{{ asset('assets') }}/streamlab/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets') }}/streamlab/js/asyncloader.min.js"></script>
    <!-- JS bootstrap -->
    <script src="{{ asset('assets') }}/streamlab/js/bootstrap.min.js"></script>

    <script src="{{ asset('assets') }}/streamlab/js/owl.carousel.min.js"></script>
    <!-- counter-js -->
    <script src="{{ asset('assets') }}/streamlab/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('assets') }}/streamlab/js/jquery.counterup.min.js"></script>
    <!-- popper-js -->
    <script src="{{ asset('assets') }}/streamlab/js/popper.min.js"></script>
    <script src="{{ asset('assets') }}/streamlab/js/swiper-bundle.min.js"></script>
    <!-- Iscotop -->
    <script src="{{ asset('assets') }}/streamlab/js/isotope.pkgd.min.js"></script>

    <script src="{{ asset('assets') }}/streamlab/js/jquery.magnific-popup.min.js"></script>

    <script src="{{ asset('assets') }}/streamlab/js/slick.min.js"></script>

    <script src="{{ asset('assets') }}/streamlab/js/streamlab-core.js"></script>

    <script src="{{ asset('assets') }}/streamlab/js/script.js"></script>
    <style>
        :root {
            --primary-color: rgb(244 24 28);
        }
    </style>

</head>

<body>

    <!--=========== Loader =============-->
    <div id="gen-loading">
        <div id="gen-loading-center">
            <img src="{{ asset('assets') }}/img/logo1.png" alt="loading">
        </div>
    </div>
    <!--=========== Loader =============-->

    <!--========== Header ==============-->
    <header id="gen-header" class="gen-header-style-1 gen-has-sticky">
        <div class="gen-bottom-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img class="img-fluid logo" src="{{ asset('assets') }}/img/logo1.png" alt="streamlab-image">
                            </a>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <div id="gen-menu-contain" class="gen-menu-contain">
                                    <ul id="gen-main-menu" class="navbar-nav ml-auto">



                                        <li class="menu-item active">
                                            <a href="{{ url('/') }}" aria-current="page">
                                                Home</a>
                                        </li>

                                        <li class="menu-item">
                                            <a href="#">Categorias</a>
                                            <i class="fa fa-chevron-down gen-submenu-icon"></i>
                                            <ul class="sub-menu">
                                                @foreach($categories as $category)
                                                <li class="menu-item">
                                                    <a href="">{{ $category->name }}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>


                                        <li class="menu-item">
                                            <a href="#">Playlists</a>
                                            <i class="fa fa-chevron-down gen-submenu-icon"></i>
                                            <ul class="sub-menu">
                                                @foreach($playlists_all as $playlist)
                                                <li class="menu-item">
                                                    <a href="">{{ $playlist->title }}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>






                                    </ul>
                                </div>
                            </div>
                            <div class="gen-header-info-box">
                                <div class="gen-menu-search-block">
                                    <a href="javascript:void(0)" id="gen-seacrh-btn"><i class="fa fa-search"></i></a>
                                    <div class="gen-search-form">
                                        <form role="search" method="get" class="search-form" action="#">
                                            <label>
                                                <span class="screen-reader-text"></span>
                                                <input type="search" class="search-field" placeholder="Search ???" value="" name="s">
                                            </label>
                                            <button type="submit" class="search-submit"><span class="screen-reader-text"></span></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="gen-account-holder">
                                    <a href="javascript:void(0)" id="gen-user-btn"><i class="fa fa-user"></i></a>
                                    <div class="gen-account-menu">
                                        <ul class="gen-account-menu">
                                            <!-- Pms Menu -->
                                            <li>
                                                <a href="log-in.html"><i class="fas fa-sign-in-alt"></i>
                                                    login </a>
                                            </li>
                                            <li>
                                                <a href="register.html"><i class="fa fa-user"></i>
                                                    Register </a>
                                            </li>
                                            <!-- Library Menu -->
                                            <li>
                                                <a href="library.html">
                                                    <i class="fa fa-indent"></i>
                                                    Library </a>
                                            </li>
                                            <li>
                                                <a href="library.html"><i class="fa fa-list"></i>
                                                    Movie Playlist </a>
                                            </li>
                                            <li>
                                                <a href="library.html"><i class="fa fa-list"></i>
                                                    Tv Show Playlist </a>
                                            </li>
                                            <li>
                                                <a href="library.html"><i class="fa fa-list"></i>
                                                    Video Playlist </a>
                                            </li>
                                            <li>
                                                <a href="upload-video.html"> <i class="fa fa-upload"></i>
                                                    Upload Video </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="gen-btn-container">
                                    <a href="" class="gen-button">
                                        <div class="gen-button-block">
                                            <span class="gen-button-line-left"></span>
                                            <span class="gen-button-text">Subscribe</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                            </button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--========== Header ==============-->

    <!-- owl-carousel Banner Start -->
    @yield('content')

    <!-- footer start -->
    <footer id="gen-footer">
        <div class="gen-footer-style-1">
            <div class="gen-footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="widget">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <img src="{{ asset('assets') }}/img/logo1.png" class="gen-footer-logo" alt="gen-footer-logo">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <ul class="social-link">
                                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="facebook"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#" class="facebook"><i class="fab fa-skype"></i></a></li>
                                            <li><a href="#" class="facebook"><i class="fab fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="widget">
                                <h4 class="footer-title">Explore</h4>
                                <div class="menu-explore-container">
                                    <li class="menu-item">
                                        <a href="">Home</a>
                                    </li>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="widget">
                                <h4 class="footer-title">Company</h4>
                                <div class="menu-about-container">
                                    <ul class="menu">
                                        <li class="menu-item"><a href="contact-us.html">Company</a>
                                        </li>
                                        <li class="menu-item"><a href="contact-us.html">Privacy
                                                Policy</a></li>
                                        <li class="menu-item"><a href="contact-us.html">Terms Of
                                                Use</a></li>
                                        <li class="menu-item"><a href="contact-us.html">Help
                                                Center</a></li>
                                        <li class="menu-item"><a href="contact-us.html">contact us</a></li>
                                        <li class="menu-item"><a href="pricing-style-1.html">Subscribe</a></li>
                                        <li class="menu-item"><a href="#">Our Team</a></li>
                                        <li class="menu-item"><a href="contact-us.html">Faq</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3  col-md-6">
                            <div class="widget">
                                <h4 class="footer-title">Downlaod App</h4>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <a href="#">
                                            <img src="{{ asset('assets') }}/streamlab/images/asset-35.png" class="gen-playstore-logo" alt="playstore">
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset('assets') }}/streamlab/images/asset-36.png" class="gen-appstore-logo" alt="appstore">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gen-copyright-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 align-self-center">
                            <span class="gen-copyright"><a target="_blank" href="#"> Copyright 2021 stremlab All Rights
                                    Reserved.</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer End -->

    <!-- Back-to-Top start -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
    </div>
    <!-- Back-to-Top end -->

    <!-- js-min -->

    <!-- owl-carousel -->



</body>

</html>