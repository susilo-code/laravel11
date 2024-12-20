<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home',['title'=>'Home Page']);
});

Route::get('about/', function () {
    return view('about',['nama'=>'Susilo','title'=>'About']);
});

Route::get('posts/', function () {
    return view('posts',['title'=>'Blog','posts'=>Post::all()]);
})->name('posts');

Route::get('posts/{slug}',function($slug){
    $pos = Post::find($slug);
    return view('post',['title'=>'Single Post','post'=>$pos]);
});

Route::get('contact/', function () {
    return view('contact',['title'=>'Contact']);
});
