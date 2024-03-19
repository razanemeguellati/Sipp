@extends('layouts.layout')
@section('content')

<div class="flex-center position-ref full-height">      
        <div class="content">
           <img src="/img/background.png" alt="">
            <div class="title m-b-md">
                Esi's Best Drinks
               
            </div>
            <!-- drink can be seen as an array or an object -->
            @foreach($drinks as $drink)          
            <p> {{ $drink['name'] }} - {{$drink->type }} -  {{$drink->base}}</p>
            @endforeach

        </div>
 
</div>

@endsection