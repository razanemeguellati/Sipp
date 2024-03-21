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
      
       // error_log(request('name'));
        $drink = new Drink() ; 
        $drink->name= request('name');
        $drink->type= request('type');
        $drink->base= request('base');
        $drink->price= 11; 
        $drink->promo= 11;
        $drink->toppings= request('toppings');
        error_log($drink);
        //saving the drink in the database
        $drink->save();

        //because redirect is not like the view that has 2 arguments. 
        // we use the with method to send data     
        return redirect('/')->with('msg','thanks for your order');
    } 

    
    public function destroy($id){
      $drink = Drink::findOrFail($id);
      $drink->delete();
      return redirect('/drinks');
    } 

}
