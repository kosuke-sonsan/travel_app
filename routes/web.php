<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PrefectureController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index_login']);

Route::get('/register', [RegisterController::class, 'index_register']);
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/logout', [LoginController::class, 'logout']);

Route::group(['middleware' => 'auth'], function(){

    Route::get('/prefecture', [PrefectureController::class, 'index_prefecture']);

    Route::get('/prefecture/article', [ArticleController::class, 'index_article']);

    Route::get('/article/list', [ArticleController::class, 'index_list']);
    
    Route::get('/article/edit', [ArticleController::class, 'index_edit']);

    Route::get('/article/comment', [CommentController::class, 'index_comment']);

    Route::get('/calendar', [CalendarController::class, 'index_calendar']);
});

//* Adminログイン機能用 *//

Route::prefix('admin')->name('admin.')->group(function(){
    
    Route::get('/dashboard', function(){
        return view('admin.dashboard');
    })->middleware(['auth:admin'])->name('dashboard');
    
    require __DIR__.'/admin.php';
});

