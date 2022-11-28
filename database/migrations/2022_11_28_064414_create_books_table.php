<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('publisher_id');
            $table->string('book_title');
            $table->string('book_author');
            $table->integer('book_year');
            $table->text('book_synopsis');
            $table->string('book_image');
            $table->timestamps();

            // $table->foreign('publisher_id')->references
            // ('publisher_id')->on('publishers')->onUpdate('cascade')->onDelete('cascade');
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
};
