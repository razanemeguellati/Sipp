@extends('layouts.layout')
@section('content')

<div class="flex-center position-ref full-height">      
        <div class="content">
           <img src="/img/background.png" alt="">
            <div class="title m-b-md">
                Esi's Best Drinks
            </div>

            @foreach($drinks as $drink)
            <p> {{ $drink['name'] }}</p>
            @endforeach

        </div>
 
</div>

@endsection