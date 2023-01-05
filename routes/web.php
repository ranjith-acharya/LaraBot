<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleGenerator;

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
    $title = '';
    $content = '';
    return view('writer', compact('title', 'content'));
});

Route::post('/generate', [ArticleGenerator::class, 'index']);