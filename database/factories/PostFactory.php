<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'title' => $this->faker->sentence(mt_rand(1, 3)),
      'slug' => $this->faker->slug(mt_rand(1, 3)),
      'excerpt' => $this->faker->sentence(mt_rand(18, 20)),
      // 'body' => $this->faker->paragraphs(mt_rand(5, 10)),
      // 'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5, 10))) . '</p>',
      'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))
        ->map(fn ($p) => "<p>$p</p>")
        ->implode(''),

      'salary' => $this->faker->numberBetween(10, 120),
      'salary_source' => $this->faker->firstName(),

      'user_id' => mt_rand(1, 5),
      'category_id' => mt_rand(1, 7),
    ];
  }
}
