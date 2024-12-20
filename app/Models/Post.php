<?php

namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Post
{
    public static function all() {
        return [
            ['id'=> 1,
            'slug'=> 'judul-artikel-1',
            'title'=>'Judul Artikel 1',
            'author'=>'Susilo',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius labore rerum fugiat dolore velit,
         laborum inventore quam totam tempora rem dicta error voluptas dolorem. Laborum accusantium 
         velit expedita vel deleniti!'],
         ['id'=> 2,
         'slug'=> 'judul-artikel-2',
         'title'=>'Judul Artikel 2',
            'author'=>'Susilo',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae ducimus, officia suscipit praesentium veniam dicta? Deserunt tempore dolor quia magnam quo?
         Quam dolorum qui ex quisquam molestias aspernatur repudiandae labore.']
        ];
}

    public static function find($slug):array {
        // return Arr::first(static::all(),function($pot) use ($slug) {
        //     return $pot['slug'] == $slug;
        $cek = Arr::first(static::all(), fn ($pot)=>$pot['slug'] == $slug);
        if($cek){
            return $cek;
        }
         abort(404);
    }
}
