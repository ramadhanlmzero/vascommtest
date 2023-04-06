<!--header-area start-->
<header class="header-area">
    <div class="desktop-header">
        <!--header-top-->
        <div class="header-top">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="topbar-left">
                            <ul class="list-none">
                                <li>SHOP EVENTS & SAVE UP TO <span>65% OFF!</span></li>
                                <li>Call Us: <span>031-8532363</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="topbar-right">
                            <div class="social-icons pull-right">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </div>
                            <div class="currency-bar lang-bar pull-right">
                                <ul>
                                    <li><a href="#"><img src="{{ asset('assets/front/images/icons/gb.png') }}" alt="" />English <i class="fa fa-angle-down"></i></a>
                                        <ul>
                                            <li><a href="#">French</a></li>
                                            <li><a href="#">Chinese</a></li>
                                        </ul>
                                    </li>
                                    <li><span class="br">|</span></li>
                                </ul>
                            </div>
                            <div class="currency-bar pull-right">
                                <ul>
                                    <li><a href="#">USD <i class="fa fa-angle-down"></i></a>
                                        <ul>
                                            <li><a href="#">EUR</a></li>
                                            <li><a href="#">AUD</a></li>
                                        </ul>
                                    </li>
                                    <li><span>|</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header-bottom-->
        <div class="sticker header-bottom">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="#">
                                <img src="https://vascomm.co.id/package/assets/logo_vascomm_panjang.png" alt="logo" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mainmenu">  
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="text-label label-featured">Featured</span>
                                            Shop
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Blog
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Contact
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="register-login pull-right">
                            @if (Auth::check())
                                <div class="currency-bar">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-fw fa-user"></i>
                                                {{ Auth::user()->name }}
                                                <b class="caret"></b>
                                            </a>
                                            <ul>
                                                @if ( Auth::user()->isRole('Administrator'))
                                                    <li>
                                                        <a href="{{ route('dashboard.index') }}">
                                                            Dashboard Administrator
                                                        </a>
                                                    </li>
                                                @endif
                                                <li>
                                                    <a class="text-left" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                        Logout
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            @else
                                <a href="{{ route('register.index') }}">
                                    Register
                                </a>
                                <span>/</span>
                                <a href="{{ route('login') }}">
                                    Login
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--products-search-->
        <div class="products-search">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-xl-2 col-lg-3">
                        <div class="collapse-menu mt-0">
                            <ul>
                                <li><a href="javascript:void(0);" class="vm-menu"><i class="fa fa-navicon"></i><span>All Departments</span></a>
                                    <ul class="vm-dropdown">
                                        <li><a href="#"><i class="fa fa-laptop"></i>Computer <b class="caret"></b></a>
                                            <ul class="mega-menu">
                                                <li class="megamenu-single">
                                                    <span class="mega-menu-title">Shop Page</span>
                                                    <ul>
                                                        <li><a href="#">Products Block Top</a></li>
                                                        <li><a href="#">Products Block Bottom</a></li>
                                                        <li><a href="#">Shop Grid 5 Column</a></li>
                                                        <li><a href="#">Shop List</a></li>
                                                        <li><a href="#">Shop width Normal</a></li>
                                                        <li><a href="#">Shop List Normal</a></li>
                                                    </ul>
                                                </li>
                                                <li class="megamenu-single">
                                                    <span class="mega-menu-title">Featured</span>
                                                    <ul>
                                                        <li><a href="#">Thumbnails Left</a></li>
                                                        <li><a href="#">Thumbnails Right</a></li>
                                                        <li><a href="#">Thumbnails Bottom</a></li>
                                                        <li><a href="#">Thumbnails Full</a></li>
                                                        <li><a href="#">Single 2 Colums</a></li>
                                                        <li><a href="#">Tabs Content</a></li>
                                                    </ul>
                                                </li>
                                                <li class="megamenu-single">
                                                    <span class="mega-menu-title">Shop Page</span>
                                                    <ul>
                                                        <li><a href="#">Simple Product</a></li>
                                                        <li><a href="#">Grouped Product</a></li>
                                                        <li><a href="#">Variable Product</a></li>
                                                        <li><a href="#">External Product</a></li>
                                                        <li><a href="#">My account</a></li>
                                                        <li><a href="#">Checkout</a></li>
                                                    </ul>
                                                </li>
                                                <li class="megamenu-single">
                                                    <span class="mega-menu-title">Features</span>
                                                    <ul>
                                                        <li><a href="#">Detail with Video</a></li>
                                                        <li><a href="#">Variations Swatches</a></li>
                                                        <li><a href="#">With Countdown Timer</a></li>
                                                        <li><a href="#">Catalog Mode</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-desktop"></i>TV & Smart box <b class="caret"></b></a>
                                            <ul class="mega-menu">
                                                <li class="megamenu-single">
                                                    <span class="mega-menu-title">Shop Page</span>
                                                    <ul>
                                                        <li><a href="#">Products Block Top</a></li>
                                                        <li><a href="#">Products Block Bottom</a></li>
                                                        <li><a href="#">Shop Grid 5 Column</a></li>
                                                        <li><a href="#">Shop List</a></li>
                                                        <li><a href="#">Shop width Normal</a></li>
                                                        <li><a href="#">Shop List Normal</a></li>
                                                    </ul>
                                                </li>
                                                <li class="megamenu-single">
                                                    <span class="mega-menu-title">Featured</span>
                                                    <ul>
                                                        <li><a href="#">Thumbnails Left</a></li>
                                                        <li><a href="#">Thumbnails Right</a></li>
                                                        <li><a href="#">Thumbnails Bottom</a></li>
                                                        <li><a href="#">Thumbnails Full</a></li>
                                                        <li><a href="#">Single 2 Colums</a></li>
                                                        <li><a href="#">Detail with Accessories</a></li>
                                                        <li><a href="#">Tabs Content</a></li>
                                                        <li><a href="#">Accordion Tabs</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-camera"></i>Camera & Photography</a></li>
                                        <li><a href="#"><i class="fa fa-headphones"></i>Headphones</a></li>
                                        <li><a href="#"><i class="fa fa-music"></i>Musical Instruments</a></li>
                                        <li><a href="#"><i class="fa fa-mobile"></i>Smart phone & Tablets</a></li>
                                        <li><a href="#"><i class="fa fa-flash"></i>Accessories</a></li>
                                        <li><a href="#"><i class="fa fa-microphone"></i>Home Audio & Theater</a></li>
                                        <li><a href="#"><i class="fa fa-print"></i>Printer</a></li>
                                        <li><a href="#"><i class="fa fa-fax"></i>Fax machine</a></li>
                                        <li><a href="#"><i class="fa fa-spoon"></i>Household goods</a></li>
                                        <li><a href="#"><i class="fa fa-clock-o"></i>Watch</a></li>
                                        <li><a href="#"><i class="fa fa-random"></i>Other</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="search-box">
                            <select>
                                <option>All Categories</option>
                                <option>Computer</option>
                                <option>TV & Smart box</option>
                                <option>Camera & Photography</option>
                                <option>Headphones</option>
                            </select>
                            <input type="text" placeholder="What do you need?" />
                            <button>Search</button>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3">
                        <div class="mini-cart pull-right">
                            <ul>
                                <li><a href="#" title="Track Your Order"><i class="ti-truck"></i></a></li>
                                <li><a href="#"><i class="icon_heart_alt"></i><span>1</span></a></li>
                                <li><a href="javascript:void(0);" class="minicart-icon"><i class="icon_bag_alt"></i>$180.00<span>2</span></a>
                                    <div class="cart-dropdown">
                                        <ul>
                                            <li>
                                                <div class="mini-cart-thumb">
                                                    <a href="#"><img src="{{ asset('assets/front/images/products/cart/thumb-1.jpg') }}" alt="" /></a>
                                                </div>
                                                <div class="mini-cart-heading">
                                                    <span>$460.00 x 1</span>
                                                    <h5><a href="#">Kabino Bedside Table</a></h5>
                                                </div>
                                                <div class="mini-cart-remove">
                                                    <button><i class="ti-close"></i></button>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="mini-cart-thumb">
                                                    <a href="#"><img src="{{ asset('assets/front/images/products/cart/thumb-2.jpg') }}" alt="" /></a>
                                                </div>
                                                <div class="mini-cart-heading">
                                                    <span>$460.00 x 1</span>
                                                    <h5><a href="#">Kabino Bedside Table</a></h5>
                                                </div>
                                                <div class="mini-cart-remove">
                                                    <button><i class="ti-close"></i></button>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="minicart-total fix">
                                            <span class="pull-left">total:</span>
                                            <span class="pull-right">$460.00</span>
                                        </div>
                                        <div class="mini-cart-checkout">
                                            <a href="#" class="btn-common view-cart">VIEW CARD</a>
                                            <a href#" class="btn-common checkout mt-10">CHECK OUT</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--mobile-header-->
    <div class="sticker mobile-header">
        <div class="container-fluid">
            <!--logo and cart-->
            <div class="row align-items-center">
                <div class="col-sm-4 col-6">
                    <div class="logo">
                        <a href="#"><img src="{{ asset('assets/front/images/logo.png') }}" alt="logo" /></a>
                    </div>
                </div>
                <div class="col-sm-8 col-6">
                    <div class="mini-cart text-right">
                        <ul>
                            <li><a href="#"><i class="icon_heart_alt"></i><span>1</span></a></li>
                            <li class="minicart-icon"><a href="#"><i class="icon_bag_alt"></i><span>2</span></a>
                                <div class="cart-dropdown">
                                    <ul>
                                        <li>
                                            <div class="mini-cart-thumb">
                                                <a href="#"><img src="{{ asset('assets/front/images/products/cart/thumb-1.jpg') }}" alt="" /></a>
                                            </div>
                                            <div class="mini-cart-heading">
                                                <span>$460.00 x 1</span>
                                                <h5><a href="#">Kabino Bedside Table</a></h5>
                                            </div>
                                            <div class="mini-cart-remove">
                                                <button><i class="ti-close"></i></button>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="mini-cart-thumb">
                                                <a href="#"><img src="{{ asset('assets/front/images/products/cart/thumb-2.jpg') }}" alt="" /></a>
                                            </div>
                                            <div class="mini-cart-heading">
                                                <span>$460.00 x 1</span>
                                                <h5><a href="#">Kabino Bedside Table</a></h5>
                                            </div>
                                            <div class="mini-cart-remove">
                                                <button><i class="ti-close"></i></button>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="minicart-total fix">
                                        <span class="pull-left">total:</span>
                                        <span class="pull-right">$460.00</span>
                                    </div>
                                    <div class="mini-cart-checkout">
                                        <a href="#" class="btn-common view-cart">VIEW CARD</a>
                                        <a href#" class="btn-common checkout mt-10">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--search-box-->
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="search-box mt-sm-15">
                        <select>
                            <option>All Categories</option>
                            <option>Computer</option>
                            <option>TV & Smart box</option>
                            <option>Camera & Photography</option>
                            <option>Headphones</option>
                        </select>
                        <input type="text" placeholder="What do you need?" />
                        <button>Search</button>
                    </div>
                </div>
            </div>
            <!--site-menu-->
            <div class="row mt-sm-10">
                <div class="col-lg-12">
                    <a href="#my-menu" class="mmenu-icon pull-left"><i class="fa fa-bars"></i></a>

                    <div class="mainmenu">
                        <nav id="my-menu">
                            <ul>
                                <li><a href="#">Home <b class="caret"></b></a>
                                    <ul class="submenu">
                                        <li><a href="#">Home Version 1</a></li>
                                        <li><a href="#">Home Version 2</a></li>
                                        <li><a href="#">Home Version 3</a></li>
                                        <li><a href="#">Home Version 4</a></li>
                                        <li><a href="#">Home Version 5</a></li>
                                        <li><a href="#">Home Version 6</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text-label label-featured">Featured</span>
                                        Shop
                                        <b class="caret"></b>
                                    </a>
                                    <ul>
                                        <li>
                                            <span class="mega-menu-title">Shop Page</span>
                                            <ul>
                                                <li><a href#">Shop Grid</a></li>
                                                <li><a href="#">Shop List</a></li>
                                                <li><a href="shop-list-#">Shop Column 3</a></li>
                                                <li><a href="#">Product Details</a></li>
                                                <li><a href="poduct-#">Product Details Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="mega-menu-title">Features</span>
                                            <ul>
                                                <li><a href#">Wishlist</a></li>
                                                <li><a href="#">Shopping Cart</a></li>
                                                <li><a href="#">Shop Compare</a></li>
                                                <li><a href#">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="mega-menu-title">Pages</span>
                                            <ul>
                                                <li><a href#">About </a></li>
                                                <li><a href#">FAQ</a></li>
                                                <li><a href="#">Coming Soon</a></li>
                                                <li><a href#">404 Error</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="mega-menu-title">Blog</span>
                                            <ul>
                                                <li><a href#">Blog List</a></li>
                                                <li><a href="#">Blog Grid</a></li>
                                                <li><a href="#">Blog Fullwidth</a></li>
                                                <li><a href="#">Blog Details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text-label label-hot">Hot</span>
                                        Pages
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href#">About Us</a></li>
                                        <li><a href#">FAQ</a></li>
                                        <li><a href="#">Coming Soon</a></li>
                                        <li><a href#">404 Eror</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Blog <b class="caret"></b></a>
                                    <ul class="submenu">
                                        <li><a href#">Blog</a></li>
                                        <li><a href="#">Blog Grid</a></li>
                                        <li><a href="#">Blog Full Width</a></li>
                                        <li><a href="#">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href#">Contact</a></li>
                                <li><a href="#">Purchase Theme</a></li>
                            </ul>
                        </nav>
                    </div>
                    
                    <!--category-->
                    <div class="collapse-menu mt-0 pull-right">
                        <ul>
                            <li><a href="javascript:void(0);" class="vm-menu"><i class="fa fa-navicon"></i><span>All Departments</span></a>
                                <ul class="vm-dropdown">
                                    <li><a href="#"><i class="fa fa-laptop"></i>Computer <b class="caret"></b></a>
                                        <ul class="mega-menu">
                                            <li class="megamenu-single">
                                                <span class="mega-menu-title">Shop Page</span>
                                                <ul>
                                                    <li><a href="#">Products Block Top</a></li>
                                                    <li><a href="#">Products Block Bottom</a></li>
                                                    <li><a href="#">Shop Grid 5 Column</a></li>
                                                    <li><a href="#">Shop List</a></li>
                                                    <li><a href="#">Shop width Normal</a></li>
                                                    <li><a href="#">Shop List Normal</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-single">
                                                <span class="mega-menu-title">Featured</span>
                                                <ul>
                                                    <li><a href="#">Thumbnails Left</a></li>
                                                    <li><a href="#">Thumbnails Right</a></li>
                                                    <li><a href="#">Thumbnails Bottom</a></li>
                                                    <li><a href="#">Thumbnails Full</a></li>
                                                    <li><a href="#">Single 2 Colums</a></li>
                                                    <li><a href="#">Tabs Content</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-single">
                                                <span class="mega-menu-title">Shop Page</span>
                                                <ul>
                                                    <li><a href="#">Simple Product</a></li>
                                                    <li><a href="#">Grouped Product</a></li>
                                                    <li><a href="#">Variable Product</a></li>
                                                    <li><a href="#">External Product</a></li>
                                                    <li><a href="#">My account</a></li>
                                                    <li><a href="#">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-single">
                                                <span class="mega-menu-title">Features</span>
                                                <ul>
                                                    <li><a href="#">Detail with Video</a></li>
                                                    <li><a href="#">Variations Swatches</a></li>
                                                    <li><a href="#">With Countdown Timer</a></li>
                                                    <li><a href="#">Catalog Mode</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="fa fa-desktop"></i>TV & Smart box <b class="caret"></b></a>
                                        <ul class="mega-menu">
                                            <li class="megamenu-single">
                                                <span class="mega-menu-title">Shop Page</span>
                                                <ul>
                                                    <li><a href="#">Products Block Top</a></li>
                                                    <li><a href="#">Products Block Bottom</a></li>
                                                    <li><a href="#">Shop Grid 5 Column</a></li>
                                                    <li><a href="#">Shop List</a></li>
                                                    <li><a href="#">Shop width Normal</a></li>
                                                    <li><a href="#">Shop List Normal</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-single">
                                                <span class="mega-menu-title">Featured</span>
                                                <ul>
                                                    <li><a href="#">Thumbnails Left</a></li>
                                                    <li><a href="#">Thumbnails Right</a></li>
                                                    <li><a href="#">Thumbnails Bottom</a></li>
                                                    <li><a href="#">Thumbnails Full</a></li>
                                                    <li><a href="#">Single 2 Colums</a></li>
                                                    <li><a href="#">Detail with Accessories</a></li>
                                                    <li><a href="#">Tabs Content</a></li>
                                                    <li><a href="#">Accordion Tabs</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="fa fa-camera"></i>Camera & Photography</a></li>
                                    <li><a href="#"><i class="fa fa-headphones"></i>Headphones</a></li>
                                    <li><a href="#"><i class="fa fa-music"></i>Musical Instruments</a></li>
                                    <li><a href="#"><i class="fa fa-mobile"></i>Smart phone & Tablets</a></li>
                                    <li><a href="#"><i class="fa fa-flash"></i>Accessories</a></li>
                                    <li><a href="#"><i class="fa fa-microphone"></i>Home Audio & Theater</a></li>
                                    <li><a href="#"><i class="fa fa-print"></i>Printer</a></li>
                                    <li><a href="#"><i class="fa fa-fax"></i>Fax machine</a></li>
                                    <li><a href="#"><i class="fa fa-spoon"></i>Household goods</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i>Watch</a></li>
                                    <li><a href="#"><i class="fa fa-random"></i>Other</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--header-area end-->