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
      <option value="Tropical">Tropical</option>
      <option value="Dziri">Dziri</option>
      <option value="Kabyle">Kabyle</option>
    </select>
    
    <label for="base">Choose a base:</label>
    <select name="base" id="base">
      <option value="milk">milk</option>
      <option value="coffee">coffee</option>
      <option value="olive oil">olive oil</option>
    </select>

    <fieldset>
      <label>Extra toppings:</label>
      <input type="checkbox" name="toppings[]" value="sirup">sirup<br />
      <input type="checkbox" name="toppings[]" value="strawberries">strawberries<br />
      <input type="checkbox" name="toppings[]" value="bananas">bananas<br />
    </fieldset>

    <input type="submit" value="Order Drink">
  </form>
</div>
@endsection