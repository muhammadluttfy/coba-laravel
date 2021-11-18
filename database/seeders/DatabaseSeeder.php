<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Muhammad Lutfi',
        //     'email' => 'muhammadlutfi3101@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Ahla Ainin Nafisah',
        //     'email' => 'ahlaainin@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni harum asperiores architecto deleniti maiores cum voluptates officia numquam',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni harum asperiores architecto deleniti maiores cum voluptates officia numquam dolores voluptatibus eius, eum delectus doloribus eligendi, accusamus, aspernatur est cupiditate veritatis molestias? Eligendi accusantium fugit officiis illo! Officia ab nihil voluptates quod recusandae eos odit ipsum ex, eius error exercitationem! Nesciunt harum at numquam veniam officia qui quis pariatur praesentium quaerat nulla cupiditate sequi eveniet provident vitae commodi obcaecati, velit enim delectus sed vel reprehenderit expedita itaque omnis! Rerum maxime magnam fugit sint cum. Magni amet maiores velit voluptate. Debitis rem ut maxime ratione perferendis est odit possimus laboriosam nesciunt quas?',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni harum asperiores architecto deleniti maiores cum voluptates officia numquam',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni harum asperiores architecto deleniti maiores cum voluptates officia numquam dolores voluptatibus eius, eum delectus doloribus eligendi, accusamus, aspernatur est cupiditate veritatis molestias? Eligendi accusantium fugit officiis illo! Officia ab nihil voluptates quod recusandae eos odit ipsum ex, eius error exercitationem! Nesciunt harum at numquam veniam officia qui quis pariatur praesentium quaerat nulla cupiditate sequi eveniet provident vitae commodi obcaecati, velit enim delectus sed vel reprehenderit expedita itaque omnis! Rerum maxime magnam fugit sint cum. Magni amet maiores velit voluptate. Debitis rem ut maxime ratione perferendis est odit possimus laboriosam nesciunt quas?',
        //     'category_id' => 1,
        //     'user_id' => 2,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni harum asperiores architecto deleniti maiores cum voluptates officia numquam',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni harum asperiores architecto deleniti maiores cum voluptates officia numquam dolores voluptatibus eius, eum delectus doloribus eligendi, accusamus, aspernatur est cupiditate veritatis molestias? Eligendi accusantium fugit officiis illo! Officia ab nihil voluptates quod recusandae eos odit ipsum ex, eius error exercitationem! Nesciunt harum at numquam veniam officia qui quis pariatur praesentium quaerat nulla cupiditate sequi eveniet provident vitae commodi obcaecati, velit enim delectus sed vel reprehenderit expedita itaque omnis! Rerum maxime magnam fugit sint cum. Magni amet maiores velit voluptate. Debitis rem ut maxime ratione perferendis est odit possimus laboriosam nesciunt quas?',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni harum asperiores architecto deleniti maiores cum voluptates officia numquam',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni harum asperiores architecto deleniti maiores cum voluptates officia numquam dolores voluptatibus eius, eum delectus doloribus eligendi, accusamus, aspernatur est cupiditate veritatis molestias? Eligendi accusantium fugit officiis illo! Officia ab nihil voluptates quod recusandae eos odit ipsum ex, eius error exercitationem! Nesciunt harum at numquam veniam officia qui quis pariatur praesentium quaerat nulla cupiditate sequi eveniet provident vitae commodi obcaecati, velit enim delectus sed vel reprehenderit expedita itaque omnis! Rerum maxime magnam fugit sint cum. Magni amet maiores velit voluptate. Debitis rem ut maxime ratione perferendis est odit possimus laboriosam nesciunt quas?',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);
    }
}
