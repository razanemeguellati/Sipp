<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;

class DrinksController extends Controller
{
    public function index(){
        $drinks = Drink::all();

        //argument is the column name but unlike all() we have to add the get method to have the data 
        //$drinks= Drink::orderby('id','desc')->get();

        //1st arg is the column an 2nd is its value 
        //$drinks = Drink::where('type','kabyle')->get();

        return view('indexDrinks' , ['drinks'=> $drinks]);
    }

    public function show($id){
        $drink = Drink::findOrFail($id);
        // findorfail for the 404 error page, find is default one 
        //$drink = Drink::find($id);
        return view('details' , ['drink'=> $drink]);
    }  

    public function create(){
        return view('create');
    } 

    public function store(){
      
        error_log(request('name'));
        return redirect('/');
    } 

}
