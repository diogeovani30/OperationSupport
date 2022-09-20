<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "M. Dio Geovani",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad amet optio saepe excepturi, sunt praesentium nemo recusandae expedita totam ab temporibus odio. Quos exercitationem consequuntur vero optio dicta minima, dolorem, neque possimus ipsa, repellendus explicabo facilis inventore maiores nostrum ducimus. Ut eius assumenda deserunt doloremque harum at aperiam facere aut. Nam eligendi eveniet vel quos nostrum consequuntur eum pariatur ratione esse molestiae maxime atque, enim reprehenderit? Illum dolore aperiam voluptas quam aut unde, eius praesentium inventore cupiditate sed architecto eaque!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Restu Pratama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad amet optio saepe excepturi, sunt praesentium nemo recusandae expedita totam ab temporibus odio. Quos exercitationem consequuntur vero optio dicta minima, dolorem, neque possimus ipsa, repellendus explicabo facilis inventore maiores nostrum ducimus. Ut eius assumenda deserunt doloremque harum at aperiam facere aut. Nam eligendi eveniet vel quos nostrum consequuntur eum pariatur ratione esse molestiae maxime atque, enim reprehenderit? Illum dolore aperiam voluptas quam aut unde, eius praesentium inventore cupiditate sed architecto eaque!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
