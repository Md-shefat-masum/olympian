@extends('layouts.website')

@section('content')
    <!--Page Title-->
    <section class="page-banner" style="background-image:url({{asset('uploads/'.$page->game_pagebanner)}});">
        <div class="top-pattern-layer"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="games.html">Games</a></li>
                        <li>{{$gm->game_title}}</li>
                    </ul>
                    <h1>{{$gm->game_title}}</h1>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Banner-->

    <!--Games Section-->
    <section class="games-section games-page-section">

        <div class="auto-container">
            <!--Game Details-->
            <div class="game-details">
                <div class="inner">
                    <div class="image-box">
                        <figure class="image">
                            <a href="{{url('/games/details/'.$gm->id)}}" class="lightbox-image">
                                <img src="{{asset('uploads/'.$gm->game_photo2)}}" alt="" title="">
                            </a>
                        </figure>
                    </div>
                    <div class="lower-content">
                        <div class="title-box clearfix">
                            <div class="title">
                                <h2>{{$gm->game_title}}</h2>
                                {{-- <div class="rating">Rating <span class="ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></div> --}}
                                <div class="post-info">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#">
                                                <span class="icon flaticon-calendar-2">
                                                </span>{{$gm->game_launchdate}}
                                            </a>
                                        </li>
                                        <li><a href="#"><span class="icon flaticon-console"></span>{{$gm->game_company}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="link-box">
                                <a href="{{$gm->game_url}}" class="link-btn"> 
                                    <span class="btn-title">{{$gm->game_button}}</span>
                                </a>
                            </div>
                        </div>
                        <div class="text">
                            <p>{{$gm->game_description1}}</p>
                            <ul>
                                <li>{{$gm->game_note1}}</li>
                                <li>{{$gm->game_note2}}</li>
                                <li>{{$gm->game_note3}}</li>
                            </ul>
                        </div>
                        <!--Features-->
                        <div class="game-features">

                            <h2>Game features</h2>

                            <div class="row clearfix">
                                <!--Feature-->
                                <div class="feature-block col-lg-3 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <span class="flaticon-pumpkin"></span>
                                        </div>
                                        <h4>{{$gm->game_feature_title1}}</h4>
                                        <div class="feature-text">
                                            {{$gm->game_feature_subtitle1}}
                                        </div>
                                    </div>
                                </div>
                                <!--Feature-->
                                <div class="feature-block col-lg-3 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <span class="flaticon-multiplayer"></span>
                                        </div>
                                        <h4>{{$gm->game_feature_title2}}</h4>
                                        <div class="feature-text">{{$gm->game_feature_subtitle2}}</div>
                                    </div>
                                </div>
                                <!--Feature-->
                                <div class="feature-block col-lg-3 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <span class="flaticon-multiplayer"></span>
                                        </div>
                                        <h4>{{$gm->game_feature_title3}}</h4>
                                        <div class="feature-text">{{$gm->game_feature_subtitle3}}</div>
                                    </div>
                                </div>
                                <!--Feature-->
                                <div class="feature-block col-lg-3 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <span class="flaticon-multiplayer"></span>
                                        </div>
                                        <h4>{{$gm->game_feature_title4}}</h4>
                                        <div class="feature-text">{{$gm->game_feature_subtitle4}}</div>
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