<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>โปรแกรมจองสลาก - โปรแกรมจองสลากสำหรับ Android และ iOS</title>
        <meta name="description" content="โปรแกรมจองสลาก - โปรแกรมจองสลากสำหรับ Android และ iOS">
        <meta name="keywords" content="โปรแกรมจองสลาก,โปรแกรมจองหวย, โปรแกรมกดจองสลาก, กล่องจองสลาก, โปรแกรมจองสลาก iOS, โปรแกรมจองสลากแอนดรอยด์, , โปรแกรมจองสลากไม่รูท">
        {{--
        <link rel="canonical" href="{{urldecode(request()->url())}}" /> --}}
        <meta property="og:locale" content="th_TH" />
        <meta property="og:locale:alternate" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="โปรแกรมจองสลาก - โปรแกรมจองสลากสำหรับ Android และ iOS" />
        <meta property="og:description" content="โปรแกรมจองสลาก - โปรแกรมจองสลากสำหรับ Android และ iOS" />
        <meta property="og:url" content="{{urldecode(request()->url())}}" />
        <meta property="og:site_name" content="่jongsalak" />
        <meta name="twitter:card" content="summary_large_image" />
    
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    
        <!-- Font CSS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preload" href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&family=Work+Sans:wght@300;400;500;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&family=Work+Sans:wght@300;400;500;600;700&display=swap">
        </noscript>

        <!-- Vendor CSS (Bootstrap & Icon Font) -->
        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    
        <!-- Plugins CSS (All Plugins Files) -->
        <link rel="stylesheet" href="{{asset('assets/css/plugins/fancybox.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/plugins/icofont.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/plugins/ion.rangeSlider.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/plugins/simple-line-icons.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper-bundle.min.css')}}">
    
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/style.min.css?version=1.3')}}">
    
    </head>
    
    <body>
    
        <!--== Start: Wrapper ==-->
        <div class="wrapper">
            <!--== Start: Header Wrapper ==-->
            <div class="header sticky-header header-transparent">
                <div class="container-fluid container-1733">
                    <div class="row align-items-center">
                        <div class="col-6 col-xl-2 col-lg-2">
                            <!--== Start: Logo ==-->
                            <div class="header-logo">
                                <a href="{{url('/')}}">
                                    <img src="assets/images/jongsalak_logo1.webp" width="85" height="70" alt="logo">
                                </a>
                            </div>
                            <!--== End: Logo ==-->
                        </div>
    
                        <div class="col-6 col-xl-8 col-lg-7 d-none d-lg-block">
                            <!--== Start: Menu ==-->
                            <nav class="main-menu justify-content-center position-relative">
                                <ul>
                                    <li class="has-sub-menu">
                                        <a href="{{url('/')}}">หน้าหลัก</a>
                                    </li>
                                    <li class="has-sub-menu">
                                        <a href="#">โปรแกรมจองสลาก</a>
    
                                    </li>
                                    <li>
                                        <a href="#">สั่งซื้อ</a>
                                    </li>
                                    <li class="has-sub-menu">
                                        <a href="#">การใช้งาน</a>
    
                                    </li>
                                    <li class="has-sub-menu">
                                        <a href="#">ข่าวสาร</a>
    
                                    </li>
                                    <li><a href="#">ติดต่อ</a></li>
                                </ul>
                            </nav>
                            <!--== End: Menu ==-->
                        </div>
    
                        <div class="col-6 col-xl-2 col-lg-3">
                            <div class="header-action justify-content-end">
                                <div class="header-action-item dropdown">
                                    <button class="header-action-toggle" type="button" data-bs-toggle="dropdown" aria-label="account button"><i class="icofont-gear-alt"></i></button>
                                    <div class="dropdown-menu header-dropdown-menu">
                                        <h6 class="header-dropdown-menu-title">Account</h6>
                                        <ul>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="header-action-item d-flex d-lg-none">
                                    <button class="header-action-toggle header-action-offcanvas-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasMenu"><i class="icon-menu"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End: Header Wrapper ==-->
    
    
    
    
            <main class="main-content">
                @yield('content')
    
    
    
            </main>
    
    
    
    
            <!--== Start: Footer Section Wrapper ==-->
            <footer class="footer-section section">
    
    
                <!--== Start: Footer Bottom ==-->
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row flex-row-reverse flex-md-row align-items-center">
                            <div class="col-md-9 text-center text-md-start">
                                <p class="footer-copyright">© 2023-2024 JongSalak. Made with jongsalakofficial@gmail.com <i class="icofont-heart"></i> สงวนลิขสิทธิ์ <a target="_blank" href="https://www.jongsalak.com/">โปรแกรมจองสลาก</a></p>
                            </div>

                        </div>
                    </div>
                </div>
                <!--== End: Footer Bottom ==-->
            </footer>
            <!--== End: Footer Section Wrapper ==-->
    
    
    
    
            <!--== Scroll Button ==-->
            <div id="scroll-to-top" class="scroll-to-top"><span class="icofont-rounded-up"></span></div>
    
    
    
        </div>
        <!--== End: Wrapper ==-->
    
        <!-- JS Vendor, Plugins & Activation Script Files -->
    
        <!-- Vendors JS -->
        <script src="{{asset('assets/js/vendor/modernizr-3.11.7.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    
        <!-- Plugins JS -->
        <script src="{{asset('assets/js/plugins/fancybox.min.js')}}"></script>
        {{-- <script src="{{asset('assets/js/plugins/ion.rangeSlider.min.js')}}"></script> --}}
        {{-- <script src="{{asset('assets/js/plugins/jquery.countdown.min.js')}}"></script> --}}
        <script src="{{asset('assets/js/plugins/jquery.sticky-sidebar.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/jquery.zoom.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
    
        <!-- Custom Main JS -->
        <script src="{{asset('assets/js/main.min.js')}}"></script>
    
    </body>
    
</html>