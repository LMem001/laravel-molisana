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

    foreach ($data as $key => $pasta) {
        // save the id of the original pasta spot in $data 
        $pasta['id'] = $key;

        // divide the different type of elements in different arrays
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
    // check if id is in range
    if ($id >= count($data)) {
        abort(404);
    }

    $pasta = $data[$id];

    // store id of next element
    if($id < count($data) - 1) {
        $pasta['next'] = $id + 1;
    } else {
        $pasta['next'] = 0;
    }

    // store id of previous element
    if($id > 0) {
        $pasta['previous'] = $id - 1;
    } else {
        $pasta['previous'] = count($data) - 1;
    }
    
    return view('product', [
        'pasta' => $pasta
    ]);
})-> where('id', '[0-9]+')->name('product');