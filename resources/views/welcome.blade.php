@extends('layouts.layout')
@section('content')

<div class="flex-center position-ref full-height">      
        <div class="content">
        <img src="/img/background.png" alt="">
            <div class="title m-b-md">
                Esi's Best Drinks
            </div>
            <a href="/drinks/create"> Order a drink </a>
           <p> {{session('msg')}}</p> 
        </div>
 
</div>

@endsection