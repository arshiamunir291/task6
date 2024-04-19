<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav container-xxl">
    <div class="navbar-container d-flex p-0">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item">
                    <a class="nav-link menu-toggle" href="#">
                        <i class="ficon" data-feather="menu"></i>
                    </a>
                </li>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center">
            <li class="nav-item nav-search">
                <div class="TitleHead">
                    <h2>@yield('Heading')</h2>
                </div>
                {{-- <a class="nav-link nav-link-search d-none">
                    <i class="ficon" data-feather="search"></i>
                </a> --}}
                <div class="search-input open">
                    <div class="search-input-icon"><i data-feather="search"></i></div>
                    <input class="form-control input" type="text" placeholder="Search here..." tabindex="-1"
                        data-search="search">
                    {{-- <div class="search-input-close"><i data-feather="x"></i></div> --}}
                    <ul class="search-list search-list-main"></ul>
                </div>
            </li>
        </ul>
        <ul class="nav navbar-nav align-items-center ms-auto ProfileR_Nav">
            <li class="nav-item dropdown dropdown-user">
                <a class="nav-link dropdown-toggle dropdown-user-link ps-0" id="dropdown-user" href="#"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="avatar">
                        <img class="round" src="{{ asset('app-assets/images/portrait/small/avatar-s-11.jpg') }}"
                            alt="avatar" height="40" width="40">
                        <span class="avatar-status-online"></span>
                    </span>
                    <div class="user-nav d-sm-flex d-none">
                        <span class="user-name fw-bolder">John Doe</span>
                        <span class="user-status">Admin</span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <a class="dropdown-item"  href="{{url('Profile') }}">
                        <i class="me-50" data-feather="user"></i>Profile</a>



                        <a class="dropdown-item" href="app-email.html"><i class="me-50"
                            data-feather="mail"></i>Verification</a>
                            
                            
                            <a class="dropdown-item" href="{{url('securitycenter')}}">
                                <i class="me-50" data-feather="check-square"></i>Security Center</a>
                                
                                
                                <a class="dropdown-item" href="auth-login-cover.html">
                        <i class="me-50" data-feather="power"></i> Logout</a>

<!-- 
                    <div class="dropdown-divider"></div><a class="dropdown-item"
                        href="page-account-settings-account.html"><i class="me-50" data-feather="settings"></i>
                        Settings</a><a class="dropdown-item" href="page-pricing.html"><i class="me-50"
                            data-feather="credit-card"></i> Pricing</a>
                            
                            
                            <a class="dropdown-item" href="page-faq.html">
                                <i class="me-50" data-feather="help-circle"></i> FAQ</a>



                               



                </div> -->
            </li>
            <li class="nav-item dropdown dropdown-notification me-25"><a class="nav-link" href="#"
                    data-bs-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span
                        class="badge rounded-pill bg-danger badge-up">5</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                    <li class="dropdown-menu-header">
                        <div class="dropdown-header d-flex">
                            <h4 class="notification-title mb-0 me-auto">Notifications</h4>
                            <div class="badge rounded-pill badge-light-primary">6 New</div>
                        </div>
                    </li>
                    <li class="dropdown-menu-footer"><a class="btn btn-primary w-100" href="#">Read all
                            notifications</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>