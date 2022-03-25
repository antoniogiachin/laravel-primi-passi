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

// Route::get('/', function () {
//     return view('welcome');
// });

//visualizzo la mia homepage
// dinamicizzo il mio messaggio con aggiunta di DATA

Route::get('/', function () {
    $data = [

        "saluto" => 'Hello, World!',
        "nome" => 'Antonio',
        "cognome" => 'Giachin',
        "lista" => [

            'Home'=>'/',
            'Documentazione' => '/doc',
            'Faq' => '/faq', 
            'Chi Siamo' => '/us',
    
        ],
    
    ];
    return view('home', $data);
});
