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
    $data = [
        'mangaList' => [
            [
                'title' => 'One Piece',
                'author' => 'Eiichiro Oda'
            ],
            [
                'title' => 'Naruto',
                'author' => 'Masashi Kishimoto'
            ],
            [
                'title' => 'Attack on Titan',
                'author' => 'Hajime Isayama'
            ],
            [
                'title' => 'Dragon Ball',
                'author' => 'Akira Toriyama'
            ],
            [
                'title' => 'Chainsaw Man',
                'author' => 'Tatsuki Fujimoto'
            ],
            [
                'title' => 'The Seven Deadly Sins',
                'author' => 'Nakaba Suzuki'
            ],
        ]
    ];

    return view('home', $data);
})->name('homepage');
