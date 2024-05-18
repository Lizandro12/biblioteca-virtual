<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('author_id');
            $table->string('publishing_company')->nullable();
            $table->string('isbn')->nullable();
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('authors');
        });

        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('author_id');
            $table->string('publishing_company')->nullable();
            $table->date('publication_date')->nullable();
            $table->string('isbn')->nullable();
            $table->text('synopsis')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->string('language')->nullable();
            $table->integer('numb_page')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->decimal('availability')->default(true);
            $table->string('contry_code')->nullable();
            $table->integer('edition')->nullable();
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('authors');
            $table->foreign('category_id')->references('id')->on('books_category');
        });

        Schema::create('autores', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birth_date')->nullable();
            $table->string('nationality')->nullable();
            $table->text('biography')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->string('photo')->nullable();
            $table->string('contato')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('books_category');

        });

        Schema::create('books_category', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
        Schema::dropIfExists('authors');
        Schema::dropIfExists('books_category');
    }
};
