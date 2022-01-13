<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Category;
use App\Models\Course;
use App\Models\Post;
use App\Models\Tool;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {

    User::create([
      'name' => 'Muhammad Lutfi',
      'username' => 'muhammadlutfi',
      'email' => 'muhammadlutfi3101@gmail.com',
      'password' => bcrypt('password'),
      'is_admin' => 1,
    ]);

    User::create([
      'name' => 'Ahla Ainin Nafisah',
      'username' => 'ahlaainin',
      'email' => 'ahlaainin@gmail.com',
      'password' => bcrypt('password')
    ]);

    User::factory(3)->create();

    Category::create([
      'name' => 'Web Development',
      'slug' => 'web-development'
    ]);

    Category::create([
      'name' => 'Business',
      'slug' => 'business'
    ]);

    Category::create([
      'name' => 'Finance & Aounting',
      'slug' => 'finance-and-accounting'
    ]);

    Category::create([
      'name' => 'IT & Software',
      'slug' => 'it-and-software'
    ]);
    Category::create([
      'name' => 'Design',
      'slug' => 'design'
    ]);
    Category::create([
      'name' => 'Marketing',
      'slug' => 'marketing'
    ]);
    Category::create([
      'name' => 'Music',
      'slug' => 'music'
    ]);


    Tool::create([
      'name' => 'Figma',
      'lisence' => 'Free'
    ]);
    Tool::create([
      'name' => 'VS Code',
      'lisence' => 'Free'
    ]);
    Tool::create([
      'name' => 'Github',
      'lisence' => 'Free'
    ]);
    Tool::create([
      'name' => 'Chrome',
      'lisence' => 'Free'
    ]);


    Course::create([
      'name' => 'Jalur Belajar Frontend Web Developer',
      'author' => 'Web Programming Unpas',
      'lisence' => 'Gratis',
      'basic_learning' => 'Youtube',
    ]);

    Course::create([
      'name' => 'Mastering Laravel 8',
      'author' => 'Buildwith Angga',
      'lisence' => 'Berbayar',
      'basic_learning' => 'Website',
    ]);

    Course::create([
      'name' => 'HTML Dasar',
      'author' => 'Dicoding Indonesia',
      'lisence' => 'Gratis',
      'basic_learning' => 'Website',
    ]);

    Post::factory(50)->create();
  }
}
