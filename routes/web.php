<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comics_array=config('comics');
    $data=[
        'comics_array'=>$comics_array
    ];
    return view('home',$data);
})->name('home');

// single product
Route::get('/single-product/{id}', function ($id) {
    $comics_array=config('comics');
    $comic_show = false;

    foreach($comics_array as $comic){
        if( $comic['id'] == $id) {
            $comic_show = $comic;
        } 
    }

    $data = [
        'comics_info' => $comic_show, 
        
    ];
    return view('single-product', $data);
})->name('product');


