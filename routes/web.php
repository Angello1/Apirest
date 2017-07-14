<?php

use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

//$app->get('/books','Books\BookController@getIndex');


$app->get('/', function () use ($app) {
    return $app->version();
});
//$app->get('/books', function () use ($app) {
    //return DB::table('books')->get();
    //return Book::all();
//});

$app->group(['middleware' => 'auth'],function () use ($app){
    $app->get('/books','Books\BookController@getIndex');
    $app->get('api/books','Books\BookController@getIndex');
    $app->get('/books/{id}','Books\BookController@getShow');
    $app->post('/books','Books\BookController@postStore');
});



