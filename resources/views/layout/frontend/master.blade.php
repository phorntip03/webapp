<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Small Apps | Bootstrap App Landing Template</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Bootstrap App Landing Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Small Apps Template v1.0">
  
  <!-- theme meta -->
  <meta name="theme-name" content="small-apps" />

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('asset/frontend/images/favicon.png')}}" />
  
  @include('layout.frontend.css')

</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">

@include('layout.frontend.nav')
@yield('content')
<!--============================
=            Footer            =
=============================-->
@include('layout.frontend.footer')
<!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>
  
@include('layout.frontend.js')
</body>

</html>
