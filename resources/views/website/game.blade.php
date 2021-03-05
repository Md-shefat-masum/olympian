@extends('layouts.website')


@section('content')
    <!--Page Title-->
    <section class="page-banner" style="background-image:url({{asset('uploads/'.$page->game_pagebanner)}});">
        <div class="top-pattern-layer"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{$page->home_link}}">Home</a></li>
                        <li><a href="{{$page->link1}}">Games</a></li>
                    </ul>
                    <h1>{{$page->pagename1}}</h1>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Banner-->

    <!--Games Section-->
    <section class="games-section games-page-section">

        <div class="auto-container">

            <div class="row clearfix">
                @foreach ($gms as $gm)
                <!--Game Block-->
                <div class="game-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="{{url('/games/details/'.$gm->id)}}">
                                    <img src="{{asset('uploads/'.$gm->game_photo1)}}" alt="" title="">
                                </a>
                            </figure>
                            <div class="link-box"><a href="{{$gm->game_url}}" class="link-btn"> <span class="btn-title">{{$gm->game_button}}</span></a></div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{url('/games/details/'.$gm->id)}}">{{$gm->game_title}}</a></h3>
                            <div class="text">{{$gm->game_subtitle}}</div>
                            <div class="post-info">
                                <ul class="clearfix">
                                    <li><span class="icon flaticon-calendar-2"></span>{{$gm->game_launchdate->format('M Y')}}</li>
                                    <li><span class="icon flaticon-console"></span>{{$gm->game_company}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="pagination-box" style="padding-left: 2rem;">
                    <ul class="">
                        {{-- styled-pagination --}}
                        {{ $gms->links() }}
                    </ul>
                </div>

                <!--Game Block-->
                {{-- <div class="game-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="game-details.html"><img src="images/resource/game-image-6.jpg" alt="" title=""></a></figure>
                            <div class="link-box"><a href="#" class="link-btn"> <span class="btn-title">Download game</span></a></div>
                        </div>
                        <div class="lower-content">
                            <div class="rating">Rating <span class="ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></div>
                            <h3><a href="game-details.html">Mafia mystrey</a></h3>
                            <div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
                            <div class="post-info">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="icon flaticon-calendar-2"></span>May 2018</a></li>
                                    <li><a href="#"><span class="icon flaticon-console"></span>xbox one</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
        
    </section>

@endsection