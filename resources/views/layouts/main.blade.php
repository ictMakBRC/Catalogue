<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Medicust - Health and Medical HTML5 Template" />
        <meta name="author" content="Envalab" />
        <title>@yield('title')</title>
        <!-- Favicon -->
        <link rel="{{url('web/shortcut icon" href="img/favicon.png')}}" />
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link href="{{url('web/css/bootstrap.min.css')}}" rel="stylesheet" />
        <!-- FlatIcon CSS -->
        <link href="{{url('web/css/flaticon.css')}}" rel="stylesheet" />
        <!-- IcoFont CSS -->
        <link href="{{url('web/css/icofont.min.css')}}" rel="stylesheet" />
        <!-- Animate CSS -->
        <link href="{{url('web/css/animate.css')}}" rel="stylesheet" />
        <!-- Owl Carousel CSS -->
        <link href="{{url('web/css/owl.carousel.css')}}" rel="stylesheet" />
        <!-- Hamburgers CSS -->
        <link href="{{url('web/css/hamburgers.min.css')}}" rel="stylesheet" />
        <!-- Style CSS -->
        <link href="{{url('web/css/style.css')}}" rel="stylesheet" />
        <!-- Responsive CSS -->
        <link href="{{url('web/css/responsive.css')}}" rel="stylesheet" />
    </head>

    <body>
        <!-- page-wrapper start -->
        <div class="page-wrapper">
           <!-- header -->
           @include("inc.header")

           @yield('content')
        <!-- /.site-content -->
            @include("inc.footer")
        </div>
        <!-- page-wrapper end -->

        <div class="modal fade" id="popup-video">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-body">
                        <iframe width="853" height="480" src="https://www.youtube.com/embed/IFjZNmp3e1g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back2Top -->
        <div class="back2Top bg1 wave">
            <i class="icofont-dotted-up text-white"></i>
        </div>

        <!-- Required JavaScript Files -->
        <!-- jQuery JS -->
        <script src="{{url('web/js/jquery-1.12.4.min.js')}}"></script>
        <!-- Bootstrap JS -->
        <script src="{{url('web/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Owl Carousel JS -->
        <script src="{{url('web/js/owl.carousel.js')}}"></script>
        <!-- Wow.js -->
        <script src="{{url('web/js/wow.min.js')}}"></script>
        <!-- WayPoints JS -->
        <script src="{{url('web/js/jquery.waypoints.min.js')}}"></script>
        <!-- CounterUp JS -->
        <script src="{{url('web/js/jquery.counterup.min.js')}}"></script>
        <!-- Smooth Scroll JS -->
        <script src="{{url('web/js/SmoothScroll.js')}}"></script>
        <!-- Main.js -->
        <script src="{{url('web/js/main.js')}}"></script>
    </body>
</html>
