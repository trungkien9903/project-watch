<!DOCTYPE html>
<html lang="en">
<head>
<title>Time Watch</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="e-commerce site well design with responsive view." />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="{{url('public')}}/frontend/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<link href="{{url('public')}}/frontend/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="{{url('public')}}/frontend/https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="{{url('public')}}/frontend/css/stylesheet.css" rel="stylesheet">
<link href="{{url('public')}}/frontend/css/responsive.css" rel="stylesheet">
<link href="{{url('public')}}/frontend/owl-carousel/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
<link href="{{url('public')}}/frontend/owl-carousel/owl.transitions.css" type="text/css" rel="stylesheet" media="screen" />
</head>
<body>
<div class="preloader loader" style="display: block; background:#f2f2f2;"> <img src="{{url('public')}}/frontend/image/loader.gif"  alt="#"/></div>

  @include('layouts.header')

  @yield('content')
  
  @include('layouts.footer')

<script src="{{url('public')}}/frontend/javascript/parally.js"></script> 
<script src="{{url('public')}}/frontend/javascript/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="{{url('public')}}/frontend/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{url('public')}}/frontend/javascript/jstree.min.js" type="text/javascript"></script>
<script src="{{url('public')}}/frontend/javascript/template.js" type="text/javascript" ></script>
<script src="{{url('public')}}/frontend/javascript/common.js" type="text/javascript"></script>
<script src="{{url('public')}}/frontend/javascript/global.js" type="text/javascript"></script>
<script src="{{url('public')}}/frontend/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script>
$('.parallax').parally({offset: -40});
</script>
</body>

<!-- Mirrored from html.lionode.com/timewatch/Watch Time/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Aug 2018 23:17:17 GMT -->
</html>
