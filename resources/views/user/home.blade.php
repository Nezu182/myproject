@extends('layouts.user')

@section('title', 'Meal Balance')

@section('content')
   <div class="container">
      
      <head>
         
         <link rel="stylesheet" href="{{ secure_asset('css/home.css') }}">
         <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;469;700&display=swap" rel="stylesheet">
         
      </head>
      
      <form action="{{ action('User\MealController@home') }}" method="post" enctype="multipart/form-data">
      
      <body>
          
       <div class="day">
         <h2>
             <?php
                $meal_date = DateTime::createFromFormat('Y-m-d', $meal_date);
                echo $meal_date->format('n/j');
             ?>
         </h2>
      </div>
       <div class="title">
           <span>栄養素</span>
       </div>
       <div class="item">
        
          <div class="kacl">
            <dl>
               <dt>カロリー</dt>
               <dd>{{ $total_kcal }} kcal</dd>
            </dl>
          </div>
          <div class="sisitu">
            <dl>
               <dt>脂質</dt>
               <dd>{{ $total_sisitu }} g</dd>
            </dl>
          </div>  
          <div class="tousitu">
            <dl>
               <dt>糖質</dt>
               <dd>{{ $total_tousitu }} g</dd>
            </dl>
          </div>
          <div class="tansuikabutu">
            <dl>
               <dt>炭水化物</dt>
               <dd>{{ $total_tansuikabutu }} g</dd>
            </dl>
          </div>
          <div class="tanpakusitu">
            <dl>
               <dt>タンパク質</dt>
               <dd>{{ $total_tanpakusitu }} g</dd>
            </dl>
          </div>
         
       </div>
       <div class="btn-space">
         <div>
          <button class="btn-pink btn" type="button" onclick="location.href='/user/calendar'">過去の記録</button>
         </div>
         <div>
          <button class="btn-pink btn" type="button" onclick="location.href='/user/meal_hibetsu'">編集</button>
         </div>
      </div>
       
      </body>
   </div>
@endsection

