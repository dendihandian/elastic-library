<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBooksTables extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            // book fields
            $table->date('published_date')->nullable();
            $table->unsignedInteger('pages')->nullable();
            $table->unsignedBigInteger('publisher_id')->nullable();

            $table->integer('position')->unsigned()->nullable();
            
            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('book_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'book');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('book_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'book');
        });

        Schema::create('book_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'book');
        });
    }

    public function down()
    {
        Schema::dropIfExists('book_revisions');
        Schema::dropIfExists('book_translations');
        Schema::dropIfExists('book_slugs');
        Schema::dropIfExists('books');
    }
}
