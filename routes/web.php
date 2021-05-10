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
    $data = config('paste');

    $lunga = [];
    $corta = [];
    $cortissima = [];

    foreach ($data as $pasta) {
        if($pasta['tipo'] == "lunga") {
            $lunga[] = $pasta;  
        } elseif($pasta['tipo'] == "corta") {
            $corta[] = $pasta;
        } elseif($pasta['tipo'] == "cortissima") {
            $cortissima[] = $pasta;
        }
    }

    return view('home', [
        "lunghe" => $lunga,
        "corte" => $corta,
        "cortissime" => $cortissima
    ]);
})->name('homepage');

Route::get('/product/{id}', function($id) {
    $data = config('paste');
    $pasta = $data[$id];
    
    return view('product', [
        'pasta' => $pasta
    ]);
})-> where('id', '[0-9]+')->name('product');