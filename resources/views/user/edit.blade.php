@extends('layouts.user')

@section('title', 'Body Makeup Balance')

@section('content')
   <div class="container">
       <head>
         
         <link rel="stylesheet" href="{{ secure_asset('css/edit.css') }}">
         
      </head>
      
      <body>
         
       <div class="header">
         <div class="day"> 日付</div>
         <div class="main-title">編集画面</div>
      </div>
       <div class="title">
           <span>栄養素</span>
       </div>
       
       <div class="content">
          <dl>
             <dt>カロリー</dt>
             <dd>　○○　g</dd>
          </dl>
       </div>
       <div class="content">
          <dl>
             <dt>脂質</dt>
             <dd>　○○　g</dd>
          </dl>
       </div>  
       <div class="content">
          <dl>
             <dt>糖質</dt>
             <dd>　○○　g</dd>
          </dl>
       </div>
       <div class="content">
          <dl>
             <dt>炭水化物</dt>
             <dd>　○○　g</dd>
          </dl>
       </div>
       <div class="content">
          <dl>
             <dt>タンパク質</dt>
             <dd>　○○　g</dd>
          </dl>
       </div>
       
       <div class="bottom-btn">
         <div class="a">
           <button type="button">戻る</button>
         </div>
         <div class="b">
           <button type="button">登録</button>
         </div>
       </div>
       
      </body>
   </div>
@endsection