<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursePostTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('course_post', function (Blueprint $table) {
      $table->foreignId('course_id')->constrained('courses');
      $table->foreignId('post_id')->constrained('posts');
      $table->primary(['post_id', 'course_id']);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('course_post');
  }
}
