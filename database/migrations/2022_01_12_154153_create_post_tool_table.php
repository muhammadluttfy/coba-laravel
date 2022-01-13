<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostToolTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('post_tool', function (Blueprint $table) {
      $table->foreignId('post_id')->constrained('posts');
      $table->foreignId('tool_id')->constrained('tools');
      $table->primary(['post_id', 'tool_id']);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('post_tool');
  }
}
