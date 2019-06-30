<?php
use App\News;
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

// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         // 使用 first 和 second 中間件
//     });

//     Route::get('user/profile', function () {
//         // 使用 first 和 second 中間件
//     });
// });

// Route::get('/news','NewsController@index');

Route::resource('news','Newscontroller');
// Route::get('user/{id}', 'ShowProfile');
Route::get('/news/{id}','NewsController@show_id');


Route::get('/', function () {
    return view('demo');
});

Route::get('/insert', function() {
    // return 'insert';
    DB::insert(
        'insert into news(title,description) values(?, ?)',
        ['最新消息','這是一則勁爆的消息']
    );
});

// Route::get('/read', function() {
//     $result = DB::select('select * from news where id = ?', [1]);
//     foreach($result as $new)
//         return 'title: ' . 
//                 $new->title . 
//                 ' ,description:' . 
//                 $new->description ;
// });

Route::get('/delete', function(){
    $deleted = DB::delete('delete from news where id = ?', [1]);
    return $deleted;
});

Route::get('/read',function(){
    $posts = News::all();
    
    foreach($posts as $post){
        return $post->title . '    ' . $post->description;
    };
});

Route::get('/find', function(){
    $post = News::find(2);
    return 'find: '.$post;
});

Route::get('/findwhere', function(){
    $post = News::where('id','>',0)->orderBy('title','desc')->get();
    return $post;
});

Route::get('/inserdata', function(){
    $post = new News;
    $post -> title = 'goodjob';
    $post -> description = '這是一則描述';
    $post -> save();
});