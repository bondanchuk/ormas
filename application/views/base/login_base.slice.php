<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ormas | {{$this->uri->segment(1)}}</title>

    <link href="{{site_url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{site_url('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{site_url('assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{site_url('assets/css/style.css')}}" rel="stylesheet">

</head>

<body class="gray-bg">
  @yield('content')

 <!-- Mainly scripts -->
 <script src="{{site_url('assets/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{site_url('assets/js/popper.min.js')}}"></script>
</body>

</html>
