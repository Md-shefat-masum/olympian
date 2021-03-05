<div class="topbar">
    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <a href="index.html" class="logo"><i class="md md-terrain"></i> <span>Olympians </span></a>
        </div>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                    <a href="#" class="button-menu-mobile open-left">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
                <li class="hide-phone float-left">
                    <form role="search" class="navbar-form">
                        <input type="text" placeholder="Type here for search..." class="form-control search-bar">
                        <a href="#" class="btn btn-search"><i class="fa fa-search"></i></a>
                    </form>
                </li>
            </ul>

            <ul class="nav navbar-right float-right list-inline">
                <li class="d-none d-sm-block">
                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                </li>
                <li class="dropdown open">
                    <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true">
                    <img src="{{asset('uploads/'.Auth::user()->photo)}}" alt="user-img" class="rounded-circle"> </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{url('admin/profile')}}" class="dropdown-item"><i class="md md-face-unlock mr-2"></i> Profile</a>
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
                </li>
            </ul>
        </div>
    </nav>
</div>