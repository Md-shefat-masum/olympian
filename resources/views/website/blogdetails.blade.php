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
                    <h1>{{$page->pagename3}} Post</h1>
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
                    <div class="blog-detail">
                        <div class="image-box">
                            <figure class="image">
                                <img src="{{asset('uploads/'.$postsingle->post_image)}}" alt="">
                            </figure>
                        </div>
                        <div class="lower-content">
                            <div class="date"><span class="date-title">{{$postsingle->created_at->format('d M, Y')}}</span></div>
                            <h3>{{$postsingle->post_ttle}}</h3>
                            <ul class="post-info clearfix">
                                <li>by <a href="#">{{$postsingle->user->name}}</a></li>
                                <li><a href="#">{{$postsingle->comments->count()}} Comments</a></li>
                            </ul>
                            <p>{{$postsingle->post_body1}}<br>
                            {{$postsingle->post_body2}}</p>
                            <p>{{$postsingle->post_body3}}</p>
                        </div>
                    </div>

                    <!-- Other Options -->
                    <div class="post-share-options clearfix">
                        <div class="social-links">
                            <ul class="default-social-links clearfix">
                                @if($postsingle->user->twitter != '')
                                <li>
                                    <a href="{{$postsingle->user->twitter}}"><span class="fab fa-twitter"></span></a>
                                </li>
                                @endif
                                @if($postsingle->user->fb != '')
                                <li>
                                    <a href="{{$postsingle->user->fb}}"><span class="fab fa-facebook-square"></span></a>
                                </li>
                                @endif
                                @if($postsingle->user->linkedin)
                                <li>
                                    <a href="{{$postsingle->user->linkedin}}"><span class="fab fa-pinterest-p"></span></a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>

                    <!-- Author Box -->
                    {{-- <div class="author-box">
                        <div class="inner-box">
                            <figure class="thumb"><img src="images/resource/author-thumb.jpg" alt=""></figure>
                            <h3 class="name">Christine Eve</h3>
                            <div class="text">Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae dicta sunt explica lltes port lacus quis enim var sed turpis gilla sed.</div>
                        </div>
                    </div> --}}

                    <!-- Comments Area -->
                    <div class="comments-area">
                        <div class="group-title"><h3>{{$postsingle->comments->count()}} Comment(s)</h3></div>
                        @foreach($postsingle->comments as $comm)
                        <div class="comment-box">
                            {{-- <div class="comment"> --}}
                                {{-- <div class="author-thumb">
                                    <figure class="thumb"><img src="images/resource/thumb-1.jpg" alt=""></figure>
                                </div>  --}}
                                <h4 class="name">{{$comm->name}}</h4>
                                <div class="text">{{$comm->comment}}</div>
                            {{-- </div> --}}
                        </div>
                        @endforeach

                        {{-- <div class="comment-box"> --}}
                            {{-- <div class="comment"> --}}
                                {{-- <div class="author-thumb">
                                    <figure class="thumb"><img src="images/resource/thumb-2.jpg" alt=""></figure>
                                </div>  --}}
                                {{-- <h4 class="name">Sarah Albert</h4>
                                <div class="text">Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo var sed efficitur turpis gilla sed sit amet finibus eros.</div>
                                <div class="reply-btn"><a href="#">Reply</a></div> --}}
                            {{-- </div> --}}
                        {{-- </div> --}}
                    </div>

                    <!--Comment Form-->
                    <div class="comment-form default-form">
                        <div class="group-title"><h3>Leave a comment</h3></div>

                        <form method="post" action="{{url('comment/'.$postsingle->id)}}">
                            @csrf
                            <div class="row clearfix">                                    
                                <div class="col-md-6 col-sm-12 form-group {{$errors->has('name') ? ' has-error':''}}">
                                    <input type="text" name="name" placeholder="Full name" value="{{old('name')}}">
                                    @if($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$errors->first('name')}}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                <div class="col-md-6 col-sm-12 form-group {{$errors->has('email') ? ' has-error':''}}">
                                    <input type="email" name="email" placeholder="Email address" value="{{old('email')}}">
                                    @if($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$errors->first('email')}}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-md-12 col-sm-12 form-group {{$errors->has('comment') ? ' has-error':''}}">
                                    <textarea name="comment" placeholder="Write a comment">{{old('comment')}}</textarea>
                                    @if($errors->has('comment'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$errors->first('comment')}}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-md-12 col-sm-12 form-group">
                                    <button class="theme-btn btn-style-one" type="submit"><span class="btn-title">Post Comment</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">
                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                            <form method="get" action="/">
                                @csrf
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
                                    <li><a href="blog-single.html">{{$category->cate_name}}</a></li>
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