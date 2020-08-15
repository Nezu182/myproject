@extends('layouts.user')

@section('title', 'Body Makeup Balance')

@section('content')
   <div class="container">
       <head>
         
         <link rel="stylesheet" href="{{ secure_asset('css/add.css') }}">
         
      </head>
      
      <body>
         
       <div class="day">
         <h2>食事追加画面</h2>
      </div>
       <div class="title">
           <span>栄養素</span>
       </div>
       
       <div class="content">
          <dl>
             <dt>カロリー</dt>
             <dd><input type="number" name="num01" min="-0.9" max="9999.9" step="0.1"/>  g</dd>
          </dl>
       </div>
       <div class="content">
          <dl>
             <dt>脂質</dt>
             <dd><input type="number" name="num01" min="-0.9" max="999.9" step="0.1"/>  g</dd>
          </dl>
       </div>  
       <div class="content">
          <dl>
             <dt>糖質</dt>
             <dd><input type="number" name="num01" min="-0.9" max="999.9" step="0.1"/>  g</dd>
          </dl>
       </div>
       <div class="content">
          <dl>
             <dt>炭水化物</dt>
             <dd><input type="number" name="num01" min="-0.9" max="999.9" step="0.1"/>  g</dd>
          </dl>
       </div>
       <div class="content">
          <dl>
             <dt>タンパク質</dt>
             <dd><input type="number" name="num01" min="-0.9" max="999.9" step="0.1"/>  g</dd>
          </dl>
       </div>
       
       <div class="bottom-btn">
         <div class="a">
           <botton type="button">戻る</botton>
         </div>
         <div class="b">
           <botton type="button">登録</botton>
         </div>
       </div>
       
      </body>
   </div>
@endsection