<!DOCTYPE html>
<html lang="en">
<head>

     <title>farmagriaagtechltd.com</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{asset('website/css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('website/css/font-awesome.min.css')}}">
     <link rel="stylesheet" href="{{asset('website/css/owl.carousel.css')}}">
     <link rel="stylesheet" href="{{asset('website/css/owl.theme.default.min.css')}}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{asset('website/css/style.css')}}">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>


     <!-- MENU -->
     
@include('layouts.header')


     <!-- HOME -->
    
     @yield('content')

     <!-- FOOTER -->
     
     @include('layouts.footer')

     <!-- SCRIPTS -->
     <script src="{{asset('website/js/jquery.js')}}"></script>
     <script src="{{asset('website/js/bootstrap.min.js')}}"></script>
     <script src="{{asset('website/js/owl.carousel.min.js')}}"></script>
     <script src="{{asset('website/js/smoothscroll.js')}}"></script>
     <script src="{{asset('website/js/custom.js')}}"></script>

</body>
</html>