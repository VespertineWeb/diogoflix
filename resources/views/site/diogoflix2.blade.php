<!DOCTYPE html>
<!-- saved from url=(0028)https://movflxx.netlify.app/ -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Diogoflix</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="https://movflxx.netlify.app/img/favicon.png">
    <link rel="stylesheet" href="{{ asset('assets') }}/mov/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/mov/animate.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/mov/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/mov/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/mov/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/mov/flaticon.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/mov/odometer.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/mov/aos.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/mov/slick.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/mov/default.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/mov/style.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/mov/responsive.css">
    <title>React App</title>

    <link href="{{ asset('assets') }}/mov/main.0febfc2c.css" rel="stylesheet">
</head>

<body>
    <div id="preloader" style="display: none;">
        <div id="loading-center">
            <div id="loading-center-absolute"><img src="{{ asset('assets') }}/mov/preloader.svg" alt=""></div>
        </div>
    </div>
    <div id="root">
        <div class="App">
            <div>
                <header>
                    <div id="sticky-header" class="menu-area transparent-header">
                        <div class="container custom-container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                                    <div class="menu-wrap">
                                        <nav class="menu-nav show">
                                            <div class="logo"><a href="https://movflxx.netlify.app/"><img src="{{ asset('assets') }}/mov/logo.png" alt="Logo"></a></div>
                                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                                <ul class="navigation">
                                                    <li class="active menu-item-has-children"><a href="https://movflxx.netlify.app/"> HomeOne </a>
                                                        <ul class="submenu">
                                                            <li class="active"><a href="https://movflxx.netlify.app/">HomeOne </a></li>
                                                            <li><a href="https://movflxx.netlify.app/index-2">Home Two </a></li>
                                                        </ul>
                                                        <div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>
                                                    </li>
                                                    <li class="menu-item-has-children"><a href="https://movflxx.netlify.app/#">Movie</a>
                                                        <ul class="submenu">
                                                            <li><a href="https://movflxx.netlify.app/movie">Movie</a></li>
                                                            <li><a href="https://movflxx.netlify.app/movie-details">Movie Details</a></li>
                                                        </ul>
                                                        <div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>
                                                    </li>
                                                    <li><a href="https://movflxx.netlify.app/tv-show">tv show</a></li>
                                                    <li><a href="https://movflxx.netlify.app/pricing">Pricing</a></li>
                                                    <li class="menu-item-has-children"><a href="https://movflxx.netlify.app/#">blog</a>
                                                        <ul class="submenu">
                                                            <li><a href="https://movflxx.netlify.app/blog">Our Blog</a></li>
                                                            <li><a href="https://movflxx.netlify.app/blog-details">Blog Details</a></li>
                                                        </ul>
                                                        <div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>
                                                    </li>
                                                    <li><a href="https://movflxx.netlify.app/contact">contacts</a></li>
                                                </ul>
                                            </div>
                                            <div class="header-action d-none d-md-block">
                                                <ul>
                                                    <li class="header-search"><a href="https://movflxx.netlify.app/#" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a></li>
                                                    <li class="header-lang">
                                                        <form action="https://movflxx.netlify.app/#">
                                                            <div class="icon"><i class="flaticon-globe"></i></div><select id="lang-dropdown">
                                                                <option value="true">En</option>
                                                                <option value="true">Au</option>
                                                                <option value="true">AR</option>
                                                                <option value="true">TU</option>
                                                            </select>
                                                        </form>
                                                    </li>
                                                    <li class="header-btn"><a href="https://movflxx.netlify.app/#" class="btn">Sign In</a></li>
                                                </ul>
                                            </div>
                                        </nav>
                                    </div>
                                    <div class="mobile-menu">
                                        <div class="close-btn"><i class="fas fa-times"></i></div>
                                        <nav class="menu-box">
                                            <div class="nav-logo"><a href="https://movflxx.netlify.app/"><img src="{{ asset('assets') }}/mov/logo.png" alt=""></a></div>
                                            <div class="menu-outer">
                                                <ul class="navigation">
                                                    <li class="active menu-item-has-children"><a href="https://movflxx.netlify.app/"> HomeOne </a>
                                                        <ul class="submenu">
                                                            <li class="active"><a href="https://movflxx.netlify.app/">HomeOne </a></li>
                                                            <li><a href="https://movflxx.netlify.app/index-2">Home Two </a></li>
                                                        </ul>
                                                        <div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>
                                                    </li>
                                                    <li class="menu-item-has-children"><a href="https://movflxx.netlify.app/#">Movie</a>
                                                        <ul class="submenu">
                                                            <li><a href="https://movflxx.netlify.app/movie">Movie</a></li>
                                                            <li><a href="https://movflxx.netlify.app/movie-details">Movie Details</a></li>
                                                        </ul>
                                                        <div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>
                                                    </li>
                                                    <li><a href="https://movflxx.netlify.app/tv-show">tv show</a></li>
                                                    <li><a href="https://movflxx.netlify.app/pricing">Pricing</a></li>
                                                    <li class="menu-item-has-children"><a href="https://movflxx.netlify.app/#">blog</a>
                                                        <ul class="submenu">
                                                            <li><a href="https://movflxx.netlify.app/blog">Our Blog</a></li>
                                                            <li><a href="https://movflxx.netlify.app/blog-details">Blog Details</a></li>
                                                        </ul>
                                                        <div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>
                                                    </li>
                                                    <li><a href="https://movflxx.netlify.app/contact">contacts</a></li>
                                                </ul>
                                            </div>
                                            <div class="social-links">
                                                <ul class="clearfix">
                                                    <li><a href="https://movflxx.netlify.app/#"><span class="fab fa-twitter"></span></a></li>
                                                    <li><a href="https://movflxx.netlify.app/#"><span class="fab fa-facebook-square"></span></a></li>
                                                    <li><a href="https://movflxx.netlify.app/#"><span class="fab fa-pinterest-p"></span></a></li>
                                                    <li><a href="https://movflxx.netlify.app/#"><span class="fab fa-instagram"></span></a></li>
                                                    <li><a href="https://movflxx.netlify.app/#"><span class="fab fa-youtube"></span></a></li>
                                                </ul>
                                            </div>
                                        </nav>
                                    </div>
                                    <div class="menu-backdrop"></div>
                                    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form><input type="text" placeholder="Search here..."><button><i class="fas fa-search"></i></button></form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>


                <main>







                    <section class="banner-area banner-bg" style="background-image: url({{ $videos[0]->thumbnail }});">
                        <div class="container custom-container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-8">
                                    <div class="banner-content ">
                                        <!-- <h6 class="sub-title animate__animated animate__fadeInUp" data-wow-delay=".2s" data-wow-duration="1.8s">Movflx</h6>
                                        <h2 class="title animate__animated animate__fadeInUp" data-wow-delay=".4s" data-wow-duration="1.8s">Unlimited <span>Movie</span>, TVs Shows, &amp; More.</h2> -->
                                        <div class="banner-meta animate__animated animate__fadeInUp" data-wow-delay=".6s" data-wow-duration="1.8s">
                                            <ul>
                                                <li class="quality">&nbsp;</li>
                                                <li class="category"><a href="https://movflxx.netlify.app/#">&nbsp;</a></li>
                                                <li class="release-time"><span><i class="far fa-calendar-alt"></i> &nbsp;</span></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>




                    <section class="ucm-area ucm-bg" style="background-image: url({{ asset('assets') }}/mov/img/bg/ucm_bg.jpg&quot;);">
                        <div class="ucm-bg-shape" style="background-image: url(&quot;../../img/bg/ucm_bg_shape.png&quot;);"></div>
                        <div class="container">
                            <div class="row align-items-end mb-55">
                                <div class="col-lg-6">
                                    <div class="section-title text-center text-lg-left"><span class="sub-title">ONLINE STREAMING</span>
                                        <h2 class="title">Upcoming Movies</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="tr-movie-menu2-active text-center"><button class="active" data-filter="*">TV Shows</button><button data-filter=".cat-two">documentary</button><button data-filter=".cat-one">Movies</button><button data-filter=".cat-three">sports</button></div>
                                </div>
                            </div>
                            <div class="row tr-movie-active">

                                @foreach($videos as $video)
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                                    <div class="movie-item mb-60">
                                        <div class="movie-poster">
                                            <a href=""><img src="{{ $video->thumbnail }}" alt=""></a>
                                        </div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title">
                                                    <a href="">
                                                        {{ $video->title }}
                                                    </a>
                                                </h5>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">hd</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i>128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i>3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                @endforeach


                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                                    <div class="movie-item mb-60">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster01.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">Women's Day</a></h5><span class="date">2022</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">hd</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i>128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i>3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                                    <div class="movie-item mb-60">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster02.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">The Perfect Match</a></h5><span class="date">2022</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">2k</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i>128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i>3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                                    <div class="movie-item mb-60">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster03.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">The Dog Woof</a></h5><span class="date">2021</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">4k</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i>128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i>3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                                    <div class="movie-item mb-60">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster04.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">The Easy Reach</a></h5><span class="date">2021</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">4k</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i>128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i>3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                                    <div class="movie-item mb-60">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster05.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">The Cooking</a></h5><span class="date">2021</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">4k</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i>128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i>3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                                    <div class="movie-item mb-60">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster06.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">The Hikaru</a></h5><span class="date">2021</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">4k</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i>128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i>3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                                    <div class="movie-item mb-60">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster07.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">Life Quotes</a></h5><span class="date">2021</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">4k</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i>128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i>3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                                    <div class="movie-item mb-60">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster08.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">The Beachball</a></h5><span class="date">2021</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">4k</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i>128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i>3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                                    <div class="movie-item mb-60">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster03.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">The Dog Woof</a></h5><span class="date">2021</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">4k</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i>128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i>3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                                    <div class="movie-item mb-60">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster02.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">The Perfect Match</a></h5><span class="date">2021</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">4k</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i>128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i>3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                                    <div class="movie-item mb-60">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster01.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">Women's Day</a></h5><span class="date">2021</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">4k</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i>128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i>3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                                    <div class="movie-item mb-60">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster03.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">The Dog Woof</a></h5><span class="date">2021</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">4k</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i>128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i>3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="services-area services-bg" style="background-image: url(&quot;../../img/bg/services_bg.jpg&quot;);">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="services-img-wrap"><img src="{{ asset('assets') }}/mov/services_img.jpg" alt=""><a href="{{ asset('assets') }}/mov/services_img.jpg" class="download-btn" download="">Download <img src="{{ asset('assets') }}/mov/download.svg" alt=""></a></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="services-content-wrap">
                                        <div class="section-title title-style-two mb-20"><span class="sub-title">Our Services</span>
                                            <h2 class="title">Download Your Shows Watch Offline.</h2>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod tempor.There are many variations of passages of lorem Ipsum available, but the majority have suffered alteration in some injected humour.</p>
                                        <div class="services-list">
                                            <ul>
                                                <li>
                                                    <div class="icon"><i class="flaticon-television"></i></div>
                                                    <div class="content">
                                                        <h5>Enjoy on Your TV.</h5>
                                                        <p>Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon"><i class="flaticon-video-camera"></i></div>
                                                    <div class="content">
                                                        <h5>Watch Everywhere.</h5>
                                                        <p>Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="top-rated-movie tr-movie-bg" style="background-image: url(&quot;../../img/bg/tr_movies_bg.jpg&quot;);">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="section-title text-center mb-50"><span class="sub-title">ONLINE STREAMING</span>
                                        <h2 class="title">Top Rated Movies</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="tr-movie-menu-active text-center"><button class="active" data-filter="*">TV Shows</button><button data-filter=".cat-one">Movies</button><button data-filter=".cat-two">documentary</button><button data-filter=".cat-three">sports</button></div>
                                </div>
                            </div>
                            <div class="row tr-movie-active">
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                                    <div class="movie-item mb-60">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster01.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">Women's Day</a></h5><span class="date">2022</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">hd</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i>128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i>3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                                    <div class="movie-item mb-60">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster02.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">The Perfect Match</a></h5><span class="date">2022</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">2k</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i>128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i>3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                                    <div class="movie-item mb-60">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster03.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">The Dog Woof</a></h5><span class="date">2021</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">4k</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i>128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i>3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                                    <div class="movie-item mb-60">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster04.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">The Easy Reach</a></h5><span class="date">2021</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">4k</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i>128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i>3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                                    <div class="movie-item mb-60">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster05.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">The Cooking</a></h5><span class="date">2021</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">4k</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i>128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i>3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                                    <div class="movie-item mb-60">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster06.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">The Hikaru</a></h5><span class="date">2021</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">4k</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i>128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i>3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                                    <div class="movie-item mb-60">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster07.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">Life Quotes</a></h5><span class="date">2021</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">4k</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i>128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i>3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                                    <div class="movie-item mb-60">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster08.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">The Beachball</a></h5><span class="date">2021</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">4k</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i>128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i>3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                                    <div class="movie-item mb-60">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster03.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">The Dog Woof</a></h5><span class="date">2021</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">4k</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i>128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i>3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                                    <div class="movie-item mb-60">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster02.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">The Perfect Match</a></h5><span class="date">2021</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">4k</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i>128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i>3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                                    <div class="movie-item mb-60">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster01.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">Women's Day</a></h5><span class="date">2021</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">4k</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i>128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i>3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                                    <div class="movie-item mb-60">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster03.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">The Dog Woof</a></h5><span class="date">2021</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">4k</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i>128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i>3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="live-area live-bg fix" style="background-image: url(&quot;../../img/bg/live_bg.jpg&quot;);">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-5 col-lg-6">
                                    <div class="section-title title-style-two mb-25"><span class="sub-title">ONLINE STREAMING</span>
                                        <h2 class="title">Live Movie &amp; TV Shows For Friends &amp; Family</h2>
                                    </div>
                                    <div class="live-movie-content">
                                        <p>Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod There are many variations of passages of lorem Ipsum available, but the majority have suffered alteration.</p>
                                        <div class="live-fact-wrap">
                                            <div class="resolution">
                                                <h2>HD 4K</h2>
                                            </div>
                                            <div class="active-customer">
                                                <h4> <span>
                                                        <div>20</div>
                                                    </span> K+</h4>
                                                <p>Active Customer</p>
                                            </div>
                                        </div><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="btn popup-video"><i class="fas fa-play"></i> Watch Now</a>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-6">
                                    <div class="live-movie-img animate__animated animate__fadeInRight" data-wow-delay=".2s" data-wow-duration="1.8s"><img src="{{ asset('assets') }}/mov/live_img.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="tv-series-area tv-series-bg" style="background-image: url(&quot;../../img/bg/tv_series_bg.jpg&quot;);">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="section-title text-center mb-50"><span class="sub-title">Best TV Series</span>
                                        <h2 class="title">World Best TV Series</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="movie-item mb-50">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster09.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">Women's Day</a></h5><span class="date">2022</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">hd</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i> 128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="movie-item mb-50">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster10.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">The Perfect Match</a></h5><span class="date">2022</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">4k</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i> 128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="movie-item mb-50">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster03.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">The Dog Woof</a></h5><span class="date">2022</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">hd</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i> 128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="movie-item mb-50">
                                        <div class="movie-poster"><a href="https://movflxx.netlify.app/movie-details"><img src="{{ asset('assets') }}/mov/ucm_poster04.jpg" alt=""></a></div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="https://movflxx.netlify.app/movie-details">The Easy Reach</a></h5><span class="date">2022</span>
                                            </div>
                                            <div class="bottom">
                                                <ul>
                                                    <li><span class="quality">hd</span></li>
                                                    <li><span class="duration"><i class="far fa-clock"></i> 128 min</span><span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="newsletter-area newsletter-bg" style="background-image: url(&quot;../../img/bg/newsletter_bg.jpg&quot;);">
                        <div class="container">
                            <div class="newsletter-inner-wrap">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="newsletter-content">
                                            <h4>Trial Start First 30 Days.</h4>
                                            <p>Enter your email to create or restart your membership.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <form action="https://movflxx.netlify.app/#" class="newsletter-form"><input type="email" required="" placeholder="Enter your email"><button class="btn">get started</button></form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
                <footer>
                    <div class="footer-top-wrap">
                        <div class="container">
                            <div class="footer-menu-wrap">
                                <div class="row align-items-center">
                                    <div class="col-lg-3">
                                        <div class="footer-logo"><a href="https://movflxx.netlify.app/"><img src="{{ asset('assets') }}/mov/logo.png" alt=""></a></div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="footer-menu">
                                            <nav>
                                                <ul class="navigation">
                                                    <li><a href="https://movflxx.netlify.app/index">Home</a></li>
                                                    <li><a href="https://movflxx.netlify.app/index">Movie</a></li>
                                                    <li><a href="https://movflxx.netlify.app/index">tv show</a></li>
                                                    <li><a href="https://movflxx.netlify.app/index">pages</a></li>
                                                    <li><a href="https://movflxx.netlify.app/pricing">Pricing</a></li>
                                                </ul>
                                                <div class="footer-search">
                                                    <form action="https://movflxx.netlify.app/#"><input type="text" placeholder="Find Favorite Movie"><button><i class="fas fa-search"></i></button></form>
                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-quick-link-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <div class="quick-link-list">
                                            <ul>
                                                <li><a href="https://movflxx.netlify.app/#">FAQ</a></li>
                                                <li><a href="https://movflxx.netlify.app/#">Help Center</a></li>
                                                <li><a href="https://movflxx.netlify.app/#">Terms of Use</a></li>
                                                <li><a href="https://movflxx.netlify.app/#">Privacy</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="footer-social">
                                            <ul>
                                                <li><a href="https://movflxx.netlify.app/#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="https://movflxx.netlify.app/#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="https://movflxx.netlify.app/#"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="https://movflxx.netlify.app/#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copyright-wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="copyright-text">
                                        <p>Copyright © 2022. All Rights Reserved By <a href="https://movflxx.netlify.app/#">Movflx</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="payment-method-img text-center text-md-right"><img src="{{ asset('assets') }}/mov/card_img.png" alt="img"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div><button class="scroll-top scroll-to-target" data-target="html"><i class="fas fa-angle-up"></i></button>
</body>

</html>