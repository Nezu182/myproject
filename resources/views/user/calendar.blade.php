@extends('layouts.user')

@section('title', 'Body Makeup Balance')

@section('content')
   <?php
    require 'vendor/autoload.php';
    use Carbon\Carbon;
    
    $dt = Carbon::createFromDate();
    renderCalendar($dt);
    
    function renderCalendar($dt)
    {
        $dt->timezone = 'Asia/Tokyo';
        echo $dt;
    }
    
    ?>
@endsection