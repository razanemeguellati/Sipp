<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;

class DrinksController extends Controller
{
    public function index(){
        $drinks = Drink::all();
        return view('drinks' , ['drinks'=> $drinks]);
    }
    public function show($id){
        return view('details' , ['id'=> $id]);
    }  
}
