<?php

use App\Http\Controllers\PostsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(PostsController::class)->group(function(){
    Route::post('/posts', 'store');
    Route::get('/posts', 'index');
});

Route::group(['prefix' => 'examples'], function(){
    
    Route::get('slug', function(){
        return str('gustavo vinicius')->slug();
    });
    
    Route::get('substr', function(){
        return str('gustavo vinicius')->substr(8,5);
    })->name('testname');
    
    Route::get('redirect', function(){
        // return redirect('/api/examples/substr');
        // return redirect()->route('testname');
        return to_route('testname');
    });
});

