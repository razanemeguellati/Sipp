<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrinksController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


/* The original route */ 
Route::get('/', function () {
    return view('welcome');
});
 

/* either pass views only or pass arguments with the view  */
Route::get('/loops', function () {
    $array = [
        ['name'=>'norhane' , 'price' => 500],
        ['name'=>'alice' , 'price' => 200],
        ['name'=>'Afnane' , 'price' => 300],
    ];
    return view('loops' , ['array' => $array]);
});


/* we can use a human variable alone or a in an array */
Route::get('/variables', function () {
    $human = ['name'=>'norhane' , 'price' => 500] ; 
    $queryparam = request('qp') ; 
    /* /variables?qp=norhana&age=20 */ 
    return view('variables' , ['human'=> $human , 'queryparam' => $queryparam , 'age' => request('age')]);
});

/* we can return json by returning an array and laravel will convert into json file  */
Route::get('/json', function () {
    return ['name' => 'norhane ' , 'price' => '400$'];
});



/* The original route */ 
Route::get('/drinks',[DrinksController::class, 'index']);
Route::get('/drinks/create',[DrinksController::class, 'create']);
Route::get('/drinks/{id}',[DrinksController::class, 'show']);
