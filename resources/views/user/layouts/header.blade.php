 <!--================= Meta tag =================-->
        <meta charset="utf-8">
       
        <meta name="description" content="">
        <!--================= Responsive Tag =================-->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--================= Favicon =================-->
        <link rel="apple-touch-icon" href="{{ asset('backend/frontassets/images/logo/newlogo.png') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/frontassets/images/logo/newlogo.png') }}">        
        <!--================= Bootstrap V5 css =================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/frontassets/css/bootstrap.min.css') }}">
        <!--================= Menus css =================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/frontassets/css/menus.css') }}">               
        <!--================= Animate css =================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/frontassets/css/animate.css') }}">
        <!--================= Owl Carousel css =================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/frontassets/css/owl.carousel.css') }}">
        <!--================= Elegant icon css  =================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/frontassets/fonts/elegant-icon.css') }}">
        <!--================= Magnific Popup css =================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/frontassets/css/magnific-popup.css') }}">
        <!--================= Animations css =================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/frontassets/css/animations.css') }}">  
        <!--================= style css =================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/frontassets/css/style.css') }}">
        <!--================= Custom Spacing css =================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/frontassets/css/custom-spacing.css') }}">
        <!--================= Responsive css =================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/frontassets/css/responsive.css') }}">
        
        <!--csrf-->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!--pwa-->
        <link rel="manifest"  href="/manifest.json">
        
        <script>
             window.onload = () => {
  'use strict';

  if ('serviceWorker' in navigator) {
    navigator.serviceWorker
             .register('./sw.js');
  }
}
        </script>
        
       

        
        
