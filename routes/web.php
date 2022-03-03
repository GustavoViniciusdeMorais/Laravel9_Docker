<?php

use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Blade;
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
    throw new Exception('adasdf'); // composer update, spatie/laravel-ignition
    return view('welcome');
});

Route::get('/bladestring', function(){
    // $data = ['person' => 'Gustavo'];
    // return Blade::render('Greetings {{$person}}!!', $data);
    $data = ['ninjas' => [
        [
            'name' => 'Naruto',
            'rank' => 'Genin'
        ],
        [
            'name' => 'Shikamaru',
            'rank' => 'Chunin'
        ]
    ]
    ];
    // return Blade::render('@foreach($ninjas as $ninja) {{$ninja["name"]}}<br> @endforeach', $data);
    $text = <<<'GUSTAVO'
        @foreach($ninjas as $ninja) 
            Name: {{$ninja["name"]}}<br>
            Rank: {{$ninja["rank"]}}
            <br><br>
        @endforeach
    GUSTAVO;
    return Blade::render($text, $data);
});

# Scoped Binding is a way to filter the access of a given user to some resource
Route::get('users/{user}/comments/{comment}', function(User $user, Comment $comment){
    return $comment;
})->scopeBindings();
