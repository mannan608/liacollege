{{-- // resources\views\frontend\layouts\app.blade.php --}}
@php
  $headerClass = 'header-two';
  $logoAsset = optional($setting)->logo ? 'uploads/settings/' . $setting->logo : 'assets/img/logo.png';
  $logoWhite = optional($setting)->logo_white ? 'uploads/settings/' . $setting->logo_white : 'assets/img/logo-white.webp';
  if(request()->is('/')) {
    $headerClass = 'header-one';
    $logoAsset = $logoWhite;
  }
@endphp
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="{{ optional($setting)->description }}">
  <meta name="keywords" content="{{ optional($setting)->keywords }}">
  <meta name="author" content="{{ optional($setting)->title }}">
  <meta name="robots" content="index, follow">
  <title>{{ optional($setting)->title ?? "LIA - Leadership Institute Australia" }}</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/logo/logo.png') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/animate.min.css') }}">
    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/fontawesome.min.css') }}">
    <!-- Reacthemes Icon Css -->
    <link rel="stylesheet" href="{{ asset('frontend/fonts/css/rt_icon.css') }}">
    <!-- bootstrap min css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/bootstrap.min.css') }}">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/swiper.min.css') }}">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/magnific-popup.css') }}">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/metismenu.css') }}">
    <!-- nice select js -->
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/jquery-ui.css') }}">
    <!-- custom style css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style8.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom4.css') }}">
    <style>
        footer.rts-footer i {
            color: #e2b838;
        }
        .rts-footer-menu i {
            margin-right: 5px;
        }
        .rts-footer-widget .rts-footer-menu ul li a:hover {
            color: white;
        }
        .right-side, .left-side {
            width: 50%;
        }
        .rts__author--img img {
            height: 50px;
        }
        .program-menu a {
            font-size: 12px;
        }
        .communication-btn img {
            height: 36px;
        }
        .progress-wrap {
            bottom: 100px;
        }
    </style>
    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
     fbq('init', '925639160003172'); 
    fbq('track', 'PageView');
    </script>
    <noscript>
     <img height="1" width="1" 
    src="https://www.facebook.com/tr?id=925639160003172&ev=PageView
    &noscript=1"/>
    </noscript>
    <!-- End Meta Pixel Code -->
    <!--<script -->
    <!--  src="https://beta.leadconnectorhq.com/loader.js"  -->
    <!--  data-resources-url="https://beta.leadconnectorhq.com/chat-widget/loader.js" -->
    <!-- data-widget-id="69a7c72799dd5643e63ded8b"   > -->
    <!-- </script>-->
    <script 
      src="https://beta.leadconnectorhq.com/loader.js"  
      data-resources-url="https://beta.leadconnectorhq.com/chat-widget/loader.js" 
     data-widget-id="691ff546be8b70bc978e5c9c"   > 
     </script>
