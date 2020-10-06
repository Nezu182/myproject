@extends('layouts.user')

@section('title', 'Meal Balance')

@section('content')
   <div class="container">
       <head>
         
         <link rel="stylesheet" href="{{ secure_asset('css/add.css') }}">
         
      </head>
      
      <form action="{{ action('User\MealController@create') }}" method="post" enctype="multipart/form-data">
       
      <div class="date">
       <p>
          <?php
            echo date('m月d日', strtotime($selectedDate));
          ?>
       </p>
      </div>
       
      @if (count($errors) > 0)
          <ul>
              @foreach($errors->all() as $e)
                  <li>{{ $e }}</li>
              @endforeach
          </ul>
      @endif
         
       <div class="day">
         <h2>食事追加画面</h2>
      </div>
       <div class="title">
           <span>栄養素</span>
       </div>
       
       <div class="content">
          <dl>
             <dt>カロリー</dt>
             <dd><input type="number" name="kcal" min="-0.9" max="9999.9" step="0.1"/>  g</dd>
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
       
       <div class="bottom-btn">
         <div class="a">
           <botton type="button">戻る</botton>
         </div>
         <div class="b">
          <botton type="button">
           <input  role="button" type="submit"  value="登録">
          </botton>
         </div>
       </div>
       <input type="hidden" name="meal_date" value="{{ $selectedDate }}">
       <input type="hidden" name="meal_time" value="1">
       {{ csrf_field() }}
      </form>
   </div>
@endsection