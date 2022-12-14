<header class="header--section style--1">
    <!-- Header Topbar Start -->
    <div class="header--topbar bg-black ">
        <div class="container ">
            <!-- Header Topbar Links Start -->
            <ul class="header--topbar-links nav ff--primary float--left">
                    <li class="dropdown" id="google_translate_element"></li>

                    {{-- <script type="text/javascript">
                        function googleTranslateElementInit() {
                          new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.VERTICAL}, 'google_translate_element');
                        }
                        </script> --}}
                        <script type="text/javascript">
                            function googleTranslateElementInit() {
                              new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                            }
                            </script>

                    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

            </ul>
            <!-- Header Topbar Links End -->

            <!-- Header Topbar Social Start -->
            <ul class="header--topbar-social nav float--left hidden-xs">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
            <!-- Header Topbar Social End -->
            {{-- {{ Session::get('guestuser') }} --}}
            <!-- Header Topbar Links Start -->
            <ul class="header--topbar-links nav ff--primary float--right">
                <livewire:cart-counter />
                <li class="dropdown">
                    @if (Route::has('login'))

                        @auth
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa mr--8 fa-user-o"></i>
                            <span>{{auth()->user()->name}}</span>
                            <i class="fa fa-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="{{url('account')}}">My Account</a></li>

                                <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                           <i class="mdi mdi-logout me-1"></i>
                           Logout
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                               {{ csrf_field() }}
                           </form>
                       </a></li>
                        </ul>
                        @else
                        <a  href="{{ route('login') }}" class="btn-link">
                            <span><i class="fa mr--8 fa-sign-in"></i>Login</span>
                        </a>
                        <a  href="{{ route('register') }}" class="btn-link">
                            <span><i class="fa mr--8 fa-user-plus"></i>Register</span>
                        </a>
                        <a  href="site/media/IBC_User_Guide_V1.pdf" target="_blank" class="btn-link">
                            <span><i class="fa mr--8 fa-question-circle"></i>Help</span>
                        </a>

                        @endauth

                    @endif

                </li>
            </ul>
            <!-- Header Topbar Links End -->
        </div>
    </div>
    <!-- Header Topbar End -->

    <!-- Header Navbar Start -->
    <div class="header--navbar navbar bg-primary" data-trigger="sticky">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle style--1 collapsed" data-toggle="collapse" data-target="#headerNav">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Header Navbar Logo Start -->
                <div class="header--navbar-logo navbar-brand">
                    <a href="{{url('home')}}">
                        <img src="{{url('site/img/logo-white.png')}}" class="normal" alt="">
                        <img src="{{url('site/img/logo-black.png')}}" class="sticky" alt="">
                    </a>
                </div>
                <!-- Header Navbar Logo End -->
            </div>

            <div id="headerNav" class="navbar-collapse collapse float--right">
                <!-- Header Nav Links Start -->
                <ul class="header--nav-links style--1 nav ff--primary">
                    <li class="{{ (request()->is('home')) ? 'active' : '' }}"><a  href="{{url('home')}}"><span>Home</span></a></li>
                    <li class="{{ (request()->is('biospecimens*')) ? 'active' : '' }}"><a href="{{url('biospecimens')}}"><span>Biospecimens</span></a></li>
                    <li class="{{ (request()->is('sars-cov-2*')) ? 'active' : '' }}"><a href="{{route('covid19')}}"><span>SARS-CoV-2</span></a></li>
                    <li class="{{ (request()->is('organs*')) ? 'active' : '' }}"><a href="{{url('organs')}}"><span>Organs</span></a></li>
                    <li class="{{ (request()->is('tissues*')) ? 'active' : '' }}"><a href="{{url('tissues')}}"><span>Tissues</span></a></li>  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span>Resources</span>
                            <i class="fa fa-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="{{ (request()->is('projects*')) ? 'active' : '' }}"><a href="{{url('projects')}}">The Projects</a></span></a></li>
                            <li class="{{ (request()->is('policies*')) ? 'active' : '' }}"><a href="#"><span>Our Policies</span></a></li>
                        </ul>
                    </li>
                    @if ((request()->is('home')) )
                    <li ><a href="#faq" target="_self"><span>FAQ</span></a></li>
                    @endif
                    <li class="{{ (request()->is('biospecimens*')) ? 'active' : '' }}"><a href="{{url('contact')}}"><span>Contacts</span></a></li>
                </ul>
                <!-- Header Nav Links End -->
            </div>
        </div>
    </div>
    <!-- Header Navbar End -->
</header>
