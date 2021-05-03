<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $book) {
            $book->bigIncrements('id');
            $book->string('title');
            $book->bigInteger('author')->unsigned();
            $book->foreign('author')->references('id')->on('authors')->onDelete('cascade');
            $book->string('description')->nullable();
            $book->bigInteger('category')->unsigned();
            $book->foreign('category')->references('id')->on('categories')->onDelete('cascade');
            $book->float('rating')->nullable();
            $book->string("image");
            $book->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
