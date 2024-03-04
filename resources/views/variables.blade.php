@extends('layouts.layout')

@section('content')
<div class="flex-center full-height">
        <h1 class="title"> Variables </h1>
        <!-- we could have used $name only if we had jut one variable passed -->
        
        <p> selling:  {{$human['name']}} - {{$human['price']}}$ </p>
        @if($human['price'] > 200)
            <p> baby can i hold you</p>
        @endif

        <p> Our little query param:  {{$queryparam}} - {{ $age }}</p>

</div>