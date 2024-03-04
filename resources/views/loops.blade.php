@extends('layouts.layout')

@section('content')
<div class="flex-center full-height">
        <h1 class="title m-b-md "> Loops </h1>
       
        @for( $i = 0 ; $i < count($array) ; $i++)
        <p>{{$i}} - {{$array[$i]['name']}}</p>
        @endfor

        @foreach($array as $element)
        <p> {{ $element['name'] }}</p>
        @endforeach

        <!-- $loop is a pre defined variable for all loops  -->
        @foreach($array as $element)
        <p> {{ $loop->index}} - {{ $element['name'] }}</p>
        @endforeach
</div>
     

