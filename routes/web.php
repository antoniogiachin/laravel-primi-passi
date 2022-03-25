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

//route per documentazione
Route::get('/doc', function () {
    
    $data = [

        "title" => 'Non vendiamo sogni, ma ci andiamo vicino!',

        "list" => [

            "Getting Started On macOS" => "If you're developing on a Mac and Docker Desktop is already installed, you can use a simple terminal command to create a new Laravel project. For example, to create a new Laravel application in a directory named example-app, you may run the following command in your terminal",
            
            "Getting Started On Windows" => "Before we create a new Laravel application on your Windows machine, make sure to install Docker Desktop. Next, you should ensure that Windows Subsystem for Linux 2 (WSL2) is installed and enabled. WSL allows you to run Linux binary executables natively on Windows 10. Information on how to install and enable WSL2 can be found within Microsoft's developer environment documentation.",
        ],

        "buttons" => [

            "/" => 'Home',
            "/faq" => 'Faq',
            "/us" => 'Chi Siamo',

        ],
    ];
    return view('doc', $data);
});

// route per faq
Route::get('/faq', function () {
    
    $data = [

        "title" => 'Non esistono domande inutili!',

        "list" => [

            "Why Laravel?" => "There are a variety of tools and frameworks available to you when building a web application. However, we believe Laravel is the best choice for building modern, full-stack web applications.",
            
            "Why Symfony?" => "Error... 404 aaaa",

            "Come posso usare Google One se non ho un abbonamento?" => "Hai sbagliato pagina!"
        ],

        "buttons" => [

            "/" => 'Home',
            "/doc" => 'Documentazione',
            "/us" => 'Chi Siamo',

        ],
    ];
    return view('faq', $data);
});