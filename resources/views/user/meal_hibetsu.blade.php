@extends('layouts.user')

@section('title', 'Meal Balance')

@section('content')
   <div class="container">
       
       <head>
         
         <link rel="stylesheet" href="{{ secure_asset('css/meal_hibetsu.css') }}">
         
      </head>
       
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
                    <td>{{ \Str::limit($meal->kcal,5) }} kcal</td>
                    <td>{{ \Str::limit($meal->sisitu,5) }} g</td>
                    <td>{{ \Str::limit($meal->tousitu,5) }} g</td>
                    <td>{{ \Str::limit($meal->tansuikabutu,5) }} g</td>
                    <td>{{ \Str::limit($meal->tanpakusitu,5) }} g</td>
                    <td>
                        <a href="{{ action('User\MealController@delete', ['id' => $meal->id]) }}">
                          <button onclick="return confirm('削除しますか?')">削除</button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ action('User\MealController@edit', ['id' => $meal->id, 'meal_date' => $meal_date]) }}">編集</a>
                    </td>
                 </tr>
                 
             @endforeach
             
        
          
            
               <tr style="color:red">
                 <td>{{ $total_kcal }} kcal</td>
                 <td>{{ $total_sisitu }} g</td>
                 <td>{{ $total_tousitu }} g</td>
                 <td>{{ $total_tansuikabutu }} g</td>
                 <td>{{ $total_tanpakusitu }} g</td>
               </tr>
          </tbody>
        </table>
        
      </div>
      
      <a href="add?selectedDate={{ $meal_date }}">食事追加</a>
   </div>
@endsection