<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrinksController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function show($id){
        return view('details' , ['id'=> $id]);
    }  
}