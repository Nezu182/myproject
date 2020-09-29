@extends('layouts.user')

@section('title', 'Body Makeup Balance')

@section('content')
   <div class="container">
      
      <head>
         
         <link rel="stylesheet" href="{{ secure_asset('css/home.css') }}">
         
      </head>
      
      <form action="{{ action('User\MealController@home') }}" method="post" enctype="multipart/form-data">
      
      <body>
          
       <div class="day">
         <h2>
             <?php
                $meal_date = DateTime::createFromFormat('Y-m-d', $meal_date);
                echo $meal_date->format('n月j日');
             ?>
         </h2>
      </div>
       <div class="title">
           <span>栄養素</span>
       </div>
       <div class="item">
        @foreach ($meals as $meal)
          <div class="content">
            <dl>
               <dt>カロリー</dt>
               <dd>{{ $meal->kcal }}g</dd>
            </dl>
          </div>
          <div class="content">
            <dl>
               <dt>脂質</dt>
               <dd>{{ $meal->sisitu }}g</dd>
            </dl>
          </div>  
          <div class="content">
            <dl>
               <dt>糖質</dt>
               <dd>{{ $meal->tousitu }}g</dd>
            /dl>
          </div>
          <div class="content">
            <dl>
               <dt>炭水化物</dt>
               <dd>{{ $meal->tansuikabutu }}g</dd>
            </dl>
          </div>
          <div class="content">
            <dl>
               <dt>タンパク質</dt>
               <dd>{{ $meal->tousitu }}g</dd>
            </dl>
          </div>
         @endforeach
       </div>
          <div class="bottom-btn">
         <div class="a">
           <botton type="button">過去の記録</botton>
         </div>
         <div class="b">
           <botton type="botton">編集</botton>
         </div>
       </div>
       
      </body>
   </div>
@endsection

