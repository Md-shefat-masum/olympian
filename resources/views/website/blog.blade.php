@extends('layouts.website')

@section('content')
    <!--Page Title-->
    <section class="page-banner" style="background-image:url({{asset('uploads/'.$page->blog_pagebanner)}});">
        <div class="top-pattern-layer"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{$page->home_link}}">Home</a></li>
                        <li><a href="{{$page->link3}}">Blog</a></li>
                    </ul>
                    <h1>{{$page->pagename3}}</h1>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Banner-->

    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side / Blog Detail-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-default">
                        @foreach ($posts as $post)
                        <!-- News Block -->
                        <div class="news-block-two wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="{{url('blog/details/'.$post->id)}}">
                                            <img src="{{asset('uploads/'.$post->post_image)}}" alt="blog_image" />
                                        </a>
                                    </figure>
                                    <div class="post-date">{{$post->created_at->format('d M Y')}}</div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{url('blog/details/'.$post->id)}}">{{$post->post_title}}</a></h3>
                                    <ul class="post-info">
                                        <li>by <a href="#">{{$post->user->name}}</a></li>
                                        <li><a href="#">{{$post->comments->count()}} Comments</a></li>
                                    </ul>
                                    <div class="text">{{$post->post_body1}}</div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>

                    <div class="pagination-box">
                        <ul class="">
                            {{-- styled-pagination --}}
                            {{-- <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><span class="fa fa-angle-right"></span></a></li> --}}
                            {{ $posts->links() }}
                        </ul>
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">
                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                            <form method="get" action="/">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search" required="">
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!-- Post Widget -->
                        <div class="sidebar-widget popular-posts">
                            <div class="widget-content">
                                <h4 class="sidebar-title">Recent Posts</h4>
                                @foreach ($recentPosts as $recentPost)
                                <article class="post">
                                    <div class="post-inner">
                                        <figure class="post-thumb">
                                            <a href="{{url('blog/details/'.$recentPost->id)}}">
                                                <img src="{{asset('uploads/'.$recentPost->post_thumb)}}" alt="blog_image">
                                            </a>
                                        </figure>
                                        <div class="text">
                                            <a href="{{url('blog/details/'.$recentPost->id)}}">{{$recentPost->post_title}}</a>
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                            </div>
                        </div>

                        <!-- Category Widget -->
                        <div class="sidebar-widget categories">
                            <div class="widget-content">
                                <h4 class="sidebar-title">Categories</h4>
                                <!-- Blog Category -->
                                <ul class="blog-categories">
                                    @foreach ($categories as $category)    
                                    <li><a href="#">{{$category->cate_name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>           
                    </aside>
                </div>
            </div>
        </div>
    </div>

    
@endsection