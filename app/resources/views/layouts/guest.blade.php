<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
@yield('meta_tags')
<meta name="author" content="https://www.themetechmount.com/" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Lakásfelújítás, Bádogozás</title>

<!-- favicon icon -->
<link rel="shortcut icon" href="{{asset('guest/template/images/favicon.png')}}" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="{{asset('guest/template/css/bootstrap.min.css')}}"/>

<!-- animate -->
<link rel="stylesheet" type="text/css" href="{{asset('guest/template/css/animate.css')}}"/>

<!-- owl-carousel -->
<link rel="stylesheet" type="text/css" href="{{asset('guest/template/css/owl.carousel.css')}}">

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="{{asset('guest/template/css/font-awesome.css')}}"/>

<!-- themify -->
<link rel="stylesheet" type="text/css" href="{{asset('guest/template/css/themify-icons.css')}}"/>

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="{{asset('guest/template/css/flaticon.css')}}"/>


<!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="{{asset('guest/template/revolution/css/layers.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('guest/template/revolution/css/settings.css')}}">

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="{{asset('guest/template/css/prettyPhoto.css')}}">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="{{('guest/template/css/shortcodes.css')}}"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="{{asset('guest/template/css/main.css')}}"/>

<!--Color Switcher Mockup-->
<link rel="stylesheet" type="text/css" href="{{asset('guest/template/css/color-switcher.css')}}" >

<!--Color Themes-->
<link id="switcher-color" href="{{asset('guest/template/css/colors/default-color.css')}}" rel="stylesheet">

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="{{asset('guest/template/css/responsive.css')}}"/>

<link rel="stylesheet" type="text/css" href="{{asset('guest/own.css')}}"/>

</head>

<body>

    <!--page start-->
    <div class="page">

        <!-- preloader start -->
        <div id="preloader">
          <div id="status">&nbsp;</div>
        </div>
        <!-- preloader end -->

        <!--header start-->
        <header id="masthead" class="header ttm-header-style-classic">
            <!-- ttm-topbar-wrapper -->




            <div class="ttm-header-wrap">
                <!-- ttm-stickable-header-w -->
                <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
                    <div id="site-header-menu" class="site-header-menu">
                        <div class="site-header-menu-inner ttm-stickable-header">
                            <div class="container">
                                <!-- site-branding -->
                                <div class="site-branding">
                                    <a class="home-link site-icon " href="{{route('guest.index')}}" title="Boldman" rel="home">
                                        Tetőfedő Bádogos
                                    </a>
                                </div><!-- site-branding end -->
                                <!--site-navigation -->
                                <div id="site-navigation" class="site-navigation">
                                        <div class="header-btn">
                                           
                                        </div>

                                    <!-- header-icins -->

                                    <div class="ttm-menu-toggle">
                                        <input type="checkbox" id="menu-toggle-form" />
                                        <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                            <span class="toggle-block toggle-blocks-1"></span>
                                            <span class="toggle-block toggle-blocks-2"></span>
                                            <span class="toggle-block toggle-blocks-3"></span>
                                        </label>
                                    </div>
    
                                    <nav id="menu" class="menu">
                                        <ul class="dropdown">
                                           <li class="{{ (\Request::route()->getName() == 'guest.index') ? 'active' : '' }}">
                                                <a href="{{route('guest.index')}}">Főoldal</a>
                                           </li>
                                           <li class="{{ (\Request::route()->getName() == 'about.index') ? 'active' : '' }}" >
                                                <a href="{{route('about.index')}}">Rólunk</a>
                                           </li>
                                        
                                           <li class="{{ (\Request::route()->getName() == 'roof-covering.index') ? 'active' : '' }}" >
                                                <a href="{{route('roof-covering.index')}}">Tetőfedés</a>
                                           </li>
										    <li class="{{ (\Request::route()->getName() == 'badoging.index') ? 'active' : '' }}" >
                                                <a href="{{route('badoging.index')}}">Bádogozás</a>
                                           </li>
                                           <li class="{{ (\Request::route()->getName() == 'roof-reparing.index') ? 'active' : '' }}" >
                                                <a href="{{route('roof-reparing.index')}}">Szigetelés</a>
                                           </li>
										   
                                           <li class="{{ (\Request::route()->getName() == 'contact.index') ? 'active' : '' }}" >
                                                <a href="{{route('contact.index')}}">Kapcsolat</a>
                                           </li>

                 
                                        </ul>
                                    </nav>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div><!-- ttm-stickable-header-w end-->
            </div><!--ttm-header-wrap end -->




        </header><!--header end-->



   

    <!--site-main start-->
    <div class="site-main">


        @yield('content')


    </div><!--site-main end-->






<section id="mobile-fix-bottom">
  <div class="fixed">
    <a href="{{route('contact.index')}}">Hívjon minket ingyenes árajánlatért!</a>
    <div class="white-bg">
        <a href="tel:{{App\User::ADMIN_PHONE}}"><span>{{App\User::ADMIN_PHONE}}</span></a>
    </div>
  </div>  
