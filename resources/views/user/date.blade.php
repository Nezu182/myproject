@extends('layouts.user')

@section('title', 'Body Makeup Balance')

@section('content')
   <div class="container">
       <head>
         
         <link rel="stylesheet" href="{{ secure_asset('css/date.css') }}">
         
      </head>
      
      <body>
         
       <div class="day">
         <h2>日付</h2>
      </div>
       <div class="title">
           <span>栄養素</span>
       </div>
       
       <table class="teble teble-bark">
         <thead>
           <tr>
             <th width="20%">カロリー</th>
             <th width="20%">脂質</th>
             <th width="20%">糖質</th>
             <th width="20%">炭水貨物</th>
             <th width="20%">タンパク質</th>
           </tr>
         </thead>
       </table>
       
       <div class="bottom-btn">
         <div class="a">
           <botton type="button">編集</botton>
         </div>
         <div class="b">
           <botton type="button">戻る</botton>
         </div>
       </div>
       
      </body>
   </div>
@endsection