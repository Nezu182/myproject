@extends('layouts.user')

@section('title', 'Body Makeup Balance')

@section('content')
   <div class="container">
       <head>
         
         <link rel="stylesheet" href="{{ secure_asset('css/add-edit.css') }}">
         
      </head>
       
      <form action="{{ action('User\MealController@update') }}" method="post" enctype="multipart/form-data">
         <div class="main-title">編集画面</div>
         
         
         <div class="day">
           <p>
             <?php
                echo date('m/d', strtotime($selectedDate));
             ?>
           </p>
         </div>
    
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
           <input class="ef" type="number" name="kcal" min="-0.9" max="9999.9" step="0.1"/ placeholder="">
	         <label>カロリー</label><a>kcal</a>
	           <span class="focus_line"></span>
         </div>
         <div class="content">
           <input class="ef" type="number" name="sisitu" min="-0.9" max="9999.9" step="0.1"/ placeholder="">
	         <label>脂質</label><a>g</a>
	           <span class="focus_line"></span>
         </div>  
         <div class="content">
           <input class="ef" type="number" name="tousitu" min="-0.9" max="9999.9" step="0.1"/ placeholder="">
	         <label>糖質</label><a>g</a>
	           <span class="focus_line"></span>
         </div>
         <div class="content">
           <input class="ef" type="number" name="tansuikabutu" min="-0.9" max="9999.9" step="0.1"/ placeholder="">
	         <label>炭水化物</label><a>g</a>
	           <span class="focus_line"></span>
         </div>
         <div class="content">
           <input class="ef" type="number" name="tanpakusitu" min="-0.9" max="9999.9" step="0.1"/ placeholder="">
	         <label>タンパク質</label><a>g</a>
	           <span class="focus_line"></span>
         </div>
       </div>
       <div class="btn-space">
         <div>
          <button class="btn-pink btn" type="button" onclick="location.href='/user/meal_hibetsu'">戻る</button>
         </div>
         <div>
          {{ csrf_field() }}
          <button class="btn-pink btn" type="submit">
          	{{ __('更新') }}
          </button>
         </div>
      </div>
       <input type="hidden" name="meal_date" value="{{ $selectedDate }}">
       <input type="hidden" name="id" value="{{ $meal->id }}">
       
       </form>
   </div>
@endsection