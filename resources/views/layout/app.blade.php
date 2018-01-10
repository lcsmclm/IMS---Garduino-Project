<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gnome&trade; Garden Assistant</title>
    <meta content="GNOME" name="author"/>
    <meta content="Gnome, Garduino, Gardening, Tools, Smart, Water levels, Temperature, Lights" name="keywords"/>
    <meta content="Gnomes lives with your garden and becomes best friends with your plants. Gnome finds out if your plants are happy or sad and lets you know if they are thirsty too. " name="description"/>
    <meta property="og:url" content="www.gnome.co"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="GNOME&trade; Garden Assistant"/>
    <meta property="og:description" content="Gnomes lives with your garden and becomes best friends with your plants. Gnome finds out if your plants are happy or sad and lets you know if they are thirsty too."/>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!-- <link href="css/main.min.css" rel="stylesheet" type="text/css"> -->
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<header>
        <nav class="navbar navbar-light top-bar">
            <img src="{{ URL::asset('images/gnome-logo.svg')}}" class="img-fluid logo">
        </nav>

        <nav class="navbar navbar-light tab-bar">
            <a class="navbar-brand @if (\Request::is('/'))active @endif" href="/">
                <img src="{{ URL::asset('images/plant-01.svg')}}" class="img-fluid">
            </a>
            <a class="navbar-brand @if (\Request::is('statistics'))active @endif" href="/statistics">
                <img src="{{ URL::asset('images/stat-01.svg')}}" class="img-fluid">
            </a>
            <a class="navbar-brand @if (\Request::is('plantlist'))active @endif" href="/plantlist">
                <img src="{{ URL::asset('images/plantdb-01.svg')}}" class="img-fluid">
            </a>
            <a class="navbar-brand @if (\Request::is('settings'))active @endif" href="/settings">
                <img src="{{ URL::asset('images/setting-01.svg')}}" class="img-fluid">
            </a>
        </nav>
</header>
  <div id="content" class='container-plantdb container-fluid'>
@yield('content')
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
   crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
   crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/utils.js') }}"></script>
@if (\Request::is('plantlist'))
  <script type="text/javascript" src="{{ URL::asset('js/plantlist.js') }}"></script>
@endif
@if (\Request::is('/'))
  <script type="text/javascript" src="{{ URL::asset('js/userplant.js') }}"></script>
@endif
@if (\Request::is('statistics'))
<script src="https://d3js.org/d3.v4.min.js"></script>
  <script type="text/javascript" src="{{ URL::asset('js/statisticload.js') }}"></script>

@endif
<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
</body>
</html>
