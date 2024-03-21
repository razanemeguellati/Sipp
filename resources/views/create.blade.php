@extends('layouts.layout')
@section('content')

<div class="wrapper create-pizza">
  <h1>Create a New Drink</h1>
  <form action="/drinks" method="POST">
    @csrf
    <label for="name">Your name:</label>
    <input type="text" name="name" id="name" required>

    <label for="type">Choose a type:</label>
    <select name="type" id="type">
      <option value="margarita">Tropical</option>
      <option value="hawaiian">Dziri</option>
      <option value="veg supreme">Kabyle</option>
    </select>
    
    <label for="base">Choose a base:</label>
    <select name="base" id="base">
      <option value="thin & crispy">milk</option>
      <option value="cheese crust">coffee</option>
      <option value="garlic crust">olive oil</option>
    </select>
    <input type="submit" value="Order Pizza">
  </form>
</div>
@endsection