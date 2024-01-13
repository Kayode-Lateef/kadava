<header class="header clearfix element_to_stick">
        <div class="container-fluid">
            <div id="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('frontend/img/Kadava_logo.png') }}" width="140" alt="" class="logo_normal">
                    <img src="{{ asset('frontend/img/Kadava_logo_black.png') }}" width="120" alt="" class="logo_sticky">
                </a>
            </div>

            <!-- Top menu based on authentication status -->
            @guest
                <ul id="top_menu">
                    <li><a href="{{ route('login') }}" class="btn_access">Log In</a></li>
                    <li><a href="{{ route('register') }}" class="btn_access green">Join Free</a></li>
                </ul>
            @else
                <ul id="top_menu" class="drop_user">
                    <li>
                        <div class="dropdown user clearfix">
                            <a href="#" data-bs-toggle="dropdown">
                                <figure><img src="@if (Auth::user()->avatar != ''){{ URL::asset(Auth::user()->avatar) }}@else{{ URL::asset('assets/images/users/avatar-1.png') }}@endif" alt=""></figure>{{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-content">
                                    <ul>
                                        @if (Auth::user()->isAdmin())
                                            <li><a href="{{ route('admin.dashboard') }}"><i class="icon_cog"></i>Dashboard</a></li>
                                        @else
                                            <li><a href="{{ route('user.dashboard') }}"><i class="icon_cog"></i>Dashboard</a></li>
                                        @endif
                                        <li>
                                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                <i class="icon_key"></i>Log out
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /dropdown -->
                    </li>
                </ul>
            @endguest
                <!-- /top_menu -->
                <a href="#0" class="open_close">
                    <i class="icon_menu"></i><span>Menu</span>
                </a>
                <nav class="main-menu">
                    <div id="header_menu">
                        <a href="#0" class="open_close">
                            <i class="icon_close"></i><span>Menu</span>
                        </a>
                        <a href="{{ route('home') }}"><img src="{{ asset('frontend/img/Kadava_logo.png') }}" width="155" height="" alt=""></a>
                    </div>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('ad_search') }}">Product Search</a></li>
                        <li><a href="{{ route('pricing') }}">Pricing</a></li>
                    </ul>
                </nav>

        </div>
    </header>
