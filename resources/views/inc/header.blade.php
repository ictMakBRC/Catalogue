<header>
    <div class="topbar d-none d-md-block">
        <div class="container-xl">
            <div class="row justify-content-between align-items-center">
                <div class="col-sm-5">
                    <p class="topbar-info">
                        <i class="icofont-google-map"></i>
                        <span>9470 Riverview, Zion 60099</span>
                    </p>
                </div>
                <div class="col-sm-7 text-right">
                    <p class="topbar-info">
                        <i class="icofont-envelope-open"></i>
                        <span>medicust@gmail.com</span>
                    </p>
                    <p class="topbar-info">
                        <i class="icofont-headphone-alt-1"></i>
                        <span>+88 564 867 4687</span>
                    </p>
                </div>
            </div>
        </div>
    </div><!-- /.topbar -->
    <nav class="navbar navbar-expand-lg main-nav sticky">
        <div class="container-xl px-15 px-lg-0">
            <a class="navbar-brand" href="index.html">
                <img src="web/img/logo.png" alt="Site Logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu" aria-controls="main_menu" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <div class="collapse navbar-collapse" id="main_menu">
                <ul class="navbar-nav ml-auto">
                    <li >
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{url('about')}}">About</a>
                    </li>
                    <li><a href="{{url('biospecimen')}}">Biospecimen</a></li>
                    <li><a href="{{url('tissues')}}">Tissues</a></li>
                    <li>
                        <a href="{{url('projects/')}}">Projects</a>
                    </li>
                    {{-- <li class="dropdown">
                        <a class="dropdown-toggle" href="#" id="pages_all" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Specimens
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="pages_all">
                            <li><a href="{{url('biospecimen')}}">Biospecimen</a></li>
                            <li><a href="about.html">Organs</a></li>
                            <li><a href="{{url('tissues')}}">Tissues</a></li>

                        </ul>
                    </li> --}}
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
                <div class="d-block d-md-none">
                    <p class="topbar-info">
                        <i class="icofont-google-map"></i>
                        <span>9470 Riverview, Zion 60099</span>
                    </p>
                    <p class="topbar-info">
                        <i class="icofont-envelope-open"></i>
                        <span>medicust@gmail.com</span>
                    </p>
                    <p class="topbar-info">
                        <i class="icofont-headphone-alt-1"></i>
                        <span>+88 564 867 4687</span>
                    </p>
                </div>
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <span class="navbar-text">
                        <a href="{{ url('/catalogue/dashboard') }}" class="theme-btn">Dashboard</a>
                    </span>

                    @else

                        <span class="navbar-text">
                            <a href="{{ route('login') }}" class="theme-btn">The Catalogue</a>
                        </span>

                    @endauth
                </div>
            @endif

            </div>
        </div>
    </nav>
</header>
