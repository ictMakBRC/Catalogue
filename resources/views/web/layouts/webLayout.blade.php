<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>Catalog | @yield('title')</title>

    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicon ==== -->
    <link rel="icon" href="{{url('assets/images/favicon-32x32.png')}}" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700%7CRoboto:300,400,400i,500,700">

    <!-- ==== Plugins Bundle ==== -->
    <link rel="stylesheet" href="{{url('site/css/plugins.min.css')}}">

    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="{{url('site/style.css')}}">

    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="{{url('site/css/responsive-style.css')}}">

    <!-- ==== Color Scheme Stylesheet ==== -->
    <link rel="stylesheet" href="{{url('site/css/colors/color-7.css')}}" id="changeColorScheme">

    <link rel="stylesheet" href="{{url('site/css/toast.css')}}">

    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="{{url('site/css/custom.css')}}">
    <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" type="text/css">
    {{-- <script src="{{ asset('assets/js/jquery.js') }}"></script> --}}

    <!-- ==== HTML5 Shim and Respond.js')}} IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js')}}/1.4.2/respond.min.js')}}"></script>

    <![endif]-->
    @livewireStyles

</head>
<body>

        @if (isset($preloader))
            <!-- Preloader Start -->
            <div if id="preloader">
                <div class="preloader--inner"></div>
            </div>
            <!-- Preloader End --> 
        @endif


    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
        @include("web.inc.header")
        <!-- Header Section End -->

        <!-- Banner Section Start -->
        @yield('content')

        <!-- Footer Section Start -->
        @include("web.inc.footer")
        <!-- Footer Section End -->
    </div>
    <!-- Wrapper End -->

    <!-- Back To Top Button Start -->
    <div id="backToTop">
        <a href="#" class="btn"><i class="fa fa-caret-up"></i></a>
    </div>
    <!-- Back To Top Button End -->

    <!-- ==== Plugins Bundle ==== -->
    <script src="{{url('site/js/plugins.min.js')}}"></script>

    <!-- ==== Main Script ==== -->
    <script src="{{url('site/js/main.js')}}"></script>


{{-- toastr js --}}
<script src="{{url('site/js/toast.js')}}"></script>

    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/datatable/js/responsive.bootstrap5.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#tableEx').DataTable({
                lengthChange: false,
                searching: false,
                autoWidth: false,
                responsive: false,
            });
            $('#tableEx2').DataTable({
                lengthChange: true,
                searching: true,
                autoWidth: true,
                responsive: false,
            });
          } );
    </script>

   <script>
    $(document).ready(function() {
        toastr.options.timeOut = 10000;
        @if (Session::has('error'))
            toastr.error('{{ Session::get('error') }}');
        @elseif(Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
            @elseif(Session::has('warning'))
            toastr.warning('{{ Session::get('warning') }}');
        @endif
    });

</script>
<script>
    $(document).ready(function() {

   
// inspired by http://jsfiddle.net/arunpjohny/564Lxosz/1/
$('.table-responsive-stack').each(function (i) {
   var id = $(this).attr('id');
   //alert(id);
   $(this).find("th").each(function(i) {
      $('#'+id + ' td:nth-child(' + (i + 1) + ')').prepend('<span class="table-responsive-stack-thead">'+             $(this).text() + ':</span> ');
      $('.table-responsive-stack-thead').hide();
      
   });
   
});
$( '.table-responsive-stack' ).each(function() {
var thCount = $(this).find("th").length; 
var rowGrow = 100 / thCount + '%';
//console.log(rowGrow);
$(this).find("th, td").css('flex-basis', rowGrow);   
});

function flexTable(){
if ($(window).width() < 768) {
   
$(".table-responsive-stack").each(function (i) {
   $(this).find(".table-responsive-stack-thead").show();
   $(this).find('thead').hide();
});
   
 
// window is less than 768px   
} else {
   
   
$(".table-responsive-stack").each(function (i) {
   $(this).find(".table-responsive-stack-thead").hide();
   $(this).find('thead').show();
});
   
   

}
// flextable   
}      

flexTable();

window.onresize = function(event) {
 flexTable();
};
});
</script>
@livewireScripts
</body>
</html>
