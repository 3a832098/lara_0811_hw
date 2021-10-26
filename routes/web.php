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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;

    Route::get('/', function () {
        return view('home.blade.php');
    });

    Route::get('/about',function(){
        return view('about.blade.php');
    });

    Route::get('/news',function(){
        return view('news.blade.php');
    });

    Route::get('/about',[AboutController::class,'index'])-> name('home.index');
?>

