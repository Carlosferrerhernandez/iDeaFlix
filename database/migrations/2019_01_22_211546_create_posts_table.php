<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->char('name', 100);
            $table->text('description');
            $table->char('url');
            $table->char('year');
            $table->enum('gender', ['Accion', 'Infantil', 'Comedia', 'Ciencia ficcion', 'Aventura', 'Suspenso', 'Romance', 'Fantasia', 'Drama', 'Animacion', 'Crimen', 'Misterio'])->default('Accion');

            /*
            * Relationship with category table
            */
            
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

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
        Schema::dropIfExists('posts');
    }
}
