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
                            <a class="navbar-brand" href="#">
                                <img class="img-fluid logo" src="{{ asset('assets') }}/img/logo1.png" alt="streamlab-image">
                            </a>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <div id="gen-menu-contain" class="gen-menu-contain">
                                    <ul id="gen-main-menu" class="navbar-nav ml-auto">



                                        <li class="menu-item active">
                                            <a href="#" aria-current="page">Home</a>
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
                                                <input type="search" class="search-field" placeholder="Search …" value="" name="s">
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
    <section class="pt-0 pb-0">
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="gen-banner-movies banner-style-2">
                        <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="true" data-desk_num="1" data-lap_num="1" data-tab_num="1" data-mob_num="1" data-mob_sm="1" data-autoplay="true" data-loop="true" data-margin="0">





                            @for($i =0; $i < 6; $i++) <div class="item" style="background: url('{{ $videos[$i]->thumbnail }}')">
                                <div class="gen-movie-contain-style-2 h-100">
                                    <div class="container h-100">
                                        <div class="row flex-row-reverse align-items-center h-100">
                                            <div class="col-xl-6">
                                                <div class="gen-front-image">
                                                    <img src="{{ $videos[$i]->thumbnail }}" alt="owl-carousel-banner-image">
                                                    <a href="" class="playBut popup-youtube popup-vimeo popup-gmaps">
                                                        <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="213.7px" height="213.7px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                                            <polygon class="triangle" id="XMLID_17_" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
                                                            73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                                                            <circle class="circle" id="XMLID_18_" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3">
                                                            </circle>
                                                        </svg>
                                                        <span>Watch Trailer</span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <div class="gen-tag-line"><span>Mais Assistidos</span></div>
                                                <div class="gen-movie-info">
                                                    <h3 style="font-size: 20px;">
                                                        {{ $videos[$i]->title }}

                                                    </h3>
                                                </div>
                                                <div class="gen-movie-meta-holder">
                                                    <ul class="gen-meta-after-title">
                                                        <li class="gen-sen-rating">
                                                            <span>
                                                                12A</span>
                                                        </li>
                                                        <li> <img src="{{ asset('assets') }}/streamlab/images/asset-2.png" alt="rating-image">
                                                            <span>
                                                                0 </span>
                                                        </li>
                                                    </ul>
                                                    <p>

                                                    </p>
                                                    <div class="gen-meta-info">
                                                        <ul class="gen-meta-after-excerpt">
                                                            <li>
                                                                <strong>Cast :</strong>
                                                                Anna Romanson,Robert Romanson
                                                            </li>
                                                            <li>
                                                                <strong>Genre :</strong>
                                                                <span>
                                                                    <a href="action.html">
                                                                        Action, </a>
                                                                </span>
                                                                <span>
                                                                    <a href="animation.html">
                                                                        Annimation, </a>
                                                                </span>
                                                                <span>
                                                                    <a href="#">
                                                                        Family </a>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <strong>Tag :</strong>
                                                                <span>
                                                                    <a href="#">
                                                                        4K Ultra, </a>
                                                                </span>
                                                                <span>
                                                                    <a href="#">
                                                                        Brother, </a>
                                                                </span>
                                                                <span>
                                                                    <a href="#">
                                                                        Dubbing, </a>
                                                                </span>
                                                                <span>
                                                                    <a href="#">
                                                                        Premieres </a>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="gen-movie-action">
                                                    <div class="gen-btn-container">
                                                        <a href="" class="gen-button .gen-button-dark">
                                                            <i aria-hidden="true" class="fas fa-play"></i> <span class="text">Play
                                                                Now</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                        </div>

                        @endfor


                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- owl-carousel Banner End -->



    @foreach($categories as $category)

    <section class="gen-section-padding-2 pb-0 pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <h4 class="gen-heading-title">{{ $category->name}}</h4>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-inline-block">
                    <div class="gen-movie-action">
                        <div class="gen-btn-container text-right">
                            <!-- <a href="tv-shows-pagination.html" class="gen-button gen-button-flat">
                                <span class="text"></span>
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12">
                    <div class="gen-style-2">
                        <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="true" data-desk_num="4" data-lap_num="3" data-tab_num="2" data-mob_num="1" data-mob_sm="1" data-autoplay="false" data-loop="false" data-margin="30">

                            @foreach($category->playlists as $playlist)
                            <div class="item">
                                <div class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-action movie_genre-adventure movie_genre-drama">
                                    <div class="gen-carousel-movies-style-2 movie-grid style-2">
                                        <div class="gen-movie-contain">
                                            <div class="gen-movie-img">
                                                <img src="{{ $playlist->thumbnail }}" alt="owl-carousel-video-image">
                                                <div class="gen-movie-add">
                                                    <div class="wpulike wpulike-heart">
                                                        <div class="wp_ulike_general_class wp_ulike_is_not_liked"><button type="button" class="wp_ulike_btn wp_ulike_put_image"></button></div>
                                                    </div>
                                                    <ul class="menu bottomRight">
                                                        <li class="share top">
                                                            <i class="fa fa-share-alt"></i>
                                                            <ul class="submenu">
                                                                <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                                </li>
                                                                <li><a href="#" class="facebook"><i class="fab fa-instagram"></i></a>
                                                                </li>
                                                                <li><a href="#" class="facebook"><i class="fab fa-twitter"></i></a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                    <div class="movie-actions--link_add-to-playlist dropdown">
                                                        <a class="dropdown-toggle" href="{{ url('playlist/'.$playlist->id) }}" data-toggle="dropdown"><i class="fa fa-plus"></i></a>
                                                        <div class="dropdown-menu mCustomScrollbar">
                                                            <div class="mCustomScrollBox">
                                                                <div class="mCSB_container">
                                                                    <a class="login-link" href="">
                                                                        Sign in to add this movie
                                                                        to a
                                                                        playlist.</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gen-movie-action">
                                                    <a href="{{ url('playlist/'.$playlist->id) }}" class="gen-button">
                                                        <i class="fa fa-tv"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="gen-info-contain">
                                                <div class="gen-movie-info">
                                                    <h3>
                                                        <a href="{{ url('playlist/'.$playlist->id) }}">
                                                            {{ $playlist->title }}
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div class="gen-movie-meta-holder">
                                                    <ul>
                                                        <li> {{ $playlist->videos_youtube_id->count() }} Vídeos</li>
                                                        <li>
                                                            <a href="{{ url('playlist/'.$playlist->id) }}"><span>Action</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- #post-## -->
                            </div>

                            @endforeach

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
    @endforeach


    <!-- owl-carousel Videos Section-1 Start -->



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