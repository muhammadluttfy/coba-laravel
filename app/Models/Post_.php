<!-- History belajar materi WPU Laravel 1 - 7 -->

<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Lutfi",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio atque labore repellat eaque cum ea ipsum possimus accusantium aut eveniet, recusandae qui perspiciatis vel. Minima, sequi quisquam. Ut debitis, nihil voluptatibus animi eos magni sit? Repudiandae optio ratione expedita fugit. Ratione, amet accusantium quis corrupti iste autem a dolores, ducimus repellat ex in animi! Atque molestias ea delectus, rem doloremque quis nulla commodi fuga sint, cupiditate itaque odio vel. Ullam quidem culpa quos eum voluptatum, soluta magni sapiente numquam eveniet, dolorum laboriosam animi similique? Similique ut dolor at reprehenderit voluptate, voluptatibus possimus. Minima repellat sit accusantium aspernatur reprehenderit officiis iusto?",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sandhika Galih",
            "body" => "Repudiandae optio ratione expedita fugit. Ratione, amet accusantium quis corrupti iste autem a dolores, ducimus repellat ex in animi! Atque molestias ea delectus, rem doloremque quis nulla commodi fuga sint, cupiditate itaque odio vel. Ullam quidem culpa quos eum voluptatum, soluta magni sapiente numquam eveniet, dolorum laboriosam animi similique? Similique ut dolor at reprehenderit voluptate",
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
