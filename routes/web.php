<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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


Route::get('/',[PagesController::class,'home']);
Route::get('/about',[PagesController::class,'about']);
Route::get('/posts',[PagesController::class,'posts']);
Route::get('/contact',[PagesController::class,'contact']);

Route::get('about/{{$id}}','PagesControllers@about');