@extends('layouts.stream_lab')
@section('title','Home')


@section('content')

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
                                                <a href="{{ url('video/'.$videos[$i]->id) }}" class="">
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




@endsection