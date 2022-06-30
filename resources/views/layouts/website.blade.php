<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('assets/website/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/website/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/website/assets/css/fontawsome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/website/assets/fonts/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/website/assets/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/website/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/website/assets/css/nice-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/website/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/website/assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/website/assets/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/website/assets/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/website/assets/css/barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('assets/website/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/website/assets/css/dark.css')}}">
    <link rel="stylesheet" href="{{asset('assets/website/assets/css/responsive.css')}}">
    <title>Creating Star Concept</title>
    <link rel="icon" type="image/png" href="{{asset('assets/website/assets/images/fav-icon.png')}}')}}">
    @yield('head')
    <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }
    </style>
</head>

<body>
    @include('partials.website.navbar')

    @yield('content')

    @include('partials.website.footer')
    <a href="https://api.whatsapp.com/send?phone=23481363599938&amp;text=HelloStarConcepts!" class="float"
        target="_blank">
        <i class="fab fa-whatsapp my-float"></i>
    </a>
</body>

</html>