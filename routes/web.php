<?php

use App\Http\Controller\HomeController;
use App\Http\Controller\PageController as ControllerPageController;
use App\Http\Controller\WelcomeController as ControllerWelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use PageController as GlobalPageController;

/*Basic routing*/
Route::get('/hello', function () {
    return 'Hello World';
    });
    
    Route::get('/world', function () {
        return 'WORLD';
        });
    
        Route::get('/selamat', function() {
             return 'Selamat Datang Sesha cantik';
            });

            Route::get('/tentang', function() {
                return 'Nama : Sesha Azzara Suriadi <br />NIM :2341728013';
                 });
                
                 Route::get('/user/{name?}', function ($name='Sesha') {
                    return 'Nama saya '.$name;
                    });

/*optional paramenters*/

Route::get('/user/{name?}', function ($name='Sesha') {
    return 'Halo Nama saya '.$name;
    });


    Route::get('/user/profile', function() {
        //
       })->name('Sesha Azzara');

       Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) {
return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

       
       Route::middleware(['first', 'second'])->group(function () {
        Route::get('/', function () {
        // Uses first & second middleware...
    });
    Route::get('/user/profile', function () {
     // Uses first & second middleware...
     });
    });
    
    Route::domain('{account}.example.com')->group(function () {
     Route::get('user/{id}', function ($account, $id) {
     //
     });
    });

    /*route group dan route prefixes*/

    route::middleware(['first', 'second'])->group(function () {
        Route::get('/',function (){
        // Uses first & second middleware
        });
        Route::get('/user/profile', function () {
        // Uses first & second middleware...
        });
        });
        Route::domain('{account}.example.com')->group(function () {
        Route::get('user/{id', function ($account, $id) {
        //
        });
        });
    
   /*Redirect Routes*/
    Route::redirect('/here', '/there');

    Route::get('/greeting', function () {
        return view('hello', ['name' => 'Sesha Azzara Suriadi']);
        });
        
    /* View Routes*/
Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);



Route::get('/hello', [ ControllerWelcomeController::class , 'hello']);

Route::prefix('page')->group(function () {
    Route::get('/', [ControllerPageController::class,'index']);
    Route::get('/about', [ControllerPageController::class, 'about']);
    Route::get('/articles/{id}', [ControllerPageController::class, 'articles'],);
    });

    Route::get('/greeting', function () {
        return view('hello', ['name' => 'SESHA AZZARA SURIADI']);
        });

    //Single action modify
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/articles/{id}', [HomeController::class, 'articles']);

use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);

Route::get('/greeting', [ControllerWelcomeController::class, 
'greeting']);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
