@extends('layouts.user')

@section('title', 'Body Makeup Balance')

@section('content')
   <div class="container">
      
      <head>
         
         <link rel="stylesheet" href="{{ secure_asset('css/parts.css') }}">
         
      </head>
      
      <body>
          
       <div class="day">
         <h2>今日</h2>
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
         <div class="a" type="button">
           過去の記録
         </div>
         <div class="b" type="button">
           編集
         </div>
       </div>
       
      </body>
   </div>
@endsection

