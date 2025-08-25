<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas',function(){
    $ninjas = [
        ["name" => "mario", "skill" => 75, "id" => "1"],
        ["name" => "mark", "skill" => 68, "id" => "2"],
        ["name" => "joan", "skill" => 75, "id" => "3"],
    ];

    return view('ninjas.index',["greeting" => "Hello po"], ["ninjas" => $ninjas]);
});

Route::get('/ninjas/create',function(){
    return view ('ninjas.create');
});

Route::get('/ninjas/{id}',function($id){
    return view('ninjas.show',["id" => $id]);
});