</head>
<body>
    <!-- header area start -->
    <header class="header header__sticky v__3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="header__wrapper" style="display: grid; grid-template-columns: 1fr auto 1fr; align-items: center;">

                    <!-- Left Side (Social + Left Menu) -->
                    <div class="header-menu">
                        <div class="header__social__link">
                            <a href="https://www.facebook.com/leadershipinstituteaus"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                        <div class="header__menu">
                            <div class="navigation">
                                <nav class="navigation__menu">
                                    <ul>
                                        <li class="navigation__menu--item">
                                            <a href="{{ url('/') }}" class="navigation__menu--item__link">Home</a>
                                        </li>
                                        <li class="navigation__menu--item">
                                            <a href="{{ url('about') }}" class="navigation__menu--item__link">About</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Logo (Always Center) -->
                    <div class="header__logo p-2">
                        <a class="header__logo--link" href="{{ url('/') }}">
                            <img src="{{ asset('frontend/images/logo/logo.png') }}" class="logo-img" alt="Logo">
                        </a>
                    </div>

                    <!-- Right Side (Right Menu + Lang + Icons) -->
                    <div style="display: flex; align-items: center; justify-content: flex-end; gap: 100px;">
                        <div class="header__menu">
                            <div class="navigation">
                                <nav class="navigation__menu">
                                    <ul>
                                        <li class="navigation__menu--item has-child has-arrow">
                                            <a href="javascript:void(0);" class="navigation__menu--item__link">Course</a>
                                            <ul class="submenu sub__style">
                                                <li><a href="{{ url('individual-support') }}">CHC33021 Certificate III in Individual Support</a></li>
                                                <li><a href="{{ url('ageing-support') }}">CHC43015 Certificate IV in Ageing Support</a></li>
                                                <li><a href="{{ url('community-service') }}">CHC52021 Diploma of Community Services</a></li>
                                                <li><a href="{{ url('community-services') }}">CHC52025 Diploma of Community Services</a></li>
                                                <li><a href="{{ url('leadership-management') }}">BSB50420 Diploma of Leadership and Management</a></li>
                                                <li><a href="{{ url('project-management') }}">BSB50820 Diploma of Project Management</a></li>
                                            </ul>
                                        </li>
                                        <li class="navigation__menu--item">
                                            <a class="navigation__menu--item__link" href="{{ url('contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header__right">
                            <div class="header__right--item">
                                <div id="langSwitcher" class="lang__trigger">
                                    <span class="selected__lang">English</span>
                                    <i class="fa-light fa-globe"></i>
                                    <div class="translate__lang">
                                        <ul>
                                            <li><a href="#" class="active">English</a></li>
                                            <li><a href="#">French</a></li>
                                            <li><a href="#">Spanish</a></li>
                                            <li><a href="#">Romanian</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="search-btn" class="search__trigger">
                                    <i class="fa-sharp fa-light fa-magnifying-glass"></i>
                                </div>
                                <div id="menu-btn" class="menu__trigger">
                                    <img src="{{ asset('frontend/images/icon/menu__bar-3.svg') }}" alt="bar">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
    <!-- header area end -->
    @yield('content')
    <!-- footer start -->
    <footer class="rts-footer v_2 pt--100 pb--100">
        <div class="container">
            <div class="row gy-5 gy-lg-0">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="rts-footer-widget w-320">
                        <a class='d-block rts-footer-logo mb-4' href='index.html'>
                            <img src="{{ asset('frontend/images/logo/logo.png') }}" style="height: 100px" alt="LIA">
                        </a>
                        <i class="fa fa-map-marker"></i> <span>Level 14 333 Collins St, MELBOURNE, VIC, 3000</span><br />

                        <i class="fa fa-phone"></i> <span>0479 110 567</span><br />
                        <i class="fa fa-phone"></i> <span>0468 092 898 (Urgent Enquiry)</span><br />
                        <i class="fa fa-envelope"></i> <span>training@liacollege.edu.au</span><br />

                        <span>RTO CODE: 46049</span><br />

                        <span>ABN: 93 653 303 621</span>
                        <div class="d-flex gap-3 mt-3 communication-btn">
                            <a href="http://wa.me/+61468092898" target="_blank">
                                <img src="{{ asset('frontend/images/whatsapp.png') }}">
                            </a>
                            <a href="https://api.leadconnectorhq.com/widget/booking/dp31qqshThiwc7Uslqjp" target="_blank">
                                <img src="{{ asset('frontend/images/meeting.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="rts-footer-widget ">
                        <h6 class="rt-semi">Our Campus</h6>
                        <div class="rts-footer-menu">
                            <ul>
                                <li><a href="{{ url('home') }}">Home</a></li>
                                <li><a href="{{ url('about') }}">About</a></li>
                                <li><a href="{{ url('contact') }}">Contact</a></li>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="rts-footer-widget ml--30">
                        <h6 class="rt-semi">Qualifications</h6>
                        <div class="rts-footer-menu">
                            <ul>
                                <li><a href="{{ url('individual-support') }}"><span><i class="fa-light fa-arrow-right"></i></span>CHC33021 Certificate III in Individual Support</a></li>
                                <li><a href="{{ url('ageing-support') }}"><span><i class="fa-light fa-arrow-right"></i></span>CHC43015 Certificate IV in Ageing Support</a></li>
                                <li><a href="{{ url('community-service') }}"><span><i class="fa-light fa-arrow-right"></i></span>CHC52021 Diploma of Community Services</a></li>
                                <li><a href="{{ url('community-services') }}"><span><i class="fa-light fa-arrow-right"></i></span>CHC52025 Diploma of Community Services</a></li>
                                <li><a href="{{ url('leadership-management') }}"><span><i class="fa-light fa-arrow-right"></i></span>BSB50420 Diploma of Leadership and Management</a></li>
                                <li><a href="{{ url('project-management') }}"><span><i class="fa-light fa-arrow-right"></i></span>BSB50820 Diploma of Project Management</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="rts-footer-copy-right v_1">
        <div class="container">
            <div class="row">
                <div class="rt-center">
                    <p class="--p-xs">Copyright &copy; <span id="year"></span> All Rights Reserved <a href="#" style="color:#e5b258;">Education and Training Pty Ltd</a> trading as Leadership Institute Australia</p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer end -->
    <!-- offcanvase menu -->
    <!-- header style two -->
    <div id="side-bar" class="side-bar">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="inner-main-wrapper-desk">
            <div class="thumbnail">
                <img src="{{ asset('frontend/images/logo/logo.png') }}" alt="University">
            </div>
            <div class="inner-content">
                <p class="disc">
                    Leadership Institute Australia is a Registered Training Organisation delivering nationally recognised qualifications across Australia. We help professionals gain industry-ready skills and advance their careers through recognised education pathways.
                </p>
                <!-- offcanvase banner -->
                <div class="offcanvase__banner mt--50">
                    <div class="offcanvase__banner--content">
                        <img src="{{ asset('frontend/images/offcanvase.jpg') }}" alt="offcanvase">
                        <a class='rts-theme-btn' href="{{ url('application') }}">Apply Now</a>
                    </div>
                </div>
                {{-- <div class="offcanvase__info">
                    <div class="offcanvase__info--content">
                        <a href="callto:+61485826710"><span><i class="fa-sharp fa-light fa-phone"></i></span>0479 110 567</a>
                        <a href="#"><span><i class="fa-sharp fa-light fa-location-dot"></i></span>Level 14 333 Collins St, MELBOURNE, VIC, 3000</a>
                        <div class="offcanvase__info--content--social">
                            <p class="title">Follow Us:</p>
                            <div class="social__links">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- mobile menu area start -->
        <div class="mobile-menu-main">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">

                    <li>
                        <a class='main' href="{{ url('/') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('about') }}" class="main">About Us</a>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Course</a>
                        <ul class="submenu mm-collapse">
                            <li><a class='mobile-menu-link' href="https://liacollege.edu.au/individual-support">CHC33021 Certificate III in Individual Support</a></li>
                            <li><a class='mobile-menu-link' href="https://liacollege.edu.au/ageing-support">CHC43015 Certificate IV in Ageing Support</a></li>
                            <li><a class='mobile-menu-link' href="https://liacollege.edu.au/community-service">CHC52021 Diploma of Community Services</a></li>
                            <li><a class='mobile-menu-link' href="https://liacollege.edu.au/community-services">CHC52025 Diploma of Community Services</a></li>
                            <li><a class='mobile-menu-link' href="https://liacollege.edu.au/leadership-management">BSB50420 Diploma of Leadership and Management</a></li>
                            <li><a class='mobile-menu-link' href="https://liacollege.edu.au/project-management">BSB50820 Diploma of Project Management</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class='main' href="{{ url('contact') }}">Contact Us</a>
                    </li>
                </ul>
            </nav>

            <div class="offcanvase__info--content mt--30">
                <!--<a href="callto:+61485826710"><span><i class="fa-sharp fa-light fa-phone"></i></span>+(61) 485-826-710</a>-->
                <a href="#"><span><i class="fa-sharp fa-light fa-location-dot"></i></span>Level 14 333 Collins St, MELBOURNE, VIC, 3000</a>
                <div class="offcanvase__info--content--social">
                    <p class="title">Follow Us:</p>
                    <div class="social__links">
                        <a href="https://www.facebook.com/leadershipinstituteaus"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- header style two End -->

    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input class="search-input autocomplete ui-autocomplete-input" type="text" placeholder="Search by keyword or #" autocomplete="off">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>
    <!-- rts backto top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
    <!-- rts back to top end -->
    <div id="anywhere-home" class="">
    </div>


    <!-- scripts -->
    <!-- jquery js -->
    <script src="{{ asset('frontend/js/vendor/jquery.min.js') }}"></script>
    <!-- bootstrap 5.0.2 -->
    <script src="{{ asset('frontend/js/plugins/bootstrap.min.js') }}"></script>
    <!-- jquery ui js -->
    <script src="{{ asset('frontend/js/vendor/jquery-ui.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('frontend/js/vendor/waw.js') }}"></script>
    <!-- mobile menu -->
    <script src="{{ asset('frontend/js/vendor/metismenu.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('frontend/js/vendor/magnifying-popup.js') }}"></script>
    <!-- swiper JS 10.2.0 -->
    <script src="{{ asset('frontend/js/plugins/swiper.js') }}"></script>
    <!-- counterup -->
    <script src="{{ asset('frontend/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/waypoint.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jarallax.min.js') }}"></script>
    <!-- isotop mesonary -->
    <script src="{{ asset('frontend/js/plugins/isotop.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/sticky-sidebar.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/resize-sensor.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/twinmax.js') }}"></script>
    <!-- dymanic Contact Form -->
    <script src="{{ asset('frontend/js/plugins/contact.form.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/nice-select.min.js') }}"></script>
    <!-- main Js -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>
</html>