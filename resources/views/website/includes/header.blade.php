<header class="main-header header-style-one">
    <div class="header-container">
        <!--Header Background Shape-->
        <div class="bg-shape-box"><div class="bg-shape"></div></div>

        <!-- Header Top -->
        <div class="header-top">
            <div class="inner clearfix">
                <div class="top-left">
                    <div class="top-text">{{$basic->basic_subtitle}}</div>
                </div>

                <div class="top-right">
                    <ul class="info clearfix">
                        <li><a href="tel:{{$conInfo->ci_phone1}}">{{$conInfo->ci_phone1}}</a></li>
                        <li><a href="mailto:{{$conInfo->ci_email1}}">{{$conInfo->ci_email1}}</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container clearfix">
                <!--Logo-->
                <div class="logo-box">
                    <div class="logo">
                        <a href="{{url('/')}}" title="{{$basic->basic_title}}">
                            <img src="{{asset('uploads/'.$basic->basic_logo)}}" alt="{{$basic->basic_title}}" title="{{$basic->basic_title}}">
                        </a>
                    </div>
                </div>

                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span></div>

                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="{{ Request::is('/') ? ' current':'' }}">
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li class="{{ Request::is('about') ? ' current':'' }}"><a href="{{url('/about')}}">About</a>
                                </li>
                                <li class="{{ Request::is('games*') ? ' current':'' }}">
                                    <a href="{{url('/games')}}">Games</a>
                                </li>

                                <li class="{{ Request::is('gallery') ? ' current':'' }}">
                                    <a href="{{url('/gallery')}}">Gallery</a>
                                </li>
                                
                                <li class="{{ Request::is('blog*') ? ' current':'' }}">
                                    <a href="{{url('/blog')}}">Blog
                                    </a>
                                </li>
                                <li class="{{ Request::is('contact') ? ' current':'' }}">
                                    <a href="{{url('/contact')}}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                    
                    <ul class="social-links clearfix">
                        @if($social->sm_twitter != '')
                        <li><a href="{{$social->sm_twitter}}"><span class="fab fa-twitter"></span></a></li>
                        @endif
                        @if($social->sm_facebook != '')
                        <li><a href="{{$social->sm_facebook}}"><span class="fab fa-facebook-square"></span></a></li>
                        @endif
                        @if($social->sm_linkedin != '')
                        <li><a href="{{$social->sm_linkedin}}"><span class="fab fa-linkedin-in"></span></a></li>
                        @endif
                        @if($social->sm_pinterest != '')
                        <li><a href="{{$social->sm_pinterest}}"><span class="fab fa-pinterest-p"></span></a></li>
                        @endif
                    </ul>
                    
                </div>
            </div>
        </div>
        <!--End Header Upper-->
    </div><!--End Header Container-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{{url('/')}}" title="">
                    <img src="{{asset('uploads/'.$basic->basic_stickylogo)}}" alt="sticky-logo" title="">
                </a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->
            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-cancel"></span></div>
        
        <nav class="menu-box">
            <div class="nav-logo">
                <a href="{{url('/')}}">
                    <img src="{{asset('uploads/'.$basic->basic_flogo)}}" alt="" title="">
                </a>
            </div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    @if($social->sm_twitter != '')
                    <li><a href="{{$social->sm_twitter}}"><span class="fab fa-twitter"></span></a></li>
                    @endif
                    @if($social->sm_facebook != '')
                    <li><a href="{{$social->sm_facebook}}"><span class="fab fa-facebook-square"></span></a></li>
                    @endif
                    @if($social->sm_pinterest != '')
                    <li><a href="{{$social->sm_pinterest}}"><span class="fab fa-pinterest-p"></span></a></li>
                    @endif
                    @if($social->sm_instagram != '')
                    <li><a href="{{$social->sm_instagram}}"><span class="fab fa-instagram"></span></a></li>
                    @endif
                    @if($social->sm_youtube != '')
                    <li><a href="{{$social->sm_youtube}}"><span class="fab fa-youtube"></span></a></li>
                    @endif
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->
</header>