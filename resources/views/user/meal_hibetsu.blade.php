@extends('layouts.user')

@section('title', 'Body Makeup Balance')

@section('content')
   <div class="container">
       
       <head>
         
         <link rel="stylesheet" href="{{ secure_asset('css/meal_hibetsu.css') }}">
         
      </head>
      
      <form action="{{ action('User\MealController@create') }}" method="post" enctype="multipart/form-data">
       
       <div class="row1">
           <div class="col-md-8 mx-auto">
               <h2>日別食事一覧画面</h2>
           </div>
           <div class="da">
               <p>
                 <?php
                    $meal_date = DateTime::createFromFormat('Y-m-d', $meal_date);
                    echo $meal_date->format('n月j日');
                  ?>
               </p>
           </div>
       </div>
       
       <div class="item">
        <table>
          <thead>
             <tr>
                <th width="5%">ID</th>
                <th width="21.5%">カロリー</th>
                <th width="21.5%">脂質</th>
                <th width="21.5%">糖質</th>
                <th width="21.5%">炭水化物</th>
                <th width="21.5%">タンパク質</th>
                <th width="21.5%"></th>
                <th width="21.5%"></th>
             </tr>
          </thead>
          <tbody>
             @foreach($posts as $meal)
                 <tr>
                    <th>{{ $meal->id }}</th>
                    <td>{{ \Str::limit($meal->kcal,5) }}</td>
                    <td>{{ \Str::limit($meal->sisitu,5) }}</td>
                    <td>{{ \Str::limit($meal->tousitu,5) }}</td>
                    <td>{{ \Str::limit($meal->tansuikabutu,5) }}</td>
                    <td>{{ \Str::limit($meal->tanpakusitu,5) }}</td>
                    <td>
                        <a href="{{ action('User\MealController@delete', ['id => $meal_date->id']) }}">削除</a>
                    </td>
                    <td>編集</td>
                 </tr>
                 
             @endforeach
          </tbody>
        </table> 
        
        
      </div>
      
      <a href="add?selectedDate={{ $meal_date }}">食事追加</a>
   </div>
@endsection