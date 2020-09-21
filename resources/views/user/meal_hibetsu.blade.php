@extends('layouts.user')

@section('title', 'Body Makeup Balance')

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
                    <td>33</td>
                 </tr>
             @endforeach
          </tbody>
        </table> 
      </div>
   </div>
@endsection