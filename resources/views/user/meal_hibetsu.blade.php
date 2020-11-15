@extends('layouts.user')

@section('title', 'Meal Balance')

@section('content')
   <div class="container">
       
       <body>
          
       <div class="row1">
           <div class="title">
               <h2>日別食事一覧画面</h2>
           </div>
           <div class="day">
               <p>
                 <?php
                    echo date('m/j', strtotime($meal_date));
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
                    <td>{{ \Str::limit($meal->kcal,6) }} kcal</td>
                    <td>{{ \Str::limit($meal->sisitu,5) }} g</td>
                    <td>{{ \Str::limit($meal->tousitu,5) }} g</td>
                    <td>{{ \Str::limit($meal->tansuikabutu,5) }} g</td>
                    <td>{{ \Str::limit($meal->tanpakusitu,5) }} g</td>
                    <td>
                      <button class="btn-pink btn" onclick="return confirm('削除しますか?')" onclick="location.href='{{ action('User\MealController@delete', ['id' => $meal->id]) }}'">削除</button>
                    </td>
                    <td>
                      <button class="btn-pink btn" onclick="location.href='{{ action('User\MealController@edit', ['id' => $meal->id, 'meal_date' => $meal_date]) }}'">編集</button>
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
      <div class="btn-space">
         <div>
          <button class="btn-pink btn" type="button" onclick="location.href='/user/home'">戻る</button>
         </div>
         <div>
          <button class="btn-pink btn" type="button" onclick="location.href='/user/calendar'">カレンダー</button>
         </div>
         <div>
          <button class="btn-pink btn" onclick="location.href='add?selectedDate={{ $meal_date }}'">食事追加</button>
         </div>
      </div>
      </body>
   </div>
@endsection