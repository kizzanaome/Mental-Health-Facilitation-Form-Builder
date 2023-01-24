<?php

use App\Http\Livewire\Posts;
use App\Models\Article;
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

Route::view('/', 'welcome')->name('home');
Route::get('posts', Posts::class);


Route::post('posts', Posts::class);

Route::get('/create', function () {
    return view('livewire.create');
});

Route::post('/create', function () {
    Article::create([
        'title' => request('title'),
        'body' => request('body')
    ]);
    return redirect('/create');
    // $article = new Article();
    // $article->title = request('title');
    // $article->body = request('body');
    // $article->save();
});
