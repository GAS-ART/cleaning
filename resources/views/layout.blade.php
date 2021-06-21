<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link
      href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Roboto&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="{{ asset('js/slick.min.js') }}"></script>
   <script src="{{ asset('js/script.js') }}"></script>
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