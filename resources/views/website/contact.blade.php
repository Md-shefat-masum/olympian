@extends('layouts.website')

@section('content')
    <!--Page Title Original-->
    {{-- <section class="page-banner contact-banner">
        <div class="top-pattern-layer-dark"></div>
        <div class="banner-inner">
            <!--Map Canvas-->
            <div class="map-canvas"
                data-zoom="12"
                data-lat="-37.817085"
                data-lng="144.955631"
                data-type="roadmap"
                data-hue="#ffc400"
                data-title="Envato"
                data-icon-path="{{asset('images/icons/map-marker.png')}}"
                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
            </div>
        </div>
    </section> --}}


    <section class="page-banner" style="background-image:url({{asset('uploads/'.$page->contact_pagebanner)}});">
        <div class="top-pattern-layer"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{$page->home_link}}">Home</a></li>
                        <li><a href="{{$page->link4}}">Contact</a></li>
                    </ul>
                    <h1>{{$page->pagename4}}</h1>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Banner-->




    <!--Contact Info Section-->
    <section class="cont-info-section">
        <div class="bottom-pattern-layer-dark"></div>

        <div class="auto-container">

            <div class="row clearfix">
                
                <!--Info Bock-->
                <div class="info-block col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <h3>About us</h3>
                        <div class="text">{{$basic->basic_aboutus}}</div>
                    </div>
                </div>

                <!--Info Bock-->
                <div class="info-block col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <h3>Our Address</h3>
                        <div class="text">
                            {{$conInfo->ci_add1 }} <br>
                            {{$conInfo->ci_add2}}
                        </div>
                    </div>
                </div>

                <!--Info Bock-->
                <div class="info-block col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <h3>Contact</h3>
                        <div class="text">
                            <ul>
                                <li>Email: <a href="mailto:{{$conInfo->ci_email1 }}">{{$conInfo->ci_email1 }}</a></li>
                                <li>Phone: <a href="tel:{{$conInfo->ci_phone1 }}">{{$conInfo->ci_phone1 }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!--Contact Section-->
    <section class="contact-section">
        <div class="auto-container">
            <!--Title-->
            <div class="sec-title centered"><h2>Get in touch</h2><span class="bottom-curve"></span></div>
            {{-- id="contact-form" --}}
            <div class="form-box">
                <div class="default-form contact-form">
                    <form method="post" action="{{url('/contact/store')}}">
                        @csrf
                        <div class="row clearfix">                                    
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group @error('conus_name') is-invalid @enderror">
                                <input type="text" name="conus_name" placeholder="Full Name" value="{{old('conus_name')}}">
                                @error('conus_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <input type="email" name="conus_email" placeholder="Email Address" value="{{old('conus_email')}}">
                            </div>

                            <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                                <input type="text" name="conus_phone" placeholder="Phone Number" value="{{old('conus_phone')}}">
                            </div>

                            <div class="col-md-12 col-sm-12 form-group @error('conus_mess') is-invalid @enderror">
                                <textarea name="conus_mess" placeholder="Write a Message" value="{{old('conus_mess')}}"></textarea>
                                @error('conus_mess')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12 col-sm-12 form-group">
                                <div class="text-center">
                                    <button class="theme-btn btn-style-one" type="submit"><span class="btn-title">Send Message</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection