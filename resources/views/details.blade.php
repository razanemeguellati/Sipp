@extends('layouts.layout')
@section('content')

<div class="flex-center position-ref full-height">      
        <div class=" ">
         <div class="wrapper pizza-details">
         <!--returns a json object but we can access it as an array-->
            <h1> Order for: {{$drink['name']}} </h1>
            <p> drink type: {{$drink['type']}}</p>
            <p> drink price: {{$drink-> price }}$</p>
         </div>

         <p class="toppings">Extra toppings:</p>
                <ul>
                @foreach($drink->toppings as $topping)
                <li>{{ $topping }}</li>
                @endforeach
                </ul>

              <a href="/drinks"> < Back to all drinks </a>
        </div>
 
</div>

@endsection