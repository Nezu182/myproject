@extends('layouts.user')

@section('title', 'Body Makeup Balance')

@section('content')
   <div class="container">
       <div class="row">
          
           <div class="col-md-8 mx-auto">
               <h2>一覧画面</h2>
           </div>
       </div>
       
       <div class="row">
          <thead>
             <tr>
                <th width="10%">ID</th>
                <th width="20%">カロリー</th>
                <th width="20%">脂質</th>
                <th width="20%">糖質</th>
                <th width="20%">炭水化物</th>
                <th width="20%">タンパク質</th>
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
                 </tr>
             @endforeach
          </tbody>
      </div>
   </div>
@endsection