@extends('layouts.stream_lab')
@section('title','Login')

@section('content')


<section class="gen-section-padding-3 gen-single-movie">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-12">
                <div class="gen-single-movie-wrapper style-1">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="gen-video-holder">

                                {!! $video->embedHtml !!}

                                <!-- <iframe width="100%" height="550px" src="https://www.youtube.com/embed/LXb3EKWsInQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                            </div>
                            <div class="gen-single-movie-info">
                                <h2 class="gen-title">
                                    {{ $video->title }}
                                </h2>
                                <div class="gen-single-meta-holder">
                                    <ul>
                                        <li class="gen-sen-rating">TV-PG</li>
                                        <li>
                                            <i class="fas fa-eye">
                                            </i>
                                            <span>237 Views</span>
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    {{ $video->description }}
                                </p>
                                <div class="gen-after-excerpt">
                                    <div class="gen-extra-data">
                                        <ul>
                                            <li>
                                                <span>Language :</span>
                                                <span>English</span>
                                            </li>
                                            <li>
                                                <span>Subtitles :</span>
                                                <span>English</span>
                                            </li>
                                            <li>
                                                <span>Audio Languages :</span>
                                                <span>English</span>
                                            </li>
                                            <li><span>Genre :</span>
                                                <span>
                                                    <a href="action.html">
                                                        Action, </a>
                                                </span>
                                                <span>
                                                    <a href="adventure.html">
                                                        Documentary </a>
                                                </span>
                                            </li>
                                            <li><span>Run Time :</span>
                                                <span>1hr 24 mins</span>
                                            </li>
                                            <li>
                                                <span>Release Date :</span>
                                                <span>14 Aug,2018</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="gen-socail-share">
                                        <h4 class="align-self-center">Social Share :</h4>
                                        <ul class="social-inner">
                                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li><a href="#" class="facebook"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li><a href="#" class="facebook"><i class="fab fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="pm-inner">
                                <div class="gen-more-like">
                                    <h5 class="gen-more-title">More Like This</h5>
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-6">
                                            <div class="gen-carousel-movies-style-3 movie-grid style-3">
                                                <div class="gen-movie-contain">
                                                    <div class="gen-movie-img">
                                                        <img src="images/background/asset-5.jpeg" alt="streamlab-image">
                                                        <div class="gen-movie-add">
                                                            <div class="wpulike wpulike-heart">
                                                                <div class="wp_ulike_general_class wp_ulike_is_not_liked">
                                                                    <button type="button" class="wp_ulike_btn wp_ulike_put_image"></button>
                                                                </div>
                                                            </div>
                                                            <ul class="menu bottomRight">
                                                                <li class="share top">
                                                                    <i class="fa fa-share-alt"></i>
                                                                    <ul class="submenu">
                                                                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                                        </li>
                                                                        <li><a href="#" class="facebook"><i class="fab fa-instagram"></i></a>
                                                                        </li>
                                                                        <li><a href="#" class="facebook"><i class="fab fa-twitter"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                            <div class="movie-actions--link_add-to-playlist dropdown">
                                                                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-plus"></i></a>
                                                                <div class="dropdown-menu mCustomScrollbar">
                                                                    <div class="mCustomScrollBox">
                                                                        <div class="mCSB_container">
                                                                            <a class="login-link" href="#">Sign in
                                                                                to add this movie to
                                                                                a
                                                                                playlist.</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gen-movie-action">
                                                            <a href="movies-home.html" class="gen-button">
                                                                <i class="fa fa-play"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="gen-info-contain">
                                                        <div class="gen-movie-info">
                                                            <h3><a href="movies-home.html">The warrior life</a></h3>
                                                        </div>
                                                        <div class="gen-movie-meta-holder">
                                                            <ul>
                                                                <li>2hr 00mins</li>
                                                                <li>
                                                                    <a href="action.html"><span>Action</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6">
                                            <div class="gen-carousel-movies-style-3 movie-grid style-3">
                                                <div class="gen-movie-contain">
                                                    <div class="gen-movie-img">
                                                        <img src="images/background/asset-4.jpeg" alt="streamlab-image">
                                                        <div class="gen-movie-add">
                                                            <div class="wpulike wpulike-heart">
                                                                <div class="wp_ulike_general_class wp_ulike_is_not_liked">
                                                                    <button type="button" class="wp_ulike_btn wp_ulike_put_image"></button>
                                                                </div>
                                                            </div>
                                                            <ul class="menu bottomRight">
                                                                <li class="share top">
                                                                    <i class="fa fa-share-alt"></i>
                                                                    <ul class="submenu">
                                                                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                                        </li>
                                                                        <li><a href="#" class="facebook"><i class="fab fa-instagram"></i></a>
                                                                        </li>
                                                                        <li><a href="#" class="facebook"><i class="fab fa-twitter"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                            <div class="movie-actions--link_add-to-playlist dropdown">
                                                                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-plus"></i></a>
                                                                <div class="dropdown-menu mCustomScrollbar">
                                                                    <div class="mCustomScrollBox">
                                                                        <div class="mCSB_container">
                                                                            <a class="login-link" href="#">Sign in
                                                                                to add this movie to
                                                                                a
                                                                                playlist.</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gen-movie-action">
                                                            <a href="movies-home.html" class="gen-button">
                                                                <i class="fa fa-play"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="gen-info-contain">
                                                        <div class="gen-movie-info">
                                                            <h3><a href="movies-home.html">Thieve the bank</a></h3>
                                                        </div>
                                                        <div class="gen-movie-meta-holder">
                                                            <ul>
                                                                <li>30mins</li>
                                                                <li>
                                                                    <a href="action.html"><span>Action</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6">
                                            <div class="gen-carousel-movies-style-3 movie-grid style-3">
                                                <div class="gen-movie-contain">
                                                    <div class="gen-movie-img">
                                                        <img src="images/background/asset-23.jpeg" alt="streamlab-image">
                                                        <div class="gen-movie-add">
                                                            <div class="wpulike wpulike-heart">
                                                                <div class="wp_ulike_general_class wp_ulike_is_not_liked">
                                                                    <button type="button" class="wp_ulike_btn wp_ulike_put_image"></button>
                                                                </div>
                                                            </div>
                                                            <ul class="menu bottomRight">
                                                                <li class="share top">
                                                                    <i class="fa fa-share-alt"></i>
                                                                    <ul class="submenu">
                                                                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                                        </li>
                                                                        <li><a href="#" class="facebook"><i class="fab fa-instagram"></i></a>
                                                                        </li>
                                                                        <li><a href="#" class="facebook"><i class="fab fa-twitter"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                            <div class="movie-actions--link_add-to-playlist dropdown">
                                                                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-plus"></i></a>
                                                                <div class="dropdown-menu mCustomScrollbar">
                                                                    <div class="mCustomScrollBox">
                                                                        <div class="mCSB_container">
                                                                            <a class="login-link" href="#">Sign in
                                                                                to add this movie to
                                                                                a
                                                                                playlist.</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gen-movie-action">
                                                            <a href="movies-home.html" class="gen-button">
                                                                <i class="fa fa-play"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="gen-info-contain">
                                                        <div class="gen-movie-info">
                                                            <h3><a href="movies-home.html">love your life</a></h3>
                                                        </div>
                                                        <div class="gen-movie-meta-holder">
                                                            <ul>
                                                                <li>1hr 46mins</li>
                                                                <li>
                                                                    <a href="action.html"><span>Action</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6">
                                            <div class="gen-carousel-movies-style-3 movie-grid style-3">
                                                <div class="gen-movie-contain">
                                                    <div class="gen-movie-img">
                                                        <img src="images/background/asset-53.jpg" alt="streamlab-image">
                                                        <div class="gen-movie-add">
                                                            <div class="wpulike wpulike-heart">
                                                                <div class="wp_ulike_general_class wp_ulike_is_not_liked">
                                                                    <button type="button" class="wp_ulike_btn wp_ulike_put_image"></button>
                                                                </div>
                                                            </div>
                                                            <ul class="menu bottomRight">
                                                                <li class="share top">
                                                                    <i class="fa fa-share-alt"></i>
                                                                    <ul class="submenu">
                                                                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                                        </li>
                                                                        <li><a href="#" class="facebook"><i class="fab fa-instagram"></i></a>
                                                                        </li>
                                                                        <li><a href="#" class="facebook"><i class="fab fa-twitter"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                            <div class="movie-actions--link_add-to-playlist dropdown">
                                                                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-plus"></i></a>
                                                                <div class="dropdown-menu mCustomScrollbar">
                                                                    <div class="mCustomScrollBox">
                                                                        <div class="mCSB_container">
                                                                            <a class="login-link" href="#">Sign in
                                                                                to add this movie to
                                                                                a
                                                                                playlist.</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gen-movie-action">
                                                            <a href="movies-home.html" class="gen-button">
                                                                <i class="fa fa-play"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="gen-info-contain">
                                                        <div class="gen-movie-info">
                                                            <h3><a href="movies-home.html">my generation</a></h3>
                                                        </div>
                                                        <div class="gen-movie-meta-holder">
                                                            <ul>
                                                                <li>1hr 24mins</li>
                                                                <li>
                                                                    <a href="action.html"><span>Action</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6">
                                            <div class="gen-carousel-movies-style-3 movie-grid style-3">
                                                <div class="gen-movie-contain">
                                                    <div class="gen-movie-img">
                                                        <img src="images/background/asset-26.jpeg" alt="streamlab-image">
                                                        <div class="gen-movie-add">
                                                            <div class="wpulike wpulike-heart">
                                                                <div class="wp_ulike_general_class wp_ulike_is_not_liked">
                                                                    <button type="button" class="wp_ulike_btn wp_ulike_put_image"></button>
                                                                </div>
                                                            </div>
                                                            <ul class="menu bottomRight">
                                                                <li class="share top">
                                                                    <i class="fa fa-share-alt"></i>
                                                                    <ul class="submenu">
                                                                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                                        </li>
                                                                        <li><a href="#" class="facebook"><i class="fab fa-instagram"></i></a>
                                                                        </li>
                                                                        <li><a href="#" class="facebook"><i class="fab fa-twitter"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                            <div class="movie-actions--link_add-to-playlist dropdown">
                                                                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-plus"></i></a>
                                                                <div class="dropdown-menu mCustomScrollbar">
                                                                    <div class="mCustomScrollBox">
                                                                        <div class="mCSB_container">
                                                                            <a class="login-link" href="#">Sign in
                                                                                to add this movie to
                                                                                a
                                                                                playlist.</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gen-movie-action">
                                                            <a href="movies-home.html" class="gen-button">
                                                                <i class="fa fa-play"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="gen-info-contain">
                                                        <div class="gen-movie-info">
                                                            <h3><a href="movies-home.html">spaceman the voyager</a>
                                                            </h3>
                                                        </div>
                                                        <div class="gen-movie-meta-holder">
                                                            <ul>
                                                                <li>1hr 32mins</li>
                                                                <li>
                                                                    <a href="action.html"><span>Action</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6">
                                            <div class="gen-carousel-movies-style-3 movie-grid style-3">
                                                <div class="gen-movie-contain">
                                                    <div class="gen-movie-img">
                                                        <img src="images/background/asset-24.jpeg" alt="streamlab-image">
                                                        <div class="gen-movie-add">
                                                            <div class="wpulike wpulike-heart">
                                                                <div class="wp_ulike_general_class wp_ulike_is_not_liked">
                                                                    <button type="button" class="wp_ulike_btn wp_ulike_put_image"></button>
                                                                </div>
                                                            </div>
                                                            <ul class="menu bottomRight">
                                                                <li class="share top">
                                                                    <i class="fa fa-share-alt"></i>
                                                                    <ul class="submenu">
                                                                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                                        </li>
                                                                        <li><a href="#" class="facebook"><i class="fab fa-instagram"></i></a>
                                                                        </li>
                                                                        <li><a href="#" class="facebook"><i class="fab fa-twitter"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                            <div class="movie-actions--link_add-to-playlist dropdown">
                                                                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-plus"></i></a>
                                                                <div class="dropdown-menu mCustomScrollbar">
                                                                    <div class="mCustomScrollBox">
                                                                        <div class="mCSB_container">
                                                                            <a class="login-link" href="#">Sign in
                                                                                to add this movie to
                                                                                a
                                                                                playlist.</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gen-movie-action">
                                                            <a href="movies-home.html" class="gen-button">
                                                                <i class="fa fa-play"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="gen-info-contain">
                                                        <div class="gen-movie-info">
                                                            <h3><a href="movies-home.html">The last witness</a></h3>
                                                        </div>
                                                        <div class="gen-movie-meta-holder">
                                                            <ul>
                                                                <li>1hr 37mins</li>
                                                                <li>
                                                                    <a href="action.html"><span>Action</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6">
                                            <div class="gen-carousel-movies-style-3 movie-grid style-3">
                                                <div class="gen-movie-contain">
                                                    <div class="gen-movie-img">
                                                        <img src="images/background/asset-29.jpeg" alt="streamlab-image">
                                                        <div class="gen-movie-add">
                                                            <div class="wpulike wpulike-heart">
                                                                <div class="wp_ulike_general_class wp_ulike_is_not_liked">
                                                                    <button type="button" class="wp_ulike_btn wp_ulike_put_image"></button>
                                                                </div>
                                                            </div>
                                                            <ul class="menu bottomRight">
                                                                <li class="share top">
                                                                    <i class="fa fa-share-alt"></i>
                                                                    <ul class="submenu">
                                                                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                                        </li>
                                                                        <li><a href="#" class="facebook"><i class="fab fa-instagram"></i></a>
                                                                        </li>
                                                                        <li><a href="#" class="facebook"><i class="fab fa-twitter"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                            <div class="movie-actions--link_add-to-playlist dropdown">
                                                                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-plus"></i></a>
                                                                <div class="dropdown-menu mCustomScrollbar">
                                                                    <div class="mCustomScrollBox">
                                                                        <div class="mCSB_container">
                                                                            <a class="login-link" href="#">Sign in
                                                                                to add this movie to
                                                                                a
                                                                                playlist.</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gen-movie-action">
                                                            <a href="movies-home.html" class="gen-button">
                                                                <i class="fa fa-play"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="gen-info-contain">
                                                        <div class="gen-movie-info">
                                                            <h3><a href="movies-home.html">shimu the elephant</a>
                                                            </h3>
                                                        </div>
                                                        <div class="gen-movie-meta-holder">
                                                            <ul>
                                                                <li>1hr 54mins</li>
                                                                <li>
                                                                    <a href="action.html"><span>Action</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6">
                                            <div class="gen-carousel-movies-style-3 movie-grid style-3">
                                                <div class="gen-movie-contain">
                                                    <div class="gen-movie-img">
                                                        <img src="images/background/asset-33.jpeg" alt="streamlab-image">
                                                        <div class="gen-movie-add">
                                                            <div class="wpulike wpulike-heart">
                                                                <div class="wp_ulike_general_class wp_ulike_is_not_liked">
                                                                    <button type="button" class="wp_ulike_btn wp_ulike_put_image"></button>
                                                                </div>
                                                            </div>
                                                            <ul class="menu bottomRight">
                                                                <li class="share top">
                                                                    <i class="fa fa-share-alt"></i>
                                                                    <ul class="submenu">
                                                                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                                        </li>
                                                                        <li><a href="#" class="facebook"><i class="fab fa-instagram"></i></a>
                                                                        </li>
                                                                        <li><a href="#" class="facebook"><i class="fab fa-twitter"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                            <div class="movie-actions--link_add-to-playlist dropdown">
                                                                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-plus"></i></a>
                                                                <div class="dropdown-menu mCustomScrollbar">
                                                                    <div class="mCustomScrollBox">
                                                                        <div class="mCSB_container">
                                                                            <a class="login-link" href="#">Sign in
                                                                                to add this movie to
                                                                                a
                                                                                playlist.</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gen-movie-action">
                                                            <a href="movies-home.html" class="gen-button">
                                                                <i class="fa fa-play"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="gen-info-contain">
                                                        <div class="gen-movie-info">
                                                            <h3><a href="movies-home.html">black water</a></h3>
                                                        </div>
                                                        <div class="gen-movie-meta-holder">
                                                            <ul>
                                                                <li>1hr 44mins</li>
                                                                <li>
                                                                    <a href="action.html"><span>Action</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6">
                                            <div class="gen-carousel-movies-style-3 movie-grid style-3">
                                                <div class="gen-movie-contain">
                                                    <div class="gen-movie-img">
                                                        <img src="images/background/asset-8.jpeg" alt="streamlab-image">
                                                        <div class="gen-movie-add">
                                                            <div class="wpulike wpulike-heart">
                                                                <div class="wp_ulike_general_class wp_ulike_is_not_liked">
                                                                    <button type="button" class="wp_ulike_btn wp_ulike_put_image"></button>
                                                                </div>
                                                            </div>
                                                            <ul class="menu bottomRight">
                                                                <li class="share top">
                                                                    <i class="fa fa-share-alt"></i>
                                                                    <ul class="submenu">
                                                                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                                        </li>
                                                                        <li><a href="#" class="facebook"><i class="fab fa-instagram"></i></a>
                                                                        </li>
                                                                        <li><a href="#" class="facebook"><i class="fab fa-twitter"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                            <div class="movie-actions--link_add-to-playlist dropdown">
                                                                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-plus"></i></a>
                                                                <div class="dropdown-menu mCustomScrollbar">
                                                                    <div class="mCustomScrollBox">
                                                                        <div class="mCSB_container">
                                                                            <a class="login-link" href="#">Sign in
                                                                                to add this movie to
                                                                                a
                                                                                playlist.</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gen-movie-action">
                                                            <a href="movies-home.html" class="gen-button">
                                                                <i class="fa fa-play"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="gen-info-contain">
                                                        <div class="gen-movie-info">
                                                            <h3><a href="movies-home.html">shipe of full moon</a>
                                                            </h3>
                                                        </div>
                                                        <div class="gen-movie-meta-holder">
                                                            <ul>
                                                                <li>1hr 35mins</li>
                                                                <li>
                                                                    <a href="action.html"><span>Action</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6">
                                            <div class="gen-carousel-movies-style-3 movie-grid style-3">
                                                <div class="gen-movie-contain">
                                                    <div class="gen-movie-img">
                                                        <img src="images/background/asset-51.jpg" alt="streamlab-image">
                                                        <div class="gen-movie-add">
                                                            <div class="wpulike wpulike-heart">
                                                                <div class="wp_ulike_general_class wp_ulike_is_not_liked">
                                                                    <button type="button" class="wp_ulike_btn wp_ulike_put_image"></button>
                                                                </div>
                                                            </div>
                                                            <ul class="menu bottomRight">
                                                                <li class="share top">
                                                                    <i class="fa fa-share-alt"></i>
                                                                    <ul class="submenu">
                                                                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                                        </li>
                                                                        <li><a href="#" class="facebook"><i class="fab fa-instagram"></i></a>
                                                                        </li>
                                                                        <li><a href="#" class="facebook"><i class="fab fa-twitter"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                            <div class="movie-actions--link_add-to-playlist dropdown">
                                                                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-plus"></i></a>
                                                                <div class="dropdown-menu mCustomScrollbar">
                                                                    <div class="mCustomScrollBox">
                                                                        <div class="mCSB_container">
                                                                            <a class="login-link" href="#">Sign in
                                                                                to add this movie to
                                                                                a
                                                                                playlist.</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gen-movie-action">
                                                            <a href="movies-home.html" class="gen-button">
                                                                <i class="fa fa-play"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="gen-info-contain">
                                                        <div class="gen-movie-info">
                                                            <h3><a href="movies-home.html">The journey of a
                                                                    champion</a></h3>
                                                        </div>
                                                        <div class="gen-movie-meta-holder">
                                                            <ul>
                                                                <li>2hr 23mins</li>
                                                                <li>
                                                                    <a href="action.html"><span>Action</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="gen-load-more-button">
                                                <div class="gen-btn-container">
                                                    <a class="gen-button gen-button-loadmore" href="#">
                                                        <span class="button-text">Load More</span>
                                                        <span class="loadmore-icon" style="display: none;"><i class="fa fa-spinner fa-spin"></i></span>
                                                    </a>
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
    </div>
</section>



@endsection