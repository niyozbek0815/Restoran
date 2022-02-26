<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('style')
</head>

<body>
    <div class="site">
        <div class="left_site">
            <div class="logotip">
                <div class="logo">
                    <img src="{{ asset('storage/dars14/about-image.jpg') }}" alt="">
                </div>
                <h4 class="l_name">
                    Eantry Cafe
                </h4>
            </div>
            <div class="user">
                <div class="user_img">
                    <img src="{{ asset('img/w_logo.png') }}" alt="">
                </div>
                <h5 class="user_name">
                      Niyozbek
                </h5>
            </div>
            <form action="" method="get">
                <input type="search" class="form-control l_search">
                <button class="l_btn btn btn-light"><i class="fas fa-search"></i></button>
            </form>
            <ul class="menu">
                <li @yield('a1') ><span class="aylana "></span><a href="/admin">Menu</a></li>
                <li @yield('a2')><span class="aylana"></span><a href="/admin/xodim">Xodimlar</a></li>
                <li @yield('a3')><span class="aylana"></span><a href="/admin/mijoz">Mijozlarimiz fikri</a></li>
                <li @yield('a4')><span class="aylana"></span><a href="/admin/slayd">Slayd</a></li>
                <li @yield('a6')><span class="aylana"></span><a href="/admin/hisobot">Hisobot</a></li>
            </ul>
        </div>
        <div class="right_site">


    @yield('content')


        </div>


</div>
@yield("js")


</body>

</html>
