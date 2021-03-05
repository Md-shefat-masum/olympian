@extends('layouts.website')

@section('content')
    <!--Page Title-->
    <section class="page-banner" style="background-image:url({{asset('uploads/'.$page->gallery_pagebanner)}});">
        <div class="top-pattern-layer"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{$page->home_link}}">Home</a></li>
                        <li><a href="{{$page->link2}}">Gallery</a></li>
                    </ul>
                    <h1>{{$page->pagename2}}</h1>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Banner-->

    <!--Gallery Section-->
    <section class="gallery-section">
        <div class="auto-container">

            <div class="row clearfix">

                <!--Gallery Item-->
                @foreach ($galleriespaginate as $glpaginate)
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="{{asset('uploads/'.$glpaginate->gallery_photo)}}" alt="">
                        </div>
                        <div class="hover-box">
                            <a href="{{asset('uploads/'.$glpaginate->gallery_photo)}}" title="" data-fancybox="home-gallery" class="lightbox-image"><span class="icon flaticon-cross"></span></a>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="pagination-box" style="padding-left: 2rem;">
                    <ul class="">
                        {{-- styled-pagination --}}
                        {{-- <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><span class="fa fa-angle-right"></span></a></li> --}}
                        {{ $galleriespaginate->links() }}
                    </ul>
                </div>





            </div>

        </div>
    </section>



@endsection