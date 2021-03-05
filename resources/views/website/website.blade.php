@extends('layouts.website')
@push('css')
    <link href="{{asset('contents/website')}}/css/home-light-version.css" rel="stylesheet">
@endpush
@section('content')
<!-- Banner Section -->
<section class="banner-section">
    <div class="banner-carousel owl-theme owl-carousel">

        <!-- Slide Item -->
        @foreach ($banners as $ban)
        <div class="slide-item">
            <div class="image-layer" style="background-image:url({{asset('uploads/'.$ban->photo)}}"></div>

            <div class="auto-container">
                <div class="content-box">
                    <div class="content">
                        <!--<h2>{{$ban->ban_title}}</h2> -->
                        <div class="link-box">
                           <!-- <a href="{{$ban->ban_url}}" class="theme-btn btn-style-one"><span class="btn-title">{{$ban->ban_button}}</span></a> -->
                        </div>
                    </div> 
                </div>  
            </div>
        </div>
        @endforeach
        
    </div>
</section>
<!--End Banner Section -->

<!--Games Section-->
<section class="games-section">
    <div class="top-pattern-layer"></div>
    <div class="bottom-pattern-layer"></div>

    <div class="auto-container">
        <!--Title-->
        <div class="sec-title centered"><h2>Game News</h2><span class="bottom-curve"></span></div>

        <div class="row clearfix">
            @foreach ($gmshome as $gmshomesingle)
            <!--Game Block-->
            <div class="game-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="{{url('/games/details/'.$gmshomesingle->id)}}">
                                <img src="{{asset('uploads/'.$gmshomesingle->game_photo1)}}" alt="" title="">
                            </a>
                        </figure>
                        <div class="link-box">
                            <a href="{{$gmshomesingle->game_url}}" class="link-btn"> <span class="btn-title">{{$gmshomesingle->game_button}}</span></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h3><a href="{{url('/games/details/'.$gmshomesingle->id)}}">{{$gmshomesingle->game_title}}</a></h3>
                        <div class="text">{{$gmshomesingle->game_subtitle}}</div>
                        <div class="post-info">
                            <ul class="clearfix">
                                <li><span class="icon flaticon-calendar-2"></span>{{$gmshomesingle->game_launchdate->format('M Y')}}</li>
                                <li><span class="icon flaticon-console"></span>{{$gmshomesingle->game_company}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    
</section>


<!--Sponsors Section-->
<section class="sponsors-section">
    <div class="auto-container">
        
        <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                @foreach ($clients as $client)
                <li class="slide-item">
                    <figure class="image-box">
                        <a href="{{url('/')}}">
                            <img src="{{asset('uploads/'.$client->client_photo)}}" alt="">
                        </a>
                    </figure>
                </li>
                @endforeach
            </ul>
        </div>
        
    </div>
</section>
<!--End Sponsors Section-->

<!--Dual Section-->
<section class="dual-section">
    <div class="top-pattern-layer"></div>
    <div class="home-gallery">
        <div class="auto-container">
            <!--Title-->
            <div class="sec-title centered"><h2>Our gallery</h2><span class="bottom-curve"></span></div>
            <div class="fixed-gallery-box clearfix">
                @foreach ($gallerieshome as $gallery)
                <div class="gallery-item wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image-layer" style="background-image: url({{asset('uploads/'.$gallery->gallery_photo)}});"></div>
                        </div>
                        <div class="hover-box">
                            <a href="{{asset('uploads/'.$gallery->gallery_photo)}}" title="" data-fancybox="home-gallery" class="lightbox-image"><span class="icon flaticon-cross"></span></a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    {{-- Number Speaks --}}
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

    {{-- <div class="bg-image-layer" style="background-image: url(images/background/fact-counter-bg.png);"></div> --}}
    <div class="bg-image-layer" style="background-image: url({{asset('images/background/fact-counter-bg.png')}});"></div>

</section>


<!--Reviews Section-->
{{-- <section class="reviews-section">
    <div class="top-pattern-layer-dark"></div>
    <div class="bottom-pattern-layer-dark"></div>

    <div class="auto-container">
        <!--Title-->
        <div class="sec-title"><h2>Players reviews</h2><span class="bottom-curve"></span></div>

        <div class="testimonial-slider carousel-outer clearfix">
            
            <div class="thumb-carousel-box">
                <ul class="thumb-carousel owl-carousel owl-theme">
                    <li class="thumb"><img src="{{asset('contents/website')}}/images/resource/rev-thumb-1.jpg" alt=""></li>
                    <li class="thumb"><img src="{{asset('contents/website')}}/images/resource/rev-thumb-2.jpg" alt=""></li>
                    <li class="thumb"><img src="{{asset('contents/website')}}/images/resource/rev-thumb-3.jpg" alt=""></li>
                    <li class="thumb"><img src="{{asset('contents/website')}}/images/resource/rev-thumb-1.jpg" alt=""></li>
                    <li class="thumb"><img src="{{asset('contents/website')}}/images/resource/rev-thumb-2.jpg" alt=""></li>
                    <li class="thumb"><img src="{{asset('contents/website')}}/images/resource/rev-thumb-3.jpg" alt=""></li>
                </ul>
            </div>
    
            <div class="text-carousel owl-carousel owl-theme">
                <!--Slide Item-->
                <div class="slide-item">
                    <div class="inner">
                        <div class="text">This is due to their excellent service competitive pricing and customer support. It’s throughly refresing to get such a personal touch. There are many variations of passages of available, but the majority have suffered alteration in some form by injected humour.</div>
                        <div class="info clearfix"><span class="name">Jessica brown</span> &ensp;-&ensp; <span class="date">25 may, 2019</span></div>
                    </div>
                </div>
                <!--Slide Item-->
                <div class="slide-item">
                    <div class="inner">
                        <div class="text">This is due to their excellent service competitive pricing and customer support. It’s throughly refresing to get such a personal touch. There are many variations of passages of available, but the majority have suffered alteration in some form by injected humour.</div>
                        <div class="info clearfix"><span class="name">Kevin Smith</span> &ensp;-&ensp; <span class="date">25 may, 2019</span></div>
                    </div>
                </div>
                <!--Slide Item-->
                <div class="slide-item">
                    <div class="inner">
                        <div class="text">This is due to their excellent service competitive pricing and customer support. It’s throughly refresing to get such a personal touch. There are many variations of passages of available, but the majority have suffered alteration in some form by injected humour.</div>
                        <div class="info clearfix"><span class="name">Christine eve</span> &ensp;-&ensp; <span class="date">25 may, 2019</span></div>
                    </div>
                </div>
                <!--Slide Item-->
                <div class="slide-item">
                    <div class="inner">
                        <div class="text">This is due to their excellent service competitive pricing and customer support. It’s throughly refresing to get such a personal touch. There are many variations of passages of available, but the majority have suffered alteration in some form by injected humour.</div>
                        <div class="info clearfix"><span class="name">Jessica brown</span> &ensp;-&ensp; <span class="date">25 may, 2019</span></div>
                    </div>
                </div>
                <!--Slide Item-->
                <div class="slide-item">
                    <div class="inner">
                        <div class="text">This is due to their excellent service competitive pricing and customer support. It’s throughly refresing to get such a personal touch. There are many variations of passages of available, but the majority have suffered alteration in some form by injected humour.</div>
                        <div class="info clearfix"><span class="name">Kevin Smith</span> &ensp;-&ensp; <span class="date">25 may, 2019</span></div>
                    </div>
                </div>
                <!--Slide Item-->
                <div class="slide-item">
                    <div class="inner">
                        <div class="text">This is due to their excellent service competitive pricing and customer support. It’s throughly refresing to get such a personal touch. There are many variations of passages of available, but the majority have suffered alteration in some form by injected humour.</div>
                        <div class="info clearfix"><span class="name">Christine eve</span> &ensp;-&ensp; <span class="date">25 may, 2019</span></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
</section> --}}

<!--Video Section-->
{{-- <section class="video-section">
    <div class="image-layer" style="background-image: url(images/background/video-bg.jpg);"></div>

    <div class="auto-container">
        <div class="content-box wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2500ms">
            <div class="link-box">
                <a href="{{asset('contents/website')}}/https://www.youtube.com/watch?v=ticp6ScuyLY" class="lightbox-image"><span class="icon fa fa-play"></span></a>
            </div>
            <h2> INNOVATION</h2>
        </div>
    </div>
</section> --}}


<!--Team Section-->
<section class="team-section">
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


<!--News Section-->
<section class="news-section">

    <div class="auto-container">
        <!--Title-->
        <div class="sec-title centered"><h2>latest Blog Posts</h2><span class="bottom-curve"></span></div>

        <div class="row clearfix">

            @foreach ($latestPosts as $latestPost)
            <!--News Block-->
            <div class="news-block col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <figure class="image-box">
                        <a href="{{url('blog/details/'.$latestPost->id)}}">
                            <img src="{{asset('uploads/'.$latestPost->post_image)}}" alt="" title="">
                        </a>
                    </figure>
                    <div class="over-box">
                        <div class="date">
                            <span class="date-title">{{$latestPost->created_at->format('d M, Y')}}</span>
                        </div>
                        <h3>
                            <a href="{{url('blog/details/'.$latestPost->id)}}">{{$latestPost->post_title}}</a>
                        </h3>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>

@endsection