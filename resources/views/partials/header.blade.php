<header id="header" class="header tra-menu navbar-dark">
    <div class="header-wrapper">
        <!-- MOBILE HEADER -->
        <div class="wsmobileheader clearfix">
            <span class="smllogo"><img src="{{asset('frontAssets/images/logo-01.png')}}" alt="mobile-logo"/></span>
            <a href="https://www.flaticon.com/free-icons/menu" title="menu icons"><span></span></a>
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
         </div>

         <!-- NAVIGATION MENU -->
          <div class="wsmainfull menu clearfix">
            <div class="wsmainwp clearfix">

                <!-- HEADER LOGO -->
                <div class="desktoplogo"><a href="{{ url('/') }}" class="logo-black"><img src="{{ asset('frontAssets/images/logo-offwhite.png') }}" alt="header-logo"></a></div>
                <div class="desktoplogo"><a href="{{ url('/') }}" class="logo-white"><img src="{{ asset('frontAssets/images/logo-white.png') }}" alt="header-logo"></a></div>
                <div class="desktoplogo"><a href="{{ url('/') }}" class="logo-white"><img src="{{ asset('frontAssets/images/akebulan.png') }}" alt="header-logo"></a></div>

                <!-- MAIN MENU -->
                  <nav class="wsmenu clearfix">
                    <ul class="wsmenu-list nav-violet-red-hover">

                        <!-- MEGAMENU -->
                        <li aria-haspopup="true" class="nl-simple"><a href="{{url('/')}}">Home <span class=""></span></a></li>	<!-- END MEGAMENU -->

                        <!-- DROPDOWN MENU -->
                        <li aria-haspopup="true"><a href="#">Investment<span class="wsarrow"></span></a>
                            <div class="wsmegamenu clearfix halfmenu">
                                  <div class="container-fluid">
                                    <div class="row">

                                        <!-- Links -->
                                        <ul class="col-lg-6 link-list">
                                            <li><a href="">Tronet</a></li>
                                            <li><a href="{{url('/agriculture')}}">Agriculture</a></li>
                                            <li><a href="{{ url('#') }}">Real Estate</a></li>
                                            <li><a href="{{ url('#') }}">Atom Brains & Hammer</a></li>
                                        </ul>

                                          <!-- Links -->
                                        <ul class="col-lg-6 link-list">
                                            <li><a href="{{ url('#') }}">MABC TV</a></li>
                                            <li><a href="{{ url('#') }}">Atom Education Reform</a></li>
                                            <li><a href="{{ url('#') }}">Atom UBA</a></li>
                                            <li><a href="{{ url('#') }}">Blog</a></li>
                                        </ul>

                                    </div>
                                  </div>
                            </div>
                          </li>	<!-- END DROPDOWN MENU -->

                      <!-- DROPDOWN MENU -->
                          <li aria-haspopup="true"><a href="">Contact<span class="wsarrow"></span></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="{{url('/contact')}}">Contact Us</a></li>
                                <li aria-haspopup="true"><a href="{{url('/terms')}}">Terms & Privacy</a></li>

                            </ul>
                        </li>
                        <!-- SIMPLE NAVIGATION LINK -->
                        <li class="nl-simple" aria-haspopup="true"><a href="{{url('/about')}}">About Us</a></li>
                        <!-- SIMPLE NAVIGATION LINK -->
                        <li class="nl-simple" aria-haspopup="true"><a href="{{url('/faq')}}">FAQs</a></li>

                        <!-- HEADER BUTTON -->
                        <li class="nl-simple" aria-haspopup="true">
                            <a href="{{ url('/interest') }}" class="btn btn-primary tra-grey-hover last-link">Get Started</a>
                        </li>
                    </ul>
                </nav>	<!-- END MAIN MENU -->

            </div>
        </div>	<!-- END NAVIGATION MENU -->

    </div>     <!-- End header-wrapper -->
</header>
