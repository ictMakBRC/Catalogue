
<!DOCTYPE html>
<html lang="en"  class="ColorLessIcons">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('title')</title>
	<!--favicon-->
	<link rel="icon" href="{{ asset('assets/images/favicon-32x32.png')}}" type="image/png" />
	<!--plugins-->
	<link href="{{ asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/smart-wizard/css/smart_wizard_all.min.css')}}" rel="stylesheet" type="text/css" />
	<!-- loader-->
	<link href="{{ asset('assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{ asset('assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/icons.css')}}" />
	<!-- App CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/app.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/ked.css')}}" />
	<link rel="stylesheet" href="{{ asset('assets/css/dark-sidebar.css')}}" />
	<link rel="stylesheet" href="{{ asset('assets/css/dark-theme.css')}}" />
    <script src="{{ asset('assets/js/jquery.js') }}"></script>

	<link href="{{ asset('assets/plugins/fancy-file-uploader/fancy_fileupload.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/select2/css/select2-bootstrap4.css')}}" rel="stylesheet" />
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!--sidebar-wrapper-->

        @include("dashboard.components.sidebar")
		<!--end sidebar-wrapper-->
		<!--header-->
        @include("dashboard.components.header")
		<!--end header-->
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
            <div class="page-content-wrapper">
            @include("dashboard.components.messages")
            @yield('content')
            </div>
			<!--end page-content-wrapper-->
		</div>
		<!--end page-wrapper-->
		<!--start overlay-->

		<!--footer -->
        @include("dashboard.components.footer")
		<!-- end footer -->
	</div>
	<!-- end wrapper -->
	<!--start switcher-->

	<!--end switcher-->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js')}}, then Bootstrap JS -->
	<script src="{{ asset('assets/js/jquery-3.5.0.min.js')}}"></script>
	<script src="{{ asset('assets/js/popper.min.js')}}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
	<!--plugins-->
	<script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{ asset('assets/plugins/smart-wizard/js/jquery.smartWizard.min.js')}}"></script>
	<script>

    $(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});

	</script>
	<!-- App JS -->
	<script src="{{ asset('assets/js/app.js')}}"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{ asset('assets/sweetalert/sweetalert.min.js')}}"></script>
	<script>
		$('.single-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
		$('.multiple-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
	</script>
    <script src="{{ asset('assets/plugins/fancy-file-uploader/jquery.ui.widget.js') }}"></script>
	<script src="{{ asset('assets/plugins/fancy-file-uploader/jquery.fileupload.js') }}"></script>
	<script src="{{ asset('assets/plugins/fancy-file-uploader/jquery.iframe-transport.js') }}"></script>
	<script src="{{ asset('assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js') }}"></script>
	<script src="{{ asset('assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>
	<script>
		$('#fancy-file-upload').FancyFileUpload({
			params: {
				action: 'fileuploader'
			},
			maxfilesize: 1000000
		});
	</script>
	<script>
		$(document).ready(function () {
			$('#image-uploadify').imageuploadify();
		});
	</script>
</body>

</html>
