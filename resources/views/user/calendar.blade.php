@extends('layouts.user')

@section('title', 'Body Makeup Balance')

@section('content')
   <head>
         
         <link rel="stylesheet" href="{{ secure_asset('css/calendar.css') }}">
         <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;469;700&display=swap" rel="stylesheet">
         
   </head>
   
   <div class="flex-center position-ref full-height">
       <div class="content">
           
           <div class="main-title">カレンダー</div>
           
           <div class="day">
               <a href="?ym={{ $prev }}">&lt;</a>
               <span calss="month">{{ $month }}</span>
               <a href="?ym={{ $next }}">&gt;</a>
           </div>
           
           <table>
               <tr>
                   <th>日</th>
                   <th>月</th>
                   <th>火</th>
                   <th>水</th>
                   <th>木</th>
                   <th>金</th>
                   <th>土</th>
               </tr>
               @foreach ($weeks as $week)
                  {!! $week !!}
               @endforeach
           </table>
          <div class="btn-space">
            <div>
               <button class="btn-pink btn" type="button" onclick="location.href='/user/home'">戻る</button>
            </div>
          </div>
       </div>
       {{-- .content --}}
   </div>
   {{-- .flex-center .position-ref .full-height --}}
@endsection