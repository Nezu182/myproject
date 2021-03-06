<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title')</title>
        
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/top.css') }}" rel="stylesheet">
    </head>
    <body>
    <div id="splash">
        <div id="splash_text"></div>
    </div>
    
    <div id="container">
     <div class="screen">
         
        <div class="title">
            <h1 class="name">Meal Balance .</h1>
            <span class="focus_line"></span>
        </div>
        
      <div class="btn-space">
         <div>
           <button class="btn-pink btn" type="button" onclick="location.href='/register'">アカウント登録</button>
         </div>
         <div>
           <button class="btn-pink btn" type="button" onclick="location.href='/login'">ログイン</button>
         </div>
      </div>
     </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"></script>
    <script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.min.js"></script>
    <script src="js/script.js"></script>
    </body>