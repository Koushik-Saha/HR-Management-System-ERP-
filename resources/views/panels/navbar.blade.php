@if($configData["mainLayoutType"] == 'horizontal')
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu {{ $configData['navbarColor'] }} navbar-fixed">
        <div class="navbar-header d-xl-block d-none">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item"><a class="navbar-brand" href="dashboard-analytics">
                        <div class="brand-logo"></div>
                    </a></li>
            </ul>
        </div>
        @else
            <nav
                    class="header-navbar navbar-expand-lg navbar navbar-with-menu {{ $configData['navbarClass'] }} navbar-light navbar-shadow {{ $configData['navbarColor'] }}">
                @endif
                <div class="navbar-wrapper">
                    <div class="navbar-container content">
                        <div class="navbar-collapse" id="navbar-mobile">
                            <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">

                            </div>
                            <ul class="nav navbar-nav float-right">
                                <li class="dropdown dropdown-user nav-item"><a
                                            class="dropdown-toggle nav-link dropdown-user-link"
                                            href="#" data-toggle="dropdown">
                                        <div class="user-nav d-sm-flex d-none"><span
                                                    class="user-name text-bold-600">{{ \Illuminate\Support\Facades\Auth::user()->name }}</span><span
                                                    class="user-status">Available</span></div>
                                        <span><img class="round"
                                                   src="{{asset('images/portrait/small/avatar-s-11.jpg') }}"
                                                   alt="avatar"
                                                   height="40" width="40"/></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('administrator-details', \Illuminate\Support\Facades\Auth::id()) }}">
                                            <i class="feather icon-user"></i> Edit Profile
                                        </a>
                                        <a class="dropdown-item" href="{{ route('register') }}">
                                            <i class="feather icon-bold"></i>
                                            {{ __('Register') }}
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        <!-- END: Header-->
    </nav>
