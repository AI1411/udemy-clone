<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('short_description');
            $table->text('description');
            $table->text('outcomes')->comment('結果');
            $table->text('section');
            $table->text('requirements')->nullable();
            $table->unsignedBigInteger('price');
            $table->string('level', 50);
            $table->string('thumbnail')->nullable();
            $table->string('video_url')->nullable();
            $table->boolean('visibility')->default(true);
            $table->boolean('is_sale')->default(false);
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
