<?php

use App\Http\Controllers\controllernwind;
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
    return view('welcome');
});

Route::get('/page1', [controllernwind::class, 'viewall']); //page 1

Route::get('/page2/{CategoryID}', [controllernwind::class, 'viewproducts']); //page 2

Route::get('/page3/{ProductID}', [controllernwind::class, 'viewdetailproducts']); //page 3

Route::post('/page4', [controllernwind::class, 'sessioncart'])->name('komang'); //page 4 input session

Route::get('/page5', [controllernwind::class, 'viewcart'])->name('usercart'); //page 5 read session
