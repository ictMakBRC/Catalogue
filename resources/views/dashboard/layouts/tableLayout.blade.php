
<!doctype html>
<html lang="en" class="ColorLessIcons">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>@yield('title')</title>
	<!--favicon-->
	<link rel="icon" href="{{ asset('assets/images/favicon-32x32.png')}}" type="image/png" />
	<!--plugins-->
	<link href="{{ asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{ asset('assets/js/pace.min.js')}}"></script>

	<!--Data Tables -->
	<link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/icons.css')}}" />
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
	<!-- App CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/app.css')}}" />
	<link rel="stylesheet" href="{{ asset('assets/css/dark-sidebar.css')}}" />
	<link rel="stylesheet" href="{{ asset('assets/css/dark-theme.css')}}" />
    <link href="{{ asset('assets/plugins/fancy-file-uploader/fancy_fileupload.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/select2/css/select2-bootstrap4.css')}}" rel="stylesheet" />
</head>

<body>
	<!--wrapper-->
    {{-- @if(!Session::has('branch'))
    <script type="text/javascript">
        window.location = "{{ url('inventory/select/location') }}";
       </script>
    @endif --}}
	<div class="wrapper">
		<!--sidebar wrapper -->

        @include("dashboard.components.sidebar")
		<!--end sidebar wrapper -->
		<!--start header -->
        @include("dashboard.components.header")
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
            <div class="page-content-wrapper">
               @include("dashboard.components.messages")
               @yield('content')
            </div>

		</div>
		<!--end page wrapper -->
		<!--start overlay-->

		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
        @include("dashboard.components.footer")
	</div>
	<!--end wrapper-->
	<!--start switcher-->

	<!--end switcher-->
	<!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{ asset('assets/js/popper.min.js')}}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
	<!--plugins-->
	<script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<!-- Vector map JavaScript -->
	<script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>

	<script src="{{ asset('assets/js/index2.js')}}"></script>
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


<script>
    $(document).ready(function() {
        $('#example').DataTable();
      } );
</script>
<script>
    $(document).ready(function () {
        //Default data table
        $('#example').DataTable();
        var table = $('#example3').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
        });
        table.buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
    });
    </script>
<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'print']
        } );

        table.buttons().container()
            .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );
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
