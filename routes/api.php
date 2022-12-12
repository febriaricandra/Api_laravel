<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::resource('articles', function(){
//     return Article::all();
// });
// Route::resource('articles/{id}', function($id){
//     return Article::find($id);
// });
// Route::resource('articles', function(Request $request){
//     return Article::create($request->all);
// });
// Route::resource('articles/{id}', function(Request $request, $id){
//     $article = Article::findOrFail($id);
//     $article->update($request->al());

//     return $article;
// });
// Route::resource('articles/{id}', function($id){
//     Article::find($id)->delete;
//     return 204;
// });

// Route::get('articles', [ArticleController::class, 'index']);
// Route::get('articles/{id}', [ArticleController::class, 'show']);
// Route::post('articles', [ArticleController::class, 'store']);
// Route::put('articles/{id}', [ArticleController::class, 'update']);
// Route::delete('articles/{id}', [ArticleController::class, 'delete']);

Route::apiResource('articles', ArticleController::class);