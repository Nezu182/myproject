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
        
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
        
        <link rel="stylesheet" href="{{ secure_asset('css/meal_hibetsu.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;469;700&display=swap" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" rel="stylesheet">
        
    </head>
    
    <body>
        
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                <div calss="container" style="width: 100%;">
                  
                 <ul class="gnav">
                  <li>
                    <div calss="navbar-brand">Meal Balance</div>
                    <ul>
                        <li><a calss="dropdown-link" onclick="location.href='/user/home'">ホーム</a></li>
                        <li><a calss="dropdown-link" onclick="location.href='/user/meal_hibetsu'">日別食事一覧</a></li>
                        <li><a calss="dropdown-link" onclick="location.href='/user/calendar'">カレンダー</a></li>
                    </ul>
                  </li>
                 </ul>
                  
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            
                        </ul>
                        
                         <ul class="navbar-nav ml-auto">
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>
    
</html>