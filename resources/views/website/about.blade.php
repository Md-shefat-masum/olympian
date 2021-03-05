@extends('layouts.website')

@section('content')
    <!--Page Title-->
    <section class="page-banner" style="background-image:url({{asset('uploads/'.$aboutus->about_pagebanner)}});">
        <div class="top-pattern-layer"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{$aboutus->about_toplinkone}}">Home</a></li>
                        <li><a href="{{$aboutus->about_toplinktwo}}">About</a></li>
                    </ul>
                    <h1>{{$aboutus->about_pagename}}</h1>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Banner-->

    <!--About Section-->
    <section class="about-section">
        <div class="bottom-pattern-layer-dark"></div>

        <div class="about-content">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Text Column-->
                    <div class="text-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sec-title"><h2>{{ $aboutus->about_title }}</h2><span class="bottom-curve"></span></div>
                            <div class="text">
                                <p>{{ $aboutus->about_description1 }}</p>
                                <p>{{ $aboutus->about_description2 }}</p>
                            </div>
                            <div class="link-box"><a href="{{ $aboutus->about_url }}" class="theme-btn btn-style-one"><span class="btn-title">{{ $aboutus->about_button }}</span></a></div>
                        </div>
                    </div>
                    <!--Image Column-->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image-box"><img src="{{asset('uploads/'.$aboutus->about_photo)}}" alt="" title=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="fact-counter">
            <div class="auto-container">
                <!--Title-->
                <div class="sec-title centered"><h2>Numbers speaks</h2><span class="bottom-curve"></span></div>

                <div class="row clearfix">
                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="count-box"><span class="count-text" data-speed="3000" data-stop="84">0</span></div>
                        <h4 class="counter-title">Games developed</h4>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="count-box">0<span class="count-text" data-speed="1500" data-stop="07">0</span></div>
                        <h4 class="counter-title">years of experience</h4>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                        <div class="count-box"><span class="count-text" data-speed="1500" data-stop="16">0</span></div>
                        <h4 class="counter-title">team members</h4>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                        <div class="count-box"><span class="count-text" data-speed="3000" data-stop="99">0</span></div>
                        <h4 class="counter-title">positive ratings</h4>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="bg-image-layer" style="background-image: url(images/background/fact-counter-bg.png);"></div>
        
    </section>

    <!--Team Section-->
    <section class="team-section bg_light">
        <div class="top-pattern-layer-dark"></div>
        <div class="bottom-pattern-layer-dark"></div>
        <div class="auto-container">
            <!--Title-->
            <div class="sec-title centered"><h2>Our team</h2><span class="bottom-curve"></span></div>
            
            <div class="row clearfix">
                <!--Team Block-->
                @foreach ($users as $team)
                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    
                    <div class="inner-box">
                        <figure class="image-box">
                            <a href="{{asset('contents/website')}}/#">
                                @if($team->photo != '')
                                <img src="{{asset('uploads/'.$team->photo)}}" alt="" title="">
                                @else
                                <img src="{{asset('uploads/avatar.png')}}" alt="" title="">
                                @endif
                            </a>
                        </figure>
                        <div class="lower-box">
                            <h3><a href="{{asset('contents/website')}}/#">{{$team->name}}</a></h3>
                            <div class="designation">{{$team->designation}}</div>
                            <div class="social-links">
                                <ul class="default-social-links clearfix">
                                    <li><a href="{{$team->twitter}}"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="{{$team->fb}}"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="{{$team->linkedin}}"><span class="fab fa-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Team Section Ends -->

        {{-- style="position: relative; background: #07070f !important;" --}}
            {{-- style="opacity: 1 !important; z-index: 1111" --}}

    <!--Sponsors Section-->
    {{-- <section class="sponsors-section" >
        <div class="auto-container">
        
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    @foreach ($clients as $client)
                    <li class="slide-item">
                        <figure class="image-box" >
                            <a href="{{url('/')}}">
                                <img src="{{asset('uploads/'.$client->client_photo)}}" alt="">
                            </a>
                        </figure>
                    </li>
                    @endforeach
                </ul>
            </div>
            
        </div>
    </section> --}}
    <!--End Sponsors Section-->

     <!--Awards Section-->
     {{-- <section class="awards-section">
        <div class="top-pattern-layer-dark"></div>

        <div class="auto-container">
            <!--Game Awards-->
            <div class="game-awards">
                <!--Title-->
                <div class="sec-title centered"><h2>SPECIAL awards</h2><span class="bottom-curve"></span></div>

                <div class="awards">
                    <div class="row clearfix">
                        <!--Award Block-->
                        <div class="award-block col-lg-3 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="upper-title">design <br>award</div>
                                <div class="lower-title">winner 2018</div>
                            </div>
                        </div>
                        <!--Award Block-->
                        <div class="award-block col-lg-3 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="upper-title">Apple tv</div>
                                <div class="lower-title">game of the <br>year</div>
                            </div>
                        </div>
                        <!--Award Block-->
                        <div class="award-block col-lg-3 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="upper-title">google play <br>best</div>
                                <div class="lower-title">developer</div>
                            </div>
                        </div>
                        <!--Award Block-->
                        <div class="award-block col-lg-3 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="upper-title">MGA finalist</div>
                                <div class="lower-title">best audio <br>visual</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}


@endsection