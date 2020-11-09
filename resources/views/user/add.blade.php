@extends('layouts.user')

@section('title', 'Meal Balance')

@section('content')
   <div class="container">
       <head>
         
         <link rel="stylesheet" href="{{ secure_asset('css/add-edit.css') }}">
         <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;469;700&display=swap" rel="stylesheet">
         
      </head>
      <body>
     
      <form action="{{ action('User\MealController@create') }}" method="post" enctype="multipart/form-data">
       
      <div class="header">
         <div class="day">
           <p>
             <?php
                echo date('m/d', strtotime($selectedDate));
             ?>
           </p>
         </div>
      <div class="main-title">食事追加画面</div>
      </div>
      @if (count($errors) > 0)
            <ul>
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
      @endif
       <div class="title">
           <span>栄養素</span>
       </div>
       <div class="item">
         <div class="content">
          <dl>
             <dt>カロリー</dt>
             <dd><input type="number" name="kcal" min="-0.9" max="9999.9" step="0.1"/>  kcal</dd>
          </dl>
       </div>
         <div class="content">
            <dl>
              <dt>脂質</dt>
              <dd><input type="number" name="sisitu" min="-0.9" max="999.9" step="0.1"/>  g</dd>
            </dl>
         </div>  
         <div class="content">
            <dl>
               <dt>糖質</dt>
               <dd><input type="number" name="tousitu" min="-0.9" max="999.9" step="0.1"/>  g</dd>
            </dl>
       </div>
       <div class="content">
          <dl>
             <dt>炭水化物</dt>
             <dd><input type="number" name="tansuikabutu" min="-0.9" max="999.9" step="0.1"/>  g</dd>
          </dl>
       </div>
       <div class="content">
          <dl>
             <dt>タンパク質</dt>
             <dd><input type="number" name="tanpakusitu" min="-0.9" max="999.9" step="0.1"/>  g</dd>
          </dl>
       </div>
       </div>
       <div class="btn-space">
         <div>
          <button class="btn-pink btn" type="button" onclick="location.href='/user/meal_hibetsu'">戻る</button>
         </div>
         <div>
          {{ csrf_field() }}
          <button class="btn-pink btn" type="submit">
          	<input type="submit" value="登録">
          </button>
         </div>
       <input type="hidden" name="meal_date" value="{{ $selectedDate }}">
       <input type="hidden" name="meal_time" value="1">
       {{ csrf_field() }}
      </form>
      </body>
   </div>
@endsection