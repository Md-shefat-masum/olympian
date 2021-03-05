<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="pull-left">                
                <img src="{{asset('uploads/'.Auth::user()->photo)}}" alt="photo" class="thumb-md rounded-circle">
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{url('admin/profile')}}" class="dropdown-item"><i class="md md-face-unlock mr-2"></i> Profile<div class="ripple-wrapper"></div></a>
                        </li>
                        <li>
                            <a href="{{url('admin/manage/basic')}}" class="dropdown-item"><i class="md md-settings mr-2"></i> Settings</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" class="dropdown-item" 
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="md md-settings-power mr-2"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                
                <p class="text-muted m-0">{{ Auth::user()->role->role_name }}</p>
            </div>
        </div>
        <!--- Divider -->
        <div id="sidebar-menu">
            @if (Request::is('admin*'))
            <ul>
                @if(Auth::user()->role_id <= 3)
                <li>
                    <a href="{{ url('/admin') }}" class="waves-effect"><i class="md md-home"></i><span> Dashboard </span></a>
                </li>
                @endif

                @if(Auth::user()->role_id == 1)
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="fa fa-users"></i><span> Users </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('admin/users/create') }}">Add User</a></li>
                        <li><a href="{{ url('admin/users') }}">All Users</a></li>
                    </ul>
                </li>
                @endif

                @if(Auth::user()->role_id <= 2)
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-camera-alt"></i><span> Banners </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('admin/banners/create') }}">Add Banner</a></li>
                        <li><a href="{{ url('admin/banners') }}">All Banners</a></li>
                    </ul>
                </li>
                @endif

                @if(Auth::user()->role_id <= 2)
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-settings"></i><span> Manage </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('admin/manage/basic') }}">Basic Information</a></li>
                        <li><a href="{{ url('admin/manage/social') }}">Social Media</a></li>
                        <li><a href="{{ url('admin/manage/contact') }}">Contact Information</a></li>
                    </ul>
                </li>
                @endif

                @if(Auth::user()->role_id <= 2)
                <li>
                    <a href="{{url('admin/clients')}}" class="waves-effect"><i class="fa fa-user"></i><span> Clients </span></a>
                </li>
                @endif

                @if(Auth::user()->role_id <= 2)
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="fa fa-gamepad"></i><span> Games </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('admin/games/create') }}">Add Game</a></li>
                        <li><a href="{{ url('admin/games') }}">All Games</a></li>
                    </ul>
                </li>
                @endif

                @if(Auth::user()->role_id <= 2)
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-list"></i><span> Pages </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('admin/about')}}">About Page</a></li>
                        <li><a href="{{url('admin/page')}}"> Game Page </a></li>
                    </ul>
                </li>
                @endif

                @if(Auth::user()->role_id <= 2)
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-subject"></i><span> Categories </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('admin/categories/create')}}">Add Category</a></li>
                        <li><a href="{{url('admin/categories')}}"> All Categories </a></li>
                    </ul>
                </li>
                @endif

                @if(Auth::user()->role_id <= 2)
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="fa fa-pencil"></i><span> Posts </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('admin/posts/create')}}">Add Post</a></li>
                        <li><a href="{{url('admin/posts')}}"> All Posts </a></li>
                    </ul>
                </li>
                @endif

                @if(Auth::user()->role_id <= 2)
                <li>
                    <a href="{{url('admin/comments')}}" class="waves-effect"><i class="fa fa-commenting"></i><span> Comments</span></a>
                </li>
                @endif

                @if(Auth::user()->role_id <= 2)
                <li>
                    <a href="{{url('admin/contactus')}}" class="waves-effect"><i class="md md-message"></i><span> Messages Received</span></a>
                </li>
                @endif

                @if(Auth::user()->role_id <= 2)
                <li>
                    <a href="{{url('admin/newsletter')}}" class="waves-effect"><i class="md md-assignment"></i><span> Newsletter</span></a>
                </li>
                @endif

                @if(Auth::user()->role_id <= 2)
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="fa fa-camera-retro"></i><span> Gallery </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('admin/galleries/create')}}">Add Gallery</a></li>
                        <li><a href="{{url('admin/galleries')}}"> Gallery Index</a></li>
                    </ul>
                </li>
                @endif

                <li><a href="{{url('/')}}" class="waves-effect" target="_blank"><i class="md md-public"></i><span>Live Site </span></a></li>

                @if(Auth::user()->role_id <= 3)
                <li>
                    <a class="waves-effect" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                        <i class="md md-settings-power"></i><span> Logout </span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                @endif
               
            </ul>
            <div class="clearfix"></div>
            @endif
        </div>
        <div class="clearfix"></div>
    </div>
</div>