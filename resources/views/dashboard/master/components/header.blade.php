<header class="header-top">
    <nav class="navbar navbar-light">
        <div class="navbar-left">
            <div class="logo-area">
                <a class="navbar-brand" href="{{ route('dashboard.index') }}">
                    <img class="dark" src="https://vascomm.co.id/package/assets/logo_vascomm_panjang.png" alt="logo" />
                    <img class="light" src="https://vascomm.co.id/package/assets/logo_vascomm_panjang.png" alt="logo" />
                </a>
                <a href="#" class="sidebar-toggle">
                    <img class="svg" src="{{ asset('assets/dashboard/img/svg/align-center-alt.svg') }}" alt="img" />
                </a>
            </div>
            <div class="top-menu">
                <div class="hexadash-top-menu position-relative">
                    <ul class="d-flex align-items-center flex-wrap">
                        <li>
                            <a href="#" class="active">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="navbar-right">
            <ul class="navbar-right__menu">
                <li class="nav-author">
                    <div class="dropdown-custom">
                        <a href="javascript:;" class="nav-item-toggle">
                            @if (Auth::user()->photo)
                                <img src="{{ Auth::user()->photopath }}" alt="" class="rounded-circle" />
                            @else
                                <img src="{{ asset('assets/dashboard/img/nopic.jpg') }}" alt="" class="rounded-circle" />
                            @endif
                            <span class="nav-item__title">
                                {{ Auth::user()->name }}
                                <i class="las la-angle-down nav-item__arrow"></i>
                            </span>
                        </a>
                        <div class="dropdown-parent-wrapper">
                            <div class="dropdown-wrapper">
                                <div class="nav-author__info">
                                    <div class="author-img">
                                        @if (Auth::user()->photo)
                                            <img src="{{ Auth::user()->photopath }}" alt="" class="rounded-circle" />
                                        @else
                                            <img src="{{ asset('assets/dashboard/img/nopic.jpg') }}" alt="" class="rounded-circle" />
                                        @endif
                                    </div>
                                    <div>
                                        <h6>{{ Auth::user()->name }}</h6>
                                        <span>{{ Auth::user()->role->name }}</span>
                                    </div>
                                </div>
                                <div class="nav-author__options">
                                    <ul>
                                        <li>
                                            <a href="#"> <i class="uil uil-user"></i> Profil</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="uil uil-setting"></i>
                                                Pengaturan
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="uil uil-bell"></i> Bantuan</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('front.index') }}"> <i class="uil uil-rocket"></i> Landing Page</a>
                                        </li>
                                    </ul>
                                    <a class="text-left nav-author__signout" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        <i class="uil uil-sign-out-alt"></i>
                                        Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>