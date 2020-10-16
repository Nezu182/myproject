@extends('layouts.user')

@section('title', 'Meal Balance')

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
                    echo date('m月j日', strtotime($meal_date));
                  ?>
               </p>
           </div>
       </div>
       
       <div class="item">
        <table>
          <thead>
             <tr>
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
                    <!-- <td>{{ \Str::limit($meal->id) }}</td> -->
                    <td>{{ \Str::limit($meal->kcal,5) }}</td>
                    <td>{{ \Str::limit($meal->sisitu,5) }}</td>
                    <td>{{ \Str::limit($meal->tousitu,5) }}</td>
                    <td>{{ \Str::limit($meal->tansuikabutu,5) }}</td>
                    <td>{{ \Str::limit($meal->tanpakusitu,5) }}</td>
                    <td>
                        <a href="{{ action('User\MealController@delete', ['id' => $meal->id]) }}">削除</a>
                    </td>
                    <td>
                        <a href="{{ action('User\MealController@edit', ['id' => $meal->id]) }}">編集</a>
                    </td>
                 </tr>
                 
             @endforeach
          </tbody>
        </table> 
        
        
      </div>
      
      <a href="add?selectedDate={{ $meal_date }}">食事追加</a>
   </div>
@endsection