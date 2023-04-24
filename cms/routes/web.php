<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {

//     return view('welcome');

// });

// Route::get('/about', function () {
//     return "Hi about page";
// });

// Route::get('/contact', function () {
//     return "Contact!";
// });

// Route::get('/post/{id}', function ($id) {
//     return "This is post number ".$id;
// });

// Route::get('/post/{id}/{name}', function ($id, $name) {
//     return "This is post number ".$id." by ".$name;
// });

// Route::get('/admin/posts/example', array("as" => "admin.home", function () {
//     $url = route('admin.home');
//     return "this url is ".$url;
// }));

// use App\Http\Controllers\PostsController;

// Route::get('/post/{id}', [PostsController::class, 'index']);

// Route::resource('posts', PostsController::class);

// Route::get('/contact', 'App\Http\Controllers\PostsController@contact');

// Route::get('post/{id}/{name}/{password}', 'App\Http\Controllers\PostsController@show_post');

/*
|--------------------------------------------------------------------------
| DATABASE Raw SQL Queries
|--------------------------------------------------------------------------
*/

// use Illuminate\Support\Facades\DB;

// Route::get('/insert', function(){

//     DB::insert('insert into posts(title, content) values(?, ?)', ['PHP with Laravel', 'Laravel is the best thing that has happened to PHP']);

// });

// use Illuminate\Support\Facades\DB;

// Route::get('/read', function() {

//     $results = DB::select('select * from posts where id = ?', [1]);

//     return $results;

//     // foreach($results as $post) {
//     //     return $post->title;
//     // }
// });


use Illuminate\Support\Facades\DB;

Route::get('/update', function() {

    $updated = DB::update('update posts set title = "Updated title" where id = ?', [1]);

    return $updated;

});
