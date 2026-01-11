    <!--  ====== header-area-start
    ============================================================ -->
    <header>
        <div id="header-sticky" class="transparent-header header-area">
            <div class="header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-5">
                            <div class="logo mt-30 mb-30 transition5">
                                <a href="{{ route('front.index') }}" class="header-logo">
                                    <img src="{{ asset('front/assets/images/logo/logo.png') }}" alt="BAWARQ" style="max-height: 50px;">
                                </a>
                            </div>
                        </div><!-- /col -->
                        <div class="col-xl-10 col-lg-10 col-md-9 col-sm-8 col-7 pl-0 d-flex justify-content-end align-items-center">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul class="d-flex align-items-center">
                                        <li>
                                            <a class="active px-3 text-uppercase font-weight-bold" href="#home" style="letter-spacing: 1px;">Home</a>
                                        </li>
                                        <li>
                                            <a href="#about" class="px-3 text-uppercase font-weight-bold" style="letter-spacing: 1px;">About</a>
                                        </li>
                                        <li>
                                            <a href="#service" class="px-3 text-uppercase font-weight-bold" style="letter-spacing: 1px;">Services</a>
                                        </li>
                                        <li>
                                            <a href="#contact" class="px-3 text-uppercase font-weight-bold" style="letter-spacing: 1px;">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div><!-- /main-menu -->

                            <div class="header-btn d-none d-lg-block ml-40">
                                <a href="#contact" class="btn theme-bg text-white px-4 py-2 text-uppercase transition5 shadow-sm" style="font-weight: 600; border-radius: 50px;">Get a Quote</a>
                            </div>

                            <div class="mobile-m-bar d-block d-xl-none ml-30">
                                <a class="mobile-menubar theme-color primary-hover" href="javascript:void(0);">
                                    <i class="far fa-bars"></i>
                                </a>
                            </div>
                        </div><!-- /col -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </div>
        </div><!-- /header-bottom -->
    </header>
    <!--  header-area-end  -->

    <style>
        #header-sticky {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .transparent-header.sticky-menu .header {
            background: rgba(30, 31, 38, 0.95) !important;
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            padding: 5px 0;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .sticky-menu .logo {
            margin-top: 15px !important;
            margin-bottom: 15px !important;
        }
        .sticky-menu .logo img {
            max-height: 40px !important;
        }
        .main-menu ul li a {
            position: relative;
            transition: all 0.3s ease;
            font-size: 15px;
            padding: 40px 15px !important;
            display: inline-block;
        }
        .sticky-menu .main-menu ul li a {
            padding: 25px 15px !important;
        }
        .main-menu ul li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 25px;
            left: 50%;
            background-color: var(--main-color);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transform: translateX(-50%);
        }
        .sticky-menu .main-menu ul li a::after {
            bottom: 15px;
        }
        .main-menu ul li a:hover::after,
        .main-menu ul li a.active::after {
            width: 40px;
        }
        .header-btn .btn {
            overflow: hidden;
            position: relative;
            z-index: 1;
        }
        .header-btn .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            transition: all 0.4s ease;
            z-index: -1;
        }
        .header-btn .btn:hover::before {
            left: 0;
        }
        .header-btn .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(128, 219, 102, 0.5) !important;
        }
        @media (max-width: 1199px) {
            .logo.mt-30.mb-30 {
                margin: 15px 0 !important;
            }
        }
    </style>
