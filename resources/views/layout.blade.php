<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png')}} ">
<link rel="manifest" href="{{ asset('img/favicon/site.webmanifest')}}">

   <meta property="og:url" content="https://клининг.dp.ua/" />
   <meta property="og:type" content="website" />
   <meta property="og:title" content="@yield('ogTitle')" />
   <meta property="og:description" content="@yield('ogDescription')" />
   <meta property="og:site_name" content="клининг.dp.ua" />
   <meta property="og:image" content="https://xn--c1ajagfnb.dp.ua/img/icons/logo.png" />
   @yield('ogVideo')

   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link
      href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Roboto&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') . '?_v=8' }}">
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="{{ asset('js/slick.min.js') }}"></script>
   <script src="{{ asset('js/script.js') . '?_v=3' }}"></script>
   <!-- Global site tag (gtag.js) - Google Ads: 957048846 -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=AW-957048846"></script>
   <script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'AW-957048846');</script>
   
   <!-- Global site tag (gtag.js) - Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-MBNQ39W38Z"></script>
   <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());

   gtag('config', 'G-MBNQ39W38Z');
   </script>
   
   <title>@yield('title')</title>
</head>

<body id="body">
   <div class="wraper">
      @include('inc.header')
      @yield('content')
      @include('inc.footer')
      @include('inc.messengers')
   </div>
   @include('inc.popup')
</body>

</html>