<footer class="main-footer">
    <div class="top-pattern-layer-dark"></div>

    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">
                
                <!--Column-->
                <div class="column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget logo-widget">
                        <div class="widget-title">
                                <h3>About us</h3>
                        </div>
                        <div class="text">
                            {{$basic->basic_aboutus}}
                        </div>
                        <!--Newsletter-->
                        <div class="newsletter-form">
                            <form method="post" action="{{ url('/newsletter/store') }}">
                                @csrf
                                <div class="form-group clearfix @error('email') is-invalid @enderror">
                                    <input type="email" name="email" value="" placeholder="Email address" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <button type="submit" class="theme-btn newsletter-btn"><span class="icon flaticon-arrows-6"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!--Column-->
                <div class="column col-lg-5 col-md-6 col-sm-12">
                    <div class="footer-widget links-widget">
                        <div class="widget-content">
                            <div class="row clearfix">
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="widget-title">
                                        <h3>Explore</h3>
                                    </div>
                                    <ul class="list">
                                        <li><a href="{{url('/about')}}">About</a></li>
                                        <li><a href="{{url('/games')}}">Our Games</a></li>
                                        <li><a href="{{url('/contact')}}">Contact Us</a></li>
                                        <li><a href="{{url('/contact')}}">Help & Support</a></li>
                                        <li><a href="{{url('/blog')}}">Blog</a></li>
                                    </ul>
                                </div>
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="widget-title">
                                        <h3>Our Games</h3>
                                    </div>
                                    <ul class="list">
                                        @foreach ($games as $game)
                                        <li><a href="{{url('/games/details/'.$game->id)}}">{{$game->game_title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                
                <!--Column-->
                <div class="column col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget info-widget">
                        <ul class="contact-info">
                            <li><strong>Phone</strong> <br><a href="tel:{{$conInfo->ci_phone1}}">{{$conInfo->ci_phone1}}</a></li>
                            <li><strong>Address</strong> <br>{{$conInfo->ci_add1}} <br>{{$conInfo->ci_add2}}</li>
                            <li><strong>Email Address</strong> <br><a href="mailto:{{$conInfo->ci_email1}}">{{$conInfo->ci_email1}}</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="outer-container">
            <!--Footer Bottom Shape-->
            <div class="bottom-shape-box"><div class="bg-shape"></div></div>

            <div class="auto-container">
                <!--Scroll to top-->
                <div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-up-arrow"></span></div>
                <!--Scroll to top-->
                <div class="row clearfix">
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <div class="copyright"><span class="logo-icon"></span> &copy; Copyrights 2021 <a href="#">{{$basic->basic_name}}</a> - All Rights Reserved</div>
                    </div>
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <div class="social-links">
                            <ul class="default-social-links">
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
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
</footer>