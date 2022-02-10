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

Route::get('/', function () {
    $data = [
        'name' => 'Giovanni',
        'lastname' => 'Scollo',
        
    ];
    return view('home', $data);
})->name('home');




Route::get('/contatti', function () {
    $data = [
        'contacts' => [
                    
            'email' => 'giovçgmail.com',
            'tel' => '93463452'
                    
        ]
    ];
    return view('contatti', $data);
})->name('contatti');




Route::get('/descrizione', function () {
    $data = [
        'descrizione' => 'lorem ipsum'
                    
        
    ];
    return view('descrizione', $data);
})->name('descrizione');