</section>




    <!--footer start-->
    <footer class="footer widget-footer clearfix">

         <div class="second-footer ttm-textcolor-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget clearfix">
                            <div class="footer-logo">
                                <a class="site-icon " href="{{route('guest.index')}}" title="Boldman" rel="home">
                                        TETŐFELÚJÍTÁS
                                </a>
                            </div>
                            <p>Csapatunk hétköznap, valamint hétvégén is vállal kiszállást, megegyezés szerint.</p>
                        </div>
                        <div class="widget widget_text clearfix">
                            <h3 class="widget-title">Munka napok</h3>
                            <div class="textwidget widget-text">
                                <div class="ttm-pricelistbox-wrapper ">
                                    <div class="ttm-timelist-block-wrapper">
                                        <ul class="ttm-timelist-block">
                                            <li>Hétfő - Péntek <span class="service-time"><strong>8:00 - 17:00</strong></span></li>
                                            <li>Szombat - Vasárnap<span class="service-time"><strong>8:00 - 16:00</strong></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_nav_menu clearfix">
                           <h3 class="widget-title">Oldalaink</h3>
                            <ul id="menu-footer-services">




                                           <li class="{{ (\Request::route()->getName() == 'guest.index') ? 'active' : '' }}">
                                                <a href="{{route('guest.index')}}">FŐOLDAL</a>
                                           </li>
                                           <li class="{{ (\Request::route()->getName() == 'about.index') ? 'active' : '' }}" >
                                                <a href="{{route('about.index')}}">Rólunk</a>
                                           </li>
                                           <li class="{{ (\Request::route()->getName() == 'badoging.index') ? 'active' : '' }}" >
                                                <a href="{{route('badoging.index')}}">Bádogos munkák</a>
                                           </li>
                                           <li class="{{ (\Request::route()->getName() == 'roof-covering.index') ? 'active' : '' }}" >
                                                <a href="{{route('roof-covering.index')}}">Tető felújítás</a>
                                           </li>
                                           <li class="{{ (\Request::route()->getName() == 'roof-reparing.index') ? 'active' : '' }}" >
                                                <a href="{{route('roof-reparing.index')}}">Szigetlések</a>
                                           </li>
                                           <li class="{{ (\Request::route()->getName() == 'contact.index') ? 'active' : '' }}" >
                                                <a href="{{route('contact.index')}}">Kapcsolat</a>
                                           </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_text clearfix">
                           <h3 class="widget-title">Hívjon bizalommal!</h3>
                           <div class="textwidget widget-text">
                                <h3 class="ttm-textcolor-skincolor">{{App\User::ADMIN_PHONE}}</h3>
                                <p>Egyeztessen munkatársunkkal, hogy mihamarrab el tudjuk kezdeni a közös együttműködést.</p>
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white mt-15 mb-20" href="{{route('contact.index')}}">KAPCSOLATFELVÉTEL</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget flicker_widget clearfix img-section">
                           <h3 class="widget-title">MUNKÁINK KÖZÜL</h3>
                           <img class="footer-img lazy" 
                           src="{{asset('guest/images/lazy3_2.PNG')}}"
                           data-src="{{asset('guest/images/tetojavitas-10.jpg')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-text ttm-textcolor-white">
            <div class="container">
                <div class="row copyright">
                    <div class="col-md-8 ttm-footer2-left">
                        <span>Copyright © 2019&nbsp;<a href="#">Minden jog fenntartva!</span>
                    </div>
                    <div class="col-md-4 ttm-footer2-right">

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->


</div><!-- page end -->


    <!-- Javascript -->

    <script src="{{asset('guest/template/js/jquery.min.js')}}"></script>
    <script src="{{asset('guest/template/js/tether.min.js')}}"></script>
    <script src="{{asset('guest/template/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('guest/template/js/color-switcher.js')}}"></script> 
    <script src="{{asset('guest/template/js/jquery.easing.js')}}"></script>    
    <script src="{{asset('guest/template/js/jquery-waypoints.js')}}"></script>    
    <script src="{{asset('guest/template/js/jquery-validate.js')}}"></script> 
    <script src="{{asset('guest/template/js/owl.carousel.js')}}"></script>
    <script src="{{asset('guest/template/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('guest/template/js/numinate.min6959.js?ver=4.9.3')}}"></script>
    <script src="{{asset('guest/template/js/main.js')}}"></script>

    <!-- Revolution Slider -->
    <script src="{{asset('guest/template/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('guest/template/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('guest/template/revolution/js/slider.js')}}"></script>
   
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
    <!-- Javascript end-->
    <!-- own added -->
    <script src="{{asset('guest/own/lazyLoad.js')}}"></script>

</body>
</html>