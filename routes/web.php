<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::get('/', [ArticleController::class, 'index']);
    Route::get('articles', [ArticleController::class, 'index1']);
    Route::get('articles', [ArticleController::class, 'index1']);
    Route::get('articles/create', [ArticleController::class, 'create']);
    Route::get('articles/create_all', [ArticleController::class, 'createAll']);
    Route::post('articles_all', [ArticleController::class, 'storeAll']);
    Route::post('articles', [ArticleController::class, 'store']);
    Route::get('articles/{article}', [ArticleController::class, 'show']);
    Route::get('articles/{article}/edit', [ArticleController::class, 'edit']);
    Route::put('articles/{article}', [ArticleController::class, 'update']);

    Route::get('admin', function (Request $request) {
        dd(app()->getLocale());
        return redirect('nova');
    });
});
