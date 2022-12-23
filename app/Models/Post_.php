<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        [
            "title" => "Post 1",
            "slug" => "post-1",
            "author" => "Firdaus",
            "isi" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, reprehenderit rem. Expedita ipsum numquam tempora, recusandae accusantium ipsam consectetur et exercitationem corrupti officia cumque obcaecati, ad tenetur deleniti aspernatur enim."
        ],
        [
            "title" => "Post 2",
            "slug" => "post-2",
            "author" => "Atif",
            "isi" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, reprehenderit rem. Expedita ipsum numquam tempora, recusandae accusantium ipsam consectetur et exercitationem corrupti officia cumque obcaecati, ad tenetur deleniti aspernatur enim."
        ],
    ];


    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        
        return $posts -> firstWhere('slug', $slug);

    }
}
