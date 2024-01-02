<header class="header-v4">
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar">
                    Wellcom to Football TK Store
                </div>

                <div class="right-top-bar flex-w h-full">
                    <a href="http://localhost/WEB/chamaleakhai0027_cdtt/public/lienhe" class="flex-c-m trans-04 p-lr-25">
                        Trở giúp
                    </a>

                    <a href="http://localhost/WEB/chamaleakhai0027_cdtt/public" class="flex-c-m trans-04 p-lr-25">
                        Tài khoản
                    </a>
                     <a href="http://localhost/WEB/chamaleakhai0027_cdtt/public/admin/login" class="flex-c-m trans-04 p-lr-25">
                        Admin
                    </a>                                 
                </div>
            </div>
        </div>

        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop container">

                <!-- Logo desktop -->
                <a href="" class="logo">
                    <img src="{{ asset('images/logo0.png') }}" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li class="{{ Request::is('/') ? 'active-menu' : '' }}">
                            <a href="{{ route('site.index') }}">Trang chủ</a>
                        </li>

                        <li class="{{ Request::is('sanpham') ? 'active-menu' : '' }}">
                            <a href="{{ route('site.product') }}">Sản phẩm</a>
                        </li>

                        <li class="" data-label1=" ">
                            <a href="#">Thương hiệu</a>
                        </li>

                        <li class="{{ Request::is('baiviet') ? 'active-menu' : '' }}">
                            <a href="{{ route('frontend.post') }}">Bài viết</a>
                        </li>

                        <li class="{{ Request::is('#') ? 'active-menu' : '' }}">
                            <a href="#">Giới thiệu</a>
                        </li>

                        <li class="{{ Request::is('lienhe') ? 'active-menu' : '' }}">
                            <a href="{{ route('frontend.contact') }}">Liên hệ</a>
                        </li>
                    </ul>
                </div>

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div>

                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>

                    <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                        <i class="zmdi zmdi-favorite-outline"></i>
                    </a>
                </div>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="index.html"><img src="{{ asset('images/logo0.png') }}" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div>

            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
                <i class="zmdi zmdi-shopping-cart"></i>
            </div>

            <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
                <i class="zmdi zmdi-favorite-outline"></i>
            </a>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>


    <!-- Menu Mobile -->
<header>
    <!-- Your existing header content goes here -->

    <div class="menu-mobile">
        <ul class="main-menu-m">
            <li>
                <a href="#">Trang chủ</a>
            
            </li>

            <li>
                <a href="#">Sản phẩm</a>
            </li>

            <li>
                <a href="#">Thương hiệu</a>
            </li>

            <li>
                <a href="#">Bài viết</a>
            </li>

            <li>
                <a href="#">Giới thiệu</a>
            </li>

            <li>
                <a href="#">Liên hệ</a>
            </li>
        </ul>
    </div>
</header>
    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="{{ asset('dist/img/icons/icon-close2.png') }}" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>
</header>