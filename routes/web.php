<?php

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muhammad Lutfi",
        "email" => "muhammad@gmail.com",
        "image" => "lutfi.jpg",
    ]);
});

Route::get('/posts', function () {

    return view('posts', [
        "title" => "Posts",
        "posts" => [
            [
                "title" => "Judul Post Pertama",
                "slug" => "judul-post-pertama",
                "author" => "Muhammad Lutfi",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam animi, at nemo dolor provident debitis quidem fugiat eaque excepturi perferendis vero veritatis aliquam temporibus tempore. Tempora ea quia hic itaque?....",
            ],
            [
                "title" => "Judul Post Kedua",
                "slug" => "judul-post-kedua",
                "author" => "Sandhika Galih",
                "body" => "Quibusdam nulla sed distinctio placeat in aliquid quis natus pariatur at autem omnis ipsum dolorum sequi explicabo. Voluptatibus soluta voluptate porro velit! Similique incidunt reiciendis repellat, quod facilis quasi,....",
            ]
        ]
    ]);
});


// halaman single post
Route::get('posts/{slug}', function ($slug) {

    $posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Lutfi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam animi, at nemo dolor provident debitis quidem fugiat eaque excepturi perferendis vero veritatis aliquam temporibus tempore. Tempora ea quia hic itaque?
            Harum excepturi magnam exercitationem alias mollitia optio incidunt dolorem labore pariatur delectus voluptate esse nesciunt voluptates nisi quis ipsum error cum voluptas, deserunt sit ad consequatur? Laboriosam velit corrupti dolor.
            Natus saepe atque facere iure distinctio iste officia dolorum impedit quod iusto, obcaecati magnam dolores itaque illo architecto soluta aut nobis, ratione a. Quaerat nihil tenetur ullam, quae harum nemo.",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit id porro itaque nisi cupiditate libero, voluptatibus minima ea quibusdam nulla sed distinctio placeat in aliquid quis natus pariatur at autem omnis ipsum dolorum sequi explicabo. Voluptatibus soluta voluptate porro velit! Similique incidunt reiciendis repellat, quod facilis quasi, dolore exercitationem fugiat eaque iure aliquam, dolorem eos aperiam sint illum optio impedit tempora. Accusamus corrupti soluta veniam optio quae at consequuntur. Ex aliquam minus aspernatur autem voluptatibus? Nesciunt itaque nihil laborum tempore tenetur architecto provident maxime consequuntur? Nostrum minus, dolorum tenetur obcaecati, beatae veritatis, labore neque excepturi unde vitae eveniet sint nisi.",
        ],
    ];

    $new_posts = [];
    foreach ($posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post,
    ]);
});
