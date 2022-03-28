<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/css/app.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/3109a1369e.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset("assets/images/logo.png")}}" type="image/x-icon">
    <title>@yield('title')</title>
</head>
<body class="body bg-gray-100 ">
<div class="flex flex-col min-h-screen">
    <x-menu></x-menu>

    <div class="relative {{ Route::currentRouteName() != "home" ? "top-[80px]": "" }}">
        @yield("body")
    </div>
    <x-footer></x-footer>
</div>
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/vanilla-tilt.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
@yield("js")
</body>
</html>
