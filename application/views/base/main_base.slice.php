<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Ormas - {{$this->uri->segment(1)}}</title>

    <link href="{{site_url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{site_url('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{site_url('assets/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
    <link href="{{site_url('assets/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
    <link href="{{site_url('assets/css/plugins/chosen/bootstrap-chosen.css')}}" rel="stylesheet">
    <link href="{{site_url('assets/css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
	<link href="{{site_url('assets/css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
    
    <link href="{{site_url('assets/css/plugins/select2/select2.min.css')}}" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{site_url('assets/js/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">

	<link href="{{site_url('assets/css/plugins/steps/jquery.steps.css')}}" rel="stylesheet">

    <link href="{{site_url('assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{site_url('assets/css/style.css')}}" rel="stylesheet">

</head>
<body>

<div id="wrapper">
    @include('element.sidebar')

    <div id="page-wrapper" class="gray-bg">
    @include('element.navbar')

    @yield('content')

    @include('element.footer')
    </div>
</div>
 <!-- Mainly scripts -->
 <script src="{{site_url('assets/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{site_url('assets/js/popper.min.js')}}"></script>
    <script src="{{site_url('assets/js/bootstrap.js')}}"></script>
    <script src="{{site_url('assets/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{site_url('assets/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <!-- Datatables -->
    <script src="{{site_url('assets/js/plugins/dataTables/datatables.min.js')}}"></script>
    <script src="{{site_url('assets/js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>

    <script src="{{site_url('assets/js/plugins/chosen/chosen.jquery.js')}}"></script>


     <!-- Select2 -->
     <script src="{{site_url('assets/js/plugins/select2/select2.full.min.js')}}"></script>

    <!-- Flot -->
    <script src="{{site_url('assets/js/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{site_url('assets/js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{site_url('assets/js/plugins/flot/jquery.flot.spline.js')}}"></script>
    <script src="{{site_url('assets/js/plugins/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{site_url('assets/js/plugins/flot/jquery.flot.pie.js')}}"></script>

    <!-- Peity -->
    <script src="{{site_url('assets/js/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{site_url('assets/js/demo/peity-demo.js')}}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{site_url('assets/js/inspinia.js')}}"></script>
    <script src="{{site_url('assets/js/plugins/pace/pace.min.js')}}"></script>

    <!-- jQuery UI -->
    <script src="{{site_url('assets/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

    <!-- GITTER -->
    <script src="{{site_url('assets/js/plugins/gritter/jquery.gritter.min.js')}}"></script>

    <!-- Sparkline -->
    <script src="{{site_url('assets/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Sparkline demo data  -->
    <script src="{{site_url('assets/js/demo/sparkline-demo.js')}}"></script>

    <!-- ChartJS-->
    <script src="{{site_url('assets/js/plugins/chartJs/Chart.min.js')}}"></script>

    <!-- Toastr -->
    <script src="{{site_url('assets/js/plugins/toastr/toastr.min.js')}}"></script>


	<!-- Steps -->
	<script src="{{site_url('assets/js/plugins/steps/jquery.steps.min.js')}}"></script>

	<!-- Jquery Validate -->
	<script src="{{site_url('assets/js/plugins/validate/jquery.validate.min.js')}}"></script>

	<!-- Jquery Date Picker -->
	<script src="{{site_url('assets/js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>

@yield('js')


</body>
</html>
