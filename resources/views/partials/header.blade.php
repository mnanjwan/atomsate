<header id="header" class="header tra-menu navbar-dark">
    <div class="header-wrapper">


        <!-- MOBILE HEADER -->
        <div class="wsmobileheader clearfix">
            <span class="smllogo"><img src="{{ asset('frontAssets/images/logo-01.png') }}" alt="mobile-logo"/></span>
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
         </div>


         <!-- NAVIGATION MENU -->
          <div class="wsmainfull menu clearfix">
            <div class="wsmainwp clearfix">


                <!-- HEADER LOGO -->
                <div class="desktoplogo"><a href="{{url('/')}}" class="logo-black"><img src="{{ asset('frontAssets/images/logo-offwhite.png') }}" alt="header-logo"></a></div>
                <div class="desktoplogo"><a href="{{url('/')}}" class="logo-white"><img src="{{ asset('frontAssets/images/logo-white.png') }}" alt="header-logo"></a></div>
                <div class="desktoplogo"><a href="{{url('/')}}" class="logo-white"><img src="{{ asset('frontAssets/images/akebulan.png') }}" alt="header-logo"></a></div>



                <!-- MAIN MENU -->
                  <nav class="wsmenu clearfix">
                    <ul class="wsmenu-list nav-violet-red-hover">


                        <!-- MEGAMENU -->
                          <li aria-haspopup="true" class="mg_link"><a href="{{url('/')}}">Home <span class=""></span></a></li>	<!-- END MEGAMENU -->


                        <!-- DROPDOWN MENU -->
                        <li aria-haspopup="true"><a href="projects.html">Investment<span class="wsarrow"></span></a>
                            <div class="wsmegamenu clearfix halfmenu">
                                  <div class="container-fluid">
                                    <div class="row">

                                        <!-- Links -->
                                        <ul class="col-lg-6 link-list">
                                            <li><a href="project-details.html">Tronet</a></li>
                                            <li><a href="{{url('/agriculture')}}">Agriculture</a></li>
                                            <li><a href="project-details.html">Real Estate</a></li>
                                            <li><a href="project-details.html">Atom Brains & Hammer</a></li>
                                        </ul>

                                          <!-- Links -->
                                        <ul class="col-lg-6 link-list">
                                            <li><a href="project-details.html">MABC TV</a></li>
                                            <li><a href="project-details.html">Atom Education Reform</a></li>
                                            <li><a href="project-details.html">Atom UBA</a></li>
                                            <li><a href="project-details.html">Blog</a></li>
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
                            <a href="{{url('/pricing')}}" class="btn btn-skyblue tra-grey-hover last-link">Get Started</a>
                        </li>


                        <!-- HEADER SOCIAL LINKS
                        <li class="nl-simple white-color header-socials ico-20 clearfix" aria-haspopup="true">
                            <span><a href="#" class="ico-facebook"><span class="flaticon-facebook"></span></a></span>
                            <span><a href="#" class="ico-twitter"><span class="flaticon-twitter"></span></a></span>
                            <span><a href="#" class="ico-instagram"><span class="flaticon-instagram"></span></a></span>
                            <span><a href="#" class="ico-dribbble"><span class="flaticon-dribbble"></span></a></span>
                        </li> -->


                    </ul>
                </nav>	<!-- END MAIN MENU -->


            </div>
        </div>	<!-- END NAVIGATION MENU -->


    </div>     <!-- End header-wrapper -->
</header>	<!-- END HEADER -->
